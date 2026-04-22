<?php
/**
 * services/flower-bed-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[5];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[4]; // Flower Bed Installation

$pageTitle       = 'Flower Bed Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Custom flower bed design & installation in Black Diamond, WA. Native plants, perennials & seasonal color tailored to King County growing conditions. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/flower-bed-installation';
$ogImage         = $clientImages[5];

$faqs = [
    [
        'question' => 'What plants work well in flower beds in Black Diamond, WA?',
        'answer'   => 'Pacific Northwest natives like Salvia, Lavender, Echinacea, and Heuchera thrive in King County\'s wet winters and drier summers. For consistent color, we combine spring bulbs, summer perennials, and fall bloomers. We avoid high-maintenance annuals unless you want to replant seasonally.',
    ],
    [
        'question' => 'How much does flower bed installation cost?',
        'answer'   => 'A single flower bed typically runs $300–$800 including edging, soil prep, plants, and mulch. A full front yard bed installation with multiple areas runs $800–$3,000 depending on size and plant selection. We provide exact pricing after seeing the space.',
    ],
    [
        'question' => 'Do flower beds need a lot of maintenance?',
        'answer'   => 'That depends on the plants we select. Native and drought-tolerant perennial beds need minimal ongoing work — annual pruning, occasional weeding, and mulch refresh every 1–2 years. We can design for low maintenance if that\'s the priority.',
    ],
    [
        'question' => 'Can you install flower beds around existing trees and shrubs?',
        'answer'   => 'Yes — we design beds to complement existing trees and shrubs, selecting plants that match the light and moisture conditions created by established vegetation. We don\'t disturb root zones of mature trees.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Flower Bed Installation', 'item' => $siteUrl . '/services/flower-bed-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[5]); ?>');"
         aria-label="Flower bed installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Flower Bed Installation with Seasonal Color</h1>
    <p class="page-hero-sub">Custom planting beds designed for Pacific Northwest growing conditions — color from spring through fall with manageable ongoing maintenance.</p>
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
      <li class="active" aria-current="page">Flower Bed Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Custom Flower Beds</span>
        <h2>Color and texture designed for your specific conditions</h2>
        <p>A well-planted flower bed adds more to a property's curb appeal than almost any other single landscape element. But plant selection matters enormously in Western Washington — species that thrive in California or the Midwest often rot, struggle with fungal issues, or bolt during Black Diamond's unpredictable summer dry spells.</p>
        <p>We design flower beds around your site's actual conditions: sun exposure, soil drainage, competition from tree roots, and how much water the area naturally receives. For most King County properties, a mix of Pacific Northwest natives (Salvia, Lavender, Echinacea), reliable perennials (Heuchera, Catmint, Rudbeckia), and seasonal bulbs gives color from March through October with minimal intervention.</p>
        <p>Every bed installation includes edging definition, soil amendment if needed, a 2–3 inch bark mulch layer for moisture retention and weed suppression, and plant placement based on mature size — so the bed looks right in year two, not just on installation day. We can also include drip irrigation integration if you want hands-off watering.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[6]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[6]); ?>"
                 alt="Flower bed installation in Black Diamond, WA — perennial planting beds"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">3</span>
          Season Color
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
      <span class="eyebrow">Our Flower Bed Approach</span>
      <h2>What makes a flower bed actually work in Black Diamond</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="sun" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Plants Matched to Your Site</h4>
          <p>We select species based on your specific sun exposure, soil moisture, and how much seasonal rain your beds receive. No guessing — we assess before recommending anything.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="calendar" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Designed for Multi-Season Interest</h4>
          <p>We layer spring bulbs, early-summer perennials, and fall bloomers so the bed looks alive March through October — not just for 6 weeks in June.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="package" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Mulch Included in Every Install</h4>
          <p>Every bed gets a 2–3 inch bark mulch layer immediately after planting. This suppresses weeds, retains soil moisture, and regulates root temperature through Black Diamond's winter freezes.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="leaf" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Low-Maintenance Options Available</h4>
          <p>If you want a bed that requires minimal annual attention, we build around native and naturalized perennials that self-maintain with only occasional pruning and a mulch refresh every other year.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get flower bed estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Flower Bed Installation Estimate</h2>
      <p>Tell us where you want beds and what you're after — color, pollinators, low maintenance, curb appeal — we'll design and price it for you.</p>
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
      <h2>Flower bed installation process</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Site Assessment &amp; Plant Selection</h4>
          <p>We evaluate sun, drainage, soil quality, and existing vegetation. Based on your preferences and site conditions, we select a plant palette with staggered bloom times and appropriate sizes for the space.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Bed Preparation</h4>
          <p>Existing vegetation is removed, soil is loosened and amended with compost where needed. Edging is installed or reset to define the bed boundary cleanly against lawn or hardscape.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Planting</h4>
          <p>Plants are arranged before digging — adjustments are made to spacing and groupings for visual balance. Holes are dug, roots are loosened, plants are set at proper depth, and backfilled firmly with amended soil.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Mulch Application &amp; Initial Watering</h4>
          <p>A 2–3 inch bark mulch layer is spread over the entire bed, kept back from plant stems. We water thoroughly and provide establishment care instructions covering the first 4–6 weeks.</p>
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
      <h2>Flower Bed FAQ — Black Diamond, WA</h2>
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

<section class="closing-cta" aria-label="Start your flower bed project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Add color and life to your landscape this season</h2>
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
