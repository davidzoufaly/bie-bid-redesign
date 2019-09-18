
    <div class="prispevek">
        <div class="prispevek__cover">
            <?php if ( has_post_thumbnail()) : // Check if Thumbnail exists ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" class="prispevek__img">
                <?php the_post_thumbnail(); // Fullsize image for the single post ?>
            </a>
            <?php endif; ?>
        </div>
        <h4><a href="<?php the_permalink(); ?>"><?php the_title() ?></a></h4>
        <div class="prispevek__date"><?php the_time('d.m.Y') ?></div>
        <p class="prispevek__text"><?php the_excerpt() ?></p>
    </div>
