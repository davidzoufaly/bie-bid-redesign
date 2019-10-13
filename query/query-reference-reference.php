<?php 

$currentPage = ( get_query_var('paged') ) ? get_query_var('paged') : 1; 
$args = array(
    'post_type' => 'references',
    'posts_per_page' => 9,
    'orderby' => 'date',
    'order' => 'DSC',
    'paged' => $currentPage
);

$query = new WP_Query($args);

if($query->have_posts()) {
    while($query->have_posts()) {
        $query->the_post();
        get_template_part('query-items/reference');
    }
?>

</div>

<div class="pagination">
<?php

    customPagination($currentPage, $query->max_num_pages);
    wp_reset_query();
}?>
