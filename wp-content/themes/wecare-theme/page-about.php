<?php
/**
 * Template Name: About Page
 * Description: About Us page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">About WeCare</h1>
            <p class="page-subtitle">Integrated Care, Mindful Wellbeing</p>
        </div>
    </section>

    <!-- Mission Section -->
    <section class="about-mission section-padding">
        <div class="container">
            <div class="mission-content">
                <h2>Our Mission</h2>
                <p class="mission-statement">"WeCare is dedicated to ensuring everyone in our community receives the care they deserve. We strive to create a welcoming and inclusive environment where everyone feels valued and supported."</p>
            </div>
        </div>
    </section>

    <!-- About Overview -->
    <section class="about-overview section-padding bg-light">
        <div class="container">
            <div class="overview-grid">
                <div class="overview-content">
                    <h2>Who We Are</h2>
                    <p>WeCare is a social services provider based in Waite Park, Minnesota. We provide Behavioral Health services throughout Central Minnesota, the Metro/Twin Cities area, and surrounding communities. We serve individuals aged 18 and older with comprehensive support focused on holistic care.</p>
                    <p>Our team of dedicated professionals is committed to helping you face life's challenges with empathy and understanding. Whether you need support with mental health, daily living activities, or finding stable housing, we're here to walk alongside you every step of the way.</p>
                </div>
                <div class="overview-info">
                    <div class="info-card">
                        <h4>Location</h4>
                        <p>136 Division St.<br>Waite Park, MN 56387</p>
                    </div>
                    <div class="info-card">
                        <h4>Contact</h4>
                        <p>Phone: (320) 281-4449<br>24/7 Crisis: (320) 253-5555</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Core Values -->
    <section class="about-values section-padding">
        <div class="container">
            <h2 class="section-title text-center">Our Core Values</h2>
            <div class="values-grid">
                <div class="value-card">
                    <div class="value-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                    </div>
                    <h3>Collaboration</h3>
                    <p>Working together to deliver excellent care</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                    </div>
                    <h3>Trust</h3>
                    <p>Building relationships through honest communication and ethical conduct</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    </div>
                    <h3>Excellence</h3>
                    <p>Maintaining high standards across all services</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                    </div>
                    <h3>Empathy</h3>
                    <p>Demonstrating compassion toward clients and families</p>
                </div>
                <div class="value-card">
                    <div class="value-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M8 14s1.5 2 4 2 4-2 4-2"></path><line x1="9" y1="9" x2="9.01" y2="9"></line><line x1="15" y1="9" x2="15.01" y2="9"></line></svg>
                    </div>
                    <h3>Dignity</h3>
                    <p>Respecting individual autonomy and self-determination</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="about-services section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">Our Services</h2>
            <div class="services-list-simple">
                <a href="<?php echo esc_url(home_url('/behavioral-health')); ?>" class="service-link">ARMHS (Adult Rehabilitative Mental Health Services)</a>
                <a href="<?php echo esc_url(home_url('/adult-day')); ?>" class="service-link">Adult Day Services</a>
                <a href="<?php echo esc_url(home_url('/outpatient-therapy')); ?>" class="service-link">Outpatient Therapy</a>
                <a href="<?php echo esc_url(home_url('/cfss')); ?>" class="service-link">CFSS (Community First Services and Supports)</a>
                <a href="<?php echo esc_url(home_url('/mnsure-navigation')); ?>" class="service-link">MNSure Navigator Services</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="about-cta section-padding bg-primary">
        <div class="container text-center">
            <h2>Get In Touch</h2>
            <p>Learn more about our services or how we can help you or your loved one</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Contact Us</a>
                <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-outline-white">Make a Referral</a>
            </div>
        </div>
    </section>
</main>

<style>
.mission-content {
    max-width: 800px;
    margin: 0 auto;
    text-align: center;
}

.mission-content h2 {
    color: var(--primary-green);
    margin-bottom: 1.5rem;
}

.mission-statement {
    font-size: 1.35rem;
    line-height: 1.8;
    color: var(--text-color);
    font-style: italic;
}

.overview-grid {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 3rem;
    align-items: start;
}

.overview-content h2 {
    color: var(--primary-green);
    margin-bottom: 1.5rem;
}

.overview-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 1rem;
}

.info-card {
    background: white;
    padding: 1.5rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    border-left: 4px solid var(--accent-orange);
}

.info-card h4 {
    color: var(--primary-green);
    margin-bottom: 0.5rem;
    font-size: 1.1rem;
}

.info-card p {
    margin: 0;
    line-height: 1.6;
}

.values-grid {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 1.5rem;
    margin-top: 2rem;
}

.value-card {
    background: white;
    padding: 2rem 1.5rem;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.value-icon {
    color: var(--accent-orange);
    margin-bottom: 1rem;
}

.value-card h3 {
    color: var(--primary-green);
    font-size: 1.15rem;
    margin-bottom: 0.5rem;
}

.value-card p {
    font-size: 0.9rem;
    color: var(--text-color);
    line-height: 1.5;
}

.services-list-simple {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    gap: 1rem;
    margin-top: 2rem;
}

.service-link {
    background: white;
    padding: 1rem 1.5rem;
    border-radius: 50px;
    color: var(--primary-green);
    text-decoration: none;
    font-weight: 500;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: all 0.3s ease;
}

.service-link:hover {
    background: var(--primary-green);
    color: white;
    transform: translateY(-2px);
}

.about-cta {
    background: var(--primary-green);
}

.about-cta h2, .about-cta p {
    color: white;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 1.5rem;
}

@media (max-width: 992px) {
    .overview-grid {
        grid-template-columns: 1fr;
    }

    .values-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .values-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .mission-statement {
        font-size: 1.15rem;
    }
}

@media (max-width: 576px) {
    .values-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>
