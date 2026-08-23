<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'About ADSTIME - Our Story & Team';
$meta_description = 'ADSTIME is a performance marketing agency built to be straight with clients about what\'s working. Meet the team and see how we work.';
$canonical_path = '/about';

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom: 40px;">
  <div class="container">
    <div class="section-head center" style="max-width: 700px;">
      <span class="eyebrow">About us</span>
      <h1>We started ADSTIME because most ad reports don't tell you anything useful</h1>
      <p class="lead">Too many agencies hide behind terms like "impressions" and "engagement" instead of telling clients whether their ads made money. We wanted to build something different.</p>
    </div>
  </div>
</section>

<section style="padding-top: 0;">
  <div class="container">
    <div class="grid grid--2" style="align-items:center;">
      <div>
        <!-- REPLACE ME: real office/team photo -->
        <img src="https://placehold.co/600x420/eef1ff/2954ff?text=Our+Team" alt="The ADSTIME team working in the office" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
      </div>
      <div>
        <h2>Our story</h2>
        <p>ADSTIME started in Mumbai with a simple idea: agencies should be judged on results, not on how busy their reports look. We'd both worked in-house running ad budgets and seen how often agencies optimised for looking good instead of performing well.</p>
        <p>So we built ADSTIME around three rules: track everything properly, report in plain numbers, and never hide a bad month behind jargon. Those rules still guide every account we run today, whether the client is a solo founder or a company with a marketing team of their own.</p>
      </div>
    </div>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How we work</span>
      <h2>What you can expect from us</h2>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon">📏</div>
        <h3>We measure what matters</h3>
        <p>Leads, sales, and cost per result - not just clicks and likes. If a number doesn't tie back to your revenue, we don't lead with it.</p>
      </div>
      <div class="card">
        <div class="card__icon">💬</div>
        <h3>We explain, not impress</h3>
        <p>Our reports are written so you can read them without a marketing dictionary next to you.</p>
      </div>
      <div class="card">
        <div class="card__icon">🤝</div>
        <h3>We fit your size</h3>
        <p>We work the same way whether your monthly budget is ₹30,000 or ₹30 lakh - the plan scales, the honesty doesn't.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Team</span>
      <h2>The people running your account</h2>
      <p>A small team on purpose, so your account is never handled by someone you've never spoken to.</p>
    </div>
    <div class="grid grid--3">
      <div class="team-card">
        <!-- REPLACE ME: real headshot -->
        <img src="https://placehold.co/300x300/10152b/ffffff?text=AK" alt="Photo of Arjun Kapoor">
        <h3>Arjun Kapoor</h3>
        <span>Co-founder, Google Ads lead</span>
      </div>
      <div class="team-card">
        <!-- REPLACE ME: real headshot -->
        <img src="https://placehold.co/300x300/10152b/ffffff?text=SN" alt="Photo of Sana Nair">
        <h3>Sana Nair</h3>
        <span>Co-founder, Meta Ads lead</span>
      </div>
      <div class="team-card">
        <!-- REPLACE ME: real headshot -->
        <img src="https://placehold.co/300x300/10152b/ffffff?text=VP" alt="Photo of Vikram Pillai">
        <h3>Vikram Pillai</h3>
        <span>Analytics &amp; tracking</span>
      </div>
    </div>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Timeline</span>
      <h2>Where we've been</h2>
    </div>
    <div class="timeline" style="max-width: 640px; margin: 0 auto;">
      <div class="timeline__item">
        <strong>2021</strong>
        <p>ADSTIME founded in Mumbai, starting with three small-business clients.</p>
      </div>
      <div class="timeline__item">
        <strong>2022</strong>
        <p>Crossed 40 active clients and added Meta Ads as a full in-house service.</p>
      </div>
      <div class="timeline__item">
        <strong>2024</strong>
        <p>Built our own reporting dashboard so clients see live numbers, not just monthly PDFs.</p>
      </div>
      <div class="timeline__item">
        <strong>Today</strong>
        <p>Managing ad accounts for over 120 businesses, from first-time advertisers to multi-market brands.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="cta-band">
      <h2>Want to work with us?</h2>
      <p>Tell us about your business and we'll tell you honestly if we're a good fit.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get in touch</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
