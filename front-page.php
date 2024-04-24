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
    <article class="article-container">
        <?php $page = get_page_by_path('WORKS'); ?>
        <h2 class="headline"> <?php echo $page->post_title; ?></h2>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article class="article-items">
                    <a href="<?php echo esc_url(get_permalink()); ?>">
                        <?php the_post_thumbnail('medium'); ?>
                        <div class="text-container">
                            <h3><?php the_title(); ?></h3>
                            <?php the_excerpt(); ?>
                        </div>
                    </a>
                </article>
            <?php endwhile;
        else : ?>
            <p>作品はありません</p>
        <?php endif; ?>
        <a href="<?php echo esc_url(home_url('/WORKS/')); ?>" class="btn">more</a>
    </article>
</main>

<?php get_footer(); ?>