<?php
$PageTitle = "Individualogist.com | Sacred Archetypal Collection";
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
    .activated {
        background: red;
        box-shadow: 0 0 10px #00000050;
        color: #fff;
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
    @media only screen and max-width(720px) {
      .col-sm-30 {
      position: relative;
      width: 100%;
      min-height: 1px;
      padding-right: 15px;
      padding-left: 15px;
    }
    #clockdiv{
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
                echo "<a class='cta-button' href='https://individualogist.com/offer/sac/?name=$name&email=$email&archetype=$archetype'>Claim Your Personalized Sacred Collection</a>";
                ?>
            </div>
        </div>
    </div>
</div>

<div id="offer" class="sac-container">
        <div class="indi-logo">
            <img src="/clickbank/assets/img/individualogist-logo2.png">
        </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-center activated">
                <h1>EXCLUSIVE Discount For <?php echo $_GET['name']; ?> Expires In...</h1>
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

    <div class="container">
        <div class="row">
            <div class="col-sm-10 text-center mx-auto">
                <h1>Congratulations, <span class="capitalize"><?php echo $_GET['name']; ?></span>! An Exclusive Opportunity Awaits You!</h1>
                <h3>Your Archetypal Initation Cycle Awaits Your Urgent Action...</h3>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-left text-wrap">
                <p><?php echo $_GET['name'];?>,</p>
                
                <p>You've already missed out on your Premium Archetypal Analysis... But it's not too late... YET.</p>
                
                <p>By now, you should have already noticed the many peculiarities residing within your archetype - details that you might've missed the first time. It's like re-watching your favourite movie and noticing scenes that you didn't notice before, isn't that right?</p>

                <p>That is the true beauty of archetypes - each time you encounter it, each time you look into it, you notice something different about yourself... Something you would never have known if you did not take that second look.</p>

                <p>Chances are, you must be finding it pretty difficult to ignore your archetype - and that's the beauty of it. Your archetype is now a part of you - begging for your attention. And the sooner you embrace it, the sooner you'll unlock all of the abundance that it holds in store for you.</p>
                
                <p>Your Sacred Archetypal Collection is an incredibly unique tool - one which you can use to reaffirm your archetypal energies. But more importantly, this is a tool of lasting value and permanent effects. Whether it's months, years, or even decades from now, you'll be able to revisit your Sacred Archetypal Collection and gain additional insights, and wisdom.</p>
                
                <p>And I'm prepared to lower the barriers for you once more - so that you can enjoy this amazing tool, at a fraction of the original cost.</p>

                <p>Yours Truly,</p>
                <p>Sharon Faust - The Individualogist Team</p>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <h2 class="disc-sub-header">Now, Here's Exactly What You're Going To Receive...</h2>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col-sm-5 mx-auto">
                <p>Upon confirming your request for your Sacred Archetypal Collection, I'll be able to send you all the personalized materials you need to make the most of this extraordinary period. And within these materials, you will find detailed guidance and revealing insights.</p>
                <p>Here's a complete list of all the materials you're going to receive:</p>
            </div>
            <div class="col-sm-5 mx-auto">
                <img src="/offer/assets/img/sac-cover.png" style="width: 100%;">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto disc-tile">
                <h2 class="sub-header text-center">Reading #1: Archetypal Affirmations Guide</h2>
                <ul class="tick-list">
		   <li>A series of 21 potent affirmations that have been customized to your archetype</li>
		   <li>Each affirmation is to be recited each day for the optimal period of 21 days</li>
		   <li>Affirmitive actions begin with affirmitive thoughts. And affirmitive thoughts, originate from affirmations</li>
		</ul>
      	    </div>
	    <div class="col-sm-5 mx-auto disc-tile">
		<h2 class="sub-header text-center">Reading #2: Archetypal Love Compatibility Guide</h2>
		<ul class="tick-list">
		   <li>A highly detailed guide that determines how you interact with individuals of other archetypes</li>
		   <li>Determines compatibility in love and romance at a fundamental level</li>
		   <li>Gives you the exact confirmation you need to know that you’re with the right person; your perfect partner</li>
		</ul>
	    </div>
	</div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 mx-auto text-left text-wrap">
                <p><?php echo $_GET['name'];?>,</p>

                <p>If you look below now, you'll notice that I'm giving you a massive discount for your Sacred Archetypal Collection. As you already know, this guide typically retails for $17... BUT. Because of how badly I want you to succeed during this period, I'm reducing the price IMMENSELY - just for you, aod for a limited time only. You have an infinite amount of potential waiting to be unleashed.</p>

                <p>In order to active this discount, please click on the button below and you'll be taken to a scure checkout page. The price will be cut in half instantly, and you will at last have everything you need to navigate through this enormous, energetic shift.</p>

                <p>As always, you'll be fully covered by my 60-Day 100% Satisfaction Guarantee. If youre not completely satisfied with your Sacred Archetypal Collection, I'll refund your money upon request.</p>

                <p>Now, all you have to do is click on the button below, and immediately I will receive your request for this transformative guide.</p>

                <p>I trust that you will make the right decision.</p>
            </div>
        </div>
    </div>

    <div class="container order-area">
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="order-form">
                    <h2 class="order-title">Request Your Sacred Archetypal Collection For Just <strike>$17</strike> $9.95! (Exclusive One-Time Discount)</h2>
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
                            switch (strtolower($archetype)){
                                case "caregiver":
                                    echo "<a class='cta-button' href='http://sac-car-d.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "creator":
                                    echo "<a class='cta-button' href='http://sac-cre-d.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "explorer":
                                    echo "<a class='cta-button' href='http://sac-exp-d.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "hero":
                                    echo "<a class='cta-button' href='http://sac-her-d.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "innocent":
                                    echo "<a class='cta-button' href='http://sac-inn-d.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "jester":
                                    echo "<a class='cta-button' href='http://sac-jes-d.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "lover":
                                    echo "<a class='cta-button' href='http://sac-lov-d.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "magician":
                                    echo "<a class='cta-button' href='http://sac-mag-d.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "member":
                                    echo "<a class='cta-button' href='http://sac-mem-d.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "outlaw":
                                    echo "<a class='cta-button' href='http://sac-out-d.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "ruler":
                                    echo "<a class='cta-button' href='http://sac-rul-d.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                case "sage":
                                    echo "<a class='cta-button' href='http://sac-sag-d.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
                                    break;
                                default:
                                    echo "<a class='cta-button' href='http://sac-car-d.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email'>Claim Your Discounted Sacred Archetypal Collection!</a>";
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

if(getCookie('sacClock')){
  var deadline = getCookie('sacClock');
  console.log(deadline);
} else {
  var timeInMinutes = 1440;
  var currentTime = Date.parse(new Date());
  var deadline = new Date(currentTime + timeInMinutes*60*1000);
  setCookie('sacClock', deadline, '100');
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

<?php
include($_SERVER['DOCUMENT_ROOT'].'/clickbank/assets/inc/save.php');
?>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/footer-frontend.php');
include_once($path);
?>
