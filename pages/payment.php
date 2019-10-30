<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="<?php dirname(__FILE__)?>./scripts/pb/payment.php" class="invoice-form">
        <fieldset class="invoice-form__fieldset invoice-form__fieldset--school-info">
            <i>All field are required</i>
            <legend class="invoice-form__legend">School information</legend>
            <div class="invoice-form__input-wrapper">
                <label for="school-id" name="school_id">School ID</label>
                <input type="text" id="school-id" name="school_id" />
            </div>
            <div class="invoice-form__input-wrapper">
                <label for="school-name">School Name</label>
                <input type="text" id="school-name" name="school_name" />
            </div>
            <div class="invoice-form__input-wrapper">
                <label for="school-street">Street</label>
                <input type="text" id="school-street" name="school_street" />
            </div>
            <div class="invoice-form__input-wrapper">
                <label for="school-city">City</label>
                <input type="text" id="school-city" name="school_city" />
            </div>
            <div class="invoice-form__input-wrapper">
                <label for="school-code">Postal Code</label>
                <input type="text" id="school-code" name="school_code" />
            </div>
            <div class="invoice-form__input-wrapper">
                <label for="country">Country</label>
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
            <button type="button" onclick="saveData()">Next</button>
        </fieldset>
        <fieldset class="payment-fieldset" style="display: none">
            <legend class="invoice-form__legend">Payment</legend>
            <p class="invoice-form__amount" id="amount-hook"></p>
            <div class="pay-now-wrapper" style="display: none">
                <h2>Pay now?</h2>
                <label for="pay-now-yes">yes</label>
                <input type="radio" name="pay-now" value="yes" id="pay-now-yes">
                <label for="pay-now-no">no</label>
                <input type="radio" name="pay-now" value="no" id="pay-now-no">
                <div class="bank-wrapper" style="display: none">
                    <h2>Select your bank</h2>
                    <select name="method" class="bank-select" required>
                        <option value="">---</option>
                        <option class="sk" value="BANK_SK_PB">Poštovná Banka</option>
                        <option class="sk" value="BANK_SK_SP">Slovenská spořiteľňa SK</option>
                        <option class="sk" value="BANK_SK_TB">Tatra Banka</option>
                        <option class="sk" value="BANK_SK_VUB">VÚB Banka</option>
                        <option class="sk" value="BANK_SK_OTHER">Other</option>
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
                        <option class="cz" value="BANK_CZ_OTHER">Other</option>
                    </select>
                    <input type="hidden" name="payment_currency" id="payment-currency" value=""/>
                    <input type="hidden" name="invoice_number" id="invoice_number" value=""/>
                    <button type="submit" name="pay_submit">Pay now</button>
                </div>
            </div>
            <div class="generate-invoice-wrapper" style="display: none;">
                <button type="button" onclick="generateInvoice()" name="generate invoice">Generate Invoice</button>
            </div>
        <div class="generate-invoice-thank-you" style="display: none;">
            <h2>Your invoice has been generated! Thank you.</h2>
            <a href="/">Go to homepage</a>
        </div>
        </fieldset>
    </form>

    <script>
    //TODO: REFACTOR NA ARRAY / OBJECT A LOOPING -> filter, map

    //TODO JACOB: ODSTRANIT ALERT, POKUD NEJSOU VŠECHNY TLAČÍTKA VYPLNĚNÁ A DÁT INLINE HLÁŠKU
    //TODO JACOB: SEPAROVAT .JS
    //TODO JACOB: NÁZVY DIVU PODLE BEM NOTACE
    //TODO JACOB: NAHODIT DO STYLŮ NA BIE VIZ. AKTUÁLNÍ VERZE PAYMENT.PHP ŠABLONY
    //TODO JACOB: OTESTOVAT

    // global invoice var filled by saved data repsonse
    let invoice_number;

    // form selectors
    const schoolId = document.querySelector('#school-id');
    const schoolName = document.querySelector('#school-name');
    const schoolStreet = document.querySelector('#school-street');
    const schoolCity = document.querySelector('#school-city');
    const schoolCode = document.querySelector('#school-code');
    const schoolCountry = document.querySelector('#country');
    const paymentCurrency = document.querySelector('#payment-currency');

    async function saveData() {
       if (
        schoolId.value &&
        schoolName.value &&
        schoolStreet.value &&
        schoolCity.value &&
        schoolCode.value &&
        schoolCountry.value &&
        paymentCurrency.value
        ) {

            document.querySelector('.payment-fieldset').style.display = "block";
            document.querySelector('.invoice-form__fieldset--school-info').style.display = "none";

            const formData = {
                school_id: schoolId.value,
                school_name: schoolName.value,
                school_street: schoolStreet.value,
                school_city: schoolCity.value,
                school_code: schoolCode.value,
                school_country_code: schoolCountry.value,
                school_country: schoolCountry.options[schoolCountry.selectedIndex].text,
                payment_currency: paymentCurrency.value
            }

            const res = await fetch('./save.php', {
                method: "POST",
                body: JSON.stringify(formData),
                headers: {
                    'Content-Type': 'application/json'
                }
            })
            const data = await res.json();
            invoice_number = await data.invoiceNumber;
            document.querySelector('#invoice_number').value = await data.invoiceNumber;
        } else {
            alert("Fill all inputs!")
        }
    }

    function generateInvoice() {
        //redirect to invoice script
        window.open(`./invoice.php?invoice_number=${invoice_number}`, '_blank');
        // hide button and amount and pay now
        document.querySelector('.generate-invoice-wrapper').style.display = "none";
        document.querySelector('#amount-hook').style.display = "none";
        document.querySelector('.pay-now-wrapper').style.display = "none";
        // show thank you message
        document.querySelector('.generate-invoice-thank-you').style.display = "block";    
    }

    // PAY NOW OR LATER -> FORM
    const country = document.querySelector('#country');
    const radioYes = document.querySelector("#pay-now-yes");
    const radioNo = document.querySelector("#pay-now-no");

    country.addEventListener('change', (event) => {
        if (country.value === 'CZ' || country.value === 'SK') {
            document.querySelector('.generate-invoice-wrapper').style.display = "none";
            document.querySelector('.pay-now-wrapper').style.display = "block";
            document.querySelector('#amount-hook').textContent =
                `Total value: ${country.value === "CZ" ? "900CZK" : "35EUR"}`
            document.querySelector('#payment-currency').value = 
                country.value === "CZ" 
                    ? "CZK" 
                    : "EUR";
        } else {
            document.querySelector('#amount-hook').textContent = `Total value: 35EUR`;
            document.querySelector('.generate-invoice-wrapper').style.display = "block";
            document.querySelector('#payment-currency').value = "EUR";
        }
    })
    
    radioYes ? radioYes.addEventListener('change', (event) => {
        if (event.target.checked) {
            document.querySelector('.generate-invoice-wrapper').style.display = "none";
            document.querySelector('.bank-wrapper').style.display = "block";
            if(schoolCountry.value === "CZ") {
                Array.from(document.querySelectorAll('.sk')).forEach(el => el.style.display = "none"
                )
            } else {
                Array.from(document.querySelectorAll('.cz')).forEach(el => 
                el.style.display = "none")
            }
        }
    }) : null

    radioNo ? radioNo.addEventListener('change', (event) => {
        if (event.target.checked) {
            document.querySelector('.generate-invoice-wrapper').style.display = "block";
            document.querySelector('.bank-wrapper').style.display = "none";
        } 
    }) : null
    </script>
</body>

</html>