<?php
$PageTitle = "Individualogist.com | Request Confirmation";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
$archetype = strtolower($_GET['archetype']);
$name = $_GET['name'];
$email = $_GET['email'];
$vtid = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>

<style>
    #main {
        z-index: 1 !important;
    }
    #ouibounce-modal {
        z-index: 2;
    }
    #ouibounce-modal .modal {
        display: block;
        height: 80% !important;
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
    .karmic-pendant {
        width: 100%;
        max-width: 200px;
        filter: drop-shadow(2px 2px 5px #00000050);
        display: block;
        position: relative;
        margin: 1em auto;
    }
    .karmic-title {
        font-weight: 700;
        line-height: 1.5em;
    }
    .paa {
        display: block;
        position: relative;
        margin: 0 auto;
    }
    .congrats {
        color: #a642d6;
        text-shadow: 1px 1px 1px #00000060;
        font-size: 2.5em;
    }
</style>

<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/carlsednaoui/ouibounce/master/test/ouibounce.min.css">
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/ouibounce/0.0.11/ouibounce.min.js"></script>

    <div id="ouibounce-modal">
          <div class="underlay"></div>
            <div class="modal">
                <div class="modal-title">
                    <h3>WAIT, <?php echo $name ;?>! Are You Sure?</h3>
                </div>

                <div class="modal-body">
                    <p>Think about this very carefully, <?php echo $name; ?>. I'd like to remind you that this offer will be taken down within the next 48 hours - depending on when you're seeing this, it might be <strong>much sooner.</strong></p>
                    <p>Don't ponder over this any longer. Opportunities dissipate as fast as they come.</p>
                    <p>So, if you say "Yes" right now, I'll throw in an ADDITIONAL 10% DISCOUNT. All you have to do is click on the button below to claim it!</p>
                    
                    <?php 
                     switch ($archetype) {
                            case "caregiver":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "creator":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=27121&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "explorer":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28787&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "hero": 
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28788&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "innocent":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28789&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "jester":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28790&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "lover":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28791&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "magician":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28792&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "member":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28793&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "outlaw":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28794&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "ruler":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28795&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            case "sage":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=30514&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";
                                break;
                            default:
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid&coupon=PAA10FREE'>Yes! I Want My 10% Discount!</a>";    
                        }
                    ;?>
                        
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
        <div class="row">
            <div class="indi-logo">
                <img src="/offer/assets/img/individualogist-logo2.png">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 mx-auto text-center">
                <h2 class="congrats"><?php echo $name;?>, Claim Your Personalized Premium Archetypal Analysis Now... AND Receive Your <span class="red">FREE</span> Karmic Connection Pendant.</h2>
            </div>        
        </div>
        <div class="row">
            <div class="col-sm-10 mx-auto text-left mb-3">
                <p>Dear <?php echo $name;?>,</p>
                <p>From the beginning of this year, I've spent a great deal of time seeking answers about attracting good karma. You see, karma plays an extensive role religions across the globe - essentially, you receive what you put out into the world.</p>
                <p>The universal truth is that good karma forms the foundation of happiness in relationships, abundance in finances, and overall joy in life.</p>
                <p>So along with your request for your Premium Archetypal Analysis, I also want to send you our <strong>handmade Karmic Connection Pendant.</strong></p>
                <p>This is a tool that you can use to attract abundance, smooth over the potholes during your transformational journey, and of course, enchant your life with good karma.</p>
                <p>Now, I too am actively practicing this. And in an effort to further enhance my Karmic Connection, I want to do something <strong>extremely special</strong> for you, <?php echo $name;?>.</p>
                <p>For a LIMITED time only, I'm including your <strong>Karmic Connection Pendant</strong> with your personalized Premium Archetypal Analysis (Gold Edition).</p>
                <img class="karmic-pendant" src="/offer/assets/img/karmic-pendant.png">
                <p>Yes, that means this <strong>extremely RARE</strong> pendant, which normally costs $49, will be yours, <strong>completely FREE</strong>.</p>
                <p>AND, on top of that, <strong>I'll also be covering the shipping</strong> of your Karmic Connection Pendant. That's right, there are <strong>NO HIDDEN SHIPPING CHARGES.</strong></p>
                <p>Take it as a gesture of appreciation for being a part of our amazing and treasured Individualogist Family. I personally believe in transparency and spreading positivity, which is why this offer is being extended to you.</p>
                <p>And as always, your contribution will be <strong>protected by our 60-day money back guarantee.</strong> So, if you're unhappy with your purchase, all you have to do is get in touch with us and we'll issue you a refund - no questions asked.</p>
                <p>In fact, even if you're NOT SATISFIED, I'll even allow you to <strong>KEEP the pendant</strong> for yourself - as a sign of goodwill, and my personal blessing to you.</p>
                <p>I'm so incredibly excited for you to begin this journey with us, <?php echo $name;?>!</p>
                <p>The tables have turned, and the Universe has aligned itself to present you this <strong>glorious, RISK-FREE opportunity.</strong></p>
                <p>Do bear in mind, this page will only be up for the next 48 HOURS. If you take action IMMEDIATELY, all of these wonderful blessings - your personalized archetypal analysis, your bonuses, and your Karmic Connection Pendant, will all be YOURS.</p>
                <p>So, act quickly and decisively, <?php echo $name; ?>. Because you will never see this offer again.</p>
                <p>As you can tell, I'm ready to offer you the help and guidance you need to experience a true transformation. So...</p>
                <h2 class="text-center">Are you READY to join me on this journey?</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="width80 paa mx-auto" src="/offer/assets/img/paa-cover-gold.png">
            </div>
            <div class="col-sm-6">
                <ul class="tick-list text-left">
                    <li><strong>YES! I'm Ready To Begin My Epic Transformation For Abundance...</strong></li>
                    <li><strong>My Personalized Premium Archetypal Analysis,</strong> which I will use to uncover the deepest intricacies of my personality and archetype. I will receive my analysis and everything that comes with it securely via e-mail in digital format within the next 24 hours.</li>
                    <li><strong>5 Additional Bonuses</strong>, which will enhance my journey of self-discovery with newfound spiritual knowledge!</li>
                    <div class="indent"><strong>Bonus #1:</strong> Discovering Your Aura & What It Says About You<br></div>
                    <div class="indent"><strong>Bonus #2:</strong> Beginner's Guide To The Feng Shui Paradigm<br></div>
                    <div class="indent"><strong>Bonus #3:</strong> Exploring Your Birthdate With The Chinese Zodiac</div>
                    <div class="indent"><strong>Bonus #4:</strong> Awakening of the Anima/Animus Report</div>
                    <div class="indent"><strong>Bonus #5:</strong> Stages of Life Report</div>
                    <li><strong>60 Day Money Back Guarantee</strong>, which will ensure my complete satisfaction and safeguard my experience.</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="karmic-pendant" src="/offer/assets/img/karmic-pendant.png">
            </div>
            <div class="col-sm-6 karmic-text">
                <p class="karmic-title">INCLUDED WITH FREE SHIPPING:<br>RARE Karmic Connection Pendant features the ancient iconic lotus archetype - symbolic of your inner experience of your True Self...</p>
                <ul class="tick-list text-left">
                    <li><strong>100% free shipping</strong> included (straight to your doorstep)</li>
                    <li>Harness the positive energy of an entire Karmic Cycle</li>
                    <li>Become a beacon of strong emotional vibrations</li>
                    <li>Attract karmic energies of clarity you put out to the world</li>
                    <li>Experience effortless abundance</li>
                    <li>Develop inner peace and with your archetypal Self</li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-center mt-3 mb-3">
                <h4><strong>SPECIAL PRICE: <span class="strike">$247</span> $97 ONLY</strong></h4>
                <p>No hidden charges. We pay for your shipping.</p>
                 <?php 
                     switch ($archetype) {
                            case "caregiver":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "creator":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=27121&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "explorer":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28787&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "hero": 
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28788&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "innocent":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28789&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "jester":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28790&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "lover":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28791&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "magician":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28792&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "member":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28793&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "outlaw":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28794&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "ruler":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28795&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            case "sage":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=30514&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";
                                break;
                            default:
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Yes! Give Me My Premium Archetypal Analysis + Karmic Connection Pendant!</a>";    
                        }
                    ;?>
                
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
                        <img class="img-circle" src="/offer/paa/img/janice-hickey.png" alt="">
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
                        <img class="img-circle" src="/offer/paa/img/bryan-smith.png" alt="">
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
        <div class="row">
            <div class="col-sm-10 text-center mx-auto">
                <h2 class="congrats"><strong>CLAIM THIS SPECIAL OFFER NOW:</strong></h2>
                <h4>Receive Your GOLD Premium Archetypal Analysis + 5 Bonuses + Karmic Connection Pendant For <span class="strike">$247</span> <strong>$97 ONLY</strong></h4>
            </div>
            <div class="col-sm-8 mx-auto">
                <img class="width80 paa" src="/offer/assets/img/paa-plus-karma.png">
            </div>
            <div class="col-sm-8 mx-auto text-center">
                
                <?php 
                     switch ($archetype) {
                            case "caregiver":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "creator":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=27121&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "explorer":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28787&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "hero": 
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28788&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "innocent":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28789&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "jester":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28790&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "lover":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28791&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "magician":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28792&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "member":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28793&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "outlaw":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28794&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "ruler":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28795&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            case "sage":
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=30514&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";
                                break;
                            default:
                                echo "<a class='cta-button' href='http://paa-gold-free.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Enter Your Shipping Details and Claim This Exclusive Offer</a>";    
                        }
                    ;?>
                
                <p class="small">Your Karmic Connection Pendant will be shipped to your address. Please allow 20-30 days for delivery.</p>
                <p class="small">Your Premium Archetypal Analysis and 5 bonuses will be delivered to you securely via e-mail. You will be given access to them immediately, so you can begin your transformation journey within seconds after submitting your request.</p>
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
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer-frontend.php');
include_once($path);
?>