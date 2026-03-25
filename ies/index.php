<?php
$PageTitle = "NEW: Ascension Shifting | Individualogist.com";
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
    ul.tick-list li:before{color: #26edc9;}
    ul.tick-list{margin:0 auto 1.5em}
    .payment-options{width: 100%;display: block;margin: 1em auto;max-width: 250px;}
    .letter-wrap{width:100%;margin:auto;max-width:600px;overflow:hidden;font-family:'Satisfy', cursive;background:#fff;border-radius:10px;padding:2em}
    .letter-body p{color: #333;margin: 0 auto;font-family: cursive;line-height: 1.5em;font-size: 20px;margin-bottom:1em}
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
    .buy-button{white-space:normal;font-size:2em;max-width:700px;margin: 0 auto;background:red;text-transform:uppercase;font-weight:900;color:#fff;padding:.5em 1em;box-shadow:0 5px 15px rgba(0,0,0,.3);text-align:center;display:block;border-radius:.5em}
    .buy-button:hover{color:#fff;transition:.4s;-webkit-transition:.4s;box-shadow:0 8px 23px rgba(0,0,0,.3);border-radius:100px;transform:scale(1.05)}
    .golden-energy{position: relative;margin-top: -15%;margin-bottom: -15%;}
    .strong{font-weight:700}
    .sparkle-right {position: relative;float: right;width: 150px;}
    .sparkle-left {position: relative;float: left;width: 150px;}
    .blue-energy{width: 100%;position: absolute;z-index: -1;opacity:.6}
    .mw-100{max-width:100%}
    .ted-story{border:1px solid #fff;border-radius:.5em;box-shadow:0 5px 15px rgba(255,255,255,.3);padding:1em}
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
    @media only screen and (max-width:768px) {.cta-button{width:100%}.sales-page{padding:3em .5em}.sparkle-right,.sparkle-left{width:50% !important;position:relative;margin:0 auto;display:block}.sub-header{width:100%}p{font-size:1em}.buy-button{font-size:2em}.sub-header{font-size:1.2em}.headline{font-size:1.5em}.sub-headline{font-size:.8em}.testimonial p{font-size:14px}}
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
            <h1 class="headline">Follow the PATHS OF ASCENSION to CONQUER the COMING DECADE!</h1>
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
            <p>As 2019 comes to a close, and make no mistake, this is a BIG deal.</p>
            <p>Between the start of the year, and its end, a lot has happened.</p>
            <p>Boundaries have <em>shifted</em>... movers and shakers have left their mark on the world, and people have come and gone.</p>
            <p>Work is finally relenting, and for once, you have time to consider matters beyond the humdrum of the day-to-day.</p>
            <p>Perhaps now you come to think about all the things that have transpired this year.</p>
            <p>The good, the bad, and the mediocre.</p>
            <p>But as Yuletide cheer spreads and the world cools down, the year itself is now coming to an end.</p>
            <p>And from that end...</p>
            <p><strong>...Comes a new beginning.</strong></p>
            <p>The ancients who first learned the ways of the universe, discovered that many things including - life itself - runs in cycles.</p>
            <p>And where one thing ends... Another begins.</p>
            <p><em>...How do these ends and new beginnings affect me?...</em></p>
            <p>Let me introduce you to The Man with the Golden Voice - Ted Williams.</p>
            <div class="ted-story">
                <p>In the 90s, Ted was a disc jockey in Ohio.</p>
                <p>The job was stressful, had difficult hours, and buried him in a toxic world of mental stress, pressure, and emotional duress.</p>
                <p>Succumbing to his hectic schedule, Ted soon turned to alcohol and narcotics to soothe his excruciating pain.</p>
                <p>It wasn't long before his managers found out about his addiction.</p>
                <p>Ted was ousted from his position in the radio station.</p>
                <p>Not only was he now unemployed - because of his addiction, he was left penniless and homeless.</p>
                <p>For nearly a decade, Ted floated between menial jobs, occasionally slipping into a life of crime in order to survive.</p>
                <p>All seemed bleak, until one STRANGE day in December 2010...</p>
                <p>He had had ENOUGH of the pain and the struggles of life.</p>
                <p>At that moment, Ted pledged himself to something greater, promising that he would give back what he would receive should he be found worthy.</p>
                <p>Nearly a month after this pact, he became an overnight sensation, as a video featuring him went viral on Youtube.</p>
                <p>The media returned their attention to him, and within months he had turned his life around!</p>
                <p>He found a job in a new media outlet, and began sharing his inspiring story to the world.</p>
                <p>To this day, he gives praises and graces to his cosmic benefactor, and has never turned to his old vices again.</p>
                <p>In fact, he disdains going to certain places that remind him of his past, saying he never wants to associate with those memories again.</p>
                <p>Ted Williams is different.</p>
                <p>He knows the contrast between the comfortable, if difficult life of the middle class, between the appalling conditions of poverty.</p>
                <p>His time as a destitute man has taught him lessons about modernity very few will ever truly learn.</p>
                <p>On top of all this, with everything taken away from him, he has rediscovered his own form of spirituality, something that has been left in the dust in this day and age.</p>
                <p><em>What are these lessons? What did he learn from them? And more importantly, for us? How can we learn and use them for our success?</em></p>
                <p>Ted, consciously or not, had become aware of <em>Ascension Shifting</em>, and with this knowledge has a keen ability to align himself with the forces beyond our perception...</p>
                <p><strong>...LEVERAGING the Cosmos to HIS benefit!</strong></p>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 pb-5 text-light sadness">
    <div class="overlay-v"></div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">What Is Ascension Shifting?</h2>
            <p>Imagine being able to compartmentalize and disassemble everything that comprises your existence...</p>
            <p>...The things you like, the things you want, and the things you don't...</p>
            <p>...And then carefully piecing everything back to form your exact desires.</p>
            <p>Ascension Shifting is exactly that - the <strong>process of reformation.</strong></p>
            <p>It is the complete disassembling of the self as you exist now, in order to attain your true, pure, and fully actualized state of being that is at once attuned to the material world and the greater cosmos around you.</p>
            <p>Ascension Shifting is fascinating as it tends to make itself notice just before it happens.</p>
            <p>People who are about to undergo the process observe interesting phenomena around them.</p>
            <p>Dramatic changes in mood from the day to day.</p>
            <p>Drastic life changes in parts of their life from work, school, or in their relationships.</p>
            <p>Having odd, and often very specific food cravings that are as random as they are sudden.</p>
            <p>Random foreboding or restlessness in anticipation of something significant.</p>
            <p>Random bursts of energy coursing through your body.</p>
            <p>Finding some sort of resonance in their life that they want to attune themselves towards.</p>
            <p>Consider the story of Debra, age 32.</p>
            <div class="letter-wrap">
                <div class="letter-top"></div>
                <div class="letter-body">
                    <p>"...Oh, well back in 2011, I was in a serious pickle. I was just done with college, and as you can imagine, that meant I was in deep financial trouble&hellip;</p>
                    <p>&hellip;The whole debt thing was really digging into my finances, and it was affecting me on like a deeper level. Sometimes, I'd sit down somewhere, tired. When I could, I asked myself, 'Is this all I am now?'</p>
                    <p>I asked that question over and over again and for a while, probably two years or so, I told myself: &lsquo;Well, yeah, it&rsquo;s kinda all I got right now.&rsquo;</p>
                    <p>Around the last few months of 2013, something changed. A coworker of mine, I recommended that I read up on some of the books and magazines she was reading. I liked her, so I gave it a shot. Those books and magazines talked about getting trapped in what they called a bad cycle. It was then I truly realized that I was getting really sick and tired of this day-in-day-out grind.</p>
                    <p>On top of that, I was starting to notice some of the signs the pamphlets were talking about. I'd see the same numbers crop up all over again. I'd feel huge bursts of energy course through me. I&rsquo;d get emotional highs and lows, and even as I checked with my doctors, they said nothing was unusual with me.</p>
                    <p>I looked at some of the books to find out more about what I was experiencing. The books suggested that I was undergoing what is referred to as an Ascension Shift, and if I played my cards right, I'd finally break through and become who I've always wanted to be!</p>
                    <p>It seemed like a long shot to me, but I went ahead and did that. Somehow I was just about able to settle most of the debts, and a lot of friends decided to pitch in out of the goodness of their heart. Thanks to them, I got a chance to skip town and find myself a place to stay on the other side of the country.</p>
                    <p>I ended up doing things I hadn't done in years, like pray and tried new things out like spiritual exercises. The books were my guide, and they helped me grow. When I did come back a few months later, everything just felt so much lighter. Not like it got any easier, no. Instead, I became stronger! I felt brand new, and ever since, I've just been so much happier with my life!"</p>
                    <p class="dear-friend text-right">- Debra</p>
                </div>
                <div class="letter-bottom"></div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-5 pb-5 text-light cosmic-touch">
    <div class="overlay-v"></div>
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <p>Earlier, Ted discovered the Ascension Shifting phenomenon on his own after nearly a decade of learning from the worst places any person could find themselves in.</p>
            <p>Debra, meanwhile, had the good fortune of having a guide, showing her the road of transfiguration and renewal.</p>
            <p><em>But what about you?</em> Did you stumble upon this message because you&rsquo;ve witnessed similar signs?</p>
            <p>Do you have <em>restless moments</em> where you want to do something, but don&rsquo;t know where to even begin?</p>
            <p>Have you experienced a moment of weakness that took something out of you?</p>
            <p>Have you disappointed a friend, family, or a partner, and can&rsquo;t bare to see their grief again?</p>
            <p>Let&rsquo;s be honest. We all have.</p>
            <p>Life is a constant struggle, a struggle that all of us have experienced in one way or another.</p>
            <p>It is a universal constant, and has bled into our fiction and entertainment.</p>
            <p>It takes many forms, from the Serpent of Chaos, to the dragons of medieval folklore, or nebulous, barely understood entities from beyond the stars that hate all life.</p>
            <p>In the countless stories we&rsquo;ve seen or read, where there are monsters or evildoers, there will always be heroes that will rise to their challenge and fight against the coming darkness.</p>
            <p>We root for these heroes as they face trial upon trial.</p>
            <p>We want to watch them defeat the bad guy. And in ways big and small, we hope to be <strong>heroes in our own lifetime.</strong></p>
            <p>However, is that they NEVER start off being heroic.</p>
            <p>Whole stories revolve around the Hero&rsquo;s Journey - from <em>plucky, ordinary folk being forced to confront evil that besets their world,</em> undergoing a dramatic transformation as they gather strength to face its source, until they become strong enough to fight and defeat the villain!</p>
            <p>Wouldn&rsquo;t that be nice? Having the universe itself remind you that <strong>you are destined for greatness?</strong> And knowing that you have the power to <strong>overcome adversity?</strong></p>
            <p>Well, what if I told you that <em>not only do you see the signs</em>, but you can <strong>rise up and be your own hero</strong> - right at this very moment?</p>
            <p>Through Ascension Shifting, not only can you can achieve your fullest potential... You can effortlessly transition from <em>an ordinary folk</em>, to the hero with a revered story.</p>
            <p>I'm incredibly excited to share with you our newest discovery - a proven process that will guide you through the Ascension Shifting process, allowing you to regain control over everything you're currently struggling with.</p>
        </div>
    </div>
</div>
            
        
<div class="container-fluid sales-page text-light mx-auto">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <p class="text-center strong p-header">Introducing: Ascension Shift Mastery</p>
            <p>The Ascension Shift Mastery is a multi-volume guide to discovering and unlocking your fullest potential.</p>
            <p>This series will help you...</p>
            <ul class="tick-list">
                <li>Undo the atrocities of reality</li>
                <li>Attain fiscal and monetary stability</li>
                <li>Indulge and appreciate all the pleasures of life</li>
                <li>Attain and receive all that you covet</li>
                <li>Appreciate the lulls and still moments despite your busy life</li>
                <li>Surprise all those around you with your sudden, miraculous success</li>
                <li>Perform extraordinary feats you would have never done before</li>
            </ul>
            <p>You're probably thinking, <em>"How does this connect back to Ted and Debra and their ascensions?"</em></p>
            <p>Ted learned this transformational secret all on his own after years of struggling with homelessness, addiction, crime, and poverty.</p>
            <p>Debra, meanwhile, had someone to guide her.</p>
            <p>And that is what the Ascension Shift Mastery ultimately is.</p>
            <p>It's a scaffold from where you can learn to effortlessly channel the energies that Ascension Shifting imbues you, and use it to transcend your talents, focus, and purpose all at once!</p>
            <p>Ascension shifting, like a lot of things in life, is a process. Half the battle is knowing what to do, and the other half is getting started.</p>
            <p>With the Ascension Shift Mastery as your guide, you not only unlock your potential and reach the lofty heights you've always dreamed of, you also focus the energies around you, both your own and the cosmos', into a <strong>single, fine point...</strong>
            <p>...Fine enough to break through the barriers of the mind, body, and soul, and pave the way to a new phase of your life: your Ascension.</p>
            <p>Now you might think our ambitions are <em>far too lofty.</em></p>
            <p>Or perhaps you're thinking this will be <em>incredibly expensive.</em></p>
            <p>Or even assuming this program <em>will be too hard or too confusing to follow</em>.</p>
            <p>We've taken all of these concerns into consideration, and designed a phase-by-phase program that's...</p>
            <ul class="tick-list">
                <li><strong>Detailed,</strong> WITHOUT being long-winded</li>
                <li><strong>Progressive,</strong> WITHOUT any assumptions</li>
                <li><strong>Incredibly valuable</strong> WITHOUT being expensive</li>
            </ul>
            <p>Here's a breakdown of exactly what to expect when you begin this awe-inspiring endeavour of Ascension Shifting:</p>
        </div>
    </div>
</div>
<div class="container-fluid sales-page text-light mx-auto">
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">8 Powerful Modules To Ascension Shift Your Way To An Abundant Transformation</h2>
            <div class="separator"></div>
        </div>
    </div>
    <div class="module-wrap">
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/asm-module1.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #1: Archetypal Character Discovery</strong></p>
                <p>In this first phase, we dive deep into the discovery of archetypes and how they can be leveraged during ascension shifting.</p>
                <p>This module will reveal the exact process of awakening and resolving the constant conflicts between your conscious and unconscious thoughts.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/asm-module2.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #2: Activating Your Higher Self and Spiritual Archetype</strong></p>
                <p>The signs of the universe are usually beyond what we can see, and often on the fringes of what we can comprehend. So, how will you even know that the cosmos is telling you that now is the time?</p>
                <p>In this module, we explore the 3 hidden layers of the human mind and how they influence you and the world around you, synthesizing them to elevate your consciousness.</p>
                <p>This will behold the glories tucked away behind the veil of the mundane - hidden so that only those with the sight to see it may discover it.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/asm-module3.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #3: Grounding Your Archetype In Everyday Life</strong></p>
                <p>The process of Shifting from one state of being to another is wrought with peril and confusion.</p>
                <p>We, as a species, don't like it when our established norms are uprooted, even if we, in of ourselves, are responsible for this uprooting.</p>
                <p>So we'll help you overcome the neurosis that often strikes when we attempt self-discovery.</p>
                <p>Your own mind, and the world around you, will in no doubt harass you during this time of change and renewal, so we will guide you in how to face down your inner demons and your shadow, guiding you in constructing your own Spiritual Archetype.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/asm-module4.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #4: The Challenge of Selfhood</strong></p>
                <p>Selfhood is fragile, pliable, and dynamic. It can be used as a foundation for a house of enlightenment or squandered in poor construction.</p>
                <p>It's easy to lose yourself when you purposefully put yourself at the mercy of the cosmic current, so it's no surprise that Selfhood is the watchword of Module four.</p>
                <p>We'll go over reinforcing the self, introducing different methods of reinforcement, and how to utilize them to their maximum potential.</p>
                <p>Here too, we'll unveil the secrets behind balancing the self, from the archetype, the persona, and the shadow.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/asm-module5.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #5: Life Transformation With Your Archetype</strong></p>
                <p>The Jungian archetypal system is a powerful tool in Ascension Shifting, providing a strong and stable platform for you to build yourself upon.</p>
                <p>You will identify the archetypes and find where you gravitate toward most.</p>
                <p>To aid you in this quest, we&rsquo;ll learn to conquer the various barriers you will face as you prepare yourself for self-actualization.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/asm-module6.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #6: Unifying Your Unique Archetype Persona</strong></p>
                <p>By this point, you'll be well on your way to Ascension Shifting!</p>
                <p>Of course, there will be hurdles you must overcome - although byways and hidden passages exist as well.</p>
                <p>Here, we'll look into these secret passages for you to bypass as many potential hurdles as possible as we unearth proven methods to put out the last embers of inner conflict and contradiction in a peaceful and harmonious manner.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/asm-module7.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #7: Opening New Archetypes</strong></p>
                <p>Modules seven contains all the source materials you will no doubt be referencing throughout the entire journey, as it will give you a combined birds-eye view of your Ascension Shift.</p>
                <p>During this phase, you have the opportunity to clarify any bewildering sections of the series, should you find the challenge too great.</p>
            </div>
        </div>
        <div class="row bbt-1">
            <div class="col-sm-3 mx-auto">
                <img src="/offer/assets/img/asm-module8.png" class="ies-items">
            </div>
            <div class="col-sm-9 mx-auto">
                <p><strong>Module #8: The Ending and Beginning</strong></p>
                <p>This final section seeks to maintain the integrity of the knowledge that was imparted specifically for you.</p>
                <p>By reviewing the crucial points made through a quick re-emphasis, you can internalize the entirety of ascension shifting in a better way as we review and revise vital points to give you a complete bird's eye view of the whole process.</p>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-sm-8 mx-auto">
            <h2 class="sub-header">It's NOT Chance That's Led You To Uncover This Little Known Secret - But By Destiny.</h2>
            <div class="separator"></div>
            <p>Coincidences happen, but your reading of this message is far from coincidence, <?php echo $name;?>.</p>
            <p>You've seen the signs, you've looked for answers, and that search has led you here at the <strong>precipice of your next incarnation.</strong></p>
            <p>It's as if the universe itself is <strong>daring you to be at your fullest potential.</strong></p>
            <p>Right at your <strong>most opportune time</strong> - the beginning of a New Decade, no less!</p>
            <p>A time of <em>cosmic confluence</em>, where energies ascend all around us, silently powering all our endeavors.</p>
            <p>With all these factors already in place, you're right at the brink of your biggest breakthrough <?php echo $name;?>!</p>
            <h2 class="sub-header">Do Not Miss Your Golden Hour Of Transformation</h2>
            <div class="separator"></div>
            <p>In celebration of this exciting period, we've decided to slash the original price by MORE THAN HALF.</p>
            <p>Which means, instead of parting with $97 to take advantage of this program and begin experiencing a magnificent transformation take place from within...</p>
            <p>You can begin the Ascension Shifting process for just <strike>$97</strike> $39.90 - <em>LESS than a cup of overpriced coffee per module</em>.</p>
            <p>AND on top of that - I'm also going to include an extremely valuable bonus to <strong>guarantee your ascension shift!</strong></p>
            <p>See, the issue with most programs is that life tends to get in the way.</p>
            <p>But with this special bonus, there will be no room for any excuses.</p>
            <p>Which means that you can not only unlock the life of your dreams with ascension shifting - but you can pretty much guarantee it!</p>
            <div class="row bbt-1 btt-1">
                <div class="col-sm-3 mx-auto">
                    <img src="/offer/assets/img/sq-asm.png" class="ies-sq">
                </div>
                <div class="col-sm-9 mx-auto">
                    <p><strong>BONUS: Ascension Shift Mastery Audio Book ($37 value)</strong></p>
                    <p>Prefer to listen on-the-go? With this all-inclusive package, you'll also gain access to the entire Ascension Shift Mastery in MP3, allowing you to conveniently tune-in to your ascension shifting wisdom from anywhere and at any time!</p>
                </div>
            </div>
            <p>That's right - I'm including the audio version of the ENTIRE Ascension Shift Mastery (all 8 modules) in audio format.</p>
            <p>So you'll be able to tune-in no matter where you are - during your daily commute, in the comfort of your own home, or in a nearby cafe. You can ascension shift anywhere and any time, without having to fumble through your phone or computer!</p>
            <p>And to celebrate the new decade (and the new you), I'm including the entire audio book to this offer for FREE <strong>(TODAY ONLY).</strong></p>
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
                    <p>I found individualogist at my lowest, read their materials, and something just kinda 'clicked' inside me. I became so focused on growing numbers that I had completely forgot why I got into sales in the first place. For the people, the relationships. And so I followed the Ascension Shift Mastery. I started tapping BACK into my strengths, rediscovering my purpose, getting rid of deviations, lasering in on my path. And things changed IMMEDIATELY! I made MORE LAST MONTH THAN THE WHOLE OF LAST YEAR!"</p>
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
                    <p class="quote-text">"I've honestly tried so many different programs that I'm honestly on the verge of giving up. But the Ascension Shift Mastery is seriously unlike anything I've ever tried. My eyes are now open to what's obviously right in front of me, and I now know exactly I have to do. Thank you for this amazing gift."</p>
                    <p class="quote-name">Zoey Aatto, 41, Housewife</p>
                    <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                </div>
            </div>
            <div class="col-sm-6 mx-auto">
                <div class="quote-card">
                    <h4 class="quote-title">"Whole different level of clarity"</h4>
                    <div class="stars"></div>
                    <p class="quote-text">"Extremely, extremely detailed. I've read a bit about ascension shifting once before, but this series really takes things to a whole different level of clarity. It revealed a lot of things that I had not realized about myself before. Why I do things a certain way. Why I have a reaction to certain things. It is all very well put together. Great stuff!"</p>
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
                    <p class="quote-text">"I have been experiencing amazing shifts since starting this (Ascension Shift Mastery). My relationships have never been closer. Abundance surrounds me. And I have never been happier. May you be blessed just as I have been ❤"</p>
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
            <h2 class="sub-header">You Are Protected By Our 60 Day Moneyback Guarantee</h2>
            <div class="separator"></div>
            <p>As always - your satisfaction and your transformation comes first. As such, I'm going to ensure your contribution today is protected by our 60 day moneyback guarantee.</p>
            <p>If you feel like this is NOT something you're looking for, if you feel like the cover is hideous, or if you don't like this series for any reason whatsoever...</p>
            <p>Just get in touch with us. I'll REVERSE the transaction, and refund your entire purchase in FULL.</p>
            <p>Let me repeat that...</p>
            <p class="text-center small-header"><strong>For as long as you hold your Ascension Shift Mastery within your hands, you will be granted relentless support from me and my team of archetypal experts.</strong></p> 
            <p class="text-center small-header"><strong>Within the next 60 days, if you're not completely satisfied with your Ascension Shift Mastery, and if you don't experience the miracles you expected, I will award you with a 100% refund - no questions asked.</strong></p>
            <h2 class="sub-header">Claim Your Ascension Shift Mastery Now For Just <strike>$97</strike> $39.90</h2>
            <div class="separator"></div>
            <ul class="sun-list">
                <li>Become immune to external deviations and misguiding energies</li>
                <li>Live in perfect alignment with your true purpose, internal intentions, and limitless desires</li>
                <li>Ascend from your current state of limitations and restraints, and step into your new reality of abundance</li>
                <li>Embark on a powerful journey of self mastery that leaves no stone unturned</li>
                <li>Finally align your life's direction to your abundant path of least resistance</li>
                <li>Witness your life transform in progressive phases with each module</li>
                <li>Connect with your Higher Self to uncover your true calling and purpose</li>
            </ul>
            <p><?php echo $name;?>, you can begin experiencing all the effortless abundance the Universe has to offer.</p>
            <p>Ted and Debra might have Ascension Shifted by chance, but you can mimic the same transformation on PURPOSE...</p>
            <p>The decade that's passed us by might have been uninspiring, but you have the opportunity and the potential to seize the new decade!</p>
            <p>It's time you became the bountfiul, blessed, and revered <?php echo $archetype;?> you were meant to be.</p>
            <p>Seize the decade - click on the button below now and gain instant access to your Ascension Shift Mastery immediately!</p>            
            
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
