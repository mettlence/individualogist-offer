<?php
$PageTitle = "Individualogist.com | Reading";
include('../../inc/header.php');
if (!empty($_GET['name'])) {
  $name = $_GET['name'];
} else {
  $name = 'Friend';
}
if (!empty($_GET['email'])) {
  $email = $_GET['email'];
} else {
  $email = 'your@mail.com';
}
?>

<style>
  .cta-button {
    box-shadow: none !important
  }
</style>
<link href="css/normalize.css" rel="stylesheet" type="text/css">
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/checkout.css" rel="stylesheet" type="text/css">
<div class="page-container">
  <div class="container-fluid bg-archetypewhite">
    <div class="row">
      <div class="col-sm-12 mx-auto">
        <div class="indi-logo">
          <img src="https://individualogist.com/wp-content/uploads/individualogist-logo3.png">
        </div>
      </div>
    </div>
    <div class="section_body">

      <!-- section 1 -->
      <div id="details" class="checkout_container">
        <div class="checkout_header-wrapper"><img src="/offer/paa/img/Progress-Bar-S1.png" class="checkout_steps"></div>
        <div class="checkout_body-wrapper">
          <div class="checkout_body-div w-clearfix">
            <div class="checkout_body-col-left">
              <div class="step_text-box">
                <div class="step_text"><strong>Step 1:</strong> Complete the form below and click "Continue" to request your Premium Archetype Analysis and free bonuses.</div>
              </div>
              <div class="form_sec">
                <div class="form_block w-form">
                  <form id="email-form" name="email-form" data-name="Email Form" class="form" action="#" method="post">
                    <div class="form_block-full"><label for="email" class="form_label">Your Email:*</label><input type="email" class="w-input" name="email" id="email" required="" value="<?php echo $email; ?>" placeholder="Please enter your email"></div>
                    <div class="form_block-full"><label for="First-Name" class="form_label">Your First Name:*</label><input type="text" class="w-input" maxlength="256" name="first_name" data-name="firstname" placeholder="Enter your name" value="<?php echo $name; ?>" id="firstname" required=""></div>
                    <div class="form_block-full w-clearfix"><label for="First-Name-2" class="form_label">Your Date of Birth:*</label>
                      <div class="form_block-3">
                        <select id="month" name="month" data-name="month" required="" class="field_drop w-select">

                          <option value="">Month</option>
                          <option value="January">January</option>
                          <option value="February">February</option>
                          <option value="March">March</option>
                          <option value="April"> April</option>
                          <option value="May">May</option>
                          <option value="June">June</option>
                          <option value="July">July</option>
                          <option value="August">August</option>
                          <option value="September">September</option>
                          <option value="October">October</option>
                          <option value="November">November</option>
                          <option value="December">December</option>


                        </select>

                      </div>
                      <div class="form_block-3"><select id="day" name="day" data-name="day" required="" class="field_drop w-select">

                          <option value="">Day</option>
                          <option value="1">01</option>
                          <option value="2">02</option>
                          <option value="3">03</option>
                          <option value="4">04</option>
                          <option value="5">05</option>
                          <option value="6">06</option>
                          <option value="7">07</option>
                          <option value="8">08</option>
                          <option value="9">09</option>
                          <option value="10">10</option>
                          <option value="11">11</option>
                          <option value="12">12</option>
                          <option value="13">13</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                          <option value="19">19</option>
                          <option value="20">20</option>
                          <option value="21">21</option>
                          <option value="22">22</option>
                          <option value="23">23</option>
                          <option value="24">24</option>
                          <option value="25">25</option>
                          <option value="26">26</option>
                          <option value="27">27</option>
                          <option value="28">28</option>
                          <option value="29">29</option>
                          <option value="30">30</option>
                          <option value="31">31</option>




                        </select></div>
                      <div class="form_block-3"><select id="year" name="year" data-name="year" required="" class="field_drop w-select">


                          <option value="">Year</option>
                          <option value="2014">2014</option>
                          <option value="2013">2013</option>
                          <option value="2012">2012</option>
                          <option value="2011">2011</option>
                          <option value="2010">2010</option>
                          <option value="2009">2009</option>
                          <option value="2008">2008</option>
                          <option value="2007">2007</option>
                          <option value="2006">2006</option>
                          <option value="2005">2005</option>
                          <option value="2004">2004</option>
                          <option value="2003">2003</option>
                          <option value="2002">2002</option>
                          <option value="2001">2001</option>
                          <option value="2000">2000</option>
                          <option value="1999">1999</option>
                          <option value="1998">1998</option>
                          <option value="1997">1997</option>
                          <option value="1996">1996</option>
                          <option value="1995">1995</option>
                          <option value="1994">1994</option>
                          <option value="1993">1993</option>
                          <option value="1992">1992</option>
                          <option value="1991">1991</option>
                          <option value="1990">1990</option>
                          <option value="1989">1989</option>
                          <option value="1988">1988</option>
                          <option value="1987">1987</option>
                          <option value="1986">1986</option>
                          <option value="1985">1985</option>
                          <option value="1984">1984</option>
                          <option value="1983">1983</option>
                          <option value="1982">1982</option>
                          <option value="1981">1981</option>
                          <option value="1980">1980</option>
                          <option value="1979">1979</option>
                          <option value="1978">1978</option>
                          <option value="1977">1977</option>
                          <option value="1976">1976</option>
                          <option value="1975">1975</option>
                          <option value="1974">1974</option>
                          <option value="1973">1973</option>
                          <option value="1972">1972</option>
                          <option value="1971">1971</option>
                          <option value="1970">1970</option>
                          <option value="1969">1969</option>
                          <option value="1968">1968</option>
                          <option value="1967">1967</option>
                          <option value="1966">1966</option>
                          <option value="1965">1965</option>
                          <option value="1964">1964</option>
                          <option value="1963">1963</option>
                          <option value="1962">1962</option>
                          <option value="1961">1961</option>
                          <option value="1960">1960</option>
                          <option value="1959">1959</option>
                          <option value="1958">1958</option>
                          <option value="1957">1957</option>
                          <option value="1956">1956</option>
                          <option value="1955">1955</option>
                          <option value="1954">1954</option>
                          <option value="1953">1953</option>
                          <option value="1952">1952</option>
                          <option value="1951">1951</option>
                          <option value="1950">1950</option>
                          <option value="1949">1949</option>
                          <option value="1948">1948</option>
                          <option value="1947">1947</option>
                          <option value="1946">1946</option>
                          <option value="1945">1945</option>
                          <option value="1944">1944</option>
                          <option value="1943">1943</option>
                          <option value="1942">1942</option>
                          <option value="1941">1941</option>
                          <option value="1940">1940</option>
                          <option value="1939">1939</option>
                          <option value="1938">1938</option>
                          <option value="1937">1937</option>
                          <option value="1936">1936</option>
                          <option value="1935">1935</option>
                          <option value="1934">1934</option>
                          <option value="1933">1933</option>
                          <option value="1932">1932</option>
                          <option value="1931">1931</option>
                          <option value="1930">1930</option>
                          <option value="1929">1929</option>
                          <option value="1928">1928</option>
                          <option value="1927">1927</option>
                          <option value="1926">1926</option>
                          <option value="1925">1925</option>
                          <option value="1924">1924</option>
                          <option value="1923">1923</option>
                          <option value="1922">1922</option>
                          <option value="1921">1921</option>
                          <option value="1920">1920</option>
                          <option value="1919">1919</option>
                          <option value="1918">1918</option>
                          <option value="1917">1917</option>
                          <option value="1916">1916</option>
                          <option value="1915">1915</option>
                          <option value="1914">1914</option>
                          <option value="1913">1913</option>
                          <option value="1912">1912</option>
                          <option value="1911">1911</option>
                          <option value="1910">1910</option>
                          <option value="1909">1909</option>
                          <option value="1908">1908</option>
                          <option value="1907">1907</option>
                          <option value="1906">1906</option>
                          <option value="1905">1905</option>
                          <option value="1904">1904</option>
                          <option value="1903">1903</option>
                          <option value="1902">1902</option>
                          <option value="1901">1901</option>
                          <option value="1900">1900</option>
                        </select></div>
                    </div>
                    <!-- <div class="form_block-full"><label class="w-checkbox"><input type="checkbox" id="checkbox" name="checkbox" data-name="Checkbox" class="w-checkbox-input"><span class="w-form-label">Check the box if unsure</span></label></div> -->
                    <div class="form_block-full country"><label for="country" class="form_label">Your Country of Birth:*</label>

                      <select id="country" name="country" data-name="country" required="" class="field_drop w-select">

                        <option value="">Please Select</option>
                        <option value="Afganistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Anguilla">Anguilla</option>
                        <option value="Antigua &amp; Barbuda">Antigua &amp; Barbuda</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Aruba">Aruba</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Barbados">Barbados</option>
                        <option value="Belarus">Belarus</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Belize">Belize</option>
                        <option value="Benin">Benin</option>
                        <option value="Bermuda">Bermuda</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bonaire">Bonaire</option>
                        <option value="Bosnia &amp; Herzegovina">Bosnia &amp; Herzegovina</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Burkina Faso">Burkina Faso</option>
                        <option value="Burundi">Burundi</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Canary Islands">Canary Islands</option>
                        <option value="Cape Verde">Cape Verde</option>
                        <option value="Cayman Islands">Cayman Islands</option>
                        <option value="Central African Republic">Central African Republic</option>
                        <option value="Chad">Chad</option>
                        <option value="Channel Islands">Channel Islands</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Christmas Island">Christmas Island</option>
                        <option value="Cocos Island">Cocos Island</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Comoros">Comoros</option>
                        <option value="Congo">Congo</option>
                        <option value="Cook Islands">Cook Islands</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Cote DIvoire">Cote DIvoire</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Curaco">Curacao</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Djibouti">Djibouti</option>
                        <option value="Dominica">Dominica</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="East Timor">East Timor</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="El Salvador">El Salvador</option>
                        <option value="Equatorial Guinea">Equatorial Guinea</option>
                        <option value="Eritrea">Eritrea</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Falkland Islands">Falkland Islands</option>
                        <option value="Faroe Islands">Faroe Islands</option>
                        <option value="Fiji">Fiji</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="French Guiana">French Guiana</option>
                        <option value="French Polynesia">French Polynesia</option>
                        <option value="French Southern Ter">French Southern Ter</option>
                        <option value="Gabon">Gabon</option>
                        <option value="Gambia">Gambia</option>
                        <option value="Georgia">Georgia</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Gibraltar">Gibraltar</option>
                        <option value="Great Britain">Great Britain</option>
                        <option value="Greece">Greece</option>
                        <option value="Greenland">Greenland</option>
                        <option value="Grenada">Grenada</option>
                        <option value="Guadeloupe">Guadeloupe</option>
                        <option value="Guam">Guam</option>
                        <option value="Guatemala">Guatemala</option>
                        <option value="Guinea">Guinea</option>
                        <option value="Guyana">Guyana</option>
                        <option value="Haiti">Haiti</option>
                        <option value="Hawaii">Hawaii</option>
                        <option value="Honduras">Honduras</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="India">India</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Isle of Man">Isle of Man</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Jamaica">Jamaica</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kazakhstan">Kazakhstan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kiribati">Kiribati</option>
                        <option value="Korea North">Korea North</option>
                        <option value="Korea Sout">Korea South</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Kyrgyzstan">Kyrgyzstan</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Lesotho">Lesotho</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Liechtenstein">Liechtenstein</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Macau">Macau</option>
                        <option value="Macedonia">Macedonia</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Malawi">Malawi</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Malta">Malta</option>
                        <option value="Marshall Islands">Marshall Islands</option>
                        <option value="Martinique">Martinique</option>
                        <option value="Mauritania">Mauritania</option>
                        <option value="Mauritius">Mauritius</option>
                        <option value="Mayotte">Mayotte</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Midway Islands">Midway Islands</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Montserrat">Montserrat</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Mozambique">Mozambique</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nambia">Nambia</option>
                        <option value="Nauru">Nauru</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherland Antilles">Netherland Antilles</option>
                        <option value="Netherlands">Netherlands (Holland, Europe)</option>
                        <option value="Nevis">Nevis</option>
                        <option value="New Caledonia">New Caledonia</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nicaragua">Nicaragua</option>
                        <option value="Niger">Niger</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="Niue">Niue</option>
                        <option value="Norfolk Island">Norfolk Island</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Palau Island">Palau Island</option>
                        <option value="Palestine">Palestine</option>
                        <option value="Panama">Panama</option>
                        <option value="Papua New Guinea">Papua New Guinea</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Phillipines">Philippines</option>
                        <option value="Pitcairn Island">Pitcairn Island</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Puerto Rico">Puerto Rico</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Republic of Montenegro">Republic of Montenegro</option>
                        <option value="Republic of Serbia">Republic of Serbia</option>
                        <option value="Reunion">Reunion</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Rwanda">Rwanda</option>
                        <option value="St Barthelemy">St Barthelemy</option>
                        <option value="St Eustatius">St Eustatius</option>
                        <option value="St Helena">St Helena</option>
                        <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                        <option value="St Lucia">St Lucia</option>
                        <option value="St Maarten">St Maarten</option>
                        <option value="St Pierre &amp; Miquelon">St Pierre &amp; Miquelon</option>
                        <option value="St Vincent &amp; Grenadines">St Vincent &amp; Grenadines</option>
                        <option value="Saipan">Saipan</option>
                        <option value="Samoa">Samoa</option>
                        <option value="Samoa American">Samoa American</option>
                        <option value="San Marino">San Marino</option>
                        <option value="Sao Tome &amp; Principe">Sao Tome &amp; Principe</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Senegal">Senegal</option>
                        <option value="Seychelles">Seychelles</option>
                        <option value="Sierra Leone">Sierra Leone</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="Solomon Islands">Solomon Islands</option>
                        <option value="Somalia">Somalia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Suriname">Suriname</option>
                        <option value="Swaziland">Swaziland</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Tahiti">Tahiti</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Togo">Togo</option>
                        <option value="Tokelau">Tokelau</option>
                        <option value="Tonga">Tonga</option>
                        <option value="Trinidad &amp; Tobago">Trinidad &amp; Tobago</option>
                        <option value="Tunisia">Tunisia</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Turks &amp; Caicos Is">Turks &amp; Caicos Is</option>
                        <option value="Tuvalu">Tuvalu</option>
                        <option value="Uganda">Uganda</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Erimates">United Arab Emirates</option>
                        <option value="United States of America">United States of America</option>
                        <option value="Uraguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Vanuatu">Vanuatu</option>
                        <option value="Vatican City State">Vatican City State</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                        <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                        <option value="Wake Island">Wake Island</option>
                        <option value="Wallis &amp; Futana Is">Wallis &amp; Futana Is</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zaire">Zaire</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>
                      </select>

                    </div>
                    <div class="form_block-full"><label for="city" class="form_label">Your Town or City of Birth:*</label><input type="text" class="w-input" maxlength="256" name="city" data-name="city" placeholder="Enter your city" id="city" required=""></div>
                    <!--  </form> -->
                    <div class="w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                      <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="checkout_body-col-right"><img src="/offer/paa/img/paa-ancient.png" alt="" class="premium-archetype-analysis">
              <span id="details-error-message" style="display: none;">All fields are required</span>
              <a href="#" class="cta-button w-button " data-ix="button" id="next-quextinnare">CONTINUE</a>
              <div class="arrow-wrapper"><img src="/offer/paa/img/arrow.png" alt=""></div>
            </div>
          </div>
        </div>
      </div>

      <!-- se ction 2 -->
      <div id="quextinnare" class="checkout_container" style="display: none;">
        <div class="checkout_header-wrapper"><img src="/offer/paa/img/Progress-Bar-S2.png" class="checkout_steps"></div>
        <div class="checkout_body-wrapper">
          <div class="checkout_body-div">
            <div class="step_text-box">
              <div class="step_text"><strong>Step 2: </strong>Before we can go deeper, I need to know a little more about you and make sure we are a fit. Your answers are completely confidential.</div>
            </div>
            <div class="w-form">

              <!--  <form id="email-form-2" name="email-form-2" data-name="Email Form 2"><label for="Burning-Question" class="form_label center"> -->
              <strong>Please enter the most burning question you would like answered. Your question is kept completely confidential.</strong>
              <textarea data-name="Burning Question" maxlength="5000" id="burning-question" name="burning-question" required="" class="form_textarea w-input"></textarea>
              <input type="hidden" name="user_id" id="user_id" value="">
              <input type="hidden" name="vtid" id="vtid" value="">
              <input type="hidden" name="affid" id="affid" value="">
              <input type="hidden" name="email" id="email" value="skachhwaha@gmail.com">

              <span id="question-error-message" style="display: none;">Question is required</span>
              <input type="submit" class="cta-button w-button" data-ix="button" id="burning-question_continue" value="CONTINUE">

              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" integrity="sha512-3j3VU6WC5rPQB4Ld1jnLV7Kd5xr+cq9avvhwqzbH/taCRNURoeEpoPBK9pDyeukwSxwRPJ8fDgvYXd6SkaZ2TA==" crossorigin="anonymous"></script>
<script type="text/javascript">
  $(document).ready(function() {
    var currentURL = new URL(window.location.href);
    $("#details").show();
    $("#quextinnare").hide();
    $("#guide").hide();
    $("#details-error-message").hide();
    $("#question-error-message").hide();

    // dob selection
    if (window.location.href.indexOf('month') > -1) {
      $('select[name=month]').val(currentURL.searchParams.get('month'));
    }
    if (window.location.href.indexOf('day') > -1) {
      $('select[name=day]').val(currentURL.searchParams.get('day'));
    }
    if (window.location.href.indexOf('year') > -1) {
      $('select[name=year]').val(currentURL.searchParams.get('year'));
    }

    $("#next-quextinnare").click(function(e) {

      var pass_allowed = details_check_fields_required();

      if (typeof pass_allowed === "boolean" && pass_allowed === true) {

        $("#details").hide();
        $("#quextinnare").show();
        $("#guide").hide();
      } else {
        if ($("#details-error-message").is(":hidden")) {
          $("#details-error-message").show();
        }
      }

    });

    $("#burning-question_continue").click(function(e) {

      var question = $("#burning-question").val();
      var user_id = $("#user_id").val();
      var email = $("input[name=email]").val();
      var firstname = $("input[name='first_name']").val();
      var month = $("#month").val();
      var day = $("#day").val();
      var year = $("#year").val();
      var country = $("#country").val();
      var city = $("input[name='city']").val();
      document.cookie = setCookie('questionnaire', question) + '=; expires=Thu, 01 Jan 1970 00:00:01 GMT;';

      if (typeof question === "undefined" || question === null || question === '') {
        if ($("#question-error-message").is(":hidden")) {
          $("#question-error-message").show();
          return false;
        }
      } else {
        $.ajax({
          url: "https://member.individualogist.com/api/maropost/getByEmail",
          type: 'GET',
          data: {
            email: $("input[name=email]").val()
          },
          success: function(response) {
            $.cookie("questionnaire", question, {
              expires: 1,
              path: "/"
            });
            if (response.status == "FALSE") {
              $.ajax({
                url: "https://member.individualogist.com/api/maropost/addContact",
                type: 'POST',
                data: {
                  reference: "reading",
                  name: firstname,
                  email: email,
                  questionnaire: question,
                  month: month,
                  day: day,
                  year: year,
                  country: country,
                  city: city,
                  list_id: 21
                },
                success: function(response) {
                  //console.log(response)
                  if (window.location.href.indexOf("utm_content") > -1) {
                    window.location.href = "https://individualogist.com/offer/paa/reading-v5/checkout/select-guide/?utm_source=" +
                      currentURL.searchParams.get('utm_source') +
                      "&utm_medium=" +
                      currentURL.searchParams.get('utm_medium') +
                      "&utm_campaign=" +
                      currentURL.searchParams.get('utm_campaign') +
                      "&utm_content=" +
                      currentURL.searchParams.get('utm_content') +
                      "&email=" + currentURL.searchParams.get('email') +
                      "&name=" + currentURL.searchParams.get('name') +
                      "&archetype=" + currentURL.searchParams.get('archetype')
                  } else {
                    window.location.href = "https://individualogist.com/offer/paa/reading-v5/checkout/select-guide/&email=" + currentURL.searchParams.get('email') +
                      "&name=" + currentURL.searchParams.get('name') +
                      "&archetype=" + currentURL.searchParams.get('archetype')
                  }
                }
              })
            } else {
              $.ajax({
                url: "https://member.individualogist.com/api/maropost/updateContact",
                type: 'POST',
                data: {
                  reference: "reading",
                  name: firstname,
                  email: email,
                  questionnaire: question,
                  month: month,
                  day: day,
                  year: year,
                  country: country,
                  city: city,
                  list_id: 21,
                  uid: response.data.id
                },
                success: function(response) {
                  //console.log(response)
                  if (window.location.href.indexOf("utm_content") > -1) {
                    window.location.href = "https://individualogist.com/offer/paa/reading-v5/checkout/select-guide/?utm_source=" +
                      currentURL.searchParams.get('utm_source') +
                      "&utm_medium=" +
                      currentURL.searchParams.get('utm_medium') +
                      "&utm_campaign=" +
                      currentURL.searchParams.get('utm_campaign') +
                      "&utm_content=" +
                      currentURL.searchParams.get('utm_content') + "&email=" + currentURL.searchParams.get('email') +
                      "&name=" + currentURL.searchParams.get('name') +
                      "&archetype=" + currentURL.searchParams.get('archetype')
                  } else {
                    window.location.href = "https://individualogist.com/offer/paa/reading-v5/checkout/select-guide/&email=" + currentURL.searchParams.get('email') +
                      "&name=" + currentURL.searchParams.get('name') +
                      "&archetype=" + currentURL.searchParams.get('archetype')
                  }
                }
              })
            }
          }
        });
      }



    });
    var details_check_fields_required = function() {

      var pass_allowed = true;
      var email = $("input[name=email]").val();
      var firstname = $("input[name='first_name']").val();
      var month = $("#month").val();
      var day = $("#day").val();
      var year = $("#year").val();
      var country = $("#country").val();
      var city = $("input[name='city']").val();

      if (typeof email === "undefined" || email === null || email === '')
        return "All fields are required";

      if (!validateEmail(email)) {
        $("#details-error-message").text("Wrong Email Format");
        return "Wrong Email Format";
      }

      if (typeof firstname === "undefined" || firstname === null || firstname === '')
        return "All fields are required";

      if (typeof month === "undefined" || month === null || month === '')
        return "All fields are required";

      if (typeof day === "undefined" || day === null || day === '')
        return "All fields are required";

      if (typeof year === "undefined" || year === null || year === '')
        return "All fields are required";

      if (typeof country === "undefined" && country === null || country === '')
        return "All fields are required";

      if (typeof city === "undefined" && city === null || city === '')
        return "All fields are required";

      return pass_allowed;

    }

    function validateEmail(email) {
      var re = /^\s*(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))\s*$/;
      return re.test(String(email).toLowerCase());
    }

  });
</script>
<?php include '../../inc/footer.php'; ?>