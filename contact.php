<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Contact ADSTIME - Get a Free Ad Audit';
$meta_description = 'Get in touch with ADSTIME for a free audit of your Google Ads or Meta Ads account, or to ask about our plans.';
$canonical_path = '/contact';

// WHY: simple server-side handling, no database - this is a marketing site, not an app.
// Swap the mail() call below for a real email service (e.g. an SMTP provider's API) once you're live,
// since mail() only works if the server itself is configured to send mail.
$form_status = null; // 'success' | 'error' | null
$form_values = ['name' => '', 'email' => '', 'company' => '', 'message' => ''];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $form_values['name'] = trim($_POST['name'] ?? '');
    $form_values['email'] = trim($_POST['email'] ?? '');
    $form_values['company'] = trim($_POST['company'] ?? '');
    $form_values['message'] = trim($_POST['message'] ?? '');
    $honeypot = trim($_POST['website'] ?? ''); // WHY: hidden field real visitors never fill in; bots often do

    $isValid = $honeypot === ''
        && $form_values['name'] !== ''
        && filter_var($form_values['email'], FILTER_VALIDATE_EMAIL)
        && $form_values['message'] !== '';

    if ($isValid) {
        $body = "Name: {$form_values['name']}\nEmail: {$form_values['email']}\nCompany: {$form_values['company']}\n\n{$form_values['message']}";
        $headers = 'From: ' . CONTACT_EMAIL . "\r\nReply-To: " . $form_values['email'];
        @mail(CONTACT_EMAIL, 'New contact form message - ADSTIME', $body, $headers);

        $form_status = 'success';
        $form_values = ['name' => '', 'email' => '', 'company' => '', 'message' => '']; // clear on success
    } else {
        $form_status = 'error';
    }
}

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom: 60px;">
  <div class="container">
    <div class="grid grid--2" style="align-items:flex-start; gap: 56px;">

      <div>
        <span class="eyebrow">Contact</span>
        <h1>Let's talk about your ads</h1>
        <p class="lead">Tell us a bit about your business and current ad spend (if any). We'll reply within a couple of working days with next steps, not a sales script.</p>

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

      <div class="card">
        <?php if ($form_status === 'success'): ?>
          <div class="form-success">Thanks - your message is in. We'll get back to you within 2 working days.</div>
        <?php elseif ($form_status === 'error'): ?>
          <div class="form-error">Please fill in your name, a valid email, and a short message.</div>
        <?php endif; ?>

        <form method="post" action="<?php echo BASE_PATH; ?>/contact" novalidate>
          <div class="form-field">
            <label for="name">Full name</label>
            <input type="text" id="name" name="name" value="<?php echo htmlspecialchars($form_values['name']); ?>" required>
          </div>
          <div class="form-field">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($form_values['email']); ?>" required>
          </div>
          <div class="form-field">
            <label for="company">Company (optional)</label>
            <input type="text" id="company" name="company" value="<?php echo htmlspecialchars($form_values['company']); ?>">
          </div>
          <div class="form-field">
            <label for="message">What do you need help with?</label>
            <textarea id="message" name="message" required><?php echo htmlspecialchars($form_values['message']); ?></textarea>
          </div>
          <!-- WHY: honeypot field, hidden from real users via CSS, tricks basic spam bots -->
          <div class="form-field honeypot-field" aria-hidden="true">
            <label for="website">Leave this field empty</label>
            <input type="text" id="website" name="website" tabindex="-1" autocomplete="off">
          </div>
          <button type="submit" class="btn btn--primary btn--block">Send message</button>
        </form>
      </div>

    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
