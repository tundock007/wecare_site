<?php
/**
 * Template Name: Submit Article
 * Description: Password-protected frontend post submission
 */

get_header();

// Set the submission password here
define('WECARE_SUBMIT_PASSWORD', 'WeCare2026!');

$is_authenticated = false;
$form_message = '';
$form_status = '';

// Check if user is authenticated via session/cookie
if (isset($_COOKIE['wecare_submit_auth']) && $_COOKIE['wecare_submit_auth'] === md5(WECARE_SUBMIT_PASSWORD . 'wecare_salt')) {
    $is_authenticated = true;
}

// Handle password submission
if (isset($_POST['submit_password']) && !empty($_POST['access_password'])) {
    if ($_POST['access_password'] === WECARE_SUBMIT_PASSWORD) {
        $is_authenticated = true;
        setcookie('wecare_submit_auth', md5(WECARE_SUBMIT_PASSWORD . 'wecare_salt'), time() + (24 * 60 * 60), '/'); // 24 hour cookie
    } else {
        $form_message = 'Incorrect password. Please try again.';
        $form_status = 'error';
    }
}

// Handle logout
if (isset($_GET['logout'])) {
    setcookie('wecare_submit_auth', '', time() - 3600, '/');
    $is_authenticated = false;
}

// Handle article submission
if ($is_authenticated && isset($_POST['submit_article']) && wp_verify_nonce($_POST['article_nonce'], 'wecare_submit_article')) {
    $title = sanitize_text_field($_POST['article_title']);
    $content = wp_kses_post($_POST['article_content']);
    $category = intval($_POST['article_category']);
    $author_name = sanitize_text_field($_POST['author_name']);

    if (empty($title) || empty($content)) {
        $form_message = 'Please fill in the title and content.';
        $form_status = 'error';
    } else {
        // Create the post as draft
        $post_data = array(
            'post_title'    => $title,
            'post_content'  => $content,
            'post_status'   => 'draft', // Saved as draft for review
            'post_type'     => 'post',
            'post_category' => array($category),
        );

        $post_id = wp_insert_post($post_data);

        if ($post_id && !is_wp_error($post_id)) {
            // Save author name as post meta
            if (!empty($author_name)) {
                update_post_meta($post_id, '_article_author', $author_name);
            }

            // Handle featured image upload
            if (!empty($_FILES['article_image']['name'])) {
                require_once(ABSPATH . 'wp-admin/includes/image.php');
                require_once(ABSPATH . 'wp-admin/includes/file.php');
                require_once(ABSPATH . 'wp-admin/includes/media.php');

                $attachment_id = media_handle_upload('article_image', $post_id);

                if (!is_wp_error($attachment_id)) {
                    set_post_thumbnail($post_id, $attachment_id);
                }
            }

            $form_message = 'Article submitted successfully! It will be reviewed before publishing.';
            $form_status = 'success';
        } else {
            $form_message = 'There was an error submitting the article. Please try again.';
            $form_status = 'error';
        }
    }
}

// Get categories for dropdown
$categories = get_categories(array('hide_empty' => false));
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">Submit an Article</h1>
            <p class="page-subtitle">Share news and updates with the WeCare community</p>
        </div>
    </section>

    <section class="submit-section section-padding">
        <div class="container">
            <?php if (!$is_authenticated) : ?>
            <!-- Password Form -->
            <div class="password-form-wrapper">
                <div class="password-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><rect x="3" y="11" width="18" height="11" rx="2" ry="2"></rect><path d="M7 11V7a5 5 0 0 1 10 0v4"></path></svg>
                </div>
                <h2>Staff Access Required</h2>
                <p>Enter the password to submit an article.</p>

                <?php if ($form_message && $form_status === 'error') : ?>
                <div class="form-message error"><?php echo esc_html($form_message); ?></div>
                <?php endif; ?>

                <form method="POST" class="password-form">
                    <div class="form-group">
                        <input type="password" name="access_password" placeholder="Enter password" required>
                    </div>
                    <button type="submit" name="submit_password" class="btn btn-primary">Access Form</button>
                </form>
            </div>

            <?php else : ?>
            <!-- Article Submission Form -->
            <div class="article-form-wrapper">
                <div class="form-header">
                    <h2>New Article</h2>
                    <a href="?logout=1" class="logout-link">Logout</a>
                </div>

                <?php if ($form_message) : ?>
                <div class="form-message <?php echo esc_attr($form_status); ?>">
                    <?php if ($form_status === 'success') : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path><polyline points="22 4 12 14.01 9 11.01"></polyline></svg>
                    <?php else : ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>
                    <?php endif; ?>
                    <?php echo esc_html($form_message); ?>
                </div>
                <?php endif; ?>

                <form method="POST" enctype="multipart/form-data" class="article-form">
                    <?php wp_nonce_field('wecare_submit_article', 'article_nonce'); ?>

                    <div class="form-group">
                        <label for="article_title">Article Title *</label>
                        <input type="text" id="article_title" name="article_title" required placeholder="Enter a descriptive title">
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="article_category">Category *</label>
                            <select id="article_category" name="article_category" required>
                                <option value="">Select a category</option>
                                <?php foreach ($categories as $cat) : ?>
                                <option value="<?php echo esc_attr($cat->term_id); ?>"><?php echo esc_html($cat->name); ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="author_name">Author Name</label>
                            <input type="text" id="author_name" name="author_name" placeholder="e.g., WeCare Team">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="article_content">Article Content *</label>
                        <textarea id="article_content" name="article_content" rows="12" required placeholder="Write your article here..."></textarea>
                        <p class="field-hint">You can use basic HTML for formatting (bold, italic, links, lists).</p>
                    </div>

                    <div class="form-group">
                        <label for="article_image">Featured Image</label>
                        <div class="file-upload-wrapper">
                            <input type="file" id="article_image" name="article_image" accept="image/*">
                            <div class="file-upload-text">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2" ry="2"></rect><circle cx="8.5" cy="8.5" r="1.5"></circle><polyline points="21 15 16 10 5 21"></polyline></svg>
                                <span>Click to upload or drag and drop</span>
                                <small>PNG, JPG, WebP up to 5MB</small>
                            </div>
                        </div>
                    </div>

                    <div class="form-note">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"></circle><line x1="12" y1="16" x2="12" y2="12"></line><line x1="12" y1="8" x2="12.01" y2="8"></line></svg>
                        <span>Articles are saved as drafts and will be reviewed before publishing.</span>
                    </div>

                    <div class="form-submit">
                        <button type="submit" name="submit_article" class="btn btn-primary btn-large">Submit Article</button>
                    </div>
                </form>
            </div>
            <?php endif; ?>
        </div>
    </section>
</main>

<style>
.submit-section {
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
}

.password-form-wrapper > p {
    color: var(--text-color);
    margin-bottom: 1.5rem;
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

/* Article Form */
.article-form-wrapper {
    max-width: 800px;
    margin: 0 auto;
    background: white;
    padding: 2.5rem;
    border-radius: 16px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.form-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    padding-bottom: 1rem;
    border-bottom: 1px solid #eee;
}

.form-header h2 {
    color: var(--primary-green);
    margin: 0;
}

.logout-link {
    color: #888;
    font-size: var(--font-size-small);
    text-decoration: none;
}

.logout-link:hover {
    color: var(--accent-orange);
}

.article-form .form-group {
    margin-bottom: 1.5rem;
}

.article-form label {
    display: block;
    color: var(--primary-green);
    font-weight: 600;
    margin-bottom: 0.5rem;
    font-size: var(--font-size-body);
}

.article-form input[type="text"],
.article-form select,
.article-form textarea {
    width: 100%;
    padding: 12px 16px;
    border: 1px solid #ddd;
    border-radius: 8px;
    font-size: var(--font-size-body);
    font-family: inherit;
    transition: border-color 0.3s ease;
}

.article-form input:focus,
.article-form select:focus,
.article-form textarea:focus {
    outline: none;
    border-color: var(--primary-green);
}

.article-form textarea {
    resize: vertical;
    min-height: 200px;
}

.field-hint {
    color: #888;
    font-size: var(--font-size-small);
    margin-top: 0.5rem;
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 1.5rem;
}

/* File Upload */
.file-upload-wrapper {
    position: relative;
}

.file-upload-wrapper input[type="file"] {
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    opacity: 0;
    cursor: pointer;
}

.file-upload-text {
    border: 2px dashed #ddd;
    border-radius: 8px;
    padding: 2rem;
    text-align: center;
    color: #888;
    transition: all 0.3s ease;
}

.file-upload-wrapper:hover .file-upload-text {
    border-color: var(--primary-green);
    background: #f9fdf9;
}

.file-upload-text svg {
    display: block;
    margin: 0 auto 0.75rem;
    color: var(--primary-green);
}

.file-upload-text span {
    display: block;
    font-size: var(--font-size-body);
    color: var(--text-color);
}

.file-upload-text small {
    display: block;
    margin-top: 0.25rem;
    font-size: var(--font-size-small);
}

/* Form Note */
.form-note {
    display: flex;
    align-items: center;
    gap: 10px;
    background: #fff8e1;
    padding: 1rem;
    border-radius: 8px;
    color: #856404;
    font-size: var(--font-size-small);
    margin-bottom: 1.5rem;
}

.form-note svg {
    flex-shrink: 0;
}

/* Form Submit */
.form-submit {
    text-align: center;
}

.btn-large {
    padding: 14px 40px;
    font-size: var(--font-size-body);
}

/* Form Messages */
.form-message {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1.5rem;
    font-weight: 500;
}

.form-message.success {
    background: #e8f5e9;
    color: #2e7d32;
}

.form-message.error {
    background: #ffebee;
    color: #c62828;
}

/* Responsive */
@media (max-width: 768px) {
    .article-form-wrapper {
        padding: 1.5rem;
    }

    .form-row {
        grid-template-columns: 1fr;
    }

    .password-form-wrapper {
        padding: 2rem;
    }
}
</style>

<?php get_footer(); ?>
