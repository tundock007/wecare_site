<?php
/**
 * Template Name: Behavioral Health Services
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">Mental Health Services Empowering You Through Therapy & ARMHS</h1>
        <p class="page-subtitle">Your Path to Mental Well-Being</p>
    </div>
</section>

<!-- Main Content -->
<section class="section behavioral-health-content">
    <div class="container">
        
        <!-- Introduction -->
        <div class="intro-section">
            <h2>Therapy & ARMHS: Your Path to Mental Well-Being</h2>
            <p>At WeCare, we offer personalized psychotherapy and Adult Rehabilitative Mental Health Services (ARMHS) designed to support your emotional health and personal growth. Our dedicated team of professionals works alongside you to address life challenges, enhance coping skills, and build a healthier, more fulfilling life. Whether you're navigating stress, managing anxiety, or seeking long-term mental health solutions, we're here to help every step of the way.</p>
        </div>

        <!-- Psychotherapy Section -->
        <div class="service-detail-section">
            <h2>Psychotherapy/Counseling</h2>
            <p>At WeCare, we offer a comprehensive range of psychotherapy and Adult Rehabilitative Mental Health Services (ARMHS) led by experienced mental health counselors and practitioners. Our goal is to create a supportive and secure environment where you can freely express your emotions and explore the challenges that brought you to seek mental health support.</p>
            
            <h3>Through our holistic approach, we help you with:</h3>
            <ul class="service-benefits">
                <li>Building strong interpersonal connections</li>
                <li>Navigating life transitions</li>
                <li>Developing practical coping skills</li>
                <li>Fostering personal growth and self-awareness</li>
                <li>Managing stress and anxiety</li>
                <li>Addressing depression and anxiety symptoms</li>
            </ul>
            
            <p>For more details on our psychotherapy services or to make a referral, visit our <a href="<?php echo esc_url(home_url('/referrals')); ?>">Referrals page</a>.</p>
        </div>

        <!-- ARMHS Section -->
        <div class="service-detail-section">
            <h2>Adult Rehabilitative Mental Health Services (ARMHS)</h2>
            <p>WeCare's ARMHS program aims to empower clients to effectively utilize mental health, healthcare, and community resources for better symptom management, independent living, and an improved quality of life. Each client builds a personalized relationship with a qualified mental health practitioner. Together, they develop a treatment plan to guide the client in acquiring the necessary skills to achieve specific goals and objectives.</p>
            
            <p>WeCare's mental health practitioners deliver services in clients' homes and/or within the community. Their approach focuses on working alongside individuals rather than simply doing things for them. By modeling, coaching, encouraging, and teaching skills, clients can develop confidence in their own abilities to accomplish what may have previously seemed unattainable. WeCare emphasizes the importance of collaboration with clients' families, friends, and other professionals.</p>
        </div>

        <!-- Skills Section -->
        <div class="service-detail-section">
            <h2>Some skills taught</h2>
            <ul class="skills-list">
                <li>Basic social and living skills</li>
                <li>Accessing additional mental health care services</li>
                <li>Personal care and independent living skills</li>
                <li>Employment readiness</li>
                <li>Financial resources and money management</li>
                <li>Securing and maintaining housing</li>
                <li>Educational preparedness</li>
                <li>Transitioning to community living after long-term treatment or hospitalization</li>
            </ul>
        </div>

        <!-- Eligibility Section -->
        <div class="service-detail-section">
            <h2>Requirements for ARMHS Eligibility</h2>
            <ul class="eligibility-list">
                <li>Medical Assistance (MA) eligibility</li>
                <li>Age 18 or older</li>
                <li>Diagnosis of mental illness or traumatic brain injury</li>
                <li>Significant disability and functional impairment in three or more areas</li>
                <li>Assessment by a licensed mental health professional determining that ARMHS are medically necessary</li>
            </ul>
            
            <p>Learn more about the <a href="https://mn.gov/dhs/people-we-serve/adults/health-care/mental-health/programs-services/armhs.jsp" target="_blank">ARMHS program and the requirements for eligibility</a>.</p>
        </div>

        <!-- Contact CTA -->
        <div class="cta-section">
            <h2>Ready to get started?</h2>
            <p>Contact us today to learn more about our behavioral health services.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact Us</a>
                <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-outline">Refer a Patient</a>
            </div>
        </div>

    </div>
</section>

<?php get_footer(); ?>