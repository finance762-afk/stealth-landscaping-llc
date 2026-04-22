<?php
/**
 * services/patio-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[11];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[10]; // Patio Installation

$pageTitle       = 'Patio Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Custom patio installation in Black Diamond, WA — concrete pavers, flagstone & natural stone. Drainage-engineered for Western WA. Free estimates from Stealth Landscaping LLC.';
$canonicalUrl    = $siteUrl . '/services/patio-installation';
$ogImage         = $clientImages[11];

$faqs = [
    [
        'question' => 'How much does patio installation cost in Black Diamond, WA?',
        'answer'   => 'Patio installation in Black Diamond typically runs $3,000–$10,000 for a standard 200–400 square foot patio, depending on material choice and site conditions. Concrete pavers run $15–$22/sqft installed; natural flagstone $18–$30/sqft installed; compacted gravel $8–$12/sqft. Site access difficulty and drainage work affect final cost. We provide exact pricing after a site visit.',
    ],
    [
        'question' => 'What patio material is best for Black Diamond\'s climate?',
        'answer'   => 'Concrete pavers are the best overall choice for Western Washington — they\'re frost-tolerant, can be individually replaced if damaged, and have a broad material selection. Flagstone is excellent for natural aesthetics but requires more careful jointing to prevent moss in WA\'s damp climate. Poured concrete is budget-friendly but can crack and is harder to repair.',
    ],
    [
        'question' => 'Does a patio require a permit in Black Diamond?',
        'answer'   => 'Freestanding patios without roof structures typically don\'t require permits in Black Diamond. Covered patios, pergolas attached to the house, and hardscape within setback zones may require permits. We identify permit requirements for your specific project before work begins.',
    ],
    [
        'question' => 'How long does patio installation take?',
        'answer'   => 'Most residential patio projects take 2–4 days depending on size and site conditions. Excavation and base prep is typically the longest part — installation of pavers or stone goes quickly once the base is ready. Weather permitting, a 300 sq ft patio is typically complete in 3 days.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Patio Installation', 'item' => $siteUrl . '/services/patio-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[11]); ?>');"
         aria-label="Patio installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Patio Installation That Adds Years of Outdoor Use</h1>
    <p class="page-hero-sub">Custom patios built for Pacific Northwest conditions — proper drainage, frost-tolerant materials, and clean construction that holds up decade after decade.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Patio Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Custom Patio Construction</span>
        <h2>Outdoor living space that works in Pacific Northwest weather</h2>
        <p>A well-built patio extends your usable living space to the outdoors for 8–9 months of the year in Black Diamond's mild climate. Done right, it adds tangible home value and becomes the center of outdoor activity for the family. Done poorly — with inadequate base prep or ignored drainage — it settles, heaves, and creates water problems against the house within a few years.</p>
        <p>Drainage is the single most important design consideration for patios in Western Washington. Every patio surface sheds water somewhere, and that somewhere needs to be away from your home's foundation. We design surface slope and manage drainage from the first stage of planning — before a single stone is laid.</p>
        <p>Material selection is the second major decision. Concrete pavers are our most recommended material for Black Diamond patios — they're individually replaceable if damaged (unlike poured concrete), available in dozens of styles and colors, frost-tolerant, and achieve a natural stone look at a lower price point. Flagstone is excellent for a more organic feel. We walk through material options with pricing comparisons at the estimate stage.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[12]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[12]); ?>"
                 alt="Patio installation in Black Diamond, WA — concrete paver patio construction"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">300</span>
          sqft Avg Job
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
      <span class="eyebrow">Our Patio Standards</span>
      <h2>What separates patios that last from ones that fail</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="droplets" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Drainage Designed Before Layout</h4>
          <p>We grade the surface with the correct slope away from structures (minimum 2% away from the house) and manage where water exits the patio area. No drainage planning means water damage to foundations.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="layers" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>6–8" Compacted Base</h4>
          <p>We excavate 8–10 inches total and compact crushed rock base in lifts. In Black Diamond's clay soils, base depth and compaction quality are what prevent settling and frost heave over time.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="grid-3x3" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Frost-Tolerant Materials Only</h4>
          <p>We recommend concrete pavers and natural stone rated for freeze-thaw cycling. Thin decorative tile and high-absorption natural stone absorb water, freeze, and spall. Western Washington winters require frost-proof materials.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="shield-check" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Polymeric Sand Joint Locking</h4>
          <p>Paver joints are filled with polymeric sand and activated with water, creating a semi-rigid joint that prevents ant and weed infiltration without completely eliminating drainage. It outlasts regular sand by years.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get patio estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Patio Installation Estimate</h2>
      <p>Describe your patio size, intended use, and material preferences — we'll assess the site, present material options, and give you complete pricing before any commitment.</p>
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
      <span class="eyebrow">Construction Process</span>
      <h2>How we build patios in Black Diamond</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Layout, Design &amp; Drainage Planning</h4>
          <p>We stake the patio footprint, confirm dimensions and shape, and plan drainage routing. Material choice, edge treatment, and any integrated features (step, wall, fire pit) are finalized at this stage.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Excavation &amp; Base Installation</h4>
          <p>Area is excavated 8–10 inches, geotextile fabric installed, then crushed rock base is built in compacted lifts. A screed layer of concrete sand creates the final setting bed for pavers.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Paver or Stone Installation</h4>
          <p>Material is set to pattern, cut precisely at edges, and checked for level and grade throughout. Edge restraints are installed at perimeter. Steps or integrated walls are built concurrently.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Joint Sand, Compaction &amp; Final Inspection</h4>
          <p>Polymeric sand is swept into joints and activated with water. The finished surface is plate-compacted to fully seat pavers in the sand bed. Cleanup, final inspection, and a walkthrough complete the project.</p>
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
      <h2>Patio Installation FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your patio project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>A patio that lasts — built right from the base up</h2>
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
