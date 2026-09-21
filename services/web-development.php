<?php
require_once __DIR__ . '/../includes/config.php';

$page_title = 'Web & Product Development Services | AdsTime';
$meta_description = 'AdsTime builds landing pages, e-commerce stores, web apps, and CMS sites engineered for speed, conversion, and the tracking every other channel depends on.';
$canonical_path = '/services/web-development';

// SEO-NOTE: FAQPage schema is added automatically by header.php whenever $faq_items is set -
// the same array also drives the visible accordion further down this page.
$faq_items = [
    [
        'q' => 'Do you build on templates or from scratch?',
        'a' => 'Both, depending on budget and timeline. E-commerce and marketing sites often start from a proven theme we heavily customise; web applications and anything with custom logic are built from scratch.',
    ],
    [
        'q' => 'Can you redesign a site we already have instead of starting over?',
        'a' => 'Yes. Most redesigns keep the URL structure and content that\'s already ranking, and rebuild the front end and performance around it so you don\'t lose SEO equity in the process.',
    ],
    [
        'q' => 'Do you handle hosting and domains too?',
        'a' => 'We can, or we can work with hosting you already have. Either way, every build ships with uptime monitoring and a clear handover of credentials and documentation.',
    ],
    [
        'q' => 'What happens after launch if something breaks?',
        'a' => 'Every project includes a post-launch support window, and ongoing maintenance plans are available after that for security patches, updates, and small ongoing changes.',
    ],
];

require __DIR__ . '/../includes/header.php';
?>

<style>
  /* ---------- Web-dev page additions (scoped, prefixed wd-) ---------- */
  .wd-hero { padding: 90px 0 70px; background: linear-gradient(180deg, var(--color-primary-light) 0%, var(--color-page) 60%); overflow: hidden; }
  .wd-hero__inner { display: grid; grid-template-columns: 1.05fr 0.95fr; gap: 56px; align-items: center; }
  .wd-hero__actions { display: flex; gap: 14px; margin-top: 30px; flex-wrap: wrap; }
  .wd-hero__note { margin-top: 18px; font-size: 0.88rem; color: var(--color-muted); }

  /* Terminal / code window visual */
  .wd-stage { position: relative; padding: 20px; }
  .wd-window {
    background: var(--color-ink); border-radius: var(--radius-lg);
    box-shadow: 0 30px 70px -24px rgba(22,18,31,0.45);
    overflow: hidden; font-family: var(--font-mono);
  }
  .wd-window__bar { display: flex; align-items: center; gap: 8px; padding: 14px 16px; border-bottom: 1px solid rgba(255,255,255,0.08); }
  .wd-window__bar span { width: 10px; height: 10px; border-radius: 50%; display: inline-block; }
  .wd-window__bar span:nth-child(1) { background: #EA4335; }
  .wd-window__bar span:nth-child(2) { background: #FBA919; }
  .wd-window__bar span:nth-child(3) { background: #1EAE55; }
  .wd-window__title { margin-left: 8px; font-size: 0.78rem; color: #8b87a3; }
  .wd-window__body { margin: 0; padding: 22px 20px 26px; font-size: 0.86rem; line-height: 1.8; min-height: 200px; }
  .wd-window__body .wd-prompt { color: #6b6785; }
  .wd-window__body .wd-ok { color: #34D399; }
  .wd-window__body .wd-line { color: #E7E2F0; white-space: pre-wrap; }
  .wd-cursor { display: inline-block; width: 7px; height: 15px; background: var(--color-amber); vertical-align: -2px; animation: wdBlink 1s steps(1) infinite; }
  @keyframes wdBlink { 50% { opacity: 0; } }

  .wd-badge {
    position: absolute; display: flex; align-items: center; justify-content: center;
    width: 52px; height: 52px; border-radius: 16px; background: #fff;
    box-shadow: 0 14px 30px -10px rgba(22,18,31,0.28);
    animation: wdFloat 5s ease-in-out infinite;
  }
  .wd-badge svg { width: 26px; height: 26px; }
  .wd-badge--1 { top: -16px; left: 30px; animation-delay: 0s; }
  .wd-badge--2 { top: 46px; right: -18px; animation-delay: .6s; }
  .wd-badge--3 { bottom: -14px; left: 60px; animation-delay: 1.1s; }
  @keyframes wdFloat { 0%,100% { transform: translateY(0); } 50% { transform: translateY(-10px); } }
  @media (prefers-reduced-motion: reduce) { .wd-badge, .wd-cursor { animation: none; } }

  .wd-lighthouse {
    position: absolute; bottom: -20px; right: 14px;
    background: #fff; border-radius: 999px; padding: 8px 14px 8px 8px;
    display: flex; align-items: center; gap: 8px;
    box-shadow: 0 14px 30px -10px rgba(22,18,31,0.28);
    font-family: var(--font-mono); font-size: 0.78rem; font-weight: 600; color: var(--color-ink);
  }
  .wd-lighthouse__ring {
    width: 26px; height: 26px; border-radius: 50%;
    background: conic-gradient(#1EAE55 0deg 353deg, #E7E2D8 353deg 360deg);
    display: flex; align-items: center; justify-content: center;
  }
  .wd-lighthouse__ring::after { content: ""; width: 18px; height: 18px; border-radius: 50%; background: #fff; }

  /* Tech-stack strip */
  .wd-stack { display: flex; flex-wrap: wrap; align-items: center; justify-content: center; gap: 14px; }
  .wd-stack span {
    font-family: var(--font-mono); font-size: 0.82rem; font-weight: 600; color: var(--color-body);
    border: 1px solid var(--color-border); padding: 8px 16px; border-radius: 999px; background: var(--color-surface);
  }

  /* Progress bars */
  .wd-bars { max-width: 720px; margin: 0 auto; display: flex; flex-direction: column; gap: 22px; }
  .wd-bar__head { display: flex; justify-content: space-between; align-items: baseline; margin-bottom: 8px; font-size: 0.94rem; }
  .wd-bar__head strong { color: var(--color-ink); font-weight: 600; }
  .wd-bar__head span { font-family: var(--font-mono); color: var(--color-primary); font-weight: 600; }
  .wd-bar__track { height: 10px; border-radius: 999px; background: var(--color-surface-alt); overflow: hidden; }
  .wd-bar__fill {
    height: 100%; width: 0%; border-radius: 999px; background: var(--gradient-brand);
    transition: width 1.4s cubic-bezier(.16,1,.3,1);
  }
  .wd-bars.is-visible .wd-bar__fill { width: var(--wd-target); }

  /* Animated stat counters (reuses .stats/.stat markup, adds count-up hook) */
  .wd-counter { font-variant-numeric: tabular-nums; }

  /* Mini testimonial fader */
  .wd-fader { max-width: 720px; margin: 0 auto; position: relative; min-height: 190px; }
  .wd-fader__slide {
    position: absolute; inset: 0; opacity: 0; transform: translateY(10px);
    transition: opacity .5s ease, transform .5s ease; text-align: center;
  }
  .wd-fader__slide.is-active { opacity: 1; transform: translateY(0); position: relative; }
  .wd-fader__stars { display: flex; justify-content: center; gap: 3px; margin-bottom: 14px; }
  .wd-fader__stars svg { width: 16px; height: 16px; fill: var(--color-amber); }
  .wd-fader__quote { font-family: var(--font-display); font-weight: 500; font-size: 1.3rem; letter-spacing: -0.01em; color: var(--color-ink); line-height: 1.5; margin: 0 0 20px; }
  .wd-fader__who strong { display: block; color: var(--color-ink); }
  .wd-fader__who span { font-size: 0.86rem; color: var(--color-muted); }
  .wd-fader__dots { display: flex; justify-content: center; gap: 8px; margin-top: 26px; }
  .wd-fader__dots button { width: 8px; height: 8px; border-radius: 50%; border: none; background: var(--color-border); cursor: pointer; padding: 0; transition: all .25s ease; }
  .wd-fader__dots button.is-active { width: 22px; border-radius: 4px; background: var(--gradient-brand); }

  @media (max-width: 960px) {
    .wd-hero__inner { grid-template-columns: 1fr; }
    .wd-stage { order: -1; }
  }
  @media (max-width: 640px) {
    .wd-badge { width: 42px; height: 42px; border-radius: 12px; }
    .wd-badge svg { width: 20px; height: 20px; }
  }
</style>

<!-- ============ HERO ============ -->
<section class="wd-hero">
  <div class="container wd-hero__inner">
    <div class="hero__copy">
      <span class="eyebrow">Web &amp; product development</span>
      <h1>Sites and apps built to carry every other channel</h1>
      <p class="lead">Landing pages, e-commerce builds, and web applications engineered for speed, conversion, and the tracking your ads, SEO, and email actually need to work.</p>
      <div class="wd-hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free technical audit</a>
        <a href="#wd-work" class="btn btn--ghost">See what we build</a>
      </div>
      <p class="wd-hero__note">Every build ships CRO-tested, conversion-tracked, and Core Web Vitals ready.</p>
    </div>

    <div class="wd-stage">
      <div class="wd-window">
        <div class="wd-window__bar">
          <span></span><span></span><span></span>
          <div class="wd-window__title">deploy.log</div>
        </div>
        <pre class="wd-window__body" id="wdTerminal"></pre>
      </div>

      <div class="wd-badge wd-badge--1" title="React">
        <svg viewBox="0 0 24 24" fill="none" stroke="#61DAFB" stroke-width="1.4"><circle cx="12" cy="12" r="2.2" fill="#61DAFB" stroke="none"/><ellipse cx="12" cy="12" rx="10" ry="4.2"/><ellipse cx="12" cy="12" rx="10" ry="4.2" transform="rotate(60 12 12)"/><ellipse cx="12" cy="12" rx="10" ry="4.2" transform="rotate(120 12 12)"/></svg>
      </div>
      <div class="wd-badge wd-badge--2" title="Shopify">
        <svg viewBox="0 0 24 24" fill="none" stroke="#95BF47" stroke-width="1.6"><path d="M7 7l1-3h8l1 3"/><rect x="5" y="7" width="14" height="13" rx="2"/><path d="M9 11c0-1.5 3-1.5 3 0M9 15c1 1 4 1 4-1"/></svg>
      </div>
      <div class="wd-badge wd-badge--3" title="PHP / Laravel">
        <svg viewBox="0 0 24 24" fill="none" stroke="#777BB4" stroke-width="1.8"><ellipse cx="12" cy="12" rx="10" ry="6"/><path d="M8 9.5h1.6a1.6 1.6 0 0 1 0 3.2H8M14.4 9.5H16a1.6 1.6 0 0 1 0 3.2h-1.6"/></svg>
      </div>

      <div class="wd-lighthouse" title="Average Lighthouse performance score">
        <span class="wd-lighthouse__ring"></span>
        98 performance
      </div>
    </div>
  </div>
</section>

<!-- ============ TECH STACK STRIP ============ -->
<section style="padding-top: 0;">
  <div class="container">
    <div class="trust-strip">
      <span class="trust-strip__label">Built on tools your team already trusts</span>
      <div class="wd-stack">
        <span>WordPress</span>
        <span>Shopify</span>
        <span>React / Next.js</span>
        <span>Laravel / PHP</span>
        <span>Webflow</span>
        <span>Node.js</span>
      </div>
    </div>
  </div>
</section>

<!-- ============ WHAT WE BUILD ============ -->
<section class="section--alt" id="wd-work">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we build</span>
      <h2>Every build is engineered to support the channel running through it</h2>
      <p>A site is only as good as what it does after someone lands on it. Every project below is scoped for speed, tracking, and conversion from day one &mdash; not bolted on after launch.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><rect x="3" y="4" width="18" height="16" rx="2"/><path d="M3 9h18M8 4v5"/></svg></div>
        <h3>Landing pages &amp; microsites</h3>
        <p>CRO-tested pages built for a single campaign goal, load in under a second, and track every scroll and click back to the ad or email that sent someone there.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/><path d="M2.5 4h2.5l2.4 11.5h9.9L20 8H6.3"/></svg></div>
        <h3>E-commerce stores</h3>
        <p>Shopify and headless storefronts with checkout flows, product pages, and speed budgets built around conversion rate, not just how the theme looks in a demo.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><path d="M9 3H5a2 2 0 0 0-2 2v4M15 3h4a2 2 0 0 1 2 2v4M9 21H5a2 2 0 0 1-2-2v-4M15 21h4a2 2 0 0 0 2-2v-4"/></svg></div>
        <h3>Web applications</h3>
        <p>Customer portals, booking tools, and internal dashboards built on React or Laravel, with the same care for load time and reliability as a public-facing site.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><path d="M4 6h16M4 12h16M4 18h10"/></svg></div>
        <h3>CMS &amp; headless builds</h3>
        <p>WordPress, Webflow, or a headless CMS wired up so your team can publish and edit without filing a dev ticket for every text change.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><path d="M12 3v3M12 18v3M4.2 4.2l2.1 2.1M17.7 17.7l2.1 2.1M3 12h3M18 12h3M4.2 19.8l2.1-2.1M17.7 6.3l2.1-2.1"/><circle cx="12" cy="12" r="4"/></svg></div>
        <h3>API &amp; third-party integrations</h3>
        <p>CRM, payment gateway, WhatsApp, and marketing-automation integrations wired directly into your site so leads and orders never sit in a spreadsheet.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(51,65,85,0.08)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M12 8v4l3 2"/><circle cx="12" cy="12" r="9"/></svg></div>
        <h3>Ongoing maintenance &amp; support</h3>
        <p>Security patches, uptime monitoring, and a small monthly bucket of hours for the tweaks every live site needs, so nothing sits broken for a month.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ EXPERIENCE / PROGRESS BARS ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Where the experience sits</span>
      <h2>Nine years of shipping the pages other channels depend on</h2>
    </div>
    <div class="wd-bars" id="wdBars">
      <div class="wd-bar">
        <div class="wd-bar__head"><strong>Frontend engineering</strong><span>96%</span></div>
        <div class="wd-bar__track"><div class="wd-bar__fill" style="--wd-target: 96%;"></div></div>
      </div>
      <div class="wd-bar">
        <div class="wd-bar__head"><strong>Backend &amp; API integrations</strong><span>92%</span></div>
        <div class="wd-bar__track"><div class="wd-bar__fill" style="--wd-target: 92%;"></div></div>
      </div>
      <div class="wd-bar">
        <div class="wd-bar__head"><strong>E-commerce &amp; CRO</strong><span>90%</span></div>
        <div class="wd-bar__track"><div class="wd-bar__fill" style="--wd-target: 90%;"></div></div>
      </div>
      <div class="wd-bar">
        <div class="wd-bar__head"><strong>Performance &amp; Core Web Vitals</strong><span>97%</span></div>
        <div class="wd-bar__track"><div class="wd-bar__fill" style="--wd-target: 97%;"></div></div>
      </div>
      <div class="wd-bar">
        <div class="wd-bar__head"><strong>SEO-ready architecture</strong><span>94%</span></div>
        <div class="wd-bar__track"><div class="wd-bar__fill" style="--wd-target: 94%;"></div></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STATS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="stats" id="wdStats">
      <div class="stat">
        <div class="stat__num"><span class="wd-counter" data-count="9">0</span><span>+</span></div>
        <div class="stat__label">years shipping web builds</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="wd-counter" data-count="140">0</span><span>+</span></div>
        <div class="stat__label">sites &amp; apps delivered</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="wd-counter" data-count="98">0</span></div>
        <div class="stat__label">average Lighthouse performance score</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span class="wd-counter" data-count="99">0</span><span>.9%</span></div>
        <div class="stat__label">uptime maintained across live sites</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ PROCESS ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How it works</span>
      <h2>From brief to launch, without the guesswork</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Discovery &amp; scope</h3>
        <p>We map what the site needs to do &mdash; conversions, integrations, content model &mdash; before a single screen gets designed.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>Design &amp; prototype</h3>
        <p>Wireframes and a clickable prototype so you sign off on structure and flow before development starts, not after.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Build &amp; integrate</h3>
        <p>Development in weekly sprints with staging links, so you see progress continuously instead of one reveal at the end.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Launch &amp; support</h3>
        <p>QA across devices, tracking verified end to end, then a maintenance window to catch anything real users find first.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ TESTIMONIALS ============ -->
<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Client results</span>
      <h2>What it's like to ship a site with us</h2>
    </div>
    <div class="wd-fader" id="wdFader">
      <div class="wd-fader__slide is-active">
        <div class="wd-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="wd-fader__quote">"Our new site loads in under a second and our ad Quality Score went up the same week it launched. Nobody had told me those were connected."</p>
        <div class="wd-fader__who"><strong>Meera Iyer</strong><span>Founder, Ivory &amp; Oak</span></div>
      </div>
      <div class="wd-fader__slide">
        <div class="wd-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="wd-fader__quote">"We'd been quoted three months by our old agency. AdsTime shipped the storefront in five weeks and it hasn't gone down once since."</p>
        <div class="wd-fader__who"><strong>Rohan Das</strong><span>Ops Lead, Kettle</span></div>
      </div>
      <div class="wd-fader__slide">
        <div class="wd-fader__stars"><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg><svg viewBox="0 0 20 20"><path d="M10 1.5l2.6 5.6 6.1.6-4.6 4.1 1.3 6-5.4-3.2-5.4 3.2 1.3-6-4.6-4.1 6.1-.6z"/></svg></div>
        <p class="wd-fader__quote">"The dashboard they built pulls data from four tools we used to check separately. It sounds small until you realise how many hours it saved every Monday."</p>
        <div class="wd-fader__who"><strong>Farah Sheikh</strong><span>COO, Pathwise</span></div>
      </div>

      <div class="wd-fader__dots" id="wdFaderDots"></div>
    </div>
  </div>
</section>

<!-- ============ FAQ ============ -->
<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>Web development FAQs</h2>
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
<section class="section--alt" id="wd-contact">
  <div class="container">
    <div class="cta-band">
      <h2>Have a site that should be doing more?</h2>
      <p>Get a free technical audit &mdash; speed, tracking, and conversion gaps, with a plain-language list of what to fix first.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free technical audit</a>
    </div>
  </div>
</section>

<script>
(function () {
  // ---- Terminal typewriter --------------------------------------------
  var terminal = document.getElementById('wdTerminal');
  var LINES = [
    { text: '$ npm run build', type: 'prompt' },
    { text: 'compiled successfully in 1.8s', type: 'ok' },
    { text: '$ lighthouse --view', type: 'prompt' },
    { text: 'performance 98  accessibility 100  seo 100', type: 'ok' },
    { text: '$ git push origin main', type: 'prompt' },
    { text: 'deployed to production', type: 'ok' }
  ];

  function typeLines(el, lines, i, done) {
    i = i || 0;
    if (i >= lines.length) { if (done) done(); return; }
    var row = document.createElement('div');
    var cls = lines[i].type === 'ok' ? 'wd-ok' : 'wd-prompt';
    row.innerHTML = '<span class="' + cls + '"></span>';
    el.appendChild(row);
    var target = lines[i].text;
    var span = row.querySelector('span');
    var c = 0;
    var iv = setInterval(function () {
      span.textContent = target.slice(0, c + 1);
      c++;
      if (c >= target.length) {
        clearInterval(iv);
        setTimeout(function () { typeLines(el, lines, i + 1, done); }, 260);
      }
    }, 22);
  }

  function loopTerminal() {
    terminal.innerHTML = '';
    var cursor = document.createElement('span');
    cursor.className = 'wd-cursor';
    typeLines(terminal, LINES, 0, function () {
      terminal.appendChild(cursor);
      setTimeout(loopTerminal, 2600);
    });
  }
  if (terminal) loopTerminal();

  // ---- Progress bars: animate once in view ------------------------------
  var bars = document.getElementById('wdBars');
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
  var statsWrap = document.getElementById('wdStats');
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
          statsWrap.querySelectorAll('.wd-counter').forEach(animateCount);
          statObs.disconnect();
        }
      });
    }, { threshold: 0.4 });
    statObs.observe(statsWrap);
  } else if (statsWrap) {
    statsWrap.querySelectorAll('.wd-counter').forEach(animateCount);
  }

  // ---- Testimonial fader --------------------------------------------------
  var fader = document.getElementById('wdFader');
  if (fader) {
    var slides = fader.querySelectorAll('.wd-fader__slide');
    var dotsWrap = document.getElementById('wdFaderDots');
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
