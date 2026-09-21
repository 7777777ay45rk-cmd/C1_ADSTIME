<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Pricing - AdsTime Performance Marketing Plans';
$meta_description = 'Simple, flat monthly pricing for performance marketing across paid media, SEO, content, email, automation, WhatsApp, and development. No hidden fees, no long contracts.';
$canonical_path = '/pricing';

// SEO-NOTE: FAQPage schema is added automatically by header.php whenever $faq_items is set
$faq_items = [
    [
        'q' => 'Do you charge a percentage of my ad spend?',
        'a' => 'No. Our plans are a flat monthly fee, so your management cost doesn\'t jump just because your budget grows. The Scale plan is the exception - it\'s a custom quote because those accounts vary a lot.',
    ],
    [
        'q' => 'Is my actual ad spend included in the plan price?',
        'a' => 'No. The plan price covers our management fee across whichever channels you run. You pay platforms like Google or Meta directly for your ad spend, so you always see exactly where that money goes.',
    ],
    [
        'q' => 'Can I switch plans or add channels later?',
        'a' => 'Yes, any time. Most businesses start on Starter or Growth with one or two channels and add SEO, content, email, or automation as their budget and needs grow.',
    ],
    [
        'q' => 'Is there a minimum contract length?',
        'a' => 'No. Plans are month to month. We ask for 30 days notice if you want to cancel, just so we can hand things over cleanly.',
    ],
    [
        'q' => 'What counts toward choosing a plan?',
        'a' => 'It\'s your total monthly budget across the channels we manage for you (for example paid media + email combined), not per channel.',
    ],
];

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom: 40px;">
  <div class="container">
    <div class="section-head center" style="max-width: 700px;">
      <span class="eyebrow">Pricing</span>
      <h1>One flat fee. No surprise line items.</h1>
      <p class="lead">Pick the plan that matches your monthly budget and channel mix. Every plan includes strategy, setup, tracking, and a real person you can reach.</p>
    </div>
  </div>
</section>

<section style="padding-top: 20px;">
  <div class="container">
    <div class="grid grid--3">

      <div class="card price-card">
        <h3>Starter</h3>
        <p>For businesses testing performance marketing for the first time or running one channel.</p>
        <div class="price-card__amount">₹25,000<small>/month</small></div>
        <p class="form-note">Best for monthly budgets up to ₹1.5 lakh</p>
        <ul class="price-card__list">
          <li>One channel (paid media, SEO, or email)</li>
          <li>Campaign setup &amp; conversion tracking</li>
          <li>Monthly performance report</li>
          <li>Email support</li>
        </ul>
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--ghost btn--block">Start with Starter</a>
      </div>

      <div class="card price-card price-card--featured">
        <span class="price-card__tag">Most popular</span>
        <h3>Growth</h3>
        <p>For businesses ready to run several channels together as one system.</p>
        <div class="price-card__amount">₹55,000<small>/month</small></div>
        <p class="form-note">Best for monthly budgets up to ₹6 lakh</p>
        <ul class="price-card__list">
          <li>Paid media + SEO + email, together</li>
          <li>Landing page conversion review</li>
          <li>Bi-weekly performance calls</li>
          <li>Priority email &amp; phone support</li>
          <li>Creative, content &amp; ad copy testing</li>
        </ul>
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary btn--block">Start with Growth</a>
      </div>

      <div class="card price-card">
        <h3>Scale</h3>
        <p>For established businesses running every channel across large or multi-market accounts.</p>
        <div class="price-card__amount">Custom<small>&nbsp;quote</small></div>
        <p class="form-note">Best for monthly budgets above ₹6 lakh</p>
        <ul class="price-card__list">
          <li>All 8 channels, all markets</li>
          <li>Dedicated account manager</li>
          <li>Weekly reporting &amp; strategy calls</li>
          <li>Custom dashboards &amp; automation</li>
          <li>Influencer &amp; WhatsApp campaigns</li>
        </ul>
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--ghost btn--block">Talk to us</a>
      </div>

    </div>

    <!-- WHY: businesses of any size land here, not just small ones - this line heads off that assumption -->
    <p style="text-align:center; margin-top: 40px; color: var(--color-muted);">These plans work whether you're spending your first ₹50,000 on ads or your fiftieth crore. If none of them fit exactly, tell us your situation and we'll build a plan around it.</p>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Questions</span>
      <h2>Pricing FAQs</h2>
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

<section>
  <div class="container">
    <div class="cta-band">
      <h2>Still not sure which plan fits?</h2>
      <p>Tell us your monthly budget and goals. We'll recommend a plan honestly, even if that means Starter.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Talk to us</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
