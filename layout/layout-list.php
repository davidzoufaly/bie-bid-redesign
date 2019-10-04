<?php
$typ = get_sub_field('typ_seznamu');

if(have_rows('seznam')) :
    echo "<".$typ.">";
    while(have_rows('seznam')) : the_row();
        echo "<li class='layout__list'><div>".get_sub_field('pole_seznamu')."</div></li>";
    endwhile;
    echo "</".$typ.">";
endif;
?>