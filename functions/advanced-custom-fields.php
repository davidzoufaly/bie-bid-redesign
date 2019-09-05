<?php
// přidej option page
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'Kontakty',
        'menu_title'	=> 'Kontakty',
        'menu_slug' 	=> 'info_contact',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));
}

?>