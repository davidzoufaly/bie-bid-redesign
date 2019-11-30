<div class="partneri__logo">
    <img
        loading="lazy"
        src="<?php echo get_field('logo_partner')['url']; ?>"
        alt="<?php echo get_field('logo_partner')['alt']; ?>"
    />
    <h4 class="partner__nazev"><?php the_title() ?></h4>
    <?php if(!empty(get_field('text_partner'))) : ?>
        <p class="partner__about"><?php echo get_field('text_partner'); ?></p>
    <?php endif; ?>
</div>