<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Email Marketing Services & Agency | AdsTime';
$meta_description = 'AdsTime runs email marketing as a full system - strategy, automated email flows, segmentation, deliverability (SPF, DKIM, DMARC), and template design, not just campaign sends. See our email marketing services and what clients say.';
$canonical_path = '/services/email-marketing';

// SEO-NOTE: FAQPage schema is added automatically by header.php whenever $faq_items is set -
// the same array also drives the visible accordion further down this page.
$faq_items = [
    [
        'q' => 'What\'s actually included in your email marketing services?',
        'a' => 'Strategy and a real campaign calendar, automated email flows (welcome, abandoned cart, win-back, post-purchase), list segmentation, template design and email development, deliverability and authentication (SPF, DKIM, DMARC), and reporting tied to revenue - not just opens and clicks. Most agencies sell one or two of these; we run all of them as one system so an email flow doesn\'t quietly break because nobody owns deliverability.',
    ],
    [
        'q' => 'How much do email marketing services cost?',
        'a' => 'For most small and mid-sized businesses, a realistic starting range covering strategy, 3-5 core automated email flows, and monthly campaign sends is Rs. 20,000-30,000/month, scaling with list size, the number of flows, and how much custom template design is involved. A one-time setup fee is common for the first month, when authentication, list migration, and the first flows are all being built at once.',
    ],
    [
        'q' => 'What email platforms do you work with?',
        'a' => 'Klaviyo, Mailchimp, HubSpot, Brevo, and Zoho Campaigns most often, depending on what a client already runs or what fits their budget and CRM. If you\'re not on any of these yet, we help pick one sized to your list and use case rather than defaulting to whichever platform we personally prefer.',
    ],
    [
        'q' => 'What are SPF, DKIM, and DMARC, and do I actually need them?',
        'a' => 'They\'re the technical records that prove your emails are really coming from you and not someone spoofing your domain - SPF lists which servers are allowed to send on your behalf, DKIM signs each email with a verifiable signature, and DMARC tells inbox providers what to do if a message fails either check. Without all three set up correctly, a growing share of your campaigns land in spam or get dropped outright, no matter how good the subject line is - Gmail and Yahoo have both made this closer to mandatory, not optional, for anyone sending real volume. We set up and verify all three before a single campaign goes out on a new domain.',
    ],
    [
        'q' => 'How is email marketing different from marketing automation?',
        'a' => 'Email marketing is one channel; marketing automation is the CRM, lead scoring, and trigger logic that decides who gets what message, on which channel, and when - email is just one of the channels that logic can send through, alongside WhatsApp and internal sales alerts. Most clients run both together: automation as the engine, email as one of its primary outputs. See our marketing automation services page for the full picture.',
    ],
    [
        'q' => 'How do you keep deliverability healthy over time, not just at setup?',
        'a' => 'Bounce and spam-complaint rates get checked every send, not once a quarter. We suppress unengaged contacts on a regular schedule instead of emailing a stale list forever, warm up any new sending domain gradually rather than blasting day one, and watch sender reputation through your ESP\'s own deliverability tools plus Google Postmaster Tools where it applies. If open rates or inbox placement start slipping, that\'s treated as an active problem to fix, not a number that just gets reported on quietly.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Email Marketing Services & Agency', 'item' => SITE_DOMAIN . $canonical_path],
    ],
], JSON_UNESCAPED_SLASHES); ?>
</script>

<style>
  /* ---------- Email marketing page additions (scoped, prefixed em-, same pattern as
       services/marketing-automation.php) ---------- */
  .em-hero { padding: 90px 0 70px; background: linear-gradient(180deg, var(--color-primary-light) 0%, var(--color-page) 60%); overflow: hidden; }
  .em-hero__inner { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  .em-hero h1 { font-size: clamp(1.7rem, 2.6vw + 1rem, 2.5rem); line-height: 1.18; }
  .em-hero__actions { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
  .em-hero__note { margin-top: 18px; font-size: 0.88rem; color: var(--color-muted); }

  /* Deliverability-checklist hero visual - doubles as a preview of the technical section below */
  .em-stage { position: relative; padding: 20px; }
  .em-panel {
    background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg);
    box-shadow: 0 30px 70px -24px rgba(22,18,31,0.18);
    overflow: hidden;
  }
  .em-panel__head { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 16px 20px; border-bottom: 1px solid var(--color-border); }
  .em-panel__title { font-size: 0.84rem; font-weight: 700; color: var(--color-ink); }
  .em-panel__pill {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: var(--font-mono); font-size: 0.7rem; font-weight: 600; color: var(--color-body);
    background: var(--color-surface-alt); padding: 5px 10px; border-radius: 999px;
  }
  .em-panel__pill::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: #0F9D58; }
  .em-row { display: flex; align-items: center; gap: 14px; padding: 14px 20px; border-top: 1px solid var(--color-border); }
  .em-row:first-of-type { border-top: none; }
  .em-row__text { flex: 1; font-size: 0.88rem; color: var(--color-ink); font-weight: 500; }
  .em-row__tag {
    flex-shrink: 0; font-family: var(--font-mono); font-size: 0.68rem; font-weight: 700;
    padding: 4px 9px; border-radius: 6px; color: #0F9D58; background: rgba(15,157,88,0.12);
  }

  .em-badge {
    position: absolute; display: flex; align-items: center; justify-content: center;
    width: 52px; height: 52px; border-radius: 16px; background: #fff;
    box-shadow: 0 14px 30px -10px rgba(22,18,31,0.28);
    animation: emFloat 5s ease-in-out infinite;
  }
  .em-badge svg { width: 26px; height: 26px; }
  .em-badge--1 { top: -16px; left: 30px; animation-delay: 0s; }
  .em-badge--2 { top: 40px; right: -18px; animation-delay: .6s; }
  .em-badge--3 { bottom: -16px; left: 56px; animation-delay: 1.1s; }
  @keyframes emFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @media (prefers-reduced-motion: reduce) { .em-badge { animation: none; } }

  /* Platform trust strip */
  .em-stack { display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 14px; }
  .em-stack span {
    font-family: var(--font-mono); font-size: 0.82rem; font-weight: 600; color: var(--color-body);
    border: 1px solid var(--color-border); padding: 8px 16px; border-radius: 999px; background: var(--color-surface);
  }

  /* Send-mix progress bars */
  .em-bars { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; gap: 22px; }
  .em-bar__head { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px; font-size: 0.94rem; }
  .em-bar__head strong { color: var(--color-ink); font-weight: 600; }
  .em-bar__head span { font-family: var(--font-mono); color: var(--color-primary); font-weight: 600; }
  .em-bar__track { height: 10px; border-radius: 999px; background: var(--color-surface-alt); overflow: hidden; }
  .em-bar__fill {
    height: 100%; width: 0%; border-radius: 999px; background: var(--gradient-brand);
    transition: width 1.4s cubic-bezier(.16,1,.3,1);
  }
  .em-bars.is-visible .em-bar__fill { width: var(--em-bar-target); }

  /* Technical checklist (SPF/DKIM/DMARC etc.) */
  .em-checklist { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; gap: 4px; position: relative; }
  .em-checklist::before { content: ""; position: absolute; left: 17px; top: 8px; bottom: 8px; width: 2px; background: var(--color-border); }
  .em-checklist__item { display: flex; gap: 18px; align-items: flex-start; padding: 16px 0; position: relative; }
  .em-checklist__num {
    flex-shrink: 0; width: 34px; height: 34px; border-radius: 50%; position: relative; z-index: 1;
    background: var(--gradient-brand); color: #fff; font-family: var(--font-mono); font-weight: 700; font-size: 0.9rem;
    display: flex; align-items: center; justify-content: center;
    transition: transform var(--transition);
  }
  .em-checklist__item:hover .em-checklist__num { transform: scale(1.12); }
  .em-checklist__item h3 { margin-bottom: 6px; font-size: 1.02rem; }
  .em-checklist__item p { margin: 0; }

  .em-counter { font-variant-numeric: tabular-nums; }

  /* Testimonial fader */
  .em-fader { max-width: 720px; margin: 0 auto; position: relative; min-height: 190px; }
  .em-fader__slide {
    position: absolute; inset: 0; opacity: 0; transform: translateY(10px);
    transition: opacity .5s ease, transform .5s ease; text-align: center;
  }
  .em-fader__slide.is-active { opacity: 1; transform: translateY(0); position: relative; }
  .em-fader__stars { display: flex; justify-content: center; gap: 3px; margin-bottom: 14px; }
  .em-fader__stars svg { width: 16px; height: 16px; fill: var(--color-amber); }
  .em-fader__quote { font-family: var(--font-display); font-weight: 500; font-size: 1.3rem; letter-spacing: -0.01em; color: var(--color-ink); line-height: 1.5; margin: 0 0 20px; }
  .em-fader__who strong { display: block; color: var(--color-ink); }
  .em-fader__who span { font-size: 0.86rem; color: var(--color-muted); }
  .em-fader__dots { display: flex; justify-content: center; gap: 8px; margin-top: 26px; }
  .em-fader__dots button { width: 8px; height: 8px; border-radius: 50%; border: none; background: var(--color-border); cursor: pointer; padding: 0; transition: all .25s ease; }
  .em-fader__dots button.is-active { width: 22px; border-radius: 4px; background: var(--gradient-brand); }

  @media (max-width: 960px) {
    .em-hero__inner { grid-template-columns: 1fr; }
    .em-stage { max-width: 420px; margin: 32px auto 0; }
  }
  @media (max-width: 720px) {
    .em-checklist::before { display: none; }
    .em-checklist__item { flex-direction: column; align-items: center; text-align: center; gap: 10px; }
  }
  @media (max-width: 640px) {
    .em-badge { width: 42px; height: 42px; border-radius: 12px; }
    .em-badge svg { width: 20px; height: 20px; }
  }
</style>

<!-- ============ HERO ============ -->
<section class="em-hero">
  <div class="container em-hero__inner">
    <div class="hero__copy">
      <span class="eyebrow">Email Marketing</span>
      <h1>Email Marketing Services That Turn a List Into a <span class="text-gradient">Revenue Channel</span></h1>
      <p class="lead">AdsTime runs email marketing as a full system - strategy, automated email flows, segmentation, and template design, backed by the deliverability work most agencies skip. As an email marketing agency, we set up SPF, DKIM, and DMARC properly, so campaigns land in the inbox instead of the spam folder.</p>
      <div class="em-hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free email audit</a>
        <a href="#em-work" class="btn btn--ghost">See what we run</a>
      </div>
      <p class="em-hero__note">Every engagement starts with a full list, flow, and deliverability audit, free.</p>
    </div>

    <div class="em-stage">
      <div class="em-panel" id="emPanel">
        <div class="em-panel__head">
          <span class="em-panel__title">Deliverability checklist</span>
          <span class="em-panel__pill">Verified</span>
        </div>
        <div class="em-row">
          <span class="em-row__text">SPF record published</span>
          <span class="em-row__tag">Pass</span>
        </div>
        <div class="em-row">
          <span class="em-row__text">DKIM signature verified</span>
          <span class="em-row__tag">Pass</span>
        </div>
        <div class="em-row">
          <span class="em-row__text">DMARC policy enforced</span>
          <span class="em-row__tag">Pass</span>
        </div>
        <div class="em-row">
          <span class="em-row__text">Sending domain warmed up</span>
          <span class="em-row__tag">Pass</span>
        </div>
        <div class="em-row">
          <span class="em-row__text">Spam complaint rate</span>
          <span class="em-row__tag">0.03%</span>
        </div>
      </div>

      <div class="em-badge em-badge--1" title="Lifecycle flows">
        <svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg>
      </div>
      <div class="em-badge em-badge--2" title="Segmentation">
        <svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><circle cx="6" cy="12" r="2.5"/><circle cx="18" cy="6" r="2.5"/><circle cx="18" cy="18" r="2.5"/><path d="M8.2 10.9l7.6-3.8M8.2 13.1l7.6 3.8"/></svg>
      </div>
      <div class="em-badge em-badge--3" title="Deliverability">
        <svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M20 6 9 17l-5-5"/></svg>
      </div>
    </div>
  </div>
</section>

<!-- ============ TRUST STRIP ============ -->
<section style="padding-top: 0;">
  <div class="container">
    <div class="trust-strip">
      <span class="trust-strip__label">Platforms we send on</span>
      <div class="em-stack">
        <span>Klaviyo</span>
        <span>Mailchimp</span>
        <span>HubSpot</span>
        <span>Brevo</span>
        <span>Zoho Campaigns</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE RUN ============ -->
<section class="section--alt" id="em-work">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we run</span>
      <h2>Email marketing services covering strategy, flows, and the deliverability behind them</h2>
      <p>Most email marketing agencies sell campaign sends and stop there. We run the strategy, the automation, the design, and the technical setup that decides whether any of it reaches an inbox.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
        <h3>Strategy &amp; campaign calendar</h3>
        <p>A real sending calendar built around your product launches, offers, and audience - not a generic newsletter with no plan behind it.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
        <h3>Lifecycle &amp; automated flows</h3>
        <p>Welcome, abandoned cart, win-back, and post-purchase sequences that keep earning without a campaign being manually sent.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><circle cx="6" cy="12" r="2.5"/><circle cx="18" cy="6" r="2.5"/><circle cx="18" cy="18" r="2.5"/><path d="M8.2 10.9l7.6-3.8M8.2 13.1l7.6 3.8"/></svg></div>
        <h3>List growth &amp; segmentation</h3>
        <p>Sign-up forms and lead magnets that grow the list properly, then segments built around behaviour - not one blast to everyone.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M9 12l2 2 4-4"/><path d="M12 3a9 9 0 1 0 9 9"/><path d="M21 3v6h-6"/></svg></div>
        <h3>Deliverability &amp; authentication</h3>
        <p>SPF, DKIM, and DMARC set up and verified, domain warm-up handled properly, and sender reputation monitored on an ongoing basis - see the full technical breakdown below.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><path d="M3 3v18h18"/><path d="M7 15l4-5 4 3 5-7"/></svg></div>
        <h3>Template design &amp; development</h3>
        <p>Responsive, on-brand templates coded to render correctly across Gmail, Outlook, and mobile inboxes - not just Figma files that break in production.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
        <h3>Reporting tied to revenue</h3>
        <p>Every campaign and flow tracked back to actual sales and cost per customer, not just open rate - so we know what's actually earning its place.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ TECHNICAL DEEP-DIVE ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">The technical side</span>
      <h2>What actually decides whether your emails reach the inbox</h2>
      <p>Good copy and a clean template don't matter if the message never clears spam filtering. This is the checklist we run on every domain before a campaign goes out.</p>
    </div>
    <div class="em-checklist">
      <div class="em-checklist__item">
        <span class="em-checklist__num">1</span>
        <div>
          <h3>SPF (Sender Policy Framework)</h3>
          <p>A DNS record listing exactly which mail servers are allowed to send email for your domain, so receiving servers can reject anyone spoofing your address.</p>
        </div>
      </div>
      <div class="em-checklist__item">
        <span class="em-checklist__num">2</span>
        <div>
          <h3>DKIM (DomainKeys Identified Mail)</h3>
          <p>A cryptographic signature added to every outgoing email that proves the message wasn't altered in transit and genuinely came from your domain.</p>
        </div>
      </div>
      <div class="em-checklist__item">
        <span class="em-checklist__num">3</span>
        <div>
          <h3>DMARC policy</h3>
          <p>Tells inbox providers what to do when a message fails SPF or DKIM - quarantine it, reject it, or let it through - and gives you visibility into who's sending as your domain.</p>
        </div>
      </div>
      <div class="em-checklist__item">
        <span class="em-checklist__num">4</span>
        <div>
          <h3>Gradual domain &amp; IP warm-up</h3>
          <p>New sending domains build reputation slowly - a small, engaged volume in week one, scaling up over several weeks, instead of a full list blast on day one.</p>
        </div>
      </div>
      <div class="em-checklist__item">
        <span class="em-checklist__num">5</span>
        <div>
          <h3>List hygiene &amp; bounce management</h3>
          <p>Hard bounces removed immediately, unengaged contacts suppressed on a regular schedule - a stale list is the single fastest way to tank sender reputation.</p>
        </div>
      </div>
      <div class="em-checklist__item">
        <span class="em-checklist__num">6</span>
        <div>
          <h3>Ongoing reputation monitoring</h3>
          <p>Spam complaint rate, bounce rate, and inbox placement checked on every send through your ESP's tools and Google Postmaster Tools, not reviewed once and forgotten.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ SEND MIX ============ -->
<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Where the effort actually goes</span>
      <h2>A typical email programme mix, before it's tuned to your list</h2>
    </div>
    <div class="em-bars" id="emBars">
      <div class="em-bar">
        <div class="em-bar__head"><strong>Lifecycle &amp; automated flows</strong><span>35%</span></div>
        <div class="em-bar__track"><div class="em-bar__fill" style="--em-bar-target: 35%;"></div></div>
      </div>
      <div class="em-bar">
        <div class="em-bar__head"><strong>Campaign strategy &amp; sends</strong><span>25%</span></div>
        <div class="em-bar__track"><div class="em-bar__fill" style="--em-bar-target: 25%;"></div></div>
      </div>
      <div class="em-bar">
        <div class="em-bar__head"><strong>List growth &amp; segmentation</strong><span>18%</span></div>
        <div class="em-bar__track"><div class="em-bar__fill" style="--em-bar-target: 18%;"></div></div>
      </div>
      <div class="em-bar">
        <div class="em-bar__head"><strong>Deliverability &amp; authentication</strong><span>14%</span></div>
        <div class="em-bar__track"><div class="em-bar__fill" style="--em-bar-target: 14%;"></div></div>
      </div>
      <div class="em-bar">
        <div class="em-bar__head"><strong>Reporting &amp; results</strong><span>8%</span></div>
        <div class="em-bar__track"><div class="em-bar__fill" style="--em-bar-target: 8%;"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section>
  <div class="container">
    <div class="stats" id="emStats">
      <div class="stat">
        <div class="stat__num"><span class="em-counter" data-count="8" data-suffix="">0</span></div>
        <div class="stat__label">years building email marketing programmes</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="em-counter" data-count="6.2" data-suffix="x">0</span></div>
        <div class="stat__label">average return on ad spend across automated channels</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="em-counter" data-count="94" data-suffix="%">0</span></div>
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
<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How it works</span>
      <h2>A four-stage system, not a monthly newsletter</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Audit &amp; list health check</h3>
        <p>A full read of your current list, flows, templates, and deliverability standing, delivered inside two weeks.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>Strategy &amp; flow mapping</h3>
        <p>A prioritised plan covering which flows to build first, campaign cadence, and the segments that matter most.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Build, authenticate &amp; launch</h3>
        <p>Flows and templates go live only after SPF, DKIM, and DMARC are verified - so the first send isn't the first test.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Track, report &amp; iterate</h3>
        <p>Revenue per flow and campaign tracked monthly, with deliverability checked on every single send, not just at setup.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Client results</span>
      <h2>What it's actually like to run email with us</h2>
    </div>
    <div class="em-fader" id="emFader">
      <div class="em-fader__slide is-active">
        <div class="em-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="em-fader__quote">"Our own customer retention hit 94% after they rebuilt our lifecycle emails and follow-ups - people actually come back now without us chasing them."</p>
        <div class="em-fader__who"><strong>Dhruv</strong><span>Cloud Vandexa</span></div>
      </div>
      <div class="em-fader__slide">
        <div class="em-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="em-fader__quote">"3.3X+ tracked ROAS since we brought them in - and for the first time we can actually see which channel is doing the work."</p>
        <div class="em-fader__who"><strong>Saurabh</strong><span>Backlink Folio</span></div>
      </div>
      <div class="em-fader__slide">
        <div class="em-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="em-fader__quote">"AdsTime helped us reach 2.1M people a month without our team having to manage a single extra channel themselves."</p>
        <div class="em-fader__who"><strong>Devendra Shastri</strong><span>Sanskriti Ventures</span></div>
      </div>
      <div class="em-fader__dots" id="emFaderDots"></div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>Email Marketing FAQs</h2>
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
<section>
  <div class="container">
    <div class="cta-band">
      <h2>Not sure if your emails are even reaching the inbox?</h2>
      <p>Get a free email &amp; deliverability audit &mdash; list health, flow gaps, and SPF/DKIM/DMARC status, in plain numbers.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free email audit</a>
    </div>
  </div>
</section>

<script>
(function () {
  // ---- Deliverability panel: reveal once in view --------------------------
  var panel = document.getElementById('emPanel');
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

  // ---- Send-mix bars: animate once in view ------------------------------
  var bars = document.getElementById('emBars');
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
  var statsWrap = document.getElementById('emStats');
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
          statsWrap.querySelectorAll('.em-counter').forEach(animateCount);
          statObs.disconnect();
        }
      });
    }, { threshold: 0.4 });
    statObs.observe(statsWrap);
  } else if (statsWrap) {
    statsWrap.querySelectorAll('.em-counter').forEach(animateCount);
  }

  // ---- Testimonial fader -----------------------------------------------------
  var fader = document.getElementById('emFader');
  if (fader) {
    var slides = fader.querySelectorAll('.em-fader__slide');
    var dotsWrap = document.getElementById('emFaderDots');
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
