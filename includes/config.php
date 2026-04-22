<?php
/**
 * Stealth Landscaping LLC — Site Configuration
 * Auto-generated from build-plan.json (Phase 1 Scaffold)
 * Do NOT hardcode values in page files — reference these variables.
 */

// ─── Company Identity ──────────────────────────────────────────────────────
$siteName       = 'Stealth Landscaping LLC';
$tagline        = 'Transforming yards without a trace';
$companyName    = 'Stealth Landscaping LLC';
$ownerName      = '';                          // TODO: fill in owner name
$yearEstablished = 2021;                       // ~4 years in business as of 2025
$yearsInBusiness = 4;
$industry       = 'landscaping';
$clientSlug     = 'stealth-landscaping-llc';

// ─── Contact ───────────────────────────────────────────────────────────────
$phone          = '';                          // TODO: fill in phone
$phoneSecondary = '';
$email          = '';                          // TODO: fill in email

// ─── Address (NAP — must match Google Business Profile exactly) ────────────
$address = [
    'street' => '22015 SE 295th Pl',
    'city'   => 'Black Diamond',
    'state'  => 'WA',
    'zip'    => '98010',
];
$addressFull   = '22015 SE 295th Pl, Black Diamond, WA 98010';
$addressCity   = 'Black Diamond';
$addressState  = 'WA';

// ─── Domain & URLs ─────────────────────────────────────────────────────────
$domain        = 'stealthlandscapingllc.com';   // TODO: confirm final domain
$siteUrl       = 'https://stealthlandscapingllc.com';

// ─── Form ──────────────────────────────────────────────────────────────────
$formAction    = 'https://design.pageone.cloud/api/leads/stealth-landscaping-llc';

// ─── Analytics ─────────────────────────────────────────────────────────────
$googleAnalyticsId = 'G-XXXXXXXXXX';           // TODO: replace with real GA4 ID
$gscVerification   = '';                       // TODO: GSC verification meta tag

// ─── Design Tokens (mirrors framework.css :root) ──────────────────────────
$colors = [
    'primary'       => '#1a2b3c',
    'primaryRgb'    => '26, 43, 60',
    'primaryDark'   => '#0f1a24',
    'secondary'     => '#4d5e6f',
    'accent'        => '#06b6d4',
    'bgDark'        => '#0f1a24',
];

// ─── SEO ───────────────────────────────────────────────────────────────────
$primaryKeyword     = 'landscaping black diamond wa';
$secondaryKeywords  = [
    'landscaping near me black diamond',
    'landscape design black diamond wa',
    'hardscape contractor black diamond',
    'paver installation black diamond wa',
    'retaining wall contractor black diamond',
    'turf installation black diamond wa',
    'outdoor living spaces black diamond',
    'landscape lighting black diamond',
    'sod installation black diamond wa',
    'fire pit installation black diamond',
    'landscaping company black diamond washington',
    'patio installation black diamond wa',
];

// ─── Social Links ──────────────────────────────────────────────────────────
$socialLinks = [
    'facebook'  => '',   // TODO: fill in Facebook URL
    'instagram' => '',   // TODO: fill in Instagram URL
    'google'    => '',   // TODO: Google Business Profile URL
];

// ─── Services (Standard Tier — each gets an individual page) ───────────────
$services = [
    [
        'name'        => 'Landscaping',
        'slug'        => 'landscaping',
        'description' => 'Professional landscaping services to transform your outdoor space with expert design and installation. Create beautiful, functional landscapes that enhance your property value and curb appeal.',
        'keywords'    => [
            'landscaping Black Diamond WA',
            'landscape design Black Diamond',
            'professional landscaper Washington',
            'outdoor landscaping services',
            'Black Diamond landscaping company',
        ],
    ],
    [
        'name'        => 'Turf Installation',
        'slug'        => 'turf-installation',
        'description' => 'Expert turf installation services providing lush, green lawns that require minimal maintenance. Perfect for residential and commercial properties seeking instant, beautiful grass coverage.',
        'keywords'    => [
            'turf installation Black Diamond WA',
            'artificial turf Black Diamond',
            'synthetic grass Washington',
            'lawn turf services',
            'turf contractor Black Diamond',
        ],
    ],
    [
        'name'        => 'Hardscape Design',
        'slug'        => 'hardscape-design',
        'description' => 'Custom hardscape design and installation featuring patios, walkways, and stone features. Transform your outdoor space with durable, low-maintenance hardscaping solutions.',
        'keywords'    => [
            'hardscape design Black Diamond WA',
            'hardscaping contractor Black Diamond',
            'stone hardscape Washington',
            'outdoor hardscaping',
            'hardscape installation Black Diamond',
        ],
    ],
    [
        'name'        => 'Sod Installation',
        'slug'        => 'sod-installation',
        'description' => 'Professional sod installation for instant, beautiful lawns that establish quickly and thrive. Quality sod selection and expert installation for lasting results.',
        'keywords'    => [
            'sod installation Black Diamond WA',
            'sod contractor Black Diamond',
            'lawn sod Washington',
            'grass sod installation',
            'sod services Black Diamond',
        ],
    ],
    [
        'name'        => 'Flower Bed Installation',
        'slug'        => 'flower-bed-installation',
        'description' => 'Beautiful flower bed design and installation to add color and seasonal interest to your landscape. Custom plantings tailored to your style and local growing conditions.',
        'keywords'    => [
            'flower bed installation Black Diamond WA',
            'flower garden design Black Diamond',
            'perennial beds Washington',
            'landscape flower beds',
            'garden bed installation Black Diamond',
        ],
    ],
    [
        'name'        => 'Plant Installation',
        'slug'        => 'plant-installation',
        'description' => 'Expert plant selection and installation services for thriving gardens and landscapes. Professional planting techniques ensure healthy establishment and long-term success.',
        'keywords'    => [
            'plant installation Black Diamond WA',
            'landscape planting services',
            'garden plant installation',
            'plant contractor Black Diamond',
            'professional planting Washington',
        ],
    ],
    [
        'name'        => 'Shrub Trimming',
        'slug'        => 'shrub-trimming',
        'description' => 'Professional shrub trimming and pruning services to maintain healthy, attractive plants. Regular maintenance keeps your landscape looking neat and promotes plant health.',
        'keywords'    => [
            'shrub trimming Black Diamond WA',
            'bush pruning Black Diamond',
            'landscape maintenance Washington',
            'shrub care services',
            'plant trimming Black Diamond',
        ],
    ],
    [
        'name'        => 'Tree Planting',
        'slug'        => 'tree-planting',
        'description' => 'Professional tree planting services with proper selection, placement, and installation techniques. Add shade, beauty, and value to your property with expertly planted trees.',
        'keywords'    => [
            'tree planting Black Diamond WA',
            'tree installation Black Diamond',
            'tree services Washington',
            'landscape trees',
            'tree contractor Black Diamond',
        ],
    ],
    [
        'name'        => 'Mulch Installation',
        'slug'        => 'mulch-installation',
        'description' => 'Quality mulch installation to enhance plant health, retain moisture, and create polished landscape beds. Professional application for both aesthetic and functional benefits.',
        'keywords'    => [
            'mulch installation Black Diamond WA',
            'landscape mulching Black Diamond',
            'mulch services Washington',
            'garden mulch installation',
            'mulch contractor Black Diamond',
        ],
    ],
    [
        'name'        => 'Landscape Lighting',
        'slug'        => 'landscape-lighting',
        'description' => 'Professional landscape lighting design and installation to showcase your property and provide safety. Energy-efficient LED lighting solutions for beautiful nighttime ambiance.',
        'keywords'    => [
            'landscape lighting Black Diamond WA',
            'outdoor lighting Black Diamond',
            'garden lighting Washington',
            'landscape lights installation',
            'outdoor lighting contractor Black Diamond',
        ],
    ],
    [
        'name'        => 'Patio Installation',
        'slug'        => 'patio-installation',
        'description' => 'Custom patio installation using quality materials for durable, beautiful outdoor living spaces. Create the perfect area for entertaining and relaxation.',
        'keywords'    => [
            'patio installation Black Diamond WA',
            'patio contractor Black Diamond',
            'outdoor patio Washington',
            'stone patio installation',
            'patio construction Black Diamond',
        ],
    ],
    [
        'name'        => 'Paver Installation',
        'slug'        => 'paver-installation',
        'description' => 'Expert paver installation for walkways, driveways, and patios with lasting beauty and durability. Professional installation ensures proper drainage and long-term stability.',
        'keywords'    => [
            'paver installation Black Diamond WA',
            'paver contractor Black Diamond',
            'paving stone installation',
            'driveway pavers Washington',
            'walkway pavers Black Diamond',
        ],
    ],
    [
        'name'        => 'Retaining Walls',
        'slug'        => 'retaining-walls',
        'description' => 'Professional retaining wall construction for erosion control and landscape functionality. Custom designs using quality materials for both beauty and structural integrity.',
        'keywords'    => [
            'retaining wall contractor Black Diamond WA',
            'retaining walls Black Diamond',
            'stone retaining walls Washington',
            'retaining wall installation',
            'retaining wall builder Black Diamond',
        ],
    ],
    [
        'name'        => 'Walkway Installation',
        'slug'        => 'walkway-installation',
        'description' => 'Beautiful walkway installation using pavers, stone, or concrete for safe and attractive pathways. Connect outdoor spaces with professionally installed walkways.',
        'keywords'    => [
            'walkway installation Black Diamond WA',
            'walkway contractor Black Diamond',
            'garden walkways Washington',
            'stone walkway installation',
            'pathway construction Black Diamond',
        ],
    ],
    [
        'name'        => 'Outdoor Living Spaces',
        'slug'        => 'outdoor-living-spaces',
        'description' => 'Complete outdoor living space design and construction for entertainment and relaxation. Custom outdoor kitchens, seating areas, and recreational spaces.',
        'keywords'    => [
            'outdoor living space Black Diamond WA',
            'outdoor living contractor Black Diamond',
            'backyard design Washington',
            'outdoor entertainment area',
            'outdoor room construction Black Diamond',
        ],
    ],
    [
        'name'        => 'Fire Pit Installation',
        'slug'        => 'fire-pit-installation',
        'description' => 'Custom fire pit installation for cozy outdoor gatherings and extended outdoor living seasons. Professional installation ensures safety and compliance with local codes.',
        'keywords'    => [
            'fire pit installation Black Diamond WA',
            'fire pit contractor Black Diamond',
            'outdoor fire pit Washington',
            'backyard fire pit installation',
            'fire feature Black Diamond',
        ],
    ],
    [
        'name'        => 'Stone Landscaping',
        'slug'        => 'stone-landscaping',
        'description' => 'Expert stone landscaping featuring natural stone elements for timeless beauty and durability. Create stunning focal points with professional stone installation and design.',
        'keywords'    => [
            'stone landscaping Black Diamond WA',
            'stone contractor Black Diamond',
            'natural stone installation',
            'decorative stone Washington',
            'landscape stone work Black Diamond',
        ],
    ],
    [
        'name'        => 'Hydro Seeding',
        'slug'        => 'hydro-seeding',
        'description' => 'Professional hydro seeding services for fast, uniform grass establishment on large areas. Cost-effective solution for erosion control and lawn installation on slopes and difficult terrain.',
        'keywords'    => [
            'hydro seeding Black Diamond WA',
            'hydroseeding contractor Black Diamond',
            'erosion control seeding Washington',
            'slope seeding services',
            'hydroseed lawn installation Black Diamond',
        ],
    ],
];

// ─── Service Areas (within ~30-mile radius of Black Diamond, WA) ───────────
$serviceAreas = [
    [
        'city'    => 'Black Diamond',
        'state'   => 'WA',
        'zip'     => '98010',
        'slug'    => 'black-diamond',
        'primary' => true,
        'county'  => 'King County',
    ],
    [
        'city'    => 'Maple Valley',
        'state'   => 'WA',
        'zip'     => '98038',
        'slug'    => 'maple-valley',
        'primary' => false,
        'county'  => 'King County',
    ],
    [
        'city'    => 'Covington',
        'state'   => 'WA',
        'zip'     => '98042',
        'slug'    => 'covington',
        'primary' => false,
        'county'  => 'King County',
    ],
    [
        'city'    => 'Auburn',
        'state'   => 'WA',
        'zip'     => '98001',
        'slug'    => 'auburn',
        'primary' => false,
        'county'  => 'King County',
    ],
    [
        'city'    => 'Kent',
        'state'   => 'WA',
        'zip'     => '98031',
        'slug'    => 'kent',
        'primary' => false,
        'county'  => 'King County',
    ],
    [
        'city'    => 'Enumclaw',
        'state'   => 'WA',
        'zip'     => '98022',
        'slug'    => 'enumclaw',
        'primary' => false,
        'county'  => 'King County',
    ],
    [
        'city'    => 'Renton',
        'state'   => 'WA',
        'zip'     => '98055',
        'slug'    => 'renton',
        'primary' => false,
        'county'  => 'King County',
    ],
    [
        'city'    => 'Bonney Lake',
        'state'   => 'WA',
        'zip'     => '98391',
        'slug'    => 'bonney-lake',
        'primary' => false,
        'county'  => 'Pierce County',
    ],
];

// ─── Page Inventory (Standard Tier) ────────────────────────────────────────
// Home, Services Main, Individual Service Pages, Service Area, About, Contact
$pages = [
    ['label' => 'Home',          'url' => '/',              'file' => 'index.php'],
    ['label' => 'Services',      'url' => '/services',      'file' => 'services.php'],
    ['label' => 'Service Area',  'url' => '/service-area',  'file' => 'service-area.php'],
    ['label' => 'About',         'url' => '/about',         'file' => 'about.php'],
    ['label' => 'Contact',       'url' => '/contact',       'file' => 'contact.php'],
];

// ─── CDN / Library URLs ────────────────────────────────────────────────────
$cdnVanillaTilt = 'https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js';
$cdnSwiper      = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js';
$cdnSwiperCss   = 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css';
$cdnLucide      = 'https://unpkg.com/lucide@latest/dist/umd/lucide.min.js';

// ─── Image Assets (CDN-hosted client photos) ──────────────────────────────
$logoUrl        = 'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/logo/1776881917743-03mq71-LOGO.jpg';
$clientImages   = [
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882165987-o48bbt-476838525_600748216201820_748426725283316970_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882168796-wfk739-476447512_600748472868461_2085733525428245340_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882169886-zumrl6-476970951_600748279535147_2454841176023009144_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882170886-b454np-476438391_600748242868484_9158021627356401675_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882171886-krjqk6-470151634_559327367010572_1658016945689743082_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882172886-hb47zh-474949080_592043057072336_6217023361076956896_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882173906-4x8815-475408102_596159063327402_4273029393016449364_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882174916-d2w4tw-475782543_596159099994065_8658163991555833250_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882175736-83qy22-476178906_598580406418601_7388660973452633885_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882176657-u9pm95-476131130_598580063085302_6283718915473307541_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882183254-m41xew-654737533_924371460506159_1204198002220312814_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882184200-n2twfe-667600495_940140072262631_4268926151693120107_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882185706-vj2v5g-672593985_944889568454348_2551542742170107144_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882186626-xselew-672160773_947137551562883_138255981281806244_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882187466-8iy5ik-484325754_625003943776247_7216316206338140477_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882188296-jrh6u4-483901799_625003940442914_5415290212289265101_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882189126-s6k344-484570541_628836320059676_8380324446249689816_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882190006-srxy2u-501040575_687414070868567_6832139225320749528_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882191006-sarwiu-500440541_687414080868566_1775745524963530373_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882191956-ioxf8u-515504932_711986305078010_6503973730186319766_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882192826-o2zx3p-517583215_716036428006331_7527823111543929119_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882193726-vljoxj-518186759_722109957398978_8769615942659421502_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882194596-trnfzi-519619423_726838480259459_3679517272379643472_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882195486-qnw3er-536594570_752497764360197_6910562234587294432_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882196376-4cgauh-537094789_752497841026856_6785418985334364111_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882197216-u4tc5x-542756182_763687466574560_7991976466066573665_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882198036-eask84-588809494_832655829677723_5268254067746049681_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882198836-8e4rd2-585384953_832655876344385_8536912022654507205_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882199646-yy27f8-618717508_876432508633388_2176123547740699668_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882200546-5gxbdp-634049931_899900082953297_302801689911434020_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882201436-8zgr97-636730971_899900092953296_1012282121164362445_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882202322-3w41eg-637778443_899900119619960_670662525527550542_n.jpg',
    'https://db.pageone.cloud/storage/v1/object/public/client-assets/stealth-landscaping-llc/photos/1776882203206-ixp1vh-638724150_901208359489136_6309301160587316557_n.jpg',
];
