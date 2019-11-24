<?php /* Template Name: Payment */ ?>
<?php get_header(); ?>

<?php
$user_country_code = ip_info("Visitor", "Country Code");

$user_country_code === "BG" ||
    $user_country_code === "UA" ||
    $user_country_code === "RS" ||
    $user_country_code === "BA" ||
    $user_country_code === "ME"
    ? $payment_duty = false : $payment_duty = true;
?>

<script>
    const templateUrl = "<?php echo get_template_directory_uri() ?>";
</script>

<main>
    <div class="page-subheader">
        <h1 class="page-subheader__title"><?php the_title() ?></h1>
    </div>
    <section>
        <?php if ($payment_duty) : ?>
            <div class="registrace">
                <div class="registrace-formular container">
                    <form method="POST" action="<?php echo get_template_directory_uri() ?>/scripts/pb/payment.php" class="invoice-form">
                        <fieldset class="invoice-form__fieldset invoice-form__fieldset--school-info" tabindex="-1">
                            <p class="invoice-form__required-text"><?php _e('All fields are required', 'bie') ?></p>
                            <legend class="invoice-form__legend"><?php _e('School information', 'bie') ?></legend>
                            <div class="invoice-form__input-wrapper registrace-formular__row">
                                <label for="school-id" name="school_id"><?php _e('School ID from registration', 'bie'); ?></label>
                                <span><input type="text" id="school-id" name="school_id" class="animation-input" /></span>
                            </div>
                            <div class="invoice-form__input-wrapper registrace-formular__row">
                                <label for="school-name"><?php _e('School name', 'bie') ?></label>
                                <span><input type="text" id="school-name" name="school_name" class="animation-input" /></span>
                            </div>
                            <div class="invoice-form__input-wrapper registrace-formular__row">
                                <label for="school-vat"><?php _e('School VAT number', 'bie') ?></label>
                                <span><input type="text" id="school-vat" name="school_vat" class="animation-input" /></span>
                            </div>
                            <div class="invoice-form__input-wrapper registrace-formular__row">
                                <label for="school-street"><?php _e('School street', 'bie') ?></label>
                                <span><input type="text" id="school-street" name="school_street" class="animation-input" /></span>
                            </div>
                            <div class="invoice-form__input-wrapper registrace-formular__row">
                                <label for="school-city"><?php _e('School city', 'bie') ?></label>
                                <span><input type="text" id="school-city" name="school_city" class="animation-input" /></span>
                            </div>
                            <div class="invoice-form__input-wrapper registrace-formular__row">
                                <label for="school-code"><?php _e('School postal code', 'bie') ?></label>
                                <span><input type="text" id="school-code" name="school_code" class="animation-input" /></span>
                            </div>
                            <div class="invoice-form__input-wrapper registrace-formular__row">
                                <h2 class="h2--small h2--nobefore" for="country"><?php _e('School country', 'BIE') ?></h2>
                                <select id="country" name="school_country">
                                    <option value="">---</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>
                                    <option value="AS">American Samoa</option>
                                    <option value="AD">Andorra</option>
                                    <option value="AG">Angola</option>
                                    <option value="AI">Anguilla</option>
                                    <option value="AG">Antigua &amp; Barbuda</option>
                                    <option value="AR">Argentina</option>
                                    <option value="AA">Armenia</option>
                                    <option value="AW">Aruba</option>
                                    <option value="AU">Australia</option>
                                    <option value="AT">Austria</option>
                                    <option value="AZ">Azerbaijan</option>
                                    <option value="BS">Bahamas</option>
                                    <option value="BH">Bahrain</option>
                                    <option value="BD">Bangladesh</option>
                                    <option value="BB">Barbados</option>
                                    <option value="BY">Belarus</option>
                                    <option value="BE">Belgium</option>
                                    <option value="BZ">Belize</option>
                                    <option value="BJ">Benin</option>
                                    <option value="BM">Bermuda</option>
                                    <option value="BT">Bhutan</option>
                                    <option value="BO">Bolivia</option>
                                    <option value="BL">Bonaire</option>
                                    <option value="BA">Bosnia &amp; Herzegovina</option>
                                    <option value="BW">Botswana</option>
                                    <option value="BR">Brazil</option>
                                    <option value="BC">British Indian Ocean Ter</option>
                                    <option value="BN">Brunei</option>
                                    <option value="BG">Bulgaria</option>
                                    <option value="BF">Burkina Faso</option>
                                    <option value="BI">Burundi</option>
                                    <option value="KH">Cambodia</option>
                                    <option value="CM">Cameroon</option>
                                    <option value="CA">Canada</option>
                                    <option value="IC">Canary Islands</option>
                                    <option value="CV">Cape Verde</option>
                                    <option value="KY">Cayman Islands</option>
                                    <option value="CF">Central African Republic</option>
                                    <option value="TD">Chad</option>
                                    <option value="CD">Channel Islands</option>
                                    <option value="CL">Chile</option>
                                    <option value="CN">China</option>
                                    <option value="CI">Christmas Island</option>
                                    <option value="CS">Cocos Island</option>
                                    <option value="CO">Colombia</option>
                                    <option value="CC">Comoros</option>
                                    <option value="CG">Congo</option>
                                    <option value="CK">Cook Islands</option>
                                    <option value="CR">Costa Rica</option>
                                    <option value="CT">Cote D'Ivoire</option>
                                    <option value="HR">Croatia</option>
                                    <option value="CU">Cuba</option>
                                    <option value="CB">Curacao</option>
                                    <option value="CY">Cyprus</option>
                                    <option value="CZ">Czech Republic</option>
                                    <option value="DK">Denmark</option>
                                    <option value="DJ">Djibouti</option>
                                    <option value="DM">Dominica</option>
                                    <option value="DO">Dominican Republic</option>
                                    <option value="TM">East Timor</option>
                                    <option value="EC">Ecuador</option>
                                    <option value="EG">Egypt</option>
                                    <option value="SV">El Salvador</option>
                                    <option value="GQ">Equatorial Guinea</option>
                                    <option value="ER">Eritrea</option>
                                    <option value="EE">Estonia</option>
                                    <option value="ET">Ethiopia</option>
                                    <option value="FA">Falkland Islands</option>
                                    <option value="FO">Faroe Islands</option>
                                    <option value="FJ">Fiji</option>
                                    <option value="FI">Finland</option>
                                    <option value="FR">France</option>
                                    <option value="GF">French Guiana</option>
                                    <option value="PF">French Polynesia</option>
                                    <option value="FS">French Southern Ter</option>
                                    <option value="GA">Gabon</option>
                                    <option value="GM">Gambia</option>
                                    <option value="GE">Georgia</option>
                                    <option value="DE">Germany</option>
                                    <option value="GH">Ghana</option>
                                    <option value="GI">Gibraltar</option>
                                    <option value="GB">Great Britain</option>
                                    <option value="GR">Greece</option>
                                    <option value="GL">Greenland</option>
                                    <option value="GD">Grenada</option>
                                    <option value="GP">Guadeloupe</option>
                                    <option value="GU">Guam</option>
                                    <option value="GT">Guatemala</option>
                                    <option value="GN">Guinea</option>
                                    <option value="GY">Guyana</option>
                                    <option value="HT">Haiti</option>
                                    <option value="HW">Hawaii</option>
                                    <option value="HN">Honduras</option>
                                    <option value="HK">Hong Kong</option>
                                    <option value="HU">Hungary</option>
                                    <option value="IS">Iceland</option>
                                    <option value="IN">India</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="IA">Iran</option>
                                    <option value="IQ">Iraq</option>
                                    <option value="IR">Ireland</option>
                                    <option value="IM">Isle of Man</option>
                                    <option value="IL">Israel</option>
                                    <option value="IT">Italy</option>
                                    <option value="JM">Jamaica</option>
                                    <option value="JP">Japan</option>
                                    <option value="JO">Jordan</option>
                                    <option value="KZ">Kazakhstan</option>
                                    <option value="KE">Kenya</option>
                                    <option value="KI">Kiribati</option>
                                    <option value="NK">Korea North</option>
                                    <option value="KS">Korea South</option>
                                    <option value="KW">Kuwait</option>
                                    <option value="KG">Kyrgyzstan</option>
                                    <option value="LA">Laos</option>
                                    <option value="LV">Latvia</option>
                                    <option value="LB">Lebanon</option>
                                    <option value="LS">Lesotho</option>
                                    <option value="LR">Liberia</option>
                                    <option value="LY">Libya</option>
                                    <option value="LI">Liechtenstein</option>
                                    <option value="LT">Lithuania</option>
                                    <option value="LU">Luxembourg</option>
                                    <option value="MO">Macau</option>
                                    <option value="MK">Macedonia</option>
                                    <option value="MG">Madagascar</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="MW">Malawi</option>
                                    <option value="MV">Maldives</option>
                                    <option value="ML">Mali</option>
                                    <option value="MT">Malta</option>
                                    <option value="MH">Marshall Islands</option>
                                    <option value="MQ">Martinique</option>
                                    <option value="MR">Mauritania</option>
                                    <option value="MU">Mauritius</option>
                                    <option value="ME">Mayotte</option>
                                    <option value="MX">Mexico</option>
                                    <option value="MI">Midway Islands</option>
                                    <option value="MD">Moldova</option>
                                    <option value="MC">Monaco</option>
                                    <option value="MN">Mongolia</option>
                                    <option value="MS">Montserrat</option>
                                    <option value="MA">Morocco</option>
                                    <option value="MZ">Mozambique</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="NA">Nambia</option>
                                    <option value="NU">Nauru</option>
                                    <option value="NP">Nepal</option>
                                    <option value="AN">Netherland Antilles</option>
                                    <option value="NL">Netherlands (Holland, Europe)</option>
                                    <option value="NV">Nevis</option>
                                    <option value="NC">New Caledonia</option>
                                    <option value="NZ">New Zealand</option>
                                    <option value="NI">Nicaragua</option>
                                    <option value="NE">Niger</option>
                                    <option value="NG">Nigeria</option>
                                    <option value="NW">Niue</option>
                                    <option value="NF">Norfolk Island</option>
                                    <option value="NO">Norway</option>
                                    <option value="OM">Oman</option>
                                    <option value="PK">Pakistan</option>
                                    <option value="PW">Palau Island</option>
                                    <option value="PS">Palestine</option>
                                    <option value="PA">Panama</option>
                                    <option value="PG">Papua New Guinea</option>
                                    <option value="PY">Paraguay</option>
                                    <option value="PE">Peru</option>
                                    <option value="PH">Philippines</option>
                                    <option value="PO">Pitcairn Island</option>
                                    <option value="PL">Poland</option>
                                    <option value="PT">Portugal</option>
                                    <option value="PR">Puerto Rico</option>
                                    <option value="QA">Qatar</option>
                                    <option value="ME">Republic of Montenegro</option>
                                    <option value="RS">Republic of Serbia</option>
                                    <option value="RE">Reunion</option>
                                    <option value="RO">Romania</option>
                                    <option value="RU">Russia</option>
                                    <option value="RW">Rwanda</option>
                                    <option value="NT">St Barthelemy</option>
                                    <option value="EU">St Eustatius</option>
                                    <option value="HE">St Helena</option>
                                    <option value="KN">St Kitts-Nevis</option>
                                    <option value="LC">St Lucia</option>
                                    <option value="MB">St Maarten</option>
                                    <option value="PM">St Pierre &amp; Miquelon</option>
                                    <option value="VC">St Vincent &amp; Grenadines</option>
                                    <option value="SP">Saipan</option>
                                    <option value="SO">Samoa</option>
                                    <option value="AS">Samoa American</option>
                                    <option value="SM">San Marino</option>
                                    <option value="ST">Sao Tome &amp; Principe</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="SN">Senegal</option>
                                    <option value="RS">Serbia</option>
                                    <option value="SC">Seychelles</option>
                                    <option value="SL">Sierra Leone</option>
                                    <option value="SG">Singapore</option>
                                    <option value="SK">Slovakia</option>
                                    <option value="SI">Slovenia</option>
                                    <option value="SB">Solomon Islands</option>
                                    <option value="OI">Somalia</option>
                                    <option value="ZA">South Africa</option>
                                    <option value="ES">Spain</option>
                                    <option value="LK">Sri Lanka</option>
                                    <option value="SD">Sudan</option>
                                    <option value="SR">Suriname</option>
                                    <option value="SZ">Swaziland</option>
                                    <option value="SE">Sweden</option>
                                    <option value="CH">Switzerland</option>
                                    <option value="SY">Syria</option>
                                    <option value="TA">Tahiti</option>
                                    <option value="TW">Taiwan</option>
                                    <option value="TJ">Tajikistan</option>
                                    <option value="TZ">Tanzania</option>
                                    <option value="TH">Thailand</option>
                                    <option value="TG">Togo</option>
                                    <option value="TK">Tokelau</option>
                                    <option value="TO">Tonga</option>
                                    <option value="TT">Trinidad &amp; Tobago</option>
                                    <option value="TN">Tunisia</option>
                                    <option value="TR">Turkey</option>
                                    <option value="TU">Turkmenistan</option>
                                    <option value="TC">Turks &amp; Caicos Is</option>
                                    <option value="TV">Tuvalu</option>
                                    <option value="UG">Uganda</option>
                                    <option value="UA">Ukraine</option>
                                    <option value="AE">United Arab Emirates</option>
                                    <option value="GB">United Kingdom</option>
                                    <option value="US">United States of America</option>
                                    <option value="UY">Uruguay</option>
                                    <option value="UZ">Uzbekistan</option>
                                    <option value="VU">Vanuatu</option>
                                    <option value="VS">Vatican City State</option>
                                    <option value="VE">Venezuela</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="VB">Virgin Islands (Brit)</option>
                                    <option value="VA">Virgin Islands (USA)</option>
                                    <option value="WK">Wake Island</option>
                                    <option value="WF">Wallis &amp; Futana Is</option>
                                    <option value="YE">Yemen</option>
                                    <option value="ZR">Zaire</option>
                                    <option value="ZM">Zambia</option>
                                    <option value="ZW">Zimbabwe</option>
                                </select>
                            </div>
                            <div class="btn-wrap-center">
                                <p id="ctx--not-filled"></p>
                            </div>
                            <div class="btn-wrap-center">
                                <button type="button" class="btn btn--red" id="save-data" aria-pressed="true"><?php _e('Continue', 'bie') ?></button>
                            </div>
                        </fieldset>
                        <fieldset class="invoice-form__fieldset invoice-form__fieldset--payment" style="display: none" tabindex="-1">
                            <legend class="invoice-form__legend"><?php _e('Payment', 'bie') ?></legend>
                            <div class="flex-75" id="go-back">
                                <div class="icon-rotate">
                                    <span class="icon-arrow_link"></span>
                                </div>
                                <button type="button" class="btn btn--link btn--icon"><?php _e('Back', 'bie') ?></button>
                            </div>
                            <p id="amount-hook"></p>
                            <div class="invoice-form__pay-now invoice-form__input-wrapper registrace-formular__row" style="display: none">
                                <h2 class="h2--nobefore"><?php _e('Pay now?', 'bie') ?></h2>
                                <div class="invoice-form__radio-wrapper" role="radiogroup">
                                    <div class="invoice-form__radio-item" role="radio">
                                        <label for="pay-now-yes" class="radio-wrapper" tabindex="0" role="radio"><?php _e('yes', 'bie') ?>
                                             <input type="radio" tabindex="-1" name="pay-now" value="yes" class="radio-button--hidden" id="pay-now-yes">
                                            <span class="radio-button"></span>
                                        </label>
                                    </div>
                                    <div class="invoice-form__radio-item" role="radio">
                                        <label for="pay-now-no" class="radio-wrapper" tabindex="0" role="radio"><?php _e('no', 'bie') ?>
                                             <input type="radio" tabindex="-1" name="pay-now" value="no" class="radio-button--hidden" id="pay-now-no">
                                            <span class="radio-button"></span>
                                        </label>
                                    </div>
                                </div>
                                <div class="invoice-form__payment-method invoice-form__radio-wrapper" style="display: none">
                                    <h2 class="h2--nobefore mt-3"><?php _e('Payment method', 'bie') ?></h2>
                                    <div class="invoice-form__radio-item">
                                        <label for="pay-method__credit-card" class="radio-wrapper" tabindex="0"><?php _e('Credit card', 'bie') ?>
                                             <input type="radio" tabindex="-1" name="pay-method" class="radio-button--hidden" value="credit-card" id="pay-method__credit-card">
                                            <span class="radio-button"></span>
                                        </label>
                                    </div>
                                    <div class="invoice-form__radio-item">
                                        <label for="pay-method__bank-transfer" class="radio-wrapper"><?php _e('Bank transfer', 'bie') ?>
                                             <input type="radio" tabindex="-1" name="pay-method" value="bank-transfer" class="radio-button--hidden" id="pay-method__bank-transfer">
                                            <span class="radio-button"></span>
                                        </label>
                                    </div>
                                    <div class="invoice-form__bank invoice-form__input-wrapper registrace-formular__row" style="display: none">
                                        <h2 class="h2--nobefore mt-3"><?php _e('Select your bank', 'bie') ?></h2>
                                        <div class="invoice-form__input-wrapper registrace-formular__row">
                                            <select name="method" class="bank-select">
                                                <option value="">---</option>
                                                <option class="sk" value="BANK_SK_PB">Poštovná Banka</option>
                                                <option class="sk" value="BANK_SK_SP">Slovenská spořiteľňa SK</option>
                                                <option class="sk" value="BANK_SK_TB">Tatra Banka</option>
                                                <option class="sk" value="BANK_SK_VUB">VÚB Banka</option>
                                                <option class="cz" value="BANK_CZ_CS_P">Česká spořitelna</option>
                                                <option class="cz" value="BANK_CZ_KB">Komerční Banka</option>
                                                <option class="cz" value="BANK_CZ_MB_P">mBank</option>
                                                <option class="cz" value="BANK_CZ_RB">Raiffeisen Bank</option>
                                                <option class="cz" value="BANK_CZ_CSOB">ČSOB</option>
                                                <option class="cz" value="BANK_CZ_EB">Equa Bank</option>
                                                <option class="cz" value="BANK_CZ_GE_2">MONETA Money Bank</option>
                                                <option class="cz" value="BANK_CZ_PS">era</option>
                                                <option class="cz" value="BANK_CZ_VB_2">Sberbank CZ</option>
                                                <option class="cz" value="BANK_CZ_UC">UniCredit Bank</option>
                                                <option class="cz" value="BANK_CZ_FB_P">Fio Banka</option>
                                            </select>
                                        </div>
                                        <input type="hidden" name="payment_currency" id="payment-currency" value="" />
                                        <input type="hidden" name="invoice_number" id="invoice_number" value="" />
                                    </div>
                                </div>
                                <div class="invoice-form__submit" style="display: none;">
                                    <div class="btn-wrap-center">
                                        <button type="submit" class="btn btn--red" id="proceed-payment" name="pay_submit"><?php _e('Proceed payment', 'bie') ?></button>
                                    </div>
                                </div>
                            </div>
                            <div class="invoice-form__generate-invoice" style="display: none;">
                                <div class="btn-wrap-center">
                                    <button type="button" class="btn btn--red" id="generate-invoice" name="generate_invoice"><?php _e('Invoice', 'bie') ?></button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        <?php else : ?>
            <div class="container py-5">
                <h2 class="text-center h2--no-before"><?php _e('Your country does not have to pay license fee', 'bie') ?>
                </h2>
            </div>
        <?php endif; ?>
    </section>
</main>
<?php get_template_part('modules/module-reference') ?>
<?php get_template_part('modules/module-libi-se') ?>
<?php get_template_part('modules/module-kontakt') ?>
<?php get_footer(); ?>