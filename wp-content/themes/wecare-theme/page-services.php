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
<section class="section service-detail-section">
    <div class="container">

        <!-- Behavioral Health Services -->
        <div class="service-detail" id="behavioral-health">
            <div class="service-row">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/ARMHS - Home, Our Services & Referrals Page.webp" alt="WeCare ARMHS behavioral health services">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">Behavioral Health Services</h2>
                    <p>We support mental wellness through Adult Rehabilitative Mental Health Services (ARMHS) and Outpatient Therapy.</p>

                    <div class="service-areas">
                        <strong>Service Areas:</strong> Central Minnesota & Twin Cities Metro
                    </div>

                    <h4>ARMHS Services Include:</h4>
                    <ul class="service-list">
                        <li>Personalized one-on-one sessions</li>
                        <li>Skill-building in emotional management</li>
                        <li>Crisis assistance and intervention</li>
                        <li>Medication education and support</li>
                        <li>Community integration support</li>
                    </ul>

                    <h4>Outpatient Therapy For:</h4>
                    <ul class="service-list">
                        <li>Depression and anxiety</li>
                        <li>Trauma and PTSD</li>
                        <li>Relationship issues</li>
                        <li>Life transitions</li>
                    </ul>

                    <a href="<?php echo esc_url(home_url('/behavioral-health')); ?>" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- Adult Day Services -->
        <div class="service-detail" id="adult-day">
            <div class="service-row reverse">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/ADS - Home, Our Services & Referrals Page.webp" alt="WeCare Adult Day Services">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">Adult Day Services</h2>
                    <p>Safe, nurturing daytime program for seniors and adults with disabilities.</p>

                    <div class="service-areas">
                        <strong>Location:</strong> Waite Park, MN
                    </div>

                    <h4>Program Features:</h4>
                    <ul class="service-list">
                        <li>Structured daily activities</li>
                        <li>Nutritious meals and snacks</li>
                        <li>Health monitoring</li>
                        <li>Social engagement</li>
                        <li>Arts, crafts, and recreation</li>
                        <li>Respite for caregivers</li>
                    </ul>

                    <a href="<?php echo esc_url(home_url('/adult-day')); ?>" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- CFSS -->
        <div class="service-detail" id="cfss">
            <div class="service-row">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/CFSS - Home, Our Services & Referrals Page.webp" alt="WeCare CFSS services">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">Community First Services & Supports (CFSS)</h2>
                    <p>Participant-directed home care giving you control over your services and budget.</p>

                    <div class="service-areas">
                        <strong>Service Area:</strong> Statewide - MN MA Recipients
                    </div>

                    <h4>Key Benefits:</h4>
                    <ul class="service-list">
                        <li>Hire your own workers, including family</li>
                        <li>Control your budget and services</li>
                        <li>Support for daily living activities</li>
                        <li>Community integration assistance</li>
                        <li>24/7 access to support</li>
                    </ul>

                    <a href="<?php echo esc_url(home_url('/cfss')); ?>" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>

        <!-- MNSure Navigator -->
        <div class="service-detail" id="mnsure">
            <div class="service-row reverse">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/MNSure Navigation - Home, Our Services & Referrals Page.webp" alt="WeCare MNSure Navigator">
                </div>
                <div class="service-content">
                    <h2 class="service-heading">MNSure Navigator Services</h2>
                    <p>Free, unbiased help understanding and enrolling in health insurance coverage.</p>

                    <div class="service-areas">
                        <strong>Availability:</strong> Free for all Minnesotans
                    </div>

                    <h4>How We Help:</h4>
                    <ul class="service-list">
                        <li>Explain health insurance options</li>
                        <li>Determine eligibility for MA or MinnesotaCare</li>
                        <li>Help complete applications</li>
                        <li>Compare plans and costs</li>
                        <li>Ongoing support after enrollment</li>
                    </ul>

                    <a href="<?php echo esc_url(home_url('/mnsure-navigation')); ?>" class="btn btn-primary">Learn More</a>
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
