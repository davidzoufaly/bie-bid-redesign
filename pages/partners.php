<?php /* Template Name: Partners */ ?>
<?php get_header() ?>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <section class="partneri-sekce">
        <div class="container">
            <h2 class="h2--nobefore"><?php the_field('partneri_subtitle') ?></h2>
            <div class="flex-center">
                <p><?php the_field('partneri_text') ?></p>
            </div>
            <div class="partneri">
                <?php get_template_part('query/query-partneri') ?>
            </div>
        </div>
    </section>
</main>
<?php get_footer() ?>