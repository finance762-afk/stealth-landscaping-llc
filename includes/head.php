<?php
/**
 * head.php — Stealth Landscaping LLC
 * Outputs the full <head> block plus opening <body>.
 * Pages set their own variables BEFORE including this file.
 * Variables with defaults (if page doesn't set them):
 *   $pageTitle, $pageDescription, $canonicalUrl, $ogImage, $schemaMarkup
 *   $currentPage, $useSwiper, $useVanillaTilt
 */

require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/config.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/includes/functions.php';

// ─── Resolve per-page variables or build sensible defaults ────────────────
$_title = isset($pageTitle) && $pageTitle
    ? $pageTitle
    : $siteName . ' | Landscaping ' . $address['city'] . ', ' . $address['state'];

$_desc = isset($pageDescription) && $pageDescription
    ? $pageDescription
    : $siteName . ' delivers expert landscaping, hardscape design, patio installation, and turf services in ' . $address['city'] . ', WA. ' . $yearsInBusiness . '+ years serving King County and surrounding areas.';

$_canonical = isset($canonicalUrl) && $canonicalUrl ? $canonicalUrl : $siteUrl;
$_ogImage   = isset($ogImage)      && $ogImage      ? $ogImage      : $logoUrl;

// ─── Build LocalBusiness JSON-LD ──────────────────────────────────────────
$_areaServed = [];
foreach ($serviceAreas as $_area) {
    if (!empty($_area['city'])) {
        $_areaServed[] = ['@type' => 'City', 'name' => $_area['city'] . ', ' . $_area['state']];
    }
}

$_servicesOffered = [];
foreach ($services as $_svc) {
    $_servicesOffered[] = [
        '@type'       => 'Offer',
        'itemOffered' => [
            '@type'       => 'Service',
            'name'        => $_svc['name'],
            'description' => $_svc['description'],
        ],
    ];
}

$_sameAs = [];
if (!empty($socialLinks['facebook']))  $_sameAs[] = $socialLinks['facebook'];
if (!empty($socialLinks['instagram'])) $_sameAs[] = $socialLinks['instagram'];
if (!empty($socialLinks['google']))    $_sameAs[] = $socialLinks['google'];

$_localBizSchema = [
    '@context'    => 'https://schema.org',
    '@type'       => 'LandscapingBusiness',
    '@id'         => $siteUrl . '/#business',
    'name'        => $siteName,
    'url'         => $siteUrl,
    'telephone'   => $phone   ?: null,
    'email'       => $email   ?: null,
    'description' => $siteName . ' is a locally owned landscaping company in ' . $address['city'] . ', WA, specializing in landscaping, hardscape design, patio installation, turf installation, retaining walls, and outdoor living spaces. Serving King County and surrounding areas.',
    'address'     => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => $address['street'],
        'addressLocality' => $address['city'],
        'addressRegion'   => $address['state'],
        'postalCode'      => $address['zip'],
        'addressCountry'  => 'US',
    ],
    'geo' => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => 47.3087,
        'longitude' => -121.9905,
    ],
    'openingHoursSpecification' => [
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
            'opens'     => '07:00',
            'closes'    => '18:00',
        ],
        [
            '@type'     => 'OpeningHoursSpecification',
            'dayOfWeek' => 'Saturday',
            'opens'     => '08:00',
            'closes'    => '16:00',
        ],
    ],
    // TODO: Replace with verified review data once live
    'aggregateRating' => [
        '@type'       => 'AggregateRating',
        'ratingValue' => '4.9',
        'reviewCount' => '38',
        'bestRating'  => '5',
        'worstRating' => '1',
    ],
    'image'            => $logoUrl,
    'logo'             => $logoUrl,
    'areaServed'       => $_areaServed,
    'hasOfferCatalog'  => [
        '@type'           => 'OfferCatalog',
        'name'            => 'Landscaping Services',
        'itemListElement' => $_servicesOffered,
    ],
    'foundingYear'       => $yearEstablished,
    'priceRange'         => '$$',
    'currenciesAccepted' => 'USD',
    'paymentAccepted'    => 'Cash, Check, Credit Card',
];

if (!empty($_sameAs)) {
    $_localBizSchema['sameAs'] = $_sameAs;
}

// Strip nulls cleanly
foreach ($_localBizSchema as $_k => $_v) {
    if ($_v === null || $_v === '') unset($_localBizSchema[$_k]);
}
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Primary SEO -->
  <title><?php echo htmlspecialchars($_title, ENT_QUOTES, 'UTF-8'); ?></title>
  <meta name="description" content="<?php echo htmlspecialchars($_desc, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="keywords" content="<?php echo htmlspecialchars(implode(', ', $secondaryKeywords), ENT_QUOTES, 'UTF-8'); ?>">
  <link rel="canonical" href="<?php echo htmlspecialchars($_canonical, ENT_QUOTES, 'UTF-8'); ?>">

  <!-- Open Graph -->
  <meta property="og:type"        content="website">
  <meta property="og:title"       content="<?php echo htmlspecialchars($_title, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:description" content="<?php echo htmlspecialchars($_desc, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:url"         content="<?php echo htmlspecialchars($_canonical, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:image"       content="<?php echo htmlspecialchars($_ogImage, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:site_name"   content="<?php echo htmlspecialchars($siteName, ENT_QUOTES, 'UTF-8'); ?>">
  <meta property="og:locale"      content="en_US">

  <!-- Twitter Card -->
  <meta name="twitter:card"        content="summary_large_image">
  <meta name="twitter:title"       content="<?php echo htmlspecialchars($_title, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:description" content="<?php echo htmlspecialchars($_desc, ENT_QUOTES, 'UTF-8'); ?>">
  <meta name="twitter:image"       content="<?php echo htmlspecialchars($_ogImage, ENT_QUOTES, 'UTF-8'); ?>">

  <!-- DNS / Font preconnects -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">

  <!-- Google Fonts: Montserrat (headings) + Open Sans (body) -->
  <link rel="preload" as="style"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:ital,wght@0,400;0,500;0,600;1,400&display=swap">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&family=Open+Sans:ital,wght@0,400;0,500;0,600;1,400&display=swap">

<?php if (!empty($useSwiper)): ?>
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="<?php echo htmlspecialchars($cdnSwiperCss); ?>">
<?php endif; ?>

  <!-- Main stylesheet -->
  <link rel="stylesheet" href="/assets/css/framework.css">

  <!-- Favicons -->
  <link rel="icon" type="image/svg+xml" href="/assets/images/favicon.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-touch-icon.png">

  <!-- Google Analytics (replace G-XXXXXXXXXX with real ID) -->
  <!--
  <script async src="https://www.googletagmanager.com/gtag/js?id=<?php echo htmlspecialchars($googleAnalyticsId); ?>"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
    gtag('config', '<?php echo htmlspecialchars($googleAnalyticsId); ?>');
  </script>
  -->

<?php if (!empty($gscVerification) && (!isset($currentPage) || $currentPage === 'home')): ?>
  <!-- Google Search Console verification -->
  <meta name="google-site-verification" content="<?php echo htmlspecialchars($gscVerification); ?>">
<?php endif; ?>

  <!-- JSON-LD: LocalBusiness (every page) -->
  <script type="application/ld+json">
<?php echo json_encode($_localBizSchema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>
  </script>

<?php if (!empty($schemaMarkup)): ?>
  <!-- JSON-LD: Page-specific schema -->
  <script type="application/ld+json">
<?php echo $schemaMarkup; ?>
  </script>
<?php endif; ?>

</head>
<body>
