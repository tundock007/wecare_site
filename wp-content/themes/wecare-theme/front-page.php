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
            <p>Culturally responsive care for adults in Central Minnesota and the Metro/Twin Cities area. We're here to help you or your loved ones live independently with dignity.</p>
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

<!-- Services - With Images -->
<section class="section services-images">
    <div class="container">
        <h2 class="section-title-center">How We Can Help</h2>

        <div class="services-images-grid">
            <a href="<?php echo esc_url(home_url('/behavioral-health')); ?>" class="service-image-card">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/ARMHS - Home, Our Services & Referrals Page.webp" alt="WeCare ARMHS mental health rehabilitation services for adults in Minnesota">
                </div>
                <div class="service-image-content">
                    <h3>Mental Health Services</h3>
                    <p>ARMHS and outpatient therapy for adults with mental health needs</p>
                    <span class="service-link-text">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/cfss')); ?>" class="service-image-card">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/CFSS - Home, Our Services & Referrals Page.webp" alt="WeCare CFSS personal care assistance helping with daily living in Central Minnesota">
                </div>
                <div class="service-image-content">
                    <h3>CFSS / Personal Care</h3>
                    <p>In-home assistance with daily living activities</p>
                    <span class="service-link-text">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/adult-day')); ?>" class="service-image-card">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/ADS - Home, Our Services & Referrals Page.webp" alt="WeCare Adult Day Services program with activities and meals in St. Cloud Minnesota">
                </div>
                <div class="service-image-content">
                    <h3>Adult Day Services</h3>
                    <p>Structured daytime program with activities and respite for families</p>
                    <span class="service-link-text">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                </div>
            </a>

            <a href="<?php echo esc_url(home_url('/mnsure-navigation')); ?>" class="service-image-card">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/MNSure Navigation - Home, Our Services & Referrals Page.webp" alt="WeCare MNsure Navigator providing free health insurance enrollment help in Minnesota">
                </div>
                <div class="service-image-content">
                    <h3>MNsure Navigation</h3>
                    <p>Free help applying for health insurance coverage</p>
                    <span class="service-link-text">Learn More <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg></span>
                </div>
            </a>
        </div>
    </div>
</section>

<!-- Why WeCare - With Image -->
<section class="section why-wecare-image">
    <div class="container">
        <div class="why-wecare-grid">
            <div class="why-wecare-content">
                <h2>Why Families Choose WeCare</h2>
                <ul class="why-wecare-list">
                    <li>
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="why-text">
                            <strong>Culturally Responsive</strong>
                            <span>Care that respects your background and values</span>
                        </div>
                    </li>
                    <li>
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="why-text">
                            <strong>Medical Assistance Accepted</strong>
                            <span>We work with MA and most insurance plans</span>
                        </div>
                    </li>
                    <li>
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="why-text">
                            <strong>Experienced Team</strong>
                            <span>Dedicated professionals committed to your wellbeing</span>
                        </div>
                    </li>
                    <li>
                        <div class="why-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                        </div>
                        <div class="why-text">
                            <strong>Community Focused</strong>
                            <span>Serving Central Minnesota and the Metro area</span>
                        </div>
                    </li>
                </ul>
                <a href="<?php echo esc_url(home_url('/about')); ?>" class="btn btn-primary">Learn About Us</a>
            </div>
            <div class="why-wecare-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/WeCare Brochure - Home Page.webp" alt="WeCare team providing compassionate mental health and personal care services">
            </div>
        </div>
    </div>
</section>

<!-- Impact Stats -->
<section class="section stats-section">
    <div class="container">
        <h2 class="section-title-center">Our Impact</h2>
        <div class="stats-grid">
            <div class="stat-item">
                <span class="stat-number">500+</span>
                <span class="stat-label">Clients Served</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">3</span>
                <span class="stat-label">Service Regions</span>
            </div>
            <div class="stat-item">
                <span class="stat-number">5</span>
                <span class="stat-label">Care Programs</span>
            </div>
        </div>
        <div class="google-review-link">
            <a href="https://www.google.com/maps/search/WeCare+136+Division+St+Waite+Park+MN" target="_blank" rel="noopener noreferrer" class="google-link">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"/><path d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"/><path d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"/><path d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"/></svg>
                See Our Reviews on Google
            </a>
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

<style>
/* Services with Images */
.services-images {
    background: var(--light-gray);
}

.services-images-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1.5rem;
    margin-top: 3rem;
}

.service-image-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.service-image-card:hover {
    transform: translateY(-8px);
    box-shadow: 0 12px 30px rgba(0,0,0,0.12);
}

.service-image {
    width: 100%;
    height: 180px;
    overflow: hidden;
}

.service-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.service-image-card:hover .service-image img {
    transform: scale(1.05);
}

.service-image-content {
    padding: 1.5rem;
}

.service-image-content h3 {
    color: var(--primary-green);
    font-size: var(--font-size-body);
    margin-bottom: 0.5rem;
}

.service-image-content p {
    color: var(--text-color);
    font-size: var(--font-size-body);
    line-height: 1.5;
    margin-bottom: 1rem;
}

.service-link-text {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    color: var(--accent-orange);
    font-weight: 600;
    font-size: var(--font-size-small);
}

.service-link-text svg {
    transition: transform 0.3s ease;
}

.service-image-card:hover .service-link-text svg {
    transform: translateX(4px);
}

/* Why WeCare with Image */
.why-wecare-image-section {
    background: white;
}

.why-wecare-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.why-wecare-content h2 {
    color: var(--primary-green);
    font-size: var(--font-size-section);
    margin-bottom: 2rem;
}

.why-wecare-list {
    list-style: none;
    padding: 0;
    margin: 0 0 2rem 0;
}

.why-wecare-list li {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.why-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: var(--primary-green);
}

.why-text {
    display: flex;
    flex-direction: column;
}

.why-text strong {
    color: var(--primary-green);
    font-size: var(--font-size-body);
    margin-bottom: 0.25rem;
}

.why-text span {
    color: var(--text-color);
    font-size: var(--font-size-body);
}

.why-wecare-image {
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
}

.why-wecare-image img {
    width: 100%;
    height: auto;
    display: block;
}

/* Responsive */
@media (max-width: 992px) {
    .services-images-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .why-wecare-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .why-wecare-image {
        order: -1;
    }
}

@media (max-width: 768px) {
    .services-images-grid {
        grid-template-columns: 1fr;
    }

    .service-image {
        height: 200px;
    }
}

/* Reduce padding on home page sections */
.services-images,
.why-wecare-image,
.stats-section {
    padding: 60px 0;
}

.cta-simple {
    padding: 50px 0;
}
</style>

<?php get_footer(); ?>
