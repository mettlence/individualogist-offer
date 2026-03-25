<?php
$PageTitle = "Individualogist.com | Reading";
include('../../../inc/header.php');
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

if (!empty($_GET['archetype'])) {
  if ($_GET['archetype'] == 'caregiver') {
    $cbfid = 28769;
  } else if ($_GET['archetype'] == 'creator') {
    $cbfid = 27121;
  } else if ($_GET['archetype'] == 'explorer') {
    $cbfid = 28787;
  } else if ($_GET['archetype'] == 'hero') {
    $cbfid = 28788;
  } else if ($_GET['archetype'] == 'innocent') {
    $cbfid = 28789;
  } else if ($_GET['archetype'] == 'jester') {
    $cbfid = 28790;
  } else if ($_GET['archetype'] == 'lover') {
    $cbfid = 28791;
  } else if ($_GET['archetype'] == 'magician') {
    $cbfid = 28792;
  } else if ($_GET['archetype'] == 'member') {
    $cbfid = 28793;
  } else if ($_GET['archetype'] == 'outlaw') {
    $cbfid = 28794;
  } else if ($_GET['archetype'] == 'ruler') {
    $cbfid = 28795;
  } else if ($_GET['archetype'] == 'sage') {
    $cbfid = 30514;
  } else {
    $cbfid = 28769;
  }
} else {
  $cbfid = 28769;
}
?>
<link href="../css/normalize.css" rel="stylesheet" type="text/css">
<link href="../css/default.css" rel="stylesheet" type="text/css">
<link href="css/select-guide.css?v=1.1" rel="stylesheet" type="text/css">
<link href="../css/checkout.css?v=1" rel="stylesheet" type="text/css">
<style>
  .checkbox-field {
    width: 90%;
  }

  .bonus-tile {
    padding: 1em;
    border-radius: 3px;
    background: #f8f8f8;
    margin: 1em auto
  }

  .bonus-tile p {
    font-size: 14px;
    line-height: 1em;
  }

  h3 {
    margin-top: 0
  }

  .form_btn:hover {
    color: #333
  }

  .mostvalue {
    font-weight: 700
  }
</style>
<div class="page-container">
  <div class="container-fluid bg-archetypewhite">
    <div class="row">
      <div class="col-sm-12 mx-auto">
        <div class="indi-logo">
          <img src="https://individualogist.com/wp-content/uploads/individualogist-logo3.png">
        </div>
      </div>
      <div class="checkout_header-wrapper">
        <img src="https://individualogist.com/offer/paa/img/Progress-Bar-S3.png" class="checkout_steps">
      </div>
    </div>
    <div class="checkout_container">
      <div class="checkout_body-wrapper">
        <div class="subscription-container">
          <h3 class="headline_h1-2"><strong>Request Your Premium Archetype Analysis Now</strong><br></h3>
          <div class="limited-offer">
            <div>This Special Offer Ends In: <span id="demo" class="timer">17: 26</span><br></div>
          </div>
        </div>

        <div id="step1">
          <h3 class="h3-header"><strong>STEP&nbsp;1:</strong> Select your guide</h3>
          <div class="pricing-option-container">
            <div class="form-block w-form">
              <form id="email-form" name="email-form" data-name="Email Form">
                <div class="pricing-option-wrapper">
                  <div class="pricing-option-div">
                    <div class="option-title v2"><label class="radio-button-field w-radio"><input type="radio" data-name="Radio" id="radio" name="radio" value="Radio" class="w-form-formradioinput radio-button w-radio-input" checked=""><span class="radio-button-label w-form-label"><strong class="bold-checkbox-text v2">Gold Analysis<br></strong><span><strong class="billing-period v2">(12 special bonus materials, prepared in 36 hours)<br></strong></span></span></label></div>
                    <div class="option-price">
                      <div class="current-price">$67</div>
                    </div>
                  </div>
                  <div class="discount-wrapper">
                    <div class="discount-text-2">Most Popular - SAVE 70%</div>
                  </div>
                </div>
                <div class="pricing-option-wrapper">
                  <div class="pricing-option-div">
                    <div class="option-title v2"><label class="radio-button-field w-radio"><input type="radio" data-name="Radio 2" id="radio-2" name="radio" value="Radio" class="w-form-formradioinput radio-button w-radio-input"><span class="radio-button-label w-form-label"><strong class="bold-checkbox-text v2">Silver Analysis<br></strong><span><strong class="billing-period v2">(7 special bonus materials, prepared in 36 hours)</strong></span></span></label></div>
                    <div class="option-price">
                      <div class="current-price">$57</div>
                    </div>
                  </div>
                </div>
                <div class="pricing-option-wrapper">
                  <div class="pricing-option-div">
                    <div class="option-title v2"><label class="radio-button-field w-radio"><input type="radio" data-name="Radio 3" id="radio-3" name="radio" value="Radio" class="w-form-formradioinput radio-button w-radio-input"><span class="radio-button-label w-form-label"><strong class="bold-checkbox-text v2">Standard Analysis<br></strong><span><strong class="billing-period v2">(5 bonus materials, prepared in 36 hours)</strong></span></span></label></div>
                    <div class="option-price">
                      <div class="current-price">$37</div>
                    </div>
                  </div>
                </div>
              </form>
              <div class="w-form-done">
                <div>Thank you! Your submission has been received!</div>
              </div>
              <div class="w-form-fail">
                <div>Oops! Something went wrong while submitting the form.</div>
              </div>
            </div>
          </div>
        </div>
        <!--step1 closed-->
        <div id="step2">
          <h3 class="h3-header"><strong>STEP 2:</strong> Review your Selection</h3>
          <div class="pricing-option-container">
            <div id="gold" style="padding-bottom: 10px;">
              <div class="bonus-list">
                <h2 class="text-center"><span class="gold">Gold</span> Analysis</h2>
                <p class="small mostvalue text-center">Best Offer - SAVE 70%!</p>
                <div class="row">
                  <div class="col-6">
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #1: Active Imagination Guide</strong></p>
                      <p>Enhance your archetypal integration efforts by tapping into the proven psychological exercises of "active imagination".</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #2: Dream Analysis Guide</strong></p>
                      <p>Become a master of your intuition by deconstructing your dreams to reveal your "inner voice".</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #3: Exploring Your Birthdate With The Chinese Zodiac</strong></p>
                      <p>Understand the Eastern influences on predictions and learn how you can apply them to harness yin and yang energies, all based on your personalized Chinese Zodiac.</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #4: Discovering Your Aura</strong></p>
                      <p>Learn how you can instantly identify and interpret different auras of different individuals to gain maximum influence over others.</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #5: Feng Shui Paradigm Guide</strong></p>
                      <p>Maximise the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui.</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #6: Awakening Of The Anima/Animus Report</strong></p>
                      <p>Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #7: Stages Of Life Report</strong></p>
                      <p>Intimate insights into your personal transitions throughout the progressive phases of your growth to amplify the effects of individuation</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #8: Moon Manifestation Rituals</strong></p>
                      <p>A complete guide to creating your own manifesting rituals during a full and new moon</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #9: Soul Seeker's Guide To Dreams</strong></p>
                      <p>A journey of self-discovery through the 8 secret types of dreams and over 60 dream symbol interpretations</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #10: Crystal and Chakra Synthesis</strong></p>
                      <p>Discover how this secret connection can be the tipping point of your spiritual growth and energy alignment</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #11: True Self Anchoring</strong></p>
                      <p>A powerful guide to finding, becoming, and strenghtening your most authentic self to create everlasting purpose and abundance</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>GOLD SPECIAL #12: Positive Enery Surge</strong></p>
                      <p>Unearth hidden ideas to attract, harness and translate positive energy into abundance, purpose, and happiness</p>
                    </div>
                  </div>
                </div>

                <!--
                    <ul class="tick-list text-left small">
                      <li><strong>GOLD SPECIAL #1: Awakening Of The Anima/Animus Report</strong></li>
                      <div class="indent">Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</div>
                      <li><strong>GOLD SPECIAL #2: Stages Of Life Report</strong></li>
                      <div class="indent">Intimate insights into your personal transitions throughout the progressive phases of your growth to amplify the effects of individuation</div>
                      <li><strong>GOLD SPECIAL #3: Moon Manifestation Rituals</strong></li>
                      <div class="indent">A complete guide to creating your own manifesting rituals during a full and new moon</div>
                      <li><strong>GOLD SPECIAL #4: Soul Seeker's Guide To Dreams</strong></li>
                      <div class="indent">A journey of self-discovery through the 8 secret types of dreams and over 60 dream symbol interpretations</div>
                      <li><strong>GOLD SPECIAL #5: Crystal and Chakra Synthesis</strong></li>
                      <div class="indent">Discover how this secret connection can be the tipping point of your spiritual growth and energy alignment</div>
                      <li><strong>GOLD SPECIAL #6: True Self Anchoring</strong></li>
                      <div class="indent">A powerful guide to finding, becoming, and strenghtening your most authentic self to create everlasting purpose and abundance</div>
                      <li><strong>GOLD SPECIAL #7: Positive Energy Surge</strong></li>
                      <div class="indent">Unearth hidden ideas to attract, harness and translate positive energy into abundance, purpose, and happiness</div>
                    </ul>
-->
              </div>
            </div>
            <div id="silver" style="display: none;padding-bottom: 10px;">
              <div class="bonus-list">
                <h2 class="text-center"><span class="silver">Silver</span> Analysis</h2>
                <div class="row">
                  <div class="col-6">
                    <div class="bonus-tile">
                      <p><strong>SILVER SPECIAL #1: Active Imagination Guide</strong></p>
                      <p>Enhance your archetypal integration efforts by tapping into the proven psychological exercises of "active imagination".</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>SILVER SPECIAL #2: Dream Analysis Guide</strong></p>
                      <p>Become a master of your intuition by deconstructing your dreams to reveal your "inner voice".</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>SILVER SPECIAL #3: Exploring Your Birthdate With The Chinese Zodiac</strong></p>
                      <p>Understand the Eastern influences on predictions and learn how you can apply them to harness yin and yang energies, all based on your personalized Chinese Zodiac.</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>SILVER SPECIAL #4: Discovering Your Aura</strong></p>
                      <p>Learn how you can instantly identify and interpret different auras of different individuals to gain maximum influence over others.</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="bonus-tile">
                      <p><strong>SILVER SPECIAL #5: Feng Shui Paradigm Guide</strong></p>
                      <p>Maximise the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui.</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>SILVER SPECIAL #6: Awakening Of The Anima/Animus Report</strong></p>
                      <p>Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>SILVER SPECIAL #7: Stages Of Life Report</strong></p>
                      <p>Intimate insights into your personal transitions throughout the progressive phases of your growth to amplify the effects of individuation</p>
                    </div>
                  </div>
                </div>
              </div>

              <!--
                    <img class="width80" src="https://individualogist.com/offer/paa/img/paav2-silver-small.png">
                    <ul class="tick-list text-left small">
                      <li>Premium Archetypal Analysis</li>
                      <li>5 Additional Bonuses <strong>+ 2 Special Reports</strong></li>
                      <li>60 Day Satisfaction Guarantee</li>
                      <li><strong>SILVER SPECIAL #1: Awakening Of The Anima/Animus Report</strong></li>
                      <div class="indent">Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</div>
                      <li><strong>SILVER SPECIAL #2: Stages Of Life Report</strong></li>
                      <div class="indent">Intimate insights into your personal transitions throughout the progressive phases of your growth to amplify the effects of individuation</div>
                    </ul>
-->
            </div>
            <div id="standard" style="display: none;padding-bottom: 10px;">
              <div class="bonus-list">
                <h2 class="text-center">Standard Edition</h2>
                <div class="row">
                  <div class="col-6">
                    <div class="bonus-tile">
                      <p><strong>Standard Bonus #1: Active Imagination Guide</strong></p>
                      <p>Enhance your archetypal integration efforts by tapping into the proven psychological exercises of "active imagination".</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>Standard Bonus #2: Dream Analysis Guide</strong></p>
                      <p>Become a master of your intuition by deconstructing your dreams to reveal your "inner voice".</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>Standard Bonus #3: Exploring Your Birthdate With The Chinese Zodiac</strong></p>
                      <p>Understand the Eastern influences on predictions and learn how you can apply them to harness yin and yang energies, all based on your personalized Chinese Zodiac.</p>
                    </div>
                  </div>
                  <div class="col-6">
                    <div class="bonus-tile">
                      <p><strong>Standard Bonus #4: Discovering Your Aura</strong></p>
                      <p>Learn how you can instantly identify and interpret different auras of different individuals to gain maximum influence over others.</p>
                    </div>
                    <div class="bonus-tile">
                      <p><strong>Standard Bonus #5: Feng Shui Paradigm Guide</strong></p>
                      <p>Maximise the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui.</p>
                    </div>
                  </div>
                </div>
              </div>

              <!--
                    <img class="width80" src="https://individualogist.com/offer/paa/img/paav2-standard-small.png">
                    <ul class="tick-list text-left small">
                      <li>Premium Archetypal Analysis</li>
                      <li>5 Additional Bonuses</li>
                      <li>60 Day Satisfaction Guarantee</li>
                    </ul>
-->
            </div>
            <div class="customize_div"><label class="w-checkbox checkbox-field"><input type="checkbox" id="checkbox-1" name="checkbox-1" data-name="Checkbox 1" class="w-checkbox-input"><span class="checkbox-label w-form-label">Yes, I want to add<strong class="bold-checkbox-text"> Same Day Delivery</strong> and receive my analysis on the same day for only $9.90</span></label>
              <div class="option-price">
                <div class="current-price">$9.90</div>
              </div>
            </div>
            <!-- <div class="customize_block">
                  <div class="form-block w-form">
                    <form id="email-form" name="email-form" data-name="Email Form">
                      <div class="customize_div"><label class="w-checkbox checkbox-field"><input type="checkbox" id="checkbox-1" name="checkbox-1" data-name="Checkbox 1" class="w-checkbox-input"><span class="checkbox-label w-form-label"><strong class="bold-checkbox-text">Yes, I'd like to include my Awakening Of The Anima/Animus Report</strong> for only $19.90 right now! (Popular Upgrade)</span></label>
                        <div class="option-price">
                          <div class="current-price">$19.90</div>
                        </div>
                      </div>
                    </form>
                    <div class="w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                      <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                  </div>
                </div> -->
            <!-- <div class="customize_block">
                  <div class="form-block w-form">
                    <form id="email-form" name="email-form" data-name="Email Form">
                      <div class="customize_div"><label class="w-checkbox checkbox-field"><input type="checkbox" id="checkbox-2" name="checkbox-2" data-name="Checkbox 2" class="w-checkbox-input"><span class="checkbox-label w-form-label"><strong class="bold-checkbox-text">Yes, please include my Stages Of Life Report</strong> for only $19.90 right now!</span></label>
                        <div class="option-price">
                          <div class="current-price">$19.90</div>
                        </div>
                      </div>
                    </form>
                    <div class="w-form-done">
                      <div>Thank you! Your submission has been received!</div>
                    </div>
                    <div class="w-form-fail">
                      <div>Oops! Something went wrong while submitting the form.</div>
                    </div>
                  </div>
                </div> -->
            <!--<div class="customize_block" id="selected_items">here id is just used for showing cart/selected items
                <div class="form-block w-form">
                  <form id="email-form" name="email-form" data-name="Email Form">
                      <div class="customize_div"><label class="w-checkbox checkbox-field"><input type="checkbox" id="checkbox-3" name="checkbox-3" data-name="Checkbox 3" class="w-checkbox-input"><span class="checkbox-label w-form-label"><strong class="bold-checkbox-text">Yes Aiden, I'd like to add the Pinnacle Period Audiobook for $14.</strong> This audiobook will be the perfect companion especially if you're a busy reader to have enough time to sit down and read the eBook.</span></label>
                        <div class="option-price">
                          <div class="current-price">$14</div>
                        </div>
                      </div>
                    </form>
                  <div class="w-form-done">
                    <div>Thank you! Your submission has been received!</div>
                  </div>
                  <div class="w-form-fail">
                    <div>Oops! Something went wrong while submitting the form.</div>
                  </div>
                </div>
              </div> -->
            <a href="http://individua1.pay.clickbank.net?cbitems=paav2-gold-delay.1_q&cbskin=30165&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbfid=<?php echo $cbfid; ?>" class="form_btn w-button" id="payment_url">Complete My Request</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

</body>
<script type="text/javascript">
  ! function(o, c) {
    var n = c.documentElement,
      t = " w-mod-";
    n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
  }(window, document);
</script>
<script>
  function makeMeTwoDigits(n) {
    return (n < 10 ? "0" : "") + n;
  }

  var oldDateObj = new Date();
  var newDateObj = new Date();
  newDateObj.setTime(oldDateObj.getTime() - (20 * 60 * 1000));
  var countDownDate1 = new Date(newDateObj).getTime();
  var now1 = new Date(oldDateObj).getTime();
  // Set the date we're counting down to
  var countDownDate = new Date().getTime() + (20 * 60 * 1000);
  // Update the count down every 1 second
  var x = setInterval(function() {
    // Get today's date and time
    var now = new Date().getTime();
    // Find the distance between now and the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = makeMeTwoDigits(minutes) + ": " + makeMeTwoDigits(seconds);
    // If the count down is finished, write some text
    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = "00:00";
    }
  }, 1000);
</script>
<script>
  $(document).ready(function() {
    $('.radio-button').click(function() {
      //scroll to step 2
      var scrollPos = $("#step2").offset().top;
      $(window).scrollTop(scrollPos);
      //store current href value in variable
      var href = $('#payment_url').attr("href");

      if ($('#radio').is(':checked')) {
        //code is to update the product id         
        if (href.indexOf("=paav2-delay.1_q&cbskin=30163") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-delay.1_q&cbskin=30163', 'paav2-gold-delay.1_q&cbskin=30165'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        } else if (href.indexOf("=paav2-silver-delay.1_q&cbskin=30164") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-silver.1&cbskin=30164', 'paav2-gold-delay.1_q&cbskin=30165'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        } else if (href.indexOf("=paav2-gold-delay.1_q&cbskin=30165")) {
          href = href.replace('paav2-gold-delay.1_q&cbskin=30165', 'paav2-gold-delay.1_q&cbskin=30165'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        }

        // if express already checked
        if (href.indexOf("=paav2-delay.1_paav2-express.1&cbskin=30163") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-delay.1_paav2-express.1&cbskin=30163', 'paav2-gold-delay.1_paav2-express.1&cbskin=30165'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        } else if (href.indexOf("=paav2-silver-delay.1_paav2-express.1&cbskin=30164") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-silver.1&cbskin=30164', 'paav2-gold-delay.1_paav2-express.1&cbskin=30165'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        } else if (href.indexOf("=paav2-gold-delay.1_paav2-express.1&cbskin=30165")) {
          href = href.replace('paav2-gold-delay.1_paav2-express.1&cbskin=30165', 'paav2-gold-delay.1_paav2-express.1&cbskin=30165'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        }

        // review section
        $('#gold').show();
        $('#silver').hide();
        $('#standard').hide();

        savedHref = href

      }
      if ($('#radio-2').is(':checked')) {
        //alert("2 it's checked"); 
        //code is to update the product id       
        if (href.indexOf("=paav2-gold-delay.1_q&cbskin=30165") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-gold-delay.1_q&cbskin=30165', 'paav2-silver-delay.1_q&cbskin=30164'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        } else if (href.indexOf("=paav2-delay.1_q&cbskin=30163") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-delay.1_q&cbskin=30163', 'paav2-silver-delay.1_q&cbskin=30164'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        }

        // if express already checked
        if (href.indexOf("=paav2-gold-delay.1_paav2-express.1&cbskin=30165") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-gold-delay.1_paav2-express.1&cbskin=30165', 'paav2-silver-delay.1_paav2-express.1&cbskin=30164'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        } else if (href.indexOf("=paav2-delay.1_paav2-express.1&cbskin=30163") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-delay.1_paav2-express.1&cbskin=30163', 'paav2-silver-delay.1_paav2-express.1&cbskin=30164'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        }

        // review section
        $('#silver').show();
        $('#gold').hide();
        $('#standard').hide();

        savedHref = href

      }
      if ($('#radio-3').is(':checked')) {
        //alert("3 it's checked"); 
        //code is to update the product id 
        if (href.indexOf("=paav2-gold-delay.1_q&cbskin=30165") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-gold-delay.1_q&cbskin=30165', 'paav2-delay.1_q&cbskin=30163'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        } else if (href.indexOf("=paav2-silver-delay.1_q&cbskin=30164") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-silver-delay.1_q&cbskin=30164', 'paav2-delay.1_q&cbskin=30163'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        }

        // if express already checked
        if (href.indexOf("=paav2-gold-delay.1_paav2-express.1&cbskin=30165") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-gold-delay.1_paav2-express.1&cbskin=30165', 'paav2-delay.1_paav2-express.1&cbskin=30163'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        } else if (href.indexOf("=paav2-silver-delay.1_paav2-express.1&cbskin=30164") > -1) { //search orderbump value from payment url
          href = href.replace('paav2-silver-delay.1_paav2-express.1&cbskin=30164', 'paav2-delay.1_paav2-express.1&cbskin=30163'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        }

        // review section
        $('#standard').show();
        $('#silver').hide();
        $('#gold').hide();

        savedHref = href
      }
    });

    $('#checkbox-1').click(function() {
      var href = $('#payment_url').attr("href");
      if ($('#checkbox-1').is(':checked')) {
        if (href.indexOf("_q") > -1) { //search orderbump value from payment url
          href = href.replace('_q', '_paav2-express.1'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        }
      } else if ($('#checkbox-1').is(":not(:checked)")) {
        if (href.indexOf("_paav2-express.1") > -1) { //search orderbump value from payment url
          href = href.replace('_paav2-express.1', '_q'); //remove searched value from URL
          $('#payment_url').attr("href", href);
        }
      }
    });
    // $('#checkbox-2').click(function() {
    //   var href = $('#payment_url').attr("href");
    //   if ($('#checkbox-2').is(':checked')) {
    //     $('#payment_url').attr("href", href + '_sol-bump.1'); //this will append an order-bump product
    //   } else if ($('#checkbox-2').is(":not(:checked)")) {
    //     if (href.indexOf("_sol-bump.1") > -1) { //search orderbump value from payment url
    //       href = href.replace('_sol-bump.1', ''); //remove searched value from URL
    //       $('#payment_url').attr("href", href);
    //     }
    //   }
    // });

  });
</script>
<?php include '../../../inc/footer.php'; ?>