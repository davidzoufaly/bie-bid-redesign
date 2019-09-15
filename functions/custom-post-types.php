<?php
add_action('init', 'partners_post_type');
add_action('init', 'references_post_type');
add_action('init', 'team_post_type');

function partners_post_type() {
    $labels = array(
        'name' => _x('Partneři', 'post type general name', 'bie-bid'),
        'singular_name' => _x('Partner', 'post type singular name', 'bie-bid'),
        'menu_name' => _x('Partneři', 'admin menu', 'bie-bid'),
        'name_admin_bar' => _x('Partneři', 'add new on admin bar', 'bie-bid'),
        'add_new' => _x('Přidat nového partnera', 'testimonials', 'bie-bid'),
        'add_new_item' => __('Přidat nového partnera', 'bie-bid'),
        'new_item' => __('Nový', 'bie-bid'),
        'edit_item' => __('Editace', 'bie-bid'),
        'view_item' => __('Zobrazit', 'bie-bid'),
        'all_items' => __('Všechny', 'bie-bid'),
        'search_items' => __('Hledat', 'bie-bid'),
        'parent_item_colon' => __('Rodič:', 'bie-bid'),
        'not_found' => __('Nebyl nalezen.', 'bie-bid'),
        'not_found_in_trash' => __('Nebyl nalezen', 'bie-bid')
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => array('slug' => false, 'with_front' => false),
        'capability_type' => 'post',
        'has_archive' => false,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title'),
    );
    register_post_type('partners', $args);
};

function references_post_type() {
    $labels = array(
        'name' => _x('Reference', 'post type general name', 'bie-bid'),
        'singular_name' => _x('Reference', 'post type singular name', 'bie-bid'),
        'menu_name' => _x('Reference', 'admin menu', 'bie-bid'),
        'name_admin_bar' => _x('Reference', 'add new on admin bar', 'bie-bid'),
        'add_new' => _x('Přidat novou referenci', 'testimonials', 'bie-bid'),
        'add_new_item' => __('Přidat novou referenci', 'bie-bid'),
        'new_item' => __('Nová', 'bie-bid'),
        'edit_item' => __('Editace', 'bie-bid'),
        'view_item' => __('Zobrazit', 'bie-bid'),
        'all_items' => __('Všechny', 'bie-bid'),
        'search_items' => __('Hledat', 'bie-bid'),
        'parent_item_colon' => __('Rodič:', 'bie-bid'),
        'not_found' => __('Nebyl nalezen.', 'bie-bid'),
        'not_found_in_trash' => __('Nebyl nalezen', 'bie-bid')
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => false,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title'),
    );
    register_post_type('references', $args);
}

function team_post_type() {
    $labels = array(
        'name' => _x('Tým', 'post type general name', 'bie-bid'),
        'singular_name' => _x('Člen týmu', 'post type singular name', 'bie-bid'),
        'menu_name' => _x('Tým', 'admin menu', 'bie-bid'),
        'name_admin_bar' => _x('Tým', 'add new on admin bar', 'bie-bid'),
        'add_new' => _x('Přidat nového člena', 'testimonials', 'bie-bid'),
        'add_new_item' => __('Přidat nového člena', 'bie-bid'),
        'new_item' => __('Nový', 'bie-bid'),
        'edit_item' => __('Editace', 'bie-bid'),
        'view_item' => __('Zobrazit', 'bie-bid'),
        'all_items' => __('Všechny', 'bie-bid'),
        'search_items' => __('Hledat', 'bie-bid'),
        'parent_item_colon' => __('Rodič:', 'bie-bid'),
        'not_found' => __('Nebyl nalezen.', 'bie-bid'),
        'not_found_in_trash' => __('Nebyl nalezen', 'bie-bid')
    );
    $args = array(
        'labels' => $labels,
        'public' => false,
        'publicly_queryable' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'query_var' => true,
        'rewrite' => false,
        'capability_type' => 'post',
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => 5,
        'supports' => array('title'),
    );
    register_post_type('team', $args);
}
?>