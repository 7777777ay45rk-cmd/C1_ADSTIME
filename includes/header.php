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
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start': new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0], j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src= 'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f); })(window,document,'script','dataLayer','<?php echo GTM_ID; ?>');</script>
<!-- End Google Tag Manager -->
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo htmlspecialchars($page_title ?? SITE_NAME); ?></title>
<meta name="description" content="<?php echo htmlspecialchars($meta_description ?? ''); ?>">
<!-- SEO-NOTE: canonical always points to the clean, no-.php, single version of this URL to avoid duplicate-content issues -->
<link rel="canonical" href="<?php echo htmlspecialchars($canonical_url); ?>">
<?php if (!empty($meta_robots)): ?>
<meta name="robots" content="<?php echo htmlspecialchars($meta_robots); ?>">
<?php endif; ?>

<!-- Open Graph -->
<meta property="og:site_name" content="<?php echo htmlspecialchars(SITE_NAME); ?>">
<meta property="og:type" content="website">
<meta property="og:locale" content="en_IN">
<meta property="og:title" content="<?php echo htmlspecialchars($page_title ?? SITE_NAME); ?>">
<meta property="og:description" content="<?php echo htmlspecialchars($meta_description ?? ''); ?>">
<meta property="og:url" content="<?php echo htmlspecialchars($canonical_url); ?>">
<meta property="og:image" content="<?php echo htmlspecialchars($og_image); ?>">
<meta name="twitter:card" content="summary_large_image">

<link rel="icon" href="<?php echo BASE_PATH; ?>/assets/img/favicon.png" type="image/svg+xml">
<link rel="apple-touch-icon" href="<?php echo BASE_PATH; ?>/assets/img/favicon.png">
<meta name="theme-color" content="#4338CA">

<!-- WHY self-hosted + preloaded (no more Google Fonts <link>): loading fonts from
     fonts.googleapis.com meant the browser had to open a whole extra connection (DNS + TLS +
     request) to a different server before it even started downloading the font itself - that
     round trip was the real cause of the late pop-in, not just a display-mode setting. These
     <link rel="preload"> tags tell the browser to start fetching the font files (now served
     from this same site, see /assets/css/style.css for the @font-face rules) immediately,
     in parallel with the HTML, so they're normally ready before the page needs to paint any
     text with them - the correct font from the first frame, not a fallback-then-swap. -->
<link rel="preload" href="<?php echo BASE_PATH; ?>/assets/fonts/plusjakartasans-variable.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo BASE_PATH; ?>/assets/fonts/unbounded-variable.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo BASE_PATH; ?>/assets/fonts/jetbrainsmono-variable.woff2" as="font" type="font/woff2" crossorigin>

<link rel="stylesheet" href="<?php echo BASE_PATH; ?>/assets/css/style.css">

<!-- SEO-NOTE: Organization schema is site-wide so every page tells search engines the same
     canonical business identity (name, logo, contact point, social profiles). -->
<script type="application/ld+json">
<?php echo json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'ProfessionalService',
    'name' => SITE_NAME,
    'url' => SITE_DOMAIN . '/',
    'logo' => SITE_DOMAIN . BASE_PATH . '/assets/img/logo1.webp',
    'image' => SITE_DOMAIN . BASE_PATH . '/assets/img/logo1.webp',
    'description' => 'Performance marketing agency helping businesses turn ad spend into measurable revenue across paid media, SEO, content, email, automation, WhatsApp, and web development.',
    'email' => CONTACT_EMAIL,
    'telephone' => CONTACT_PHONE,
    'priceRange' => '$$',
    'areaServed' => 'IN',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => CONTACT_ADDRESS,
        'addressCountry' => 'IN',
    ],
    'sameAs' => [SOCIAL_FACEBOOK, SOCIAL_LINKEDIN, SOCIAL_INSTAGRAM],
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=<?php echo GTM_ID; ?>" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<!-- WHY: one floating WhatsApp button, included site-wide via header.php so every page gets it
     without repeating markup. Fixed to the bottom-left corner per brand request; z-index kept high
     so it stays above section content but below the mobile nav overlay if that's ever raised higher. -->
<a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=<?php echo urlencode('Hi AdsTime, I\'d like to know more about your services.'); ?>"
   class="whatsapp-float" target="_blank" rel="noopener" aria-label="Chat with AdsTime on WhatsApp">
  <svg viewBox="0 0 32 32" fill="currentColor" aria-hidden="true"><path d="M16.001 3C9.096 3 3.5 8.596 3.5 15.5c0 2.42.687 4.68 1.879 6.598L3 29l7.087-2.338A12.44 12.44 0 0 0 16.001 28C22.906 28 28.5 22.404 28.5 15.5S22.906 3 16.001 3zm0 22.7a10.16 10.16 0 0 1-5.184-1.42l-.372-.221-3.845 1.269 1.287-3.746-.242-.385a10.15 10.15 0 0 1-1.545-5.397c0-5.635 4.585-10.22 10.221-10.22 5.635 0 10.22 4.585 10.22 10.22 0 5.636-4.585 10.221-10.221 10.221zm5.6-7.646c-.307-.153-1.812-.894-2.093-.996-.281-.102-.485-.153-.69.154-.204.306-.792.995-.97 1.2-.179.204-.358.23-.664.077-.307-.154-1.295-.477-2.468-1.523-.912-.813-1.528-1.817-1.707-2.124-.179-.307-.019-.473.134-.626.138-.137.307-.358.46-.537.153-.18.204-.307.307-.512.102-.204.05-.384-.026-.537-.076-.153-.69-1.663-.945-2.278-.249-.598-.502-.517-.69-.527-.179-.008-.383-.01-.588-.01-.204 0-.537.077-.818.384-.281.307-1.073 1.049-1.073 2.559s1.098 2.968 1.251 3.173c.153.204 2.16 3.298 5.234 4.625.731.316 1.301.505 1.746.646.734.233 1.402.2 1.93.121.589-.088 1.812-.741 2.068-1.457.256-.716.256-1.328.179-1.457-.076-.128-.281-.204-.588-.358z"/></svg>
</a>

<header class="site-header">
  <div class="container site-header__inner">
    <a href="<?php echo BASE_PATH; ?>/" class="logo">
  <img src="<?php echo BASE_PATH; ?>/assets/img/logo1.webp" alt="<?php echo htmlspecialchars(SITE_NAME); ?>" class="logo__img">
</a>

    <button class="nav-toggle" id="navToggle" aria-expanded="false" aria-controls="siteNav" aria-label="Open menu">
      <span></span><span></span><span></span>
    </button>

    <!-- SEO-NOTE: Home/Pricing/Services/Blog still exist and are fully linked from the footer's
         Site column - the header nav is deliberately narrow (Marketing / Technology / Industry
         mega-menus, About, Contact) to keep the primary bar scannable. Every mega-menu item
         below is one <a> - to add a new page under a dropdown, copy one <a> block and point it
         at the new URL; no CSS/JS changes needed. -->
    <nav class="site-nav" id="siteNav">

      <div class="nav-item nav-item--dropdown">
        <button type="button" class="nav-drop-trigger <?php echo in_array($active_path, ['/our-services', '/services/seo']) ? 'is-active' : ''; ?>" aria-expanded="false" aria-controls="megaMarketing">
          Marketing
          <svg class="nav-caret-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="nav-mega nav-mega--wide" id="megaMarketing">
          <div class="nav-mega__grid">
            <a href="<?php echo BASE_PATH; ?>/services/google-ads-ppc-agency" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.3" fill="#4338CA" stroke="none"/></svg></span>
              <span><strong>Google Ads &amp; PPC</strong><small>Search, Shopping &amp; Performance Max</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/services/seo" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></span>
              <span><strong>SEO</strong><small>Rankings that keep paying after ads stop</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/services/content-marketing" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(192,38,211,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#C026D3" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></span>
              <span><strong>Content Marketing</strong><small>Editorial, video &amp; distribution</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/our-services#influencer" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><circle cx="12" cy="8" r="3.3"/><path d="M4 20c1.2-4 4.2-6 8-6s6.8 2 8 6"/></svg></span>
              <span><strong>Influencer Marketing</strong><small>Creator partnerships that convert</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/our-services#email" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></span>
              <span><strong>Email Marketing</strong><small>Lifecycle flows &amp; campaigns</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/our-services#whatsapp" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 20l1.3-3.9A8 8 0 1 1 8 19l-5 1Z"/></svg></span>
              <span><strong>WhatsApp Marketing</strong><small>Broadcasts, flows &amp; click-to-chat ads</small></span>
            </a>
          </div>
          <a href="<?php echo BASE_PATH; ?>/our-services" class="nav-mega__footer">View all services <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>

      <div class="nav-item nav-item--dropdown">
        <button type="button" class="nav-drop-trigger <?php echo $active_path === '/services/web-development' ? 'is-active' : ''; ?>" aria-expanded="false" aria-controls="megaTechnology">
          Technology
          <svg class="nav-caret-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="nav-mega" id="megaTechnology">
          <div class="nav-mega__grid nav-mega__grid--1col">
            <a href="<?php echo BASE_PATH; ?>/services/web-development" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(51,65,85,0.08)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M8 6 2 12l6 6M16 6l6 6-6 6M14 4l-4 16"/></svg></span>
              <span><strong>Web &amp; Product Development</strong><small>Sites &amp; apps built to carry every channel</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/services/marketing-automation" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M9 17H7a5 5 0 1 1 0-10h2M15 7h2a5 5 0 1 1 0 10h-2M8 12h8"/></svg></span>
              <span><strong>Marketing Automation</strong><small>CRM workflows &amp; lead scoring</small></span>
            </a>
          </div>
        </div>
      </div>

      <div class="nav-item nav-item--dropdown">
        <button type="button" class="nav-drop-trigger" aria-expanded="false" aria-controls="megaIndustry">
          Industry
          <svg class="nav-caret-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
        </button>
        <div class="nav-mega nav-mega--wide" id="megaIndustry">
          <div class="nav-mega__grid">
            <a href="<?php echo BASE_PATH; ?>/#industry-ecommerce" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/><path d="M2.5 4h2.5l2.4 11.5h9.9L20 8H6.3"/></svg></span>
              <span><strong>E-commerce &amp; D2C</strong><small>Stores built to convert, not just launch</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/#industry-real-estate" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg></span>
              <span><strong>Real Estate</strong><small>Lead pipelines for developers &amp; agents</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/#industry-healthcare" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><path d="M3 12h4l2-5 4 10 2-5h6"/></svg></span>
              <span><strong>Healthcare &amp; Wellness</strong><small>Trust-first marketing for clinics &amp; brands</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/#industry-local" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M12 21s-7-6.3-7-11a7 7 0 0 1 14 0c0 4.7-7 11-7 11z"/><circle cx="12" cy="10" r="2.4"/></svg></span>
              <span><strong>Local &amp; Service Businesses</strong><small>Win the "near me" search &amp; the call</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/#industry-it-saas" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M9 17H7a5 5 0 1 1 0-10h2M15 7h2a5 5 0 1 1 0 10h-2M8 12h8"/></svg></span>
              <span><strong>IT &amp; SaaS</strong><small>Demo bookings on long sales cycles</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/#industry-manufacturing" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(51,65,85,0.08)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><rect x="3" y="10" width="7" height="10"/><rect x="14" y="6" width="7" height="14"/><path d="M3 10l4-4 3 3 4-5 7 6"/></svg></span>
              <span><strong>Manufacturing &amp; Export/B2B</strong><small>Qualified leads for long RFQ cycles</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/#industry-hospitality" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(192,38,211,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#C026D3" stroke-width="1.8"><path d="M3 21V10l9-6 9 6v11M8 21v-6h8v6"/></svg></span>
              <span><strong>Hospitality &amp; Travel</strong><small>Bookings tuned to seasonal demand</small></span>
            </a>
            <a href="<?php echo BASE_PATH; ?>/#industry-education" class="nav-mega__item">
              <span class="nav-mega__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M2 9l10-5 10 5-10 5-10-5z"/><path d="M6 11v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"/></svg></span>
              <span><strong>Education &amp; EdTech</strong><small>Enrollment funnels for admissions cycles</small></span>
            </a>
          </div>
          <a href="<?php echo BASE_PATH; ?>/contact" class="nav-mega__footer">Not sure which fits? Talk to us <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M5 12h14M13 6l6 6-6 6"/></svg></a>
        </div>
      </div>

      <a href="<?php echo BASE_PATH; ?>/about" class="<?php echo $active_path === '/about' ? 'is-active' : ''; ?>">About</a>
      <a href="<?php echo BASE_PATH; ?>/contact" class="<?php echo $active_path === '/contact' ? 'is-active' : ''; ?>">Contact</a>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary btn--sm nav-cta">Get a free audit</a>
    </nav>
  </div>
</header>