<div class="container">
        <div class="tel-email">
            <section>
                <h2 class="h2--small"><?php _e('Telephone', 'bie')?></h2>
                <?php 
            if(have_rows('telefonni_cisla_contact')) :
                echo "<ul>";
                while(have_rows('telefonni_cisla_contact')) : the_row();
                    if (get_sub_field('cislo_conctact')) :
                        $telefon = '<li><a class="btn btn--link btn--line-height-low btn--small-text" href="tel:'.str_replace(' ', '', get_sub_field('cislo_conctact')).'">'.get_sub_field('cislo_conctact').'</a></li>';
                    else :
                        $telefon = null;
                    endif; 
                    echo $telefon;
                endwhile;
                echo "</ul>";
            endif;
        ?>
            </section>
            <section>
                <h2 class="h2--small h2--margin-top"><?php _e('E-mail', 'bie')?></h2>
                <?php
            $email = '<p><a class="btn btn--link btn--line-height-low btn--small-text" href="mailto:'.get_field('email', 'options').'">'.get_field('email','options').'</a></p>';
            echo $email;
        ?>
            </section>
        </div>
</div>