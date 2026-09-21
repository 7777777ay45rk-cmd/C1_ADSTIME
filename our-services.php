<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Services - Paid Media, SEO, Content, Email & More | AdsTime';
$meta_description = 'AdsTime runs performance marketing end to end: paid media, SEO, content, influencer, email, automation, WhatsApp, and the web builds that support all of it.';
$canonical_path = '/our-services';

$faq_items = [
    [
        'q' => 'Do I need to use every channel you offer?',
        'a' => 'No. Most clients start with one or two channels - often paid media plus SEO or email - and add more once the first ones are working. We build the mix around your revenue goal, not a fixed package.',
    ],
    [
        'q' => 'Can you manage ads on just one platform?',
        'a' => 'Yes. Plenty of clients start with just Google Ads or just Meta Ads and add other channels later once the first one is working well.',
    ],
    [
        'q' => 'Do you write the ad copy, content, and creative too?',
        'a' => 'Yes, that\'s included from the Growth plan upward. On Starter, we\'ll help polish creative and copy you provide.',
    ],
    [
        'q' => 'Is content, SEO, or email included, or is that extra?',
        'a' => 'Each plan lists exactly which channels are included. As your budget grows, you can add channels like content, email, or automation without switching agencies.',
    ],
];

require __DIR__ . '/includes/header.php';
?>

<section class="hero" style="padding-bottom: 40px;">
  <div class="container">
    <div class="section-head center" style="max-width: 760px;">
      <span class="eyebrow">Services</span>
      <h1>Every channel that moves revenue, run as one system</h1>
      <p class="lead">We don't just turn on ads. Paid media, SEO, content, influencer, email, automation, WhatsApp, and the web work behind it all - each service below exists to turn spend and attention into real customers.</p>
    </div>
  </div>
</section>

<section style="padding-top: 20px;">
  <div class="container">
    <div class="grid grid--2">

      <div class="card" id="paid-media">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.3" fill="#4338CA" stroke="none"/></svg></div>
        <h3>Paid media (Google &amp; Meta Ads)</h3>
        <p>Search, Shopping, Display, Performance Max, Facebook, and Instagram campaigns built around what your customers actually search for and respond to - not guesses. See our <a href="<?php echo BASE_PATH; ?>/services/google-ads-ppc-agency">Google Ads &amp; PPC management services</a>.</p>
        <ul class="price-card__list">
          <li>Keyword, audience &amp; competitor research</li>
          <li>Campaign structure &amp; bid strategy</li>
          <li>Ad copy and creative, written and tested</li>
          <li>Ongoing budget &amp; bid optimisation</li>
        </ul>
      </div>

      <div class="card" id="seo">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
        <h3>SEO</h3>
        <p>Technical, on-page, and content SEO built to compound - so the traffic you're not paying for keeps growing month over month.</p>
        <ul class="price-card__list">
          <li>Technical audit &amp; site health fixes</li>
          <li>Keyword mapping &amp; on-page optimisation</li>
          <li>Link building &amp; authority growth</li>
          <li>Rank &amp; traffic reporting</li>
        </ul>
      </div>

      <div class="card" id="content">
        <div class="card__icon" style="background:rgba(192,38,211,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#C026D3" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
        <h3>Content marketing</h3>
        <p>Blog, video, and social content built to earn attention and back up your SEO and paid campaigns with proof, not just promises. See our <a href="<?php echo BASE_PATH; ?>/services/content-marketing">content marketing services</a>.</p>
        <ul class="price-card__list">
          <li>Content strategy &amp; editorial calendar</li>
          <li>Writing, design &amp; short-form video</li>
          <li>Distribution across owned channels</li>
        </ul>
      </div>

      <div class="card" id="influencer">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><circle cx="12" cy="8" r="3.3"/><path d="M4 20c1.2-4 4.2-6 8-6s6.8 2 8 6"/></svg></div>
        <h3>Influencer marketing</h3>
        <p>Creator partnerships that put your product in front of an audience that already trusts the person recommending it.</p>
        <ul class="price-card__list">
          <li>Creator sourcing &amp; vetting</li>
          <li>Briefing, negotiation &amp; management</li>
          <li>Performance tracking per creator</li>
        </ul>
      </div>

      <div class="card" id="email">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
        <h3>Email marketing</h3>
        <p>Lifecycle flows, segmentation, and campaign calendars built in Klaviyo or HubSpot that turn your list into a top-three revenue channel.</p>
        <ul class="price-card__list">
          <li>Welcome, abandonment &amp; win-back flows</li>
          <li>List segmentation &amp; deliverability</li>
          <li>Campaign calendar &amp; copywriting</li>
        </ul>
      </div>

      <div class="card" id="automation">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M9 17H7a5 5 0 1 1 0-10h2M15 7h2a5 5 0 1 1 0 10h-2M8 12h8"/></svg></div>
        <h3>Marketing automation</h3>
        <p>CRM workflows, lead scoring, and cross-channel journeys that follow a customer from first click to repeat purchase without manual work. See our <a href="<?php echo BASE_PATH; ?>/services/marketing-automation">marketing automation services</a>.</p>
        <ul class="price-card__list">
          <li>CRM &amp; workflow setup</li>
          <li>Lead scoring &amp; routing</li>
          <li>Cross-channel journey mapping</li>
        </ul>
      </div>

      <div class="card" id="whatsapp">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 20l1.3-3.9A8 8 0 1 1 8 19l-5 1Z"/></svg></div>
        <h3>WhatsApp marketing</h3>
        <p>Broadcast campaigns, automated flows, and click-to-WhatsApp ads that turn conversations into your highest-converting channel.</p>
        <ul class="price-card__list">
          <li>Broadcast &amp; automated flows</li>
          <li>Click-to-WhatsApp ad campaigns</li>
          <li>Catalog &amp; order support</li>
        </ul>
      </div>

      <div class="card" id="web-development">
        <div class="card__icon" style="background:rgba(51,65,85,0.08)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M8 6 2 12l6 6M16 6l6 6-6 6M14 4l-4 16"/></svg></div>
        <h3>Web &amp; product development</h3>
        <p>Landing pages, CRO-tested site builds, and the technical infrastructure fast enough to support every channel running above it.</p>
        <ul class="price-card__list">
          <li>Landing page &amp; site builds</li>
          <li>Conversion tracking &amp; analytics setup</li>
          <li>Page speed &amp; CRO testing</li>
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
      <p>We work with first-time advertisers spending a few thousand rupees a month and established brands running every channel above across several markets. The mix changes, the way we work with you doesn't.</p>
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
      <h2>See which channels fit your business</h2>
      <p>Get a free growth audit and we'll tell you what to prioritise first.</p>
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free growth audit</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>