<?php
$PageTitle = "Individualogist.com | Reading";
include('../inc/header.php');
?>

<script>
    $(function() {
        $(".step1-reading").show();
        $(".step2-reading").hide();
        $(".step3-reading").hide();
        $(".step3-cta").hide()
        $(".step2").on('click', function() {
            $(this).hide();
            $(".step1-reading").hide(300);
            $(".step2-reading").show(600);
            $("#progress-bar li.s1").removeClass('active');
            $("#progress-bar li.s2").addClass('active');
            $('html,body').animate({
                scrollTop: $("#progress-bar").offset().top
            }, 300);
        });
        $(".step3").on('click', function() {
            $(this).hide();
            $(".step2-reading").hide(300);
            $(".step3-reading").show(600);
            $(".step3-cta").show();
            $("#progress-bar li.s2").removeClass('active');
            $("#progress-bar li.s3").addClass('active');
            $('html,body').animate({
                scrollTop: $("#progress-bar").offset().top
            }, 300);
        });
    });
</script>

<style>
    .paav2-cta {
        background: linear-gradient(45deg, #842ac2, #420f65);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        border-radius: .5em;
        padding: 1em;
        width: 100%;
        margin: 2em auto
    }

    .reg-price {
        font-size: 2em;
        line-height: 1em;
        text-align: center;
        font-weight: 700;
        color: #fff
    }

    .cta-btn {
        white-space: normal;
        margin: 1em auto;
        border-radius: 100px;
        background: red;
        color: #fff;
        text-transform: uppercase;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        font-weight: 700;
        padding: .5em 1em;
        display: block;
        font-size: 1.5em;
    }

    .cta-btn:hover {
        color: #333;
        transition: .4s;
        -webkit-transition: .4s;
        background: gold
    }

    .cta-link:hover {
        color: #fff
    }

    .payment-options {
        margin: 1em auto;
        display: inline-block;
        position: relative;
        max-width: 250px;
        width: 100%
    }

    .paav2-cover {
        position: relative;
        display: inline-block;
        height: auto;
        width: 100%
    }

    .cta-guarantee {
        width: 50px;
        height: 50px;
        position: relative;
        margin: 0 auto;
        display: inline-block
    }

    .paav2-cta:hover {
        transition: .4s;
        transform: scale(1.05)
    }

    .cta-link {
        color: #fff;
        text-decoration: underline;
        display: block;
        margin: 1em auto
    }

    .paa-items {
        border-radius: .5em;
        filter: drop-shadow(0 5px 15px rgba(0, 0, 0, .15))
    }

    .push-down {
        margin-top: 3em
    }

    .glow {
        text-shadow: 0 0 15px #fff, 0 0 20px #fff
    }

    @media only screen and (max-width:768px) {
        .push-down {
            margin-top: 0
        }

        .cta-btn {
            font-size: 1.3em
        }
    }

    @keyframes pulse-red {
        0% {
            transform: scale(.95);
            box-shadow: 0 0 0 0 rgba(255, 82, 82, .7)
        }

        70% {
            transform: scale(1);
            box-shadow: 0 0 0 10px rgba(255, 82, 82, 0)
        }

        100% {
            transform: scale(.95);
            box-shadow: 0 0 0 0 rgba(255, 82, 82, 0)
        }
    }

    .faq-header {
        margin-top: 1em;
        font-weight: 700;
        text-align: center;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-size: 1.2em
    }

    .faq-para p {
        font-size: 17px
    }

    .testimonial {
        border: 2px solid #8429c2;
        border-radius: .5em
    }

    .security-text {
        font-size: 11px;
        line-height: 1;
        color: #fff
    }

    .testimonial h3 {
        color: #8429c2
    }

    .archetype-reading {
        width: 60%
    }

    .bg-archetypewhite {
        background: url(/lp/assets/image/archetypewheelwhite.webp) no-repeat center center;
        background-attachment: fixed;
        background-size: cover;
    }

    margin-bottom: -30px;
    }

    .quote {
        background: #a51fa5
    }

    #faq-area {
        width: 100%
    }

    .small {
        font-size: .8em !important;
        font-weight: 700;
    }

    .w-80 {
        width: 80%;
        display: block;
        margin: 1em auto
    }

    .sub-header {
        padding: .5em;
        text-transform: uppercase;
        color: #8429c2;
        font-size: 1.5em;
        letter-spacing: 3px;
        clear: both;
        box-shadow: none;
        border-bottom: 1px solid #8429c2;
        border-radius: 0;
        border-top: 0;
        border-left: 0;
        border-right: 0
    }

    .paa-items {
        max-height: 200px;
        margin: 1em auto;
        position: relative;
        display: block;
        filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.3));
    }

    .img-mw600 {
        max-width: 600px;
        display: block;
        margin: auto;
        width: 100%
    }

    .bonusvalue {
        color: red
    }

    .active {
        font-weight: 700 !important;
        border-radius: 5px;
        color: #fff !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15)
    }

    .active:after {
        content: "" !important
    }

    .progress-breadcrumb {
        margin: 1em auto;
        display: inline-block;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        width: 100%;
        position: relative;
        padding: 0
    }

    .progress-breadcrumb li {
        list-style-type: none;
        width: 33.3333%;
        text-shadow: none;
        float: left;
        font-size: 14px;
        position: relative;
        padding: 1em;
        text-align: center;
        text-transform: uppercase;
        color: rgba(255, 255, 255, .5);
        height: 100%:
    }

    .page-header {
        font-size: 1em;
        color: #fff !important;
        text-shadow: 1px 1px 1px #000
    }

    .progress-breadcrumb li:first-child:after {
        content: none
    }

    .progress-breadcrumb li.active:before {
        border-color: #55b776;
        background-color: #55b776;
        transition: all .8s
    }

    .progress-breadcrumb li.active:after {
        background-color: #55b776;
        transition: all .8s
    }

    .left {
        margin: 0;
        background: #f8f8f8;
        font-weight: 700;
        text-shadow: none
    }

    .order-details {
        text-shadow: none
    }

    .order-wrapper {
        margin: 1em auto
    }

    @media only screen and (max-width:768px) {
        .sub-header {
            font-size: 1.2em !important
        }

        .progress-breadcrumb li {
            width: 100%
        }

        .archetype-reading {
            width: 100%
        }

        .cta-btn {
            font-size: 1.2em
        }
    }
</style>

<div class="page-container">
    <div class="container-fluid bg-archetypewhite">
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
                    <h2><strong><span class="cap"><?php echo $_GET['name']; ?></span>, Unlock Your Sacred Archetypal Powers & Experience Abundance Across All Aspects Of Your Life. </strong></h2>
                    <div class="archetype-img">
                        <?php
                        switch (strtolower($_GET['archetype'])) {
                            case "caregiver":
                                echo '<img src="../img/icons/caregiver.png" width="100px">';
                                break;
                            case "creator":
                                echo '<img src="../img/icons/creator.png" width="100px">';
                                break;
                            case "explorer":
                                echo '<img src="../img/icons/explorer.png" width="100px">';
                                break;
                            case "hero":
                                echo '<img src="../img/icons/hero.png" width="100px">';
                                break;
                            case "innocent":
                                echo '<img src="../img/icons/innocent.png" width="100px">';
                                break;
                            case "jester":
                                echo '<img src="../img/icons/jester.png" width="100px">';
                                break;
                            case "lover":
                                echo '<img src="../img/icons/lover.png" width="100px">';
                                break;
                            case "magician":
                                echo '<img src="../img/icons/magician.png" width="100px">';
                                break;
                            case "member":
                                echo '<img src="../img/icons/member.png" width="100px">';
                                break;
                            case "outlaw":
                                echo '<img src="../img/icons/outlaw.png" width="100px">';
                                break;
                            case "ruler":
                                echo '<img src="../img/icons/ruler.png" width="100px">';
                                break;
                            case "sage":
                                echo '<img src="../img/icons/sage.png" width="100px">';
                                break;
                            default:
                                echo '<img src="../img/icons/caregiver.png" width="100px">';
                        }
                        ?>

                    </div>

                    <p>This Private Archetype Reading Has Been Prepared For:</p>
                    <table class="order-details">
                        <tbody>
                            <tr class="details">
                                <td class="right">Name:</td>
                                <td class="left"><span class="cap"><?php echo $_GET['name']; ?></span></td>
                            </tr>
                            <tr class="details">
                                <td class="right">Email:</td>
                                <td class="left"><?php echo $_GET['email']; ?></td>
                            </tr>
                            <tr class="details">
                                <td class="right">Archetype:</td>
                                <td class="left"><span class="cap"><?php echo $_GET['archetype']; ?></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <ul id="progress-bar" class="progress-breadcrumb">
                        <li class="s1 active">
                            <span class="stepnumber">Step 1</span>
                            Your Strengths + Calling
                        </li>
                        <li class="s2">
                            <span class="stepnumber">Step 2</span>
                            Your Obstacles + Weaknesses
                        </li>
                        <li class="s3">
                            <span class="stepnumber">Step 3</span>
                            Your Path To Abundance
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="archetype-reading">
        <div class="step1-reading">

            <p>Dearest <span class="cap"><?php echo $_GET['name']; ?></span>,</p>

            <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

            <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

            <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

            <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

            <p>There is plenty at stake here, <?php echo $_GET['name']; ?>. Your joy, happiness, luck, love, wealth...</p>

            <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <?php echo $_GET['archetype']; ?> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

            <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>

            <?php
            switch (strtolower($_GET['archetype'])) {
                case "caregiver":
                    include 'caregiver.php';
                    break;
                case "creator":
                    include 'creator.php';
                    break;
                case "explorer":
                    include 'explorer.php';
                    break;
                case "hero":
                    include 'hero.php';
                    break;
                case "innocent": //Form Page
                    include 'innocent.php';
                    break;
                case "jester": //Form Page
                    include 'jester.php';
                    break;
                case "lover": //Form Page
                    include 'lover.php';
                    break;
                case "magician": //Form Page
                    include 'magician.php';
                    break;
                case "member": //Form Page
                    include 'member.php';
                    break;
                case "outlaw": //Form Page
                    include 'outlaw.php';
                    break;
                case "ruler": //Form Page
                    include 'ruler.php';
                    break;
                case "sage": //Form Page
                    include 'sage.php';
                    break;
                default: //Any page that is not defined in this switch will lead to this page
                    include 'caregiver.php';
            }
            ?>

            <div class="step3-reading">
                <h2 class="sub-header">You Possess An Incredible Superpower! But...</h2>

                <p><?php echo $_GET['name']; ?>, even though you've made some remarkable progress in your life...</p>

                <p>There is a big part of you that's yearning for something MORE. Perhaps you're living pay cheque to pay cheque, and you're not experiencing the abundance you've always yearned for.</p>

                <p>Perhaps there's an overwhelming sense of loneliness and emptiness, finding it difficult to connect with others.</p>

                <p>Or... Perhaps <strong>you thought you'd be a lot farther ahead by now.</strong></p>

                <p>It's NOT your fault, <?php echo $_GET['name']; ?>... And here's why.</p>

                <h2 class="sub-header">Your Dreams Of Abundance, Happiness, and Direction Will Never Be Within Reach, Until You Do This...</h2>

                <p>Let's agree on one thing - wealthy millionaires and famous actors are amongst the most abundant individuals on the planet.</p>

                <p>By their own right, these different groups of individuals have ALL achieved the heavily coveted "abundance"... Whether it's money, fame, happiness... They've nailed it!</p>

                <p><strong>But how...?</strong></p>

                <p>...Is it <strong>SHEER LUCK</strong> that has brought these fortunate individuals to encounter such marvellous rewards?</p>

                <p>...Is it <strong>THE LAW OF ATTRACTION</strong> that has helped them manifest their deepest desires?</p>

                <p>...Is there some <strong>HIDDEN SECRET</strong> that they're deliberately keeping to themselves, while they watch the rest of us struggle?</p>

                <p>Now, here's the hard truth.</p>

                <h2 class="sub-header">They Discovered This One, Strange Thing "Suppressing" Their Potential</h2>

                <p>Some way, some how, perhaps by chance or destiny, they've all "stumbled" upon a silent, secret "resistor" LURKING within themselves. A quiet killer of abundance.</p>

                <p>A secret that's literally <strong>STOPPING ALMOST EVERYONE</strong> from maximizing their true potential... From creating the life of their desires.</p>

                <p><strong>INCLUDING YOU!</strong></p>

                <p>Feeling skeptical? Uncertain...? Confused...?</p>

                <p>In just a moment, I'm going to share with you this secret hidden, silent killer of YOUR abundance. The very same "resistor" that abundant individuals have somehow conquered to transform their lives...</p>

                <h2 class="sub-header">Before we get into that, let's get one thing straight...</h2>

                <p>Every individual across the face of the planet, whether you're a <?php echo $_GET['archetype']; ?>, a plumber, or Tom Cruise - every individual faces adversity... Resistance that holds them back from being successful.</p>

                <p>Resistance that stems from the conscious mind's natural sense of <strong>"BALANCE".</strong></p>

                <p>Analytical psychologists and individuation practitioners like to call it <strong>"homeostasis".</strong></p>

                <h2 class="sub-header">The True Resistance Preventing You From Transformation</h2>

                <p>Homeostasis is the true resistance of change. It is the brain's warning system that you're stepping into a realm of discomfort, and it wants to retract you back, hold you back into a state of familiarity.</p>

                <p>That's why no matter how hard you try, no matter what you do differently...</p>

                <p>You're always finding yourself running around in circles, expending all your energy, only to find yourself back at SQUARE ONE.</p>

                <p>It's like a part of your brain wants to transform. It wants to undergo a breakthrough, but at the same time it's holding itself back!</p>

                <p>Think of it as the mind's self-regulating thermostat that keeps your mind in a "lukewarm" state.</p>

                <p>The worst part? All these internal battles take place unbeknownst to you, because it happens in your subconscious mind.</p>

                <p>So, until you learn to consciously correct your mind's self-regulating thermostat... Your energy, happiness, abundance will constantly remain in this "lukewarm" state.</p>

                <p class="text-center"><strong>Now, in order to correct homeostasis, we have to first understand how it works</strong></p>

                <p>Homeostasis is triggered by a little almond-shaped part of your brain called the amygdala. The little part that's responsible for the response and memory of fear.</p>

                <!-- Insert Amygdala Image -->
                <img class="w-100" src="../img/amygdala.png">

                <p>So whether you're trying to manifest your desires, correct your behaviours, seize a new opportunity, undergo a journey of self discovery...</p>

                <p>...Your amygdala WILL sense discomfort, sound the alarm, and force you into a state of homeostasis by creating paralyzing friction between YOUR CURRENT SELF, and WHO YOU'RE TRYING TO BECOME.</p>

                <p>Your amygdala is the obstacle standing between you, and immense growth. Good change, bad change, or even pointless change - your amygdala will prevent you from breaking out.</p>

                <p>...Talk about being <strong>imprisoned by your own mind!</strong></p>

                <p>But if there's ONE THING that we HAVE LEARNED from millionaires, actors, and abundant individuals, it's this.</p>

                <p class="text-center"><strong>"Breaking away from our amygdalas is ENTIRELY possible."</strong></p>

                <p>People from all over the world, from vastly different backgrounds, facing incredulous circumstances, have shown us time and time again that breaking through homeostasis CAN BE DONE.</p>

                <p>And I'm going to reveal exactly how you can leverage on your archetype to conquer your mind's natural resistor - your amygdala.</p>

                <h2 class="sub-header">Archetypal Integration</h2>

                <p>I'll break it down for you.</p>

                <p>Your archetype, the <?php echo $_GET['archetype']; ?>, is your gateway to YOUR complete transformation.</p>

                <p>There is a palpable reason why psychologists have referred to archetypes as "the fundamental of the human mind".</p>

                <p>Archetypes reside in the unconscious, silently influencing EVERYTHING we do - our behaviours and thoughts, without us even REALIZING IT.</p>

                <p>...Which is why you were not aware of your archetype, your amygdala, and homeostasis... Until right now.</p>

                <p>But awareness is merely the beginning!</p>

                <p>See, most people would try to tackle their amygdalas head-on with brute force, thinking "if I tell myself not to be afraid, then I won't be afraid". Simple enough, right?</p>

                <p>Big mistake.</p>

                <p>Unfortunately, it does not work that way. If it did, there would be FAR MORE millionaires, actors, and abundant individuals! Don't believe me? Here, I'll explain.</p>

                <p>Think of tackling your mind's natural resistor as the <strong>infamous Chinese finger trap.</strong> No matter how hard you try, how much force you use, the Chinese finger trap isn't going to release... Why? Well, because that's precisely what it's designed to do - resist!</p>

                <!-- Insert Finger Trap -->
                <img class="w-100" src="../img/chinese-finger-trap.jpg">

                <p>Forcing your fingers apart creates more friction. It clamps down even tighter, making your release nearly IMPOSSIBLE.</p>

                <p>If you've ever toyed with one of these strange thingamajigs, you would know that the only solution to make it release is the EXACT OPPOSITE of your natural instincts.</p>

                <p>See, you cannot just pull your fingers apart...</p>

                <p>You have to <em>push your fingers together</em>, releasing the trap's traction, and then smoothly slip your fingers away.</p>

                <p>Think of the finger trap as the "amygdala". Think of the resistance and friction between the trap and your fingers as "homeostasis".</p>

                <p>And think of your two fingers as your subconscious mind, and the unconscious...</p>

                <p class="text-center"><strong>Yes, now you see.</strong></p>

                <p>Archetypal integration aligns your subconscious mind to the unconscious, opening the gateway of <strong>infinite possibilities.</strong></p>

                <p>It's what guides your consciousness from a state of homeostasis, to a state of transformation.</p>

                <p>And that's exactly when you'll start to witness all your limiting beliefs dissolve, your energy blocks released, and your consciousness shift.</p>

                <p>Your very own holistic transformation - gifting you the purpose and direction to reach your destiny of fulfilled desires.</p>

                <h2 class="sub-header">When You Master "Archetypal Integration", Your Life Can Transform COMPLETELY!</h2>

                <p>Over the years, we have created a remarkable system that guides individuals through a self-discovery process like no other...</p>

                <p>...Restoring <strong>flair, passion and purpose</strong> to the lost and directionless.</p>

                <p>...Returning <strong>confidence and certainty</strong> to the insecure and undecided.</p>

                <p>A "strange" transformation method that will <strong>reveal to you</strong> a complete and epiphanic understanding of <strong>who you are, who you have the potential to become, and what's stopping you from living a life of abundance, happiness, and love.</strong></p>

                <!--
        <p>There WAS a time when Archetypal Integration took YEARS, DECADES even...</p>

        <p>...A time when information and wisdom were scarce. A time when powerful, life-changing messages could not be communicated to millions in mere seconds...</p>

        <p>A time when transformational guidance and opportunities were rare - unheard of.</p>

        <p>But times have changed, and new horizons have opened. And likewise, we too, must evolve.</p>
-->

                <h2 class="sub-header">A Weird Story Of Struggle, Evolution, and Triumph</h2>

                <p>Before his Archetypal Integration, Marcus, a budding entrepreneur, encountered unimaginable struggles with his subconscious, and his internal self.</p>

                <p>It wasn't until he began his Archetypal Integration, that he began to notice a spectacular "shift" in his thought patterns, limiting beliefs, and negative energies.</p>

                <p>Within DAYS... His amygdala had been conquered, his archetype had been integrated into consciousness, and everything else became literally effortless.</p>

                <div class="testimonial">
                    <span class="archetype-sm member"></span>
                    <p>5 months ago, it dawned on me that there was a bigger purpose in life. That's when I decided to take a break from the corporate world, and pursue entrepreneurship.</p>
                    <p>What started with a few emails eventually became a guide which has left me dumbstruck until today - all thanks to my Premium Archetypal Analysis</p>
                    <p>There I was, thinking I was about to take a break from work, but little did I realise that the journey of life discovery and aligning myself with my life path started to unfold.</p>
                    <p>I started to notice a series of weird "coincidences" happening in my life, and it has put me on a life path filled with self-discovery, purpose, and constant learning.</p>
                    <p>Although the journey came together with obstacles and numerous challenges, I now live a more purposeful life. I'm now equipped with learning lessons that can only lead me to a bigger breakthrough.
                        <p>I look forward to my continued success during this journey, and hope to keep gaining knowledge and blessings from the Individualogist Team.</p>
                        <div class="testimonial-profile">
                            <p>Marcus Khoo, 33, Entrepreneur - Member Archetype</p>
                        </div>
                </div>

                <p>The awesome, odd stories don't just end there, <?php echo $_GET['name']; ?>.</p>

                <p>Jake, a humble Deli Clerk, had this to say about his archetypel integration:</p>

                <div class="testimonial">
                    <span class="archetype-sm magician"></span>
                    <p>...I cannot say enough positive things about the various products that are available at individualogist.com as I have purchased several reports and have been 100% satisfied with each one.</p>
                    <p>I have learned so much about myself in such a short span of time and the results are astonishing.</p>
                    <p>The Universe answered when I was ready to listen and guided me to individualogist.com (among other things) starting with my free archetype reading.</p>
                    <p>I was so impressed that I purchased the complete report on my archetype, which explained to me things I already knew about myself but had forgotten or buried deep down inside, as well as opened my eyes to a new perspective on myself.</p>
                    <p>I have also purchased and read through the Diminishing Your Shadow Report on my archetype, which was invaluable at taking a real good look at myself and seeing what makes me tick.</p>
                    <p>Note that this material is not for everyone, you have to be ready to take an honest evaluation of yourself including the bad with the good.</p>
                    <p>But in the end while taking a close look at yourself can be difficult at times, what you find and release and integrate consciously is more than worth it.</p>
                    <p>Highly recommended!</p>
                    <div class="testimonial-profile">
                        <p>Jack Brunner, 51, Deli Clerk - Magician Archetype</p>
                    </div>
                </div>

                <p><?php echo $_GET['name']; ?>, you can experience the same remarkable transformation. Jake's and Marcus' stories are amongst COUNTLESS glowing testimonials and reviews we've received over the years.</p>

                <p>I want you to know that it IS possible. And more than possible, it can be EFFORTLESS.</p>

                <p>So, I'm so excited to share the exact TOOL and PROCESS that's helped Jake and Marcus, along with thousands of others to master archetypal integration, AND unlock abundance, happiness, and love:</p>

                <ul class="tick-list">
                    <li>A blueprint that reveals the exact steps and phases to integrate your archetype into your consciousness...</li>
                    <li>A tool that unravels the secret to overcoming your mind's resistance to "good" change...</li>
                    <li>A resource that can align your direction, desires and energies for remarkable transformation...</li>
                    <li>A shortcut that can return intuition and intention to your control...</li>
                </ul>

                <h2 class="sub-header"><strong>INTRODUCING:</strong> Your Premium Archetypal Analysis - The Gateway To Archetypal Integration</h2>

                <p>This powerful analysis is the starting point of your <strong>personalized path</strong> to your abundant state...</p>

                <p>A carefully crafted guide that will take you on a journey through an in-depth understanding of what your archetype truly encompasses, and help you gain an epiphanic perspective of who you truly are, and who you can become.</p>

                <p>It will reveal your archetypal path and purpose, guiding you through each phase of the Archetypal Integration process, without ANY homeostasis produced from your amygdala.</p>

                <p>To make this journey as effortless as possible...</p>

                <h2 class="sub-header">Your Premium Archetypal Analysis is split into <strong>FIVE Progressive, Transformational Phases...</strong></h2>

                <p class="text-center"><strong>Phase #1: The Individuation Fundamentals</strong></p>
                <img class="paa-items" src="/offer/assets/img/paav2-if.png">
                <p>This phase marks the beginning of your transformation, where every step that lays ahead of you will be explained. During this phase, the secrets of individuation and the Archetypal Integration process will be unveiled. You will come to understand how all the pieces of the puzzle fit to form your holistic <?php echo $_GET['archetype']; ?> identity, and of course, how it works <em>together with</em> your amygdala, and not <em>against it</em>.</p>
                <p>Immediately, you will see your <strong>personalized path of least resistance to transformation.</strong></p>

                <p class="text-center"><strong>Phase #2: Your Archetypal Incarnations</strong></p>
                <img class="paa-items" src="/offer/assets/img/paav2-ai.png">
                <p>The second phase is when the real work begins, and when real results are experience. During this phase, you are guided through all the incarnations of your <?php echo $_GET['archetype']; ?> archetype. Incarnations that form the entirety of your archetype.</p>
                <p>It is through this phase that you will gain a thorough, profound revelation of who you are, and who you can evolve into.</p>

                <p class="text-center"><strong>Phase #3: Your Archetypal Profile</strong></p>
                <img class="paa-items" src="/offer/assets/img/paav2-ap.png">
                <p>Now, we've moved on to the third phase of your Archetypal Integration, where you'll work more intimately with your archetype. In this phase, more of your archetype's tendencies, behavioural responses, strengths, and weaknesses are revealed.</p>
                <p>With homeostasis out of the way, your subconscious mind will start to become unified with the unconscious, and you'll start to experience a "shift" in your perceptions - of yourself, of others, and of what's truly possible.</p>

                <p class="text-center"><strong>Phase #4: Your Archetypal Odyssey</strong></p>
                <img class="paa-items" src="/offer/assets/img/paav2-ao.png">
                <p>Your amygdala is out of the way. Your archetype is slowly becoming integrated - <em>now what?</em> The fourth phase will prepare you for your next steps - the journey that your archetype will embark on. It sheds light unto the obstacles that lie ahead, giving you predictive foresight for you to maintain your integrated state.</p>
                <p>In any transformation, regression and "back sliding" are extremely common phenomenon. This phase will ascertain your transformation as a permanent change.</p>

                <p class="text-center"><strong>Phase #5: Your Archetypal Exercise Guide</strong></p>
                <img class="paa-items" src="/offer/assets/img/paav2-aeg.png">
                <p>The fifth and final phase is where you'll translate everything into action - your newly experienced epiphanies, realizations, and wisdom. Here, we reveal a series of cognitive and emotional exercises that work directly with all levels of your consciousness, familiarizing your entire self with archetypal integration.</p>
                <p>And as soon as this final phase begins, your direction and purpose will become clear. Your entire being will be radiating with energy. You will notice abundance flowing into your life, and everything will somehow "click" into place...</p>

                <h2 class="sub-header">A Transformation Method That Supercedes All Other Programs</h2>

                <p><?php echo $_GET['name']; ?>, if there existed another transformational program as powerful, detailed, and personalized as this... <strong>how much time, effort, research, and resources do you think it's taken to produce?</strong></p>

                <p>Life coaches typically charge hundreds up to THOUSANDS of dollars per session - with NO GUARANTEE of making any transformation whatsoever!</p>

                <p>In fact, I just came across an "abundance course" from one of those "gurus" - SLAPPED with a steep price tag of $1,900!</p>

                <p>At Individualogist.com - we've made it our mission to deliver personal transformation through archetypal integration <strong>to the MASSES,</strong> because we believe that everyone should have access to the information they need to become <strong>more abundant, happier, and filled with love.</strong></p>

                <p>In order to make our programs, reports, and information available to the masses, we have to make it <strong>affordable without compromising quality AND results.</strong></p>

                <p>And so, we've <strong>personalized the archetypal integration process to EACH ARCHETYPE.</strong></p>

                <p>See, each of the archetype's amygdalas, each individual has a different "response" to change and transformation, making it absolutely <strong>necessary</strong> to develop a process that's not only powerful, but also <strong>effective through personalized guidance and information.</strong></p>

                <p>...Which means, <?php echo $_GET['name']; ?>, as a <?php echo $_GET['archetype']; ?> archetype, the exact archetypal integration steps, methods and exercises have all been <strong>personalized to YOUR archetype.</strong></p>

                <p>In other words, I'm sure we can both agree that the true value of your Premium Archetypal Analysis is certainly worth MUCH more than one of those overpriced "guru courses", that hardly ever work.</p>

                <!--
        <p><?php echo $_GET['name']; ?>, but despite the immense value of your Premium Archetypal Analysis, we have NOT set the price tag at $1,900.</p>

        <p>In fact, it is NOT even going to be priced at $1,000!</p>

        <p><strong>...$500 seems pretty fair, but admittedly, not everyone can afford to part with a sum of money that large...</strong></p>

        <p>We did consider pricing a little under $200, but it still didn't feel quite right... At least to me.</p>

        <p>So... After years of research and development, tests and tweaks... We're proud to announce that we've set the <strong>official price</strong> of the Premium Archetypal Analysis at just $97.</p>

        <p class="text-center"><strong>BUT WAIT! You're NOT Going To Part With $97 TODAY.</strong></p>

        <h2 class="sub-header">...Because I'm NOT Going To Give You Your Premium Archetypal Analysis At The "Official Price".</h2>

        <p>On this special page, I've included an exclusive one-time $60 discount for your Premium Archetypal Analysis, setting the final "unofficial" price at $37.</p>

        <p>It's part of an "archetypal experiment" to see how different archetypes react to unique opportunities - will some of them seize such precious opportunities without a second breath...? Which archetype's amygdalas will create enough resistance to stop them from receiving something good into their lives... Will skepticism simply get the better of them?</p>

        <p>The more we learn about you from these little anonymous "archetypal experiments", the better we can improve our products, content, and programs to better serve you.</p>

        <p>Consider this discount - this opportunity, as my invitation to you, <?php echo $_GET['name']; ?>. I'm inviting you to become a part of our successfully transformed and archetype-integrated community.</p>

        <p>A community filled with like-minded <?php echo $_GET['archetype']; ?>s such as yourself.</p>

        <p>All I ask in return is you spread the good news of archetypes, Individuation, and Archetypal Integration to your friends and family around you, so they too can rise above their amygdalas. So that they too can have that fighting chance to "step out" of homeostasis.</p>
-->

                <div class="testimonial">
                    <span class="archetype-sm creator"></span>
                    <h3>"A great reminder of who I used to be..."</h3>
                    <p>I recently purchased the Premium Archetypal Analysis after learning I was the Creator. It has been revealing in what motivates me, as well as a great reminder of who I used to be. I was always so creative as a child and lost this along the way. I believe this report has reawakened that part of me and will serve me well on my path! Big thanks to the Individualogist Team for this awesome information!</p>

                    <div class="testimonial-profile">
                        <img src="../img/deborah-brown.png">
                        <p>Deborah Brown, 44, Holistic Health Coach - Creator</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm ruler"></span>
                    <h3>"As time went along, more and more seemed to come true..."</h3>
                    <p>This product is amazing. I was very scepitical at first but as time went along, more and more seemed to come true. Plus, it was filled with so much relevant information, it made it very easy to follow and recognize the signs and traits that were placed in front of me. It was a pleasure to read and piqued my interest even further. I recommend that everyone take part in this and get yourself involved in this. You won't regret it.</p>

                    <div class="testimonial-profile">
                        <img src="../img/bryan-smith.png">
                        <p>Bryan Smith, 51, City Inspector - Ruler</p>
                    </div>
                </div>

                <div class="paav2-cta">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                            <img src='https://individualogist.com/offer/assets/img/paav2-cover.png' class='paav2-cover'>
                        </div>
                        <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                            <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $last = explode("/", $str);
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
                            echo "<a class='cta-btn btn' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid'><span class='btn-text'>Claim Your Personalized Premium Archetype Analysis</span> <i class='fas fa-arrow-circle-right'></i></a>
                <a class='cta-link' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid''>Click Here Now To Complete Your Request</a>";
                            ?>

                            <img class="cta-guarantee" src="/offer/assets/img/guarantee.png">
                            <img class="payment-options" src="/offer/paa/img/payment-options.png">
                            <div class="security">
                                <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!--
        <p>Now, I must warn you - if you leave this page, your discount will be lost - forever. The next time you see your reading, your Premium Archetypal Analysis will return to its "official price" of $97.</p>

        <p>AND on top of your $60 discount, I'm going to <strong>sweeten the deal</strong> just a little more...</p>
-->

                <h2 class="sub-header">Act Now, And I'll Give You These...</h2>

                <p>Claim your Premium Archetypal Analysis today, and I'll include 5 additional bonus readings.</p>

                <p>These 5 additional materials are my personal recommendations for enhancing your self-discovery journey - each of them revolve primarily around energetic influences, and intuitive control.</p>

                <p>But not only that - these bonuses are all authored by our in-house panel of analytical psychology and spirituality experts. They ARE NOT readings, guides, or information that you'll be able to get <strong>ANYWHERE ELSE.</strong></p>

                <p class="text-center"><strong>BONUS #1: Active Imagination Guide - <span class="bonusvalue">$37 value</span></strong></p>
                <img class="paa-items" src="../img/aig-cover.jpg">
                <p>Bridge the gap between your consciousness and the unconscious using this mind-exploring meditative technique, translating your unconscious mind into tangible images.</p>
                <p>This extremely powerful guide will enhance your archetypal integration efforts by tapping into the proven psychological exercises of "active imagination".</p>

                <p class="text-center"><strong>BONUS #2: Dream Analysis Guide - <span class="bonusvalue">$37 value</span></strong></p>
                <img class="paa-items" src="../img/dag-cover.jpg">
                <p>Become a master of your intuition by deconstructing your dreams to reveal your "inner voice". This secret guide will give you the edge you need to navigate the complex plains of your unconscious mind.</p>
                <p>By borrowing principles of analytical psychology, this guide will show you the exact art and science to interpret dreams, so that you can uncover "hidden truths" about your inner intuition and deeper personality.</p>

                <p class="text-center"><strong>BONUS #3: Exploring Your Birthdate With The Chinese Zodiac - <span class="bonusvalue">$37 value</span></strong></p>
                <img class="paa-items" src="../img/chinese-zodiac-cover.png">
                <p>Meet the counterpart of Western astrology – The Chinese Zodiac. Understand the Eastern influences on predictions and learn how you can apply them to harness yin and yang energies, all based on your personalized Chinese Zodiac.</p>

                <p class="text-center"><strong>BONUS #4: Discovering Your Aura - <span class="bonusvalue">$27 value</span></strong></p>
                <img class="paa-items" src="../img/discovering-aura-cover.png">
                <p>Each individual exudes a certain aura. Learn how you can instantly identify and interpret different auras of different individuals to gain maximum influence over others, as well as manage the emission of your own aura.</p>

                <p class="text-center"><strong>BONUS #5: Feng Shui Paradigm Guide - <span class="bonusvalue">$37 value</span></strong></p>
                <img class="paa-items" src="../img/fengshui-paradigm-cover.png">
                <p>Maximise the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui. This in-depth guide will turn you into a true geomancy master in no time.</p>

                <p class="text-center"><strong>$175 Worth Of Powerful Energy & Intuition Bonuses Given To You For FREE.</strong></p>

                <p>That's not ALL.</p>

                <p>I hope you don't mind if I overdeliver! Because...</p>

                <p>...I'm also going to go above and beyond to ensure your complete satisfaction... So I'm backing this entire opportunity with our transformation-assured, money-back guarantee.</p>

                <h2 class="sub-header">60 Days From Today, If You're Not Satisfied For ANY Reason, I'll Give You A FULL Refund</h2>

                <img src="../img/guarantee.png" style="text-align: center; display:block; margin: 0 auto; position: relative; filter:drop-shadow(0 0 5px #fff);">

                <p>Within the next 60 days, starting from the day of your purchase, if you decide that your Premium Archetypal Analysis fell short of your expectations, or if you decide that you weren't satisfied with it in ANY way, I'll issue you a FULL refund.</p>

                <p>It is important to me that you get value AND results from this. And if you DON'T see a difference whatsoever in your thought patterns, in your subconscious, and in your state of abundance, then we DO NOT DESERVE to keep your money.</p>

                <div class="testimonial">
                    <span class="archetype-sm ruler"></span>
                    <h3>"As time went along, more and more seemed to come true..."</h3>
                    <p>This product is amazing. I was very scepitical at first but as time went along, more and more seemed to come true. Plus, it was filled with so much relevant information, it made it very easy to follow and recognize the signs and traits that were placed in front of me. It was a pleasure to read and piqued my interest even further. I recommend that everyone take part in this and get yourself involved in this. You won't regret it.</p>

                    <div class="testimonial-profile">
                        <img src="../img/bryan-smith.png">
                        <p>Bryan Smith, 51, City Inspector - Ruler</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm explorer"></span>
                    <h3>"...Truly heal my physical and spiritual self..."</h3>
                    <p>I have been on my spiritual journey for about a year. It wasnt until i got diagnosed with HSV did I truly began to embark on the quest of individuation. This has helped me take a better look at myself and go inward to truly HEAL my physical and spiritual self. Thank you for EVERYTHING!</p>

                    <div class="testimonial-profile">
                        <p>Ciara L, 22, DOT Driver - Explorer</p>
                    </div>
                </div>

                <div class="paav2-cta">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                            <img src='https://individualogist.com/offer/assets/img/paav2-cover.png' class='paav2-cover'>
                        </div>
                        <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                            <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $last = explode("/", $str);
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
                            echo "<a class='cta-btn btn' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid'><span class='btn-text'>Claim Your Personalized Premium Archetype Analysis</span> <i class='fas fa-arrow-circle-right'></i></a>
                <a class='cta-link' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid''>Click Here Now To Complete Your Request</a>";
                            ?>

                            <img class="cta-guarantee" src="/offer/assets/img/guarantee.png">
                            <img class="payment-options" src="/offer/paa/img/payment-options.png">
                            <div class="security">
                                <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <h2 class="sub-header"><?php echo $_GET['name']; ?>, All Obstacles Have Been Removed For Your One Chance At Enormous Change</h2>

                <p>There is absolutely no risk involved, and it’s all up to you and whether you decide to begin your Archetypal Integration.</p>

                <!--        <p>Not many of us are lucky enough to have experienced the joy of knowing our true identities, but that’s what your Premium Archetypal Analysis is going to find for you.</p>-->

                <img class="img-intext" src="https://individualogist.com/offer/assets/img/paav2-cover.png">

                <p>This is your one chance to come face-to-face with your archetype and be guided through a transformational journey. This is your time to realign your direction with your destiny.</p>

                <ul class="tick-list">
                    <li>Experience MULTIPLE BREAKTHROUGHS across ALL aspects of your life with Archetypal Integration.</li>
                    <li>Discover your hidden strengths, intuitive instincts, and unquestionable purpose to charge through mental barriers and limiting beliefs.</li>
                    <li>Receive a personalized and effortless blueprint that reveals your true inner self, all based on your primary archetype.</li>
                    <li>Transform yourself into a magnet that draws like-minded members of the opposite gender into your life - members who'll love you and appreciate you for who you truly are.</li>
                    <li>Receive a detailed guide, broken down into 5 different phases - your Individuation Fundamentals, your Archetypal Profile, your Archetypal Incarnations, your Archetypal Odyssey, and your Archetypal Exercise Guide.</li>
                    <li>Receive your 5 additional bonus materials for FREE - readings that will help you obtain a deeper understanding of your archetype, your energies, and the spiritual/psychological realm.</li>
                    <li>Walk away with these 5 bonuses materials if you're not COMPLETELY SATISFIED</li>
                </ul>

                <p>Now, <span class="cap"><?php echo $_GET['name']; ?></span> - how far are you willing to go to experience that single, life-changing breakthrough that will open your heart, mind, and soul to your true purpose, and all the abundance that comes with it?</p>

                <p>Right now, you have TWO options.</p>

                <p>You can, of course, do <strong>NOTHING.</strong> You can choose to remain in your status quo. Nothing changes. You stay as you are, drifting along the currents of life, restrained by your limiting beliefs, and remaining powerless to whatever life chooses for you.</p>

                <p>OR...</p>

                <p>You can give yourself a chance to transform, grow, and unlock all the abundance, happiness, and love you desire - completely risk free.</p>

                <p>In mere minutes, your archetypal integration can start working its magic in your life!</p>

                <!--        <p>You can take an affirmative leap FORWARD and begin MOULDING your destiny to FIT your desires, DISCOVER a newfound understanding of your identity and purpose.</p>-->

                <p>Once again, I'd like to remind you of everything you're about to receive:</p>

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

                <!--        <p class="text-center"><strong>...All of this, for JUST $37.</strong></p>-->

                <p class="text-center">To get started, click on the button below and commence your archetypal transformation <strong>NOW</strong>!</p>

                <div class="paav2-cta">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                            <img src='https://individualogist.com/offer/assets/img/paav2-cover.png' class='paav2-cover'>
                        </div>
                        <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                            <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $last = explode("/", $str);
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
                            echo "<a class='cta-btn btn' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid'><span class='btn-text'>Claim Your Personalized Premium Archetype Analysis</span> <i class='fas fa-arrow-circle-right'></i></a>
                <a class='cta-link' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid''>Click Here Now To Complete Your Request</a>";
                            ?>

                            <img class="cta-guarantee" src="/offer/assets/img/guarantee.png">
                            <img class="payment-options" src="/offer/paa/img/payment-options.png">
                            <div class="security">
                                <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                            </div>
                        </div>
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
                    <span class="archetype-sm caregiver"></span>
                    <h3>"...I found a goldmine when I found Individualogist..."</h3>
                    <p>There has been a search for who I am and what my destiny is since I was 6 years old and suffered a SEPARATION TRAUMA.... I found a goldmine when I found Individualogist. Thank you so much for helping me. Your questionnaire determined that I am a Caregiver, and I love your assessment!</p>

                    <div class="testimonial-profile">
                        <img src="https://individualogist.com/wp-content/themes/indivi-wp/img/tilly-dunn.png">
                        <p>Till Dunn, 73, Author &amp; Speaker - Caregiver</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm caregiver"></span>
                    <h3>"...Helped me realize what my soul purpose on this earth is..."</h3>
                    <p>This reading really helped me realize what my soul purpose on this earth is. It's very accurate and right on point and I would recommend it to anyone who feels like they have lost their way!</p>
                    <div class="testimonial-profile">
                        <p>Misty Thompson, 42, Homemaker - Caregiver</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm explorer"></span>
                    <h3>"...Gained a lot of insight into my abilities and weakness..."</h3>
                    <p>Excellent product, I've gained a lot of insight into my abilities and weakness. Now I'm able to detect my shadow way easier and let go of what has been holding me back all my life. It's been a deeply rewarding and fulfilling journey that I keep returning too whenever I need to refresh my memory. Thank you!</p>
                    <div class="testimonial-profile">
                        <p>Oscar Nygren, 36, Emotional Fitness Coach - Explorer</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm magician"></span>
                    <h3>"...Try it yourself..."</h3>
                    <p>Had a great time with my readings! I've learned a lot about my strengths, weaknesses and different latent gifts I have. Gifts that need to be tapped in to and used. There are things in my reading that have amazed me. Try it for yourself!</p>
                    <div class="testimonial-profile">
                        <p>Barbara Lewis, 67, Magician</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm outlaw"></span>
                    <h3>"...Dead accurate..."</h3>
                    <p>Dead accurate and couldn't have come at a better time. Best of the best! I now know my place in the world for certain!</p>
                    <div class="testimonial-profile">
                        <p>Bruce Gordon, 25 - Outlaw</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm lover"></span>
                    <h3>"I was convinced of the power and precision..."</h3>
                    <p>As a retired teacher and a seeker of Universal Truths and Mysteries, my archetype is the Lover and every word I have read from my Premium Archetypal Analysis has been right on target.</p>

                    <p>I was sceptical at first but as I began reading I was convinced of the power and precision of the information given. I am now a confirmed student of this process and recommend it to any other seeker of truth on this pathway.</p>

                    <div class="testimonial-profile">
                        <img src="../img/janice-hickey.png">
                        <p>Janice Hickey, 62, Retired Teacher - Lover</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm ruler"></span>
                    <h3>"...Helping me hone my unique characteristics..."</h3>
                    <p>The Premium Archetypal Analysis is helping me hone my unique characteristics and has really made me interested in further research into Jungian Psychology. Thanks! I will add this to my toolbox to further map out my inner world.</p>

                    <div class="testimonial-profile">
                        <p>Ryan Evans, 33, Hairstylist - Ruler</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm member"></span>
                    <h3>"...You won't regret it..."</h3>
                    <p>I'm still taking everything in. Do it! Get this program. I promise, you won't regret it!</p>
                    <div class="testimonial-profile">
                        <p>Dulce Montas, 48, Student - Member</p>
                    </div>
                </div>

                <div class="paav2-cta">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                            <img src='https://individualogist.com/offer/assets/img/paav2-cover.png' class='paav2-cover'>
                        </div>
                        <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                            <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $last = explode("/", $str);
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
                            echo "<a class='cta-btn btn' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid'><span class='btn-text'>Claim Your Personalized Premium Archetype Analysis</span> <i class='fas fa-arrow-circle-right'></i></a>
                <a class='cta-link' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid''>Click Here Now To Complete Your Request</a>";
                            ?>

                            <img class="cta-guarantee" src="/offer/assets/img/guarantee.png">
                            <img class="payment-options" src="/offer/paa/img/payment-options.png">
                            <div class="security">
                                <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <?php include '../inc/faq-plain.php'; ?>

                <div class="paav2-cta">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
                            <img src='https://individualogist.com/offer/assets/img/paav2-cover.png' class='paav2-cover'>
                        </div>
                        <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
                            <?php
                            $name = $_GET['name'];
                            $email = $_GET['email'];
                            $archetype = $_GET['archetype'];
                            $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                            $last = explode("/", $str);
                            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
                            echo "<a class='cta-btn btn' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid'><span class='btn-text'>Claim Your Personalized Premium Archetype Analysis</span> <i class='fas fa-arrow-circle-right'></i></a>
                <a class='cta-link' href='https://individualogist.com/offer/paa/reading-v5/checkout?name=$name&email=$email&archetype=$archetype&utm_content=$vtid''>Click Here Now To Complete Your Request</a>";
                            ?>

                            <img class="cta-guarantee" src="/offer/assets/img/guarantee.png">
                            <img class="payment-options" src="/offer/paa/img/payment-options.png">
                            <div class="security">
                                <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>


        </div>
        <script>
            $('.step2').text('Show Me Now!');
            $('.step3').text('Guide Me To Abundance!');
        </script>

        </body>


        <?php include '../inc/footer.php'; ?>