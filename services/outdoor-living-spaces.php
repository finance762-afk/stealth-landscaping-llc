<?php
/**
 * services/outdoor-living-spaces.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[15];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[14]; // Outdoor Living Spaces

$pageTitle       = 'Outdoor Living Spaces Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Custom outdoor living space design & installation in Black Diamond, WA. Patios, fire features, lighting & seating — built for Pacific NW seasons. Free estimates from Stealth Landscaping.';
$canonicalUrl    = $siteUrl . '/services/outdoor-living-spaces';
$ogImage         = $clientImages[15];

$faqs = [
    [
        'question' => 'How much does an outdoor living space cost in Black Diamond?',
        'answer'   => 'Outdoor living space projects in Black Diamond range from $8,000 for a basic patio-and-lighting combination to $30,000+ for full builds with fire features, integrated seating walls, lighting, and plantings. Most residential projects fall in the $12,000–$20,000 range. We price each element separately so you can phase the project if budget requires.',
    ],
    [
        'question' => 'How many months of the year can you use an outdoor space in Black Diamond?',
        'answer'   => 'A well-designed outdoor space in Black Diamond is usable 9–10 months of the year. Black Diamond\'s climate is mild — summer dry season runs June through September, and spring and fall are often comfortable for outdoor use with a fire feature and covered element. January and February are typically the only months where outdoor entertaining feels impractical.',
    ],
    [
        'question' => 'What features extend outdoor living season in Western Washington?',
        'answer'   => 'Fire features (fire pit or fireplace) are the single biggest season extender — adding comfortable evenings from March through October. A pergola or covered structure extends rain-weather use significantly. Landscape lighting adds usable hours after dark, which matters most from October to March when sunset arrives before 5 PM.',
    ],
    [
        'question' => 'Do outdoor living spaces require permits in Black Diamond?',
        'answer'   => 'Freestanding patios and fire pits typically don\'t require permits. Covered structures (pergolas attached to the house, roofed patio covers) require building permits. Gas line installations require mechanical permits and licensed contractor work. We identify all permit requirements for your specific project before work begins.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Outdoor Living Spaces', 'item' => $siteUrl . '/services/outdoor-living-spaces'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[15]); ?>');"
         aria-label="Outdoor living spaces service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Outdoor Living Spaces That Add Months to Your Season</h1>
    <p class="page-hero-sub">Integrated patio, fire, lighting, and seating designs built to handle Pacific Northwest conditions — so your outdoor space works for you ten months a year, not three.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Outdoor Living Spaces</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Complete Outdoor Living Design &amp; Build</span>
        <h2>Designed for how you actually want to use your outdoor space</h2>
        <p>Most outdoor spaces in Black Diamond are underused — not because the weather is too bad, but because the design doesn't account for Pacific Northwest conditions. A patio without a fire feature is cold for three-quarters of the year. Lighting that was added as an afterthought doesn't create an atmosphere that draws people outside. Seating arrangements that ignore the prevailing wind direction get avoided once the leaves fall.</p>
        <p>We approach outdoor living spaces as integrated projects: patio surface, fire feature, lighting, seating walls, and plantings designed together from the first conversation. When these elements are planned together, they reinforce each other — the fire pit becomes the visual focal point, the lighting frames it, the seating walls define the space without creating a boxed-in feel. When they're added piecemeal over several seasons, the result usually feels like a collection of separate purchases rather than a space.</p>
        <p>Every outdoor living project starts with a drainage assessment. Patios that pool water, fire pits that collect standing water in the ring, and seating walls that wick moisture from below are all drainage problems that could have been solved in the design phase. We plan drainage routing before a single paver is ordered, so the finished space is usable the day after a typical Black Diamond rainstorm.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[16]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[16]); ?>"
                 alt="Outdoor living space installation in Black Diamond, WA — patio with fire feature and lighting"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">10</span>
          Months/Year
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
      <span class="eyebrow">What We Build</span>
      <h2>Every element designed to work together</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="grid-3x3" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Patio Surface &amp; Drainage</h4>
          <p>Concrete paver or flagstone patio with drainage engineered from the design phase — not added after the fact. Minimum 2% slope away from structures, with overflow directed to landscaping or drain systems.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="flame" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Fire Features</h4>
          <p>Gas fire pits, wood-burning fire rings, and masonry fire features — positioned for wind and sight lines, built with non-combustible materials throughout. Safe setback distances from structures and landscaping observed on every project.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="lamp" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Integrated Landscape Lighting</h4>
          <p>Low-voltage LED pathway, accent, and feature lighting planned as part of the space design — not added after the fact. Lighting defines the evening atmosphere and extends usable hours from September through April.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="layout-panel-left" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Seating Walls &amp; Built-In Features</h4>
          <p>Block or stone seating walls define the space, add built-in seating, and eliminate the need for furniture that disappears inside every winter. We design walls to double as perimeter definition and functional seating.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get outdoor living space estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Outdoor Living Space Estimate</h2>
      <p>Tell us how you want to use the space — entertaining, family use, fire feature focus — and we'll design it around your goals and give you phased pricing options.</p>
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
      <span class="eyebrow">Our Design-Build Process</span>
      <h2>From concept to finished outdoor space</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Discovery &amp; Design Consultation</h4>
          <p>We walk the site and understand how you want to use the space — number of people, desired features, existing access points. Drainage patterns are noted. A design concept is developed with phasing options if budget requires.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Permit Research &amp; Material Selection</h4>
          <p>Permit requirements are confirmed for covered structures, gas lines, or other regulated elements. Paver, stone, and feature materials are selected with pricing confirmed. Project schedule is set.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Hardscape &amp; Feature Construction</h4>
          <p>Patio base and surface are installed. Seating walls, fire feature base, and any structural elements are built concurrently. Lighting conduit and wire routes are set during hardscape construction.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Lighting, Plantings &amp; Finish</h4>
          <p>Landscape lighting fixtures are installed and aimed. Any integrated planting beds around the patio perimeter are completed. Fire feature is tested and timer/controls are programmed. Final walkthrough covers operation and maintenance.</p>
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
      <h2>Outdoor Living FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your outdoor living project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>An outdoor space built to be used — not just looked at</h2>
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
