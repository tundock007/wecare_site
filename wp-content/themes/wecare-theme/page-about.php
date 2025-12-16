<?php
/**
 * Template Name: About Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">About WeCare</h1>
        <p class="page-subtitle">Integrated Care. Mindful Wellbeing.</p>
    </div>
</section>

<!-- About Introduction -->
<section class="section about-intro">
    <div class="container">
        <div class="about-grid">
            <div class="about-text">
                <h2>Our Story</h2>
                <p>WeCare was founded with a simple yet powerful mission: to provide compassionate, culturally responsive care services to adults in the greater St. Cloud, Minnesota area.</p>
                <p>We understand that everyone's journey is unique. That's why we take the time to listen, understand, and create personalized care plans that respect your individual needs, cultural background, and personal goals.</p>
                <p>Our team of dedicated professionals is committed to helping you face life's challenges with empathy and understanding. Whether you need support with mental health, daily living activities, or finding stable housing, we're here to walk alongside you every step of the way.</p>
            </div>
            <div class="about-image">
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/about-team.jpg" alt="WeCare Team">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="section mission-vision">
    <div class="container">
        <div class="mv-grid">
            <div class="mv-card">
                <div class="mv-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><path d="M12 16v-4M12 8h.01"></path></svg>
                </div>
                <h3>Our Mission</h3>
                <p>To empower individuals to lead complete and independent lives through compassionate, culturally responsive care services that promote mental wellness, personal growth, and community integration.</p>
            </div>
            <div class="mv-card">
                <div class="mv-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path><circle cx="12" cy="12" r="3"></circle></svg>
                </div>
                <h3>Our Vision</h3>
                <p>A community where every individual has access to the support they need to thrive, regardless of their background or circumstances.</p>
            </div>
            <div class="mv-card">
                <div class="mv-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </div>
                <h3>Our Values</h3>
                <p>Compassion, respect, integrity, cultural responsiveness, and a commitment to excellence in everything we do.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="section why-choose-section">
    <div class="container">
        <h2 class="section-title-center">Why Choose WeCare?</h2>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path></svg>
                </div>
                <h4>Culturally Responsive Care</h4>
                <p>We embrace diversity and provide care that respects your cultural background, beliefs, and traditions.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                </div>
                <h4>Experienced Team</h4>
                <p>Our certified and trained professionals are dedicated to your wellbeing and continuous improvement.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                </div>
                <h4>Flexible Scheduling</h4>
                <p>We work around your schedule to provide services when you need them most.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                </div>
                <h4>Quality Assurance</h4>
                <p>We maintain the highest standards of care through regular training and quality monitoring.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="section team-section">
    <div class="container">
        <h2 class="section-title-center">Our Leadership Team</h2>
        <div class="team-grid">
            <div class="team-card">
                <div class="team-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/team-1.jpg" alt="Team Member">
                </div>
                <div class="team-info">
                    <h4>Executive Director</h4>
                    <p>Leading our mission to provide exceptional care services to the community.</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/team-2.jpg" alt="Team Member">
                </div>
                <div class="team-info">
                    <h4>Clinical Director</h4>
                    <p>Overseeing our behavioral health programs and clinical staff.</p>
                </div>
            </div>
            <div class="team-card">
                <div class="team-image">
                    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/team-3.jpg" alt="Team Member">
                </div>
                <div class="team-info">
                    <h4>Operations Manager</h4>
                    <p>Ensuring smooth delivery of all our care services.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA -->
<section class="section cta-section">
    <div class="container">
        <h2>Join Our Team</h2>
        <p>We're always looking for compassionate individuals to join our growing team.</p>
        <div class="cta-buttons">
            <a href="<?php echo esc_url(home_url('/careers')); ?>" class="btn btn-white">View Opportunities</a>
            <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline">Contact Us</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
