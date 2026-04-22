<?php
/**
 * service-area.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'service-area';
$heroImage      = $clientImages[23];
$useVanillaTilt = false;
$useSwiper      = false;

$pageTitle       = 'Landscaping Service Area | Black Diamond WA & King County';
$pageDescription = 'Stealth Landscaping LLC serves Black Diamond, Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton & Bonney Lake, WA. Licensed & insured landscaping near you.';
$canonicalUrl    = $siteUrl . '/service-area';
$ogImage         = $clientImages[23];

$areaContent = [
    'black-diamond' => [
        'blurb' => 'Black Diamond is our home base and primary service area. We know the local soil conditions — heavy clay in most residential areas, varying drainage patterns across the community\'s sloped terrain, and the specific freeze-thaw behavior that affects hardscape installations near the Green River. Most of our crews are in Black Diamond multiple days each week.',
        'note'  => 'Primary Service Area — Response time: same or next day',
    ],
    'maple-valley' => [
        'blurb' => 'Maple Valley shares much of Black Diamond\'s soil profile and drainage challenges — predominantly clay soils with high rainfall and terrain that creates drainage complexity in many residential lots. We serve all of Maple Valley including the newer subdivisions near SR-516 and the established neighborhoods closer to Lake Wilderness.',
        'note'  => 'Approx. 10 min from Black Diamond',
    ],
    'covington' => [
        'blurb' => 'Covington\'s combination of newer construction and established residential properties creates a consistent demand for both initial landscape installation and hardscape work. We serve all of Covington including areas along SE 256th Street and the neighborhoods closer to the Kent-Kangley corridor.',
        'note'  => 'Approx. 15 min from Black Diamond',
    ],
    'auburn' => [
        'blurb' => 'Auburn\'s mix of flat valley areas near the White River and hillside residential neighborhoods creates varying soil and drainage conditions across the city. We serve residential properties throughout Auburn including the Lea Hill and West Hill areas that have similar terrain to Black Diamond.',
        'note'  => 'Approx. 20 min from Black Diamond',
    ],
    'kent' => [
        'blurb' => 'Kent\'s residential areas — particularly East Hill and the Meridian area neighborhoods — are regular service locations for us. Landscape installation, paver driveways and patios, and retaining walls are common project types in Kent\'s hillside residential developments.',
        'note'  => 'Approx. 20 min from Black Diamond',
    ],
    'enumclaw' => [
        'blurb' => 'Enumclaw sits at a higher elevation than most of our service area, with views of Mount Rainier and slightly different growing conditions — including a harder frost window than Black Diamond. We factor these differences into plant selection and hardscape material recommendations for Enumclaw properties.',
        'note'  => 'Approx. 20 min from Black Diamond',
    ],
    'renton' => [
        'blurb' => 'Renton\'s residential areas range from flat neighborhoods near the Cedar River to steep hillside properties in the highlands. Retaining walls and drainage-integrated hardscape are particularly common project types in Renton\'s hillier residential areas. We serve residential properties throughout Renton.',
        'note'  => 'Approx. 25 min from Black Diamond',
    ],
    'bonney-lake' => [
        'blurb' => 'Bonney Lake sits in Pierce County on a plateau above Sumner — with a mix of plateau-top neighborhoods and steeply sloped lots dropping toward Tapps Island and the lake. We serve Bonney Lake with the same full range of landscaping and hardscape services available to our King County clients.',
        'note'  => 'Pierce County — Approx. 25 min from Black Diamond',
    ],
];

$schemaMarkup = json_encode([
    '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Service Area', 'item' => $siteUrl . '/service-area'],
    ],
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[23]); ?>');"
         aria-label="Stealth Landscaping service area">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">King County &amp; Pierce County, WA</span>
    <h1>Landscaping Near You — Black Diamond and Surrounding Communities</h1>
    <p class="page-hero-sub">Stealth Landscaping LLC serves 8 communities within 30 miles of Black Diamond. Find your city below for local service information and contact us for a free estimate.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Service Area</li>
    </ol>
  </div>
</nav>

<!-- Map + Quick Overview -->
<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Our Service Territory</span>
        <h2>Landscaping and hardscape near me — we're probably nearby</h2>
        <p>Stealth Landscaping LLC is based in Black Diamond, WA and serves communities within approximately 30 miles. Our service area covers most of southeastern King County and extends into northern Pierce County. If you're searching for a landscaping contractor near me in this region, we're likely serving your neighborhood already.</p>
        <p>All communities in our service area receive the same scope of services — from hydro seeding and mulch installation to full paver patio and retaining wall construction. Response times and scheduling vary by distance from Black Diamond, but no service is limited by geography within our coverage area.</p>
        <p>Our crews are familiar with the specific soil conditions, drainage patterns, and plant performance characteristics across all 8 communities we serve. Black Diamond's clay soils extend through most of our coverage area, which shapes our base preparation standards for every hardscape project we build.</p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div style="border-radius:var(--radius-lg); overflow:hidden; height:400px;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96000!2d-122.1!3d47.35!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDMwJzAwLjAiTiAxMjLCsDAwJzAwLjAiVw!5e0!3m2!1sen!2sus!4v1"
            width="100%" height="400"
            style="border:0; display:block;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Stealth Landscaping LLC service area map — Black Diamond, Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, Bonney Lake">
          </iframe>
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

<!-- Individual Area Content -->
<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Communities We Serve</span>
      <h2>Local information for each service area</h2>
    </div>

    <div class="area-info-grid" data-animate="fade-up">
      <?php foreach ($serviceAreas as $area):
        $content = $areaContent[$area['slug']] ?? ['blurb' => '', 'note' => ''];
        $topServices = array_slice($services, 0, 6);
        $remaining   = count($services) - count($topServices);
      ?>
      <?php if ($area['primary']): ?>
      <div class="area-info-card area-info-card--primary">
        <div class="area-info-left">
          <div class="area-info-header">
            <h3>
              <i data-lucide="map-pin" aria-hidden="true" width="18" height="18" style="color:var(--color-accent);flex-shrink:0;"></i>
              <?php echo htmlspecialchars($area['city']); ?>, <?php echo htmlspecialchars($area['state']); ?>
            </h3>
            <span class="area-distance-badge"><?php echo htmlspecialchars($content['note']); ?></span>
          </div>
          <p class="area-blurb"><?php echo htmlspecialchars($content['blurb']); ?></p>
        </div>
        <div class="area-info-right">
          <div class="area-service-tags">
            <?php foreach ($topServices as $svc): ?>
            <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>" class="area-tag">
              <?php echo htmlspecialchars($svc['name']); ?>
            </a>
            <?php endforeach; ?>
            <?php if ($remaining > 0): ?>
            <a href="/services" class="area-tag area-tag--more">+ <?php echo $remaining; ?> more</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
      <?php else: ?>
      <div class="area-info-card">
        <div class="area-info-header">
          <h3>
            <i data-lucide="map-pin" aria-hidden="true" width="18" height="18" style="color:var(--color-accent);flex-shrink:0;"></i>
            <?php echo htmlspecialchars($area['city']); ?>, <?php echo htmlspecialchars($area['state']); ?>
          </h3>
          <span class="area-distance-badge"><?php echo htmlspecialchars($content['note']); ?></span>
        </div>
        <p class="area-blurb"><?php echo htmlspecialchars($content['blurb']); ?></p>
        <div class="area-service-tags">
          <?php foreach ($topServices as $svc): ?>
          <a href="/services/<?php echo htmlspecialchars($svc['slug']); ?>" class="area-tag">
            <?php echo htmlspecialchars($svc['name']); ?>
          </a>
          <?php endforeach; ?>
          <?php if ($remaining > 0): ?>
          <a href="/services" class="area-tag area-tag--more">+ <?php echo $remaining; ?> more</a>
          <?php endif; ?>
        </div>
      </div>
      <?php endif; ?>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Mid-page CTA -->
<section class="cta-banner" aria-label="Get a landscaping estimate near you">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Find a Landscaping Contractor Near You in King County</h2>
      <p>Searching for landscaping near me in Black Diamond, Maple Valley, Covington, or any of our service communities? We're likely working in your area this week. Contact us for a free site visit and estimate.</p>
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

<!-- Services in the area -->
<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Full Service Scope</span>
      <h2>All services available across our entire service area</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="leaf" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Soft Landscaping</h4>
          <p>Lawn installation (sod and hydro seeding), planting, mulching, flower beds, shrub trimming, and tree planting — all available across every community in our service area.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="layers" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Hardscape Construction</h4>
          <p>Paver patios, walkways, driveways, retaining walls, and hardscape design — properly engineered for the clay soils and rainfall conditions shared across King County.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="flame" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Outdoor Living Features</h4>
          <p>Outdoor living spaces, fire pit installation, landscape lighting, and stone landscaping — complete outdoor living design and construction available everywhere we serve.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="award" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Licensed &amp; Insured in Washington</h4>
          <p>Washington State licensed contractor with general liability insurance and workers' compensation — valid and verifiable across all of our service communities in King and Pierce Counties.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="closing-cta" aria-label="Get started in your area">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Landscaping near you — across 8 communities in King County</h2>
      <p>Black Diamond, Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, and Bonney Lake. Free estimates, licensed and insured since 2021.</p>
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
