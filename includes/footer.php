<?php
// WHY: header.php is always included before footer.php on every page, so config.php
// (and BASE_PATH) is already loaded by the time we get here.
?>
<footer class="site-footer">
  <div class="container footer__grid">
    <div class="footer__brand">
      <!-- WHY: the footer sits on a dark background, so it uses assets/img/logo.webp - a
           separate file from the header's assets/img/logo1.webp - rather than the same logo
           twice. Swap assets/img/logo.webp for a new file (keep that exact filename, or
           update the src below) whenever the footer logo needs to change again. -->
      <a href="<?php echo BASE_PATH; ?>/" class="logo logo--footer"><img src="<?php echo BASE_PATH; ?>/assets/img/logo.webp" alt="<?php echo htmlspecialchars(SITE_NAME); ?>" class="logo__img"></a>
      <p><?php echo htmlspecialchars(SITE_TAGLINE); ?>. We run ads, track results, and report back in plain language.</p>
      <div class="footer__social">
        <a href="<?php echo htmlspecialchars(SOCIAL_FACEBOOK); ?>" class="footer__social-link" aria-label="AdsTime on Facebook" rel="noopener" target="_blank">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M14 13.5h2.5l1-4H14v-2c0-1.03 0-2 2-2h1.5V2.14C17.17 2.1 15.95 2 14.66 2 11.96 2 10 3.66 10 6.7v2.8H7v4h3V22h4v-8.5Z"/></svg>
        </a>
        <a href="<?php echo htmlspecialchars(SOCIAL_LINKEDIN); ?>" class="footer__social-link" aria-label="AdsTime on LinkedIn" rel="noopener" target="_blank">
          <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M6.94 5a2 2 0 1 1-4-.002 2 2 0 0 1 4 .002ZM7 8.48H3V21h4V8.48Zm6.32 0H9.34V21h3.94v-6.57c0-3.66 4.77-3.96 4.77 0V21H22v-7.93c0-6.17-7.06-5.94-8.68-2.91V8.48Z"/></svg>
        </a>
        <a href="<?php echo htmlspecialchars(SOCIAL_INSTAGRAM); ?>" class="footer__social-link" aria-label="AdsTime on Instagram" rel="noopener" target="_blank">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" aria-hidden="true"><rect x="3" y="3" width="18" height="18" rx="5"/><circle cx="12" cy="12" r="4"/><circle cx="17.2" cy="6.8" r="1" fill="currentColor" stroke="none"/></svg>
        </a>
      </div>
    </div>

    <div class="footer__col">
      <h3>Site</h3>
      <a href="<?php echo BASE_PATH; ?>/">Home</a>
      <a href="<?php echo BASE_PATH; ?>/pricing">Pricing</a>
      <a href="<?php echo BASE_PATH; ?>/our-services">Services</a>
      <a href="<?php echo BASE_PATH; ?>/about">About</a>
      <a href="<?php echo BASE_PATH; ?>/blog">Blog</a>
      <a href="<?php echo BASE_PATH; ?>/contact">Contact</a>
    </div>

    <div class="footer__col">
      <h3>Legal</h3>
      <a href="<?php echo BASE_PATH; ?>/privacy-policy">Privacy Policy</a>
      <a href="<?php echo BASE_PATH; ?>/terms-conditions">Terms &amp; Conditions</a>
    </div>

    <div class="footer__col">
      <h3>Contact</h3>
      <a href="mailto:<?php echo htmlspecialchars(CONTACT_EMAIL); ?>"><?php echo htmlspecialchars(CONTACT_EMAIL); ?></a>
      <a href="tel:<?php echo htmlspecialchars(CONTACT_PHONE_LINK); ?>"><?php echo htmlspecialchars(CONTACT_PHONE); ?></a>
      <span><?php echo htmlspecialchars(CONTACT_ADDRESS); ?></span>
     
    </div>
  </div>

  <div class="container footer__bottom">
    <span>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars(SITE_NAME); ?>. All rights reserved.</span>
    <span>Made in India.</span>
  </div>
</footer>

<script src="<?php echo BASE_PATH; ?>/assets/js/main.js" defer></script>
</body>
</html>
