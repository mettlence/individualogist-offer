<?php
$PageTitle = "Individualogist.com | Archetypal Activation Collection";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/header.php');
include_once($path);
$name = ucwords($_GET['name']);
$email = $_GET['email'];
$archetype = ucwords($_GET['archetype']);
if (empty($name)) {
    $name = 'Friend';
}
if (empty($archetype)) {
    $archetype = 'dominant';
}
?>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
<style>
    p {
        color: inherit
    }

    .bg-black {
        background: #111 !important
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
        z-index: 1;
        position: relative;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
        padding: 2em;
        border-radius: 1em;
        margin: 2em auto;
        margin-top: -3em;
        background: #f8f8f8;
        width: 768px;
        max-width: 100%;
        box-shadow: 0 0 10px #fff, 0 0 20px #fff
    }

    .logo {
        max-width: 200px;
        position: relative;
        margin: 1em auto;
        filter: drop-shadow(1px 1px 1px #000);
        width: 100%;
        display: block
    }

    .bg-clock {
        background: url('/offer/assets/img/bg-clock.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 100%;
        border-top: 3px solid goldenrod;
        border-bottom: 3px solid goldenrod;
        position: relative;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
    }

    .headline {
        font-weight: 900;
        color: #fff;
        text-transform: uppercase;
        text-align: center;
        letter-spacing: 3px;
        font-size: 3em;
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
        background: radial-gradient(at center, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.7));
    }

    .sub-header {
        text-transform: uppercase;
        letter-spacing: 5px;
        color: #222;
        font-weight: 700;
        text-align: center;
        font-size: 1.5em
    }

    .dear-friend {
        font-family: 'Great Vibes', cursive;
        font-weight: 700;
        font-size: 2em;
        color: #333
    }

    .pb-10 {
        padding-bottom: 10em;
    }

    body {
        background: #222
    }

    p {
        font-size: 1em
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
        color: goldenrod;
        font-size: 1.5em;
        background: none;
        position: absolute;
        left: 0px;
        text-shadow: 0 0 5px gold;
        top: 0
    }

    .aac-cta {
        width: 100% !important;
        max-width: 700px;
        display: block;
        position: relative;
        margin: 1em auto;
    }

    .golden-energy {
        position: relative;
        margin-top: -15%;
        margin-bottom: -15%;
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

    .aac-items {
        max-height: 200px;
        margin: 1em auto;
        position: relative;
        display: block;
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.3);
    }

    .testimonial {
        border-radius: 1em;
        margin: 2em auto;
        box-shadow: inset 0 3px 10px rgba(0, 0, 0, .3)
    }

    /*    .red-energy{width:100%;position:absolute;bottom:0;z-index:-1;opacity:.6}*/
    @media only screen and (max-width:768px) {
        .cta-button {
            width: 100%
        }

        .sales-page {
            padding: 1em .5em
        }

        .sparkle-right,
        .sparkle-left {
            width: 50% !important;
            position: relative;
            margin: 0 auto;
            display: block
        }
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

<div class="container-fluid bg-clock pt-5 pb-5">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-sm-2 mx-auto">
            <img src="/offer/assets/img/individualogist-logo2.png" class="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto text-center">
            <h1 class="headline">Today Is The Day Your Life Changes... Forever.</h1>
            <div class="separator"></div>
            <p class="sub-headline">Your Archetypal Activation Cycle Begins This Week.</p>
        </div>
    </div>
    <div class="scroll"></div>
</div>

<div class="container sales-page part1">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <p class="dear-friend">Dear <?php echo $name; ?>,</p>
            <p>I'm thrilled that we've managed to connect after so long...</p>
            <p>...I was beginning to think that you had forgotten about me completely.</p>
            <p>But as they say, better later than never, yes?</p>
            <p>There's no time to waste on chit-chat. I come to you bearing an IMPORTANT message.</p>
            <p>Your Archetypal ACTIVATION Cycle is mere MOMENTS away... If my calculations are correct, it's commencing within the <strong>next 3 days.</strong></p>
            <img src="/offer/assets/img/golden-energy.png" class="w-100 golden-energy">
            <p>This mystical period that approaches is one of great historical significance.</p>
            <p>It is akin to Retrograde cycles, but with far more potent effects.</p>
            <p>As such, it is a significant time to call your motives to the stand, and re-examine your exact hidden desires.</p>
            <p>Think of it as the <strong>rediscovery your spiritual needs, the restoration of your inner peace, and most importantly, the revival of your state of flows.</strong></p>
            <p>And of course, by simply going through this confidential letter in entirety, you will be <strong>given the key that opens this portal of actualized dreams, abundance, and happiness.</strong></p>
            <p class="text-center small-header"><strong>"A powerful secret residing within the depths of your <?php echo $archetype; ?> archetype"</strong></p>
            <button class="step2 cta-button">Yes, I Want To Know MORE!</button>
        </div>
    </div>
</div>

<div class="container sales-page part2 bg-black text-light">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <h2 class="sub-header text-light">"...Why Do Some People Seem To Have It All...?"</h2>
            <div class="separator"></div>
            <p><?php echo $name; ?>, I'm sure you've seen it time and time again.</p>
            <p>Poverty-struck individuals stumbling upon timely sources of financial gain and opportunities...</p>
            <p>Struggling individuals who suddenly turned self-made millionaires overnight...</p>
            <img src="/offer/assets/img/sparkle1.png" class="sparkle-right">
            <p>Seemingly "lost" and "purposeless" friends abruptly living the life of their dreams...</p>
            <p>...And it's during moments like this, as we catch wind of <strong>extraordinary miracles</strong> falling upon people we know... That it becomes PAINFULLY DIFFICULT.</p>
            <p>It's hard not to be envious. It's hard not to be jealous. It's hard not to wonder, <strong>"...why not me?"</strong></p>
            <p>Yet, my dear, it's not out of the ordinary to feel such emotions. After all, we're only human.</p>
            <p class="text-center small-header"><strong>But imagine what it would feel like if it all happened to you too...</strong></p>
            <img src="/offer/assets/img/sparkle3.png" class="sparkle-left">
            <p>Now, I don't mean seeing your life gradually change over a number of months, or years.</p>
            <p>What I mean is a COMPLETE TRANSFORMATION within MINUTES... SECONDS even. Experiences like...</p>
            <p>...Brimming with unexplainable energy...</p>
            <p>...An epiphanic realization of your soul's sole purpose...</p>
            <p>...Chancing upon baffling sources of monetary abundance...</p>
            <p class="text-center small-header"><strong><?php echo $name; ?>, this is the exact moment you've been waiting for.</strong></p>
            <p>And by the end of this letter, you'll admit that <strong>"there isn't a better time to be alive than right NOW."</strong></p>
            <h2 class="sub-header text-light">"The One Missing Ingredient That Will Make Or Break Your Complete, Life Transformation"</h2>
            <div class="separator"></div>
            <p><?php echo $name; ?>, the outcome of our experiences is a direct result of our decisions.</p>
            <p>And the decisions we make are a direct result of our intuition.</p>
            <p>In other words, my dear, if you "unlocked" your divine intuition, if you aligned your path to this mystical force, you can have the foresight to make important, wise decisions that will lead you to abundance and opportunity, rather than struggle and despair!</p>
            <img src="/offer/assets/img/sparkle5.png" class="sparkle-right" style="width:300px">
            <p>I cannot stress this enough, <?php echo $name; ?> - <strong>tuning yourself to your intuition is KEY.</strong></p>
            <p>If you handed an untuned instrument to the most experienced of musicians, only noise can be produced. NOT beautiful music.</p>
            <p>See, you can't fully maximize your true potential if you're not first synchronized with your intuitive ability. Much like "tuning your instrument".</p>
            <p>As explained in your <?php echo $archetype; ?> archetype, your immediate future rests upon your ability to transform setbacks into opportunities; experiences into wisdom.</p>
            <p>But without first unlocking your divine intuition, there is no foreseeable way you could truly encounter abundance and happiness.</p>
            <p>And more importantly, that's also why some people "seem to have it all". It's the individuals with divine intuition who have the foresight to make better, wiser decisions, and ultimately create new and positive opportunities.</p>
            <h2 class="sub-header text-light">"That's why we've crossed paths, <?php echo $name; ?>"</h2>
            <div class="separator"></div>
            <p>While others continue to waddle their way through life, you'll be sprinting your way to the finish line!</p>
            <p>Your eagerness has revealed this precious opportunity to you, my dear. Because soon enough, your archetypal energies will be activated, your divine intuition will be unlocked, and your abundance will be IMMINENT.</p>
            <p>Archetypes, after all, are the analytical psychology study of your true Self - who you were born to be as predicted by your unique personality.</p>
            <img src="/offer/assets/img/blue-energy.png" class="blue-energy">
            <p>And now, it's about time we re-instated your "state of flow", so that you can stop struggling, and start LIVING.</p>
            <p>Let's not forget that your Archetypal Activation Cycle commences in 3 DAYS, so pay close attention. As exciting as this time is, it is also <strong>extremely delicate.</strong></p>
            <p>As you would've realized by now, we are collectively going through a remarkable energetic shift. One that's impacting the Collective Unconscious.</p>
            <p>And by leveraging on this intuitive cycle, you'll be given the ability to "activate" anything of your deepest, msot hidden desires.</p>
            <p class="text-center small-header"><strong>...Much like TEARING A HOLE in the Universe and creating your very own unique portal of abundance and opportunity...</strong></p>
            <p>It's all part of regaining control of your true destiny, and moulding your NEW reality.</p>
            <h2 class="sub-header text-light">"Imagine The Limitless Possibilities"</h2>
            <div class="separator"></div>
            <p>Imagine having the intuition to ACCESS and ACT UPON a full archive of new, upcoming opportunities.</p>
            <p>Imagine having enough financial abundance and physical health to no longer worry about tomorrow's uncertainties.</p>
            <p>Imagine being able to command the direction of your destiny.</p>
            <p>And of course, you'll always been admired with respect and appreciation from others around you.</p>
            <p>That's the exact result that will unfold before your very eyes, if you encounter the divine intuition of your <?php echo $archetype; ?> archetype.</p>
            <p>Let me guide you through this exceptional time, <?php echo $name; ?>, and it will all be yours for the taking!</p>
            <button class="step3 cta-button">Continue Your Sacred Reading</button>
        </div>
    </div>
</div>

<div class="container sales-page part3">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <h2 class="sub-header">"Your Personal Playbook of Self-Discovery, Abundance, and Destiny"</h2>
            <div class="separator bg-dark"></div>
            <p>I've already guided thousands of individuals sharing your <?php echo $archetype; ?> archetype. There is no doubt that your divine intuition is the missing piece causing your blockages and downfalls.</p>
            <p>We already know the power of Astrology - but what many of us don't know is that when combined with scientific and non-metaphysical methods, we create a foolproof sense of divine intuition.</p>
            <p>...And that's where your archetype comes into play.</p>
            <p>Unless you're an analytical psychologist, it's unlikely that you'll be well-versed enough to dissect the archetypal energies surrounding you, and know exactly what steps to realize your desires.</p>
            <p>In light of this, I've condensed decades of my life's work into a <strong>single master plan for you to effortlessly unlock your dormant, divine intuition with your <?php echo $archetype; ?> archetype.</strong></p>
            <p>Which also means that with this guide, you'll finally...</p>
            <ul class="sun-list">
                <li>Have opportunities blossoming before you</li>
                <li>Become aware of your approaching challenges (so that nothing sneaks up on you)</li>
                <li>Harness the RIGHT energies needed to see through a total transformation across all aspects of your life!</li>
            </ul>
            <p>Let me show you the exact tools and materials that will be included in this exclusive collection.</p>
        </div>
        <div class="col-sm-5 mx-auto">
            <img src="/offer/assets/img/aac-ad.png" class="aac-items">
        </div>
        <div class="col-sm-7 mx-auto">
            <p><strong>#1: Archetypal Dimensions</strong></p>
            <p>Your Archetype has several dimensions that interplay and allow you to develop not only your central archetype power, but also relationships within yourself that are a part of your complete self.</p>
        </div>
        <div class="col-sm-5 mx-auto">
            <img src="/offer/assets/img/aac-ap.png" class="aac-items">
        </div>
        <div class="col-sm-7 mx-auto">
            <p><strong>#2: Archetype Power</strong></p>
            <p>Archetypes have something called a "state of polarity". This reading will show you how to move toward becoming whole and having your spirit and soul united with the divine.</p>
        </div>
        <div class="col-sm-5 mx-auto">
            <img src="/offer/assets/img/aac-aw.png" class="aac-items">
        </div>
        <div class="col-sm-7 mx-auto">
            <p><strong>#3: Archetype Wealth</strong></p>
            <p>Wealth, finances and abundance are some of the main reflections we have in the physical realm to help our soul grow and understand it's true power. This reading will show you how it inter plays with our soul journey, and how you can have more of it.</p>
        </div>
        <div class="col-sm-5 mx-auto">
            <img src="/offer/assets/img/aac-lp.png" class="aac-items">
        </div>
        <div class="col-sm-7 mx-auto">
            <p><strong>#4: Archetype LifePath</strong></p>
            <p>As you become more aware of your true, inner power, as well as your archetype characteristics, you will awaken more of your self and master who you truly are. This reading will initiate your soul and help you attain deeper levels of awakening.</p>
        </div>
        <div class="col-sm-5 mx-auto">
            <img src="/offer/assets/img/aac-sm.png" class="aac-items">
        </div>
        <div class="col-sm-7 mx-auto">
            <p><strong>#5: Archetype SoulMate</strong></p>
            <p>There is a belief that our soul mate will compliment us perfectly at a soul and spiritual level. This reading will uncover a never-before-used method for identifying, attracting, and retaining your soul mate for lifelong companionship.</p>
        </div>

        <div class="col-sm-12 mx-auto">
            <p>My dear, as you can already tell, I've left no stone uncovered in this powerful collection.</p>

            <p>I'm incredibly excited for you to begin aligning yourself to your divine intuition, and becoming the abundant being you were meant to be!</p>

            <p>See, this magical guide will show you the exact "cheatcode" to unlock your divine intuition and completely revolutionize every aspect of your life!</p>

            <div class="token-notify" style="display: none;">
                <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                <a class="token-purchase" href="">Buy Now With ONE Click</a>
                <a class="token-card normal-link" id="accept">Pay with a different credit card</a>
                <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
            </div>

            <?php
            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
            switch (strtolower($archetype)) {
                case "caregiver":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "creator":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "explorer":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "hero":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "innocent":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "jester":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "lover":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "magician":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "member":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "outlaw":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "ruler":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "sage":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                default:
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
            }
            ?>

            <h2 class="sub-header">"...Money, Career, Relationships, Love, Purpose - Everything Important To You..."</h2>
            <div class="separator bg-dark"></div>
            <p>By first unlocking your divine intuition, you will IMMEDIATELY open the floodgates of ABUNDANCE. And when that happens, you'll at last be able to live your life synchronized to your true purpose.</p>
            <p>And you'll witness unexplainable miracles begin to unfurl before your very eyes.</p>
            <p>The window of opportunity is closing quickly, my dear.</p>
            <p>Before you even know it, your Archetypal Activation Cycle will begin (LESS than 72 hours from now).</p>
            <p>It would be a COMPLETE shame if you approached this period WITHOUT the tools, WITHOUT the knowledge, and WIHOUT the help you need to make 2019 your most JOYFUL and SUCCESSFUL year.</p>
            <p>Thousands of lives have already been transformed because of archetypes, because of individuation.</p>
            <p>And I want YOURS to be the NEXT.</p>
            <p>Nothing would elate me more than to see you succeed. But help can't be given to those who refuse to receive.</p>
            <p>Once again, this brand new collection is going to completely revolutionze all aspects of your life. Money. Happiness. Love. Purpose. Career. Luck. Spirituality...</p>
            <p>You've already come so far, <?php echo $name; ?> - so, please... Don't give up just yet.</p>
            <p>The life of your dreams is MUCH CLOSER than you think, my dear, and it ALL begins right HERE, right NOW.</p>

            <div class="token-notify" style="display: none;">
                <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                <a class="token-purchase" href="">Buy Now With ONE Click</a>
                <a class="token-card normal-link" id="accept">Pay with a different credit card</a>
                <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
            </div>

            <?php
            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
            switch (strtolower($archetype)) {
                case "caregiver":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "creator":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "explorer":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "hero":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "innocent":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "jester":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "lover":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "magician":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "member":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "outlaw":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "ruler":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "sage":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                default:
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
            }
            ?>

            <h2 class="sub-header">My Eternal Promise To You</h2>
            <div class="separator bg-dark"></div>
            <p><?php echo $name; ?>, the deep intelligence of your <?php echo archetype; ?> archetype is certainly a gift - but at times, it also pressures you to be skeptical and uncertain.</p>
            <p>I do understand your hesitance, my dear.</p>
            <p>Which is also why I'm willing to put my money where my mouth is, and make this promise to you.</p>
            <p class="text-center small-header"><strong>For as long as you hold your Archetypal Activation Collection within your hands, you will be granted relentless support from me and my team of archetypal experts.</strong></p>
            <p class="text-center small-header"><strong>Within the next 60 days, if you're not completely satisfied with your Archetypal Activation Collection, and if you don't experience the miracles you expected, I will award you with a 100% refund - no questions asked.</strong></p>
            <p>Within the next hour, you can unlock your divine intuition and step into the dimension of your deepest desires. A WHOLE NEW world can open its doors to you, <?php echo $name; ?>!</p>
            <ul class="sun-list">
                <li>Use your divine intuition to craft yourself a new reality</li>
                <li>Discover your true purpose and hidden talents to lead a purpose-driven life</li>
                <li>Navigate the Cosmos with complete certainty of every outcome</li>
                <li>Be overwhelmed with an unmatched sense of joy and happiness</li>
                <li>Step into your new reality of limitless opportunity, abundance, and powerful vibrations</li>
            </ul>
            <p>Normally, this incredibly rare offer is extended to my most loyal and private community for the fair price of $57. It might sound stiff, but I promise you, <?php echo $name; ?>, when you see the VALUE and amount of detail put into your Archetypal Activation Collection, you'll admit that $57 is a STEAL.</p>
            <p>But because of your eagerness to take charge of your destiny (as dictated by your <?php echo $archetype; ?> archetype), I've dropped the investment to a small contribution of just $27.</p>
            <p>This opportunity will be extended to you just ONCE. And ONLY once. Which means, once you refresh this page or close this window, it will NO LONGER be available.</p>
            <p>Because I wish to reserve this chance to individuals who are SERIOUS about personal growth, abundance, and unlocking their divine intuition.</p>
            <p>So, click on the button below to request your Archetypal Activation Collection right now, and secure it for just $27.</p>

            <div class="token-notify" style="display: none;">
                <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                <a class="token-purchase" href="">Buy Now With ONE Click</a>
                <a class="token-card normal-link" id="accept">Pay with a different credit card</a>
                <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
            </div>

            <?php
            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
            switch (strtolower($archetype)) {
                case "caregiver":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "creator":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "explorer":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "hero":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "innocent":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "jester":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "lover":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "magician":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "member":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "outlaw":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "ruler":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                case "sage":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
                    break;
                default:
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta.png' class='aac-cta'></a>";
            }
            ?>
        </div>

        <div class="col-sm-12 mx-auto">
            <div class="testimonial">
                <span class="archetype-sm magician"></span>
                <h3>"...Cannot say enough positive things..."</h3>
                <p>I cannot say enough positive things about the various products that are available at individualogist.com as I have purchased several reports and have been 100% satisfied with each one. I have learned so much about myself in such a short span of time and the results are astonishing.</p< <p>I have been through countless hours of psychotherapy dealing with my bi-polar 1 disorder and know myself fairly well, but I knew there had to be more to myself. The Universe answered when I was ready to listen and guided me to individualogist.com</p>

                <div class="testimonial-profile">
                    <p>Jack Brunner, 51 - Magician</p>
                </div>
            </div>
            <div class="testimonial">
                <span class="archetype-sm lover"></span>
                <h3>"I was convinced of the power and precision..."</h3>
                <p>My names is Janice Hickey and I am 62 years old. I am a retired teacher and a seeker of Universal Truths and Mysteries. My archetype is Lover and every word I have read has been right on target.</p>

                <p>I was sceptical at first but as I began reading I was convinced of the power and precision of the information given. I am now a confirmed student of this process and recommend it to any other seeker of truth on this pathway.</p>

                <div class="testimonial-profile">
                    <p>Janice Hickey, 62, Retired Teacher - Lover</p>
                </div>
            </div>
            <div class="testimonial">
                <span class="archetype-sm caregiver"></span>
                <h3>"...Learned more about myself here than any where else..."</h3>
                <p>I truly love your site and have learned more about myself here than any where else. I haven't had my 'ah ha' moment yet but I feel it coming! I wouldn't give up your site for anything.</p>

                <div class="testimonial-profile">
                    <p>Denise Hollinger, 49 - Caregiver</p>
                </div>
            </div>
            <div class="testimonial">
                <span class="archetype-sm hero"></span>
                <h3>"...It reassured me of who I could be..."</h3>
                <p>I had doubts about who I was, even though I had a vague idea of who I really wanted to be. Suddenly, I found myself engrossed in Individualogist. It reassurred me of who I could be, and how I can become be that person - showing numerous possibilities of what I could achieve.</p>
                <p>Wow, it has certainly given me a whole new world of insight. And ever since, I'm becoming the Self I need to be.</p>

                <div class="testimonial-profile">
                    <p>Vivian Ngozi Jensen, 34, Self-employed - Hero</p>
                </div>
            </div>
            <div class="testimonial">
                <span class="archetype-sm explorer"></span>
                <h3>"...Truly heal my physical and spiritual self..."</h3>
                <p>I have been on my spiritual journey for about a year. It wasnt until i got diagnosed with HSV did i truly began to embark on the quest of individuation and natural healing techniques. This has helped me take a better look at myself and go inward to truly HEAL my physical and spiritual self. Thank you for EVERYTHING!</p>

                <div class="testimonial-profile">
                    <p>Ciara L, 22 - Explorer</p>
                </div>
            </div>
            <div class="testimonial">
                <span class="archetype-sm member"></span>
                <h3>"...You won't regret it..."</h3>
                <p>I'm still taking everything in. Do it! Get this program. I promise, you won't regret it!</p>

                <div class="testimonial-profile">
                    <p>Dulce Montas, 48 - Member</p>
                </div>
            </div>

            <img src="/offer/assets/img/aac-main.png" class="w-100">

            <div class="token-notify" style="display: none;">
                <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
                <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
                <a class="token-purchase" href="">Buy Now With ONE Click</a>
                <a class="token-card normal-link" id="accept">Pay with a different credit card</a>
                <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
                <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
            </div>

            <?php
            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
            switch (strtolower($archetype)) {
                case "caregiver":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "creator":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "explorer":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "hero":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "innocent":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "jester":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "lover":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "magician":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "member":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "outlaw":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "ruler":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                case "sage":
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
                    break;
                default:
                    echo "<a class='default-url' href='http://aac.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/aac-cta2.png' class='aac-cta'></a>";
            }
            ?>
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
                $(".default-url").hide();
                $(".name").text(responses.maropost.first_name + " " + responses.maropost.last_name);
                $(".token-purchase").attr("href", responses.token);
                $(".normal-link").attr('href', $(".default-url").attr('href'));
                $(".token-notify").show();
            },
            error: function(err) {
                console.log(err);
            },
        });
    }
</script>