<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Content Marketing Agency & Content Marketing Services | AdsTime';
$meta_description = 'AdsTime is a content marketing agency running editorial, video, and distribution as one system - tied to traffic and leads, not just publishing volume. See our content marketing services and what clients say.';
$canonical_path = '/services/content-marketing';

// SEO-NOTE: FAQPage schema is added automatically by header.php whenever $faq_items is set -
// the same array also drives the visible accordion further down this page.
$faq_items = [
    [
        'q' => 'What does a content marketing agency actually deliver?',
        'a' => 'A proper content marketing agency runs the full loop: topic and keyword research tied to what your customers actually search, a real editorial calendar, writing or producing the content, distribution across the channels that fit your audience, and reporting that ties pieces back to traffic and leads - not just a folder of blog posts nobody promotes. Anyone who hands over articles with no distribution plan is selling copywriting, not content marketing.',
    ],
    [
        'q' => 'How much do content marketing services cost?',
        'a' => 'Most agencies charge a monthly retainer scaled to volume and format - written content alone starts lower than a mix that includes video or design. For a realistic starting range covering a proper editorial cadence (strategy, writing, and basic distribution), expect Rs. 25,000-40,000/month, scaling with the number of pieces and channels involved. Be cautious of a flat per-article rate with no strategy attached - it usually means content produced in isolation, without a plan for who actually sees it.',
    ],
    [
        'q' => 'Do you write the content, or just plan it?',
        'a' => 'Both are available. On most engagements we write and produce content ourselves - editorial, scripts, and design - end to end. On smaller engagements we can hand your team a detailed content brief they write from directly, with the same research and structure behind it either way.',
    ],
    [
        'q' => 'Is content marketing worth it compared to just running paid ads?',
        'a' => 'They do different jobs and work best together. Paid media buys attention while the budget runs; content marketing builds an asset that keeps earning traffic, trust, and search visibility long after a single piece is published. Most of our clients run both - content compounding the organic side while paid media covers the gap while it builds.',
    ],
    [
        'q' => 'How is content marketing different from SEO?',
        'a' => 'They overlap but aren\'t the same service. SEO is the technical and structural work that helps content and pages get found - site speed, indexing, on-page optimisation. Content marketing is the strategy and production of the material itself - articles, video, guides - built around what your audience actually wants to read or watch. Good content marketing makes SEO\'s job easier, and good SEO makes content actually reach people. Most clients run both together.',
    ],
    [
        'q' => 'How do you measure whether content marketing is working?',
        'a' => 'Organic traffic and keyword movement are the early signals, but the number that actually matters is leads and pipeline influenced by content-sourced traffic - tracked the same way we track every other channel. If a piece of content isn\'t moving either number after a fair runway, we say so and change the approach instead of quietly producing more of the same.',
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
        ['@type' => 'ListItem', 'position' => 3, 'name' => 'Content Marketing Agency & Services', 'item' => SITE_DOMAIN . $canonical_path],
    ],
], JSON_UNESCAPED_SLASHES); ?>
</script>

<style>
  /* ---------- Content marketing page additions (scoped, prefixed cm-) ---------- */
  .cm-hero { padding: 90px 0 70px; background: linear-gradient(180deg, var(--color-primary-light) 0%, var(--color-page) 60%); overflow: hidden; }
  .cm-hero__inner { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  .cm-hero h1 { font-size: clamp(1.7rem, 2.6vw + 1rem, 2.5rem); line-height: 1.18; }
  .cm-hero__actions { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
  .cm-hero__note { margin-top: 18px; font-size: 0.88rem; color: var(--color-muted); }

  /* Editorial-calendar-style hero visual */
  .cm-stage { position: relative; padding: 20px; }
  .cm-panel {
    background: var(--color-surface); border: 1px solid var(--color-border); border-radius: var(--radius-lg);
    box-shadow: 0 30px 70px -24px rgba(22,18,31,0.18);
    overflow: hidden;
  }
  .cm-panel__head { display: flex; align-items: center; justify-content: space-between; gap: 12px; padding: 16px 20px; border-bottom: 1px solid var(--color-border); }
  .cm-panel__title { font-size: 0.84rem; font-weight: 700; color: var(--color-ink); }
  .cm-panel__pill {
    display: inline-flex; align-items: center; gap: 6px;
    font-family: var(--font-mono); font-size: 0.72rem; font-weight: 600; color: var(--color-body);
    background: var(--color-surface-alt); padding: 5px 10px; border-radius: 999px;
  }
  .cm-panel__pill::before { content: ""; width: 6px; height: 6px; border-radius: 50%; background: #0F9D58; }
  .cm-row { display: flex; align-items: center; gap: 12px; padding: 12px 20px; border-top: 1px solid var(--color-border); }
  .cm-row:first-of-type { border-top: none; }
  .cm-row__tag {
    flex-shrink: 0; font-family: var(--font-mono); font-size: 0.68rem; font-weight: 700; text-transform: uppercase;
    padding: 4px 8px; border-radius: 6px; color: #fff; width: 68px; text-align: center;
  }
  .cm-row__title { flex: 1; font-size: 0.86rem; color: var(--color-ink); font-weight: 500; }
  .cm-row__stat { font-family: var(--font-mono); font-size: 0.78rem; font-weight: 700; color: #0F9D58; white-space: nowrap; }

  .cm-badge {
    position: absolute; display: flex; align-items: center; justify-content: center;
    width: 52px; height: 52px; border-radius: 16px; background: #fff;
    box-shadow: 0 14px 30px -10px rgba(22,18,31,0.28);
    animation: cmFloat 5s ease-in-out infinite;
  }
  .cm-badge svg { width: 26px; height: 26px; }
  .cm-badge--1 { top: -16px; left: 30px; animation-delay: 0s; }
  .cm-badge--2 { top: 40px; right: -18px; animation-delay: .6s; }
  .cm-badge--3 { bottom: -16px; left: 56px; animation-delay: 1.1s; }
  @keyframes cmFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @media (prefers-reduced-motion: reduce) { .cm-badge { animation: none; } }

  /* Format trust strip */
  .cm-stack { display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 14px; }
  .cm-stack span {
    font-family: var(--font-mono); font-size: 0.82rem; font-weight: 600; color: var(--color-body);
    border: 1px solid var(--color-border); padding: 8px 16px; border-radius: 999px; background: var(--color-surface);
  }

  /* Content-pillar progress bars */
  .cm-bars { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; gap: 22px; }
  .cm-bar__head { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px; font-size: 0.94rem; }
  .cm-bar__head strong { color: var(--color-ink); font-weight: 600; }
  .cm-bar__head span { font-family: var(--font-mono); color: var(--color-primary); font-weight: 600; }
  .cm-bar__track { height: 10px; border-radius: 999px; background: var(--color-surface-alt); overflow: hidden; }
  .cm-bar__fill {
    height: 100%; width: 0%; border-radius: 999px; background: var(--gradient-brand);
    transition: width 1.4s cubic-bezier(.16,1,.3,1);
  }
  .cm-bars.is-visible .cm-bar__fill { width: var(--cm-bar-target); }

  .cm-counter { font-variant-numeric: tabular-nums; }

  /* Testimonial fader */
  .cm-fader { max-width: 720px; margin: 0 auto; position: relative; min-height: 190px; }
  .cm-fader__slide {
    position: absolute; inset: 0; opacity: 0; transform: translateY(10px);
    transition: opacity .5s ease, transform .5s ease; text-align: center;
  }
  .cm-fader__slide.is-active { opacity: 1; transform: translateY(0); position: relative; }
  .cm-fader__stars { display: flex; justify-content: center; gap: 3px; margin-bottom: 14px; }
  .cm-fader__stars svg { width: 16px; height: 16px; fill: var(--color-amber); }
  .cm-fader__quote { font-family: var(--font-display); font-weight: 500; font-size: 1.3rem; letter-spacing: -0.01em; color: var(--color-ink); line-height: 1.5; margin: 0 0 20px; }
  .cm-fader__who strong { display: block; color: var(--color-ink); }
  .cm-fader__who span { font-size: 0.86rem; color: var(--color-muted); }
  .cm-fader__dots { display: flex; justify-content: center; gap: 8px; margin-top: 26px; }
  .cm-fader__dots button { width: 8px; height: 8px; border-radius: 50%; border: none; background: var(--color-border); cursor: pointer; padding: 0; transition: all .25s ease; }
  .cm-fader__dots button.is-active { width: 22px; border-radius: 4px; background: var(--gradient-brand); }

  @media (max-width: 960px) {
    .cm-hero__inner { grid-template-columns: 1fr; }
    .cm-stage { max-width: 420px; margin: 32px auto 0; }
  }
  @media (max-width: 640px) {
    .cm-badge { width: 42px; height: 42px; border-radius: 12px; }
    .cm-badge svg { width: 20px; height: 20px; }
    .cm-row__title { font-size: 0.8rem; }
  }
</style>

<!-- ============ HERO ============ -->
<section class="cm-hero">
  <div class="container cm-hero__inner">
    <div class="hero__copy">
      <span class="eyebrow">Content Marketing</span>
      <h1>A <span class="text-gradient">Content Marketing Agency</span> That Ties Every Piece Back to Traffic and Leads</h1>
      <p class="lead">AdsTime is a content marketing agency running editorial, video, and distribution as one system - content marketing services built around what your customers actually search for and read, tracked back to organic traffic and pipeline, not publishing volume.</p>
      <div class="cm-hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free content audit</a>
        <a href="#cm-work" class="btn btn--ghost">See what we run</a>
      </div>
      <p class="cm-hero__note">Every engagement starts with a full content and competitor audit, free.</p>
    </div>

    <div class="cm-stage">
      <div class="cm-panel" id="cmPanel">
        <div class="cm-panel__head">
          <span class="cm-panel__title">Editorial calendar - this month</span>
          <span class="cm-panel__pill">Live</span>
        </div>
        <div class="cm-row">
          <span class="cm-row__tag" style="background:#4338CA;">Article</span>
          <span class="cm-row__title">Buyer-intent guide, published</span>
          <span class="cm-row__stat">+18% traffic</span>
        </div>
        <div class="cm-row">
          <span class="cm-row__tag" style="background:#7C3AED;">Video</span>
          <span class="cm-row__title">Explainer, in production</span>
          <span class="cm-row__stat">Week 2</span>
        </div>
        <div class="cm-row">
          <span class="cm-row__tag" style="background:#F0466B;">Guide</span>
          <span class="cm-row__title">Comparison page, drafted</span>
          <span class="cm-row__stat">Review</span>
        </div>
        <div class="cm-row">
          <span class="cm-row__tag" style="background:#1EAE55;">Social</span>
          <span class="cm-row__title">Repurposed clip series</span>
          <span class="cm-row__stat">Scheduled</span>
        </div>
        <div class="cm-row">
          <span class="cm-row__tag" style="background:#D18900;">Email</span>
          <span class="cm-row__title">Newsletter recap</span>
          <span class="cm-row__stat">42% open</span>
        </div>
      </div>

      <div class="cm-badge cm-badge--1" title="Editorial calendar">
        <svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><rect x="3" y="5" width="18" height="16" rx="2"/><path d="M3 10h18M8 3v4M16 3v4"/></svg>
      </div>
      <div class="cm-badge cm-badge--2" title="Distribution">
        <svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><circle cx="6" cy="12" r="2.5"/><circle cx="18" cy="6" r="2.5"/><circle cx="18" cy="18" r="2.5"/><path d="M8.2 10.9l7.6-3.8M8.2 13.1l7.6 3.8"/></svg>
      </div>
      <div class="cm-badge cm-badge--3" title="Video">
        <svg viewBox="0 0 24 24" fill="none" stroke="#C026D3" stroke-width="1.8"><rect x="2.5" y="6" width="14" height="12" rx="2"/><path d="M16.5 10l5-3v10l-5-3z"/></svg>
      </div>
    </div>
  </div>
</section>

<!-- ============ TRUST STRIP ============ -->
<section style="padding-top: 0;">
  <div class="container">
    <div class="trust-strip">
      <span class="trust-strip__label">Formats we produce</span>
      <div class="cm-stack">
        <span>Long-form articles</span>
        <span>Video &amp; explainers</span>
        <span>Guides &amp; comparisons</span>
        <span>Email newsletters</span>
        <span>Social repurposing</span>
        <span>Case studies</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE RUN ============ -->
<section class="section--alt" id="cm-work">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we run</span>
      <h2>Content marketing services covering strategy, production, and distribution</h2>
      <p>A content marketing agency is only as good as its weakest link - most agencies are strong at one of these three and weak at the other two. We run all of it as one connected system.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
        <h3>Content strategy &amp; research</h3>
        <p>Topic and keyword research tied to what your customers actually search for, mapped into a real editorial calendar - not a list of ideas nobody prioritised.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
        <h3>Editorial &amp; long-form writing</h3>
        <p>Articles, guides, and comparison pages written to rank and to actually be read - by people who write for a living, not spun from a template.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><rect x="2.5" y="6" width="14" height="12" rx="2"/><path d="M16.5 10l5-3v10l-5-3z"/></svg></div>
        <h3>Video &amp; visual content</h3>
        <p>Explainers, product walkthroughs, and short-form video built to work both standalone and as source material for social clips.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><circle cx="6" cy="12" r="2.5"/><circle cx="18" cy="6" r="2.5"/><circle cx="18" cy="18" r="2.5"/><path d="M8.2 10.9l7.6-3.8M8.2 13.1l7.6 3.8"/></svg></div>
        <h3>Distribution &amp; repurposing</h3>
        <p>Every piece re-cut for email, social, and WhatsApp - because the best article still fails if the only people who see it found it by accident.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
        <h3>Case studies &amp; social proof</h3>
        <p>Real client results turned into case studies and proof points that do the selling on your site so your team doesn't have to repeat it on every call.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M3 3v18h18"/><path d="M7 15l4-5 4 3 5-7"/></svg></div>
        <h3>Reporting &amp; content ROI</h3>
        <p>Every piece tracked back to organic traffic, leads, and pipeline - so we know which content is actually earning its place and which isn't.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ CONTENT PILLARS ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Where the calendar actually goes</span>
      <h2>A typical content mix, before it's tuned to your funnel</h2>
    </div>
    <div class="cm-bars" id="cmBars">
      <div class="cm-bar">
        <div class="cm-bar__head"><strong>Long-form articles &amp; guides</strong><span>40%</span></div>
        <div class="cm-bar__track"><div class="cm-bar__fill" style="--cm-bar-target: 40%;"></div></div>
      </div>
      <div class="cm-bar">
        <div class="cm-bar__head"><strong>Video &amp; short-form</strong><span>25%</span></div>
        <div class="cm-bar__track"><div class="cm-bar__fill" style="--cm-bar-target: 25%;"></div></div>
      </div>
      <div class="cm-bar">
        <div class="cm-bar__head"><strong>Email &amp; newsletters</strong><span>15%</span></div>
        <div class="cm-bar__track"><div class="cm-bar__fill" style="--cm-bar-target: 15%;"></div></div>
      </div>
      <div class="cm-bar">
        <div class="cm-bar__head"><strong>Social repurposing</strong><span>12%</span></div>
        <div class="cm-bar__track"><div class="cm-bar__fill" style="--cm-bar-target: 12%;"></div></div>
      </div>
      <div class="cm-bar">
        <div class="cm-bar__head"><strong>Case studies &amp; proof</strong><span>8%</span></div>
        <div class="cm-bar__track"><div class="cm-bar__fill" style="--cm-bar-target: 8%;"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="stats" id="cmStats">
      <div class="stat">
        <div class="stat__num"><span class="cm-counter" data-count="8" data-suffix="">0</span></div>
        <div class="stat__label">years producing content that ranks</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="cm-counter" data-count="186" data-suffix="%">0</span></div>
        <div class="stat__label">average organic traffic growth in 12 months</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="cm-counter" data-count="94" data-suffix="%">0</span></div>
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
      <h2>A four-stage system, not a content mill</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Audit &amp; research</h3>
        <p>A full read of your existing content, competitors, and the keyword gaps worth closing, delivered inside two weeks.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>Editorial roadmap</h3>
        <p>A prioritised calendar mapped to your funnel - awareness, consideration, and decision content in the right ratio.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Produce &amp; distribute</h3>
        <p>Content goes out on a real schedule, with distribution across email, social, and WhatsApp built in from the start.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Track, report &amp; iterate</h3>
        <p>Every piece tied back to traffic and leads, with a monthly call that explains what's working and what to change.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Client results</span>
      <h2>What it's actually like to run content with us</h2>
    </div>
    <div class="cm-fader" id="cmFader">
      <div class="cm-fader__slide is-active">
        <div class="cm-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="cm-fader__quote">"AdsTime helped us reach 2.1M people a month without our team having to manage a single extra channel themselves."</p>
        <div class="cm-fader__who"><strong>Devendra Shastri</strong><span>Sanskriti Ventures</span></div>
      </div>
      <div class="cm-fader__slide">
        <div class="cm-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="cm-fader__quote">"Our own customer retention hit 94% after they rebuilt our lifecycle emails and content follow-ups - people actually come back now."</p>
        <div class="cm-fader__who"><strong>Dhruv</strong><span>Cloud Vandexa</span></div>
      </div>
      <div class="cm-fader__slide">
        <div class="cm-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="cm-fader__quote">"AdsTime took our lead volume up 340% without us touching our budget - the content and organic side finally started pulling its weight."</p>
        <div class="cm-fader__who"><strong>Sam Massiri</strong><span>Massiri Heights</span></div>
      </div>
      <div class="cm-fader__dots" id="cmFaderDots"></div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>Content Marketing FAQs</h2>
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
      <h2>Want to know what your content should actually be doing?</h2>
      <p>Get a free content audit &mdash; what's ranking, what's ignored, and what to fix first, in plain numbers.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free content audit</a>
    </div>
  </div>
</section>

<script>
(function () {
  // ---- Editorial panel: reveal once in view --------------------------
  var panel = document.getElementById('cmPanel');
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

  // ---- Content-pillar bars: animate once in view ------------------------------
  var bars = document.getElementById('cmBars');
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
  var statsWrap = document.getElementById('cmStats');
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
          statsWrap.querySelectorAll('.cm-counter').forEach(animateCount);
          statObs.disconnect();
        }
      });
    }, { threshold: 0.4 });
    statObs.observe(statsWrap);
  } else if (statsWrap) {
    statsWrap.querySelectorAll('.cm-counter').forEach(animateCount);
  }

  // ---- Testimonial fader -----------------------------------------------------
  var fader = document.getElementById('cmFader');
  if (fader) {
    var slides = fader.querySelectorAll('.cm-fader__slide');
    var dotsWrap = document.getElementById('cmFaderDots');
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
