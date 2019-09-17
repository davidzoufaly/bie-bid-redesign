    <!-- subheader -->
    <section class="subheader-homepage">
        <div class="container">
            <h1 class="subheader-homepage__title"><?php _e('BEST', 'bie') ?> <span
                    class="subheader-homepage__title--red subheader-homepage__title--light"><?php _e('IN', 'bie') ?></span>
                <?php the_field('jazyk_souteze', 'options') ?> <span
                    class="subheader-homepage__title--light"><?php echo date('Y'); ?></span></h1>
            <div class="js-timer">
                <div class="js-timer__box">
                    <p id="days" class="js-timer__num"></p>
                    <p class="js-timer__text">DNÍ</p>
                </div>
                <div class="js-timer__box">
                    <p id="hours" class="js-timer__num"></p>
                    <p class="js-timer__text">HODIN</p>
                </div>
                <div class="js-timer__box">
                    <p id="minutes" class="js-timer__num"></p>
                    <p class="js-timer__text">MINUT</p>
                </div>
                <div class="js-timer__box">
                    <p id="seconds" class="js-timer__num"></p>
                    <p class="js-timer__text">SEKUND</p>
                </div>
            </div>
            <div class="--order-swap">
                <div class="_buttons-row">
                    <a class="btn btn--red" href="#">REGISTRACE</a>
                    <a class="btn btn--white" href="#">IMPORTANT BUTTON</a>
                    <a class="btn btn--link" href="#">Results 2018</a>
                </div>

                <?php if(have_rows('box_sekce_subheader_homepage')) : ?>
                <div class="subheader-boxes">
                    <?php while(have_rows('box_sekce_subheader_homepage')) : the_row() ?>
                    <div class="subheader-boxes__box">
                        <h2><?php the_sub_field('nadpis_boxu_homepage'); ?></h2>
                        <?php if(have_rows('obsah_boxu_homepage')) : ?>
                        <?php while(have_rows('obsah_boxu_homepage')) : the_row() ?>
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