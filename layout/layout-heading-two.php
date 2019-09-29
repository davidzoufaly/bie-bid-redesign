<?php
if(get_sub_field('styl_2') === true) :
    $class_list = "h2--small h2--nobefore";
else : 
    $class_list = "h2--nobefore";
endif;

$str = get_sub_field('nadpis_2_urovne');
?> 

<h2 class="<?php echo $class_list ?>" id="<?php echo change_to_id($str) ?>"><?php the_sub_field('nadpis_2_urovne')?></h2>