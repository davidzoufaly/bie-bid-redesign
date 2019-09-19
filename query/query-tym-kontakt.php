<?php

$terms = get_terms(array(
    'taxonomy' => 'member_importance',
    'orderby' => 'slug',
    'order' => 'ASC',
    ));

foreach ($terms as $term) {

    $args = array(
        'post_type' => 'team',
        'posts_per_page' => -1,
        'order' => 'ASC',
        'tax_query' => array ( 
            array(
                'taxonomy' => 'member_importance',
                'field' => 'slug',
                'terms' => $term->slug,
            ),
        ),
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post(); 
            get_template_part('query-items/member');
        }
    } else {
        _e( 'Sorry, nothing to display.', 'html5blank' );
    } 

    wp_reset_query(); 

}

?>