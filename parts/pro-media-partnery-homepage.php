<div class="boxes-section__pro-media">
    <?php $pro_media = get_field('pro_media_homepage') ?>
    <h3><?php _e('PRO MÉDIA','bie'); ?></h3>
    <div class="prispevek">
        <div class="prispevek__cover">
            <img class="prispevek__img" src="<?php echo $pro_media['obrazek_media']['url']; ?>"
                alt="<?php echo $pro_media['obrazek_media']['alt'] ?>" loading="lazy"/>
        </div>
        <h4><?php echo $pro_media['subtitle'] ?></h4>
        <p class="prispevek__text"><?php echo $pro_media['text'] ?></p>
        <div><a class="btn btn--link" href="#"><?php _e('Více informací','bie')?> <span
                    class="icon-arrow_link"></span></a>
        </div>
    </div>
</div>
<div class="boxes-section__pro-partnery">
    <?php $pro_partnery = get_field('pro_partnery_homepage') ?>
    <h3><?php _e('PRO PARTNERY','bie')?></h3>
    <div class="prispevek">
        <div class="prispevek__cover">
            <img class="prispevek__img" src="<?php echo $pro_partnery['obrazek_partneri']['url']; ?>"
                alt="<?php echo $pro_partnery['obrazek_partneri']['alt'] ?>"/>
        </div>
        <h4><?php echo $pro_partnery['subtitle'] ?></h4>
        <p class="prispevek__text"><?php echo $pro_partnery['text'] ?></p>
        <div><a class="btn btn--link" href="#"><?php _e('Více informací','bie')?> <span
                    class="icon-arrow_link"></span></a>
        </div>
    </div>
</div>