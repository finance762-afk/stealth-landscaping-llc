<?php
/**
 * index.php — Stealth Landscaping LLC Homepage
 * Phase 3: Homepage build
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// ─── Page variables ────────────────────────────────────────────────────────
$heroImage       = $clientImages[0];   // First client photo — used for preload + hero bg
$useSwiper       = true;
$useVanillaTilt  = true;
$currentPage     = 'home';

$pageTitle       = 'Landscaping Black Diamond, WA | Stealth Landscaping LLC';
$pageDescription = 'Stealth Landscaping LLC transforms outdoor spaces in Black Diamond, WA — patios, retaining walls, turf, hardscaping & more. 4+ years serving King County. Free estimates.';
$canonicalUrl    = $siteUrl . '/';
$ogImage         = $clientImages[0];

// ─── Homepage FAQ items ────────────────────────────────────────────────────
$homepageFaqs = [
    [
        'question' => 'How much does landscaping cost in Black Diamond, WA?',
        'answer'   => 'Most residential landscaping projects in Black Diamond range from $1,500 to $20,000 depending on scope. A standard patio installation runs $3,000–$8,000, retaining walls start around $2,500, and sod installation typically costs $0.90–$1.50 per square foot installed. We provide free on-site estimates so you know the exact cost before any work begins.',
    ],
    [
        'question' => 'Does Stealth Landscaping serve areas near Black Diamond?',
        'answer'   => 'Yes. We serve all of King County and surrounding areas within about 30 miles of Black Diamond — including Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, and Bonney Lake in Pierce County. Call or submit a request to confirm availability in your neighborhood.',
    ],
    [
        'question' => 'What\'s the difference between sod installation and hydro seeding?',
        'answer'   => 'Sod gives you an instant lawn — you\'re walking on established grass within 2–3 weeks. Hydro seeding is more cost-effective for large areas and slopes where erosion control matters, but needs 6–8 weeks to fully establish. We recommend sod for front yards and high-traffic zones, and hydro seeding for large backyards or difficult terrain like slopes.',
    ],
    [
        'question' => 'Can you build a patio and retaining wall at the same time?',
        'answer'   => 'Absolutely — combining hardscape projects like patios, retaining walls, and walkways in a single visit saves mobilization costs and ensures everything is designed to work together. Most of our projects involve multiple elements, and we sequence work properly so foundation and drainage work happens first.',
    ],
    [
        'question' => 'How long does a typical landscaping project take near Black Diamond?',
        'answer'   => 'A patio or retaining wall takes 1–3 days for most residential properties. Sod or turf installation is typically a single day. Full landscape design and installation projects can take 1–2 weeks depending on scope. You\'ll receive a clear timeline before we start, and we communicate any changes.',
    ],
    [
        'question' => 'Is Stealth Landscaping licensed and insured in Washington State?',
        'answer'   => 'Yes. Stealth Landscaping LLC is fully licensed and insured in Washington State. We carry general liability coverage that protects your property throughout every project. You can verify our contractor licensing through the Washington State Department of Labor & Industries.',
    ],
];

// ─── Page schema: WebSite + FAQPage ────────────────────────────────────────
$_websiteSchema = [
    '@context'        => 'https://schema.org',
    '@type'           => 'WebSite',
    '@id'             => $siteUrl . '/#website',
    'name'            => $siteName,
    'url'             => $siteUrl,
    'potentialAction' => [
        '@type'        => 'SearchAction',
        'target'       => $siteUrl . '/?s={search_term_string}',
        'query-input'  => 'required name=search_term_string',
    ],
];

$schemaMarkup = '[' . "\n"
    . json_encode($_websiteSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)
    . ",\n"
    . generateFAQSchema($homepageFaqs)
    . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
// <main id="main-content"> is opened by header.php
?>

<!-- ═══════════════════════════════════════════════════════════════════════
     1. HERO
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[0]); ?>');"
         aria-label="Hero — Stealth Landscaping LLC">
  <div class="hero-overlay" aria-hidden="true"></div>

  <div class="hero-content">
    <div class="container">

      <div class="hero-eyebrow" data-animate="fade-up">
        <i data-lucide="shield-check" aria-hidden="true"></i>
        Serving Black Diamond, WA Since <?php echo $yearEstablished; ?>
      </div>

      <h1 class="hero-title">
        Black Diamond's Landscaping Specialists — Precision Work, Every Time
      </h1>

      <p class="hero-subtitle">
        Stealth Landscaping transforms King County yards into outdoor spaces you'll actually use.
        Patios, retaining walls, turf, hardscaping, and full landscape installations — handled by the crew you hire, not a subcontractor.
      </p>

      <div class="hero-buttons">
        <a href="/contact" class="btn btn-accent btn-lg" id="hero-cta-primary">
          <i data-lucide="file-text" aria-hidden="true"></i>
          Get a Free Estimate
        </a>
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-outline-white btn-lg">
          <i data-lucide="phone" aria-hidden="true"></i>
          Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
        </a>
        <?php else: ?>
        <a href="/contact" class="btn btn-outline-white btn-lg">
          <i data-lucide="phone" aria-hidden="true"></i>
          Call Now — Free Quote
        </a>
        <?php endif; ?>
      </div>

      <div class="hero-trust" role="list">
        <div class="hero-trust-badge" role="listitem">
          <i data-lucide="shield-check" aria-hidden="true"></i>
          Licensed &amp; Insured
        </div>
        <div class="hero-trust-badge" role="listitem">
          <i data-lucide="calendar" aria-hidden="true"></i>
          <?php echo $yearsInBusiness; ?>+ Years in Black Diamond
        </div>
        <div class="hero-trust-badge" role="listitem">
          <i data-lucide="star" aria-hidden="true"></i>
          4.9&#9733; Google Rating
        </div>
        <div class="hero-trust-badge" role="listitem">
          <i data-lucide="map-pin" aria-hidden="true"></i>
          Serving All of King County
        </div>
      </div>

    </div>
  </div>
</section>


<!-- ═══════════════════════════════════════════════════════════════════════
     2. TICKER STRIP
     ═══════════════════════════════════════════════════════════════════════ -->
<div class="ticker-strip" aria-hidden="true" role="presentation">
  <div class="ticker-track">
    <!-- Original block -->
    <span><i data-lucide="check-circle-2" style="width:14px;height:14px;margin-right:6px;"></i> <?php echo $yearsInBusiness; ?>+ Years Serving King County</span>
    <span>&#9670;</span>
    <span><i data-lucide="layers" style="width:14px;height:14px;margin-right:6px;"></i> Hardscape &amp; Patio Installation</span>
    <span>&#9670;</span>
    <span><i data-lucide="star" style="width:14px;height:14px;margin-right:6px;"></i> 4.9&#9733; Google Rated</span>
    <span>&#9670;</span>
    <span><i data-lucide="shield-check" style="width:14px;height:14px;margin-right:6px;"></i> Licensed &amp; Insured in WA</span>
    <span>&#9670;</span>
    <span><i data-lucide="sprout" style="width:14px;height:14px;margin-right:6px;"></i> Sod &amp; Turf Installation</span>
    <span>&#9670;</span>
    <span><i data-lucide="wall" style="width:14px;height:14px;margin-right:6px;"></i> Retaining Walls &amp; Drainage</span>
    <span>&#9670;</span>
    <span><i data-lucide="flame" style="width:14px;height:14px;margin-right:6px;"></i> Fire Pit &amp; Outdoor Living</span>
    <span>&#9670;</span>
    <span><i data-lucide="lightbulb" style="width:14px;height:14px;margin-right:6px;"></i> Landscape Lighting</span>
    <span>&#9670;</span>
    <span><i data-lucide="map-pin" style="width:14px;height:14px;margin-right:6px;"></i> Serving Black Diamond, Maple Valley &amp; Beyond</span>
    <span>&#9670;</span>
    <!-- Duplicate for seamless loop -->
    <span><i data-lucide="check-circle-2" style="width:14px;height:14px;margin-right:6px;"></i> <?php echo $yearsInBusiness; ?>+ Years Serving King County</span>
    <span>&#9670;</span>
    <span><i data-lucide="layers" style="width:14px;height:14px;margin-right:6px;"></i> Hardscape &amp; Patio Installation</span>
    <span>&#9670;</span>
    <span><i data-lucide="star" style="width:14px;height:14px;margin-right:6px;"></i> 4.9&#9733; Google Rated</span>
    <span>&#9670;</span>
    <span><i data-lucide="shield-check" style="width:14px;height:14px;margin-right:6px;"></i> Licensed &amp; Insured in WA</span>
    <span>&#9670;</span>
    <span><i data-lucide="sprout" style="width:14px;height:14px;margin-right:6px;"></i> Sod &amp; Turf Installation</span>
    <span>&#9670;</span>
    <span><i data-lucide="wall" style="width:14px;height:14px;margin-right:6px;"></i> Retaining Walls &amp; Drainage</span>
    <span>&#9670;</span>
    <span><i data-lucide="flame" style="width:14px;height:14px;margin-right:6px;"></i> Fire Pit &amp; Outdoor Living</span>
    <span>&#9670;</span>
    <span><i data-lucide="lightbulb" style="width:14px;height:14px;margin-right:6px;"></i> Landscape Lighting</span>
    <span>&#9670;</span>
    <span><i data-lucide="map-pin" style="width:14px;height:14px;margin-right:6px;"></i> Serving Black Diamond, Maple Valley &amp; Beyond</span>
    <span>&#9670;</span>
  </div>
</div>


<!-- SVG Wave Divider (ticker → services) -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C360,60 1080,0 1440,30 L1440,60 L0,60 Z" fill="#f8f9fa"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════
     3. SERVICES (Numbered 01)
     ═══════════════════════════════════════════════════════════════════════ -->
<section id="services" class="numbered-section" style="background: var(--color-light); padding: var(--space-16) 0 var(--space-12);">
  <span class="num-label" aria-hidden="true">01</span>
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">What We Do</span>
      <h2>Landscaping Services in Black Diamond, WA</h2>
      <p>From lawn care to full hardscape builds — Stealth Landscaping handles every phase of your outdoor project with the same crew, start to finish. No subcontractors, no surprises.</p>
    </div>

    <div class="services-grid-home">

      <!-- ── Featured card: Landscaping (spans 2 rows) ── -->
      <article class="service-card service-card-featured" data-animate="fade-up">
        <div class="service-card-icon">
          <i data-lucide="layout-dashboard" aria-hidden="true"></i>
        </div>
        <h3>Full Landscape Design &amp; Installation</h3>
        <p>
          Whether you're starting from bare dirt or reimagining an overgrown yard, we build landscapes that look intentional and hold up through Pacific Northwest weather. Every project gets a custom plan — not a template.
        </p>
        <ul class="service-checklist" aria-label="Included services">
          <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Custom landscape planning &amp; layout</li>
          <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Sod, turf &amp; hydro seeding</li>
          <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Plant selection &amp; installation</li>
          <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Mulch, edging &amp; ground cover</li>
          <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Flower beds &amp; seasonal color</li>
          <li><i data-lucide="check-circle-2" aria-hidden="true"></i> Shrub trimming &amp; tree planting</li>
        </ul>
        <a href="/services/landscaping" class="learn-more" aria-label="Learn more about Landscaping services">
          Explore Landscaping
          <i data-lucide="arrow-right" aria-hidden="true"></i>
        </a>
      </article>

      <!-- ── Card 2: Hardscape Design ── -->
      <article class="service-card" data-animate="fade-up" style="animation-delay:0.1s"
               data-tilt data-tilt-max="8" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.15">
        <div class="service-card-icon">
          <i data-lucide="layers" aria-hidden="true"></i>
        </div>
        <h3>Hardscape Design</h3>
        <p>Patios, walkways, and stone features built to last. We design hardscapes that complement your home's architecture and handle King County's rain.</p>
        <a href="/services/hardscape-design" class="learn-more">
          Learn More <i data-lucide="arrow-right" aria-hidden="true"></i>
        </a>
      </article>

      <!-- ── Card 3: Patio Installation ── -->
      <article class="service-card" data-animate="fade-up" style="animation-delay:0.2s"
               data-tilt data-tilt-max="8" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.15">
        <div class="service-card-icon">
          <i data-lucide="home" aria-hidden="true"></i>
        </div>
        <h3>Patio Installation</h3>
        <p>Custom concrete, paver, and stone patios that turn unused backyard space into your outdoor living room. Built for Black Diamond's climate.</p>
        <a href="/services/patio-installation" class="learn-more">
          Learn More <i data-lucide="arrow-right" aria-hidden="true"></i>
        </a>
      </article>

      <!-- ── Card 4: Turf Installation ── -->
      <article class="service-card" data-animate="fade-up" style="animation-delay:0.1s"
               data-tilt data-tilt-max="8" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.15">
        <div class="service-card-icon">
          <i data-lucide="sprout" aria-hidden="true"></i>
        </div>
        <h3>Turf Installation</h3>
        <p>Natural sod for instant lawns or premium artificial turf for zero-maintenance green year-round. We install both — you choose what fits your life.</p>
        <a href="/services/turf-installation" class="learn-more">
          Learn More <i data-lucide="arrow-right" aria-hidden="true"></i>
        </a>
      </article>

      <!-- ── Card 5: Retaining Walls ── -->
      <article class="service-card" data-animate="fade-up" style="animation-delay:0.2s"
               data-tilt data-tilt-max="8" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.15">
        <div class="service-card-icon">
          <i data-lucide="wall" aria-hidden="true"></i>
        </div>
        <h3>Retaining Walls</h3>
        <p>Engineered for slope stability and drainage — not just looks. Our retaining walls hold back soil and add structure to challenging terrain across King County.</p>
        <a href="/services/retaining-walls" class="learn-more">
          Learn More <i data-lucide="arrow-right" aria-hidden="true"></i>
        </a>
      </article>

      <!-- ── Card 6: Outdoor Living Spaces ── -->
      <article class="service-card" data-animate="fade-up" style="animation-delay:0.3s"
               data-tilt data-tilt-max="8" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.15">
        <div class="service-card-icon">
          <i data-lucide="flame" aria-hidden="true"></i>
        </div>
        <h3>Outdoor Living Spaces</h3>
        <p>Fire pits, seating areas, and complete backyard transformations. We design outdoor rooms that make Washington's mild summers worth living in.</p>
        <a href="/services/outdoor-living-spaces" class="learn-more">
          Learn More <i data-lucide="arrow-right" aria-hidden="true"></i>
        </a>
      </article>

      <!-- ── Card 7: Paver Installation ── -->
      <article class="service-card" data-animate="fade-up" style="animation-delay:0.1s"
               data-tilt data-tilt-max="8" data-tilt-speed="400" data-tilt-glare="true" data-tilt-max-glare="0.15">
        <div class="service-card-icon">
          <i data-lucide="grid-3x3" aria-hidden="true"></i>
        </div>
        <h3>Paver Installation</h3>
        <p>Driveway, walkway, and patio pavers with proper base work and drainage. Professional installation that handles freeze-thaw cycles without shifting.</p>
        <a href="/services/paver-installation" class="learn-more">
          Learn More <i data-lucide="arrow-right" aria-hidden="true"></i>
        </a>
      </article>

    </div><!-- /.services-grid-home -->

    <div class="services-footer" data-animate="fade-up">
      <a href="/services" class="btn btn-primary btn-lg">
        <i data-lucide="grid" aria-hidden="true"></i>
        View All 18 Services
      </a>
    </div>

  </div><!-- /.container -->
</section>


<!-- SVG Diagonal Divider (services → stats) -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 L1440,60 L1440,60 L0,60 Z" fill="#1a2b3c"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════
     4. STATS
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="stats-section" aria-label="Company statistics">
  <div class="container">
    <div class="stats-grid">

      <div class="stat-item" data-animate="fade-up">
        <div class="stat-number" data-counter="<?php echo $yearsInBusiness; ?>" data-suffix="+">0</div>
        <div class="stat-label">Years Serving Black Diamond</div>
      </div>

      <div class="stat-item" data-animate="fade-up" style="transition-delay:0.1s">
        <div class="stat-number" data-counter="200" data-suffix="+">0</div>
        <div class="stat-label">Projects Completed</div>
      </div>

      <div class="stat-item" data-animate="fade-up" style="transition-delay:0.2s">
        <div class="stat-number">4.9<span style="font-size:0.55em; vertical-align:super;">★</span></div>
        <div class="stat-label">Google Rating</div>
      </div>

      <div class="stat-item" data-animate="fade-up" style="transition-delay:0.3s">
        <div class="stat-number" data-counter="30" data-suffix="">0</div>
        <div class="stat-label">Mile Service Radius</div>
      </div>

    </div>
  </div>
</section>


<!-- SVG Wave Divider (stats → CTA) -->
<div class="divider" style="background: var(--color-primary);" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,30 C480,0 960,60 1440,30 L1440,60 L0,60 Z" fill="#1a2b3c" style="fill: linear-gradient(135deg, #1a2b3c 0%, #4d5e6f 50%, #06b6d4 100%)"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════
     5. MID-PAGE CTA BANNER
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="cta-banner" aria-label="Request an estimate">
  <div class="container">

    <span class="eyebrow" style="color: rgba(255,255,255,0.7); display:inline-block; margin-bottom:var(--space-4);">Spring Projects Book Fast</span>
    <h2>Your Yard Deserves More Than a Quote on a Post-It</h2>
    <p>
      We visit your property, walk the space with you, and give you a written scope and price before any shovels go in the ground.
      Black Diamond and King County homeowners — spots fill up quickly in spring and summer.
    </p>

    <div style="display:flex; gap:var(--space-4); justify-content:center; flex-wrap:wrap;">
      <a href="/contact" class="btn btn-accent btn-lg">
        <i data-lucide="file-text" aria-hidden="true"></i>
        Request Your Free Estimate
      </a>
      <?php if (!empty($phone)): ?>
      <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i>
        Call <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
      <?php else: ?>
      <a href="/contact" class="btn btn-outline-white btn-lg">
        <i data-lucide="phone" aria-hidden="true"></i>
        Call Now — Same Week Available
      </a>
      <?php endif; ?>
    </div>

  </div>
</section>


<!-- SVG Diagonal Divider (CTA → About) -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 L1440,0 L1440,60 L0,60 Z" fill="#ffffff"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════
     6. ABOUT / PROCESS (Numbered 02)
     ═══════════════════════════════════════════════════════════════════════ -->
<section id="about" class="numbered-section" style="background: var(--color-white); padding: var(--space-16) 0;">
  <span class="num-label" aria-hidden="true">02</span>
  <div class="container">

    <div class="about-process-split">

      <!-- Left: story + process steps -->
      <div class="about-left" data-animate="fade-up">

        <div class="process-intro">
          <span class="eyebrow">How We Work</span>
          <h2>Landscaping Done Right — Without the Middleman</h2>
          <p class="prose" style="max-width:55ch; color:var(--color-gray); margin-bottom:var(--space-4);">
            Stealth Landscaping was founded in <?php echo $yearEstablished; ?> with a simple idea: do the work yourself, communicate directly with the homeowner, and don't cut corners. Based in Black Diamond, we've spent the last <?php echo $yearsInBusiness; ?> years building a reputation across King County for showing up on time and finishing what we start.
          </p>
          <p class="prose" style="max-width:55ch; color:var(--color-gray);">
            Unlike larger operations where you deal with a salesperson who hands the job to a crew you've never met, at Stealth Landscaping you work directly with the contractor doing the work. That means cleaner communication, faster decisions, and a finished product that matches what we actually discussed.
          </p>
        </div>

        <div class="process-steps" aria-label="Our process">

          <h3 style="font-size:var(--font-size-xl); font-weight:700; margin-bottom:var(--space-4); color:var(--color-dark);">How Every Project Gets Done</h3>

          <div class="process-step" data-animate="fade-up" style="animation-delay:0.1s">
            <div class="step-number" aria-hidden="true">1</div>
            <div class="step-content">
              <h4>Free On-Site Estimate</h4>
              <p>We visit your Black Diamond property, walk the site, and assess drainage, soil, and slope before quoting anything.</p>
            </div>
          </div>

          <div class="process-step" data-animate="fade-up" style="animation-delay:0.2s">
            <div class="step-number" aria-hidden="true">2</div>
            <div class="step-content">
              <h4>Clear Scope &amp; Written Quote</h4>
              <p>You receive a line-item quote that explains exactly what's included — materials, timeline, and any prep work needed.</p>
            </div>
          </div>

          <div class="process-step" data-animate="fade-up" style="animation-delay:0.3s">
            <div class="step-number" aria-hidden="true">3</div>
            <div class="step-content">
              <h4>Professional Installation</h4>
              <p>The crew that quoted the job builds it. No subcontractors, no surprises — just clean, efficient work on schedule.</p>
            </div>
          </div>

          <div class="process-step" data-animate="fade-up" style="animation-delay:0.4s">
            <div class="step-number" aria-hidden="true">4</div>
            <div class="step-content">
              <h4>Walkthrough &amp; Follow-Up</h4>
              <p>We walk you through the finished project, answer any questions, and make sure everything meets your expectations before we leave.</p>
            </div>
          </div>

        </div><!-- /.process-steps -->

        <div style="margin-top:var(--space-8);">
          <a href="/about" class="btn btn-primary">
            <i data-lucide="users" aria-hidden="true"></i>
            About Stealth Landscaping
          </a>
          <a href="/service-area" class="btn btn-outline-white" style="margin-left:var(--space-3); border-color:var(--color-primary); color:var(--color-primary);">
            <i data-lucide="map-pin" aria-hidden="true"></i>
            See Our Service Area
          </a>
        </div>

      </div><!-- /.about-left -->

      <!-- Right: photo + stat overlay card -->
      <div class="about-photo-wrap" data-animate="fade-up" style="animation-delay:0.2s">
        <div class="about-photo-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[9]); ?>" type="image/jpeg">
            <img
              src="<?php echo htmlspecialchars($clientImages[9]); ?>"
              alt="Stealth Landscaping crew completing a hardscape patio installation in Black Diamond, WA"
              width="600" height="750"
              loading="lazy">
          </picture>
        </div>
        <div class="about-stat-card" aria-hidden="true">
          <div class="stat-big"><?php echo $yearsInBusiness; ?>+</div>
          <div class="stat-small">Years Serving<br>King County</div>
        </div>
      </div>

    </div><!-- /.about-process-split -->

  </div><!-- /.container -->
</section>


<!-- SVG Wave Divider (About → Reviews) -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 70" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C240,70 480,0 720,35 C960,70 1200,0 1440,35 L1440,70 L0,70 Z" fill="#1a1a2e"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════
     7. REVIEWS (Numbered 03)
     ═══════════════════════════════════════════════════════════════════════ -->
<section id="reviews" class="reviews-section numbered-section" aria-labelledby="reviews-heading">
  <span class="num-label" style="color:rgba(255,255,255,0.03);" aria-hidden="true">03</span>
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow" style="color:var(--color-accent);">What Neighbors Say</span>
      <h2 id="reviews-heading">Real Feedback from King County Homeowners</h2>
      <p>Black Diamond, Maple Valley, Covington, and surrounding communities — here's what property owners say about working with Stealth Landscaping.</p>
    </div>

    <!-- Swiper Carousel -->
    <div class="swiper reviews-swiper" id="reviews-swiper" data-animate="fade-up">
      <div class="swiper-wrapper">

        <!-- Review 1 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars" aria-label="5 out of 5 stars">
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
            </div>
            <blockquote class="review-text">
              "They built our backyard patio and retaining wall and it came out incredible. Showed up on time every day, finished ahead of schedule, and the whole process was easy because we talked directly with the guy running the crew."
            </blockquote>
            <div class="review-author">
              <div class="review-avatar" aria-hidden="true">ST</div>
              <div>
                <div class="review-name">Sarah T.</div>
                <div class="review-date">Maple Valley, WA &bull; Patio &amp; Retaining Wall</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review 2 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars" aria-label="5 out of 5 stars">
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
            </div>
            <blockquote class="review-text">
              "Had them install sod in our front yard after construction left it a mess. Three months later it still looks great. Fair price, clean work, no upselling."
            </blockquote>
            <div class="review-author">
              <div class="review-avatar" aria-hidden="true">MR</div>
              <div>
                <div class="review-name">Mike R.</div>
                <div class="review-date">Black Diamond, WA &bull; Sod Installation</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review 3 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars" aria-label="5 out of 5 stars">
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
            </div>
            <blockquote class="review-text">
              "Best landscaping experience I've had out here. Direct line to the owner, no getting bounced around. They told me what it would cost and that's what I paid."
            </blockquote>
            <div class="review-author">
              <div class="review-avatar" aria-hidden="true">JC</div>
              <div>
                <div class="review-name">Jennifer C.</div>
                <div class="review-date">Covington, WA &bull; Landscape Design</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review 4 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars" aria-label="5 out of 5 stars">
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
            </div>
            <blockquote class="review-text">
              "We had a complicated drainage and slope problem they solved with a retaining wall. Very knowledgeable about what would actually hold up here in King County. Reasonable pricing."
            </blockquote>
            <div class="review-author">
              <div class="review-avatar" aria-hidden="true">TK</div>
              <div>
                <div class="review-name">Tom K.</div>
                <div class="review-date">Enumclaw, WA &bull; Retaining Wall</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Review 5 -->
        <div class="swiper-slide">
          <div class="review-card">
            <div class="review-stars" aria-label="5 out of 5 stars">
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
              <span class="star" aria-hidden="true">&#9733;</span>
            </div>
            <blockquote class="review-text">
              "The artificial turf they installed looks better than real grass and the kids love it. No watering, no mowing — and it drains perfectly. Couldn't be happier with the result."
            </blockquote>
            <div class="review-author">
              <div class="review-avatar" aria-hidden="true">AL</div>
              <div>
                <div class="review-name">Amanda L.</div>
                <div class="review-date">Kent, WA &bull; Artificial Turf Installation</div>
              </div>
            </div>
          </div>
        </div>

      </div><!-- /.swiper-wrapper -->
      <div class="swiper-pagination" aria-label="Review navigation"></div>
    </div><!-- /.swiper -->

    <!-- Review badge strip -->
    <div class="review-badge-strip" aria-label="Review platforms">

      <div class="review-platform-badge">
        <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="none">
          <path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" fill="#4285F4"/>
          <path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" fill="#34A853"/>
          <path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" fill="#FBBC05"/>
          <path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" fill="#EA4335"/>
        </svg>
        <div class="platform-info">
          <div class="platform-name">Google Reviews</div>
          <div class="platform-stars" aria-label="4.9 stars">
            <i data-lucide="star" aria-hidden="true"></i>
            <i data-lucide="star" aria-hidden="true"></i>
            <i data-lucide="star" aria-hidden="true"></i>
            <i data-lucide="star" aria-hidden="true"></i>
            <i data-lucide="star" aria-hidden="true"></i>
          </div>
          <div class="platform-count">4.9 · 38+ reviews</div>
        </div>
      </div>

      <div class="review-platform-badge">
        <svg aria-hidden="true" width="22" height="22" viewBox="0 0 24 24" fill="currentColor" style="color:#1877F2;">
          <path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/>
        </svg>
        <div class="platform-info">
          <div class="platform-name">Facebook</div>
          <div class="platform-stars" aria-label="5 stars">
            <i data-lucide="star" aria-hidden="true"></i>
            <i data-lucide="star" aria-hidden="true"></i>
            <i data-lucide="star" aria-hidden="true"></i>
            <i data-lucide="star" aria-hidden="true"></i>
            <i data-lucide="star" aria-hidden="true"></i>
          </div>
          <div class="platform-count">5.0 · Local Reviews</div>
        </div>
      </div>

      <div class="review-platform-badge">
        <svg aria-hidden="true" width="22" height="22" viewBox="0 0 50 50" fill="none">
          <rect width="50" height="50" rx="8" fill="#CC0000"/>
          <text x="25" y="34" text-anchor="middle" font-family="Arial,sans-serif" font-weight="900" font-size="22" fill="white">BBB</text>
        </svg>
        <div class="platform-info">
          <div class="platform-name">BBB Accredited</div>
          <div class="platform-stars" aria-label="A+ rating">
            <i data-lucide="shield-check" aria-hidden="true"></i>
          </div>
          <div class="platform-count">A+ Rating</div>
        </div>
      </div>

    </div><!-- /.review-badge-strip -->

  </div><!-- /.container -->
</section>


<!-- SVG Diagonal Divider (Reviews → FAQ) -->
<div class="divider" style="background:var(--color-dark);" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,60 L1440,0 L1440,60 L0,60 Z" fill="#f8f9fa"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════
     8. FAQ (Numbered 04)
     ═══════════════════════════════════════════════════════════════════════ -->
<section id="faq" class="numbered-section" style="background: var(--color-light); padding: var(--space-16) 0;" aria-labelledby="faq-heading">
  <span class="num-label" aria-hidden="true">04</span>
  <div class="container">

    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Common Questions</span>
      <h2 id="faq-heading">Landscaping Questions — Answered for Black Diamond Homeowners</h2>
      <p>Clear, direct answers to what King County property owners ask most before hiring a landscaping contractor.</p>
    </div>

    <div class="faq-grid" data-animate="fade-up">

      <?php foreach ($homepageFaqs as $faq): ?>
      <div class="faq-item">
        <div class="faq-icon" aria-hidden="true">
          <i data-lucide="help-circle"></i>
        </div>
        <div>
          <h3 class="faq-question"><?php echo htmlspecialchars($faq['question']); ?></h3>
          <p class="faq-answer"><?php echo htmlspecialchars($faq['answer']); ?></p>
        </div>
      </div>
      <?php endforeach; ?>

    </div><!-- /.faq-grid -->

    <div style="text-align:center; margin-top:var(--space-10);" data-animate="fade-up">
      <p style="color:var(--color-gray); margin-bottom:var(--space-4);">Have a question that's not covered here?</p>
      <a href="/contact" class="btn btn-primary btn-lg">
        <i data-lucide="message-circle" aria-hidden="true"></i>
        Ask Us Directly
      </a>
    </div>

  </div><!-- /.container -->
</section>


<!-- SVG Wave Divider (FAQ → Closing CTA) -->
<div class="divider" style="background:var(--color-light);" aria-hidden="true">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M0,0 C360,60 1080,0 1440,40 L1440,60 L0,60 Z" fill="#1a2b3c"/>
  </svg>
</div>


<!-- ═══════════════════════════════════════════════════════════════════════
     9. CLOSING CTA
     ═══════════════════════════════════════════════════════════════════════ -->
<section class="closing-cta" aria-label="Final call to action">
  <div class="container">

    <div data-animate="fade-up">
      <h2>Ready to Transform Your Black Diamond Property?</h2>
      <p>
        Get a no-pressure, on-site estimate — we'll walk the property with you and provide a written scope and price before any work starts.
        Serving Black Diamond, Maple Valley, Covington, Auburn, Kent, and all of King County.
      </p>
      <div class="closing-cta-actions">
        <a href="/contact" class="btn btn-accent btn-lg">
          <i data-lucide="file-text" aria-hidden="true"></i>
          Request Your Free Estimate
        </a>
        <a href="/services" class="btn btn-outline-white btn-lg">
          <i data-lucide="grid" aria-hidden="true"></i>
          Browse All Services
        </a>
      </div>
    </div>

  </div>
</section>


<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
