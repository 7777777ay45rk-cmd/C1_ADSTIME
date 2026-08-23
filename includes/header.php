<?php
/**
 * Shared <head> + nav.
 *
 * Every page must set these BEFORE including this file:
 *   $page_title        (string) - shown as <title> and og:title
 *   $meta_description  (string) - meta description and og:description
 *   $canonical_path    (string) - path only, e.g. '/pricing' or '/' or '/blog/my-post'
 *
 * Optional:
 *   $og_image           (string) - absolute URL of a social share image, defaults to a site-wide one
 *   $faq_items           (array) - [['q' => '...', 'a' => '...'], ...] to emit FAQPage JSON-LD
 *   $body_class         (string) - extra class on <body> for page-specific styling hooks
 */

require_once __DIR__ . '/config.php';

$canonical_path = $canonical_path ?? '/';
$canonical_url = SITE_DOMAIN . ($canonical_path === '/' ? '/' : rtrim($canonical_path, '/'));
// REPLACE ME: swap for a real 1200x630 social share image once you have one
$og_image = $og_image ?? 'https://placehold.co/1200x630/2954ff/ffffff?text=' . urlencode(SITE_NAME);
$active_path = $canonical_path === '/' ? '/' : rtrim($canonical_path, '/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title ?? SITE_NAME); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($meta_description ?? ''); ?>">
<!-- SEO-NOTE: canonical always points to the clean, no-.php, single version of this URL to avoid duplicate-content issues -->
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">

<!-- Open Graph -->
<meta property="og:site_name" content="<?php echo htmlspecialchars(SITE_NAME); ?>">
<meta property="og:type" content="website">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title ?? SITE_NAME); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta_description ?? ''); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
<meta name="twitter:card" content="summary_large_image">

<link rel="icon" href="<?php echo BASE_PATH; ?>/assets/img/favicon.svg" type="image/svg+xml">

<!-- WHY: preconnect shaves a DNS/TLS round trip off the Google Fonts request -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/assets/css/style.css">

<!-- SEO-NOTE: Organization schema is site-wide so every page tells search engines the same
     canonical business identity (name, logo, contact point, social profiles). -->
<script type="application/ld+json">
<?php echo json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => SITE_NAME,
    'url' => SITE_DOMAIN . '/',
    // REPLACE ME: swap for your real logo file once you have one
    'logo' => 'https://placehold.co/240x80/2954ff/ffffff?text=' . urlencode(SITE_NAME),
    'description' => 'Performance marketing agency helping businesses turn ad spend into measurable revenue.',
    'email' => CONTACT_EMAIL,
    'telephone' => CONTACT_PHONE,
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => CONTACT_ADDRESS,
    ],
    'sameAs' => [SOCIAL_LINKEDIN, SOCIAL_INSTAGRAM, SOCIAL_TWITTER],
], JSON_UNESCAPED_SLASHES); ?>
</script>

<?php if (!empty($faq_items)): ?>
<!-- SEO-NOTE: FAQPage schema can earn rich snippets (expandable Q&A) directly in Google search results -->
<script type="application/ld+json">
<?php echo json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'FAQPage',
    'mainEntity' => array_map(function ($item) {
        return [
            '@type' => 'Question',
            'name' => $item['q'],
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text' => $item['a'],
            ],
        ];
    }, $faq_items),
], JSON_UNESCAPED_SLASHES); ?>
</script>
<?php endif; ?>
</head>
<body class="<?php echo htmlspecialchars($body_class ?? ''); ?>">

<header class="site-header">
  <div class="container site-header__inner">
    <a href="<?php echo BASE_PATH; ?>/" class="logo">
      <?php echo htmlspecialchars(SITE_NAME); ?><span class="logo__dot">.</span>
    </a>

    <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="siteNav" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>

    <!-- SEO-NOTE: nav order follows buying intent, highest first - Home, Pricing (visitors ready to
         compare cost are closer to buying), Services, About, Contact (lowest intent, informational). -->
    <nav class="site-nav" id="siteNav">
      <a href="<?php echo BASE_PATH; ?>/" class="<?php echo $active_path === '/' ? 'is-active' : ''; ?>">Home</a>
      <a href="<?php echo BASE_PATH; ?>/pricing" class="<?php echo $active_path === '/pricing' ? 'is-active' : ''; ?>">Pricing</a>
      <a href="<?php echo BASE_PATH; ?>/services" class="<?php echo $active_path === '/services' ? 'is-active' : ''; ?>">Services</a>
      <a href="<?php echo BASE_PATH; ?>/about" class="<?php echo $active_path === '/about' ? 'is-active' : ''; ?>">About</a>
      <a href="<?php echo BASE_PATH; ?>/blog" class="<?php echo strpos($active_path, '/blog') === 0 ? 'is-active' : ''; ?>">Blog</a>
      <a href="<?php echo BASE_PATH; ?>/contact" class="<?php echo $active_path === '/contact' ? 'is-active' : ''; ?>">Contact</a>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary btn--sm nav-cta">Get a free audit</a>
    </nav>
  </div>
</header>
