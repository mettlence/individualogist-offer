<?php
$PageTitle = "Individuation Emergence Reading | Individualogist.com";
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
    p {color:inherit}
    .bg-black {background: #111 !important}
    .cosmic-touch{box-shadow:0 5px 15px rgba(0,0,0,.3);position:relative;background:url('/offer/assets/img/cosmic-touch.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;}
    .abundance-portal{box-shadow:0 5px 15px rgba(0,0,0,.3);position:relative;background:url('/offer/assets/img/abundance-portal.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;}
    .sadness{box-shadow:0 5px 15px rgba(0,0,0,.3);position:relative;background:url('/offer/assets/img/sadness.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;}
    .overlay-v{position:absolute;display: block;background: linear-gradient(to right,rgba(0,0,0,.8),rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0));top: 0;left: 0;bottom: 0;width: 100%;height: auto;}
    .bg-black:after{background-image: url(/offer/assets/img/red-energy.png);width: 100%;content: '';display: block;z-index: -1;opacity: .4;height: 900px;position: absolute;bottom: 0;right: 0;left: 0;background-repeat:no-repeat}
    .sales-page{position:relative;box-shadow:0 5px 10px rgba(0,0,0,0.3);padding:2em;margin:-1em auto;background:#000}
    .sales-page-fw{z-index:1;position:relative;box-shadow:0 -10px 30px #fff;padding:2em;margin:-1em auto;background:#000;}
    .logo{max-width:200px;position:relative;margin:1em auto;filter:drop-shadow(1px 1px 1px #000);width:100%;display:block}
    .bg-ies{background:url('/offer/assets/img/twosouls.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;height:100%;position: relative;}
    .headline{font-weight: 900;color: #fff;text-transform: uppercase;text-align: center;letter-spacing: 3px;font-size: 2.5em;text-shadow: 1px 1px #000, 0 0 50px #000;}
    .separator{max-width:200px;width:100%;height:1px;background:#fff;position:relative;margin:1em auto;}
    .divider{width: 500px;max-width: 100%;margin: 0 auto;background: url(/offer/assets/img/separator.svg) center center;height: 55px;position: relative;}
    .sub-headline{font-weight:700;color:#fff;text-shadow:1px 1px 1px #000,0 0 50px #000;text-transform:uppercase;letter-spacing:5px}
    .overlay{position:absolute;top:0;right:0;left:0;bottom:0;height:100%;width:100%;background:radial-gradient(at center, rgba(0,0,0,0), rgba(0,0,0,0.3), rgba(0,0,0,0.5));}
    .sub-header{text-shadow:0 0 5px #fff;width:80%;text-transform:uppercase;letter-spacing:5px;color:#fff;font-weight:700;text-align:center;font-size:1.5em;margin:1em auto}
    .dear-friend{font-family:'Great Vibes',cursive;font-weight:700;font-size:2em;color:#fff}
    .pb-10{padding-bottom:10em;}
    body{background:#222}
    p{font-size:18px}
    .p-header{font-size: 1.2em;line-height: 1.2em;padding: 1em;text-transform:capitalize;}
    .cta-button{cursor:pointer;}
    .bg-portal{background:url('/offer/assets/img/bg-portal.jpg');background-attachment:fixed;background-size:cover;background-position:center center;background-repeat:no-repeat}
    .bg-mars{background:url('/offer/assets/img/bg-mars.jpg');background-attachment:fixed;background-size:cover;background-position:center top;background-repeat:no-repeat}
    .module-wrap{max-width:900px;margin:0 auto;width:100%}
    .testimonial-wrap{max-width:1200px;margin:0 auto;width:100%}
    .small-header{font-size:1.2em;line-height:1.1em}
    .sun-list{padding-left: 15px;margin: 1em auto;}
    ul.sun-list li {list-style: none;padding: 8px 0 0 40px;position: relative;}
    ul.sun-list li:before {font-family: 'FontAwesome';content: '\f185';color: #34ebb2;font-size: 1.5em;background: none;position: absolute;left: 0px;text-shadow:0 0 5px gold;top:0}
    .spark-list{padding-left: 15px;margin: 1em auto;}
    .compass {width:100%;max-width:200px;margin:0 auto;display:block;position:relative}
    ul.spark-list li {list-style: none;padding: 8px 0 0 40px;position: relative;}
    ul.spark-list li:before {font-family: 'FontAwesome';content: '\f621';color: goldenrod;font-size: 1.5em;background: none;position: absolute;left: 0px;text-shadow:0 0 5px gold;top:0}
    .buy-button{white-space:normal;font-size:1.5em;max-width:700px;margin: 0 auto;background:red;text-transform:uppercase;font-weight:900;color:#fff;padding:.5em 1em;box-shadow:0 5px 15px rgba(0,0,0,.3);text-align:center;display:block;border-radius:.5em}
    .buy-button:hover{color:#fff;transition:.4s;-webkit-transition:.4s;box-shadow:0 8px 23px rgba(0,0,0,.3);border-radius:100px;transform:scale(1.05)}
    .golden-energy{position: relative;margin-top: -15%;margin-bottom: -15%;}
    .strong{font-weight:700}
    .sparkle-right {position: relative;float: right;width: 150px;}
    .sparkle-left {position: relative;float: left;width: 150px;}
    .blue-energy{width: 100%;position: absolute;z-index: -1;opacity:.6}
    .mw-100{max-width:100%}
    .brain-wire{width:80%;max-width:300px;margin:0 auto;display:block;margin:1em auto;filter:drop-shadow(1px 1px 1px #000)}
    .dark-cloud{width:80%;max-width:500px;margin:0 auto;display:block;margin:1em auto}
    .ies-items{border-radius:1em;max-height: 200px;margin: 1em auto;position: relative;display: block;box-shadow: 0 5px 10px rgba(0,0,0,0.3);}
    .ies-sq{border-radius:1em;max-width: 175px;margin: 1em auto;position: relative;display: block;box-shadow: 0 5px 10px rgba(0,0,0,0.3);}
    .ies-cover{max-width:600px;position:relative;margin: 1em auto;display:block}
    .testimonial{border-radius:1em;margin:2em auto;box-shadow:inset 0 3px 10px rgba(0,0,0,.3);border:2px solid #a72077;background:rgba(255,255,255,0.9);}
    .testimonial p{color:#a72077}
    .bbt-1{margin: 1em auto;padding: 1em 0;border-bottom: 1px solid #666;}
    .neon-archetype{max-width: 100px;margin: .5em auto;display: block;position: absolute;top: -50px;left: 0;right: 0;background: #000;border-radius: 100%;}
    .testimonial h3{color:#a72077;font-family:'Raleway',sans-serif;margin-top:.5em}
    .quote-card{background: #222;padding: 1em 2em;width: 100%;max-width: 500px;display: block;position: relative;box-shadow: 0 8px 15px rgba(255,255,255,.3);border-radius: .5em;margin: 2em auto;}
    .quote-title {text-align: center;letter-spacing: 2px;text-transform: uppercase;color: #fff;font-weight: 900;}
    .stars {width: 100px;height: 30px;background: url(https://individualogist.com/offer/assets/img/5stars.png);background-size: contain;background-repeat: no-repeat;display: block;position: relative;margin: 0 auto;}
    .quote-text {text-align: center;color: #fff;}
    .quote-name {text-align:center;font-size: 14px;font-weight: 700;text-transform: uppercase;letter-spacing: 2px;color: #ccc;}
    .smallprint{text-align: center;font-size:14px;font-weight: 700;padding-top: .5em;color: red;opacity: .8;}
/*    .red-energy{width:100%;position:absolute;bottom:0;z-index:-1;opacity:.6}*/
    .twin{width:100%;max-width:700px;display:block;margin:1em auto}
    @media only screen and (max-width:768px) {.cta-button{width:100%}.sales-page{padding:3em .5em}.sparkle-right,.sparkle-left{width:50% !important;position:relative;margin:0 auto;display:block}.sub-header{width:100%}p{font-size:1em}.buy-button{font-size:1em}.sub-header{font-size:1.2em}.headline{font-size:1.5em}.sub-headline{font-size:.8em}.testimonial p{font-size:14px}}
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

<div class="container-fluid bg-ies pt-5 pb-5">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-sm-2 mx-auto">
            <img src="/offer/assets/img/individualogist-logo2.png" class="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto text-center pt-3 pb-3">
            <h1 class="headline">Discover An Abundance-Attracting, Destiny-Delivering SECRET...</h1>
            <p class="sub-headline">...Hidden In The Tale Of Two <?php echo $_GET['archetype'];if(empty($_GET['archetype'])){echo 'individual';}?>s, And One Shocking Difference...</p>
            <div class="separator"></div>
        </div>
    </div>
    <div class="scroll"></div>
</div>

<div class="container-fluid sales-page text-light">
    <?php
        switch (strtolower($archetype)){
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
                    }
    ;?>
    
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <p class="dear-friend">Dear <?php echo $name;?>,</p>
            <p>This story takes us 46 years back to the graduation ceremony of 2 promising young women, back in 1973.</p>
            <h2 class="sub-header">These 2 young women were remarkably alike.</h2>
            <img class="twin" src="../assets/img/twin.png">
            <p>Both were born into good homes, good families, good grades, with promising futures...</p>
            <p>They shared the same exact birth date, and beyond that, also the same exact <?php echo $archetype;?> archetype.</p>
            <p>With hope in their hearts, and ambition in their hands, both knew that they were somehow meant to lead amazing and fulfilling lives.</p>
            <p class="text-center strong">Fast forward 30 years into the future, by divine intervention, these 2 young women crossed paths once more...</p>
            <p>Even though both were equipped with the same knowledge and education, one of them STRUGGLED to emerge from all sorts of setbacks...</p>
            <p>...While the other conquered fears and failure.</p>
            <p>Even though both came from similar backgrounds and upbringing, one of them RADIATED with abundance, energy, and happiness...</p>
            <p>...While the other emitted frustration, negativity, and hatred for her circumstance.</p>
            <p>30 years ago, both were equipped with great knowledge, showed great promise...</p>
            <p>Yet <strong>only ONE of them</strong> spurred on to live a life of passion, abundance and joy...</p>
            <p class="text-center strong">...While the other remained in struggle, scarcity, and despair.</p>
            <p>And we've seen this familiar story time and time again, <?php echo $name;?>.</p>
            <p>Two people, equal knowledge, equal opportunity, yet completely <strong>different outcomes.</strong></p>
            <p>So, what was the deciding factor that altered their paths...? (we'll circle back to this later)</p>
            <p>...Or the better question to ask is...</p>
            <p class="text-center strong">...Which of the 2 stories sounds most like YOU...?</p>
            <p>Certainly, we would all very much like to be the abundant and fortunate individual in the story.</p>
            <p>We would want to say that we're perfectly aligned with our intentions and unhindered by external influences...</p>
            <p>...But what we want DOES NOT ALWAYS reflect reality.</p>
            <p>We see this "second individual" from the story repeatedly...</p>
            <p>...People struggling with a lack of purpose and direction. People living month-to-month without a plan... People constantly questioning "why them, and not me?"</p>
            <p>No matter how hard they work, no matter how frequent they exercise, no matter how loving they are in their relationships...</p>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 pb-5 text-light sadness">
    <div class="overlay-v"></div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <p class="text-center strong p-header">Life just never goes as planned.</p>
            <p>They try so hard to change their circumstances, to transform their realities, but they just keep <strong>getting beaten down.</strong></p>
            <p>Too often, these "almost abundant" individuals are left wallowing in self pity. Depressed. Drained. Hopeless. Frustrated.</p>
            <p>Because they know for a fact that they deserve MORE...</p>
            <p>...They deserve abundance. They deserve happiness. They deserve the life they envisioned.</p>
            <p>But that "nagging feeling" just never stops. It follows them like a Shadow - everywhere they go.</p>
            <p>You start doubting yourself. Maybe your time just hasn't come...</p>
            <p><strong>Maybe in another life.</strong></p>
            <p>But... Why?</p>
            <p>Why is it that some THRIVE while others STRUGGLE? Are some simply destined for more? Is life truly that heartless and cruel...?</p>
            <p>...Or is there some <strong>hidden secret</strong> that we just can't wrap our heads around...?</p>
            <p>Believe it or not, it is NOT about destiny or luck.</p>
            <p>And no, it is not about manifesting better or visualizing harder either.</p>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 pb-5 text-light cosmic-touch">
    <div class="overlay-v"></div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">The truth is, there is OBVIOUSLY a missing piece to the puzzle!</h2>
            <div class="separator"></div>
            <p>A misplaced key that's buried in this single, universal TRUTH.</p>
            <p class="text-center strong p-header">To live in ABUNDANCE, you must EMERGE from EXTERNAL DEVIATIONS, and ALIGN your INTERNAL INTENTIONS.</p>
            <p>See, this is the difference that SEPARATES the unsuccessful from the successful...</p>
            <p>...The lost and the enlightened...</p>
            <p>...It is the difference that separates who you ARE, from who you have the potential to BECOME...</p>
<!--
            <p>In fact, we experience this concept firsthand in everyday life...</p>
            <p>...Think of that colleague who's always talking about that GREAT BUSINESS IDEA, but never doing anything about it...</p>
            <p>...Think of that high school friend who had all the opportunities, but gambled it all away...</p>
            <p>...Think of that arrogant boss with an over-inflated Ego who's constantly shutting everyone else down...</p>
-->
            <p class="text-center strong">Once you see it, it becomes impossible to "unsee it".</p>
            <p>Now, this is not about manifesting or any of that "ask, believe, receive" new-age mumbo jumbo...</p>
            <p>Follow the logic of it, and you'll see it actually makes perfect sense.</p>
            <p>See, the common denominator here is that "almost abundant individuals" are all misalgned from their "internal intentions".</p>
            <p>Perhaps their intentions and desires were completely aligned (once before), but no one is immune to the <strong>wrath of INTERNAL DEVIATIONS.</strong></p>
            <p>Akin to how a compass goes awry when there's a strong magnetic field present. Here's what I mean...</p>
        </div>
    </div>
</div>
            
        
<div class="container-fluid sales-page text-light mx-auto">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <p class="text-center strong">The smallest adjustment to your internal intention can create drastic differences in your life</p>
            <p>Here's another story. For all your life (and for some strange reason), you've always dreamed of visiting the northernmost point of the world - the North Pole. Maybe you wanted to feel what it's like to stand on top of the world, or maybe you wanted find out whether Santa Claus really lived there.</p>
            <p>Signs are scarce in such a remote part of the world, and all you have for navigation is your trusty compass.</p>
            <p>So during this exceptional and exciting journey, your path and every step you take is perfectly aligned with ONE direction - True North.</p>
            <p>...Except, halfway through the arduous journey... You find out that your compass had been pointing just <strong>two degrees off</strong> this whole time.</p>
            <p>On your compass, that two degrees is represented by mere CENTIMETERES. Barely HALF an inch.</p>
            <p>...Doesn't sound like much, right?</p>
            <!-- Insert Compass Misaligned-->
            <img class="compass" src="/offer/assets/img/compass-misaligned.png">
            <p>Well, if you were just "two degrees off" this whole time, NOT ONLY would you completely MISS your intended destination...</p>
            <p>But the longer you follow the WRONG path, the FURTHER you'd end up from where you INTENDED to go!</p>
            <p>So even though your path and actions were perfectly aligned, you would have ended up so far from the North Pole that it would be closer for you to just start all over again from square one!</p>
            <p>If you're no where near where you want to be, perhaps you've been "two degrees off" this whole time.</p>
            <img class="compass" src="/offer/assets/img/compass-misaligned2.png">
            <p>This phenomenon is commonly known in aviaton as the "One-In-Sixty Rule" - <em>if a pilot flew off course by just ONE degree for SIXTY miles, the plane would end up approximately ONE mile away from its original destination.</em></p>
            <p>And it doesn't apply to just aviation, <?php echo $name;?>!</p>
            <p>See, the same phenomenon is seen in our internal intentions.</p>
            <p>The slightest limiting belief, the smallest uncertainty in our purpose, the tiniest amount of deviation in our internal intentions can force us to completely MISS our destinies!</p>
            <p>And so it's become crystal clear...</p>
            <p class="text-center strong">If you've been MANIFESTING abundance, clearing your energies, attracting positive energy, and you're not seeing the results you thought you'd see...</p>
            <p>Chances are, you've been just two degrees off this entire time.</p>
            <!-- Insert Compass Misaligned Enhanced -->
            <p>And for as long as you struggle with "external deviation", you'll never break away from this vicious cycle of scarcity.</p>
            <p>These external deviations are far more familiar than you think... In fact, they are already in your life, hindering your internal intention! Yes, right at this very moment in time.</p>
            <p>They come in the form of <strong>societal expectations, insecurities, domestic influences, social pressures...</strong></p>
            <p>...Subtle yet potent forces that <strong>throw you off</strong> without you even realizing it!</p>
            <p>Perhaps you can feel as if something's off, but you just can't pinpoint exactly what it is.</p>
            <p>See, it shows in your limitings beliefs. You feel it in your vibrations. You sense it in your soul...</p>
            <p>And you're right.</p>
            <p class="text-center strong p-header">The question is, "how can you emerge from external deviations, and realign your internal intentions?"</p>
            <p>I'm incredibly excited to share this piece of wisdom with you, <?php echo $name;?>!</p>
            <p>See, all the signs and messages you've received have led you to this exact moment... Gearing you up for the ONE OPPORTUNITY that could ignite a miraculous transformation within YOU.</p>
            <p>Now, you've been introduced to your <?php echo $archetype;?> archetype. Which means you're already in the KNOW of your hidden talents, innate strengths, and redeemable weaknesses.</p>
            <p>You've come closer to living in alignment with your personality, identity, and true purpose.</p>
            <p>And now, it's time to perfectly align your internal intentions, desires, and destiny - WITHOUT influence and hindrance from external deviations.</p>
            <p>We can now do that through something I call...</p>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 pb-5 text-light abundance-portal">
    <div class="overlay-v"></div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <!-- Unique Mechanism needs to link more directly to epiphany bridge and false beliefs -->
            <!-- What if it doesn't work -->
            <!-- How do i know it will work for me -->
            <h2 class="sub-header">"Individuation Emergence"</h2>
            <div class="separator"></div>
            <p>Individuation emergence is a <strong>sacred, psychological process that allows you to emerge from external deviations, and enter your highest state of internal intentions.</strong></p>
            <p>...A state that makes you immune to confusing external forces. A state of abundance and destiny that BELONGS to you, CONTROLLED by you.</p>
            <img class="brain-wire" src="/offer/assets/img/brain-wire.png">
            <p>...Gain immunity from all sorts of limiting beliefs, fears, anxiety, and external deviations.</p>
            <p>...Become perfectly align your direction, internal intention, and destiny with laser-like precision.</p>
            <p>...Consolidating all your magnificent knowledge, gifts, and talents, and knowing WHAT TO DO with them.</p>
            <p>...Seizing all <strong>the abundance, riches, and monetary gain</strong> for yourself, based on the deepest desires of your internal intention.</p>
            <p>You can experience all of these magnificent changes, by just making one "small" adjustment from within!</p>
            <p>You'll never have to deal with that nagging feeling of despair and hopelessness ever again!</p>
            <p>That's the exact destiny that awaits you through "individuation emergence", <?php echo $name;?>.</p>
        </div>
    </div>
</div>
<div class="container-fluid sales-page text-light mx-auto">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">This Is Unlike Anything We've Ever Created Before</h2>
            <p class="text-center strong">By simply tapping into individuation and your inner Self, you can encounter an epiphanic revelation that eliminates all distractions, guiding you to access a hidden part of your "psyche", unlocking your true innermost potential.</p>
            <p>With this secret method in hand, you can take a deep dive into your character and personality, "rise above" your vibrations, activate your higher self, and of course - experience an imminent transformation... From head to toe, mind to soul.</p>
            <p>Truly, a powerful process, and one that can grant you immense growth, and life-changing breakthroughs.</p>
            <p>And it's all fairly straightforward.</p>
            <h2 class="sub-header">Your Very Own Guide Of Individuation, Abundance, and Emergence</h2>
            <div class="separator"></div>
            <p>We've removed ALL the uncertainty from individuation emergence.</p>
            <p>We've given you a <strong>definitive, step-by-step guide</strong> that's straightforward, easy to follow and easy to understand.</p>
            <p>We've equipped you with a series of modules that will show you HOW to activate your higher self in the face of new opportunities and challenges.</p>
            <p>And most of all, we've handed you a blueprint that guides you through <strong>MASTERING individuation emergence.</strong></p>
            <img class="w-100" src="/offer/assets/img/glow-separator.png">
            <p>This is a transformative series that leaves no stone unturned, covering all <strong>phases of individuation emergence</strong>, including your 7 stages of archetypal discovery, the full process of individuation, aligning your anima/animus, shadow work, and ego strenghtening.</p>
            <p>By combining all these different phases, you can receive <strong>structured guidance to experience your holistic transformation!</strong></p>
            <p>At last, you'll have everything at your disposal to <strong>consciously emerge from external deviations</strong>, live in perfectly alignment with your internal intentions...</p>
            <p>...And build your new reality from the ground-up, as effortlessly as stacking blocks of lego.</p>
            <p>Imagine being perfectly aligned to your Higher Self, and being rewarded with all the abundance the world has to offer...</p>
            <p>It can all be yours as soon as you receive your Individuation Emergence Series, <?php echo $name;?>.</p>
        </div>
    </div>
</div>
<div class="container-fluid sales-page text-light mx-auto">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">8 Powerful Modules For Your Imminent Emergence</h2>
            <div class="separator"></div>
        </div>
    </div>
    <div class="module-wrap">
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/ies-module1.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #1: Archetypal Character Discovery</strong></p>
                <p>Our adventure begins with the root of it all – the unconscious. This module takes you on a deep dive into the transcendent mind through the concept of the psychoid.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/ies-module2.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #2: Activating Your Higher Self and Spiritual Archetype</strong></p>
                <p>To realize the Self intellectually and emotionally, one must have reconciled the four archetypal structures namely: the Persona, the Shadow, the Anima, and the Animus. This reconciliation leads to a wholeness solely defined by the Self - a pre-requisite of Individuation Emergence.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/ies-module3.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #3: Grounding Your Archetype In Everyday Life</strong></p>
                <p>In order to ground our archetypes into our everyday realities, we must first address unresolved conflicts within structural elements of our psyche. We can do so seamlessly by making one simple realization that we mention in this module.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/ies-module4.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #4: The Challenge of Selfhood</strong></p>
                <p>The Self makes choices with the help of reinforcements.  We come to understand the various types of reinforcements, learning how to align them with our actions and desires as to achieve the highest potential of the human psyche. </p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/ies-module5.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #5: Life Transformation With Your Archetype</strong></p>
                <p>Conventional societal expectations and external deviations can unconsciously create an inner rift that confuses us about who we truly are. We learn to combat this by using individuation emergence to make one enormous, transformative shift within our archetypes.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/ies-module6.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #6: Unifying Your Unique Archetype Persona</strong></p>
                <p>Individuation emergence requires a roadmap which will give us an idea of how to begin and where to go in life. We examine the famous social institutions that are present around us. Our experiences with them will form part of the lens that we use to understand the external world.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/ies-module7.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #7: Opening New Archetypes</strong></p>
                <p>The content in this final section focuses on a brief summary of points present in each archetype. By presenting basic notions of the goals, weaknesses, etc., of each archetype, you as the learner will know how to move forward with all of this newly learned wisdom.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/ies-module8.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #8: The Ending and Beginning</strong></p>
                <p>This final section seeks to maintain the integrity of the knowledge that was imparted specifically for you. By reviewing the crucial points made through a quick re-emphasis, you can internalize the entirety of individuation emergence in a better way as we review and revise vital points to give you a complete bird's eye view of the whole process.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/sq-ies.png" class="ies-sq">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>BONUS: Individuation Emergence Audio Book</strong></p>
                <p>Prefer to listen on-the-go? You'll also gain access to the entire Individuation Emergence Series in MP3!</p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <?php include 'ies-cta-v2.php';?>
        </div>    
    </div>
    
    <!-- Reaffirm epiphany bridge, state of change, and unique mechanism here -->
    <!-- How is this different from paa and everything else -->
    <!-- Insert new section -->
    
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">Don't Let Indecision Get The Better Of You... Not This Time.</h2>
            <div class="separator"></div>
<!--
            <p>See, I previously shared with you that your <?php echo $archetype;?> struggles with indecision and uncertainty, that's what primarily causes you to miss valuable opportunities.</p>
            <p>...Will you allow indecision to control you this time...?</p>
            <p>For just a second, let's take your hesitation out of the equation, and think about this...</p>
-->
            <p class="text-center strong p-header">As soon as you discover the secrets of individuation emergence, endless possibilities can unfold. Things like...</p>
            <p>...Becoming <strong>conscious of your self-restraining habits</strong>, and how you can FORCE them to work in your favour...</p>
            <p>...Having a <strong>designated path for you to follow</strong> that's exactly aligned to your true direction...</p>
            <p>...Mastering your consciousness to <strong>select the exact things you want</strong> in your desired reality...</p>
            <p>...Attaining a <strong>state of enlightenment and happiness</strong> that delivers abundance to you without needing to manifest in the first place...</p>
            <p>...And of course, emerging into the <strong>abundant <?php echo $_GET['archetype'];if(empty($_GET['archetype'])){echo 'individual';}?> you were meant to be!</strong></p>
            <p>Your Individuation Emergence Series can give you all of that, <?php echo $name;?>!</p>
            <p class="text-center strong p-header">Now, this is program is not due for "public release" until later in the year. And I'm planning on retailing it for $97.</p>
            <p>It might seem like a steep price, but consider the value you're receiving from it VERY CAREFULLY...</p>
            <p>How EFFORTLESS this system guides you through remarkable transformations...</p>
            <p>How everything is broken down into simple, easy-to-follow phases...</p>
            <p>How powerful it is in EVOKING transformation...</p>
            <p>...$97 is quite honestly a steal!</p>
            <p class="text-center strong p-header">BUT, <?php echo $name;?>, being an avid fan and supporter of our mission, you are NOT just "another outsider" to me.</p>
            <p>Which is exactly why you're amongst the rare handful of archetypal enthusiasts to see this special page in the first place!</p>
            <p>So, I'm inviting you to receive your very own "Invite-Only Version" of the Individuation Emergence Series right NOW.</p>
            <p>That means you won't have to wait until later in the year to get this. You can gain early access to this series IMMEDIATELY!</p>
            <p class="text-center strong p-header">AND ON TOP OF THAT, I'm ALSO giving you my special 80% DISCOUNT.</p>
            <p>Now, <strong>ON THIS PAGE ONLY</strong>, you can receive your Individuation Emergence Series at the heavily discounted price of <strike>$97</strike> just $17.</p>
            
            <?php include 'ies-cta-v2.php';?>
        </div>
    </div>
</div>
<div class="container-fluid sales-page text-light mx-auto">
    <div class="testimonial-wrap">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="quote-card mw-100">
                    <h4 class="quote-title">"Things changed IMMEDIATELY"</h4>
                    <div class="stars"></div>
                    <p class="quote-text">"The past few years have been painful for me. My sales had never been lower. From low 6 figures a year, it got so bad that I would have been lucky to even make 5. I tried everything to get back on my game. Manifesting, NLP, meditating. But nothing changed. I thought it was time to quit and start looking for another job.</p>
                    <p>I found individualogist at my lowest, read their materials, and something just kinda 'clicked' inside me. I became so focused on growing numbers that I had completely forgot why I got into sales in the first place. For the people, the relationships. And so I followed the individuation emergence series. I started tapping BACK into my strengths, rediscovering my purpose, getting rid of deviations, lasering in on my path. And things changed IMMEDIATELY! I made MORE LAST MONTH THAN THE WHOLE OF LAST YEAR!"</p>
                    <p class="quote-name">Salena Lassi, 53, Realtor</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <div class="quote-card">
                    <h4 class="quote-title">"Unlike anything I've ever tried"</h4>
                    <div class="stars"></div>
                    <p class="quote-text">"I've honestly tried so many different programs that I'm honestly on the verge of giving up. But the individuation emergence series is seriously unlike anything I've ever tried. My eyes are now open to what's obviously right in front of me, and I now know exactly I have to do. Thank you for this amazing gift."</p>
                    <p class="quote-name">Zoey Aatto, 41, Housewife</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
            <div class="col-sm-6 mx-auto">
                <div class="quote-card">
                    <h4 class="quote-title">"Whole different level of clarity"</h4>
                    <div class="stars"></div>
                    <p class="quote-text">"Extremely, extremely detailed. I've read a bit about individuation once before, but this series really takes things to a whole different level of clarity. It revealed a lot of things that I had not realized about myself before. Why I do things a certain way. Why I have a reaction to certain things. It is all very well put together. Great stuff!"</p>
                    <p class="quote-name">Francis Haynes, 66, Adjunct Professor</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 mx-auto">
                <div class="quote-card">
                    <h4 class="quote-title">"Gained a lot of insight into my abilities and weakness"</h4>
                    <div class="stars"></div>
                    <p class="quote-text">"Excellent product, I've gained a lot of insight into my abilities and weakness. Now I'm able to detect my shadow way easier and let go of what has been holding me back all my life. It's been a deeply rewarding and fulfilling journey that I keep returning too whenever I need to refresh my memory. Thank you!"</p>
                    <p class="quote-name">Oscar Nygren, 36, Emotional Fitness Coach</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
            <div class="col-sm-4 mx-auto">
                <div class="quote-card">
                    <h4 class="quote-title">"Given me a whole new world of insight"</h4>
                    <div class="stars"></div>
                    <p class="quote-text">"I had doubts about who I was, even though I had a vague idea of who I really wanted to be. Suddenly, I found myself engrossed in Individualogist. It reassurred me of who I could be, and how I can become be that person - showing numerous possibilities of what I could achieve. Wow, it has certainly given me a whole new world of insight. And ever since, I'm becoming the Self I need to be."</p>
                    <p class="quote-name">Vivian Ngozi Jensen, 34, Self-employed </p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
            <div class="col-sm-4 mx-auto">
                <div class="quote-card">
                    <h4 class="quote-title">"Filled with so much gratitude"</h4>
                    <div class="stars"></div>
                    <p class="quote-text">"I have been experiencing amazing shifts since starting this (individuation emergence series). My relationships have never been closer. Abundance surrounds me. And I have never been happier. May you be blessed just as I have been ❤"</p>
                    <p class="quote-name">Christina Sokol, 28, Lead Designer</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid sales-page text-light mx-auto">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">My Eternal Guarantee To You</h2>
            <div class="separator"></div>
            <p>As usual, I'm going to extend my 60 day moneyback guarantee to you.</p>
            <p>If you feel like this is NOT something you're looking for, if you feel like the cover is hideous, or if you don't like this series for any reason whatsoever...</p>
            <p>Just get in touch with us. I'll REVERSE the transaction, and return everything back to you in FULL.</p>
            <p>Let me repeat that...</p>
            <p class="text-center small-header"><strong>For as long as you hold your Individuation Emergence Series within your hands, you will be granted relentless support from me and my team of archetypal experts.</strong></p> 
            <p class="text-center small-header"><strong>Within the next 60 days, if you're not completely satisfied with your Individuation Emergence Series, and if you don't experience the miracles you expected, I will award you with a 100% refund - no questions asked.</strong></p>
                        
            <h2 class="sub-header">Claim Your Individuation Emergence Series Now For Just <strike>$97</strike> $17</h2>
            <div class="separator"></div>
            <ul class="sun-list">
                <li>Become immune to external deviations and misguiding energies</li>
                <li>Live in perfect alignment with your true purpose, internal intentions, and limitless desires</li>
                <li>Emerge from your current state of limitations and restraints, and step into your new reality of abundance</li>
                <li>Embark on a powerful journey of self mastery that leaves no stone unturned</li>
                <li>Finally align your life's direction to your abundant path of least resistance</li>
                <li>Witness your life transform in progressive phases with each module</li>
                <li>Connect with your Higher Self to uncover your true calling and purpose</li>
            </ul>
            <p><?php echo $name;?>, I ask you once more - will you choose to be internally and intentionally aligned...?</p>
            <p>...Or are you content with being "two degrees off"?</p>
            <p>With this tool in hand, uncertainty, scarcity, and isolation can all be things of the past.</p>
            <p>Today, you can EMERGE from your EXTERNAL DEVIATIONS, and begin experiencing all the effortless abundance the Universe has to offer.</p>
            <p>It's time you became the bountfiul, blessed, and revered <?php echo $archetype;?> you were meant to be.</p>
            <p>Click on the button below now and you can gain access to your Individuation Emergence Series immediately!</p>            
            
            <?php include 'ies-cta-v2.php';?>
            <input type="hidden" name="" value="<?php echo $str;?>">
            <input type="hidden" name="" value="<?php echo $last[2];?>">
        </div>
    </div>
</div>
        
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/footer-frontend.php');
include_once($path);
?>
