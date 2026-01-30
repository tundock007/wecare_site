<?php
/**
 * Template Name: Community Resources
 * Description: Community Resources page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Community Resources</h1>
            <p class="page-subtitle">Helpful resources for our community</p>
        </div>
    </section>

    <!-- Resources Content -->
    <section class="resources-content section-padding">
        <div class="container">
            <div class="resources-intro">
                <p>We've compiled a list of helpful county resources for individuals and families in our service area. These government offices can provide additional support and services.</p>
            </div>

            <h2 class="section-title text-center">County Resources</h2>

            <div class="resources-grid">
                <!-- Stearns County -->
                <div class="resource-card">
                    <div class="resource-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Stearns - Community Resources.webp" alt="Stearns County">
                    </div>
                    <h3>Stearns County</h3>
                    <div class="resource-details">
                        <p class="resource-phone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <a href="tel:3206566000">(320) 656-6000</a>
                        </p>
                        <a href="https://www.stearnscountymn.gov/" target="_blank" rel="noopener" class="resource-link">Visit Website →</a>
                    </div>
                </div>

                <!-- Sherburne County -->
                <div class="resource-card">
                    <div class="resource-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Sherburne - Community Resources.webp" alt="Sherburne County">
                    </div>
                    <h3>Sherburne County</h3>
                    <div class="resource-details">
                        <p class="resource-phone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <a href="tel:7637653000">(763) 765-3000</a>
                        </p>
                        <a href="https://www.co.sherburne.mn.us/" target="_blank" rel="noopener" class="resource-link">Visit Website →</a>
                    </div>
                </div>

                <!-- Benton County -->
                <div class="resource-card">
                    <div class="resource-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Benton - Community Resources.webp" alt="Benton County">
                    </div>
                    <h3>Benton County</h3>
                    <div class="resource-details">
                        <p class="resource-phone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <a href="tel:3209685000">(320) 968-5000</a>
                        </p>
                        <a href="https://www.co.benton.mn.us/" target="_blank" rel="noopener" class="resource-link">Visit Website →</a>
                    </div>
                </div>

                <!-- Wright County -->
                <div class="resource-card">
                    <div class="resource-image">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Wright - Community Resources.webp" alt="Wright County">
                    </div>
                    <h3>Wright County</h3>
                    <div class="resource-details">
                        <p class="resource-phone">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            <a href="tel:7636823900">(763) 682-3900</a>
                        </p>
                        <a href="https://www.wrightcountymn.gov/" target="_blank" rel="noopener" class="resource-link">Visit Website →</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Crisis Line -->
    <section class="crisis-section section-padding bg-light">
        <div class="container">
            <div class="crisis-content">
                <h2>24/7 Crisis Line</h2>
                <p>If you or someone you know is in crisis, help is available 24 hours a day, 7 days a week.</p>
                <a href="tel:3202535555" class="crisis-phone">(320) 253-5555</a>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="resources-cta section-padding bg-primary">
        <div class="container text-center">
            <h2>Need Help Finding Resources?</h2>
            <p>Our team can help connect you with the right services and support</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Contact Us</a>
                <a href="tel:3202814449" class="btn btn-outline-white">Call (320) 281-4449</a>
            </div>
        </div>
    </section>
</main>

<style>
.resources-intro {
    max-width: 700px;
    margin: 0 auto 3rem;
    text-align: center;
}

.resources-intro p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--text-color);
}

.resources-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.resource-card {
    background: white;
    padding: 0;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.08);
    text-align: center;
    transition: transform 0.3s ease;
    overflow: hidden;
}

.resource-card:hover {
    transform: translateY(-5px);
}

.resource-image {
    width: 100%;
    height: 120px;
    overflow: hidden;
}

.resource-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.resource-card h3 {
    padding: 1.5rem 1.5rem 1rem;
    color: var(--primary-green);
    font-size: 1.35rem;
    margin-bottom: 0;
    border-bottom: 2px solid var(--accent-orange);
}

.resource-details {
    display: flex;
    flex-direction: column;
    gap: 1rem;
    padding: 1rem 1.5rem 1.5rem;
}

.resource-phone {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 0.5rem;
    margin: 0;
}

.resource-phone svg {
    color: var(--accent-orange);
}

.resource-phone a {
    color: var(--text-color);
    font-weight: 500;
    text-decoration: none;
}

.resource-phone a:hover {
    color: var(--primary-green);
}

.resource-link {
    color: var(--primary-green);
    font-weight: 500;
    text-decoration: none;
    transition: color 0.3s ease;
}

.resource-link:hover {
    color: var(--accent-orange);
}

.crisis-content {
    max-width: 600px;
    margin: 0 auto;
    text-align: center;
}

.crisis-content h2 {
    color: var(--primary-green);
    margin-bottom: 1rem;
}

.crisis-content p {
    font-size: 1.1rem;
    margin-bottom: 1.5rem;
}

.crisis-phone {
    display: inline-block;
    font-size: 2rem;
    font-weight: 700;
    color: var(--primary-green);
    text-decoration: none;
    padding: 1rem 2rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    transition: all 0.3s ease;
}

.crisis-phone:hover {
    background: var(--primary-green);
    color: white;
}

.resources-cta {
    background: var(--primary-green);
}

.resources-cta h2, .resources-cta p {
    color: white;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 1.5rem;
}

@media (max-width: 992px) {
    .resources-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 576px) {
    .resources-grid {
        grid-template-columns: 1fr;
    }

    .crisis-phone {
        font-size: 1.5rem;
    }
}
</style>

<?php get_footer(); ?>
