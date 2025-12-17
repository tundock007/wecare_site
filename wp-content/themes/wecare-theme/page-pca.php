<?php
/**
 * Template Name: PCA Services Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">Personal Care Assistance (PCA)</h1>
        <p class="page-subtitle">Supporting independence and quality of life at home</p>
    </div>
</section>

<!-- Service Detail -->
<section class="section service-detail-section">
    <div class="container">
        <div class="service-detail">
            <div class="service-row">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pca-services.jpg" alt="Personal Care Assistance">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">Personal Care Assistance (PCA)</h2>
                    <p>Our Personal Care Assistance program helps individuals maintain their independence and quality of life in the comfort of their own homes.</p>
                    
                    <h3>What We Provide</h3>
                    <ul class="service-list">
                        <li>Assistance with daily living activities (bathing, dressing, grooming)</li>
                        <li>Mobility assistance and transfers</li>
                        <li>Meal preparation and nutrition support</li>
                        <li>Medication reminders</li>
                        <li>Light housekeeping</li>
                        <li>Transportation to appointments</li>
                        <li>Companionship and emotional support</li>
                    </ul>

                    <h3>Who Qualifies</h3>
                    <p>PCA services are available to individuals who:</p>
                    <ul class="service-list">
                        <li>Have a medical condition requiring assistance</li>
                        <li>Are enrolled in Medical Assistance (MA)</li>
                        <li>Have been assessed and approved for PCA services</li>
                    </ul>

                    <h3>Our Approach</h3>
                    <p>We believe in:</p>
                    <ul class="service-list">
                        <li>Person-centered care tailored to individual needs</li>
                        <li>Maintaining dignity and independence</li>
                        <li>Building trusting relationships</li>
                        <li>Culturally responsive service delivery</li>
                        <li>Supporting both clients and their families</li>
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
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                    <h3>24/7 Availability</h3>
                    <p>Flexible scheduling to meet your needs</p>
                </div>
                <div class="feature-card">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    <h3>Trained Staff</h3>
                    <p>Experienced caregivers committed to excellence</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today to learn more about our Personal Care Assistance services.</p>
        <div class="cta-buttons">
            <a href="tel:3202814449" class="btn btn-white">Call (320) 281-4449</a>
            <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-outline">Make a Referral</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
