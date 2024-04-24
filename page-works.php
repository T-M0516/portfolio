<?php get_header(); ?>
<main>
    <?php if (is_home()) : ?>
        <div class="mvarea">
            <div class="mvcontainer">
                <h1><?php bloginfo('name'); ?></h1>
                <h2><?php bloginfo('description'); ?></h2>
            </div>
        </div>
        <section class="section-container">
            <h2><span>Good</span> Design</h2>
            <h2><span>Good</span> Coding</h2>
            <h2><span>Good</span> Video</h2>
        </section>
    <?php endif; ?>
    <article class="article-container workspage">
        <h2 class="headline"><?php the_title(); ?></h2>
        <?php
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 8
        );
        $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()) : ?>
            <?php while ($query->have_posts()) : $query->the_post(); ?>
                <article class="article-items ">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <div class="text-container">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                </article>
            <?php endwhile;
            wp_reset_postdata(); ?>
        <?php else : ?>
            <p>作品はありません</p>
        <?php endif; ?>
    </article>
</main>

<?php get_footer(); ?>