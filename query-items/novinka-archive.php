<div class="card">
    <div class="card__thumbnail">
        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prispevek__img" aria-label="aktuality thumbnail">
            <?php the_post_thumbnail(); // Fullsize image for the single post ?>
        </a>
        <?php endif; ?>
    </div>
    <div class="card__content">
        <h2 class="h2--small h2--uppercase h2--nobefore prispevek__title"><a
                href="<?php the_permalink(); ?>"><?php the_title() ?></a></h2>
        <p class="card__date"><?php the_time('d.m.Y') ?> | <?php echo publikovanoDoVeletrhu();?></span>
            <?php _e('days until contest', 'bie') ?></p>
        <p class="card__text"><?php html5wp_excerpt('html5wp_index'); ?></p>
    </div>
</div>