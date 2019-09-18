<?php 
get_field('foto_reference') ? $foto_reference = get_field('foto_reference') : $foto_reference = get_field('reference_placeholder', 'options');
?>

<div class="ref-box">
    <div class="ref-box__avatar">
        <img src="<?php echo $foto_reference['url'] ?>" alt="<?php echo $foto_reference['alt'] ?>">
    </div>
    <div class="ref-box__name --bold"><?php the_field('jmeno_reference')?></div>
    <div class="ref-box__school"><?php the_field('nazev_skoly_reference') ?></div>
    <div class="ref-box__country"><?php the_field('mesto_skoly_reference') ?>, <?php the_field('zeme_skoly_reference') ?></div>
    <p class="ref-box__ref-text"><?php the_field('text_refernce') ?></p>
</div>