<?php
$PageTitle = "Individualogist.com | Request Confirmation Elemental Paradigm";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
$element = $_GET['element'];
$name = $_GET['name'];
$email = $_GET['email'];
$vtid = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>
<style>
    .fb-header {
        color: #222 !important;
    }
</style>

<div id="checkout-wrapper">
    <header id="checkout-header" class="header clearfix">
    </header>

    <div class="container" id="main">
        <div class="row mx-auto">
            <div class="col-sm-12 text-center">
                <h2 class="congrats">Congratulations, <?php echo $name;?>! You're Just ONE STEP AWAY From Attaining ABUNDANCE With Your Element!</h2>
            </div>        
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ul class="tick-list text-left">
                    <li><strong>YES! I'm Ready To Experience ALL Of This...</strong></li>
                    <li><strong>My Personalized Elemental Paradigm Report,</strong> will grant me sacred insights into the journey, path, traits, and attributes of my Element. I will receive my report and everything that comes with it securely via e-mail in digital format within the next 24 hours.</li>
                    <li><strong>60 Day Money Back Guarantee</strong>, which will ensure my complete satisfaction and safeguard my experience.</li>
                </ul>
            </div>
            <div class="col-sm-6">
                <?php
                switch (strtolower($element)){
                case "air":
                    echo "<img class='width50' src='../../assets/img/ep-product-air.png'>";
                    break;
                case "earth":
                    echo "<img class='width50' src='../../assets/img/ep-product-earth.png'>";
                    break;
                case "fire":
                    echo "<img class='width50' src='../../assets/img/ep-product-fire.png'>";
                    break;
                case "water":
                    echo "<img class='width50' src='../../assets/img/ep-product-water.png'>";
                    break;
                default: 
                    echo "<img class='width50' src='../../assets/img/ep-product-air.png'>";
                };
                ?>
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
                        <img class="img-circle" src="../../paa/img/janice-hickey.png" alt="">
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
                        <img class="img-circle" src="../../paa/img/bryan-smith.png" alt="">
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
                <h2 class="congrats">Begin Your Self-Discovery Journey By Selecting One Of The Packages Below!</h2>
            </div>
            <div class="col-cs-4 paa-select">
                <h4>
                    Standard Edition
                    <br>
                    (<?php echo $element;?> ELEMENT)
                </h4>
                
                <?php
                switch (strtolower($element)){
                case "air":
                    echo "<img class='width50' src='../../assets/img/ep-product-air.png'>";
                    break;
                case "earth":
                    echo "<img class='width50' src='../../assets/img/ep-product-earth.png'>";
                    break;
                case "fire":
                    echo "<img class='width50' src='../../assets/img/ep-product-fire.png'>";
                    break;
                case "water":
                    echo "<img class='width50' src='../../assets/img/ep-product-water.png'>";
                    break;
                default: 
                    echo "<img class='width50' src='../../assets/img/ep-product-air.png'>";
                };
                ?>
                
                <ul class="tick-list text-left small">
                    <li>My Elemental Paradigm Report</li>
                    <li>60 Day Satisfaction Guarantee</li>
                </ul>
                <p class="price">$37 only</p>
                <?php
                switch (strtolower($element)){
                    case "air":
                        echo "<a class='cta-button' href='http://ep-air.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                        break;
                    case "earth":
                        echo "<a class='cta-button' href='http://ep-earth.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                        break;
                    case "fire":
                        echo "<a class='cta-button' href='http://ep-fire.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                        break;
                    case "water":
                        echo "<a class='cta-button' href='http://ep-water.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                        break;
                    default:
                        echo "<a class='cta-button' href='http://ep-air.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                }
                ?>
            </div>
            <div class="col-cs-4 paa-select">
                <h4>
                    <span class="silver">Premium</span> Edition 
                    <br>
                    (<?php echo $element;?> ELEMENT)
                </h4>
                
                <?php
                switch (strtolower($element)){
                case "air":
                    echo "<img class='width100' src='../../assets/img/ep-premium-air.png'>";
                    break;
                case "earth":
                    echo "<img class='width100' src='../../assets/img/ep-premium-earth.png'>";
                    break;
                case "fire":
                    echo "<img class='width100' src='../../assets/img/ep-premium-fire.png'>";
                    break;
                case "water":
                    echo "<img class='width100' src='../../assets/img/ep-premium-water.png'>";
                    break;
                default: 
                    echo "<img class='width100' src='../../assets/img/ep-premium-air.png'>";
                };
                ?>
                
                <ul class="tick-list text-left small">
                    <li>My Elemental Paradigm Report</li>
                    <li>60 Day Satisfaction Guarantee</li>
                    <li><strong>PREMIUM SPECIAL: Elemental Quests Guide</strong></li>
                     <div class="indent">
                         A complete 30-day elemental exercise and reading guide that will usher you through this rewarding journey towards abundance.
                     </div>
                    <li><strong>PREMIUM Special: Elemental Awakening Audios</strong></li>
                    <div class="indent">
                        Correct your elemental imbalances with this customized set of 6 GUIDED Meditation Audios that have been specifically tailored to your Element.
                    </div>
                </ul>
                <p class="price">$57 only</p>
                <?php
                switch (strtolower($element)){
                    case "air":
                        echo "<a class='cta-button' href='http://ep-air-premium.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                        break;
                    case "earth":
                        echo "<a class='cta-button' href='http://ep-earth-premium.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                        break;
                    case "fire":
                        echo "<a class='cta-button' href='http://ep-fire-premium.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                        break;
                    case "water":
                        echo "<a class='cta-button' href='http://ep-water-premium.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                        break;
                    default:
                        echo "<a class='cta-button' href='http://ep-air-premium.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                }
                ?>
                
            </div>
            <div class="col-cs-4 paa-select pop">
                <p class="value">Most Value!</p>
                <h4>
                    <span class="gold">Master</span> Edition 
                    <br>(ALL ELEMENTS)
                </h4>
                <img class="width100" src="../../assets/img/ep-master.png">
                <ul class="tick-list text-left small">
                    <li><strong>LIFETIME Access To ALL 4 Elemental Paradigms</strong></li>
                    <li>60 Day Satisfaction Guarantee</li>
                    <li><strong>MASTER SPECIAL: Elemental Quests Guides</strong></li>
                     <div class="indent">
                         Access to ALL 4 complete 30-day elemental exercise and reading guides - share them with your closest friends and family!
                     </div>
                    <li><strong>MASTER Special: Elemental Awakening Audios</strong></li>
                    <div class="indent">
                        Access to ALL 4 complete sets of 6 GUIDED Meditation Audios that have been specifically tailored to each Element.
                    </div>
                </ul>
                <p class="price"><span class="strike">$197</span>$97 only</p>
                
                <?php
                    echo "<a class='cta-button' href='http://ep-master.individua1.pay.clickbank.net/?cbfid=31777&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Get Started Now!</a>";
                ?>
            
            </div>
        </div>
</div>
<div class="container">
    <div class="row mt-5">
        <div class="col-sm-12 mx-auto text-center text-light">
            <h2 class="fb-header">Over <span class="fifty">50,000</span> Element Fanatics Trust Our Programs!</h2>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mx-auto fb-wrap text-center mt-5 mb-5">
            <div class="fb-page mx-auto" data-href="https://www.facebook.com/individualogist/" data-tabs="timeline" data-width="550" data-height="200" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/individualogist/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/individualogist/">Individualogist.com</a></blockquote></div>
        </div>
    </div>    
</div>
<div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0&appId=684741361710802&autoLogAppEvents=1';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
<?php 
echo '<script>(function(d,a){function c(){var b=d.createElement("script");b.async=!0;b.type="text/javascript";b.src=a._settings.messengerUrl;b.crossOrigin="anonymous";var c=d.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}window.kayako=a;a.readyQueue=[];a.newEmbedCode=!0;a.ready=function(b){a.readyQueue.push(b)};a._settings={apiUrl:"https://individualogist.kayako.com/api/v1",messengerUrl:"https://individualogist.kayakocdn.com/messenger",realtimeUrl:"wss://kre.kayako.net/socket"};window.attachEvent?window.attachEvent("onload",c):window.addEventListener("load",c,!1)})(document,window.kayako||{});</script>';
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/footer-frontend.php');
include_once($path);
?>