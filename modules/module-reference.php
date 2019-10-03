<?php $reference_group = get_field('reference_modul', 'options'); ?>

<section class="reference">
    <div class="container">
        <h2><?php _e('References','bie') ?></h2>
        <div><i class="swiper-arrow swiper-arrow--left"></i></div>
        <div><i class="swiper-arrow swiper-arrow--right"></i></div>
        <div class="_grid-reference _grid-reference--module animateScroll animateScroll--arrival-up siema">
            <?php get_template_part('query/query-reference-module') ?>
        </div>
        <div class="btn-wrap-center"><a class="btn btn--white" href="<?php echo $reference_group['reference_button_link'] ?>"><?php _e('all references','bie') ?></a></div>
    </div>
</section>