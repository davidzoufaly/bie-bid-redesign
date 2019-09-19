<?php get_header() ?>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php single_post_title(); ?></h1>
    </div>
    <section class="archiv">
        <div class="container">
            <?php if (have_posts()): while (have_posts()) : the_post(); ?>
            <?php get_template_part('query-items/novinka-archive'); ?>
            <?php endwhile; ?>
            <?php endif; ?>
        </div>
        <?php get_template_part('pagination'); ?>
        <!-- <div class="pagination">
            <a href="#" class="pagination__box pagination__box--active">1</a>
            <a href="#" class="pagination__box">2</a>
            <a href="#" class="pagination__box">3</a>
        </div> -->
    </section>
</main>
<?php get_footer() ?>