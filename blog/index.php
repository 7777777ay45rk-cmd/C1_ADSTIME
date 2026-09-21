<?php
require_once __DIR__ . '/../includes/config.php';
require_once __DIR__ . '/../includes/blog-functions.php';

$page_title = 'Blog - AdsTime';
$meta_description = 'Straightforward articles about running Google Ads and Meta Ads, from the AdsTime team.';
$canonical_path = '/blog';

// SEO-NOTE: posts are discovered automatically from /blog/*.php - just add a new file and it appears here.
$posts = adstime_get_blog_posts();

require __DIR__ . '/../includes/header.php';
?>

<section class="hero" style="padding-bottom: 40px;">
  <div class="container">
    <div class="section-head center" style="max-width: 700px;">
      <span class="eyebrow">Blog</span>
      <h1>Notes on running ads that actually work</h1>
      <p class="lead">No filler, no growth-hacker buzzwords - just what we've learned managing real ad budgets.</p>
    </div>
  </div>
</section>

<section style="padding-top: 0;">
  <div class="container" style="max-width: 780px;">
    <?php if (empty($posts)): ?>
      <p class="post-empty">No posts yet - check back soon.</p>
    <?php else: ?>
      <div class="post-list">
        <?php foreach ($posts as $post): ?>
        <article class="post-row">
          <div>
            <h2><a href="<?php echo BASE_PATH; ?>/blog/<?php echo htmlspecialchars($post['slug']); ?>"><?php echo htmlspecialchars($post['title']); ?></a></h2>
            <p><?php echo htmlspecialchars($post['description']); ?></p>
          </div>
          <div class="post-row__meta">
            <time datetime="<?php echo htmlspecialchars($post['date']); ?>"><?php echo htmlspecialchars(date('d M Y', strtotime($post['date']))); ?></time>
          </div>
        </article>
        <?php endforeach; ?>
      </div>
    <?php endif; ?>
  </div>
</section>

<?php require __DIR__ . '/../includes/footer.php'; ?>
