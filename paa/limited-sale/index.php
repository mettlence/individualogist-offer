<?php
$PageTitle = "Limited Sale | Individualogist.com";
include ('../inc/header.php');
$name = $_GET['name'];
$email = $_GET['email'];
$archetype = $_GET['archetype']
?>
<script>
//Get Parameters Function
function getParameterByName(name, url) {
     if (!url) url = window.location.href;
     name = name.replace(/[\[\]]/g, "\\$&");
     var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
         results = regex.exec(url);
     if (!results) return null;
     if (!results[2]) return '';
     return decodeURIComponent(results[2].replace(/\+/g, " "));
 }    
    
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

var pName = getParameterByName('name');
var pEmail = getParameterByName('email');
var pArchetype = getParameterByName('archetype');
    
//Set Cookies From Parameters
$(document).ready(function() {
    if(pName != '' || pName != 'null') {
        setCookie('logic_first_name', pName);
    }
    if(pEmail != '' || pEmail != 'null') {
        setCookie('logic_email', pEmail);
    }
    if(pArchetype != '' || pArchetype!= 'null') {
        setCookie('logic_archetype', pArchetype);
    }
})
    
var cName = getCookie('logic_first_name');
var cEmail = getCookie('logic_email');
var cArchetype = getCookie('logic_archetype');
    
$('#archetype').on('change', function() {
    cArchetype = $('#archetype').val();
    $('.paa').show(300);
    $('.payment-options').show(300);
    console.log('archetype selected value is', cArchetype);
});
</script>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<style>
    .cbtb{position: relative;z-index: 1;}
    .payment-options{margin:1em auto}
    .name{text-transform:capitalize}
    .select-archetype{background: #f8f8f8;color: #b50677;width: 400px;cursor: pointer;height: 50px;max-width: 100%;border-radius: .5em;box-shadow: 0 10px 20px rgba(0, 0, 0, 0.13);border: none;font-family: Raleway, sans-serif;margin-bottom: 0;font-size: 1em;padding-left: 1em;}
    .cArchetype {text-transform:uppercase;letter-spacing:3px}
    .cta-button{text-transform: uppercase;letter-spacing: 5px;}
    .paasale-center {width: 100%;position: relative;display: block;margin: 0 auto;border: 3px solid red;padding: 1em;border-radius: 1em;background-color: #000;color: #fff;}
    .sub-header{text-transform: uppercase;letter-spacing: 5px;color: #b91383;font-weight: 700;text-align: center;font-size: 1.5em;box-shadow: none;border: 2px solid #b91383;}
    .separator {max-width: 200px;width: 100%;height: 1px;background: #fff;position: relative;margin: 1em auto;}
    .archetype-reading {max-width:800px;width:100%;}
    .container-fluid {position:relative;overflow:hidden;}
    .paa-items {max-height: 200px;margin: 1em auto;position: relative;display: block;filter: drop-shadow(0 5px 10px rgba(0,0,0,0.3));}
    .overlay{position: absolute;top: 0;right: 0;left: 0;bottom: 0;height: 100%;width: 100%;background: radial-gradient(at center, rgba(0,0,0,0), rgba(0,0,0,0.7));}
    .testimonial p {text-align: center}
    p,ul {font-size: 1em;text-align:justify}
    .headline {font-weight: 900;color: #fff;text-transform: uppercase;text-align: center;letter-spacing: 3px;font-size: 2em;font-family:inherit;text-shadow: 1px 1px #000, 0 0 50px #000;}
    .sub-headline {font-weight: 500;color: #fff;text-transform: uppercase;text-align: center;letter-spacing: 3px;font-size: 1.2em;font-family:inherit;text-shadow: 1px 1px #000, 0 0 50px #000;}
    .p-headline{text-transform: uppercase;letter-spacing: 2px;font-size: 14px !important;}
    .w-100{max-width: 600px;display: block;position: relative;margin: 0 auto;}
    .page-container{background:#222}
    .bg-cosmos {top:0;left:0;right:0;margin:auto;position:absolute;width:100%;height:100%;background: url(../img/bg-cosmos.jpg) no-repeat center center;background-attachment: fixed;background-size: cover;margin-bottom: -30px;}
    .archetype-img img {width:100px;}
    .archetype-img {filter:drop-shadow(0 10px 30px rgba(0,0,0,1))}
    .order-details{    box-shadow: 0 5px 30px rgba(0,0,0,.3);}
    .page-header {padding: 2em 0;font-size:1em;color: #fff;text-shadow: 1px 1px 1px #000;}
    .right{text-shadow:none}
    .img-intext{max-width:400px;-webkit-box-reflect:below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(80%, transparent) , to(rgba(250, 250, 250, 0.3)))}
    .left{margin:0;text-shadow:none}
    ol li:hover,.active {font-weight:700!important;border-radius:20px;color:#fff!important;box-shadow:0 5px 5px rgba(0,0,0,.5);transition:.4s;-webkit-transition:.4s;padding:0 10px;background:none;text-decoration:underline;box-shadow:none !important}
    .archetype-reading{width: 100%;margin: 0 auto;position: relative;box-shadow: 0 0 10px #fff, 0 0 20px #fff;padding: 30px;text-align: left;float: right;clear: inherit;background: #fff;}
    ol li {margin:.5em 0; cursor: pointer;}
    .bonus-items{max-height: 200px;position: relative;margin: 0 auto;display: block;}
    .step-title{color:#8e2ba7;text-transform:uppercase;font-weight:900;letter-spacing:2px}
    .step-title:after{content:' ';display:block;border:1px solid #8e2ba7;width:40%;text-align:left;}
    .step8-title{color:#8e2ba7;text-transform:uppercase;font-weight:900;letter-spacing:2px;text-align:center;margin: 1em auto}
    .step8-title:after{content:' ';display:block;border:1px solid #8e2ba7;width:40%;text-align:center;margin:.5em auto}
    .hover{height:60px;white-space:normal;background: #18c3c3;color: #fff;text-transform: uppercase;font-weight: 900;font-size: 1em;border-bottom:3px solid #31a7a7;border-radius: 5px;box-shadow: 0 5px 15px rgba(0,0,0,.15);}
    .step8-reading{width: 100%;max-width:800px;margin: 0 auto;position: relative;box-shadow: 0 0 10px #fff, 0 0 20px #fff;padding: 30px;text-align: left;clear: inherit;background: #fff;}
    .menu8 {color:#00c7c4;font-weight:700}
    .great-vibes{font-family:'Great Vibes',sans-serif;font-size:24px;font-weight:700}
    .hover:hover{color:#fff;transition:.4s;box-shadow:0 15px 15px rgba(0,0,0,.25);background:#b019d6;bottom: 3px;border-bottom: 3px solid #8a2898;}
    .reading-wrap {max-width: 800px;margin: 0 auto;display: block;}
    .f-right{width:100%;float: right;position:relative}.f-left{border-bottom:3px solid #75c5c5;background:#85dedd;width:100%;float: left;position:relative}
    .f-right:before{content: "\f0da";font-family: FontAwesome;font-style: normal;font-weight: normal;text-decoration: inherit;color: #fff;font-size: 1.2em;padding-right: 1em;position: absolute;top: 16px;right: 0;}
    .f-left:before{content: "\f0d9";font-family: FontAwesome;font-style: normal;font-weight: normal;text-decoration: inherit;color: #fff;font-size: 1.2em;padding-left: 1em;position: absolute;top: 16px;left: 0;}
    .progress-breadcrumb li.active:after,.progress-breadcrumb li.active:before{background-color:#55b776;transition:all .8s}.active:after{content:""!important}.fb-page{filter:drop-shadow(0 0 10px rgba(0, 0, 0, .5));margin:2em auto;max-width:100%;width:500px;display:block;padding:0;position:relative;float:none}.progress-breadcrumb{margin:1em auto;display:inline-block;border-radius:20px;box-shadow:0 0 10px #fff;width:100%;position:relative;padding:0}.progress-breadcrumb li{list-style-type:none;width:33.3333%;float:left;font-size:14px;position:relative;padding:1em;text-align:center;text-transform:uppercase;color:rgba(255,255,255,.5);height:100%:}.progress-breadcrumb li:first-child:after{content:none}.progress-breadcrumb li.active:before{border-color:#55b776}.order-wrapper{margin:1em auto;clear:both}@media only screen and (max-width:768px){.progress-breadcrumb li{width:100%}}
    #undefined-alert{height:500px;padding:3em;display:none;margin-bottom:0}
    .sidebar {position:relative;width: 20%;float: left;background: #222;height: 100vw;margin: 0 auto;padding: 45px 15px;color: #fff;}
    .sidebar.fixed {position: fixed;top: 0;}
    @media only screen and (max-width:768px) {
        .hover {font-size:.8em}
        .f-right:before,.f-left:before{font-size:1.5em}
        .col-reverse {display: flex;flex-direction: column-reverse;}
        .img-intext{padding:1em}
    }
    @keyframes zoomInOut {
        from {
            transform: scale(1);
        } to {
            transform: scale(1.3);
        }
    }
</style>

<!--
    <div class="container-fluid" id="undefined-alert">
        <div class="bg-cosmos"></div>
        <div class="overlay"></div>
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <div class="indi-logo">
                        <img src="../img/individualogist-logo2.png">
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <div class="page-header">
                    <h1 class="headline">Oops! Looks like something went wrong...</h1>
                    <p><strong>Please <a href="/lp/discover-v8/?new">enter your details again</a> to generate your free reading!</strong></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mx-auto">
                <a class="btn hover f-right" href="/lp/discover-v8/?new" style="padding-top:18px">Free Archetype Reading</a>
            </div>
        </div>
    </div>
-->

    <div class="page-container">
        <div class="container-fluid pt-3 pb-5">
            <div class="bg-cosmos"></div>
            <div class="overlay"></div>
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <div class="indi-logo">
                        <img src="../img/individualogist-logo2.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="page-header">
                        <h1 class="headline">I've Pledged $20 To Your Premium Archetypal Analysis</h1>
                        <h2 class="sub-headline"><strong>I've been eagerly waiting for you to "stumble upon" this extremely important message... A heartfelt note from ME, to YOU...</strong></h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="archetype-reading col-sm-8 mx-auto">
                    <p class="great-vibes">My Dearest <span class="name"><?php echo $name;?></span>,</p>
                    <p>Alas, by some form of divine intervention... Regardless of whether you were conscious of your decision... We've connected in just the <em>nick of time.</em></p>
                    <p>We've crossed paths through your detailed archetype reading, and you're uncertain. I get it.</p>
                    <p>You're unsure whether or not this is for you... Whether or not your Premium Archetypal Analysis is really going to be life-changing as others have said...</p>
                    <p>...And I understand - you're skeptical, and to be completely honest, I was too.</p>
                    <p>Now, here's the kicker.</p>
                    <p>I've going to make you a secret deal that's going to give you an obvious choice.</p>
                    <h2 class="sub-header">Claim Your Premium Archetypal Analysis Now, And I'll Give It To You At $20 off the original price</h2>
                    <p class="text-center"><strong>This special page contains a gift coupon that will help you save $20 off your complete Premium Archetypal Analysis - including the your 5 bonus reports as promised, and including our iron-clad 60 day moneyback guarantee, and of course, my commitment to supporting you during this remarkable journey.</strong></p>
                    <p>Like I said, I get it - the original price of $37 might be a little steep for some...</p>
                    <p>...But I also know for a fact that your Premium Archetypal Analysis is going to set you on <strong>a journey of powerful transformation and self-discovery...</strong> A journey that's worth much more its weight in gold.</p>
                    <p>So, here's my final offer to you. Pay close attention, and don't let this opportunity simply pass you by.</p>
                    <div class="row">
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/paa-if.png">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Report #1: The Individuation Fundamentals</strong></p>
                            <p>This reading will familiarize you with the Shadow, the Anima/Animus, and other related entities. Learning about these terminologies and ideas beforehand will greatly enhance your learning experience!</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/paa-ai.png">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Report #2: Your Archetypal Incarnations</strong></p>
                            <p>The Archetypal Incarnations PDF introduces to you several sub-archetypes, or incarnations of your dominant archetype. Each dominant archetype comprises a number of incarnations that forms its entirety.</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/paa-ap.png">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Report #3: Your Archetypal Profile</strong></p>
                            <p>The Archetypal Profile introduces you to your archetype at a more profound and intinmate level. Approach the Archetypal Profile will an open-mind, and you will receive the value, growth, and abundance that you seek.</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/paa-ao.png">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Report #4: Your Archetypal Odyssey</strong></p>
                            <p>Within the Archetypal Odyssey, you will find the ideal journey that your archetype is meant to embark on, the obstacles that you will potentially face, and what you can do to overcome those obstacles. It will reveal to you the direction that you should be headed towards, based on your archetypal profile and archetypal incarnations.</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/paa-eg.png">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Report #5: Your Archetypal Exercise Guide</strong></p>
                            <p>The Archetypal Exercise Guide will translate everything you learned into action. Within this guide, you will find a series of exercises that will solidify the knowledge that you have acquired. By the end of this guide, your archetype will be brought to consciousness!</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/aig-cover.jpg">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Bonus Report #1: Active Imagination Guide</strong></p>
                            <p>Bridge the gap between your consciousness and the unconscious using this mind-exploring meditative technique, translating your unconscious mind into tangible images.</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/dag-cover.jpg">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Bonus Report #2: Dream Analysis Guide</strong></p>
                            <p>Become a master of your intuition by deconstructing your dreams to reveal your "inner voice". This secret guide will give you the edge you need to navigate the complex plains of your unconscious mind.</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/chinese-zodiac-cover.png">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Bonus Report #3: Exploring Your Birthdate With The Chinese Zodiac</strong></p>
                            <p>Meet the counterpart of Western astrology – The Chinese Zodiac. Understand the Eastern influences on predictions and learn how you can apply them to predict your own future.</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/discovering-aura-cover.png">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Bonus Report #4: Discover Your Aura Guide</strong></p>
                            <p>Each individual exudes a certain aura. Learn how you can interpret different auras of different individuals to gain maximum influence over others.</p>
                        </div>
                        <div class="col-sm-5">
                            <img class="paa-items" src="../img/fengshui-paradigm-cover.png">
                        </div>
                        <div class="col-sm-7">
                            <p><strong>Bonus Report #5: Beginner's Guide To The Feng Shui Paradigm</strong></p>
                            <p>Maximise the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui. This in-depth guide will turn you into a true geomancy master in no time.</p>
                        </div>
                    </div>
                    <h2 class="sub-header">...5 Personalized Reports, 5 Powerful Bonuses, Instant $20 Savings...</h2>
                    <p>I can't guarantee that this special page will be up for long...</p>
                    <p>But what I can guarantee is that you'll be receiving a total of 10 transformation-focused and eye-opening materials at a mere FRACTION of its original cost...</p>
                    <p>So, you can only imagine how rare this offer truly is.</p>
                    <p>Act quickly, while there's still time...</p>
                    <ul class="tick-list">
                        <li><strong>Your Personalized Premium Archetypal Analysis - <span class="bonusvalue">$97 value</span></strong></li>
                        <p class="indent">Includes all 5 phases of your archetypal integration: Individuation Fundamentals Report, your Archetypal Incarnations Report, your Archetypal Profile Report, your Archetypal Odyssey Report, your Archetypal Exercise Guide, all personalized to your unique archetype.</p>
                        <li><strong>Bonus Report #1: Dream Analysis Guide - <span class="bonusvalue">$37 value</span></strong></li>
                        <p class="indent">Become a master of your intuition by deconstructing your dreams to reveal your "inner voice". This secret guide will give you the edge you need to navigate the complex plains of your unconscious mind.</p>
                        <li><strong>Bonus Report #2: Active Imagination Guide - <span class="bonusvalue">$37 value</span></strong></li>
                        <p class="indent">Bridge the gap between your consciousness and the unconscious using this mind-exploring meditative technique, translating your unconscious mind into tangible images.</p>
                        <li><strong>Bonus Report #3: Exploring Your Birthdate With The Chinese Zodiac Report - <span class="bonusvalue">$37 value</span></strong></li>
                        <p class="indent">Discover the potent influences of the hidden archetypes of the Eastern Zodiacs, and the role it plays in the grand scheme of the Universe.</p>
                        <li><strong>Bonus Report #4: Discovering Your Aura Guide - <span class="bonusvalue">$27 value</span></strong></li>
                        <p class="indent">Receive a complete breakdown and secret insights into the unexplored realm of your personal aura, and discover how your aura impacts your archetype.</p>
                        <li><strong>Bonus Report #5: Feng Shui Paradigm Guide - <span class="bonusvalue">$37 value</span></strong></li>
                        <p class="indent">Leverage on this powerful guide to transform your external environment to maximize the flow of energy after transforming your internal self.</p>
                        <li><strong>Priority Customer Support - <span class="bonusvalue">$97 value</span></strong></li>
                        <p class="indent">Our team of archetypal specialists will be with you throughout the entire program, so you'll always have someone to encourage you, and guide you. This priority treatment is ONLY made available if you place your order FROM THIS PAGE.</p>
                        <li><strong>60-Day Moneyback Guarantee - <span class="bonusvalue">Risk Free</span></strong></li>
                        <p class="indent">If you don't experience a transformation of ANY form, we'll issue you a FULL refund, and you'll get to keep the 5 bonus reports.</p>
                    </ul>
                    <p><strong>Click on the button below</strong> and get ready to begin your archetypal journey! You deserve this.</p>
                    <h2 class="sub-header">Redeem Your $20 Discount Voucher For Your Personalized Premium Archetypal Analysis Now!</h2>
                    <img src="../img/paa-cover.png" class="w-100">
                    <div class="paasale-center text-center">
                        <p class="text-center"><strong>Usual Price: <strike>$37.00</strike></strong></p>
                        <h4 class="text-center"><strong>Today's Price: $17.00 ONLY</strong></h4>
                        <p class="text-center">Discount Applied: LIMITEDSALE20 ($20 OFF)</p>
<!--
                        <div class="select-container">
                            <select class="select-archetype" id='archetype'>
                                <option value="" disabled selected>Select your archetype</option>
                                <option value="car">Caregiver</option>
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
                            <p class="text-center"><strong>Don't know your archetype? <a href="https://individualogist.com/lp/discover" target="_blank">Click here to calculate your archetype!</a></strong></p>
                        </div>    
                            <div id="preselect-archetype">
                                Your Archetype: <strong><span class="cArchetype"></span></strong>
                            </div>
                        <button class="cta-button paa" id="paa">Claim My Discount Now!</button>
-->
                            <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $last = explode("/", $str);
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
                            switch (strtolower($archetype)){
                                        case "caregiver":
                                            echo "<a class='cta-button paa' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "creator":
                                            echo "<a class='cta-button paa' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "explorer":
                                            echo "<a class='cta-button paa' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "hero":
                                            echo "<a class='cta-button paa' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "innocent":
                                            echo "<a class='cta-button paa' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "jester":
                                            echo "<a class='cta-button paa' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "lover":
                                            echo "<a class='cta-button paa' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "magician":
                                            echo "<a class='cta-button paa' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "member":
                                            echo "<a class='cta-button paa' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "outlaw":
                                            echo "<a class='cta-button paa' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "ruler":
                                            echo "<a class='cta-button paa' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "sage":
                                            echo "<a class='cta-button paa' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        default:
                                            echo "<a class='cta-button paa' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                        }
                            ?>
                        <img class="payment-options" src="../img/payment-options.png">
                    </div>
                        <div class="testimonial">
                            <span class="archetype-sm caregiver"></span>
                            <h3>"...Helped me realize my soul purpose..."</h3>
                            <p>This reading really helped me realize what my soul purpose on this earth is. It's very accurate and right on point and I would recommend it to anyone who feels like they have lost their way!</p>

                            <div class="testimonial-profile">
                                <p>Misty Thompson, 42, Homemaker - Caregiver</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="archetype-sm ruler"></span>
                            <h3>"...I was a bit skeptical..."</h3>
                            <p>I have I learned so much about myself. It has helped me to discover why I do the things I do and how I am wired. I confront challenges better and I have much more self-awareness as to who I am. I have to admit when I ordered the information I was a bit skeptical, but the information was spot on. I am currently working on my shadow metamorphosis and it has been eye-opening! It has shed light on some of my inner beliefs about myself and the world, and how I react to problems and people who have been problematic in my life. I recommend the reports developed by the Individualogist Team!</p>

                            <div class="testimonial-profile">
                                <p>Jeffrey Boozer, 60, Parole Auditor - Ruler</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="archetype-sm creator"></span>
                            <h3>"...I was a bit skeptical..."</h3>
                            <p>This is truly amazing. I’ve just started on this path and found this site. They gave me a complete and deep understanding of my archetype. Everyone’s is different. Anyone starting to learn this shift in consciousness needs to check this out. It had me and who I am as an individual whole-heartedly correct. It shows you exactly how to overcome your exact archetype and create a union between the unconscious and the subconscious.</p>

                            <div class="testimonial-profile">
                                <p>Cody, 31, Construction - Creator</p>
                            </div>
                        </div>
                        <div class="testimonial">
                            <span class="archetype-sm sage"></span>
                            <h3>"...I was a bit skeptical..."</h3>
                            <p>I found the readings here to be most life affirming. It's really great when you're at a point where you feel stuck and not really sure where you belong in the world or what to do with your abilities (and it helps to add confidence to abilities/talents you "know" you have, makes one more capable of owning and using them!)</p>

                            <div class="testimonial-profile">
                                <p>Jez, 31, Tarot and Astrology Reader - Sage</p>
                            </div>
                        </div>
                    
                        <h2 class="sub-header">Redeem Your $20 Discount Voucher For Your Personalized Premium Archetypal Analysis Now!</h2>
                    <img src="../img/paa-cover.png" class="w-100">
                    <div class="paasale-center text-center">
                        <p class="text-center"><strong>Usual Price: <strike>$37.00</strike></strong></p>
                        <h4 class="text-center"><strong>Today's Price: $17.00 ONLY</strong></h4>
                        <p class="text-center">Discount Applied: LIMITEDSALE20 ($20 OFF)</p>
<!--
                        <div class="select-container">
                            <select class="select-archetype" id='archetype'>
                                <option value="" disabled selected>Select your archetype</option>
                                <option value="car">Caregiver</option>
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
                            <p class="text-center"><strong>Don't know your archetype? <a href="https://individualogist.com/lp/discover" target="_blank">Click here to calculate your archetype!</a></strong></p>
                        </div>    
                            <div id="preselect-archetype">
                                Your Archetype: <strong><span class="cArchetype"></span></strong>
                            </div>
                        <button class="cta-button paa" id="paa">Claim My Discount Now!</button>
-->
                            <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $last = explode("/", $str);
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
                            switch (strtolower($archetype)){
                                        case "caregiver":
                                            echo "<a class='cta-button paa' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "creator":
                                            echo "<a class='cta-button paa' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "explorer":
                                            echo "<a class='cta-button paa' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "hero":
                                            echo "<a class='cta-button paa' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "innocent":
                                            echo "<a class='cta-button paa' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "jester":
                                            echo "<a class='cta-button paa' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "lover":
                                            echo "<a class='cta-button paa' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "magician":
                                            echo "<a class='cta-button paa' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "member":
                                            echo "<a class='cta-button paa' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "outlaw":
                                            echo "<a class='cta-button paa' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "ruler":
                                            echo "<a class='cta-button paa' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        case "sage":
                                            echo "<a class='cta-button paa' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                            break;
                                        default:
                                            echo "<a class='cta-button paa' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&coupon=LIMITEDSALE20&name=$name&email=$email&vtid=$vtid'>Claim My Discount Now!</a>";
                                        }
                            ?>
                        <img class="payment-options" src="../img/payment-options.png">
                    </div>
                    </div>
                </div>
            </div>
        </div>

<script>
$(document).ready(function() {
        $('.select-container').hide();
        $('#preselect-archetype').show();
        $('.paa').show();
        $('.payment-options').show();
});
</script>
<?php include '../inc/footer.php';?>
</body>