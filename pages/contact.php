<?php /* Template Name: Contact */ ?>

<?php get_header() ?>
<div class="main">
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title(); ?></h1>
    </div>
    <div class="py-5">
        <?php get_template_part('parts/tel-email-contact') ?>
        <?php get_template_part('parts/content-contact') ?>
    </div>
    <?php get_template_part('parts/team-contact') ?>
    <?php get_template_part('modules/module-libi-se') ?>
    <?php get_template_part('modules/module-kontakt') ?>
</div>
<?php get_footer() ?>
