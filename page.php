<?php get_header(); ?>
<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
	<div class="container py-5">
		<?php get_template_part('parts/layout') ?>
	</div>
</main>
<?php get_template_part('modules/module-reference') ?>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>


