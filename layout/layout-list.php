<?php
$typ = get_sub_field('typ_seznamu');

$class = "";

switch($typ) {
    case "bod":
        $typ_tag = "ul";
    break;
    case "cis":
        $typ_tag = "ol";
    break;
    case "pis":
        $typ_tag = "ol";
        $class = "lower-alpha";
}

if(have_rows('seznam')) :
    echo "<".$typ_tag." class=". $class .">";
    while(have_rows('seznam')) : the_row();
        echo "<li class='layout__list'><div>".get_sub_field('pole_seznamu')."</div></li>";
    endwhile;
    echo "</".$typ_tag.">";
endif;
?>