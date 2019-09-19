<?php
$page_for_posts = get_option( 'page_for_posts' );
?>

<div class="boxes-section__aktuality">
    <h2 class="h2--small h2--uppercase"><?php _e('news','bie') ?></h2>
    <div class="--grid-lg-helper">
        <?php get_template_part('query/query-novinky-homepage') ?>
    </div>
    <div class="boxes-section__aktuality__vsechny">
        <a class="btn btn--blue" href="<?php echo get_permalink($page_for_posts) ?>"><?php _e('all news','bie') ?></a>
    </div>
</div>