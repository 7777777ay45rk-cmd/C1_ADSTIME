<?php
/**
 * Generates sitemap.xml (served at /sitemap.xml via .htaccess rewrite).
 * SEO-NOTE: static pages are listed in the same priority order as the nav; blog posts are
 * pulled in automatically so new posts show up in the sitemap without editing this file.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/blog-functions.php';

header('Content-Type: application/xml; charset=UTF-8');

$pages = [
    ['path' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ['path' => '/pricing', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['path' => '/services', 'priority' => '0.9', 'changefreq' => 'monthly'],
    ['path' => '/about', 'priority' => '0.6', 'changefreq' => 'monthly'],
    ['path' => '/contact', 'priority' => '0.5', 'changefreq' => 'yearly'],
    ['path' => '/blog', 'priority' => '0.7', 'changefreq' => 'weekly'],
];

$posts = adstime_get_blog_posts();

echo '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($pages as $page): ?>
  <url>
    <loc><?php echo htmlspecialchars(SITE_DOMAIN . $page['path']); ?></loc>
    <changefreq><?php echo $page['changefreq']; ?></changefreq>
    <priority><?php echo $page['priority']; ?></priority>
  </url>
<?php endforeach; ?>
<?php foreach ($posts as $post): ?>
  <url>
    <loc><?php echo htmlspecialchars(SITE_DOMAIN . '/blog/' . $post['slug']); ?></loc>
    <lastmod><?php echo htmlspecialchars($post['date']); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.6</priority>
  </url>
<?php endforeach; ?>
</urlset>
