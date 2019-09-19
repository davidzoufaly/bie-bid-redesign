<?php
if(get_sub_field('styl_2') === true) :
    $class_list = "h2--small h2--nobefore";
else : 
    $class_list = "h2--nobefore";
endif;
?> 

<h2 class="<?php echo $class_list ?>"><?php the_sub_field('nadpis_2_urovne')?></h2>