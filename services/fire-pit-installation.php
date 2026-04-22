<?php
/**
 * services/fire-pit-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[16];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[15]; // Fire Pit Installation

$pageTitle       = 'Fire Pit Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Fire pit installation in Black Diamond, WA — gas & wood-burning fire features built with proper setbacks, non-combustible materials & integrated seating. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/fire-pit-installation';
$ogImage         = $clientImages[16];

$faqs = [
    [
        'question' => 'Gas vs wood-burning fire pit — which is better in Western Washington?',
        'answer'   => 'Gas fire pits are generally the better choice for Black Diamond. Wood-burning fire pits are subject to Puget Sound Clean Air Agency burn bans during air quality alert days — which occur frequently in fall and winter, exactly when you\'d want to use one most. Gas fire pits operate any day regardless of burn ban status, light instantly, and require zero cleanup. The higher upfront cost (gas line installation) pays back in usability.',
    ],
    [
        'question' => 'Does a fire pit require a permit in Black Diamond?',
        'answer'   => 'Freestanding outdoor fire pits typically don\'t require building permits in Black Diamond. Gas line installation requires a mechanical permit and must be done by a licensed plumber or gas contractor. Masonry fireplaces and fire features attached to structures require building permits. We identify all permit and code requirements before construction begins.',
    ],
    [
        'question' => 'How far from the house should a fire pit be?',
        'answer'   => 'King County requires a minimum 10-foot clearance from structures for portable fire pits; permanent installations are typically set at 15–25 feet depending on local fire code interpretation. We also factor in overhead clearances, neighboring property lines, and prevailing wind direction. Positioning the fire pit downwind of the primary seating area keeps smoke away from guests.',
    ],
    [
        'question' => 'Can a fire pit be added to an existing patio?',
        'answer'   => 'Yes — we add fire features to existing patios regularly. For gas fire pits, we trench a gas line from the nearest supply and cover the line under the patio surface or through a buried conduit route. For wood-burning features, we ensure the existing patio surface is non-combustible (concrete or pavers qualify). We assess setback distances and wind patterns before confirming placement.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Fire Pit Installation', 'item' => $siteUrl . '/services/fire-pit-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[16]); ?>');"
         aria-label="Fire pit installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Fire Pit Installation — Year-Round Outdoor Warmth</h1>
    <p class="page-hero-sub">Gas and wood-burning fire features installed with correct setbacks, non-combustible materials, and integrated seating — adding comfortable evenings from March through October.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Fire Pit Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Custom Fire Pit &amp; Fire Feature Installation</span>
        <h2>The feature that makes your patio usable year-round</h2>
        <p>A fire feature is the single most effective addition for extending outdoor season in Black Diamond. Without one, comfortable outdoor evenings in Western Washington are limited to roughly June through August — about three months. Add a fire pit and that range extends from March through early November. The economics make it one of the highest-return investments in residential outdoor improvements.</p>
        <p>The gas-versus-wood question matters more in Western Washington than most climates. Wood-burning fires are subject to Puget Sound Clean Air Agency burn restrictions — most common in fall and winter, when calm, cold weather traps particulate near ground level. These are exactly the months when you'd most want to use an outdoor fire. Gas fire pits operate independent of burn ban status, light in 30 seconds, and require no wood storage, ash cleanup, or ember management. The gas line installation cost is the only significant additional investment over a wood-burning option.</p>
        <p>For wood-burning clients who prefer the aesthetic, we install features with adequate buffer zones, non-combustible base materials, and spark screen provisions. The patio surface beneath and around any fire feature must be non-combustible — concrete pavers, natural stone, and brick all qualify. We never install fire features over composite decking, wood, or any combustible surface.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[17]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[17]); ?>"
                 alt="Fire pit installation in Black Diamond, WA — outdoor fire feature with seating wall"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">8mo</span>
          Season
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
      <span class="eyebrow">Our Installation Standards</span>
      <h2>Safe, code-compliant, and built to last</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="ruler" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Correct Setback Distances</h4>
          <p>We measure and confirm setback distances from structures, overhead branches, neighboring property lines, and utility lines before any installation begins. No guessing — setbacks are measured and documented.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="shield-check" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Non-Combustible Materials Throughout</h4>
          <p>Fire bowl surrounds, capstones, base pads, and hearth surfaces are selected from non-combustible materials: natural stone, concrete block, brick, and fire-rated materials. No combustible components near the fire zone.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="wind" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Wind Direction Positioning</h4>
          <p>We assess prevailing wind direction at the site during the estimate and position the fire feature so that the primary seating area is upwind. Smoke direction determines whether a fire feature is enjoyable or avoided.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="sofa" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Integrated Seating Design</h4>
          <p>Block or stone seating walls around the fire feature create built-in perimeter seating that eliminates the need for moveable furniture. We design seating height and distance for comfortable conversation and warmth from the fire.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get fire pit estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Fire Pit Installation Estimate</h2>
      <p>Gas or wood-burning, standalone or integrated with a patio — walk the site with us and we'll confirm setbacks, present options, and give you complete pricing.</p>
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
      <span class="eyebrow">Installation Process</span>
      <h2>How we install fire features in Black Diamond</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Site Assessment &amp; Design</h4>
          <p>We assess setback distances, wind direction, prevailing use patterns, and site access. Gas vs. wood decision is confirmed. Seating wall design, fire bowl style, and material are selected. Gas line route is planned if applicable.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Permit &amp; Gas Line Coordination</h4>
          <p>Gas mechanical permit is pulled if applicable. Licensed plumber or gas contractor coordinates gas line installation. We schedule around the gas line work so hardscape construction happens in sequence.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Base &amp; Surround Construction</h4>
          <p>Non-combustible base pad or patio extension is constructed. Fire feature surround, block walls, and seating walls are built. Capstone is installed. Gas fitting connection point is confirmed and accessible.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Fire Bowl Install &amp; Test</h4>
          <p>Fire bowl or ring is set, gas connection is made by licensed contractor, and system is tested. Wood-burning features are inspected for clearance and base integrity. Spark screen and any covers are installed.</p>
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
      <h2>Fire Pit FAQ — Black Diamond, WA</h2>
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

<section class="closing-cta" aria-label="Start your fire pit project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Turn your patio into a year-round gathering space</h2>
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
