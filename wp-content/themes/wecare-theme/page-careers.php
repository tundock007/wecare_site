<?php
/**
 * Template Name: Careers
 * Description: Careers page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Careers</h1>
            <p class="page-subtitle">Join our team and make a difference in your community</p>
        </div>
    </section>

    <!-- Intro Section -->
    <section class="careers-intro section-padding">
        <div class="container">
            <div class="intro-content">
                <h2>Work With Us</h2>
                <p>At WeCare, we're always looking for compassionate, dedicated individuals to join our team. We offer rewarding careers in healthcare and community services, competitive benefits, and the opportunity to make a real difference in people's lives.</p>
                <p>We seek staff for multiple service areas including ARMHS, CFSS Services, Adult Day Services, and Outpatient Therapy.</p>
            </div>
        </div>
    </section>

    <!-- Current Openings -->
    <section class="openings section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">Current Openings</h2>

            <div class="openings-list">
                <div class="opening-card">
                    <div class="opening-info">
                        <h3>CFSS</h3>
                        <p class="location">St. Cloud Area, MN</p>
                        <p>Provide personal care and community-based support services to clients in their homes. Help individuals maintain independence and quality of life.</p>
                    </div>
                    <a href="mailto:kathryn.mandery@wecaremn.org?subject=CFSS Position Application" class="btn btn-primary">Apply Now</a>
                </div>

                <div class="opening-card">
                    <div class="opening-info">
                        <h3>ARMHS Mental Health Practitioner</h3>
                        <p class="location">St. Cloud Area, MN</p>
                        <p>Deliver Adult Rehabilitative Mental Health Services to adults with mental health needs. Support clients in developing skills for independent living.</p>
                    </div>
                    <a href="mailto:kathryn.mandery@wecaremn.org?subject=ARMHS Mental Health Practitioner Application" class="btn btn-primary">Apply Now</a>
                </div>
            </div>
        </div>
    </section>

    <!-- How to Apply -->
    <section class="how-to-apply section-padding">
        <div class="container">
            <div class="apply-content">
                <h2>How to Apply</h2>
                <p>Interested in joining our team? Send your resume to:</p>
                <div class="apply-contact">
                    <a href="mailto:kathryn.mandery@wecaremn.org" class="email-link">kathryn.mandery@wecaremn.org</a>
                </div>
                <p class="apply-note">We encourage interested candidates to reach out even if you don't see a position that matches your skills—we're always looking for great people to join our team.</p>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="careers-cta section-padding bg-primary">
        <div class="container text-center">
            <h2>Questions About Careers?</h2>
            <p>Contact us to learn more about opportunities at WeCare</p>
            <div class="cta-buttons">
                <a href="mailto:kathryn.mandery@wecaremn.org" class="btn btn-white">Email HR</a>
                <a href="tel:3202814449" class="btn btn-outline-white">Call (320) 281-4449</a>
            </div>
        </div>
    </section>
</main>

<style>
.intro-content {
    max-width: 800px;
}

.intro-content h2 {
    color: var(--primary-green);
    margin-bottom: 1rem;
}

.intro-content p {
    font-size: 1.1rem;
    line-height: 1.8;
    margin-bottom: 1rem;
}

.openings-list {
    display: grid;
    gap: 1.5rem;
    max-width: 900px;
    margin: 2rem auto 0;
}

.opening-card {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    border-left: 4px solid var(--accent-orange);
    display: flex;
    align-items: center;
    gap: 2rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.opening-info {
    flex: 1;
}

.opening-info h3 {
    color: var(--primary-green);
    margin: 0 0 0.5rem;
    font-size: 1.35rem;
}

.opening-info .location {
    color: var(--accent-orange);
    font-weight: 500;
    margin: 0 0 0.75rem;
    font-size: 0.95rem;
}

.opening-info p:last-child {
    margin: 0;
    color: var(--text-color);
    line-height: 1.6;
}

.apply-content {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.apply-content h2 {
    color: var(--primary-green);
    margin-bottom: 1rem;
}

.apply-contact {
    margin: 2rem 0;
}

.email-link {
    display: inline-block;
    font-size: 1.25rem;
    color: var(--primary-green);
    font-weight: 600;
    padding: 1rem 2rem;
    background: #f8f9fa;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
}

.email-link:hover {
    background: var(--primary-green);
    color: white;
}

.apply-note {
    font-size: 0.95rem;
    color: var(--text-light);
    font-style: italic;
}

.careers-cta {
    background: var(--primary-green);
}

.careers-cta h2, .careers-cta p {
    color: white;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 1.5rem;
}

@media (max-width: 768px) {
    .opening-card {
        flex-direction: column;
        align-items: flex-start;
    }

    .opening-card .btn {
        width: 100%;
        text-align: center;
    }
}
</style>

<?php get_footer(); ?>
