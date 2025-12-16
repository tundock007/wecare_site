<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="header-container">
            <!-- Logo -->
            <div class="site-branding">
                <?php if (has_custom_logo()) : ?>
                    <?php the_custom_logo(); ?>
                <?php else : ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                        <span class="logo-icon">
                            <svg width="50" height="40" viewBox="0 0 50 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M25 5C20 0 10 0 5 5C0 10 0 20 5 25L25 40L45 25C50 20 50 10 45 5C40 0 30 0 25 5Z" fill="#E87722"/>
                                <circle cx="15" cy="12" r="4" fill="#2E5984"/>
                                <circle cx="35" cy="12" r="4" fill="#2E5984"/>
                                <path d="M15 16C15 16 20 28 25 28C30 28 35 16 35 16" stroke="#2E5984" stroke-width="3" fill="none"/>
                            </svg>
                        </span>
                        <span class="logo-text">
                            <span class="logo-name">WeCare</span>
                            <span class="logo-tagline">Integrated Care. <em>Mindful Wellbeing</em></span>
                        </span>
                    </a>
                <?php endif; ?>
            </div>

            <!-- Main Navigation -->
            <nav id="site-navigation" class="main-navigation">
                <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id'        => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => 'wecare_fallback_menu',
                ));
                ?>
            </nav>

            <!-- Header Right Side -->
            <div class="header-right">
                <div class="header-phone">
                    <span>For more information call:</span>
                    <a href="tel:3202814449">(320) 281-4449</a>
                </div>
                <div class="header-buttons">
                    <a href="<?php echo esc_url(home_url('/staff-access')); ?>" class="btn btn-staff">Staff Access</a>
                    <a href="<?php echo esc_url(home_url('/client-login')); ?>" class="btn btn-client">Client Login</a>
                </div>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="mobile-menu-toggle" aria-label="Toggle Menu">
                <span class="hamburger"></span>
            </button>
        </div>
    </header>
