<?php
/**
 * Template Name: Staff Access
 * Description: Password-protected staff portal
 */

get_header();

// Staff access password - change this to your desired password
define('WECARE_STAFF_PASSWORD', 'WeCareStaff2026!');

$is_authenticated = false;
$form_message = '';
$form_status = '';

// Check if user is authenticated via cookie
if (isset($_COOKIE['wecare_staff_auth']) && $_COOKIE['wecare_staff_auth'] === md5(WECARE_STAFF_PASSWORD . 'wecare_staff_salt')) {
    $is_authenticated = true;
}

// Handle password submission
if (isset($_POST['submit_password']) && !empty($_POST['access_password'])) {
    if ($_POST['access_password'] === WECARE_STAFF_PASSWORD) {
        $is_authenticated = true;
        setcookie('wecare_staff_auth', md5(WECARE_STAFF_PASSWORD . 'wecare_staff_salt'), time() + (8 * 60 * 60), '/'); // 8 hour cookie
    } else {
        $form_message = 'Incorrect password. Please try again.';
        $form_status = 'error';
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    setcookie('wecare_staff_auth', '', time() - 3600, '/');
    $is_authenticated = false;
}
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Staff Portal</h1>
            <p class="page-subtitle">Internal resources for WeCare team members</p>
        </div>
    </section>

    <section class="staff-section section-padding">
        <div class="container">
            <?php if (!$is_authenticated) : ?>
            <!-- Password Form -->
            <div class="password-form-wrapper">
                <div class="password-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                </div>
                <h2>Staff Access Required</h2>
                <p>Enter your staff password to continue.</p>

                <?php if ($form_message && $form_status === 'error') : ?>
                <div class="form-message error"><?php echo esc_html($form_message); ?></div>
                <?php endif; ?>

                <form method="POST" class="password-form">
                    <div class="form-group">
                        <input type="password" name="access_password" placeholder="Enter staff password" required>
                    </div>
                    <button type="submit" name="submit_password" class="btn btn-primary">Access Portal</button>
                </form>
            </div>

            <?php else : ?>
            <!-- Staff Portal Content -->
            <div class="staff-portal">
                <div class="portal-header">
                    <h2>Welcome, Team Member</h2>
                    <a href="?logout=1" class="logout-link">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                        Logout
                    </a>
                </div>

                <!-- Announcements -->
                <div class="portal-section announcements-section">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path></svg>
                        Announcements
                    </h3>
                    <div class="announcements-list">
                        <!-- Add announcements here - edit this section to update -->
                        <div class="announcement-item">
                            <span class="announcement-date">Jan 31, 2026</span>
                            <p>Welcome to the new Staff Portal! Use this page to access internal resources and stay updated on company announcements.</p>
                        </div>
                        <!-- Add more announcements as needed:
                        <div class="announcement-item">
                            <span class="announcement-date">Date</span>
                            <p>Your announcement text here.</p>
                        </div>
                        -->
                    </div>
                </div>

                <!-- Internal Documents -->
                <div class="portal-section">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 19a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h5l2 3h9a2 2 0 0 1 2 2z"></path></svg>
                        Internal Documents
                    </h3>
                    <div class="documents-grid">
                        <!-- Add document links here - edit this section to update -->
                        <a href="#" class="document-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                            <span>Employee Handbook</span>
                        </a>
                        <a href="#" class="document-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                            <span>PTO Request Form</span>
                        </a>
                        <a href="#" class="document-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                            <span>Expense Report Template</span>
                        </a>
                        <a href="#" class="document-link">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline></svg>
                            <span>Training Materials</span>
                        </a>
                        <!-- Add more documents as needed -->
                    </div>
                    <p class="documents-note">Contact your supervisor to request additional documents.</p>
                </div>

                <!-- Quick Links -->
                <div class="portal-section">
                    <h3>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 0 0 7.54.54l3-3a5 5 0 0 0-7.07-7.07l-1.72 1.71"></path><path d="M14 11a5 5 0 0 0-7.54-.54l-3 3a5 5 0 0 0 7.07 7.07l1.71-1.71"></path></svg>
                        Quick Links
                    </h3>
                    <div class="quick-links-grid">
                        <a href="<?php echo esc_url(home_url('/submit-article')); ?>" class="quick-link-card">
                            <div class="quick-link-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="12" y1="18" x2="12" y2="12"></line><line x1="9" y1="15" x2="15" y2="15"></line></svg>
                            </div>
                            <div class="quick-link-text">
                                <h4>Submit Article</h4>
                                <p>Post news & updates</p>
                            </div>
                        </a>
                        <a href="https://app.arasynchealth.com/" class="quick-link-card" target="_blank" rel="noopener noreferrer">
                            <div class="quick-link-icon arasync">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="-80 -50 160 100">
                                    <circle cx="0" cy="0" r="35" fill="none" stroke="white" stroke-width="5"/>
                                    <path d="M -48,-16 A 52,52 0 0,1 48,-16" fill="none" stroke="white" stroke-width="4" opacity="0.8"/>
                                    <path d="M -56,-28 A 64,64 0 0,1 56,-28" fill="none" stroke="white" stroke-width="3" opacity="0.6"/>
                                    <circle cx="0" cy="-8" r="9" fill="white"/>
                                    <path d="M -12,12 Q 0,4 12,12 L 12,20 L -12,20 Z" fill="white"/>
                                </svg>
                            </div>
                            <div class="quick-link-text">
                                <h4>AraSync</h4>
                                <p>Staff login portal</p>
                            </div>
                        </a>
                        <a href="https://outlook.office.com" class="quick-link-card" target="_blank" rel="noopener noreferrer">
                            <div class="quick-link-icon outlook">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                            </div>
                            <div class="quick-link-text">
                                <h4>Outlook</h4>
                                <p>Email & calendar</p>
                            </div>
                        </a>
                        <a href="https://teams.microsoft.com" class="quick-link-card" target="_blank" rel="noopener noreferrer">
                            <div class="quick-link-icon teams">
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="9" cy="7" r="4"></circle><path d="M23 21v-2a4 4 0 0 0-3-3.87"></path><path d="M16 3.13a4 4 0 0 1 0 7.75"></path></svg>
                            </div>
                            <div class="quick-link-text">
                                <h4>Teams</h4>
                                <p>Chat & meetings</p>
                            </div>
                        </a>
                    </div>
                </div>

                <!-- Help -->
                <div class="portal-section help-section">
                    <p>For technical issues with this portal, contact your supervisor or IT support.</p>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<style>
.staff-section {
    background: var(--light-gray);
    min-height: 60vh;
}

/* Password Form */
.password-form-wrapper {
    max-width: 400px;
    margin: 0 auto;
    background: white;
    padding: 3rem;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
    text-align: center;
}

.password-icon {
    color: var(--primary-green);
    margin-bottom: 1.5rem;
}

.password-form-wrapper h2 {
    color: var(--primary-green);
    margin-bottom: 0.5rem;
    font-size: var(--font-size-section);
}

.password-form-wrapper > p {
    color: var(--text-color);
    margin-bottom: 1.5rem;
    font-size: var(--font-size-body);
}

.password-form .form-group {
    margin-bottom: 1rem;
}

.password-form input {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: var(--font-size-body);
    text-align: center;
}

.password-form input:focus {
    outline: none;
    border-color: var(--primary-green);
}

.form-message.error {
    background: #ffebee;
    color: #c62828;
    padding: 0.75rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    font-size: var(--font-size-small);
}

/* Staff Portal */
.staff-portal {
    max-width: 900px;
    margin: 0 auto;
}

.portal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 2px solid var(--primary-green);
}

.portal-header h2 {
    color: var(--primary-green);
    margin: 0;
    font-size: var(--font-size-section);
}

.logout-link {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: #888;
    font-size: var(--font-size-small);
    text-decoration: none;
    padding: 6px 12px;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.logout-link:hover {
    color: #c62828;
    background: #ffebee;
}

/* Portal Sections */
.portal-section {
    background: white;
    padding: 1.5rem;
    border-radius: 12px;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 10px rgba(0,0,0,0.05);
}

.portal-section h3 {
    color: var(--primary-green);
    font-size: var(--font-size-heading);
    margin-bottom: 1rem;
    padding-bottom: 0.5rem;
    border-bottom: 1px solid #eee;
}

/* Announcements */
.announcements-section h3 {
    display: flex;
    align-items: center;
    gap: 8px;
}

.announcements-list {
    max-height: 200px;
    overflow-y: auto;
}

.announcement-item {
    padding: 1rem;
    background: #fffbf0;
    border-left: 3px solid var(--accent-orange);
    border-radius: 0 8px 8px 0;
    margin-bottom: 0.75rem;
}

.announcement-item:last-child {
    margin-bottom: 0;
}

.announcement-date {
    font-size: 10px;
    color: #888;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.announcement-item p {
    margin: 0.5rem 0 0;
    font-size: var(--font-size-small);
    line-height: 1.6;
}

/* Documents Grid */
.documents-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 0.75rem;
}

.document-link {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 12px 16px;
    background: #f8f9fa;
    border-radius: 8px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 1px solid #eee;
}

.document-link:hover {
    background: #e8f5e9;
    border-color: var(--primary-green);
}

.document-link svg {
    color: var(--accent-orange);
    flex-shrink: 0;
}

.document-link span {
    color: var(--text-color);
    font-size: var(--font-size-small);
    font-weight: 500;
}

.documents-note {
    margin: 1rem 0 0;
    font-size: var(--font-size-small);
    color: #888;
    font-style: italic;
}

/* Quick Links Grid */
.quick-links-grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 1rem;
}

.quick-link-card {
    display: flex;
    align-items: center;
    gap: 12px;
    padding: 1rem;
    background: #f8f9fa;
    border-radius: 10px;
    text-decoration: none;
    transition: all 0.3s ease;
    border: 2px solid transparent;
}

.quick-link-card:hover {
    border-color: var(--primary-green);
    transform: translateY(-2px);
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
}

.quick-link-icon {
    width: 48px;
    height: 48px;
    display: flex;
    align-items: center;
    justify-content: center;
    background: var(--primary-green);
    color: white;
    border-radius: 10px;
    flex-shrink: 0;
}

.quick-link-icon.arasync { background: #2F7D7A; }
.quick-link-icon.outlook { background: #0078d4; }
.quick-link-icon.teams { background: #6264a7; }

.quick-link-text h4 {
    color: var(--primary-green);
    font-size: var(--font-size-body);
    margin: 0 0 2px;
}

.quick-link-text p {
    color: #888;
    font-size: var(--font-size-small);
    margin: 0;
}

/* Help Section */
.help-section {
    background: #f8f9fa !important;
    text-align: center;
}

.help-section p {
    margin: 0;
    color: #888;
    font-size: var(--font-size-small);
}

/* Responsive */
@media (max-width: 992px) {
    .quick-links-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .quick-links-grid {
        grid-template-columns: 1fr;
    }

    .documents-grid {
        grid-template-columns: 1fr;
    }

    .portal-header {
        flex-direction: column;
        gap: 1rem;
        text-align: center;
    }

    .password-form-wrapper {
        padding: 2rem;
    }

    .quick-link-card {
        padding: 0.875rem;
    }

    .quick-link-icon {
        width: 42px;
        height: 42px;
    }
}
</style>

<?php get_footer(); ?>
