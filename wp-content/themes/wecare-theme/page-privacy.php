<?php
/**
 * Template Name: Privacy Notice
 * Description: Data Privacy Notice page
 */

get_header();
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">You've Got a Right to Privacy</h1>
            <p class="page-subtitle">Data Privacy Notice</p>
        </div>
    </section>

    <!-- Privacy Content -->
    <section class="privacy-content section-padding">
        <div class="container">
            <div class="legal-content">
                <h2>Data Privacy Notice to Our Clients</h2>

                <div class="legal-section">
                    <h3>Your Right to Privacy Is Protected By Law</h3>
                    <p>Federal and state laws protect the right to confidentiality of health records of all WeCare clients. These laws include the federal law known as HIPAA (the Health Insurance Portability and Accountability Act of 1996), the Minnesota Health Records Act (Minn. Stat. § 144.291-144.298), and the Minnesota Government Data Practices Act (Minn. Stat. Chapter 13).</p>
                    <p>These laws require that we take special care to make sure that our clients' records are kept confidential and private. This means that we must:</p>
                    <ul>
                        <li>Keep our clients' records in a safe place</li>
                        <li>Keep each client's records separate from those of other clients</li>
                        <li>Keep unauthorized persons from seeing our clients' records either accidentally or on purpose without your consent</li>
                        <li>Not send private information about our clients over the internet unless we can reasonably assure that the information will not be seen by unauthorized persons</li>
                        <li>Limit the number of persons within our agency who see client records and keep the information they see to the minimum necessary to do their jobs</li>
                        <li>Not release client records without the client's (or the client's legal guardian's or conservator's) consent</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h3>Persons to Whom We May Release Records Without Consent</h3>
                    <p>WeCare will not release client health records without a signed and dated consent from the client or the client's legal guardian or conservator. There are some exceptions. Some of those exceptions include the following:</p>
                    <ul>
                        <li>To other providers who are treating you in an emergency</li>
                        <li>To the Minnesota Department of Human Services or other government agencies for audit purposes</li>
                        <li>When required by court order or subpoena</li>
                        <li>To report suspected abuse or neglect as required by law</li>
                        <li>To prevent or lessen a serious and imminent threat to health or safety</li>
                        <li>For workers' compensation purposes when required by law</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h3>Your Rights Regarding Your Health Information</h3>
                    <p>You have the right to:</p>
                    <ul>
                        <li>Request restrictions on certain uses and disclosures of your information</li>
                        <li>Receive confidential communications of your health information</li>
                        <li>Inspect and copy your health information</li>
                        <li>Request amendments to your health information</li>
                        <li>Receive an accounting of disclosures of your health information</li>
                        <li>Receive a paper copy of this notice upon request</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h3>How We Use Your Information</h3>
                    <p>We may use and disclose your health information for the following purposes:</p>
                    <ul>
                        <li><strong>Treatment:</strong> We may use your health information to provide, coordinate, or manage your health care and related services</li>
                        <li><strong>Payment:</strong> We may use and disclose your health information to obtain payment for services we provide to you</li>
                        <li><strong>Health Care Operations:</strong> We may use and disclose your health information for our health care operations, including quality assessment and improvement activities</li>
                    </ul>
                </div>

                <div class="legal-section">
                    <h3>Questions or Complaints</h3>
                    <p>If you have questions about this notice or wish to file a complaint about our privacy practices, you may contact us at:</p>
                    <div class="contact-info-box">
                        <p><strong>WeCare</strong><br>
                        136 Division Street<br>
                        Waite Park, MN 56387<br>
                        Phone: <a href="tel:3202814449">(320) 281-4449</a><br>
                        Email: <a href="mailto:info@wecaremn.org">info@wecaremn.org</a></p>
                    </div>
                    <p>You may also file a complaint with:</p>
                    <ul>
                        <li><a href="https://www.hhs.gov/ocr/complaints/index.html" target="_blank" rel="noopener noreferrer">U.S. Department of Health and Human Services, Office for Civil Rights</a></li>
                        <li><a href="https://mn.gov/dhs/" target="_blank" rel="noopener noreferrer">Minnesota Department of Human Services</a></li>
                    </ul>
                    <p>You will not be retaliated against for filing a complaint.</p>
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
    font-size: var(--font-size-heading);
    margin-bottom: 1rem;
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
    margin: 0;
}

.effective-date {
    text-align: center;
    color: var(--text-light);
    font-style: italic;
    margin-top: 3rem;
    padding-top: 2rem;
    border-top: 1px solid #eee;
}
</style>

<?php get_footer(); ?>
