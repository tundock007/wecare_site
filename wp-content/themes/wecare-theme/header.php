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
                <a href="<?php echo esc_url(home_url('/')); ?>" class="site-logo">
                    <div class="logo-icon">
                        <!-- WeCare Logo - Heart with figures -->
                        <svg width="55" height="45" viewBox="0 0 55 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Heart shape -->
                            <path d="M27.5 42C27.5 42 45 28 45 18C45 10 38 5 30 10C28 8 25 8 22 10C14 5 7 10 7 18C7 28 27.5 42 27.5 42Z" fill="#F7941D"/>
                            <!-- Left figure -->
                            <circle cx="18" cy="15" r="3" fill="#3E645D"/>
                            <path d="M18 19L18 30" stroke="#3E645D" stroke-width="2" stroke-linecap="round"/>
                            <path d="M15 24L21 24" stroke="#3E645D" stroke-width="2" stroke-linecap="round"/>
                            <!-- Right figure -->
                            <circle cx="37" cy="15" r="3" fill="#3E645D"/>
                            <path d="M37 19L37 30" stroke="#3E645D" stroke-width="2" stroke-linecap="round"/>
                            <path d="M34 24L40 24" stroke="#3E645D" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                    </div>
                    <div class="logo-text">
                        <h1 class="site-title">WeCare</h1>
                        <p class="site-tagline">Integrated Care, Mindful Wellbeing</p>
                    </div>
                </a>
            </div>

            <!-- Navigation Menu -->
            <nav id="site-navigation" class="main-navigation">
                <ul class="primary-menu">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">Home</a></li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo esc_url(home_url('/services')); ?>">Our Services</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/services/behavioral-health')); ?>">Behavioral Health Services</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services/housing')); ?>">Housing Stabilization</a></li>
                            <li><a href="<?php echo esc_url(home_url('/services/adult-day')); ?>">Adult Day Services</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/referrals')); ?>">Referrals</a></li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/about')); ?>">Our Story</a></li>
                            <li><a href="<?php echo esc_url(home_url('/team')); ?>">Our Team</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a></li>
                </ul>
            </nav>

            <!-- Header Actions -->
            <div class="header-actions">
                <div class="header-info">
                    <span class="phone-number">For more information call: (320) 281-4449</span>
                </div>
                <div class="header-buttons">
                    <a href="#" class="btn btn-outline staff-access">Staff Access</a>
                    <a href="#" class="btn btn-primary client-login">Client Login</a>
                </div>
            </div>
        </div>
    </header>
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
