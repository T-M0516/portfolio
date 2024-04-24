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
            <section class="article-container">
                <h2 class="headline"><?php the_title(); ?></h2>
                <div class="about-container">
                    <?php the_content(); ?>
                </div>
                <div class="about-container">

                </div>
            </section>
        <?php endwhile;
    else : ?>
        <p>作品はありません</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>