<?php
/**
 * footer.php — Stealth Landscaping LLC
 * Closes </main>, outputs the full footer with AEO entity block,
 * floating CTAs, all scripts, and closes </body></html>.
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// Split services into two footer columns
$_footerSvcA = array_slice($services, 0, 9);
$_footerSvcB = array_slice($services, 9);
?>

</main><!-- /#main-content -->

<footer class="site-footer" aria-label="Site footer">

  <!-- ─── Footer top grid ─────────────────────────────────────────────── -->
  <div class="footer-top">
    <div class="container">
      <div class="footer-grid">

        <!-- Col 1: Brand & trust -->
        <div class="footer-col footer-brand">
          <a href="/" class="site-logo footer-logo" aria-label="<?php echo htmlspecialchars($siteName); ?> — Home">
            <span class="logo-mark" aria-hidden="true">S</span>
            <span class="logo-text">
              <span class="logo-name">Stealth Landscaping</span>
              <span class="logo-tagline"><?php echo htmlspecialchars($tagline); ?></span>
            </span>
          </a>
          <p class="footer-desc">
            Locally owned landscaping contractor serving Black Diamond, WA and King County. <?php echo $yearsInBusiness; ?>+ years transforming residential and light commercial properties — one yard at a time.
          </p>
          <div class="footer-trust">
            <span class="trust-badge">
              <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg>
              Licensed &amp; Insured
            </span>
            <span class="trust-badge">
              <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <?php echo $yearsInBusiness; ?>+ Years Experience
            </span>
            <span class="trust-badge">
              <svg aria-hidden="true" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>
              Free Estimates
            </span>
          </div>
          <?php if (!empty($socialLinks['facebook']) || !empty($socialLinks['instagram'])): ?>
          <div class="social-links" role="list">
            <?php if (!empty($socialLinks['facebook'])): ?>
            <a href="<?php echo htmlspecialchars($socialLinks['facebook']); ?>"
               class="social-link" target="_blank" rel="noopener noreferrer"
               aria-label="Stealth Landscaping on Facebook" role="listitem">
              <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/></svg>
            </a>
            <?php endif; ?>
            <?php if (!empty($socialLinks['instagram'])): ?>
            <a href="<?php echo htmlspecialchars($socialLinks['instagram']); ?>"
               class="social-link" target="_blank" rel="noopener noreferrer"
               aria-label="Stealth Landscaping on Instagram" role="listitem">
              <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"/><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg>
            </a>
            <?php endif; ?>
          </div>
          <?php endif; ?>
        </div>

        <!-- Col 2: Services A–I -->
        <div class="footer-col">
          <h4>Our Services</h4>
          <ul>
            <?php foreach ($_footerSvcA as $_svc): ?>
            <li>
              <a href="/services/<?php echo htmlspecialchars($_svc['slug']); ?>">
                <?php echo htmlspecialchars($_svc['name']); ?>
              </a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Col 3: Services J–R + Service Areas -->
        <div class="footer-col">
          <h4>More Services</h4>
          <ul>
            <?php foreach ($_footerSvcB as $_svc): ?>
            <li>
              <a href="/services/<?php echo htmlspecialchars($_svc['slug']); ?>">
                <?php echo htmlspecialchars($_svc['name']); ?>
              </a>
            </li>
            <?php endforeach; ?>
            <li><a href="/services" class="footer-view-all">View All Services &rarr;</a></li>
          </ul>
          <h4 style="margin-top:1.5rem;">Service Areas</h4>
          <ul>
            <?php foreach ($serviceAreas as $_area): ?>
            <li>
              <a href="/service-area"><?php echo htmlspecialchars($_area['city']); ?>, <?php echo htmlspecialchars($_area['state']); ?></a>
            </li>
            <?php endforeach; ?>
          </ul>
        </div>

        <!-- Col 4: Contact info -->
        <div class="footer-col footer-contact">
          <h4>Contact Us</h4>
          <ul>
            <?php if (!empty($phone)): ?>
            <li class="contact-item">
              <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
              <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>">
                <?php echo htmlspecialchars(formatPhone($phone)); ?>
              </a>
            </li>
            <?php endif; ?>
            <?php if (!empty($email)): ?>
            <li class="contact-item">
              <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>
              <a href="mailto:<?php echo htmlspecialchars($email); ?>"><?php echo htmlspecialchars($email); ?></a>
            </li>
            <?php endif; ?>
            <li class="contact-item">
              <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
              <span><?php echo htmlspecialchars($addressFull); ?></span>
            </li>
            <li class="contact-item">
              <svg aria-hidden="true" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
              <span>Mon–Fri: 7am–6pm &nbsp;|&nbsp; Sat: 8am–4pm</span>
            </li>
          </ul>
          <a href="/contact" class="btn btn-accent" style="margin-top:1rem;width:100%;justify-content:center;">
            Get a Free Estimate
          </a>
        </div>

      </div><!-- /.footer-grid -->
    </div><!-- /.container -->
  </div><!-- /.footer-top -->

  <!-- ─── AEO Entity Block ──────────────────────────────────────────────── -->
  <div class="footer-entity">
    <div class="container">
      <div itemscope itemtype="https://schema.org/LandscapingBusiness">
        <meta itemprop="name"    content="<?php echo htmlspecialchars($siteName); ?>">
        <meta itemprop="url"     content="<?php echo htmlspecialchars($siteUrl); ?>">
        <?php if (!empty($phone)): ?>
        <meta itemprop="telephone" content="<?php echo htmlspecialchars($phone); ?>">
        <?php endif; ?>
        <meta itemprop="address" content="<?php echo htmlspecialchars($addressFull); ?>">
        <p>
          <?php echo htmlspecialchars($siteName); ?> is a landscaping company based in <?php echo htmlspecialchars($addressCity); ?>, <?php echo htmlspecialchars($addressState); ?>, serving residential and light commercial clients throughout King County and surrounding areas — including Maple Valley, Covington, Auburn, Kent, Enumclaw, Renton, and Bonney Lake.
          With <?php echo $yearsInBusiness; ?>+ years of experience, <?php echo htmlspecialchars($siteName); ?> specializes in landscape design, hardscape installation, and patio &amp; retaining wall construction.
          Contact:<?php if (!empty($phone)): ?> <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" itemprop="telephone"><?php echo htmlspecialchars(formatPhone($phone)); ?></a><?php endif; ?><?php if (!empty($email)): ?> | <a href="mailto:<?php echo htmlspecialchars($email); ?>" itemprop="email"><?php echo htmlspecialchars($email); ?></a><?php endif; ?> | <a href="<?php echo htmlspecialchars($siteUrl); ?>" itemprop="url"><?php echo htmlspecialchars($domain); ?></a>.
          Licensed and insured.
        </p>
      </div>
    </div>
  </div>

  <!-- ─── Footer bottom bar ─────────────────────────────────────────────── -->
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($siteName); ?>. All Rights Reserved. <?php echo htmlspecialchars($addressCity); ?>, <?php echo htmlspecialchars($addressState); ?>.</p>
      <p class="footer-credit">
        <a href="https://pageoneinsights.com" rel="dofollow" target="_blank">
          Web Design &amp; Hosting by Page One Insights, LLC
        </a>
      </p>
    </div>
  </div>

</footer><!-- /.site-footer -->

<!-- ─── Back-to-top button ─────────────────────────────────────────────── -->
<button class="back-to-top" id="back-to-top" aria-label="Back to top" title="Back to top" hidden>
  <svg aria-hidden="true" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="18 15 12 9 6 15"/></svg>
</button>

<!-- ─── Mobile floating CTA bar (<768px only) ─────────────────────────── -->
<div class="mobile-cta-bar" role="complementary" aria-label="Quick contact actions">
  <div class="cta-buttons">
    <?php if (!empty($phone)): ?>
    <a href="tel:<?php echo preg_replace('/[^0-9]/', '', $phone); ?>" class="btn btn-accent">
      <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      Call Now
    </a>
    <?php else: ?>
    <a href="/contact" class="btn btn-accent">
      <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07A19.5 19.5 0 0 1 4.69 12a19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 3.6 1.27h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
      Call Now
    </a>
    <?php endif; ?>
    <a href="/contact" class="btn btn-outline-white">
      <svg aria-hidden="true" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="16" y1="13" x2="8" y2="13"/><line x1="16" y1="17" x2="8" y2="17"/><polyline points="10 9 9 9 8 9"/></svg>
      Free Estimate
    </a>
  </div>
</div>

<!-- ─── Scripts ─────────────────────────────────────────────────────────── -->
<script src="/assets/js/main.js" defer></script>
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/effects.js" defer></script>

<?php if (!empty($useSwiper)): ?>
<script src="<?php echo htmlspecialchars($cdnSwiper); ?>" defer></script>
<?php endif; ?>

<?php if (!empty($useVanillaTilt)): ?>
<script src="<?php echo htmlspecialchars($cdnVanillaTilt); ?>" defer></script>
<?php endif; ?>

<!-- Lucide icons — loaded synchronously so inline init fires immediately -->
<script src="<?php echo htmlspecialchars($cdnLucide); ?>"></script>
<script>
  (function () {
    // Initialize Lucide icons
    if (typeof lucide !== 'undefined') lucide.createIcons();

    // Back-to-top visibility toggle (augments main.js handler)
    var btn = document.getElementById('back-to-top');
    if (btn) {
      window.addEventListener('scroll', function () {
        if (window.scrollY > 400) {
          btn.removeAttribute('hidden');
          btn.classList.add('visible');
        } else {
          btn.classList.remove('visible');
          btn.setAttribute('hidden', '');
        }
      }, { passive: true });
    }
  }());
</script>

</body>
</html>
