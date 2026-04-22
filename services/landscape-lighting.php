<?php
/**
 * services/landscape-lighting.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[10];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[9]; // Landscape Lighting

$pageTitle       = 'Landscape Lighting Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Landscape lighting design & installation in Black Diamond, WA. LED path lights, uplights & accent fixtures for safety and evening ambiance. Free estimates from Stealth Landscaping.';
$canonicalUrl    = $siteUrl . '/services/landscape-lighting';
$ogImage         = $clientImages[10];

$faqs = [
    [
        'question' => 'How much does landscape lighting cost in Black Diamond, WA?',
        'answer'   => 'A starter pathway and accent lighting system for a typical Black Diamond home runs $800–$2,500 installed, depending on the number of fixtures and transformer size. Larger systems with uplighting, step lights, and multiple zones run $2,500–$6,000. All figures include low-voltage transformer, wire, and fixtures. We provide exact pricing after a site walkthrough.',
    ],
    [
        'question' => 'Is landscape lighting worth it in Western Washington\'s rainy climate?',
        'answer'   => 'Absolutely — Black Diamond gets dark early from October through March, and that\'s exactly when exterior lighting adds the most practical value. Quality outdoor fixtures are rated IP65+ for wet environments. Well-designed landscape lighting also adds to safety on paths and steps during those dark, wet months.',
    ],
    [
        'question' => 'Can I control landscape lighting with a timer or smart app?',
        'answer'   => 'Yes — we install transformers with built-in astronomical timers that automatically adjust to seasonal daylight changes. Smart transformer options allow app control, zone scheduling, and integration with home automation. We discuss control options based on your setup and preferences.',
    ],
    [
        'question' => 'Do I need a permit for landscape lighting in Black Diamond?',
        'answer'   => 'Low-voltage landscape lighting systems (12V) typically don\'t require permits in King County. Line voltage (120V) installations do require permits and licensed electrical work. We install low-voltage LED systems exclusively for landscape applications.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Landscape Lighting', 'item' => $siteUrl . '/services/landscape-lighting'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[10]); ?>');"
         aria-label="Landscape lighting service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Landscape Lighting for Safety and Evening Ambiance</h1>
    <p class="page-hero-sub">Energy-efficient LED landscape lighting designed for Pacific Northwest conditions — illuminating paths, features, and plantings through Black Diamond's long, dark winters.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Landscape Lighting</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Low-Voltage LED Landscape Lighting</span>
        <h2>Use your outdoor space after sunset, safely</h2>
        <p>In Black Diamond, sunset happens at 4:15 PM in December. For five months of the year, your outdoor space exists almost entirely in the dark between the time you get home from work and the time you leave in the morning. Good landscape lighting changes that relationship entirely — illuminating safe pathways, highlighting the features you invested in, and extending the visual presence of your landscape through the dark months.</p>
        <p>We design and install low-voltage (12V) LED landscape lighting systems — the same voltage standard used by every major outdoor fixture manufacturer. Low-voltage systems are safe to install without an electrical permit in King County, energy-efficient (most LED landscape fixtures draw 2–5 watts), and easy to modify or expand over time without rewiring.</p>
        <p>Fixture selection is based on what you're trying to accomplish in each area: path lights for walkway definition and safety, uplights for tree and architectural features, step lights for deck or entry stairs, and spotlights for key plantings or stone features. We avoid over-lighting — the goal is a warm, layered effect, not a parking lot.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[11]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[11]); ?>"
                 alt="Landscape lighting installation in Black Diamond, WA — LED outdoor lighting"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">LED</span>
          Low Voltage
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
      <span class="eyebrow">Our Lighting Approach</span>
      <h2>Designed for function first, atmosphere second</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="lamp" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Fixture Selection for WA Climate</h4>
          <p>We use IP65-rated or better fixtures throughout — designed for continuous wet environment exposure. Budget fixtures fail at connection points within 2–3 Black Diamond winters. Quality fixtures last 10+ years.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="zap" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Energy-Efficient LED Only</h4>
          <p>All fixtures are LED — typically 2–5 watts each. A 10-fixture system costs less than a dollar per night to run. No halogen replacements every season, no heat buildup, consistent color temperature throughout the system's lifespan.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="settings" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Astronomical Timer Control</h4>
          <p>Transformers include astronomical timers that automatically adjust on/off times as days lengthen and shorten through the year — no manual adjustments needed through Western Washington's extreme daylight variation.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="expand" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Expandable Systems</h4>
          <p>We install with capacity for future additions — proper transformer sizing and wire routing so new zones can be added without major rework. Start with path lights, add uplighting later.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get landscape lighting estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Landscape Lighting Estimate</h2>
      <p>Describe the areas you want illuminated — pathways, trees, entry, patio — and we'll design a system and give you complete pricing before any work starts.</p>
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
      <h2>How we design and install landscape lighting</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Evening Site Walkthrough &amp; Design</h4>
          <p>We prefer evening walkthroughs when possible — seeing the space in darkness reveals exactly where light is needed and where glare needs to be avoided. We design fixture placement, quantities, and transformer location before any material is ordered.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Wire Routing &amp; Transformer Installation</h4>
          <p>Wire routes are planned to minimize surface runs. Transformer is mounted near the electrical outlet (GFCI outdoor outlet required), sized for current load plus future expansion capacity.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Fixture Installation &amp; Positioning</h4>
          <p>Fixtures are installed at planned locations, wired into the low-voltage system, and aimed during daylight. Final position and angle adjustments happen after dark with the system running.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Night Testing &amp; Timer Programming</h4>
          <p>We test the full system at night, adjust fixture angles, and program the timer with your preferred schedule. You're walked through basic system operation — zone control, override options, and seasonal adjustments if needed.</p>
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
      <h2>Landscape Lighting FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your landscape lighting project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Illuminate your property — beautifully and safely</h2>
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
