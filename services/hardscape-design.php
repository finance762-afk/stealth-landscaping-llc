<?php
/**
 * services/hardscape-design.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[3];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[2]; // Hardscape Design

$pageTitle       = 'Hardscape Design Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Custom hardscape design in Black Diamond, WA — patios, walkways, retaining walls & stone features. Built to handle Pacific NW winters. Free estimates from Stealth Landscaping.';
$canonicalUrl    = $siteUrl . '/services/hardscape-design';
$ogImage         = $clientImages[3];

$faqs = [
    [
        'question' => 'What hardscape materials work best in Washington\'s climate?',
        'answer'   => 'Concrete pavers, natural flagstone, and dimensional basalt all perform well in Western WA\'s freeze-thaw cycle and rainfall. We avoid materials with high water absorption rates that crack when frozen. For walls, concrete block and natural boulder are the most durable long-term options in King County.',
    ],
    [
        'question' => 'Does hardscaping require permits in Black Diamond?',
        'answer'   => 'Retaining walls over 4 feet tall and structures attached to the house typically require permits in Black Diamond and King County. We help identify permit requirements for your project before work begins. Most patios and freestanding walls under 4 feet don\'t require permits.',
    ],
    [
        'question' => 'How long does a hardscape project take?',
        'answer'   => 'A standard patio or walkway takes 1–3 days for most residential projects. Combined projects with patios, retaining walls, and walkways typically run 3–7 days. We provide a clear timeline before starting and communicate any changes.',
    ],
    [
        'question' => 'Can hardscaping increase home value in Black Diamond?',
        'answer'   => 'Yes — hardscaping consistently returns 50–80% of installation cost in home value, with patios and outdoor living spaces typically showing the strongest return. In Black Diamond\'s market, a well-designed outdoor space is a genuine selling point.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Hardscape Design', 'item' => $siteUrl . '/services/hardscape-design'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[3]); ?>');"
         aria-label="Hardscape design service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Hardscape Design Built for Pacific Northwest Conditions</h1>
    <p class="page-hero-sub">Patios, walkways, and stone features that integrate with your landscape and hold up through decades of Western Washington weather.</p>
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
      <li class="active" aria-current="page">Hardscape Design</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Hardscape Design &amp; Installation</span>
        <h2>Outdoor structures that tie your property together</h2>
        <p>Hardscaping is the structural layer of your landscape — the patios, walkways, walls, and stone elements that define how a yard is used and navigated. Done well, it makes a property feel designed rather than assembled. Done poorly, it cracks, settles, and creates drainage problems within a few years.</p>
        <p>We approach hardscape design from a functionality-first perspective. Before selecting materials or finalizing layouts, we look at drainage patterns, freeze-thaw exposure, load requirements (foot traffic vs. vehicle), and how the hardscape elements integrate with existing or planned plantings and structures.</p>
        <p>Material selection for Black Diamond properties leans toward concrete pavers for patios (reliable, repairable, frost-tolerant), natural flagstone for walkways and accent areas, and poured or block concrete for retaining applications. We discuss trade-offs between options — cost, maintenance, longevity, and aesthetics — before any decisions are locked in.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[4]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[4]); ?>"
                 alt="Hardscape design installation in Black Diamond, WA — patio and walkway"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">30yr</span>
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
      <span class="eyebrow">Our Hardscape Services</span>
      <h2>What sets our hardscape work apart</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="ruler" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Drainage-First Design</h4>
          <p>Every hardscape surface sheds water somewhere. We design slope and drainage channels before layout is finalized — preventing pooling, erosion, and structure damage that develop when drainage is an afterthought.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="layers" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Proper Base Compaction</h4>
          <p>Settling and cracking come from inadequate base preparation. We use a mechanical plate compactor on gravel base layers — not just a hand tamper — and achieve proper density before any paver or stone goes down.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="palette" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Material Coordination</h4>
          <p>Hardscape materials should speak to each other and to the house. We help select colors, textures, and patterns that create visual coherence — not just pick whatever's cheapest at the supply yard.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="link" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Integrated with Soft Landscaping</h4>
          <p>Hardscape and planting should work together, not compete. We design transition zones, planting pockets, and edge treatments that blend structural and plant elements into a unified yard.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get hardscape estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Hardscape Design Estimate</h2>
      <p>Patio, walkway, retaining wall, or full hardscape system — we'll walk your property and give you clear pricing with material options to compare.</p>
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
      <span class="eyebrow">How It Works</span>
      <h2>Our hardscape design process</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Site Assessment &amp; Design Consultation</h4>
          <p>We evaluate drainage, grade, soil conditions, and intended use. We discuss material options, style preferences, and budget range — then put together a design that works for your specific site.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Excavation &amp; Base Preparation</h4>
          <p>Area is excavated to proper depth based on material choice (typically 6–10 inches for pavers). Geotextile fabric is installed, followed by crushed rock compacted in lifts. A sand setting bed is screeded for pavers.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Material Installation</h4>
          <p>Pavers, flagstone, or stone are set to pattern, cut to fit at edges, and checked for level throughout. Edge restraints are installed on paver projects. Any seating walls or steps are built concurrently.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Joint Sand, Sealing &amp; Cleanup</h4>
          <p>Polymeric sand is swept into joints and activated with water to lock pavers permanently. Optional sealer is applied to enhance color and prevent staining. Site is cleaned and inspected with you.</p>
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
      <h2>Hardscape FAQ — Black Diamond, WA</h2>
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

<section class="closing-cta" aria-label="Start your hardscape project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Structure your outdoor space — built to last</h2>
      <p>Serving Black Diamond, Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, and Bonney Lake. Licensed and insured in Washington State.</p>
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
