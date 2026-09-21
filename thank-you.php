<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Thank You | ' . SITE_NAME;
$meta_description = "Thanks for reaching out to AdsTime - we'll be in touch shortly.";
$canonical_path = '/thank-you';
// SEO-NOTE: this page only exists as a post-form landing step, so it should never be indexed
// or shown in search results - only the /contact page should rank for "contact adstime" etc.
$meta_robots = 'noindex, nofollow';

require __DIR__ . '/includes/header.php';
?>

<section class="thankyou-page">
  <div class="container">
    <div class="thankyou-icon">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.4" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg>
    </div>
    <span class="eyebrow">Message received</span>
    <h1>Thanks - your message is in</h1>
    <p class="lead" style="max-width: 560px; margin-left:auto; margin-right:auto;">We'll get back to you within 2 working days with next steps, not a sales script. If it's urgent, WhatsApp or call us directly and we'll pick it up sooner.</p>

    <div class="btn-row">
      <a href="<?php echo BASE_PATH; ?>/" class="btn btn--primary">Back to homepage</a>
      <a href="<?php echo BASE_PATH; ?>/our-services" class="btn btn--ghost">Explore our services</a>
    </div>

    <p style="margin-top: 40px; color: var(--color-muted);">
      Or reach us directly at
      <a href="mailto:<?php echo htmlspecialchars(CONTACT_EMAIL); ?>"><?php echo htmlspecialchars(CONTACT_EMAIL); ?></a>
      or
      <a href="tel:<?php echo htmlspecialchars(CONTACT_PHONE_LINK); ?>"><?php echo htmlspecialchars(CONTACT_PHONE); ?></a>.
    </p>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
