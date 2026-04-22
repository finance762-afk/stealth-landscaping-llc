<?php
/**
 * services/sod-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[4];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[3]; // Sod Installation

$pageTitle       = 'Sod Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Professional sod installation in Black Diamond, WA. Instant lawn in a day — proper soil prep, quality turf varieties suited to Pacific NW conditions. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/sod-installation';
$ogImage         = $clientImages[4];

$faqs = [
    [
        'question' => 'How much does sod installation cost in Black Diamond, WA?',
        'answer'   => 'Sod installation in the Black Diamond area typically runs $0.90–$1.50 per square foot installed, including materials and labor. A 1,000 sq ft lawn averages $900–$1,500. Cost varies by site access, soil prep required, and the turf variety selected. Soil amendment and grading add to the total if needed.',
    ],
    [
        'question' => 'What grass varieties work best in Black Diamond\'s climate?',
        'answer'   => 'For Western Washington, we typically recommend Tall Fescue for its drought tolerance and shade adaptability, or Bluegrass/Rye blends for sunny, well-drained areas. Fescue handles Black Diamond\'s clay soils and rain shadow summers better than most alternatives. We select based on your yard\'s specific sun and drainage conditions.',
    ],
    [
        'question' => 'When can sod be installed in Washington State?',
        'answer'   => 'Sod can be installed year-round in Western Washington, but spring (April–June) and fall (September–October) give the best establishment results. Summer installs work if irrigation is in place. We avoid installation during frost events or extended heat waves when root stress is highest.',
    ],
    [
        'question' => 'How long before I can walk on new sod?',
        'answer'   => 'Limit foot traffic for the first 2 weeks while roots establish. Light foot traffic is fine after 2 weeks; normal use after 4–6 weeks. Mowing begins when the sod is rooted — test by tugging at a corner. Keep soil consistently moist during the first 3–4 weeks.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Sod Installation', 'item' => $siteUrl . '/services/sod-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[4]); ?>');"
         aria-label="Sod installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Sod Installation — A Real Lawn in a Single Day</h1>
    <p class="page-hero-sub">Skip the 8-week wait of seeding. Professional sod installation gives you established grass immediately, with proper soil prep that makes it last.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Sod Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Professional Sod Installation</span>
        <h2>Instant lawn from bare ground — done right the first time</h2>
        <p>Sod installation is one of the most visible landscaping projects a homeowner can invest in — and one where cutting corners on prep work shows within a single season. Weak root contact, uneven grade, or improper soil amendment leads to dead patches, uneven surfaces, and wasted money. We do the prep work that prevents those problems.</p>
        <p>We begin by removing existing vegetation, grading the surface to proper slope for drainage, and amending the soil if needed. Black Diamond area soils are often compacted clay — adding compost and tilling before sod goes down makes a meaningful difference in how quickly roots establish and how the lawn holds up through summer dry periods.</p>
        <p>Turf variety selection matters in King County. We recommend based on your specific conditions: sun exposure, soil drainage, how much foot traffic the lawn will see, and whether summer irrigation is available. Most Black Diamond residential lawns do well with Tall Fescue or a Fescue/Bluegrass blend. We source fresh sod, typically cut within 24 hours of delivery.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[5]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[5]); ?>"
                 alt="Sod installation in Black Diamond, WA — fresh lawn installation"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">1</span>
          Day Install
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
      <span class="eyebrow">Our Approach</span>
      <h2>What makes sod installation succeed or fail</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="shovel" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Soil Prep Before Sod Goes Down</h4>
          <p>We till, amend, and grade before installation. In clay-heavy Black Diamond soils, compost amendment isn't optional — it's what allows roots to penetrate below the first inch and survive their first summer.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="sprout" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Fresh Sod, Not Sitting in a Yard</h4>
          <p>We source sod cut within 24 hours of installation. Sod that sits on pallets for days roots poorly and stresses immediately. Fresh material means faster establishment and fewer dead patches.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="triangle-right" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Proper Grade for Drainage</h4>
          <p>Flat lawns hold water and develop moss within two seasons in Western WA. We grade with a slight pitch away from structures to ensure surface drainage. No low spots, no standing water after rain.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="book-open" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Establishment Guidance Included</h4>
          <p>We walk you through the first 6 weeks of watering schedule and mowing timing before we leave. Most sod failure happens from improper establishment watering — we make sure you know exactly what the lawn needs.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get sod installation estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Sod Installation Estimate</h2>
      <p>Tell us your square footage and timeline — we'll assess the site, recommend the right turf variety, and give you exact pricing before any work starts.</p>
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
      <span class="eyebrow">Installation Steps</span>
      <h2>How we install sod in Black Diamond</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Site Clearing &amp; Vegetation Removal</h4>
          <p>Existing lawn, weeds, and debris are removed. If existing sod is present, we use a sod cutter for clean removal. The site is cleared to bare soil before any prep work begins.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Tilling, Amendment &amp; Grading</h4>
          <p>Soil is tilled 4–6 inches, compost or topsoil is incorporated where needed, and the area is graded to achieve proper drainage slope away from structures. Low spots are filled and compacted.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Sod Installation</h4>
          <p>Fresh sod rolls are laid in a staggered brick pattern with tight seam contact. Cut pieces are used at edges. A lawn roller presses sod firmly against the soil to eliminate air pockets and encourage root contact.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Initial Watering &amp; Establishment Instructions</h4>
          <p>We do an initial thorough watering after installation and provide a clear 6-week establishment schedule covering watering frequency, amounts, and first mowing timing.</p>
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
      <h2>Sod Installation FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your sod project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Go from bare ground to full lawn in a single day</h2>
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
