<?php
/**
 * thank-you.php
 * Stealth Landscaping LLC — noindex (form confirmation page)
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = '';
$heroImage      = $clientImages[0];
$useVanillaTilt = false;
$useSwiper      = false;

// noindex — set via head.php $noIndex flag
$noIndex         = true;
$pageTitle       = 'Request Received | Stealth Landscaping LLC';
$pageDescription = 'Thank you for contacting Stealth Landscaping LLC. We\'ll be in touch within one business day to schedule your free estimate.';
$canonicalUrl    = $siteUrl . '/thank-you';
$ogImage         = $clientImages[0];

$schemaMarkup = '{}';

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="thank-you-section" aria-label="Estimate request received">
  <div class="container">

    <div class="checkmark-icon" aria-hidden="true">
      <i data-lucide="check-circle" width="64" height="64"></i>
    </div>

    <h1>Your estimate request is received</h1>
    <p class="page-hero-sub">We've received your information and will be in touch within one business day — usually sooner. You'll hear from us by phone or email to confirm details and schedule a site visit.</p>

    <!-- What happens next -->
    <div style="max-width:900px; margin:var(--space-2xl) auto 0;">
      <h2 style="text-align:center; margin-bottom:var(--space-xl); font-size:clamp(1.4rem, 3vw, 2rem);">What happens next</h2>
      <div class="next-steps-grid">

        <div class="next-step-card">
          <div class="step-number" style="margin:0 auto var(--space-md);">1</div>
          <h3>We review your request</h3>
          <p>We review your project description and confirm we're the right contractor for the scope. If we have clarifying questions, we'll reach out before scheduling a visit.</p>
        </div>

        <div class="next-step-card">
          <div class="step-number" style="margin:0 auto var(--space-md);">2</div>
          <h3>Site walkthrough — free</h3>
          <p>We visit the property, assess drainage, soil conditions, and access, and discuss your goals directly on-site. This walkthrough is always free and takes about 30–45 minutes depending on project scope.</p>
        </div>

        <div class="next-step-card">
          <div class="step-number" style="margin:0 auto var(--space-md);">3</div>
          <h3>Written estimate delivered</h3>
          <p>You receive a written estimate with material options and complete pricing. No obligation to accept — take the time you need to compare and decide. We're available to answer questions throughout.</p>
        </div>

      </div>
    </div>

    <!-- Links back -->
    <div style="margin-top:var(--space-2xl); padding-top:var(--space-xl); border-top:1px solid var(--color-border); text-align:center;">
      <p style="color:var(--color-text-light); margin-bottom:var(--space-lg);">While you wait, explore our services:</p>
      <div style="display:flex; gap:1rem; justify-content:center; flex-wrap:wrap;">
        <a href="/services" class="btn btn-primary">Browse All Services</a>
        <a href="/service-area" class="btn btn-secondary">Service Area</a>
        <a href="/about" class="btn btn-secondary">About Us</a>
        <a href="/" class="btn btn-secondary">Return Home</a>
      </div>
    </div>

    <?php if (!empty($phone)): ?>
    <div style="margin-top:var(--space-2xl); text-align:center;">
      <p style="color:var(--color-text-light);">Need to reach us directly?</p>
      <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" style="font-size:1.5rem; font-weight:700; color:var(--color-primary); display:inline-flex; align-items:center; gap:8px;">
        <i data-lucide="phone" aria-hidden="true" width="24" height="24"></i>
        <?php echo htmlspecialchars(formatPhone($phone)); ?>
      </a>
    </div>
    <?php endif; ?>

  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
