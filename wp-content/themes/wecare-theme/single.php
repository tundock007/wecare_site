<?php
/**
 * Single Post Template
 *
 * @package WeCare
 */

get_header();
?>

<main id="main" class="site-main">
    <?php while (have_posts()) : the_post(); ?>

    <!-- Article Hero -->
    <article class="single-article">
        <header class="article-header">
            <div class="container">
                <div class="article-meta">
                    <span class="article-category">
                        <?php
                        $categories = get_the_category();
                        if (!empty($categories)) {
                            echo '<a href="' . esc_url(get_category_link($categories[0]->term_id)) . '">' . esc_html($categories[0]->name) . '</a>';
                        } else {
                            echo 'News';
                        }
                        ?>
                    </span>
                    <span class="article-date"><?php echo get_the_date('F j, Y'); ?></span>
                    <span class="article-read-time"><?php echo wecare_reading_time(); ?> min read</span>
                </div>
                <h1 class="article-title"><?php the_title(); ?></h1>
                <?php if (has_excerpt()) : ?>
                <p class="article-excerpt"><?php echo get_the_excerpt(); ?></p>
                <?php endif; ?>
            </div>
        </header>

        <?php if (has_post_thumbnail()) : ?>
        <div class="article-featured-image">
            <div class="container">
                <?php the_post_thumbnail('full', array('alt' => get_the_title())); ?>
            </div>
        </div>
        <?php endif; ?>

        <!-- Article Content -->
        <div class="article-content">
            <div class="container">
                <div class="content-wrapper">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <?php
                $tags = get_the_tags();
                if ($tags) : ?>
                <div class="article-tags">
                    <span class="tags-label">Topics:</span>
                    <?php foreach ($tags as $tag) : ?>
                    <a href="<?php echo get_tag_link($tag->term_id); ?>" class="tag"><?php echo esc_html($tag->name); ?></a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <!-- Share -->
                <div class="article-share">
                    <span class="share-label">Share this article:</span>
                    <div class="share-buttons">
                        <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="share-btn facebook" aria-label="Share on Facebook">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                        </a>
                        <a href="https://twitter.com/intent/tweet?url=<?php echo urlencode(get_permalink()); ?>&text=<?php echo urlencode(get_the_title()); ?>" target="_blank" rel="noopener noreferrer" class="share-btn twitter" aria-label="Share on Twitter">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z"/></svg>
                        </a>
                        <a href="https://www.linkedin.com/sharing/share-offsite/?url=<?php echo urlencode(get_permalink()); ?>" target="_blank" rel="noopener noreferrer" class="share-btn linkedin" aria-label="Share on LinkedIn">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                        </a>
                        <a href="mailto:?subject=<?php echo urlencode(get_the_title()); ?>&body=<?php echo urlencode(get_permalink()); ?>" class="share-btn email" aria-label="Share via Email">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path><polyline points="22,6 12,13 2,6"></polyline></svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Author Box -->
        <div class="article-author-section">
            <div class="container">
                <div class="author-box">
                    <div class="author-info">
                        <p class="author-name">Written by <strong>WeCare Team</strong></p>
                        <p class="author-bio">At WeCare, we're committed to providing compassionate mental health and personal care services to individuals and families in Central Minnesota and the Metro/Twin Cities area.</p>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <?php endwhile; ?>

    <!-- Related Posts -->
    <?php
    $categories = get_the_category();
    if ($categories) :
        $category_ids = array();
        foreach ($categories as $category) {
            $category_ids[] = $category->term_id;
        }

        $related_query = new WP_Query(array(
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'post__not_in' => array(get_the_ID()),
            'category__in' => $category_ids
        ));

        if ($related_query->have_posts()) :
    ?>
    <section class="related-posts-section section-padding bg-light">
        <div class="container">
            <h2 class="section-title-center">Related Articles</h2>
            <div class="related-posts-grid">
                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                <article class="related-post-card">
                    <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" class="related-thumbnail">
                        <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                    </a>
                    <?php endif; ?>
                    <div class="related-content">
                        <span class="related-date"><?php echo get_the_date('M j, Y'); ?></span>
                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    </div>
                </article>
                <?php endwhile; ?>
            </div>
            <div class="text-center" style="margin-top: 2rem;">
                <a href="<?php echo esc_url(home_url('/news')); ?>" class="btn btn-outline-green">View All Articles</a>
            </div>
        </div>
    </section>
    <?php
        wp_reset_postdata();
        endif;
    endif;
    ?>

    <!-- CTA Section -->
    <section class="article-cta section-padding">
        <div class="container text-center">
            <h2>Need Support?</h2>
            <p>Our team is here to help. Contact us to learn more about our mental health and personal care services.</p>
            <div class="cta-buttons">
                <a href="<?php echo esc_url(home_url('/contact')); ?>" class="btn btn-white">Contact Us</a>
                <a href="tel:3202814449" class="btn btn-outline-white">Call (320) 281-4449</a>
            </div>
        </div>
    </section>
</main>

<style>
/* Article Header */
.article-header {
    background: linear-gradient(135deg, var(--primary-green) 0%, var(--primary-green-dark) 100%);
    padding: 80px 0 60px;
    text-align: center;
}

.article-meta {
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 1rem;
    margin-bottom: 1.5rem;
    flex-wrap: wrap;
}

.article-category a {
    background: rgba(255,255,255,0.2);
    color: white;
    padding: 4px 12px;
    border-radius: 20px;
    font-size: var(--font-size-small);
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 0.5px;
    text-decoration: none;
    transition: background 0.3s ease;
}

.article-category a:hover {
    background: rgba(255,255,255,0.3);
}

.article-date,
.article-read-time {
    color: rgba(255,255,255,0.8);
    font-size: var(--font-size-small);
}

.article-title {
    color: white;
    font-size: clamp(24px, 5vw, 36px);
    line-height: 1.3;
    max-width: 800px;
    margin: 0 auto 1rem;
}

.article-excerpt {
    color: rgba(255,255,255,0.9);
    font-size: var(--font-size-body);
    line-height: 1.7;
    max-width: 600px;
    margin: 0 auto;
}

/* Featured Image */
.article-featured-image {
    margin-top: -30px;
    margin-bottom: 3rem;
}

.article-featured-image img {
    width: 100%;
    max-width: 900px;
    margin: 0 auto;
    display: block;
    border-radius: 12px;
    box-shadow: 0 10px 40px rgba(0,0,0,0.15);
}

/* Article Content */
.article-content {
    padding: 0 0 3rem;
}

.content-wrapper {
    max-width: 750px;
    margin: 0 auto;
}

.content-wrapper h2 {
    color: var(--primary-green);
    font-size: var(--font-size-section);
    margin: 2rem 0 1rem;
}

.content-wrapper h3 {
    color: var(--primary-green);
    font-size: var(--font-size-heading);
    margin: 1.5rem 0 0.75rem;
}

.content-wrapper p {
    font-size: var(--font-size-body);
    line-height: 1.8;
    margin-bottom: 1.25rem;
    color: var(--text-color);
}

.content-wrapper ul,
.content-wrapper ol {
    margin: 1rem 0 1.5rem 1.5rem;
    color: var(--text-color);
}

.content-wrapper li {
    margin-bottom: 0.5rem;
    line-height: 1.7;
}

.content-wrapper a {
    color: var(--primary-green);
    text-decoration: underline;
}

.content-wrapper a:hover {
    color: var(--accent-orange);
}

.content-wrapper blockquote {
    border-left: 4px solid var(--accent-orange);
    padding-left: 1.5rem;
    margin: 2rem 0;
    font-style: italic;
    color: #555;
}

.content-wrapper img {
    max-width: 100%;
    height: auto;
    border-radius: 8px;
    margin: 1.5rem 0;
}

/* Tags */
.article-tags {
    max-width: 750px;
    margin: 2rem auto;
    padding-top: 2rem;
    border-top: 1px solid #eee;
    display: flex;
    align-items: center;
    gap: 0.75rem;
    flex-wrap: wrap;
}

.tags-label {
    color: #666;
    font-size: var(--font-size-small);
    font-weight: 600;
}

.tag {
    background: #f5f5f5;
    color: var(--text-color);
    padding: 4px 12px;
    border-radius: 20px;
    font-size: var(--font-size-small);
    text-decoration: none;
    transition: all 0.3s ease;
}

.tag:hover {
    background: var(--primary-green);
    color: white;
}

/* Share */
.article-share {
    max-width: 750px;
    margin: 2rem auto;
    padding-top: 1.5rem;
    border-top: 1px solid #eee;
    display: flex;
    align-items: center;
    gap: 1rem;
}

.share-label {
    color: #666;
    font-size: var(--font-size-small);
    font-weight: 600;
}

.share-buttons {
    display: flex;
    gap: 0.5rem;
}

.share-btn {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    transition: transform 0.3s ease, opacity 0.3s ease;
}

.share-btn:hover {
    transform: translateY(-3px);
    opacity: 0.9;
}

.share-btn.facebook { background: #1877f2; }
.share-btn.twitter { background: #000; }
.share-btn.linkedin { background: #0077b5; }
.share-btn.email { background: var(--primary-green); }

/* Author Box */
.article-author-section {
    background: #f9f9f9;
    padding: 2rem 0;
}

.author-box {
    max-width: 750px;
    margin: 0 auto;
    display: flex;
    gap: 1.5rem;
    align-items: center;
}

.author-name {
    color: var(--primary-green);
    font-size: var(--font-size-body);
    margin-bottom: 0.5rem;
}

.author-bio {
    color: var(--text-color);
    font-size: var(--font-size-small);
    line-height: 1.6;
    margin: 0;
}

/* Related Posts */
.related-posts-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    margin-top: 2rem;
}

.related-post-card {
    background: white;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 15px rgba(0,0,0,0.06);
    transition: transform 0.3s ease;
}

.related-post-card:hover {
    transform: translateY(-5px);
}

.related-thumbnail {
    display: block;
    height: 160px;
    overflow: hidden;
}

.related-thumbnail img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.related-post-card:hover .related-thumbnail img {
    transform: scale(1.05);
}

.related-content {
    padding: 1.25rem;
}

.related-date {
    color: #666;
    font-size: var(--font-size-small);
}

.related-content h3 {
    font-size: var(--font-size-body);
    margin-top: 0.5rem;
    line-height: 1.4;
}

.related-content h3 a {
    color: var(--primary-green);
    text-decoration: none;
    transition: color 0.3s ease;
}

.related-content h3 a:hover {
    color: var(--accent-orange);
}

.btn-outline-green {
    background: transparent;
    border: 2px solid var(--primary-green);
    color: var(--primary-green);
}

.btn-outline-green:hover {
    background: var(--primary-green);
    color: white;
}

/* Article CTA */
.article-cta {
    background: var(--primary-green);
}

.article-cta h2,
.article-cta p {
    color: white;
}

.article-cta p {
    margin-bottom: 1.5rem;
    opacity: 0.9;
}

.cta-buttons {
    display: flex;
    gap: 1rem;
    justify-content: center;
    flex-wrap: wrap;
}

/* Responsive */
@media (max-width: 992px) {
    .related-posts-grid {
        grid-template-columns: repeat(2, 1fr);
    }
}

@media (max-width: 768px) {
    .article-header {
        padding: 60px 0 40px;
    }

    .article-share {
        flex-direction: column;
        align-items: flex-start;
    }

    .related-posts-grid {
        grid-template-columns: 1fr;
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
