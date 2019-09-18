<?php
/* Template Name: homepage */
get_header();
?>

<body>
    <?php get_template_part('parts/subheader-homepage'); ?>
    <!-- Boxes section -->
    <section class="boxes-section">
        <div class="container">
            <?php get_template_part('parts/video-homepage') ?>
            <?php get_template_part('parts/novinky-homepage') ?>
            <?php get_template_part('parts/pro-media-partnery-homepage') ?>
        </div>
    </section>

    <?php get_template_part('modules/module-reference') ?>
    <?php get_template_part('parts/partneri-homepage') ?>
    <!-- <div class="partneri-sekce">
        <div class="container">
            <h2>Partneři</h2>
            <div class="partneri">
                <div class="partner">
                    <h3>ORGANIZÁTOR</h3>
                    <div class="partner__logo">
                        <img src="./wp-content/themes/bie/img/czech-us.jpg" alr="Czech-us logo">
                    </div>
                    <h4 class="partner__nazev">Czech-us</h4>
                    <p class="partner__about">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis,
                        sem.</p>
                </div>
                <div class="partner">
                    <h3>SPOLUORGANIZÁTOR</h3>
                    <div class="partner__logo" style="margin-bottom: 16px">
                        <img src="./wp-content/themes/bie/img/institute.jpg"
                            alr="Institute for competencies development logo">
                    </div>
                    <h4 class="partner__nazev">Czech-us</h4>
                    <p class="partner__about">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis,
                        sem.</p>
                </div>
                <div class="partner">
                    <h3>GENERÁLNÍ PARTNER</h3>
                    <div class="partner__logo">
                        <img src="./wp-content/themes/bie/img/kb.jpg" alr="Komercni banka logo">
                    </div>
                    <h4 class="partner__nazev">Komerční banka</h4>
                    <p class="partner__about">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis,
                        sem.</p>
                </div>
                <div class="hl-partneri">
                    <h4>HLAVNÍ PARTNEŘI</h4>
                    <div class="hl-partneri__loga">
                        <img src="./wp-content/themes/bie/img/stabilo.jpg" alt="Stabilo logo">
                        <img src="./wp-content/themes/bie/img/ilac.jpg" alt="ILAC logo">
                        <img src="./wp-content/themes/bie/img/akcent.jpg" alt="Akcent logo">
                        <img src="./wp-content/themes/bie/img/bhv.jpg" alt="BVH education logo">
                        <img src="./wp-content/themes/bie/img/injoy.jpg" alt="Injoy logo">
                    </div>
                </div>
                <div class="med-partneri">
                    <h4>MEDIALNÍ PARTNEŘI</h4>
                    <div class="med-partneri__loga">
                        <img src="./wp-content/themes/bie/img/ess.jpg" alt="European summer school logo">
                        <img src="./wp-content/themes/bie/img/brainstorm.jpg" alt="Brainstorm logo">
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <?php get_template_part('modules/module-libi-se') ?>
    <div class="kontaktujte-nas">
        <div class="container">
            <h2>KONTAKTUJTE NÁS</h2>
            <form class="kontaktujte-nas-formular" action="" method="post">
                <input class="kontaktujte-nas-formular__jmeno" type="text" name="jmeno" placeholder="Jméno*">
                <input class="kontaktujte-nas-formular__email" type="email" name="email" placeholder="Email*">
                <input class="kontaktujte-nas-formular__text" type="text" name="text" placeholder="Text*">
                <div>
                    <input class="btn btn--blue" type="submit" name="odeslat" value="ODESLAT">
                </div>
            </form>
        </div>
    </div>

    <?php 
        get_footer();
    ?>