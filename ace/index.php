<?php
$PageTitle = "Secret Message - Individualogist.com";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/header.php');
include_once($path);
$name = ucwords($_GET['name']);
$email = $_GET['email'];
$archetype = ucwords($_GET['archetype']);
if (!empty($_GET['archetype'])) {
    if ($_GET['archetype'] == 'caregiver') {
        $cbfid = 28769;
    } else if ($_GET['archetype'] == 'creator') {
        $cbfid = 27121;
    } else if ($_GET['archetype'] == 'explorer') {
        $cbfid = 28787;
    } else if ($_GET['archetype'] == 'hero') {
        $cbfid = 28788;
    } else if ($_GET['archetype'] == 'innocent') {
        $cbfid = 28789;
    } else if ($_GET['archetype'] == 'jester') {
        $cbfid = 28790;
    } else if ($_GET['archetype'] == 'lover') {
        $cbfid = 28791;
    } else if ($_GET['archetype'] == 'magician') {
        $cbfid = 28792;
    } else if ($_GET['archetype'] == 'member') {
        $cbfid = 28793;
    } else if ($_GET['archetype'] == 'outlaw') {
        $cbfid = 28794;
    } else if ($_GET['archetype'] == 'ruler') {
        $cbfid = 28795;
    } else if ($_GET['archetype'] == 'sage') {
        $cbfid = 30514;
    } else {
        $cbfid = 28769;
    }
} else {
    $cbfid = 28769;
}
?>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<style>
    p {
        color: inherit
    }

    ul.tick-list li:before {
        color: #26edc9;
    }

    .ted {
        position: relative;
        display: block;
        margin: .5em auto;
        max-width: 500px;
        border-radius: .5em;
        width: 100%
    }

    .ascension {
        position: relative;
        display: block;
        margin: 1em auto;
        max-width: 500px;
        width: 100%
    }

    ul.tick-list {
        margin: 0 auto 1.5em
    }

    .payment-options {
        width: 100%;
        display: block;
        margin: 1em auto;
        max-width: 250px;
    }

    .letter-wrap {
        width: 100%;
        margin: auto;
        max-width: 600px;
        overflow: hidden;
        font-family: 'Satisfy', cursive;
        background: #fff;
        border-radius: 10px;
        padding: 2em;
        box-shadow: 0 0 5px #fff, 0 0 10px #fff
    }

    .letter-body p {
        color: #333;
        margin: 0 auto;
        font-family: cursive;
        line-height: 1.5em;
        font-size: 20px;
        margin-bottom: 1em
    }

    .bg-black {
        background: #111 !important
    }

    .module-wrap .row {
        padding: 1em;
    }

    .cosmic-touch {
        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
        position: relative;
        background: url('/offer/assets/img/cosmic-touch.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .abundance-portal {
        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
        position: relative;
        background: url('/offer/assets/img/abundance-portal.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .sadness {
        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
        position: relative;
        background: url('/offer/assets/img/sadness.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
    }

    .overlay-v {
        position: absolute;
        display: block;
        background: linear-gradient(to right, rgba(0, 0, 0, .9), rgba(0, 0, 0, 0.7), rgba(0, 0, 0, 0.9));
        top: 0;
        left: 0;
        bottom: 0;
        width: 100%;
        height: auto;
    }

    .bg-black:after {
        background-image: url(/offer/assets/img/red-energy.png);
        width: 100%;
        content: '';
        display: block;
        z-index: -1;
        opacity: .4;
        height: 900px;
        position: absolute;
        bottom: 0;
        right: 0;
        left: 0;
        background-repeat: no-repeat
    }

    .sales-page {
        max-width: 800px;
        position: relative;
        padding: 2em;
        margin: -1em auto;
        background: #fff
    }

    .sales-page-fw {
        z-index: 1;
        position: relative;
        box-shadow: 0 -10px 30px #fff;
        padding: 2em;
        margin: -1em auto;
        background: #000;
    }

    .logo {
        max-width: 200px;
        position: relative;
        margin: 1em auto;
        filter: drop-shadow(1px 1px 1px #000);
        width: 100%;
        display: block
    }

    .bg-aladdinlamp {
        background: url('/offer/assets/img/aladdin-lamp.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 100%;
        position: relative;
    }

    .bg-magicbook {
        background: url('/offer/assets/img/magic-book.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 100%;
        position: relative;
    }

    .headline {
        font-weight: 900;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 3px;
        font-size: 2.5em;
        text-shadow: 1px 1px #000, 0 0 50px #000;
    }

    .separator {
        max-width: 200px;
        width: 100%;
        height: 1px;
        background: #fff;
        position: relative;
        margin: 1em auto;
    }

    .divider {
        width: 500px;
        max-width: 100%;
        margin: 0 auto;
        background: url(/offer/assets/img/separator.svg) center center;
        height: 55px;
        position: relative;
    }

    .sub-headline {
        font-weight: 700;
        color: #fff;
        text-shadow: 1px 1px 1px #000, 0 0 50px #000;
        text-transform: uppercase;
        letter-spacing: 5px
    }

    .overlay {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
        bottom: 0;
        height: 100%;
        width: 100%;
        background: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 1));
    }

    .white-border {
        border: 1px solid #fff;
        border-radius: .5em;
        margin-bottom: 0 !important;
        padding: .5em
    }

    .sub-header {
        width: 90%;
        text-transform: capitalize;
        color: #000;
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        text-align: center;
        font-size: 36px;
        margin: 1em auto
    }

    .dear-friend {
        font-family: 'Great Vibes', cursive;
        font-weight: 700;
        font-size: 2em;
        color: #000
    }

    .pb-10 {
        padding-bottom: 10em;
    }

    body {
        background: #fff
    }

    p {
        font-size: 18px
    }

    .p-header {
        font-size: 1.2em;
        line-height: 1.2em;
        padding: 1em;
        text-transform: capitalize;
    }

    .cta-button {
        cursor: pointer;
    }

    .bg-portal {
        background: url('/offer/assets/img/bg-portal.jpg');
        background-attachment: fixed;
        background-size: cover;
        background-position: center center;
        background-repeat: no-repeat
    }

    .bg-mars {
        background: url('/offer/assets/img/bg-mars.jpg');
        background-attachment: fixed;
        background-size: cover;
        background-position: center top;
        background-repeat: no-repeat
    }

    .module-wrap {
        max-width: 900px;
        margin: 0 auto;
        width: 100%;
        overflow: hidden;
        border-radius: .5em;
        border: 1px solid #fff
    }

    .testimonial-wrap {
        max-width: 1200px;
        margin: 0 auto;
        width: 100%
    }

    .small-header {
        font-size: 1.2em;
        line-height: 1.1em
    }

    .sun-list {
        padding-left: 15px;
        margin: 1em auto;
    }

    ul.sun-list li {
        list-style: none;
        padding: 8px 0 0 40px;
        position: relative;
    }

    ul.sun-list li:before {
        font-family: 'FontAwesome';
        content: '\f185';
        color: #34ebb2;
        font-size: 1.5em;
        background: none;
        position: absolute;
        left: 0px;
        text-shadow: 0 0 5px gold;
        top: 0
    }

    .spark-list {
        padding-left: 15px;
        margin: 1em auto;
    }

    .compass {
        width: 100%;
        max-width: 200px;
        margin: 0 auto;
        display: block;
        position: relative
    }

    ul.spark-list li {
        list-style: none;
        padding: 8px 0 0 40px;
        position: relative;
    }

    ul.spark-list li:before {
        font-family: 'FontAwesome';
        content: '\f621';
        color: goldenrod;
        font-size: 1.5em;
        background: none;
        position: absolute;
        left: 0px;
        text-shadow: 0 0 5px gold;
        top: 0
    }

    .buy-button {
        white-space: normal;
        font-size: 2em;
        max-width: 700px;
        margin: 0 auto;
        background: red;
        text-transform: uppercase;
        font-weight: 900;
        color: #fff;
        padding: .5em 1em;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .3);
        text-align: center;
        display: block;
        border-radius: .5em
    }

    .buy-button:hover {
        color: #fff;
        transition: .4s;
        -webkit-transition: .4s;
        box-shadow: 0 8px 23px rgba(0, 0, 0, .3);
        border-radius: 100px;
        transform: scale(1.05)
    }

    .golden-energy {
        position: relative;
        margin-top: -15%;
        margin-bottom: -15%;
    }

    .strong {
        font-weight: 700
    }

    .sparkle-right {
        position: relative;
        float: right;
        width: 150px;
    }

    .sparkle-left {
        position: relative;
        float: left;
        width: 150px;
    }

    .blue-energy {
        width: 100%;
        position: absolute;
        z-index: -1;
        opacity: .6
    }

    .mw-100 {
        max-width: 100%
    }

    .module-1 {
        background: linear-gradient(45deg, #e9ae02, transparent);
    }

    .module-2 {
        background: linear-gradient(45deg, transparent, #159dff);
    }

    .module-3 {
        background: linear-gradient(45deg, #03ae8c, transparent);
    }

    .module-4 {
        background: linear-gradient(45deg, transparent, #920095);
    }

    .module-5 {
        background: linear-gradient(45deg, #e41b00, transparent);
    }

    .module-6 {
        background: linear-gradient(45deg, transparent, #ffc119);
    }

    .module-7 {
        background: linear-gradient(45deg, #00a636, transparent);
    }

    .module-8 {
        background: linear-gradient(45deg, transparent, #d20096);
    }

    .product-img {
        max-width: 400px;
        width: 100%;
        position: relative;
        display: block;
        margin: 1em auto
    }

    .ted-story {
        border: 1px solid #fff;
        border-radius: .5em;
        padding: 1em;
        position: relative
    }

    .whiteline {
        position: relative;
        margin: auto;
        width: 1px;
        height: 50px;
        background: #fff;
        display: block;
    }

    .brain-wire {
        width: 80%;
        max-width: 300px;
        margin: 0 auto;
        display: block;
        margin: 1em auto;
        filter: drop-shadow(1px 1px 1px #000)
    }

    .dark-cloud {
        width: 80%;
        max-width: 500px;
        margin: 0 auto;
        display: block;
        margin: 1em auto
    }

    .ies-items {
        border-radius: .5em;
        max-height: 200px;
        margin: auto;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        position: absolute;
        display: block;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .ies-sq {
        border-radius: 1em;
        max-width: 175px;
        margin: 1em auto;
        position: relative;
        display: block;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .ies-cover {
        max-width: 600px;
        position: relative;
        margin: 1em auto;
        display: block
    }

    .testimonial {
        border-radius: 1em;
        margin: 2em auto;
        box-shadow: inset 0 3px 10px rgba(0, 0, 0, .3);
        border: 2px solid #a72077;
        background: rgba(255, 255, 255, 0.9);
    }

    .testimonial p {
        color: #a72077
    }

    .bbt-1 {
        margin: 1em auto;
        padding: 1em 0;
        border-bottom: 1px solid #666;
    }

    .neon-archetype {
        max-width: 100px;
        margin: .5em auto;
        display: block;
        position: absolute;
        top: -50px;
        left: 0;
        right: 0;
        background: #000;
        border-radius: 100%;
    }

    .testimonial h3 {
        color: #a72077;
        font-family: 'Raleway', sans-serif;
        margin-top: .5em
    }

    .special-bonus {
        background: linear-gradient(90deg, #640698, #3df9ec);
        color: #fff;
        padding: 1em;
        border-radius: .5em;
        margin: 1em auto
    }

    .quote-card {
        background: #222;
        padding: 1em 2em;
        width: 100%;
        max-width: 500px;
        display: block;
        position: relative;
        box-shadow: 0 8px 15px rgba(255, 255, 255, .3);
        border-radius: .5em;
        margin: 2em auto;
    }

    .quote-title {
        text-align: center;
        letter-spacing: 2px;
        text-transform: uppercase;
        color: #fff;
        font-weight: 900;
    }

    .stars {
        width: 100px;
        height: 30px;
        background: url(https://individualogist.com/offer/assets/img/5stars.png);
        background-size: contain;
        background-repeat: no-repeat;
        display: block;
        position: relative;
        margin: 0 auto;
    }

    .pb-10 {
        padding-bottom: 10em
    }

    .quote-text {
        text-align: center;
        color: #fff;
    }

    .quote-name {
        text-align: center;
        font-size: 14px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2px;
        color: #ccc;
    }

    .smallprint {
        text-align: center;
        font-size: 14px;
        font-weight: 700;
        padding-top: .5em;
        color: red;
        opacity: .8;
    }

    /*    .red-energy{width:100%;position:absolute;bottom:0;z-index:-1;opacity:.6}*/
    .twin {
        width: 100%;
        max-width: 700px;
        display: block;
        margin: 1em auto
    }

    @media only screen and (max-width:768px) {
        .center-img {
            padding: 0
        }

        .cta-btn {
            font-size: 18px !important;
            line-height: 1em
        }

        .cta-button {
            width: 100%
        }

        .sales-page {
            padding: 3em .5em
        }

        .sparkle-right,
        .sparkle-left {
            width: 50% !important;
            position: relative;
            margin: 0 auto;
            display: block
        }

        .sub-header {
            width: 100%
        }

        p {
            font-size: 1em
        }

        .buy-button {
            font-size: 2em
        }

        .sub-header {
            font-size: 26px
        }

        .headline {
            font-size: 1.5em
        }

        .sub-headline {
            font-size: .8em
        }

        .testimonial p {
            font-size: 14px
        }

        .ies-items {
            position: relative
        }

        .img-right {
            float: none !important;
            padding: 0 !important
        }
    }

    .cta-btn {
        display: block;
        position: relative;
        margin: 1em auto;
        border-radius: 5px;
        background: linear-gradient(#ba2424, #ff0000);
        color: #fff;
        padding: .5em 1em;
        font-size: 1.5em;
        text-transform: uppercase;
        letter-spacing: 1px;
        font-weight: 700;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15)
    }

    .cta-small {
        font-family: 'Raleway', sans-serif;
        font-weight: 700;
        text-transform: capitalize;
        font-size: .8em;
        letter-spacing: 0
    }

    .cta-btn:hover {
        color: #fff;
        text-decoration: none;
        top: -2px;
        transition: .4s;
        -webkit-transition: .4s
    }

    .subline {
        color: #fff;
        font-weight: 700;
        text-transform: capitalize
    }

    .img-pages {
        position: relative;
        display: block;
        margin: 1em auto;
        width: 100%;
        max-width: 600px
    }

    .center-img {
        position: relative;
        display: block;
        margin: 1em auto;
        padding: 1em;
        max-width: 400px;
        width: 100%
    }

    .img-right {
        position: relative;
        display: block;
        margin: 1em auto;
        float: right;
        max-width: 300px;
        width: 80%;
        padding: 1em;
        clear: both
    }
</style>

<script>
    $(function() {
        $('.part1').show();
        $('.part2').hide();
        $('.part3').hide();
        $(".step2").on('click', function() {
            //        $('body').addClass('bg-black text-light', {duration:500});
            $('.part1').hide(300);
            $(this).hide(300);
            $('.part2').show(300);
            $('html,body').animate({
                scrollTop: $(".scroll").offset().top
            }, 100);
        });
        $(".step3").on('click', function() {
            //        $('body').removeClass('bg-portal', {duration:500});
            //        $('body').addClass('bg-mars', {duration:500});
            $('.part2').hide(300);
            $(this).hide(300);
            $('.part3').show(300);
            $('html,body').animate({
                scrollTop: $(".scroll").offset().top
            }, 100);
        });
    });
</script>

<div class="container-fluid bg-magicbook pt-5 pb-5">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-sm-2 mx-auto">
            <img src="/offer/assets/img/individualogist-logo2.png" class="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto text-center pt-3 pb-3">
            <h1 class="headline">All Your Wealth Wishes Come True When You Discover This "Wealth Magnifying Secret".</h1>
            <p class="subline">A secret message specially prepared for <?php if (empty($name)) {
                                                                            echo 'you';
                                                                        } else {
                                                                            echo $name;
                                                                        }; ?></p>
            <div class="separator"></div>
        </div>
    </div>
    <div class="scroll"></div>
</div>

<div class="container-fluid sales-page">
    <?php
    switch (strtolower($archetype)) {
        case "caregiver":
            echo "<img src='/offer/assets/img/neon-caregiver.png' class='neon-archetype'>";
            break;
        case "creator":
            echo "<img src='/offer/assets/img/neon-creator.png' class='neon-archetype'>";
            break;
        case "explorer":
            echo "<img src='/offer/assets/img/neon-explorer.png' class='neon-archetype'>";
            break;
        case "hero":
            echo "<img src='/offer/assets/img/neon-hero.png' class='neon-archetype'>";
            break;
        case "innocent":
            echo "<img src='/offer/assets/img/neon-innocent.png' class='neon-archetype'>";
            break;
        case "jester":
            echo "<img src='/offer/assets/img/neon-jester.png' class='neon-archetype'>";
            break;
        case "lover":
            echo "<img src='/offer/assets/img/neon-lover.png' class='neon-archetype'>";
            break;
        case "magician":
            echo "<img src='/offer/assets/img/neon-magician.png' class='neon-archetype'>";
            break;
        case "member":
            echo "<img src='/offer/assets/img/neon-member.png' class='neon-archetype'>";
            break;
        case "outlaw":
            echo "<img src='/offer/assets/img/neon-outlaw.png' class='neon-archetype'>";
            break;
        case "ruler":
            echo "<img src='/offer/assets/img/neon-ruler.png' class='neon-archetype'>";
            break;
        case "sage":
            echo "<img src='/offer/assets/img/neon-sage.png' class='neon-archetype'>";
            break;
        default:
            echo "";
    }; ?>

    <div class="row">
        <div class="col-sm-12 mx-auto">
            <p class="dear-friend">Dear <?php if (empty($name)) {
                                            echo 'Abundance Seeker';
                                        } else {
                                            echo $name;
                                        }; ?>,</p>
            <p>If you've been struggling with attracting abundance and wealth into your life...</p>
            <p>Then you must receive this timely reminder:</p>
            <p><?php if (empty($name)) {
                    echo 'My dear';
                } else {
                    echo $name;
                }; ?> - wealth, financial riches, and monetary abundance is yours BY RIGHT!</p>
            <p>And yet, all the struggle that's fallen upon you makes it feel like the Universe has left in you the dark... And piling debt's starting overwhelm you.</p>
            <p>You're tired of struggling and manifesting - <em>who wouldn't be?</em></p>
            <p>But if you're ready to see a grand wealth transformation take place within you, then I'm absolutely certain that the Universe isn't ignoring you after all.</p>
            <p>Right now, on this page, is EXACTLY where you're meant to be.</p>
            <p>By the end of this short reading, you'll discover how to DELETE all finance-related struggles from your life, and replace them with abundant rewards.</p>
        </div>
    </div>
</div>
<div class="container-fluid sales-page">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <h2 class="sub-header">A Ground-Breaking Discovery: Microscopic Particles Have Been Interfering With Your Manifestation Powers</h2>
            <img class="center-img" src="/offer/assets/img/atom.png" style="max-width:200px">
            <p><?php if (empty($name)) {
                    echo 'My dear';
                } else {
                    echo $name;
                }; ?>, the first thing you must understand is that it's not your fault. The uncertainty and frustration you feel towards your financial predicament is perfectly warranted.</p>
            <p>See, like you, many others have been made to believe that our manifestations will come to life by simply projecting our thoughts to the universe.</p>
            <p>Many experts will tell you to simply raise your vibrations, fill yourself with positive energy, and visualize the life you desire.</p>
            <p>But as you may have already realized, manifestation spirals much deeper than that.</p>
            <p>Evidence reveals that the effects of visualizing, thinking positively, and raising your vibrations are TINY compared to what REALLY works.</p>
            <p>You already know that everything is made of particles - our thoughts, our reality... Everything we see and touch is made up of tiny, microscopic energy particles that are constantly vibrating.</p>
            <p>By manifesting, you're actually attempting to change the vibration of these particles to form a brand new reality...</p>
            <p>...Particles behave differently when being consciously "observed".</p>
            <p>That's also known as "The Observer Effect".</p>
            <p>And if particles form your reality, then your reality changes depending on how you "observe" it.</p>
            <p>And how you "observe" it, is based on your INTENTIONS.</p>
            <p>Which means to say that your <strong>intention determines your reality.</strong></p>
            <p class="text-center strong">You might have heard this before, but here's the thing that OVER 90% of "manifesters" miss!</p>
            <h2 class="sub-header">The Causality Chain</h2>
            <img class="center-img" src="/offer/assets/img/causality-chain.png">
            <p>Let's just say you're trying to manifest more wealth.</p>
            <p>It just so happens that an old friend's reconnected with you and brought you a unique opportunity. You act upon it, the outcome's picture-perfect, and you're given some money.</p>
            <p>Now, you may THINK that you've merely set the <strong>intention of manifesting money</strong> - but what you've REALLY manifested is <strong>the causality of chain</strong> that started with the reconnection with that old friend!</p>
            <img src="/offer/assets/img/golden-egg.png" class="img-right">
            <p>In hindsight, the path always looks straight, narrow, and pretty easy to follow.</p>
            <p><em>But what if you kept OBSERVING the result, EXPECTING something to happen...</em></p>
            <p><em>...Worried about whether your "money manifestation" would even be heard...</em></p>
            <p><em>...What if you didn't say YES to reconnecting with that old friend?</em></p>
            <p><em>...What if you didn't say YES to that opportunity presented to you?</em></p>
            <p>...Well, then that causality chain would have completely collapsed, and whatever intention you held, whatever desire you were manifesting, would simply dissipate.</p>
            <img class="center-img" src="/offer/assets/img/chain-collapse.png">
            <p>Another causality chain might show up in some other form, perhaps in the form of lucky numbers appearing before you or even an exciting new job opportunity - but causality chains can't materialize into anything if you're constantly observing the result!</p>
            <p>And that's exactly where most manifesters get stuck.</p>
            <h2 class="sub-header">Clearly, It's NOT About The Clarity and Certainty of Your Intention!</h2>
            <p>Here's where most people take things out of context.</p>
            <p>They take this newfound wisdom, and try to make their intentions clearer through visualizations and affirmations, hoping that the Universe will recognize their efforts and reward them...</p>
            <p>...And experience no change whatsoever.</p>
            <p>Because that's not how manifestation works!</p>
            <p>You see, understanding the truth about Causality Chains is the SOLE factor that determines whether the intention you put out is going to come back to you.</p>
            <p class="text-center strong">As soon as you master the Causality Chain, you'll receive MORE "unexpected blessings" than you can even imagine!</p>
            <p>And in order to tap into the lasting effects of the Causality Chain, we NEED to put into practice a simple technique that ANYONE can use to magnetize wealth, abundance, and pursue a purpose-driven life.</p>
            <p>Like flipping a cosmic switch, once you perform this SINGLE RITUAL, all of your innermost desires will begin to ORBIT around you.</p>
            <h2 class="sub-header">Discover The Hidden Secret Behind Attracting Sudden Wealth and Positive Blessings</h2>
            <p><?php if (empty($name)) {
                    echo 'My dear';
                } else {
                    echo $name;
                }; ?>, without even knowing, you've been manifesting with certain expectations buried deep in your subconscious. And these expectations translate themselves into <strong>"abundance limiters"</strong> that set limits on your Causality Chain.</p>
            <p>So while you could have experienced sudden wealth and positive blessings much sooner, these hidden expectations buried deep in your subconscious have prevented you from living the life of your desires.</p>
            <p>Effects are the exact results you want to experience. For instance: "manifesting $10,000 overnight" or "manifesting the love of my life when I go out partying tomorrow" are just some of the most common manifesting mistakes.</p>
            <p>See, every intention you put out is filled with endless possibilities.</p>
            <p>But by applying "The Observer Effect", you discover that obsessing over visualizing the effects and results actually <strong>IMPOSES LIMITS on your Causality Chains!</strong></p>
            <img class="center-img" src="/offer/assets/img/causality-chain-graphic.png" style="max-width:700px">
            <p><em>“This is the exact reason why some people find themselves stuck in an endless abyss of struggle, challenges, and despair, while those who tap into the power of the Causality Chain only experience their lives becoming more and more abundant each day!"</em></p>
            <p>It's the reason why manifestation as told by teachers and gurus almost never work!</p>
            <p class="text-center strong"><?php if (empty($name)) {
                                                echo 'My friend';
                                            } else {
                                                echo $name;
                                            }; ?>, you've received this message for a palpable reason...</p>
            <p>...The Universe has recognized your plight, and as aligned with your vibrations, this message is part of your very own Causality Chain...</p>
            <p>This is the catalyst that ignites a spark of sudden abundance, wealth, and passion-aligned purpose.</p>
            <p>The way forward has been paved for you in this precious and personalized resource I've specially prepared...</p>
            <p>...A tool that reveals all the wealth-attracting possibilities through your Causality Chain...</p>
            <p>...A tool that aligns you to the most lucrative, purpose-driven, and growth-oriented career paths based on your unique personality...</p>
            <p>...A tool that maximizes financial rewards and luck by drawing from the strengths of your personality</p>
            <p>...A tool that outlines an exact, personalized manifestation method you can use to finally attract wealth, love, and happiness as quickly as tomorrow...</p>
            <h2 class="sub-header">Introducing: The Archetype Causality Effect</h2>
            <p>Personalized to your <?php if (empty($archetype)) {
                                        echo 'personaltiy';
                                    } else {
                                        echo archetype;
                                    }; ?> archetype, The Archetype Causality Effect is a complete guide that equips you with everything you need to rapidly transform your financial struggle into sudden wealth and positive blessings.</p>
            <p>Now, we've worked incredibly hard behind-the-scenes to research, experiment, and finally create the best form of wealth and manifestation guidance.</p>
            <p>This is a guide that ensures anyone who follows it can swiftly activate their innate, wealth-attracting vibrations, and experience a "chain of abundant miracles", back-to-back.</p>
            <p class="text-center strong">The Archetype Causality Effect covers 3 Critical Keys to Guarantee A Causality Chain of Abundance</p>
            <p><strong>3 Secret Abundance Commands</strong> - by following these easy-to-understand commands, you will remove the limits to how much abundance you can manifest by removing all causality limiters from your subconscious. <em>(Yes, you read that right <?php if (empty($name)) {
                                                                                                                                                                                                                                                                                echo 'my dear';
                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                echo $name;
                                                                                                                                                                                                                                                                            }; ?>. As long as you follow these commands, you'll witness a brand-new life brimming with abundance unfurl before your very eyes.)</em></p>
            <p><strong>Causality Career Paths</strong> - this is especially important if you're miserable with your employment situation, because you'll discover several relevant and rewarding career paths that are most suited to your <?php if (empty($archetype)) {
                                                                                                                                                                                                                                                echo 'personaltiy';
                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                echo archetype;
                                                                                                                                                                                                                                            }; ?> archetype. <em>(Naturally, this could be the beginning of a new lucrative business, or a higher-paying career that you're passionate about)</em></p>
            <p><strong>Archetype Manifestation Techniques</strong> - through years research and experimentation, we've uncovered the most effortless ways for each personality archetype to manifest limitless causality chains. <em>(By using these easy-to-follow techniques, you can begin rapidly attracting desires beyond wealth)</em></p>
            <p>Isn’t it finally time for YOU to fully experience sudden wealth and positive blessings into your own life, <?php if (empty($name)) {
                                                                                                                                echo 'friend';
                                                                                                                            } else {
                                                                                                                                echo $name;
                                                                                                                            }; ?>?</p>
            <img src="/offer/assets/img/ace-pages.png" class="img-pages">

            <!-- CTA -->
            <div class="cta-wrapper">
                <div class="token-notify" style="display: none;">
                    <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                    <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                    <a class="token-purchase" href="">Buy Now With ONE Click</a>
                    <a class="token-card" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>" id="accept">Pay with a different credit card</a>
                    <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                    <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
                </div>
                <a class="cta-btn tokenization" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>">Request Your Archetype Causality Effect Now<br><span class="cta-small">And See How Quickly Your Wealth Evolves!</span></a>
            </div>

            <h2 class="sub-header">Science-Backed Proof: The Causality Chain Creates More Possibilities For Sudden Wealth Than Ordinary Particles</h2>
            <p>Research into quantum physics (which stretches back before the 1920s) has offered us a number of important studies that prove the power of the Causality Chain on a very deep level.</p>
            <p>Again, one of the key discoveries in Quantum Mechanics is the "Observer" Effect. Studies have revealed time and time again that particles behave differently when being observed.</p>
            <p>And that occurrence has a direct impact on how our manifestations materialize.</p>
            <p>Every intention you holds contains a field of possibilities. And your causality chains can only manifest within the span of that field.</p>
            <img class="product-img" src="/offer/assets/img/ace-box.png" style="max-width:300px">
            <p>So anything your subconscious determines, recognizes, or even suspects to be "impossible", becomes eliminated from your causality chain, limiting the possibilities for your causality chains to take place.</p>
            <p>That's because that intention you were holding, gets knocked down from a wave (possibility) into a particle (reality).</p>
            <p>This is the same exact reason why skeptical individuals rarely attract their desires, while open-minded individuals attract a vast field of miracles!</p>
            <p>That's right, <?php if (empty($name)) {
                                    echo 'my dear';
                                } else {
                                    echo $name;
                                }; ?> - it's the limits you set on your causality chains that determines exactly how abundant you can become...</p>
            <p>Now that you’ve seen for yourself just how this works, you must also realize how CLOSE you are right now to creating a limitless reality filled with abundant possibilities.</p>

            <!-- CTA -->
            <div class="cta-wrapper">
                <div class="token-notify" style="display: none;">
                    <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                    <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                    <a class="token-purchase" href="">Buy Now With ONE Click</a>
                    <a class="token-card" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>" id="accept">Pay with a different credit card</a>
                    <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                    <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
                </div>
                <a class="cta-btn tokenization" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>">Request Your Archetype Causality Effect Now<br><span class="cta-small">And See How Quickly Your Wealth Evolves!</span></a>
            </div>

            <h2 class="sub-header">At Long Last, You Can Finally See Manifestation Work Its Mysterious Magic In Your Life</h2>
            <p>The truth is, this is the exact sort of actionable and easy-to-follow advice that pretty much anyone can start using today, and begin experiencing a difference tomorrow.</p>
            <p>By simply re-aligning your "abundance limiters" and following the careful guidance of your Archetype Causality Effect, you can rapidly enhance your manifestation prowess.</p>
            <p>I've witnessed this transform the lives of thousands of individuals, each with every kind of challenge and obstacle you can imagine... And the ONE thing they all had in common is that they put in a small amount of effort into following their Archetype Causality Effect.</p>
            <p class="text-center strong">Some Possible Causality Chains That Could Occur Once You Discover These Secrets...</p>
            <ul class="tick-list">
                <li>Finally calming all your anxieties related to financial struggle.</li>
                <li>Having complete freedom to dine at any restaurant or sign any cheque without needing to worry if you can afford it.</li>
                <li>Attaining that status of respect and reverence from those around you for all the abundance you've attracted - some additional assurance to know that you've done well for yourself.</li>
                <li>Feeling that sense of gratification and confidence from simply knowing that you have more than enough to put your kids through college without a loan, or caring for your elderly parents.</li>
                <li>And of course, finally feeling like you've regained control over your life's circumstances as you emerge out of all your struggles.</li>
            </ul>
            <img src="/offer/assets/img/success-mountaintop.png" class="img-right">
            <p><?php if (empty($name)) {
                    echo 'My dear';
                } else {
                    echo $name;
                }; ?>, these are the very pleasures that thousands are already enjoying from simply taking the same steps you're about to take.</p>
            <p>And it's your turn now to finally experience this level of abundance and happiness across multiple aspects of your life.</p>
            <p class="strong">Click on the button below to request your Archetype Causality Effect and say “YES!” to the abundant life you were destined to live!</p>

            <!-- CTA -->
            <div class="cta-wrapper">
                <div class="token-notify" style="display: none;">
                    <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                    <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                    <a class="token-purchase" href="">Buy Now With ONE Click</a>
                    <a class="token-card" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>" id="accept">Pay with a different credit card</a>
                    <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                    <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
                </div>
                <a class="cta-btn tokenization" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>">Request Your Archetype Causality Effect Now<br><span class="cta-small">And See How Quickly Your Wealth Evolves!</span></a>
            </div>

            <h2 class="sub-header">My 60 Day Money Guarantee Ensures Your Complete Protection</h2>
            <p>When you complete your request today, you will be protected by my 60 Day Moneyback Guarantee.</p>
            <p>Within the next 60 days after receiving your Archetype Causality Effect, if you decide that you're not experiencing the effects of your causality chains, or for any reason at all...</p>
            <p>Simply email our support team and we'll do everything we can to ensure your complete satisfaction.</p>
            <p>No questions asked. And of course, no hard feelings.</p>

            <h2 class="sub-header">Everything You're About To Receive</h2>
            <img class="product-img" src="/offer/assets/img/ace-mockup.png">
            <p class="text-center strong">The Archetype Causality Effect covers 3 Critical Keys to Guarantee A Causality Chain of Abundance</p>
            <p><strong>3 Secret Abundance Commands</strong> - by following these easy-to-understand commands, you will remove the limits to how much abundance you can manifest by removing all causality limiters from your subconscious. <em>(Yes, you read that right <?php if (empty($name)) {
                                                                                                                                                                                                                                                                                echo 'my dear';
                                                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                                                echo $name;
                                                                                                                                                                                                                                                                            }; ?>. As long as you follow these commands, you'll witness a brand-new life brimming with abundance unfurl before your very eyes.)</em></p>
            <p><strong>Causality Career Paths</strong> - this is especially important if you're miserable with your employment situation, because you'll discover several relevant and rewarding career paths that are most suited to your <?php if (empty($archetype)) {
                                                                                                                                                                                                                                                echo 'personaltiy';
                                                                                                                                                                                                                                            } else {
                                                                                                                                                                                                                                                echo archetype;
                                                                                                                                                                                                                                            }; ?> archetype. <em>(Naturally, this could be the beginning of a new lucrative business, or a higher-paying career that you're passionate about)</em></p>
            <p><strong>Archetype Manifestation Techniques</strong> - through years research and experimentation, we've uncovered the most effortless ways for each personality archetype to manifest limitless causality chains. <em>(By using these easy-to-follow techniques, you can begin rapidly attracting desires beyond wealth)</em></p>
            <p>Now, despite the enormous value found in this incredible resource. I've made the executive decision to ensure that anyone and everyone in the Individualogist community has the capacity to afford this precious material, regardless of their financial situation.</p>
            <p>It is, however, equally important that this tool does not fall into the wrong hands.</p>
            <p>Which means that if you close this page, you won't get to see this incredibly rare offer again...</p>
            <p>Act now (and for today only), you will NOT pay the original price of $197.</p>
            <p>You won't even have to pay HALF of that.</p>
            <p>Request your Archetype Causality Effect right NOW, and you'll gain access to it for <strong>ONLY $27!</strong></p>

            <!-- CTA -->
            <div class="cta-wrapper">
                <div class="token-notify" style="display: none;">
                    <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                    <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                    <a class="token-purchase" href="">Buy Now With ONE Click</a>
                    <a class="token-card" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>" id="accept">Pay with a different credit card</a>
                    <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                    <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
                </div>
                <a class="cta-btn tokenization" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>">Request Your Archetype Causality Effect Now<br><span class="cta-small">And See How Quickly Your Wealth Evolves!</span></a>
            </div>

            <img class="product-img" src="/offer/assets/img/ace-box.png" style="max-width:300px">
            <p>I know you've been waiting for a sign from the universe, my dear... A sign that all of your financial struggles will come to a swift end.</p>
            <p><?php if (empty($name)) {
                    echo 'Friend';
                } else {
                    echo $name;
                }; ?>, this is the very sign of conviction you've been waiting for.</p>
            <p>Don't let indecision get the better of you this time.</p>
            <p class="text-center strong">Very soon, you can realize your true wealth potential and enjoy endless causality chains leading to abundance, prosperity, and good fortune.</p>
            <p>Simply request your Archetype Causality Effect now, and watch how quickly your desires come to life!</p>

            <!-- CTA -->
            <div class="cta-wrapper">
                <div class="token-notify" style="display: none;">
                    <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                    <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                    <a class="token-purchase" href="">Buy Now With ONE Click</a>
                    <a class="token-card" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>" id="accept">Pay with a different credit card</a>
                    <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                    <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
                </div>
                <a class="cta-btn tokenization" href="https://individua1.pay.clickbank.net/?cbitems=ace&name=<?php echo $name; ?>&email=<?php echo $email; ?>&cbskin=25048&cbfid=<?php echo $cbfid; ?>">Request Your Archetype Causality Effect Now<br><span class="cta-small">And See How Quickly Your Wealth Evolves!</span></a>
            </div>
        </div>
    </div>
</div>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/footer-frontend.php');
include_once($path);
?>
<script type="text/javascript">
    let searchParams = new URLSearchParams(window.location.search);
    let pathArray = window.location.pathname.split("/");
    let email = searchParams.get("email");
    let product = pathArray[2];

    if (email !== null) {
        $.ajax({
            type: "get",
            url: "https://member.individualogist.com/api/tokenization",
            data: {
                page: product,
                email: email,
            },
            success: function(responses) {
                // console.log(responses);
                $(".tokenization").hide();
                $(".name").text(responses.maropost.first_name + " " + responses.maropost.last_name);
                $(".token-purchase").attr("href", responses.token);
                $(".token-notify").show();
            },
            error: function(err) {
                console.log(err);
            },
        });
    }
</script>