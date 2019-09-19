<?php /* Template Name: Registration  */ ?>

<?php get_header() ?>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title(); ?></h1>
    </div>
    <div class="registrace">
        <div class="container registrace-formular">
            <?php echo do_shortcode('[contact-form-7 id="290" title="Registration form"]') ?>
        </div>
    </div>
</main>
<?php get_footer() ?>