<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Astrology</title>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&family=STIX+Two+Text:wght@500;600&family=Domine:wght@400;500;700&family=Montserrat:wght@500&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="../assets/css/checkout.css">
    </head>
    <body>
        <main class="checkout">
            <section class="steps">
                <div class="container">
                    <div class="checkout__logo">
                        <a class="checkout__logo__link">
                            <img src="../assets/img/checkout/logo.svg" alt="">
                        </a>
                    </div>
                    <div class="steps__wrapper">
                        <div class="checkout__list">
                            <div class="checkout__list__item checkout__list__item_active">
                                <p class="checkout__list__item__top">Confirm Details</p>
                                <p class="checkout__list__item__bottom"><span>1</span></p>
                            </div>
                            <div class="checkout__list__item">
                                <p class="checkout__list__item__top">Questionnaire</p>
                                <p class="checkout__list__item__bottom"><span>2</span></p>
                            </div>
                            <div class="checkout__list__item">
                                <p class="checkout__list__item__top"> Select Guide</p>
                                <p class="checkout__list__item__bottom"><span>3</span></p>
                            </div>
                            <div class="checkout__list__item">
                                <p class="checkout__list__item__top">Sumbit Request</p>
                                <p class="checkout__list__item__bottom"><span>4</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="step1">
                <div class="container">
                    <div class="checkout__wrapper">
                        <form class="checkout__content" method="POST" action="/checkout2">
                            <div class="checkout__top">
                                <h1>Step 1: </h1>
                                Complete the form below to request your Transit Navigator with the free bonuses
                            </div>
                            <div class="checkout__form">
                                <div class="checkout__form__item">
                                    <p class="checkout__form__item__title">Your Full Name:</p>
                                    <input type="text" placeholder="Name" name="username" required class="form__item__input__val form__item__input__val_name">
                                </div>
                                <div class="checkout__form__item">
                                    <p class="checkout__form__item__title">Your Birthdate:</p>
                                    <div class="checkout__form__item__group">
                                        <div data-name="month" class="custom_select">
                                            <p class="custom_select__current">Month</p>
                                            <ul class="custom_select__list">
                                                <input type="hidden" class="hidden_input" name="birth_month" value=""/>
                                                <li data-val="" class="custom_select__item custom_select__item_active">
                                                    Month
                                                </li>
                                                <?php for($i=1; $i<=12; $i++) { ?>
                                                    <li data-val="<?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?>" class="custom_select__item"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div data-name="day" class="custom_select">
                                            <p class="custom_select__current">Day</p>
                                            <ul class="custom_select__list">
                                                <input type="hidden" class="hidden_input" name="birth_day" value=""/>
                                                <li data-val="" class="custom_select__item custom_select__item_active">
                                                    Day
                                                </li>
                                                <?php for($i=1; $i<=31; $i++) { ?>
                                                    <li data-val="<?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?>" class="custom_select__item"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div data-name="year" class="checkout__form__item">
                                            <input type="number" min="1900" max="2100" placeholder="Year" name="birth_year" class="form__item__input__val form__item__input__val_name">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__form__item">
                                    <p class="checkout__form__item__title">Your Time of Birth:</p>
                                    <div class="checkout__form__item__group">
                                        <div data-name="hour" class="custom_select">
                                            <p class="custom_select__current">Hour</p>
                                            <ul class="custom_select__list">
                                                <input type="hidden" class="hidden_input" name="birth_hour" value=""/>
                                                <li data-val="" class="custom_select__item custom_select__item_active">
                                                    Hour
                                                </li>
                                                <?php for($i=0; $i<=24; $i++) { ?>
                                                    <li data-val="<?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?>" class="custom_select__item"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                        <div data-name="hour" class="custom_select">
                                            <p class="custom_select__current">Minutes</p>
                                            <ul class="custom_select__list">
                                                <input type="hidden" class="hidden_input" name="birth_min" value=""/>
                                                <li data-val="" class="custom_select__item custom_select__item_active">
                                                    Minutes
                                                </li>
                                                <?php for($i=0; $i<=59; $i++) { ?>
                                                    <li data-val="<?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?>" class="custom_select__item"><?php echo str_pad($i, 2, "0", STR_PAD_LEFT); ?></li>
                                                <?php } ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="checkout__form__item">
                                    <p class="checkout__form__item__title">Your Birthplace:</p>
                                    <div class="checkout__form__item__input">
                                        <div data-name="hour" class="custom_select">
                                            <p class="custom_select__current">Country</p>
                                            <ul class="custom_select__list">
                                                <input type="hidden" class="hidden_input" name="birth_country" value=""/>
                                                <li data-val="" class="custom_select__item custom_select__item_active">
                                                    Country
                                                </li>

                                                <li data-val="AF" class="custom_select__item">Afghanistan</li>
                                                <li data-val="AX" class="custom_select__item">Aland  Islands</li>
                                                <li data-val="AL" class="custom_select__item">Albania</li>
                                                <li data-val="DZ" class="custom_select__item">Algeria</li>
                                                <li data-val="AS" class="custom_select__item">American Samoa</li>
                                                <li data-val="AD" class="custom_select__item">Andorra</li>
                                                <li data-val="AO" class="custom_select__item">Angola</li>
                                                <li data-val="AI" class="custom_select__item">Anguilla</li>
                                                <li data-val="AQ" class="custom_select__item">Antarctica</li>
                                                <li data-val="AG" class="custom_select__item">Antigua and Barbuda</li>
                                                <li data-val="AR" class="custom_select__item">Argentina</li>
                                                <li data-val="AM" class="custom_select__item">Armenia</li>
                                                <li data-val="AW" class="custom_select__item">Aruba</li>
                                                <li data-val="AU" class="custom_select__item">Australia</li>
                                                <li data-val="AT" class="custom_select__item">Austria</li>
                                                <li data-val="AZ" class="custom_select__item">Azerbaijan</li>
                                                <li data-val="BS" class="custom_select__item">Bahamas</li>
                                                <li data-val="BH" class="custom_select__item">Bahrain</li>
                                                <li data-val="BD" class="custom_select__item">Bangladesh</li>
                                                <li data-val="BB" class="custom_select__item">Barbados</li>
                                                <li data-val="BY" class="custom_select__item">Belarus</li>
                                                <li data-val="BE" class="custom_select__item">Belgium</li>
                                                <li data-val="BZ" class="custom_select__item">Belize</li>
                                                <li data-val="BJ" class="custom_select__item">Benin</li>
                                                <li data-val="BM" class="custom_select__item">Bermuda</li>
                                                <li data-val="BT" class="custom_select__item">Bhutan</li>
                                                <li data-val="BO" class="custom_select__item">Bolivia</li>
                                                <li data-val="BQ" class="custom_select__item">Bonaire, Sint Eustatius and Saba</li>
                                                <li data-val="BA" class="custom_select__item">Bosnia and Herzegovina</li>
                                                <li data-val="BW" class="custom_select__item">Botswana</li>
                                                <li data-val="BV" class="custom_select__item">Bouvet Island</li>
                                                <li data-val="BR" class="custom_select__item">Brazil</li>
                                                <li data-val="IO" class="custom_select__item">British Indian Ocean Territory</li>
                                                <li data-val="BN" class="custom_select__item">Brunei Darussalam</li>
                                                <li data-val="BG" class="custom_select__item">Bulgaria</li>
                                                <li data-val="BF" class="custom_select__item">Burkina Faso</li>
                                                <li data-val="BI" class="custom_select__item">Burundi</li>
                                                <li data-val="KH" class="custom_select__item">Cambodia</li>
                                                <li data-val="CM" class="custom_select__item">Cameroon</li>
                                                <li data-val="CA" class="custom_select__item">Canada</li>
                                                <li data-val="CV" class="custom_select__item">Cape Verde</li>
                                                <li data-val="KY" class="custom_select__item">Cayman Islands</li>
                                                <li data-val="CF" class="custom_select__item">Central African Republic</li>
                                                <li data-val="TD" class="custom_select__item">Chad</li>
                                                <li data-val="CL" class="custom_select__item">Chile</li>
                                                <li data-val="CN" class="custom_select__item">China</li>
                                                <li data-val="CX" class="custom_select__item">Christmas Island</li>
                                                <li data-val="CC" class="custom_select__item">Cocos (Keeling) Islands</li>
                                                <li data-val="CO" class="custom_select__item">Colombia</li>
                                                <li data-val="KM" class="custom_select__item">Comoros</li>
                                                <li data-val="CG" class="custom_select__item">Congo</li>
                                                <li data-val="CD" class="custom_select__item">Congo, Democratic Republic of the Congo</li>
                                                <li data-val="CK" class="custom_select__item">Cook Islands</li>
                                                <li data-val="CR" class="custom_select__item">Costa Rica</li>
                                                <li data-val="CI" class="custom_select__item">Cote D'Ivoire</li>
                                                <li data-val="HR" class="custom_select__item">Croatia</li>
                                                <li data-val="CU" class="custom_select__item">Cuba</li>
                                                <li data-val="CW" class="custom_select__item">Curacao</li>
                                                <li data-val="CY" class="custom_select__item">Cyprus</li>
                                                <li data-val="CZ" class="custom_select__item">Czech Republic</li>
                                                <li data-val="DK" class="custom_select__item">Denmark</li>
                                                <li data-val="DJ" class="custom_select__item">Djibouti</li>
                                                <li data-val="DM" class="custom_select__item">Dominica</li>
                                                <li data-val="DO" class="custom_select__item">Dominican Republic</li>
                                                <li data-val="EC" class="custom_select__item">Ecuador</li>
                                                <li data-val="EG" class="custom_select__item">Egypt</li>
                                                <li data-val="SV" class="custom_select__item">El Salvador</li>
                                                <li data-val="GQ" class="custom_select__item">Equatorial Guinea</li>
                                                <li data-val="ER" class="custom_select__item">Eritrea</li>
                                                <li data-val="EE" class="custom_select__item">Estonia</li>
                                                <li data-val="ET" class="custom_select__item">Ethiopia</li>
                                                <li data-val="FK" class="custom_select__item">Falkland Islands (Malvinas)</li>
                                                <li data-val="FO" class="custom_select__item">Faroe Islands</li>
                                                <li data-val="FJ" class="custom_select__item">Fiji</li>
                                                <li data-val="FI" class="custom_select__item">Finland</li>
                                                <li data-val="FR" class="custom_select__item">France</li>
                                                <li data-val="GF" class="custom_select__item">French Guiana</li>
                                                <li data-val="PF" class="custom_select__item">French Polynesia</li>
                                                <li data-val="TF" class="custom_select__item">French Southern Territories</li>
                                                <li data-val="GA" class="custom_select__item">Gabon</li>
                                                <li data-val="GM" class="custom_select__item">Gambia</li>
                                                <li data-val="GE" class="custom_select__item">Georgia</li>
                                                <li data-val="DE" class="custom_select__item">Germany</li>
                                                <li data-val="GH" class="custom_select__item">Ghana</li>
                                                <li data-val="GI" class="custom_select__item">Gibraltar</li>
                                                <li data-val="GR" class="custom_select__item">Greece</li>
                                                <li data-val="GL" class="custom_select__item">Greenland</li>
                                                <li data-val="GD" class="custom_select__item">Grenada</li>
                                                <li data-val="GP" class="custom_select__item">Guadeloupe</li>
                                                <li data-val="GU" class="custom_select__item">Guam</li>
                                                <li data-val="GT" class="custom_select__item">Guatemala</li>
                                                <li data-val="GG" class="custom_select__item">Guernsey</li>
                                                <li data-val="GN" class="custom_select__item">Guinea</li>
                                                <li data-val="GW" class="custom_select__item">Guinea-Bissau</li>
                                                <li data-val="GY" class="custom_select__item">Guyana</li>
                                                <li data-val="HT" class="custom_select__item">Haiti</li>
                                                <li data-val="HM" class="custom_select__item">Heard Island and Mcdonald Islands</li>
                                                <li data-val="VA" class="custom_select__item">Holy See (Vatican City State)</li>
                                                <li data-val="HN" class="custom_select__item">Honduras</li>
                                                <li data-val="HK" class="custom_select__item">Hong Kong</li>
                                                <li data-val="HU" class="custom_select__item">Hungary</li>
                                                <li data-val="IS" class="custom_select__item">Iceland</li>
                                                <li data-val="IN" class="custom_select__item">India</li>
                                                <li data-val="ID" class="custom_select__item">Indonesia</li>
                                                <li data-val="IR" class="custom_select__item">Iran, Islamic Republic of</li>
                                                <li data-val="IQ" class="custom_select__item">Iraq</li>
                                                <li data-val="IE" class="custom_select__item">Ireland</li>
                                                <li data-val="IM" class="custom_select__item">Isle of Man</li>
                                                <li data-val="IL" class="custom_select__item">Israel</li>
                                                <li data-val="IT" class="custom_select__item">Italy</li>
                                                <li data-val="JM" class="custom_select__item">Jamaica</li>
                                                <li data-val="JP" class="custom_select__item">Japan</li>
                                                <li data-val="JE" class="custom_select__item">Jersey</li>
                                                <li data-val="JO" class="custom_select__item">Jordan</li>
                                                <li data-val="KZ" class="custom_select__item">Kazakhstan</li>
                                                <li data-val="KE" class="custom_select__item">Kenya</li>
                                                <li data-val="KI" class="custom_select__item">Kiribati</li>
                                                <li data-val="KP" class="custom_select__item">Korea, Democratic People's Republic of</li>
                                                <li data-val="KR" class="custom_select__item">Korea, Republic of</li>
                                                <li data-val="XK" class="custom_select__item">Kosovo</li>
                                                <li data-val="KW" class="custom_select__item">Kuwait</li>
                                                <li data-val="KG" class="custom_select__item">Kyrgyzstan</li>
                                                <li data-val="LA" class="custom_select__item">Lao People's Democratic Republic</li>
                                                <li data-val="LV" class="custom_select__item">Latvia</li>
                                                <li data-val="LB" class="custom_select__item">Lebanon</li>
                                                <li data-val="LS" class="custom_select__item">Lesotho</li>
                                                <li data-val="LR" class="custom_select__item">Liberia</li>
                                                <li data-val="LY" class="custom_select__item">Libyan Arab Jamahiriya</li>
                                                <li data-val="LI" class="custom_select__item">Liechtenstein</li>
                                                <li data-val="LT" class="custom_select__item">Lithuania</li>
                                                <li data-val="LU" class="custom_select__item">Luxembourg</li>
                                                <li data-val="MO" class="custom_select__item">Macao</li>
                                                <li data-val="MK" class="custom_select__item">Macedonia, the Former Yugoslav Republic of</li>
                                                <li data-val="MG" class="custom_select__item">Madagascar</li>
                                                <li data-val="MW" class="custom_select__item">Malawi</li>
                                                <li data-val="MY" class="custom_select__item">Malaysia</li>
                                                <li data-val="MV" class="custom_select__item">Maldives</li>
                                                <li data-val="ML" class="custom_select__item">Mali</li>
                                                <li data-val="MT" class="custom_select__item">Malta</li>
                                                <li data-val="MH" class="custom_select__item">Marshall Islands</li>
                                                <li data-val="MQ" class="custom_select__item">Martinique</li>
                                                <li data-val="MR" class="custom_select__item">Mauritania</li>
                                                <li data-val="MU" class="custom_select__item">Mauritius</li>
                                                <li data-val="YT" class="custom_select__item">Mayotte</li>
                                                <li data-val="MX" class="custom_select__item">Mexico</li>
                                                <li data-val="FM" class="custom_select__item">Micronesia, Federated States of</li>
                                                <li data-val="MD" class="custom_select__item">Moldova, Republic of</li>
                                                <li data-val="MC" class="custom_select__item">Monaco</li>
                                                <li data-val="MN" class="custom_select__item">Mongolia</li>
                                                <li data-val="ME" class="custom_select__item">Montenegro</li>
                                                <li data-val="MS" class="custom_select__item">Montserrat</li>
                                                <li data-val="MA" class="custom_select__item">Morocco</li>
                                                <li data-val="MZ" class="custom_select__item">Mozambique</li>
                                                <li data-val="MM" class="custom_select__item">Myanmar</li>
                                                <li data-val="NA" class="custom_select__item">Namibia</li>
                                                <li data-val="NR" class="custom_select__item">Nauru</li>
                                                <li data-val="NP" class="custom_select__item">Nepal</li>
                                                <li data-val="NL" class="custom_select__item">Netherlands</li>
                                                <li data-val="AN" class="custom_select__item">Netherlands Antilles</li>
                                                <li data-val="NC" class="custom_select__item">New Caledonia</li>
                                                <li data-val="NZ" class="custom_select__item">New Zealand</li>
                                                <li data-val="NI" class="custom_select__item">Nicaragua</li>
                                                <li data-val="NE" class="custom_select__item">Niger</li>
                                                <li data-val="NG" class="custom_select__item">Nigeria</li>
                                                <li data-val="NU" class="custom_select__item">Niue</li>
                                                <li data-val="NF" class="custom_select__item">Norfolk Island</li>
                                                <li data-val="MP" class="custom_select__item">Northern Mariana Islands</li>
                                                <li data-val="NO" class="custom_select__item">Norway</li>
                                                <li data-val="OM" class="custom_select__item">Oman</li>
                                                <li data-val="PK" class="custom_select__item">Pakistan</li>
                                                <li data-val="PW" class="custom_select__item">Palau</li>
                                                <li data-val="PS" class="custom_select__item">Palestinian Territory, Occupied</li>
                                                <li data-val="PA" class="custom_select__item">Panama</li>
                                                <li data-val="PG" class="custom_select__item">Papua New Guinea</li>
                                                <li data-val="PY" class="custom_select__item">Paraguay</li>
                                                <li data-val="PE" class="custom_select__item">Peru</li>
                                                <li data-val="PH" class="custom_select__item">Philippines</li>
                                                <li data-val="PN" class="custom_select__item">Pitcairn</li>
                                                <li data-val="PL" class="custom_select__item">Poland</li>
                                                <li data-val="PT" class="custom_select__item">Portugal</li>
                                                <li data-val="PR" class="custom_select__item">Puerto Rico</li>
                                                <li data-val="QA" class="custom_select__item">Qatar</li>
                                                <li data-val="RE" class="custom_select__item">Reunion</li>
                                                <li data-val="RO" class="custom_select__item">Romania</li>
                                                <li data-val="RU" class="custom_select__item">Russian Federation</li>
                                                <li data-val="RW" class="custom_select__item">Rwanda</li>
                                                <li data-val="BL" class="custom_select__item">Saint Barthelemy</li>
                                                <li data-val="SH" class="custom_select__item">Saint Helena</li>
                                                <li data-val="KN" class="custom_select__item">Saint Kitts and Nevis</li>
                                                <li data-val="LC" class="custom_select__item">Saint Lucia</li>
                                                <li data-val="MF" class="custom_select__item">Saint Martin</li>
                                                <li data-val="PM" class="custom_select__item">Saint Pierre and Miquelon</li>
                                                <li data-val="VC" class="custom_select__item">Saint Vincent and the Grenadines</li>
                                                <li data-val="WS" class="custom_select__item">Samoa</li>
                                                <li data-val="SM" class="custom_select__item">San Marino</li>
                                                <li data-val="ST" class="custom_select__item">Sao Tome and Principe</li>
                                                <li data-val="SA" class="custom_select__item">Saudi Arabia</li>
                                                <li data-val="SN" class="custom_select__item">Senegal</li>
                                                <li data-val="RS" class="custom_select__item">Serbia</li>
                                                <li data-val="CS" class="custom_select__item">Serbia and Montenegro</li>
                                                <li data-val="SC" class="custom_select__item">Seychelles</li>
                                                <li data-val="SL" class="custom_select__item">Sierra Leone</li>
                                                <li data-val="SG" class="custom_select__item">Singapore</li>
                                                <li data-val="SX" class="custom_select__item">Sint Maarten</li>
                                                <li data-val="SK" class="custom_select__item">Slovakia</li>
                                                <li data-val="SI" class="custom_select__item">Slovenia</li>
                                                <li data-val="SB" class="custom_select__item">Solomon Islands</li>
                                                <li data-val="SO" class="custom_select__item">Somalia</li>
                                                <li data-val="ZA" class="custom_select__item">South Africa</li>
                                                <li data-val="GS" class="custom_select__item">South Georgia and the South Sandwich Islands</li>
                                                <li data-val="SS" class="custom_select__item">South Sudan</li>
                                                <li data-val="ES" class="custom_select__item">Spain</li>
                                                <li data-val="LK" class="custom_select__item">Sri Lanka</li>
                                                <li data-val="SD" class="custom_select__item">Sudan</li>
                                                <li data-val="SR" class="custom_select__item">Suriname</li>
                                                <li data-val="SJ" class="custom_select__item">Svalbard and Jan Mayen</li>
                                                <li data-val="SZ" class="custom_select__item">Swaziland</li>
                                                <li data-val="SE" class="custom_select__item">Sweden</li>
                                                <li data-val="CH" class="custom_select__item">Switzerland</li>
                                                <li data-val="SY" class="custom_select__item">Syrian Arab Republic</li>
                                                <li data-val="TW" class="custom_select__item">Taiwan, Province of China</li>
                                                <li data-val="TJ" class="custom_select__item">Tajikistan</li>
                                                <li data-val="TZ" class="custom_select__item">Tanzania, United Republic of</li>
                                                <li data-val="TH" class="custom_select__item">Thailand</li>
                                                <li data-val="TL" class="custom_select__item">Timor-Leste</li>
                                                <li data-val="TG" class="custom_select__item">Togo</li>
                                                <li data-val="TK" class="custom_select__item">Tokelau</li>
                                                <li data-val="TO" class="custom_select__item">Tonga</li>
                                                <li data-val="TT" class="custom_select__item">Trinidad and Tobago</li>
                                                <li data-val="TN" class="custom_select__item">Tunisia</li>
                                                <li data-val="TR" class="custom_select__item">Turkey</li>
                                                <li data-val="TM" class="custom_select__item">Turkmenistan</li>
                                                <li data-val="TC" class="custom_select__item">Turks and Caicos Islands</li>
                                                <li data-val="TV" class="custom_select__item">Tuvalu</li>
                                                <li data-val="UG" class="custom_select__item">Uganda</li>
                                                <li data-val="UA" class="custom_select__item">Ukraine</li>
                                                <li data-val="AE" class="custom_select__item">United Arab Emirates</li>
                                                <li data-val="GB" class="custom_select__item">United Kingdom</li>
                                                <li data-val="US" class="custom_select__item">United States</li>
                                                <li data-val="UM" class="custom_select__item">United States Minor Outlying Islands</li>
                                                <li data-val="UY" class="custom_select__item">Uruguay</li>
                                                <li data-val="UZ" class="custom_select__item">Uzbekistan</li>
                                                <li data-val="VU" class="custom_select__item">Vanuatu</li>
                                                <li data-val="VE" class="custom_select__item">Venezuela</li>
                                                <li data-val="VN" class="custom_select__item">Viet Nam</li>
                                                <li data-val="VG" class="custom_select__item">Virgin Islands, British</li>
                                                <li data-val="VI" class="custom_select__item">Virgin Islands, U.s.</li>
                                                <li data-val="WF" class="custom_select__item">Wallis and Futuna</li>
                                                <li data-val="EH" class="custom_select__item">Western Sahara</li>
                                                <li data-val="YE" class="custom_select__item">Yemen</li>
                                                <li data-val="ZM" class="custom_select__item">Zambia</li>
                                                <li data-val="ZW" class="custom_select__item">Zimbabwe</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__form__item">
                                    <p class="checkout__form__item__title">Your Town or City of Birth:</p>
                                    <input type="text" placeholder="Please Write" name="birth_town" class="form__item__input__val form__item__input__val_name">
                                </div>
                            </div>
                            <div class="checkout__bottom">
                                <button class="checkout__btn" type="button" onclick="gotoSecondStep()">Continue</button>
                            </div>
                        </form>
                        <div class="checkout__img">
                            <picture  class="checkout__img__item">
                                <source media="(max-width: 767px)" srcset="../assets/img/checkout/step1_mb.png">
                                <source media="(min-width: 768px)" srcset="../assets/img/checkout/step1.png">
                                <img alt="" src="../assets/img/checkout/step1.png">
                            </picture>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
        <script src="../assets/js/checkout.js"></script>
    </body>
</html>