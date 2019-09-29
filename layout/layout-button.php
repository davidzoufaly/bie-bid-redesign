<div class="buttons-row">
    <?php if(have_rows('button_link_layout')) : ?>
    <?php while(have_rows('button_link_layout')) : the_row() ?>
    <a class="btn <?php the_sub_field('styl_button_layout')?>"
        href="<?php the_sub_field('url_button_layout') ?>" target="<?php echo get_sub_field('target_button_layout') ? "blank" : null ?>"><?php the_sub_field('nazev_button_layout')?></a>
    <?php endwhile; ?>
    <?php endif; ?>
</div>