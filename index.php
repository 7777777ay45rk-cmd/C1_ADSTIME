<?php
require_once __DIR__ . '/includes/config.php';

// SEO-NOTE: title stays under ~60 characters so it doesn't get cut off in Google search results
$page_title = 'AdsTime - Performance Marketing Agency in India';
$meta_description = 'AdsTime plans and runs paid media, SEO, content, influencer, email, automation, and WhatsApp marketing as one connected growth engine. Get a free growth audit.';
$canonical_path = '/';

require __DIR__ . '/includes/header.php';
?>

<section class="hero">
  <div class="container hero__inner">
    <div class="hero__copy">
      <span class="eyebrow"> AdsTime - Performance marketing agency</span>
      <h1>Every channel.<br><span class="text-gradient">One growth number.</span></h1>
      <p class="lead">We plan and run your paid media, content, influencer, email, automation, WhatsApp, SEO, and web development &mdash; as one connected growth engine, not eight disconnected vendors.</p>
      <div class="hero__actions">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--primary">Get a free growth audit</a>
        <a href="<?php echo BASE_PATH; ?>/our-services" class="btn btn--ghost">See our channels</a>
      </div>
      <p class="hero__note">No lock-in contracts. Cancel your plan any time.</p>
    </div>

    <div class="hero__art">
      <div class="hero-dashboard-stage">

        <div class="hero-dashboard">
          <div class="hero-dashboard__head">
            <span class="hero-dashboard__title">Channels we're running right now</span>
            <span class="hero-dashboard__pill">8 live</span>
          </div>

          <div class="channel-grid">
            <div class="channel-tile">
              <div class="channel-tile__dot" style="background:rgba(67,56,202,0.12)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.3" fill="#4338CA" stroke="none"/></svg></div>
              <div><div class="channel-tile__name">Paid Media</div><div class="channel-tile__metric">ROAS 4.8x</div></div>
            </div>
            <div class="channel-tile">
              <div class="channel-tile__dot" style="background:rgba(124,58,237,0.12)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
              <div><div class="channel-tile__name">SEO</div><div class="channel-tile__metric">312 kw &middot; page 1</div></div>
            </div>
            <div class="channel-tile">
              <div class="channel-tile__dot" style="background:rgba(192,38,211,0.12)"><svg viewBox="0 0 24 24" fill="none" stroke="#C026D3" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
              <div><div class="channel-tile__name">Content</div><div class="channel-tile__metric">2.1M reach / mo</div></div>
            </div>
            <div class="channel-tile">
              <div class="channel-tile__dot" style="background:rgba(240,70,107,0.12)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><circle cx="12" cy="8" r="3.3"/><path d="M4 20c1.2-4 4.2-6 8-6s6.8 2 8 6"/></svg></div>
              <div><div class="channel-tile__name">Influencer</div><div class="channel-tile__metric">340 creators</div></div>
            </div>
            <div class="channel-tile">
              <div class="channel-tile__dot" style="background:rgba(249,115,22,0.12)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
              <div><div class="channel-tile__name">Email</div><div class="channel-tile__metric">42% open rate</div></div>
            </div>
            <div class="channel-tile">
              <div class="channel-tile__dot" style="background:rgba(251,169,25,0.16)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M9 17H7a5 5 0 1 1 0-10h2M15 7h2a5 5 0 1 1 0 10h-2M8 12h8"/></svg></div>
              <div><div class="channel-tile__name">Automation</div><div class="channel-tile__metric">120 flows live</div></div>
            </div>
            <div class="channel-tile">
              <div class="channel-tile__dot" style="background:rgba(37,211,102,0.14)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 20l1.3-3.9A8 8 0 1 1 8 19l-5 1Z"/></svg></div>
              <div><div class="channel-tile__name">WhatsApp</div><div class="channel-tile__metric">68% reply rate</div></div>
            </div>
            <div class="channel-tile">
              <div class="channel-tile__dot" style="background:rgba(51,65,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M8 6 2 12l6 6M16 6l6 6-6 6M14 4l-4 16"/></svg></div>
              <div><div class="channel-tile__name">Development</div><div class="channel-tile__metric">98 Lighthouse</div></div>
            </div>
          </div>
        </div>

        <div class="float-badge badge-1" aria-hidden="true" title="Search &amp; Ads">
          <svg viewBox="0 0 24 24">
            <path d="M12 12 L12 2 A10 10 0 0 1 22 12 Z" fill="#4285F4"/>
            <path d="M12 12 L22 12 A10 10 0 0 1 12 22 Z" fill="#34A853"/>
            <path d="M12 12 L12 22 A10 10 0 0 1 2 12 Z" fill="#FBBC05"/>
            <path d="M12 12 L2 12 A10 10 0 0 1 12 2 Z" fill="#EA4335"/>
            <circle cx="12" cy="12" r="4.6" fill="#fff"/>
          </svg>
        </div>
        <div class="float-badge badge-2" aria-hidden="true" title="Content &amp; Influencer">
          <svg viewBox="0 0 24 24">
            <defs>
              <linearGradient id="igGradPhp" x1="0" y1="1" x2="1" y2="0">
                <stop offset="0%" stop-color="#F58529"/>
                <stop offset="50%" stop-color="#DD2A7B"/>
                <stop offset="100%" stop-color="#8134AF"/>
              </linearGradient>
            </defs>
            <rect x="2.5" y="2.5" width="19" height="19" rx="6.5" fill="none" stroke="url(#igGradPhp)" stroke-width="2"/>
            <circle cx="12" cy="12" r="4.3" fill="none" stroke="url(#igGradPhp)" stroke-width="2"/>
            <circle cx="17.3" cy="6.7" r="1.15" fill="url(#igGradPhp)"/>
          </svg>
        </div>
        <div class="float-badge badge-3" aria-hidden="true" title="WhatsApp Marketing">
          <svg viewBox="0 0 24 24">
            <circle cx="12" cy="12" r="10" fill="#25D366"/>
            <path d="M7 18l.85-2.86A6.5 6.5 0 1 1 10.5 17.6L7 18Z" fill="none" stroke="#fff" stroke-width="1.4"/>
            <path d="M9.3 9.7c-.2.9.5 2.4 1.5 3.4 1 1 2.5 1.7 3.4 1.5.4-.1.7-.6.6-1l-.9-.9c-.2-.2-.5-.2-.7-.1l-.4.2c-.4.2-.9 0-1.4-.5-.5-.5-.7-1-.5-1.4l.2-.4c.1-.2.1-.5-.1-.7l-.9-.9c-.4-.1-.9.2-1 .6Z" fill="#fff"/>
          </svg>
        </div>
        <div class="float-badge badge-4" aria-hidden="true" title="Email &amp; Automation">
          <svg viewBox="0 0 24 24">
            <rect x="2.5" y="5" width="19" height="14" rx="3" fill="#F97316"/>
            <path d="m4.5 7.5 7.5 5.6 7.5-5.6" fill="none" stroke="#fff" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>

        <div class="float-tag tag-1"><i style="background:#4338CA"></i>Paid Media &middot; 4.8x ROAS</div>
        <div class="float-tag tag-2"><i style="background:#25D366"></i>WhatsApp &middot; 68% reply rate</div>

      </div>
    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/homeincludes/brands.html'; ?>
<section>
  <div class="container">
    <div class="stats">
      <div class="stat">
        <div class="stat__num"><span>6.2x</span></div>
        <div class="stat__label">avg. blended ROAS across paid channels</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>8</span></div>
        <div class="stat__label">channels run under one roof, ads to dev</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>94%</span></div>
        <div class="stat__label">client retention past 12 months</div>
      </div>
      <div class="stat">
        <div class="stat__num"><span>&#8377;3.3Cr+</span></div>
        <div class="stat__label">pipeline influenced across channels in 2025</div>
      </div>
    </div>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">What we run</span>
      <h2>Every channel your customers are on, run by specialists</h2>
      <p>We don't hand you between vendors. One connected team plans, builds, and optimises across all eight channels &mdash; so nothing falls through the cracks between your ads and your inbox.</p>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="12" cy="12" r="9"/><circle cx="12" cy="12" r="5"/><circle cx="12" cy="12" r="1.3" fill="#4338CA" stroke="none"/></svg></div>
        <h3>Paid Media</h3>
        <p>Full-funnel campaigns across Google, Meta, LinkedIn, and TikTok &mdash; creative testing, audience modelling, and daily bid optimisation.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><circle cx="11" cy="11" r="7"/><path d="M21 21l-4.3-4.3"/></svg></div>
        <h3>SEO</h3>
        <p>Technical audits, topical content clusters, link building, and AI-answer-engine optimisation that compound long after ad spend stops.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(192,38,211,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#C026D3" stroke-width="1.8"><path d="M4 6h16M4 12h10M4 18h13"/></svg></div>
        <h3>Content Marketing</h3>
        <p>Editorial calendars, long-form and video production, and repurposing systems that turn one asset into a week of distribution.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><circle cx="12" cy="8" r="3.3"/><path d="M4 20c1.2-4 4.2-6 8-6s6.8 2 8 6"/></svg></div>
        <h3>Influencer Marketing</h3>
        <p>Creator sourcing, contract and usage-rights management, and performance-based campaigns tracked all the way to revenue.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(249,115,22,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F97316" stroke-width="1.8"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="m4 7 8 6 8-6"/></svg></div>
        <h3>Email Marketing</h3>
        <p>Lifecycle flows, segmentation, and campaign calendars built in Klaviyo or HubSpot that turn your list into a top-three revenue channel.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M9 17H7a5 5 0 1 1 0-10h2M15 7h2a5 5 0 1 1 0 10h-2M8 12h8"/></svg></div>
        <h3>Marketing Automation</h3>
        <p>CRM workflows, lead scoring, and cross-channel journeys that follow a customer from first click to repeat purchase.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M3 20l1.3-3.9A8 8 0 1 1 8 19l-5 1Z"/></svg></div>
        <h3>WhatsApp Marketing</h3>
        <p>Broadcast campaigns, automated flows, and click-to-WhatsApp ads that turn conversations into your highest-converting channel.</p>
      </div>
      <div class="card">
        <div class="card__icon" style="background:rgba(51,65,85,0.08)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><path d="M8 6 2 12l6 6M16 6l6 6-6 6M14 4l-4 16"/></svg></div>
        <h3>Web &amp; Product Development</h3>
        <p>Landing pages, CRO-tested site builds, and technical infrastructure fast enough to support everything running above it.</p>
      </div>
    </div>
    <p style="text-align:center; margin-top: 36px;">
      <a href="<?php echo BASE_PATH; ?>/our-services" class="btn btn--ghost">See all services</a>
    </p>
  </div>
</section>

<section id="industries">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">Who we run this for</span>
      <h2>Built around how your industry actually sells</h2>
      <p>The channels stay the same, but what wins looks different in a storefront cart than it does in a hospital waiting room. Here's how the mix changes by industry.</p>
    </div>
    <div class="grid grid--4">
      <div class="card" id="industry-ecommerce">
        <div class="card__icon" style="background:rgba(67,56,202,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#4338CA" stroke-width="1.8"><circle cx="9" cy="20" r="1.4"/><circle cx="18" cy="20" r="1.4"/><path d="M2.5 4h2.5l2.4 11.5h9.9L20 8H6.3"/></svg></div>
        <h3>E-commerce &amp; D2C</h3>
        <p>Paid media and email tuned for repeat purchase rate, not just first-order CAC, with SEO built around buying-intent search.</p>
      </div>
      <div class="card" id="industry-real-estate">
        <div class="card__icon" style="background:rgba(124,58,237,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#7C3AED" stroke-width="1.8"><path d="M4 21V8l8-5 8 5v13M9 21v-6h6v6"/></svg></div>
        <h3>Real Estate</h3>
        <p>Lead pipelines for developers and agents &mdash; WhatsApp and automation follow-up so no enquiry goes cold overnight.</p>
      </div>
      <div class="card" id="industry-healthcare">
        <div class="card__icon" style="background:rgba(240,70,107,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#F0466B" stroke-width="1.8"><path d="M3 12h4l2-5 4 10 2-5h6"/></svg></div>
        <h3>Healthcare &amp; Wellness</h3>
        <p>Trust-first content and local SEO for clinics and wellness brands, built around compliance-aware messaging.</p>
      </div>
      <div class="card" id="industry-local">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M12 21s-7-6.3-7-11a7 7 0 0 1 14 0c0 4.7-7 11-7 11z"/><circle cx="12" cy="10" r="2.4"/></svg></div>
        <h3>Local &amp; Service Businesses</h3>
        <p>Google Business Profile, local SEO, and click-to-WhatsApp ads built to win the "near me" search and the call that follows. Based in Noida, Delhi, or Ghaziabad? See why local teams call us the <a href="<?php echo BASE_PATH; ?>/services/best-digital-marketing-agency-in-noida">best digital marketing agency in Noida</a>, the <a href="<?php echo BASE_PATH; ?>/services/best-digital-marketing-agency-in-delhi">best digital marketing agency in Delhi</a>, or the <a href="<?php echo BASE_PATH; ?>/services/best-digital-marketing-agency-in-ghaziabad">best digital marketing agency in Ghaziabad</a>.</p>
      </div>
      <div class="card" id="industry-it-saas">
        <div class="card__icon" style="background:rgba(217,146,0,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#D18900" stroke-width="1.8"><path d="M9 17H7a5 5 0 1 1 0-10h2M15 7h2a5 5 0 1 1 0 10h-2M8 12h8"/></svg></div>
        <h3>IT &amp; SaaS</h3>
        <p>SEO and content built for long sales cycles, paired with paid search that qualifies demo bookings instead of just filling a funnel.</p>
      </div>
      <div class="card" id="industry-manufacturing">
        <div class="card__icon" style="background:rgba(51,65,85,0.08)"><svg viewBox="0 0 24 24" fill="none" stroke="#334155" stroke-width="1.8"><rect x="3" y="10" width="7" height="10"/><rect x="14" y="6" width="7" height="14"/><path d="M3 10l4-4 3 3 4-5 7 6"/></svg></div>
        <h3>Manufacturing &amp; Export/B2B</h3>
        <p>Lead-gen built to qualify serious buyers early, plus SEO and content for the long research cycle before an RFQ ever lands.</p>
      </div>
      <div class="card" id="industry-hospitality">
        <div class="card__icon" style="background:rgba(192,38,211,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#C026D3" stroke-width="1.8"><path d="M3 21V10l9-6 9 6v11M8 21v-6h8v6"/></svg></div>
        <h3>Hospitality &amp; Travel</h3>
        <p>Booking-focused paid media and reputation management, tuned to seasonal demand instead of a flat always-on budget.</p>
      </div>
      <div class="card" id="industry-education">
        <div class="card__icon" style="background:rgba(30,174,85,0.1)"><svg viewBox="0 0 24 24" fill="none" stroke="#1EAE55" stroke-width="1.8"><path d="M2 9l10-5 10 5-10 5-10-5z"/><path d="M6 11v5c0 1.5 2.7 3 6 3s6-1.5 6-3v-5"/></svg></div>
        <h3>Education &amp; EdTech</h3>
        <p>Enrollment funnels and nurture sequences built around admissions cycles, not a generic always-on lead form.</p>
      </div>
    </div>
    <p style="text-align:center; margin-top: 36px;">
      <a href="<?php echo BASE_PATH; ?>/contact" class="btn btn--ghost">Talk to us about your industry</a>
    </p>
  </div>
</section>

<section class="section--alt">
  <div class="container">
    <div class="section-head center">
      <span class="eyebrow">How it works</span>
      <h2>A four-stage engine, run across every channel</h2>
    </div>
    <div class="grid grid--4">
      <div class="card">
        <div class="card__icon">1</div>
        <h3>Audit &amp; discovery</h3>
        <p>A full audit of your existing channels, tech stack, and competitors &mdash; delivered inside two weeks, whatever you're already running.</p>
      </div>
      <div class="card">
        <div class="card__icon">2</div>
        <h3>Strategy &amp; roadmap</h3>
        <p>A prioritised 90-day roadmap that models channel mix against your revenue goal, not a one-size playbook.</p>
      </div>
      <div class="card">
        <div class="card__icon">3</div>
        <h3>Execution across channels</h3>
        <p>Specialist pods for ads, content, lifecycle, and dev ship weekly &mdash; with standups so nothing sits in a backlog.</p>
      </div>
      <div class="card">
        <div class="card__icon">4</div>
        <h3>Track, report &amp; iterate</h3>
        <p>One dashboard with blended attribution, plus a monthly working session to adjust the mix around what's working.</p>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="container">
    <div class="cta-band">
      <h2>Ready to run every channel as one system?</h2>
      <p>Get a free, no-obligation growth audit &mdash; a full read on your paid, organic, and lifecycle channels, plus a first-90-days roadmap.</p>
      <div class="hero__actions" style="justify-content:center;">
        <a href="<?php echo BASE_PATH; ?>/contact" class="btn" style="background:#fff; color: var(--color-primary);">Get a free growth audit</a>
        <a href="<?php echo BASE_PATH; ?>/pricing" class="btn btn--ghost">Compare plans</a>
      </div>
    </div>
  </div>
</section>
<?php include __DIR__ . '/includes/homeincludes/testimonial.html'; ?>
<?php require __DIR__ . '/includes/footer.php'; ?>