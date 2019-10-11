<?php get_header(); ?>
<main>
<div class="page-subheader page404">
	<div class="page404__img"></div>
    <h1 class="page-subheader__title"><?php _e('Page not found - Code error 404','bie') ?></h1>
</div>

<section class="page-404">
    <div class="page-404__text">
        <h2><?php _e("We can't seem to find the page you're looking for.", "bie") ?></h2>
        <a class="btn btn--blue" href="<?php echo home_url() ?>"><?php _e('Return home', 'bie') ?></a>
    </div>
</section>
</main>
<?php get_footer(); ?>