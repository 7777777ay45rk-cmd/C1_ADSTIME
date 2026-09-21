<?php
/**
 * Site-wide configuration.
 * Edit the constants below to update site name, domain, and contact info everywhere at once.
 */

// SEO-NOTE: keep SITE_NAME and SITE_DOMAIN in sync with your Google Business Profile / Search Console
// so titles, JSON-LD, and canonical URLs all agree on the same brand name and domain.
define('SITE_NAME', 'AdsTime');
define('SITE_TAGLINE', 'Performance Marketing Agency');
define('SITE_DOMAIN', 'https://www.adstime.in'); // no trailing slash

// WHY: a separate app/client subdomain is common for agencies (client login, reporting dashboard).
// Point this at your real app subdomain when it exists. It's used for the header/footer "Client Login" link.
define('APP_URL', 'https://app.adstime.in');

// Contact details - shown in header/footer, contact page, and JSON-LD Organization schema
define('CONTACT_EMAIL', 'start@adstime.in');
define('CONTACT_PHONE', '+91 79832 57400');
define('CONTACT_PHONE_LINK', '+917983257400'); // digits only, used inside tel: links
define('CONTACT_ADDRESS', 'Noida, Uttarpradesh, India');

// WhatsApp number used by the floating WhatsApp button - country code + number, no "+", no spaces
// (this is the format wa.me links require)
define('WHATSAPP_NUMBER', '917983257400');

// Google Tag Manager container ID - printed into every page by includes/header.php
define('GTM_ID', 'GTM-58DS3FVQ');

// Social links - used in footer + JSON-LD "sameAs"
define('SOCIAL_FACEBOOK', 'https://www.facebook.com/adstime.in');
define('SOCIAL_LINKEDIN', 'https://www.linkedin.com/company/adstime');
define('SOCIAL_INSTAGRAM', 'https://www.instagram.com/adstime.in');

/**
 * BASE_PATH: the URL path prefix for every internal link/asset on the site.
 *
 * WHY: we compute this from config.php's OWN fixed location (this file always lives in
 * /includes/, one folder below the site root) rather than from the currently-running script
 * (which changes depending on whether you're loading /index.php, /blog/index.php, etc).
 * That means the exact same code works whether the site is installed at:
 *   - the domain root, e.g. https://adstime.in/           -> BASE_PATH = ''
 *   - a subfolder for local testing, e.g. http://localhost/adstime-test/ -> BASE_PATH = '/adstime-test'
 * Every internal link and asset path in the site should be built as BASE_PATH . '/something'.
 */
$adstime_site_root = realpath(__DIR__ . '/..');               // fixed: parent folder of includes/
$adstime_doc_root   = realpath($_SERVER['DOCUMENT_ROOT']);

if ($adstime_doc_root && strpos($adstime_site_root, $adstime_doc_root) === 0) {
    $adstime_base_path = substr($adstime_site_root, strlen($adstime_doc_root));
} else {
    // Fallback if DOCUMENT_ROOT isn't set (e.g. some CLI/test setups) - assume site root
    $adstime_base_path = '';
}
$adstime_base_path = str_replace('\\', '/', $adstime_base_path); // WHY: Windows dev servers use backslashes
$adstime_base_path = rtrim($adstime_base_path, '/');

define('BASE_PATH', $adstime_base_path);

unset($adstime_site_root, $adstime_doc_root, $adstime_base_path);

/**
 * Cache-busting helper for CSS/JS: appends "?v=<file's last-modified time>" to a BASE_PATH-relative
 * asset URL, e.g. adstime_asset_url('/assets/css/style.css').
 *
 * WHY this exists: .htaccess tells browsers to cache CSS/JS for a month (good - fast repeat
 * visits), but that means a plain reload after a deploy can keep showing the OLD file for up to
 * a month, since the browser never asks the server if anything changed. Appending the file's own
 * modification time as a query string changes the URL itself the moment the file's content
 * changes, so the browser has no choice but to treat it as a brand new resource and fetch it -
 * no more "hard refresh needed to see a CSS/JS change" for visitors.
 */
function adstime_asset_url(string $relativePath): string
{
    $fsPath = __DIR__ . '/..' . $relativePath;
    $version = is_file($fsPath) ? filemtime($fsPath) : time();
    return BASE_PATH . $relativePath . '?v=' . $version;
}
