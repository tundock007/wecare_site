<?php
/**
 * Template Name: Non-Discrimination Notice
 * Description: Non-Discrimination Notice page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Non-Discrimination Notice</h1>
            <p class="page-subtitle">Our commitment to equal treatment for all</p>
        </div>
    </section>

    <!-- Non-Discrimination Content -->
    <section class="non-discrimination-content section-padding">
        <div class="container">
            <div class="legal-content">
                <h2>Notice of Non-Discrimination</h2>

                <div class="legal-section">
                    <h3>Our Commitment</h3>
                    <p>WeCare complies with applicable Federal civil rights laws and the Minnesota Human Rights Act (Minn. Stat. Chapter 363A). We do not discriminate against any person on the basis of race, color, national origin, age, disability, sex, sexual orientation, gender identity, religion, creed, marital status, familial status, status with regard to public assistance, membership or activity in a local commission, or any other protected class.</p>
                </div>

                <div class="legal-section">
                    <h3>Accessibility Services</h3>
                    <p>WeCare provides free aids and services to people with disabilities to communicate effectively with us, such as:</p>
                    <ul>
                        <li>Qualified sign language interpreters</li>
                        <li>Written information in other formats (large print, audio, accessible electronic formats, other formats)</li>
                        <li>Auxiliary aids and services</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h3>Language Assistance Services</h3>
                    <p>WeCare provides free language services to people whose primary language is not English, such as:</p>
                    <ul>
                        <li>Qualified interpreters</li>
                        <li>Information written in other languages</li>
                    </ul>
                    <p>If you need these services, please contact us at <a href="tel:3202814449">(320) 281-4449</a>.</p>
                </div>

                <div class="legal-section">
                    <h3>Filing a Complaint</h3>
                    <p>If you believe that WeCare has failed to provide these services or discriminated in another way on the basis of race, color, national origin, age, disability, sex, sexual orientation, gender identity, or any other protected class, you can file a grievance with:</p>

                    <div class="contact-info-box">
                        <p><strong>WeCare</strong><br>
                        136 Division Street<br>
                        Waite Park, MN 56387<br>
                        Phone: <a href="tel:3202814449">(320) 281-4449</a><br>
                        Email: <a href="mailto:info@wecaremn.org">info@wecaremn.org</a></p>
                    </div>

                    <p>You can file a grievance in person, by mail, fax, or email. If you need help filing a grievance, we are available to help you.</p>
                </div>

                <div class="legal-section">
                    <h3>External Complaint Options</h3>
                    <p>You can also file a civil rights complaint with:</p>

                    <div class="complaint-options">
                        <div class="complaint-option">
                            <h4>U.S. Department of Health and Human Services</h4>
                            <p>Office for Civil Rights</p>
                            <p>200 Independence Avenue, SW<br>
                            Room 509F, HHH Building<br>
                            Washington, D.C. 20201</p>
                            <p>Phone: 1-800-368-1019 (TDD: 1-800-537-7697)</p>
                            <p><a href="https://ocrportal.hhs.gov/ocr/portal/lobby.jsf" target="_blank" rel="noopener noreferrer">File a complaint online</a></p>
                        </div>

                        <div class="complaint-option">
                            <h4>Minnesota Department of Human Rights</h4>
                            <p>Freeman Building<br>
                            625 Robert Street North<br>
                            Saint Paul, MN 55155</p>
                            <p>Phone: 651-539-1100 (Toll-free: 1-800-657-3704)</p>
                            <p><a href="https://mn.gov/mdhr/intake/filing-a-charge/" target="_blank" rel="noopener noreferrer">File a complaint online</a></p>
                        </div>
                    </div>
                </div>

                <div class="legal-section">
                    <h3>Minnesota Human Rights Act</h3>
                    <p>Under the Minnesota Human Rights Act (Minn. Stat. Chapter 363A), it is unlawful to discriminate in the provision of services because of race, color, creed, religion, national origin, sex, marital status, status with regard to public assistance, membership or activity in a local commission, disability, sexual orientation, or familial status.</p>
                </div>

                <div class="legal-section">
                    <p class="effective-date"><strong>Effective Date:</strong> This notice is effective as of January 1, 2024</p>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
.legal-content {
    max-width: 900px;
    margin: 0 auto;
}

.legal-content h2 {
    color: var(--primary-green);
    text-align: center;
    margin-bottom: 2rem;
}

.legal-section {
    margin-bottom: 2.5rem;
}

.legal-section h3 {
    color: var(--accent-orange);
    font-size: 1.35rem;
    margin-bottom: 1rem;
}

.legal-section h4 {
    color: var(--primary-green);
    font-size: 1.1rem;
    margin-bottom: 0.5rem;
}

.legal-section p {
    line-height: 1.8;
    margin-bottom: 1rem;
}

.legal-section ul {
    margin: 1rem 0 1rem 1.5rem;
}

.legal-section li {
    margin-bottom: 0.5rem;
    line-height: 1.7;
}

.contact-info-box {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-left: 4px solid var(--primary-green);
    margin: 1.5rem 0;
}

.contact-info-box p {
    margin: 0 0 0.5rem;
}

.contact-info-box p:last-child {
    margin: 0;
}

.complaint-options {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2rem;
    margin: 1.5rem 0;
}

.complaint-option {
    background: #f8f9fa;
    padding: 1.5rem;
    border-radius: 8px;
    border-top: 4px solid var(--accent-orange);
}

.complaint-option p {
    margin-bottom: 0.5rem;
    font-size: 0.95rem;
}

.effective-date {
    text-align: center;
    color: var(--text-light);
    font-style: italic;
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid #eee;
}

@media (max-width: 768px) {
    .complaint-options {
        grid-template-columns: 1fr;
    }
}
</style>

<?php get_footer(); ?>
