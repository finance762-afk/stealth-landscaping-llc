<?php
/**
 * header.php — Stealth Landscaping LLC
 * Outputs the skip link, sticky glassmorphism navbar,
 * full-screen mobile overlay menu, and opens <main>.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

if (!isset($currentPage)) $currentPage = '';

// Split services into two columns for desktop mega-dropdown
$_servicesCol1 = array_slice($services, 0, 9);
$_servicesCol2 = array_slice($services, 9);
?>

<!-- Skip to content (accessibility) -->
<a href="#main-content" class="skip-link">Skip to main content</a>

<header class="site-header" id="site-header" data-header>
  <div class="header-inner container">

    <!-- Logo -->
    <a href="/" class="site-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
      <span class="logo-mark" aria-hidden="true">S</span>
      <span class="logo-text">
        <span class="logo-name">Stealth Landscaping</span>
        <span class="logo-tagline"><?php echo htmlspecialchars($tagline); ?></span>
      </span>
    </a>

    <!-- Desktop navigation -->
    <nav class="desktop-nav" aria-label="Main navigation">
      <ul class="nav-links" role="list">

        <li>
          <a href="/"
            <?php if (isActivePage('home')) echo 'aria-current="page" class="is-active"'; ?>>
            Home
          </a>
        </li>

        <!-- Services mega-dropdown -->
        <li class="nav-dropdown">
          <a href="/services"
            <?php if (isActivePage('services')) echo 'aria-current="page" class="is-active"'; ?>
            aria-haspopup="true" aria-expanded="false" id="services-menu-btn">
            Services
            <svg class="dropdown-chevron" aria-hidden="true" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
          </a>
          <div class="nav-dropdown-menu nav-mega" role="region" aria-labelledby="services-menu-btn">
            <div class="mega-col">
              <?php foreach ($_servicesCol1 as $_svc): ?>
              <a href="/services/<?php echo htmlspecialchars($_svc['slug']); ?>">
                <?php echo htmlspecialchars($_svc['name']); ?>
              </a>
              <?php endforeach; ?>
            </div>
            <div class="mega-col">
              <?php foreach ($_servicesCol2 as $_svc): ?>
              <a href="/services/<?php echo htmlspecialchars($_svc['slug']); ?>">
                <?php echo htmlspecialchars($_svc['name']); ?>
              </a>
              <?php endforeach; ?>
              <a href="/services" class="mega-view-all">View All Services &rarr;</a>
            </div>
          </div>
        </li>

        <li>
          <a href="/service-area"
            <?php if (isActivePage('service-area')) echo 'aria-current="page" class="is-active"'; ?>>
            Service Area
          </a>
        </li>

        <li>
          <a href="/about"
            <?php if (isActivePage('about')) echo 'aria-current="page" class="is-active"'; ?>>
            About
          </a>
        </li>

        <li>
          <a href="/contact"
            <?php if (isActivePage('contact')) echo 'aria-current="page" class="is-active"'; ?>>
            Contact
          </a>
        </li>

      </ul>
    </nav>

    <!-- Desktop CTA -->
    <div class="header-cta">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="nav-phone">
        <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
        <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
      <?php endif; ?>
      <a href="/contact" class="btn btn-accent btn-sm">Free Estimate</a>
    </div>

    <!-- Mobile hamburger -->
    <button class="hamburger" id="hamburger-btn"
      aria-label="Open navigation menu"
      aria-expanded="false"
      aria-controls="mobile-menu">
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
      <span class="hamburger-line"></span>
    </button>

  </div><!-- /.header-inner -->
</header>

<!-- ─── Mobile full-screen overlay menu ─────────────────────────────── -->
<div class="mobile-menu" id="mobile-menu" role="dialog" aria-modal="true" aria-label="Navigation menu" hidden>

  <div class="mobile-menu-header">
    <a href="/" class="site-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
      <span class="logo-mark" aria-hidden="true">S</span>
      <span class="logo-text">
        <span class="logo-name">Stealth Landscaping</span>
        <span class="logo-tagline"><?php echo htmlspecialchars($tagline); ?></span>
      </span>
    </a>
    <button class="mobile-menu-close" id="mobile-menu-close" aria-label="Close navigation menu">
      <svg aria-hidden="true" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
    </button>
  </div>

  <nav class="mobile-nav" aria-label="Mobile navigation">
    <ul class="mobile-nav-links" role="list">

      <li class="mobile-nav-item" style="--i:0">
        <a href="/" <?php if (isActivePage('home')) echo 'aria-current="page"'; ?>>Home</a>
      </li>

      <!-- Services accordion -->
      <li class="mobile-nav-item mobile-nav-accordion" style="--i:1">
        <button class="mobile-accordion-btn" aria-expanded="false" aria-controls="mobile-services-list">
          Services
          <svg class="accordion-chevron" aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <ul class="mobile-accordion-list" id="mobile-services-list" hidden>
          <li><a href="/services">All Services</a></li>
          <?php foreach ($services as $_svc): ?>
          <li><a href="/services/<?php echo htmlspecialchars($_svc['slug']); ?>"><?php echo htmlspecialchars($_svc['name']); ?></a></li>
          <?php endforeach; ?>
        </ul>
      </li>

      <li class="mobile-nav-item" style="--i:2">
        <a href="/service-area" <?php if (isActivePage('service-area')) echo 'aria-current="page"'; ?>>Service Area</a>
      </li>

      <li class="mobile-nav-item" style="--i:3">
        <a href="/about" <?php if (isActivePage('about')) echo 'aria-current="page"'; ?>>About</a>
      </li>

      <li class="mobile-nav-item" style="--i:4">
        <a href="/contact" <?php if (isActivePage('contact')) echo 'aria-current="page"'; ?>>Contact</a>
      </li>

    </ul>
  </nav>

  <div class="mobile-menu-cta">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
      <svg aria-hidden="true" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      <?php echo htmlspecialchars(formatPhone($phone)); ?>
    </a>
    <?php endif; ?>
    <a href="/contact" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
  </div>

</div><!-- /.mobile-menu -->

<!-- Overlay backdrop -->
<div class="mobile-menu-backdrop" id="mobile-menu-backdrop" aria-hidden="true"></div>

<main id="main-content">
