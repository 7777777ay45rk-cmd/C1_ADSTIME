<?php
/**
 * Blog post template.
 *
 * SEO-NOTE: keep $post_title, $post_description, $post_date as simple single-line string
 * assignments (as below) - blog/index.php and sitemap.php read them with PHP's tokenizer
 * without running this file, so they must stay literal strings, not function calls or variables.
 * To add a new post: copy this file, rename it (the filename becomes the URL slug), and edit
 * the three lines below plus the content further down.
 */
$post_title = 'Getting Started with Performance Marketing: A Plain-English Guide';
$post_description = 'What "performance marketing" actually means, how it\'s different from brand advertising, and the three things to get right before you spend a rupee.';
$post_date = '2026-08-01';

require_once __DIR__ . '/../includes/config.php';

$page_title = $post_title . ' - AdsTime Blog';
$meta_description = $post_description;
$canonical_path = '/blog/getting-started-with-performance-marketing';

require __DIR__ . '/../includes/header.php';
?>

<article class="blog-post">
  <div class="container" style="max-width: 720px; padding-top: 56px;">
    <h1><?php echo htmlspecialchars($post_title); ?></h1>
    <time class="post-date" datetime="<?php echo htmlspecialchars($post_date); ?>"><?php echo htmlspecialchars(date('d M Y', strtotime($post_date))); ?></time>

    <!-- REPLACE ME: real header image for this post -->
    <img src="https://placehold.co/720x360/eef1ff/2954ff?text=Performance+Marketing" alt="Illustration representing performance marketing">

    <p>If you've heard the term "performance marketing" and weren't quite sure what makes it different from regular advertising, here's the short version: it's advertising where you only really care about the result - a sale, a lead, a booking - not how many people simply saw or liked the ad.</p>

    <h2>Performance marketing vs. brand advertising</h2>
    <p>Brand advertising (think a TV ad or a billboard) is about getting your name in front of people over time. It's hard to tie a single ad to a single sale.</p>
    <p>Performance marketing is the opposite. Every rupee you spend on a Google or Meta ad can be traced to what it produced - a click, a form filled in, a purchase. That's what makes it possible to say "this campaign brought back ₹3 for every ₹1 spent."</p>

    <h2>Three things to get right before you spend a rupee</h2>
    <ol>
      <li><strong>Tracking.</strong> If you can't measure what happens after someone clicks your ad, you can't tell if it worked. Set up conversion tracking before you launch, not after.</li>
      <li><strong>A clear goal.</strong> Decide what a "result" means for your business - a sale, a signup, a call - before you write a single ad.</li>
      <li><strong>A landing page that matches the ad.</strong> If your ad promises a discount and the page doesn't mention it, people leave. The page people land on matters as much as the ad itself.</li>
    </ol>

    <h2>What this means for your budget</h2>
    <p>You don't need a huge budget to start. What matters more is starting with tracking in place, so whatever you spend - big or small - teaches you something you can use next month.</p>

    <p>If you want a second pair of eyes on your current ads, or you're planning your first campaign, <a href="<?php echo BASE_PATH; ?>/contact">get in touch for a free audit</a>.</p>
  </div>
</article>

<?php require __DIR__ . '/../includes/footer.php'; ?>
