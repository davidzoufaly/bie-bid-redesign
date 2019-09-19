<?php
$reference_group = get_field('reference_modul', 'options');

get_field('foto_reference') ? $foto_reference = get_field('foto_reference') : $foto_reference = $reference_group['reference_placeholder'];
?>

<div class="ref-box">
    <div class="ref-box__avatar">
        <img src="<?php echo $foto_reference['url'] ?>" alt="<?php echo $foto_reference['alt'] ?>" loading="lazy"/>
    </div>
    <p class="ref-box__text ref-box__name --bold"><?php the_field('jmeno_reference')?></p>
    <p class="ref-box__text ref-box__school"><?php the_field('nazev_skoly_reference') ?></p>
    <p class="ref-box__text ref-box__country"><?php the_field('mesto_skoly_reference') ?>, <?php the_field('zeme_skoly_reference') ?></p>
    <p class="ref-box__ref-text" id="text-<?php the_id() ?>"><?php the_field('text_reference') ?></p>
</div>