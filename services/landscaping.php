<?php
/**
 * services/landscaping.php — Landscaping Service Page
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[1];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[0]; // Landscaping

$pageTitle       = 'Landscaping Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Professional landscaping design & installation in Black Diamond, WA. Custom outdoor spaces built for Pacific Northwest conditions. 4+ years local experience. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/landscaping';
$ogImage         = $clientImages[1];

$faqs = [
    [
        'question' => 'How much does a landscaping project cost in Black Diamond, WA?',
        'answer'   => 'Most residential landscaping projects in Black Diamond range from $2,000 to $25,000 depending on scope. A basic cleanup and refresh runs $500–$2,000. Full landscape design with plants, sod, and hardscape elements typically lands between $5,000–$20,000. We provide free on-site estimates with a clear line-item breakdown.',
    ],
    [
        'question' => 'When is the best time to start a landscaping project near Black Diamond?',
        'answer'   => 'Spring (March–May) and fall (September–October) are ideal for most landscaping work in the Pacific Northwest. Spring gives plants maximum growing season; fall plantings establish roots before winter. We work year-round — summer for hardscape and lighting projects, late fall for cleanup and prep.',
    ],
    [
        'question' => 'Do you design the landscape or just install?',
        'answer'   => 'Both. We consult on plant selection, layout, and material choices suited to your property and King County\'s climate. We don\'t use cookie-cutter plans — each design responds to your yard\'s sun exposure, drainage, existing trees, and how you use the space.',
    ],
    [
        'question' => 'Will you work with the plants I already have?',
        'answer'   => 'Yes. We assess existing vegetation and incorporate what\'s healthy and worth keeping. Mature trees, established shrubs, and specimen plants add value — we work around them and integrate new plantings to complement what\'s already there.',
    ],
];

$schemaMarkup = '[' . "\n"
    . generateServiceSchema($service)
    . ",\n"
    . json_encode([
        '@context' => 'https://schema.org',
        '@type'    => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home',     'item' => $siteUrl],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'Services', 'item' => $siteUrl . '/services'],
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Landscaping', 'item' => $siteUrl . '/services/landscaping'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n"
    . generateFAQSchema($faqs)
    . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<!-- ─── Page Hero ─────────────────────────────────────────────────────────── -->
<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[1]); ?>');"
         aria-label="Landscaping service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Landscaping That Fits Your Property</h1>
    <p class="page-hero-sub">Custom landscape design and installation for Black Diamond homes — built around your yard's actual conditions, not a catalog template.</p>
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

<!-- ─── Breadcrumb ─────────────────────────────────────────────────────────── -->
<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Landscaping</li>
    </ol>
  </div>
</nav>

<!-- ─── Service Detail ─────────────────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Professional Landscaping</span>
        <h2>Designed for Black Diamond's terrain and climate</h2>
        <p>Black Diamond sits in a rain-shadow transition zone where Pacific Northwest wet winters give way to drier summers. That swing matters enormously when selecting plants, grading drainage, and designing irrigation. Every landscaping project we take on starts with reading the site — not a wish list.</p>
        <p>We specialize in residential and light commercial landscape design and installation throughout King County. Projects range from full property makeovers with sod, plantings, and hardscape to targeted improvements like a new planting bed, graded lawn area, or front-yard refresh. The scope fits your budget and timeline, not a package tier.</p>
        <p>Our approach is direct: you talk to the contractor, not a salesperson. We walk the property together, discuss options, and build a plan that delivers the result you're after without unnecessary add-ons. Most Black Diamond landscaping projects we complete come in between $2,000 and $15,000 for residential work.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[2]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[2]); ?>"
                 alt="Professional landscaping installation in Black Diamond, WA"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">4+</span>
          Years Local
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,40 L1440,0 L1440,40 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ─── Why Choose Us ─────────────────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Why Stealth Landscaping</span>
      <h2>What makes a difference on landscaping projects</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="map" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Pacific Northwest Plant Knowledge</h4>
          <p>We know which species thrive in King County's clay soils and wet winters — and which ones fail within two seasons. Plant selection is matched to your specific sun exposure, drainage, and maintenance preferences.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="drafting-compass" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Custom Design, Not Cookie-Cutter Plans</h4>
          <p>Every property is different. Slope, existing trees, drainage patterns, and how you use your yard all shape the design. We don't install the same layout twice.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="shovel" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Proper Soil Prep Before Planting</h4>
          <p>Black Diamond area soils can be heavy clay or compacted glacial till. We amend and grade before planting — the step that determines whether plants thrive or fail within two years.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="handshake" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Direct Communication Throughout</h4>
          <p>You'll reach the contractor directly — no call center, no project manager buffer. Changes, questions, and decisions happen in real time without game-of-telephone delays.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ─── Mid-page CTA ───────────────────────────────────────────────────────── -->
<section class="cta-banner" aria-label="Get a landscaping estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a free landscaping estimate in Black Diamond</h2>
      <p>Walk the site with us — no commitment, no pressure. We'll assess your space and give you a clear project plan with honest pricing.</p>
      <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:2rem;">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
          <i data-lucide="phone" aria-hidden="true" width="18" height="18"></i>
          <?php echo htmlspecialchars(formatPhone($phone)); ?>
        </a>
        <?php endif; ?>
        <a href="/contact" class="btn btn-outline-white btn-lg">Request an Estimate</a>
      </div>
    </div>
  </div>
</section>

<!-- ─── Process ───────────────────────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">How It Works</span>
      <h2>Our landscaping process</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Site Walkthrough &amp; Consultation</h4>
          <p>We walk your property together, assess soil, drainage, sun exposure, and existing vegetation. You tell us how you use the space — we listen before suggesting anything.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Design &amp; Estimate</h4>
          <p>We develop a layout and plant/material plan based on your goals and budget. You receive a clear written estimate before any work starts — no hidden line items.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Site Preparation</h4>
          <p>Grading, soil amendment, drainage adjustments, and removal of unwanted material happen before installation begins. This foundational work is what makes landscapes last.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Installation &amp; Cleanup</h4>
          <p>Plants, sod, hardscape elements, and lighting go in according to plan. We clean the site thoroughly and walk you through care instructions before we leave.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Divider -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,0 L1440,40 L1440,0 Z" fill="var(--color-light)"/>
  </svg>
</div>

<!-- ─── FAQ ───────────────────────────────────────────────────────────────── -->
<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2>Landscaping FAQ — Black Diamond, WA</h2>
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

<!-- ─── Closing CTA ────────────────────────────────────────────────────────── -->
<section class="closing-cta" aria-label="Start your landscaping project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Your yard, done right — let's start with a free estimate</h2>
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
