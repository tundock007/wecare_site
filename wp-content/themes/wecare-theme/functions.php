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
 * Microsoft Graph API Email Configuration
 *
 * IMPORTANT: Set these constants in wp-config.php for security:
 * define('WECARE_MS_CLIENT_ID', 'your-client-id');
 * define('WECARE_MS_TENANT_ID', 'your-tenant-id');
 * define('WECARE_MS_CLIENT_SECRET', 'your-client-secret');
 */
if (!defined('WECARE_MS_CLIENT_ID')) {
    define('WECARE_MS_CLIENT_ID', '');
}
if (!defined('WECARE_MS_TENANT_ID')) {
    define('WECARE_MS_TENANT_ID', '');
}
if (!defined('WECARE_MS_CLIENT_SECRET')) {
    define('WECARE_MS_CLIENT_SECRET', '');
}
define('WECARE_MS_FROM_EMAIL', 'office@wecaremn.org');
define('WECARE_MS_TO_EMAILS', array('ola@wecaremn.org', 'anna.stefanelli@wecaremn.org'));

/**
 * Get Microsoft Graph API Access Token
 */
function wecare_get_ms_access_token() {
    $token_url = 'https://login.microsoftonline.com/' . WECARE_MS_TENANT_ID . '/oauth2/v2.0/token';

    $response = wp_remote_post($token_url, array(
        'body' => array(
            'client_id' => WECARE_MS_CLIENT_ID,
            'client_secret' => WECARE_MS_CLIENT_SECRET,
            'scope' => 'https://graph.microsoft.com/.default',
            'grant_type' => 'client_credentials'
        ),
        'timeout' => 30
    ));

    if (is_wp_error($response)) {
        return false;
    }

    $body = json_decode(wp_remote_retrieve_body($response), true);

    if (isset($body['access_token'])) {
        return $body['access_token'];
    }

    return false;
}

/**
 * Send Email via Microsoft Graph API
 */
function wecare_send_ms_email($to, $subject, $body_content, $reply_to = null) {
    $access_token = wecare_get_ms_access_token();

    if (!$access_token) {
        return array('success' => false, 'message' => 'Failed to authenticate with email service.');
    }

    $email_url = 'https://graph.microsoft.com/v1.0/users/' . WECARE_MS_FROM_EMAIL . '/sendMail';

    // Handle multiple recipients (array or single email)
    $to_recipients = array();
    if (is_array($to)) {
        foreach ($to as $email) {
            $to_recipients[] = array('emailAddress' => array('address' => $email));
        }
    } else {
        $to_recipients[] = array('emailAddress' => array('address' => $to));
    }

    $email_data = array(
        'message' => array(
            'subject' => $subject,
            'body' => array(
                'contentType' => 'HTML',
                'content' => $body_content
            ),
            'toRecipients' => $to_recipients,
            'from' => array(
                'emailAddress' => array(
                    'address' => WECARE_MS_FROM_EMAIL,
                    'name' => 'WeCare Website'
                )
            )
        ),
        'saveToSentItems' => true
    );

    // Add reply-to if provided
    if ($reply_to) {
        $email_data['message']['replyTo'] = array(
            array('emailAddress' => array('address' => $reply_to))
        );
    }

    $response = wp_remote_post($email_url, array(
        'headers' => array(
            'Authorization' => 'Bearer ' . $access_token,
            'Content-Type' => 'application/json'
        ),
        'body' => json_encode($email_data),
        'timeout' => 30
    ));

    if (is_wp_error($response)) {
        return array('success' => false, 'message' => 'Failed to send email: ' . $response->get_error_message());
    }

    $status_code = wp_remote_retrieve_response_code($response);

    if ($status_code === 202 || $status_code === 200) {
        return array('success' => true, 'message' => 'Email sent successfully.');
    }

    $body = json_decode(wp_remote_retrieve_body($response), true);
    $error_message = isset($body['error']['message']) ? $body['error']['message'] : 'Unknown error occurred.';

    return array('success' => false, 'message' => 'Failed to send email: ' . $error_message);
}

/**
 * Handle Contact Form AJAX Submission
 */
function wecare_handle_contact_form() {
    // Verify nonce
    if (!isset($_POST['nonce']) || !wp_verify_nonce($_POST['nonce'], 'wecare_contact_form')) {
        wp_send_json_error(array('message' => 'Security check failed. Please refresh the page and try again.'));
    }

    // Sanitize inputs
    $first_name = sanitize_text_field($_POST['first_name'] ?? '');
    $last_name = sanitize_text_field($_POST['last_name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');
    $phone = sanitize_text_field($_POST['phone'] ?? '');
    $subject_type = sanitize_text_field($_POST['subject'] ?? '');
    $message = sanitize_textarea_field($_POST['message'] ?? '');

    // Validate required fields
    if (empty($first_name) || empty($last_name) || empty($email) || empty($subject_type) || empty($message)) {
        wp_send_json_error(array('message' => 'Please fill in all required fields.'));
    }

    if (!is_email($email)) {
        wp_send_json_error(array('message' => 'Please enter a valid email address.'));
    }

    // Map subject types to readable labels
    $subject_labels = array(
        'general' => 'General Inquiry',
        'services' => 'Services Information',
        'referral' => 'Make a Referral',
        'careers' => 'Career Opportunities',
        'other' => 'Other'
    );
    $subject_label = $subject_labels[$subject_type] ?? 'Contact Form';

    // Build email subject
    $email_subject = "Website Contact: {$subject_label} - {$first_name} {$last_name}";

    // Build email body
    $email_body = "
    <html>
    <body style='font-family: Arial, sans-serif; line-height: 1.6; color: #333;'>
        <h2 style='color: #2e7d32;'>New Contact Form Submission</h2>
        <table style='width: 100%; max-width: 600px; border-collapse: collapse;'>
            <tr>
                <td style='padding: 10px; border-bottom: 1px solid #eee; font-weight: bold; width: 150px;'>Name:</td>
                <td style='padding: 10px; border-bottom: 1px solid #eee;'>{$first_name} {$last_name}</td>
            </tr>
            <tr>
                <td style='padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;'>Email:</td>
                <td style='padding: 10px; border-bottom: 1px solid #eee;'><a href='mailto:{$email}'>{$email}</a></td>
            </tr>
            <tr>
                <td style='padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;'>Phone:</td>
                <td style='padding: 10px; border-bottom: 1px solid #eee;'>" . ($phone ?: 'Not provided') . "</td>
            </tr>
            <tr>
                <td style='padding: 10px; border-bottom: 1px solid #eee; font-weight: bold;'>Subject:</td>
                <td style='padding: 10px; border-bottom: 1px solid #eee;'>{$subject_label}</td>
            </tr>
            <tr>
                <td style='padding: 10px; font-weight: bold; vertical-align: top;'>Message:</td>
                <td style='padding: 10px;'>" . nl2br(esc_html($message)) . "</td>
            </tr>
        </table>
        <p style='margin-top: 20px; font-size: 12px; color: #666;'>
            This message was sent from the WeCare website contact form.<br>
            Submitted on: " . (new DateTime('now', new DateTimeZone('America/Chicago')))->format('F j, Y \a\t g:i a') . " CT
        </p>
    </body>
    </html>
    ";

    // Send email
    $result = wecare_send_ms_email(WECARE_MS_TO_EMAILS, $email_subject, $email_body, $email);

    if ($result['success']) {
        wp_send_json_success(array('message' => 'Thank you! Your message has been sent. We\'ll get back to you soon.'));
    } else {
        wp_send_json_error(array('message' => $result['message']));
    }
}
add_action('wp_ajax_wecare_contact_form', 'wecare_handle_contact_form');
add_action('wp_ajax_nopriv_wecare_contact_form', 'wecare_handle_contact_form');

/**
 * Calculate Reading Time for Posts
 */
function wecare_reading_time() {
    $content = get_post_field('post_content', get_the_ID());
    $word_count = str_word_count(strip_tags($content));
    $reading_time = ceil($word_count / 200); // Average reading speed: 200 words per minute
    return max(1, $reading_time); // Minimum 1 minute
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

// Local Business Schema moved to end of file (more comprehensive version)

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

/**
 * Local Business Schema Markup for SEO
 */
function wecare_local_business_schema() {
    $schema = array(
        '@context' => 'https://schema.org',
        '@type' => 'MedicalBusiness',
        '@id' => 'https://wecaremn.org/#organization',
        'name' => 'WeCare',
        'alternateName' => 'WeCare Minnesota',
        'description' => 'WeCare provides compassionate mental health and personal care services in Central Minnesota and the Metro/Twin Cities area. We offer ARMHS, outpatient therapy, CFSS, adult day services, and MNsure navigation.',
        'url' => 'https://wecaremn.org',
        'logo' => get_template_directory_uri() . '/assets/images/wecare-logo.png',
        'image' => get_template_directory_uri() . '/assets/images/wecare-logo.png',
        'telephone' => '+1-320-281-4449',
        'email' => 'info@wecaremn.org',
        'address' => array(
            '@type' => 'PostalAddress',
            'streetAddress' => '136 Division St',
            'addressLocality' => 'Waite Park',
            'addressRegion' => 'MN',
            'postalCode' => '56387',
            'addressCountry' => 'US'
        ),
        'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => '45.5569',
            'longitude' => '-94.2244'
        ),
        'areaServed' => array(
            array(
                '@type' => 'State',
                'name' => 'Minnesota'
            ),
            array(
                '@type' => 'City',
                'name' => 'St. Cloud'
            ),
            array(
                '@type' => 'City',
                'name' => 'Minneapolis'
            ),
            array(
                '@type' => 'City',
                'name' => 'St. Paul'
            )
        ),
        'serviceType' => array(
            'Mental Health Services',
            'ARMHS (Adult Rehabilitative Mental Health Services)',
            'Outpatient Therapy',
            'CFSS (Community First Services and Supports)',
            'Personal Care Assistance',
            'Adult Day Services',
            'MNsure Navigation'
        ),
        'medicalSpecialty' => array(
            'Psychiatric',
            'Mental Health'
        ),
        'priceRange' => 'Medical Assistance Accepted',
        'paymentAccepted' => array(
            'Medical Assistance',
            'Medicare',
            'Insurance'
        ),
        'openingHoursSpecification' => array(
            array(
                '@type' => 'OpeningHoursSpecification',
                'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'),
                'opens' => '08:00',
                'closes' => '17:00'
            )
        ),
        'sameAs' => array(
            'https://www.google.com/maps/search/WeCare+136+Division+St+Waite+Park+MN'
        )
    );

    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
}
add_action('wp_head', 'wecare_local_business_schema');

/**
 * Service-specific Schema for Service Pages
 */
function wecare_service_schema() {
    if (!is_page()) return;

    $page_slug = get_post_field('post_name', get_post());
    $services = array(
        'behavioral-health' => array(
            'name' => 'Adult Rehabilitative Mental Health Services (ARMHS)',
            'description' => 'Community-based mental health rehabilitation services helping adults develop skills for independent living.',
            'serviceType' => 'Mental Health Rehabilitation'
        ),
        'outpatient-therapy' => array(
            'name' => 'Outpatient Therapy',
            'description' => 'Professional mental health counseling including individual, couples, family, and group therapy.',
            'serviceType' => 'Mental Health Counseling'
        ),
        'cfss' => array(
            'name' => 'Community First Services and Supports (CFSS)',
            'description' => 'In-home assistance with daily living activities for individuals with disabilities.',
            'serviceType' => 'Personal Care Assistance'
        ),
        'adult-day' => array(
            'name' => 'Adult Day Services',
            'description' => 'Structured daytime program providing activities, meals, health monitoring, and respite for families.',
            'serviceType' => 'Adult Day Care'
        ),
        'mnsure-navigation' => array(
            'name' => 'MNsure Navigation',
            'description' => 'Free assistance applying for health insurance coverage through MNsure.',
            'serviceType' => 'Health Insurance Navigation'
        )
    );

    if (isset($services[$page_slug])) {
        $service = $services[$page_slug];
        $schema = array(
            '@context' => 'https://schema.org',
            '@type' => 'MedicalService',
            'name' => $service['name'],
            'description' => $service['description'],
            'serviceType' => $service['serviceType'],
            'provider' => array(
                '@type' => 'MedicalBusiness',
                '@id' => 'https://wecaremn.org/#organization',
                'name' => 'WeCare'
            ),
            'areaServed' => array(
                '@type' => 'State',
                'name' => 'Minnesota'
            ),
            'availableChannel' => array(
                '@type' => 'ServiceChannel',
                'serviceLocation' => array(
                    '@type' => 'Place',
                    'name' => 'WeCare',
                    'address' => array(
                        '@type' => 'PostalAddress',
                        'streetAddress' => '136 Division St',
                        'addressLocality' => 'Waite Park',
                        'addressRegion' => 'MN',
                        'postalCode' => '56387'
                    )
                ),
                'servicePhone' => array(
                    '@type' => 'ContactPoint',
                    'telephone' => '+1-320-281-4449',
                    'contactType' => 'customer service'
                )
            )
        );

        echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) . '</script>' . "\n";
    }
}
add_action('wp_head', 'wecare_service_schema');
