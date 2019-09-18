<?php
add_action('init', 'partners_type');
add_action('init', 'member_importance');

function partners_type() {
    $labels = array(
        'name' => _x('Typ', 'Kategorie'),
        'singular_name' => _x('Typ', 'Kategorie'),
        'search_items' => __('Vyhledat typ'),
        'all_items' => __('Všechny typy'),
        'parent_item' => __('Nadřazený typ'),
        'parent_item_colon' => __('Nadřazený typ:'),
        'edit_item' => __('Editovat typ'),
        'update_item' => __('Aktualizovat typ'),
        'add_new_item' => __('Přidat nový typ'),
        'new_item_name' => __('Nový typ'),
        'menu_name' => __('Typ')
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui'           => true,
        'show_in_quick_edit'=> false,
        'show_in_nav_menus' => false,
        'show_admin_column' => true,
        'meta_box_cb'       => true,
        'query_var' => true,
        'rewrite' => false
    );
    register_taxonomy('partners_type', 'partners', $args);
}

function member_importance() {
    $labels = array(
        'name' => _x('Hodnost', 'Kategorie'),
        'singular_name' => _x('Hodnost', 'Kategorie'),
        'search_items' => __('Vyhledat hodnost'),
        'all_items' => __('Všechny hodnodsti'),
        'parent_item' => __('Nadřazená hodnost'),
        'parent_item_colon' => __('Nadřazený typ:'),
        'edit_item' => __('Editovat hodnost'),
        'update_item' => __('Aktualizovat hodnost'),
        'add_new_item' => __('Přidat nový hodnost'),
        'new_item_name' => __('Nový hodnost'),
        'menu_name' => __('Hodnost')
    );
    $args = array(
        'hierarchical' => false,
        'labels' => $labels,
        'show_ui'           => true,
        'show_in_quick_edit'=> false,
        'show_in_nav_menus' => false,
        'show_admin_column' => true,
        'meta_box_cb'       => true,
        'query_var' => true,
        'rewrite' => false
    );
    register_taxonomy('member_importance', 'team', $args);
}

?>