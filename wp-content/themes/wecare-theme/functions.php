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
