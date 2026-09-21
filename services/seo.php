<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'SEO Services - Technical, On-Page & Content SEO | AdsTime';
$meta_description = 'AdsTime runs technical SEO, on-page and content optimisation, link building, local SEO, and AI-answer-engine visibility as one connected system, not a monthly checklist.';
$canonical_path = '/services/seo';

// SEO-NOTE: FAQPage schema is added automatically by header.php whenever $faq_items is set -
// the same array also drives the visible accordion further down this page.
$faq_items = [
    [
        'q' => 'How long does SEO take to show results?',
        'a' => 'Most sites see early movement (new keywords appearing, small ranking gains) within 6-8 weeks, with meaningful traffic and lead growth compounding from month four onward. Anyone promising results in two weeks is either lying or talking about paid ads.',
    ],
    [
        'q' => 'Do you guarantee page-one rankings?',
        'a' => 'No, and any agency that guarantees a specific rank is not being straight with you - no one controls Google\'s algorithm. What we commit to is the work: audits, content, technical fixes, and links delivered on schedule, with full visibility into what moved and why.',
    ],
    [
        'q' => 'Do you write the content too, or just tell us what to write?',
        'a' => 'Both are available. From the Growth plan upward we write and publish content ourselves; on smaller engagements we hand you a content brief your team can write from directly.',
    ],
    [
        'q' => 'Is SEO worth it compared to just running paid ads?',
        'a' => 'They do different jobs - paid media buys traffic while the budget runs, SEO builds traffic that keeps showing up after you stop paying for it. Most of our clients run both, with SEO taking over more of the load every quarter.',
    ],
    [
        'q' => 'What is "AI-answer-engine optimisation" and do I need it?',
        'a' => 'It\'s making sure your business gets cited when people ask ChatGPT, Google\'s AI Overviews, or Perplexity a question instead of typing a search query. It rides on the same technical and content foundation as traditional SEO, so if you\'re investing in SEO you\'re already most of the way there.',
    ],
];

require __DIR__ . '/../includes/header.php';
?>

<style>
  /* ---------- SEO page additions (scoped, prefixed seo-) ---------- */
  .seo-hero { padding: 90px 0 70px; background: linear-gradient(180deg, var(--color-primary-light) 0%, var(--color-page) 60%); overflow: hidden; }
  .seo-hero__inner { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  .seo-hero__actions { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
  .seo-hero__note { margin-top: 18px; font-size: 0.88rem; color: var(--color-muted); }

  /* Rank-tracker hero visual */
  .seo-stage { position: relative; padding: 20px; }
  .seo-panel {
    background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg);
    box-shadow: 0 30px 70px -24px rgba(22,18,31,0.18);
    overflow: hidden;
  }
  .seo-panel__head { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 16px 20px; border-bottom: 1px solid var(--color-border); }
  .seo-panel__title { font-size: 0.84rem; font-weight: 700; color: var(--color-ink); }
  .seo-panel__pill {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: var(--font-mono); font-size: 0.72rem; font-weight: 600; color: var(--color-body);
    background: var(--color-surface-alt); padding: 5px 10px; border-radius: 999px;
  }
  .seo-panel__pill::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: #0F9D58; }
  .seo-row { display: flex; align-items: center; gap: 12px; padding: 12px 20px; border-top: 1px solid var(--color-border); }
  .seo-row:first-of-type { border-top: none; }
  .seo-row__kw { flex: 1; font-size: 0.86rem; color: var(--color-ink); font-weight: 500; }
  .seo-row__bar { flex: 1; height: 6px; border-radius: 999px; background: var(--color-surface-alt); overflow: hidden; }
  .seo-row__bar span { display: block; height: 100%; width: 4%; border-radius: 999px; background: var(--gradient-brand); transition: width 1.6s cubic-bezier(.16,1,.3,1); }
  .seo-panel.is-visible .seo-row__bar span { width: var(--seo-target); }
  .seo-row__rank {
    font-family: var(--font-mono); font-size: 0.78rem; font-weight: 700; color: #0F9D58;
    display: flex; align-items: center; gap: 4px; width: 46px; justify-content: flex-end;
  }
  .seo-row__rank svg { width: 12px; height: 12px; }

  .seo-badge {
    position: absolute; display: flex; align-items: center; justify-content: center;
    width: 52px; height: 52px; border-radius: 16px; background: #fff;
    box-shadow: 0 14px 30px -10px rgba(22,18,31,0.28);
    animation: seoFloat 5s ease-in-out infinite;
  }
  .seo-badge svg { width: 26px; height: 26px; }
  .seo-badge--1 { top: -16px; left: 30px; animation-delay: 0s; }
  .seo-badge--2 { top: 40px; right: -18px; animation-delay: .6s; }
  .seo-badge--3 { bottom: -16px; left: 56px; animation-delay: 1.1s; }
  @keyframes seoFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @media (prefers-reduced-motion: reduce) { .seo-badge { animation: none; } }

  /* Tech-stack-style trust strip reused for "what we track" */
  .seo-stack { display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 14px; }
  .seo-stack span {
    font-family: var(--font-mono); font-size: 0.82rem; font-weight: 600; color: var(--color-body);
    border: 1px solid var(--color-border); padding: 8px 16px; border-radius: 999px; background: var(--color-surface);
  }

  /* Progress bars (skills) */
  .seo-bars { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; gap: 22px; }
  .seo-bar__head { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px; font-size: 0.94rem; }
  .seo-bar__head strong { color: var(--color-ink); font-weight: 600; }
  .seo-bar__head span { font-family: var(--font-mono); color: var(--color-primary); font-weight: 600; }
  .seo-bar__track { height: 10px; border-radius: 999px; background: var(--color-surface-alt); overflow: hidden; }
  .seo-bar__fill {
    height: 100%; width: 0%; border-radius: 999px; background: var(--gradient-brand);
    transition: width 1.4s cubic-bezier(.16,1,.3,1);
  }
  .seo-bars.is-visible .seo-bar__fill { width: var(--seo-bar-target); }

  /* Animated stat counters */
  .seo-counter { font-variant-numeric: tabular-nums; }

  /* Mini testimonial fader */
  .seo-fader { max-width: 720px; margin: 0 auto; position: relative; min-height: 190px; }
  .seo-fader__slide {
    position: absolute; inset: 0; opacity: 0; transform: translateY(10px);
    transition: opacity .5s ease, transform .5s ease; text-align: center;
  }
  .seo-fader__slide.is-active { opacity: 1; transform: translateY(0); position: relative; }
  .seo-fader__stars { display: flex; justify-content: center; gap: 3px; margin-bottom: 14px; }
  .seo-fader__stars svg { width: 16px; height: 16px; fill: var(--color-amber); }
  .seo-fader__quote { font-family: var(--font-display); font-weight: 500; font-size: 1.3rem; letter-spacing: -0.01em; color: var(--color-ink); line-height: 1.5; margin: 0 0 20px; }
  .seo-fader__who strong { display: block; color: var(--color-ink); }
  .seo-fader__who span { font-size: 0.86rem; color: var(--color-muted); }
  .seo-fader__dots { display: flex; justify-content: center; gap: 8px; margin-top: 26px; }
  .seo-fader__dots button { width: 8px; height: 8px; border-radius: 50%; border: none; background: var(--color-border); cursor: pointer; padding: 0; transition: all .25s ease; }
  .seo-fader__dots button.is-active { width: 22px; border-radius: 4px; background: var(--gradient-brand); }

  @media (max-width: 960px) {
    .seo-hero__inner { grid-template-columns: 1fr; }
    .seo-stage { order: -1; }
  }
  @media (max-width: 640px) {
    .seo-badge { width: 42px; height: 42px; border-radius: 12px; }
    .seo-badge svg { width: 20px; height: 20px; }
    .seo-row__kw { font-size: 0.8rem; }
  }
</style>

<!-- ============ HERO ============ -->
<section class="seo-hero">
  <div class="container seo-hero__inner">
    <div class="hero__copy">
      <span class="eyebrow">SEO</span>
      <h1>Rankings that keep paying you back after you stop paying for clicks</h1>
      <p class="lead">Technical fixes, content built around what people actually search, and links that build authority instead of risk &mdash; run as one system, tracked back to traffic and revenue, not just position.</p>
      <div class="seo-hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free SEO audit</a>
        <a href="#seo-work" class="btn btn--ghost">See what we run</a>
      </div>
      <p class="seo-hero__note">Every engagement starts with a full technical and content audit, free.</p>
    </div>

    <div class="seo-stage">
      <div class="seo-panel" id="seoPanel">
        <div class="seo-panel__head">
          <span class="seo-panel__title">Keyword rankings</span>
          <span class="seo-panel__pill">Updated today</span>
        </div>
        <div class="seo-row">
          <span class="seo-row__kw">performance marketing agency</span>
          <span class="seo-row__bar"><span style="--seo-target: 92%;"></span></span>
          <span class="seo-row__rank"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.4" stroke-linecap="round"><path d="M6 15l6-6 6 6"/></svg>#2</span>
        </div>
        <div class="seo-row">
          <span class="seo-row__kw">whatsapp marketing services</span>
          <span class="seo-row__bar"><span style="--seo-target: 80%;"></span></span>
          <span class="seo-row__rank"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.4" stroke-linecap="round"><path d="M6 15l6-6 6 6"/></svg>#4</span>
        </div>
        <div class="seo-row">
          <span class="seo-row__kw">email automation agency india</span>
          <span class="seo-row__bar"><span style="--seo-target: 96%;"></span></span>
          <span class="seo-row__rank"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.4" stroke-linecap="round"><path d="M6 15l6-6 6 6"/></svg>#1</span>
        </div>
        <div class="seo-row">
          <span class="seo-row__kw">influencer marketing agency</span>
          <span class="seo-row__bar"><span style="--seo-target: 68%;"></span></span>
          <span class="seo-row__rank"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.4" stroke-linecap="round"><path d="M6 15l6-6 6 6"/></svg>#6</span>
        </div>
        <div class="seo-row">
          <span class="seo-row__kw">performance marketing vs seo</span>
          <span class="seo-row__bar"><span style="--seo-target: 86%;"></span></span>
          <span class="seo-row__rank"><svg viewBox="0 0 24 24" fill="none" stroke="#0F9D58" stroke-width="2.4" stroke-linecap="round"><path d="M6 15l6-6 6 6"/></svg>#3</span>
        </div>
      </div>

      <div class="seo-badge seo-badge--1" title="Google Search">
        <svg viewBox="0 0 24 24">
          <path d="M12 12 L12 2 A10 10 0 0 1 22 12 Z" fill="#4285F4"/>
          <path d="M12 12 L22 12 A10 10 0 0 1 12 22 Z" fill="#34A853"/>
          <path d="M12 12 L12 22 A10 10 0 0 1 2 12 Z" fill="#FBBC05"/>
          <path d="M12 12 L2 12 A10 10 0 0 1 12 2 Z" fill="#EA4335"/>
          <circle cx="12" cy="12" r="4.6" fill="#fff"/>
        </svg>
      </div>
      <div class="seo-badge seo-badge--2" title="AI answer engines">
        <svg viewBox="0 0 24 24" fill="none" stroke="#9333EA" stroke-width="1.8"><path d="M12 3l1.8 4.6L18 9l-4.2 1.4L12 15l-1.8-4.6L6 9l4.2-1.4L12 3z"/><path d="M19 15l.9 2.3L22 18l-2.1.7L19 21l-.9-2.3L16 18l2.1-.7L19 15z"/></svg>
      </div>
      <div class="seo-badge seo-badge--3" title="Backlinks">
        <svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><rect x="3" y="9" width="7" height="6" rx="3"/><rect x="14" y="9" width="7" height="6" rx="3"/><path d="M10 12h4"/></svg>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE TRACK STRIP ============ -->
<section style="padding-top: 0;">
  <div class="container">
    <div class="trust-strip">
      <span class="trust-strip__label">Tracked back to what actually matters</span>
      <div class="seo-stack">
        <span>Organic traffic</span>
        <span>Keyword rankings</span>
        <span>Leads &amp; conversions</span>
        <span>Domain authority</span>
        <span>AI citations</span>
        <span>Core Web Vitals</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE RUN ============ -->
<section class="section--alt" id="seo-work">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we run</span>
      <h2>Every part of SEO that actually moves traffic, run together</h2>
      <p>Technical, content, and authority work usually get split across freelancers who never talk to each other. We run all of it as one connected system so nothing gets fixed in one place and broken in another.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><path d="M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18M3 12h18"/></svg></div>
        <h3>Technical SEO</h3>
        <p>Crawl and index audits, site speed, structured data, and the architecture fixes that let Google actually find and rank the pages you already have.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
        <h3>On-page &amp; content SEO</h3>
        <p>Keyword mapping, topical content clusters, and on-page optimisation built around what your customers actually type, not what sounds good internally.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><rect x="3" y="9" width="7" height="6" rx="3"/><rect x="14" y="9" width="7" height="6" rx="3"/><path d="M10 12h4"/></svg></div>
        <h3>Link building &amp; digital PR</h3>
        <p>Earned links from real publications and relevant sites &mdash; the kind that build authority safely, not the kind that get a site penalised eighteen months later.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M12 21s-7-6.3-7-11a7 7 0 0 1 14 0c0 4.7-7 11-7 11z"/><circle cx="12" cy="10" r="2.4"/></svg></div>
        <h3>Local SEO &amp; Google Business</h3>
        <p>Google Business Profile optimisation, local citations, and review strategy for businesses that live or die by "near me" search - including our own backyard, <a href="<?php echo BASE_PATH; ?>/services/best-digital-marketing-agency-in-noida">Noida</a>.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/><path d="M2.5 4h2.5l2.4 11.5h9.9L20 8H6.3"/></svg></div>
        <h3>E-commerce SEO</h3>
        <p>Category and product-page structure, faceted-navigation fixes, and content that ranks for buying-intent search, not just informational traffic.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M12 3l1.8 4.6L18 9l-4.2 1.4L12 15l-1.8-4.6L6 9l4.2-1.4L12 3z"/><path d="M19 15l.9 2.3L22 18l-2.1.7L19 21l-.9-2.3L16 18l2.1-.7L19 15z"/></svg></div>
        <h3>AI-answer-engine optimisation</h3>
        <p>Structuring content so ChatGPT, Google's AI Overviews, and Perplexity cite your business by name when someone asks the question instead of typing a search.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ EXPERIENCE / PROGRESS BARS ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Where the experience sits</span>
      <h2>Years of ranking pages in industries where guessing gets expensive</h2>
    </div>
    <div class="seo-bars" id="seoBars">
      <div class="seo-bar">
        <div class="seo-bar__head"><strong>Technical SEO &amp; site health</strong><span>95%</span></div>
        <div class="seo-bar__track"><div class="seo-bar__fill" style="--seo-bar-target: 95%;"></div></div>
      </div>
      <div class="seo-bar">
        <div class="seo-bar__head"><strong>On-page &amp; content strategy</strong><span>93%</span></div>
        <div class="seo-bar__track"><div class="seo-bar__fill" style="--seo-bar-target: 93%;"></div></div>
      </div>
      <div class="seo-bar">
        <div class="seo-bar__head"><strong>Link building &amp; authority</strong><span>88%</span></div>
        <div class="seo-bar__track"><div class="seo-bar__fill" style="--seo-bar-target: 88%;"></div></div>
      </div>
      <div class="seo-bar">
        <div class="seo-bar__head"><strong>Local &amp; Maps SEO</strong><span>90%</span></div>
        <div class="seo-bar__track"><div class="seo-bar__fill" style="--seo-bar-target: 90%;"></div></div>
      </div>
      <div class="seo-bar">
        <div class="seo-bar__head"><strong>AI-answer-engine visibility</strong><span>85%</span></div>
        <div class="seo-bar__track"><div class="seo-bar__fill" style="--seo-bar-target: 85%;"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="stats" id="seoStats">
      <div class="stat">
        <div class="stat__num"><span class="seo-counter" data-count="8">0</span><span>+</span></div>
        <div class="stat__label">years running SEO campaigns</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="seo-counter" data-count="2400">0</span><span>+</span></div>
        <div class="stat__label">keywords ranked on page one</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="seo-counter" data-count="186">0</span><span>%</span></div>
        <div class="stat__label">average organic traffic growth in 12 months</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="seo-counter" data-count="94">0</span><span>%</span></div>
        <div class="stat__label">client retention past 12 months</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How it works</span>
      <h2>A four-stage system, not a monthly checklist</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Technical &amp; content audit</h3>
        <p>A full crawl, keyword gap analysis, and competitor read delivered inside two weeks, whatever platform you're already running.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>Roadmap &amp; priorities</h3>
        <p>A prioritised roadmap that fixes what's actively holding rankings back first, not whatever's easiest to bill.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Build, publish &amp; earn links</h3>
        <p>Technical fixes ship, content goes out on a real calendar, and outreach for links runs in parallel &mdash; not sequentially.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Track, report &amp; iterate</h3>
        <p>Rank tracking and traffic reporting tied to leads and revenue, with a monthly call that explains what moved and why.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Client results</span>
      <h2>What it's like to run SEO with us</h2>
    </div>
    <div class="seo-fader" id="seoFader">
      <div class="seo-fader__slide is-active">
        <div class="seo-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="seo-fader__quote">"We went from page three to the top of page one for our main keyword in five months, and organic is now our cheapest lead source by far."</p>
        <div class="seo-fader__who"><strong>Nikhil Bhatia</strong><span>Founder, Spaciya Advisors</span></div>
      </div>
      <div class="seo-fader__slide">
        <div class="seo-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="seo-fader__quote">"Every previous agency sent us a rankings screenshot and called it a report. AdsTime ties every ranking change back to actual leads in our CRM."</p>
        <div class="seo-fader__who"><strong>Divya Shenoy</strong><span>Marketing Head, Massiri Heights</span></div>
      </div>
      <div class="seo-fader__slide">
        <div class="seo-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="seo-fader__quote">"They flagged that half our product pages weren't even indexed before touching a single keyword. Fixing that alone doubled our organic orders."</p>
        <div class="seo-fader__who"><strong>Arman Qureshi</strong><span>Ops Lead, Tire Mobile Fix</span></div>
      </div>

      <div class="seo-fader__dots" id="seoFaderDots"></div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>SEO FAQs</h2>
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
      <h2>Want to know exactly what's holding your rankings back?</h2>
      <p>Get a free SEO audit &mdash; technical, content, and authority gaps, with a plain-language list of what to fix first.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free SEO audit</a>
    </div>
  </div>
</section>

<script>
(function () {
  // ---- Rank panel: animate bars + count down displayed rank once in view ------------
  var panel = document.getElementById('seoPanel');
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

  // ---- Progress bars: animate once in view ------------------------------
  var bars = document.getElementById('seoBars');
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
  var statsWrap = document.getElementById('seoStats');
  function animateCount(el) {
    var target = parseInt(el.getAttribute('data-count'), 10) || 0;
    var start = 0;
    var duration = 1200;
    var startTime = null;
    function step(ts) {
      if (!startTime) startTime = ts;
      var progress = Math.min((ts - startTime) / duration, 1);
      var eased = 1 - Math.pow(1 - progress, 3);
      el.textContent = Math.round(start + (target - start) * eased);
      if (progress < 1) requestAnimationFrame(step);
      else el.textContent = target;
    }
    requestAnimationFrame(step);
  }
  if (statsWrap && 'IntersectionObserver' in window) {
    var statObs = new IntersectionObserver(function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          statsWrap.querySelectorAll('.seo-counter').forEach(animateCount);
          statObs.disconnect();
        }
      });
    }, { threshold: 0.4 });
    statObs.observe(statsWrap);
  } else if (statsWrap) {
    statsWrap.querySelectorAll('.seo-counter').forEach(animateCount);
  }

  // ---- Testimonial fader --------------------------------------------------
  var fader = document.getElementById('seoFader');
  if (fader) {
    var slides = fader.querySelectorAll('.seo-fader__slide');
    var dotsWrap = document.getElementById('seoFaderDots');
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
