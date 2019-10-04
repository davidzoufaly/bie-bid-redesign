<div class="partner">
    <h3><?php echo $term->name ?></h3>
    <div class="partner__logo">
        <img loading="lazy" src="<?php echo get_field('logo_partner')['url']; ?>" alt="<?php echo get_field('logo_partner')['alt']; ?>"
      />
    </div>
    <h4 class="partner__nazev"><?php the_title() ?></h4>
    <p class="partner__about"><?php the_field('text_partner'); ?></p>
</div>