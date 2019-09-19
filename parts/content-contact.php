<section class="content-acf">
    <div class="page-line">
        <?php 

if(have_rows('info_o_firme_flex_content')) :
    while(have_rows('info_o_firme_flex_content')) : the_row();
        switch(get_row_layout()) {
            case "text_blok":
                echo "<p>".get_sub_field('text_info_o_firme')."</p>";
            break;
            case "h2_blok":
                echo "<h2 class='h2--small h2--margin-top'>".get_sub_field('nadpis_2_info_o_firme')."</h2>";
            break;
            case "textove_pole_blok":
                echo "<p>".get_sub_field('textove_pole_info_o_firme')."</p>";
            break;
            default:
            null;
        }
    endwhile;
endif;

?>
    </div>
</section>