<?php
/**
 * services/shrub-trimming.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'services';
$heroImage      = $clientImages[7];
$useVanillaTilt = false;
$useSwiper      = false;

$service = $services[6]; // Shrub Trimming

$pageTitle       = 'Shrub Trimming Black Diamond WA | Stealth Landscaping LLC';
$pageDescription = 'Professional shrub trimming & pruning in Black Diamond, WA. Species-appropriate timing and technique for healthy, attractive plants. Free estimates from Stealth Landscaping.';
$canonicalUrl    = $siteUrl . '/services/shrub-trimming';
$ogImage         = $clientImages[7];

$faqs = [
    [
        'question' => 'When should shrubs be trimmed in Black Diamond, WA?',
        'answer'   => 'Timing depends on species. Spring-flowering shrubs (Forsythia, Lilac, Rhododendron) should be trimmed right after bloom — not in fall or early spring when you\'d remove flower buds. Summer-flowering shrubs (Butterfly Bush, Hydrangea paniculata) are pruned in late winter. Evergreen hedges and formal shapes can be trimmed in late spring and again in late summer.',
    ],
    [
        'question' => 'How much does shrub trimming cost in Black Diamond?',
        'answer'   => 'Most residential shrub trimming jobs run $150–$600 depending on property size and number of shrubs. A full property with multiple hedges, foundation shrubs, and specimen plants typically runs $300–$600. We provide exact pricing after seeing the property.',
    ],
    [
        'question' => 'Can over-grown shrubs be rejuvenated or do they need to be removed?',
        'answer'   => 'Many overgrown shrubs can be rejuvenated through hard pruning over 2–3 seasons — cutting back by one-third per year to avoid shock. Species like Forsythia, English Laurel, and most deciduous shrubs respond well. Overgrown conifers (like Arborvitae or Junipers) cannot be cut back into old wood — they may need replacement.',
    ],
    [
        'question' => 'Do you handle hedge trimming for privacy screens?',
        'answer'   => 'Yes — we trim hedges of all types, including Leyland Cypress, Arborvitae, Laurel, and boxwood. Maintaining a consistent hedge line requires the right timing and technique. We work to your preferred height and shape, maintaining year-over-year consistency.',
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
            ['@type' => 'ListItem', 'position' => 3, 'name' => 'Shrub Trimming', 'item' => $siteUrl . '/services/shrub-trimming'],
        ],
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES)
    . ",\n" . generateFAQSchema($faqs) . "\n]";

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[7]); ?>');"
         aria-label="Shrub trimming service hero">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Shrub Trimming That Keeps Plants Healthy</h1>
    <p class="page-hero-sub">Species-appropriate pruning technique and timing — not just a uniform haircut that stresses your plants and removes next year's flowers.</p>
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
      <li class="active" aria-current="page">Shrub Trimming</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="service-detail-grid">
      <div class="service-detail-content" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Professional Shrub Trimming &amp; Pruning</span>
        <h2>Pruning at the right time, in the right way</h2>
        <p>Most shrub trimming problems come from two mistakes: wrong timing and wrong technique. Trimming a Rhododendron in fall removes the flower buds set for spring. Cutting an Arborvitae back into brown wood leaves permanent bald patches. These aren't recoverable without replacement. Understanding how each species grows — when it sets buds, how it responds to hard cuts, how much it can handle per season — changes the results dramatically.</p>
        <p>We trim for plant health first, aesthetics second. That means making clean cuts at the right nodes, removing dead, crossing, or inward-growing branches before shaping the exterior, and staying within the volume reduction a plant can handle in a single season. For formal hedges and shaped specimens, we work to your preferred dimensions while keeping cuts in the green wood.</p>
        <p>Black Diamond properties often have mature landscapes with established Rhododendrons, Laurel hedges, formal boxwood, and overgrown foundation plantings that have been on deferred maintenance for several years. We can take on rejuvenation projects that bring overgrown plants back to a manageable size over 2–3 visits without killing them in the process.</p>
        <p><em>Last Updated: April 2026</em></p>
      </div>
      <div class="service-detail-image" data-animate="fade-up">
        <div class="img-frame">
          <picture>
            <source srcset="<?php echo htmlspecialchars($clientImages[8]); ?>" type="image/webp">
            <img src="<?php echo htmlspecialchars($clientImages[8]); ?>"
                 alt="Shrub trimming and pruning in Black Diamond, WA — landscaping maintenance"
                 width="600" height="750" loading="lazy">
          </picture>
        </div>
        <div class="img-badge">
          <span class="badge-num">4+</span>
          Yrs Serving BD
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
      <h2>What separates proper pruning from a hedge buzzing</h2>
    </div>
    <div class="why-choose-grid" data-animate="fade-up">
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="clock" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Species-Specific Timing</h4>
          <p>We prune each species when it benefits that plant — not on a blanket spring schedule. Spring bloomers get trimmed post-bloom; summer bloomers in late winter; evergreens in late spring after growth has hardened.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="scissors" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Clean Cuts at the Right Node</h4>
          <p>We cut back to a healthy lateral branch or bud, not to a random length. Clean cuts heal faster, reduce disease entry points, and encourage growth in the right direction.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="refresh-cw" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Rejuvenation Pruning Available</h4>
          <p>Overgrown deciduous shrubs can often be brought back over 2–3 seasons of hard pruning. We create a multi-year plan for neglected hedges and foundation plantings rather than a single drastic cut.</p>
        </div>
      </div>
      <div class="why-choose-item">
        <div class="why-icon"><i data-lucide="trash-2" aria-hidden="true" width="22" height="22"></i></div>
        <div>
          <h4>Cleanup Included</h4>
          <p>All trimmings are collected and removed from the property. We don't leave piles of debris for you to deal with — the site is clean when we leave.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner" aria-label="Get shrub trimming estimate">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Get a Free Shrub Trimming Estimate</h2>
      <p>Walk the property with us — we'll assess your shrubs, recommend a trimming schedule, and provide exact pricing for the work.</p>
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
      <span class="eyebrow">How It Works</span>
      <h2>Our shrub trimming process</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>Assessment &amp; Species Identification</h4>
          <p>We identify each shrub species and assess its health, current size relative to desired size, and any structural or disease issues before trimming begins.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Structural Pruning First</h4>
          <p>Dead, crossing, and inward-growing branches are removed before any shaping. This improves airflow and removes disease entry points before the cosmetic work begins.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Shaping &amp; Size Reduction</h4>
          <p>Hedges are shaped to consistent dimensions; informal shrubs are shaped to their natural form. We work within the volume reduction that each species can handle safely per season.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>Debris Cleanup &amp; Site Inspection</h4>
          <p>All trimmings are collected, tarped, and removed. The site is blown clean and inspected with you before we leave. Any concerns about specific plants are flagged at this time.</p>
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
      <h2>Shrub Trimming FAQ — Black Diamond</h2>
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

<section class="closing-cta" aria-label="Start your shrub trimming project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Well-maintained shrubs — without guessing at timing or technique</h2>
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
