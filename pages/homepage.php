<?php
/* Template Name: homepage */
get_header();


?>
<body>
    <?php get_template_part('parts/sub-header-homepage'); ?>
    <!-- Boxes section -->
    <div class="boxes-section">
        <div class="container">
            <div class="boxes-section__what-is">
                <div class="--flex-lg-helper">
                    <h2>What is Best in English contest?</h2>
                    <p>The Best In English contest is a truly European online English language competition, open to all secondary schools within the EU and beyond. The test is designed for high school students aged between 15 and 19.</p>
                    <p class="--bold">Watch a short video to learn more about the Best In English contest.</p>
                </div>
                <div class="--flex-lg-video-helper">
                    <div class="_video">
                        <span class="icon-button_blue"><span class="path1"></span><span class="path2"></span><span class="path3"></span></span>
                    </div>
                </div>
            </div>
            <div class="boxes-section__aktuality">
                <h3>AKTUALITY</h3>
                <div class="--grid-lg-helper">
                    <div class="prispevek">
                        <div class="prispevek__cover">
                            <img  class="prispevek__img" src="https://via.placeholder.com/240" alt="">
                        </div>
                        <h4>Tittle novinky na dva řádky lorem</h4>
                        <div class="prispevek__date">22. 7. 2019</div>
                        <p class="prispevek__text">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem...</p>
                    </div>
                    <div class="prispevek">
                        <div class="prispevek__cover">
                            <img  class="prispevek__img" src="https://via.placeholder.com/240" alt="">
                        </div>
                        <h4>Tittle novinky na dva řádky lorem</h4>
                        <div class="prispevek__date">22. 7. 2019</div>
                        <p class="prispevek__text">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem...</p>
                    </div>
                </div>
                <div class="boxes-section__aktuality__vsechny">
                    <a class="btn btn--blue" href="#">VŠECHNY AKTUALITY</a>
                </div>
            </div>

            <div class="boxes-section__pro-media">
                <h3>PRO MÉDIA</h3>
                <div class="prispevek">
                    <div class="prispevek__cover">
                        <img class="prispevek__img" src="https://via.placeholder.com/240" alt="">
                    </div>
                    <h4>Tittle média na dva řádky lorem</h4>
                    <p class="prispevek__text">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Pellentesque pretium lectus id turpis. Donec ipsum massa. Sed vel lectus. Donec odio tempus molestie.</p>
                    <div><a class="btn btn--link" href="#">Více informací <span class="icon-arrow_link"></span></a></div>
                </div>
            </div>
            <div class="boxes-section__pro-partnery">
                <h3>PRO PARTNERY</h3>
                <div class="prispevek">
                    <div class="prispevek__cover">
                        <img class="prispevek__img" src="https://via.placeholder.com/240" alt="">
                    </div>
                    <h4>Tittle média na dva řádky lorem</h4>
                    <p class="prispevek__text">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem. Pellentesque pretium lectus id turpis. Donec ipsum massa. Sed vel lectus. Donec odio tempus molestie.</p>
                    <div><a class="btn btn--link" href="#">Více informací <span class="icon-arrow_link"></span></a></div>
                </div>
            </div>
        </div>
    </div>

    <div class="reference">
        <div class="container">
            <h2>Reference</h2>
            <div class="_grid-reference">
                <div class="ref-box">
                    <div class="ref-box__avatar">
                        <img src="https://via.placeholder.com/100" alt="">
                    </div>
                    <div class="ref-box__name --bold">Martina Kir Jambrek</div>
                    <div class="ref-box__school">Ekonomska škola</div>
                    <div class="ref-box__country">Požega, Croatia</div>
                    <p class="ref-box__ref-text">Thank you! I'm truly happy that our student and school were successful this year and I'm looking forward to ourfuture participation in the Contest.</p>
                </div>
                <div class="ref-box">
                    <div class="ref-box__avatar">
                        <img src="https://via.placeholder.com/100" alt="">
                    </div>
                    <div class="ref-box__name --bold">Loreta Vainauskienė</div>
                    <div class="ref-box__school">Kruonis Gymnasium</div>
                    <div class="ref-box__country">Kruonis, Lithuania</div>
                    <p class="ref-box__ref-text">Dear Andrea, Thank your for your help, it was a pleasure keeping in touch with you.</p>
                </div>
                <div class="ref-box">
                    <div class="ref-box__avatar">
                        <img src="https://via.placeholder.com/100" alt="">
                    </div>
                    <div class="ref-box__name --bold">Alessandra Baciga</div>
                    <div class="ref-box__school">Liceo Scientifico Enrico Fermi</div>
                    <div class="ref-box__country">Padova, Italy</div>
                    <p class="ref-box__ref-text">Thank you to all the staff of BIE. Great organization and great fun for the students who enjoyed watching photos of their peers from far - and at the same time near - foreign countries</p>
                </div>
            </div>
            <div class="btn-wrap-center"><a class="btn btn--white">VŠECHNY REFERENCE</a></div>    
        </div>
    </div>

    <div class="partneri-sekce">
        <div class="container">
            <h2>Partneři</h2>
            <div class="partneri">
                <div class="partner">
                    <h3>ORGANIZÁTOR</h3>
                    <div class="partner__logo">
                        <img src="./wp-content/themes/bie/img/czech-us.jpg" alr="Czech-us logo">
                    </div>
                    <h4 class="partner__nazev">Czech-us</h4>
                    <p class="partner__about">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.</p>
                </div>
                <div class="partner">
                    <h3>SPOLUORGANIZÁTOR</h3>
                    <div class="partner__logo" style="margin-bottom: 16px">
                        <img src="./wp-content/themes/bie/img/institute.jpg" alr="Institute for competencies development logo">
                    </div>
                    <h4 class="partner__nazev">Czech-us</h4>
                    <p class="partner__about">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.</p>
                </div>
                <div class="partner">
                    <h3>GENERÁLNÍ PARTNER</h3>
                    <div class="partner__logo">
                        <img src="./wp-content/themes/bie/img/kb.jpg" alr="Komercni banka logo">
                    </div>
                    <h4 class="partner__nazev">Komerční banka</h4>
                    <p class="partner__about">Sed vel lectus. Donec odio tempus molestie, porttitor ut, iaculis quis, sem.</p>
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
    </div>

    <div id="libi-se">
        <h2>Líbí se ti tato soutěž?</h2>
        <div>
            <a class="btn btn--white" href="#">REGISTRUJ SE</a>
            <a class="btn btn--link">STAŇ SE PARTNEREM</a>
        </div>
    </div>

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

