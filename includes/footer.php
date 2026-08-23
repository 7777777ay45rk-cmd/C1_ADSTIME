<?php
// WHY: header.php is always included before footer.php on every page, so config.php
// (and BASE_PATH) is already loaded by the time we get here.
?>
<footer class="site-footer">
  <div class="container footer__grid">
    <div class="footer__brand">
      <a href="<?php echo BASE_PATH; ?>/" class="logo logo--footer"><?php echo htmlspecialchars(SITE_NAME); ?><span class="logo__dot">.</span></a>
      <p><?php echo htmlspecialchars(SITE_TAGLINE); ?>. We run ads, track results, and report back in plain language.</p>
      <div class="footer__social">
        <!-- REPLACE ME: point these at your real social profiles (also update includes/config.php) -->
        <a href="<?php echo htmlspecialchars(SOCIAL_LINKEDIN); ?>" aria-label="ADSTIME on LinkedIn" rel="noopener" target="_blank">in</a>
        <a href="<?php echo htmlspecialchars(SOCIAL_INSTAGRAM); ?>" aria-label="ADSTIME on Instagram" rel="noopener" target="_blank">ig</a>
        <a href="<?php echo htmlspecialchars(SOCIAL_TWITTER); ?>" aria-label="ADSTIME on Twitter" rel="noopener" target="_blank">tw</a>
      </div>
    </div>

    <div class="footer__col">
      <h3>Site</h3>
      <a href="<?php echo BASE_PATH; ?>/">Home</a>
      <a href="<?php echo BASE_PATH; ?>/pricing">Pricing</a>
      <a href="<?php echo BASE_PATH; ?>/services">Services</a>
      <a href="<?php echo BASE_PATH; ?>/about">About</a>
      <a href="<?php echo BASE_PATH; ?>/blog">Blog</a>
      <a href="<?php echo BASE_PATH; ?>/contact">Contact</a>
    </div>

    <div class="footer__col">
      <h3>Contact</h3>
      <a href="mailto:<?php echo htmlspecialchars(CONTACT_EMAIL); ?>"><?php echo htmlspecialchars(CONTACT_EMAIL); ?></a>
      <a href="tel:<?php echo htmlspecialchars(CONTACT_PHONE_LINK); ?>"><?php echo htmlspecialchars(CONTACT_PHONE); ?></a>
      <span><?php echo htmlspecialchars(CONTACT_ADDRESS); ?></span>
      <a href="<?php echo htmlspecialchars(APP_URL); ?>" rel="noopener">Client login &rarr;</a>
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
