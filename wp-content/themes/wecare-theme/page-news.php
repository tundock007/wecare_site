<?php
/**
 * Template Name: News
 * Description: News and Articles page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">News & Articles</h1>
            <p class="page-subtitle">Updates and insights from WeCare</p>
        </div>
    </section>

    <!-- News Content -->
    <section class="news-content section-padding">
        <div class="container">
            <div class="news-intro">
                <p>Stay up to date with the latest news, events, and articles from WeCare. We share stories about our community impact, helpful resources, and updates about our services.</p>
            </div>

            <div class="news-grid">
                <!-- Placeholder news items -->
                <article class="news-card">
                    <div class="news-date">Coming Soon</div>
                    <h3>Community Updates</h3>
                    <p>Check back soon for news and updates about our programs and community initiatives.</p>
                </article>

                <article class="news-card">
                    <div class="news-date">Coming Soon</div>
                    <h3>Health & Wellness Tips</h3>
                    <p>We'll be sharing helpful articles about health, wellness, and self-care.</p>
                </article>

                <article class="news-card">
                    <div class="news-date">Coming Soon</div>
                    <h3>Event Announcements</h3>
                    <p>Stay tuned for information about upcoming community events and programs.</p>
                </article>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="news-cta section-padding bg-light">
        <div class="container text-center">
            <h2>Stay Connected</h2>
            <p>Contact us to learn more about our services and community programs</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact Us</a>
            </div>
        </div>
    </section>
</main>

<style>
.news-intro {
    max-width: 700px;
    margin: 0 auto 3rem;
    text-align: center;
}

.news-intro p {
    font-size: 1.1rem;
    line-height: 1.8;
    color: var(--text-color);
}

.news-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
}

.news-card {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
    border-top: 4px solid var(--accent-orange);
}

.news-date {
    color: var(--accent-orange);
    font-size: 0.9rem;
    font-weight: 500;
    margin-bottom: 0.75rem;
}

.news-card h3 {
    color: var(--primary-green);
    font-size: 1.35rem;
    margin-bottom: 0.75rem;
}

.news-card p {
    color: var(--text-color);
    line-height: 1.6;
}

.news-cta h2 {
    color: var(--primary-green);
}

.cta-buttons {
    margin-top: 1.5rem;
}

@media (max-width: 992px) {
    .news-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .news-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>
