<?php
/**
 * Services sub-page discovery (e.g. /services/seo.php, /services/web-development.php, and
 * anything else dropped into the /services/ folder going forward).
 *
 * WHY: same approach as includes/blog-functions.php - scan /services/*.php and read each page's
 * $page_title and $canonical_path straight out of its source with PHP's tokenizer, without
 * executing the file. Drop a new page into /services/ (with those two variables set near the
 * top, same as seo.php and web-development.php do) and it appears automatically in the sitemap -
 * no manual sitemap edit needed.
 */
require_once __DIR__ . '/blog-functions.php'; // reuses adstime_token_value()

function adstime_get_service_pages(): array
{
    $servicesDir = __DIR__ . '/../services';
    $files = glob($servicesDir . '/*.php');
    $pages = [];

    foreach ($files as $file) {
        $basename = basename($file, '.php');
        if ($basename === 'index') {
            continue;
        }

        $source = file_get_contents($file);
        $tokens = token_get_all($source);

        $title = adstime_token_value($tokens, 'page_title') ?? ucwords(str_replace('-', ' ', $basename));
        $path = adstime_token_value($tokens, 'canonical_path') ?? ('/services/' . $basename);

        $pages[] = [
            'slug' => $basename,
            'title' => $title,
            'path' => $path,
            'lastmod' => date('Y-m-d', filemtime($file)),
        ];
    }

    // Alphabetical by title, so sitemap order stays stable regardless of filesystem order
    usort($pages, function ($a, $b) {
        return strcmp($a['title'], $b['title']);
    });

    return $pages;
}
