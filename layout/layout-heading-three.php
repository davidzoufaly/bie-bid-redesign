<?php
if(get_sub_field('styl_3') === true) :
    $class_list = "h3--small h3--nobefore";
else : 
    $class_list = "h3--nobefore";
endif;

$h3 = get_sub_field('nadpis_3_urovne');
?> 

<h3 class="<?php echo $class_list ?>" id="<?php echo change_to_id($h3) ?>"><?php echo $h3 ?></h3>