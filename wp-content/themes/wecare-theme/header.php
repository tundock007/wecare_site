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
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/wecare-logo.png" alt="WeCare Logo" class="logo-image">
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
                    <li><a href="<?php echo esc_url(home_url('/referrals')); ?>">Referrals</a></li>
                    <li class="menu-item-has-children">
                        <a href="<?php echo esc_url(home_url('/about')); ?>">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="<?php echo esc_url(home_url('/leadership')); ?>">Leadership</a></li>
                            <li><a href="<?php echo esc_url(home_url('/careers')); ?>">Careers</a></li>
                            <li><a href="<?php echo esc_url(home_url('/news')); ?>">News and Articles</a></li>
                            <li><a href="<?php echo esc_url(home_url('/community-resources')); ?>">Community Resources</a></li>
                        </ul>
                    </li>
                    <li><a href="<?php echo esc_url(home_url('/contact')); ?>">Contact Us</a></li>
                </ul>
            </nav>

            <!-- Header Actions -->
            <div class="header-actions">
                <div class="header-buttons">
                    <a href="#" class="staff-access">Staff Access</a>
                    <a href="https://app.procentive.com/clientportal2/" class="client-login">Client Login</a>
                </div>
                <div class="header-info">
                    <span class="phone-number">For more information call: <a href="tel:3202814449">(320) 281-4449</a></span>
                </div>
            </div>
        </div>
    </header>
