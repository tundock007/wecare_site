<?php
/**
 * Template Name: Housing Stabilization Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">Housing Stabilization Services</h1>
        <p class="page-subtitle">Helping individuals find and maintain safe, stable housing</p>
    </div>
</section>

<!-- Service Detail -->
<section class="section service-detail-section">
    <div class="container">
        <div class="service-detail">
            <div class="service-row">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/housing.jpg" alt="Housing Stabilization Services">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">Housing Stabilization Services</h2>
                    <div class="important-notice" style="background-color: #fff3cd; border-left: 4px solid #ffc107; padding: 1.5rem; margin: 2rem 0; border-radius: 4px;">
                        <strong>IMPORTANT NOTICE:</strong> Due to DHS ending all Housing Stabilization Programs effective October 31st, we will no longer be able to offer these services. We understand this change may cause disruption, and we apologize for any inconvenience. Please don't hesitate to call—we're here to help you navigate this change.
                    </div>
                    
                    <p>Our Housing Stabilization Services help individuals find and maintain safe, stable housing in the community.</p>
                    
                    <h3>Housing Transition Services</h3>
                    <p>We assist individuals in finding and securing housing:</p>
                    <ul class="service-list">
                        <li>Housing search assistance</li>
                        <li>Application completion support</li>
                        <li>Understanding lease terms and tenant rights</li>
                        <li>Assistance with move-in logistics</li>
                        <li>Connecting with community resources</li>
                    </ul>

                    <h3>Housing Sustaining Services</h3>
                    <p>We help individuals maintain their housing:</p>
                    <ul class="service-list">
                        <li>Budget management and financial planning</li>
                        <li>Tenant education and advocacy</li>
                        <li>Conflict resolution with landlords</li>
                        <li>Connection to supportive services</li>
                        <li>Crisis prevention and intervention</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <h2>Need Assistance?</h2>
        <p>Contact us to discuss alternative support options available to you.</p>
        <div class="cta-buttons">
            <a href="tel:3202814449" class="btn btn-white">Call (320) 281-4449</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">Contact Us</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
