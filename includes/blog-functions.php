<?php
/**
 * Blog post discovery.
 *
 * WHY: instead of maintaining a manual list of posts, we scan the /blog/ folder for .php files
 * and read each post's metadata straight out of its source code using PHP's tokenizer
 * (token_get_all). This means we never have to *execute* the post file just to get its title -
 * we just read the tokens looking for the $post_title / $post_description / $post_date
 * assignments at the top of the file. Drop a new post file in /blog/ and it appears automatically.
 */

/**
 * Pull the string value assigned to a given variable name (e.g. "post_title") from a token list.
 * Only looks at simple `$var = "..."` or `$var = '...'` assignments.
 */
function adstime_token_value(array $tokens, string $varName): ?string
{
    $count = count($tokens);
    for ($i = 0; $i < $count; $i++) {
        $token = $tokens[$i];
        if (is_array($token) && $token[0] === T_VARIABLE && $token[1] === '$' . $varName) {
            // Look ahead for "=" then a quoted string, skipping whitespace tokens
            for ($j = $i + 1; $j < $count; $j++) {
                $next = $tokens[$j];
                if ($next === '=') {
                    continue;
                }
                if (is_array($next) && $next[0] === T_WHITESPACE) {
                    continue;
                }
                if (is_array($next) && $next[0] === T_CONSTANT_ENCAPSED_STRING) {
                    // Strip the surrounding quotes
                    $raw = $next[1];
                    $quote = $raw[0];
                    $value = substr($raw, 1, -1);
                    if ($quote === '"') {
                        $value = str_replace(['\\"', '\\n', '\\\\'], ['"', ' ', '\\'], $value);
                    } else {
                        $value = str_replace(["\\'", '\\\\'], ["'", '\\'], $value);
                    }
                    return $value;
                }
                break; // not a string literal (e.g. a variable/function) - give up on this match
            }
        }
    }
    return null;
}

/**
 * Scan /blog/*.php (excluding index.php) and return metadata for each post,
 * newest first. Each item: ['slug' => ..., 'title' => ..., 'description' => ..., 'date' => ...]
 */
function adstime_get_blog_posts(): array
{
    $blogDir = __DIR__ . '/../blog';
    $files = glob($blogDir . '/*.php');
    $posts = [];

    foreach ($files as $file) {
        $basename = basename($file, '.php');
        if ($basename === 'index') {
            continue;
        }

        $source = file_get_contents($file);
        $tokens = token_get_all($source);

        $title = adstime_token_value($tokens, 'post_title') ?? ucwords(str_replace('-', ' ', $basename));
        $description = adstime_token_value($tokens, 'post_description') ?? '';
        $date = adstime_token_value($tokens, 'post_date') ?? date('Y-m-d', filemtime($file));

        $posts[] = [
            'slug' => $basename,
            'title' => $title,
            'description' => $description,
            'date' => $date,
        ];
    }

    // Newest first
    usort($posts, function ($a, $b) {
        return strcmp($b['date'], $a['date']);
    });

    return $posts;
}
