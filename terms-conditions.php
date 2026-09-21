<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Terms & Conditions | ' . SITE_NAME;
$meta_description = 'The terms and conditions that govern your use of the AdsTime website and our performance marketing, SEO, and web development services.';
$canonical_path = '/terms-conditions';

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom: 40px;">
  <div class="container">
    <div class="section-head center" style="max-width: 700px;">
      <span class="eyebrow">Legal</span>
      <h1>Terms &amp; Conditions</h1>
    </div>
  </div>
</section>

<section style="padding-top: 0;">
  <div class="container">
    <div class="legal-page">
      <span class="legal-updated">Last updated: <?php echo date('F Y'); ?></span>

      <p>These Terms &amp; Conditions ("Terms") govern your use of <?php echo htmlspecialchars(SITE_DOMAIN); ?> (the "Site") and any services provided by <?php echo htmlspecialchars(SITE_NAME); ?> ("we", "us", "our"). By using the Site or engaging our services, you agree to these Terms.</p>

      <h2>1. Use of the Site</h2>
      <p>You may use the Site for lawful purposes only. You agree not to misuse the Site, attempt to gain unauthorised access to it, or use it in any way that could damage, disable, or impair its operation.</p>

      <h2>2. Services</h2>
      <p>AdsTime provides performance marketing services including paid media, SEO, content marketing, influencer marketing, email marketing, marketing automation, WhatsApp marketing, and web &amp; product development. The specific scope, deliverables, timelines, and fees for any engagement are set out separately in a proposal, statement of work, or signed agreement between AdsTime and the client, which takes precedence over these general Terms.</p>

      <h2>3. No guaranteed results</h2>
      <p>While we work to improve our clients' marketing performance using industry best practices, digital marketing outcomes (such as rankings, ad performance, traffic, leads, or revenue) depend on many factors outside our control, including platform algorithm changes, market conditions, and competitor activity. We do not guarantee specific results unless explicitly agreed in writing.</p>

      <h2>4. Client responsibilities</h2>
      <p>Clients are responsible for providing timely access, approvals, brand assets, and accurate information needed to deliver services, and for ensuring their own products, services, and marketing content comply with applicable laws and advertising platform policies.</p>

      <h2>5. Payments</h2>
      <p>Fees, billing cycles, and payment terms are set out in the applicable proposal or agreement. Late payments may result in a pause of services until outstanding amounts are settled.</p>

      <h2>6. Intellectual property</h2>
      <p>All content on the Site - including text, graphics, logos, and design - is owned by AdsTime or its licensors and may not be copied or reused without permission. Ownership of deliverables created for a client (such as campaign assets or websites) is governed by the applicable service agreement, and typically transfers to the client upon full payment unless stated otherwise.</p>

      <h2>7. Third-party platforms</h2>
      <p>Our services may involve running campaigns on third-party platforms such as Google Ads, Meta Ads, and WhatsApp Business. Use of those platforms is also subject to their own terms and policies, which are outside our control.</p>

      <h2>8. Limitation of liability</h2>
      <p>To the fullest extent permitted by law, AdsTime is not liable for any indirect, incidental, or consequential damages arising from use of the Site or our services, including loss of profits, data, or business opportunities.</p>

      <h2>9. Termination</h2>
      <p>Either party may terminate an ongoing engagement in accordance with the notice period set out in the applicable agreement. Fees for work completed up to the termination date remain payable.</p>

      <h2>10. Changes to these Terms</h2>
      <p>We may update these Terms from time to time. The "Last updated" date above reflects the most recent revision. Continued use of the Site after changes means you accept the updated Terms.</p>

      <h2>11. Governing law</h2>
      <p>These Terms are governed by the laws of India, and any disputes will be subject to the exclusive jurisdiction of the courts in Mumbai, Maharashtra.</p>

      <h2>12. Contact us</h2>
      <p>Questions about these Terms can be sent to <a href="mailto:<?php echo htmlspecialchars(CONTACT_EMAIL); ?>"><?php echo htmlspecialchars(CONTACT_EMAIL); ?></a> or <a href="tel:<?php echo htmlspecialchars(CONTACT_PHONE_LINK); ?>"><?php echo htmlspecialchars(CONTACT_PHONE); ?></a>.</p>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
