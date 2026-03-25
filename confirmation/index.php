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
    #ouibounce-modal .modal-footer {border:none}
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
    .width80{display:block;max-width:600px}
    .cta-button{box-shadow:0 15px 30px rgba(0,0,0,.15)}
    .cta-button:hover{color:#fff!important;text-decoration:none!important;background:purple;transition:.4s;box-shadow:0 5px 15px rgba(0,0,0,.15)}
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/carlsednaoui/ouibounce/master/test/ouibounce.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.11/ouibounce.min.js"></script>

    <div id="ouibounce-modal">
          <div class="underlay"></div>
            <div class="modal">
                <div class="modal-title">
                    <h3>WAIT, <?php echo $name ;?>! Is It About The Price?</h3>
                </div>

                <div class="modal-body">
                    <p>If it is, I'd like to extend a 20% discount just for you... BUT. You MUST act within the next 5 MINUTES.</p>
                    <p>Once again, this tool will grant you your desires, abundance, and complete transformation.</p>

                    <?php
                        switch (strtolower($archetype)){
                            case "caregiver":
                                echo "<a class='cta-button' id='discount' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "creator":
                                echo "<a class='cta-button' id='discount' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "explorer":
                                echo "<a class='cta-button' id='discount' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "hero":
                                echo "<a class='cta-button' id='discount' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "innocent":
                                echo "<a class='cta-button' id='discount' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "jester":
                                echo "<a class='cta-button' id='discount' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "lover":
                                echo "<a class='cta-button' id='discount' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "magician":
                                echo "<a class='cta-button' id='discount' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "member":
                                echo "<a class='cta-button' id='discount' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "outlaw":
                                echo "<a class='cta-button' id='discount' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "ruler":
                                echo "<a class='cta-button' id='discount' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            case "sage":
                                echo "<a class='cta-button' id='discount' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                                break;
                            default:
                                echo "<a class='cta-button' id='discount' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid&coupon=DAR20'>Yes, Activate My Discount!</a>";
                        }
                        ?>

                </div>

                <div class="modal-footer">
                    <p onclick="document.getElementById('ouibounce-modal').style.display = 'none';">No thanks</p>
                </div>
            </div>
        </div>

        <script>
            var _ouibounce = ouibounce(document.getElementById('ouibounce-modal'),{
                aggressive: true, //Making this true makes ouibounce not to obey "once per visitor" rule
            });
            $('#activateDisc').click(function(){
                $("a.cta-button").each(function() {
                   var $this = $(this);
                   var _href = $this.attr("href");
                   $this.attr("href", _href + '&coupon=dar20');
                });
                $('.price').each(function() {
                    $(this).append("<br><span class='discount'>20% Discount Activated!</span>");
                });
                $('#ouibounce-modal').hide(500);
                $('html, body').animate({
                    scrollTop: ($('#paa-select').offset().top + 300)
                    }, 500);
                });
        </script>

<div id="checkout-wrapper">
    <header id="checkout-header" class="header clearfix">
    </header>

    <div class="container" id="main">
        <div class="row mx-auto">
            <div class="col-sm-12 text-center">
                <h2 class="congrats">At Last, <?php echo $name;?>! You're Only ONE STEP AWAY From Experiencing Your Complete Transformation.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ul class="tick-list text-left">
                    <li><strong>YES! I'm Ready To Experience ALL Of This...</strong></li>
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
                <img class="width100 mt-3 mb-3" src="https://individualogist.com/offer/paa/img/paa-cover.png">
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
            <div class="col-sm-12 text-center">
                <h2 class="congrats">Click On The Button Below To Complete Your Request For Your Premium Archetypal Analysis!</h2>
            </div>
            <div class="col-sm-8 mx-auto mb-3">
                <img class="width80 mx-auto" src="/offer/paa/img/paa-cover.png">
    <?php
    switch (strtolower($archetype)){
        case "caregiver":
            echo "<a class='cta-button' id='normal' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "creator":
            echo "<a class='cta-button' id='normal' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "explorer":
            echo "<a class='cta-button' id='normal' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "hero":
            echo "<a class='cta-button' id='normal' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "innocent":
            echo "<a class='cta-button' id='normal' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "jester":
            echo "<a class='cta-button' id='normal' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "lover":
            echo "<a class='cta-button' id='normal' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "magician":
            echo "<a class='cta-button' id='normal' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "member":
            echo "<a class='cta-button' id='normal' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "outlaw":
            echo "<a class='cta-button' id='normal' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "ruler":
            echo "<a class='cta-button' id='normal' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "sage":
            echo "<a class='cta-button' id='normal' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        default:
            echo "<a class='cta-button' id='normal' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&cbexit=194&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
    }
    ?>
            </div>
        </div>
    </div>

<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12 mx-auto text-center text-dark">
            <h2 class="fb-header">Over <span class="fifty">50,000</span> Individualogist Members Trust Our Programs!</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mx-auto fb-wrap text-center mt-5 mb-5">
            <div class="fb-page mx-auto" data-href="https://www.facebook.com/individualogist/" data-tabs="timeline" data-width="550" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/individualogist/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/individualogist/">Individualogist.com</a></blockquote></div>
        </div>
    </div>
</div>
<div id="fb-root"></div>
<script type="text/javascript">
    function getCookie(cname) {
      var name = cname + "=";
      var decodedCookie = decodeURIComponent(document.cookie);
      var ca = decodedCookie.split(';');
      for(var i = 0; i < ca.length; i++) {
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
    var identifier = getCookie('logic_id');
    var withIdentifier = $('a#discount').attr('href') + '&identifier=' + identifier;
    $('a#discount').attr('href', withIdentifier);
    var withIdentifier2 = $('a#normal').attr('href') + '&identifier=' + identifier;
    $('a#normal').attr('href', withIdentifier2);
</script>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=684741361710802&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<?php
    include '../assets/inc/save.php';
?>

<?php
echo '<script>(function(d,a){function c(){var b=d.createElement("script");b.async=!0;b.type="text/javascript";b.src=a._settings.messengerUrl;b.crossOrigin="anonymous";var c=d.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}window.kayako=a;a.readyQueue=[];a.newEmbedCode=!0;a.ready=function(b){a.readyQueue.push(b)};a._settings={apiUrl:"https://individualogist.kayako.com/api/v1",messengerUrl:"https://individualogist.kayakocdn.com/messenger",realtimeUrl:"wss://kre.kayako.net/socket"};window.attachEvent?window.attachEvent("onload",c):window.addEventListener("load",c,!1)})(document,window.kayako||{});</script>';
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer-frontend.php');
include_once($path);
?>