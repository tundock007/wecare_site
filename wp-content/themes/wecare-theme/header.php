<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php
    // Open Graph Meta Tags for Social Sharing
    $og_title = is_front_page() ? get_bloginfo('name') . ' - Mental Health & Personal Care Services' : get_the_title() . ' | ' . get_bloginfo('name');
    $og_description = is_front_page()
        ? 'WeCare Minnesota provides compassionate mental health services, personal care assistance, and community support programs throughout Minnesota.'
        : (has_excerpt() ? get_the_excerpt() : 'WeCare Minnesota provides compassionate mental health services, personal care assistance, and community support programs.');
    $og_url = is_front_page() ? home_url('/') : get_permalink();
    // Default social sharing image - WeCare Brochure
    $og_image = get_template_directory_uri() . '/assets/Website Photos/WeCare Brochure - Home Page.webp';

    // Use featured image if available on single posts/pages
    if (is_singular() && has_post_thumbnail()) {
        $og_image = get_the_post_thumbnail_url(get_the_ID(), 'large');
    }
    ?>

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo esc_url($og_url); ?>">
    <meta property="og:title" content="<?php echo esc_attr($og_title); ?>">
    <meta property="og:description" content="<?php echo esc_attr($og_description); ?>">
    <meta property="og:image" content="<?php echo esc_url($og_image); ?>">
    <meta property="og:site_name" content="WeCare Minnesota">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="<?php echo esc_url($og_url); ?>">
    <meta name="twitter:title" content="<?php echo esc_attr($og_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($og_description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($og_image); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="site-branding">
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/wecare-logo.png" alt="WeCare Minnesota - Mental Health and Personal Care Services Logo" class="logo-image">
                </a>
            </div>

            <!-- Navigation Menu -->
            <nav id="site-navigation" class="main-navigation">
                <ul class="primary-menu">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo esc_url(home_url('/services')); ?>">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/behavioral-health')); ?>">ARMHS</a></li>
                            <li><a href="<?php echo esc_url(home_url('/adult-day')); ?>">Adult Day Services</a></li>
                            <li><a href="<?php echo esc_url(home_url('/outpatient-therapy')); ?>">Outpatient Therapy</a></li>
                            <li><a href="<?php echo esc_url(home_url('/cfss')); ?>">CFSS</a></li>
                            <li><a href="<?php echo esc_url(home_url('/mnsure-navigation')); ?>">MNSure Navigator</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/leadership')); ?>">Leadership</a></li>
                            <li><a href="<?php echo esc_url(home_url('/careers')); ?>">Careers</a></li>
                            <li><a href="<?php echo esc_url(home_url('/news')); ?>">News and Articles</a></li>
                            <li><a href="<?php echo esc_url(home_url('/community-resources')); ?>">Community Resources</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/referrals')); ?>">Referrals</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a></li>
                </ul>
            </nav>

            <!-- Header Actions -->
            <div class="header-actions">
                <div class="header-buttons">
                    <a href="<?php echo esc_url(home_url('/staff-access')); ?>" class="staff-access">Staff Access</a>
                    <a href="https://app.procentive.com/clientportal2/" class="client-login">Client Login</a>
                </div>
                <div class="header-info">
                    <span class="phone-number">For more information call: <a href="tel:3202814449">(320) 281-4449</a></span>
                </div>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                <span class="hamburger"></span>
            </button>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay">
        <div class="mobile-menu-content">
            <button class="mobile-menu-close" aria-label="Close Menu">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="18" y1="6" x2="6" y2="18"></line><line x1="6" y1="6" x2="18" y2="18"></line></svg>
            </button>
            <nav class="mobile-nav">
                <ul>
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="has-submenu">
                        <a href="<?php echo esc_url(home_url('/services')); ?>">Our Services</a>
                        <ul class="mobile-submenu">
                            <li><a href="<?php echo esc_url(home_url('/behavioral-health')); ?>">ARMHS</a></li>
                            <li><a href="<?php echo esc_url(home_url('/adult-day')); ?>">Adult Day Services</a></li>
                            <li><a href="<?php echo esc_url(home_url('/outpatient-therapy')); ?>">Outpatient Therapy</a></li>
                            <li><a href="<?php echo esc_url(home_url('/cfss')); ?>">CFSS</a></li>
                            <li><a href="<?php echo esc_url(home_url('/mnsure-navigation')); ?>">MNSure Navigator</a></li>
                        </ul>
                    </li>
                    <li class="has-submenu">
                        <a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a>
                        <ul class="mobile-submenu">
                            <li><a href="<?php echo esc_url(home_url('/leadership')); ?>">Leadership</a></li>
                            <li><a href="<?php echo esc_url(home_url('/careers')); ?>">Careers</a></li>
                            <li><a href="<?php echo esc_url(home_url('/news')); ?>">News and Articles</a></li>
                            <li><a href="<?php echo esc_url(home_url('/community-resources')); ?>">Community Resources</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/referrals')); ?>">Referrals</a></li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-actions">
                <a href="tel:3202814449" class="mobile-phone">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    (320) 281-4449
                </a>
                <a href="https://app.procentive.com/clientportal2/" class="btn btn-primary">Client Login</a>
            </div>
        </div>
    </div>
