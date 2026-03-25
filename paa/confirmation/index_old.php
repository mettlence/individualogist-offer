<?php
$PageTitle = "Individualogist.com | Request Confirmation";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
$archetype = $_GET['archetype'];
$name = $_GET['name'];
$email = $_GET['email'];
$vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
?>

<style>
  #main {
    z-index: 1 !important;
  }

  #ouibounce-modal .modal-footer {
    border: none
  }

  #ouibounce-modal {
    z-index: 2;
  }

  #ouibounce-modal .modal {
    display: block;
  }

  #ouibounce-modal h3 {
    font-size: 2em;

  }

  #activateDisc {
    width: 80%;
    display: block;
    margin: 0 auto;
    font-size: 1.5em;
    padding: .5em;
    background: purple;
    color: #fff;
    border: none;
    box-shadow: 0 10px 10px #00000030;
    border-radius: 20px;
    font-family: 'Raleway', sans-serif;
    cursor: pointer;
  }

  #activateDisc:hover {
    transition: 0.4s;
    -webkit-transition: 0.4s;
    background: goldenrod;
  }

  .discount {
    font-size: 20px;
    margin-top: 0;
    line-height: 1;
    background: red;
    font-weight: 700;
    padding: .5em;
    color: #fff;
  }

  .width80 {
    display: block;
    max-width: 600px
  }

  .cta-button {
    box-shadow: 0 15px 30px rgba(0, 0, 0, .15);
    display: block;
  }

  .cta-button:hover {
    color: #fff !important;
    text-decoration: none !important;
    background: purple;
    transition: .4s;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .15)
  }

  #archetype {
    padding: 1em;
    display: block;
    font-size: 1.2em;
    position: relative;
    margin: 1em auto;
    background: #8429c2;
    font-weight: 700;
    color: #fff;
    box-shadow: 0 19px 38px rgba(0, 0, 0, 0.10), 0 15px 12px rgba(0, 0, 0, 0.02);
    height: 50px;
    border: none;
    width: 100%;
    max-width: 380px;
    font-family: 'Raleway', sans-serif;
    cursor: pointer;
    border-radius: .5em
  }

  #archetype:hover {
    transition: .4s;
    -webkit-transition: .4s;
    background: #a233ed;
    transform: scale(1.05)
  }

  h5 {
    font-family: 'Raleway', sans-serif;
    font-weight: 700
  }

  .congrats {
    color: #8429c2
  }

  .testimonial-name {
    background: #8429c2
  }

  .indi-logo {
    filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, .3));
  }

  #checkout-wrapper {
    padding-top: 1.5em;
    padding-bottom: 1.5em
  }

  .footer {
    box-shadow: -10px 0 15px rgba(0, 0, 0, .5);
    border-top: 3px solid #8429c2;
  }

  @media only screen and (max-width:768px) {
    #checkout-wrapper {
      padding-top: 0;
      padding-bottom: 0;
    }

    #archetype {
      height: 60px;
      font-size: 1em
    }

    #main {
      border-radius: 0
    }
  }
</style>

<div id="checkout-wrapper">
  <header id="checkout-header" class="header clearfix">
  </header>

  <div class="container" id="main">
    <div class="row mx-auto">
      <div class="col-sm-4 mx-auto">
        <div class="indi-logo">
          <img src="../img/individualogist-logo2.png">
        </div>
      </div>
    </div>
    <div class="row mx-auto">
      <div class="col-sm-12 text-center">
        <h2 class="congrats">At Last! You're Only ONE STEP AWAY From Experiencing Your Complete Transformation.</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <ul class="tick-list text-left">
          <li><strong>YES! I'm Ready To Receive...</strong></li>
          <li><strong>My Personalized Premium Archetypal Analysis,</strong> which I will use to uncover the deepest intricacies of my personality and archetype. I will receive my analysis and everything that comes with it securely via e-mail in digital format within the next 24 hours.</li>
          <li><strong>60 Day Money Back Guarantee</strong>, which will ensure my complete satisfaction and safeguard my experience.</li>
          <li><strong>5 Additional Bonus eBooks</strong>, which will enhance my journey of self-discovery with newfound spiritual knowledge!</li>
          <div class="indent"><strong>Bonus #1:</strong> Discovering Your Aura & What It Says About You<br></div>
          <div class="indent"><strong>Bonus #2:</strong> Beginner's Guide To The Feng Shui Paradigm<br></div>
          <div class="indent"><strong>Bonus #3:</strong> Exploring Your Birthdate With The Chinese Zodiac</div>
          <div class="indent"><strong>Bonus #4:</strong> Dream Analysis Guide</div>
          <div class="indent"><strong>Bonus #5:</strong> Active Imagination Guide</div>
        </ul>
      </div>
      <div class="col-sm-6">
        <img class="width100 mt-3 mb-3" src="https://individualogist.com/offer/assets/img/paav2-cover.png">
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 guarantee-text">
        <h5>Satisfaction Guarantee</h5>
        <p>You will witness some of the most revealing information about yourself. If you have any questions about your analysis, simply drop us an e-mail at contact@individualogist.com and you'll hear back from us by the next working day!</p>
        <h5>Transformation Guarantee</h5>
        <p>This is your gateway to encountering a true transformation - becoming better, stronger, and more aware of your true purpose. If you do not experience any transformation whatsoever, get in touch with us and we'll give you all the help and support you need.</p>
        <h5>Support Guarantee</h5>
        <p>Unlike other programs, you have COMPLETE, 100% support from our team of reliable, customer support staff. Your questions will be answered over the phone, live chat, or email. You WILL ALWAYS have someone to help you. And you will NOT go through this alone!</p>
      </div>
      <div class="col-sm-6 testimonial-text">
        <div class="testimonial-item">
          <div class="shadow-effect">
            <img class="img-circle" src="../paa/img/janice-hickey.png" alt="">
            <p>"I was skeptical at first but as I began reading I was convinced of the power and precision of the information given. I am now a confirmed student of this process and recommend it to any other seeker of truth on this pathway."</p>
          </div>
          <div class="testimonial-name">
            Janice Hickey
            <br>
            Retired Teacher, Lover Archetype
          </div>
        </div>
        <div class="testimonial-item">
          <div class="shadow-effect">
            <img class="img-circle" src="../paa/img/bryan-smith.png" alt="">
            <p>"This product is amazing. I was very skepitical at first but as time went along, more and more seemed to come true. Plus, it was filled with so much relevant informnation, it made it very easy to follow and recognize the signs and traits that were placed in front of me."</p>
          </div>
          <div class="testimonial-name">
            Bryan Smith
            <br>
            City Inspector, Ruler Archetype
          </div>
        </div>
      </div>
    </div>
    <div class="row" id="paa-select">
      <div class="col-sm-8 mx-auto mb-3">
        <select id="archetype">
          <option value="" selected disabled hidden>Please Select Your Archetype</option>
          <option value="caregiver">Caregiver</option>
          <option value="creator">Creator</option>
          <option value="explorer">Explorer</option>
          <option value="hero">Hero</option>
          <option value="innocent">Innocent</option>
          <option value="jester">Jester</option>
          <option value="lover">Lover</option>
          <option value="magician">Magician</option>
          <option value="member">Member</option>
          <option value="outlaw">Outlaw</option>
          <option value="ruler">Ruler</option>
          <option value="sage">Sage</option>
        </select>
        <a class="cta-button" id='normal' href="" style="display: none">Proceed To Checkout</a>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  function getCookie(cname) {
    var name = cname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for (var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }
  $('#archetype').on('change', function() {
    var currentUrl = new URL(window.location.href);
    var name = currentUrl.searchParams.get('name') != undefined ? currentUrl.searchParams.get('name') : '';
    var email = currentUrl.searchParams.get('email') != undefined ? currentUrl.searchParams.get('email') : '';
    var vtid = currentUrl.searchParams.get('utm_content') != undefined ? currentUrl.searchParams.get('utm_content') : '';
    var archetype = $('#archetype').val();

    var cbfid = '';

    //cbfid based on archetype
    if (archetype == 'creator') {
      cbfid = 27121;
    } else if (archetype == 'explorer') {
      cbfid = 28787;
    } else if (archetype == 'hero') {
      cbfid = 28788;
    } else if (archetype == 'innocent') {
      cbfid = 28789;
    } else if (archetype == 'jester') {
      cbfid = 28790;
    } else if (archetype == 'lover') {
      cbfid = 28791;
    } else if (archetype == 'magician') {
      cbfid = 28792;
    } else if (archetype == 'member') {
      cbfid = 28793;
    } else if (archetype == 'outlaw') {
      cbfid = 28794;
    } else if (archetype == 'ruler') {
      cbfid = 28795;
    } else if (archetype == 'sage') {
      cbfid = 30514;
    } else {
      cbfid = 28769; // caregiver
    }

    var url = "http://paa-" + archetype.substring(0, 3) + ".individua1.pay.clickbank.net/?cbfid=" + cbfid + "&cbskin=28270&cbtimer=68&cbexit=194&name=" + name + "&email=" + email + "&vtid=" + vtid;
    $('#archetype').hide();
    //$('.cta-button').css('display', 'block');
    $('.cta-button').fadeIn(100);
    $('#discount').attr('href', url + "&coupon=DAR20")
    $('#normal').attr('href', url);
  });

  // var identifier = getCookie('logic_id');
  // var withIdentifier = $('a#discount').attr('href') + '&identifier=' + identifier;
  // $('a#discount').attr('href', withIdentifier);
  // var withIdentifier2 = $('a#normal').attr('href') + '&identifier=' + identifier;
  // $('a#normal').attr('href', withIdentifier2);
</script>
<script>
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s);
    js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=684741361710802&autoLogAppEvents=1';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
</script>

<?php
include '../assets/inc/save.php';
?>

<?php
echo '<script>(function(d,a){function c(){var b=d.createElement("script");b.async=!0;b.type="text/javascript";b.src=a._settings.messengerUrl;b.crossOrigin="anonymous";var c=d.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}window.kayako=a;a.readyQueue=[];a.newEmbedCode=!0;a.ready=function(b){a.readyQueue.push(b)};a._settings={apiUrl:"https://individualogist.kayako.com/api/v1",messengerUrl:"https://individualogist.kayakocdn.com/messenger",realtimeUrl:"wss://kre.kayako.net/socket"};window.attachEvent?window.attachEvent("onload",c):window.addEventListener("load",c,!1)})(document,window.kayako||{});</script>';
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer-frontend.php');
include_once($path);
?>