<?php
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 2,
    'order' => 'DSC',
    'orderby' => 'date'
);

$query = new WP_Query($args);

if ($query->have_posts()) {
    while ($query->have_posts()) {
        $query->the_post(); 
        get_template_part('query-items/novinka-homepage');
    }
} else {
    _e( 'Sorry, nothing to display.', 'html5blank' );
} 

wp_reset_query(); 
?>