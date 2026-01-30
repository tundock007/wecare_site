<?php
/**
 * Template Name: Contact Page
 *
 * @package WeCare
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Contact Us</h1>
            <p class="page-subtitle">We're here to help. Reach out with questions or to learn more about our services.</p>
        </div>
    </section>

    <!-- Contact Info & Map Section -->
    <section class="contact-main section-padding">
        <div class="container">
            <div class="contact-grid">
                <!-- Contact Information -->
                <div class="contact-info-card">
                    <h2>Get In Touch</h2>
                    <p class="contact-intro">At WeCare, we are constantly striving to improve our already high standards. If you have any questions, concerns, or feedback, please don't hesitate to reach out!</p>

                    <div class="contact-details">
                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div class="contact-text">
                                <h4>Address</h4>
                                <p>136 Division St.<br>Waite Park, MN 56387</p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path></svg>
                            </div>
                            <div class="contact-text">
                                <h4>Phone</h4>
                                <p><a href="tel:3202814449">(320) 281-4449</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div class="contact-text">
                                <h4>Email</h4>
                                <p><a href="mailto:info@wecaremn.com">info@wecaremn.com</a></p>
                            </div>
                        </div>

                        <div class="contact-item">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><polyline points="12 6 12 12 16 14"></polyline></svg>
                            </div>
                            <div class="contact-text">
                                <h4>Office Hours</h4>
                                <p>Monday - Friday<br>8:30 AM - 4:30 PM</p>
                            </div>
                        </div>
                    </div>

                    <div class="contact-social">
                        <h4>Follow Us</h4>
                        <div class="social-links">
                            <a href="https://www.facebook.com/WeCareMinnesota/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                            </a>
                            <a href="https://www.instagram.com/wecare_mn/" target="_blank" rel="noopener noreferrer" aria-label="Instagram">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                            </a>
                            <a href="https://www.linkedin.com/company/wecareadultdaycareandbehavioralhealth/" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Map -->
                <div class="contact-map-wrapper">
                    <div class="map-container">
                        <div class="map-business-card">
                            <h3>WeCare</h3>
                            <p class="business-address">136 Division St, Waite Park, MN 56387</p>
                            <div class="business-rating">
                                <span class="rating-stars">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FBBC04"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FBBC04"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FBBC04"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="#FBBC04"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#FBBC04" stroke-width="2"><path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/></svg>
                                </span>
                                <span class="rating-text">4.6</span>
                                <a href="https://www.google.com/maps/search/WeCare+136+Division+St+Waite+Park+MN" target="_blank" rel="noopener noreferrer" class="review-count">See reviews</a>
                            </div>
                            <a href="https://www.google.com/maps/dir//WeCare,+136+Division+St,+Waite+Park,+MN+56387" target="_blank" rel="noopener noreferrer" class="directions-link">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l19-9-9 19-2-8-8-2z"/></svg>
                                Get Directions
                            </a>
                        </div>
                        <iframe
                            src="https://maps.google.com/maps?q=WeCare+136+Division+St+Waite+Park+MN+56387&t=m&z=15&ie=UTF8&iwloc=&output=embed"
                            width="100%"
                            height="100%"
                            style="border:0;"
                            allowfullscreen=""
                            loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="contact-form-section section-padding bg-light">
        <div class="container">
            <h2 class="section-title text-center">Send Us a Message</h2>
            <p class="section-subtitle text-center">Have a question? Fill out the form below and we'll get back to you as soon as possible.</p>

            <div class="contact-form-wrapper">
                <form class="contact-form" action="#" method="POST">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="first-name">First Name *</label>
                            <input type="text" id="first-name" name="first_name" required>
                        </div>
                        <div class="form-group">
                            <label for="last-name">Last Name *</label>
                            <input type="text" id="last-name" name="last_name" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="subject">Subject *</label>
                        <select id="subject" name="subject" required>
                            <option value="">Select a topic</option>
                            <option value="general">General Inquiry</option>
                            <option value="services">Services Information</option>
                            <option value="referral">Make a Referral</option>
                            <option value="careers">Career Opportunities</option>
                            <option value="other">Other</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="message">Message *</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>

                    <div class="form-submit">
                        <button type="submit" class="btn btn-primary">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</main>

<style>
/* Contact Grid */
.contact-grid {
    display: grid;
    grid-template-columns: 1fr 1.2fr;
    gap: 3rem;
    align-items: start;
}

/* Contact Info Card */
.contact-info-card {
    background: white;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.contact-info-card h2 {
    color: var(--primary-green);
    margin-bottom: 1rem;
}

.contact-intro {
    color: var(--text-color);
    line-height: 1.7;
    margin-bottom: 2rem;
}

/* Contact Details */
.contact-details {
    margin-bottom: 2rem;
}

.contact-item {
    display: flex;
    gap: 1rem;
    margin-bottom: 1.5rem;
}

.contact-item:last-child {
    margin-bottom: 0;
}

.contact-icon {
    width: 48px;
    height: 48px;
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    color: var(--primary-green);
}

.contact-text h4 {
    color: var(--primary-green);
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 0.25rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.contact-text p {
    color: var(--text-color);
    line-height: 1.5;
    margin: 0;
}

.contact-text a {
    color: var(--text-color);
    text-decoration: none;
    transition: color 0.3s ease;
}

.contact-text a:hover {
    color: var(--primary-green);
}

/* Contact Social */
.contact-social {
    padding-top: 1.5rem;
    border-top: 1px solid #eee;
}

.contact-social h4 {
    color: var(--primary-green);
    font-size: 0.9rem;
    font-weight: 600;
    margin-bottom: 1rem;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.social-links {
    display: flex;
    gap: 0.75rem;
}

.social-links a {
    width: 44px;
    height: 44px;
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    border-radius: 10px;
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-green);
    transition: all 0.3s ease;
}

.social-links a:hover {
    background: var(--primary-green);
    color: white;
    transform: translateY(-3px);
}

/* Map Wrapper */
.contact-map-wrapper {
    height: 100%;
    min-height: 500px;
}

.map-container {
    position: relative;
    height: 100%;
    min-height: 500px;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.map-container iframe {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}

/* Map Business Card */
.map-business-card {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 10;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.15);
    padding: 1.25rem;
    max-width: 280px;
}

.map-business-card h3 {
    font-size: 1.1rem;
    font-weight: 600;
    color: #1a73e8;
    margin: 0 0 0.25rem 0;
}

.map-business-card .business-address {
    font-size: 0.85rem;
    color: #5f6368;
    margin: 0 0 0.75rem 0;
}

.map-business-card .business-rating {
    display: flex;
    align-items: center;
    gap: 6px;
    margin-bottom: 0.75rem;
}

.map-business-card .rating-stars {
    display: flex;
    gap: 1px;
}

.map-business-card .rating-text {
    font-size: 0.85rem;
    font-weight: 500;
    color: #202124;
}

.map-business-card .review-count {
    font-size: 0.85rem;
    color: #1a73e8;
    text-decoration: none;
}

.map-business-card .review-count:hover {
    text-decoration: underline;
}

.map-business-card .directions-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    font-size: 0.9rem;
    color: #1a73e8;
    text-decoration: none;
    font-weight: 500;
}

.map-business-card .directions-link:hover {
    text-decoration: underline;
}

/* Contact Form Section */
.contact-form-wrapper {
    max-width: 700px;
    margin: 2rem auto 0;
    background: white;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.form-submit {
    text-align: center;
    margin-top: 1.5rem;
}

/* Responsive */
@media (max-width: 992px) {
    .contact-grid {
        grid-template-columns: 1fr;
    }

    .contact-map-wrapper {
        min-height: 400px;
    }

    .map-container {
        min-height: 400px;
    }
}

@media (max-width: 768px) {
    .contact-info-card {
        padding: 1.5rem;
    }

    .contact-form-wrapper {
        padding: 1.5rem;
    }

    .map-business-card {
        left: 10px;
        right: 10px;
        max-width: none;
    }
}
</style>

<?php get_footer(); ?>
