<?php
/**
 * Template Name: Referrals Page
 *
 * @package WeCare
 */

get_header();
?>

<style>
/* Referral Form Styles */
.referral-page-wrapper {
    padding: 24px 20px;
    background: #f9fafb;
    min-height: 60vh;
}

.referral-form-container {
    max-width: 1000px;
    margin: 0 auto;
    background: white;
    border-radius: 12px;
    box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1);
    overflow: hidden;
}

.referral-form-container .form-header {
    background: white;
    color: #1f2937;
    padding: 16px 24px;
    text-align: center;
    border-bottom: 1px solid #e5e7eb;
}

.referral-form-container .form-header h1 {
    font-size: 18px;
    font-weight: 600;
    margin-bottom: 4px;
    color: #111827;
}

.referral-form-container .form-header p {
    color: #6b7280;
    font-size: 13px;
    margin: 0;
}

.referral-form-container .form-body {
    padding: 24px 32px;
}

.referral-form-container .form-section {
    margin-bottom: 20px;
    padding-bottom: 16px;
    border-bottom: 1px solid #e5e7eb;
}

.referral-form-container .form-section:last-child {
    margin-bottom: 0;
    padding-bottom: 0;
    border-bottom: none;
}

.referral-form-container .section-title {
    font-size: 13px;
    font-weight: 600;
    color: #1f2937;
    margin-bottom: 10px;
    display: flex;
    align-items: center;
    gap: 8px;
}

.referral-form-container .section-title::before {
    content: '';
    width: 3px;
    height: 16px;
    background: #D4711A;
    border-radius: 2px;
}

.referral-form-container .form-row {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-bottom: 12px;
}

.referral-form-container .form-row > .form-group {
    flex: 1 1 200px;
    min-width: 200px;
}

.referral-form-container .form-row.cols-2 {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
}

.referral-form-container .form-row.cols-3 {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
}

.referral-form-container .form-row.cols-4 {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
}

.referral-form-container .form-row.cols-2 > .form-group,
.referral-form-container .form-row.cols-3 > .form-group,
.referral-form-container .form-row.cols-4 > .form-group {
    flex: none;
    min-width: 0;
}

.referral-form-container .form-group {
    display: flex;
    flex-direction: column;
}

.referral-form-container .form-group.full-width {
    grid-column: 1 / -1;
}

.referral-form-container .form-group.span-2 {
    grid-column: span 2;
}

.referral-form-container label {
    font-size: 12px;
    font-weight: 500;
    color: #374151;
    margin-bottom: 4px;
}

.referral-form-container label .required {
    color: #ef4444;
    margin-left: 2px;
}

.referral-form-container input[type="text"],
.referral-form-container input[type="email"],
.referral-form-container input[type="tel"],
.referral-form-container input[type="date"],
.referral-form-container select,
.referral-form-container textarea {
    width: 100% !important;
    padding: 8px 10px !important;
    border: 1px solid #d1d5db !important;
    border-radius: 6px !important;
    font-size: 12px !important;
    line-height: 1.4 !important;
    height: auto !important;
    min-height: 36px !important;
    max-height: none !important;
    box-sizing: border-box !important;
    transition: border-color 0.15s, box-shadow 0.15s;
    background-color: #fff !important;
}

.referral-form-container select {
    appearance: none !important;
    -webkit-appearance: none !important;
    -moz-appearance: none !important;
    background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 12 12'%3E%3Cpath fill='%23374151' d='M6 9L1 4h10z'/%3E%3C/svg%3E") !important;
    background-repeat: no-repeat !important;
    background-position: right 12px center !important;
    padding-right: 36px !important;
}

.referral-form-container input:focus,
.referral-form-container select:focus,
.referral-form-container textarea:focus {
    outline: none;
    border-color: #D4711A !important;
    box-shadow: 0 0 0 3px rgba(212, 113, 26, 0.1);
}

.referral-form-container textarea {
    resize: vertical !important;
    min-height: 80px !important;
    max-width: 100% !important;
}

.referral-form-container .checkbox-group {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
    gap: 8px;
    align-items: start;
}

.referral-form-container .checkbox-item {
    display: flex;
    align-items: flex-start;
    gap: 6px;
}

.referral-form-container .checkbox-item input[type="checkbox"] {
    width: 18px;
    height: 18px;
    accent-color: #D4711A;
    margin-top: 2px;
    flex-shrink: 0;
}

.referral-form-container .radio-group {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
}

.referral-form-container .radio-item {
    display: flex;
    align-items: center;
    gap: 5px;
}

.referral-form-container .radio-item input[type="radio"] {
    width: 18px;
    height: 18px;
    accent-color: #D4711A;
}

.referral-form-container .conditional-section {
    display: none;
    margin-top: 16px;
    padding: 16px;
    background: #f9fafb;
    border-radius: 8px;
    border-left: 3px solid #D4711A;
}

.referral-form-container .conditional-section.visible {
    display: block;
}

.referral-form-container .consent-box {
    background: #fef3c7;
    border: 1px solid #f59e0b;
    border-radius: 8px;
    padding: 12px;
    margin-bottom: 12px;
}

.referral-form-container .consent-box h4 {
    color: #92400e;
    margin-bottom: 6px;
    font-size: 14px;
}

.referral-form-container .consent-box p {
    font-size: 12px;
    color: #78350f;
    margin-bottom: 10px;
    line-height: 1.5;
}

.referral-form-container .submit-btn {
    max-width: 280px;
    width: 100%;
    margin: 0 auto;
    display: block;
    padding: 10px 20px;
    background: linear-gradient(135deg, #D4711A 0%, #B85E15 100%);
    color: white;
    border: none;
    border-radius: 8px;
    font-size: 14px;
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.15s, box-shadow 0.15s;
}

.referral-form-container .submit-btn:hover {
    transform: translateY(-1px);
    box-shadow: 0 4px 12px rgba(212, 113, 26, 0.3);
}

.referral-form-container .submit-btn:disabled {
    background: #9ca3af;
    cursor: not-allowed;
    transform: none;
    box-shadow: none;
}

.referral-form-container .success-message {
    display: none;
    text-align: center;
    padding: 24px;
}

.referral-form-container .success-message.visible {
    display: block;
}

.referral-form-container .success-message .icon {
    width: 64px;
    height: 64px;
    background: #10b981;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    margin: 0 auto 16px;
}

.referral-form-container .success-message .icon svg {
    width: 32px;
    height: 32px;
    color: white;
}

.referral-form-container .success-message h2 {
    color: #059669;
    margin-bottom: 8px;
}

.referral-form-container .success-message p {
    color: #6b7280;
}

.referral-form-container .success-message .reference {
    background: #f3f4f6;
    padding: 12px 24px;
    border-radius: 8px;
    margin-top: 16px;
    display: inline-block;
}

.referral-form-container .success-message .reference strong {
    color: #1f2937;
}

.referral-form-container .success-message .actions {
    margin-top: 24px;
    display: flex;
    justify-content: center;
    gap: 12px;
}

.referral-form-container .success-message .back-btn {
    padding: 10px 24px;
    background: #f3f4f6;
    color: #374151;
    border: 1px solid #d1d5db;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
}

.referral-form-container .success-message .home-btn {
    padding: 10px 24px;
    background: linear-gradient(135deg, #D4711A 0%, #B85E15 100%);
    color: white;
    border: none;
    border-radius: 6px;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
}

.referral-form-container .error-message {
    background: #fef2f2;
    border: 1px solid #fecaca;
    border-radius: 8px;
    padding: 12px 16px;
    margin-bottom: 16px;
    color: #dc2626;
    display: none;
}

.referral-form-container .error-message.visible {
    display: block;
}

.referral-form-container .loading-spinner {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 2px solid #ffffff;
    border-radius: 50%;
    border-top-color: transparent;
    animation: spin 1s linear infinite;
    margin-right: 8px;
    vertical-align: middle;
}

@keyframes spin {
    to { transform: rotate(360deg); }
}

/* Service Type Cards */
.referral-form-container .service-type-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 10px;
    margin-top: 8px;
}

.referral-form-container .service-card {
    display: block;
    cursor: pointer;
    position: relative;
}

.referral-form-container .service-card input[type="radio"] {
    position: absolute;
    opacity: 0;
    width: 0;
    height: 0;
}

.referral-form-container .service-card .card-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    text-align: center;
    padding: 10px 8px;
    border: 2px solid #e5e7eb;
    border-radius: 8px;
    background: #fff;
    transition: all 0.2s ease;
    height: 100%;
    min-height: 50px;
}

.referral-form-container .service-card .card-content strong {
    font-size: 13px;
    color: #1f2937;
    margin-bottom: 2px;
}

.referral-form-container .service-card .card-content span {
    font-size: 11px;
    color: #6b7280;
}

.referral-form-container .service-card input[type="radio"]:checked + .card-content {
    border-color: #D4711A;
    background: #fff7ed;
    box-shadow: 0 0 0 3px rgba(212, 113, 26, 0.1);
}

.referral-form-container .service-card:hover .card-content {
    border-color: #D4711A;
}

@media (max-width: 900px) {
    .referral-form-container .service-type-cards {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 600px) {
    .referral-form-container .service-type-cards {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .referral-form-container .form-row > .form-group {
        flex: 1 1 calc(50% - 8px);
        min-width: calc(50% - 8px);
    }

    .referral-form-container .form-row.cols-3,
    .referral-form-container .form-row.cols-4 {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 640px) {
    .referral-form-container .form-row {
        display: flex;
        flex-direction: column;
    }

    .referral-form-container .form-row > .form-group {
        flex: none;
        width: 100%;
        min-width: 100%;
    }

    .referral-form-container .form-row.cols-2,
    .referral-form-container .form-row.cols-3,
    .referral-form-container .form-row.cols-4 {
        display: flex;
        flex-direction: column;
    }

    .referral-form-container .form-body {
        padding: 16px 20px;
    }

    .referral-form-container .checkbox-group {
        grid-template-columns: 1fr;
    }
}

/* Referral Service Cards */
.referral-cards {
    display: flex;
    flex-wrap: wrap;
    gap: 20px;
    justify-content: center;
}

.referral-card {
    background: #f9fafb;
    padding: 24px;
    border-radius: 12px;
    border-left: 4px solid var(--accent-orange);
    display: flex;
    flex-direction: column;
    width: calc(33.333% - 14px);
    max-width: 360px;
    min-width: 280px;
    box-sizing: border-box;
}

.referral-card-content {
    flex: 1;
}

.referral-card h4 {
    color: var(--primary-green);
    margin-bottom: 12px;
    font-size: var(--font-size-heading);
}

.referral-card p {
    color: #4b5563;
    margin-bottom: 12px;
    font-size: var(--font-size-body);
}

.referral-card .eligibility {
    font-size: var(--font-size-small);
    margin-bottom: 0;
}

/* Referral Card Buttons */
.referral-card-btn {
    display: inline-block;
    padding: 10px 20px;
    background: linear-gradient(135deg, #D4711A 0%, #B85E15 100%);
    color: white;
    border: none;
    border-radius: 6px;
    font-size: var(--font-size-button);
    font-weight: 600;
    cursor: pointer;
    transition: transform 0.15s, box-shadow 0.15s;
    text-decoration: none;
    text-align: center;
    margin-top: 16px;
    align-self: center;
}

.referral-card-btn:hover {
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(212, 113, 26, 0.3);
}

@media (max-width: 992px) {
    .referral-card {
        width: calc(50% - 10px);
        max-width: none;
    }
}

@media (max-width: 640px) {
    .referral-card {
        width: 100%;
        min-width: unset;
    }
}
</style>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Referrals</h1>
            <p class="page-subtitle">Partner with us to support individuals in need</p>
        </div>
    </section>

    <!-- Referral Info -->
    <section class="section referral-info" style="padding: 60px 0; background: #fff;">
        <div class="container">
            <div class="referral-intro" style="text-align: center; max-width: 800px; margin: 0 auto 40px;">
                <h2 style="color: var(--primary-green); margin-bottom: 16px;">Making a Referral</h2>
                <p style="font-size: var(--font-size-body); color: #4b5563; line-height: 1.7;">We accept referrals from healthcare providers, social workers, case managers, family members, and self-referrals. Our team will work closely with you to ensure a smooth transition into our services.</p>
            </div>

            <div class="referral-services">
                <h3 style="text-align: center; color: var(--primary-green); margin-bottom: 24px;">Services We Accept Referrals For:</h3>
                <div class="referral-cards">
                    <div class="referral-card">
                        <div class="referral-card-content">
                            <h4>ARMHS</h4>
                            <p>Adult Rehabilitative Mental Health Services helping clients with daily living skills, social skills, job readiness, healthcare access, and overall self-sufficiency.</p>
                            <p class="eligibility"><strong>Eligibility:</strong> Adults 18+ with mental health diagnosis</p>
                        </div>
                        <button type="button" class="referral-card-btn" data-service="behavioral_health">Make a Referral</button>
                    </div>
                    <div class="referral-card">
                        <div class="referral-card-content">
                            <h4>Outpatient Therapy</h4>
                            <p>Our clinicians support individuals through challenges including anxiety, depression, trauma, relationship stress, and life transitions.</p>
                            <p class="eligibility"><strong>Eligibility:</strong> Adults 18+ seeking mental health support</p>
                        </div>
                        <button type="button" class="referral-card-btn" data-service="behavioral_health">Make a Referral</button>
                    </div>
                    <div class="referral-card">
                        <div class="referral-card-content">
                            <h4>Adult Day Services</h4>
                            <p>Meaningful ways for adults 55+ to stay active, connect with others, and maintain their independence in a supportive daytime program.</p>
                            <p class="eligibility"><strong>Eligibility:</strong> Adults 55+ needing structured daytime support</p>
                        </div>
                        <button type="button" class="referral-card-btn" data-service="adult_day_services">Make a Referral</button>
                    </div>
                    <div class="referral-card">
                        <div class="referral-card-content">
                            <h4>PCA / CFSS</h4>
                            <p>Personal Care Assistant and Community First Services and Supports providing assistance with daily living at home or in the community.</p>
                            <p class="eligibility"><strong>Eligibility:</strong> Medical Assistance enrolled individuals with assessed needs</p>
                        </div>
                        <button type="button" class="referral-card-btn" data-service="pca">Make a Referral</button>
                    </div>
                    <div class="referral-card">
                        <div class="referral-card-content">
                            <h4>MNsure Navigation</h4>
                            <p>Certified navigators provide free, in-person help enrolling in Medical Assistance, MinnesotaCare, and other health plans.</p>
                            <p class="eligibility"><strong>Eligibility:</strong> Anyone needing health insurance enrollment assistance</p>
                        </div>
                        <button type="button" class="referral-card-btn" data-service="mnsure">Make a Referral</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="referral-page-wrapper">
        <div class="referral-form-container">
            <div class="form-header">
                <h1 id="formTitle">WeCare Referral</h1>
                <p id="formSubtitle">Complete this form to submit a referral for services</p>
            </div>

            <div class="form-body">
                <div class="success-message" id="successMessage">
                    <div class="icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h2>Referral Submitted Successfully!</h2>
                    <p>Thank you for your submission. Our team will review it and contact you soon.</p>
                    <div class="reference">
                        Reference Number: <strong id="referenceNumber"></strong>
                    </div>
                    <div class="actions">
                        <button type="button" class="back-btn" onclick="window.history.back();">Go Back</button>
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="home-btn">Return to Home</a>
                    </div>
                </div>

                <form id="referralForm">
                    <div class="error-message" id="errorMessage"></div>

                    <!-- Service Type Selection -->
                    <div class="form-section" id="serviceTypeSection">
                        <h3 class="section-title">Service Type</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>What type of services are you seeking? <span class="required">*</span></label>
                                <div class="service-type-cards">
                                    <label class="service-card">
                                        <input type="radio" name="referralType" value="behavioral_health" required>
                                        <div class="card-content">
                                            <strong>Behavioral Health</strong>
                                            <span>ARMHS, Outpatient Therapy, Assessments</span>
                                        </div>
                                    </label>
                                    <label class="service-card">
                                        <input type="radio" name="referralType" value="pca" required>
                                        <div class="card-content">
                                            <strong>PCA Services</strong>
                                            <span>Personal Care Assistant</span>
                                        </div>
                                    </label>
                                    <label class="service-card">
                                        <input type="radio" name="referralType" value="adult_day_services" required>
                                        <div class="card-content">
                                            <strong>Adult Day Services</strong>
                                            <span>Day Program</span>
                                        </div>
                                    </label>
                                    <label class="service-card">
                                        <input type="radio" name="referralType" value="mnsure" required>
                                        <div class="card-content">
                                            <strong>MNSure</strong>
                                            <span>Health Insurance Navigator</span>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Patient Information -->
                    <div class="form-section" id="patientInfoSection" style="display: none;">
                        <h3 class="section-title">Patient Information</h3>
                        <div class="form-row" id="nameRow">
                            <div class="form-group">
                                <label>First Name <span class="required">*</span></label>
                                <input type="text" name="firstName" required>
                            </div>
                            <div class="form-group" id="middleNameGroup" style="display: none;">
                                <label>Middle Name</label>
                                <input type="text" name="middleName">
                            </div>
                            <div class="form-group">
                                <label>Last Name <span class="required">*</span></label>
                                <input type="text" name="lastName" required>
                            </div>
                        </div>
                        <div class="form-row" id="contactRow">
                            <div class="form-group">
                                <label>Date of Birth <span class="required">*</span></label>
                                <input type="date" name="dateOfBirth" id="dateOfBirth" required>
                            </div>
                            <div class="form-group" id="singlePhoneGroup">
                                <label>Phone Number <span class="required">*</span></label>
                                <input type="tel" name="phone" placeholder="(555) 555-5555">
                            </div>
                            <div class="form-group" id="mobilePhoneGroup" style="display: none;">
                                <label>Mobile Phone <span class="required">*</span></label>
                                <input type="tel" name="mobilePhone" placeholder="(555) 555-5555">
                            </div>
                            <div class="form-group" id="homePhoneGroup" style="display: none;">
                                <label>Home Phone</label>
                                <input type="tel" name="homePhone" placeholder="(555) 555-5555">
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email">
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="form-section" id="addressSection" style="display: none;">
                        <h3 class="section-title">Address</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label id="streetAddressLabel">Street Address</label>
                                <input type="text" name="streetAddress">
                            </div>
                        </div>
                        <div class="form-row cols-3" id="addressRow2">
                            <div class="form-group">
                                <label id="cityLabel">City</label>
                                <input type="text" name="city">
                            </div>
                            <div class="form-group">
                                <label>State</label>
                                <select name="state" id="stateSelect">
                                    <option value="">Select State</option>
                                    <option value="MN">Minnesota</option>
                                    <option value="WI">Wisconsin</option>
                                    <option value="IA">Iowa</option>
                                    <option value="ND">North Dakota</option>
                                    <option value="SD">South Dakota</option>
                                    <option value="OTHER">Other</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input type="text" name="zipCode" maxlength="10">
                            </div>
                        </div>
                        <div class="form-row" id="stateOtherRow" style="display: none;">
                            <div class="form-group">
                                <label>Enter State</label>
                                <input type="text" name="stateOther" id="stateOther" placeholder="Enter state name or abbreviation">
                            </div>
                        </div>
                    </div>

                    <!-- Demographics -->
                    <div class="form-section" id="demographicsSection" style="display: none;">
                        <h3 class="section-title">Demographics</h3>
                        <div class="form-row" id="demographicsRow">
                            <div class="form-group" id="ethnicityGroup">
                                <label id="ethnicityLabel">Ethnicity</label>
                                <select name="ethnicity">
                                    <option value="">Select...</option>
                                    <option value="American Indian or Alaska Native">American Indian or Alaska Native</option>
                                    <option value="Asian">Asian</option>
                                    <option value="Black or African American">Black or African American</option>
                                    <option value="Hispanic or Latino">Hispanic or Latino</option>
                                    <option value="Native Hawaiian or Other Pacific Islander">Native Hawaiian or Other Pacific Islander</option>
                                    <option value="White">White</option>
                                    <option value="Two or More Races">Two or More Races</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                </select>
                            </div>
                            <div class="form-group" id="genderGroup">
                                <label>Gender Identification</label>
                                <select name="genderIdentification">
                                    <option value="">Select...</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                    <option value="Non-binary">Non-binary</option>
                                    <option value="Transgender">Transgender</option>
                                    <option value="Prefer not to say">Prefer not to say</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                            <div class="form-group" id="disabilityGroup">
                                <label id="disabilityLabel">Disability</label>
                                <div class="radio-group" style="margin-top: 8px;">
                                    <label class="radio-item">
                                        <input type="radio" name="disability" value="Yes"> Yes
                                    </label>
                                    <label class="radio-item">
                                        <input type="radio" name="disability" value="No"> No
                                    </label>
                                    <label class="radio-item">
                                        <input type="radio" name="disability" value="Prefer not to say"> Prefer not to say
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Disability Type Section (ADS only) -->
                    <div class="form-section" id="disabilityTypeSection" style="display: none;">
                        <h3 class="section-title">Disability Type</h3>
                        <div class="form-group full-width">
                            <label>Type <span class="required">*</span></label>
                            <div class="checkbox-group">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="disabilityType" value="Physical"> Physical
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="disabilityType" value="Mental Illness"> Mental Illness
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="disabilityType" value="Developmental"> Developmental
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="disabilityType" value="Substance Use Disorder"> Substance Use Disorder
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Guardian Information -->
                    <div class="form-section" id="guardianSection" style="display: none;">
                        <h3 class="section-title">Guardian Information</h3>
                        <p style="font-size: 13px; color: #6b7280; margin-bottom: 16px;">Required for patients under 18 years of age</p>
                        <div class="form-row cols-2">
                            <div class="form-group">
                                <label>Guardian First Name</label>
                                <input type="text" name="guardianFirstName">
                            </div>
                            <div class="form-group">
                                <label>Guardian Last Name</label>
                                <input type="text" name="guardianLastName">
                            </div>
                        </div>
                        <div class="form-row cols-3">
                            <div class="form-group">
                                <label>Guardian Phone</label>
                                <input type="tel" name="guardianPhone">
                            </div>
                            <div class="form-group">
                                <label>Guardian Email</label>
                                <input type="email" name="guardianEmail">
                            </div>
                            <div class="form-group">
                                <label>Relationship to Patient</label>
                                <select name="guardianRelationship">
                                    <option value="">Select...</option>
                                    <option value="Parent">Parent</option>
                                    <option value="Legal Guardian">Legal Guardian</option>
                                    <option value="Foster Parent">Foster Parent</option>
                                    <option value="Grandparent">Grandparent</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Emergency Contact Section -->
                    <div class="form-section" id="emergencySection" style="display: none;">
                        <h3 class="section-title">Emergency Contact</h3>
                        <div class="form-row" id="hasEmergencyRow">
                            <div class="form-group">
                                <label>Do you have Patient's Emergency contact or relative's info? <span class="required">*</span></label>
                                <div class="radio-group" style="margin-top: 8px;">
                                    <label class="radio-item">
                                        <input type="radio" name="hasEmergencyContact" value="Yes"> Yes
                                    </label>
                                    <label class="radio-item">
                                        <input type="radio" name="hasEmergencyContact" value="No"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div id="emergencyContactFields" style="display: none;">
                            <div class="form-row cols-2">
                                <div class="form-group">
                                    <label>First Name</label>
                                    <input type="text" name="emergencyContactFirstName">
                                </div>
                                <div class="form-group">
                                    <label>Last Name</label>
                                    <input type="text" name="emergencyContactLastName">
                                </div>
                            </div>
                            <div class="form-row cols-2">
                                <div class="form-group">
                                    <label>Relationship to Patient</label>
                                    <input type="text" name="emergencyContactRelation">
                                </div>
                                <div class="form-group">
                                    <label>Emergency Contact Number</label>
                                    <input type="tel" name="emergencyContactPhone">
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- PCA Type Section -->
                    <div class="form-section" id="pcaTypeSection" style="display: none;">
                        <h3 class="section-title">PCA Type</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Select PCA Type <span class="required">*</span></label>
                                <div class="radio-group" style="margin-top: 8px;">
                                    <label class="radio-item">
                                        <input type="radio" name="pcaType" value="Traditional"> Traditional
                                    </label>
                                    <label class="radio-item">
                                        <input type="radio" name="pcaType" value="PCA Choice"> PCA Choice
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Waiver Type Section -->
                    <div class="form-section" id="waiverSection" style="display: none;">
                        <h3 class="section-title">Waiver Type</h3>
                        <div class="form-group full-width">
                            <label id="waiverLabel">Waiver Type <span class="required">*</span></label>
                            <div class="checkbox-group" id="waiverCheckboxGroup">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="waiverType" value="CADI"> CADI
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="waiverType" value="EW"> EW (Elderly Waiver)
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="waiverType" value="DD"> DD (Developmental Disability)
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="waiverType" value="BI"> BI (Brain Injury)
                                </label>
                                <label class="checkbox-item" id="waiverNoneOption">
                                    <input type="checkbox" name="waiverType" value="None"> None
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="waiverType" value="Other"> Other
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Pet Information -->
                    <div class="form-section" id="petSection" style="display: none;">
                        <h3 class="section-title">Pet Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Does patient have pets? <span class="required">*</span></label>
                                <div class="radio-group" style="margin-top: 8px;">
                                    <label class="radio-item">
                                        <input type="radio" name="hasPet" value="Yes"> Yes
                                    </label>
                                    <label class="radio-item">
                                        <input type="radio" name="hasPet" value="No"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="petTypeRow" style="display: none;">
                            <div class="form-group">
                                <label>Pet Type/Breed</label>
                                <input type="text" name="petType" placeholder="e.g., Dog - Golden Retriever">
                            </div>
                        </div>
                    </div>

                    <!-- Transportation Section -->
                    <div class="form-section" id="transportSection" style="display: none;">
                        <h3 class="section-title">Transportation</h3>
                        <div class="form-group full-width">
                            <label>Transportation Method <span class="required">*</span></label>
                            <div class="checkbox-group">
                                <label class="checkbox-item">
                                    <input type="checkbox" name="transportation" value="Center Transportation"> Center Transportation
                                </label>
                                <label class="checkbox-item">
                                    <input type="checkbox" name="transportation" value="Own Transportation"> Own Transportation
                                </label>
                            </div>
                        </div>
                    </div>

                    <!-- Insurance Information -->
                    <div class="form-section" id="insuranceSection" style="display: none;">
                        <h3 class="section-title">Insurance Information</h3>
                        <div class="form-row" id="medicaidRow">
                            <div class="form-group">
                                <label id="medicaidLabel">MA# (Medicaid Number) <span class="required">*</span></label>
                                <input type="text" name="medicaidId" placeholder="Enter Medicaid ID">
                            </div>
                        </div>
                        <div class="form-row" id="medicareRow">
                            <div class="form-group" id="medicareGroup">
                                <label>Medicare</label>
                                <div class="radio-group" style="margin-top: 8px;">
                                    <label class="radio-item">
                                        <input type="radio" name="hasMedicare" value="Yes"> Yes
                                    </label>
                                    <label class="radio-item">
                                        <input type="radio" name="hasMedicare" value="No"> No
                                    </label>
                                </div>
                            </div>
                        </div>
                        <!-- BH/PCA Insurance Type (Radio) -->
                        <div class="form-row" id="bhInsuranceTypeRow">
                            <div class="form-group full-width">
                                <label>Insurance Type <span class="required">*</span></label>
                                <div class="checkbox-group">
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="Blue Cross Blue Shield"> Blue Cross Blue Shield</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="UCare"> UCare</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="Medica"> Medica</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="HealthPartners"> HealthPartners</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="Hennepin Health"> Hennepin Health</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="MA (Medical Assistance)"> MA (Medical Assistance)</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="Medicare"> Medicare</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="Other Private Insurance"> Other Private Insurance</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="Self-Pay"> Self-Pay</label>
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="Unknown"> Unknown</label>
                                </div>
                            </div>
                        </div>
                        <!-- ADS Insurance Type (Checkboxes) -->
                        <div class="form-row" id="adsInsuranceTypeRow" style="display: none;">
                            <div class="form-group full-width">
                                <label>Insurance Type <span class="required">*</span></label>
                                <div class="checkbox-group">
                                    <label class="checkbox-item"><input type="checkbox" name="adsInsuranceType" value="Blue Cross"> Blue Cross</label>
                                    <label class="checkbox-item"><input type="checkbox" name="adsInsuranceType" value="UCare"> UCare</label>
                                    <label class="checkbox-item"><input type="checkbox" name="adsInsuranceType" value="Medica"> Medica</label>
                                    <label class="checkbox-item"><input type="checkbox" name="adsInsuranceType" value="Health Partners"> Health Partners</label>
                                    <label class="checkbox-item"><input type="checkbox" name="adsInsuranceType" value="Other"> Other</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Clinical Information -->
                    <div class="form-section" id="clinicalSection" style="display: none;">
                        <h3 class="section-title">Clinical Information</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Primary Diagnosis</label>
                                <input type="text" name="primaryDiagnosis" placeholder="e.g., Major Depressive Disorder, Anxiety, PTSD">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Recent History (Check all that apply over the past 12 months)</label>
                                <div class="checkbox-group">
                                    <label class="checkbox-item"><input type="checkbox" name="recentHistory" value="Self Injurious behavior"> Self Injurious behavior</label>
                                    <label class="checkbox-item"><input type="checkbox" name="recentHistory" value="Medication non-compliance"> Medication non-compliance</label>
                                    <label class="checkbox-item"><input type="checkbox" name="recentHistory" value="High medical needs"> High medical needs</label>
                                    <label class="checkbox-item"><input type="checkbox" name="recentHistory" value="Aggressive/Violent behaviours"> Aggressive/Violent behaviours</label>
                                    <label class="checkbox-item"><input type="checkbox" name="recentHistory" value="Drug/Alcohol abuse"> Drug/Alcohol abuse</label>
                                    <label class="checkbox-item"><input type="checkbox" name="recentHistory" value="Other"> Other</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- BH Services -->
                    <div class="form-section" id="bhServicesSection" style="display: none;">
                        <h3 class="section-title">Services Interested In</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Select all services of interest <span class="required">*</span></label>
                                <div class="checkbox-group">
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="ARMHS"> ARMHS (Adult Rehabilitative Mental Health Services)</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="OUTPATIENT"> Outpatient Therapy</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="DA"> Diagnostic Assessment</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="OTHER"> Other</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-row" id="servicesOtherRow" style="display: none;">
                            <div class="form-group full-width">
                                <label>Please specify other services</label>
                                <input type="text" name="servicesOther">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Has a Diagnostic Assessment within the last 12 months? <span class="required">*</span></label>
                                <div class="radio-group" style="margin-top: 8px;">
                                    <label class="radio-item"><input type="radio" name="hasDaWithin12Months" value="Yes"> Yes</label>
                                    <label class="radio-item"><input type="radio" name="hasDaWithin12Months" value="No"> No</label>
                                    <label class="radio-item"><input type="radio" name="hasDaWithin12Months" value="Unknown"> Unknown</label>
                                </div>
                            </div>
                        </div>
                        <div class="conditional-section" id="daUploadSection">
                            <label>Please upload the Diagnostic Assessment document</label>
                            <input type="file" name="document" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png" style="margin-top: 8px;">
                            <p style="font-size: 12px; color: #6b7280; margin-top: 4px;">Accepted formats: PDF, DOC, DOCX, JPG, PNG (max 10MB)</p>
                        </div>
                        <div class="form-row" style="margin-top: 16px;">
                            <div class="form-group">
                                <label>Would you like assistance from an MNSure Navigator?</label>
                                <select name="mnsureNavigator">
                                    <option value="">Select...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Not Sure">Not Sure</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- PCA Services -->
                    <div class="form-section" id="pcaServicesSection" style="display: none;">
                        <h3 class="section-title">Services Interested In</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Select all services of interest <span class="required">*</span></label>
                                <div class="checkbox-group">
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="ADC"> Adult Day Care</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="ARMHS"> ARMHS</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="OUTPATIENT"> Outpatient Therapy</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="Counseling"> Counseling</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="OTHER"> Other</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ADS Services -->
                    <div class="form-section" id="adsServicesSection" style="display: none;">
                        <h3 class="section-title">Services Interested In</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Select all services of interest <span class="required">*</span></label>
                                <div class="checkbox-group">
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="ADC"> Adult Day Care</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="ARMHS"> ARMHS</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="OUTPATIENT"> Outpatient Therapy</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="PCA"> PCA</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="OTHER"> Other</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- MNSure Services -->
                    <div class="form-section" id="mnsureServicesSection" style="display: none;">
                        <h3 class="section-title">Services Interested In</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Select all services of interest <span class="required">*</span></label>
                                <div class="checkbox-group">
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="ARMHS"> ARMHS</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="OUTPATIENT"> Outpatient Therapy</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="PCA"> PCA</label>
                                    <label class="checkbox-item"><input type="checkbox" name="servicesInterested" value="Adult Day Services"> Adult Day Services</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Region -->
                    <div class="form-section" id="regionSection" style="display: none;">
                        <h3 class="section-title">Service Region</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Preferred Service Region <span class="required">*</span></label>
                                <div style="display: flex; flex-direction: column; gap: 12px; margin-top: 8px;">
                                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                                        <input type="radio" name="region" value="Twin Cities Metro" style="cursor: pointer;">
                                        <span>Twin Cities Metro</span>
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                                        <input type="radio" name="region" value="Saint Cloud Area" style="cursor: pointer;">
                                        <span>Saint Cloud Area</span>
                                    </label>
                                    <label style="display: flex; align-items: center; gap: 8px; cursor: pointer;">
                                        <input type="radio" name="region" value="Winona Area" style="cursor: pointer;">
                                        <span>Winona Area</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Referred By Section -->
                    <div class="form-section" id="referredBySection" style="display: none;">
                        <h3 class="section-title">Referral Source</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Referred by <span class="required">*</span></label>
                                <select name="referredBy">
                                    <option value="">Please Select</option>
                                    <option value="Self">Self</option>
                                    <option value="Family">Family Member</option>
                                    <option value="Case Manager">Case Manager</option>
                                    <option value="Hospital">Hospital</option>
                                    <option value="Physician">Physician</option>
                                    <option value="Social Worker">Social Worker</option>
                                    <option value="Other Provider">Other Provider</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Referrer Information -->
                    <div class="form-section" id="referrerSection" style="display: none;">
                        <h3 class="section-title">Referrer's information</h3>
                        <p style="font-size: 13px; color: #6b7280; margin-bottom: 16px;" id="referrerNote">Information about the person making this referral</p>
                        <div class="form-row cols-2">
                            <div class="form-group">
                                <label id="referrerNameLabel">Referrer's Name</label>
                                <div class="form-row cols-2" style="margin-bottom: 0;">
                                    <div class="form-group">
                                        <input type="text" name="referrerFirstName" placeholder="">
                                        <span style="font-size: 11px; color: #6b7280;">First Name</span>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="referrerLastName" placeholder="">
                                        <span style="font-size: 11px; color: #6b7280;">Last Name</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-row cols-2">
                            <div class="form-group">
                                <label id="referrerPhoneLabel">Phone Number</label>
                                <input type="tel" name="referrerPhone">
                            </div>
                            <div class="form-group">
                                <label id="referrerEmailLabel">Email</label>
                                <input type="email" name="referrerEmail">
                            </div>
                        </div>
                    </div>

                    <!-- Case Manager Information -->
                    <div class="form-section" id="caseManagerSection" style="display: none;">
                        <h3 class="section-title">Case Manager Information</h3>
                        <p style="font-size: 13px; color: #6b7280; margin-bottom: 16px;" id="caseManagerNote">If applicable</p>
                        <div class="form-row cols-2">
                            <div class="form-group">
                                <label id="cmNameLabel">Case Manager Name</label>
                                <input type="text" name="caseManagerName">
                            </div>
                            <div class="form-group">
                                <label id="cmPhoneLabel">Case Manager Phone</label>
                                <input type="tel" name="caseManagerPhone">
                            </div>
                        </div>
                        <div class="form-row cols-2">
                            <div class="form-group">
                                <label id="cmEmailLabel">Case Manager Email</label>
                                <input type="email" name="caseManagerEmail">
                            </div>
                            <div class="form-group">
                                <label>Agency</label>
                                <input type="text" name="caseManagerAgency">
                            </div>
                        </div>
                    </div>

                    <!-- Reason for Referral -->
                    <div class="form-section" id="reasonSection" style="display: none;">
                        <h3 class="section-title">Reason for Referral</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Please describe the reason for this referral <span class="required">*</span></label>
                                <textarea name="reasonForReferral" rows="4" placeholder="Describe the patient's needs and reason for seeking services..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Consent -->
                    <div class="form-section" id="consentSection" style="display: none;">
                        <h3 class="section-title">Data Protection Consent</h3>
                        <div class="consent-box">
                            <h4>Important Notice</h4>
                            <p>By submitting this form, you consent to WeCare collecting and processing the personal information provided for the purpose of evaluating and providing services. Your information will be kept confidential and handled in accordance with HIPAA regulations and our privacy policy.</p>
                            <label class="checkbox-item">
                                <input type="checkbox" name="dataProtectionConsent" value="true" required>
                                <span>I consent to the collection and processing of this information <span class="required">*</span></span>
                            </label>
                        </div>
                    </div>

                    <input type="hidden" name="organizationSlug" value="wecare-health">
                    <div style="position: absolute; left: -9999px;">
                        <input type="text" name="website" tabindex="-1" autocomplete="off">
                    </div>

                    <button type="submit" class="submit-btn" id="submitBtn" style="display: none;">Submit Referral</button>
                </form>
            </div>
        </div>
    </div>
</main>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const API_BASE_URL = 'https://evv-backend.nicedesert-6d5375d0.eastus.azurecontainerapps.io/api/v1/public/referrals';

    const FORM_TITLES = {
        behavioral_health: { title: 'WeCare Behavioral Health Referral', subtitle: 'Complete this form to submit a referral for behavioral health services' },
        pca: { title: 'WeCare PCA Referral', subtitle: 'Complete this form to submit a referral for Personal Care Assistant services' },
        adult_day_services: { title: 'WeCare Adult Day Services Referral', subtitle: 'Complete this form to submit a referral for Adult Day Services' },
        mnsure: { title: 'WeCare Referral', subtitle: 'MNSure Referral' }
    };

    const SECTION_CONFIG = {
        behavioral_health: {
            show: ['patientInfoSection', 'addressSection', 'demographicsSection', 'insuranceSection', 'clinicalSection', 'bhServicesSection', 'regionSection', 'referrerSection', 'caseManagerSection', 'consentSection'],
            hide: ['pcaTypeSection', 'waiverSection', 'petSection', 'transportSection', 'disabilityTypeSection', 'emergencySection', 'reasonSection', 'referredBySection', 'pcaServicesSection', 'adsServicesSection', 'mnsureServicesSection'],
            showFields: { middleNameGroup: false, singlePhoneGroup: true, mobilePhoneGroup: false, homePhoneGroup: false, genderGroup: true, medicaidRow: true, medicareRow: true, bhInsuranceTypeRow: true, adsInsuranceTypeRow: false },
            rowClasses: { nameRow: 'cols-2', contactRow: 'cols-3', demographicsRow: 'cols-3' },
            addressRequired: false, caseManagerRequired: false, ethnicityRequired: false
        },
        pca: {
            show: ['patientInfoSection', 'addressSection', 'demographicsSection', 'emergencySection', 'pcaTypeSection', 'waiverSection', 'petSection', 'insuranceSection', 'pcaServicesSection', 'referrerSection', 'caseManagerSection', 'reasonSection', 'consentSection'],
            hide: ['clinicalSection', 'bhServicesSection', 'regionSection', 'transportSection', 'disabilityTypeSection', 'referredBySection', 'adsServicesSection', 'mnsureServicesSection'],
            showFields: { middleNameGroup: true, singlePhoneGroup: false, mobilePhoneGroup: true, homePhoneGroup: true, genderGroup: false, medicaidRow: true, medicareRow: true, bhInsuranceTypeRow: true, adsInsuranceTypeRow: false },
            rowClasses: { nameRow: 'cols-3', contactRow: 'cols-4', demographicsRow: 'cols-2' },
            addressRequired: true, caseManagerRequired: true, ethnicityRequired: true
        },
        adult_day_services: {
            show: ['patientInfoSection', 'addressSection', 'demographicsSection', 'emergencySection', 'transportSection', 'waiverSection', 'disabilityTypeSection', 'insuranceSection', 'adsServicesSection', 'referrerSection', 'caseManagerSection', 'reasonSection', 'consentSection'],
            hide: ['clinicalSection', 'bhServicesSection', 'regionSection', 'pcaTypeSection', 'petSection', 'referredBySection', 'pcaServicesSection', 'mnsureServicesSection'],
            showFields: { middleNameGroup: true, singlePhoneGroup: true, mobilePhoneGroup: false, homePhoneGroup: false, genderGroup: false, medicaidRow: false, medicareRow: false, bhInsuranceTypeRow: false, adsInsuranceTypeRow: true },
            rowClasses: { nameRow: 'cols-3', contactRow: 'cols-3', demographicsRow: 'cols-2' },
            addressRequired: true, caseManagerRequired: true, ethnicityRequired: false, referrerRequired: true
        },
        mnsure: {
            show: ['patientInfoSection', 'addressSection', 'demographicsSection', 'insuranceSection', 'mnsureServicesSection', 'referrerSection', 'caseManagerSection', 'reasonSection', 'consentSection'],
            hide: ['clinicalSection', 'bhServicesSection', 'regionSection', 'pcaTypeSection', 'petSection', 'waiverSection', 'transportSection', 'disabilityTypeSection', 'emergencySection', 'referredBySection', 'pcaServicesSection', 'adsServicesSection'],
            showFields: { middleNameGroup: false, singlePhoneGroup: true, mobilePhoneGroup: false, homePhoneGroup: false, genderGroup: true, medicaidRow: false, medicareRow: true, bhInsuranceTypeRow: false, adsInsuranceTypeRow: false },
            rowClasses: { nameRow: 'cols-2', contactRow: 'cols-3', demographicsRow: 'cols-3' },
            addressRequired: true, caseManagerRequired: false, ethnicityRequired: false, referrerRequired: true
        }
    };

    const form = document.getElementById('referralForm');
    const submitBtn = document.getElementById('submitBtn');
    const successMessage = document.getElementById('successMessage');
    const errorMessage = document.getElementById('errorMessage');
    const guardianSection = document.getElementById('guardianSection');
    const dateOfBirthInput = document.getElementById('dateOfBirth');
    const daUploadSection = document.getElementById('daUploadSection');
    const servicesOtherRow = document.getElementById('servicesOtherRow');
    const stateSelect = document.getElementById('stateSelect');
    const stateOtherRow = document.getElementById('stateOtherRow');
    const formTitle = document.getElementById('formTitle');
    const formSubtitle = document.getElementById('formSubtitle');

    let currentServiceType = null;

    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');
    dateOfBirthInput.setAttribute('max', `${year}-${month}-${day}`);

    document.querySelectorAll('input[name="referralType"]').forEach(radio => {
        radio.addEventListener('change', function() {
            currentServiceType = this.value;
            applyServiceTypeConfig(this.value);
        });
    });

    function applyServiceTypeConfig(serviceType) {
        const config = SECTION_CONFIG[serviceType];
        if (!config) return;

        const titles = FORM_TITLES[serviceType];
        if (titles) {
            formTitle.textContent = titles.title;
            formSubtitle.textContent = titles.subtitle;
        }

        config.show.forEach(sectionId => {
            const section = document.getElementById(sectionId);
            if (section) section.style.display = 'block';
        });

        config.hide.forEach(sectionId => {
            const section = document.getElementById(sectionId);
            if (section) section.style.display = 'none';
        });

        Object.entries(config.showFields).forEach(([fieldId, show]) => {
            const field = document.getElementById(fieldId);
            if (field) field.style.display = show ? '' : 'none';
        });

        if (config.rowClasses) {
            Object.entries(config.rowClasses).forEach(([rowId, className]) => {
                const row = document.getElementById(rowId);
                if (row) {
                    row.classList.remove('cols-2', 'cols-3', 'cols-4');
                    row.classList.add(className);
                }
            });
        }

        updateRequiredFields(serviceType, config);
        submitBtn.style.display = 'block';

        const waiverNoneOption = document.getElementById('waiverNoneOption');
        if (waiverNoneOption) waiverNoneOption.style.display = serviceType === 'adult_day_services' ? 'none' : 'flex';

        document.getElementById('emergencyContactFields').style.display = 'none';
        document.querySelectorAll('input[name="hasEmergencyContact"]').forEach(r => r.checked = false);
        document.getElementById('petTypeRow').style.display = 'none';
        document.querySelectorAll('input[name="hasPet"]').forEach(r => r.checked = false);
    }

    function updateRequiredFields(serviceType, config) {
        const streetLabel = document.getElementById('streetAddressLabel');
        const cityLabel = document.getElementById('cityLabel');
        if (config.addressRequired) {
            streetLabel.innerHTML = 'Street Address <span class="required">*</span>';
            cityLabel.innerHTML = 'City <span class="required">*</span>';
        } else {
            streetLabel.textContent = 'Street Address';
            cityLabel.textContent = 'City';
        }

        const cmNameLabel = document.getElementById('cmNameLabel');
        const cmPhoneLabel = document.getElementById('cmPhoneLabel');
        const cmEmailLabel = document.getElementById('cmEmailLabel');
        const cmNote = document.getElementById('caseManagerNote');
        if (config.caseManagerRequired) {
            cmNameLabel.innerHTML = 'Case Manager Name <span class="required">*</span>';
            cmPhoneLabel.innerHTML = 'Case Manager Phone <span class="required">*</span>';
            cmEmailLabel.innerHTML = 'Case Manager Email <span class="required">*</span>';
            cmNote.textContent = 'Required';
        } else {
            cmNameLabel.textContent = 'Case Manager Name';
            cmPhoneLabel.textContent = 'Case Manager Phone';
            cmEmailLabel.textContent = 'Case Manager Email';
            cmNote.textContent = 'If applicable';
        }

        const ethnicityLabel = document.getElementById('ethnicityLabel');
        ethnicityLabel.innerHTML = config.ethnicityRequired ? 'Ethnicity <span class="required">*</span>' : 'Ethnicity';

        const disabilityLabel = document.getElementById('disabilityLabel');
        disabilityLabel.innerHTML = (serviceType === 'pca' || serviceType === 'adult_day_services' || serviceType === 'mnsure') ? 'Disability <span class="required">*</span>' : 'Disability';

        const referrerNameLabel = document.getElementById('referrerNameLabel');
        const referrerPhoneLabel = document.getElementById('referrerPhoneLabel');
        const referrerEmailLabel = document.getElementById('referrerEmailLabel');
        if (config.referrerRequired) {
            if (referrerNameLabel) referrerNameLabel.innerHTML = 'Referrer\'s Name <span class="required">*</span>';
            if (referrerPhoneLabel) referrerPhoneLabel.innerHTML = 'Phone Number <span class="required">*</span>';
            if (referrerEmailLabel) referrerEmailLabel.innerHTML = 'Email <span class="required">*</span>';
        } else {
            if (referrerNameLabel) referrerNameLabel.textContent = 'Referrer\'s Name';
            if (referrerPhoneLabel) referrerPhoneLabel.textContent = 'Phone Number';
            if (referrerEmailLabel) referrerEmailLabel.textContent = 'Email';
        }
    }

    stateSelect.addEventListener('change', function() {
        stateOtherRow.style.display = this.value === 'OTHER' ? 'block' : 'none';
        if (this.value !== 'OTHER') document.getElementById('stateOther').value = '';
    });

    dateOfBirthInput.addEventListener('change', function() {
        const dob = new Date(this.value);
        const today = new Date();
        let age = today.getFullYear() - dob.getFullYear();
        const monthDiff = today.getMonth() - dob.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) age--;
        guardianSection.style.display = age < 18 ? 'block' : 'none';
    });

    document.querySelectorAll('input[name="hasDaWithin12Months"]').forEach(radio => {
        radio.addEventListener('change', function() {
            daUploadSection.classList.toggle('visible', this.value === 'Yes');
        });
    });

    document.querySelectorAll('#bhServicesSection input[name="servicesInterested"]').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const otherChecked = document.querySelector('#bhServicesSection input[name="servicesInterested"][value="OTHER"]')?.checked;
            servicesOtherRow.style.display = otherChecked ? 'block' : 'none';
        });
    });

    document.querySelectorAll('input[name="hasEmergencyContact"]').forEach(radio => {
        radio.addEventListener('change', function() {
            document.getElementById('emergencyContactFields').style.display = this.value === 'Yes' ? 'block' : 'none';
        });
    });

    document.querySelectorAll('input[name="hasPet"]').forEach(radio => {
        radio.addEventListener('change', function() {
            document.getElementById('petTypeRow').style.display = this.value === 'Yes' ? 'block' : 'none';
        });
    });

    // URL parameter pre-selection
    const urlParams = new URLSearchParams(window.location.search);
    const preselectedType = urlParams.get('type');
    if (preselectedType && ['behavioral_health', 'pca', 'adult_day_services', 'mnsure'].includes(preselectedType)) {
        const radio = document.querySelector(`input[name="referralType"][value="${preselectedType}"]`);
        if (radio) { radio.checked = true; radio.dispatchEvent(new Event('change')); }
    }

    form.addEventListener('submit', async function(e) {
        e.preventDefault();
        if (!currentServiceType) { showError('Please select a service type.'); return; }

        const config = SECTION_CONFIG[currentServiceType];
        const validationErrors = validateForm(currentServiceType, config);
        if (validationErrors.length > 0) { showError(validationErrors[0]); return; }

        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="loading-spinner"></span>Submitting...';
        hideError();

        try {
            const formData = new FormData(form);
            const checkboxFields = ['recentHistory', 'servicesInterested', 'waiverType', 'transportation', 'disabilityType'];
            checkboxFields.forEach(fieldName => {
                const values = [];
                document.querySelectorAll(`input[name="${fieldName}"]:checked`).forEach(cb => values.push(cb.value));
                formData.delete(fieldName);
                if (values.length > 0) formData.append(fieldName, JSON.stringify(values));
            });

            if (currentServiceType === 'adult_day_services') {
                const adsInsuranceValues = [];
                document.querySelectorAll('input[name="adsInsuranceType"]:checked').forEach(cb => adsInsuranceValues.push(cb.value));
                formData.delete('adsInsuranceType');
                if (adsInsuranceValues.length > 0) formData.append('insuranceType', adsInsuranceValues.join(', '));
            }

            if (currentServiceType === 'pca') {
                const mobilePhone = formData.get('mobilePhone');
                if (mobilePhone) formData.set('phone', mobilePhone);
            }

            const referrerFirstName = formData.get('referrerFirstName')?.trim() || '';
            const referrerLastName = formData.get('referrerLastName')?.trim() || '';
            if (referrerFirstName || referrerLastName) {
                formData.set('referrerName', `${referrerFirstName} ${referrerLastName}`.trim());
            }
            formData.delete('referrerFirstName');
            formData.delete('referrerLastName');

            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);

            const response = await fetch(API_BASE_URL, { method: 'POST', body: formData, signal: controller.signal });
            clearTimeout(timeoutId);
            const result = await response.json();

            if (!response.ok) throw new Error(result.error || result.message || 'Submission failed');

            form.style.display = 'none';
            successMessage.classList.add('visible');
            document.getElementById('referenceNumber').textContent = result.referenceNumber;
            window.scrollTo({ top: 0, behavior: 'smooth' });

        } catch (error) {
            showError(error.name === 'AbortError' ? 'Request timed out. Please try again.' : (error.message || 'Failed to submit referral.'));
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit Referral';
        }
    });

    function validateForm(serviceType, config) {
        const errors = [];
        if (!document.querySelector('input[name="firstName"]').value.trim()) return ['First name is required.'];
        if (!document.querySelector('input[name="lastName"]').value.trim()) return ['Last name is required.'];
        if (!document.querySelector('input[name="dateOfBirth"]').value) return ['Date of birth is required.'];

        if (serviceType === 'pca') {
            if (!document.querySelector('input[name="mobilePhone"]').value.trim()) return ['Mobile phone is required.'];
        } else {
            if (!document.querySelector('input[name="phone"]').value.trim()) return ['Phone number is required.'];
        }

        if (config.addressRequired) {
            if (!document.querySelector('input[name="streetAddress"]').value.trim()) return ['Street address is required.'];
            if (!document.querySelector('input[name="city"]').value.trim()) return ['City is required.'];
        }

        if (config.ethnicityRequired && !document.querySelector('select[name="ethnicity"]').value) return ['Ethnicity is required.'];

        if ((serviceType === 'pca' || serviceType === 'adult_day_services' || serviceType === 'mnsure') && !document.querySelector('input[name="disability"]:checked')) return ['Please indicate if patient has a disability.'];

        if (serviceType === 'adult_day_services' && document.querySelectorAll('input[name="disabilityType"]:checked').length === 0) return ['Please select at least one disability type.'];

        if ((serviceType === 'behavioral_health' || serviceType === 'pca')) {
            if (!document.querySelector('input[name="medicaidId"]').value.trim()) return ['MA# (Medicaid Number) is required.'];
            if (!document.querySelector('input[name="insuranceType"]:checked')) return ['Please select an insurance type.'];
        }
        if (serviceType === 'adult_day_services' && document.querySelectorAll('input[name="adsInsuranceType"]:checked').length === 0) return ['Please select at least one insurance type.'];

        if (serviceType === 'pca') {
            if (!document.querySelector('input[name="pcaType"]:checked')) return ['Please select a PCA type.'];
            if (document.querySelectorAll('input[name="waiverType"]:checked').length === 0) return ['Please select at least one waiver type.'];
            if (!document.querySelector('input[name="hasPet"]:checked')) return ['Please indicate if patient has pets.'];
        }

        if (serviceType === 'adult_day_services') {
            if (document.querySelectorAll('input[name="transportation"]:checked').length === 0) return ['Please select a transportation method.'];
            if (document.querySelectorAll('input[name="waiverType"]:checked').length === 0) return ['Please select at least one waiver type.'];
        }

        if ((serviceType === 'pca' || serviceType === 'adult_day_services') && !document.querySelector('input[name="hasEmergencyContact"]:checked')) return ['Please indicate if you have emergency contact information.'];

        if (document.querySelectorAll('input[name="servicesInterested"]:checked').length === 0) return ['Please select at least one service.'];

        if (serviceType === 'behavioral_health') {
            if (!document.querySelector('input[name="hasDaWithin12Months"]:checked')) return ['Please indicate if patient has a Diagnostic Assessment within the last 12 months.'];
            if (!document.querySelector('input[name="region"]:checked')) return ['Please select a preferred service region.'];
        }

        if (config.caseManagerRequired) {
            if (!document.querySelector('input[name="caseManagerName"]').value.trim()) return ['Case Manager name is required.'];
            if (!document.querySelector('input[name="caseManagerPhone"]').value.trim()) return ['Case Manager phone is required.'];
            if (!document.querySelector('input[name="caseManagerEmail"]').value.trim()) return ['Case Manager email is required.'];
        }

        if ((serviceType === 'pca' || serviceType === 'adult_day_services' || serviceType === 'mnsure') && !document.querySelector('textarea[name="reasonForReferral"]').value.trim()) return ['Please provide a reason for this referral.'];

        if (serviceType === 'mnsure' || config.referrerRequired) {
            const referrerFirstName = document.querySelector('input[name="referrerFirstName"]');
            const referrerLastName = document.querySelector('input[name="referrerLastName"]');
            if (!referrerFirstName?.value.trim() || !referrerLastName?.value.trim()) return ['Referrer name is required.'];
            if (!document.querySelector('input[name="referrerPhone"]').value.trim()) return ['Referrer phone is required.'];
            if (!document.querySelector('input[name="referrerEmail"]').value.trim()) return ['Referrer email is required.'];
        }

        if (!document.querySelector('input[name="dataProtectionConsent"]').checked) return ['You must consent to data protection to submit this form.'];

        return errors;
    }

    function showError(message) {
        errorMessage.textContent = message;
        errorMessage.classList.add('visible');
        errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function hideError() { errorMessage.classList.remove('visible'); }

    document.querySelectorAll('input[type="tel"]').forEach(input => {
        input.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.length >= 10) {
                value = value.substring(0, 10);
                value = `(${value.substring(0, 3)}) ${value.substring(3, 6)}-${value.substring(6)}`;
            }
            e.target.value = value;
        });
    });

    // Referral card button click handlers
    document.querySelectorAll('.referral-card-btn[data-service]').forEach(button => {
        button.addEventListener('click', function() {
            const serviceType = this.getAttribute('data-service');
            const radio = document.querySelector(`input[name="referralType"][value="${serviceType}"]`);
            if (radio) {
                radio.checked = true;
                radio.dispatchEvent(new Event('change'));
                const formContainer = document.querySelector('.referral-form-container');
                if (formContainer) formContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
            }
        });
    });
});
</script>

<?php get_footer(); ?>
