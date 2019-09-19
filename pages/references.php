<? /* Template Name: References */ ?>
<?php get_header(); ?>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <section class="reference reference--page">
        <div class="container">
        <div class="_grid-reference">
            <?php get_template_part('query/query-reference-reference') ?>
        </div>
        </div>
    </section>
</main>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>

