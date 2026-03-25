<?php
$PageTitle = "Individualogist.com | Premium Archetypal Analysis Discount";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/header.php');
include_once($path);
?>
<style>
    h1, h2 {
        font-family: 'Raleway',sans-serif;
        font-weight: 700;
    }
    .activated {
        background: red;
        box-shadow: 0 0 10px #00000050;
        color: #fff;
    }
    .img-paa-gold {
        width: 80%;
        max-width: 400px;
        position: relative;
        display: block;
        margin: 0 auto;
    }
    .text-wrap {
        background: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 5px 10px #00000030;
    }
    .sub-header {
      padding: 5px;
      color: purple;
      font-weight: 700;
      border-radius: 10px;
      text-shadow: 2px 2px 5px #00000050;
    }
    .disc-sub-header {
      padding: 10px;
      margin: 10px 0;
      font-weight: 900;
      color: purple;
      text-shadow: 1px 1px 2px #000;
    }
    .disc-tile {
      padding: 20px;
      box-shadow: 0 10px 10px #00000030;
      border-radius: 10px;
      background: #fff;
      margin-bottom: 10px;
    }
    .col-sm-30 {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 30%;
    flex: 0 0 30%;
    max-width: 30%;
    }
    #clockdiv{
        color: #fff;
        display: inline-block;
        text-align: center;
        font-size: 3em;
        font-weight: 900;
    }

    #clockdiv > div{
        padding: 10px;
        border-radius: 10px;
        background: #222;
        display: inline-block;
        box-shadow: 0 10px 10px #00000050;
    }

    #clockdiv div > span{
        padding: 15px;
        border-radius: 5px;
        background: #333;
        display: inline-block;
        text-shadow: 0 0 10px #fff;
    }

    .smalltext{
        padding-top: 5px;
        font-size: 16px;
    }
    #expired {
        position: fixed;
        display: none;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #fffffff9;
        z-index: 99;
    }
    @media only screen and (max-width: 720px) {
        .col-sm-30 {
          position: relative;
          max-width: 100%;
          width: 100%;
          flex: 0 0 100%;
          min-height: 1px;
          padding-right: 15px;
          padding-left: 15px;
        }
        #clockdiv {
            font-size: 2em;
        }
  }
</style>

<div id="expired">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-center pt-5 mt-5">
                <h1>Sorry...</h1>
                <h2>This Offer Has Expired! To Complete Your Order, Click On The Button Below:</h2>
                <?php
                $name = $_GET['name'];
                $email = $_GET['email'];
                $archetype = $_GET['archetype'];
                echo "<a class='cta-button' href='https://individualogist.com/offer/confirmation/?name=$name&email=$email&archetype=$archetype'>Claim Your Personalized Archetypal Analysis</a>";
                ?>
            </div>
        </div>
    </div>
</div>

<div id="offer" class="sac-container">
        <div class="indi-logo">
            <img src="/clickbank/assets/img/individualogist-logo2.png">
        </div>

<!--
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-center activated">
                <h1><?php echo $_GET['name']; ?>'s 50% Discount</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-center mt-3 mb-3">
                <div id="clockdiv">
                  <div>
                    <span class="hours"></span>
                    <div class="smalltext">Hours</div>
                  </div>
                  <div>
                    <span class="minutes"></span>
                    <div class="smalltext">Minutes</div>
                  </div>
                  <div>
                    <span class="seconds"></span>
                    <div class="smalltext">Seconds</div>
                  </div>
                </div>
            </div>
        </div>
    </div>
-->

    <div class="container">
        <div class="row">
            <div class="col-sm-10 text-center mx-auto">
                <h1>Congratulations, <span class="capitalize"><?php echo $_GET['name']; ?></span>! Your Discount Has Been Unlocked!</h1>
                <h3>Please accept this gift and commence your transformative journey immediately.</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-left text-wrap">
                <p><?php echo $_GET['name'];?>,</p>

                <p>I know how you must be feeling. It’s merely been a few days since you requested your archetype reading. And at this point in time, I understand that there might be uncertainties holding you back. I've spoken volumes about this glorious, period of transformation, but you're not quite sure how to move forward.</p>

                <p>Now, allow me to reveal the truth. Whether you like it or not, this extraordinary period is approaching - one way or another. And to put it bluntly, it's not going to care whether you're ready. I do, however, want you to be prepared for what's about to come, so that you can maximize your potential during this period and experience a complete, and life-changing transformation.</p>

                <p>This is, of course, your one chance to discover what you were truly destined for. And finally, do not allow this chance to slip through your fingers.</p>

                <h2 class="sub-header text-center">Now, Here's Exactly What You're Going To Receive...</h2>

                <p>Upon confirming your request for your Premium Archetypal Analysis, I'll be able to send you all the personalized materials you need to make the most of this extraordinary period. And within these materials, you will find detailed guidance and revealing insights.</p>

                <p>And if you choose to fully utilize these materials during this extraordinary period, there is no doubt that you will attain the financial abundance, intrinsic joy, and purposeful direction you've been seeking.</p>

                <img src="/offer/assets/img/paa-cover-gold.png" class="img-paa-gold">

                <p><strong>Your Special GOLD Offer Will Include:</strong></p>

                <ul class="tick-list">
                    <li>Personalized Premium Archetypal Analysis: <?php echo $archetype; ?> <strong>($97 value)</strong></li>
                    <li>Personalized Awakening of the Anima/Animus Report: <?php echo $arhcetype; ?> <strong>($57 value)</strong></li>
                    <li>Personalized Stages of Life Report: <?php echo $arhcetype; ?> <strong>($47 value)</strong></li>
                    <li>Exploring Your Birthdate With The Chinese Zodiac <strong>($37 value)</strong></li>
                    <li>Discovering Your Aura <strong>($27 value)</strong></li>
                    <li>Beginner's Guide To The Feng Shui Paradigm <strong>($47 value)</strong></li>
                </ul>

                <p>As you've seen before, the original price for this special bundle amounts to $97.</p>

                <p>BUT. For the next 24 hours ONLY, I'm going to offer you an exclusive, one-time deal - by slashing the price in exactly HALF.</p>

                <p>Just like all other programs, your affirmitive decision today will be protected by my 60-day moneyback guarantee. So, if you're not completely satisfied with the Gold Edition of your Premium Archetypal Analysis, simply drop us an e-mail at contact@individualogist.com and we'll issue you a FULL REFUND. No questions asked.</p>

                <p>In fact, you'll even be allowed to KEEP the bonuses, just so you don't walk away from this opportunity empty-handed.</p>

                <p>Remember, the transformation of your <strong>luck, finances, and happiness</strong> all depends on your decision within the next 24 hours. It's time you became captain of your ship, <?php echo $name;?>. Now, click on the button below to proceed to the next step.</p>

                <img src="/offer/assets/img/paa-cover-gold.png" class="img-paa-gold">

                <h2 class="text-center">Only <strike>$97</strike> $48.50 Today</h2>
                <p class="text-center">Less than $8 per transformational material!</p>
                <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
                            switch (strtolower($archetype)){
                                case "caregiver":
                                    echo "<a class='cta-button' id='offer' href='http://paa-car-gold.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "creator":
                                    echo "<a class='cta-button' id='offer' href='http://paa-cre-gold.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "explorer":
                                    echo "<a class='cta-button' id='offer' href='http://paa-exp-gold.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "hero":
                                    echo "<a class='cta-button' id='offer' href='http://paa-her-gold.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "innocent":
                                    echo "<a class='cta-button' id='offer' href='http://paa-inn-gold.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "jester":
                                    echo "<a class='cta-button' id='offer' href='http://paa-jes-gold.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "lover":
                                    echo "<a class='cta-button' id='offer' href='http://paa-lov-gold.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "magician":
                                    echo "<a class='cta-button' id='offer' href='http://paa-mag-gold.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "member":
                                    echo "<a class='cta-button' id='offer' href='http://paa-mem-gold.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "outlaw":
                                    echo "<a class='cta-button' id='offer' href='http://paa-out-gold.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "ruler":
                                    echo "<a class='cta-button' id='offer' href='http://paa-rul-gold.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "sage":
                                    echo "<a class='cta-button' id='offer' href='http://paa-sag-gold.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                default:
                                    echo "<a class='cta-button' id='offer' href='http://paa-car-gold.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                            }
                            ?>
            </div>
        </div>
    </div>

<!--
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <h2 class="disc-sub-header">Now, Here's Exactly What You're Going To Receive...</h2>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col-sm-5 mx-auto">
                <p>Upon confirming your request for your Premium Archetypal Analysis, I'll be able to send you all the personalized materials you need to make the most of this extraordinary period. And within these materials, you will find detailed guidance and revealing insights.</p>
                <p>Here's a complete list of all the materials you're going to receive:</p>
            </div>
            <div class="col-sm-5 mx-auto">
                <img src="/offer/assets/img/paa-cover.png" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-30 mx-auto disc-tile">
                <h4 class="sub-header text-center">Reading #1: The Individuation Fundamentals</h2>
                <ul class="tick-list">
                  <li>The Individuation Fundamentals PDF will tell you more about the individuation journey</li>
                  <li>Introduce to you terminologies that you’ll encounter throughout your rest of the Premium Archetypal Analysis</li>
                  <li>Familiarize you with the Shadow, the Anima/Animus, and other related entities</li>
                </ul>
            </div>
            <div class="col-sm-30 mx-auto disc-tile">
                <h4 class="sub-header text-center">Reading #2: Your Archetypal Incarnations</h2>
                <ul class="tick-list">
                  <li>Introduce you to your sub-archetypes, or incarnations of your dominant archetype</li>
                  <li>Each dominant archetype comprises a number of incarnations that forms its entirety.</li>
                  <li> Learning about your incarnations will reveal some of your thought processes and personality traits.</li>
                </ul>
            </div>
            <div class="col-sm-30 mx-auto disc-tile">
                <h4 class="sub-header text-center">Reading #3: Your Archetypal Profile</h2>
                <ul class="tick-list">
                  <li>Be introduced to your archetype at a more profound level</li>
                  <li>Approach the Archetypal Profile will an open-mind and you will receive the value that you seek</li>
                  <li>Be guided through the archetypal discovery process with utmost intimacy and detail</li>
                </ul>
            </div>
          </div>
          <div class="row mt-5">
              <div class="col-sm-5 mx-auto disc-tile">
                <h4 class="sub-header text-center">Reading #4: Your Archetypal Odyssey</h2>
                <ul class="tick-list">
                  <li>Find the ideal journey that your archetype is meant to embark on</li>
                  <li>Uncover the obstacles that you will potentially face in your immediate future, and avoid them completely</li>
                  <li>Realize the direction that you should be headed towards in order to reach your destiny</li>
                </ul>
              </div>
              <div class="col-sm-5 mx-auto disc-tile">
                <h4 class="sub-header text-center">Reading #5: Your Archetypal Exercise Guide</h2>
                <ul class="tick-list">
                  <li>Translate everything you learned into positive action</li>
                  <li>Engage in a series of exercises that will solidify the knowledge that you have acquired</li>
                  <li>And at last, bring your archetype to consciousness</li>
                </ul>
              </div>
          </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 mx-auto text-center">
                    <h2 class="disc-sub-header">Additional Bonuses For Your Spiritual & Personal Growth.</h2>
                </div>
            </div>
        </div>
        <div class="container">
          <div class="row mx-auto">
            <div class="col-sm-4 mx-auto bonus1">
                    <img src="/offer/paa/img/chinese-zodiac-cover.png">
                    <h2 class="bonus-title">BONUS 1: Exploring Your Birthdate With The Chinese Zodiac</h2>
                    <p>Meet the counterpart of Western astrology – The Chinese Zodiac. Understand the Eastern influences on predictions and learn how you can apply them to predict your own future.</p>
            </div>
            <div class="col-sm-4 mx-auto bonus2">
                     <img src="/offer/paa/img/discovering-aura-cover.png">
                    <h2 class="bonus-title">BONUS 2: Discovering Your Aura</h2>
                    <p>Each individual exudes a certain aura. Learn how you can interpret different auras of different individuals to gain maximum influence over others.</p>
                </div>
            <div class="col-sm-4 mx-auto bonus3">
                    <img src="/offer/paa/img/fengshui-paradigm-cover.png">
                    <h2 class="bonus-title">BONUS 3: Beginner's Guide To The Feng Shui Paradigm</h2>
                    <p>Maximise the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui. This in-depth guide will turn you into a true geomancy master in no time.</p>
            </div>
        </div>
    </div>
-->
<!--
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-left text-wrap">
                <p><?php echo $_GET['name'];?>,</p>

                <p>If you look below now, you'll notice that I'm giving you a massive discount for your Premium Archetypal Analysis. As you already know, this guide typically retails for $37... BUT. Because of how badly I want you to succeed during this period, I'm extending a 20% discount just for YOU. You have an infinite amount of potential waiting to be unleashed.</p>

                <p>As always, you'll be fully covered by my 60-Day 100% Satisfaction Guarantee. If youre not completely satisfied with your Premium Archetypal Analysis, I'll refund your money upon request.</p>

                <p>Now, all you have to do is click on the button below, input your discount code <strong>(PAAGOLD50)</strong>, and immediately I will receive your request for this transformative guide.</p>

                <p>I trust that you will make the right decision.</p>
            </div>
        </div>
    </div>
-->

    <div class="container order-area">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="order-form">
                    <h2 class="order-title">Claim Your 50% Discount For Your GOLD Premium Archetypal Analysis</h2>
                        <table class="order-details">
                            <tbody>
                                <tr class="details">
                                    <td class="right">Name:</td>
                                    <td class="left"><span class="capitalize"><?php echo $_GET['name'];?></span></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Email:</td>
                                    <td class="left"><?php echo $_GET['email'];?></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Archetype:</td>
                                    <td class="left"><span class="capitalize"><?php echo $_GET['archetype'];?></span></td>
                                </tr>
                            </tbody>
                        </table>
                        <!--Dynamic Order Link Specific To Archetype-->
                         <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
                            switch (strtolower($archetype)){
                                case "caregiver":
                                    echo "<a class='cta-button' id='offer' href='http://paa-car-gold.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "creator":
                                    echo "<a class='cta-button' id='offer' href='http://paa-cre-gold.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "explorer":
                                    echo "<a class='cta-button' id='offer' href='http://paa-exp-gold.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "hero":
                                    echo "<a class='cta-button' id='offer' href='http://paa-her-gold.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "innocent":
                                    echo "<a class='cta-button' id='offer' href='http://paa-inn-gold.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "jester":
                                    echo "<a class='cta-button' id='offer' href='http://paa-jes-gold.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "lover":
                                    echo "<a class='cta-button' id='offer' href='http://paa-lov-gold.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "magician":
                                    echo "<a class='cta-button' id='offer' href='http://paa-mag-gold.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "member":
                                    echo "<a class='cta-button' id='offer' href='http://paa-mem-gold.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "outlaw":
                                    echo "<a class='cta-button' id='offer' href='http://paa-out-gold.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "ruler":
                                    echo "<a class='cta-button' id='offer' href='http://paa-rul-gold.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                case "sage":
                                    echo "<a class='cta-button' id='offer' href='http://paa-sag-gold.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                                    break;
                                default:
                                    echo "<a class='cta-button' id='offer' href='http://paa-car-gold.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&coupon=PAAGOLD50&vtid=$vtid'>Claim Your Discounted Premium Archetypal Analysis!</a>";
                            }
                            ?>
                        <div class="order-footer">
                        After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--

<script>
//Set Cookie Function
function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

//Get Cookie Function
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

function getTimeRemaining(endtime) {
  var t = Date.parse(endtime) - Date.parse(new Date());
  var seconds = Math.floor((t / 1000) % 60);
  var minutes = Math.floor((t / 1000 / 60) % 60);
  var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
  return {
    'total': t,
    'hours': hours,
    'minutes': minutes,
    'seconds': seconds
  };
}

function initializeClock(id, endtime) {
  var clock = document.getElementById(id);
  var hoursSpan = clock.querySelector('.hours');
  var minutesSpan = clock.querySelector('.minutes');
  var secondsSpan = clock.querySelector('.seconds');

  function updateClock() {
    var t = getTimeRemaining(endtime);
    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);
  }

  updateClock();
  var timeinterval = setInterval(updateClock, 1000);
}

if(getCookie('myClock')){
  var deadline = getCookie('myClock');
  console.log(deadline);
} else {
  var timeInMinutes = 1440;
  var currentTime = Date.parse(new Date());
  var deadline = new Date(currentTime + timeInMinutes*60*1000);
  setCookie('myClock', deadline, '100');
}

function checkExpiry() {
    var timeNow = Date.parse(new Date());
    var deadlineParse = Date.parse(deadline);
    if (timeNow > deadlineParse) {
        document.getElementById('expired').style.display = 'block';
        document.getElementById('offer').style.display = 'none';
        console.log('Offer has expired!');
    } else {
        console.log('Offer has not yet expired!');
    }
}

initializeClock('clockdiv', deadline);
checkExpiry();
</script>
-->
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
    var withIdentifier = $('a#offer').attr('href') + '&identifier=' + identifier;
    $('a#offer').attr('href', withIdentifier);
</script>
<?php
include($_SERVER['DOCUMENT_ROOT'].'/clickbank/assets/inc/save.php');
?>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/footer-frontend.php');
include_once($path);
?>
