
    <div class="prispevek">
        <div class="prispevek__cover">
            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prispevek__img">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            </a>
            <?php endif; ?>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
<<<<<<< HEAD
        <p class="prispevek__date"><?php the_time('d.m.Y') ?> | <?php echo dateDifference()?></span> <?php _e('days until contest', 'bie') ?></p>
=======
        <div class="prispevek__date"><?php the_time('d.m.Y') ?></div>
>>>>>>> 978e684caa27869eea28e450325d9d809d51e7ec
        <p class="prispevek__text"><?php html5wp_excerpt('html5wp_index'); ?></p>
    </div>
