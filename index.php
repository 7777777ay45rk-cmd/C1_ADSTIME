<?php
require_once __DIR__ . '/includes/config.php';

// SEO-NOTE: title stays under ~60 characters so it doesn't get cut off in Google search results
$page_title = 'ADSTIME - Performance Marketing Agency in India';
$meta_description = 'ADSTIME runs Google Ads and Meta Ads for businesses of any size and reports back in plain numbers: leads, sales, and cost per result. Get a free ad account audit.';
$canonical_path = '/';

require __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="container hero__inner">
    <div class="hero__copy">
      <h1>Ads that pay for themselves, not just ads that get clicks.</h1>
      <p class="lead">We plan, build, and manage your Google and Meta ad campaigns, then show you exactly what each rupee spent brought back. No jargon-filled reports, no guesswork.</p>
      <div class="hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free ad audit</a>
        <a href="<?php echo BASE_PATH; ?>/pricing" class="btn btn--ghost">See pricing</a>
      </div>
      <p class="hero__note">No lock-in contracts. Cancel your plan any time.</p>
    </div>
    <div class="hero__art">
      <!-- REPLACE ME: swap for a real product/dashboard screenshot or team photo -->
      <img src="https://placehold.co/640x480/eef1ff/2954ff?text=Dashboard+Preview" alt="Preview of an ADSTIME ad performance dashboard" width="640" height="480" loading="eager">
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="stats">
      <div class="stat">
        <div class="stat__num"><span>₹40Cr+</span></div>
        <div class="stat__label">in ad spend managed</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>120+</span></div>
        <div class="stat__label">brands we've worked with</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>3.6x</span></div>
        <div class="stat__label">average return on ad spend</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>48 hrs</span></div>
        <div class="stat__label">average reply time on support</div>
      </div>
    </div>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we do</span>
      <h2>Everything your ads need, run by one team</h2>
      <p>Whether you're running your first campaign or you're managing ads across five markets, we plug into your business at whatever stage it's at.</p>
    </div>
    <div class="grid grid--3">
      <div class="card">
        <div class="card__icon">🔍</div>
        <h3>Google Ads</h3>
        <p>Search, Shopping, and Performance Max campaigns built around what your customers actually search for.</p>
      </div>
      <div class="card">
        <div class="card__icon">📱</div>
        <h3>Meta Ads</h3>
        <p>Facebook and Instagram campaigns that reach the right audience without wasting budget on people who'll never buy.</p>
      </div>
      <div class="card">
        <div class="card__icon">📈</div>
        <h3>Tracking &amp; Analytics</h3>
        <p>Proper conversion tracking so every report shows real leads and sales, not just clicks.</p>
      </div>
    </div>
    <p style="text-align:center; margin-top: 36px;">
      <a href="<?php echo BASE_PATH; ?>/services" class="btn btn--ghost">See all services</a>
    </p>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How it works</span>
      <h2>From first call to first result</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Free audit</h3>
        <p>We look at your current ads (or your market, if you're starting fresh) and tell you honestly what's working and what isn't.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>Plan</h3>
        <p>We agree on goals, budget, and what "success" looks like before a single ad goes live.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Launch</h3>
        <p>Campaigns go live with proper tracking in place from day one, so results are never a guess.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Improve</h3>
        <p>We check performance weekly and adjust budget, targeting, and ad copy toward what's actually working.</p>
      </div>
    </div>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="quote-card">
      <p>"ADSTIME cut our cost per lead by 40% in the first two months, and they explain what changed in plain English every time we ask. That alone is worth the retainer."</p>
      <div class="quote-card__who">
        <!-- REPLACE ME: real client headshot -->
        <img src="https://placehold.co/96x96/10152b/ffffff?text=RM" alt="Photo of Riya Mehta">
        <div>
          <strong>Riya Mehta</strong>
          <span>Founder, a D2C skincare brand</span>
        </div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="cta-band">
      <h2>Not sure where your ad budget is leaking?</h2>
      <p>Get a free, no-obligation audit of your current ads - or your market, if you haven't started yet.</p>
      <div class="hero__actions" style="justify-content:center;">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free ad audit</a>
        <a href="<?php echo BASE_PATH; ?>/pricing" class="btn btn--ghost">Compare plans</a>
      </div>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
