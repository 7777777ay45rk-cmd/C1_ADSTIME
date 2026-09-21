<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Google Ads Marketing Agency & PPC Management Agency | AdsTime';
$meta_description = 'AdsTime is a Google Ads marketing agency and PPC agency running Search, Shopping, Display, YouTube, and Performance Max as one system. See our PPC management services and what clients say.';
$canonical_path = '/services/google-ads-ppc-agency';

// SEO-NOTE: FAQPage schema is added automatically by header.php whenever $faq_items is set -
// the same array also drives the visible accordion further down this page.
$faq_items = [
    [
        'q' => 'What does a Google Ads marketing agency actually do?',
        'a' => 'A proper Google Ads marketing agency handles the full loop, not just turning campaigns on: keyword and competitor research, campaign structure and bid strategy, writing and testing ad copy, tracking setup so conversions are actually measured correctly, and ongoing optimisation as the account collects data. Anyone who sets up a campaign once and checks in monthly isn\'t managing an account, they\'re babysitting one.',
    ],
    [
        'q' => 'How much do PPC management services cost?',
        'a' => 'Most PPC agencies charge either a flat monthly management fee or a percentage of ad spend, separate from the ad spend itself. For a properly managed account, a realistic starting range for management fees is Rs. 25,000-35,000/month, scaling with the number of campaigns and platforms being run. Be cautious of a flat percentage-of-spend model with no minimum - it can quietly incentivise an agency to keep spend high rather than efficient.',
    ],
    [
        'q' => 'What\'s the difference between a "PPC agency" and a "Google Ads agency"?',
        'a' => 'In practice, not much - most Google Ads agencies also run PPC on other platforms. "PPC" (pay-per-click) is the broader model that covers Google Ads, Microsoft Ads, and paid social like Meta Ads; "Google Ads agency" specifically refers to work on Google\'s platform - Search, Shopping, Display, YouTube, and Performance Max. AdsTime runs Google Ads as the core of most PPC accounts, with Meta Ads layered in when it makes sense for the business.',
    ],
    [
        'q' => 'How soon will PPC campaigns show results?',
        'a' => 'Search campaigns typically show readable signal - cost per click, click-through rate, early conversion data - within the first one to two weeks, but we treat the first 30 days as a calibration period rather than a verdict, since Google\'s algorithm needs real conversion data to optimise properly. Shopping and Performance Max campaigns often take slightly longer to stabilise. Anyone promising a fixed cost-per-lead from week one is guessing, not managing.',
    ],
    [
        'q' => 'Do you require a long-term contract?',
        'a' => 'No. Month-to-month is the default across every PPC engagement - we\'d rather earn the renewal by showing the numbers than lock a client in with a clause. The one exception worth knowing: a brand-new Google Ads account genuinely performs better after 60-90 days of consistent data, so we\'ll say upfront if leaving early would mean walking away right before an account starts to mature.',
    ],
    [
        'q' => 'Who actually manages the account day to day?',
        'a' => 'A named strategist who works a fixed, sustainable number of accounts - not a pooled team where no one owns the outcome. That person is who you\'ll talk to on calls and who signs off on every major account change, not a rotating account manager relaying updates from someone else.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Google Ads Marketing Agency & PPC Management', 'item' => SITE_DOMAIN . $canonical_path],
    ],
], JSON_UNESCAPED_SLASHES); ?>
</script>

<style>
  /* ---------- PPC / Google Ads page additions (scoped, prefixed ppc-) ---------- */
  .ppc-hero { padding: 90px 0 70px; background: linear-gradient(180deg, var(--color-primary-light) 0%, var(--color-page) 60%); overflow: hidden; }
  .ppc-hero__inner { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  /* WHY: same scoped h1 reduction used on the location landing pages - this headline carries
     more keyword phrasing than the sitewide h1 clamp is sized for. */
  .ppc-hero h1 { font-size: clamp(1.7rem, 2.6vw + 1rem, 2.5rem); line-height: 1.18; }
  .ppc-hero__actions { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
  .ppc-hero__note { margin-top: 18px; font-size: 0.88rem; color: var(--color-muted); }

  /* Live-campaign-style hero visual */
  .ppc-stage { position: relative; padding: 20px; }
  .ppc-panel {
    background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg);
    box-shadow: 0 30px 70px -24px rgba(22,18,31,0.18);
    overflow: hidden;
  }
  .ppc-panel__head { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 16px 20px; border-bottom: 1px solid var(--color-border); }
  .ppc-panel__title { font-size: 0.84rem; font-weight: 700; color: var(--color-ink); }
  .ppc-panel__pill {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: var(--font-mono); font-size: 0.72rem; font-weight: 600; color: var(--color-body);
    background: var(--color-surface-alt); padding: 5px 10px; border-radius: 999px;
  }
  .ppc-panel__pill::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: #0F9D58; }
  .ppc-row { display: flex; align-items: center; gap: 12px; padding: 12px 20px; border-top: 1px solid var(--color-border); }
  .ppc-row:first-of-type { border-top: none; }
  .ppc-row__kw { flex: 1; font-size: 0.86rem; color: var(--color-ink); font-weight: 500; }
  .ppc-row__bar { flex: 1; height: 6px; border-radius: 999px; background: var(--color-surface-alt); overflow: hidden; }
  .ppc-row__bar span { display: block; height: 100%; width: 4%; border-radius: 999px; background: var(--gradient-brand); transition: width 1.6s cubic-bezier(.16,1,.3,1); }
  .ppc-panel.is-visible .ppc-row__bar span { width: var(--ppc-target); }
  .ppc-row__rank {
    font-family: var(--font-mono); font-size: 0.78rem; font-weight: 700; color: #0F9D58;
    display: flex; align-items: center; gap: 4px; width: 52px; justify-content: flex-end;
  }

  .ppc-badge {
    position: absolute; display: flex; align-items: center; justify-content: center;
    width: 52px; height: 52px; border-radius: 16px; background: #fff;
    box-shadow: 0 14px 30px -10px rgba(22,18,31,0.28);
    animation: ppcFloat 5s ease-in-out infinite;
  }
  .ppc-badge svg { width: 26px; height: 26px; }
  .ppc-badge--1 { top: -16px; left: 30px; animation-delay: 0s; }
  .ppc-badge--2 { top: 40px; right: -18px; animation-delay: .6s; }
  .ppc-badge--3 { bottom: -16px; left: 56px; animation-delay: 1.1s; }
  @keyframes ppcFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @media (prefers-reduced-motion: reduce) { .ppc-badge { animation: none; } }

  /* Platform trust strip */
  .ppc-stack { display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 14px; }
  .ppc-stack span {
    font-family: var(--font-mono); font-size: 0.82rem; font-weight: 600; color: var(--color-body);
    border: 1px solid var(--color-border); padding: 8px 16px; border-radius: 999px; background: var(--color-surface);
  }

  /* Channel-mix progress bars */
  .ppc-bars { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; gap: 22px; }
  .ppc-bar__head { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px; font-size: 0.94rem; }
  .ppc-bar__head strong { color: var(--color-ink); font-weight: 600; }
  .ppc-bar__head span { font-family: var(--font-mono); color: var(--color-primary); font-weight: 600; }
  .ppc-bar__track { height: 10px; border-radius: 999px; background: var(--color-surface-alt); overflow: hidden; }
  .ppc-bar__fill {
    height: 100%; width: 0%; border-radius: 999px; background: var(--gradient-brand);
    transition: width 1.4s cubic-bezier(.16,1,.3,1);
  }
  .ppc-bars.is-visible .ppc-bar__fill { width: var(--ppc-bar-target); }

  .ppc-counter { font-variant-numeric: tabular-nums; }

  /* Testimonial fader */
  .ppc-fader { max-width: 720px; margin: 0 auto; position: relative; min-height: 190px; }
  .ppc-fader__slide {
    position: absolute; inset: 0; opacity: 0; transform: translateY(10px);
    transition: opacity .5s ease, transform .5s ease; text-align: center;
  }
  .ppc-fader__slide.is-active { opacity: 1; transform: translateY(0); position: relative; }
  .ppc-fader__stars { display: flex; justify-content: center; gap: 3px; margin-bottom: 14px; }
  .ppc-fader__stars svg { width: 16px; height: 16px; fill: var(--color-amber); }
  .ppc-fader__quote { font-family: var(--font-display); font-weight: 500; font-size: 1.3rem; letter-spacing: -0.01em; color: var(--color-ink); line-height: 1.5; margin: 0 0 20px; }
  .ppc-fader__who strong { display: block; color: var(--color-ink); }
  .ppc-fader__who span { font-size: 0.86rem; color: var(--color-muted); }
  .ppc-fader__dots { display: flex; justify-content: center; gap: 8px; margin-top: 26px; }
  .ppc-fader__dots button { width: 8px; height: 8px; border-radius: 50%; border: none; background: var(--color-border); cursor: pointer; padding: 0; transition: all .25s ease; }
  .ppc-fader__dots button.is-active { width: 22px; border-radius: 4px; background: var(--gradient-brand); }

  @media (max-width: 960px) {
    .ppc-hero__inner { grid-template-columns: 1fr; }
    .ppc-stage { max-width: 420px; margin: 32px auto 0; }
  }
  @media (max-width: 640px) {
    .ppc-badge { width: 42px; height: 42px; border-radius: 12px; }
    .ppc-badge svg { width: 20px; height: 20px; }
    .ppc-row__kw { font-size: 0.8rem; }
  }
</style>

<!-- ============ HERO ============ -->
<section class="ppc-hero">
  <div class="container ppc-hero__inner">
    <div class="hero__copy">
      <span class="eyebrow">Google Ads &amp; PPC</span>
      <h1>A <span class="text-gradient">Google Ads Marketing Agency</span> That Shows You Exactly Where Every Rupee of Ad Spend Goes</h1>
      <p class="lead">AdsTime is a PPC agency running Google Search, Shopping, Display, YouTube, and Performance Max as one system - plus Meta Ads where it earns its place - with PPC management services built around ROAS, not vanity clicks.</p>
      <div class="ppc-hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free PPC account audit</a>
        <a href="#ppc-work" class="btn btn--ghost">See what we run</a>
      </div>
      <p class="ppc-hero__note">Every engagement starts with a full account audit, free - no contract required to see it.</p>
    </div>

    <div class="ppc-stage">
      <div class="ppc-panel" id="ppcPanel">
        <div class="ppc-panel__head">
          <span class="ppc-panel__title">Live campaign performance</span>
          <span class="ppc-panel__pill">Updated today</span>
        </div>
        <div class="ppc-row">
          <span class="ppc-row__kw">Search - branded &amp; category</span>
          <span class="ppc-row__bar"><span style="--ppc-target: 94%;"></span></span>
          <span class="ppc-row__rank">5.8x ROAS</span>
        </div>
        <div class="ppc-row">
          <span class="ppc-row__kw">Shopping - product feed</span>
          <span class="ppc-row__bar"><span style="--ppc-target: 82%;"></span></span>
          <span class="ppc-row__rank">6.4x ROAS</span>
        </div>
        <div class="ppc-row">
          <span class="ppc-row__kw">Performance Max</span>
          <span class="ppc-row__bar"><span style="--ppc-target: 76%;"></span></span>
          <span class="ppc-row__rank">5.1x ROAS</span>
        </div>
        <div class="ppc-row">
          <span class="ppc-row__kw">YouTube - in-stream</span>
          <span class="ppc-row__bar"><span style="--ppc-target: 64%;"></span></span>
          <span class="ppc-row__rank">3.9x ROAS</span>
        </div>
        <div class="ppc-row">
          <span class="ppc-row__kw">Display - remarketing</span>
          <span class="ppc-row__bar"><span style="--ppc-target: 70%;"></span></span>
          <span class="ppc-row__rank">4.6x ROAS</span>
        </div>
      </div>

      <div class="ppc-badge ppc-badge--1" title="Google Ads">
        <svg viewBox="0 0 24 24">
          <path d="M12 12 L12 2 A10 10 0 0 1 22 12 Z" fill="#4285F4"/>
          <path d="M12 12 L22 12 A10 10 0 0 1 12 22 Z" fill="#34A853"/>
          <path d="M12 12 L12 22 A10 10 0 0 1 2 12 Z" fill="#FBBC05"/>
          <path d="M12 12 L2 12 A10 10 0 0 1 12 2 Z" fill="#EA4335"/>
          <circle cx="12" cy="12" r="4.6" fill="#fff"/>
        </svg>
      </div>
      <div class="ppc-badge ppc-badge--2" title="Conversion tracking">
        <svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2"><circle cx="12" cy="12" r="9"/><path d="M8 12.5l2.5 2.5 5.5-6"/></svg>
      </div>
      <div class="ppc-badge ppc-badge--3" title="Budget pacing">
        <svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><path d="M3 17l6-6 4 4 8-8"/><path d="M15 6h6v6"/></svg>
      </div>
    </div>
  </div>
</section>

<!-- ============ TRUST STRIP ============ -->
<section style="padding-top: 0;">
  <div class="container">
    <div class="trust-strip">
      <span class="trust-strip__label">Platforms we run PPC on</span>
      <div class="ppc-stack">
        <span>Google Search</span>
        <span>Google Shopping</span>
        <span>Performance Max</span>
        <span>YouTube Ads</span>
        <span>Display &amp; Remarketing</span>
        <span>Meta Ads</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE RUN ============ -->
<section class="section--alt" id="ppc-work">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we run</span>
      <h2>PPC management services covering every part of the account, not just bids</h2>
      <p>A Google Ads marketing agency is only as good as the parts most people never see - tracking, structure, and creative. We run all of it as one connected system.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.3" fill="#4338CA" stroke="none"/></svg></div>
        <h3>Search &amp; Shopping campaigns</h3>
        <p>Keyword and competitor research, campaign structure, and bid strategy built around buying-intent search, not broad reach.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
        <h3>Ad copy &amp; creative</h3>
        <p>Search ad copy, Shopping feed optimisation, and Display/YouTube creative written and tested, not reused from a template.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M8 12.5l2.5 2.5 5.5-6"/></svg></div>
        <h3>Conversion tracking &amp; attribution</h3>
        <p>Correct conversion tracking setup first - so every optimisation after that is based on real data, not a broken pixel.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 17l6-6 4 4 8-8"/><path d="M15 6h6v6"/></svg></div>
        <h3>Budget &amp; bid optimisation</h3>
        <p>Weekly bid and budget adjustments based on what's actually converting, with underperforming spend reallocated fast.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
        <h3>Landing page &amp; conversion rate</h3>
        <p>Landing pages built or fixed to match campaign intent - because the best ad still fails on a page that doesn't convert. See our <a href="<?php echo BASE_PATH; ?>/services/web-development">web development services</a>.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg></div>
        <h3>Reporting &amp; account reviews</h3>
        <p>A monthly call that explains cost per lead, ROAS, and what changed, plus a live dashboard in between calls.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ CHANNEL MIX ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Where the budget actually goes</span>
      <h2>A typical PPC account mix, before it gets tuned to your numbers</h2>
    </div>
    <div class="ppc-bars" id="ppcBars">
      <div class="ppc-bar">
        <div class="ppc-bar__head"><strong>Search - branded &amp; category</strong><span>35%</span></div>
        <div class="ppc-bar__track"><div class="ppc-bar__fill" style="--ppc-bar-target: 35%;"></div></div>
      </div>
      <div class="ppc-bar">
        <div class="ppc-bar__head"><strong>Shopping &amp; Performance Max</strong><span>30%</span></div>
        <div class="ppc-bar__track"><div class="ppc-bar__fill" style="--ppc-bar-target: 30%;"></div></div>
      </div>
      <div class="ppc-bar">
        <div class="ppc-bar__head"><strong>Display &amp; remarketing</strong><span>15%</span></div>
        <div class="ppc-bar__track"><div class="ppc-bar__fill" style="--ppc-bar-target: 15%;"></div></div>
      </div>
      <div class="ppc-bar">
        <div class="ppc-bar__head"><strong>YouTube</strong><span>10%</span></div>
        <div class="ppc-bar__track"><div class="ppc-bar__fill" style="--ppc-bar-target: 10%;"></div></div>
      </div>
      <div class="ppc-bar">
        <div class="ppc-bar__head"><strong>Meta Ads (when it fits)</strong><span>10%</span></div>
        <div class="ppc-bar__track"><div class="ppc-bar__fill" style="--ppc-bar-target: 10%;"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="stats" id="ppcStats">
      <div class="stat">
        <div class="stat__num"><span class="ppc-counter" data-count="6.2" data-suffix="x">0</span></div>
        <div class="stat__label">avg. blended ROAS across paid channels</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="ppc-counter" data-count="8" data-suffix="">0</span></div>
        <div class="stat__label">years running paid media accounts</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="ppc-counter" data-count="94" data-suffix="%">0</span></div>
        <div class="stat__label">client retention past 12 months</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>&#8377;3.3Cr+</span></div>
        <div class="stat__label">pipeline influenced across channels in 2025</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How it works</span>
      <h2>A four-stage system, not a "set it and check back" account</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Account &amp; tracking audit</h3>
        <p>A full read of existing campaigns, conversion tracking, and competitor spend, delivered inside two weeks.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>Structure &amp; budget plan</h3>
        <p>A campaign structure and channel mix modelled against your actual cost-per-lead target, not a generic template.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Launch &amp; calibrate</h3>
        <p>Campaigns go live with a 30-day calibration window while Google's algorithm collects real conversion data.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Optimise, report &amp; scale</h3>
        <p>Weekly bid and budget tuning, plus a monthly call that explains what moved, why, and what scales next.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Client results</span>
      <h2>What it's actually like to run PPC with us</h2>
    </div>
    <div class="ppc-fader" id="ppcFader">
      <div class="ppc-fader__slide is-active">
        <div class="ppc-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="ppc-fader__quote">"AdsTime took our lead volume up 340% without us touching our budget - they just stopped wasting it on the wrong keywords."</p>
        <div class="ppc-fader__who"><strong>Sam Massiri</strong><span>Massiri Heights</span></div>
      </div>
      <div class="ppc-fader__slide">
        <div class="ppc-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="ppc-fader__quote">"6.2x average ROAS since we moved our paid media in-house with them - and we finally get a report we can actually read."</p>
        <div class="ppc-fader__who"><strong>Nancy Srivastava</strong><span>Social Climate</span></div>
      </div>
      <div class="ppc-fader__slide">
        <div class="ppc-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="ppc-fader__quote">"3.3X+ tracked ROAS since we brought them in - and for the first time we can actually see which channel is doing the work."</p>
        <div class="ppc-fader__who"><strong>Saurabh</strong><span>Backlink Folio</span></div>
      </div>
      <div class="ppc-fader__dots" id="ppcFaderDots"></div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>Google Ads &amp; PPC FAQs</h2>
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
      <h2>Want to know exactly what your ad account is actually doing?</h2>
      <p>Get a free PPC account audit &mdash; wasted spend, broken tracking, and missed opportunity, laid out in plain numbers, no contract required.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free PPC account audit</a>
    </div>
  </div>
</section>

<script>
(function () {
  // ---- Campaign panel: animate bars once in view --------------------------
  var panel = document.getElementById('ppcPanel');
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

  // ---- Channel-mix bars: animate once in view ------------------------------
  var bars = document.getElementById('ppcBars');
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
  var statsWrap = document.getElementById('ppcStats');
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
          statsWrap.querySelectorAll('.ppc-counter').forEach(animateCount);
          statObs.disconnect();
        }
      });
    }, { threshold: 0.4 });
    statObs.observe(statsWrap);
  } else if (statsWrap) {
    statsWrap.querySelectorAll('.ppc-counter').forEach(animateCount);
  }

  // ---- Testimonial fader -----------------------------------------------------
  var fader = document.getElementById('ppcFader');
  if (fader) {
    var slides = fader.querySelectorAll('.ppc-fader__slide');
    var dotsWrap = document.getElementById('ppcFaderDots');
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
