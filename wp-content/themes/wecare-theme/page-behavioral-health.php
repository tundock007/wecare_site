<?php
/**
 * Template Name: Behavioral Health Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">Behavioral Health Services</h1>
        <p class="page-subtitle">Supporting mental wellness for complete and independent lives</p>
    </div>
</section>

<!-- Service Detail -->
<section class="section service-detail-section">
    <div class="container">
        <div class="service-detail">
            <div class="service-row">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/behavioral-health.jpg" alt="Behavioral Health Services">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">Behavioral Health Services</h2>
                    <p>We support mental wellness to help individuals lead complete and independent lives through Adult Rehabilitative Mental Health Services (ARMHS) and Outpatient Therapy.</p>
                    
                    <h3>Adult Rehabilitative Mental Health Services (ARMHS)</h3>
                    <p>ARMHS provides community-based mental health services for adults with serious mental illness. Our services include:</p>
                    <ul class="service-list">
                        <li>Personalized one-on-one sessions</li>
                        <li>Skill-building in emotional management and daily tasks</li>
                        <li>Crisis assistance and intervention</li>
                        <li>Medication education and support</li>
                        <li>Community integration support</li>
                        <li>Fostering connections and shared growth</li>
                    </ul>

                    <h3>Outpatient Therapy</h3>
                    <p>Our licensed therapists provide individual, family, and group therapy services to address:</p>
                    <ul class="service-list">
                        <li>Depression and anxiety</li>
                        <li>Trauma and PTSD</li>
                        <li>Relationship issues</li>
                        <li>Life transitions and adjustments</li>
                        <li>Stress management</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Why Choose Section -->
        <div class="why-choose-section">
            <h2>Why Choose WeCare?</h2>
            <div class="features-grid">
                <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    <h3>Compassionate Care</h3>
                    <p>We treat every person with dignity, respect, and genuine concern</p>
                </div>
                <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <h3>Cultural Responsiveness</h3>
                    <p>Services tailored to diverse cultural backgrounds and languages</p>
                </div>
                <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <h3>Licensed Professionals</h3>
                    <p>Experienced, certified staff committed to your wellbeing</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today to discuss how our behavioral health services can support you or your loved one.</p>
        <div class="cta-buttons">
            <a href="tel:3202814449" class="btn btn-white">Call (320) 281-4449</a>
            <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-outline">Make a Referral</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
