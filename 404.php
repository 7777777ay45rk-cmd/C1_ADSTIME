<?php
require_once __DIR__ . '/includes/config.php';

$page_title = 'Page Not Found - AdsTime';
$meta_description = 'The page you\'re looking for doesn\'t exist.';
$canonical_path = '/404';

// WHY: tell the browser/search engines this really is a 404, since .htaccess routes
// the error document through the normal PHP-serving rule
http_response_code(404);

require __DIR__ . '/includes/header.php';
?>

<section class="error-page">
  <div class="container">
    <h1>404</h1>
    <p class="lead">We couldn't find that page.</p>
    <a href="<?php echo BASE_PATH; ?>/" class="btn btn--primary">Back to homepage</a>
  </div>
</section>

<?php require __DIR__ . '/includes/footer.php'; ?>
