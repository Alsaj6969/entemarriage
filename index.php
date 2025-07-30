<?php
/**
 * The main template file
 * This is the most generic template file in a WordPress theme
 */

get_header(); ?>

<main id="main" class="site-main">
    <div class="container">
        <?php if (have_posts()) : ?>
            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="post-thumbnail">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail('medium'); ?>
                                </a>
                            </div>
                        <?php endif; ?>
                        
                        <div class="post-content">
                            <header class="entry-header">
                                <h2 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h2>
                                
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        <?php echo get_the_date(); ?>
                                    </span>
                                </div>
                            </header>
                            
                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <footer class="entry-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">
                                    Read More
                                </a>
                            </footer>
                        </div>
                    </article>
                <?php endwhile; ?>
            </div>
            
            <?php
            // Pagination
            the_posts_pagination(array(
                'mid_size' => 2,
                'prev_text' => '&laquo; Previous',
                'next_text' => 'Next &raquo;',
            ));
            ?>
            
        <?php else : ?>
            <div class="no-posts">
                <h2>No posts found</h2>
                <p>Sorry, no posts matched your criteria.</p>
            </div>
        <?php endif; ?>
    </div>
</main>

<style>
.posts-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    margin: 40px 0;
}

.post-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
    transition: transform 0.3s, box-shadow 0.3s;
}

.post-card:hover {
    transform: translateY(-2px);
    box-shadow: 0 8px 25px rgba(0,0,0,0.15);
}

.post-thumbnail img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.post-content {
    padding: 20px;
}

.entry-title {
    margin: 0 0 10px 0;
    font-size: 1.5rem;
}

.entry-title a {
    color: var(--primary-color, #e65100);
    text-decoration: none;
}

.entry-meta {
    color: #666;
    font-size: 0.9rem;
    margin-bottom: 15px;
}

.entry-summary {
    color: #333;
    line-height: 1.6;
    margin-bottom: 20px;
}

.read-more {
    background: var(--primary-color, #e65100);
    color: #fff;
    padding: 8px 16px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 0.9rem;
    transition: background 0.3s;
}

.read-more:hover {
    background: #bf360c;
}

.no-posts {
    text-align: center;
    padding: 60px 20px;
}

.no-posts h2 {
    color: #333;
    margin-bottom: 20px;
}

.no-posts p {
    color: #666;
}

@media (max-width: 768px) {
    .posts-grid {
        grid-template-columns: 1fr;
        gap: 20px;
    }
}
</style>

<?php get_footer(); ?> 