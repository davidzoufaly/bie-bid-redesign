<?php $libi_se_group = get_field('libi_se_ti_soutez', 'options') ?>

<div id="libi-se">
        <h2><?php _e('Líbí se ti tato soutěž?','bie')?></h2>
        <div>
            <a class="btn btn--white" href="<?php echo $libi_se_group['link_registrace'] ?>"><?php _e('REGISTRUJ SE','bie') ?></a>
            <a class="btn btn--link" href="<?php echo $libi_se_group['link_stan_se_partnerem']?>"><?php _e('STAŇ SE PARTNEREM') ?></a>
        </div>
    </div>