<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Contact AdsTime - Book a Free Ad Audit Call';
$meta_description = 'Book a free 30-minute call with AdsTime to get a free audit of your Google Ads or Meta Ads account, or to ask about our plans.';
$canonical_path = '/contact';

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom: 60px;">
  <div class="container">
    <div class="grid grid--2" style="align-items:flex-start; gap: 56px;">

      <div>
        <span class="eyebrow">Contact</span>
        <h1>Let's talk about your ads</h1>
        <p class="lead">Pick a time that works for you and we'll spend 30 minutes on your business and current ad spend (if any) - next steps, not a sales script.</p>

        <div class="contact-info" style="margin-top: 36px;">
          <div class="contact-info__item">
            <div class="card__icon" style="margin-bottom:0;">✉️</div>
            <div>
              <strong>Email</strong><br>
              <a href="mailto:<?php echo htmlspecialchars(CONTACT_EMAIL); ?>"><?php echo htmlspecialchars(CONTACT_EMAIL); ?></a>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="card__icon" style="margin-bottom:0;">📞</div>
            <div>
              <strong>Phone</strong><br>
              <a href="tel:<?php echo htmlspecialchars(CONTACT_PHONE_LINK); ?>"><?php echo htmlspecialchars(CONTACT_PHONE); ?></a>
            </div>
          </div>
          <div class="contact-info__item">
            <div class="card__icon" style="margin-bottom:0;">📍</div>
            <div>
              <strong>Office</strong><br>
              <?php echo htmlspecialchars(CONTACT_ADDRESS); ?>
            </div>
          </div>
        </div>
      </div>

      <div class="card" style="padding: 8px;">
        <!-- Calendly inline widget begin -->
        <div class="calendly-inline-widget" data-url="https://calendly.com/adstimemarketingagency/30min" style="min-width:320px;height:700px;"></div>
        <script type="text/javascript" src="https://assets.calendly.com/assets/external/widget.js" async></script>
        <!-- Calendly inline widget end -->
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>