<?php
$PageTitle = "Individualogist.com | Individuation Emergence Series";
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
    .bg-black:after{background-image: url(/offer/assets/img/red-energy.png);width: 100%;content: '';display: block;z-index: -1;opacity: .4;height: 900px;position: absolute;bottom: 0;right: 0;left: 0;background-repeat:no-repeat}
    .sales-page{z-index:1;position:relative;box-shadow:0 5px 10px rgba(0,0,0,0.3);padding:2em;border-radius:1em;margin:2em auto;margin-top:-2em;background:#000;width:768px;max-width:100%}
    .logo{max-width:200px;position:relative;margin:1em auto;filter:drop-shadow(1px 1px 1px #000);width:100%;display:block}
    .bg-ies{background:url('/offer/assets/img/ies-bg.jpg');background-size:cover;background-repeat:no-repeat;background-position:center center;height:100%;position: relative;box-shadow: 0 10px 20px rgba(0,0,0,0.2);}
    .headline{font-weight: 900;color: #fff;text-transform: uppercase;text-align: center;letter-spacing: 3px;font-size: 3em;text-shadow: 1px 1px #000, 0 0 50px #000;}
    .separator{max-width:200px;width:100%;height:1px;background:#fff;position:relative;margin:1em auto;}
    .divider{width: 500px;max-width: 100%;margin: 0 auto;background: url(/offer/assets/img/separator.svg) center center;height: 55px;position: relative;}
    .sub-headline{color:#fff;text-shadow:1px 1px 1px #000,0 0 50px #000;text-transform:uppercase;letter-spacing:5px}
    .overlay{position:absolute;top:0;right:0;left:0;bottom:0;height:100%;width:100%;background:radial-gradient(at center, rgba(0,0,0,0), rgba(0,0,0,0.7));}
    .sub-header{text-shadow:0 0 5px #fff;width:80%;text-transform:uppercase;letter-spacing:5px;color:#fff;font-weight:700;text-align:center;font-size:1.5em;margin:1em auto}
    .dear-friend{font-family:'Great Vibes',cursive;font-weight:700;font-size:2em;color:#fff}
    .pb-10{padding-bottom:10em;}
    body{background:#222}
    p{font-size:18px}
    .p-header{font-size: 1.2em;line-height: 1.2em;padding: 1em;text-transform:capitalize;}
    .cta-button{cursor:pointer;}
    .bg-portal{background:url('/offer/assets/img/bg-portal.jpg');background-attachment:fixed;background-size:cover;background-position:center center;background-repeat:no-repeat}
    .bg-mars{background:url('/offer/assets/img/bg-mars.jpg');background-attachment:fixed;background-size:cover;background-position:center top;background-repeat:no-repeat}
    .small-header{font-size:1.2em;line-height:1.1em}
    .sun-list{padding-left: 15px;margin: 1em auto;}
    ul.sun-list li {list-style: none;padding: 8px 0 0 40px;position: relative;}
    ul.sun-list li:before {font-family: 'FontAwesome';content: '\f185';color: #34ebb2;font-size: 1.5em;background: none;position: absolute;left: 0px;text-shadow:0 0 5px gold;top:0}
    .spark-list{padding-left: 15px;margin: 1em auto;}
    ul.spark-list li {list-style: none;padding: 8px 0 0 40px;position: relative;}
    ul.spark-list li:before {font-family: 'FontAwesome';content: '\f621';color: goldenrod;font-size: 1.5em;background: none;position: absolute;left: 0px;text-shadow:0 0 5px gold;top:0}
    .buy-button{white-space:normal;font-size:1.5em;max-width:700px;margin: 0 auto;background:red;text-transform:uppercase;font-weight:900;color:#fff;padding:.5em 1em;box-shadow:0 5px 15px rgba(0,0,0,.3);text-align:center;display:block;border-radius:.5em}
    .buy-button:hover{color:#fff;transition:.4s;-webkit-transition:.4s;box-shadow:0 8px 23px rgba(0,0,0,.3);border-radius:100px;transform:scale(1.05)}
    .golden-energy{position: relative;margin-top: -15%;margin-bottom: -15%;}
    .strong{font-weight:700}
    .sparkle-right {position: relative;float: right;width: 150px;}
    .sparkle-left {position: relative;float: left;width: 150px;}
    .blue-energy{width: 100%;position: absolute;z-index: -1;opacity:.6}
    .brain-wire{width:80%;max-width:300px;margin:0 auto;display:block;margin:1em auto;filter:drop-shadow(1px 1px 1px #000)}
    .dark-cloud{width:80%;max-width:500px;margin:0 auto;display:block;margin:1em auto}
    .ies-items{max-height: 200px;margin: 1em auto;position: relative;display: block;box-shadow: 0 5px 10px rgba(0,0,0,0.3);}
    .ies-cover{max-width:600px;position:relative;margin: 1em auto;display:block}
    .testimonial{border-radius:1em;margin:2em auto;box-shadow:inset 0 3px 10px rgba(0,0,0,.3);border:2px solid #a72077;background:rgba(255,255,255,0.9);}
    .testimonial p{color:#a72077}
    .neon-archetype{max-width: 100px;margin: .5em auto;display: block;position: absolute;top: -50px;left: 0;right: 0;background: #000;border-radius: 100%;}
    .testimonial h3{color:#a72077;font-family:'Raleway',sans-serif;margin-top:.5em}
    .smallprint{text-align: center;font-size:14px;font-weight: 700;padding-top: .5em;color: red;opacity: .8;}
/*    .red-energy{width:100%;position:absolute;bottom:0;z-index:-1;opacity:.6}*/
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
<!--    <div class="overlay"></div>-->
    <div class="row">
        <div class="col-sm-2 mx-auto">
            <img src="/offer/assets/img/individualogist-logo2.png" class="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto text-center pt-3 pb-3">
            <h1 class="headline">Emerge From All Pains & Become The Abundant Individual You Were Meant To Be</h1>
            <div class="separator"></div>
            <p class="sub-headline">Two Individuals. One Magnificent Difference.</p>
        </div>
    </div>
    <div class="scroll"></div>
</div>

<div class="container sales-page text-light">
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
        <div class="col-sm-12 mx-auto">
            <p class="dear-friend">Dear <?php echo $name;?>,</p>
            <p>I'd like to share with you a story so powerful, that it <strong>shattered my entire reality</strong> and everything I ever thought about abundance.</p>
            <p>This story takes us 46 years back to the graduation ceremony of 2 promising young women, back in 1973.</p>
            <p class="text-center strong">These 2 young women were remarkably alike.</p>
            <p>Both were born into good homes, good families, good grades, with promising futures...</p>
            <p>They shared the same exact birth date, and beyond that, also the same exact <?php echo $archetype;?> archetype.</p>
            <p>With hope and ambition in their hands, both knew that they were somehow meant to lead amazing and fulfilling lives.</p>
            <p class="text-center strong">Fast forward 30 years into the future, by divine intervention, these 2 young women crossed paths once more...</p>
            <p>Even though both were equipped with the same knowledge and education, one of them STRUGGLED to emerge from all sorts of setbacks...</p>
            <p>...While the other conquered fears and failure.</p>
            <p>Even though both came from similar backgrounds and upbringing, one of them RADIATED with abundance, energy, and happiness...</p>
            <p>...While the other emitted frustration, negativity, and hatred for her circumstance.</p>
            <p>30 years ago, both were equipped with great knowledge and showed great promise...</p>
            <p>Yet <strong>only ONE of them</strong> spurred on to live a life of passion, abundance and joy...</p>
            <p class="text-center strong">...While the other remained in struggle, scarcity, and despair.</p>
            <p>And we've seen this familiar story time and time again, <?php echo $name;?>.</p>
            <p>Two people, equal knowledge, equal opportunity, yet completely <strong>different outcomes.</strong></p>
            <p>So, what was the deciding factor that altered their paths...? (we'll circle back to this later)</p>
            <p>...Or the better question to ask is...</p>
            <p class="text-center strong">...Which of the 2 stories sounds most like YOU...?</p>
            <p>Certainly, we'd all very much like to be the abundant and fortunate individual in the story.</p>
            <p>...But what we want DOES NOT ALWAYS reflect reality.</p>
            <p>We see this "second individual" from the story repeatedly...</p>
            <img class="w-100" src="/offer/assets/img/face.png">
            <p>...People struggling with a lack of purpose and direction. People living month-to-month without a plan... People constantly questioning "why them, and not me?"</p>
            <p>No matter how hard they work, no matter how frequent they exercise, no matter how loving they are in their relationships...</p>
            <p class="text-center strong p-header">Life punishes them with "surprise" debts, energy drain, and disappointment.</p>
            <p>They try so damned hard to change their circumstances, to transform their realities, but they just keep <strong>getting beaten down.</strong></p>
            <p>Too often, these "almost abundant" individuals are left wallowing in self pity. Depressed. Drained. Hopeless. Frustrated.</p>
            <p>Because they know for a fact that they deserve MORE...</p>
            <p>...They deserve abundance. They deserve happiness. They deserve the life they envisioned.</p>
            <p>But that "nagging feeling" just never stops. It follows them like a Shadow - everywhere they go.</p>
            <p>You start doubting yourself. Maybe your time just hasn't come...</p>
            <p><strong>Maybe in another life.</strong></p>
            <p>But... Why?</p>
            <p>Why is it that some THRIVE while others STRUGGLE? Are some simply destined for more? Is life truly that heartless and cruel...?</p>
            <p>...Or is there some <strong>hidden secret</strong> that we just can't wrap our heads around...?</p>
            <p>Believe it or not, it is not about destiny or luck.</p>
            <p>And no, it is not about manifesting better or visualizing harder either.</p>
            <p class="text-center strong p-header">The truth is, there is OBVIOUSLY a missing piece to the puzzle!</p>
            <p>A misplaced key that's buried in this single, universal TRUTH.</p>
            
            <!-- Epiphany bridge is too weak, insert polarizing message -->
            <!-- Justify and insert compelling hard evidence -->
            <!-- To live in abundance, you must shift focus on personal discovery, not personal development -->
            <!-- To live in abundance, you must live in alignment with your  -->
            <!-- Insert analogy -->
            <p class="text-center strong p-header">To live in ABUNDANCE, you must BREAK AWAY from "KNOWLEDGE", and start LIVING in "WISDOM".</p>
            <p>See, this is the difference that SEPARATES the unsuccessful from the successful...</p>
            <p>...The lost and the enlightened...</p>
            <p>...It is the difference that separates who you ARE, from who you have the potential to BECOME...</p>
            <p>In fact, we experience this concept firsthand in everyday life...</p>
            <p>...Think of that colleague who's always talking about that GREAT BUSINESS IDEA, but never doing anything about it...</p>
            <p>...Think of that high school friend who had all the opportunities, but gambled it all away...</p>
            <p>...Think of that arrogant boss with an over-inflated Ego who's constantly shutting everyone else down...</p>
            
            <!-- Need to break more false beliefs -->
            <!-- Its too hard -->
            <!-- It takes too much time -->
            <p class="text-center strong">Once you see it, it becomes impossible to "unsee it".</p>
            <p>Now, this is not about manifesting or any of that "ask, believe, receive" new-age mumbo jumbo...</p>
            <p>Follow the logic of it, and you'll see it actually makes perfect sense.</p>
            <p>See, the common denominator here is that "almost abundant individuals" all TRAPPED in KNOWLEDGE. They overanalyze, procrastinate, and pull every excuse possible.</p>
            <p>And the more people stand against them, the larger their egos become, and deeper they sink into scarcity.</p>
            <p>It shows in their limitings beliefs. You feel it in their vibrations. You sense it in their souls.</p>
            <p>As long as you continue to remain within this "enclosure of knowledge", you'll never break free from the vicious cycle of scarcity.</p>
            <p>And when despair follows you around like a <strong>giant ominous cloud</strong>, it's extremely difficult to break free from what you're already familiar with.</p>
            <img class="w-100 dark-cloud" src="/offer/assets/img/dark-cloud.png">
            
            <!-- Change of state is too weak, make more relatable -->
            <!-- Needs more excitement, read readers mind -->
            <!-- 'change of state' does not mean 'audience assumption' -->
            <p class="text-center strong p-header">The question is, how can you break away from this state of "knowledge", and emerge into a life of "wisdom" and freedom?</p>
            <p>I'm incredibly excited to share this piece of wisdom with you, <?php echo $name;?>!</p>
            <p>See, all the signs and messages you've received have led you to this exact moment... Gearing you up for the ONE OPPORTUNITY that could ignite a miraculous transformation within YOU.</p>
            <p>Now, you've been introduced to your <?php echo $archetype;?> archetype. Which means you're already in the KNOW of your hidden talents, innate strengths, and redeemable weaknesses.</p>
            <p>You've peered inches deeper into your personality, identity, and true purpose.</p>
            <p>And now, it's time to take all that "knowledge" you've absorbed, and translate it into actionable "wisdom".</p>
            <p>We can now do that through something I call...</p>
            
            <!-- Unique Mechanism needs to link more directly to epiphany bridge and false beliefs -->
            <!-- What if it doesn't work -->
            <!-- How do i know it will work for me -->
            <h2 class="sub-header">"Individuation Emergence"</h2>
            <div class="separator"></div>
            <p>Imagine if you could emerge from "knowledge" and live an enlightened life of "wisdom".</p>
            <p>Imagine taking all your magnificent knowledge, gifts, and talents, and knowing WHAT TO DO with them.</p>
            <p>Imagine all <strong>the abundance, riches, and monetary gain</strong> you could seize for yourself if you could command your consciousness.</p>
            <p>Imagine <strong>being able to say "no"</strong> to life whenever it deals you a bad hand.</p>
            <img class="brain-wire" src="/offer/assets/img/brain-wire.png">
            <p>You'll never have to deal with that nagging feeling of despair and hopelessness ever again!</p>
            <p>That's the exact destiny that awaits you through "individuation emergence", <?php echo $name;?>.</p>
            <p>Individuation emergence is a sacred, psychological process that allows you to emerge from lower states of consciousness, into higher, epiphanic levels of consciousness.</p>
            <p class="text-center strong">By simply tapping into a hidden state of consciousness, you'll encounter an epiphanic revelation that gives you the "wisdom" to translate "knowledge" into personal transformation.</p>
            <p class="text-center strong">You'll discover how to access your Higher Self's "inner wisdom", so that you'll know exactly what to do whenever you encounter an obstacle.</p>
            <p>With this method in hand, you can take a deep dive into your character and personality, "rise above" your vibrations, activate your higher self, and of course - experience an imminent transformation... From head to toe, mind to soul.</p>
            <p>Truly, a powerful process, and one that can grant you immense growth, and life-changing breakthroughs.</p>
            <p>And it's all fairly straightforward.</p>
            <h2 class="sub-header">Your Very Own Guide Of Individuation, Abundance, and Emergence</h2>
            <div class="separator"></div>
            <p>We've removed ALL the uncertainty from individuation emergence.</p>
            <p>We've given you a <strong>definitive, step-by-step guide</strong> that's straightforward, easy to follow and easy to "understand".</p>
            <p>We've equipped you with a series of modules that will show you HOW to activate your higher self in the face of new opportunities and challenges.</p>
            <p>And most of all, we've handed you a blueprint that guides you through <strong>MASTERING individuation emergence.</strong></p>
            <img class="w-100" src="/offer/assets/img/glow-separator.png">
            <p>This is a transformative series that leaves no stone unturned, covering all phases of consciousness, including your 7 stages of archetypal discovery, the full process of individuation, aligning your anima/animus, shadow work, and ego strenghtening.</p>
            <p>By combining all these different phases in consciousness, you can receive structured guidance to experience your holistic transformation!</p>
            <p>At last, you'll have everything at your disposal to consciously build your new reality from the ground-up, as effortlessly as stacking blocks of lego.</p>
            <p>Imagine being perfectly aligned to your Higher Self, and being able to receive all the abundance the world has to offer...</p>
            <p>It can all be yours as soon as you receive your Individuation Emergence Series, <?php echo $name;?>.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <h2 class="sub-header">8 Powerful Modules For Your Imminent Emergence</h2>
            <div class="separator"></div>
        </div>
        <div class="col-sm-3 mx-auto">
            <img src="/offer/assets/img/ies-module1.png" class="ies-items">
        </div>
        <div class="col-sm-9 mx-auto">
            <p><strong>#1: Archetypal Character Discovery</strong></p>
            <p>Our adventure begins with the root of it all – the unconscious. With the recognition of this metaphysical realm, we differentiate the mind and the brain as we take a deep dive into different angles of understanding the mind and how it operates.</p>
        </div>
        <div class="col-sm-3 mx-auto">
            <img src="/offer/assets/img/ies-module2.png" class="ies-items">
        </div>
        <div class="col-sm-9 mx-auto">
            <p><strong>#2: Activating Your Higher Self and Spiritual Archetype</strong></p>
            <p>To realize the Self intellectually and emotionally, one must have reconciled the four archetypal structures namely: the Persona, the Shadow, the Anima, and the Animus. This reconciliation leads to a wholeness solely defined by the Self - a pre-requisite of Individuation Emergence.</p>
        </div>
        <div class="col-sm-3 mx-auto">
            <img src="/offer/assets/img/ies-module3.png" class="ies-items">
        </div>
        <div class="col-sm-9 mx-auto">
            <p><strong>#3: Grounding Your Archetype In Everyday Life</strong></p>
            <p>In order to ground our archetypes into our everyday realities, we must first address unresolved conflicts within structural elements of our psyche. We can do so seamlessly by making one simple realization that we mention in this module.</p>
        </div>
        <div class="col-sm-3 mx-auto">
            <img src="/offer/assets/img/ies-module4.png" class="ies-items">
        </div>
        <div class="col-sm-9 mx-auto">
            <p><strong>#4: The Challenge of Selfhood</strong></p>
            <p>The Self makes choices with the help of reinforcements.  We come to understand the various types of reinforcements, learning how to align them with our actions and desires as to achieve the highest potential of the human psyche. </p>
        </div>
        <div class="col-sm-3 mx-auto">
            <img src="/offer/assets/img/ies-module5.png" class="ies-items">
        </div>
        <div class="col-sm-9 mx-auto">
            <p><strong>#5: Life Transformation With Your Archetype</strong></p>
            <p>Conventional societal expectations can unconsciously create an inner rift that confuses us about who we truly are. We learn to combat this by using individuation emergence to make one enormous transformative shift within our archetype.</p>
        </div>
        <div class="col-sm-3 mx-auto">
            <img src="/offer/assets/img/ies-module6.png" class="ies-items">
        </div>
        <div class="col-sm-9 mx-auto">
            <p><strong>#6: Unifying Your Unique Archetype Persona</strong></p>
            <p>Individuation emergence requires a roadmap which will give us an idea of how to begin and where to go in life. We examine the famous social institutions that are present around us. Our experiences with them will form part of the lens that we use to understand the external world.</p>
        </div>
        <div class="col-sm-3 mx-auto">
            <img src="/offer/assets/img/ies-module7.png" class="ies-items">
        </div>
        <div class="col-sm-9 mx-auto">
            <p><strong>#7: Opening New Archetypes</strong></p>
            <p>The content in this final section focuses on a brief summary of points present in each archetype. By presenting basic notions of the goals, weaknesses, etc., of each archetype, you as the learner will know how to move forward with all of this newly learned wisdom.</p>
        </div>
        <div class="col-sm-3 mx-auto">
            <img src="/offer/assets/img/ies-module8.png" class="ies-items">
        </div>
        <div class="col-sm-9 mx-auto">
            <p><strong>#8: The Ending and Beginning</strong></p>
            <p>This final section seeks to maintain the integrity of the knowledge that was imparted specifically for you. By reviewing the crucial points made through a quick re-emphasis, you can internalize the entirety of individuation emergence in a better way as we review and revise vital points to give you a complete bird's eye view of the whole process.</p>
        </div>
        <div class="col-sm-12 mx-auto">
            <?php include 'ies-cta-v2.php';?>
        </div>    
    </div>
    
    <!-- Reaffirm epiphany bridge, state of change, and unique mechanism here -->
    <!-- How is this different from paa and everything else -->
    <!-- Insert new section -->
    
    <div class="row">
        <div class="col-sm-12 mx-auto">
            <h2 class="sub-header">Don't Let Indecision Get The Better Of You... Not This Time.</h2>
            <div class="separator"></div>
            <p>See, I did previously share with you that your <?php echo $archetype;?> struggles with indecision and uncertainty, that's what primarily causes you to miss valuable opportunities.</p>
            <p>...Will you allow indecision to control you this time...?</p>
            <p>For just a second, let's take your hesitation out of the equation, and think about this...</p>
            <p class="text-center strong p-header">As soon as you discover the secrets of individuation emergence, endless possibilities can unfold. Things like...</p>
            <p>...Becoming <strong>conscious of your self-restraining habits</strong>, and how you can FORCE them to work in your favour...</p>
            <p>...Having a <strong>designated path for you to follow</strong> that's exactly aligned to your true direction...</p>
            <p>...Mastering your consciousness to <strong>select the exact things you want</strong> in your desired reality...</p>
            <p>...Attaining a <strong>state of enlightenment and happiness</strong> that delivers abundance to you without needing to manifest in the first place...</p>
            <p>...And of course, emerging into the <strong>abundant <?php echo $archetype;if(empty($archetype)){$archetype = 'individual';}?> you were meant to be!</strong></p>
            <p>Your Individuation Emergence Series can give you all of that, <?php echo $name;?>!</p>
            <p class="text-center strong p-header">Now, this is program is not due for "public release" until later in the year. And I'm planning on retailing it for $197.</p>
            <p>Yes, it is a steep price at first glance, but consider the value you're receiving from it VERY CAREFULLY...</p>
            <p>How EFFORTLESS this system guides you through remarkable transformations...</p>
            <p>How everything is broken down into simple, easy-to-follow phases...</p>
            <p>How powerful it is in EVOKING transformation...</p>
            <p>...$197 is quite honestly a steal!</p>
            <p class="text-center strong p-header">BUT, <?php echo $name;?>, being an avid fan and supporter of our mission, you are NOT just "another outsider" to me.</p>
            <p>Which is exactly why you're amongst the rare handful of archetypal enthusiasts to see this special page in the first place!</p>
            <p>So, I'm inviting you to receive your very own "Inner Circle Version" of the Individuation Emergence Series right NOW.</p>
            <p>That means you won't have to wait until later in the year to get this. You can gain early access to this series IMMEDIATELY!</p>
            <p class="text-center strong p-header">AND ON TOP OF THAT, I'm ALSO giving you my special 75% discount.</p>
            <p>Now, <strong>ON THIS PAGE ONLY</strong>, you can receive your Individuation Emergence Series at the heavily discounted price of <strike>$197</strike> just $37.</p>
            
            <?php include 'ies-cta-v2.php';?>
            
            <h2 class="sub-header">My Eternal Guarantee To You</h2>
            <div class="separator"></div>
            <p>As usual, I'm going to extend my 60 day moneyback guarantee to you.</p>
            <p>If you feel like this is NOT something you're looking for, if you feel like the cover is hideous, or if you don't like this series for any reason whatsoever...</p>
            <p>Just get in touch with us. I'll REVERSE the transaction, and return everything back to you in FULL.</p>
            <p>Let me repeat that...</p>
            <p class="text-center small-header"><strong>For as long as you hold your Individuation Emergence Series within your hands, you will be granted relentless support from me and my team of archetypal experts.</strong></p> 
            <p class="text-center small-header"><strong>Within the next 60 days, if you're not completely satisfied with your Individuation Emergence Series, and if you don't experience the miracles you expected, I will award you with a 100% refund - no questions asked.</strong></p>
                        
            <h2 class="sub-header">Claim Your Individuation Emergence Series Now For Just <strike>$197</strike> $37</h2>
            <div class="separator"></div>
            <ul class="sun-list">
                <li>Experience a remarkable shift in consciousness from merely "knowing" to your sacred state of "understanding"</li>
                <li>Emerge from your current state of limitations and restraints, and step into your new reality of abundance</li>
                <li>Embark on a powerful journey of self mastery that leaves no stone unturned</li>
                <li>Finally align your life's direction to your abundant path of least resistance</li>
                <li>Witness your life transform in progressive phases with each module</li>
                <li>Connect with your Higher Self to uncover your true calling and purpose</li>
            </ul>
            <p>I ask you once more - will you choose to be abundant...?</p>
            <p>...Or are you content with being "almost abundant"?</p>
            <p>With this tool in hand, <?php echo $name;?>, uncertainty, scarcity, and isolation can all be things of the past.</p>
            <p>Today, you can EMERGE from your CONSCIOUSNESS as early as today, and begin experiencing all the effortless abundance the Universe has to offer.</p>
            <p>It's time you became the bountfiul, blessed, and revered <?php echo $archetype;?> you were meant to be.</p>
            <p>Click on the button below now and you can gain access to your Individuation Emergence Series immediately...</p>            
            
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
