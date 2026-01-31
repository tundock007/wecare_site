<?php
/**
 * Template Name: News
 * Description: News and Articles page with blog posts
 */

get_header();

// Get paged variable for pagination
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

// Query for blog posts
$blog_query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 9,
    'paged' => $paged
));

// Get the latest post for featured section
$featured_query = new WP_Query(array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 1
));
?>

<main id="main" class="site-main">
    <!-- Page Hero -->
    <section class="page-hero" style="background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);">
        <div class="container">
            <h1 class="page-title">News & Articles</h1>
            <p class="page-subtitle">Updates, insights, and resources from WeCare</p>
        </div>
    </section>

    <?php if ($featured_query->have_posts() && $paged == 1) : $featured_query->the_post(); ?>
    <!-- Featured Post -->
    <section class="featured-post-section section-padding">
        <div class="container">
            <div class="featured-post">
                <?php if (has_post_thumbnail()) : ?>
                <div class="featured-image">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail('large', array('alt' => get_the_title())); ?>
                    </a>
                </div>
                <?php endif; ?>
                <div class="featured-content">
                    <div class="post-meta">
                        <span class="post-category">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) {
                                echo esc_html($categories[0]->name);
                            } else {
                                echo 'News';
                            }
                            ?>
                        </span>
                        <span class="post-date"><?php echo get_the_date('F j, Y'); ?></span>
                    </div>
                    <h2 class="featured-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <div class="featured-excerpt">
                        <?php echo wp_trim_words(get_the_excerpt(), 40, '...'); ?>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Read Article</a>
                </div>
            </div>
        </div>
    </section>
    <?php wp_reset_postdata(); endif; ?>

    <!-- Blog Posts Grid -->
    <section class="blog-posts-section section-padding bg-light">
        <div class="container">
            <?php if ($paged == 1) : ?>
            <h2 class="section-title-center">Latest Articles</h2>
            <?php else : ?>
            <h2 class="section-title-center">More Articles</h2>
            <?php endif; ?>

            <?php if ($blog_query->have_posts()) : ?>
            <div class="posts-grid">
                <?php
                $skip_first = ($paged == 1) ? true : false;
                $count = 0;
                while ($blog_query->have_posts()) : $blog_query->the_post();
                    // Skip the first post on page 1 since it's featured
                    if ($skip_first && $count == 0) {
                        $count++;
                        continue;
                    }
                ?>
                <article class="post-card">
                    <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                        <?php the_post_thumbnail('medium_large', array('alt' => get_the_title())); ?>
                    </a>
                    <?php else : ?>
                    <a href="<?php the_permalink(); ?>" class="post-thumbnail placeholder">
                        <div class="placeholder-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                        </div>
                    </a>
                    <?php endif; ?>
                    <div class="post-content">
                        <div class="post-meta">
                            <span class="post-category">
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) {
                                    echo esc_html($categories[0]->name);
                                } else {
                                    echo 'News';
                                }
                                ?>
                            </span>
                            <span class="post-date"><?php echo get_the_date('M j, Y'); ?></span>
                        </div>
                        <h3 class="post-title">
                            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        </h3>
                        <p class="post-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="read-more">
                            Read More
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
                        </a>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>

            <!-- Pagination -->
            <?php if ($blog_query->max_num_pages > 1) : ?>
            <div class="pagination">
                <?php
                echo paginate_links(array(
                    'total' => $blog_query->max_num_pages,
                    'current' => $paged,
                    'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="15 18 9 12 15 6"></polyline></svg> Previous',
                    'next_text' => 'Next <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="9 18 15 12 9 6"></polyline></svg>',
                ));
                ?>
            </div>
            <?php endif; ?>

            <?php wp_reset_postdata(); ?>

            <?php else : ?>
            <!-- No Posts Message -->
            <div class="no-posts">
                <div class="no-posts-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"></path><polyline points="14 2 14 8 20 8"></polyline><line x1="16" y1="13" x2="8" y2="13"></line><line x1="16" y1="17" x2="8" y2="17"></line><polyline points="10 9 9 9 8 9"></polyline></svg>
                </div>
                <h3>No Articles Yet</h3>
                <p>We're working on bringing you helpful content about mental health, wellness, and our community programs. Check back soon!</p>
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact Us</a>
            </div>
            <?php endif; ?>
        </div>
    </section>

    <!-- Newsletter/CTA Section -->
    <section class="news-cta section-padding">
        <div class="container">
            <div class="cta-content">
                <h2>Stay Connected with WeCare</h2>
                <p>Have questions about our services or want to learn more about mental health resources in your community?</p>
                <div class="cta-buttons">
                    <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-primary">Contact Us</a>
                    <a href="<?php echo esc_url(home_url('/services')); ?>" class="btn btn-outline">Our Services</a>
                </div>
            </div>
        </div>
    </section>
</main>

<style>
/* Featured Post Section */
.featured-post-section {
    background: white;
}

.featured-post {
    display: grid;
    grid-template-columns: 1.2fr 1fr;
    gap: 3rem;
    align-items: center;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.featured-image {
    height: 100%;
    min-height: 400px;
    overflow: hidden;
}

.featured-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.featured-post:hover .featured-image img {
    transform: scale(1.03);
}

.featured-content {
    padding: 2.5rem;
    padding-left: 0;
}

.post-meta {
    display: flex;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1rem;
}

.post-category {
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    color: var(--primary-green);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: var(--font-size-small);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

.post-date {
    color: #666;
    font-size: var(--font-size-small);
}

.featured-title {
    font-size: clamp(20px, 3vw, 28px);
    line-height: 1.3;
    margin-bottom: 1rem;
}

.featured-title a {
    color: var(--primary-green);
    text-decoration: none;
    transition: color 0.3s ease;
}

.featured-title a:hover {
    color: var(--accent-orange);
}

.featured-excerpt {
    color: var(--text-color);
    line-height: 1.7;
    margin-bottom: 1.5rem;
    font-size: var(--font-size-body);
}

/* Posts Grid */
.posts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.post-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 15px rgba(0,0,0,0.06);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.post-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.1);
}

.post-thumbnail {
    display: block;
    height: 200px;
    overflow: hidden;
}

.post-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.post-card:hover .post-thumbnail img {
    transform: scale(1.05);
}

.post-thumbnail.placeholder {
    background: linear-gradient(135deg, #e8f5e9 0%, #c8e6c9 100%);
    display: flex;
    align-items: center;
    justify-content: center;
}

.placeholder-icon {
    color: var(--primary-green);
    opacity: 0.5;
}

.post-content {
    padding: 1.5rem;
}

.post-card .post-meta {
    margin-bottom: 0.75rem;
}

.post-card .post-category {
    font-size: 10px;
    padding: 3px 8px;
}

.post-title {
    font-size: var(--font-size-heading);
    line-height: 1.4;
    margin-bottom: 0.75rem;
}

.post-title a {
    color: var(--primary-green);
    text-decoration: none;
    transition: color 0.3s ease;
}

.post-title a:hover {
    color: var(--accent-orange);
}

.post-excerpt {
    color: var(--text-color);
    font-size: var(--font-size-body);
    line-height: 1.6;
    margin-bottom: 1rem;
}

.read-more {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    color: var(--accent-orange);
    font-size: var(--font-size-small);
    font-weight: 600;
    text-decoration: none;
    transition: gap 0.3s ease;
}

.read-more:hover {
    gap: 10px;
}

/* Pagination */
.pagination {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 0.5rem;
    margin-top: 3rem;
    flex-wrap: wrap;
}

.pagination a,
.pagination span {
    display: inline-flex;
    align-items: center;
    gap: 6px;
    padding: 10px 16px;
    background: white;
    border: 1px solid #e0e0e0;
    border-radius: 8px;
    color: var(--text-color);
    text-decoration: none;
    font-size: var(--font-size-small);
    transition: all 0.3s ease;
}

.pagination a:hover {
    border-color: var(--primary-green);
    color: var(--primary-green);
}

.pagination .current {
    background: var(--primary-green);
    border-color: var(--primary-green);
    color: white;
}

.pagination .prev,
.pagination .next {
    font-weight: 600;
}

/* No Posts */
.no-posts {
    text-align: center;
    padding: 4rem 2rem;
    background: white;
    border-radius: 16px;
    box-shadow: 0 2px 15px rgba(0,0,0,0.06);
}

.no-posts-icon {
    color: var(--primary-green);
    opacity: 0.5;
    margin-bottom: 1.5rem;
}

.no-posts h3 {
    color: var(--primary-green);
    font-size: var(--font-size-section);
    margin-bottom: 1rem;
}

.no-posts p {
    color: var(--text-color);
    max-width: 500px;
    margin: 0 auto 1.5rem;
    line-height: 1.7;
}

/* News CTA */
.news-cta {
    background: var(--primary-green);
}

.cta-content {
    text-align: center;
    max-width: 600px;
    margin: 0 auto;
}

.cta-content h2 {
    color: white;
    margin-bottom: 1rem;
}

.cta-content p {
    color: rgba(255,255,255,0.9);
    margin-bottom: 1.5rem;
    line-height: 1.7;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

.btn-outline {
    background: transparent;
    border: 2px solid white;
    color: white;
}

.btn-outline:hover {
    background: white;
    color: var(--primary-green);
}

/* Responsive */
@media (max-width: 992px) {
    .featured-post {
        grid-template-columns: 1fr;
    }

    .featured-image {
        min-height: 300px;
    }

    .featured-content {
        padding: 2rem;
    }

    .posts-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .posts-grid {
        grid-template-columns: 1fr;
    }

    .featured-image {
        min-height: 250px;
    }

    .cta-buttons {
        flex-direction: column;
        align-items: center;
    }

    .cta-buttons .btn {
        width: 100%;
        max-width: 280px;
    }
}
</style>

<?php get_footer(); ?>
