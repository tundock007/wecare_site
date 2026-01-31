<?php
/**
 * Template Name: Leadership
 * Description: Leadership team page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Our Leadership</h1>
            <p class="page-subtitle">Meet the dedicated individuals who drive our vision</p>
        </div>
    </section>

    <!-- Leadership Team -->
    <section class="leadership-team section-padding">
        <div class="container">
            <div class="team-intro">
                <p>Our leadership team brings together experienced professionals dedicated to ensuring our organization's continued success in serving our community.</p>
            </div>

            <div class="team-grid">
                <!-- Ola - CEO -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Coming Soon - Leadership Page.webp" alt="Ola - Chief Executive Officer at WeCare Minnesota">
                    </div>
                    <div class="member-info">
                        <h3>Ola</h3>
                        <p class="member-title">Chief Executive Officer</p>
                    </div>
                </div>

                <!-- Anna Stefanelli -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Anna - Leadership Page.webp" alt="Anna Stefanelli - Quality Assurance Manager at WeCare">
                    </div>
                    <div class="member-info">
                        <h3>Anna Stefanelli</h3>
                        <p class="member-title">Quality Assurance Manager</p>
                    </div>
                </div>

                <!-- Deb Hesli -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Coming Soon - Leadership Page.webp" alt="Deb Hesli - Clinical Supervisor at WeCare">
                    </div>
                    <div class="member-info">
                        <h3>Deb Hesli</h3>
                        <p class="member-title">Clinical Supervisor</p>
                    </div>
                </div>

                <!-- Naima Hussein -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Naima - Leadership Page.webp" alt="Naima Hussein - Clinical Trainee at WeCare">
                    </div>
                    <div class="member-info">
                        <h3>Naima Hussein</h3>
                        <p class="member-title">Clinical Trainee</p>
                    </div>
                </div>

                <!-- Kathy Mandery -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Kathy - Leadership Page.webp" alt="Kathy Mandery - Human Resource Manager at WeCare">
                    </div>
                    <div class="member-info">
                        <h3>Kathy Mandery</h3>
                        <p class="member-title">Human Resource Manager</p>
                    </div>
                </div>

                <!-- Lynn Karst -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Coming Soon - Leadership Page.webp" alt="Lynn Karst - Outreach Engagement Specialist at WeCare">
                    </div>
                    <div class="member-info">
                        <h3>Lynn Karst</h3>
                        <p class="member-title">Outreach/Engagement Specialist</p>
                    </div>
                </div>

                <!-- Amanda Sand -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Coming Soon - Leadership Page.webp" alt="Amanda Sand - ARMHS Supervisor Central Minnesota at WeCare">
                    </div>
                    <div class="member-info">
                        <h3>Amanda Sand</h3>
                        <p class="member-title">ARMHS Supervisor - Central MN</p>
                    </div>
                </div>

                <!-- Donnyel Panek -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Coming Soon - Leadership Page.webp" alt="Donnyel Panek - ARMHS Supervisor Metro Minnesota at WeCare">
                    </div>
                    <div class="member-info">
                        <h3>Donnyel Panek</h3>
                        <p class="member-title">ARMHS Supervisor - Metro MN</p>
                    </div>
                </div>

                <!-- Hamdi Ahmed -->
                <div class="team-member">
                    <div class="member-photo">
                        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/Website Photos/Coming Soon - Leadership Page.webp" alt="Hamdi Ahmed - Adult Day Services Program Coordinator at WeCare">
                    </div>
                    <div class="member-info">
                        <h3>Hamdi Ahmed</h3>
                        <p class="member-title">ADS Program Coordinator</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="leadership-cta section-padding bg-primary">
        <div class="container text-center">
            <h2>Join Our Team</h2>
            <p>We're always looking for passionate individuals to help serve our community</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/careers')); ?>" class="btn btn-white">View Open Positions</a>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-outline-white">Contact Us</a>
            </div>
        </div>
    </section>
</main>

<style>
.team-intro {
    text-align: center;
    max-width: 700px;
    margin: 0 auto 3rem;
}

.team-intro p {
    font-size: var(--font-size-body);
    color: var(--text-color);
    line-height: 1.7;
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2rem;
}

.team-member {
    text-align: center;
}

.member-photo {
    width: 180px;
    height: 180px;
    margin: 0 auto 1.25rem;
    border-radius: 50%;
    overflow: hidden;
    box-shadow: 0 5px 20px rgba(0,0,0,0.1);
}

.member-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.member-photo.placeholder {
    background: linear-gradient(135deg, #e0e0e0 0%, #c0c0c0 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.member-photo.placeholder span {
    color: #888;
    font-size: var(--font-size-small);
    font-weight: 500;
}

.member-info h3 {
    color: var(--primary-green);
    font-size: var(--font-size-body);
    margin-bottom: 0.35rem;
}

.member-title {
    color: var(--accent-orange);
    font-weight: 500;
    font-size: var(--font-size-small);
}

.leadership-cta {
    background: var(--primary-green);
}

.leadership-cta h2, .leadership-cta p {
    color: white;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    margin-top: 1.5rem;
}

@media (max-width: 992px) {
    .team-grid {
        grid-template-columns: repeat(3, 1fr);
    }
}

@media (max-width: 768px) {
    .team-grid {
        grid-template-columns: repeat(2, 1fr);
    }

    .member-photo {
        width: 150px;
        height: 150px;
    }
}

@media (max-width: 576px) {
    .team-grid {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>
