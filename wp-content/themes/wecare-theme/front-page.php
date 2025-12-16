<?php
/**
 * Front Page Template
 *
 * @package WeCare
 */

get_header();
?>

<!-- Hero Section -->
<section class="hero-section" style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-bg.jpg');">
    <div class="hero-overlay"></div>
    <div class="hero-content">
        <h1 class="hero-title">PCA Services, ARMHS & Housing Stabilization in Minnesota</h1>
        <p class="hero-subtitle">Welcome to a place where compassionate support meets personalized care. We are proud to serve adults 18+ in the greater St. Cloud area, offering <em>culturally responsive</em> support. Whether you need guidance or just someone to talk to, we're here to help you face life's challenges with empathy and understanding.</p>
        <div class="hero-buttons">
            <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-primary">Explore Our Services</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">Get In Touch</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="section services-section">
    <div class="container">
        <h2 class="section-title-center">OUR SERVICES AT A GLANCE</h2>
        
        <!-- Service 1: Behavioral Health -->
        <div class="service-row">
            <div class="service-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/behavioral-health.jpg" alt="Behavioral Health Services">
            </div>
            <div class="service-content">
                <h3 class="service-heading">Behavioral Health Services</h3>
                <p class="service-intro"><strong>We support mental wellness to help individuals lead complete and independent lives through:</strong></p>
                <p>Adult Rehabilitative Mental Health Services (ARMHS) <strong>and</strong> Outpatient Therapy</p>
                
                <p class="service-focus"><strong>Our services focus on:</strong></p>
                <ul class="service-list">
                    <li>Personalized one-on-one sessions</li>
                    <li>Skill-building in emotional management and daily tasks</li>
                    <li>Fostering connections and shared growth</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/services/behavioral-health')); ?>" class="btn btn-primary">Learn More</a>
            </div>
        </div>

        <!-- Service 2: PCA Services -->
        <div class="service-row reverse">
            <div class="service-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/pca-services.jpg" alt="PCA Services">
            </div>
            <div class="service-content">
                <h3 class="service-heading">Personal Care Assistance (PCA)</h3>
                <p class="service-intro"><strong>Helping individuals maintain independence in their daily lives:</strong></p>
                
                <p class="service-focus"><strong>Our PCA services include:</strong></p>
                <ul class="service-list">
                    <li>Assistance with daily living activities</li>
                    <li>Medication reminders and health monitoring</li>
                    <li>Meal preparation and nutrition support</li>
                    <li>Transportation to appointments</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/services/pca')); ?>" class="btn btn-primary">Learn More</a>
            </div>
        </div>

        <!-- Service 3: Housing Stabilization -->
        <div class="service-row">
            <div class="service-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/housing.jpg" alt="Housing Stabilization">
            </div>
            <div class="service-content">
                <h3 class="service-heading">Housing Stabilization Services</h3>
                <p class="service-intro"><strong>Supporting individuals in finding and maintaining stable housing:</strong></p>
                
                <p class="service-focus"><strong>We provide assistance with:</strong></p>
                <ul class="service-list">
                    <li>Housing search and application support</li>
                    <li>Tenant education and advocacy</li>
                    <li>Budget management and financial planning</li>
                    <li>Connection to community resources</li>
                </ul>
                <a href="<?php echo esc_url(home_url('/services/housing')); ?>" class="btn btn-primary">Learn More</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="section why-choose-section">
    <div class="container">
        <h2 class="section-title-center">Why Choose WeCare?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </div>
                <h4>Culturally Responsive</h4>
                <p>We embrace diversity and provide care that respects your cultural background.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h4>Experienced Team</h4>
                <p>Our certified professionals are dedicated to your wellbeing.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <h4>Flexible Scheduling</h4>
                <p>Services available when you need them, on your schedule.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <h4>Quality Care</h4>
                <p>Committed to the highest standards in every service we provide.</p>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="section cta-section">
    <div class="container">
        <h2>Ready to Get Started?</h2>
        <p>Contact us today for a free consultation and learn how we can support you.</p>
        <div class="cta-buttons">
            <a href="tel:3202814449" class="btn btn-white">Call (320) 281-4449</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">Contact Us Online</a>
        </div>
    </div>
</section>

<?php get_footer();
