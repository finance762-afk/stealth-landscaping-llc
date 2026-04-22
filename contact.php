<?php
/**
 * contact.php
 * Stealth Landscaping LLC
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

$currentPage    = 'contact';
$heroImage      = $clientImages[22];
$useVanillaTilt = false;
$useSwiper      = false;

$pageTitle       = 'Contact Stealth Landscaping LLC | Black Diamond, WA — Free Estimates';
$pageDescription = 'Contact Stealth Landscaping LLC in Black Diamond, WA. Request a free estimate for landscaping, hardscape, patio installation, and more. Serving King County since 2021.';
$canonicalUrl    = $siteUrl . '/contact';
$ogImage         = $clientImages[22];

$schemaMarkup = json_encode([
    '@context' => 'https://schema.org', '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => $siteUrl],
        ['@type' => 'ListItem', 'position' => 2, 'name' => 'Contact', 'item' => $siteUrl . '/contact'],
    ],
], JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);

include $_SERVER['DOCUMENT_ROOT'] . '/includes/head.php';
include $_SERVER['DOCUMENT_ROOT'] . '/includes/header.php';
?>

<section class="page-hero hero-animated"
         style="background-image: url('<?php echo htmlspecialchars($clientImages[22]); ?>');"
         aria-label="Contact Stealth Landscaping LLC">
  <div class="hero-overlay" aria-hidden="true"></div>
  <div class="page-hero-content" data-animate="fade-up">
    <span class="hero-eyebrow">Black Diamond, WA</span>
    <h1>Get a Free Estimate — No Commitment Required</h1>
    <p class="page-hero-sub">Tell us about your project and we'll schedule a site walkthrough, assess the conditions, and give you complete pricing before any work begins.</p>
  </div>
</section>

<nav class="breadcrumb-bar" aria-label="Breadcrumb">
  <div class="container">
    <ol class="breadcrumb">
      <li><a href="/">Home</a></li>
      <li class="breadcrumb-sep" aria-hidden="true">/</li>
      <li class="active" aria-current="page">Contact</li>
    </ol>
  </div>
</nav>

<section style="padding: var(--space-16) 0; background: var(--color-white);">
  <div class="container">
    <div class="contact-grid">

      <!-- Contact Form -->
      <div class="contact-form-wrap" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Request a Free Estimate</span>
        <h2>Tell us about your project</h2>
        <p style="color:var(--color-text-light); margin-bottom:var(--space-xl);">Fill out the form below and we'll get back to you within one business day to schedule a site visit. No spam, no pressure.</p>

        <form action="<?php echo htmlspecialchars($formAction); ?>" method="POST" novalidate>
          <!-- Formsubmit.co configuration -->
          <input type="hidden" name="_next"     value="<?php echo $siteUrl; ?>/thank-you">
          <input type="hidden" name="_captcha"  value="false">
          <input type="hidden" name="_template" value="table">
          <input type="hidden" name="_subject"  value="Stealth Landscaping LLC — New Website Inquiry">
          <!-- Honeypot spam trap -->
          <input type="text" name="_honey" style="display:none;" tabindex="-1" autocomplete="off">

          <div class="form-row">
            <div class="form-group">
              <input type="text" id="first_name" name="first_name" placeholder=" " required autocomplete="given-name">
              <label for="first_name">First Name *</label>
            </div>
            <div class="form-group">
              <input type="text" id="last_name" name="last_name" placeholder=" " required autocomplete="family-name">
              <label for="last_name">Last Name *</label>
            </div>
          </div>

          <div class="form-row">
            <div class="form-group">
              <input type="tel" id="phone" name="phone" placeholder=" " required autocomplete="tel">
              <label for="phone">Phone Number *</label>
            </div>
            <div class="form-group">
              <input type="email" id="email" name="email" placeholder=" " required autocomplete="email">
              <label for="email">Email Address *</label>
            </div>
          </div>

          <div class="form-group">
            <input type="text" id="address" name="property_address" placeholder=" " autocomplete="street-address">
            <label for="address">Property Address (optional)</label>
          </div>

          <div class="form-group form-group--select">
            <select id="service_requested" name="service_requested" required>
              <option value="" disabled selected></option>
              <?php foreach ($services as $svc): ?>
              <option value="<?php echo htmlspecialchars($svc['name']); ?>"><?php echo htmlspecialchars($svc['name']); ?></option>
              <?php endforeach; ?>
              <option value="Multiple Services">Multiple Services</option>
              <option value="Other">Other / Not Sure Yet</option>
            </select>
            <label for="service_requested">Service Requested *</label>
          </div>

          <div class="form-group">
            <textarea id="message" name="message" placeholder=" " rows="5" required></textarea>
            <label for="message">Project Description *</label>
          </div>

          <button type="submit" class="btn btn-primary btn-lg" style="width:100%;">
            <i data-lucide="send" aria-hidden="true" width="18" height="18"></i>
            Send Estimate Request
          </button>
        </form>
      </div>

      <!-- Contact Info Sidebar -->
      <div class="contact-info-wrap" data-animate="fade-up">
        <span class="eyebrow" style="color:var(--color-primary);">Contact Information</span>
        <h2>Reach us directly</h2>

        <?php if (!empty($phone)): ?>
        <div class="contact-detail">
          <div class="contact-detail-icon"><i data-lucide="phone" aria-hidden="true" width="20" height="20"></i></div>
          <div>
            <strong>Phone</strong>
            <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>"><?php echo htmlspecialchars(formatPhone($phone)); ?></a>
          </div>
        </div>
        <?php endif; ?>

        <?php if (!empty($email)): ?>
        <div class="contact-detail">
          <div class="contact-detail-icon"><i data-lucide="mail" aria-hidden="true" width="20" height="20"></i></div>
          <div>
            <strong>Email</strong>
            <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
          </div>
        </div>
        <?php endif; ?>

        <div class="contact-detail">
          <div class="contact-detail-icon"><i data-lucide="map-pin" aria-hidden="true" width="20" height="20"></i></div>
          <div>
            <strong>Based In</strong>
            <span><?php echo htmlspecialchars($addressFull); ?></span>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon"><i data-lucide="clock" aria-hidden="true" width="20" height="20"></i></div>
          <div>
            <strong>Business Hours</strong>
            <span>Monday – Friday: 7:00 AM – 6:00 PM</span>
            <span>Saturday: 8:00 AM – 4:00 PM</span>
            <span>Sunday: Closed</span>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon"><i data-lucide="map" aria-hidden="true" width="20" height="20"></i></div>
          <div>
            <strong>Service Area</strong>
            <span><?php echo implode(', ', array_map(fn($a) => $a['city'], $serviceAreas)); ?></span>
          </div>
        </div>

        <div class="contact-detail">
          <div class="contact-detail-icon"><i data-lucide="shield-check" aria-hidden="true" width="20" height="20"></i></div>
          <div>
            <strong>Licensed &amp; Insured</strong>
            <span>Washington State Licensed Contractor</span>
            <span>General Liability &amp; Workers' Comp</span>
          </div>
        </div>

        <!-- Map Placeholder -->
        <div style="margin-top:var(--space-xl); border-radius:var(--radius-lg); overflow:hidden; background:var(--color-light); height:220px; display:flex; align-items:center; justify-content:center;">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2694.5!2d-122.0!3d47.3!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDfCsDMwJzAwLjAiTiAxMjLCsDAwJzAwLjAiVw!5e0!3m2!1sen!2sus!4v1"
            width="100%" height="220"
            style="border:0; display:block;"
            allowfullscreen=""
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
            title="Stealth Landscaping LLC location in Black Diamond, WA">
          </iframe>
        </div>
      </div>

    </div>
  </div>
</section>

<!-- FAQ-style trust signals -->
<div class="divider" aria-hidden="true">
  <svg viewBox="0 0 1440 40" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="none" style="display:block;width:100%;">
    <path d="M0,40 L1440,0 L1440,40 Z" fill="var(--color-light)"/>
  </svg>
</div>

<section style="padding: var(--space-16) 0; background: var(--color-light);">
  <div class="container">
    <div class="section-header" data-animate="fade-up">
      <span class="eyebrow">What to Expect</span>
      <h2>After you submit your estimate request</h2>
    </div>
    <div class="process-steps" data-animate="fade-up">
      <div class="process-step">
        <div class="step-number">1</div>
        <div class="step-content">
          <h4>We Respond Within One Business Day</h4>
          <p>You'll hear from us by phone or email within one business day of your request. We'll confirm we serve your area and ask any clarifying questions about your project scope before scheduling a visit.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">2</div>
        <div class="step-content">
          <h4>Site Walkthrough — Free</h4>
          <p>We visit the property, assess site conditions (drainage, soil, access, existing features), and discuss your goals. This walkthrough is always free — it's how we make sure our estimate is accurate and based on the actual conditions.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">3</div>
        <div class="step-content">
          <h4>Written Estimate with Material Options</h4>
          <p>You receive a written estimate that includes material options and pricing — not a single number with no explanation. If there are multiple ways to achieve your goal at different price points, we show you both.</p>
        </div>
      </div>
      <div class="process-step">
        <div class="step-number">4</div>
        <div class="step-content">
          <h4>No Deposit Until Work is Scheduled</h4>
          <p>We don't collect deposits before a project start date is confirmed. If you want to take time to compare estimates or decide, there's no pressure. We're available to answer questions until you've made the decision that's right for you.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="closing-cta" aria-label="Start your project">
  <div class="container">
    <div data-animate="fade-up">
      <h2>Ready to see what your property can become?</h2>
      <p>Free estimates across Black Diamond, Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, and Bonney Lake. Licensed and insured.</p>
      <div class="closing-cta-actions">
        <?php if (!empty($phone)): ?>
        <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent btn-lg">
          <i data-lucide="phone" aria-hidden="true" width="18" height="18"></i>
          Call Now
        </a>
        <?php endif; ?>
        <a href="/services" class="btn btn-outline-white btn-lg">Browse Services</a>
      </div>
    </div>
  </div>
</section>

<?php include $_SERVER['DOCUMENT_ROOT'] . '/includes/footer.php'; ?>
