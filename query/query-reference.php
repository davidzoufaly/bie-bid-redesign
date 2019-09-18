<?php 
$args = array(
    'post_type' => 'references',
    'posts_per_page' => 3,
    'orderby' => 'rand'
);

$query = new WP_Query($args);

if($query->have_posts()) {
    while($query->have_posts()) {
        $query->the_post();
        get_template_part('query-items/reference');
    }
}

wp_reset_query();
?>