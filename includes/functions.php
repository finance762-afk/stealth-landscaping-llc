<?php
/**
 * Stealth Landscaping LLC — Helper Functions
 * Included by head.php; available to all pages.
 */

/**
 * Returns true when the given slug matches the current page.
 */
function isActivePage($page) {
    global $currentPage;
    return isset($currentPage) && $currentPage === $page;
}

/**
 * Formats a 10- or 11-digit phone number as (XXX) XXX-XXXX.
 * Returns a placeholder string when $phone is empty.
 */
function formatPhone($phone) {
    $digits = preg_replace('/[^0-9]/', '', $phone);
    if (strlen($digits) === 10) {
        return '(' . substr($digits, 0, 3) . ') ' . substr($digits, 3, 3) . '-' . substr($digits, 6, 4);
    }
    if (strlen($digits) === 11 && $digits[0] === '1') {
        return '(' . substr($digits, 1, 3) . ') ' . substr($digits, 4, 3) . '-' . substr($digits, 7, 4);
    }
    return $phone ?: '(XXX) XXX-XXXX';
}

/**
 * Generates a URL-safe slug from a service name.
 * e.g. "Retaining Wall Contractor" → "retaining-wall-contractor"
 */
function getServiceSlug($name) {
    $slug = strtolower(trim($name));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Generates a URL-safe slug from a city name.
 * e.g. "Maple Valley" → "maple-valley"
 */
function getAreaSlug($city) {
    $slug = strtolower(trim($city));
    $slug = preg_replace('/[^a-z0-9]+/', '-', $slug);
    return trim($slug, '-');
}

/**
 * Returns a JSON-LD Service schema string for an individual service page.
 * @param  array  $service  — one entry from $services in config.php
 * @return string           — JSON-LD ready to echo inside <script type="application/ld+json">
 */
function generateServiceSchema($service) {
    global $siteName, $siteUrl, $address, $phone;

    $slug = isset($service['slug']) ? $service['slug'] : getServiceSlug($service['name']);

    $schema = [
        '@context'    => 'https://schema.org',
        '@type'       => 'Service',
        'name'        => $service['name'],
        'description' => isset($service['description']) ? $service['description'] : '',
        'url'         => $siteUrl . '/services/' . $slug,
        'provider'    => [
            '@type'     => 'LandscapingBusiness',
            '@id'       => $siteUrl . '/#business',
            'name'      => $siteName,
            'telephone' => $phone,
            'address'   => [
                '@type'           => 'PostalAddress',
                'streetAddress'   => $address['street'],
                'addressLocality' => $address['city'],
                'addressRegion'   => $address['state'],
                'postalCode'      => $address['zip'],
                'addressCountry'  => 'US',
            ],
        ],
        'areaServed' => [
            '@type'         => 'City',
            'name'          => $address['city'],
            'addressRegion' => $address['state'],
        ],
    ];

    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * Returns a JSON-LD FAQPage schema string.
 * @param  array  $faqs  — array of ['question' => '...', 'answer' => '...'] pairs
 *                         (also accepts 'q'/'a' shorthand keys)
 * @return string        — JSON-LD ready to echo inside <script type="application/ld+json">
 */
function generateFAQSchema($faqs) {
    $items = [];
    foreach ($faqs as $faq) {
        $q = isset($faq['question']) ? $faq['question'] : (isset($faq['q']) ? $faq['q'] : '');
        $a = isset($faq['answer'])   ? $faq['answer']   : (isset($faq['a']) ? $faq['a'] : '');
        $items[] = [
            '@type' => 'Question',
            'name'  => $q,
            'acceptedAnswer' => [
                '@type' => 'Answer',
                'text'  => $a,
            ],
        ];
    }

    $schema = [
        '@context'   => 'https://schema.org',
        '@type'      => 'FAQPage',
        'mainEntity' => $items,
    ];

    return json_encode($schema, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
}

/**
 * Outputs the three core SEO meta tags as an HTML string.
 * Primarily used by service and area pages that need unique tags.
 */
function generateMetaTags($title, $description, $canonical) {
    $out  = '<title>' . htmlspecialchars($title, ENT_QUOTES, 'UTF-8') . '</title>' . "\n";
    $out .= '  <meta name="description" content="' . htmlspecialchars($description, ENT_QUOTES, 'UTF-8') . '">' . "\n";
    $out .= '  <link rel="canonical" href="' . htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') . '">' . "\n";
    return $out;
}
