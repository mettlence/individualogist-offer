<?php
$PageTitle = "Final Offer For Individuation Emergence | Individualogist.com";
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

<div class="container-fluid abundance-portal pt-5 pb-5">
    <div class="overlay"></div>
    <div class="row">
        <div class="col-sm-2 mx-auto">
            <img src="/offer/assets/img/individualogist-logo2.png" class="logo">
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto text-center pt-3 pb-3">
            <h1 class="headline">Final Discount Activated</h1>
            <p class="sub-headline">...Do Not Miss Out On This Golden Opportunity To Receive Something Spectacular...</p>
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
            <p>I can tell just how eager you are to begin <strong>leveraging on individuation emergence</strong> to perfectly align your divine path...</p>
            <p>I'm also aware that you're ready to END your struggles with <strong>external deviations</strong>, and START living in <strong>internal intention.</strong></p>
            <p>You've made excellent progress, <?php echo $name;?>. And with just ONE FINAL STEP, your TRANSFORMATION can begin IMMEDIATELY.</p>
            <p>Yes, I'm speaking of your <strong>Individuation Emergence Series</strong> - a powerful collection of 8 modules in written and audio format, revealing how you can ground yourself, and start supercharging your inner being with abundance, purpose, and passion.</p>
            <p>I understand that the initial $37 cost might be slightly concerning...</p>
            <p>...Perhaps you're just too strapped for cash right now.</p>
            <p>...Perhaps you're not confident in the limited "padding" you have in your bank account.</p>
            <p>...Or perhaps you're just simply uncertain whether or not this is going to WORK.</p>
            <p>I completely understand where you're coming from.</p>
            <p>Now, I've arranged for you to receive your <strong>Individuation Emergence Series</strong> at a significantly reduced price.</p>
            <p>Because I've struggled with scarcity in the past, so I know what it's like to be refused help.</p>
            <p>I know what it's like to feel hopeless and desperate.</p>
            <p>I understand how it feels to be turned away during your most dire circumstances. Truly, it's a terrible experience - and one I wouldn't wish upon my worst enemy.</p>
            <p>So, this is my little gesture to you to kind of "catch that break".</p>
            <p>Claim your Individuation Emergence Series now, and you can receive it at the heavily discounted price of just <strike>$37</strike> <strong>$$18.50</strong>.</p>
            <h2 class='sub-header'>That's An Immediate 50% DISCOUNT.</h2>
            <p>Nothing changes from my initial offer - you'll still receive at 8 modules in both audio and written format, you'll still be protected by our 60 day moneyback guarantee, and you'll still receive the same level of customer support from myself and our learned staff at Individualogist.com.</p>
            <p>Right now, the barrier standing between you and the life of your design is set at just $$18.50.</p>
            <p>Certainly a small price to pay to live in perfect alignment with your divine path.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">Claim Your Individuation Emergence Series Now For Just <strike>$37</strike> $$18.50</h2>
            <?php include 'ies-final-cta.php';?>
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
                <p>Our adventure begins with the root of it all – the unconscious. With the recognition of this metaphysical realm, we differentiate the mind and the brain as we take a deep dive into different angles of understanding the mind and how it operates.</p>
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
            <?php include 'ies-final-cta.php';?>
        </div>    
    </div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">This Is Not About Me, <?php echo $name;?>. This Is About You.</h2>
            <p>Before you move forward, I want you to understand something...</p>
            <p>Your decision today is not going to impact me one bit.</p>
            <p>I'm making this special offer to you to help YOU.</p>
            <p>This opportunity is about how it can transform YOUR LIFE, and prevent YOUR EXTERNAL DEVIATIONS, and align your INTERNAL INTENTIONS...</p>
            <p>...NOT mine...</p>
            <p>The $18.50 you pay today isn't going to do very much for me, but what you receive in return CAN do a whole lot for YOU.</p>
            <p>Seize this opportunity right now, and become the bountfiul, blessed, and revered <?php echo $archetype;?> you were meant to be!</p>
            <h2 class="sub-header">Claim Your Individuation Emergence Series Now For Just <strike>$37</strike> $$18.50</h2>
            <?php include 'ies-final-cta.php';?>
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
            <h2 class="sub-header">Claim Your Individuation Emergence Series Now For Just <strike>$37</strike> $$18.50</h2>
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
            
            <?php include 'ies-final-cta.php';?>
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
