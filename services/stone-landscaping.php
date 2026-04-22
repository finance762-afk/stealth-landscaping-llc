<?php
/**
 * services/stone-landscaping.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[17];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[16]; // Stone Landscaping

$pageTitle       = 'Stone Landscaping Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Stone landscaping in Black Diamond, WA — river rock, boulders, decorative gravel & dry creek beds. Functional drainage design meets natural aesthetics. Free estimates.';
$canonicalUrl    = $siteUrl . '/services/stone-landscaping';
$ogImage         = $clientImages[17];

$faqs = [
    [
        'question' => 'How much does stone landscaping cost in Black Diamond, WA?',
        'answer'   => 'Stone landscaping costs depend heavily on the stone type and project scope. Decorative gravel beds run $4–$8 per square foot installed. River rock coverage is $6–$12 per square foot. Boulder placement ranges from $150–$600 per boulder depending on size and access difficulty. Dry creek bed systems run $20–$40 per linear foot including excavation and weed barrier. We provide exact pricing after a site assessment.',
    ],
    [
        'question' => 'Is stone landscaping lower maintenance than mulch in Western Washington?',
        'answer'   => 'For weed suppression, stone is generally more durable than mulch in Black Diamond\'s high-rainfall climate — it doesn\'t decompose or need annual refresh. However, stone beds still require weed barrier maintenance underneath, and leaves and organic debris collect in stone over time. The maintenance difference is real but smaller than most homeowners expect. Stone excels in high-foot-traffic areas and areas where mulch tends to wash.',
    ],
    [
        'question' => 'What is a dry creek bed and do I need one?',
        'answer'   => 'A dry creek bed is a decorative channel filled with river rock that functions as a drainage swale during rain events. In Black Diamond\'s high-rainfall conditions, many properties have low spots or areas that collect and channel water — a dry creek bed manages that water flow while creating a natural-looking landscape feature. If you have a water management problem in a planted area, a dry creek bed is often the most attractive solution.',
    ],
    [
        'question' => 'Where does the stone material come from for landscaping projects?',
        'answer'   => 'We source river rock, crushed granite, and decorative gravel from Pacific Northwest quarries and landscape suppliers — typically within 100 miles of Black Diamond. Basalt boulders come from Eastern Washington quarries. Using regionally sourced stone keeps costs down and ensures the material looks natural in a Pacific Northwest setting.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Stone Landscaping', 'item' => $siteUrl . '/services/stone-landscaping'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[17]); ?>');"
         aria-label="Stone landscaping service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Stone Landscaping That Works as Hard as It Looks</h1>
    <p class="page-hero-sub">River rock, boulders, decorative gravel, and dry creek beds designed for Western Washington's drainage reality — natural aesthetics and functional water management in one.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li><a href="/services">Services</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Stone Landscaping</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Stone &amp; Rock Landscape Installation</span>
        <h2>Stone that solves water problems and looks intentional doing it</h2>
        <p>Stone landscaping in Black Diamond serves a dual purpose that doesn't exist in drier climates: aesthetic and drainage function simultaneously. River rock channels, dry creek beds, and boulder placements aren't just design elements — they're managing the 55 inches of annual rainfall that Black Diamond receives in ways that protect foundations, prevent erosion, and eliminate the standing water that plant roots hate.</p>
        <p>A dry creek bed, done correctly, is one of the most naturalistic drainage solutions available. It channels stormwater during heavy rain events through a route that looks like a natural seasonal stream — because that's essentially what it's mimicking. Sized and graded correctly, a dry creek bed handles significant flow without erosion. Sized incorrectly, it backs up and floods the surrounding plant material. We calculate flow volume and grade before any stone is moved.</p>
        <p>Boulder placement is both simpler and more technical than it looks. Individual boulders need to be set so they look like they belong — tilted and partially buried, not plunked on the surface. Large boulders require equipment and an understanding of leverage and site access. Decorative gravel and river rock beds require proper weed barrier installation underneath — the quality of that barrier determines whether you're pulling weeds from gravel annually or never.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[18]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[18]); ?>"
                 alt="Stone landscaping in Black Diamond, WA — river rock dry creek bed installation"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">55"</span>
          Annual Rain
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
      <span class="eyebrow">Our Approach to Stone</span>
      <h2>Functional design, natural results</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="droplets" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Drainage-Functional Design</h4>
          <p>Every stone installation is designed with water flow in mind. Dry creek beds are graded to move water, not hold it. Rock beds are sloped slightly to drain rather than pool. Stone that looks natural also has to function correctly when 2 inches of rain falls in 24 hours.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="layers" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Commercial-Grade Weed Barrier</h4>
          <p>We install woven geotextile fabric — not the cheap landscape fabric from hardware stores that degrades in two seasons. Commercial-grade woven barrier blocks weed seed germination while allowing water drainage, and lasts 15+ years under stone applications.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="mountain" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Boulder Placement Equipment</h4>
          <p>Large boulders require machinery to move and place correctly. We use equipment appropriate to the boulder size and site access conditions. Boulders are set partially buried so they look native to the site, not decorative imports dropped on the surface.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="map-pin" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Locally Sourced Pacific NW Stone</html>
          <p>We source river rock, basalt, and decorative gravel from Pacific Northwest suppliers — material that looks native to Black Diamond's environment. Regional stone has the right color palette, texture, and scale for Western Washington landscapes.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get stone landscaping estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Stone Landscaping Estimate</h2>
      <p>Drainage problem, eroding slope, or a bed that needs low-maintenance coverage — walk the area with us and we'll design a stone solution and give you complete pricing.</p>
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
      <h2>How we install stone landscaping in Black Diamond</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Design &amp; Drainage Assessment</h4>
          <p>We assess water flow patterns during rain events, identify problem areas, and design the stone installation to manage water correctly. Stone type, size, and coverage depth are selected. For dry creek beds, flow volume and grade are calculated.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Bed Preparation</h4>
          <p>Existing vegetation is removed, any necessary grading is done to establish correct drainage slopes. Edges are defined cleanly against lawn, hardscape, and planting beds. Edges are established before barrier and stone go down.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Weed Barrier Installation</h4>
          <p>Commercial-grade woven geotextile fabric is installed with 6-inch overlaps at seams. Barrier is pinned at edges and at regular intervals across the field. No gaps, no folds that create pooling points beneath the stone layer.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Stone Placement &amp; Finishing</h4>
          <p>Stone is spread to the correct depth (3–4 inches for gravel and river rock coverage; larger boulders set with equipment). Edges are defined cleanly. The finished surface is inspected for coverage uniformity and proper grade.</p>
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
      <h2>Stone Landscaping FAQ — Black Diamond, WA</h2>
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

<section class="closing-cta" aria-label="Start your stone landscaping project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Stone that manages water and looks like it belongs there</h2>
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
