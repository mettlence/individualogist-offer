<?php
$PageTitle = "Individualogist.com | 11:11 Fire Sale";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
header('Location: https://individualogist.com/offer/expired');
?>
<style>
.sale-text {
    box-shadow: 0 5px 20px rgba(0, 0, 0, 0.2);
    background: #f8f8f8;
    color: #333;
        width: 700px;
    max-width: 100%;
    margin: 1em auto;
    padding: 1em;
    font-size: 1em;
}
.cc-icons {
    width: 100%;
    max-width: 300px;
    margin: 1.5em auto;
}
    p, h3 {
        font-family: 'Raleway', sans-serif;
    }
    .logo {
        max-width: 250px;
        filter: drop-shadow( 1px 1px 1px #000);
        padding: 1em;
        width: 100%;
        margin: 0 auto;
        display: block;
        position: relative;
    }
    .pro-item {
        padding: 1em;
    }
    .atc-button-active {
    background: #30d287;
    font-size: 1.2em;
    color: #fff !important;
    padding: .5em 1em;
    border-radius: 3em;
    transition: .4s;
    text-transform: uppercase;
    letter-spacing: .1em;
    font-weight: 500;
    border: none;
    max-width: 100%;
    box-shadow: 0 5px 10px #00000030;
    width: 300px;
    cursor: pointer;
    }
    .atc-button-active:after {
        font-family: 'FontAwesome';
        content: '\f00c';
        margin: 0 .5em;
    }
    .atc-button {
    cursor: pointer;
    border: none;
    background: #af1aaf;
    font-size: 1.2em;
    color: #fff !important;
    padding: .5em 1em;
    border-radius: 3em;
    text-transform: uppercase;
    letter-spacing: .1em;
    font-weight: 500;
    max-width: 100%;
    box-shadow: 0 5px 10px #00000030;
    width: 300px;
    }
    .atc-button:hover {
        text-decoration: none;
        background: purple;
        transition: .4s;
        box-shadow: 0 10px 10px #00000030;
    }
    .atc-button:after {
        content: '\f217';
        font-family: 'FontAwesome';
        margin: 0 .5em;
    }
    .co-btn {
color: #333 !important;
    font-size: 1.2em;
    text-transform: uppercase;
    font-weight: 700;
    background: #FFEB3B;
    padding: .5em 1em;
    border-radius: 3em;
    box-shadow: 0 10px 20px rgba(0, 0, 0, .2);
    cursor: pointer;
    display: block;
    clear: both;
    width: 500px;
    margin: 0 auto;
    max-width: 100%;
    }
    .co-btn:hover {
transition: .4s;
    box-shadow: 0 0 10px rgba(0, 0, 0, .2);
    }
    .co-btn:after {
        content: '\f09d';
        font-family: 'FontAwesome';
        margin: 0 .5em;
    }
    .pro-left {
        background: linear-gradient(to left, #c2cbde , #eef2f3);
        text-align: center;
        color: #fff;
        text-shadow: 0 0 5px #fff;
        padding: 10px;
    }
    .col-sm-6 {
    min-height: 0;
	}
    .item {
    height: 250px;
    max-width: 100%;
    }
    .pro-right {
        background: #fff;
        color: #222;
        text-align: left;
        padding: 10px;
        border-bottom: 1px solid purple;
    }
    .pro-item p {
        font-size: 1em;
    }
    .sale-header {
        background: #222;
        border-bottom: 3px solid purple;
    }
    .select-area {
        background: linear-gradient(to left, #c2cbde , #eef2f3);
        padding-top: 5em;
        padding-bottom: 5em;
    }
    .bg-gradientblue {
	background: linear-gradient(to left, #c2cbde , #eef2f3);
    }
    .checkout-area {
        padding: 2em;
        background: linear-gradient(to left, #c2cbde , #eef2f3);
    }
    .select-archetype {
    background: #fff;
    color: #b50677;
    width: 400px;
    cursor: pointer;
    height: 50px;
    max-width: 100%;
    border-radius: .5em;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.13);
    border: none;
    font-family: Raleway, sans-serif;
    margin-bottom: 0;
    font-size: 1em;
    padding-left: 1em;
    }
.select-archetype:focus {
    border-color: #563d7c;
    outline: 0;
}
    .step-title {
        text-transform: uppercase;
        font-weight: 700;
        color: #333;
        letter-spacing: .5em;
    }
    .step-label {
        border-bottom: 3px solid #c6007b;
        letter-spacing: .1em;
        color: #c6007b;
        padding: .1em;
    }
    .gradient-text {
        text-transform: uppercase;
        background: linear-gradient(to right, #c6007b 0%, #a524c5 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 5em;
        font-weight: 900;
        font-family: 'Raleway', sans-serif;
        filter: drop-shadow(1px 1px 1px #000);
    }
    .countdown-label {
  font: thin 15px Arial, sans-serif;
	color: #65584c;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
  letter-spacing: 2px;
}
#countdown{
box-shadow: 0 10px 20px rgba(0, 0, 0, 0.13);
width: 240px;
	height: 96px;
	text-align: center;
background: #f1f1f1;

	border-radius: 5px;

	margin: auto;

}



#countdown #tiles{
  color: #fff;
	position: relative;
	z-index: 1;
text-shadow: 1px 1px 0px #ccc;
	display: inline-block;
  font-family: Arial, sans-serif;
	text-align: center;
    border-radius: 5px 5px 0 0;
  font-size: 48px;
  font-weight: thin;
  display: block;
    
}

.color-full {
  background: #53bb74;
}
.color-half {
  background: #ebc85d;
}
.color-empty {
  background: #e5554e;
}

#countdown #tiles > span{
	width: 70px;
	max-width: 70px;

	padding: 18px 0;
	position: relative;
}
.strike-price {
    text-decoration: line-through;
    color: #fff;
    background: red;
    border-radius: 50%;
    padding: .3em;
    font-size: .7em;
}
.sale-sub {
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 300;
    opacity: .5;
}
@media only screen and (max-width: 768px) {
.product-area {
    padding-right: 0;
    padding-left: 0;
}
}
</style>


<div class="container-fluid sale-header">
   <div class="row">
       <div class="col-sm-2 mx-auto">
            <img class="logo" src="/offer/assets/img/individualogist-logo2.png">
       </div>
    </div>
</div>

<div class="container-fluid select-area">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mx-auto text-center mt-5">
            <h1 class="gradient-text">11:11 Fire Sale</h1>
	    <p class="sale-sub">50% Off Everything - 60 Day Moneyback Guarantee - 100% Life Transformation</p>
	    <p class="sale-text">Don't wait till 2019 to tackle your resolutions. Get ahead and start preparing for your most prosperous and abundant year! Grand opportunities await you, my dear. And in light of this auspicious period, Individualogist has extended its FIRST EVER 11:11 sale to celebrate your imminent growth, luck, and happiness.</p>        
            <input type="hidden" id="set-time" value="1440"/>
            <div id="countdown">
              <div id='tiles' class="color-full"></div>
              <div class="countdown-label">Till 11:11 Sale Ends</div>
            </div>
        </div>
        <div class="col-sm-12 mx-auto text-center mt-5">
            <p class="step-title"><span class="step-label">Step 1:</span> Select Your Archetype</p>
            <select class="select-archetype" id='archetype'>
                <option value="car" selected>Caregiver</option>
                <option value="cre">Creator</option>
                <option value="exp">Explorer</option>
                <option value="her">Hero</option>
                <option value="inn">Innocent</option>
                <option value="jes">Jester</option>
                <option value="lov">Lover</option>
                <option value="mag">Magician</option>
                <option value="mem">Member</option>
                <option value="out">Outlaw</option>
                <option value="rul">Ruler</option>
                <option value="sag">Sage</option>
            </select>
            <p><a href="https://individualogist.com/lp/discover" target="_blank" class="small">Don't know what's your archetype? Click here</a></p>
        </div>
    </div>
</div>

<div class="container-fluid product-area">
    <div class="row bg-gradientblue">
        <div class="col-sm-8 mx-auto text-center">
            <p class="step-title"><span class="step-label">Step 2:</span>  Add Programs/Reports To Your Cart</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6 pro-left">
            <div class="pro-item-img">
                <img class="item paa" src="https://individualogist.com/wp-content/themes/indivi-wp/img/paa-pl.png">
            </div>
        </div>
        <div class="col-sm-6 pro-right">
            <div class="pro-item">
                <h3>Premium Archetypal Analysis</h3>
                <!--<span class="price"><p>$37</p></span>-->
		<h4><span class="strike-price">$37</span> $18.50</h4>
                <div class="separator"></div>
                <p>The Premium Archetypal Analysis is a complete, personalized archetypal profile that grants you an enormous amount of insight into your strengths, tendencies, and potential pitfalls. This revealing report will guide you through the Individuation process while embarking on a self-discovery journey.</p>
                <button class="atc-button" id="paa">Add To Cart</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 pro-left">
            <div class="pro-item-img">
                <img class="item sac" src="https://individualogist.com/wp-content/themes/indivi-wp/img/sac-cover.png">
            </div>
        </div>
        <div class="col-sm-6 pro-right">
            <div class="pro-item">
                <h3>Sacred Archetypal Collection</h3>
		<h4><span class="strike-price">$19</span> $8.50</h4>
                <!--<span class="price"><p>$17</p></span>-->
                <div class="separator"></div>
                <p>The Sacred Archetypal Collection is a special package that consists of The Archetypal Love Compatibility Guide, and The Archetypal Affirmations Guide. Your Love Compatibility GUide will help you discover your romantic compatibility with other archetypes, while your Archetypal Affirmations Guide will carry you through a 21-day behavioural altering process by using affirmations that have been tailored specifically to your archetype.</p>
                <button class="atc-button" id="sac">Add To Cart</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 pro-left">
            <div class="pro-item-img">
                <img class="item dys" src="https://individualogist.com/offer/assets/img/dys-cover.png">
            </div>
        </div>
        <div class="col-sm-6 pro-right">
            <div class="pro-item">
                <h3>Diminishing Your Shadow</h3>
		<h4><span class="strike-price">$97</span> $48.50</h4>
                <!--<span class="price"><p>$47</p></span>-->
                <div class="separator"></div>
                <p>The Diminishing Your Shadow Report is an in-depth analysis of your archetype's shadow - the hidden, innate part of your personality where all of your suppressed traits, thoughts, and beliefs are stored. This report simplifies and guides you through the process of encountering, understanding, and controlling your Shadow - an integral part of the Individuation process.</p>
                <button class="atc-button" id="dys">Add To Cart</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 pro-left">
            <div class="pro-item-img">
                <img class="item eote" src="https://individualogist.com/wp-content/themes/indivi-wp/img/eote-pl.png">
            </div>
        </div>
        <div class="col-sm-6 pro-right">
            <div class="pro-item">
                <h3>Supreme Mastery Code: Eclipse Of The Ego</h3>
		<h4><span class="strike-price">$97</span> $48.50</h4>
                <!--<span class="price"><p>$67</p></span>-->
                <div class="separator"></div>
                <p>Within each and every individual, lies the Ego - a veil that separates one from reaching his or her true Self. Our Egos are the only thing that stands between us and greatness. It is a self-imposed limitation that's manifested itself from environmental, social, and external influences. This audio program will take you through the exact ideas, steps, and explanations needed to transcend your Ego and finally become the individual you were meant to be.</p>
                <button class="atc-button" id="eote">Add To Cart</button>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 pro-left">
            <div class="pro-item-img">
                <img class="item tsol" src="https://individualogist.com/wp-content/themes/indivi-wp/img/tsol-pl.png">
            </div>
        </div>
        <div class="col-sm-6 pro-right">
            <div class="pro-item">
                <h3>Tarot Symbols Of Life</h3>
		<h4><span class="strike-price">$67</span> $33.50</h4>
                <!--<span class="price"><p>$37</p></span>-->
                <div class="separator"></div>
                <p>In many ways, Tarot shares similar attributes with archetypes - deriving meanings and interpretations that will guide you through life. The Tarot Symbols Of Life is a full-fledged written program that equips you with the exact tools and knowledge to master the art of Tarot reading. This program is furnished with cheatsheets, step-by-step guides, and comprehensive worksheets to ensure your success with Tarot.</p>
                <button class="atc-button" id="tsol">Add To Cart</button>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid checkout-area">
    <div class="row">
        <div class="col-sm-8 mx-auto text-center">
            <p class="step-title text-dark"><span class="step-label">Step 3:</span> Checkout and make payment</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto text-center">
            <a class="co-btn" id="checkout">Click Here To Proceed To Checkout</a>
	    <img class="cc-icons" src="/offer/assets/img/credit-cards.png">
		<p class="small">Your order will be processed on a secure server.<br>50% discount is already applied with coupon code '1111SALE'.</p>
        </div>
    </div>
</div>
<script type="text/javascript">
    var paa = '';
    var sac = '';
    var dys = '';
    var eote = '';
    var tsol = '';
    var archetype = $('#archetype').val();

      $('#checkout').on('click', function() {
            if(paa == '' && sac == '' && dys == '' && eote == '' && tsol == '' ) {
                alert('Your cart is still empty! Please add an item to your cart before checking out!');
            }else {
                var paymentLink = "http://individua1.pay.clickbank.net/?cbitems=" + paa + sac + dys + eote + tsol + "&coupon=1111SALE&cbskin=22063";

            location.href = paymentLink;
            }
      });

      $('#archetype').on('change', function() {
        archetype = $('#archetype').val();
      });

      $(document).on('click', "#paa", function() {
        paa = 'paa-' + archetype + '.1_';
        $('#paa').attr({
            id: 'paa-active',
            class: 'atc-button-active'
        }).html('Added To Cart');
      }).on('click', "#paa-active", function() {
        paa = '';
        $('#paa-active').attr({
            id: 'paa',
            class: 'atc-button'
        }).html('Add To Cart');
      });

      $(document).on('click', "#sac", function() {
        sac = 'sac-' + archetype + '.1_';
        $('#sac').attr({
            id: 'sac-active',
            class: 'atc-button-active'
        }).html('Added To Cart');
      }).on('click', "#sac-active", function() {
        sac = '';
        $('#sac-active').attr({
            id: 'sac',
            class: 'atc-button'
        }).html('Add To Cart');
      });

      $(document).on('click', "#dys", function() {
        dys = 'dys-' + archetype + '.1_';
        $('#dys').attr({
            id: 'dys-active',
            class: 'atc-button-active'
        }).html('Added To Cart');
      }).on('click', "#dys-active", function() {
        dys = '';
        $('#dys-active').attr({
            id: 'dys',
            class: 'atc-button'
        }).html('Add To Cart');
      });

      $(document).on('click', "#eote", function() {
        eote = 'eote.1_';
        $('#eote').attr({
            id: 'eote-active',
            class: 'atc-button-active'
        }).html('Added To Cart');
      }).on('click', "#eote-active", function() {
        eote = '';
        $('#eote-active').attr({
            id: 'eote',
            class: 'atc-button'
        }).html('Add To Cart');
      });

      $(document).on('click', "#tsol", function() {
        tsol = 'tsol.1_';
        $('#tsol').attr({
            id: 'tsol-active',
            class: 'atc-button-active'
        }).html('Added To Cart');
      }).on('click', "#tsol-active", function() {
        tsol = '';
        $('#tsol-active').attr({
            id: 'tsol',
            class: 'atc-button'
        }).html('Add To Cart');
      });
  </script>

<script>
var minutes = $( '#set-time' ).val();

var target_date = new Date().getTime() + ((minutes * 60 ) * 1000); // set the countdown date
var time_limit = ((minutes * 60 ) * 1000);
//set actual timer
setTimeout(
  function() 
  {
    alert( 'Sale has expired!' );
  }, time_limit );

var days, hours, minutes, seconds; // variables for time units

var countdown = document.getElementById("tiles"); // get tag element

getCountdown();

setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){

	// find the amount of "seconds" between now and target
	var current_date = new Date().getTime();
	var seconds_left = (target_date - current_date) / 1000;
  
if ( seconds_left >= 0 ) {
   if ( (seconds_left * 1000 ) < ( time_limit / 2 ) )  {
     $( '#tiles' ).removeClass('color-full');
     $( '#tiles' ).addClass('color-half');

		} 
    if ( (seconds_left * 1000 ) < ( time_limit / 4 ) )  {
    	$( '#tiles' ).removeClass('color-half');
    	$( '#tiles' ).addClass('color-empty');
    }
  
	days = pad( parseInt(seconds_left / 86400) );
	seconds_left = seconds_left % 86400;
		 
	hours = pad( parseInt(seconds_left / 3600) );
	seconds_left = seconds_left % 3600;
		  
	minutes = pad( parseInt(seconds_left / 60) );
	seconds = pad( parseInt( seconds_left % 60 ) );

	// format countdown string + set tag value
	countdown.innerHTML = "<span>" + hours + ":</span><span>" + minutes + ":</span><span>" + seconds + "</span>"; 
  

  
}
   
  
  
}

function pad(n) {
	return (n < 10 ? '0' : '') + n;
}
</script>
<!--
<div class="container product-list">
    <div class="row">
        <div class="col-sm-4 mx-auto">
            <div class="product-img">
                <img class="w-100" src="https://individualogist.com/wp-content/themes/indivi-wp/img/paa-pl.png">
            </div>
        </div>
        <div class="col-sm-8 mx-auto">
            <div class="product-info">
                <h3 class="product-title">Premium Archetypal Analysis - $18.50</h3>
                <p class="product-desc">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>
                <a class="atc-button">Add To Cart</a>
            </div>
        </div>
    </div>
</div>
-->
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer.php');
include_once($path);
?>
