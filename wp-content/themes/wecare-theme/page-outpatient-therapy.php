<?php
/**
 * Template Name: Outpatient Therapy
 * Description: Outpatient Therapy Services page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Outpatient Therapy</h1>
            <p class="page-subtitle">Professional mental health counseling in a supportive environment</p>
        </div>
    </section>

    <!-- Service Overview -->
    <section class="therapy-overview section-padding">
        <div class="container">
            <div class="service-row">
                <div class="service-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Outpatient Therapy - Home, Our Services & Referrals Page.webp" alt="WeCare outpatient therapy and mental health counseling services in Minnesota">
                </div>
                <div class="service-content">
                    <h2>Our Therapy Services</h2>
                    <div class="service-areas-badge">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                        <span><strong>Service Areas:</strong> Central Minnesota (St. Cloud area), Metro/Twin Cities, and surrounding communities</span>
                    </div>
                    <p>WeCare provides comprehensive psychotherapy services delivered by experienced mental health counselors and practitioners. We create a supportive environment for clients to express emotions and address mental health challenges.</p>
                    <p>Our clinicians support individuals, couples, families, and groups through challenges such as anxiety, depression, trauma, relationship stress, and life transitions.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- What We Treat -->
    <section class="therapy-conditions section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">What We Help With</h2>
            <p class="section-subtitle text-center">Our therapists are trained to help with a variety of challenges</p>

            <div class="conditions-grid">
                <div class="condition-card">
                    <h3>Anxiety</h3>
                    <p>Managing worry, panic, and anxious thoughts</p>
                </div>

                <div class="condition-card">
                    <h3>Depression</h3>
                    <p>Addressing feelings of sadness and hopelessness</p>
                </div>

                <div class="condition-card">
                    <h3>Trauma</h3>
                    <p>Healing from past traumatic experiences</p>
                </div>

                <div class="condition-card">
                    <h3>Relationship Stress</h3>
                    <p>Improving communication and connection</p>
                </div>

                <div class="condition-card">
                    <h3>Life Transitions</h3>
                    <p>Navigating major life changes</p>
                </div>

                <div class="condition-card">
                    <h3>Stress Management</h3>
                    <p>Developing coping strategies</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Therapy Types -->
    <section class="therapy-types section-padding">
        <div class="container">
            <h2 class="section-title text-center">Types of Therapy We Offer</h2>

            <div class="types-grid">
                <div class="type-card">
                    <h3>Individual Therapy</h3>
                    <p>One-on-one sessions focused on your personal goals and challenges. Work directly with a therapist in a confidential setting.</p>
                </div>

                <div class="type-card">
                    <h3>Couples Therapy</h3>
                    <p>Support for partners navigating relationship challenges, improving communication, and strengthening their bond.</p>
                </div>

                <div class="type-card">
                    <h3>Family Therapy</h3>
                    <p>Helping families improve dynamics, resolve conflicts, and build stronger connections with one another.</p>
                </div>

                <div class="type-card">
                    <h3>Group Therapy</h3>
                    <p>Connect with others facing similar challenges in a supportive group environment led by a trained therapist.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="therapy-cta section-padding bg-primary">
        <div class="container text-center">
            <h2>Ready to Start Your Journey?</h2>
            <p>Take the first step toward better mental health today</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-white">Make a Referral</a>
                <a href="tel:3202814449" class="btn btn-outline-white">Call (320) 281-4449</a>
            </div>
        </div>
    </section>
</main>

<style>
.service-areas-badge {
    display: inline-flex;
    align-items: center;
    gap: 8px;
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    padding: 12px 20px;
    border-radius: 8px;
    margin-bottom: 1.5rem;
    border-left: 4px solid var(--primary-green);
}

.service-areas-badge svg {
    color: var(--primary-green);
    flex-shrink: 0;
}

.service-areas-badge span {
    color: var(--text-color);
    font-size: var(--font-size-small);
}

.overview-content-full {
    max-width: 800px;
}

.overview-content-full h2 {
    color: var(--primary-green);
    margin-bottom: 1.5rem;
}

.overview-content-full p {
    font-size: var(--font-size-body);
    line-height: 1.8;
    margin-bottom: 1rem;
}

.conditions-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 3rem;
}

.condition-card {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    text-align: center;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    transition: transform 0.3s ease;
}

.condition-card:hover {
    transform: translateY(-5px);
}

.condition-card h3 {
    color: var(--primary-green);
    font-size: var(--font-size-body);
    margin-bottom: 0.5rem;
}

.condition-card p {
    color: var(--text-color);
}

.types-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.type-card {
    background: var(--primary-green);
    color: white;
    padding: 2rem;
    border-radius: 8px;
    text-align: center;
}

.type-card h3 {
    font-size: var(--font-size-body);
    margin-bottom: 1rem;
    color: white;
}

.type-card p {
    font-size: var(--font-size-small);
    opacity: 0.9;
    line-height: 1.6;
}

.therapy-cta {
    background: var(--primary-green);
}

.therapy-cta h2, .therapy-cta p {
    color: white;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 1.5rem;
}

@media (max-width: 992px) {
    .conditions-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .types-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .conditions-grid, .types-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>
