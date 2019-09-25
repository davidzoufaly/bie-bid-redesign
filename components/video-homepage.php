<div class="boxes-section__what-is animateScroll animateScroll--arrival-up">
    <div class="--flex-lg-helper">
        <?php $video_sekce = get_field('video_sekce_homepage'); ?>
        <?php if($video_sekce) : ?>
        <h2><?php echo $video_sekce['nadpis_video_homepage'] ?></h2>
        <p><?php echo $video_sekce['odstavec_video_homepage'] ?></p>
        <p><strong><?php echo $video_sekce['popis_videa_homepage'] ?></strong></p>
<?php endif; ?>
    </div>
    <div class="--flex-lg-video-helper">
        <div class="_video bie">
            <?php $video = $video_sekce["video_url_homepage"] ?>
            <?php echo do_shortcode('[lazyloadyoutube url="'.$video.'"]') ?>
        </div>
    </div>
</div>

