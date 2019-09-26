<div class="prispevek">
    <div class="prispevek__cover">
        <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prispevek__img">
            <?php the_post_thumbnail('', $atts = array( 'loading' => 'lazy' )); // Fullsize image for the single post ?>
        </a>
        <?php endif; ?>
    </div>
    <h3 class="h3--small h3--uppercase h3--nobefore prispevek__title"><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h3>
    <p class="prispevek__date"><?php the_time('d.m.Y') ?> | <?php echo dateDifference()?></span>
        <?php _e('days until contest', 'bie') ?></p>
    <p class="prispevek__text"><?php html5wp_excerpt('html5wp_index'); ?></p>
</div>