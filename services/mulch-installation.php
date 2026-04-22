<?php
/**
 * services/mulch-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[9];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[8]; // Mulch Installation

$pageTitle       = 'Mulch Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Professional mulch installation in Black Diamond, WA. Landscape beds, garden areas & tree rings. Weed suppression, moisture retention & polished results. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/mulch-installation';
$ogImage         = $clientImages[9];

$faqs = [
    [
        'question' => 'What type of mulch works best in Black Diamond, WA?',
        'answer'   => 'Bark mulch — specifically Pacific Northwest cedar or Douglas Fir bark — is the standard choice for Western Washington landscapes. It holds up well in high-rainfall conditions, doesn\'t float or wash away like wood chips, and breaks down slowly to improve soil structure. We avoid dyed mulches, which look artificial and can contain treated wood.',
    ],
    [
        'question' => 'How much mulch do I need, and how often should it be refreshed?',
        'answer'   => 'A 2–3 inch depth is ideal — enough to suppress weeds and retain moisture without suffocating plant roots. Mulch breaks down over 12–18 months in Pacific Northwest conditions; we recommend refreshing annually or every other year. A yard of mulch covers approximately 100 square feet at 3 inches deep.',
    ],
    [
        'question' => 'Should mulch touch plant stems and tree trunks?',
        'answer'   => 'No — mulch should be kept 2–4 inches clear of plant stems and tree trunks. The "volcano mulch" look (piled against trunks) holds moisture against bark and causes stem rot, fungal disease, and pest harbor. We install all mulch correctly, with proper clearance around every plant.',
    ],
    [
        'question' => 'Do you remove old mulch before installing new?',
        'answer'   => 'If the existing mulch layer is already 3+ inches thick, we rake it out before adding new material. Excessive mulch depth (4+ inches) reduces oxygen to roots and can harm plant health. If the old layer is thin and decomposed, we can apply new mulch directly on top.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Mulch Installation', 'item' => $siteUrl . '/services/mulch-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[9]); ?>');"
         aria-label="Mulch installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Mulch Installation That Finishes Your Landscape</h1>
    <p class="page-hero-sub">Professional bark mulch application that suppresses weeds, retains moisture, and gives your planting beds a clean, polished look that lasts.</p>
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
      <li class="active" aria-current="page">Mulch Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Mulch Installation</span>
        <h2>More than aesthetics — mulch is functional plant care</h2>
        <p>Fresh bark mulch is the easiest, most cost-effective improvement you can make to an established landscape. A properly applied 2–3 inch layer suppresses annual weeds by blocking light, retains soil moisture reducing watering needs by 25–50%, moderates soil temperature through Black Diamond's winter freezes and summer dry spells, and slowly breaks down to improve soil organic matter.</p>
        <p>In Western Washington's high-rainfall environment, choosing the right mulch type matters. Pacific Northwest bark mulch — cedar or Douglas Fir — holds together in rain without floating or washing into drainage areas the way lighter wood chips do. It also breaks down at the right pace for this climate: slowly enough to provide multi-season benefit, but fast enough to contribute to soil health.</p>
        <p>We install mulch for single-bed projects and full property applications. We bring material in bulk, apply to the correct depth (2–3 inches), and edge beds cleanly against lawn and hardscape edges. If old mulch needs to be removed or edges need to be recut before mulch goes down, we handle that as part of the service.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[10]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[10]); ?>"
                 alt="Mulch installation in Black Diamond, WA — bark mulch landscape beds"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">2-3"</span>
          Proper Depth
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
      <span class="eyebrow">Benefits of Professional Mulching</span>
      <h2>Why mulch application makes a real difference</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="shield" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Weed Suppression</h4>
          <p>A proper 2–3 inch layer blocks light from reaching weed seeds, dramatically reducing annual weed germination. It won't eliminate perennial weeds with established root systems, but it significantly cuts annual weeding time.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="droplets" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Moisture Retention</h4>
          <p>Mulch slows evaporation from soil surfaces, reducing supplemental watering needs by 25–50% during Black Diamond's summer dry period when rainfall drops to under 2 inches per month.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="thermometer" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Root Temperature Regulation</h4>
          <p>Mulch insulates roots against both summer heat and winter freezes. This matters for marginally hardy plants in Black Diamond's Zone 8b climate, where occasional hard freezes can damage unprotected root zones.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="sparkles" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Clean, Finished Appearance</h4>
          <p>Fresh bark mulch gives planting beds a clean, intentional look that elevates the overall appearance of the property. It's one of the highest visual return-on-investment improvements in residential landscaping.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get mulch installation estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Mulch Installation Estimate</h2>
      <p>Tell us your bed square footage or describe the property — we'll calculate the material needed and give you pricing for full installation.</p>
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
      <h2>Our mulch installation process</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Bed Preparation</h4>
          <p>Existing mulch is assessed — if over 3 inches deep, excess is removed. Bed edges are recut if needed to define clean boundaries against lawn. Any large weeds are pulled before mulch application.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Material Delivery &amp; Staging</h4>
          <p>Bark mulch is delivered in bulk to minimize cost per cubic yard. We stage material near the work area to minimize handling distance and keep driveways and lawn protected.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Mulch Application</h4>
          <p>Material is spread to a consistent 2–3 inch depth throughout beds. We keep mulch 2–4 inches clear of plant stems and tree trunks — the "volcano mulch" mistake that causes stem rot and pest problems.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Edge Definition &amp; Cleanup</h4>
          <p>Bed edges are defined cleanly against lawn and hardscape, excess mulch is swept from paved areas, and the site is inspected with you for complete coverage and correct depth throughout.</p>
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
      <h2>Mulch FAQ — Black Diamond, WA</h2>
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

<section class="closing-cta" aria-label="Start your mulch project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Polished beds, less weeding, healthier plants</h2>
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
