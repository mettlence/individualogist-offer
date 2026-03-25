<?php
$PageTitle = "Energy Decoding Pendulum | Individualogist.com";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>
<style>
    html {
        scroll-behavior: smooth;
    }

    .ul-energy {
        list-style: none;
        margin-left: 1em;
        text-align: justify;
        margin-bottom: 20px;
    }

    .ul-energy>li {
        position: relative;
        margin-bottom: 5px;
        margin-left: 10px;
    }

    .ul-energy>li:before {
        position: absolute;
        left: -40px;
        display: inline-block;
        width: 22px;
        height: 20px;
        margin-right: 1em;
        background: url(https://individualogist.com/offer/assets/img/energyball.png) no-repeat;
        background-size: cover;
        background-position: 100% 100%;
        border-radius: 50%;
        content: "";
        top: 5px;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Raleway', sans-serif
    }

    .footer p a {
        color: #bc38d2
    }

    p,
    ul {
        font-family: 'Lato', sans-serif;
        font-size: 19px;
        color: inherit
    }

    .hero-h1 {
        color: #fff;
        text-shadow: 0 0 10px rgb(0 0 0 / 75%), 0 0 20px rgb(0 0 0 / 50%);
        font-weight: 900
    }

    .hero-h4 {
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700;
        text-shadow: 0 0 10px rgb(0 0 0 / 75%), 0 0 20px rgb(0 0 0 / 50%);
        color: #fff
    }

    .indi-logo {
        position: relative;
        width: 200px;
        height: 50px;
        background: url(https://individualogist.com/offer/assets/img/individualogist-logo2.png);
        margin: 2em auto;
        display: block;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .indi-logo img {
        width: 100%
    }

    .sp-wrapper {
        width: 100%;
        max-width: 900px;
        text-align: justify;
        padding: 1em;
        margin: 1em auto;
        font-size: 18px;
    }

    .strong {
        font-weight: 700
    }

    .sp-title {
        line-height: 1.2em;
        font-size: 1.75em;
        text-transform: capitalize;
        letter-spacing: 0;
        font-weight: 900;
        text-align: center
    }

    .bg {
        position: relative;
        background-size: cover;
        background-attachment: fixed;
        background-position: center;
        background-repeat: none
    }

    .squaresphere {
        background-image: url('https://individualogist.com/offer/assets/img/bg-squaresphere.jpg');
        border-radius: 0 0 20% 20%;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
    }

    .meditateneon {
        position: relative;
        background-image: url('https://individualogist.com/offer/assets/img/bg-meditateneon.jpg');
        padding-top: 2em;
        padding-bottom: 2em;
        color: #fff;
        text-shadow: 1px 1px 1px #000
    }

    .meditateneon p {
        font-size: 1.5em
    }

    .overlay-h {
        display: block;
        background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.75));
        top: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        height: auto
    }

    .overlay-hero {
        display: block;
        background: linear-gradient(rgba(0, 0, 0, 0.75), rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.75));
        top: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        height: auto;
        border-radius: 0 0 20% 20%
    }

    .hero {
        padding-top: 6em;
        padding-bottom: 6em;
        color: #fff;
        text-shadow: 1px 1px 1px #000;
    }

    .bg-black {
        background: #000
    }

    .bg-darker {
        background: #222
    }

    .text-white {
        color: #fff
    }

    .magicspark {
        font-size: 1.2em;
        background-position: center;
        background-size: cover;
        width: 100%;
        background-image: url('https://individualogist.com/offer/assets/img/bg-magicspark.jpg');
        position: relative;
        padding: 2em
    }

    .pa {
        position: absolute
    }

    .overlay-v {
        display: block;
        background: linear-gradient(to right, #000, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0));
        top: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        height: auto
    }

    .cb {
        clear: both
    }

    .img-fr {
        max-width: 500px;
        position: relative;
        display: block;
        width: 80%;
        opacity: 1;
        padding: 1em;
        float: right
    }

    .molecule,
    .atom {
        max-width: 300px;
        padding: 2em !important
    }

    .question {
        font-size: 1.3em;
        text-transform: capitalize;
        font-weight: 700;
        color: #333
    }

    .faq-wrapper {
        padding: 2em
    }

    .buy-button {
        white-space: normal;
        font-size: 1.5em;
        max-width: 400px;
        margin: 1em auto 0;
        background: red;
        text-transform: uppercase;
        font-weight: 700;
        color: #fff;
        padding: .5em 1em;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        text-align: center;
        display: block;
        border-radius: 100px;
        width: 100%
    }

    .buy-button:hover {
        color: #fff;
        transition: .4s;
        -webkit-transition: .4s;
        box-shadow: 0 8px 23px rgba(0, 0, 0, .3);
        border-radius: 100px;
        transform: scale(1.05);
        text-decoration: none;
        background: #bf0505
    }

    .bg-cyan {
        background: #69eed8;
    }

    .ul-crystal {
        list-style: none;
        margin-left: 1em;
        text-align: justify;
        margin-bottom: 20px
    }

    .ul-crystal>li {
        position: relative;
        margin-bottom: 5px;
        margin-left: 10px;
    }

    .ul-crystal>li:before {
        position: absolute;
        left: -40px;
        display: inline-block;
        width: 22px;
        height: 20px;
        margin-right: 1em;
        background: url(https://individualogist.com/offer/assets/img/crystal-icon.png) no-repeat;
        background-size: cover;
        background-position: 100% 100%;
        border-radius: 50%;
        content: "";
        top: 5px;
    }

    .smallprint {
        text-align: center;
        font-size: .8em;
        color: #333;
        font-weight: 700;
        padding-top: .5em;
        color: red;
        opacity: .8
    }

    .dgp-faded {
        width: 100%;
        max-width: 300px;
        display: block;
        position: relative;
        margin: auto;
        padding: 1em
    }

    .dgp-white {
        width: 100%;
        max-width: 500px;
        display: block;
        position: relative;
        margin: auto
    }

    .clipped {
        clip-path: circle(50% at 50% 50%);
    }

    .stone-comparison {
        width: 100%;
        position: relative;
        display: block;
        margin: 1em auto;
        padding: 1em
    }

    .chakra {
        width: 80%;
        max-width: 600px;
        position: relative;
        display: block;
        margin: 1em auto;
        padding: 1em
    }

    .quote-card {
        background: #f8f8f8;
        padding: 1em 2em;
        width: 100%;
        max-width: 500px;
        display: block;
        position: relative;
        box-shadow: 0 8px 15px rgba(0, 0, 0, .15);
        border-radius: .5em;
        margin: 2em auto
    }

    .stars {
        width: 100px;
        height: 30px;
        background: url('https://individualogist.com/offer/assets/img/5stars.png');
        background-size: contain;
        background-repeat: no-repeat;
        display: block;
        position: relative;
        margin: 0 auto
    }

    .quote-name {
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #666;
    }

    .quote-text {
        text-align: center;
        color: #333
    }

    .quote-title {
        text-align: center;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #666;
        font-weight: 900
    }

    .alert-box {
        background: #ffdada;
        border: 2px solid #ff4d4d;
        padding: .5em;
        text-align: center;
        border-radius: 5px
    }

    .alert-box p {
        line-height: 1.5em;
        margin-bottom: 0;
        font-size: 1em
    }

    .important {
        font-weight: 700;
        color: #ff4d4d;
        margin-bottom: .5em;
        font-size: 1em
    }

    .red {
        color: #ff4d4d;
        font-weight: 700
    }

    .indi-logo {
        position: relative;
        height: 40px;
        width: 200px;
        background: url('https://individualogist.com/offer/assets/img/individualogist-logo2.png');
        margin: 2em auto;
        display: block;
        background-size: contain;
        background-repeat: no-repeat;
        filter: drop-shadow(1px 1px 1px rgba(0, 0, 0, .3))
    }

    .multistep {
        position: relative;
        height: 86.5px;
        width: 100%;
        max-width: 1024px;
        background: url('https://individualogist.com/offer/assets/img/multistep.png');
        margin: 0 auto;
        display: block;
        background-size: contain;
        background-repeat: no-repeat
    }

    .p-0 {
        padding: 0 !important
    }

    .warning-container {
        color: red;
        background-color: #f8d7da;
        border-color: #f5c6cb;
        border: 1px solid red;
        padding: .75em;
        border-radius: 10px;
    }

    .dgp-chakras {
        width: 100%;
        max-width: 700px;
        border-radius: 10px;
        margin: 1em auto;
        display: block;
        position: relative
    }

    .form-check-label {
        font-size: 20px;
        font-family: 'Raleway', sans-serif;
        font-weight: 500;
        padding: 3px 10px
    }

    .form-check-label:hover {
        cursor: pointer;
        background: rgb(81 0 128 / 20%);
        transition: .4s;
        -webkit-transition: .4s
    }

    .form-check {
        padding: .5em;
        text-align: center
    }

    .cta-wrapper {
        padding: 1em 1em 2em 1em;
        background: #f8f8f8;
        border-radius: 5px;
        box-shadow: 0 0 32px rgb(81 0 128 / 30%)
    }

    .cta-title {
        border-radius: 5px;
        color: #510080;
        border:2px solid;
        font-weight: 700;
        line-height:1.2em;
        padding: .5em 1em;
        text-align: center;
        font-size: 2em;
    }

    .cta-small {
        margin: auto;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-size: 12px
    }

    .most-popular {
        background: #fedada
    }

    .buy-text {
        color: red;
        font-size: 14px;
        font-weight: 700;
        text-transform: capitalize;
        text-align: center;
        margin-top: 0;
        margin-bottom: 0
    }

    .warning-title {
        color: red;
        font-weight: 700;
        font-size: 1.5em;
        margin-bottom: 0;
        margin-top: .5em;
    }

    .warning-text {
        color: #000;
        font-weight: 700
    }

    .alert-icon {
        background: url('https://individualogist.com/clickbank/assets/img/alert-icon.png');
        width: 100px;
        height: 100px;
        margin: 0 auto;
        display: block;
        background-size: contain;
        background-repeat: no-repeat;
    }

    .upsell-hl {
        text-align: center;
        font-weight: 700;
        margin: 0 auto;
        margin-bottom: .5em
    }

    .decline-link {
        color: #666;
        text-decoration: underline;
        text-align: center;
        margin: 0 auto;
        font-size: 14px
    }

    .quote-box {
        background: #222;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        padding: 1em;
        max-width: 700px;
        display: block;
        position: relative;
        margin: 1em auto;
        border-radius: .5em;
        color: #fff
    }

    .benefit-icon {
        position: relative;
        display: block;
        margin: auto;
        width: 100%;
        max-width: 200px
    }

    .benefit-title {
        font-size: 16px;
        margin-bottom: 0;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #fff;
        background: #510080;
        display: block;
        text-align: center;
        width: 100%;
        max-width: 150px;
        border-radius: 3px;
    }

    .highlight {
        color: #862db9
    }

    .gold {
        color: gold
    }

    .welcome-title {
        font-size: 2em;
        color: #fff;
        text-shadow: 0 0 10px rgb(0 0 0 / 75%), 0 0 20px rgb(0 0 0 / 50%);
        font-family: 'Raleway';
        font-weight: 900;
        line-height: 1em
    }

    .form-check-input {
        margin-top: .8rem
    }

    .dgp-header {
        background: url(//individualogist.com/offer/assets/img/dgp-header.png);
        background-size: cover;
        width: 100%;
        background-repeat: no-repeat;
        background-position: center center;
    }
    
    .name {
        font-weight:inherit!important
    }

    .headline-bg {
        max-width: 1024px;
        margin: 0 auto;
        position: relative;
        background: url('https://individualogist.com/offer/assets/img/bg-cosmospink.png');
        background-repeat: no-repeat;
        background-attachment: fixed;
        background-size: cover;
        background-position: center center;
        padding: 1em;
        color: #fff;
        text-shadow: 1px 1px 1px #000;
        width: 100%
    }

    @media only screen and (max-width:768px) {
        .important,.alert-box p {
            font-size:14px
        }
        .cta-title{
            font-size:1.5em
        }
        .form-check-label {
            font-size:1em
        }
        .buy-button {
            font-size: 1.5em;
            border-radius: 5px
        }

        .img-fr {
            width: 100%;
            position: relative;
            margin: 0 auto
        }

        p {
            clear: both
        }

        .atom,
        .molecule {
            width: 100%;
            max-width: 100%
        }

        .sp-title {
            font-size: 1.5em
        }
        
        .sp-wrapper {
            padding:0
        }

        .upsell-hl {
            font-size: 1.5em
        }

        .ets2 {
            display: none
        }

        .quote-card {
            margin: 1em auto
        }

        .warning-container {
            text-align: center
        }

        .hero-h1 {
            font-size: 2em
        }

        .hero-h4 {
            font-size: 1.2em
        }

        .alert-icon {
            width: 50px;
            height: 50px
        }
        .energy-sensing,.energy-decoding{
            display:block!important;
            width:100%!important;
            float:none!important;
        }
    }

    .safe-checkout {
        width: 100%;
        display: block;
        margin: 1em auto;
        max-width: 400px;
        border-top: 1px solid #e8e8e8;
        padding: 1em
    }

    .count-alert {
        background: orange;
        padding: .25em .5em;
        width: 100%;
        max-width: 400px;
        margin: 1em auto;
        color: #fff;
        font-weight: 700;
        text-align: center;
        border-radius: 4px
    }
    .dgp-comparison{
        width:100%;
        margin:1em auto;
    }
    .hero-testimonial{
        text-align: center;
        box-shadow: 0 5px 15px rgba(0,0,0,.15);
        padding: 1em;
        border-radius: 5px;
        border: none;
        margin: 1em auto;
        color: #fff;
        background: linear-gradient(45deg,#862db9,#510080);
    }
    .hero-testimonial p {
        font-size:18px;
        line-height:1.1em;
        font-style: italic;
        font-family:'Raleway',sans-serif
    }
    .hero-testimonial h2 {
        font-size:14px;
        font-family:'Raleway',sans-serif;
        font-weight:700;
        letter-spacing:1px
    }
    .quote-img {
        position:relative;
        display:block;
        margin: auto;
        width:100%;
        max-width:70px
    }
    .security-text {
        font-size: 11px;
        line-height: 1;
        color: #333;
        max-width:400px;
        margin:auto;
        text-align:center
    }
    .payment-options {
        margin: .5em auto;
        display: block;
        position: relative;
        max-width: 250px;
        width: 100%;
    }
    .pag-cover {
        display:block;
        position:relative;
        width:100%;
        max-width:250px;
        margin: 1em auto;
        border-radius:10px;
        box-shadow:0 5px 15px rgba(0,0,0,.3)
    }
    .energy-sensing,.energy-decoding {
        display: inline-block;
        float: right;
        position: relative;
        margin: 1em auto;
        padding: 1em;
        width: 100%;
        max-width: 400px;
    }
    .multistep-step1{
        display: block;
        margin: 0 auto 1em;
        width: 100%;
    }
    .retail-price {
        margin-bottom: 0;
        line-height: 1em;
        font-size: 1.5em;
        color: #ff4d4d;
        font-family: 'Montserrat';
        font-weight: 700;
    }
    .today-price {
        font-size: 1.75em;
        font-family: 'Montserrat';
        font-weight: 700;
        color: #510080;
        margin-bottom: 0;
    }
</style>

<div class="container-fluid bg dgp-header">
    <div class="row">
        <div class="col-sm-2 mx-auto">
            <div class="indi-logo"></div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto text-center">
            <p class="welcome-title">Welcome, <span class="gold"><span class="name">Spiritual Seeker</span></span> - Please Accept This <span class="gold">Free Gift</span></p>
            <h4 class="hero-h4">Your Own Tool To Exctract Answers and Guidance Straight From The Divine</h4>
            <h1 class="hero-h1">We’ll Send You This <span class="gold">Divine Guidance Pendulum</span>, Charged With Moonlight Energies - FREE</h1>
<!--            <img class="dgp-faded" src="http://individualogist.com/offer/assets/img/dgp-faded.png">-->
        </div>
    </div>
</div>

<div class="container mt-5" id="order-now">
    <div class="row">
        <div class="col-sm-5 mx-auto  my-auto">
            <p class="retail-price text-center">Retail: <strike>$49</strike></p>
            <p class="today-price text-center">Today: FREE</p>
            <img src="http://individualogist.com/offer/assets/img/dgp-white.png" class="dgp-white">
            <div class="alert-box mb-3">
                <p class="important">Important: Running Low!</p>
                <p>As of <span class="red"><span class="date"></span></span>, we only have <span class="red">76 pendulums</span> left. If you are unable to complete your purchase, it's because this item is <span class="red">sold out.</span></p>
            </div>

        </div>
        <div class="col-sm-7 mx-auto my-auto">
            <div class="cta-wrapper">
                <img class="multistep-step1" src="/offer/assets/img/multistep-step1.png">
                <div class="cta-title">Select Your Quantity <p class="cta-small">(Just Pay Shipping)</p>
                </div>


                <div class="form-check">
                    <input class="form-check-input" type="radio" id="radio1" name="radio-category" value="dgp" />
                    <label class="form-check-label" for="radio1">1 x FREE Divine Guidance Pendulum - <strong>($14.90 Shipping)</strong></label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="radio2" name="radio-category" value="dgp-3" checked />
                    <label class="form-check-label most-popular" for="radio2">
                        <div class="red">MOST POPULAR</div> 3 x FREE Divine Guidance Pendulum <strong>($29.90 Shipping)</strong>
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" id="radio3" name="radio-category" value="dgp-6" />
                    <label class="form-check-label" for="radio3">6 x FREE Divine Guidance Pendulum <strong>($49.90 Shipping)</strong></label>
                </div>
                <a class="buy-button" href="#" id="buy-button">Continue To Next Step <i class="fas fa-arrow-right"></i></a>
                <img class="safe-checkout" src="//individualogist.com/offer/assets/img/safe-checkout-2.png">
                <div class="security">
                     <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                 </div>
            </div>
        </div>
    </div>
</div>

<div class="salespage-start part1">
    <div class="container mt-5 mb-3">
        <div class="row">
            <div class="col-sm-4 col-6 mx-auto">
                <div class="hero-testimonial">
                    <div class="stars"></div>
                    <p>It literally made a sizeable cheque fall right into my lap</p>
                    <h2>Maria, 41<br>Reiki Healer</h2>
                </div>
            </div>
            <div class="col-sm-4 col-6 mx-auto">
                <div class="hero-testimonial">
                    <div class="stars"></div>
                    <p>Guided me to find my soulmate. Amazing!</p>
                    <h2>Andrea, 28<br>Student</h2>
                </div>
            </div><div class="col-sm-4 col-6 mx-auto">
                <div class="hero-testimonial">
                    <div class="stars"></div>
                    <p>I use it to tackle challenges everyday. So far so good</p>
                    <h2>Steph, 55<br>Entrepreneur</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sp-wrapper">
                <p class="sp-title">Over 10,000 People Have Used This <span class="highlight">Genuine "7 Sacred Stone" Pendulum</span> To Reveal The Divine's Precise Guidance For Them.</p>
                <ul class="ul-energy">
                    <li>Navigate any challenge and any opportunity with favourable outcomes… Every time</li>
                    <li>A one-of-a-kind divination tool that <strong>connects your soul-level eneregies with the Divine</strong></li>
                    <li>Gain <strong>true sight</strong> into other’s secret intentions</li>
                    <li>Use your Divine Connection to <strong>guide your friends and family</strong> through troubling times and sticky situations</li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sp-wrapper">
                <p class="sp-title">A <span class="highlight">Miracle Prediction Tool</span> You Can Carry Anywhere</p>
                <p>The Divine Guidance Pendulum has blessed so many with incredible miracles by using the 7 sacred stones to connect its wielders with The Divine.</p>
                <p><strong>Bernadette from Iowa</strong> recently used it to "luck into" her soulmate. By using her pendulum to guide her to the right place, at the right time.</p>
                <p><strong>Laura from San Antonio</strong> recently used it to "land her dream job", with a $20,000 signing bonus. By using her pendulum to find out if it was right time to make a change in her career.</p>
                <p><strong>Elaine from Albany</strong> recently used it to "renew her relationship with her husband". By using her pendulum to discover what their marriage needed most at that time.</p>
                <p>All of these miraculous stories are no coincidence... In fact, they all boil down to one thing.</p>
                <p class="text-center"><strong>Connecting With The Divine Using The Same 7 Sacred Stone Tool</strong></p>
            </div>
        </div>
    </div>
    <div class="part2">
        <div class="container">
            <div class="row">
                <div class="sp-wrapper mx-auto">
                    <p class="sp-title">The Divine Guidance Pendulum Is NO <span class="highlight">“Ordinary”</span> Pendulum!</p>
                    <p><span class="name">See</span>, common pendulums work through <strong>“energy sensing”</strong>.
                    <p>They need to be constructed with perfect physical balance.</p>
                    <p>Through this physical balance, it’s able to sense the energies and vibrations of its environment - including the energies of its wielder.</p>
                    <p>As you ask a question, the energy you emit changes. The energies flow from your <strong>soul</strong>, into the sound waves of your <strong>voice</strong>, and the vibrations of your <strong>hands</strong>.</p>
                    <p>The pendulum then senses these physical energies, and reveals its answer through a physical swing.</p>
                    <img src="//individualogist.com/offer/assets/img/energy-sensing.png" class="energy-sensing">
                    <p><strong>This LIMITS the pendulum’s energy-sensing abilities to very surface-level questions…</strong></p>
                    <p><em>…Is my name Mary?</em></p>
                    <p><em>…Will I find love?</em></p>
                    <p><em>…Will I have a good week?</em></p>
                    <p>But when we need <strong>deeper and more profound guidance</strong> - the common pendulum simply is NOT enough...</p>
                    <p>...Either giving vague answers - IF any answer at all!</p>
                    <p>Common pendulums derive answers from YOUR physical energies... But the truth is, truly reliable guidance comes from our deeper soul-level energies.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sp-wrapper part3">
                <p class="sp-title">How To Receive <span class="highlight">Accurate Answers To Important Questions</span>, Straight From The Divine Itself, Using A Tried & Tested Spiritual Tool</p>
                <p>Unlike the common pendulum, the <strong>Divine Guidance Pendulum</strong> takes personalized predictions and guidance to a whole new level.</p>
                <p>This sacred tool embodies the <strong>“7 sacred stones”</strong> that connects your soul-level energies with the Divine, helping you receive its spiritual guidance.</p>
                <img class="dgp-chakras" src="https://individualogist.com/offer/assets/img/dgp-chakras.png">
                <p>The seven sacred stones connect seamlessly the wielder’s seven major chakras points, forming a connection between your soul and the Divine.</p>
                <p>This direct connection works alongside your physical energies… </p>
                <p>…AND also <strong>prevents other influences from interfering with your body’s deeper and more spiritual energies.</strong></p>
                <p>When you ask a question, the Divine Guidance Pendulum channels your soul-level energies, transmits it through a quartz point, before revealing the Divine's shocking answer.</p>
                <p>It's NOT a tool that "senses YOUR physical energies”… It’s a tool that <strong>DECODES the DIVINE'S energies.</strong></p>
                <img src="//individualogist.com/offer/assets/img/energy-decoding.png" class="energy-decoding">
                <ul class="ul-crystal">
                    <li>Forge a deep spiritual connection with the Divine</li>
                    <li>Be guided through any struggle and challenge</li>
                    <li>Gain true sight into your inner emotions, and the feelings of others</li>
                    <li>Ask any question, and gain a reliable answer - every time</li>
                </ul>
                <p>The result?</p>
                <p>A truly powerful pendulum that you can call upon at <strong>anytime, for any situation, challenge, or predicament...</strong></p>
                <p>...And get answers to the important questions that REALLY MATTER...</p>
                <p><em>...<span class="user-question">...What's my fastest path to a life of love, happiness, and wealth?</span></em></p>
                <p><em>…Am I living according to my life purposee?</em></p>
                <p><em>…How can I encounter my soulmate and create a deep and loving relationship?</em></p>
                <p><em>…Should I jump on this new investment opportunity?</em></p>
                <p>Plus, you’ll also be using its momentum to propel your intuition, abundance, and spiritual awareness.</p>
                <div class="mt-1 mb-1">
                    <img src="//individualogist.com/offer/assets/img/dgp-comparison-desktop.png" class="dgp-comparison d-md-block d-none">
                    <img src="//individualogist.com/offer/assets/img/dgp-comparison-mobile.png" class="dgp-comparison d-md-none d-block">
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sp-wrapper mx-auto">
                <p class="sp-title">The Divine Guidance Pendulum Grants You <span class="highlight">3 Amazing Benefits</span></p>
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5 mx-auto my-auto">
                            <img src="https://individualogist.com/offer/assets/img/love-icon.png" class="benefit-icon">
                        </div>
                        <div class="col-sm-7 mx-auto my-auto">
                            <p class="benefit-title">Love</p>
                            <p>Use the pendulum to effortlessly identify if someone’s your <strong>soulmate or twin flame</strong>, and let it guide you towards a deep and fulfilling relationship - where unconditional love is given and returned. Love decisions are often tricky - which is why we must look to the Divine for its wisdom and guidance. As soon as you're connected with the divine, everything is revealed to you with crystal-clear clarity.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto my-auto">
                            <img src="https://individualogist.com/offer/assets/img/wealth-icon.png" class="benefit-icon">
                        </div>
                        <div class="col-sm-7 mx-auto my-auto">
                            <p class="benefit-title">Wealth</p>
                            <p>Opportunities are energies, and by decoding the energies, we can gain <strong>sage-level insight into all potential outcomes.</strong> The Divine Guidance Pendulum absorbs all of these important considerations, and gives you the Divine's immediate answers. Whether it’s a good time to make a move in your career, move forward with a shrewd investment, or even warn you to stay put - the Divine will always tell you the truth.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-5 mx-auto my-auto">
                            <img src="https://individualogist.com/offer/assets/img/serenity-icon.png" class="benefit-icon">
                        </div>
                        <div class="col-sm-7 mx-auto my-auto">
                            <p class="benefit-title">Serenity</p>
                            <p>Uncertainty breeds anxiety, and anxiety manifests into negative energies. Users of the Divine Guidance Pendulum have reported experiencing a <strong>brand new feeling of calm and confidence…</strong> Knowing that the Divine is acting as your own personal guardian angel, silently watching over you.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sp-wrapper">
                <p class="sp-title">Why is this <span class="highlight"><strike>$49</strike> Free?</span></p>
                <p>The truth is, millions of individuals struggle to make ends meet. Not because they’re lazy, not because they deserve to stay stuck.</p>
                <p>Rather, it’s because <strong>they simply have not been given the chance nor guidance to succeed.</strong></p>
                <p>I’m sure you understand exactly what I mean.</p>
                <p>You get dealt a bad hand, and you just end up not playing your cards at all.</p>
                <p>When the truth is, you could’ve won if you had the confidence, clarity, and foresight to take a chance, to make something happen...</p>
                <p>...But hindsight always gets the better of you.</p>
                <p>That’s exactly why we’re not charging for this powerful tool.</p>
                <p>The Divine Guidance Pendulum is the <strong>cure to "soul confusion"</strong> - where anyone willing to change their circumstances can connect directly with the Divine and receive its powerful wisdom.</p>
                <p>Just cover shipping and handling for $14.90, and you can receive the Divine Guidance Pendulum, along with all the <strong>clarity and confidence</strong> that comes with it.</p>
                <a class="buy-button" href="#order-now">Add To Cart <i class="fas fa-arrow-right"></i></a>
                <p class="buy-text">Only $14.90 Expedited Shipping</p>
                <img class="payment-options" src="/offer/paa/img/payment-options.png">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sp-wrapper part4">
                <p class="sp-title">Limited-Time Offer</p>
                <p>There’s only so many pieces we have on hand. Each pendulum is <strong>carefully crafted to use the RIGHT crystals.</strong></p>
                <p>Each pendulum is carefully handmade, with each stone polished and embued into the pendulum's body. After that, it's <strong>charged in the moonlight of a full moon for 24 hours.</strong></p>
                <p>Because of these stringent production requirements, we’re only able to release 100 of these pendulums.</p>
                <p>If you’ve been fortunate enough to stumble upon this page... Be certain that it's <strong>a sign that the Divine Guidance Pendulum has forged a deep connection</strong> with your energies!</p>
                <p class="count-alert">Real-Time Count: 76 pieces left</p>
                <a class="buy-button" href="#order-now">Add To Cart <i class="fas fa-arrow-right"></i></a>
                <p class="buy-text">Buy More & Bless Others With The Gift of Guidance</p>
                <img class="payment-options" src="/offer/paa/img/payment-options.png">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sp-wrapper part5">
                <p class="sp-title">Bonus Gift: Pendulum Activation Guide</p>
                <p>As soon as you claim your Divine Guidance Pendulum, you’ll also receive your <strong>Pendulum Activation Guide</strong> for free.</p>
                <p>This guide outlines everything you should do as soon as you receive your Divine Guidance Pendulum in order to make the most out of it:</p>
                <div class="row">
                    <div class="col-sm-4 mx-auto my-auto">
                        <img class="pag-cover" src="//individualogist.com/offer/assets/img/pag-cover.png">
                    </div>
                    <div class="col-sm-8 mx-auto my-auto">
                        <ul class="ul-crystal">
                            <li>How to <strong>synchronise</strong> your energies with your pendulum</li>
                            <li>How to establish an <strong>unbreakable connection</strong> with the Divine</li>
                            <li>How to <strong>care for your pendulum</strong> (plus recharging it)</li>
                            <li>How to use your pendulum to receive <strong>accurate and reliable guidance</strong></li>
                        </ul>
                    </div>
                </div>
                <a class="buy-button" href="#order-now">Add To Cart <i class="fas fa-arrow-right"></i></a>
                <p class="buy-text">60 Day Moneyback Guarantee</p>
                <img class="payment-options" src="/offer/paa/img/payment-options.png">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="sp-wrapper">
                <p class="sp-title">How The Divine Guidance Pendulum Has <span class="highlight">Changed The Lives Of These Users</span></p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">
                <div class="quote-card">
                    <div class="stars"></div>
                    <p class="quote-text">“The moment I got it out of the packaging, I felt an instant connection. I love how it looks, but I feel something beyond that. Like it knew me. I can feel a quiet vibration in my hands when I hold it. So far I’ve used it mostly to guide me in my relationship. It guided me to build trust, to heal my old wounds, and it’s made us so much happier!”</p>
                    <img class="quote-img" src="//individualogist.com/offer/assets/img/cassandra-t.png">
                    <p class="quote-name text-center">Cassandra T.</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="quote-card">
                    <div class="stars"></div>
                    <p class="quote-text">“Shipping was surprisingly quick, considering the environment we live in now. Been using it for 2 weeks. I feel like a full ton has been lifted off my shoulders. I see with so much clarity. Like I have something to channel my energies through and make sense of everything around me. Whenever I feel anxious, I just pull up my pendulum and it calms me so much. So grateful for this.”</p>
                    <img class="quote-img" src="//individualogist.com/offer/assets/img/olivia-k.png">
                    <p class="quote-name text-center">Olivia K.</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="quote-card">
                    <div class="stars"></div>
                    <p class="quote-text">“As a crystal healer, I’ve worked with pendulums before. But definitely nothing like this. Most pendulums I’ve used are a little wonky, like you can manipulate its movements quite easily. This is not one of them. I can feel the energies flowing around it. Like some kind of magnetic pull, which is how I think it moves. This is one of my main instruments now :)”</p>
                    <img class="quote-img" src="//individualogist.com/offer/assets/img/laura-h.png">
                    <p class="quote-name text-center">Laura H.</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <a class="buy-button" href="#order-now">Add To Cart <i class="fas fa-arrow-right"></i></a>
                <p class="buy-text">60 Day Moneyback Guarantee</p>
                <img class="payment-options" src="/offer/paa/img/payment-options.png">
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="faq-wrapper col-sm-8 mx-auto">
                <p class="sp-title"><span class="highlight">Questions</span> Other Customers Have Asked Before Ordering</p>
                <p class="question">How much is it?</p>
                <p>The Divine Guidance Pendulum normally retails for $49 (excluding shipping). You're only able to get this for free on this page. Just cover shipping and handling for $14.90. </p>
                <p class="question">Do you ship to my country?</p>
                <p>Although we do ship to MOST countries, there are a small number of countries that we are unable to ship to. These countries include: South Africa, India, and Thailand. When completing the order form, please ensure that you've selected the correct country, and do also confirm that your shipping address is correct. If you require assistance, please get in touch with us.</p>
                <p class="question">Can I purchase more than 1 pendulum?</p>
                <p>Yes, and no. Each customer is entitled to take advantage of this offer only once - but you can order a maximum of 6 pendulums in that single order. However, we do ask you to be mindful of others. If you purchase more than 1 pendulum, please do use it to bless your friends and family - and not hoard it in a drawer.</p>
                <p class="question">How long will it take to receive my divine guidance pendulum?</p>
                <p>Our shipping duration normally takes between 7 to 14 days, depending on which country you reside in. A tracking number will be provided, so you'll be able to track exactly where your pendulum is during the shipping process.</p>
                <p class="question">What if I change my mind?</p>
                <p>I get it - purchasing things online might not be something you're used to. Perhaps you're afraid that your parcel will get lost, or perhaps you're afraid that your divine guidance pendulum is not going to work. That's exactly why you're 100% protected by my 60 day moneyback guarantee. All you have to do is send the pendulum back to me in the next 60 days, and I'll refund your entire purchase.</p>
                <a class="buy-button" href="#order-now">Add To Cart <i class="fas fa-arrow-right"></i></a>
                <p class="buy-text">60 Day Moneyback Guarantee</p>
                <img class="payment-options" src="/offer/paa/img/payment-options.png">
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="https://individualogist.com/offer/paa/js/custom.js"></script>
<script>
    //Save query string params to cookies
    $(document).ready(function() {
        var pName = getParameterByName('name');
        var pEmail = getParameterByName('email');
        var pArchetype = getParameterByName('archetype');

        var getName = getCookie('logic_first_name');
        var getEmail = getCookie('logic_email');
        var getArchetype = getCookie('logic_archetype');

        if (pName) {
            setCookie('logic_first_name', pName, '100');
        }
        if (pEmail) {
            setCookie('logic_email', pEmail, '100');
        }
        if (pArchetype) {
            setCookie('logic_archetype', pArchetype, '100');
        }

        $('#buy-button').attr('href', 'http://dgp-3.individua1.pay.clickbank.net/?cbskin=28290&cbfid=48914&name=' + (getUrlParameter('name') != false ? getUrlParameter('name') : '') + '&email=' + (getUrlParameter('email') != false ? getUrlParameter('email') : ''))
    })

    $('input[type=radio][name=radio-category]').change(function() {
        $('#buy-button').attr('href', 'http://' + this.value + '.individua1.pay.clickbank.net/?cbskin=28290&cbfid=48914&name=' + (getUrlParameter('name') != false ? getUrlParameter('name') : '') + '&email=' + (getUrlParameter('email') != false ? getUrlParameter('email') : ''))
    });

    function getUrlParameter(sParam) {
        var sPageURL = window.location.search.substring(1),
            sURLVariables = sPageURL.split('&'),
            sParameterName,
            i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return typeof sParameterName[1] === undefined ? true : decodeURIComponent(sParameterName[1]);
            }
        }
        return false;
    };
    
    $('.name').html(getCookie('name'));
    $('.user-question').html(getCookie('question') + '?')
</script>
<script>
    var today = new Date();
    var dd = String(today.getDate()).padStart(2, '0');
    var mm = String(today.getMonth() + 1).padStart(2, '0');
    var yyyy = today.getFullYear();

    today = mm + '/' + dd + '/' + yyyy;
    $('.date').html(today);
</script>
<div id="footer" class="footer">
    <div class="indi-logo"></div>

    <p class="small">
        <a href="http://individualogist.com" target="_blank">Home</a> |
        <a href="http://individualogist.com/terms-and-conditions" target="_blank">Terms and Conditions</a> |
        <a href="http://individualogist.com/privacy-policy" target="_blank">Privacy Policy</a> |
        <a href="https://support.individualogist.com/article/67-shipping-returns" target="_blank">Shipping & Returns</a> |
        <a href="http://individualogist.com/contact" target="_blank">Contact</a>
    </p>
    <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright <script>
            document.write(new Date().getFullYear());
        </script>. Individualogist.com. All Rights Reserved</p>
    <div class="cb-text">
        <p>Your Credit Card Statement Will Show A Charge from CLKBANK*INDIVIDLOGIST</p>
        <p>ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>
        <p>Testimonials, case studies, and examples found on this page are results that have been forwarded to us by users of the "Divine Guidance Pendulum" and related products, and may not reflect the typical purchaser's experience, may not apply to the average person and are not intended to represent or guarantee that anyone will achieve the same or similar results.</p>
        <script src='//cbtb.clickbank.net/?vendor=individua1'></script>
    </div>
</div>