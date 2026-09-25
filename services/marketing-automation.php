<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Marketing Automation Agency & Automation Services | AdsTime';
$meta_description = 'AdsTime is a marketing automation agency running CRM workflows, lead scoring, and follow-up journeys across every channel as one system - so leads get followed up automatically, not manually. See our marketing automation services and what clients say.';
$canonical_path = '/services/marketing-automation';

// SEO-NOTE: FAQPage schema is added automatically by header.php whenever $faq_items is set -
// the same array also drives the visible accordion further down this page.
$faq_items = [
    [
        'q' => 'What does a marketing automation agency actually set up?',
        'a' => 'A proper marketing automation agency builds the full loop: your CRM configured to capture every lead source, lead scoring so sales knows who to call first, and automated journeys across email and WhatsApp that follow up the moment someone shows interest - not a static welcome email and nothing after. The goal is that no lead sits untouched because a human forgot to follow up.',
    ],
    [
        'q' => 'How much do marketing automation services cost?',
        'a' => 'Most agencies price around setup complexity plus ongoing management - a CRM build with a handful of core workflows costs less than a full multi-channel journey covering email, WhatsApp, and lead scoring together. For a realistic starting range covering CRM setup, lead scoring, and a first set of nurture workflows, expect Rs. 20,000-35,000/month, scaling with the number of journeys and channels involved.',
    ],
    [
        'q' => 'Do you build the automation inside our existing CRM, or set up a new one?',
        'a' => 'Both are available. If you already run HubSpot, Zoho, or a similar CRM, we build inside it so nothing you already have gets thrown away. If you don\'t have one yet, we help pick and set up a CRM sized to your team and budget before building any workflows on top of it.',
    ],
    [
        'q' => 'Is marketing automation worth it if we already have a sales team?',
        'a' => 'It makes the sales team\'s time worth more, not less. Automation handles the repetitive first-touch follow-up and scoring so your team spends their time on leads that are actually ready to talk - instead of manually chasing every form fill in the order it arrived.',
    ],
    [
        'q' => 'How is marketing automation different from email marketing?',
        'a' => 'Email marketing is one channel inside a bigger system. Marketing automation is the CRM, lead scoring, and trigger logic that decides who gets what message, on which channel, and when - email and WhatsApp are just two of the channels that logic can send through. Most clients run both together, with email marketing as one piece of the automated journey.',
    ],
    [
        'q' => 'How do you measure whether the automation is actually working?',
        'a' => 'Response time to new leads, how many leads convert to a booked call, and revenue tied back to each automated journey - tracked the same way we track every other channel. If a workflow isn\'t moving those numbers after a fair runway, we rebuild it instead of leaving it running on autopilot.',
    ],
];

require __DIR__ . '/../includes/header.php';
?>

<!-- SEO-NOTE: BreadcrumbList schema - not shown on the page (no visible breadcrumb bar), but
     tells search engines exactly where this page sits in the site hierarchy (Home > Services >
     this page), which can surface as a breadcrumb trail directly in the search result. -->
<script type="application/ld+json">
<?php echo json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => SITE_DOMAIN . '/'],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => SITE_DOMAIN . '/our-services'],
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Marketing Automation Agency & Services', 'item' => SITE_DOMAIN . $canonical_path],
    ],
], JSON_UNESCAPED_SLASHES); ?>
</script>

<style>
  /* ---------- Marketing automation page additions (scoped, prefixed ma-) ---------- */
  .ma-hero { padding: 90px 0 70px; background: linear-gradient(180deg, var(--color-primary-light) 0%, var(--color-page) 60%); overflow: hidden; }
  .ma-hero__inner { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  .ma-hero h1 { font-size: clamp(1.7rem, 2.6vw + 1rem, 2.5rem); line-height: 1.18; }
  .ma-hero__actions { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
  .ma-hero__note { margin-top: 18px; font-size: 0.88rem; color: var(--color-muted); }

  /* Automated-journey-style hero visual */
  .ma-stage { position: relative; padding: 20px; }
  .ma-panel {
    background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg);
    box-shadow: 0 30px 70px -24px rgba(22,18,31,0.18);
    overflow: hidden;
  }
  .ma-panel__head { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 16px 20px; border-bottom: 1px solid var(--color-border); }
  .ma-panel__title { font-size: 0.84rem; font-weight: 700; color: var(--color-ink); }
  .ma-panel__pill {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: var(--font-mono); font-size: 0.72rem; font-weight: 600; color: var(--color-body);
    background: var(--color-surface-alt); padding: 5px 10px; border-radius: 999px;
  }
  .ma-panel__pill::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: #0F9D58; }
  .ma-row { display: flex; align-items: center; gap: 12px; padding: 12px 20px; border-top: 1px solid var(--color-border); }
  .ma-row:first-of-type { border-top: none; }
  .ma-row__tag {
    flex-shrink: 0; font-family: var(--font-mono); font-size: 0.68rem; font-weight: 700; text-transform: uppercase;
    padding: 4px 8px; border-radius: 6px; color: #fff; width: 68px; text-align: center;
  }
  .ma-row__title { flex: 1; font-size: 0.86rem; color: var(--color-ink); font-weight: 500; }
  .ma-row__stat { font-family: var(--font-mono); font-size: 0.78rem; font-weight: 700; color: #0F9D58; white-space: nowrap; }

  .ma-badge {
    position: absolute; display: flex; align-items: center; justify-content: center;
    width: 52px; height: 52px; border-radius: 16px; background: #fff;
    box-shadow: 0 14px 30px -10px rgba(22,18,31,0.28);
    animation: maFloat 5s ease-in-out infinite;
  }
  .ma-badge svg { width: 26px; height: 26px; }
  .ma-badge--1 { top: -16px; left: 30px; animation-delay: 0s; }
  .ma-badge--2 { top: 40px; right: -18px; animation-delay: .6s; }
  .ma-badge--3 { bottom: -16px; left: 56px; animation-delay: 1.1s; }
  @keyframes maFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @media (prefers-reduced-motion: reduce) { .ma-badge { animation: none; } }

  /* Platform trust strip */
  .ma-stack { display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 14px; }
  .ma-stack span {
    font-family: var(--font-mono); font-size: 0.82rem; font-weight: 600; color: var(--color-body);
    border: 1px solid var(--color-border); padding: 8px 16px; border-radius: 999px; background: var(--color-surface);
  }

  /* Automation-mix progress bars */
  .ma-bars { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; gap: 22px; }
  .ma-bar__head { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px; font-size: 0.94rem; }
  .ma-bar__head strong { color: var(--color-ink); font-weight: 600; }
  .ma-bar__head span { font-family: var(--font-mono); color: var(--color-primary); font-weight: 600; }
  .ma-bar__track { height: 10px; border-radius: 999px; background: var(--color-surface-alt); overflow: hidden; }
  .ma-bar__fill {
    height: 100%; width: 0%; border-radius: 999px; background: var(--gradient-brand);
    transition: width 1.4s cubic-bezier(.16,1,.3,1);
  }
  .ma-bars.is-visible .ma-bar__fill { width: var(--ma-bar-target); }

  .ma-counter { font-variant-numeric: tabular-nums; }

  /* Testimonial fader */
  .ma-fader { max-width: 720px; margin: 0 auto; position: relative; min-height: 190px; }
  .ma-fader__slide {
    position: absolute; inset: 0; opacity: 0; transform: translateY(10px);
    transition: opacity .5s ease, transform .5s ease; text-align: center;
  }
  .ma-fader__slide.is-active { opacity: 1; transform: translateY(0); position: relative; }
  .ma-fader__stars { display: flex; justify-content: center; gap: 3px; margin-bottom: 14px; }
  .ma-fader__stars svg { width: 16px; height: 16px; fill: var(--color-amber); }
  .ma-fader__quote { font-family: var(--font-display); font-weight: 500; font-size: 1.3rem; letter-spacing: -0.01em; color: var(--color-ink); line-height: 1.5; margin: 0 0 20px; }
  .ma-fader__who strong { display: block; color: var(--color-ink); }
  .ma-fader__who span { font-size: 0.86rem; color: var(--color-muted); }
  .ma-fader__dots { display: flex; justify-content: center; gap: 8px; margin-top: 26px; }
  .ma-fader__dots button { width: 8px; height: 8px; border-radius: 50%; border: none; background: var(--color-border); cursor: pointer; padding: 0; transition: all .25s ease; }
  .ma-fader__dots button.is-active { width: 22px; border-radius: 4px; background: var(--gradient-brand); }

  @media (max-width: 960px) {
    .ma-hero__inner { grid-template-columns: 1fr; }
    .ma-stage { max-width: 420px; margin: 32px auto 0; }
  }
  @media (max-width: 640px) {
    .ma-badge { width: 42px; height: 42px; border-radius: 12px; }
    .ma-badge svg { width: 20px; height: 20px; }
    .ma-row__title { font-size: 0.8rem; }
  }
</style>

<!-- ============ HERO ============ -->
<section class="ma-hero">
  <div class="container ma-hero__inner">
    <div class="hero__copy">
      <span class="eyebrow">Marketing Automation</span>
      <h1>A <span class="text-gradient">Marketing Automation Agency</span> That Follows Up on Every Lead, Automatically</h1>
      <p class="lead">AdsTime is a marketing automation agency running your CRM, lead scoring, and follow-up across every channel as one system - marketing automation services built so a lead gets a response the moment they show interest, not whenever someone remembers to check the inbox.</p>
      <div class="ma-hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free automation audit</a>
        <a href="#ma-work" class="btn btn--ghost">See what we run</a>
      </div>
      <p class="ma-hero__note">Every engagement starts with a full CRM and lead-flow audit, free.</p>
    </div>

    <div class="ma-stage">
      <div class="ma-panel" id="maPanel">
        <div class="ma-panel__head">
          <span class="ma-panel__title">Lead journey - live</span>
          <span class="ma-panel__pill">Running</span>
        </div>
        <div class="ma-row">
          <span class="ma-row__tag" style="background:#4338CA;">New</span>
          <span class="ma-row__title">Lead captured from form</span>
          <span class="ma-row__stat">0 min</span>
        </div>
        <div class="ma-row">
          <span class="ma-row__tag" style="background:#7C3AED;">Score</span>
          <span class="ma-row__title">Auto-scored &amp; routed</span>
          <span class="ma-row__stat">Hot</span>
        </div>
        <div class="ma-row">
          <span class="ma-row__tag" style="background:#1EAE55;">WA</span>
          <span class="ma-row__title">WhatsApp follow-up sent</span>
          <span class="ma-row__stat">2 min</span>
        </div>
        <div class="ma-row">
          <span class="ma-row__tag" style="background:#F97316;">Email</span>
          <span class="ma-row__title">Nurture sequence started</span>
          <span class="ma-row__stat">Day 1</span>
        </div>
        <div class="ma-row">
          <span class="ma-row__tag" style="background:#D18900;">CRM</span>
          <span class="ma-row__title">Handed to sales, tagged</span>
          <span class="ma-row__stat">Ready</span>
        </div>
      </div>

      <div class="ma-badge ma-badge--1" title="CRM workflows">
        <svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><path d="M9 17H7a5 5 0 1 1 0-10h2M15 7h2a5 5 0 1 1 0 10h-2M8 12h8"/></svg>
      </div>
      <div class="ma-badge ma-badge--2" title="Lead scoring">
        <svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><path d="M3 3v18h18"/><path d="M7 15l4-5 4 3 5-7"/></svg>
      </div>
      <div class="ma-badge ma-badge--3" title="WhatsApp automation">
        <svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 20l1.3-3.9A8 8 0 1 1 8 19l-5 1Z"/></svg>
      </div>
    </div>
  </div>
</section>

<!-- ============ TRUST STRIP ============ -->
<section style="padding-top: 0;">
  <div class="container">
    <div class="trust-strip">
      <span class="trust-strip__label">Platforms we automate on</span>
      <div class="ma-stack">
        <span>HubSpot</span>
        <span>Zoho CRM</span>
        <span>Klaviyo</span>
        <span>WhatsApp Business API</span>
        <span>Zapier / Make</span>
        <span>Salesforce</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE RUN ============ -->
<section class="section--alt" id="ma-work">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we run</span>
      <h2>Marketing automation services covering CRM, scoring, and every channel a lead touches</h2>
      <p>A marketing automation agency is only as good as the workflows behind it - most agencies set up a CRM and stop there. We run the CRM, the scoring, and the follow-up as one connected system.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><path d="M9 17H7a5 5 0 1 1 0-10h2M15 7h2a5 5 0 1 1 0 10h-2M8 12h8"/></svg></div>
        <h3>CRM setup &amp; workflow build</h3>
        <p>Your CRM configured to capture every lead source in one place, with the automation logic built on top - not a spreadsheet pretending to be a system.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><path d="M3 3v18h18"/><path d="M7 15l4-5 4 3 5-7"/></svg></div>
        <h3>Lead scoring &amp; routing</h3>
        <p>Every lead scored on fit and intent the moment it comes in, then routed to the right person automatically - so hot leads never wait behind cold ones.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 20l1.3-3.9A8 8 0 1 1 8 19l-5 1Z"/></svg></div>
        <h3>WhatsApp &amp; email automation</h3>
        <p>Nurture sequences and reminders that go out on WhatsApp and email without anyone clicking send - triggered by what the lead actually does, not a fixed calendar.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><circle cx="6" cy="12" r="2.5"/><circle cx="18" cy="6" r="2.5"/><circle cx="18" cy="18" r="2.5"/><path d="M8.2 10.9l7.6-3.8M8.2 13.1l7.6 3.8"/></svg></div>
        <h3>One journey across every channel</h3>
        <p>One journey that follows a customer from first click to repeat purchase across ads, email, and WhatsApp - instead of three teams running three disconnected sequences.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
        <h3>Lifecycle &amp; retention flows</h3>
        <p>Welcome, win-back, and repeat-purchase sequences that keep working on existing customers while new leads are still being nurtured.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
        <h3>Reporting &amp; automation ROI</h3>
        <p>Every workflow tracked back to response time, conversion, and revenue - so we know which automations are earning their place and which need rebuilding.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ AUTOMATION MIX ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Where the workflows actually go</span>
      <h2>A typical automation mix, before it's tuned to your business</h2>
    </div>
    <div class="ma-bars" id="maBars">
      <div class="ma-bar">
        <div class="ma-bar__head"><strong>Lead nurture &amp; scoring flows</strong><span>35%</span></div>
        <div class="ma-bar__track"><div class="ma-bar__fill" style="--ma-bar-target: 35%;"></div></div>
      </div>
      <div class="ma-bar">
        <div class="ma-bar__head"><strong>Lifecycle email automation</strong><span>25%</span></div>
        <div class="ma-bar__track"><div class="ma-bar__fill" style="--ma-bar-target: 25%;"></div></div>
      </div>
      <div class="ma-bar">
        <div class="ma-bar__head"><strong>WhatsApp automation</strong><span>20%</span></div>
        <div class="ma-bar__track"><div class="ma-bar__fill" style="--ma-bar-target: 20%;"></div></div>
      </div>
      <div class="ma-bar">
        <div class="ma-bar__head"><strong>Internal CRM &amp; sales workflows</strong><span>12%</span></div>
        <div class="ma-bar__track"><div class="ma-bar__fill" style="--ma-bar-target: 12%;"></div></div>
      </div>
      <div class="ma-bar">
        <div class="ma-bar__head"><strong>Reporting &amp; results</strong><span>8%</span></div>
        <div class="ma-bar__track"><div class="ma-bar__fill" style="--ma-bar-target: 8%;"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="stats" id="maStats">
      <div class="stat">
        <div class="stat__num"><span class="ma-counter" data-count="8" data-suffix="">0</span></div>
        <div class="stat__label">years building CRM &amp; automation workflows</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="ma-counter" data-count="6.2" data-suffix="x">0</span></div>
        <div class="stat__label">average return on ad spend across automated channels</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="ma-counter" data-count="94" data-suffix="%">0</span></div>
        <div class="stat__label">client retention past 12 months</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>&#8377;3.3Cr+</span></div>
        <div class="stat__label">in sales tracked back to our work in 2025</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How it works</span>
      <h2>A four-stage system, not a one-time CRM setup</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Audit &amp; mapping</h3>
        <p>A full read of your current CRM, lead sources, and every gap where a lead currently waits on a human, delivered inside two weeks.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>CRM &amp; scoring setup</h3>
        <p>Your CRM configured or cleaned up, with a scoring model built around what actually predicts a closed deal for your business.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Build &amp; launch journeys</h3>
        <p>Email, WhatsApp, and internal workflows go live on a real schedule, tested end to end before a single lead runs through them.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Track, report &amp; iterate</h3>
        <p>Every workflow tied back to response time and revenue, with a monthly call that explains what's working and what to change.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Client results</span>
      <h2>What it's actually like to run automation with us</h2>
    </div>
    <div class="ma-fader" id="maFader">
      <div class="ma-fader__slide is-active">
        <div class="ma-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="ma-fader__quote">"Our own customer retention hit 94% after they rebuilt our lifecycle emails and follow-ups - people actually come back now without us chasing them."</p>
        <div class="ma-fader__who"><strong>Dhruv</strong><span>Cloud Vandexa</span></div>
      </div>
      <div class="ma-fader__slide">
        <div class="ma-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="ma-fader__quote">"AdsTime helped us reach 2.1M people a month without our team having to manage a single extra channel themselves."</p>
        <div class="ma-fader__who"><strong>Devendra Shastri</strong><span>Sanskriti Ventures</span></div>
      </div>
      <div class="ma-fader__slide">
        <div class="ma-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="ma-fader__quote">"Tracked ROAS went up 3.3X once our lead follow-up stopped depending on someone remembering to check a spreadsheet."</p>
        <div class="ma-fader__who"><strong>Saurabh</strong><span>Backlink Folio</span></div>
      </div>
      <div class="ma-fader__dots" id="maFaderDots"></div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>Marketing Automation FAQs</h2>
    </div>
    <div style="max-width: 760px; margin: 0 auto;">
      <?php foreach ($faq_items as $item): ?>
      <details class="faq-item">
        <summary><?php echo htmlspecialchars($item['q']); ?></summary>
        <p><?php echo htmlspecialchars($item['a']); ?></p>
      </details>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- ============ FINAL CTA ============ -->
<section class="section--alt">
  <div class="container">
    <div class="cta-band">
      <h2>Want to know how many leads are slipping through right now?</h2>
      <p>Get a free CRM &amp; automation audit &mdash; what's automated, what's manual, and what to fix first, in plain numbers.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free automation audit</a>
    </div>
  </div>
</section>

<script>
(function () {
  // ---- Journey panel: reveal once in view --------------------------
  var panel = document.getElementById('maPanel');
  if (panel && 'IntersectionObserver' in window) {
    var panelObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          panel.classList.add('is-visible');
          panelObs.disconnect();
        }
      });
    }, { threshold: 0.3 });
    panelObs.observe(panel);
  } else if (panel) {
    panel.classList.add('is-visible');
  }

  // ---- Automation-mix bars: animate once in view ------------------------------
  var bars = document.getElementById('maBars');
  if (bars && 'IntersectionObserver' in window) {
    var barObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          bars.classList.add('is-visible');
          barObs.disconnect();
        }
      });
    }, { threshold: 0.35 });
    barObs.observe(bars);
  } else if (bars) {
    bars.classList.add('is-visible');
  }

  // ---- Stat counters: count up once in view ------------------------------
  var statsWrap = document.getElementById('maStats');
  function animateCount(el) {
    var target = parseFloat(el.getAttribute('data-count')) || 0;
    var suffix = el.getAttribute('data-suffix') || '';
    var isDecimal = String(target).indexOf('.') !== -1;
    var duration = 1200;
    var startTime = null;
    function step(ts) {
      if (!startTime) startTime = ts;
      var progress = Math.min((ts - startTime) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      var value = target * eased;
      el.textContent = (isDecimal ? value.toFixed(1) : Math.round(value)) + suffix;
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = (isDecimal ? target.toFixed(1) : target) + suffix;
    }
    requestAnimationFrame(step);
  }
  if (statsWrap && 'IntersectionObserver' in window) {
    var statObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          statsWrap.querySelectorAll('.ma-counter').forEach(animateCount);
          statObs.disconnect();
        }
      });
    }, { threshold: 0.4 });
    statObs.observe(statsWrap);
  } else if (statsWrap) {
    statsWrap.querySelectorAll('.ma-counter').forEach(animateCount);
  }

  // ---- Testimonial fader -----------------------------------------------------
  var fader = document.getElementById('maFader');
  if (fader) {
    var slides = fader.querySelectorAll('.ma-fader__slide');
    var dotsWrap = document.getElementById('maFaderDots');
    var fi = 0;

    slides.forEach(function (_, i) {
      var b = document.createElement('button');
      if (i === 0) b.className = 'is-active';
      b.setAttribute('aria-label', 'Show testimonial ' + (i + 1));
      b.addEventListener('click', function () { showSlide(i); restart(); });
      dotsWrap.appendChild(b);
    });

    function showSlide(i) {
      fi = i;
      slides.forEach(function (s, idx) { s.classList.toggle('is-active', idx === i); });
      Array.prototype.forEach.call(dotsWrap.children, function (d, idx) {
        d.classList.toggle('is-active', idx === i);
      });
    }

    var faderTimer = null;
    function restart() {
      if (faderTimer) clearInterval(faderTimer);
      faderTimer = setInterval(function () { showSlide((fi + 1) % slides.length); }, 5000);
    }
    restart();
  }
})();
</script>

<?php require __DIR__ . '/../includes/footer.php'; ?>
