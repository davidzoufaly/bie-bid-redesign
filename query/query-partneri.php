<?php 

$user_country_code = ip_info("Visitor", "Country Code");

// vem všechny instance taxonomie partners_type, serad je podle slugu odspodu. (slugy zacinaji cisly od 1 do n)
$terms = get_terms(array(
    'taxonomy' => 'partners_type',
    'orderby' => 'slug',
    'order' => 'ASC'
));

// projed instance podle slugu a prirad jim promenne 
foreach ($terms as $term) {
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

    // vytvor dynamicky query podle horniho switche
    $args = array(
        'post_type' => 'partners',
        'order' => 'DSC',
        'orderby' => 'slug',
        'post_per_page' => $post_per_page,
        'tax_query' => array ( 
            'relation' => 'AND',
            array(
                'taxonomy' => 'partners_type',
                'field' => 'slug',
                'terms' => $term->slug,
            ),
            array(
                'taxonomy' => 'partners_location',
                'field' => 'slug',
                'terms' => $user_country_code,
            )
        ),
    );

    $query = new WP_Query($args);

    // pomocny iterator
    $i = 0;


    if($query->have_posts()) {
        while($query->have_posts()) {
            $query->the_post();
            // kdyz jde o jednu ze tri instanci (org, coorg, gen. part.)
            if ($style === "primary") {
                require get_template_directory().'/query-items/partner-primary.php';
            // pokud jde o zbyle dve instance (main partner, media partner)
            } else if ($style === "secondary") {
                $i++;
                if ($i === 1) {
                    // prvni iterace
                    echo '<div class="hl-partneri">';
                    echo '<h4>'.$term->name.'</h4>';
                    echo '<div class="hl-partneri__loga">';
                    require get_template_directory().'/query-items/partner-secondary.php';
                } else if ($i === ($query->post_count)) {
                    // posledni iterace
                    require get_template_directory().'/query-items/partner-secondary.php';
                    echo '</div>';
                    echo '</div>';
                    $i = 0;
                } else {
                    // iterace uprostred array
                    require get_template_directory().'/query-items/partner-secondary.php';
                }
            }
        }
    }  else {
            _e( 'Sorry, nothing to display.', 'bie' );
    } 
    wp_reset_query();
}
?>