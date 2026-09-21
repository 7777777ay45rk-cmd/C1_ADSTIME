<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'About AdsTime - Our Story & Team';
$meta_description = 'AdsTime is a performance marketing agency running paid media, SEO, content, email, automation, WhatsApp, and development as one system. Meet the team and see how we work.';
$canonical_path = '/about';
$body_class = 'about-page';

require __DIR__ . '/includes/header.php';
?>

<!-- WHY: this page's own style block centres everything on mobile (story photo, "how we work"
     cards, timeline) to match the centred mobile treatment used on the location landing pages -
     scoped to body.about-page so it never touches any other page's cards/timeline. -->
<style>
  @media (max-width: 720px) {
    body.about-page #about-story { text-align: center; }
    body.about-page #about-story img { margin: 0 auto; }
    body.about-page .card { text-align: center; }
    body.about-page .card .card__icon { margin-left: auto; margin-right: auto; }
    body.about-page .team-card img { margin: 0 auto; }
    body.about-page .timeline { border-left: none; padding-left: 0; align-items: center; text-align: center; }
  }
</style>

<section class="hero" style="padding-bottom: 40px;">
  <div class="container">
    <div class="section-head center" style="max-width: 700px;">
      <span class="eyebrow">About us</span>
      <h1>We started AdsTime because most ad reports don't tell you anything useful</h1>
      <p class="lead">Too many agencies hide behind terms like "impressions" and "engagement" instead of telling clients whether their ads made money. We wanted to build something different.</p>
    </div>
  </div>
</section>

<section id="about-story" style="padding-top: 0;">
  <div class="container">
    <div class="grid grid--2" style="align-items:center;">
      <div>
        <!-- REPLACE ME: real office/team photo -->
        <img src="<?php echo BASE_PATH; ?>/assets/img/teams/team.png" alt="The AdsTime team working in the office" style="border-radius: var(--radius-lg); box-shadow: var(--shadow-md);">
      </div>
      <div>
        <h2>Our story</h2>
        <p>AdsTime started in Noida with a simple idea: agencies should be judged on results, not on how busy their reports look. We'd both worked in-house running marketing budgets and seen how often agencies optimised for looking good instead of performing well - and how rarely one team actually connected ads, SEO, content, and email into a single number.</p>
        <p>So we built AdsTime around three rules: track everything properly across every channel, report in plain numbers, and never hide a bad month behind jargon. Those rules still guide every account we run today - across paid media, SEO, content, influencer, email, automation, WhatsApp, and development - whether the client is a solo founder or a company with a marketing team of their own.</p>
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
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><path d="M3 3v18h18"/><path d="M7 15l4-5 4 3 5-7"/></svg></div>
        <h3>We measure what matters</h3>
        <p>Leads, sales, and cost per result - not just clicks and likes. If a number doesn't tie back to your revenue, we don't lead with it.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 20l1.3-3.9A8 8 0 1 1 8 19l-5 1Z"/></svg></div>
        <h3>We explain, not impress</h3>
        <p>Our reports are written so you can read them without a marketing dictionary next to you.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><circle cx="12" cy="8" r="3.3"/><path d="M4 20c1.2-4 4.2-6 8-6s6.8 2 8 6"/></svg></div>
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
        <img src="<?php echo BASE_PATH; ?>/assets/img/teams/ricky.png" alt="Photo of Ricky Yadav">
        <h3>Ricky Yadav</h3>
        <span>Co-founder, Paid Media lead</span>
      </div>
      <div class="team-card">
        <!-- REPLACE ME: real headshot -->
        <img src="<?php echo BASE_PATH; ?>/assets/img/teams/nancy.png" alt="Photo of Nancy">
        <h3>Nancy Srivastava</h3>
        <span>Co-founder, SEO &amp; Content lead</span>
      </div>
      <div class="team-card">
        <!-- REPLACE ME: real headshot -->
        <img src="<?php echo BASE_PATH; ?>/assets/img/teams/kshitij.png" alt="Photo of Kshitij">
        <h3>Kshitij Singh</h3>
        <span>Analytics &amp; automation</span>
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
        <p>AdsTime founded in Noida, starting with three small-business clients.</p>
      </div>
      <div class="timeline__item">
        <strong>2022</strong>
        <p>Crossed 40 active clients and added SEO and email as full in-house services alongside paid media.</p>
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