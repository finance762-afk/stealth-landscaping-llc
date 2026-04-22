<?php
/**
 * services/turf-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[2];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[1]; // Turf Installation

$pageTitle       = 'Turf Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Artificial & natural turf installation in Black Diamond, WA. Year-round green lawns that hold up to Pacific NW rain & heavy use. Free estimates from Stealth Landscaping.';
$canonicalUrl    = $siteUrl . '/services/turf-installation';
$ogImage         = $clientImages[2];

$faqs = [
    [
        'question' => 'What does turf installation cost in Black Diamond, WA?',
        'answer'   => 'Artificial turf installation typically runs $8–$15 per square foot installed in the Black Diamond area, depending on turf grade and base preparation required. A 500 sq ft backyard project averages $4,500–$7,500. Natural sod runs $0.90–$1.50/sqft installed. We provide exact pricing after a site visit.',
    ],
    [
        'question' => 'Does artificial turf hold up in Washington\'s rainy climate?',
        'answer'   => 'Yes — quality artificial turf is specifically engineered for high-rainfall climates. It has a perforated backing that drains at 30+ inches per hour, far exceeding typical Pacific NW rainfall. Properly installed with a compacted crushed rock base, it drains cleanly and stays firm year-round.',
    ],
    [
        'question' => 'How long does artificial turf last?',
        'answer'   => 'Quality artificial turf carries a 15–20 year manufacturer warranty and realistically lasts 20+ years with normal residential use. It doesn\'t fade significantly in the Pacific Northwest\'s lower UV environment compared to sunnier climates.',
    ],
    [
        'question' => 'Is artificial turf safe for dogs?',
        'answer'   => 'Yes — we install pet-specific turf products with antimicrobial infill and enhanced drainage for pet use. The surface is lead-free and safe for dogs. Cleanup involves rinsing with water; the surface dries quickly and doesn\'t retain odors with proper infill.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Turf Installation', 'item' => $siteUrl . '/services/turf-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[2]); ?>');"
         aria-label="Turf installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Turf Installation That Stays Green Year-Round</h1>
    <p class="page-hero-sub">Artificial and natural turf solutions engineered for Pacific Northwest weather, heavy foot traffic, and low ongoing maintenance.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Turf Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Artificial & Natural Turf</span>
        <h2>A lawn that doesn't quit when the rain does</h2>
        <p>Black Diamond gets around 55 inches of rain per year — more than enough to turn a natural lawn into a muddy mess by November. Artificial turf installed over a properly compacted crushed rock base drains completely, holds its shape through wet winters, and bounces back for summer use without any reseeding or fertilizing.</p>
        <p>We install both artificial turf and natural sod depending on your goals. Artificial turf makes sense for high-traffic areas, pet zones, play areas, and anyone who wants a permanently green, zero-mow surface. Sod is the right call when you want natural grass, prefer the feel of real lawn, and are willing to invest in seasonal maintenance.</p>
        <p>Our artificial turf installations include full base excavation, geotextile weed barrier, compacted crushed rock base (the most important step most budget crews skip), and high-quality turf with the pile height and blade shape that matches your intended use. Pet turf, play turf, and landscape turf grades are available.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[3]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[3]); ?>"
                 alt="Turf installation project in Black Diamond, WA"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">20yr</span>
          Turf Warranty
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
      <span class="eyebrow">Why Choose Stealth</span>
      <h2>The difference between a good install and one that lasts</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="layers" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Proper Base Preparation</h4>
          <p>We excavate 3–4 inches, compact crushed rock in lifts, and install weed barrier before any turf goes down. Skipping this step is why budget installs develop soft spots and poor drainage within two years.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="droplets" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Drainage Engineered for WA Rain</h4>
          <p>Every install includes drainage assessment. In low-lying areas or next to structures, we add drainage channels or perforated pipe to ensure water exits the turf zone properly.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="star" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Commercial-Grade Turf Products</h4>
          <p>We source turf with UV-stabilized fibers, memory foam backing for realistic feel, and lead-free infill. The products we install carry real manufacturer warranties — not just verbal promises.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="dog" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Pet-Specific Options Available</h4>
          <p>We offer antimicrobial-infused pet turf with enhanced perforations for rapid liquid drainage — specifically designed for households with dogs, with easier cleanup and odor control than standard turf.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get turf estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Turf Installation Estimate</h2>
      <p>Tell us the square footage and intended use — we'll recommend the right turf grade and give you exact pricing after a quick site visit.</p>
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
      <h2>How we install artificial turf</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Site Measurement &amp; Material Selection</h4>
          <p>We measure the area precisely and review turf options with you — pile height, blade shape, color, and infill type based on the intended use (pets, play, landscape, or general lawn).</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Excavation &amp; Base Preparation</h4>
          <p>Existing sod or vegetation is removed, the area is excavated 3–4 inches, geotextile weed barrier is installed, then crushed rock is compacted in lifts to create a firm, draining base.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Turf Layout &amp; Seaming</h4>
          <p>Turf rolls are cut to fit, seams are positioned where they'll be least visible, and all edges are secured with bender board or nailed to the base. Seams are glued and brushed to blend.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Infill Application &amp; Finishing</h4>
          <p>Silica sand or crumb rubber infill is spread and power-brushed into the turf fibers to support blade upright positioning and add cushioning. The finished surface is inspected and cleaned.</p>
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
      <h2>Turf Installation FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your turf project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>A permanent green lawn — without the weekly mowing</h2>
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
