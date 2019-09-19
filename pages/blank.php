<? /* Template Name: No builder */ ?>
<?php get_header(); ?>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <section>
        <div class="container">
            <?php the_content() ?>
        </div>
    </section>
</main>
<?php get_footer(); ?>

