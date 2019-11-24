<div class="boxes-section__pro-media">
    <?php $pro_media = get_field('pro_media_homepage') ?>
    <h2 class="h2--small h2--uppercase"><?php _e('for media','bie'); ?></h2>
    <div class="prispevek">
        <div class="prispevek__cover">
            <img class="prispevek__img" src="<?php echo $pro_media['obrazek_media']['url']; ?>"
                alt="<?php echo $pro_media['obrazek_media']['alt'] ?>" loading="lazy"/>
        </div>
        <h3 class="h3--small h3--nobefore parmed"><?php echo $pro_media['subtitle'] ?></h3>
        <p class="prispevek__text"><?php echo $pro_media['text'] ?></p>
        <div><a class="btn btn--link btn--icon" href="<?php echo $pro_media['url_pro_media']?>"><span><?php _e('More information','bie')?></span><span class="icon-arrow_link"></span></a>
        </div>
    </div>
</div>

<div class="boxes-section__pro-partnery">
    <?php $pro_partnery = get_field('pro_partnery_homepage') ?>
    <h2 class="h2--small h2--uppercase"><?php _e('for partners','bie')?></h2>
    <div class="prispevek">
        <div class="prispevek__cover">
            <img class="prispevek__img" src="<?php echo $pro_partnery['obrazek_partneri']['url']; ?>"
                alt="<?php echo $pro_partnery['obrazek_partneri']['alt'] ?>" loading="lazy"/>
        </div>
        <h3 class="h3--small h3--nobefore parmed"><?php echo $pro_partnery['subtitle'] ?></h3>
        <p class="prispevek__text"><?php echo $pro_partnery['text'] ?></p>
        <div><a class="btn btn--link btn--icon" href="<?php echo $pro_partnery['url_pro_partnery'] ?>"><span><?php _e('More information','bie')?></span><span class="icon-arrow_link"></span></a>
        </div>
    </div>
</div>