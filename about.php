<?php
/**
 * about.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'about';
$heroImage      = $clientImages[20];
$useVanillaTilt = false;
$useSwiper      = false;

$pageTitle       = 'About Stealth Landscaping LLC | Black Diamond, WA Landscaping';
$pageDescription = 'Stealth Landscaping LLC serves Black Diamond, WA and surrounding King County. Licensed & insured landscaping, hardscape, and outdoor living specialists since 2021.';
$canonicalUrl    = $siteUrl . '/about';
$ogImage         = $clientImages[20];

$schemaMarkup = '[' . "\n"
    . json_encode([
        '@context'        => 'https://schema.org',
        '@type'           => 'Organization',
        'name'            => $siteName,
        'url'             => $siteUrl,
        'logo'            => $logoUrl,
        'foundingDate'    => (string)$yearEstablished,
        'description'     => 'Stealth Landscaping LLC is a licensed and insured landscaping and hardscape company based in Black Diamond, WA, serving King County and surrounding areas.',
        'address'         => [
            '@type'           => 'PostalAddress',
            'streetAddress'   => $address['street'],
            'addressLocality' => $address['city'],
            'addressRegion'   => $address['state'],
            'postalCode'      => $address['zip'],
            'addressCountry'  => 'US',
        ],
        'areaServed' => array_map(fn($a) => $a['city'] . ', ' . $a['state'], $serviceAreas),
        'sameAs'     => array_filter(array_values($socialLinks)),
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n"
    . json_encode([
        '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
        'itemListElement' => [
            ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl],
            ['@type' => 'ListItem', 'position' => 2, 'name' => 'About', 'item' => $siteUrl . '/about'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[20]); ?>');"
         aria-label="About Stealth Landscaping LLC">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Stealth Landscaping LLC — Built on What We Actually Deliver</h1>
    <p class="page-hero-sub">Licensed and insured landscaping and hardscape construction serving Black Diamond and King County since 2021. Every project, built to last.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">About</li>
    </ol>
  </div>
</nav>

<!-- Company Story -->
<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Our Story</span>
        <h2>Started small, stayed focused on what matters</h2>
        <p>Stealth Landscaping LLC was founded in 2021 with a straightforward premise: landscape and hardscape work in Western Washington requires a specific set of skills that most general contractors don't have — understanding of Pacific Northwest soils, drainage requirements that go far beyond what works in drier climates, and plant knowledge that factors in Zone 8b's particular conditions.</p>
        <p>We operate out of Black Diamond and focus our work on the communities we know best — Black Diamond, Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, and Bonney Lake. Staying within a defined service area means our crews are familiar with local soil conditions, typical drainage patterns, and the specific challenges that Black Diamond's clay soils and 55-inch annual rainfall create for both planted and hardscape work.</p>
        <p>Every project we take on — whether it's a paver walkway, a retaining wall, a flower bed installation, or a full outdoor living space — is approached with the same methodology: drainage first, base preparation second, and finished surface last. That sequence, done correctly, is what separates work that holds up for decades from work that requires repair in the first few years.</p>
        <p>We're a licensed and insured contractor in Washington State, and we pull the required permits for work that needs them. We don't cut corners on either front — licensing and permits exist to protect homeowners, not just contractors.</p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[21]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[21]); ?>"
                 alt="Stealth Landscaping LLC crew working on a landscaping project in Black Diamond, WA"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">2021</span>
          Est.
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Milestones Strip -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,40 L1440,0 L1440,40 Z" fill="var(--color-light)"/>
  </svg>
</div>

<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">By the Numbers</span>
      <h2>Four years of work across King County</h2>
    </div>
    <div class="milestones-strip" data-animate="fade-up">
      <div class="milestone-item">
        <span class="milestone-year">2021</span>
        <h4>Founded</h4>
        <p>Started in Black Diamond serving the immediate community with landscape and hardscape installation.</p>
      </div>
      <div class="milestone-item">
        <span class="milestone-year">8</span>
        <h4>Cities Served</h4>
        <p>Expanded service coverage across King County and into Pierce County as the team grew.</p>
      </div>
      <div class="milestone-item">
        <span class="milestone-year">18</span>
        <h4>Services Offered</h4>
        <p>From hydro seeding to full outdoor living spaces — a complete range of residential landscape services.</p>
      </div>
      <div class="milestone-item">
        <span class="milestone-year">WA</span>
        <h4>Licensed &amp; Insured</h4>
        <p>Washington State licensed contractor. Fully insured for all residential and commercial landscape work.</p>
      </div>
    </div>
  </div>
</section>

<!-- Values -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,0 L1440,40 L1440,0 Z" fill="var(--color-white)"/>
  </svg>
</div>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">How We Work</span>
      <h2>The principles behind every project we take on</h2>
    </div>
    <div class="values-grid" data-animate="fade-up">
      <div class="value-card">
        <div class="value-icon"><i data-lucide="droplets" aria-hidden="true" width="28" height="28"></i></div>
        <h3>Drainage Before Aesthetics</h3>
        <p>No matter how good a landscape looks, if the drainage is wrong it will fail. We design water management into every project from the first conversation — not as an afterthought once the budget has been set.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><i data-lucide="hammer" aria-hidden="true" width="28" height="28"></i></div>
        <h3>Foundation Work First</h3>
        <p>The parts of a job that no one photographs — base compaction, drainage aggregate, edge restraints, root flare placement — are what determine whether work holds up for decades or requires repair in years. We never rush the base to get to the visible surface.</p>
      </div>
      <div class="value-card">
        <div class="value-icon"><i data-lucide="map-pin" aria-hidden="true" width="28" height="28"></i></div>
        <h3>Pacific Northwest Specificity</h3>
        <p>Black Diamond's clay soils, 55-inch annual rainfall, Zone 8b plant climate, and Puget Sound Clean Air Agency burn restrictions all affect how we specify materials, plant species, and installation methods. Generic landscaping practice doesn't translate directly to Western Washington conditions.</p>
      </div>
    </div>
  </div>
</section>

<!-- Certifications / Trust Signals -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,40 L1440,0 L1440,40 Z" fill="var(--color-light)"/>
  </svg>
</div>

<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Credentials &amp; Coverage</span>
      <h2>Licensed, insured, and permit-compliant</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="award" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Washington State Licensed Contractor</h4>
          <p>Stealth Landscaping LLC holds a valid Washington State contractor's license. Verify any contractor's license at the Washington Department of Labor &amp; Industries before signing a contract.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="shield-check" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Fully Insured</h4>
          <p>We carry general liability insurance and workers' compensation coverage. We provide proof of insurance on request before work begins — never hire a contractor who won't provide this.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="file-text" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Permits Pulled When Required</h4>
          <p>Retaining walls over 4 feet, gas line installations, attached covered structures, and other regulated work requires permits. We identify permit requirements before any project starts and pull required permits as the contractor of record.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="phone" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Free Estimates, No Pressure</h4>
          <p>Every estimate is a walkthrough conversation — we assess your site, present options with real pricing, and let you decide. No high-pressure sales, no deposits before you've agreed on a scope.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Mid-Page CTA -->
<section class="cta-banner" aria-label="Contact Stealth Landscaping">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Ready to Start a Project?</h2>
      <p>Free estimates for all services across Black Diamond, Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, and Bonney Lake. We'll walk your site and give you complete pricing before any commitment.</p>
      <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap; margin-top:2rem;">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
          <i data-lucide="phone" aria-hidden="true" width="18" height="18"></i>
          <?php echo htmlspecialchars(formatPhone($phone)); ?>
        </a>
        <?php endif; ?>
        <a href="/contact" class="btn btn-outline-white btn-lg">Get Free Estimate</a>
      </div>
    </div>
  </div>
</section>

<!-- Service Area Coverage -->
<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">Where We Work</span>
      <h2>Serving Black Diamond and the surrounding communities</h2>
    </div>
    <div class="areas-grid" data-animate="fade-up">
      <?php foreach ($serviceAreas as $area): ?>
      <div class="area-card <?php echo $area['primary'] ? 'primary-area' : ''; ?>">
        <i data-lucide="map-pin" aria-hidden="true" width="18" height="18"></i>
        <span><?php echo htmlspecialchars($area['city']); ?>, <?php echo htmlspecialchars($area['state']); ?></span>
      </div>
      <?php endforeach; ?>
    </div>
    <p style="text-align:center; margin-top:var(--space-lg); color:var(--color-text-light);">
      Not sure if we serve your area? <a href="/contact" style="color:var(--color-primary); font-weight:600;">Contact us</a> — we're happy to confirm coverage for your location.
    </p>
  </div>
</section>

<section class="closing-cta" aria-label="Get in touch">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Four years in Black Diamond. Every project built to last.</h2>
      <p>Landscaping, hardscape, and outdoor living work done correctly from the base up. Licensed and insured. Free estimates.</p>
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
