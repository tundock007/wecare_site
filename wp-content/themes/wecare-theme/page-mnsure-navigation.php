<?php
/**
 * Template Name: MNSure Navigation Page
 *
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
    <div class="container">
        <h1 class="page-title">MNsure Navigation Services</h1>
        <p class="page-subtitle">Free help finding the right health coverage for you and your family</p>
    </div>
</section>

<!-- Overview with Image -->
<section class="mnsure-intro section-padding">
    <div class="container">
        <div class="mnsure-intro-grid">
            <div class="mnsure-intro-content">
                <h2>Personalized Support for Health Coverage</h2>
                <p>Finding the right health insurance shouldn't be stressful. At WeCare, we offer MNSure Navigation Services to help individuals and families make informed decisions about their healthcare coverage.</p>
                <p>Our certified MNsure navigators provide personalized, in-person assistance to help you understand your options, apply for coverage, and feel confident in the choices you make.</p>
                <div class="mnsure-highlight">
                    <strong>100% Free Service</strong> — No cost to you for consultations or enrollment assistance
                </div>
            </div>
            <div class="mnsure-intro-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/MNSure Navigation - Home, Our Services & Referrals Page.webp" alt="MNSure Navigation Services">
            </div>
        </div>
    </div>
</section>

<!-- What We Offer -->
<section class="mnsure-services section-padding bg-light">
    <div class="container">
        <h2 class="section-title text-center">What We Offer</h2>
        <div class="mnsure-services-grid">
            <div class="mnsure-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line></svg>
                </div>
                <h3>Free Consultation</h3>
                <p>Meet with a certified navigator to discuss your healthcare needs and coverage options at no cost.</p>
            </div>
            <div class="mnsure-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <h3>Plan Comparison</h3>
                <p>We help you compare plans based on your healthcare needs, budget, and eligibility requirements.</p>
            </div>
            <div class="mnsure-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                </div>
                <h3>Enrollment Assistance</h3>
                <p>Step-by-step guidance through the entire application and enrollment process.</p>
            </div>
            <div class="mnsure-service-card">
                <div class="service-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"></path></svg>
                </div>
                <h3>Ongoing Support</h3>
                <p>Help with renewals, updates, account changes, and any post-enrollment questions.</p>
            </div>
        </div>
    </div>
</section>

<!-- Programs We Help With -->
<section class="mnsure-programs section-padding">
    <div class="container">
        <h2 class="section-title text-center">Programs We Help With</h2>
        <div class="programs-grid">
            <div class="program-card">
                <h3>MNsure Marketplace</h3>
                <p>Private health insurance plans with potential tax credits to lower your monthly costs.</p>
            </div>
            <div class="program-card">
                <h3>Medical Assistance</h3>
                <p>Free or low-cost coverage for individuals and families who meet income requirements.</p>
            </div>
            <div class="program-card">
                <h3>MinnesotaCare</h3>
                <p>Affordable coverage for Minnesotans who don't qualify for Medical Assistance.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose WeCare -->
<section class="mnsure-why section-padding bg-light">
    <div class="container">
        <div class="mnsure-why-grid">
            <div class="mnsure-why-content">
                <h2>Why Choose WeCare</h2>
                <ul class="why-list">
                    <li>
                        <strong>Certified Navigators</strong>
                        <span>Our team is fully certified by MNsure with ongoing training on policy changes.</span>
                    </li>
                    <li>
                        <strong>Confidential & Compassionate</strong>
                        <span>All consultations are private and your information is securely handled.</span>
                    </li>
                    <li>
                        <strong>Community-Focused</strong>
                        <span>We partner with local organizations to serve diverse communities.</span>
                    </li>
                    <li>
                        <strong>Multilingual Support</strong>
                        <span>Services available in multiple languages to serve all Minnesotans.</span>
                    </li>
                </ul>
            </div>
            <div class="mnsure-resources">
                <h3>Official MNsure Resources</h3>
                <ul class="resource-links">
                    <li><a href="https://www.mnsure.org/" target="_blank" rel="noopener noreferrer">MNsure - Minnesota's Health Insurance Marketplace</a></li>
                    <li><a href="https://mn.gov/dhs/people-we-serve/adults/health-care/health-care-programs/programs-and-services/medical-assistance.jsp" target="_blank" rel="noopener noreferrer">Minnesota DHS - Medical Assistance</a></li>
                    <li><a href="https://mn.gov/dhs/people-we-serve/adults/health-care/health-care-programs/programs-and-services/minnesotacare.jsp" target="_blank" rel="noopener noreferrer">Minnesota DHS - MinnesotaCare</a></li>
                    <li><a href="https://www.healthcare.gov/" target="_blank" rel="noopener noreferrer">HealthCare.gov</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="mnsure-cta section-padding">
    <div class="container">
        <div class="mnsure-cta-content">
            <h2>Get the Health Coverage You Deserve</h2>
            <p>Schedule your free consultation today and take the first step toward better health coverage.</p>
            <div class="cta-buttons">
                <a href="tel:3202814449" class="btn btn-white">Call (320) 281-4449</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline-white">Contact Us</a>
            </div>
        </div>
    </div>
</section>

<style>
.mnsure-intro-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
    align-items: center;
}

.mnsure-intro-content h2 {
    color: var(--primary-green);
    margin-bottom: 1.5rem;
}

.mnsure-intro-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 1rem;
}

.mnsure-highlight {
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    padding: 1rem 1.5rem;
    border-radius: 8px;
    border-left: 4px solid var(--primary-green);
    margin-top: 1.5rem;
    color: var(--primary-green);
}

.mnsure-intro-image {
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
}

.mnsure-intro-image img {
    width: 100%;
    height: auto;
    display: block;
}

.mnsure-services-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.mnsure-service-card {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
}

.mnsure-service-card:hover {
    transform: translateY(-5px);
}

.service-icon {
    width: 60px;
    height: 60px;
    background: var(--primary-green);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 1.25rem;
    color: white;
}

.mnsure-service-card h3 {
    color: var(--primary-green);
    font-size: 1.1rem;
    margin-bottom: 0.75rem;
}

.mnsure-service-card p {
    color: var(--text-color);
    font-size: 0.95rem;
    line-height: 1.6;
}

.programs-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.program-card {
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);
    color: white;
    padding: 2rem;
    border-radius: 12px;
    text-align: center;
}

.program-card h3 {
    font-size: 1.25rem;
    margin-bottom: 0.75rem;
    color: white;
}

.program-card p {
    opacity: 0.9;
    line-height: 1.6;
}

.mnsure-why-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 4rem;
}

.mnsure-why-content h2 {
    color: var(--primary-green);
    margin-bottom: 1.5rem;
}

.why-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.why-list li {
    display: flex;
    flex-direction: column;
    padding: 1rem 0;
    border-bottom: 1px solid #e0e0e0;
}

.why-list li:last-child {
    border-bottom: none;
}

.why-list strong {
    color: var(--primary-green);
    font-size: 1.05rem;
    margin-bottom: 0.25rem;
}

.why-list span {
    color: var(--text-color);
    font-size: 0.95rem;
}

.mnsure-resources {
    background: white;
    padding: 2rem;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
}

.mnsure-resources h3 {
    color: var(--primary-green);
    margin-bottom: 1rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid var(--accent-orange);
}

.mnsure-resources .resource-links {
    list-style: none;
    padding: 0;
    margin: 0;
}

.mnsure-resources .resource-links li {
    padding: 0.75rem 0;
    border-bottom: 1px solid #eee;
}

.mnsure-resources .resource-links li:last-child {
    border-bottom: none;
}

.mnsure-resources .resource-links a {
    color: var(--primary-green);
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.mnsure-resources .resource-links a:hover {
    color: var(--accent-orange);
}

.mnsure-resources .resource-links a::before {
    content: "→";
    color: var(--accent-orange);
}

.mnsure-cta {
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);
}

.mnsure-cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.mnsure-cta h2, .mnsure-cta p {
    color: white;
}

.mnsure-cta h2 {
    margin-bottom: 1rem;
}

.mnsure-cta p {
    opacity: 0.9;
    margin-bottom: 2rem;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
}

@media (max-width: 992px) {
    .mnsure-intro-grid,
    .mnsure-why-grid {
        grid-template-columns: 1fr;
        gap: 2rem;
    }

    .mnsure-services-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .programs-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .mnsure-services-grid {
        grid-template-columns: 1fr;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }
}
</style>

<?php get_footer(); ?>
