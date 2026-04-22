/* ============================================
   Page One Insights — Main JavaScript
   Auto-generated from build-plan.json
   ============================================ */

document.addEventListener('DOMContentLoaded', function() {

  /* === Sticky Header / Scroll Class Toggle === */
  const header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 60) {
        header.classList.add('scrolled');
      } else {
        header.classList.remove('scrolled');
      }
    });
  }

  /* === Mobile Menu Toggle ================================================= */
  var hamburger   = document.getElementById('hamburger-btn');
  var mobileMenu  = document.getElementById('mobile-menu');
  var backdrop    = document.getElementById('mobile-menu-backdrop');
  var closeBtn    = document.getElementById('mobile-menu-close');

  function openMobileMenu() {
    if (!mobileMenu) return;
    mobileMenu.removeAttribute('hidden');
    // Trigger animation on next frame
    requestAnimationFrame(function () {
      mobileMenu.classList.add('is-open');
      if (backdrop) backdrop.classList.add('is-open');
    });
    if (hamburger) hamburger.setAttribute('aria-expanded', 'true');
    document.body.style.overflow = 'hidden';
    // Move focus into menu
    var firstFocusable = mobileMenu.querySelector('a, button');
    if (firstFocusable) firstFocusable.focus();
  }

  function closeMobileMenu() {
    if (!mobileMenu) return;
    mobileMenu.classList.remove('is-open');
    if (backdrop) backdrop.classList.remove('is-open');
    if (hamburger) {
      hamburger.setAttribute('aria-expanded', 'false');
      hamburger.classList.remove('active');
    }
    document.body.style.overflow = '';
    // Re-hide after transition
    setTimeout(function () {
      if (!mobileMenu.classList.contains('is-open')) {
        mobileMenu.setAttribute('hidden', '');
      }
    }, 380);
  }

  if (hamburger) {
    hamburger.addEventListener('click', function () {
      hamburger.classList.toggle('active');
      if (mobileMenu && mobileMenu.classList.contains('is-open')) {
        closeMobileMenu();
      } else {
        openMobileMenu();
      }
    });
  }
  if (closeBtn)  closeBtn.addEventListener('click', closeMobileMenu);
  if (backdrop)  backdrop.addEventListener('click', closeMobileMenu);

  // Close on Escape key
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('is-open')) {
      closeMobileMenu();
    }
  });

  // Close when a plain nav link is tapped (not accordion buttons)
  if (mobileMenu) {
    mobileMenu.querySelectorAll('.mobile-nav-links a').forEach(function (link) {
      link.addEventListener('click', closeMobileMenu);
    });
  }

  /* === Mobile Services Accordion ========================================= */
  document.querySelectorAll('.mobile-accordion-btn').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var targetId = btn.getAttribute('aria-controls');
      var list = document.getElementById(targetId);
      if (!list) return;
      var isOpen = btn.getAttribute('aria-expanded') === 'true';
      btn.setAttribute('aria-expanded', (!isOpen).toString());
      if (isOpen) {
        list.setAttribute('hidden', '');
      } else {
        list.removeAttribute('hidden');
      }
    });
  });

  /* === Smooth Scroll for Anchor Links === */
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      var targetId = this.getAttribute('href').substring(1);
      var target = document.getElementById(targetId);
      if (target) {
        var headerHeight = header ? header.offsetHeight : 0;
        var top = target.getBoundingClientRect().top + window.pageYOffset - headerHeight - 20;
        window.scrollTo({ top: top, behavior: 'smooth' });
      }
    });
  });

  /* === IntersectionObserver for data-animate fade-in === */
  var animateElements = document.querySelectorAll('[data-animate]');
  if (animateElements.length > 0 && 'IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
    animateElements.forEach(function(el) { observer.observe(el); });
  }

  /* === Counter Animation for data-counter elements === */
  var counters = document.querySelectorAll('[data-counter]');
  if (counters.length > 0 && 'IntersectionObserver' in window) {
    var counterObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var target = parseInt(el.getAttribute('data-counter'), 10);
          var suffix = el.getAttribute('data-suffix') || '';
          var prefix = el.getAttribute('data-prefix') || '';
          var duration = 2000;
          var start = 0;
          var startTime = null;

          function animate(timestamp) {
            if (!startTime) startTime = timestamp;
            var progress = Math.min((timestamp - startTime) / duration, 1);
            var eased = 1 - Math.pow(1 - progress, 3); // ease-out cubic
            var current = Math.floor(eased * target);
            el.textContent = prefix + current.toLocaleString() + suffix;
            if (progress < 1) requestAnimationFrame(animate);
            else el.textContent = prefix + target.toLocaleString() + suffix;
          }
          requestAnimationFrame(animate);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.3 });
    counters.forEach(function(el) { counterObserver.observe(el); });
  }

  /* === Back to Top Button === */
  var backToTop = document.querySelector('.back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 600) {
        backToTop.classList.add('visible');
      } else {
        backToTop.classList.remove('visible');
      }
    });
    backToTop.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  /* === Swiper Carousel Init for .reviews-swiper === */
  if (typeof Swiper !== 'undefined') {
    var reviewsSwiper = document.querySelector('.reviews-swiper');
    if (reviewsSwiper) {
      new Swiper('.reviews-swiper', {
        slidesPerView: 1,
        spaceBetween: 24,
        loop: true,
        autoplay: { delay: 5000, disableOnInteraction: false },
        pagination: { el: '.swiper-pagination', clickable: true },
        navigation: { nextEl: '.swiper-button-next', prevEl: '.swiper-button-prev' },
        breakpoints: {
          640: { slidesPerView: 2 },
          1024: { slidesPerView: 3 }
        }
      });
    }
  }

});
