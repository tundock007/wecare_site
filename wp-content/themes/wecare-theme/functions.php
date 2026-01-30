<?php
/**
 * WeCare Theme Functions
 *
 * @package WeCare
 * @version 1.0.0
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Theme Setup
 */
function wecare_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-width'  => true,
        'flex-height' => true,
    ));
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('responsive-embeds');
    
    register_nav_menus(array(
        'primary'   => __('Primary Menu', 'wecare'),
        'footer'    => __('Footer Menu', 'wecare'),
    ));
    
    if (!isset($content_width)) {
        $content_width = 1200;
    }
}
add_action('after_setup_theme', 'wecare_theme_setup');

/**
 * Enqueue Scripts and Styles
 */
function wecare_enqueue_assets() {
    // Adobe Fonts (Museo) - You'll need to add your Adobe Fonts project ID
    // wp_enqueue_style('wecare-adobe-fonts', 'https://use.typekit.net/YOUR_PROJECT_ID.css', array(), null);
    
    // Google Fonts - Museo alternative (Josefin Sans) and Century Gothic alternative (Poppins)
    wp_enqueue_style(
        'wecare-google-fonts',
        'https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;600;700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap',
        array(),
        null
    );
    
    wp_enqueue_style(
        'wecare-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );
    
    wp_enqueue_script(
        'wecare-scripts',
        get_template_directory_uri() . '/assets/js/main.js',
        array('jquery'),
        wp_get_theme()->get('Version'),
        true
    );
}
add_action('wp_enqueue_scripts', 'wecare_enqueue_assets');

/**
 * Register Widget Areas
 */
function wecare_widgets_init() {
    register_sidebar(array(
        'name'          => __('Sidebar', 'wecare'),
        'id'            => 'sidebar-1',
        'description'   => __('Add widgets here.', 'wecare'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    
    register_sidebar(array(
        'name'          => __('Footer Widget 1', 'wecare'),
        'id'            => 'footer-1',
        'before_widget' => '<div id="%1$s" class="footer-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="footer-widget-title">',
        'after_title'   => '</h4>',
    ));
}
add_action('widgets_init', 'wecare_widgets_init');

/**
 * Custom Excerpt Length
 */
function wecare_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'wecare_excerpt_length');

/**
 * Add custom image sizes
 */
add_image_size('wecare-featured', 800, 500, true);
add_image_size('wecare-thumbnail', 400, 300, true);
add_image_size('wecare-service', 600, 400, true);
add_image_size('wecare-hero', 1920, 800, true);

/**
 * Fallback Menu
 */
function wecare_fallback_menu() {
    ?>
    <ul id="primary-menu">
        <li class="current-menu-item"><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
        <li class="menu-item-has-children">
            <a href="<?php echo esc_url(home_url('/services')); ?>">Our Services</a>
            <ul class="sub-menu">
                <li><a href="<?php echo esc_url(home_url('/services/behavioral-health')); ?>">Behavioral Health</a></li>
                <li><a href="<?php echo esc_url(home_url('/services/pca')); ?>">Personal Care Assistance</a></li>
                <li><a href="<?php echo esc_url(home_url('/services/housing')); ?>">Housing Stabilization</a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url(home_url('/referrals')); ?>">Referrals</a></li>
        <li class="menu-item-has-children">
            <a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a>
            <ul class="sub-menu">
                <li><a href="<?php echo esc_url(home_url('/about/team')); ?>">Our Team</a></li>
                <li><a href="<?php echo esc_url(home_url('/about/careers')); ?>">Careers</a></li>
            </ul>
        </li>
        <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a></li>
    </ul>
    <?php
}

/**
 * Add dropdown class to menu items with children
 */
function wecare_add_menu_parent_class($items) {
    $parents = array();
    foreach ($items as $item) {
        if ($item->menu_item_parent && $item->menu_item_parent > 0) {
            $parents[] = $item->menu_item_parent;
        }
    }
    foreach ($items as $item) {
        if (in_array($item->ID, $parents)) {
            $item->classes[] = 'menu-item-has-children';
        }
    }
    return $items;
}
add_filter('wp_nav_menu_objects', 'wecare_add_menu_parent_class');

/**
 * SEO Enhancements
 */

// Add meta description
function wecare_meta_description() {
    if (is_front_page()) {
        $description = 'WeCare provides compassionate mental health services in Central Minnesota and the Metro/Twin Cities, plus CFSS personal care and adult day services. Culturally responsive care.';
    } elseif (is_page('about')) {
        $description = 'Learn about WeCare - our mission, values, and dedicated team providing mental health and personal care services in Central Minnesota.';
    } elseif (is_page('services')) {
        $description = 'WeCare offers ARMHS and outpatient therapy in Central MN and Metro/Twin Cities, plus CFSS, adult day programs, and MNsure navigation. Medical Assistance accepted.';
    } elseif (is_page('behavioral-health')) {
        $description = 'Adult Rehabilitative Mental Health Services (ARMHS) and outpatient therapy in Central Minnesota and Metro/Twin Cities. Personalized mental health support for adults 18+.';
    } elseif (is_page('adult-day')) {
        $description = 'Adult Day Services in St. Cloud, MN. Structured daytime program with activities, meals, health monitoring, and respite for families.';
    } elseif (is_page('cfss') || is_page('pca')) {
        $description = 'CFSS (Community First Services and Supports) in Central Minnesota. In-home help with daily living activities. Medical Assistance accepted.';
    } elseif (is_page('outpatient-therapy')) {
        $description = 'Outpatient mental health therapy in Central Minnesota and Metro/Twin Cities. Individual, couples, family, and group therapy for anxiety, depression, trauma, and more.';
    } elseif (is_page('referrals')) {
        $description = 'Make a referral to WeCare for mental health services, CFSS, or adult day programs in St. Cloud, MN. Healthcare providers and families welcome.';
    } elseif (is_page('contact')) {
        $description = 'Contact WeCare in St. Cloud, Minnesota. Call (320) 281-4449 for mental health services, CFSS, and adult day programs.';
    } elseif (is_page('careers')) {
        $description = 'Join the WeCare team in St. Cloud, MN. Career opportunities in mental health, CFSS services, and adult day programs.';
    } else {
        $description = 'WeCare - Mental health services, personal care assistance, and adult day programs in St. Cloud, Minnesota.';
    }
    echo '<meta name="description" content="' . esc_attr($description) . '">' . "\n";
}
add_action('wp_head', 'wecare_meta_description', 1);

// Add Open Graph tags for social sharing
function wecare_open_graph_tags() {
    $og_title = wp_get_document_title();
    $og_url = get_permalink();
    $og_image = get_template_directory_uri() . '/assets/images/wecare-og-image.jpg';

    if (is_front_page()) {
        $og_description = 'Compassionate mental health services and personal care assistance in St. Cloud, Minnesota.';
        $og_url = home_url('/');
    } else {
        $og_description = get_the_excerpt() ?: 'WeCare - Mental health and personal care services in Central Minnesota.';
    }
    ?>
    <meta property="og:title" content="<?php echo esc_attr($og_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($og_description); ?>">
    <meta property="og:url" content="<?php echo esc_url($og_url); ?>">
    <meta property="og:image" content="<?php echo esc_url($og_image); ?>">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="WeCare">
    <meta property="og:locale" content="en_US">
    <meta name="twitter:card" content="summary_large_image">
    <?php
}
add_action('wp_head', 'wecare_open_graph_tags', 2);

// Add Local Business Schema (JSON-LD)
function wecare_local_business_schema() {
    if (!is_front_page() && !is_page('contact')) return;
    ?>
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "MedicalBusiness",
        "name": "WeCare",
        "description": "Mental health services, personal care assistance, and adult day programs in St. Cloud, Minnesota",
        "url": "<?php echo home_url('/'); ?>",
        "telephone": "+1-320-281-4449",
        "email": "info@wecaremn.org",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "136 Division Street",
            "addressLocality": "Waite Park",
            "addressRegion": "MN",
            "postalCode": "56387",
            "addressCountry": "US"
        },
        "areaServed": [
            {"@type": "City", "name": "St. Cloud"},
            {"@type": "City", "name": "Waite Park"},
            {"@type": "City", "name": "Minneapolis"},
            {"@type": "City", "name": "St. Paul"},
            {"@type": "County", "name": "Stearns County"},
            {"@type": "County", "name": "Benton County"},
            {"@type": "County", "name": "Sherburne County"},
            {"@type": "County", "name": "Wright County"},
            {"@type": "County", "name": "Hennepin County"},
            {"@type": "County", "name": "Ramsey County"}
        ],
        "medicalSpecialty": [
            "Mental Health",
            "Psychiatric",
            "Rehabilitation"
        ],
        "availableService": [
            {
                "@type": "MedicalTherapy",
                "name": "Adult Rehabilitative Mental Health Services (ARMHS)"
            },
            {
                "@type": "MedicalTherapy",
                "name": "Outpatient Therapy"
            },
            {
                "@type": "Service",
                "name": "CFSS (Community First Services and Supports)"
            },
            {
                "@type": "Service",
                "name": "Adult Day Services"
            }
        ],
        "openingHours": "Mo-Fr 08:00-17:00",
        "priceRange": "Accepts Medical Assistance"
    }
    </script>
    <?php
}
add_action('wp_head', 'wecare_local_business_schema', 3);

// Add canonical URL
function wecare_canonical_url() {
    if (is_front_page()) {
        $canonical = home_url('/');
    } else {
        $canonical = get_permalink();
    }
    echo '<link rel="canonical" href="' . esc_url($canonical) . '">' . "\n";
}
add_action('wp_head', 'wecare_canonical_url', 4);

/**
 * Auto-create required pages on theme activation
 */
function wecare_create_required_pages() {
    $pages = array(
        'privacy' => array(
            'title' => 'Data Privacy Notice',
            'template' => 'page-privacy.php'
        ),
        'non-discrimination' => array(
            'title' => 'Non-Discrimination Notice',
            'template' => 'page-non-discrimination.php'
        )
    );

    foreach ($pages as $slug => $page_data) {
        // Check if page exists
        $existing_page = get_page_by_path($slug);

        if (!$existing_page) {
            // Create the page
            $page_id = wp_insert_post(array(
                'post_title'     => $page_data['title'],
                'post_name'      => $slug,
                'post_status'    => 'publish',
                'post_type'      => 'page',
                'post_content'   => '',
                'comment_status' => 'closed'
            ));

            // Set page template
            if ($page_id && !is_wp_error($page_id)) {
                update_post_meta($page_id, '_wp_page_template', $page_data['template']);
            }
        }
    }
}
add_action('init', 'wecare_create_required_pages');
