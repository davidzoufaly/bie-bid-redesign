<?php
if(get_sub_field('styl_3') === true) :
    $class_list = "h3--small h3--nobefore";
else : 
    $class_list = "h3--nobefore";
endif;
?> 

<h3 class="<?php echo $class_list ?>"><?php the_sub_field('nadpis_3_urovne')?></h3>