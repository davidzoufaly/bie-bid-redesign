    <!-- subheader -->
    <?php $odpocet = odpocetData(current_time('d.m.Y H:i:s'), get_field('cas_konani_udalosti', 'options'), '%a-%h-%i-%s'); ?>
    
    <section class="subheader-homepage" style="background: radial-gradient(circle, rgba(94,197,220,0.52) 0%, #5ec5dc 100%),url(<?php the_field('subheader_background')['url'] ?>); background-size: cover;
    background-position: bottom;">
        <div class="container">
                <span class="subheader-homepage__title"><h1><?php _e('BEST', 'bie') ?> <span class="subheader-homepage__title--red subheader-homepage__title--light"><?php _e('IN', 'bie') ?></span>
                <?php the_field('jazyk_souteze', 'options') ?>&nbsp;</h1><span class="subheader-homepage__title--light"><?php echo date('Y'); ?></span></span>   
           

            <?php if ($odpocet) : ?>
                <div class="js-timer">
                    <div class="js-timer__box">
                        <p id="days" class="js-timer__num"></p>
                        <p class="js-timer__text"><?php _e('days', 'bie') ?></p>
                    </div>
                    <div class="js-timer__box">
                        <p id="hours" class="js-timer__num"></p>
                        <p class="js-timer__text"><?php _e('hours', 'bie') ?></p>
                    </div>
                    <div class="js-timer__box">
                        <p id="minutes" class="js-timer__num"></p>
                        <p class="js-timer__text"><?php _e('minutes', 'bie') ?></p>
                    </div>
                    <div class="js-timer__box">
                        <p id="seconds" class="js-timer__num"></p>
                        <p class="js-timer__text"><?php _e('seconds', 'bie') ?></p>
                    </div>
                </div>
            <?php endif; ?>
            <div class="--order-swap">
                <div class="_buttons-row">
                    <?php if (have_rows('buttons_homepage')) : ?>
                        <?php while (have_rows('buttons_homepage')) : the_row() ?>
                            <a class="btn <?php the_sub_field('styl_buttonu_homepage') ?>" href="<?php the_sub_field('url_buttonu_homepage') ?>"><?php the_sub_field('nazev_buttonu_homepage') ?></a>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
                <?php if (have_rows('box_sekce_subheader_homepage')) : ?>
                    <div class="subheader-boxes">
                        <?php while (have_rows('box_sekce_subheader_homepage')) : the_row() ?>
                            <div class="subheader-boxes__box">
                                <h2 class="subheader-boxes__title"><?php the_sub_field('nadpis_boxu_homepage'); ?></h2>
                                <?php if (have_rows('obsah_boxu_homepage')) : ?>
                                    <?php while (have_rows('obsah_boxu_homepage')) : the_row() ?>
                                        <p><?php the_sub_field('radek_textu') ?></p>
                                    <?php endwhile ?>
                                <?php endif ?>
                            </div>
                        <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>