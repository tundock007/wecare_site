<?php
/**
 * Template Name: Adult Day Services
 * Description: Adult Day Services page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero with Intro -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Adult Day Services</h1>
            <p class="hero-description">A warm and inclusive space where older adults can stay active, connect with others, and receive personalized support—especially for individuals from refugee and diverse cultural backgrounds.</p>
        </div>
    </section>

    <!-- Services Grid -->
    <section class="ads-services section-padding">
        <div class="container">
            <div class="services-grid-3">
                <!-- Inclusive Community -->
                <div class="service-card-img">
                    <div class="service-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/ADS - Home, Our Services & Referrals Page.webp" alt="Adult Day Services">
                    </div>
                    <div class="service-content">
                        <h3>Inclusive Community</h3>
                        <p>A welcoming space where all clients feel valued and supported through meaningful engagement and culturally responsive care.</p>
                    </div>
                </div>

                <!-- Physical Therapy -->
                <div class="service-card-img">
                    <div class="service-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ads-gym.webp" alt="Physical Therapy Gym">
                    </div>
                    <div class="service-content">
                        <h3>Fitness & Physical Therapy</h3>
                        <p>Well-equipped gym with cardio and strength-training equipment, group classes, and individual sessions to support mobility and independence.</p>
                    </div>
                </div>

                <!-- Meal Service -->
                <div class="service-card-img">
                    <div class="service-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ads-dining.webp" alt="Meal Service">
                    </div>
                    <div class="service-content">
                        <h3>Nutritious Meals</h3>
                        <p>Freshly prepared, dietician-approved meals daily with options for dietary restrictions and cultural preferences.</p>
                    </div>
                </div>

                <!-- Transportation -->
                <div class="service-card-img">
                    <div class="service-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ads-transportation.webp" alt="Transportation Service">
                    </div>
                    <div class="service-content">
                        <h3>Transportation</h3>
                        <p>Safe, dependable daily transportation to and from our facility so clients can attend programs with ease.</p>
                    </div>
                </div>

                <!-- Health Management -->
                <div class="service-card-img">
                    <div class="service-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ads-health.webp" alt="Health Management">
                    </div>
                    <div class="service-content">
                        <h3>Health Monitoring</h3>
                        <p>Regular health assessments, wellness programs, and nurse-led check-ins to maintain physical and mental well-being.</p>
                    </div>
                </div>

                <!-- Social Programs -->
                <div class="service-card-img">
                    <div class="service-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ads-community.webp" alt="Social Programs">
                    </div>
                    <div class="service-content">
                        <h3>Social Programs</h3>
                        <p>Engaging recreational activities that promote personal growth, independence, and meaningful social connections.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Eligibility & CTA Combined -->
    <section class="ads-eligibility-cta section-padding">
        <div class="container">
            <div class="eligibility-cta-grid">
                <div class="eligibility-content">
                    <h2>Who We Serve</h2>
                    <p>Our Adult Day Services are designed for individuals aged <strong>55 and older</strong> seeking support, socialization, and services to enhance their quality of life.</p>

                    <div class="eligibility-requirements">
                        <div class="requirement-item">
                            <span class="check-icon">✓</span>
                            <span>Age 55 or older</span>
                        </div>
                        <div class="requirement-item">
                            <span class="check-icon">✓</span>
                            <span>Certified disability</span>
                        </div>
                        <div class="requirement-item">
                            <span class="check-icon">✓</span>
                            <span>MA insurance coverage</span>
                        </div>
                    </div>
                </div>

                <div class="cta-content">
                    <h2>Get Started Today</h2>
                    <p>Contact us to learn more about enrollment and how we can support you or your loved one.</p>
                    <div class="cta-buttons-vertical">
                        <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-primary btn-large">Make a Referral</a>
                        <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline btn-large">Contact Us</a>
                        <a href="tel:3202814449" class="phone-link">Or call (320) 281-4449</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Hero Enhancement */
.hero-description {
    max-width: 700px;
    margin: 1rem auto 0;
    font-size: 1.15rem;
    opacity: 0.95;
    line-height: 1.7;
}

/* Services Section Spacing */
.ads-services {
    padding-top: 4rem;
}

/* Services Grid */
.services-grid-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.service-card-img {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-card-img:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 30px rgba(0,0,0,0.12);
}

.service-card-img .service-image {
    height: 220px;
    overflow: hidden;
}

.service-card-img .service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-card-img:hover .service-image img {
    transform: scale(1.05);
}

.service-card-img .service-content {
    padding: 1.5rem;
}

.service-card-img .service-content h3 {
    color: var(--primary-green);
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
}

.service-card-img .service-content p {
    color: var(--text-color);
    line-height: 1.6;
    font-size: 0.95rem;
    margin: 0;
}

/* Eligibility & CTA Section */
.ads-eligibility-cta {
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);
    color: white;
}

.eligibility-cta-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.eligibility-content h2,
.cta-content h2 {
    color: white;
    font-size: 2rem;
    margin-bottom: 1rem;
}

.eligibility-content p,
.cta-content p {
    opacity: 0.95;
    line-height: 1.7;
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

.eligibility-requirements {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.requirement-item {
    display: flex;
    align-items: center;
    gap: 0.75rem;
    font-size: 1.1rem;
}

.check-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 28px;
    height: 28px;
    background: var(--accent-orange);
    border-radius: 50%;
    font-size: 0.9rem;
    font-weight: bold;
}

.cta-content {
    background: rgba(255,255,255,0.1);
    padding: 2.5rem;
    border-radius: 16px;
    text-align: center;
}

.cta-buttons-vertical {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    align-items: center;
}

.btn-large {
    width: 100%;
    max-width: 280px;
}

.phone-link {
    color: rgba(255,255,255,0.8);
    text-decoration: none;
    font-size: 0.95rem;
    margin-top: 0.5rem;
}

.phone-link:hover {
    color: white;
}

/* Responsive */
@media (max-width: 992px) {
    .services-grid-3 {
        grid-template-columns: repeat(2, 1fr);
    }

    .eligibility-cta-grid {
        grid-template-columns: 1fr;
        gap: 2.5rem;
    }

    .cta-content {
        padding: 2rem;
    }
}

@media (max-width: 768px) {
    .services-grid-3 {
        grid-template-columns: 1fr;
    }

    .hero-description {
        font-size: 1rem;
    }

    .eligibility-content h2,
    .cta-content h2 {
        font-size: 1.75rem;
    }
}
</style>

<?php get_footer(); ?>
