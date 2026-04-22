<?php
/**
 * services/retaining-walls.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[13];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[12]; // Retaining Walls

$pageTitle       = 'Retaining Wall Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Retaining wall installation in Black Diamond, WA — block, stone & timber walls engineered for Western WA slopes and clay soils. Drainage-correct installs. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/retaining-walls';
$ogImage         = $clientImages[13];

$faqs = [
    [
        'question' => 'How much does a retaining wall cost in Black Diamond, WA?',
        'answer'   => 'Retaining wall costs in Black Diamond run $25–$45 per square foot of wall face for concrete block, $35–$65 per square foot for natural stone, and $15–$30 for pressure-treated timber. A 4-foot tall, 20-foot long wall typically costs $2,000–$5,500 complete including drainage. Site access, soil conditions, and wall height all affect final cost.',
    ],
    [
        'question' => 'Do retaining walls require permits in Black Diamond?',
        'answer'   => 'Walls over 4 feet in height (measured from the bottom of the footing) typically require a structural permit in King County. Walls in sensitive areas like slopes over 40% may require geotechnical review. We identify permit requirements for your specific site before any design work begins — never assume a wall doesn\'t need permits based on height alone.',
    ],
    [
        'question' => 'What\'s the best retaining wall material for Western Washington?',
        'answer'   => 'Concrete segmental block (Allan Block, Versa-Lok, or similar) is the most reliable choice for Black Diamond\'s conditions — it\'s frost-tolerant, doesn\'t rot, and is designed with built-in drainage considerations. Natural stone is excellent for aesthetics but requires skilled installation. Timber walls work for shorter applications but have a limited lifespan in WA\'s wet climate (15–20 years versus 50+ for block or stone).',
    ],
    [
        'question' => 'Why do retaining walls fail in Western Washington?',
        'answer'   => 'The majority of retaining wall failures in Western Washington are drainage failures, not structural ones. Clay soils hold water behind walls, building hydrostatic pressure that eventually pushes walls out of plumb or topples them entirely. Proper drainage — gravel backfill, geotextile fabric, and perforated pipe at the base — is more important than the wall material itself. This is where most low-bid installations cut corners.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Retaining Walls', 'item' => $siteUrl . '/services/retaining-walls'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[13]); ?>');"
         aria-label="Retaining wall installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Retaining Walls Built for Western Washington Slopes</h1>
    <p class="page-hero-sub">Block, stone, and timber walls designed with drainage from day one — because hydrostatic pressure is what topples walls, not the weight they hold.</p>
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
      <li class="active" aria-current="page">Retaining Walls</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Structural Retaining Wall Installation</span>
        <h2>The drainage behind a wall determines whether it lasts</h2>
        <p>Black Diamond's terrain and clay soils create a common problem: slopes that need to be retained, and clay that holds water like a bathtub. Most retaining wall failures aren't wall failures at all — they're drainage failures. When water builds up behind a wall in clay soil, hydrostatic pressure builds until something gives. A wall that looks solid can be pushed out of plumb or toppled in a single wet season if drainage wasn't handled correctly from the start.</p>
        <p>Every retaining wall we build includes a continuous gravel drainage column behind the wall face, geotextile fabric to prevent soil migration into the drainage zone, and a perforated pipe at the base of the wall directed to daylight. This drainage system is what makes the difference between a wall that lasts 40 years and one that's leaning in five.</p>
        <p>For wall material selection, concrete segmental block — systems like Allan Block, Versa-Lok, or Belgard — is our standard recommendation for Black Diamond applications. Block walls are frost-tolerant, engineered for geotextile integration, and have a 50+ year design life when properly installed. Natural stone walls are excellent for aesthetic continuity with natural surroundings. Timber walls work well for shorter heights where longevity requirements are lower and budget is the primary concern.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[14]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[14]); ?>"
                 alt="Retaining wall installation in Black Diamond, WA — concrete block retaining wall"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">50yr</span>
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
      <span class="eyebrow">Why Our Walls Hold</span>
      <h2>What separates walls that last from ones that fail</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="droplets" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Drainage-First Installation</h4>
          <p>Gravel backfill replaces native clay behind every wall — not as an option, but as standard practice. Perforated drain pipe at the base channels water away. No drainage engineering means no structural guarantee.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="layers" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Compacted Gravel Base</h4>
          <p>The base course is the most critical layer. We excavate below frost depth, install compacted crushed rock base, and verify level before the first block goes in. Settlement in the base shows up immediately as wall failure.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="anchor" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Deadman Anchors on Taller Walls</h4>
          <p>Walls over 3 feet require geogrid or deadman anchoring into the slope — extending blocks horizontally back into the retained material to resist the overturning force of the soil mass. This is engineered, not optional.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="file-check" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Permit Compliance When Required</h4>
          <p>Walls over 4 feet in King County require permits. We identify permit requirements before work begins, pull the required permits, and ensure the installation meets structural review requirements when applicable.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get retaining wall estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Retaining Wall Estimate</h2>
      <p>Sloped property, eroding hillside, or a grade change that needs to be tamed — walk the site with us and we'll assess the drainage situation and give you material options with complete pricing.</p>
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
      <h2>How we build retaining walls in Black Diamond</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Site Assessment &amp; Design</h4>
          <p>We assess slope angle, soil conditions, drainage patterns, and load requirements above the wall. Height and material are selected, permit requirements are determined, and wall layout is staked.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Excavation &amp; Base Preparation</h4>
          <p>Base trench is excavated to the correct depth below frost line. Compacted crushed gravel base is installed and leveled — this foundation determines whether the wall stays plumb over decades.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Wall Construction &amp; Drainage</h4>
          <p>Base course is set, leveled, and compacted. Each subsequent course is set with proper batter (backward lean), geotextile fabric is installed against native soil, gravel backfill replaces clay, and perforated drain pipe runs the full wall length at the base.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Cap, Backfill &amp; Finish</h4>
          <p>Cap block or capstone is set on the final course. Remaining backfill is compacted in lifts. Drain outlet is directed to daylight away from structures. Site is cleaned and graded.</p>
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
      <h2>Retaining Wall FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your retaining wall project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>A wall built to hold — not just to look good for a few seasons</h2>
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
