<?php
/**
 * services/hydro-seeding.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[18];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[17]; // Hydro-Seeding

$pageTitle       = 'Hydro Seeding Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Hydro seeding in Black Diamond, WA — fast, even grass establishment on slopes, new construction & bare areas. Custom seed mixes for WA climate. Free estimates from Stealth Landscaping.';
$canonicalUrl    = $siteUrl . '/services/hydro-seeding';
$ogImage         = $clientImages[18];

$faqs = [
    [
        'question' => 'How much does hydro seeding cost compared to sod in Black Diamond?',
        'answer'   => 'Hydro seeding costs $0.10–$0.20 per square foot in Black Diamond — roughly 80–90% less than sod installation. A 5,000 square foot lawn runs $500–$1,000 hydro seeded versus $4,500–$7,500 sodded. The trade-off is time: sod is usable in 3–4 weeks; hydro seeded lawn takes 8–12 weeks to reach a mowable state. For large or irregularly shaped areas, hydro seeding is almost always the cost-effective choice.',
    ],
    [
        'question' => 'When is the best time to hydro seed in Western Washington?',
        'answer'   => 'September through early October is the ideal hydro seeding window in Black Diamond. Fall seeding takes advantage of warm soil temperatures that encourage germination, followed by a natural irrigation period from fall rains. Spring seeding (March–April) also works well. Avoid summer seeding when heat and dry conditions demand intensive irrigation to prevent seedling desiccation.',
    ],
    [
        'question' => 'What grass seed mix do you use for Black Diamond lawns?',
        'answer'   => 'For Black Diamond\'s Zone 8b climate and typical clay soils, we use a blend of Tall Fescue (60–70%) for drought tolerance and clay-soil performance, Kentucky Bluegrass (15–20%) for fine texture and self-repair, and Perennial Ryegrass (10–15%) for fast establishment and wear tolerance. The exact ratio adjusts for shade conditions — shaded areas use Fine Fescue varieties that perform better under tree cover.',
    ],
    [
        'question' => 'How long before I can walk on a hydro seeded lawn?',
        'answer'   => 'Stay off a hydro seeded lawn entirely for the first 4 weeks after application — the mulch mat and germinating seedlings are easily disrupted. Light foot traffic is acceptable once the lawn reaches 3 inches in height (typically 6–8 weeks). Full use including mowing begins around 8–10 weeks. We provide a written establishment schedule with each installation covering irrigation, first mow timing, and fertilization.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Hydro-Seeding', 'item' => $siteUrl . '/services/hydro-seeding'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[18]); ?>');"
         aria-label="Hydro seeding service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Hydro Seeding — Fast, Even Lawn Establishment at a Fraction of Sod Cost</h1>
    <p class="page-hero-sub">Custom seed mixes applied in a protective slurry — uniform coverage on slopes, bare construction areas, and irregular shapes that sod can't handle economically.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Hydro-Seeding</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Hydro Seeding &amp; Lawn Establishment</span>
        <h2>The cost-effective path to a full lawn in Western Washington</h2>
        <p>Hydro seeding applies a slurry of seed, fertilizer, wood fiber mulch, and a tackifier in a single pass — the mulch blanket retains moisture around the seed, the tackifier bonds the slurry to slopes preventing erosion, and the fertilizer jumpstarts germination. The result is more even seed distribution than broadcast seeding and faster establishment than dry seeding because the seed is never exposed to direct sun and drying.</p>
        <p>In Black Diamond, hydro seeding is particularly effective for two situations: new construction where a large area of bare subsoil needs to be established, and slopes where sod would be impractical to install and broadcast seed would wash. The fiber mulch matrix holds on grades that would erode under any other seeding method, and the slurry gets into irregular terrain contours that sod pieces would never conform to cleanly.</p>
        <p>Seed mix selection is one of the most important decisions in a hydro seeding project. Off-the-shelf "Pacific Northwest" mixes often contain proportion ratios optimized for Oregon's Willamette Valley conditions — different from Black Diamond's clay soils and higher rainfall. We formulate mixes specific to the planting area's sun exposure, intended use, and soil drainage characteristics. A shade lawn under Douglas Firs has different requirements than a full-sun play lawn or a slope in need of erosion control.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[19]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[19]); ?>"
                 alt="Hydro seeding service in Black Diamond, WA — lawn establishment by hydro seeder"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">90%</span>
          Less Than Sod
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
      <span class="eyebrow">Why Hydro Seeding Works</span>
      <h2>What makes this method outperform broadcast seeding</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="sprout" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Custom WA-Specific Seed Mixes</h4>
          <p>We formulate blends based on your site's sun exposure, soil type, and intended use — not off-the-shelf mixes calibrated for a different climate. Tall Fescue-dominant blends for clay soils; Fine Fescue varieties for shaded areas under PNW evergreen canopy.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="trending-up" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Slope Erosion Control</h4>
          <p>The tackifier in the hydro seed slurry bonds the fiber mulch to slopes, preventing wash during Black Diamond's heavy rainfall events. Grades that would erode before broadcast seed could germinate are stable with hydro seeding from day one.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="droplets" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Moisture Retention During Germination</h4>
          <p>The wood fiber mulch matrix holds moisture around the seed during the critical germination window, reducing irrigation requirements and protecting seeds from surface drying between watering cycles.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="dollar-sign" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Cost Advantage on Large Areas</h4>
          <p>Hydro seeding costs $0.10–$0.20 per square foot versus $0.90–$1.50 for sod. On areas over 2,000 square feet, the cost difference is substantial and the established lawn is identical after one full growing season.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get hydro seeding estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Hydro Seeding Estimate</h2>
      <p>New construction, bare slope, or a lawn that needs a full restart — tell us the area size and conditions and we'll give you a seed mix recommendation and complete pricing.</p>
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
      <span class="eyebrow">Establishment Process</span>
      <h2>From bare ground to established lawn</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Soil Preparation</h4>
          <p>Existing vegetation and debris are removed. Soil is roto-tilled or scarified to a 2–4 inch depth. Soil amendments (lime, starter fertilizer) are incorporated based on soil conditions. Grade is established for proper drainage.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Seed Mix Formulation</h4>
          <p>Seed blend is selected based on sun exposure, soil type, and intended use. Varieties are confirmed for Zone 8b performance. Slurry is mixed with wood fiber mulch, starter fertilizer, tackifier, and water in the hydro seeder tank.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Hydro Seeder Application</h4>
          <p>Slurry is applied in overlapping passes for uniform coverage. Slopes and edges receive extra attention. Application rate is calibrated for the specific seed mix and coverage target. The green mulch layer is visible immediately after application.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Establishment Care &amp; Schedule</h4>
          <p>We provide a written establishment schedule: irrigation frequency for the first 6 weeks, first mow timing (3 inches of growth), fertilization schedule, and overseeding guidance if germination is uneven. Establishment success depends heavily on first-season irrigation.</p>
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
      <h2>Hydro Seeding FAQ — Black Diamond, WA</h2>
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

<section class="closing-cta" aria-label="Start your hydro seeding project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>A full lawn in one growing season — without the cost of sod</h2>
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
