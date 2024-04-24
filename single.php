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
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="singlepage-section">
                <h2 class="singlepage-headline"><?php the_title(); ?></h2>
                <div class="single-content">
                    <?php the_content(); ?>
                </div>
                <!-- <a href="http://momoka-takanezawa.local/works/" class="btn">Website</a> -->
            </section>
        <?php endwhile;
    else : ?>
        <p>作品はありません</p>
    <?php endif; ?>

    <div class="otherworks">
        <h2 class="singlepage-headline">Other Works</h2>
        <article class="article-container singlepage-container">
            <?php
            // 現在表示されている single page のIDを取得
            $current_post_id = get_the_ID();

            // WP_Queryの引数を設定
            $args = array(
                'post_type'      => 'post',
                'posts_per_page' => 4,
                'post__not_in'   => array($current_post_id) // 現在の記事を除外
            );

            // クエリを実行
            $query = new WP_Query($args);
            ?>
            <?php if ($query->have_posts()) : ?>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <article class="single-items">
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
    </div>
</main>

<?php get_footer(); ?>