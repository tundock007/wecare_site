<?php
/**
 * Template Name: Services Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <p class="page-subtitle">Compassionate, culturally responsive care services in Minnesota</p>
    </div>
</section>

<!-- Services Overview -->
<section class="section services-overview">
    <div class="container">
        <div class="services-intro text-center">
            <p class="lead">At WeCare, we provide a comprehensive range of services designed to support individuals in leading complete and independent lives. Our team of dedicated professionals is committed to delivering personalized care that respects your unique needs and cultural background.</p>
        </div>

        <!-- Behavioral Health Services -->
        <div class="service-detail" id="behavioral-health">
            <div class="service-row">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/ARMHS - Home, Our Services & Referrals Page.webp" alt="Behavioral Health Services">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">Behavioral Health Services</h2>
                    <p>We support mental wellness to help individuals lead complete and independent lives through Adult Rehabilitative Mental Health Services (ARMHS) and Outpatient Therapy.</p>
                    
                    <div class="service-areas-badge">
                        <strong>Service Areas:</strong> Central Minnesota (St. Cloud area), Metro/Twin Cities, and surrounding communities
                    </div>

                    <h4>Adult Rehabilitative Mental Health Services (ARMHS)</h4>
                    <p>ARMHS provides community-based mental health services for adults with serious mental illness. Our services include:</p>
                    <ul class="service-list">
                        <li>Personalized one-on-one sessions</li>
                        <li>Skill-building in emotional management and daily tasks</li>
                        <li>Crisis assistance and intervention</li>
                        <li>Medication education and support</li>
                        <li>Community integration support</li>
                        <li>Fostering connections and shared growth</li>
                    </ul>

                    <h4>Outpatient Therapy</h4>
                    <p>Our licensed therapists provide individual, family, and group therapy services to address:</p>
                    <ul class="service-list">
                        <li>Depression and anxiety</li>
                        <li>Trauma and PTSD</li>
                        <li>Relationship issues</li>
                        <li>Life transitions and adjustments</li>
                        <li>Stress management</li>
                    </ul>
                    
                    <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-primary">Make a Referral</a>
                </div>
            </div>
        </div>

        <!-- PCA Services -->
        <div class="service-detail" id="pca">
            <div class="service-row reverse">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/CFSS - Home, Our Services & Referrals Page.webp" alt="Personal Care Assistance">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">Personal Care Assistance (PCA)</h2>
                    <p>Our Personal Care Assistance program helps individuals maintain their independence and quality of life in the comfort of their own homes.</p>
                    
                    <h4>What We Provide</h4>
                    <ul class="service-list">
                        <li>Assistance with daily living activities (bathing, dressing, grooming)</li>
                        <li>Mobility assistance and transfers</li>
                        <li>Meal preparation and nutrition support</li>
                        <li>Medication reminders</li>
                        <li>Light housekeeping</li>
                        <li>Transportation to appointments</li>
                        <li>Companionship and emotional support</li>
                    </ul>

                    <h4>Who Qualifies</h4>
                    <p>PCA services are available to individuals who:</p>
                    <ul class="service-list">
                        <li>Have a medical condition requiring assistance</li>
                        <li>Are enrolled in Medical Assistance (MA)</li>
                        <li>Have been assessed and approved for PCA services</li>
                    </ul>
                    
                    <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-primary">Make a Referral</a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <h2>Ready to Learn More?</h2>
        <p>Contact us today to discuss how our services can support you or your loved one.</p>
        <div class="cta-buttons">
            <a href="tel:3202814449" class="btn btn-white">Call (320) 281-4449</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">Contact Us</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
