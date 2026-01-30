<?php
/**
 * Front Page Template - Clean & Simple
 *
 * @package WeCare
 */

get_header();
?>

<!-- Hero Section - Clean -->
<section class="hero-clean">
    <div class="hero-clean-container">
        <div class="hero-clean-content">
            <h1>Compassionate Mental Health & Personal Care Services</h1>
            <p>Culturally responsive care for adults in the greater St. Cloud area. We're here to help you or your loved ones live independently with dignity.</p>
            <div class="hero-clean-buttons">
                <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary">Our Services</a>
                <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-outline">Make a Referral</a>
            </div>
            <p class="hero-phone-line">
                <a href="tel:3202814449">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                    (320) 281-4449
                </a>
            </p>
        </div>
    </div>
</section>

<!-- Services - Simple Grid -->
<section class="section services-simple">
    <div class="container">
        <h2 class="section-title-center">How We Can Help</h2>

        <div class="services-simple-grid">
            <a href="<?php echo esc_url(home_url('/behavioral-health')); ?>" class="service-simple-card">
                <div class="service-simple-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </div>
                <h3>Mental Health Services</h3>
                <p>ARMHS and outpatient therapy for adults with mental health needs</p>
            </a>

            <a href="<?php echo esc_url(home_url('/cfss')); ?>" class="service-simple-card">
                <div class="service-simple-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                </div>
                <h3>CFSS / Personal Care</h3>
                <p>In-home assistance with daily living activities</p>
            </a>

            <a href="<?php echo esc_url(home_url('/adult-day')); ?>" class="service-simple-card">
                <div class="service-simple-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h3>Adult Day Services</h3>
                <p>Structured daytime program with activities and respite for families</p>
            </a>

            <a href="<?php echo esc_url(home_url('/mnsure-navigation')); ?>" class="service-simple-card">
                <div class="service-simple-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                </div>
                <h3>MNsure Navigation</h3>
                <p>Free help applying for health insurance coverage</p>
            </a>
        </div>
    </div>
</section>

<!-- Why WeCare - Simple -->
<section class="section why-simple">
    <div class="container">
        <div class="why-simple-content">
            <h2>Why Families Choose WeCare</h2>
            <ul class="why-simple-list">
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span><strong>Culturally Responsive</strong> — Care that respects your background and values</span>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span><strong>Medical Assistance Accepted</strong> — We work with MA and most insurance plans</span>
                </li>
                <li>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <span><strong>Experienced Team</strong> — Dedicated professionals committed to your wellbeing</span>
                </li>
            </ul>
            <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-secondary">Learn About Us</a>
        </div>
    </div>
</section>

<!-- CTA - Simple -->
<section class="section cta-simple">
    <div class="container">
        <div class="cta-simple-content">
            <h2>Ready to Get Started?</h2>
            <p>Contact us today to learn how we can support you or your loved one.</p>
            <div class="cta-simple-buttons">
                <a href="tel:3202814449" class="btn btn-white">Call (320) 281-4449</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline-white">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
