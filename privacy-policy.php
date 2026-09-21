<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Privacy Policy | ' . SITE_NAME;
$meta_description = 'How AdsTime collects, uses, and protects the personal information of visitors, leads, and clients across our website and marketing services.';
$canonical_path = '/privacy-policy';

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom: 40px;">
  <div class="container">
    <div class="section-head center" style="max-width: 700px;">
      <span class="eyebrow">Legal</span>
      <h1>Privacy Policy</h1>
    </div>
  </div>
</section>

<section style="padding-top: 0;">
  <div class="container">
    <div class="legal-page">
      <span class="legal-updated">Last updated: <?php echo date('F Y'); ?></span>

      <p>This Privacy Policy explains how <?php echo htmlspecialchars(SITE_NAME); ?> ("we", "us", "our") collects, uses, discloses, and safeguards information when you visit <?php echo htmlspecialchars(SITE_DOMAIN); ?> (the "Site") or engage us for performance marketing, web development, or related services. By using the Site, you agree to the practices described in this policy.</p>

      <h2>1. Information we collect</h2>
      <p>We collect information in the following ways:</p>
      <ul>
        <li><strong>Information you give us directly</strong> - your name, email address, phone number, company name, and any details you share through our contact form, WhatsApp, email, or phone calls.</li>
        <li><strong>Information collected automatically</strong> - through cookies, Google Tag Manager, Google Analytics, and similar tools, we collect data such as your IP address, browser type, device information, pages visited, referring URLs, and general location.</li>
        <li><strong>Information from advertising platforms</strong> - if you interact with our Google Ads, Meta Ads, or other paid campaigns, those platforms may share aggregated performance and conversion data with us.</li>
      </ul>

      <h2>2. How we use your information</h2>
      <p>We use the information we collect to:</p>
      <ul>
        <li>Respond to enquiries and provide the free audits, proposals, or services you request</li>
        <li>Operate, maintain, and improve the Site and our marketing campaigns</li>
        <li>Measure the performance of our advertising and analytics through tools such as Google Tag Manager and Google Analytics</li>
        <li>Send service-related communications, and, where you've agreed, occasional marketing updates</li>
        <li>Comply with legal obligations and protect against fraudulent or unauthorised activity</li>
      </ul>

      <h2>3. Cookies and tracking technologies</h2>
      <p>We use cookies and similar tracking technologies, including Google Tag Manager, to understand how visitors use the Site and to measure the effectiveness of our marketing. You can control or disable cookies through your browser settings; doing so may affect how parts of the Site function.</p>

      <h2>4. How we share information</h2>
      <p>We do not sell your personal information. We may share information with:</p>
      <ul>
        <li>Service providers who help us run the Site, host data, send email, or process payments, under obligations to protect your data</li>
        <li>Advertising and analytics platforms (such as Google and Meta), to the extent needed to run and measure campaigns</li>
        <li>Authorities, where required by law or to protect our rights, users, or the public</li>
      </ul>

      <h2>5. Data retention</h2>
      <p>We retain personal information for as long as necessary to provide our services, comply with legal obligations, resolve disputes, and enforce our agreements.</p>

      <h2>6. Your rights</h2>
      <p>Depending on your location, you may have the right to access, correct, or delete the personal information we hold about you, and to opt out of marketing communications at any time. To exercise these rights, contact us using the details below.</p>

      <h2>7. Data security</h2>
      <p>We take reasonable technical and organisational measures to protect your information. No method of transmission or storage is completely secure, so we cannot guarantee absolute security.</p>

      <h2>8. Third-party links</h2>
      <p>The Site may link to third-party websites. We are not responsible for the privacy practices or content of those sites.</p>

      <h2>9. Changes to this policy</h2>
      <p>We may update this Privacy Policy from time to time. The "Last updated" date above reflects the most recent revision. Continued use of the Site after changes means you accept the updated policy.</p>

      <h2>10. Contact us</h2>
      <p>For questions about this Privacy Policy or how we handle your information, reach us at <a href="mailto:<?php echo htmlspecialchars(CONTACT_EMAIL); ?>"><?php echo htmlspecialchars(CONTACT_EMAIL); ?></a> or <a href="tel:<?php echo htmlspecialchars(CONTACT_PHONE_LINK); ?>"><?php echo htmlspecialchars(CONTACT_PHONE); ?></a>, or write to us at <?php echo htmlspecialchars(CONTACT_ADDRESS); ?>.</p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
