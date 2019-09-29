<?php 
if(have_rows('master_content')) :
    echo "<div class='layout'>";
    while(have_rows('master_content')) : the_row();
        if(get_sub_field('sirka_sekce')) :
            if(get_sub_field('sirka_sekce') === "padesat") :
            $class_list = "layout__section layout__section--half";
            else :
            $class_list = "layout__section";
            endif;
        endif;
        if(have_rows('sekce_flexible')) :
            echo "<section class='".$class_list."'>";
            while(have_rows('sekce_flexible')) : the_row();
                    switch(get_row_layout()) {
                        case "heading_two":
                            require get_template_directory().'/layout/layout-heading-two.php';
                        break;
                        case "heading_three":
                            require get_template_directory().'/layout/layout-heading-three.php';
                        break;
                        case "heading_four":
                            require get_template_directory().'/layout/layout-heading-four.php';
                        break;
                        case "text":
                            require get_template_directory().'/layout/layout-text.php';
                        break;
                        case "list":
                            require get_template_directory().'/layout/layout-list.php';
                        break;
                        case "table":
                            require get_template_directory().'/layout/layout-table.php';
                        break;
                        case "textfield":
                            require get_template_directory().'/layout/layout-textfield.php';
                        break;
                        case "shortcode":
                            require get_template_directory().'/layout/layout-shortcode.php';
                        break;
                        case "video":
                            require get_template_directory().'/layout/layout-video.php';
                        break;
                        case "gallery":
                            require get_template_directory().'/layout/layout-gallery.php';
                        break;
                        case "button_link":
                        require get_template_directory().'/layout/layout-button.php';
                        break;
                        case "html":
                        require get_template_directory().'/layout/layout-html.php';
                        break;
                        default: null;
                    }
                endwhile;
            echo "</section>";
        endif;
    endwhile;
    echo "</div>";
endif;
?>