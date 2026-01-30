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
                    <h4>ARMHS</h4>
                    <p>Adult Rehabilitative Mental Health Services helping clients with daily living skills, social skills, job readiness, healthcare access, and overall self-sufficiency.</p>
                    <p><strong>Eligibility:</strong> Adults 18+ with mental health diagnosis</p>
                </div>
                <div class="referral-card">
                    <h4>Outpatient Therapy</h4>
                    <p>Our clinicians support individuals through challenges including anxiety, depression, trauma, relationship stress, and life transitions.</p>
                    <p><strong>Eligibility:</strong> Adults 18+ seeking mental health support</p>
                </div>
                <div class="referral-card">
                    <h4>Adult Day Services</h4>
                    <p>Meaningful ways for adults 55+ to stay active, connect with others, and maintain their independence in a supportive daytime program.</p>
                    <p><strong>Eligibility:</strong> Adults 55+ needing structured daytime support</p>
                </div>
                <div class="referral-card">
                    <h4>CFSS</h4>
                    <p>Community First Services and Supports providing assistance with daily living at home or in the community for children, adults, and seniors.</p>
                    <p><strong>Eligibility:</strong> Medical Assistance enrolled individuals with assessed needs</p>
                </div>
                <div class="referral-card">
                    <h4>MNsure Navigation</h4>
                    <p>Certified navigators provide free, in-person help enrolling in Medical Assistance, MinnesotaCare, and other health plans.</p>
                    <p><strong>Eligibility:</strong> Anyone needing health insurance enrollment assistance</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Referral Form -->
<section class="section referral-form-section">
    <div class="container">
        <div class="referral-form-container">
            <div class="form-header">
                <h2>Submit a Referral</h2>
                <p>Complete this form to submit a referral for services. Our team will contact you within 1-2 business days.</p>
            </div>

            <div class="form-body">
                <div class="success-message" id="successMessage">
                    <div class="success-icon">
                        <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <h3>Referral Submitted Successfully!</h3>
                    <p>Thank you for your submission. Our team will review it and contact you soon.</p>
                    <div class="reference-box">
                        Reference Number: <strong id="referenceNumber"></strong>
                    </div>
                    <div class="success-actions">
                        <a href="<?php echo esc_url(home_url('/')); ?>" class="btn btn-primary">Return to Home</a>
                    </div>
                </div>

                <form id="referralForm">
                    <div class="error-message" id="errorMessage"></div>

                    <!-- Patient Information -->
                    <div class="form-section">
                        <h3 class="section-title">Patient Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>First Name <span class="required">*</span></label>
                                <input type="text" name="firstName" required>
                            </div>
                            <div class="form-group">
                                <label>Last Name <span class="required">*</span></label>
                                <input type="text" name="lastName" required>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Date of Birth <span class="required">*</span></label>
                                <input type="date" name="dateOfBirth" id="dateOfBirth" required>
                            </div>
                            <div class="form-group">
                                <label>Phone Number <span class="required">*</span></label>
                                <input type="tel" name="phone" placeholder="(555) 555-5555" required>
                            </div>
                            <div class="form-group">
                                <label>Email Address</label>
                                <input type="email" name="email">
                            </div>
                        </div>
                    </div>

                    <!-- Address -->
                    <div class="form-section">
                        <h3 class="section-title">Address</h3>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Street Address</label>
                                <input type="text" name="streetAddress">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>City</label>
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
                            <div class="form-group" id="stateOtherGroup" style="display: none;">
                                <label>Enter State</label>
                                <input type="text" name="stateOther" id="stateOther" placeholder="Enter state name">
                            </div>
                            <div class="form-group">
                                <label>Zip Code</label>
                                <input type="text" name="zipCode" maxlength="10">
                            </div>
                        </div>
                    </div>

                    <!-- Demographics -->
                    <div class="form-section">
                        <h3 class="section-title">Demographics</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Ethnicity</label>
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
                            <div class="form-group">
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
                            <div class="form-group">
                                <label>Disability</label>
                                <div class="radio-group">
                                    <label class="radio-item"><input type="radio" name="disability" value="Yes"> Yes</label>
                                    <label class="radio-item"><input type="radio" name="disability" value="No"> No</label>
                                    <label class="radio-item"><input type="radio" name="disability" value="Prefer not to say"> Prefer not to say</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Guardian Information (Conditional) -->
                    <div class="form-section" id="guardianSection" style="display: none;">
                        <h3 class="section-title">Guardian Information</h3>
                        <p class="section-note">Required for patients under 18 years of age</p>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Guardian First Name</label>
                                <input type="text" name="guardianFirstName">
                            </div>
                            <div class="form-group">
                                <label>Guardian Last Name</label>
                                <input type="text" name="guardianLastName">
                            </div>
                        </div>
                        <div class="form-row">
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

                    <!-- Insurance Information -->
                    <div class="form-section">
                        <h3 class="section-title">Insurance Information</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>MA# (Medicaid Number) <span class="required">*</span></label>
                                <input type="text" name="medicaidId" placeholder="Enter Medicaid ID" required>
                            </div>
                            <div class="form-group">
                                <label>Has Medicare?</label>
                                <select name="hasMedicare">
                                    <option value="">Select...</option>
                                    <option value="Yes">Yes</option>
                                    <option value="No">No</option>
                                    <option value="Unknown">Unknown</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group full-width">
                                <label>Insurance Type <span class="required">*</span></label>
                                <div class="checkbox-group insurance-options">
                                    <label class="radio-item"><input type="radio" name="insuranceType" value="Blue Cross Blue Shield" required> Blue Cross Blue Shield</label>
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
                    </div>

                    <!-- Clinical Information -->
                    <div class="form-section">
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

                    <!-- Services -->
                    <div class="form-section">
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
                                <div class="radio-group">
                                    <label class="radio-item"><input type="radio" name="hasDaWithin12Months" id="hasDaYes" value="Yes" required> Yes</label>
                                    <label class="radio-item"><input type="radio" name="hasDaWithin12Months" id="hasDaNo" value="No"> No</label>
                                    <label class="radio-item"><input type="radio" name="hasDaWithin12Months" id="hasDaUnknown" value="Unknown"> Unknown</label>
                                </div>
                            </div>
                        </div>
                        <div class="conditional-section" id="daUploadSection">
                            <label>Please upload the Diagnostic Assessment document</label>
                            <input type="file" name="document" accept=".pdf,.doc,.docx,.jpg,.jpeg,.png">
                            <p class="file-note">Accepted formats: PDF, DOC, DOCX, JPG, PNG (max 10MB)</p>
                        </div>
                        <div class="form-row">
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

                    <!-- Region -->
                    <div class="form-section">
                        <h3 class="section-title">Service Region</h3>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Preferred Service Region <span class="required">*</span></label>
                                <div class="radio-group vertical">
                                    <label class="radio-item"><input type="radio" name="region" value="Twin Cities Metro" required> Twin Cities Metro</label>
                                    <label class="radio-item"><input type="radio" name="region" value="Saint Cloud Area"> Saint Cloud Area</label>
                                    <label class="radio-item"><input type="radio" name="region" value="Winona Area"> Winona Area</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Referrer Information -->
                    <div class="form-section">
                        <h3 class="section-title">Referrer Information</h3>
                        <p class="section-note">Information about the person making this referral</p>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Your Name</label>
                                <input type="text" name="referrerName">
                            </div>
                            <div class="form-group">
                                <label>Your Phone</label>
                                <input type="tel" name="referrerPhone">
                            </div>
                            <div class="form-group">
                                <label>Your Email</label>
                                <input type="email" name="referrerEmail">
                            </div>
                        </div>
                    </div>

                    <!-- Case Manager Information -->
                    <div class="form-section">
                        <h3 class="section-title">Case Manager Information</h3>
                        <p class="section-note">If applicable</p>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Case Manager Name</label>
                                <input type="text" name="caseManagerName">
                            </div>
                            <div class="form-group">
                                <label>Case Manager Phone</label>
                                <input type="tel" name="caseManagerPhone">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group">
                                <label>Case Manager Email</label>
                                <input type="email" name="caseManagerEmail">
                            </div>
                            <div class="form-group">
                                <label>Agency</label>
                                <input type="text" name="caseManagerAgency">
                            </div>
                        </div>
                    </div>

                    <!-- Consent -->
                    <div class="form-section">
                        <h3 class="section-title">Data Protection Consent</h3>
                        <div class="consent-box">
                            <h4>Important Notice</h4>
                            <p>By submitting this form, you consent to WeCare collecting and processing the personal information provided for the purpose of evaluating and providing behavioral health services. Your information will be kept confidential and handled in accordance with HIPAA regulations and our privacy policy.</p>
                            <label class="checkbox-item consent-check">
                                <input type="checkbox" name="dataProtectionConsent" value="true" required>
                                <span>I consent to the collection and processing of this information <span class="required">*</span></span>
                            </label>
                        </div>
                    </div>

                    <input type="hidden" name="organizationSlug" value="wecare-health">

                    <button type="submit" class="btn btn-primary submit-btn" id="submitBtn">Submit Referral</button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Configuration
    const API_BASE_URL = 'https://evv-backend.nicedesert-6d5375d0.eastus.azurecontainerapps.io/api/v1/public/referrals';

    // DOM Elements
    const form = document.getElementById('referralForm');
    const submitBtn = document.getElementById('submitBtn');
    const successMessage = document.getElementById('successMessage');
    const errorMessage = document.getElementById('errorMessage');
    const guardianSection = document.getElementById('guardianSection');
    const dateOfBirthInput = document.getElementById('dateOfBirth');
    const daUploadSection = document.getElementById('daUploadSection');
    const servicesOtherRow = document.getElementById('servicesOtherRow');
    const stateSelect = document.getElementById('stateSelect');
    const stateOtherGroup = document.getElementById('stateOtherGroup');

    // Set max date for Date of Birth
    const today = new Date();
    const year = today.getFullYear();
    const month = String(today.getMonth() + 1).padStart(2, '0');
    const day = String(today.getDate()).padStart(2, '0');
    dateOfBirthInput.setAttribute('max', `${year}-${month}-${day}`);

    // Show/hide "Other" state field
    stateSelect.addEventListener('change', function() {
        stateOtherGroup.style.display = this.value === 'OTHER' ? 'block' : 'none';
    });

    // Show/hide guardian section based on age
    dateOfBirthInput.addEventListener('change', function() {
        const dob = new Date(this.value);
        const today = new Date();
        let age = today.getFullYear() - dob.getFullYear();
        const monthDiff = today.getMonth() - dob.getMonth();
        if (monthDiff < 0 || (monthDiff === 0 && today.getDate() < dob.getDate())) {
            age--;
        }
        guardianSection.style.display = age < 18 ? 'block' : 'none';
    });

    // Show/hide DA upload section
    document.querySelectorAll('input[name="hasDaWithin12Months"]').forEach(radio => {
        radio.addEventListener('change', function() {
            daUploadSection.classList.toggle('visible', this.value === 'Yes');
        });
    });

    // Show/hide "Other" services field
    document.querySelectorAll('input[name="servicesInterested"]').forEach(checkbox => {
        checkbox.addEventListener('change', function() {
            const otherChecked = document.querySelector('input[name="servicesInterested"][value="OTHER"]').checked;
            servicesOtherRow.style.display = otherChecked ? 'block' : 'none';
        });
    });

    // Form submission
    form.addEventListener('submit', async function(e) {
        e.preventDefault();

        // Validations
        const servicesChecked = document.querySelectorAll('input[name="servicesInterested"]:checked');
        if (servicesChecked.length === 0) {
            showError('Please select at least one service you are interested in.');
            return;
        }

        const daAnswer = document.querySelector('input[name="hasDaWithin12Months"]:checked');
        if (!daAnswer) {
            showError('Please indicate if patient has a Diagnostic Assessment within the last 12 months.');
            return;
        }

        if (daAnswer.value === 'Yes') {
            const documentUpload = document.querySelector('input[name="document"]');
            if (!documentUpload.files || documentUpload.files.length === 0) {
                showError('Please upload the Diagnostic Assessment document.');
                return;
            }
        }

        const regionSelected = document.querySelector('input[name="region"]:checked');
        if (!regionSelected) {
            showError('Please select a preferred service region.');
            return;
        }

        const insuranceSelected = document.querySelector('input[name="insuranceType"]:checked');
        if (!insuranceSelected) {
            showError('Please select an insurance type.');
            return;
        }

        const consent = document.querySelector('input[name="dataProtectionConsent"]');
        if (!consent.checked) {
            showError('You must consent to data protection to submit this form.');
            return;
        }

        // Show loading
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<span class="loading-spinner"></span>Submitting...';
        hideError();

        try {
            const formData = new FormData(form);

            // Collect arrays
            const recentHistory = [];
            document.querySelectorAll('input[name="recentHistory"]:checked').forEach(cb => {
                recentHistory.push(cb.value);
            });
            formData.delete('recentHistory');
            formData.append('recentHistory', JSON.stringify(recentHistory));

            const servicesInterested = [];
            document.querySelectorAll('input[name="servicesInterested"]:checked').forEach(cb => {
                servicesInterested.push(cb.value);
            });
            formData.delete('servicesInterested');
            formData.append('servicesInterested', JSON.stringify(servicesInterested));

            const controller = new AbortController();
            const timeoutId = setTimeout(() => controller.abort(), 30000);

            const response = await fetch(API_BASE_URL, {
                method: 'POST',
                body: formData,
                signal: controller.signal
            });

            clearTimeout(timeoutId);
            const result = await response.json();

            if (!response.ok) {
                throw new Error(result.error || result.message || 'Submission failed');
            }

            // Show success
            form.style.display = 'none';
            successMessage.classList.add('visible');
            document.getElementById('referenceNumber').textContent = result.referenceNumber;
            window.scrollTo({ top: 0, behavior: 'smooth' });

        } catch (error) {
            if (error.name === 'AbortError') {
                showError('Request timed out. Please check your connection and try again.');
            } else {
                showError(error.message || 'Failed to submit referral. Please try again.');
            }
            submitBtn.disabled = false;
            submitBtn.textContent = 'Submit Referral';
        }
    });

    function showError(message) {
        errorMessage.textContent = message;
        errorMessage.classList.add('visible');
        errorMessage.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }

    function hideError() {
        errorMessage.classList.remove('visible');
    }

    // Phone number formatting
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
});
</script>

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
