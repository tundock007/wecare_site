<?php
/**
 * Template Name: MNSure Navigation Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">Personalized Support for Accessing the Right Health Coverage</h1>
        <p class="page-subtitle">MNSure Navigation Services</p>
    </div>
</section>

<!-- MNSure Navigation Overview -->
<section class="section mnsure-overview">
    <div class="container">
        <div class="content-grid">
            <div class="content-text">
                <p>Finding the right health insurance shouldn't be stressful. At WeCare, we offer MNSure Navigation Services to help individuals and families make informed decisions about their healthcare coverage. Our trained professionals are here to walk you through the process from plan selection to enrollment and beyond with care, clarity, and compassion.</p>
            </div>
        </div>
    </div>
</section>

<!-- Overview Section -->
<section class="section overview">
    <div class="container">
        <h2>Overview</h2>
        <div class="overview-content">
            <p>Navigating the world of health insurance can feel overwhelming — especially when faced with complex terminology, confusing forms, and fast-approaching deadlines. At WeCare, we believe that access to healthcare starts with access to information.</p>
            
            <p>That's why we offer MNSure Navigation services designed to guide you every step of the way. Our certified MNsure navigators provide personalized, in-person assistance to help you understand your options, apply for coverage, and feel confident in the choices you make.</p>
        </div>
    </div>
</section>

<!-- What We Offer Section -->
<section class="section what-we-offer">
    <div class="container">
        <h2>What We Offer</h2>
        <div class="services-grid">
            <!-- Free Initial Consultation -->
            <div class="service-item">
                <h3>Free Initial Consultation</h3>
                <p>This program helps clients in need of care get set up with an aide through a PCA or homecare agency. The agency is responsible for hiring, training, paying, and scheduling PCAs to provide homecare services to the recipient.</p>
            </div>
            
            <!-- Comprehensive Program Support -->
            <div class="service-item">
                <h3>Comprehensive Program Support</h3>
                <p>Whether you're exploring private plans through the Marketplace Exchange, looking into MinnesotaCare, or qualifying for Medical Assistance, we provide clear guidance and hands-on support. We help you compare plans based on your healthcare needs, budget, and eligibility — and we assist with every step of the enrollment process.</p>
            </div>
            
            <!-- Community-Driven Approach -->
            <div class="service-item">
                <h3>Community-Driven Approach</h3>
                <p>WeCare proudly partners with local organizations to bring MNsure Navigation services directly to the community. Through these collaborations, we extend our reach and ensure that more individuals have access to the support they need.</p>
            </div>
            
            <!-- Certified Expert Guidance -->
            <div class="service-item">
                <h3>Certified Expert Guidance</h3>
                <p>Our navigators are fully certified by MNsure and undergo continuous training to stay up to date with policy changes and program updates. They specialize in simplifying complicated insurance terms and helping you understand your rights, benefits, and responsibilities.</p>
            </div>
            
            <!-- Ongoing Help Beyond Enrollment -->
            <div class="service-item">
                <h3>Ongoing Help Beyond Enrollment</h3>
                <p>Healthcare needs change — and your coverage might need to, too. Our support doesn't end at sign-up. We continue to be a resource for updates, renewals, account changes, and any post-enrollment issues that may arise.</p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose WeCare Section -->
<section class="section why-choose-wecare">
    <div class="container">
        <h2>Why Choose WeCare for MNSure Navigation</h2>
        <div class="benefits-list">
            <ul>
                <li><strong>Trust & Experience:</strong> As a well-respected name in community-based services, WeCare brings the same commitment and compassion to our MNsure Navigation program.</li>
                <li><strong>Confidential & Compassionate:</strong> We respect your privacy. All consultations are fully confidential, and your personal information is securely handled.</li>
                <li><strong>Community Connection:</strong> We are deeply rooted in the communities we serve and continuously work to make healthcare access more inclusive and equitable.</li>
            </ul>
        </div>

        <div class="external-resources">
            <h3>Official MNsure Resources</h3>
            <p>For more information about health coverage options in Minnesota:</p>
            <ul class="resource-links">
                <li><a href="https://www.mnsure.org/" target="_blank" rel="noopener noreferrer">MNsure - Minnesota's Health Insurance Marketplace</a></li>
                <li><a href="https://mn.gov/dhs/people-we-serve/adults/health-care/health-care-programs/programs-and-services/medical-assistance.jsp" target="_blank" rel="noopener noreferrer">Minnesota DHS - Medical Assistance</a></li>
                <li><a href="https://mn.gov/dhs/people-we-serve/adults/health-care/health-care-programs/programs-and-services/minnesotacare.jsp" target="_blank" rel="noopener noreferrer">Minnesota DHS - MinnesotaCare</a></li>
                <li><a href="https://www.healthcare.gov/" target="_blank" rel="noopener noreferrer">HealthCare.gov - Federal Health Insurance Information</a></li>
            </ul>
        </div>
    </div>
</section>

<!-- Provider Referral Section -->
<section class="section provider-referral">
    <div class="container">
        <h2>Provider Referral Information</h2>
        <div class="referral-content">
            <p>WeCare values strong relationships with community partners and is proud to accept client referrals from fellow service providers.</p>
            
            <h3>We welcome referrals from:</h3>
            <ul>
                <li>Targeted Case Managers</li>
                <li>Waiver Case Managers</li>
                <li>Social Service Agencies</li>
            </ul>
            
            <p>If you're interested in referring a client for MNsure Navigation services, please complete our Referral Form. Together, we can ensure that more individuals receive the coverage and care they deserve.</p>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Get the Health Coverage You Deserve – Without the Hassle</h2>
            <p>Confused by health insurance options? We're here to help.</p>
            <p>At WeCare, our MNsure-certified navigators offer free, personalized guidance to help you understand your healthcare coverage choices, compare plans, and enroll with confidence. Whether you're new to MNsure or need help updating your plan, our team will walk with you every step of the way.</p>
            <p><strong>Schedule your free consultation today and take the first step toward better health coverage.</strong></p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact Us Today</a>
                <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-secondary">Make a Referral</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>