<?php $reference_group = get_field('reference_modul', 'options'); ?>

<section class="reference">
    <div class="container">
        <h2><?php _e('References','bie') ?></h2>
        <div class="_grid-reference _grid-reference--module animateScroll animateScroll--arrival-up">
            <?php get_template_part('query/query-reference-module') ?>
        </div>
        <div class="btn-wrap-center"><a class="btn btn--white" href="<?php echo $reference_group['reference_button_link'] ?>"><?php _e('all references','bie') ?></a></div>
    </div>
</section>