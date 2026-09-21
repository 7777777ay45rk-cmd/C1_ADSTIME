<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Best Digital Marketing Agency in Ghaziabad | AdsTime';
$meta_description = 'Searching for the best digital marketing agency in Ghaziabad? AdsTime runs paid media, SEO, content, and web development as one system for businesses across Raj Nagar Extension, Indirapuram, Vaishali, and Sahibabad. See how we work and what clients say.';
$canonical_path = '/services/best-digital-marketing-agency-in-ghaziabad';
$body_class = 'nd-page';

// SEO-NOTE: FAQPage schema is added automatically by header.php whenever $faq_items is set -
// the same array also drives the visible accordion further down this page.
$faq_items = [
    [
        'q' => 'Who is the best digital marketing agency in Ghaziabad?',
        'a' => 'That depends on what you need, which is exactly why we\'d rather you judge us on the work than take our word for it. AdsTime runs paid media, SEO, content, email, automation, WhatsApp marketing, and web development as one connected system for businesses across Raj Nagar Extension, Indirapuram, Vaishali, Kaushambi, and the Sahibabad industrial belt. Ask any agency you\'re considering for three things: a sample report, two client references you can actually call, and a plain-language answer on how they\'re paid. The answers usually tell you more than any "best of" list.',
    ],
    [
        'q' => 'How much does digital marketing cost in Ghaziabad?',
        'a' => 'For most small and mid-sized businesses in Ghaziabad, a realistic monthly range for a properly run mix of paid media and SEO starts around Rs. 30,000-40,000 for management fees, separate from ad spend, and scales up with the number of channels and the size of the ad budget being managed. Anyone quoting a flat Rs. 5,000/month "full digital marketing" package is either running templated, unmanaged campaigns or padding the number elsewhere. Our plans are laid out with exact inclusions on the pricing page, so there\'s no guessing.',
    ],
    [
        'q' => 'Do you have an office in Ghaziabad, or are you based elsewhere?',
        'a' => 'We\'re based in Noida, a short drive across the NCR corridor from Vaishali and Kaushambi, and a fair number of our retainer clients are in Ghaziabad already, so we don\'t pretend to run a separate local office - we\'d rather be upfront about that than have you find out later. What that does mean in practice: strategy calls, reporting, and campaign management run the same way whether a client is in Raj Nagar Extension or Sahibabad, and an in-person meeting is always something we can arrange, not something we have to explain away.',
    ],
    [
        'q' => 'We\'re a small business in Ghaziabad - will we actually get attention, or just be an account number?',
        'a' => 'Small accounts get the same weekly attention as our largest ones; we simply run fewer of them per strategist so that\'s possible. If a business can\'t sustainably support a monthly retainer yet, we\'ll say so upfront rather than sign the contract anyway - a client who can\'t afford to run ads properly isn\'t a good outcome for either side.',
    ],
    [
        'q' => 'How soon will we see results?',
        'a' => 'Paid media typically shows readable signal - cost per lead, click-through rate, early conversion data - within the first two to three weeks, though we treat the first 30 days as a calibration period, not a verdict. SEO moves slower: early keyword movement in 6-8 weeks, with traffic and lead growth compounding from month four onward. Anyone promising page-one rankings or a flood of leads inside two weeks is describing paid ads, not SEO, whether they say so or not.',
    ],
    [
        'q' => 'What makes a Ghaziabad-focused agency different from a national or remote one?',
        'a' => 'Mostly it\'s about specificity. A team that regularly works with Ghaziabad businesses already understands that a Sahibabad manufacturer and a Raj Nagar Extension real estate developer are chasing completely different buyers, knows what "near me" search behaviour looks like in Indirapuram versus the older city market around Ghanta Ghar, and can sit across the table when a campaign needs a real conversation instead of a scheduled call. It\'s not that a remote agency can\'t do good work - it\'s that local context saves time you\'d otherwise spend explaining it.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Best Digital Marketing Agency in Ghaziabad', 'item' => SITE_DOMAIN . $canonical_path],
    ],
], JSON_UNESCAPED_SLASHES); ?>
</script>

<style>
  /* ---------- Ghaziabad landing page (scoped, prefixed nd-, shared pattern with the Delhi/Noida pages) ---------- */

  /* ===== Hero ===== */
  .nd-hero { padding: 84px 0 60px; background: linear-gradient(180deg, var(--color-primary-light) 0%, var(--color-page) 62%); overflow: hidden; }
  .nd-hero__inner { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  /* WHY: the sitewide h1 (clamp 2.1rem-3.2rem) reads too large for this page's longer,
     keyword-carrying headline - this scoped override brings it down a step without touching
     h1 sizing anywhere else on the site. */
  .nd-hero h1 { font-size: clamp(1.7rem, 2.6vw + 1rem, 2.5rem); line-height: 1.18; }
  .nd-hero__actions { display: flex; gap: 14px; margin-top: 28px; flex-wrap: wrap; }
  .nd-hero__chips { display: flex; flex-wrap: wrap; gap: 10px; margin-top: 26px; }
  .nd-hero__chips span {
    display: inline-flex; align-items: center; gap: 7px;
    font-family: var(--font-mono); font-size: 0.78rem; font-weight: 600; color: var(--color-body);
    background: var(--color-surface); border: 1px solid var(--color-border);
    padding: 7px 14px; border-radius: 999px;
  }
  .nd-hero__chips span::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: #1EAE55; flex-shrink: 0; }

  /* Hero visual: "why Ghaziabad businesses choose us" panel + floating badges */
  .nd-stage { position: relative; padding: 20px; }
  .nd-panel {
    background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg);
    box-shadow: 0 30px 70px -24px rgba(22,18,31,0.18);
    overflow: hidden;
  }
  .nd-panel__head { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 16px 20px; border-bottom: 1px solid var(--color-border); }
  .nd-panel__title { font-size: 0.84rem; font-weight: 700; color: var(--color-ink); }
  .nd-panel__pill {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: var(--font-mono); font-size: 0.7rem; font-weight: 600; color: var(--color-body);
    background: var(--color-surface-alt); padding: 5px 10px; border-radius: 999px;
  }
  .nd-panel__pill::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: #0F9D58; }
  .nd-row { display: flex; align-items: center; gap: 14px; padding: 14px 20px; border-top: 1px solid var(--color-border); }
  .nd-row:first-of-type { border-top: none; }
  .nd-row__text { flex: 1; font-size: 0.88rem; color: var(--color-ink); font-weight: 500; }
  .nd-row__check {
    flex-shrink: 0; width: 26px; height: 26px; border-radius: 50%;
    background: rgba(15,157,88,0.12); display: flex; align-items: center; justify-content: center;
    transform: scale(0); opacity: 0; transition: transform 0.4s cubic-bezier(.34,1.56,.64,1), opacity 0.3s ease;
  }
  .nd-panel.is-visible .nd-row__check { transform: scale(1); opacity: 1; }
  .nd-panel.is-visible .nd-row:nth-child(1) .nd-row__check { transition-delay: 0.05s; }
  .nd-panel.is-visible .nd-row:nth-child(2) .nd-row__check { transition-delay: 0.2s; }
  .nd-panel.is-visible .nd-row:nth-child(3) .nd-row__check { transition-delay: 0.35s; }
  .nd-panel.is-visible .nd-row:nth-child(4) .nd-row__check { transition-delay: 0.5s; }
  .nd-panel.is-visible .nd-row:nth-child(5) .nd-row__check { transition-delay: 0.65s; }
  .nd-row__check svg { width: 14px; height: 14px; }

  .nd-badge {
    position: absolute; display: flex; align-items: center; justify-content: center;
    width: 52px; height: 52px; border-radius: 16px; background: #fff;
    box-shadow: 0 14px 30px -10px rgba(22,18,31,0.28);
    animation: ndFloat 5s ease-in-out infinite;
  }
  .nd-badge svg { width: 26px; height: 26px; }
  .nd-badge--1 { top: -16px; left: 26px; animation-delay: 0s; }
  .nd-badge--2 { top: 44px; right: -18px; animation-delay: .6s; }
  .nd-badge--3 { bottom: -16px; left: 50px; animation-delay: 1.1s; }
  @keyframes ndFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @media (prefers-reduced-motion: reduce) { .nd-badge { animation: none; } }

  /* ===== Scroll-reveal ===== */
  .nd-reveal { opacity: 0; transform: translateY(22px); transition: opacity 0.6s ease, transform 0.6s cubic-bezier(.16,1,.3,1); }
  .nd-reveal.is-visible { opacity: 1; transform: translateY(0); }

  /* ===== Callout / pull-quote ===== */
  .nd-callout {
    max-width: 720px; margin: 34px auto 0; padding: 26px 30px;
    border-left: 3px solid var(--color-primary); background: var(--color-surface);
    border-radius: 0 var(--radius-md) var(--radius-md) 0;
    font-family: var(--font-display); font-weight: 500; font-size: 1.15rem; letter-spacing: -0.01em;
    color: var(--color-ink); line-height: 1.5;
  }

  /* ===== Prose ===== */
  .nd-prose { max-width: 720px; margin: 0 auto; }
  .nd-prose p { margin-bottom: 18px; }
  .nd-prose p:last-child { margin-bottom: 0; }

  /* ===== Industry mini-grid ===== */
  .nd-industry-grid { display: grid; grid-template-columns: repeat(4, 1fr); gap: 20px; margin-top: 8px; }
  .nd-industry {
    text-align: center; padding: 26px 18px; background: var(--color-surface); border: 1px solid var(--color-border);
    border-radius: var(--radius-lg); transition: transform var(--transition), box-shadow var(--transition);
  }
  .nd-industry:hover { transform: translateY(-4px); box-shadow: 0 20px 40px -20px rgba(22,18,31,0.2); }
  .nd-industry__icon { width: 48px; height: 48px; border-radius: 14px; display: flex; align-items: center; justify-content: center; margin: 0 auto 14px; }
  .nd-industry__icon svg { width: 22px; height: 22px; }
  .nd-industry h3 { font-size: 0.98rem; margin-bottom: 8px; }
  .nd-industry p { font-size: 0.86rem; color: var(--color-muted); margin: 0; }

  /* ===== Checklist ===== */
  .nd-checklist { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; gap: 4px; position: relative; }
  .nd-checklist::before { content: ""; position: absolute; left: 17px; top: 8px; bottom: 8px; width: 2px; background: var(--color-border); }
  .nd-checklist__item { display: flex; gap: 18px; align-items: flex-start; padding: 16px 0; position: relative; }
  .nd-checklist__num {
    flex-shrink: 0; width: 34px; height: 34px; border-radius: 50%; position: relative; z-index: 1;
    background: var(--gradient-brand); color: #fff; font-family: var(--font-mono); font-weight: 700; font-size: 0.9rem;
    display: flex; align-items: center; justify-content: center;
    transition: transform var(--transition);
  }
  .nd-checklist__item:hover .nd-checklist__num { transform: scale(1.12); }
  .nd-checklist__item h3 { margin-bottom: 6px; font-size: 1.02rem; }
  .nd-checklist__item p { margin: 0; }

  /* ===== Stats counter ===== */
  .nd-counter { font-variant-numeric: tabular-nums; }

  /* ===== Testimonial fader ===== */
  .nd-fader { max-width: 720px; margin: 0 auto; position: relative; min-height: 190px; }
  .nd-fader__slide {
    position: absolute; inset: 0; opacity: 0; transform: translateY(10px);
    transition: opacity .5s ease, transform .5s ease; text-align: center;
  }
  .nd-fader__slide.is-active { opacity: 1; transform: translateY(0); position: relative; }
  .nd-fader__stars { display: flex; justify-content: center; gap: 3px; margin-bottom: 14px; }
  .nd-fader__stars svg { width: 16px; height: 16px; fill: var(--color-amber); }
  .nd-fader__quote { font-family: var(--font-display); font-weight: 500; font-size: 1.3rem; letter-spacing: -0.01em; color: var(--color-ink); line-height: 1.5; margin: 0 0 20px; }
  .nd-fader__who strong { display: block; color: var(--color-ink); }
  .nd-fader__who span { font-size: 0.86rem; color: var(--color-muted); }
  .nd-fader__dots { display: flex; justify-content: center; gap: 8px; margin-top: 26px; }
  .nd-fader__dots button { width: 8px; height: 8px; border-radius: 50%; border: none; background: var(--color-border); cursor: pointer; padding: 0; transition: all .25s ease; }
  .nd-fader__dots button.is-active { width: 22px; border-radius: 4px; background: var(--gradient-brand); }

  @media (max-width: 960px) {
    .nd-hero__inner { grid-template-columns: 1fr; }
    /* WHY: no `order` override here on purpose - matches the homepage hero, where the text
       column stays first in DOM order and the visual panel/art follows below it on mobile,
       rather than jumping above the heading. */
    .nd-stage { max-width: 420px; margin: 32px auto 0; }
    .nd-industry-grid { grid-template-columns: repeat(2, 1fr); }
  }

  /* ===== Mobile: centre everything on this page ===== */
  @media (max-width: 720px) {
    body.nd-page .nd-hero { padding: 56px 0 44px; text-align: center; }
    body.nd-page .nd-hero__actions,
    body.nd-page .nd-hero__chips { justify-content: center; }
    body.nd-page .nd-badge { width: 42px; height: 42px; border-radius: 12px; }
    body.nd-page .nd-badge svg { width: 20px; height: 20px; }
    body.nd-page .nd-callout { text-align: center; margin-left: 16px; margin-right: 16px; }
    body.nd-page .nd-prose { text-align: center; }
    body.nd-page .card { text-align: center; }
    body.nd-page .card .card__icon { margin-left: auto; margin-right: auto; }
    body.nd-page .nd-checklist::before { display: none; }
    body.nd-page .nd-checklist__item { flex-direction: column; align-items: center; text-align: center; gap: 10px; }
  }
</style>

<!-- ============ HERO ============ -->
<section class="nd-hero">
  <div class="container nd-hero__inner">
    <div>
      <span class="eyebrow">Digital Marketing Agency, Ghaziabad</span>
      <h1>The <span class="text-gradient">Best Digital Marketing Agency in Ghaziabad</span> for Businesses That Want to See Real Numbers</h1>
      <p class="lead">AdsTime is a full-funnel digital marketing agency serving Ghaziabad and the wider NCR, running paid media, SEO, content, email, automation, and WhatsApp marketing - plus the web development that supports all of it - for businesses across Raj Nagar Extension, Indirapuram, Vaishali, Kaushambi, and Sahibabad.</p>
      <div class="nd-hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free growth audit</a>
        <a href="#nd-services" class="btn btn--ghost">See what we run</a>
      </div>
      <div class="nd-hero__chips">
        <span>Serving Ghaziabad &amp; NCR</span>
        <span>8 channels, one team</span>
        <span>No lock-in contracts</span>
      </div>
    </div>

    <div class="nd-stage">
      <div class="nd-panel" id="ndPanel">
        <div class="nd-panel__head">
          <span class="nd-panel__title">Why Ghaziabad businesses choose us</span>
          <span class="nd-panel__pill">Live</span>
        </div>
        <div class="nd-row">
          <span class="nd-row__text">A real NCR team, not a call centre</span>
          <span class="nd-row__check"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
        </div>
        <div class="nd-row">
          <span class="nd-row__text">8 channels run by one accountable team</span>
          <span class="nd-row__check"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
        </div>
        <div class="nd-row">
          <span class="nd-row__text">Month-to-month, no lock-in contracts</span>
          <span class="nd-row__check"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
        </div>
        <div class="nd-row">
          <span class="nd-row__text">Reports in plain numbers, not jargon</span>
          <span class="nd-row__check"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
        </div>
        <div class="nd-row">
          <span class="nd-row__text">94% client retention past 12 months</span>
          <span class="nd-row__check"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round"><path d="M20 6 9 17l-5-5"/></svg></span>
        </div>
      </div>

      <div class="nd-badge nd-badge--1" title="Google">
        <svg viewBox="0 0 24 24">
          <path d="M12 12 L12 2 A10 10 0 0 1 22 12 Z" fill="#4285F4"/>
          <path d="M12 12 L22 12 A10 10 0 0 1 12 22 Z" fill="#34A853"/>
          <path d="M12 12 L12 22 A10 10 0 0 1 2 12 Z" fill="#FBBC05"/>
          <path d="M12 12 L2 12 A10 10 0 0 1 12 2 Z" fill="#EA4335"/>
          <circle cx="12" cy="12" r="4.6" fill="#fff"/>
        </svg>
      </div>
      <div class="nd-badge nd-badge--2" title="WhatsApp">
        <svg viewBox="0 0 32 32" fill="#25D366"><path d="M16.001 3C9.096 3 3.5 8.596 3.5 15.5c0 2.42.687 4.68 1.879 6.598L3 29l7.087-2.338A12.44 12.44 0 0 0 16.001 28C22.906 28 28.5 22.404 28.5 15.5S22.906 3 16.001 3z"/></svg>
      </div>
      <div class="nd-badge nd-badge--3" title="Ghaziabad, NCR">
        <svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><path d="M12 21s-7-6.3-7-11a7 7 0 0 1 14 0c0 4.7-7 11-7 11z"/><circle cx="12" cy="10" r="2.4"/></svg>
      </div>
    </div>
  </div>
</section>

<!-- ============ INTRODUCTION ============ -->
<section class="nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Introduction</span>
      <h2>A digital marketing agency built to run every channel for Ghaziabad businesses, not just one</h2>
    </div>
    <div class="nd-prose">
      <p>If you're looking for the best digital marketing agency in Ghaziabad, the city itself makes that a genuinely varied brief. Sahibabad runs one of the largest industrial belts in western UP - engineering, auto components, plastics, electronics - while Raj Nagar Extension and Crossings Republik have turned into two of NCR's fastest-growing residential corridors, pulling in a steady wave of real estate developers and brokers. Indirapuram and Vaishali carry a fast-growing mix of retail, healthcare, and small IT/services businesses, and the older city market around Ghanta Ghar and Naya Bazar still anchors serious wholesale and trading volume. Every one of those businesses wants the same outcome: a marketing budget that turns into paying customers, run by a team that can explain exactly how it's working.</p>
      <p>AdsTime is that team. As a digital marketing agency serving Ghaziabad and the wider NCR, we run Google Ads and Meta Ads campaigns, SEO and local search, content marketing, email and WhatsApp marketing, marketing automation, and the web development that supports all of it - not as six separate vendors billing separately, but as one connected system managed by a single accountable team. Need a Google Ads agency for Ghaziabad that stops a Sahibabad manufacturer's account from bleeding budget on the wrong keywords? An SEO agency that gets a Raj Nagar Extension project ranking for the searches actual homebuyers type? A website fast enough to convert the traffic either channel sends it? All of it is handled under one roof, by people who talk to each other daily instead of a project manager relaying messages between freelancers.</p>
      <p>What makes that work in practice is simple. We're upfront about being based in Noida, a short drive from Vaishali and Kaushambi across the NCR corridor, rather than pretending to run a Ghaziabad office we don't have - and a good number of our retainer clients are in Ghaziabad already, so an in-person meeting is always something we can arrange. We don't lock clients into long contracts - month-to-month is the default, and we'd rather earn a renewal than rely on a clause. And every report we send is built around cost per lead, ROAS, and pipeline, not impressions and engagement dressed up to look like progress. The sections below walk through exactly what we run, why clients stay, and what the results have actually looked like.</p>
    </div>
    <blockquote class="nd-callout">"The agencies worth keeping aren't the ones that call themselves the best &mdash; they're the ones you can still get a straight answer from six months in."</blockquote>
  </div>
</section>

<!-- ============ WHY ADSTIME ============ -->
<section class="section--alt nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Why AdsTime</span>
      <h2>What actually makes an agency the right fit in Ghaziabad</h2>
      <p>Not flashy claims - the operational details that decide whether a marketing budget gets spent well or gets quietly wasted.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg></div>
        <h3>Upfront about where we're based</h3>
        <p>We're a Noida-based team serving Ghaziabad and NCR, not a national call centre claiming a local address it doesn't have. In-person meetings are always on the table.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.3" fill="#7C3AED" stroke="none"/></svg></div>
        <h3>One team, every channel</h3>
        <p>Paid media, SEO, content, email, WhatsApp, and the website itself run by people who talk to each other daily, not freelancers stitched together.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
        <h3>Reports you can actually read</h3>
        <p>Cost per lead, ROAS, and pipeline influenced - in plain numbers, not "impressions" and "engagement" dressed up to look like progress.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M20 6 9 17l-5-5"/></svg></div>
        <h3>No lock-in contracts</h3>
        <p>Month-to-month by default. We'd rather earn the renewal every month than have a client stuck because of a clause.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
        <h3>Straight answers on what's not working</h3>
        <p>If a channel isn't earning its budget, we say so and reallocate - not stretch out something underperforming to keep billing for it.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M12 21s-7-6.3-7-11a7 7 0 0 1 14 0c0 4.7-7 11-7 11z"/><circle cx="12" cy="10" r="2.4"/></svg></div>
        <h3>We understand the local market</h3>
        <p>From how Sahibabad B2B buyers actually search to what makes a Raj Nagar Extension homebuyer pick up the phone.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ SERVICES ============ -->
<section id="nd-services" class="nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we run</span>
      <h2>Digital marketing services we run for Ghaziabad businesses</h2>
      <p>Every channel below is run in-house, tracked back to leads and revenue, and reported on together.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.3" fill="#4338CA" stroke="none"/></svg></div>
        <h3>Paid media (Google &amp; Meta Ads)</h3>
        <p>Search, Shopping, Display, and Meta campaigns built around what Ghaziabad customers actually search for and click on.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
        <h3>SEO &amp; local search</h3>
        <p>Technical fixes, content, and Google Business Profile work for the "near me" search that decides who gets found first. See our <a href="<?php echo BASE_PATH; ?>/services/seo">full SEO services</a>.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(192,38,211,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#C026D3" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
        <h3>Content marketing</h3>
        <p>Editorial, video, and distribution built around the questions your actual customers are asking.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
        <h3>Email &amp; marketing automation</h3>
        <p>Lifecycle flows and CRM-driven journeys that keep a lead warm long after they've left your site.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 20l1.3-3.9A8 8 0 1 1 8 19l-5 1Z"/></svg></div>
        <h3>WhatsApp marketing</h3>
        <p>Broadcasts, automated flows, and click-to-chat ads - still the fastest way to close a warm lead in India.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(51,65,85,0.08)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M8 6 2 12l6 6M16 6l6 6-6 6M14 4l-4 16"/></svg></div>
        <h3>Web &amp; product development</h3>
        <p>Landing pages and websites engineered for speed, conversion, and the tracking every channel depends on. See our <a href="<?php echo BASE_PATH; ?>/services/web-development">web development services</a>.</p>
      </div>
    </div>
    <p style="text-align:center; margin-top: 36px;">
      <a href="<?php echo BASE_PATH; ?>/our-services" class="btn btn--ghost">See all services in detail</a>
    </p>
  </div>
</section>

<!-- ============ INDUSTRIES ============ -->
<section class="section--alt nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Who we run this for</span>
      <h2>Built around how Ghaziabad's industries actually sell</h2>
      <p>The channels stay the same, but what wins looks different for a Sahibabad manufacturer than a Raj Nagar Extension developer.</p>
    </div>
    <div class="nd-industry-grid">
      <div class="nd-industry">
        <div class="nd-industry__icon" style="background:rgba(51,65,85,0.08)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><rect x="3" y="10" width="7" height="10"/><rect x="14" y="6" width="7" height="14"/><path d="M3 10l4-4 3 3 4-5 7 6"/></svg></div>
        <h3>Manufacturing &amp; industrial</h3>
        <p>Sahibabad engineering, auto-parts, and electronics units need lead-gen that qualifies serious B2B buyers, not just traffic that never turns into an RFQ.</p>
      </div>
      <div class="nd-industry">
        <div class="nd-industry__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg></div>
        <h3>Real estate &amp; housing</h3>
        <p>Raj Nagar Extension and Crossings Republik developers live on qualified site-visit bookings, not raw form fills that never pick up the phone.</p>
      </div>
      <div class="nd-industry">
        <div class="nd-industry__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M12 21s-7-6.3-7-11a7 7 0 0 1 14 0c0 4.7-7 11-7 11z"/><circle cx="12" cy="10" r="2.4"/></svg></div>
        <h3>Retail &amp; wholesale trade</h3>
        <p>Ghanta Ghar and Naya Bazar traders won or lost on Google Business Profile visibility, WhatsApp reply speed, and repeat B2B orders.</p>
      </div>
      <div class="nd-industry">
        <div class="nd-industry__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><path d="M3 12h4l2-5 4 10 2-5h6"/></svg></div>
        <h3>Healthcare &amp; education</h3>
        <p>Vaishali and Indirapuram clinics and coaching institutes competing on trust-first content and "near me" search, not just ad spend.</p>
      </div>
    </div>
    <p style="text-align:center; margin-top: 32px;">
      <a href="<?php echo BASE_PATH; ?>/#industries">See how the mix changes by industry &rarr;</a>
    </p>
  </div>
</section>

<!-- ============ HOW WE WORK ============ -->
<section class="nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How it works</span>
      <h2>A four-stage system, not a monthly checklist</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Audit &amp; discovery</h3>
        <p>A full read of your existing channels, tech stack, and competitors, delivered inside two weeks.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>Strategy &amp; roadmap</h3>
        <p>A prioritised 90-day roadmap that models channel mix against your actual revenue goal.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Execution across channels</h3>
        <p>Specialist pods for ads, content, lifecycle, and dev ship weekly, with standups so nothing sits idle.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Track, report &amp; iterate</h3>
        <p>One dashboard with blended attribution, plus a monthly session to adjust the mix around what's working.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section class="section--alt nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">The numbers behind it</span>
      <h2>What running channels as one system actually produces</h2>
    </div>
    <div class="stats" id="ndStats">
      <div class="stat">
        <div class="stat__num"><span class="nd-counter" data-count="6.2" data-suffix="x">0</span></div>
        <div class="stat__label">avg. blended ROAS across paid channels</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="nd-counter" data-count="8" data-suffix="">0</span></div>
        <div class="stat__label">channels run under one roof, ads to dev</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="nd-counter" data-count="94" data-suffix="%">0</span></div>
        <div class="stat__label">client retention past 12 months</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>&#8377;3.3Cr+</span></div>
        <div class="stat__label">pipeline influenced across channels in 2025</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ HOW TO CHOOSE ============ -->
<section class="nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">A genuinely useful checklist</span>
      <h2>How to actually choose the best digital marketing agency in Ghaziabad</h2>
      <p>Skip the "best of" lists and ask any agency you're considering these six things before you sign anything.</p>
    </div>
    <div class="nd-checklist">
      <div class="nd-checklist__item">
        <span class="nd-checklist__num">1</span>
        <div>
          <h3>Ask for a report that isn't a highlight reel</h3>
          <p>A real report shows cost per lead and what didn't work this month, not just the one metric that went up.</p>
        </div>
      </div>
      <div class="nd-checklist__item">
        <span class="nd-checklist__num">2</span>
        <div>
          <h3>Get two client references you can actually call</h3>
          <p>Not a logo wall - a real phone number for a client willing to say what's genuinely working and what isn't.</p>
        </div>
      </div>
      <div class="nd-checklist__item">
        <span class="nd-checklist__num">3</span>
        <div>
          <h3>Understand exactly how they're paid</h3>
          <p>A flat retainer, a percentage of ad spend, or a performance fee all create different incentives.</p>
        </div>
      </div>
      <div class="nd-checklist__item">
        <span class="nd-checklist__num">4</span>
        <div>
          <h3>Check who's actually running the account</h3>
          <p>The person in the sales pitch is often not the person managing your campaigns day to day.</p>
        </div>
      </div>
      <div class="nd-checklist__item">
        <span class="nd-checklist__num">5</span>
        <div>
          <h3>Confirm you own the accounts and the data</h3>
          <p>Ad accounts, analytics, and your website should sit under your ownership, not the agency's.</p>
        </div>
      </div>
      <div class="nd-checklist__item">
        <span class="nd-checklist__num">6</span>
        <div>
          <h3>Be wary of long lock-in contracts</h3>
          <p>A twelve-month term can make sense for SEO - it should never be the only way an agency keeps a client.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="section--alt nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Client results</span>
      <h2>What it's actually like to work with us</h2>
    </div>
    <div class="nd-fader" id="ndFader">
      <div class="nd-fader__slide is-active">
        <div class="nd-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="nd-fader__quote">"AdsTime helped us reach 2.1M people a month without our team having to manage a single extra channel themselves."</p>
        <div class="nd-fader__who"><strong>Devendra Shastri</strong><span>Sanskriti Ventures</span></div>
      </div>
      <div class="nd-fader__slide">
        <div class="nd-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="nd-fader__quote">"3.3X+ tracked ROAS since we brought them in - and for the first time we can actually see which channel is doing the work."</p>
        <div class="nd-fader__who"><strong>Saurabh</strong><span>Backlink Folio</span></div>
      </div>
      <div class="nd-fader__slide">
        <div class="nd-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="nd-fader__quote">"Our own customer retention hit 94% after they rebuilt our lifecycle emails and WhatsApp follow-ups - people actually come back now."</p>
        <div class="nd-fader__who"><strong>Dhruv</strong><span>Cloud Vandexa</span></div>
      </div>
      <div class="nd-fader__dots" id="ndFaderDots"></div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section class="nd-reveal">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>Frequently asked questions</h2>
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
<section class="section--alt nd-reveal">
  <div class="container">
    <div class="cta-band">
      <h2>Ready to see what a properly run marketing budget looks like?</h2>
      <p>Get a free, no-obligation growth audit - a full read of your paid, organic, and lifecycle channels, plus a 90-day roadmap, from a team that already runs campaigns for businesses across Ghaziabad and NCR.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free growth audit</a>
    </div>
  </div>
</section>

<script>
(function () {
  // ---- Hero panel: reveal checkmarks once in view --------------------------
  var panel = document.getElementById('ndPanel');
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

  // ---- Generic scroll-reveal for sections -----------------------------------
  var reveals = document.querySelectorAll('.nd-reveal');
  if ('IntersectionObserver' in window) {
    var revealObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObs.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });
    reveals.forEach(function (el) { revealObs.observe(el); });
  } else {
    reveals.forEach(function (el) { el.classList.add('is-visible'); });
  }

  // ---- Stat counters: count up once in view ---------------------------------
  var statsWrap = document.getElementById('ndStats');
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
          statsWrap.querySelectorAll('.nd-counter').forEach(animateCount);
          statObs.disconnect();
        }
      });
    }, { threshold: 0.4 });
    statObs.observe(statsWrap);
  } else if (statsWrap) {
    statsWrap.querySelectorAll('.nd-counter').forEach(animateCount);
  }

  // ---- Testimonial fader -----------------------------------------------------
  var fader = document.getElementById('ndFader');
  if (fader) {
    var slides = fader.querySelectorAll('.nd-fader__slide');
    var dotsWrap = document.getElementById('ndFaderDots');
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
