<?php $libi_se_group = get_field('libi_se_ti_soutez', 'options') ?>

<div id="libi-se">
    <h2><?php _e('Do you like the competition?','bie')?></h2>
    <div>
    <?php if (get_field('reg_test_none_radio', 'options') === "reg") : ?>
        <a class="btn btn--white"
            href="<?php echo $libi_se_group['link_registrace'] ?>"><?php _e('register','bie') ?></a>
    <?php endif; ?>
        <a class="btn btn--link"
            href="<?php echo $libi_se_group['link_stan_se_partnerem']?>"><?php _e('become a partner') ?></a>
    </div>
</div>