<?php
$PageTitle = "Individualogist.com | Black Friday Sale";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
$name = ucwords($_GET['name']);
if (!isset($_GET['name']) || empty($_GET['name'])) {
    $name = 'Friend';
};
$email = $_GET['email'];
$archetype = ucwords($_GET['archetype']);
//header('Location: https://individualogist.com/offer/expired');
?>

<style>
    h2,h3,h4,h5,h6 {font-family:'Ralway',sans-serif;}
.sale-text {
    box-shadow: inset 0 5px 10px rgba(0,0,0,.3);
    background: #fff;
    border: 3px solid #11dfe2;
    color: #333;
    border-radius: 1em;
    width: 700px;
    max-width: 100%;
    margin: 1em auto;
    padding: 1em;
    font-size: 1em;
}
    .sale-text p {
    font-size: 1em;
    }
    .sale-text h2 {
        font-weight: 300;
    background: linear-gradient(to right, #0ee2e2 0%, #17b396 100%);
/*    filter: drop-shadow(1px 1px 1px #000);*/
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
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
color: #fff !important;
    font-size: 1.2em;
    text-transform: uppercase;
    font-weight: 700;
    background: red;
    padding: 1em;
    text-align: center;
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

    }
    .bg-gradientblue {
    background: linear-gradient(to left, #c2cbde , #eef2f3);
    }
    .bg-blackfriday {
        background: url('/offer/assets/img/bg-blackfriday.jpg') center center;
        background-repeat: no-repeat;
        position: relative;
        background-size: cover;
        padding-bottom: 5em;
    }
    .checkout-area {
        position: relative;
        padding: 2em;
        background: linear-gradient(to left, #c2cbde , #eef2f3);
    }
    .select-archetype {
    background: #f8f8f8;
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
    letter-spacing: .2em;
    max-width: 700px;
    padding: .5em;
    margin: 1em auto;
    box-shadow: inset 0 2px 10px rgba(0,0,0,0.3);
    color: #c6007b;
    border: 2px solid #c6007b;
    }
    .step-label {
        border-bottom: 3px solid #c6007b;
        letter-spacing: .1em;
        color: #c6007b;
        padding: .1em;
    }
    .gradient-text {
        text-transform: uppercase;
        background: linear-gradient(to right, #00e3e4 0%, #2effd8 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        font-size: 5em;
        font-weight: 900;
        font-family: 'Raleway', sans-serif;
        filter: drop-shadow(1px 1px 1px #000);
    }
.strike-price {
    text-decoration: line-through;
    color: red;
    border-radius: 50%;
    padding: .3em;
}
.sale-sub {
    text-transform: uppercase;
    letter-spacing: 3px;
    font-weight: 300;
    color: #fff;
    text-shadow: 0 0 10px #000;
}
    .product-card {
        width: 100%;
    border-radius: 2em;
    background: #fff;
    box-shadow: 0 5px 20px rgba(0,0,0,.15);
        margin: 1em auto;
    }
    .card-head {
            background: url(/offer/assets/img/bg-blackfriday.jpg) center center;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    border-top-left-radius: 2em;
    border-top-right-radius: 2em;
    padding: 1em;
    }
    .card-img {
            max-height: 200px;
    display: block;
    margin: 0 auto;
    width: auto;
    }
    .card-title {
            font-size: 1.2em;
    color: #fff;
    text-shadow: 0 0 10px #000;
    text-transform: uppercase;
    letter-spacing: 3px;
    text-align: center;
    }
    .card-body p {
     line-height: 1.5;
    font-weight: 300;
    font-size: 1em;
    padding: 1em;
    }
    .float-co {
        display: none;
        position: fixed;
        bottom: 1em;
        z-index: 99;
        width: 500px;
        max-width: 100%;
        right: 0;
    }
    .overlay {
         position: absolute;
    display: block;
    height: 100%;
    margin: auto;
    width: 100%;
    clear: both;
    background: linear-gradient(rgba(0,0,0,.8),rgba(0,0,0,.6),rgba(0,0,0,.4),rgba(0,0,0,.2),rgba(0,0,0,0));
    top: 0;
    right: 0;
    left: 0;
    bottom: 0;
    }
    .modal {
        background: rgba(0,0,0,0.6);
    }
    .modal-dialog {
    max-width: 95%;
    width: 768px;
    margin: 1em auto;
}
    .modal-header .close {
    position: relative;
    right: 0;
    padding: 1em;
}
    .modal-title {
    margin-bottom: 0;
    line-height: 1.5;
    padding-left: 1em;
    text-align: center;
    margin: 0 auto;
    font-weight: 300;
    background: linear-gradient(to right, #0ee2e2 0%, #17b396 100%);
    /* filter: drop-shadow(1px 1px 1px #000); */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    width: 100%;
}

    .modal-body p {
        font-size: 1em;
    }
    .modal-content {
        box-shadow: 0 0 10px #fff, 0 0 20px #fff;
        border: none;
        border-radius: 1em !important;
    }
    .img-intext { max-width: 100%; width: 300px; float: right;}
    .learn-more {font-weight: 900;color: #00e8ec;border-bottom: 1px solid;cursor: pointer;}
    .query-archetype {display: none;width: 400px;max-width: 100%;margin: .5em auto;}
    @media only screen and (max-width:480px) {
        .bg-blackfriday {
            background: url('/offer/assets/img/bg-blackfriday-mobile.jpg') center center;
            background-size: cover;
            padding-bottom: 5em;
        }
    }
    @media only screen and (max-width:768px) {
        .gradient-text {font-size:2em}
    }
</style>


<div class="container-fluid bg-blackfriday">
    <div class="overlay"></div>
   <div class="row">
       <div class="col-sm-2 mx-auto">
            <img class="logo" src="/offer/assets/img/individualogist-logo2.png">
       </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h1 class="gradient-text text-center">Black Friday Sale</h1>
           <p class="sale-sub text-center">50% Off - 60 Day Moneyback Guarantee - 100% Life Transformation</p>
           <div class="sale-text text-left">
               <h2>Unlock Your Abundance, True Nature, & Hidden Potential By January 2019</h2>
               <p><?php echo $name;?>, there's LESS THAN 40 days till 2019. The year is coming to a swift end - how has 2018 played out for you? Did your manifestations come to life? Did you experience a magnificent shift from within?</p>

               <p>Well, it's still not too late to make a transformation, my dear. Because the archetypal energies are STRONG this month. and it's all pointing in YOUR favour! There is no doubt... <strong>December 2018 is YOUR time to shine!</strong></p>

               <p>But you MUST be able to leverage on your archetypal energies to <strong>catapult yourself forward.</strong> Abundance can be yours, <?php echo $name; ?>. And with the right tools in hand, there is no doubt that you'll navigate through this remarkable period with complete precision.</p>

                <p>So we're holding our annual Black Friday Sale from now till Monday, 26 Nov 2018 (23:59 PST) - where you can <strong>receive guidance and tools to confirm your happiness, abundance, and success!</strong></p>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid select-area">
    <div class="row">
        <div class="col-sm-12 mx-auto text-center mt-5 mb-5">
            <p class="step-title"><span class="step-label">Step 1:</span> Select Your Archetype</p>
            <div class="query-archetype alert alert-success text-left">
              IMPORTANT: <?php echo $name;?>, your archetype is the <span class="arch"></span> and we've already selected it for you!
              <br>
              You may skip this step and move on to step 2!
            </div>
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
            <p><a href="https://individualogist.com/lp/discover" target="_blank" class="small quiz-link">Don't know what's your archetype? Click here</a></p>
        </div>
    </div>
</div>

<div class="container product-area">
    <div class="row">
        <div class="col-sm-8 mx-auto text-center">
            <p class="step-title"><span class="step-label">Step 2:</span>  Add Programs/Reports To Your Cart</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/wp-content/themes/indivi-wp/img/paa-pl.png">
                    <h3 class="card-title">Premium Archetypal Analysis</h3>
                </div>
                <div class="card-body">
                    <p>The Premium Archetypal Analysis is a complete, personalized archetypal profile that grants you an enormous amount of insight into your strengths, tendencies, and potential pitfalls. This revealing report will guide you through the Individuation process while embarking on a self-discovery journey...
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#paa-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$37</span><br><strong>NOW: $18.50</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button paa" id="paa">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/wp-content/themes/indivi-wp/img/sac-cover.png">
                    <h3 class="card-title">Sacred Archetypal Collection</h3>
                </div>
                <div class="card-body">
                    <p>The Sacred Archetypal Collection is a special package that consists of The Archetypal Love Compatibility Guide, and The Archetypal Affirmations Guide. Your Love Compatibility GUide will help you discover your romantic compatibility with other archetypes, while your Archetypal Affirmations Guide will carry you through a 21-day behavioural altering process by using affirmations that have been tailored specifically to your archetype....
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#sac-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$17</span><br><strong>NOW: $8.50</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button sac" id="sac">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/offer/assets/img/dys-cover.png">
                    <h3 class="card-title">Diminishing Your Shadow</h3>
                </div>
                <div class="card-body">
                    <p>The Diminishing Your Shadow Report is an in-depth analysis of your archetype's shadow - the hidden, innate part of your personality where all of your suppressed traits, thoughts, and beliefs are stored. This report simplifies and guides you through the process of encountering, understanding, and controlling your Shadow - an integral part of the Individuation process. Includes Shadow Metamorphosis Guide (365 days of shadow readings, exercises)....
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#dys-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$97</span><br><strong>NOW: $48.50</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button dys" id="dys">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/wp-content/themes/indivi-wp/img/eote-pl.png">
                    <h3 class="card-title">Supreme Mastery Code: Eclipse Of The Ego</h3>
                </div>
                <div class="card-body">
                    <p>Within each and every individual, lies the Ego - a veil that separates one from reaching his or her true Self. Our Egos are the only thing that stands between us and greatness. It is a self-imposed limitation that's manifested itself from environmental, social, and external influences. This audio program will take you through the exact ideas, steps, and explanations needed to transcend your Ego and finally become the individual you were meant to be....
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#eote-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$97</span><br><strong>NOW: $48.50</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button eote" id="eote">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/wp-content/themes/indivi-wp/img/tsol-pl.png">
                    <h3 class="card-title">Tarot Symbols of Life</h3>
                </div>
                <div class="card-body">
                    <p>In many ways, Tarot shares similar attributes with archetypes - deriving meanings and interpretations that will guide you through life. The Tarot Symbols Of Life is a full-fledged written program that equips you with the exact tools and knowledge to master the art of Tarot reading. This program is furnished with cheatsheets, step-by-step guides, and comprehensive worksheets to ensure your success with Tarot...
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#tsol-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$67</span><br><strong>NOW: $33.50</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button tsol" id="tsol">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/offer/assets/img/dtol-cover.png">
                    <h3 class="card-title">Divine Tree Of Life Membership</h3>
                </div>
                <div class="card-body">
                    <p>The Divine Tree Of Life is an exclusive program that we have constructed over the course of several years. In the Divine Tree Of Life, we have prepared for you nothing but facts, knowledge, and powerful information that will literally take all the pain and stress out of your personal transformation journey.
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#dtol-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$37/month</span><br><strong>NOW: $3.50 TRIAL</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button dtol" id="dtol">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/offer/assets/img/chc-cover.png">
                    <h3 class="card-title">Crystal Healing Chronicles</h3>
                </div>
                <div class="card-body">
                    <p>The ancient Greeks would crush hematite and apply it before a battle with the belief that the wearer would be granted mystical protection and be kept safe. These crystals, combined with natural medicine such as herbs, formed the foundation of medical knowledge and healing for thousands of years. Master the art of Crystal Healing in this powerful, hidden and detailed  guide...
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#chc-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$17</span><br><strong>NOW: $8.50</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button chc" id="chc">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/offer/assets/img/recm-cover.png">
                    <h3 class="card-title">Reiki Energy Channelling Mastery</h3>
                </div>
                <div class="card-body">
                    <p>Reiki has evolved since its deep-rooted inception to meeting the needs of our demanding culture and constantly overcoming misconceptions all along the way. In this mastery reading, we reveal the secrets to understanding, manipulating, and absorbinb reiki energy, so that you can possess potent healing abilities to transform your life, as well as the lives of others...
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#recm-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$27</span><br><strong>NOW: $13.50</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button recm" id="recm">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="product-card">
                <div class="card-head">
                    <img class="card-img" src="https://individualogist.com/offer/assets/img/roap-cover.png">
                    <h3 class="card-title">Revolution Of Astral Projection</h3>
                </div>
                <div class="card-body">
                    <p>The Revolution Of Astral Projection will show you the complete, fool-proof process of astral projection, what it feels like, why people do it, and all about the astral world. This secret reading will help you decipher and interpret your dream archetypes, and how you can navigate your way through the astral projection realm to interact with your Spirit Guide...
                    <br>
                    <a class="learn-more" data-toggle="modal" data-target="#roap-info">Learn More</a></p>
                    <div class="row">
                        <div class="col-sm-5">
                            <h5>Original Price:<span class="strike-price">$37</span><br><strong>NOW: $18.50</strong></h5>
                        </div>
                        <div class="col-sm-7">
                            <button class="atc-button roap" id="roap">Add To Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="float-co">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <a class="co-btn" id="checkout2">Checkout Now</a>
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
        <a class="co-btn" id="checkout">Click Here To Checkout</a>
        <img class="cc-icons" src="/offer/assets/img/credit-cards.png">
        <p class="small">Your order will be processed on a secure server.<br>50% discount is already applied with coupon code '1111SALE'.</p>
        </div>
    </div>
</div>

<div class="modal" id="paa-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Premium Archetypal Analysis - $18.50</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <ul class="tick-list">
            <li>Force everyone around you to turn their heads when you experience BREAKTHROUGHS in ALL aspects of your life.</li>
            <li>Discover a newfound sense of inner strength, intuitive instinct, and unquestionable purpose to charge through mental barriers and limiting beliefs.</li>
            <li>Be rewarded with all the abundance that the Universe not only has to offer, but is in debt to you - money, meaningful relationships, and happiness.</li>
            <li>Receive a personalized and effortless blueprint that reveals your true inner self, customized to your archetype.</li>
            <li>At last, stick it to the negative doubters and naysayers who've held you back all this time when you become a beacon of positive energy.</li>
            <li>Transform yourself into a magnet that draws like-minded members of the opposite gender into your life - members who'll love you and appreciate you for who you truly are.</li>
            <li>Your immediate family, spouse, and closest friends will gloat about your amazing and complete transformation.</li>
            <li>Receive a detailed guide, broken down into 5 different components - your Individuation Fundamentals, your Archetypal Profile, your Archetypal Incarnations, your Archetypal Odyssey, and your Archetypal Exercise Guide.</li>
            <li>Receive your 3 additional bonus materials for FREE - readings that will help you obtain a deeper understanding of your archetype and the spiritual/psychological realm.</li>
        </ul>
        <p>You’ll attain a profound understanding of your purpose in life, your personality, and direction! You’ll be taken on a journey through your past, present and future!
        <p>You’ll even get precise readings on your shadow, your anima/animus, and your ego!</p>
        <p>All of this has been broken down into 5 easy readings, plus 3 valuable bonuses that you can access digitally…</p>
        <ul class="tick-list">
            <li>Reading #1: The Individuation Fundamentals</li>
            <li>Reading #2: Your Archetypal Incarnations</li>
            <li>Reading #3: Your Archetypal Profile</li>
            <li>Reading #4: Your Archetypal Odyssey</li>
            <li>Reading #5: Your Archetypal Exercise Guide</li>
            <li>BONUS 1: Exploring Your Birthdate With The Chinese Zodiac</li>
            <li>BONUS 2: Discovering Your Aura</li>
            <li>BONUS 3: Beginner's Guide To The Feng Shui Paradigm</li>
        </ul>
        <p>Your search for answers ends here, <?php echo $name;?>. If you’ve been wondering about who you are, why you’re here, and where to go next, then I have no doubt that the contents of the Premium Archetypal Analysis will give you the answers that you’re looking for.</p>
        <p>This is your one chance to come face-to-face with your archetype and guide you through a transformational journey.
        <p>This is your time to shine and make the decision that will align your direction with your destiny.</p>
        <p>Claim your Premium Archetypal Analysis now for just <strike>$37</strike> $18.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button paa" id="paa" style="float: right;">Add To Cart</button>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="sac-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Sacred Archetypal Collection - $8.50</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>Your sacred archetypal collection comprises 2 alluring and life-enhancing materials that will help you take the plunge into your archetype, The , and integrate it completely into your subconscious.</p>
        <ul class="tick-list">
            <li><strong>Archetypal Affirmations</strong></li>
            <p>A series of 21 potent affirmations that have been customized to your archetype. Each affirmation is to be recited each day, and leverages on the optimal period of 21 days for forming positive habits. Do not underestimate the power of affirmations, <?php echo $name;?>. Affirmitive actions begin with affirmitive thoughts. And affirmitive thoughts, originate from affirmations.</p>
            <p>Each affirmation in this guide has been masterfully crafted by actualized individuals belonging to your Archetypal family. Each sentence and saying has been carefully strung together to be absorbed by your subconscious, and ingested by your soul.</p>
            <li><strong>Archetypal Love Compatibility Guide</strong></li>
            <p>This is a highly detailed guide that gives you all the information you need to determine how you interact with people of other archetypes, and whether they’re compatible with you at a fundamental level. If you’ve already found “the one” for you, this guide will give you the exact confirmation you need to know that you’re with the right person; your perfect partner.</p>
            <p>This is a guide that’s unlike any other, and I have no doubt that you will gain immense value from its insights. You’ll finally be able to instantly and accurately recognize potential partners, and sift out the ones whose thoughts, desires, and actions do not resonate with your archetype. Imagine all the time and heartache you’ll save! And although the Archetypal Love Compatibility Guide speaks primarily about love, it can also be interpreted and applied to non-romantic relationships as well.</p>
        </ul>
        <p>Within the Sacred Archetypal Collection, you will discover (among other things):</p>
        <ul class="tick-list">
            <li>Exactly what you need to do to become a Master of your archetype</li>
            <li>Your definitive path towards tapping into your archetypal energy</li>
            <li>The exact steps for you to encounter your archetype at a profound and intimate level</li>
            <li>The most effective way of determining ideal, potential partners in both love and life</li>
        </ul>
        <p>Yes, <?php echo $name;?>. You can finally make a breakthrough in your work life, develop even more fruitful relationships, and experience a level of self-understanding that will open up your heart and mind to the various possibilities that life has in store for you.</p>
        <p>Claim your Sacred Archetypal Collection now for just <strike>$17</strike> $8.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button sac" id="sac" style="float: right;">Add To Cart</button>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="dys-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Diminishing Your Shadow - $48.50</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p><p>Send in your request for your Diminishing Your Shadow Report and you will receive a complete breakdown of every single facet, trait, and insight encompassing your archetype's Shadow.</p>
        <p>This report will give you a good measure of the impurities residing within your Shadow, and allow you to transform all aspects of your life - your relationships, your career, your health, and your abundance.</p>
        <p>It also includes effective methods and exercises that will guide you through exactly what you need to do to control, overcome, and ultimately, diminish your Shadow.</p>
        <p>You're already aware of how significant this portion of your Archetypal Journey is, so not only will you be embarking on a self-discovery journey like no other, but you'll also be actualizing the progress of your transformation.</p>
        <p>Finally, you'll be equipped with all the tools you need to attract and retain all the abundance of the Universe - no compromises.</p>
        <p>And that's not all - I'd also like to add in something else that's really going to POSITIVELY IMPACT your transformation.</p>
        <p>Along with your Diminishing Your Shadow Report, I'm also going to give you your Shadow Metamorphosis Guide - consisting of a complete year of intricate and intimate Shadow guidance.</p>
        <p>So, if you're dubious about a single report giving you a sufficient amount of insight to make the changes you want to experience, your Shadow Metamorphosis Guide will be there to hold your hand and walk you through this journey.</p>
        <p>This includes readings, instructions, and exercises that have been carefully planned every single day, across an entire year. That's 360 readings, so you'll never go a single day without direction and answers.</p>
        <p>And at the end of this guide, as long as you follow it diligently and you do not miss a day, there is no doubt you will experience a full emergence from your Shadow.</p>
        <p>On top of your Diminishing Your Shadow and Shadow Metamorphosis Guide, you will also receive 8 additional bonuses that will not only enhance the rewards of your self-discovery journey, but also open up your mind to the true potential of the metaphysical realm.</p>
        <ul class="tick-list">
            <li>Diminishing Your Shadow Report (Value $97.00)</li>
                <div class="indent">We analyse your shadow in excruciating detail and provide you with over 200 pages of highly specific, accurate, and revealing information about your Shadow!</div>
                <div class="indent">You’ll attain a profound understanding of your purpose in life, your personality, and direction!</div>
            <li>Shadow Metamorphosis Guide (Value $197.00)</li>
                <div class="indent">360 days worth of daily readings, insights, and exercises to guide you through the shadow diminishing process</div>
                <div class="indent">You’ll never have to wonder whether you're on the right track, and you'll have something to rely on for the rest of the year.</div>
            <li>7 Days of Meditation Tracks (Value $69.00)</li>
            <li>The Birth of Tarot Reading (Value $37.00)</li>
            <li>Unlocking the Wheel of Your Channeling Chakras (Value $37.00)</li>
            <li>Elements of Astrology (Value $37.00)</li>
            <li>The Pendulum of Emotional Freedom Tapping (Value $37.00)</li>
            <li>The Mastery of Palmistry (Value $37.00)</li>
            <li>Balancing Your Life with Deep Rhythmic Chi Gong (Value $37.00)</li>
            <li>The Revelation of Individuation (Value $37.00)</li>
        </ul>
        <p>Every day, you only have two decisions to make. To <span class="purple">feed your shadow</span> and keep living the way you&rsquo;ve been living... Uncertain, unsatisfied, and uncontrolled... OR. You can choose to control your shadow. Master its tendencies and transform EVERYTHING about yourself... That is your key to <span class="purple">unlocking the life of your dreams.</span></p>
        <p>And just for today, you'll be able to identify your shadow&rsquo;s presence and, gain complete control over your life&rsquo;s direction, AND experience an abundance of love, health, and wealth in your life... At HALF the original price of $97.</p>
        <p>This is an EXTREMELY rare offer, and the FIRST time we're offering this program for such a low price. So, heed my advice, and add this to your cart now before the sale ends!</p>
        <p>Claim your Diminishing Your Shadow now for just <strike>$97</strike> $48.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button dys" id="dys" style="float: right;">Add To Cart</button>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="eote-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Supreme Mastery Code: Eclipse Of The Ego - $48.50</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <p><?php echo $name;?>, you are subconsicously holding yourself BACK - without even knowing it!</p>
          <p>What’s happening here is your Ego is standing in the way of your Self.</p>
          <p>The Ego is a self-constructed image – a perception of ourselves we've framed in our minds - a version gives us a false sense of satisfaction.</p>
          <p>The Self, on the other hand, represents the true version of who we REALLY are - and this is where your reality resides.</p>
          <p>It’s a part of your soul, and a part of your existence.</p>
          <p>Naturally, discerning between the two can be difficult at times, and you will encounter such challenges as you progress through this extraordinary time of change.</p>
          <p>Until you're able to move past your Ego and transcend above it, steering yourself in the right direction will be a collosal challenge - both during, and after this process of self-discovery...</p>
          <p>The blockage you're facing is a difficult problem to resolve, but it’s not impossible. And I'm going to tell you exactly what you need to do to solve that problem.</p>
          <p>With the right knowledge, the right tools, and the right mindset, overcoming this boulder will be an easy and effortless process.</p>
          <p>The Supreme Mastery Code: Eclipse of the Ego will show you exactly what you need to do to identify your Ego, and remove it from the equation.</p>
          <p>It will give you the guidance and knowledge you need to become one with your true Self, and enjoy all the abundance and epiphanic revelations of knowing your true direction, and becoming self-aware.</p>
          <p>It will equip you with the much needed wisdom and self-awareness to navigate the challenges and obstacles standing in the way of your self-discovery process.</p>
          <p>In other words, this is the grand opportunity you've been waiting for - an opportunity to MASTER and REGAIN control of your entire REALITY!</p>
          <p>The Supreme Mastery Code: Eclipse of the Ego consists of 8 complete, actionable and detailed modules, covering everything you need to know about your Ego and the process of Individuation. This course is intended to be delivered over the period of 8 weeks.</p>
          <ul class="tick-list">
            <li>Module 1: Introduction to the Eclipse of the Ego</li>
            <li>Module 2: Ego Transcendence (Healing the Mind Body and Soul)</li>
            <li>Module 3: Convergence of the Ego</li>
            <li>Module 4: Syzygy of the Anima and Animus</li>
            <li>Module 5: Embodying the Cosmic Archetypes</li>
            <li>Module 6: Synchorinicty of the Soul</li>
            <li>Module 7: Attaining Your Celestial Self</li>
            <li>Module 8: Pinnacle of Your Existence</li>
            <li>All 8 modules in both audio and PDF formats</li>
            <li>Over 20 actionable and rewarding exercises</li>
            <li>A beautifully designed progress-tracking workbook</li>
        </ul>
        <p>Proceed with this tool in hand and there is no doubt - you WILL experience a remarkable change in your life, witness your new self unfold before your very eyes, and enjoy all the abundance the world has to offer.</p>
        <p>Claim your Eclipse Of The Ego now for just <strike>$97</strike> $48.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button eote" id="eote" style="float: right;">Add To Cart</button>
        </div>
      </div>

    </div>
  </div>
</div>

<div class="modal" id="tsol-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Tarot Symbols Of Life - $33.50</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <p>Throughout history, royal leaders have been known to consult tarot readers for all matters. This includes their love lives, outcomes of wars, finding riches, or even finding their true purpose.</p>
          <p>People like George Washington, Abraham Lincoln, Richard Nixon, Ronald Reagan, and Bill Clinton, and even Hillary clinton, have all used tarot reading to help them make difficult decisions. Former British Prime Minister, Tony Blair, is also a devotee to spiritual advisors and psychic predictors.</p>
          <p>The Tarot Symbols of Life Reading has been prepared for you. A reading that will guide you through the realm of Tarot Reading, Tarot Archetypes, and everything you need to know to become a true, revered master of the Tarot.</p>
          <p>With this tool in hand, not only will you be able to perform your OWN tarot readings, but you'll also be exposed to the ART and METAPHYSICAL SCIENCE of conjuring your OWN tarot spreads. So that you can make the precision predictions you need to gain an unfair advantage in life.</p>
          <p>...Imagine the sheer power you'll have from being able to read your own future, <?php echo $name;?> - that's the exact sort of divine power I'm talking about!</p>
          <p>And it's all made available to you with your Tarot Symbols Of Life Reading. Everlasting joy, abundance, luck, and love are all within your reach my dear.</p>
          <p>On top of your Tarot Symbols Of Life Reading, I’ll be throwing a few little extras – in celebration of this grand opportunity, and this great sale.</p>
          <p>Along with this guide, you will ALSO receive...</p>
          <ul class="tick-list">
              <li><strong>Binaural Bliss MP3</strong></li>
              <p>The Binaural Bliss Audio Tracks is a full series of audio tracks comes in the form of binaural beats. These specific sounds have been used for decades to enhance meditations and create lasting behavioural changes.</p>
              <li><strong>Tarot Exclusive Collection</strong></li>
              <p>The Tarot Exclusive Collection comprises three beautifully designed PDFs – a worksheet enabling you to create your own tarot spreads, a cheatsheet that gives you easy access to all cards and their meanings in both upright and reverse positions, and a 12-step guide that will aid you through your first question-based tarot reading! Why is it exclusive? Well, because it’s only made available to members of the Individualogist family!</p>
          </ul>
          <p><?php echo $name;?>, it's time you have your life’s purpose, your calling, your true personality, and your life’s direction revealed to you...</p>
          <p>The price has been SLASHED by HALF. There is no time to waste... Add your Tarot Symbols of Life to your cart now and instantly save $33.50!</p>
          <p>Claim your Tarot Symbols of Life now for just <strike>$67</strike> $33.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button tsol" id="tsol" style="float: right;">Add To Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="dtol-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Divine Tree Of Life Membership - $3.50 TRIAL</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <p>The Divine Tree Of Life is the sole recurring theme across majority, if not all, religions and philosophies. It is one of the extremely few elements that’s been kept consistent – regardless of time, beliefs, and values.</p>
          <p>The Tree Of Life is present in Christianity, Bhuddism, the Kaballah, Norse, China, Ancient Egypt… It has made its presence across nations and eras… Until today.</p>
          <p>The Tree Of Life is a Mythical Archetype – which means that unlike other archetypes, it’s an element, a concept, that has remained consistent through centuries, ages, and eras.</p>
          <p>The oldest and most ancient scriptures, at the very core of every major religion, make reference to a mysterious tree at the center of the world.</p>
          <p>Its fruits, guarded by an evil serpent, confer immortality. The area immediately surrounding this mythical tree has been said to be the birthplace of the first human ancestors.</p>
          <p>This ‘legend’ is arguably the oldest, most widely dispersed, and most mysterious religious idea known to mankind. And yet, the concept, the idea remains consistent despite differing opinions, beliefs, and values.</p>
          <p>Almost as if it’s in the one, single archetype that unites humanity in entirety.</p>
          <p>Think of the Tree Of Life is an infinite pool of energy – a tree that constantly bears fruit for your personal consumption. And in this case, what you’ll be consuming is knowledge, wisdom, and growth.</p>
          <p>And as you engage yourself in that process, you’ll start to experience the wonders of the Tree Of Life…</p>
          <ul class="tick-list">
              <li>You will be given direction and intuitive guidance across all facets of life</li>
              <li>You will experience luck and good fortune in everything that you do</li>
              <li>You will become perfectly in-tune with your archetype and be an authority of influence</li>
              <li>You will attract the right people into your life, while subconsciously distancing yourself from the wrong</li>
              <li>You will grow to be the individual that you were meant to be… An individual of limitless potential</li>
          </ul>
          <p>The contents of this program are one-of-a-kind. And not only is it unique, but it’s also one of the most effective programs that’s ever been created.</p>
          <p>In the Divine Tree Of Life, we have prepared for you nothing but facts, knowledge, and powerful information that will literally take all the pain and stress out of your personal transformation journey.</p>
          <p>This is an action-oriented program that has one, single purpose…</p>
          <p>To Transcend Your Existence.</p>
          <p>What that really means is that you will be given the exact materials, knowledge, and wisdom to tap into the Tree Of Life… Where you’ll be able to gain astonishing insights into your true purpose, your sense of direction, your ability to make decisions, your confidence, your love and relationships, and your hidden, innate desires.</p>
          <p>And let me also tell you this. It does not matter how old you are. It does not matter if you’ve just graduated college, if you’re in your retirement years. The Divine Tree Of Life contains wisdom that will benefit EVERYONE and ANYONE.</p>
          <p>Your Tree of Life Membership includes weekly readings, predictions, and little knowledge nibbles that will escalate your personal growth.</p>
          <p>Start your 7-day Divine Tree Of Life Trial now for just <strike>$37/month</strike> $3.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button dtol" id="dtol" style="float: right;">Add To Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="chc-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Crystal Healing Chronicles - $8.50</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <p>Crystals possess great healing powers… Healing powers that are so potent, that even science itself is unable to comprehend the true magnitude of the energy found within crystals…</p>
          <p>One of the earliest pieces of evidence of the healing properties of crystals was discovered by a scientist at IBM – Marcel Vogel.</p>
          <p>As he patiently observed the growth of crystals under a microscope, he realized that the crystals were taking the form and shape of whatever came to his mind…</p>
          <p>I won’t bore you with the details, but Marcel believed this had to do with the bonds between the molecules and their vibrations.</p>
          <p>But in order to gain more conclusive results, he actually tested and managed to prove that crystals were able to STORE THOUGHTS – almost similar to how magnetic energy is able to record and store sounds!</p>
          <p>Albert Einstein once said that everything in life revolves around vibrations…</p>
          <p>…Sound waves, thoughts, energy – everything that’s manifested and materialized in our lives. And this came from the greatest and most brilliant mind to have ever set foot on the face of the Earth! How awesome is that?</p>
          <p>Which means to say, that when you REALLY think about it, crystals are sort of a catalyst… When you project your thoughts into crystals, it amplifies those vibrations to produce healing properties!</p>
          <p>Just imagine the miracles and amazing feats you’d be able to perform by tapping into this source of healing!</p>
          <p>BUT… It’s not JUST about healing. When you’ve mastered the art of crystals, you can do so much more. You could…</p>
          <ul class="tick-list">
            <li>…Use Bloodstone to improve your vitality and spiritual energy…</li>
            <li>…Use Smoky Quartz to transmute negative energy into positive vibrations…</li>
            <li>…Use Rose Quartz to open up and heal the energy of your heart…</li>
            <li>…Use Carnelian to magnetize abundance, wealth, and fortune…</li>
            <li>…Use Celestite to experience tranquility and harmony from within…</li>
            <li>…Use Citrine to maintain a permanent positive state of mind…</li>
            <li>…Use Aventurine to overcome mental blockades and limiting beliefs…</li>
          </ul>
          <p>It is ENTIRELY possible to master the foundation and crystal healing in just a matter of DAYS. The art and science of it is far from complicated – in fact, it’s actually really simple…</p>
          <p>It takes a bit of studying at first, but once you get the hang of it, you’ll be able to interpret crystals and stones at a single glance – just like clockwork.</p>
          <p>BUT, we’ve taken that process and condensed it into a powerful material that can show you the ropes of crystal healing in an even shorter amount of time.</p>
          <p>That means, if you go through your copy of the Crystal Healing Chronicles today, you’ll probably be able to start practicing immediately, or even the day after!</p>
          <p>Claim your Crystal Healing Chronicles for just <strike>$17</strike> $8.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button chc" id="chc" style="float: right;">Add To Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="recm-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Reiki Energy Channelling Mastery - $13.50</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
          <p>Spiritual energy is no less real than any other form of energy... It’s as real as electricity, as nuclear power, as physical strength, as mental dexterity.</p>
          <p>BUT. it’s also far more significant than any other form of energy…</p>
          <p>…That’s because it’s a form of reiki (or universal life force) – distributed from your soul, and out into the world through the purity of love.</p>
          <p>We experience consciousness because of this universal life force… A force that's distributed throughout the rest of our bodies using various channels…</p>
          <p>It flows through our bodies like blood, but not in a tangible or physical manner.</p>
          <p>Reiki will help you attain an unprecedented level of control over your spiritual energy – consciously being able to RAISE your vibration levels, and CHARGE it with POSITIVE energy. Naturally, this phenomenon also yields effects of HEALING.</p>
          <ul class="tick-list">
            <li>Reiki WILL grant you stress reduction and relaxation by triggering the body’s natural healing abilities (immune system)</li>
            <li>Reiki IMPROVES your sleeping patterns and overall sleep quality, giving you an energetic and awakened state of mind</li>
            <li>Reiki MOULDS your mind, body, and soul to experience inner peace and harmony, making it a valuable tool for spiritual growth and self-discovery</li>
            <li>Reiki BALANCES your mind and your emotions, forming the core of what we know as being in a state of tranquility</li>
            <li>Reiki ENHANCES your learning, memory and mental clarity, allowing you to alleviate your mental and emotional being while relieving yourself of negativities such as fear and anger.</li>
            <li>Reiki ESCALATES your capability to love, giving you the courage and transparency to open yourself up to others and improve the relationships that you share with people</li>
            <li>Reiki WILL physically restore your body and provide you with pain relief, especially if you experience migraines, arthritis, or other difficult conditions</li>
          </ul>
          <p>Learning the art of Reiki isn’t something complex – at least, not for someone of your natural talents and capabilities...</p>
          <p>We’ve prepared a complete kit for you that will equip you with everything you need to know about Reiki Energy Channelling.</p>
          <p>This kit comprises exercises, applications, and all of the important bits that you need to know about Reiki.</p>
          <p>And by the end of it, you’ll be the go-to expert for all things healing-related, earning you the prestigious title of an Energy Healer.</p>
          <p>…As you can imagine, possessing the power to actively heal yourself AS WELL AS others is EXTREMELY powerful.</p>
          <p>With this powerful tool in hand, you'll be able to unlock your natural healing abilities, create balance in your life, and enhance your journey of becoming better, stronger, and more powerful than you ever were before!</p>
          <p>Claim your Reiki Energy Channelling Mastery Kit for just <strike>$27</strike> $13.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button recm" id="recm" style="float: right;">Add To Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal" id="roap-info">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Revolution Of Astral Projection - $18.50</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>Astral Projection begins when you are in a state of being half asleep… That means the “in-between zone” of consciousness and unconsciousness.</p>
        <p>You may feel paralyzed. You may be aware that you’re lying in bed. Yet, you’re also experiencing a range of odd, tingling sensations…</p>
        <p>And that’s when it happens. You’re suddenly disassociated from your physical body – floating, even.</p>
        <p>Gravity no longer seems to exist, and your mind’s no longer one with your physical presence… Now, you’re in your “dream body”.</p>
        <p>This is also known as your spirit or astral body.</p>
        <p>As soon as you’re within your astral body, you can now explore your surroundings – your room, your house, pass through walls and windows.</p>
        <p>And then, you’ll grow infinitely more curious about the potential of this superpower… That’s when you eventually decide to soar above and beyond.</p>
        <p>Some fortunate individuals might even soar high enough to encounter the unexplainable... Guardians angels, spirit guides.</p>
        <p>Whether you do experience something as astonishing, Astral Projection in itself will be rewarding enough!</p>
        <p>There is no doubt that you can enjoy this incredibly spiritual experience… I can show you how – in just 7 steps.</p>
        <p>So, in order to ensure that you experience the TRUE effects of Astral Projection, and do so SAFELY, this material will be your own personal guide through this magical experience...</p>
        <p>Within this extraordinary material, you will discover every single facet of Astral Projection there is to know.</p>
        <p>You will be more than prepared to perform your first Astral Projection, and you will be given expert insight into the details of your preparation – before, during, and after your first experience.</p>
        <p>The Revolution Of Astral Projection is without an ounce of doubt, the most DETAILED and INFORMATIVE material out there about astral projection. It contains every Astral Projection method known to man.</p>
        <p>This IS a guide that will ascertain your FIRST astral projection experience. This IS a guide that will take you down the intricacies of sleeping patterns, relaxation, and optimization to astral project both safely, and easily.</p>
        <p>Claim your Revolution Of Astral Projection for just <strike>$37</strike> $18.50 Today!</p>
      </div>
      <div class="modal-footer">
        <div class="col-sm-6">
            <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        <div class="col-sm-6">
            <button class="atc-button roap" id="roap" style="float: right;">Add To Cart</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

function getQueryVariable(variable) {
  var query = window.location.search.substring(1);
  var vars = query.split("&");
  for (var i=0;i<vars.length;i++) {
    var pair = vars[i].split("=");
    if (pair[0] == variable) {
      return pair[1];
    }
  }
}
    var paa = '';
    var sac = '';
    var dys = '';
    var eote = '';
    var tsol = '';
    var dtol = '';
    var chc = '';
    var recm = '';
    var roap = '';
    // var archetype = $('#archetype').val();
    var name = getQueryVariable('name');
    var email = getQueryVariable('email');

    if(name != 'undefined') {
        name = getQueryVariable('name');
    }else {
        name = '';
    }
    if(typeof(email) != 'undefined') {
        email = getQueryVariable('email');
    }else {
        email = '';
    }

      $('#checkout').on('click', function() {
            if(paa == '' && sac == '' && dys == '' && eote == '' && tsol == '' && dtol == '' && chc == '' && recm == '' && roap == '') {
                alert('Your cart is still empty! Please add an item to your cart before checking out!');
            }else {
                var paymentLink = "http://individua1.pay.clickbank.net/?cbitems=" + paa + sac + dys + eote + tsol + dtol + chc + recm + roap +"&coupon=1111SALE&cbskin=22063&name=" + name + "&email=" + email;

            location.href = paymentLink;
            }
      });
    $('#checkout2').on('click', function() {
            if(paa == '' && sac == '' && dys == '' && eote == '' && tsol == '' && dtol == '' && chc == '' && recm == '' && roap == '') {
                alert('Your cart is still empty! Please add an item to your cart before checking out!');
            }else {
                var paymentLink = "http://individua1.pay.clickbank.net/?cbitems=" + paa + sac + dys + eote + tsol + dtol + chc + recm + roap + "&coupon=1111SALE&cbskin=22063&name=" + name + "&email=" + email;

            location.href = paymentLink;
            }
      });
    $('.atc-button').on('click', function() {
        $('.float-co').show(300);
    });


      $(document).ready(function() {
        //Check if url contains archetype
        if (window.location.href.indexOf('archetype') > -1) {
          var qArchetype = getQueryVariable('archetype');
          //Parse first 3 char of archetype
          var archetype = qArchetype.substr(0,3).toLowerCase();
          //Set select value
          document.getElementById("archetype").value = archetype;

          $('.query-archetype').show(300);
          $('.quiz-link').hide(300);
          $('.arch').html(qArchetype);
        }else {
            var archetype = $('#archetype').val();
        }

        $('#archetype').on('change', function() {
            archetype = $('#archetype').val();
            $('.query-archetype').hide(300);
                $('html, body').animate({
                  scrollTop: $('.product-area').offset().top
                }, 600);
          });

      $(document).on('click', ".paa", function() {
        paa = 'paa-' + archetype + '.1_';
        $('.paa').attr({
            id: 'paa-active',
            class: 'atc-button-active paa-active'
        }).html('Added To Cart');
      }).on('click', ".paa-active", function() {
        $('.paa-active').attr({
            id: 'paa',
            class: 'atc-button paa'
        }).html('Add To Cart');
      });

      $(document).on('click', ".sac", function() {
        sac = 'sac-' + archetype + '.1_';
        $('.sac').attr({
            id: 'sac-active',
            class: 'atc-button-active sac-active'
        }).html('Added To Cart');
      }).on('click', ".sac-active", function() {
        sac = '';
        $('.sac-active').attr({
            id: 'sac',
            class: 'atc-button sac'
        }).html('Add To Cart');
      });

      $(document).on('click', ".dys", function() {
        dys = 'dys-' + archetype + '.1_';
        $('.dys').attr({
            id: 'dys-active',
            class: 'atc-button-active dys-active'
        }).html('Added To Cart');
      }).on('click', ".dys-active", function() {
        dys = '';
        $('.dys-active').attr({
            id: 'dys',
            class: 'atc-button dys'
        }).html('Add To Cart');
      });

      $(document).on('click', ".eote", function() {
        eote = 'eote.1_';
        $('.eote').attr({
            id: 'eote-active',
            class: 'atc-button-active eote-active'
        }).html('Added To Cart');
      }).on('click', ".eote-active", function() {
        eote = '';
        $('.eote-active').attr({
            id: 'eote',
            class: 'atc-button eote'
        }).html('Add To Cart');
      });

      $(document).on('click', ".tsol", function() {
        tsol = 'tsol.1_';
        $('.tsol').attr({
            id: 'tsol-active',
            class: 'atc-button-active tsol-active'
        }).html('Added To Cart');
      }).on('click', ".tsol-active", function() {
        tsol = '';
        $('.tsol-active').attr({
            id: 'tsol',
            class: 'atc-button tsol'
        }).html('Add To Cart');
      });

      $(document).on('click', ".dtol", function() {
        dtol = 'tol.1_';
        $('.dtol').attr({
            id: 'dtol-active',
            class: 'atc-button-active dtol-active'
        }).html('Added To Cart');
      }).on('click', ".dtol-active", function() {
        dtol = '';
        $('.dtol-active').attr({
            id: 'dtol',
            class: 'atc-button dtol'
        }).html('Add To Cart');
      });

      $(document).on('click', ".chc", function() {
        chc = 'chc.1_';
        $('.chc').attr({
            id: 'chc-active',
            class: 'atc-button-active chc-active'
        }).html('Added To Cart');
      }).on('click', ".chc-active", function() {
        chc = '';
        $('.chc-active').attr({
            id: 'chc',
            class: 'atc-button chc'
        }).html('Add To Cart');
      });

      $(document).on('click', ".recm", function() {
        recm = 'recm.1_';
        $('.recm').attr({
            id: 'recm-active',
            class: 'atc-button-active recm-active'
        }).html('Added To Cart');
      }).on('click', ".recm-active", function() {
        recm = '';
        $('.recm-active').attr({
            id: 'recm',
            class: 'atc-button recm'
        }).html('Add To Cart');
      });

      $(document).on('click', ".roap", function() {
        roap = 'roap.1_';
        $('.roap').attr({
            id: 'roap-active',
            class: 'atc-button-active roap-active'
        }).html('Added To Cart');
      }).on('click', ".roap-active", function() {
        roap = '';
        $('.roap-active').attr({
            id: 'roap',
            class: 'atc-button roap'
        }).html('Add To Cart');
      });
    });
  </script>

<!--
<script>
var stringArchetype = getQueryVariable("archetype");
var paramArchetype = stringArchetype.substr(0,3);



document.getElementById("archetype").value=paramArchetype.toLowerCase();
</script>
-->


<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer.php');
include_once($path);
?>
