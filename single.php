<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>

    <section class="bar">
        <div class="wrap wider">
            <div class="grid">
                <h1>
                    <?php the_title(); ?>
                </h1>
            </div><!-- .wrap wider -->
        </div><!-- .wrap wider -->
    </section><!-- .bar -->

    <section>
        <div class="wrap wider">
            <div class="grid">
                <div class="post-wrap">
                    
                    <div class="unit two-thirds">
                        <article class="post">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post_thumbnail(); ?>
                            <?php endif; ?>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                            <div class="meta">
                                Posted on <?php the_time('F j, Y g:i a'); ?> by <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a>
                            </div><!-- .meta -->
                            <?php the_content(); ?>
                        </article><!-- .post -->
                    <?php endwhile; ?>
                </div><!-- .unit two-thirds -->
                    
                <div class="unit one-third">
                    <?php if (is_active_sidebar('sidebar')) : ?>
                        <?php dynamic_sidebar('sidebar'); ?>
                    <?php endif; ?>
                </div><!-- .unit one-third -->

            </div><!-- .post-wrap -->
        </div><!-- .grid -->
    </div><!-- .wrap wider -->
</section>

<?php get_footer(); ?>