<?php
/**
 * services/index.php — All Services Landing Page
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage     = 'services';
$heroImage       = $clientImages[19];
$useVanillaTilt  = true;
$useSwiper       = false;

$pageTitle       = 'Landscaping Services in Black Diamond, WA | Stealth Landscaping LLC';
$pageDescription = 'Full landscaping service menu for Black Diamond, WA — turf, hardscape, patios, retaining walls, sod, lighting, fire pits & more. Free estimates from Stealth Landscaping LLC.';
$canonicalUrl    = $siteUrl . '/services';
$ogImage         = $clientImages[19];

$breadcrumbSchema = json_encode([
    '@context'        => 'https://schema.org',
    '@type'           => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services'],
    ],
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);

$schemaMarkup = $breadcrumbSchema;

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';

// Lucide icon names keyed by service slug
$serviceIcons = [
    'landscaping'            => 'leaf',
    'turf-installation'      => 'grid-2x2',
    'hardscape-design'       => 'layers',
    'sod-installation'       => 'sprout',
    'flower-bed-installation'=> 'flower-2',
    'plant-installation'     => 'flower',
    'shrub-trimming'         => 'scissors',
    'tree-planting'          => 'tree-pine',
    'mulch-installation'     => 'package',
    'landscape-lighting'     => 'lamp',
    'patio-installation'     => 'layout-panel-top',
    'paver-installation'     => 'grid-3x3',
    'retaining-walls'        => 'wall',
    'walkway-installation'   => 'footprints',
    'outdoor-living-spaces'  => 'sofa',
    'fire-pit-installation'  => 'flame',
    'stone-landscaping'      => 'mountain',
    'hydro-seeding'          => 'droplets',
];
?>

<!-- ─── Page Hero ─────────────────────────────────────────────────────────── -->
<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[19]); ?>');"
         aria-label="Services page hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">What We Do</span>
    <h1>Professional Landscaping Services</h1>
    <p class="page-hero-sub">From lawn installation to full outdoor living construction — Stealth Landscaping delivers results in Black Diamond and throughout King County.</p>
  </div>
</section>

<!-- ─── Breadcrumb ─────────────────────────────────────────────────────────── -->
<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Services</li>
    </ol>
  </div>
</nav>

<!-- ─── Intro ─────────────────────────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0 var(--space-8); background: var(--color-white);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Full-Service Landscaping</span>
      <h2>Every service your outdoor space needs</h2>
      <p>We're a Black Diamond-based landscaping contractor serving homeowners and businesses throughout King County. Our 18 specialized services cover everything from a fresh lawn to a complete backyard transformation — with the same direct, hands-on approach on every project.</p>
    </div>
  </div>
</section>

<!-- Divider -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,40 L1440,0 L1440,40 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ─── Services Grid ──────────────────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="services-grid" data-animate="fade-up">
      <?php foreach ($services as $i => $svc):
        $icon = isset($serviceIcons[$svc['slug']]) ? $serviceIcons[$svc['slug']] : 'leaf';
      ?>
      <article class="service-card" data-tilt data-tilt-max="6" data-tilt-speed="400" data-tilt-glare data-tilt-max-glare="0.12"
               style="animation-delay: <?php echo min(($i % 3) * 100, 400); ?>ms;"
               data-animate="fade-up">
        <div class="service-card-icon">
          <i data-lucide="<?php echo htmlspecialchars($icon); ?>" aria-hidden="true" width="26" height="26"></i>
        </div>
        <h3><?php echo htmlspecialchars($svc['name']); ?></h3>
        <p><?php echo htmlspecialchars($svc['description']); ?></p>
        <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>" class="learn-more" aria-label="Learn more about <?php echo htmlspecialchars($svc['name']); ?>">
          Learn More
          <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"/><polyline points="12 5 19 12 12 19"/></svg>
        </a>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Divider -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 60" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,0 C480,60 960,0 1440,60 L1440,0 L0,0 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ─── Mid-page CTA ───────────────────────────────────────────────────────── -->
<section class="cta-banner" aria-label="Get a free estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Ready to transform your outdoor space?</h2>
      <p>Call now or submit a request — we serve Black Diamond, Maple Valley, Covington, Auburn, Kent, Renton, Enumclaw, and Bonney Lake. Free estimates on every project.</p>
      <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:2rem;">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
          <i data-lucide="phone" aria-hidden="true" width="18" height="18"></i>
          <?php echo htmlspecialchars(formatPhone($phone)); ?>
        </a>
        <?php endif; ?>
        <a href="/contact" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
      </div>
    </div>
  </div>
</section>

<!-- ─── Why Choose Stealth ─────────────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Stealth Landscaping</span>
      <h2>Direct contractor communication on every project</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="user-check" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Owner-Operated</h4>
          <p>You communicate directly with the contractor — not a dispatcher or project manager. No middle layers, no miscommunication. What you ask for is what gets built.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="map-pin" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Local to Black Diamond</h4>
          <p>We're based in Black Diamond and work throughout King County. We understand local soil conditions, drainage patterns, and what grows well in the Pacific Northwest.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="shield-check" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Licensed &amp; Insured in WA</h4>
          <p>Fully licensed and insured through the Washington State Department of Labor &amp; Industries. Your property is covered throughout every project.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="calendar-check" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Reliable Scheduling</h4>
          <p>4+ years and counting — we show up when we say we will. Reliable scheduling and transparent timelines so you can plan around your project.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;transform:rotate(180deg);">
    <path d="M0,40 L720,0 L1440,40 Z" fill="var(--color-primary)"/>
  </svg>
</div>

<!-- ─── Closing CTA ────────────────────────────────────────────────────────── -->
<section class="closing-cta" aria-label="Contact Stealth Landscaping">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get your free landscape estimate</h2>
      <p>Pick a service above or describe your project — we'll assess the site and give you a clear, honest estimate. No commitment required.</p>
      <div class="closing-cta-actions">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
          <i data-lucide="phone" aria-hidden="true" width="18" height="18"></i>
          Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
        </a>
        <?php endif; ?>
        <a href="/contact" class="btn btn-outline-white btn-lg">Submit a Request Online</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
