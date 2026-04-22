<?php
/**
 * 404.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

http_response_code(404);

$currentPage    = '';
$heroImage      = $clientImages[0];
$useVanillaTilt = false;
$useSwiper      = false;

$pageTitle       = 'Page Not Found | Stealth Landscaping LLC';
$pageDescription = 'The page you\'re looking for doesn\'t exist. Visit Stealth Landscaping LLC\'s homepage or browse our landscaping and hardscape services in Black Diamond, WA.';
$canonicalUrl    = $siteUrl . '/404';
$ogImage         = $clientImages[0];

$schemaMarkup = '{}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-404" aria-label="Page not found">
  <div class="container">
    <div class="error-code" aria-hidden="true">404</div>
    <h1>That page doesn't exist</h1>
    <p class="page-hero-sub">The URL you followed may be incorrect or the page may have moved. Head back to the homepage or find what you're looking for below.</p>

    <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin:var(--space-xl) 0;">
      <a href="/" class="btn btn-primary btn-lg">
        <i data-lucide="home" aria-hidden="true" width="18" height="18"></i>
        Go to Homepage
      </a>
      <a href="/services" class="btn btn-secondary btn-lg">Browse Services</a>
      <a href="/contact" class="btn btn-secondary btn-lg">Contact Us</a>
    </div>

    <div style="max-width:700px; margin:0 auto;">
      <h2 style="font-size:1.2rem; margin-bottom:var(--space-md); color:var(--color-text-light);">Popular pages</h2>
      <div style="display:grid; grid-template-columns:repeat(auto-fill, minmax(200px, 1fr)); gap:var(--space-sm);">
        <a href="/services/paver-installation" style="padding:var(--space-sm) var(--space-md); border:1px solid var(--color-border); border-radius:var(--radius); display:flex; align-items:center; gap:8px; color:var(--color-text);">
          <i data-lucide="grid-3x3" aria-hidden="true" width="16" height="16"></i>
          Paver Installation
        </a>
        <a href="/services/patio-installation" style="padding:var(--space-sm) var(--space-md); border:1px solid var(--color-border); border-radius:var(--radius); display:flex; align-items:center; gap:8px; color:var(--color-text);">
          <i data-lucide="layout-panel-top" aria-hidden="true" width="16" height="16"></i>
          Patio Installation
        </a>
        <a href="/services/retaining-walls" style="padding:var(--space-sm) var(--space-md); border:1px solid var(--color-border); border-radius:var(--radius); display:flex; align-items:center; gap:8px; color:var(--color-text);">
          <i data-lucide="layers" aria-hidden="true" width="16" height="16"></i>
          Retaining Walls
        </a>
        <a href="/services/sod-installation" style="padding:var(--space-sm) var(--space-md); border:1px solid var(--color-border); border-radius:var(--radius); display:flex; align-items:center; gap:8px; color:var(--color-text);">
          <i data-lucide="leaf" aria-hidden="true" width="16" height="16"></i>
          Sod Installation
        </a>
        <a href="/services/landscape-lighting" style="padding:var(--space-sm) var(--space-md); border:1px solid var(--color-border); border-radius:var(--radius); display:flex; align-items:center; gap:8px; color:var(--color-text);">
          <i data-lucide="lamp" aria-hidden="true" width="16" height="16"></i>
          Landscape Lighting
        </a>
        <a href="/services/outdoor-living-spaces" style="padding:var(--space-sm) var(--space-md); border:1px solid var(--color-border); border-radius:var(--radius); display:flex; align-items:center; gap:8px; color:var(--color-text);">
          <i data-lucide="sofa" aria-hidden="true" width="16" height="16"></i>
          Outdoor Living
        </a>
        <a href="/service-area" style="padding:var(--space-sm) var(--space-md); border:1px solid var(--color-border); border-radius:var(--radius); display:flex; align-items:center; gap:8px; color:var(--color-text);">
          <i data-lucide="map-pin" aria-hidden="true" width="16" height="16"></i>
          Service Area
        </a>
        <a href="/about" style="padding:var(--space-sm) var(--space-md); border:1px solid var(--color-border); border-radius:var(--radius); display:flex; align-items:center; gap:8px; color:var(--color-text);">
          <i data-lucide="users" aria-hidden="true" width="16" height="16"></i>
          About Us
        </a>
      </div>
    </div>

    <?php if (!empty($phone)): ?>
    <div style="margin-top:var(--space-2xl); padding-top:var(--space-xl); border-top:1px solid var(--color-border); text-align:center;">
      <p style="color:var(--color-text-light);">Still can't find what you're looking for? Give us a call:</p>
      <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" style="font-size:1.5rem; font-weight:700; color:var(--color-primary);">
        <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
    </div>
    <?php endif; ?>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
