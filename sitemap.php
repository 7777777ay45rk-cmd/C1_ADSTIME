<?php
/**
 * Generates sitemap.xml (served at /sitemap.xml via .htaccess rewrite).
 * SEO-NOTE: static pages are listed in the same priority order as the nav. Service sub-pages
 * (/services/*.php - seo.php, web-development.php, and anything else added there later) and
 * blog posts are both pulled in automatically so new pages show up without editing this file.
 * Service pages are given a higher priority (0.85) than blog content (0.7 for the blog index,
 * 0.6 per post) since they're core commercial pages, not editorial content.
 */
require_once __DIR__ . '/includes/config.php';
require_once __DIR__ . '/includes/blog-functions.php';
require_once __DIR__ . '/includes/services-functions.php';

header('Content-Type: application/xml; charset=UTF-8');

$pages = [
    ['path' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
    ['path' => '/pricing', 'priority' => '0.93', 'changefreq' => 'monthly'],
    ['path' => '/our-services', 'priority' => '0.95', 'changefreq' => 'monthly'],
    ['path' => '/about', 'priority' => '0.94', 'changefreq' => 'monthly'],
    ['path' => '/contact', 'priority' => '0.92', 'changefreq' => 'yearly'],
    ['path' => '/blog', 'priority' => '0.91', 'changefreq' => 'weekly'],
    ['path' => '/privacy-policy', 'priority' => '0.2', 'changefreq' => 'yearly'],
    ['path' => '/terms-conditions', 'priority' => '0.2', 'changefreq' => 'yearly'],
    // WHY: /thank-you is intentionally left out - it's a noindex post-form landing step,
    // not a page we want search engines crawling or ranking.
];

$service_pages = adstime_get_service_pages();
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
<?php foreach ($service_pages as $service): ?>
  <url>
    <loc><?php echo htmlspecialchars(SITE_DOMAIN . $service['path']); ?></loc>
    <lastmod><?php echo htmlspecialchars($service['lastmod']); ?></lastmod>
    <changefreq>monthly</changefreq>
    <priority>0.85</priority>
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
