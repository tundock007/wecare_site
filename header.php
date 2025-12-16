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
                            <!-- WeCare Logo - Two figures with heart -->
                            <svg width="55" height="45" viewBox="0 0 55 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Left figure -->
                                <circle cx="15" cy="10" r="5" fill="#3E645D"/>
                                <path d="M15 16C15 16 8 20 8 28C8 32 10 36 15 38" stroke="#3E645D" stroke-width="3" fill="none" stroke-linecap="round"/>
                                <!-- Right figure -->
                                <circle cx="40" cy="10" r="5" fill="#3E645D"/>
                                <path d="M40 16C40 16 47 20 47 28C47 32 45 36 40 38" stroke="#3E645D" stroke-width="3" fill="none" stroke-linecap="round"/>
                                <!-- Heart/connection in middle -->
                                <path d="M27.5 18C24 14 18 14 15 18C12 22 12 28 15 32L27.5 42L40 32C43 28 43 22 40 18C37 14 31 14 27.5 18Z" fill="#F7941D"/>
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
