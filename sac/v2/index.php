<?php
$PageTitle = "Individualogist.com | Sacred Archetypal Collection";
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
    p {color:inherit;text-align:justify}
    .bg-black {background: #111 !important}
/*    .bg-black:after{background-image: url(/offer/assets/img/red-energy.png);width: 100%;content: '';display: block;z-index: -1;opacity: .4;height: 900px;position: absolute;bottom: 0;right: 0;left: 0;background-repeat:no-repeat}*/
    .sales-page{z-index:1;position:relative;box-shadow:0 5px 10px rgba(0,0,0,0.3);padding:2em;border-radius:1em;margin:2em auto;margin-top:-3em;background:#f8f8f8;width:768px;max-width:100%;box-shadow:0 0 10px #fff, 0 0 20px #fff}
    .logo{max-width:200px;position:relative;margin:1em auto;filter:drop-shadow(1px 1px 1px #000);width:100%;display:block}
    .bg-clock{background:url('/offer/assets/img/sacv2-bg.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;height:100%;border-top: 3px solid #20d1da;border-bottom: 3px solid #20d1da;;position: relative;box-shadow: 0 10px 20px rgba(0,0,0,0.2);}
    .headline{font-weight: 900;color: #fff;text-transform: uppercase;text-align: center;letter-spacing: 3px;font-size: 3em;text-shadow: 1px 1px #000, 0 0 50px #000;}
    .separator{max-width:200px;width:100%;height:1px;background:#fff;position:relative;margin:1em auto;}
    .divider{width: 500px;max-width: 100%;margin: 0 auto;background: url(/offer/assets/img/separator.svg) center center;height: 55px;position: relative;}
    .sub-headline{color:#fff;text-shadow:1px 1px 1px #000,0 0 50px #000;text-transform:uppercase;letter-spacing:5px;text-align:center}
    .overlay{position:absolute;top:0;right:0;left:0;bottom:0;height:100%;width:100%;background:radial-gradient(at center, rgba(0,0,0,0), rgba(0,0,0,0.7));}
    .sub-header{text-transform:uppercase;letter-spacing:5px;color:#222;font-weight:700;text-align:center;font-size:1.5em}
    .dear-friend{font-family:'Great Vibes',cursive;font-weight:700;font-size:2em;color:#333}
    .pb-10{padding-bottom:10em;}
    body{background:#222}
    p{font-size:1em}
    .cta-button{cursor:pointer;}
    .bg-portal{background:url('/offer/assets/img/bg-portal.jpg');background-attachment:fixed;background-size:cover;background-position:center center;background-repeat:no-repeat}
    .bg-mars{background:url('/offer/assets/img/bg-mars.jpg');background-attachment:fixed;background-size:cover;background-position:center top;background-repeat:no-repeat}
    .small-header{font-size:1.2em;line-height:1.1em}
    .sun-list{padding-left: 15px;margin: 1em auto;}
    ul.sun-list li {list-style: none;padding: 8px 0 0 40px;position: relative;}
    ul.sun-list li:before {font-family: 'FontAwesome';content: '\f185';color: goldenrod;font-size: 1.5em;background: none;position: absolute;left: 0px;text-shadow:0 0 5px gold;top:0}
    .aac-cta{width: 100%!important;max-width: 700px;display: block;position: relative;margin: 1em auto;}
    .golden-energy{position: relative;margin-top: -15%;margin-bottom: -15%;}
    .energy-ball{width: 100%;max-width: 500px;display: block;margin: auto;}
    .sparkle-right {position: relative;float: right;width: 150px;}
    .sparkle-left {position: relative;float: left;width: 150px;}
    .blue-energy{width: 100%;position: absolute;z-index: -1;opacity:.6}
    .aac-items{max-height: 200px;margin: 1em auto;position: relative;display: block;box-shadow: 0 5px 10px rgba(0,0,0,0.3);}
    .testimonial{border-radius:1em;margin:2em auto;box-shadow:inset 0 3px 10px rgba(0,0,0,.3)}
/*    .red-energy{width:100%;position:absolute;bottom:0;z-index:-1;opacity:.6}*/
    @media only screen and (max-width:768px) {.cta-button{width:100%}.sales-page{padding:1em .5em}.sparkle-right,.sparkle-left{width:50% !important;position:relative;margin:0 auto;display:block}}
</style>

<script>
$(function() {
    $('.part1').show();
    $('.part2').hide();
    $('.part3').hide();
    $(".step2").on('click',function() {
//        $('body').addClass('bg-black text-light', {duration:500});
        $('.part1').hide(300);
        $(this).hide(300);
        $('.part2').show(300);
        $('html,body').animate({scrollTop: $(".scroll").offset().top},100);
    });
    $(".step3").on('click',function() {
//        $('body').removeClass('bg-portal', {duration:500});
//        $('body').addClass('bg-mars', {duration:500});
        $('.part2').hide(300);
        $(this).hide(300);
        $('.part3').show(300);
        $('html,body').animate({scrollTop: $(".scroll").offset().top},100);
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
            <h1 class="headline">A Magnificent Shift Has Transformed Your Abundance And Love.</h1>
            <div class="separator"></div>
            <p class="sub-headline">Your Archetypal Initation Cycle Has Begun.</p>
        </div>
    </div>
    <div class="scroll"></div>
</div>

<div class="container sales-page part1">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <p class="dear-friend">Dear <?php echo $name;?>,</p>
            <p>At this point, you've uncovered numerous hidden facets of your true identity.</p>
            <p>We've talked at endless lengths about your traits and tendencies, strengths and weaknesses...</p>
            <p>But most importantly, we've talked about what it means to be an individual of your <?php echo $archetype;?> archetype, and how it applies to you.</p>
            <p>You see, the self-discovery journey you've commenced is so much MORE than just learning about yourself...</p>
            <p><strong>...It's about moulding your destiny to fit your desires...</strong></p>
            <p>And there is no better time to begin your transformation than NOW.</p>
            <p>We are all collectively going through a mystical, energetic shift... A shift that's predicted by planetary movements, a shift that's shaking the world to its knees... A shift, that can potentially change EVERYTHING you've ever assumed about your capabilities, happiness, and abundance.</p>
            <p>And as such, you MUST ACT upon your instincts during this period, and of course, pay careful attention to the signs around you.</p>
            <p>Now, if you stay with me on this special page, I'll show you the exact steps you must undertake to literally re-configure yourself, and begin living the life of your deepest desires...</p>
            <p class="text-center small-header"><strong>"And it all resides within the exceptional powers of your <?php echo $archetype;?> archetype"</strong></p>
            <button class="step2 cta-button">Yes, I Want To Know MORE!</button>
        </div>
    </div>
</div>

<div class="container sales-page part2 bg-black text-light">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <h2 class="sub-header text-light">"...I'm Always Unlucky, Unhappy, and Living In Scarcity..."</h2>
            <div class="separator"></div>
            <p><?php echo $name;?>, I'm sure you've encountered this time and time again.</p>
            <p>...Overdue bills piling up endlessly, and living in constant worry of your financial situation...</p>
            <p>...Working harder and harder, but only to have your efforts met with miniscule rewards...</p>
            <p>...Building new relationships and trying new endavours, but having bad luck stand in your way...</p>
            <p>...And of course, with all these terrible outcomes, it's impossible to be happy.</p>
            <p>It's time like this that we can't help but wonder, "Am I destined to live in despair?"...</p>
            <p class="text-center small-header"><strong>Yes, <?php echo $name;?>... You are destined to live in despair. We all are. BUT. It DOES NOT have to stay that way.</strong></p>
            <p>Stay with me, because by the end of this message, I'm going to guide you towards an <strong>EPIPHANIC REALIZATION...</strong></p>
            <p>One that's going to help you <strong>RECONFIGURE your life for abundance.</strong></p>
            <h2 class="sub-header text-light">"Abundance Is Not Given. Abundance Is Taken."</h2>
            <div class="separator"></div>
            <p><?php echo $name;?>, from birth, we're taught and configured to avoid risks. We're configured to distance ourselves from strangers. We're configured to hold back, rather than put out. We're configured to obey rules of no reason.</p>
            <p>We are all raised within collective environments of ancient constraints and limitations.</p>
            <img src="/offer/assets/img/infinity-glow.png" class="energy-ball">
            <p>And as we adapt to this collective environment, we begin to develop our own set of limitations...</p>
            <p>...This is especially true if you catch yourself making excuses, such as...</p>
            <p>"...I don't have the time to do this..."</p>
            <p>"...I don't know how to do this..."</p>
            <p>"...I'm afraid of taking this risk..."</p>
            <p>You're starting to see the problem clearly now, aren't you, <?php echo $name;?>?</p>
            <p>...Decades of succumbing to our collective environments have made you fearful, without reason.</p>
            <p>...Decades of limiting beliefs have collected over time, completely choking your flow of abundance.</p>
            <p>And so, you live day by day, suffering at the hands of your collective environment, buying into age-old limiting beliefs, and succumbing to your presupposed fate of scarcity and despair...</p>
            <p>...Trapped, like the thousands of others who've yet to break through their collective environments...</p>
            <p>BUT... It's NOT too late to FLUSH AWAY these "cognitive toxins" poisoning your spiritual state.</p>
            <p>You CAN re-configure your consciousness and open up your abundance channels. You CAN alter the course of your destiny. You CAN step into this portal of abundance, love, and happiness.</p>
            <p><?php echo $name;?>, it's all buried within this ONE precious, destiny-altering, abundance-unlocking secret that lies within your <?php echo $archetype;?> archetype.</p>
            <h2 class="sub-header text-light">"You've stumbled upon this NOT by chance, <?php echo $name;?>... But by destiny."</h2>
            <div class="separator"></div>
            <p>Personal transformation is NOT a one-size-fits-all type of solution.</p>
            <p>I mean, we're all inherently unique, are we not?
            <p>We all vibrate at different frequencies, and have different thought patterns... So, how can we assume that we'll respond the same way to the same methods and techniques?</p>
            <p>And that's where your archetype comes into play. With the knowledge and wisdom of your <?php echo $archetype;?> archetype, you now have a STARTING POINT for where to begin.</p>
            <p>Archetypes, after all, are the analytical psychology study of your true Self - who you were born to be as predicted by your unique personality.</p>
            <p>And by ACTING UPON your Archetypal Initiation Cycle, you will be able to tap into that pool of archetypal energy to overcome the greatest obstacles that stand before you…</p>
            <p>In other words, NOW is your OPTIMAL TIME to see your life through a lasting, timeless, and remarkable change.</p>
            <p class="text-center small-header"><strong>...Flush Out The Cognitive Toxins Of Your Psyche, And Prescribe Yourself With Infinite Doses Of Abundance...</strong></p>
            <p>Your archetype holds the key to your transformation. But first, you have to make the AFFIRMATIVE DECISION to follow through.</p>
            <h2 class="sub-header text-light">"Without Knowledge, Action Is Useless. Without Action, Knowledge Is Futile."</h2>
            <div class="separator"></div>
            <p>I want you to imagine the life of your dreams floating before you... A ball of energy that manifests all of your life’s dreams and desires.</p>
            <p>It’s larger than life, shimmering with colours you've never seen before, and glows brighter than the sun…</p>
            <img src="/offer/assets/img/energy-ball.png" class="energy-ball">
            <p>This "ball of energy" represents your desired destiny... Love. Happiness. Abundance.</p>
            <p>But each day that you choose to say “no” to an opportunity that allows you to unleash that energy, that ball shrinks. And as it shrinks, it also dims. It grows smaller, and smaller, and smaller…</p>
            <p>…Until it eventually vanishes.</p>
            <p>Now that you're aware of what's at stake, and what you need to do, you MUST combine this newfound knowledge with instantaneous action.</p>
            <p>That is the recipe for your successful life transformation, <?php echo $name;?>!</p>
            <p>We have entered an exceptional time, <?php echo $name;?>, and soon enough, abundance will be yours for the taking!</p>
            <button class="step3 cta-button">Continue Your Sacred Reading</button>
        </div>
    </div>
</div>

<div class="container sales-page part3">
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <h2 class="sub-header">"Your Personalized 21-Day Guide To Ascertain Your Complete Life Transformation"</h2>
            <div class="separator bg-dark"></div>
            <p>There is no doubt - ridding yourself of your collective environment beliefs is the KEY to your destiny of abundance, happiness, and love.</p>
            <p>And given the resilient nature of your <?php echo $archetype;?> archetype, the journey of correcting these beliefs can be long and difficult...</p>
            <p>BUT. From years of extensive research and studies, we've uncovered each archetype's behavioural response triggers... Triggers that can be MANIPULATED to create almost INSTANTANEOUS behavioural changes, including the ones set in within the mind!</p>
            <p>Based on these findings, we've designed a personalized guide that will help you effortlessly re-configure your internal belief system, by "flushing out" unhealthy beliefs from your collective environment, and REPLACING them with abundant energies...</p>
            <p>Which also means that with this guide, you'll finally...</p> 
            <ul class="sun-list">
                <li>Experience a life-altering transformation in your mind, body, and soul</li> 
                <li>Be in a permanent and correct state of flow to manifest abundance into your life</li> 
                <li>Be granted a profound understanding of your ideal relationship partners</li>
                <li>Harness the RIGHT energies needed to see through a total transformation across all aspects of your life!</li>
            </ul>
            <p>Let me show you the exact tools and materials that will be included in this exclusive collection.</p>
        </div>
        <div class="col-sm-5 mx-auto">
            <img src="/offer/assets/img/sac3.png" class="aac-items">
        </div>
        <div class="col-sm-7 mx-auto">
            <p><strong>Archetypal Affirmations Guide</strong></p>
            <p>Your Archetypal Affirmation Guide is series of 21 potent affirmations that have been customized to your <?php echo $archetype; ?> archetype's common behavioural response system. Each affirmation is to be recited each day, and leverages on the optimal period of 21 days for forming positive habits. Do not underestimate the power of affirmations...</p> 
        </div>
        <div class="col-sm-12 mx-auto">
            <p>Affirmative actions begin with affirmative thoughts. And affirmative thoughts, originate from affirmations. Each affirmation in this guide has been masterfully crafted by actualized individuals belonging to your Archetypal family. Each sentence and declaration has been carefully strung together to be absorbed by your subconscious, and ingested by your soul.</p>
            <p>The Archetypal Affirmations Guide is the very first step that you must take towards integrating your archetype into your existence, and continuing the journey of your Archetypal Initiation Cycle. This material will annihilate your weaknesses, enhance your strengths, and create lasting behavioural changes deep within you.</p>
        </div>
        <div class="col-sm-5 mx-auto">
            <img src="/offer/assets/img/sac4.png" class="aac-items">
        </div>
        <div class="col-sm-7 mx-auto">
            <p><strong>Archetypal Love Compatibility Guide</strong></p>
            <p>This is a highly detailed guide that gives you all the information you need to determine how you interact with people of other archetypes, and whether they’re compatible with you at a fundamental level. If you’ve already found “the one” for you, this guide will give you the exact confirmation you need to know that you’re with the right person; your perfect partner.</p>
        </div>
        <div class="col-sm-12 mx-auto">
            <p>This is a guide that’s unlike any other, and I have no doubt that you will gain immense value from its insights. You’ll finally be able to instantly and accurately recognize potential partners, and sift out the ones whose thoughts, desires, and actions do not resonate with your archetype.</p>
            <p>Imagine all the time and heartache you’ll save! And although the Archetypal Love Compatibility Guide speaks primarily about love, it can also be interpreted and applied to non-romantic relationships as well.</p>
        </div>
        
        <div class="col-sm-12 mx-auto">
            <h2 class="sub-header">"You're Just One Step Away'"</h2>
            <div class="separator bg-dark"></div>
            <p>In just moments, you can commence your Archetypal Journey and witness positive events unfold in your days to come…</p>
            <p>In just minutes, you can unlock the life-changing declarations with your Archetypal Affirmations Guide.</p>
            <p>In just seconds, you can possess the confidence to understand your relationships at a profound level.</p>
            <p>With just one step, you can rid your consciousness of toxic beliefs imposed from your collective environment, and witness abundance blossoming behind you with every step you take.</p>
            <p>And soon, you will be grateful for trusting in your Archetypal Initiation Cycle.</p>
            <p>Everything you’ve ever desired – your happiness and joy, now resides within your hands.</p>
            <p>This is the opportunity that you’ve been waiting for... Do NOT let it slip through your fingers. Not this time.</p>
            
            <?php
        $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
        switch (strtolower($archetype)){
                    case "caregiver":
                        echo "<a href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "creator":
                        echo "<a href='http://sac-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "explorer":
                        echo "<a href='http://sac-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "hero":
                        echo "<a href='http://sac-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "innocent":
                        echo "<a href='http://sac-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "jester":
                        echo "<a href='http://sac-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "lover":
                        echo "<a href='http://sac-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "magician":
                        echo "<a href='http://sac-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "member":
                        echo "<a href='http://sac-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "outlaw":
                        echo "<a href='http://sac-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "ruler":
                        echo "<a href='http://sac-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "sage":
                        echo "<a href='http://sac-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    default:
                        echo "<a href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                    }
        ?>
            
            <h2 class="sub-header">"...Abundance, Transformation, Relationships, Love - Everything Important To You..."</h2>
            <div class="separator bg-dark"></div>
            <p>By first "flushing out" your cognitive toxins, you will IMMEDIATELY experience changes in your cognitive and manifesting abilities. That's when you'll begin to notice a jarring difference in how you approach opportunities, how you interact with your self-beliefs, and of course, how you experience abundance.</p>
            <p>And you'll witness unexplainable miracles begin to unfurl before your very eyes.</p>
            <p>The window of opportunity is closing quickly, my dear.</p>
            <p>Your Archetypal Initiation Cycle has ALREADY BEGUN... Which means, there is NO TIME to waste.</p>
            <p>It would be a COMPLETE shame if you approached this period WITHOUT the tools, WITHOUT the knowledge, and WIHOUT the help you need to make 2019 your most JOYFUL and SUCCESSFUL year.</p>
            <p>Once again, this brand new collection is going to completely revolutionze all aspects of your life. Money. Abundance. Happiness. Love. Spirituality...</p>
            <p>You've already come so far, <?php echo $name;?> - so, please... Don't give up just yet.</p>
            <p>The life of your dreams is MUCH CLOSER than you think, my dear, and it ALL begins right HERE, right NOW.</p>
            
            <?php
        $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
        switch (strtolower($archetype)){
                    case "caregiver":
                        echo "<a href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "creator":
                        echo "<a href='http://sac-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "explorer":
                        echo "<a href='http://sac-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "hero":
                        echo "<a href='http://sac-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "innocent":
                        echo "<a href='http://sac-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "jester":
                        echo "<a href='http://sac-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "lover":
                        echo "<a href='http://sac-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "magician":
                        echo "<a href='http://sac-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "member":
                        echo "<a href='http://sac-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "outlaw":
                        echo "<a href='http://sac-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "ruler":
                        echo "<a href='http://sac-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "sage":
                        echo "<a href='http://sac-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    default:
                        echo "<a href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                    }
        ?>
            
            <h2 class="sub-header">My Eternal Promise To You</h2>
            <div class="separator bg-dark"></div>
            <p><?php echo $name;?>, the deep intelligence of your <?php echo archetype;?> archetype is certainly a gift - but at times, it also pressures you to be skeptical and uncertain.</p>
            <p>I do understand your hesitance, my dear.</p>
            <p>Which is also why I'm willing to put my money where my mouth is, and make you the following promise.</p>
            <p class="text-center small-header"><strong>For as long as you hold your Sacred Archetypal Collection within your hands, you will be granted relentless support from me and my team of archetypal experts.</strong></p> 
            <p class="text-center small-header"><strong>Within the next 60 days, if you're not completely satisfied with your Sacred Archetypal Collection, and if you don't experience the changes or the transformation you expected, I will award you with a 100% refund - no questions asked.</strong></p>
            <p>Within the next hour, you can begin re-configuring your consciouness for abundance, and step into the dimension of your deepest desires. A WHOLE NEW world can open its doors to you, <?php echo $name;?>!</p>
            <ul class="sun-list">
                <li>Transform yourself to a magnet of abundance and opportunity</li>
                <li>Delete all limiting beliefs and abundance blocks that have held you back all these years</li>
                <li>Jump straight into new opportunities with confidence and certainty of a remarkable outcome</li>
                <li>Master the consciousness of your archetype's abundance and love</li>
                <li>Step into your new reality of limitless opportunity, abundance, and powerful vibrations</li>
            </ul>
            <p>Normally, this incredibly rare offer is extended to ONLY my most loyal and private community, for the fair price of $57. It might sound stiff, but I promise you, <?php echo $name;?>, when you see the VALUE and amount of detail put into your Archetypal Activation Collection, you'll admit that $57 is a STEAL.</p>
            <p>But because of your eagerness to take charge of your destiny (as dictated by your <?php echo $archetype;?> archetype), I've dropped the initial investment to a small contribution of just $17.</p>
            <p>This opportunity will be extended to you just ONCE. And ONLY once. Which means, once you refresh this page or close this window, it will NO LONGER be available.</p>
            <p>Because I wish to reserve this chance to individuals who are SERIOUS about personal growth, abundance, and unlocking their divine intuition.</p>
            <p>So, click on the button below to request your Sacred Archetypal Collection right now, and secure it for just $17.</p>
            
            <?php
        $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
        switch (strtolower($archetype)){
                    case "caregiver":
                        echo "<a href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "creator":
                        echo "<a href='http://sac-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "explorer":
                        echo "<a href='http://sac-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "hero":
                        echo "<a href='http://sac-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "innocent":
                        echo "<a href='http://sac-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "jester":
                        echo "<a href='http://sac-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "lover":
                        echo "<a href='http://sac-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "magician":
                        echo "<a href='http://sac-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "member":
                        echo "<a href='http://sac-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "outlaw":
                        echo "<a href='http://sac-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "ruler":
                        echo "<a href='http://sac-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    case "sage":
                        echo "<a href='http://sac-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                        break;
                    default:
                        echo "<a href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta.png' class='aac-cta'></a>";
                    }
        ?>
        </div>
        
        <div class="col-sm-12 mx-auto">
            <div class="testimonial">
                <span class="archetype-sm magician"></span>
                <h3>"...Cannot say enough positive things..."</h3>
                <p>I cannot say enough positive things about the various products that are available at individualogist.com as I have purchased several reports and have been 100% satisfied with each one. I have learned so much about myself in such a short span of time and the results are astonishing.</p< 
                <p>I have been through countless hours of psychotherapy dealing with my bi-polar 1 disorder and know myself fairly well, but I knew there had to be more to myself. The Universe answered when I was ready to listen and guided me to individualogist.com</p> 

                <div class="testimonial-profile">
                    <p>Jack Brunner, 51 - Magician</p>
                </div>
            </div>
            <div class="testimonial">
                <span class="archetype-sm lover"></span>
                <h3>"I was convinced of the power and precision..."</h3>
                <p>My names is Janice Hickey and I am 62 years old.  I am a retired teacher and a seeker of Universal Truths and Mysteries.  My archetype is Lover and every word I have read has been right on target.</p>

                <p>I was sceptical at first but as I began reading I was convinced of the power and precision of the information given.  I am now a confirmed student of this process and recommend it to any other seeker of truth on this pathway.</p>

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
            
            <img src="/offer/assets/img/sac-cover.png" class="w-100">
            
            <?php
        $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
        switch (strtolower($archetype)){
                    case "caregiver":
                        echo "<a href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "creator":
                        echo "<a href='http://sac-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "explorer":
                        echo "<a href='http://sac-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "hero":
                        echo "<a href='http://sac-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "innocent":
                        echo "<a href='http://sac-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "jester":
                        echo "<a href='http://sac-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "lover":
                        echo "<a href='http://sac-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "magician":
                        echo "<a href='http://sac-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "member":
                        echo "<a href='http://sac-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "outlaw":
                        echo "<a href='http://sac-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "ruler":
                        echo "<a href='http://sac-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    case "sage":
                        echo "<a href='http://sac-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
                        break;
                    default:
                        echo "<a href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'><img src='/offer/assets/img/sac-cta2.png' class='aac-cta'></a>";
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
