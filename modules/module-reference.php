<?php $reference_group = get_field('reference_modul', 'options'); ?>

<section class="reference">
    <div class="container">
        <h2><?php _e('Reference','bie') ?></h2>
        <div class="_grid-reference">
            <?php get_template_part('query/query-reference') ?>
        </div>
        <div class="btn-wrap-center"><a class="btn btn--white" href="<?php echo $reference_group['reference_button_link'] ?>"><?php _e('VŠECHNY REFERENCE','bie') ?></a></div>
    </div>
</section>