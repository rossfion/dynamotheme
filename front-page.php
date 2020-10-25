<?php get_header(); ?>

<section class="showcase">
    <div class="my-slider">
        <ul>
            <?php
                $slider_query = new WP_Query(array(
                    'category_name' => 'slideshow',
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));
            ?>
            <?php if ($slider_query->have_posts()): ?>
                <?php while ($slider_query->have_posts()) : $slider_query->the_post(); ?>
                    <li>
                        <?php if (has_post_thumbnail()) : ?>
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                        <div class="caption">
                            <h2><?php the_title(); ?></h2>
                            <?php the_content(); ?>
                        </div><!-- .caption -->
                    </li>
                <?php endwhile; ?>
            </ul>
        </div><!-- .my-slider -->
    </section><!-- .showcase -->
<?php else : ?>
    <h4><?php echo __('Sorry, there are no sliders!', 'dynamotheme'); ?></h4>
<?php endif; ?>

<section>
    <div class="wrap wider">
        <div class="grid">
            <div id="tabs">
                <ul>
                    <?php
                        $tabs_query = new WP_Query(array(
                            'category_name' => 'tabs',
                            'orderby' => 'date',
                            'order' => 'ASC',
                        ));
                    ?>
                    <?php while ($tabs_query->have_posts()) : $tabs_query->the_post(); ?>
                        <li>
                            <a href="#<?php the_ID(); ?>"><?php the_title(); ?></a>
                        </li>
                    <?php endwhile; ?>
                </ul>
                <?php while ($tabs_query->have_posts()) : $tabs_query->the_post(); ?>
                    <div id="<?php the_ID(); ?>">
                        <h3><?php the_title(); ?></h3>
                        <?php the_content(); ?>
                    </div><!-- #tabs-1 -->
                <?php endwhile; ?>
            </div><!-- #tabs -->
        </div><!-- .grid -->
    </div><!-- .wrap wider -->
</section>

<section>
    <div class="wrap wider">
        <div class="grid">
            <div class="post-wrap">
                <?php
                $query = new WP_Query(array(
                    'category__not_in' => array(220, 221),
                    'orderby' => 'date',
                    'order' => 'ASC',
                ));
                ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <article class="post">
                        <?php if (has_post_thumbnail()) : ?>
                        <div class="unit one-third post-thumb">
                            <?php the_post_thumbnail(); ?>
                        <?php endif; ?>
                        </div><!-- .unit one-third post-thumb -->
                        <div class="unit two-thirds">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                            <a href="<?php the_permalink(); ?>" class="button">Read More</a>
                        </div><!-- .unit two-thirds -->
                    </article><!-- .post -->
                <?php endwhile; ?>
            </div><!-- .post-wrap -->
        </div><!-- .grid -->
    </div><!-- .wrap wider -->
</section>

<?php get_footer(); ?>