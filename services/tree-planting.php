<?php
/**
 * services/tree-planting.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[8];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[7]; // Tree Planting

$pageTitle       = 'Tree Planting Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Professional tree planting in Black Diamond, WA. Right species, right location, proper depth & staking. Trees that establish and thrive in King County. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/tree-planting';
$ogImage         = $clientImages[8];

$faqs = [
    [
        'question' => 'What trees grow well in Black Diamond, WA?',
        'answer'   => 'Western Red Cedar, Douglas Fir, and Vine Maple are excellent native choices for Black Diamond. For ornamental trees, Japanese Maple, Paperbark Maple, Serviceberry, and Pacific Dogwood all perform reliably in King County\'s Zone 8b climate. We recommend based on your goals — shade, privacy, fall color, wildlife habitat, or ornamental interest.',
    ],
    [
        'question' => 'When is the best time to plant trees in Washington?',
        'answer'   => 'Fall (October–November) is ideal in Western Washington — trees planted in fall establish root systems through the winter without the heat stress of summer. Spring planting works well too. Summer planting is harder on trees and requires consistent irrigation. We can plant balled-and-burlapped trees any time conditions allow.',
    ],
    [
        'question' => 'How far from the house should trees be planted?',
        'answer'   => 'It depends entirely on the mature size of the species. Small trees (under 20 ft) can be planted 8–10 feet from structures. Medium trees (20–40 ft) need 15–20 feet. Large trees require 25+ feet. We consider mature canopy spread, root system width, and overhead utility clearance before recommending placement.',
    ],
    [
        'question' => 'Does a newly planted tree need staking?',
        'answer'   => 'Not always — and over-staking is a common mistake that prevents trunk taper development. We stake only when the root ball is too small to anchor the tree in wind, or the site is unusually exposed. Stakes are set to allow some trunk movement, which strengthens the tree, and are removed after 1 year.',
    ],
];

$schemaMarkup = '[' . "\n"
    . generateServiceSchema($service)
    . ",\n"
    . json_encode([
        '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Tree Planting', 'item' => $siteUrl . '/services/tree-planting'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[8]); ?>');"
         aria-label="Tree planting service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Tree Planting for Shade, Privacy, and Long-Term Value</h1>
    <p class="page-hero-sub">The right species in the right location, planted at the right depth — trees that establish quickly and add lasting value to Black Diamond properties.</p>
    <div class="hero-cta-group">
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
        <i data-lucide="phone" aria-hidden="true" width="18" height="18"></i>
        <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
      <?php endif; ?>
      <a href="/contact" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
    </div>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Tree Planting</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Professional Tree Planting</span>
        <h2>Trees planted to thrive in King County's climate</h2>
        <p>Tree planting seems simple — dig a hole, put the tree in, backfill. But planting depth alone accounts for the majority of establishment failures. Trees planted too deep develop crown rot and decline over 5–10 years. Too shallow and roots dry out. The root flare — the point where the trunk meets the root system — must be at or slightly above grade.</p>
        <p>Beyond depth, species selection for Black Diamond properties involves thinking through mature height relative to power lines and structures, root system behavior near hardscaping or foundations, and whether the tree suits your soil drainage and sun conditions. We don't recommend species just because they're available — we recommend what will actually perform on your specific site.</p>
        <p>For privacy screening, we often work with Western Red Cedar, Arborvitae, or Leyland Cypress depending on site conditions. For shade and ornamental interest, Japanese Maple, Vine Maple, Serviceberry, and Pacific Dogwood are excellent Zone 8b performers that are visually interesting year-round. We source balled-and-burlapped or large container stock from Pacific Northwest nurseries.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[9]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[9]); ?>"
                 alt="Tree planting service in Black Diamond, WA — professional tree installation"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">Zone</span>
          8b Species
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,40 L1440,0 L1440,40 Z" fill="var(--color-light)"/>
  </svg>
</div>

<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why We Do It Differently</span>
      <h2>What successful tree planting actually requires</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="tree-pine" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Correct Planting Depth</h4>
          <p>The root flare goes at or above grade — every time. We measure and adjust before backfilling. This single step prevents the slow decline that kills trees 5–10 years after improper installation.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="move" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Strategic Placement Planning</h4>
          <p>We consider mature canopy width, root spread, proximity to utility lines and structures, and sight lines before finalizing placement. Small mistakes in location become large problems in 10 years.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="package" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Mulch Ring Application</h4>
          <p>A 3–4 inch donut-shaped mulch ring (clear of the trunk) regulates soil temperature, retains moisture, and prevents lawn mower damage — one of the leading causes of young tree death in residential settings.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="anchor" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Staking Only When Needed</h4>
          <p>We stake selectively and with flexible ties that allow trunk movement. Rigid staking prevents the trunk taper development that makes trees strong — and stakes left on for years actually cause damage.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get tree planting estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Tree Planting Estimate</h2>
      <p>Tell us what you're after — shade, privacy, ornamental interest, or a windbreak — and we'll recommend the right species and give you exact pricing.</p>
      <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:2rem;">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
          <i data-lucide="phone" aria-hidden="true" width="18" height="18"></i>
          <?php echo htmlspecialchars(formatPhone($phone)); ?>
        </a>
        <?php endif; ?>
        <a href="/contact" class="btn btn-outline-white btn-lg">Request Estimate</a>
      </div>
    </div>
  </div>
</section>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Tree Planting Process</span>
      <h2>How we plant trees in Black Diamond</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Species Selection &amp; Site Planning</h4>
          <p>We assess the planting site, review utility line clearances, and recommend species based on your goals and site conditions. Call 811 (WA 811 free call) for utility location before digging.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Hole Excavation</h4>
          <p>The hole is dug 2–3 times wider than the root ball and at the precise depth so the root flare sits at grade. Sloped sides break up the glazed surface that impedes root penetration in clay soils.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Planting &amp; Backfill</h4>
          <p>Burlap and wire basket are removed or cut back, circling roots are corrected, and the tree is set at proper depth. Native soil (or lightly amended mix) is backfilled in layers with periodic watering to eliminate air pockets.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Mulching, Staking &amp; First-Year Care Instructions</h4>
          <p>A mulch ring is applied, stakes installed if needed, and we provide a written first-year watering and care schedule. Establishment watering is the most critical factor in a new tree's survival.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,0 L1440,40 L1440,0 Z" fill="var(--color-light)"/>
  </svg>
</div>

<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Tree Planting FAQ — Black Diamond, WA</h2>
    </div>
    <div class="faq-grid" data-animate="fade-up">
      <?php foreach ($faqs as $faq): ?>
      <div class="faq-item">
        <div class="faq-icon"><i data-lucide="help-circle" aria-hidden="true" width="18" height="18"></i></div>
        <div>
          <h3><?php echo htmlspecialchars($faq['question']); ?></h3>
          <p><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="closing-cta" aria-label="Start your tree planting project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Trees that establish and grow — planted with purpose</h2>
      <p>Serving Black Diamond, Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, and Bonney Lake. Free estimates, licensed and insured.</p>
      <div class="closing-cta-actions">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
          <i data-lucide="phone" aria-hidden="true" width="18" height="18"></i>
          Call Now
        </a>
        <?php endif; ?>
        <a href="/contact" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
