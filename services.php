<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Services - Google Ads, Meta Ads & Analytics | ADSTIME';
$meta_description = 'ADSTIME manages Google Ads, Meta Ads, landing pages, and conversion tracking for businesses of any size. See exactly what\'s included in each service.';
$canonical_path = '/services';

$faq_items = [
    [
        'q' => 'Do I need a website before you can run ads for me?',
        'a' => 'For most campaigns, yes - you need at least one page for people to land on. If you don\'t have one yet, we can point you to a simple option or review a page you already have.',
    ],
    [
        'q' => 'Can you manage ads on just one platform?',
        'a' => 'Yes. Plenty of clients start with just Google Ads or just Meta Ads and add the other platform later once the first one is working well.',
    ],
    [
        'q' => 'Do you write the ad copy and design the creative too?',
        'a' => 'Yes, that\'s included from the Growth plan upward. On Starter, we\'ll help polish creative you provide.',
    ],
];

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom: 40px;">
  <div class="container">
    <div class="section-head center" style="max-width: 700px;">
      <span class="eyebrow">Services</span>
      <h1>Everything that goes into a campaign that actually works</h1>
      <p class="lead">We don't just turn on ads. Each service below is part of making sure the money you spend turns into real customers.</p>
    </div>
  </div>
</section>

<section style="padding-top: 20px;">
  <div class="container">
    <div class="grid grid--2">

      <div class="card">
        <div class="card__icon">🔍</div>
        <h3>Google Ads management</h3>
        <p>Search, Shopping, Display, and Performance Max campaigns. We research what your customers actually type into Google, then build campaigns around that - not guesses.</p>
        <ul class="price-card__list">
          <li>Keyword &amp; competitor research</li>
          <li>Campaign structure &amp; bid strategy</li>
          <li>Ad copy written and tested</li>
          <li>Ongoing budget &amp; bid optimisation</li>
        </ul>
      </div>

      <div class="card">
        <div class="card__icon">📱</div>
        <h3>Meta Ads management</h3>
        <p>Facebook and Instagram campaigns aimed at the people most likely to buy, not just the people most likely to click.</p>
        <ul class="price-card__list">
          <li>Audience research &amp; targeting</li>
          <li>Creative testing (images, video, copy)</li>
          <li>Retargeting for past visitors</li>
          <li>Weekly performance review</li>
        </ul>
      </div>

      <div class="card">
        <div class="card__icon">🎯</div>
        <h3>Landing page &amp; conversion review</h3>
        <p>Traffic is only half the job. We review the page people land on and suggest changes that turn more visitors into leads or sales.</p>
        <ul class="price-card__list">
          <li>Page speed &amp; mobile usability check</li>
          <li>Copy &amp; layout suggestions</li>
          <li>Form and checkout friction review</li>
        </ul>
      </div>

      <div class="card">
        <div class="card__icon">📊</div>
        <h3>Tracking &amp; analytics setup</h3>
        <p>Proper conversion tracking so every report shows real outcomes - purchases, leads, calls - not just clicks and impressions.</p>
        <ul class="price-card__list">
          <li>Google Analytics &amp; Tag Manager setup</li>
          <li>Conversion &amp; event tracking</li>
          <li>Clear monthly reporting dashboard</li>
        </ul>
      </div>

      <div class="card">
        <div class="card__icon">🎨</div>
        <h3>Creative &amp; ad copy</h3>
        <p>Images, short videos, and copy built for each platform, tested against each other so we know what's actually driving results.</p>
        <ul class="price-card__list">
          <li>Ad creative production</li>
          <li>A/B testing of copy and visuals</li>
          <li>Seasonal &amp; campaign-specific creative</li>
        </ul>
      </div>

      <div class="card">
        <div class="card__icon">🛒</div>
        <h3>Marketplace ads</h3>
        <p>For businesses that sell on Amazon, Flipkart, or similar marketplaces, we manage sponsored listings alongside your other channels.</p>
        <ul class="price-card__list">
          <li>Sponsored product campaigns</li>
          <li>Listing &amp; keyword optimisation</li>
          <li>Available on the Scale plan</li>
        </ul>
      </div>

    </div>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Who this is for</span>
      <h2>Built for any size of business</h2>
      <p>We work with first-time advertisers spending a few thousand rupees a month and established brands running ads across several markets. The plan changes, the way we work with you doesn't.</p>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>Services FAQs</h2>
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

<section class="section--alt">
  <div class="container">
    <div class="cta-band">
      <h2>See which services fit your business</h2>
      <p>Get a free audit and we'll tell you what to prioritise first.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free ad audit</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
