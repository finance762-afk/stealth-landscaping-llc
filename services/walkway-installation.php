<?php
/**
 * services/walkway-installation.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[14];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[13]; // Walkway Installation

$pageTitle       = 'Walkway Installation Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Walkway installation in Black Diamond, WA — pavers, flagstone & concrete paths built for Pacific NW rain and foot traffic. Safe footing, clean lines. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/walkway-installation';
$ogImage         = $clientImages[14];

$faqs = [
    [
        'question' => 'How much does walkway installation cost in Black Diamond?',
        'answer'   => 'Walkway installation in Black Diamond runs $15–$25 per square foot for concrete pavers, $18–$30 per square foot for flagstone, and $10–$16 per square foot for exposed aggregate concrete. A 40-foot paver walkway (3 feet wide) typically costs $1,800–$3,000 complete. Site access, soil conditions, and any grade changes affect the final cost.',
    ],
    [
        'question' => 'What walkway material is safest when wet in Western Washington?',
        'answer'   => 'Tumbled or textured concrete pavers and rough-cleft flagstone provide the best traction in wet conditions — which is most of the year in Black Diamond. Smooth-finish pavers, polished stone, and unstamped concrete become slippery when wet. We always factor slip resistance into material recommendations for walkways, especially those leading to front entries.',
    ],
    [
        'question' => 'Do walkways need a permit in Black Diamond?',
        'answer'   => 'Most residential walkways don\'t require permits in Black Diamond, including paver paths, flagstone walks, and concrete walkways within property boundaries. Walkways in sensitive buffer areas, near stream setbacks, or part of a larger permitted project may require review. We flag permit questions before work begins.',
    ],
    [
        'question' => 'How long does walkway installation take?',
        'answer'   => 'A standard front entry walkway (3–4 feet wide, 20–40 feet long) takes 1–2 days from excavation to completion. Larger paths, complex patterns, or curved layouts take 2–3 days. Weather permitting, most residential walkway projects are complete in a single work day once material is on-site.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Walkway Installation', 'item' => $siteUrl . '/services/walkway-installation'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[14]); ?>');"
         aria-label="Walkway installation service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Walkway Installation — Safe Footing in Any Weather</h1>
    <p class="page-hero-sub">Paver, flagstone, and concrete walkways designed for Pacific Northwest conditions — clean lines, proper drainage, and traction that holds up through 55 inches of annual rainfall.</p>
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
      <li class="active" aria-current="page">Walkway Installation</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Residential Walkway Construction</span>
        <h2>A walkway that looks good and performs in the rain</h2>
        <p>In Black Diamond, a walkway gets wet nine months out of twelve. Material selection isn't just aesthetic — it's a safety decision. Smooth-finish pavers and polished stone become skating rinks when wet. Tumbled concrete pavers, rough-cleft flagstone, and broom-finished concrete all maintain traction in wet conditions. We design walkways that are safe to use in the exact conditions they'll see most often: damp, leafy, and sloped.</p>
        <p>Beyond surface texture, walkway slope management determines whether water runs off the path or pools on it. A 1–2% cross slope moves water to the edge without creating an awkward lean underfoot. Grade changes along the length require step calculations that maintain a comfortable rise-run ratio — 6 inches of rise to 12 inches of run as the minimum for comfortable outdoor steps. These details are worked out before excavation begins, not improvised during installation.</p>
        <p>Concrete pavers are our most-recommended material for front entry walkways — they're available in dozens of colors and textures, can be individually replaced if damaged, and handle Black Diamond's freeze-thaw cycles without cracking. Flagstone is excellent for garden paths and informal settings where a natural look fits better than manufactured material. Both require the same base preparation standard: proper excavation, geotextile fabric, compacted crushed rock base, and polymeric sand joints.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[15]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[15]); ?>"
                 alt="Walkway installation in Black Diamond, WA — paver walkway construction"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">IP65</span>
          Rain-Safe
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
      <span class="eyebrow">Our Walkway Standards</span>
      <h2>Details that make the difference year after year</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="footprints" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Slip Resistance First</h4>
          <p>Every material recommendation includes a wet-surface traction evaluation. We default to tumbled or textured surfaces for all residential walkways — especially front entry paths where people arrive in dress shoes carrying groceries.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="move-diagonal" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Correct Cross Slope</h4>
          <p>A 1–2% cross slope moves rain off the path surface without making the walkway feel tilted underfoot. Flat walkways pool water and accelerate moss growth; over-sloped walkways are uncomfortable to walk and dangerous for visitors.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="frame" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Edge Restraints at All Perimeters</h4>
          <p>Plastic or aluminum edge restraints are spiked into the base along every edge of paver and flagstone walkways. Without them, pavers migrate outward under foot traffic within 2–3 years — especially in soft soil areas.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="stairs" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Properly Proportioned Steps</h4>
          <p>Any grade change along a walkway is handled with steps built to comfortable outdoor proportions. We calculate rise and run before construction begins so steps don't end up too steep, too shallow, or uneven in height from step to step.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get walkway estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Walkway Installation Estimate</h2>
      <p>Front entry path, garden walk, or side-yard connection — walk the route with us and we'll give you material options, step count, and complete pricing with no obligation.</p>
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
      <h2>How we install walkways in Black Diamond</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Layout &amp; Material Selection</h4>
          <p>Path route is staked, width confirmed, and any grade changes identified. Material options are presented with pricing comparison. Step locations and dimensions are calculated if grade changes exist.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Excavation &amp; Base Construction</h4>
          <p>Existing lawn or ground cover is removed, area excavated to 6–8 inches. Geotextile fabric is installed, followed by compacted crushed rock base. Cross slope is established in the base before the setting bed goes down.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Paver or Stone Installation</h4>
          <p>Material is set from a fixed starting point working outward. Edge cuts are made with a masonry saw. Step bases and risers are constructed concurrently at grade changes. Edge restraints are spiked in at all perimeters.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Joint Sand &amp; Final Inspection</h4>
          <p>Polymeric sand is swept into paver joints and activated. Flagstone joints are filled with crushed granite or polymeric sand. Final level check, surface sweep, and walkthrough with you confirm coverage and finish quality.</p>
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
      <h2>Walkway Installation FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your walkway project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>A path that's safe, clean, and lasts through every wet season</h2>
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
