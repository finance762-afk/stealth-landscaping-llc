<?php
/**
 * services/paver-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[12];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[11]; // Paver Installation

$pageTitle       = 'Paver Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Expert paver installation in Black Diamond, WA — driveways, walkways & patios. Proper base prep & drainage for lasting results in Pacific NW conditions. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/paver-installation';
$ogImage         = $clientImages[12];

$faqs = [
    [
        'question' => 'How much does paver installation cost near Black Diamond?',
        'answer'   => 'Paver installation in Black Diamond runs $15–$25 per square foot installed for concrete pavers, and $20–$35 per square foot for natural stone. Price varies by paver style, pattern complexity, site accessibility, and drainage work required. A 200 sq ft paver walkway typically costs $3,000–$5,000 complete.',
    ],
    [
        'question' => 'How long do pavers last in Western Washington?',
        'answer'   => 'Quality concrete pavers are rated for 25–50 years in freeze-thaw climates when properly installed. The base preparation is what determines longevity — improper compaction leads to settling within 5 years. Our installations are built with proper base depth and compaction for Western Washington\'s conditions.',
    ],
    [
        'question' => 'Can pavers be repaired if one cracks or settles?',
        'answer'   => 'Yes — that\'s one of the main advantages of pavers over poured concrete. Individual pavers that crack or settle can be pulled up, the base can be addressed, and new pavers set. Repairs are nearly invisible and cost a fraction of repairing poured concrete. We recommend keeping 5–10% extra pavers from the original batch for future repairs.',
    ],
    [
        'question' => 'Do pavers get slippery when wet in Washington\'s climate?',
        'answer'   => 'Smooth-surface pavers can be slippery when wet, which is why we recommend tumbled or textured finish pavers for walkways and around pools. Concrete pavers with a broom-finish or natural cleft flagstone provide good traction in wet conditions. We factor slip resistance into material recommendations for each application.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Paver Installation', 'item' => $siteUrl . '/services/paver-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[12]); ?>');"
         aria-label="Paver installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Paver Installation — Driveways, Walkways &amp; Patios</h1>
    <p class="page-hero-sub">Beautiful, durable paver surfaces built on a foundation that handles Western Washington's rainfall and frost — no settling, no cracking, no regrets.</p>
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
      <li class="active" aria-current="page">Paver Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Professional Paver Installation</span>
        <h2>The base determines whether pavers last 5 years or 50</h2>
        <p>Paver surfaces look straightforward — pavers, sand, done. The reality is that a paver installation is only as good as the base beneath it. Inadequate compaction, wrong base depth for the intended load, or missing edge restraints all show up within a few years as settling, spreading, and rocking pavers. The actual paver-laying is the fastest part of the job — the base work is where the time goes, and where corners are most commonly cut.</p>
        <p>For Black Diamond's clay-heavy soils, we excavate to 8–12 inches depending on the application (deeper for driveways, shallower for pedestrian walkways), install geotextile fabric to prevent soil migration into the base, then compact crushed rock in 3–4 inch lifts before setting the final sand bed. This base construction is what allows pavers to handle freeze-thaw cycles without heaving.</p>
        <p>Concrete paver selection covers everything from tumbled European cobblestones to large-format smooth slabs in dozens of colors. Natural stone options include quartzite, bluestone, and basalt. Pattern options — running bond, herringbone, soldier course — each have structural implications beyond aesthetics. We discuss options relevant to your application and budget during the estimate walkthrough.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[13]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[13]); ?>"
                 alt="Paver installation in Black Diamond, WA — concrete paver walkway and patio"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">25yr</span>
          Design Life
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
      <span class="eyebrow">Why Our Installs Hold Up</span>
      <h2>Built differently from day one</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="hammer" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Mechanical Compaction at Every Layer</h4>
          <p>We use a plate compactor — not hand tamping — at each base layer. Mechanical compaction achieves the density required for long-term stability. Hand tamping is adequate for small patches, not for full base construction.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="frame" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Edge Restraints on Every Perimeter</h4>
          <p>Plastic or aluminum edge restraints are spiked into the base at all perimeter edges. Without them, pavers migrate outward over time. We never skip this step — it's what holds the pattern together for decades.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="move-horizontal" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Consistent Joint Spacing</h4>
          <p>Spacers or string lines maintain uniform joint width throughout installation. Inconsistent joints look amateur and create weak points in the surface. We check spacing continuously during installation.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="aperture" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Polymeric Sand Finishing</h4>
          <p>Polymeric sand is swept into joints and activated with water — locking pavers together, preventing weed infiltration, and resisting erosion from Black Diamond's frequent rainfall better than regular sand.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get paver estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Paver Installation Estimate</h2>
      <p>Walkway, driveway, patio, or custom pattern — walk the site with us and we'll give you material options and complete pricing with no commitment required.</p>
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
      <h2>How we install pavers in Black Diamond</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Layout &amp; Material Selection</h4>
          <p>Area is staked out and confirmed. Paver style, color, and pattern are finalized. Quantities are calculated with a 10% overage for cuts and future repairs. Material is ordered from regional suppliers.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Excavation &amp; Base Construction</h4>
          <p>Site is excavated to the correct depth for the application. Geotextile fabric is installed, followed by crushed rock base in compacted lifts. A screed bed of concrete sand is leveled for paver installation.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Paver Installation &amp; Cutting</h4>
          <p>Pavers are set to the pattern from a fixed starting point, working outward. Edge cuts are made with a masonry saw for clean fit. Edge restraints are installed at all perimeters and secured.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Polymeric Sand, Compaction &amp; Sealing</h4>
          <p>Polymeric sand is swept into joints and activated. Plate compactor seats pavers fully in the sand bed. Optional sealer application enhances color, reduces staining, and extends maintenance intervals.</p>
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
      <h2>Paver Installation FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your paver project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Pavers built to outlast the first contractor who quoted cheaper</h2>
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
