<?php
/**
 * Template Name: Adult Day Services Page
 * 
 * @package WeCare
 */

get_header();
?>

<!-- Page Hero -->
<section class="page-hero">
    <div class="container">
        <h1 class="page-title">Daytime Care That Builds Confidence and Community</h1>
        <p class="page-subtitle">Adult Day Services & Outpatient Therapy Services</p>
    </div>
</section>

<!-- Adult Day Services Overview -->
<section class="section ads-overview">
    <div class="container">
        <div class="content-grid">
            <div class="content-text">
                <p>WeCare's Adult Day Services offer a warm and inclusive space where older adults can stay active, connect with others, and receive personalized support. From health monitoring and fitness activities to nutritious meals and engaging social programs, our team is dedicated to promoting independence, well-being, and a strong sense of belonging—especially for individuals from refugee and diverse cultural backgrounds.</p>
            </div>
        </div>
    </div>
</section>

<!-- Adult Day Services Section -->
<section class="section adult-day-services">
    <div class="container">
        <h2>Adult Day Services</h2>
        <div class="service-content">
            <p>At our Adult Day Center, we are dedicated to delivering a broad range of services tailored to support the unique needs, goals, and preferences of every individual we serve. Our compassionate and skilled team provides life-skill development, guided fitness activities, and a variety of enriching recreational programs designed to promote personal growth, independence, and social connection.</p>
            
            <p>We proudly serve refugee and immigrant communities, creating a warm, inclusive space where all clients feel valued and supported. Through meaningful engagement and culturally responsive care, we empower individuals to thrive and confidently navigate everyday life in their communities.</p>
        </div>
    </div>
</section>

<!-- Services Grid -->
<section class="section services-grid">
    <div class="container">
        <h2>Our Comprehensive Services</h2>
        <div class="services-list">
            <!-- Physical Therapy -->
            <div class="service-item">
                <h3>Physical Therapy</h3>
                <p>Our Physical Therapy program is designed to help clients maintain, regain, and improve their physical well-being in a supportive and safe environment. Each exercise routine is carefully reviewed and approved by a licensed Physical Therapist to ensure it meets the unique needs of every individual. Sessions are led by trained Activity Assistants who guide and motivate clients through customized routines.</p>
                
                <p>In our well-equipped gym, clients can choose from a range of cardio and strength-training equipment, whether in group classes or individual sessions. Our goal is to support mobility, strength, and independence helping each person stay active and confident in their daily life.</p>
            </div>
            
            <!-- Meal Service -->
            <div class="service-item">
                <h3>Meal Service</h3>
                <p>At WeCare, we understand that proper nutrition is essential to maintaining strength, energy, and overall wellness—especially for older adults and individuals with specific health needs. That's why our licensed Dietician develops personalized meal plans that carefully consider each client's dietary restrictions, medical conditions, and cultural or religious preferences.</p>
                
                <p>We provide freshly prepared, catered meals every day, offering a variety of delicious and well-balanced options to support each client's health and satisfaction. Our goal is to ensure that every meal served at our center not only meets nutritional standards but also brings comfort, enjoyment, and a sense of home to our clients.</p>
            </div>
            
            <!-- Transportation -->
            <div class="service-item">
                <h3>Transportation</h3>
                <p>We understand that having reliable transportation is essential for our clients to fully access and enjoy the wide range of services we provide. To ensure convenience and peace of mind, our caring and professional staff coordinate safe, dependable transportation to and from our facility every day.</p>
                
                <p>This seamless service removes the common challenges and worries associated with travel, allowing clients to attend their programs and activities with ease and confidence. By offering this supportive transportation option, we help break down barriers to participation, promote consistency, and create a stress-free experience for everyone.</p>
            </div>
            
            <!-- Health Management -->
            <div class="service-item">
                <h3>Health Management</h3>
                <p>At WeCare, the health and wellness of our clients is at the forefront of everything we do. We take a proactive approach by closely monitoring each client's health status to ensure they receive the care and attention they deserve. Our team offers a range of health-focused workshops and training sessions aimed at promoting a balanced, healthy, and stress-free lifestyle.</p>
                
                <p>Our skilled nurse conducts regular health assessments to keep track of any changes in health and provides referrals to specialized care providers as needed, ensuring that clients get the right support at the right time. By combining regular health check-ins with our comprehensive wellness programs, we empower clients to maintain both their physical and mental well-being while staying engaged in all the activities and services we offer.</p>
            </div>
        </div>
    </div>
</section>

<!-- Eligibility Section -->
<section class="section eligibility">
    <div class="container">
        <h2>Eligibility</h2>
        <div class="eligibility-content">
            <p>Our Adult Day Services are specifically designed for individuals aged 55 and older who seek support, socialization, and access to various services to enhance their quality of life. We offer a welcoming environment for older adults, including those with diverse backgrounds and needs.</p>
            
            <div class="eligibility-requirements">
                <h3>To be eligible for our services, clients must have:</h3>
                <ul>
                    <li>A certified disability</li>
                    <li>Be at least 55 years old</li>
                    <li>Possess MA insurance</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Call to Action -->
<section class="section cta-section">
    <div class="container">
        <div class="cta-content">
            <h2>Join Our Community Today</h2>
            <p>Discover how our Adult Day Services can enhance your quality of life with social connection, health support, and meaningful activities.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact Us Today</a>
                <a href="<?php echo esc_url(home_url('/referrals')); ?>" class="btn btn-secondary">Make a Referral</a>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>