<?php
/**
 * Template Name: PCA/CFSS Services Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">Compassionate PCA Services for Independent Living</h1>
        <p class="page-subtitle">Personal Care Assistance (PCA) Services in Minnesota</p>
    </div>
</section>

<!-- PCA Services Overview -->
<section class="section pca-overview">
    <div class="container">
        <div class="content-grid">
            <div class="content-text">
                <p>At WeCare Home Health, our PCA services are designed to support individuals with disabilities, chronic illnesses, or age-related needs by promoting independence and improving quality of life. Whether through the Traditional PCA model or the PCA Choice option, we provide compassionate, professional care tailored to meet each client's unique needs—right in the comfort of their home or community.</p>
            </div>
        </div>
    </div>
</section>

<!-- Personal Care Assistants Section -->
<section class="section pca-services">
    <div class="container">
        <h2>Personal Care Assistants (PCA)</h2>
        <div class="service-grid">
            <div class="service-content">
                <p>At WeCare Home Health, our Personal Care Assistance (PCA) services are designed to support individuals of all ages living with disabilities, chronic conditions, or age-related health concerns. We assist not only the elderly but also children and adults with special healthcare needs, helping them live safely and independently at home or while participating in community life. Whether at home or out and about, our care adapts to where it's needed most.</p>
                
                <p>These services provide help with daily activities like bathing, dressing, mobility, and meal preparation—encouraging greater independence and confidence. At WeCare, we're committed to delivering compassionate, personalized care that supports each client's unique needs and enhances their overall quality of life.</p>
            </div>
            <div class="service-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/pca-services.jpg" alt="Personal Care Assistants PCA" />
            </div>
        </div>
    </div>
</section>

<!-- Service Models Section -->
<section class="section service-models">
    <div class="container">
        <h2>Tailored Care Models</h2>
        <div class="content-text">
            <p>Personal Care Assistance services are tailored to provide the right level of support for individuals needing help with daily living activities. Whether you're arranging care for yourself or someone close to you, our goal is to ensure comfort, safety, and a sense of independence. Clients can choose between two service models—PCA Traditional and PCA Choice—depending on the level of control and involvement they prefer.</p>
            
            <p>The Traditional model offers a fully managed approach where the agency handles staffing, training, and scheduling. Meanwhile, PCA Choice gives clients more flexibility by allowing them to recruit, train, and manage their own caregivers. Both options are built around dignity, personalized care, and helping individuals thrive in their own homes or community settings.</p>
        </div>
    </div>
</section>

<!-- Traditional PCA Section -->
<section class="section traditional-pca">
    <div class="container">
        <div class="service-detail">
            <h2>Traditional PCA</h2>
            <p>This program helps clients in need of care get set up with an aide through a PCA or homecare agency. The agency is responsible for hiring, training, paying, and scheduling PCAs to provide homecare services to the recipient.</p>
            
            <h3>A traditional provider agency:</h3>
            <ul>
                <li>Assures your staff have orientation and complete required training</li>
                <li>Bills the state for PCA services</li>
                <li>Bills the state for qualified professional supervision</li>
                <li>Finds back up staff</li>
                <li>Finds, hires, trains, schedules and fires staff</li>
                <li>Gets criminal background checks</li>
                <li>Hires your qualified professional (QP)</li>
                <li>Maintains enrollment with the state</li>
                <li>Makes an agreement with your responsible party</li>
                <li>Monitors and evaluates staff</li>
                <li>Pays and withholds taxes</li>
            </ul>
            
            <h3>The agency is also responsible for:</h3>
            <ul>
                <li>Hiring, training, supervising, and scheduling staff</li>
                <li>Monitoring and evaluating staff to ensure care plan goals are met</li>
                <li>Developing a care plan to meet goals identified during the nurse assessment</li>
                <li>Maintaining backup staffing for emergencies</li>
                <li>Providing more flexibility for distributing units/dollars throughout the year, unless on the Minnesota Restricted Recipient Program (MRRP)</li>
                <li>Training workers specifically about the needs of the person they support, replacing QP units with a dedicated training budget</li>
            </ul>
        </div>
    </div>
</section>

<!-- PCA Choice Section -->
<section class="section pca-choice">
    <div class="container">
        <div class="service-detail">
            <h2>PCA Choice</h2>
            <p>We are also a PCA Choice provider agency where the client has the option for hiring, training, scheduling and terminating their personal care assistants. The Choice option offers greater control and choice for the client. Covered Services are PCA services identified in the service plan and PCA care plan.</p>
            
            <h3>Consumer Responsibility</h3>
            <p>Under the Choice model, the client is responsible for the following:</p>
            <ul>
                <li>Terminate employment of their PCAs if necessary</li>
                <li>Recruit and hire a qualified professional</li>
                <li>Verify the credentials of the qualified professional</li>
                <li>Enter into a written agreement with the PCA Choice agency, PCAs and qualified professional</li>
                <li>Work with the qualified professional to assure the consumer's health and safety needs are met</li>
                <li>Participate in an annual face-to-face assessment</li>
                <li>Assure own health and safety with training, scheduling and monitoring of PCAs</li>
                <li>Develop and revise a care plan with the assistance of the qualified professional</li>
                <li>Monitor and verify the hours worked</li>
                <li>Sign time sheets</li>
                <li>Communicate a change in condition or need for additional services at the time the change occurs</li>
            </ul>
        </div>
    </div>
</section>

<!-- Personalized Care Section -->
<section class="section personalized-care">
    <div class="container">
        <h2>Personalized and Flexible Care</h2>
        <p>By choosing WeCare Home Health, you are opting for a partner committed to enhancing the quality of life for you or your loved ones through dedicated and professional care.</p>
        
        <p>Learn more about PCA Services and eligibility at the <a href="https://mn.gov/dhs/people-we-serve/people-with-disabilities/services/home-community/programs-and-services/pca.jsp" target="_blank">Minnesota DHS</a> website.</p>
    </div>
</section>

<!-- Call to Action -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Ready to Get Started?</h2>
            <p>Contact us today to learn more about our PCA services and how we can support your independence and quality of life.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact Us Today</a>
                <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-secondary">Make a Referral</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>