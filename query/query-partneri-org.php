<?php 
$terms = get_terms(array(
    'taxonomy' => 'partners_type',
    'orderby' => 'slug',
    'order' => 'ASC'
));

foreach ($terms as $term) {
    $i = 0;
    switch ($term->slug) {
        case '1_organizator':
        case '2_spoluorganizator':
        case '3_generalni-partner':
            $post_per_page = 1;
            $style = "primary";
            break;
        case '4_hlavni-partner':
            $post_per_page = 5;
            $style = "secondary";
            break;
        case '5_medialni-partner':
            $post_per_page = 2;
            $style = "secondary";
            break;
        default: null;
    }

    $args = array(
        'post_type' => 'partners',
        'order' => 'DSC',
        'orderby' => 'slug',
        'post_per_page' => $post_per_page,
        'tax_query' => array ( 
            array(
                'taxonomy' => 'partners_type',
                'field' => 'slug',
                'terms' => $term->slug,
            ),
        ),
    );

    $query = new WP_Query($args);

    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            if ($style === "primary") {
                require get_template_directory().'/query-items/partner-primary.php';
            } else if ($style === "secondary") {
                $i++;
                if ($i === 1) {
                    echo '<div class="hl-partneri">';
                    echo '<h4>'.$term->name.'</h4>';
                    require get_template_directory().'/query-items/partner-secondary.php';
                } else if ($i === ($query->post_count)) {
                    require get_template_directory().'/query-items/partner-secondary.php';
                    echo '</div>';
                    $i = 0;
                } else {
                    require get_template_directory().'/query-items/partner-secondary.php';
                }
            } else {
                null;
            }
        }
    }  else {
            _e( 'Sorry, nothing to display.', 'html5blank' );
    } 
    wp_reset_query();
}
?>