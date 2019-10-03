<?php get_header(); ?>

<main role="main">
    <section>
        <?php if (have_posts()): while (have_posts()) : the_post(); ?>

        <!-- article -->
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="novinka-subheader">
                <div class="submenu">
                    <?php
						if ( function_exists('yoast_breadcrumb') ) {
						  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
						}
						?>
                </div>
                <h1 class="novinka-subheader__title"><?php the_title(); ?></h1>
                <div class="novinka-subheader__info">
                    <p><span class="novinka-subheader__info__date"><?php the_time('d.m.Y') ?></span>|<span
                        id="js-dny-soutez"><?php echo publikovanoDoVeletrhu(); ?></span> <?php _e('days until contest', 'bie') ?></p>
                </div>
            </div>
            <div class="novinka-body">
                <div class="container">
                    <div class="content">
                        <?php the_content() ?>
                    </div>
                </div>
            </div>
        </article>
        <?php endwhile; ?>
        <?php else: ?>
        <article>
            <h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>
        </article>
        <?php endif; ?>
    </section>
</main>

<?php get_template_part('modules/module-novinky') ?>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-reference') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>