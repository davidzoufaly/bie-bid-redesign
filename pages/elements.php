<?php
/* Template Name: elements */
get_header();


?>
<div class="novinka-aktuality">
        <div class="container">
            <h3>AKTUALITY</h3>
            <div class="grid-aktuality">
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
    </div>
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

    <div class="kontaktujte-nas" style="margin-top: 30px;">
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

    <div class="registrace" style="margin-top: 30px">
        <div class="container">
            <h2>Registrace</h2>
            <form id="registrace" class="registrace-formular" action="" method="post">
                <fieldset>
                    <legend>School details</legend>
                    <p>Please, provide the details about your school needed for statistical and practical purposes such as delivery of the contest certificate.</p>
                    <div class="registrace-formular__row">
                        <input class="" type="text" name="school-name" placeholder="" required="">
                        <label class="label--mod" >School name*</label>
                    </div>

                    <div class="registrace-formular__row">
                        <input class="" type="text" name="street" placeholder="" required="">
                        <label class="label--mod">Street*</label>
                    </div>

                    <div class="registrace-formular__row">
                        <input class="" type="text" name="city" placeholder="" required="">
                        <label class="label--mod">City*</label>
                    </div>

                    <div class="registrace-formular__row">
                        <input class="" type="number" name="postalcode" placeholder="" required="">
                        <label class="label--mod">Postal Code*</label>
                    </div>          
                    
                    <div class="registrace-formular__row">
                        <h4>Coutry*</h4>
                        <p>No schools/students whose official language is English shall participate.</p>
                        <select name="country" form="registrace" required>
                            <option value="">Select coutry</option><option value="Afghanistan">Afghanistan</option><option value="Akrotiri">Akrotiri</option><option value="Albania">Albania</option><option value="Algeria">Algeria</option><option value="American Samoa">American Samoa</option><option value="Andorra">Andorra</option><option value="Angola">Angola</option><option value="Anguilla">Anguilla</option><option value="Antarctica">Antarctica</option><option value="Antigua and Barbuda">Antigua and Barbuda</option><option value="Argentina">Argentina</option><option value="Armenia">Armenia</option><option value="Aruba">Aruba</option><option value="Ashmore and Cartier Islands">Ashmore and Cartier Islands</option><option value="Australia">Australia</option><option value="Austria">Austria</option><option value="Azerbaijan">Azerbaijan</option><option value="Bahamas, The">Bahamas, The</option><option value="Bahrain">Bahrain</option><option value="Bangladesh">Bangladesh</option><option value="Barbados">Barbados</option><option value="Bassas da India">Bassas da India</option><option value="Belarus">Belarus</option><option value="Belgium">Belgium</option><option value="Belize">Belize</option><option value="Benin">Benin</option><option value="Bermuda">Bermuda</option><option value="Bhutan">Bhutan</option><option value="Bolivia">Bolivia</option><option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option><option value="Botswana">Botswana</option><option value="Bouvet Island">Bouvet Island</option><option value="Brazil">Brazil</option><option value="British Indian Ocean Territory">British Indian Ocean Territory</option><option value="British Virgin Islands">British Virgin Islands</option><option value="Brunei">Brunei</option><option value="Bulgaria">Bulgaria</option><option value="Burkina Faso">Burkina Faso</option><option value="Burma">Burma</option><option value="Burundi">Burundi</option><option value="Cambodia">Cambodia</option><option value="Cameroon">Cameroon</option><option value="Canada">Canada</option><option value="Cape Verde">Cape Verde</option><option value="Cayman Islands">Cayman Islands</option><option value="Central African Republic">Central African Republic</option><option value="Chad">Chad</option><option value="Chile">Chile</option><option value="China">China</option><option value="Christmas Island">Christmas Island</option><option value="Clipperton Island">Clipperton Island</option><option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option><option value="Colombia">Colombia</option><option value="Comoros">Comoros</option><option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option><option value="Congo, Republic of the">Congo, Republic of the</option><option value="Cook Islands">Cook Islands</option><option value="Coral Sea Islands">Coral Sea Islands</option><option value="Costa Rica">Costa Rica</option><option value="Cote d&#039;Ivoire">Cote d&#039;Ivoire</option><option value="Croatia">Croatia</option><option value="Cuba">Cuba</option><option value="Cyprus">Cyprus</option><option value="Czech Republic">Czech Republic</option><option value="Denmark">Denmark</option><option value="Dhekelia">Dhekelia</option><option value="Djibouti">Djibouti</option><option value="Dominica">Dominica</option><option value="Dominican Republic">Dominican Republic</option><option value="Ecuador">Ecuador</option><option value="Egypt">Egypt</option><option value="El Salvador">El Salvador</option><option value="Equatorial Guinea">Equatorial Guinea</option><option value="Eritrea">Eritrea</option><option value="Estonia">Estonia</option><option value="Ethiopia">Ethiopia</option><option value="Europa Island">Europa Island</option><option value="Falkland Islands (Islas Malvinas)">Falkland Islands (Islas Malvinas)</option><option value="Faroe Islands">Faroe Islands</option><option value="Fiji">Fiji</option><option value="Finland">Finland</option><option value="France">France</option><option value="French Guiana">French Guiana</option><option value="French Polynesia">French Polynesia</option><option value="French Southern and Antarctic Lands">French Southern and Antarctic Lands</option><option value="Gabon">Gabon</option><option value="Gambia, The">Gambia, The</option><option value="Gaza Strip">Gaza Strip</option><option value="Georgia">Georgia</option><option value="Germany">Germany</option><option value="Ghana">Ghana</option><option value="Gibraltar">Gibraltar</option><option value="Glorioso Islands">Glorioso Islands</option><option value="Greece">Greece</option><option value="Greenland">Greenland</option><option value="Grenada">Grenada</option><option value="Guadeloupe">Guadeloupe</option><option value="Guam">Guam</option><option value="Guatemala">Guatemala</option><option value="Guernsey">Guernsey</option><option value="Guinea">Guinea</option><option value="Guinea-Bissau">Guinea-Bissau</option><option value="Guyana">Guyana</option><option value="Haiti">Haiti</option><option value="Heard Island and McDonald Islands">Heard Island and McDonald Islands</option><option value="Holy See (Vatican City)">Holy See (Vatican City)</option><option value="Honduras">Honduras</option><option value="Hong Kong">Hong Kong</option><option value="Hungary">Hungary</option><option value="Iceland">Iceland</option><option value="India">India</option><option value="Indonesia">Indonesia</option><option value="Iran">Iran</option><option value="Iraq">Iraq</option><option value="Ireland">Ireland</option><option value="Isle of Man">Isle of Man</option><option value="Israel">Israel</option><option value="Italy">Italy</option><option value="Jamaica">Jamaica</option><option value="Jan Mayen">Jan Mayen</option><option value="Japan">Japan</option><option value="Jersey">Jersey</option><option value="Jordan">Jordan</option><option value="Juan de Nova Island">Juan de Nova Island</option><option value="Kazakhstan">Kazakhstan</option><option value="Kenya">Kenya</option><option value="Kiribati">Kiribati</option><option value="Korea, North">Korea, North</option><option value="Korea, South">Korea, South</option><option value="Kuwait">Kuwait</option><option value="Kyrgyzstan">Kyrgyzstan</option><option value="Laos">Laos</option><option value="Latvia">Latvia</option><option value="Lebanon">Lebanon</option><option value="Lesotho">Lesotho</option><option value="Liberia">Liberia</option><option value="Libya">Libya</option><option value="Liechtenstein">Liechtenstein</option><option value="Lithuania">Lithuania</option><option value="Luxembourg">Luxembourg</option><option value="Macau">Macau</option><option value="Macedonia">Macedonia</option><option value="Madagascar">Madagascar</option><option value="Malawi">Malawi</option><option value="Malaysia">Malaysia</option><option value="Maldives">Maldives</option><option value="Mali">Mali</option><option value="Malta">Malta</option><option value="Marshall Islands">Marshall Islands</option><option value="Martinique">Martinique</option><option value="Mauritania">Mauritania</option><option value="Mauritius">Mauritius</option><option value="Mayotte">Mayotte</option><option value="Mexico">Mexico</option><option value="Micronesia, Federated States of">Micronesia, Federated States of</option><option value="Moldova">Moldova</option><option value="Monaco">Monaco</option><option value="Mongolia">Mongolia</option><option value="Montenegro">Montenegro</option><option value="Montserrat">Montserrat</option><option value="Morocco">Morocco</option><option value="Mozambique">Mozambique</option><option value="Namibia">Namibia</option><option value="Nauru">Nauru</option><option value="Navassa Island">Navassa Island</option><option value="Nepal">Nepal</option><option value="Netherlands">Netherlands</option><option value="Netherlands Antilles">Netherlands Antilles</option><option value="New Caledonia">New Caledonia</option><option value="New Zealand">New Zealand</option><option value="Nicaragua">Nicaragua</option><option value="Niger">Niger</option><option value="Nigeria">Nigeria</option><option value="Niue">Niue</option><option value="Norfolk Island">Norfolk Island</option><option value="Northern Mariana Islands">Northern Mariana Islands</option><option value="Norway">Norway</option><option value="Oman">Oman</option><option value="Pakistan">Pakistan</option><option value="Palau">Palau</option><option value="Panama">Panama</option><option value="Papua New Guinea">Papua New Guinea</option><option value="Paracel Islands">Paracel Islands</option><option value="Paraguay">Paraguay</option><option value="Peru">Peru</option><option value="Philippines">Philippines</option><option value="Pitcairn Islands">Pitcairn Islands</option><option value="Poland">Poland</option><option value="Portugal">Portugal</option><option value="Puerto Rico">Puerto Rico</option><option value="Qatar">Qatar</option><option value="Reunion">Reunion</option><option value="Romania">Romania</option><option value="Russia">Russia</option><option value="Rwanda">Rwanda</option><option value="Saint Helena">Saint Helena</option><option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option><option value="Saint Lucia">Saint Lucia</option><option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option><option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option><option value="Samoa">Samoa</option><option value="San Marino">San Marino</option><option value="Sao Tome and Principe">Sao Tome and Principe</option><option value="Saudi Arabia">Saudi Arabia</option><option value="Senegal">Senegal</option><option value="Serbia">Serbia</option><option value="Seychelles">Seychelles</option><option value="Sierra Leone">Sierra Leone</option><option value="Singapore">Singapore</option><option value="Slovakia">Slovakia</option><option value="Slovenia">Slovenia</option><option value="Solomon Islands">Solomon Islands</option><option value="Somalia">Somalia</option><option value="South Africa">South Africa</option><option value="South Georgia and the South Sandwich Islands">South Georgia and the South Sandwich Islands</option><option value="Spain">Spain</option><option value="Spratly Islands">Spratly Islands</option><option value="Sri Lanka">Sri Lanka</option><option value="Sudan">Sudan</option><option value="Suriname">Suriname</option><option value="Svalbard">Svalbard</option><option value="Swaziland">Swaziland</option><option value="Sweden">Sweden</option><option value="Switzerland">Switzerland</option><option value="Syria">Syria</option><option value="Taiwan">Taiwan</option><option value="Tajikistan">Tajikistan</option><option value="Tanzania">Tanzania</option><option value="Thailand">Thailand</option><option value="Timor-Leste">Timor-Leste</option><option value="Togo">Togo</option><option value="Tokelau">Tokelau</option><option value="Tonga">Tonga</option><option value="Trinidad and Tobago">Trinidad and Tobago</option><option value="Tromelin Island">Tromelin Island</option><option value="Tunisia">Tunisia</option><option value="Turkey">Turkey</option><option value="Turkmenistan">Turkmenistan</option><option value="Turks and Caicos Islands">Turks and Caicos Islands</option><option value="Tuvalu">Tuvalu</option><option value="Uganda">Uganda</option><option value="Ukraine">Ukraine</option><option value="United Arab Emirates">United Arab Emirates</option><option value="United Kingdom">United Kingdom</option><option value="United States">United States</option><option value="Uruguay">Uruguay</option><option value="Uzbekistan">Uzbekistan</option><option value="Vanuatu">Vanuatu</option><option value="Venezuela">Venezuela</option><option value="Vietnam">Vietnam</option><option value="Virgin Islands">Virgin Islands</option><option value="Wake Island">Wake Island</option><option value="Wallis and Futuna">Wallis and Futuna</option><option value="West Bank">West Bank</option><option value="Western Sahara">Western Sahara</option><option value="Yemen">Yemen</option><option value="Zambia">Zambia</option><option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>
                </fieldset>

                <fieldset>
                    <legend>Student details</legend>
                    <div class="registrace-formular__row">
                        <h4>How many students will participate approximately</h4>
                        <p>Provided number of students is not mandatory and can be changed anytime without any notice.</p>
                        <select name="students" form="registrace" required>
                            <option value="">Select option</option><option value="10-20">10-20</option><option value="21-30">21-30</option><option value="31-40">31-40</option><option value="41-50">41-50</option><option value="51-60">51-60</option><option value="61more">More than 61</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Details about teacher</legend>
                    <p>The contact person should be either you or your colleague. All important information regarding the content will be sent to the provided email adress.</p>
                    <div class="registrace-formular__row">
                        <input class="" type="text" name="firstName" placeholder="" required="">
                        <label class="label--mod">First name*</label>
                    </div>
                    <div class="registrace-formular__row">
                        <input class="" type="text" name="secondName" placeholder="" required="">
                        <label class="label--mod">Second name*</label>
                    </div>
                    <div class="registrace-formular__row">
                        <input class="" type="email" name="email" placeholder="" required="">
                        <label class="label--mod">Email Address*</label>
                    </div>
                    <div class="registrace-formular__row">
                        <input class="" type="tel" name="tel" placeholder="" required="">
                        <label class="label--mod">Telephone Number*</label>
                        <p class="input-info">Will be used in emergency only. E.g +420111222111</p>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Additional section for Czech and Slovak participants</legend>
                    <p>Dear Czech and Slovak school teachers, please, provide us with information as asked below to be used for Czech and Slovak statistics</p>
                    <div class="registrace-formular__row">
                        <h4>Region of the Czech Republic</h4>
                        <select name="regionCZ" form="registrace">
                            <option value="">---</option><option value="praha">Hlavní město Praha</option><option value="jihocesky">Jihočeský kraj</option><option value="jihomoravsky">Jihomoravký kraj</option><option value="karlovarsky">Karlovarský kraj</option><option value="vysocina">Kraj Vysočina</option><option value="kralovehradecky">Královéhradecký kraj</option><option value="liberecky">Liberecký kraj</option><option value="moravskoslezsky">Moravskoslezský kraj</option><option value="olomoucky">Olomoucký kraj</option><option value="pardubicky">Pardubický kraj</option><option value="plzensky">Plzeňský kraj</option><option value="stredocesky">Středočeský kraj</option><option value="ustecky">Ústecký kraj</option><option value="zlinsky">Zlínský kraj</option>
                        </select>
                    </div>
                    <div class="registrace-formular__row">
                        <h4>Region of the Slovak Republic</h4>
                        <select name="regionSK" form="registrace">
                            <option value="">---</option><option value="Bratislavský">Bratislavský</option><option value="Banskobystrický">Banskobystrický</option><option value="Košický">Košický</option><option value="Nitranský">Nitranský</option><option value="Prešovský">Prešovský</option><option value="Trenčínský">Trenčínský</option><option value="Trnavský">Trnavský</option><option value="Žilinský">Žilinský</option>
                        </select>
                    </div>
                    <div class="registrace-formular__row">
                        <h4>What type of school you are?</h4>
                        <p>You can choose one or more options at once</p>
                            <label class="checkbx-text" for="schooltype1">Gymmásium</label>
                            <input type="checkbox" id="schooltype1" name="schooltype1" value="gymnasium">
                        
                            <label class="checkbx-text" for="schooltype2">SOU</label>
                            <input type="checkbox" id="schooltype2" name="schooltype2" value="sou">
                        
                            <label class="checkbx-text" for="schooltype3">SOŠ</label>
                            <input type="checkbox" id="schooltype3" name="schooltype3" value="sos">
                        
                            <label class="checkbx-text" for="schooltype4">Ostatní</label>
                            <input type="checkbox" id="schooltype4" name="schooltype4" value="ostatni">
                        
                    </div>
                </fieldset>
            </form>
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
