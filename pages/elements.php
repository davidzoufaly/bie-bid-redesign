<?php
/* Template Name: elements */
get_header();


?>
    <div class="container" style="margin-top: 30px; text-align:center;">    
        <h1>Bw Mitga regular H1</h1>
        <h2>Bw Mitga regular H1</h2>
        <h3>Bw Mitga regular H1</h3>
        <h4>Bw Mitga regular H1</h4>
    </div>  
    <div class="container" style="margin-top: 30px">
        <p>Bw Mitga Regular Ut enim ad minima veniam, quis Bw Mitga Bold exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure </p>
    </div>
    <div class="container" style="margin-top: 30px">
        <a href="#" class="btn btn--red">Registrace</a>
        <a href="#" class="btn btn--white">Registrace</a>
        <a href="#" class="btn btn--blue">Registrace</a>
        <a href="#" class="btn btn--link">Staň se partnerem</a>
    </div>
    <div class="container" style="margin-top: 30px">
        <table>
            <caption>Tabulka</caption>
            <tbody>
                <tr>
                    <th>Řádek</th>
                    <th>Sloupec</th>
                </tr>
                <tr>
                    <td>Řádek 1</td>
                    <td>Sloupec 1</td>
                </tr>
                <tr>
                    <td>Řádek 2</td>
                    <td>Sloupec 2</td>
                </tr>
                <tr>
                    <td>Řádek 3</td>
                    <td>Sloupec 3</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="container" style="margin-top: 30px">    
        <form class="_formular-kontaktujte-nas" action="" method="post">
            <input class="_jmeno" type="text" name="jmeno" placeholder="Jméno*">
            <input class="_email" type="email" name="email" placeholder="Email*">
            <input class="_text" type="text" name="text" placeholder="Text*">
            <input class="btn btn--blue" type="submit" name="odeslat" value="ODESLAT">
        </form>
    </div>

    <div class="container" style="margin-top: 30px">
        <ul>
            <li>English</li>
            <li>Best of</li>
            <li>Lorem lorem</li>
        </ul>
        <ol>
            <li>Bw mitga</li>
            <li>Regular</li>
            <li>Sharp</li>
        </ol>
    </div>


    <!-- novinka detail subheader -->
    <div class="novinka-subheader" style="margin-top: 30px">
        <div class="submenu">
            <p>
                <a href="#" class="submenu__item">Homepage</a>
                <a href="#" class="submenu__item">Novinky</a>
                <span class="submenu__item">Novinka o soutěži</span>
            </p>
        </div>
        <h1 class="novinka-subheader__title">Novinka o soutěži</h1>
        <div class="novinka-subheader__info">
            <span class="novinka-subheader__info__date">22.3.2019 </span>&nbsp;&nbsp;|&nbsp;&nbsp;<span id="js-dny-soutez">33</span> dnů do soutěže
        </div>
    </div>

    <div class="page-subheader" style="margin-top: 30px">
        <h1 class="page-subheader__title">Partneři</h1>
    </div>

    <div class="container" style="margin-top: 30px; display: flex; justify-content:center;">
        <div class="osoba">
            <div class="osoba__avatar">
                <div class="osoba__avatar--bg"></div>
                <img class="osoba__avatar-img" src="https://via.placeholder.com/105" alt="Fotografie osoby">
            </div>
            <p class="osoba__name">Andrea UltraBest</p>
            <p class="osoba__position">Account manager</p>
            <p><a href="tel:+420 211 221 501" class="osoba__tel">+420 211 221 501</a></p>
            <p><a href="mailto:info@bestinenglish.org" class="osoba__email">info@bestinenglish.org</a></p>
        </div>
    </div>

    <div class="container" style="margin-top: 30px;">
        <div class="pagination">
            <a href="#" class="pagination__box pagination__box--active">1</a>
            <a href="#" class="pagination__box">2</a>
            <a href="#" class="pagination__box">3</a>
        </div>
    </div>
    


</html>






<?php 
get_footer();
?>
