<?php
/**
 * Template Name: Referrals Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">Referrals</h1>
        <p class="page-subtitle">Partner with us to support individuals in need</p>
    </div>
</section>

<!-- Referral Info -->
<section class="section referral-info">
    <div class="container">
        <div class="referral-intro text-center">
            <h2>Making a Referral</h2>
            <p class="lead">We accept referrals from healthcare providers, social workers, case managers, family members, and self-referrals. Our team will work closely with you to ensure a smooth transition into our services.</p>
        </div>

        <div class="referral-services">
            <h3 class="text-center">Services We Accept Referrals For:</h3>
            <div class="referral-cards">
                <div class="referral-card">
                    <h4>Behavioral Health Services</h4>
                    <ul>
                        <li>Adult Rehabilitative Mental Health Services (ARMHS)</li>
                        <li>Outpatient Therapy</li>
                    </ul>
                    <p><strong>Eligibility:</strong> Adults 18+ with mental health diagnosis</p>
                </div>
                <div class="referral-card">
                    <h4>Personal Care Assistance (PCA)</h4>
                    <ul>
                        <li>Daily living assistance</li>
                        <li>Personal care support</li>
                    </ul>
                    <p><strong>Eligibility:</strong> Medical Assistance enrolled individuals with assessed needs</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Referral Form -->
<section class="section referral-form-section">
    <div class="container">
        <div class="referral-form-wrapper">
            <h2>Submit a Referral</h2>
            <p>Please complete the form below and a member of our team will contact you within 1-2 business days.</p>
            
            <form class="referral-form" action="#" method="POST">
                <!-- Referrer Information -->
                <fieldset>
                    <legend>Referrer Information</legend>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="referrer-name">Your Name *</label>
                            <input type="text" id="referrer-name" name="referrer_name" required>
                        </div>
                        <div class="form-group">
                            <label for="referrer-organization">Organization</label>
                            <input type="text" id="referrer-organization" name="referrer_organization">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="referrer-email">Email *</label>
                            <input type="email" id="referrer-email" name="referrer_email" required>
                        </div>
                        <div class="form-group">
                            <label for="referrer-phone">Phone *</label>
                            <input type="tel" id="referrer-phone" name="referrer_phone" required>
                        </div>
                    </div>
                </fieldset>

                <!-- Client Information -->
                <fieldset>
                    <legend>Client Information</legend>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="client-name">Client Name *</label>
                            <input type="text" id="client-name" name="client_name" required>
                        </div>
                        <div class="form-group">
                            <label for="client-dob">Date of Birth *</label>
                            <input type="date" id="client-dob" name="client_dob" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group">
                            <label for="client-phone">Client Phone</label>
                            <input type="tel" id="client-phone" name="client_phone">
                        </div>
                        <div class="form-group">
                            <label for="client-county">County *</label>
                            <input type="text" id="client-county" name="client_county" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="insurance">Insurance Type *</label>
                        <select id="insurance" name="insurance" required>
                            <option value="">Select insurance</option>
                            <option value="ma">Medical Assistance (MA)</option>
                            <option value="medicare">Medicare</option>
                            <option value="private">Private Insurance</option>
                            <option value="other">Other</option>
                        </select>
                    </div>
                </fieldset>

                <!-- Service Request -->
                <fieldset>
                    <legend>Service Request</legend>
                    <div class="form-group">
                        <label>Services Requested *</label>
                        <div class="checkbox-group">
                            <label><input type="checkbox" name="services[]" value="armhs"> ARMHS</label>
                            <label><input type="checkbox" name="services[]" value="therapy"> Outpatient Therapy</label>
                            <label><input type="checkbox" name="services[]" value="pca"> Personal Care Assistance (CFSS)</label>
                            <label><input type="checkbox" name="services[]" value="mnsure"> MNSure Navigation</label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="reason">Reason for Referral *</label>
                        <textarea id="reason" name="reason" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="additional">Additional Notes</label>
                        <textarea id="additional" name="additional" rows="3"></textarea>
                    </div>
                </fieldset>

                <button type="submit" class="btn btn-primary">Submit Referral</button>
            </form>
        </div>
    </div>
</section>

<!-- Contact CTA -->
<section class="section referral-cta">
    <div class="container text-center">
        <h3>Need Help with a Referral?</h3>
        <p>Our referral coordinators are here to assist you.</p>
        <div class="cta-buttons">
            <a href="tel:3202814449" class="btn btn-primary">Call (320) 281-4449</a>
            <a href="mailto:referrals@wecaremn.com" class="btn btn-secondary">Email Us</a>
        </div>
    </div>
</section>

<?php get_footer(); ?>
