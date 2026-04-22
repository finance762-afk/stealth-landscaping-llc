<?php
/**
 * services/plant-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[6];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[5]; // Plant Installation

$pageTitle       = 'Plant Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Professional plant installation in Black Diamond, WA. Expert selection, soil prep & planting for lasting results in Pacific NW conditions. Free estimates from Stealth Landscaping.';
$canonicalUrl    = $siteUrl . '/services/plant-installation';
$ogImage         = $clientImages[6];

$faqs = [
    [
        'question' => 'What\'s the best time to install plants in Black Diamond, WA?',
        'answer'   => 'Spring (March–May) and fall (September–October) are ideal for most planting in King County. These seasons have moderate temperatures and reliable rainfall that reduce transplant stress. Summer planting works for established container plants if irrigation is available. We advise timing based on the specific species involved.',
    ],
    [
        'question' => 'How do I know which plants will survive in my yard?',
        'answer'   => 'We assess your site before recommending anything — evaluating sun exposure, soil drainage, pH, root competition from nearby trees, and how much water the area naturally receives. We select only plants rated for USDA Zone 8b (Black Diamond\'s hardiness zone) and suited to your specific site conditions.',
    ],
    [
        'question' => 'Do you source plants locally?',
        'answer'   => 'Yes — we work with Pacific Northwest nurseries that stock regionally adapted plants. Locally grown stock establishes faster and handles Western Washington winters better than plants shipped from warmer climates. We focus on quality over quantity.',
    ],
    [
        'question' => 'What\'s included in a plant installation?',
        'answer'   => 'Our plant installation includes site assessment, plant selection consultation, delivery, hole excavation, soil amendment as needed, planting at proper depth, backfill, initial watering, and a bark mulch layer around each plant. We also provide establishment care instructions for the first growing season.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Plant Installation', 'item' => $siteUrl . '/services/plant-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[6]); ?>');"
         aria-label="Plant installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Plant Installation That Takes Root and Thrives</h1>
    <p class="page-hero-sub">The right plant in the right place, installed correctly — we match species to your site's specific conditions for healthy establishment from day one.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Plant Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Professional Plant Installation</span>
        <h2>Plant selection and installation built for Pacific Northwest survival</h2>
        <p>Plant installation fails most often for one of two reasons: the wrong plant was chosen for the site, or installation technique was poor. Both are preventable. We assess your site's conditions before selecting a single plant — sun exposure, soil moisture, drainage characteristics, existing root competition, and USDA hardiness zone (Black Diamond is Zone 8b).</p>
        <p>Black Diamond area soils are frequently heavy clay or rocky glacial till. Without proper soil amendment and adequate hole sizing, even well-chosen plants struggle to establish in their first season. We dig holes wider than they are deep, loosen circling roots on container plants, and incorporate compost into backfill where native soil is particularly dense or compacted.</p>
        <p>Whether you're adding a single specimen tree, replanting a cleared bed with mixed shrubs and perennials, or installing a privacy screen of Arborvitae along a property line — we source locally adapted stock, install with proper technique, and provide the care guidance that makes the difference between a plant that establishes and one that dies in its first summer dry spell.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[7]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[7]); ?>"
                 alt="Plant installation project in Black Diamond, WA — shrub and perennial planting"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">Zone</span>
          8b Adapted
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
      <span class="eyebrow">Why It Matters</span>
      <h2>Installation technique determines long-term success</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="check-circle" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Species-Site Matching</h4>
          <p>We assess drainage, sun, and soil before any plant is selected. No guessing, no generic lists — species are chosen based on your specific yard conditions and King County's climate patterns.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="shovel" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Correct Planting Depth</h4>
          <p>Too deep kills plants through stem rot; too shallow leaves roots exposed and desiccated. We plant at the crown of the root ball — the single most important variable in establishment success.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="activity" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Root Ball Handling</h4>
          <p>Circling roots on container plants are loosened or scored before installation — preventing girdling roots that strangle trees and shrubs 5–10 years after planting.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="droplet" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Establishment Watering Plan</h4>
          <p>We provide a season-specific watering schedule for the first 12 months. Most installation failures happen in month 2 or 3 when initial enthusiasm for watering fades — we help you avoid that drop-off.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get plant installation estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Plant Installation Estimate</h2>
      <p>Tell us what you're trying to achieve — privacy, color, shade, wildlife habitat — and we'll recommend the right plants and give you clear pricing.</p>
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
      <h2>How we handle plant installation</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Site Assessment &amp; Plant Selection</h4>
          <p>We evaluate your site's drainage, sun exposure, soil type, and microclimate. We select plants that are regionally adapted, properly sized for the location, and appropriate for your maintenance preferences.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Layout &amp; Spacing Review</h4>
          <p>Before digging, plants are arranged for visual review. We check spacing for mature size — plants installed too close crowd each other within 3–5 years and require removal or constant pruning.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Hole Excavation &amp; Soil Amendment</h4>
          <p>Holes are dug wider than the root ball and to the correct depth. Roots are loosened, circling roots are corrected, and backfill is amended with compost in heavy clay soils.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Mulching, Watering &amp; Care Instructions</h4>
          <p>Each plant gets a mulch ring (2–3 inches, clear of the stem), an initial deep watering, and a written establishment care schedule covering watering frequency through the first full growing season.</p>
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
      <h2>Plant Installation FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your plant installation project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Plants that establish and thrive — not just survive</h2>
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
