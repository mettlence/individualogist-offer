<?php
$PageTitle = "Individualogist.com | Reading";
include('../../inc/headerdev.php');
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
    .active {
        font-weight: 700 !important;
        border-radius: 20px;
        color: #fff !important;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);
    }

    .active:after {
        content: "" !important;
    }

    .progress-breadcrumb {
        margin: 1em auto;
        display: inline-block;
        border-radius: 20px;
        box-shadow: 0 0 10px #fff;
        width: 100%;
        position: relative;
        padding: 0;
    }

    .progress-breadcrumb li {
        list-style-type: none;
        width: 33.3333%;
        float: left;
        font-size: 14px;
        position: relative;
        padding: 1em;
        text-align: center;
        text-transform: uppercase;
        color: rgba(255, 255, 255, 0.5);
        height: 100%:
    }

    .page-header {
        font-size: 1em;
    }

    /*
  .progress-breadcrumb li:before {
      width: 15px;
      height: 15px;
      content: '';
      line-height: 30px;
      border: 2px solid #55b776;
      background-color: #55b776;
      display: block;
      text-align: center;
      margin: 0 auto;
      z-index: 10;
      border-radius: 50%;
      transition: all .8s;
  }
  .progress-breadcrumb li:after {
      width: 100%;
      height: 2px;
      content: '';
      position: absolute;
      background-color: #55b776;
      top: 7px;
      left: -50%;
      z-index: 0;
      transition: all .8s;
  }
*/
    .progress-breadcrumb li:first-child:after {
        content: none;
    }

    .progress-breadcrumb li.active:before {
        border-color: #55b776;
        background-color: #55b776;
        transition: all .8s;
    }

    .progress-breadcrumb li.active:after {
        background-color: #55b776;
        transition: all .8s;
    }

    .order-wrapper {
        margin: 1em auto;
    }

    @media only screen and (max-width: 768px) {
        .progress-breadcrumb li {
            width: 100%;
        }
    }
</style>

<div class="page-container">
    <div class="container-fluid bg-blurred">
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
                    <h2><strong><span class="cap"><span class="name">Dear</span></span>, The Layers Have Been PEELED... Your Archetype Reveals The CORE Of Your True IDENTITY. </strong></h2>
                    <!-- archetype image -->
                    <div class="archetype-img">
                    </div>

                    <p>This Private Archetype Reading Has Been Prepared For:</p>
                    <table class="order-details">
                        <tbody>
                            <tr class="details">
                                <td class="right">Name:</td>
                                <td class="left"><span class="cap"><span class="name">Dear</span></span></td>
                            </tr>
                            <tr class="details">
                                <td class="right">Email:</td>
                                <td class="left"><span class="email"><?php echo $_GET['email']; ?></span></td>
                            </tr>
                            <tr class="details">
                                <td class="right">Archetype:</td>
                                <td class="left"><span class="cap"><span class="archetype">Caregiver</span></span></td>
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
        <div class="caregiver" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Caregiver - And This Is What It Means...</h2>

                <p>You are an individual who posseses great capacities of love... An individual whose sole purpose is to give large chunks of yourself to others.</p>

                <p>That being said, you truly are a unique individual, <span class="cap"><span class="name">Dear</span></span>... And needless to say, the world certainly needs more people like you.</p>

                <p>And despite your seemingly simple appearances, you're definitely a whole lot smarter than you make yourself out to be. In other words, because of your archetype, there's no doubt that you possess a profound level of intelligence...</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/caregiver.png">

                <p>...A level of intelligence that is not merely limited to academics.</p>

                <p>But... Because of your humble and mild-mannered nature, you'd very much prefer to hide that specific trait about you.</p>

                <p>You'd very much rather be underestimated than overestimated, isn't that right?</p>

                <p>You're also deeply sensitive when it comes to other's emotions - your emotional quotient amongst the highest in the archetypes... Allowing you to experience the pains, struggles, and happiness of others...</p>

                <p>Your selflessness comes unparalleled. You're always so ready to give to others - whether its in the form of time through volunteering, in the form of money through donations, or even in the form of simple acts of love through listening to another's sorrows.</p>

                <p>And unlike others, you're not picky when it comes to who you choose to give to. It doesn't matter to you, does it? Whether it's giving to loved ones, acquaintances, and often times, even strangers.</p>

                <p>You might not be aware of this, <span class="cap"><span class="name">Dear</span></span>... But your generosity does not go unnoticed. In fact, it inspires and encourages literally every one around you.</p>

                <p>And that's why the world needs more people like you...</p>

                <h2 class="sub-header">As A Caregiver, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                <p>Your archetype has a magnetizing personality... One that draws respect and admiration from your friends and loved ones.</p>

                <p>It's no wonder that people are always looking towards you whenever they need a listening ear.</p>

                <p>And unlike other archetypes, you're not one to have massive circles of friends. But that does not mean to say that you have trouble with making friends.</p>

                <!--Insert Strength Image-->
                <img class="img-intext" src="../img/strength.png">

                <p>In fact, it's quite the contrary. The other archetypes often find themselves drawn to your calm and tender presence.</p>

                <p>You are, however, a little bit selective when it comes to who you choose to let into your life.</p>

                <p>You prefer to keep your loved ones close, and your circle of friends small.</p>

                <p>Amongst the people who know you best, you're often seen as a parental figure... Someone that they look to for guidance and advice.</p>

                <p>This gives rise to your natural inclination to teach others, as you draw energy from imparting knowledge to those around you.</p>

                <p>Caregivers often find the greatest amounts of fulfillment in careers that involve a lot of teaching and guiding, and nurturing.</p>

                <p>Despite your mild-mannered character, there's a fierceness that resides deep within you. A fierceness that's only revealed when you have to protect the people you care deeply about - especially your children.</p>

                <p>You're willing to give everything and anything it takes to keep them safe from harm.</p>

                <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Magnanimous Caregiver, <span class="cap"><span class="name">Dear</span>... These Are The Shortcomings You Must Look Out For.</span></h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your strengths, resilience, and fortitude, you will overcome all that stands in your way.</p>

                <p>You see, because of your sympathetic and giving nature, your actions are highly prone to being misunderstood - misinterpreted, even.</p>

                <p>At times, others might be cynical of your good intentions. At times, they might even tarnish your reputation by spreading false rumours about you.</p>

                <p>Bullies have their eye on you - cowards who have to rely on throwing their weight around to make themselves feel strong.</p>

                <p>Don't let that discourage you. You are far stronger than they are, and in eventuality, you will be recognized for the altruistic and giving individual that you are.</p>

                <p>After all, you are the one who keeps the world grounded in sympathy and empathy, by spreading your kindness and joy to everyone around you.</p>

                <p>In the face of wicked hearts and selfishness, your heart of purity and kindness will prevail.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As A Caregiver, This Is Your Calling And Direction In Life... And It's Beyond Your Wildest Imaginations.</h2>

                <p>You tend to concern yourself with acts of sharing. You’re always happy to share your knowledge, wisdom and experiences with those around you. That is where you derive fulfilment from. The more you share, the more you express care for others, the happier you seem to be.</p>

                <p>However, that can make you dependent on others for your own happiness. And that is something that you need to be careful of.</p>

                <p>At times, it might feel as if you’re living your life for others. That’s not what you want. You want to live life for yourself. You want to love yourself. When you’re able to do that, success and the life of your dreams will follow. And that’s what Individuation aims to teach you.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/caregiver-love-compatibility.png">

                <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>You’re not the kind of person that has trouble when it comes to love. Love interests find themselves drawn to your nurturing and giving nature.

                    <p>You’re fiercely loyal, patient, giving, and emotionally connected. The relationships that you forge with potential lovers are always profound and deep.</p>

                    <p>That being said, you tend to be very selective with who you choose to date and who you choose to end up with – for good reason, of course.</p>

                    <p>You can use this little guide to determine potential life partners - especially since they're the ones who are far more aligned to your personal journey than other archetypes.</p>

                    <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Your spouse or partner is meant to play a supporting role in your life; not the lead. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                    <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="creator" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Creator - And This Is What It Means...</h2>

                <p>You are an individual who possesses a stupendous amount of creativity... An individual whose sole purpose is to express yourself through your idealistic and innovative mind.</p>

                <p>That being said, you truly are a unique individual... And needless to say, the world certainly needs more people like you.</p>

                <p>You're someone who's also incredibly resourceful, scrappy, and imaginative... Finding all sorts of ways to express your ideas and feelings. Because of this, you're also someone who's well-respected by the others around you - for your talents and abilities in the things, hobbies, and skills that you're passionate about.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/creator.png">

                <p>...Your archetype also suggests that you're highly opinionated... You take great pride in your work - your craft. It's what you live for, and also what you're willing to sacrifice for.</p>

                <p>You hold high regards for your originality.. It is highly representative of you to refuse to conform to societal expectations. You're often challenging the norm - battling against conventional rules.</p>

                <p>Your archetype also suggests that you're often on the lookout for opportunities to showcase your talents. After all, the admiration and respect that you receive can feel rather rewarding, doesn't it?</p>

                <p>You might not like to admit it... But you're gifted - at least, more so than the other archetypes. You pour your heart, mind, and soul into anything that you construct, ensuring that the outcomes resembles the closest thing possible to perfection.</p>

                <p>The Creator archetype is also one that seems to enjoy working with its hands. You prefer to immerse yourself in the tangible experience of what it means to create. The lesser the medium, the closer you feel to your work.</p>

                <p>And unlike others, you're not exactly the most sociable person on the planet... On a bright Sunday afternoon, you'd very much prefer to remain in the comfort of your own home - honing your talents and improving yourself instead of being out shopping or spending time with your friends.</p>

                <p>You might not be aware of this... But your creativity is inspiring and encouraging to the people around you - mostly your peers. And because of this, your archetype truly has the capacity to achieve greatness.</p>

                <p>That's why the world needs more people like you... I have no doubt that you will one day uncover ground-breaking solutions, and contribute great things to the world.</p>

                <h2 class="sub-header">As A Creator, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                <p>Although you tend to be rather aloof in the conversations that you share with others, you do also seem to enjoy the occasional chit-chat. That's because you've constructed thick barriers between you and the rest of the world - but unfortunately, it can get a little at times...</p>

                <p>That's why you're more than elated whenever someone comes to you for a listening ear.</p>

                <p>That's also explains your introspective tendencies - especially when you're on your own. It's not unusual for philosophical thoughts to cross your mind ever so often. You seem to draw energy from being by yourself, and expending energy when you're surrounded by others.</p>

                <p>Although, that does not hinder you one bit, doesn't it? After all, you do possess the confidence to do things on your own, and you certainly have the composure and poise to pull it off.</p>

                <!--Insert Strength Image-->
                <img class="img-intext" src="../img/strength.png">

                <p>Based on those attributes, it's evident that you'll experience the greatest amount of fulfillment and joy from pursuing a career as an artist, a designer, a writer, a creative director, or pretty much anything that taps into your out-of-the-box thinking.</p>

                <p>Beyond that, you're also someone who's open-minded. You're very accepting of people who come from different backgrounds. You have the sense to realize that different perspectives exist, and you're always reminding yourself to be respectful of that.</p>

                <p>That's also because you tend to enjoy things that are a bit out of the ordinary and venturing out into the unknown - things that individuals belonging to other archetypes rarely think about.</p>

                <p>You see, you have a rather quirky personality, and a diverse set of interests. But those are the little oddities that make you who you are, wouldn't you agree?</p>

                <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">

                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Inventive Creator, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your strengths, resilience, and fortitude, you will overcome all that stands in your way.</p>

                <p>You see, there are fears that reside within your archetype... Deep-seated fears that appear minuscule to others, but appear menacing to you.</p>

                <p>Your archetype tends to be fearful of appearing unoriginal, or even mediocre. And this stems from one thing... It stems from the concern that you have of how others perceive you.</p>

                <p>Although you're always telling yourself not to care, there's a part of you that struggles to let go. And even though you manage to successfully convince yourself some times, you eventually fall back into the same patterns and same routines.</p>

                <p>Don't let that discourage you, <span class="cap"><span class="name">Dear</span></span>. You possess a strong source of inner strength... And your fears are certainly far more profound than the fears of others. Society has evolved into a platform of judgments - people judge, and are therefore afraid of being judged. And the sooner you recognize that, the sooner you'll be able to step out of that domain.</p>

                <p>You must also be careful of your own perfectionism. That's the strange thing about your archetype - what you're good at can also be your worst enemy.</p>

                <p>After all, too much of a good thing is a bad thing.</p>

                <p>Your unhealthy obsession with perfectionism can stop you from even trying in the first place. And there is no greater failure than preventing yourself from failing.</p>

                <p>To maximize the abilities of your archetype, you must always be trying, always be experimenting, and always be failing. As ironic as it sounds, that is the journey that will lead you to your eventual success.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As A Creator, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>You are the epitome of expression – possessing the uncanny ability to communicate your emotions in the most creative, yet accurate ways. You excel at one-on-one interactions, and never fail to make an excellent impression on others. Your unique thinking and intelligence intrigues people.</p>

                <p>Ultimately, you are an executor. You have a clear vision of what you want to achieve. And as soon as you've set your mind to it, you can consider it done.</p>

                <p>Your brilliant mind crafts and generates ideas at the speed of light, with each idea having more clarity, and more purpose than the last. That's your perceived path to fulfillment - seeing your ideas to fruition.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/creator-love-compatibility.png">

                <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>You tend to be slightly neglectful as a lover - and I'm sure some of your exes or current partner will agree with me on this.</p>

                <p>That's because your mind is constantly scattered and spread out across an array of thoughts - and although you're physically present, your physical presence in presented with emotional absence.

                    <p>However, that's just who you are. And any understanding, respectful lover will accept you for exactly the way that you are.</p>

                    <p>Despite all of that, you're intensely committed to your partner - it's unlike you to have your heart stray, unless the circumstances of your relationship toe the lines of extremities.</p>

                    <p>In the presence of your partner, you seem to be chirpier - more jovial, and more open. That's because trust is extremely important to you, because it's trust that will allow your archetype to open up.</p>

                    <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Your spouse or partner is meant to play a supporting role in your life; not the lead. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                    <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>

        </div>

        <div class="explorer" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Explorer - And This Is What It Means...</h2>

                <p>Your archetype suggests that you're an adventurer of sorts... A worldly, wandering traveller who belongs to no land. You're constantly on the move, and always seeking exciting thrills that are far beyond your comfort zone... And yet, ironically, that's where you feel the most comfortable.</p>

                <p>Yes... You're a curious, and adventurous individual looking to make your mark on the world. You want to experience everything that the world has to offer - its magnificent lands, its foreign cultures, and its exciting opportunities.</p>

                <p>Based on your archetype, your biggest value in life is your sense of freedom. That's because as an Explorer, you're highly energetic, and you're always on the move. You tend to get bored with mundane and monotonous routines - and you're always looking for a way out.</p>

                <p>While others struggle to feel comfortable in unfamiliar places, you just seem to feel at home in the most distant of lands. That’s because you envision the world as a singular place – and you understand that each and everyone of us belong to the same home.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/explorer.png">

                <p>...Your archetype also suggests that you have the tendency to take action before thinking... But that does not mean to say that you're thoughtless - in fact, it's quite the contrary. You see, you recognize that thoughts tend to stand in the way of action. And what matters to you, is action.</p>

                <p>You're an excellent communicator by nature... Your travels and curiosity has equipped you with a repertoire of captivating stories - stories that people absolutely love to hear. You're often the center of attention - regardless whether you're in a room full of strangers, friends, or loved ones.</p>

                <p>Your archetype also suggests that you're often on the lookout for opportunities that don't necessarily take you out of the country. As long as there's a new experience waiting for you, you're more than willing to give it a shot. Whether it's an activity, a sport, or even a new restaurant that you've never tried before - you're always game.</p>

                <p>You might not like to admit it... But you're charismatic - at least, more so than the other archetypes. This trait of yours stems from your willingness to step out of your comfort zone - a trait that's also indicative of your willingness to look silly. And there is nothing more charismatic than someone who possesses that amount of self-confidence.</p>

                <p>The Explorer archetype is also one that strives to be different. You prefer to feel and immerse yourself in the most foreign environments - environments that the other archetypes would prefer to avoid.</p>

                <p>There's also a side of you that tends to be a little bit of an adrenaline junkie - it might not be all that obvious, but it definitely exists.</p>

                <p>You're an individual who's sociable, likeable, and approachable. Unlike the archetypes who are more introverted by nature, any day that you spend sitting around at home feels like a waste of your time.</p>

                <p>You'd very much prefer to be literally anywhere else, doing anything else, instead of being cooped up and alone.</p>

                <p>You might not be aware of this... But your willingness to try new things is inspiring and encouraging to the people around you - mostly your peers. And because of this, your archetype truly has the capacity to achieve greatness.</p>

                <p>That's why the world needs more people like you, <span class="cap"><span class="name">Dear</span></span>... I have no doubt that you will one day uncover ground-breaking discoveries, and contribute great things to the world.</p>

                <h2 class="sub-header">As An Explorer, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                <p>Despite often being the center of attention, your incessant curiosity about others makes you an individual who's self-aware and emotionally connected to others.</p>

                <p>That's because even though people are more than willing to listen to the stories that you share and the images that you portray, you always know when it's time to shift the limelight to someone else. And that realization is often driven by you wanting to know the stories of others.</p>

                <p>All of that gives rise to the one single attribute that truly resembles the Explorer archetype - your obsession with experience - an obsession that drives you to learn, to discover, and to explore.</p>

                <p>There's something else about your archetype... And you might or might not agree with this... Your archetype, because of your worldly knowledge and self-motivated curiosity, possesses a deep understanding of human nature and culture. You're likely to be someone who reads people rather well. You know who you can trust, and who you must avoid at all costs. </p>

                <p>Although, there are times when compassion takes control over your tendencies... And that's when you become vulnerable to having your trust misplaced and taken advantage of.</p>

                <!--Insert Strength Image-->
                <img class="img-intext" src="../img/strength.png">

                <p>Based on those attributes, it's evident that you'll experience the greatest amount of fulfillment and joy from pursuing a career that will feed your curiosity, take you outside of the typical confinements of a desk space, and constantly keep you on your toes... Perhaps something outdoors-ish or travel-related.</p>

                <p>Beyond that, you're also someone who's open-minded. You're very accepting of people who come from different backgrounds. Your experience with foreign cultures and environments has exposed you to a variety of circumstances and perspectives, and you're always reminding yourself to be respectful of that.</p>

                <p>That's also because you tend to enjoy things that are a bit out of the ordinary and venturing out into the unknown - things that individuals belonging to other archetypes would prefer to avoid.</p>

                <p>You see, you have a rather valiant aura, and a daring approach. You're not one to follow in the footsteps of others, are you?</p>

                <p>Instead, you're the one who paves the way forward - bashing through the bushes like the gallant discoverer that you are. After all, you have to be a little bit bold in other to explore the unexplored, wouldn't you agree?</p>

                <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">

                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Adventurous Explorer, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your strengths, resilience, and fortitude, you will overcome all that stands in your way.</p>

                <p>You see, despite your brave frontier, there are fears that reside within your archetype... Deep-seated fears that appear minuscule to others, but appear menacing to you.</p>

                <p>Your archetype tends to be fearful of commitment, and even anything that resembles it. It's likely that at a certain point in your life, you found the idea of marriage a little bit alien - an idea that just never made sense to you.</p>

                <p>That attribute stems from your fear of commitment; commitment of any sort... Whether it's residing in a single place for too long, or remaining in a relationship with one, single person for eternity.</p>

                <p>Of course, there's nothing wrong with being alone. But that fear originates from your obsession with new experiences - an obsession that often leads you to neglect the people closest to you.</p>

                <p>Don't let that discourage you. As long as you're watchful over how your actions affect others, you will be able to avoid making that mistake.</p>

                <p>As an Explorer, you have the tendency to be a little too critical about yourself - constantly pushing yourself to achieve new heights, gain new experiences, and explore everywhere that you've never been before.</p>

                <p>But, at the same time, you must understand that growth takes time. You might not have all the time in the world, but it is paramount for you to exercise patience in order not to wear yourself out.</p>

                <p>Advancement and growth are products of both time and effort, and when you implement that to become a part of your life, your passage to fulfillment will be revealed to you... All in due time.</p>

                <p>There's something else you need to be aware of, <span class="cap"><span class="name">Dear</span></span>.</p>

                <p>In spite of your magnetic personality, you tend to prefer working on your own - and that trait in itself sets boundaries that can prevent you from achieving greater things. It is vital for you to learn to trust others, and by doing so, you will find that there's a lot more for you to gain than to lose.</p>

                <p>To maximize the abilities of your archetype, you must always be trusting, always be humble, and always be giving. Those are the qualities and lessons that will lead you to your eventual success.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As An Explorer, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>You are practically a chameleon – possessing the uncanny ability to make yourself at home within any social group, or social setting; no matter how foreign. Your charisma and eloquence intrigues people. And at times, it also earns their trust.</p>

                <p>Based on your archetype, it's apparent that you have a strong sense of ambition - a sense of hunger to do greater things.</p>

                <p>However, as mentioned earlier in this Archetypal Introduction, your struggle with commitment tends to hold you back. You tend to associate commitment with the feeling of being trapped and having your freedom stripped away from you...</p>

                <p>But that feeling could not be further from the truth. Fulfilment, at its essence, is derived from forging valuable relationships – with others, and yourself. And that, in itself, requires commitment.</p>

                <p>And that's where your calling resides. You want to live life for yourself, without appearing selfish.</p>

                <p>You want to love yourself, while keeping the relationships you’ve forged close to your heart. Your archetype is the role model and catalyst of change, with exploration as its backbone.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/explorer-love-compatibility.png">

                <p><span class="cap"><span class="name">Dear</span></span>, do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>Your love compatibility profile is extraordinarily different from the other archetypes - and I'm sure some of your exes or current partner will agree with me on this.</p>

                <p>It's difficult to describe, but this is the most apt way of putting it. Based on the nature of your archetype, you tend to be an excellent short-term lover, but you might find it difficult to be a long-term partner.</p>

                <p>Your relationships and romances are often short-lived. Even if the connection between you and your romantic partner appears strong, you always seem to have one foot out the door.</p>

                <p>Because of that, it can be challenging for you to meet the right one. However, don't be disheartened. Whether or not you're already in a committed relationship, you'll be just fine.</p>

                <p>And when, or if you already have, met the right one, you must be weary of temptations - committing yourself completely can be scary and hard... But with a disciplined mind and a dedicated heart, you will overcome that fear and produce a fruitful and loving relationship.</p>

                <p>In the presence of your partner, depending on your level of comfort, you tend to be slightly more reserved than usual... Perhaps that stems from your struggle with trust. However, you must remember that it's trust that will allow your archetype to open up.</p>

                <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="hero" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Hero - And This Is What It Means...</h2>

                <p>Your archetype suggests that you're an individual who possess great mental strength, fortitude, and an unbreakable sense of perseverance. You are never fearful of what the future holds for you, and you're always willing to step up to challenges of any sort.</p>

                <p>Yes, the Hero archetype is best represented through the essence of sacrifice. Whether it's putting the needs of others in front of your own, or simply taking the initiative to serve the greater good, you're always in the front of the line.</p>

                <p>That specific trait about you stems from your deep-seated instincts... Instincts that forbid you from retreating in the face of adversity. Instincts that prevent you from laying still in the face of injustice.</p>

                <p>While others prefer to sit on the sidelines, that's just not in your interests. That is also why it is often said, that the Hero has no fears... But let's address that in greater detail as we progress through this Archetypal Introduction.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/hero.png">

                <p>Your archetype also suggests that there is a side of you that's relentless... Relentless in the sense of striving to improve yourself - whether it's your physical abilities, your mental fortitude, or your emotional resilience.</p>

                <p>That being said, you're certainly an individual of impressive characteristics - characteristics that are unique to your archetype.</p>

                <p>You seem to exercise selflessness in everything that you do... No matter how small or minuscule your actions appear to be, every decision that you make, no matter how small, is always for a purpose that serves others. And when it comes to making important and difficult decisions, you're assertive, firm, and steadfast.</p>

                <p>Your archetype also suggests that you're an individual of great empathy, and a strong sense of justice. You're intolerant when you encounter unfairness or corruption of any sort, and there's burning desire that drives you to want to do all forms of prejudice.

                    <p>Your instinctive sense of righteousness is constantly pushing you to be better, to do more, and to try harder...

                        <p>You might not like to admit it... But from time to time, you do get worn out. After all, being a hero is certainly not a task for the weak and feeble. It can be emotionally and physically draining most of the time. As difficult or as impossible as it sounds, you must learn to prioritize your own rejuvenation.

                            <p>The Hero archetype is also one that strives for greatness. You have a strong vision of what you want to achieve in your lifetime - a vision that few will comprehend, but many will appreciate... Your compassion for your fellow man is what ultimately gives you the desire to change the world.</p>

                            <p>You're an individual of great principles, character, and morals. Unlike the archetypes who tend to struggle with temptations and might struggle differentiating between right and wrong, you always have a clear idea of what is virtuous.</p>

                            <p>You might not be aware of this, <span class="cap"><span class="name">Dear</span></span>... But your willingness to step up to the plate is inspiring and encouraging to the people around you - strangers, friends, and loved ones. And because of this, your archetype truly has the capacity to achieve greatness.</p>

                            <p>That's why the world needs more people like you... I have no doubt that you will one day make a lasting impact on humanity, and contribute great things to the world.</p>

                            <h2 class="sub-header">As A Hero, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                            <p>You are an individual who is incredibly grounded. You possess the unique ability to discern right from wrong, and you’re never afraid to put your foot down. You have a great deal to offer to this world.</p>

                            <p>You have a number of leadership qualities... Especially since you're someone who's self-aware, decisive, and somewhat stern. People find themselves calmed by your presence, knowing that they have someone reliable and dependable by their side.</p>

                            <p>But that's not all there is to the Hero archetype... This is merely the beginning. As a Hero, you are extremely protective of your loved ones.</p>

                            <p>You're not the most expressive person on the planet, but each of your loved ones holds a special place in your heart. You might a little bit too protective at times, but it definitely comes from a good place.</p>

                            <p>There's something else about your archetype... You're a lot more domestic than the other archetypes. Your home is your place of rest - a peaceful haven that you retire to at the end of each day - and also, a place where you're deeply emotionally attached to. And that stems from your sense of loyalty.</p>

                            <p>Based on the strengths of your archetype, there is no doubt that you're an individual who makes a protective partner, a caring parent, and a trustworthy friend.</p>

                            <!--Insert Strength Image-->
                            <img class="img-intext" src="../img/strength.png">

                            <p>It's become abundantly clear that you'll experience the greatest amount of fulfillment and joy from pursuing a career that will allow you to make difficult decisions, and give you a strong sense of duty...</p>

                            <p>Beyond that, you tend to perceive circumstances as either black or white, with no gray in between. That particular trait might not sound all that positive, but it's one of the greatest factors that makes you such an effective decision maker.</p>

                            <p>In terms of your behaviour around friends and family, you tend to adopt a more serious, no nonsense type of front. If a conversation does not produce value, then you'd rather not engage in it.</p>

                            <p>You're not the type of person to clown around - you'd very much prefer to invest your time and energy into productive tasks instead of looking like a fool.</p>

                            <p>You see, you have a rather intense aura. That does not mean to say that it's a bad thing - after all, when it comes to getting things done, you'll always be on the top of everyone's lists.</p>

                            <p>And yet, all is fair in the realm of Archetypes - where weaknesses can at times be strengths, and likewise, strengths too can quickly turn into weaknesses. And that applies to your archetype of the Hero as well.</p>

                            <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                            <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Courageous Hero, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your strengths, resilience, and fortitude, you will overcome all that stands in your way.</p>

                <p>You see, despite your brave frontier, there are fears that reside within your archetype... Deep-seated fears that appear miniscule to others, but appear menacing to you.</p>

                <p>Your archetype tends to be fearful of having others perceive you incorrectly, or even misjudged. Your archetype tends to concern itself with its image... Constantly wondering about what others think of you, whether or not they take a liking to you...

                    <p>An unhealthy obsession that prevents you from embarking on something new, or trying something that you've never tried before. You're usually fearful of becoming the object of ridicule or laughter... That stems from your fear that the strong, dependable impression that you've worked so hard to portray will crumble.</p>

                    <p>Deep inside your archetype, beneath the bravado and seriousness, is a small part of you that just wants to be accepted and loved.</p>

                    <p>Perhaps that might be why you concern yourself so much with appearances... Because without appearances, you're afraid that you'll lose your self-construed identity. That is perhaps, the greatest challenge that you must overcome.</p>

                    <p>As a Hero, you have the tendency to be a little too critical about yourself - constantly pushing yourself to achieve new heights, gain new experiences, and explore everywhere that you've never been before. But, at the same time, you must understand that growth takes time.</p>

                    <p>You might not have all the time in the world, but it is paramount for you to exercise patience in order not to wear yourself out.</p>

                    <p>Advancement and growth are products of both time and effort, and when you implement that to become a part of your life, your passage to fulfillment will be revealed to you... All in due time.</p>

                    <p>There's something else you need to be aware of.</p>

                    <p>Although you tend to project yourself as someone serious, assertive, and seemingly hard to work with, you're an excellent team player - perhaps amongst the best of all the archetypes. You're both reliable and trusting, and that balance translates into the way you work with others. You're willing to be diligent and to step up to the tasks that you'r not familiar with, and you always find a solution.</p>

                    <p>After all, this is the Hero's motto... When there's a will, there's a way. And that saying really shines through your actions and behaviour.</p>

                    <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As A Hero, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                    <p>Ultimately, you are a realist – someone who sets and achieves realistic goals. You're not comfortable with being wishy-washy or fickle-minded. When you've set your mind to something, you'll do everything it takes to make it happen.</p>

                    <p>Based on your archetype, it's apparent that you have a strong sense of ambition - a sense of hunger to do greater things.</p>

                    <p>However, as mentioned earlier in this Archetypal Introduction, your struggle with your identity tends to hold you back... Your fear of looking silly - a fear that prevents you from trying different things.</p>

                    <p>You will have to keep pushing your limits before you eventually discover your life’s purpose and direction. And that is something that you need to work towards with your archetype.</p>

                    <p>And that's where your calling resides. You want to live life for yourself, without limits. You want to be recognized and respected for who you are, while learning to be more bold with your impression.</p>

                    <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                    <img class="love-img" src="../img/love/hero-love-compatibility.png">

                    <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                    <p>The Hero archetype is a giving, faithful, and dependable lover. The ideal, dream-like partner who appears to be textbook-perfect.</p>

                    <p>It's difficult to describe, but this is the most apt way of putting it. Based on the nature of your archetype, you tend to be an excellent life partner, but you tend to struggle with recognizing the right partners for you.</p>

                    <p>It might take a while before you find the right one, <span class="cap"><span class="name">Dear</span></span> - but as the saying goes, good things come to those who wait. If you're not in a committed relationship, your best bet will be to exercise patience and caution during your search for a romantic partner.</p>

                    <p>And in due time, you will meet the right one. However, don't be disheartened. Whether or not you're already in a committed relationship, you'll be just fine.</p>

                    <p>And when, or if you already have, met the right one, you must be weary of temptations - committing yourself completely can be scary and hard... But with a disciplined mind and a dedicated heart, you will overcome that fear and produce a fruitful and loving relationship.</p>

                    <p>In the presence of your partner, depending on your level of comfort, you tend to be slightly more reserved than usual... Perhaps that stems from your struggle with how others perceive you - especially your romantic interest. However, as cliche as it sounds, you must remember that it's important to be yourself, and when you do, you will also be accepted for who you are.</p>

                    <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                    <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="innocent" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Innocent - And This Is What It Means...</h2>

                <p>Before you dismiss this Archetypal Introduction as nothing but hogwash, you must know that the Innocent archetype is NOT one that's typically associated with naivety. Truth be told, it is anything but. If you'd like to find out the truth about what the Innocent really resembles, then please proceed with the rest of this Archetypal Introduction with an open mind, and a willing heart.</p>

                <p>The Innocent archetype is best defined by its sheer positivity, enthusiasm, and optimism. They're able to interpret any situation in a perspective that's hopeful, encouraging, and infectious. If you're thinking that there's a lot more to the Innocent archetype than just that, you're exactly right!</p>

                <p>Individuals of the Innocent archetype, including you, tend to see the silver lining in every cloud and are constantly reminding themselves that there's virtue and a sense of goodness in everything, and every situation. You're always on the lookout for wisdom and lessons worth learning, no matter how painful your experiences get...</p>

                <p>To you, <span class="cap"><span class="name">Dear</span></span>, everyone has a story worth listening to, every circumstance holds something worth experiencing, and everything that happens in life, happens for a reason. That is a belief; a deep-rooted outlook that makes the Innocent archetype so remarkable.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/innocent.png">

                <p>Your archetype also suggests that there is a side of you that's relentless... Relentless in the sense of striving to improve yourself - whether it's your physical abilities, your mental fortitude, or your emotional resilience. That being said, you're certainly an individual of impressive characteristics - characteristics that are unique to your archetype.</p>

                <p>You seem to exercise selflessness in everything that you do... No matter how small or minuscule your actions appear to be, every decision that you make, no matter how small, is always for a purpose that serves others. And when it comes to making important and difficult decisions, you're assertive, firm, and steadfast.</p>

                <p>Your archetype also suggests that you're simple, easy-going, and transparent. You're the type of person who's willing to wear your heart on your sleeve, stand up for your beliefs, and face the consequences of mistakes... An upstanding individual who's fearless in profound ways.

                    <p>Amongst all the archetypes, you tend to have the purest of intentions... And that's best illustrated through the way you interact with others. Unlike others, when you claim to be happy for someone else, you actually do mean it from the bottom of your heart - and that goes a long way in forging valuable, close relationships.</p>

                    <p>You might not like to admit it... But when things don't turn out your way, you're easily disappointed. That, of course, does not mean to say that your spoilt... It's that your positive outlook on everything can sometimes set you up for disappointments. But that's the price you have to pay for possessing such a unique set of strengths.

                        <p>The Innocent archetype is such a joy to be around, and I have no doubt that your friends and loved ones will agree with this. Your light-hearted and jovial nature make you fun-loving, charismatic, and likeable.</p>

                        <p>You try not to be serious most of the time, and you enjoy engaging in little things that will make someone else's day brighter. Whether it's pretending to laugh at a corny joke, applauding a predictable magic trick, you'd very much rather bless that person with positivity than put them down.</p>

                        <p>And that's just a small piece of the puzzle that forms the entirety of the wonderful, angelic individual that you are. Unlike the archetypes who tend to struggle with hatred and animosity, you'd very much rather make friends than enemies. You're accepting, kind, and incredibly thoughtful.</p>

                        <p>You might not be aware of this... But all of these personality traits lead to so much more. Your optimism makes you ferocious - like an unstoppable force.</p>

                        <p>There is no archetype that matches your level of determination, because there is nothing stronger than an unbreakable spirit.</p>

                        <p>That's why the world needs more people like you, <span class="cap"><span class="name">Dear</span></span>... I have no doubt that you will one day infect others with your positivity, and influence them to have the same tenacity as you.</p>

                        <h2 class="sub-header">As An Innocent, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                        <p>You are an individual who's capable of finding joy in the smallest of things. Your perspective of the world is through that of a childlike lens - and you experience life at the purest level.</p>

                        <p>You are most likely the motivator of any social group or work setting. You always seem to know the right words to say, and at the right time. You have the unique talent of calming others with your presence, knowing that they have someone who's rooting for them by their side.</p>

                        <p>But that's not all there is to the Innocent archetype... This is merely the beginning. As an Innocent, you are selfless - often putting your needs behind the needs of others.</p>

                        <p>You put your best in everything that you do, and you always make sure that your heart's in the right place.</p>

                        <p>There's something else about your archetype, <span class="cap"><span class="name">Dear</span></span>... You're far more magnanimous than others - always ready to give more than you're willing to receive. And that stems from your willingness to see the goodness in people.</p>

                        <p>In your eyes, all man is deserving of kindness - and that really translates through your actions.</p>

                        <p>Based on the strengths of your archetype, there is no doubt that you're an individual who makes a forgiving partner, a nurturing parent, and a dependable friend.</p>

                        <!--Insert Strength Image-->
                        <img class="img-intext" src="../img/strength.png">

                        <p>It's become abundantly clear that you'll experience the greatest amount of fulfillment and joy from pursuing a career that will allow you to motivate and bring out the best in others... A noble duty that grows in greater demand as society becomes more detached and emotionally disconnected.</p>

                        <p>Beyond that, you have a profound understanding of the innerworkings of the human soul. Your empathetic nature allows you to comprehend what someone else is going through, and you always seem to know how to lead them out of darkness.</p>

                        <p>In many ways, you're the beacon of hope that has and will touch the lives of many.</p>

                        <p>In terms of your behaviour around others, you're always ready to offer a listening ear. You're always swift to listen, but slow to speak. If you've ever wondered why people are always sharing their deepest troubles with you, that is the exact reason why, <span class="cap"><span class="name">Dear</span></span>

                            <p>You see, you exude an aura of purity. You trust others just as easily as others are able to place their trust in you. That's because your earnestness really shows through your personality.</p>

                            <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                            <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Virtuous Innocent, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your strengths, resilience, and fortitude, you will overcome all that stands in your way.</p>

                <p>The Innocent archetype tends to struggle with coming out of its comfort zone. It's likely that you prefer to stay within the constrains of what you deem to be familiar. You must know, with your strengths and unique talents, you are definitely capable of more than you could ever imagine.</p>

                <p>You see, as an Innocent, it is vital for you to take up the challenge of stepping out of your comfort zone. Being surrounded with unfamiliarity will allow room for you, as an Innocent, to develop and improve yourself. It does not have to toe the lines of extremities - just small, little, progressive steps.</p>

                <p>Based on the tellings of your archetype, you need to learn to take these calculated risks, whether its in social interactions or at work. </p>

                <p>Your archetype tends to be fearful of consequences, even though you have the capacity to power through anything that life throws at you, residing in your comfort zone for too long has made you fearful... Mistakes are part and parcel of life, and a life lived without mistakes does not equate to a fulfilled life.</p>

                <p>Understandably, it can be difficult for the Innocent to grow used to experiencing the pain of failure. And that fear in itself leads to a multitude of other challenges...</p>

                <p>You might tend to hold yourself back from seizing new opportunities, embarking on new ventures, or exploring unknown horizons... Things that could open doorways for you and reward you with new discoveries.</p>

                <p>Perhaps that might be why you concern yourself so much with the familiar... Because beyond the familiar, you're afraid that you'll lose your self-construed identity. That is perhaps, the greatest challenge that you must overcome.</p>

                <p>You should be constantly jumping into new opportunities and discovering your path as it unfolds. That way, you’ll be able to continue to grow as a person, as an individual, and as an Innocent.</p>

                <p>Advancement and growth are not gifts that are bestowed upon you - they are the fruits of hardwork and labour. And when you take action for your personal growth, your passage to fulfillment will be revealed to you... All in due time.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As An Innocent, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>You are on a quest – a quest for happiness; for joy. And as mentioned, your archetype tends to struggle with finding fulfilment...</p>

                <p>But with this Archetypal Introduction, there is no doubt that the end of the tunnel is fast approaching, and you will uncover your path to fulfillment a lot sooner than expected.</p>

                <p>Based on your archetype, your sheer positivity and inner fortitude will form the foundation of your success - whether it's in your career, your love life, or your personal goals. And as long as you continue to act on new opportunities of personal growth, you will find the success that you’re looking for.</p>

                <p>However, as mentioned earlier in this Archetypal Introduction, your struggle with your fears tends to hold you back... Your fear of discomfort - a fear that prevents you from trying different things. You will have to keep pushing your limits before you eventually discover your life’s purpose and direction. And that is something that you need to work towards with your archetype.</p>

                <p>And that's where your calling resides. You want to live life for yourself, a life of abundance and joy.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/innocent-love-compatibility.png">

                <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>The Innocent archetype is known to be sweet, kind, and accepting in a relationship... It's unlikely that you will encounter much difficulty with finding potential suitors.</p>

                <p>But, in this instance, it is important for you to be a little bit stringent with your criteria for a potential romantic partner. After all, you have so much to offer as a lover - and you do tend to be a little bit careless with who you place your trust in. This piece of advice serves to save you another broken heart.</p>

                <p>It might take a while before you find the right one, <span class="cap"><span class="name">Dear</span></span> - but as the saying goes, good things come to those who wait. If you're not in a committed relationship, your best bet will be to exercise patience and caution during your search for a romantic partner.</p>

                <p>And in due time, you will meet the right one. However, don't be disheartened. Whether or not you're already in a committed relationship, you'll be just fine.</p>

                <p>And when, or if you already have, met the right one, you must be weary of temptations - committing yourself completely can be scary and hard... But with a disciplined mind and a dedicated heart, you will overcome that fear and produce a fruitful and loving relationship.</p>

                <p>In the presence of your partner, you're not afraid of embracing who you are and expressing what you feel. Perhaps that stems from your honesty and willingness to trust others - especially your other half. That is a reliable indicator of a love life that is healthy, easy-going, and nurturing.</p>

                <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="jester" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Jester - And This Is What It Means...</h2>

                <p>Before you dismiss this Archetypal Introduction as nothing but hogwash, you must know that the Jester archetype is NOT one that's solely represented as a mere joker.</p>

                <p>Truth be told, there's so much more about the Jester archetype. As we progress through this Archetypal Introduction, you'll begin to understand what I mean. But before we proceed, please do so with with an open mind, and a willing heart.</p>

                <p>The Jester archetype is blessed with astute, sharp, and quick-witted. That means that you are an individual who is able to approach a variety of topics from a myriad of perspectives. Despite your playful appearance and mischievous behaviour, you are nimble and brilliant in your own unique way.

                    <p>You seem to be able to breeze your way through life, with your unconventional ideas, amusing comments, and hilarious interpretations. Naturally, you're often the life of the party. People enjoy being around you, because wherever you go, good times are bound to follow!</p>

                    <p>Others might perceive you to be an individual who's more emotional because of your spontaneity... But, you are in fact, more intuitive and perceptive than you make yourself out to be. After all, <span class="cap"><span class="name">Dear</span></span>, your excellent sense of humour is constructed with creativity, and seasoned with your charisma. And that requires a certain calibre of incisiveness.</p>

                    <!--Insert Archetype Icon-->
                    <img class="img-intext" src="../img/icons/jester.png">

                    <p>Your archetype also suggests that you're a charismatic individual... There's just something about the way you speak, the way you portray yourself, that appears hypnotic... Alluring, even.</p>

                    <p>People find themselves drawn to you because of your ability to spice up your conversations. And all of that just seems to come naturally to you, doesn't it? Your personable body language and outgoing attitude towards in life makes you a sheer joy to be around.</p>

                    <p>Your archetype also suggests that you're casual, easy-going, and free-spirited. You're the type of person who allows your imagination to run wild, conjuring the most ridiculous ideas and painting the silliest images in your head... An individual who simply doesn't take life too seriously.

                        <p>Amongst all the archetypes, yours is one of the few that's idealistic... And that's best illustrated through the innerworkings of your unique mind and vibrant personality. You tend to daydream more than you actually do, but whenever you do see your ideas to fruition, great things always seem to happen.</p>

                        <p>You might not like to admit it, <span class="cap"><span class="name">Dear</span></span>... But you tend to waiver a bit when it comes to serious situations or harsh conversations. You'd very much rather avoid such instances entirely, instead of having to actually deal with them. That is a struggle that you must be careful of. But we'll speak more to that later.</p>

                        <p>The Jester archetype is such a joy to be around, and I have no doubt that your friends and loved ones will agree with this. Your light-hearted and jovial nature make you fun-loving, charismatic, and likeable.</p>

                        <p>You try not to be serious most of the time, and you enjoy engaging in little things that make someone else's day brighter. Whether it's dropping one of your iconic one-liners or performing silly actions.

                            <h2 class="sub-header">As A Jester, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                            <p>You are an individual who's impressionable, cheerful, and intriguing. You seem to be able to blend into any social group, and you have a wide circle of friends.</p>

                            <p>People who cross paths with you have no trouble recognizing and remembering you. You're always able to bring smiles to the darkest of times, and your presence lights up the room.</p>

                            <p>Your archetype also suggests that you're not the jealous or protective type - whether it's in relationships, friendships, or even as a parent. You hardly allow the actions of others to dampen your mood, and you prefer to be in complete control of your own emotions.</p>

                            <p>There's something else about your archetype, <span class="cap"><span class="name">Dear</span></span>... Nothing pleases you more than experiencing the joys and emotions of life at its maximum. In the face of adversity, you're somehow able to move past setbacks quickly, and effortlessly.</p>

                            <p><span class="cap"><span class="name">Dear</span></span>, based on the strengths of your archetype, nothing seems to be able to put you down - or not for long, to say the least.</p>

                            <!--Insert Strength Image-->
                            <img class="img-intext" src="../img/strength.png">

                            <p>As a Jester, you center your life around one thing - living in the present. You live life according to your own rules, and that states that the past shall be forgotten, and the future shall hold no worries... An outlook on life that allows you to retain your high spirits.</p>

                            <p>Beyond that, you have a profound understanding of what makes others tick. In a crowded room, you're constantly tapping into your analytical ability to dissect that crowd that surrounds you...</p>

                            <p>In terms of your behaviour around others, you tend to take things rather lightly - you avoid bringing up serious topics and you make it an effort to keep things casual. It seems that you're not someone that others would come to to pour their frustrations and share their troubles, and you'd certainly like to keep it that way.</p>

                            <p>You see, your aura is one that's bright, and radiant. Your laughter is infectious, and you're simply the person that everyone wants to be around.</p>

                            <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                            <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Notorious Jester, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your strengths and personality traits, , you will overcome all that stands in your way.</p>

                <p>The Jester archetype tends to struggle with being serious. That is, of course, just part of who you are - as an archetype, and as an individual. However, you must know, that attribute about you also shapes the way that others perceive you, especially the people close to you.</p>

                <p>You see, as a Jester, it is vital for you to get in touch with your more serious side. That will be quintessential to your development as an all-rounded, balanced, and emotionally connected individual.</p>

                <p>This is the first step towards learning to open yourself up to others, and in that process, you will learn to trust as well as earn the trust of others.</p>

                <p>Taking things a little more seriously once in a while will show people that there's a different side to you; a side that they'll appreciate since it isn't displayed often. </p>

                <p>At first, it might seem as if you're losing your sense of identity. But that could not be further from the truth. In fact, working on that aspect of your personality will, in fact, reveal a part of your identity that you never knew existed.</p>

                <p>Based on your other traits, you also seem to struggle with spending your time wisely. You're constantly procrastinating and putting things off until the very last minute.</p>

                <p>Perhaps it stems from your disinterest towards anything mundane. Nevertheless, learning to prioritize your time will be your first step towards achieving more - more than you could possibly imagine.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As A Jester, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>You are an enthusiastic and humorous being. Like a fairy godmother with the touch of your wand, you’re able to spark laughter and smiles from all sorts of people.</p>

                <p>However, associating yourself too much with that one single aspect can make you lost sight of who you truly are. There is so much more to the Jester archetype, - and that includes your intellect and perception.</p> Your route to fulfillment can be found from the relationships that you forge with others. Whether it's in terms of your career, or even your love life.

                <p>However, as mentioned earlier in this Archetypal Introduction, your struggle with your fears tends to hold you back... Your fear of seriousness is also indicative of your fear of disappointment.</p>

                <p>You have a profound understanding of the logic behind expectations, and fundamentally, your innermost thoughts are often pessimistic... Simply because you refuse to set yourself up for disappointments.</p>

                <p>There is power in positivity. There is great things to be learned from optimism - it's a form of energy in itself that has the potential to grant you fortitude and resilience... To weather out your potential challenges and difficulties. Embracing that will form a significant part of your calling in life.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/jester-love-compatibility.png">

                <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>The Jester archetype is known to be sensible, joyful, and fun in a relationship... You can, however, be a little bit indecisive at times.</p>

                <p>Finding potential partners isn't exactly difficult for you... But your biggest romantic challenge lies in maintaining and building a long-lasting relationship. After all, you do tend to seem emotionally absent and be a little bit distant, and that makes it hard to communicate with you at a deeper level.</p>

                <p>That lack of a connection is usually what does it in for you, <span class="cap"><span class="name">Dear</span></span>. But as long as you're willing to and continue to work on that, there is no doubt that a rewarding romantic life will be waiting right around the corner for you - perhaps in the form of your current partner, or a potential suitor.</p>

                <p>However, if you already have met the right one, you must be weary of temptations - committing yourself completely can be scary and hard... But with a disciplined mind and a dedicated heart, you will overcome that fear and produce a fruitful and loving relationship.</p>

                <p>In the presence of your partner, you're not afraid of embracing who you are and expressing your true, playful self. As mentioned though, that is merely one aspect of your identity. It would not be possible to paint an entire picture with a single brush. Remember to embrace the different parts of yourself, and never be afraid to reveal them to your partner.</p>

                <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="lover" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Lover - And This Is What It Means...</h2>

                <p>The Lover archetype is one that comprises a series of interesting traits and generous attributes. Truth be told, the Lover archetype is not merely one-dimensional.</p>

                <p>It has many different sides and faces, and as we progress through this Archetypal Introduction, you'll begin to understand what I mean. But before we proceed, please do so with with an open mind, and a willing heart.</p>

                <p>The Lover archetype is one of profound sensitivity, and deep emotional connection. That means that you are an individual who experiences the extremities of all emotions. Your happiness is often an elation beyond description, while your pain feels like it can be excruciating and crippling...</p>

                <p>That stems from your ability to understand and experience life at heightened levels. Because of that profound connection that you share with feeling and sentiments, you have an extraordinary ability when it comes to reading people - that includes recognizing their emotions, understanding their circumstances, and being able to see right through their expressions.</p>

                <p>You have an edge over everyone else when it comes to navigating your way through social situations. It’s no wonder that the people you encounter always feel so drawn to you.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/lover.png">

                <p>Your archetype revolves vastly around emotions, feelings, and sensuality. You have no qualms when it comes to opening up to others. In fact, you're even more than happy to do so.</p>

                <p>Unlike other archetypes, the Lover is capable of experiencing life in a much richer and concentrated fashion. You appreciate the littlest of things and you're able to understand the underlying meanings of actions.</p>

                <p>People find themselves drawn to you because of your ability to engage in deep, thoughtful conversations. The bonds that you forge with others is often something they've never experienced before. Your deep understanding of feelings and approachable appearance makes you a warm and comforting presence to be around.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, your archetype also suggests that you're soft-hearted, gentle, and mellow. You're the type of person who reaches out to the quietest person in the room, trying your best to make everyone feel comfortable.</p>

                <p>Amongst all the archetypes, yours has the greatest tendency to romanticize things... Whether it's your relationships, Not that it's a bad thing, of course. It's just a part of who you are. You're expressive as a person, and you're undivided with your attention.</p>

                <p>You tend to make an excellent listener... Unlike other archetypes, you never struggle when it comes to exercising empathy and understanding the emotions and feelings of others. That's because you seem to be slightly more introverted based on your nature.</p>

                <p>The Lover archetype is one that's deeply committed to the things and people that it cares about. You're always willing to go out of your way, and above and beyond to make someone feel special and appreciated.</p>

                <p>And as you might have already guessed by now, even though you draw energy from being by yourself, you're a lot more people-oriented that you think.

                    <h2 class="sub-header">As A Lover, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                    <p>You are an individual who's sensual, affectionate, and benevolent. Although you prefer to keep your circle of friends small, you invest a lot of time and attention into the relationships that you forge. People who cross paths with you often have a memorable impression, primarily because of your welcoming and pleasant demeanour. </p>

                    <p>Your archetype also suggests that you're someone who's protective, whether it comes to your relationships or possessions. Anything that belongs to you is often kept in good condition, and that translates into your friendships and relationships as well.</p>

                    <p>There's something else about your archetype... Nothing pleases you more than expressing love, and receiving love. Although, the type of love in question does not necessarily solely refer to romance or courtship. It also includes love between friends, family, and even strangers.</p>

                    <p>Based on the strengths of your archetype, you're an individual who's appreciative of the little things in life, making your positive presence both contagious and addictive.</p>

                    <!--Insert Strength Image-->
                    <img class="img-intext" src="../img/strength.png">

                    <p><span class="cap"><span class="name">Dear</span></span>, as a Lover, you center your life around one thing - love. Your archetype's greatest obsession involves a combination of intimacy, and experience... An outlook on life that motivates you to develop yourself in terms of emotional maturity.</p>

                    <p>Apart from that, you seem have a discerning understanding of what it means to love - one that adopts a more philosophical point of view, and also, one that grants you special talents when it comes to empathy and affinity.</p>

                    <p>In terms of your behaviour around others, you tend to be a little bit more reserved, especially in larger groups. But, you excel impressively in when it comes to one-on-one interactions. That's where you feel the most comfortable, knowing that your voice can be heard, and you can forge a deeper, more personal connection.</p>

                    <p>You see, your aura is one that's genuine and flirtatious. Your laughter is infectious, and you're simply able to earn the trust of others relatively easily.</p>

                    <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                    <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Romantic Lover, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your strengths and personality traits, , you will overcome all that stands in your way.</p>

                <p>The Lover archetype tends to struggle with its need to be accepted. And that drives you to resort to extensive measures to impress others. And that's also indicative of a deeper fear that resides within you... The fear of being rejected, or alone.</p>

                <p>As a Lover, it's likely that you feel a void deep within you... A sense of emptiness or purposeless. Perhaps that could be from a lack of self-confidence, or a lack of self-esteem, which is why you tend to place so much emphasis on your relationships with others, and tend to neglect the relationship that you have with yourself.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, do not be alarmed - this is all part and parcel of what it means to be a Lover. And with your Archetypal Introduction, all of that will soon change.</p>

                <p>The sooner you're aware of your struggles and weaknesses, the sooner you'll be able to experience the wonders and greatness that it has to offer. Working on that aspect of your personality will, in fact, reveal a part of your archetype that you never knew existed.</p>

                <p>Based on your other traits, you also seem to struggle with setting yourself up for disappointments. You have the tendency to expect a little too much for others, and you end up feeling dejected if your expectations are not met.</p>

                <p>It's important to understand that all archetypes has its fair share of weaknesses and challenges. Now that you're aware of them, you'll be able to pay attention to them, and then improve on them.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As A Lover, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>You’re at your happiest when you’re in a committed relationship; especially with someone who treasures you, nurtures you, and loves you for exactly who you are. Your faithfulness and trust are unquestionable, but if your trust is ever broken, you find it almost impossible to rebuild it.</p>

                <p>However, associating yourself too much with that one single aspect can make you lost sight of who you truly are. There is so much more to the Lover archetype. You tend to associate the successes and turmoils of your relationships with your self-worth.

                    <p>However, as mentioned earlier in this Archetypal Introduction, your romantic life is not what defines you as a Lover... And in due time, you will come to understand that your fears of rejection are binding chains preventing you from being your true and natural self.

                        <p>You create so much value for the people around you, and the world. You have so much to offer, and your path to fulfillment rests upon the valuable connections that you forge, and your ability to spread love and joy to others.</p>

                        <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                        <img class="love-img" src="../img/love/lover-love-compatibility.png">

                        <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                        <p>The Lover archetype is known to be loyal, passionate, and committed in a relationship... You're giving and sacrificial - a partner than anyone would want.</p>

                        <p>You're not the sort to encounter difficulties when it comes to finding romantic interests - you're attractive to most, and you're a wonderful person to be around. You do, however, tend to be a little bit careless in your choice of partners.</p>

                        <p>More often than not, your trust is betrayed and your love is taken advantage of, <span class="cap"><span class="name">Dear</span></span>. But as long as you continue to work on <span class="purple">your relationship with yourself,</span> there is no doubt that a rewarding romantic life will be waiting right around the corner for you - perhaps in the form of your current partner, or a potential suitor.</p>

                        <p>In the presence of your partner, you wear your heart on your sleeve and you're not afraid to ask for what you want. You must, however, remember that you do tend to become a little bit possessive. In order to forge stronger relations with your partner, you must learn to let go and give both of you space to breathe.</p>

                        <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                        <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="magician" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Magician - And This Is What It Means...</h2>

                <p>The Magician archetype is one that has forged deep connections with the universe... Amongst all the archetypes, the Magician is perhaps the most difficult to comprehend, and you're well aware of that. You have a strong, unbreakable belief in your dreams, abilities, and yourself.</p>

                <p>Truth be told, the Magician archetype is not merely one-dimensional. It has many different sides and faces, and as we progress through this Archetypal Introduction, you'll begin to understand what I mean. But before we proceed, please do so with with an open mind, and a willing heart.</p>

                <p>The Magician archetype is one of profound knowledge and intellect. You excel when it comes to deciphering patterns, breaking codes, and resolving problems. Your analytical ability and logical approach to everything makes you a reliable and efficient problem solver.</p>

                <p>That, however, also means that you have tendency to be rather distant, even though you're able to recognize the most intricate details about people. You instinctively know who to trust, and who to look out for. Others might label you as judgmental or perhaps a little too critical, but your deductions are often, or almost always right.</p>

                <p>But what really sets you apart is your fearlessness and ferocity when it comes to the ideas and beliefs that you're passionate about. It’s no wonder that the people you encounter are left with a strong impression.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/magician.png">

                <p><span class="cap"><span class="name">Dear</span></span>, there is a strong sense of discipline within you. Unlike other archetypes, you're not afraid of hardwork, and you're not afraid of suffering. Rather, you thrive on it.</p>

                <p>You have a strange appreciation for pain, but not in the same way as a masochist. Your appreciation for pain stems from associating it with growth and advancement - an appreciation that pushes you forward.</p>

                <p>People find themselves drawn to you because of your ability to engage in deep, thoughtful conversations. The bonds that you forge with others is often something they've never experienced before.</p>

                <p>Your deep understanding of feelings and approachable appearance makes you a warm and comforting presence to be around.</p>

                <p>This puts you at a great advantage when it comes to achieving the things that you set your mind to. You're the type of person who reaches for the stars, and you have no intention of falling amongst the clouds.</p>

                <p>Amongst all the archetypes, the Magician is the most cunning and crafty... You're able to influence the decisions of others without them knowing. Your methodical when it comes to planning your steps, and you always seem to be one step ahead.</p>

                <p>You tend to make an excellent listener... But that trait of yours comes from knowing that information is power. You're slow to reveal your innermost thoughts... You're a firm believer of revealing just enough, but absorbing more than you need.</p>

                <p>The Magician archetype is one that also has the tendency to become manipulative and scheming. For the most part, you do exercise compassion and your heart's often in the right place. But it's also important to learn to be forgiving and patience, <span class="cap"><span class="name">Dear</span></span>...</p>

                <p>But we'll discuss that in greater detail as we progress through this Archetypal Introduction.</p>

                <h2 class="sub-header">As A Magician, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                <p>You are intuitive, knowledegable, and versatile. You have a wide variety of interests, but perhaps your greatest interest of all is learning.</p>

                <p>But the learning in question does not refer to academics - not even close. Whether its finding out how certain things are made, or understanding why certain people are charismatic, you're just simply interested to know everything. That's all driven by your perpetual curiosity, and your talent in comprehending concepts quickly.</p>

                <p>There's something else about your archetype... You're also incredibly versatile. You're able to assume different roles according to different situations - very much like an actual magician, who has numerous tricks hidden in his sleeves.</p>

                <p>Perhaps the best way to illustrate this is within a team setting - you're able to fill up whatever role is left, and you're able to do it well.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, based on the strengths of your archetype, you're an individual who's highly observant, and incredibly resourceful.</p>

                <!--Insert Strength Image-->
                <img class="img-intext" src="../img/strength.png">

                <p>As a Magician, you're actually a lot more nurturing than you think. You might appear to be a little bit emotionally detached on the outside, but when you're alone, you're actually someone who's warm, caring, and tender.</p>

                <p>And that translates into how well you're able to connect with others - an indicator of emotional stability.</p>

                <p>Apart from that, it's likely that others often come to you for guidance and advice... That's because as a Magician, you're meticulous when it comes to examining the details of any given situation... Allowing you to determine underlying causes that are unbeknownst to others.</p>

                <p>In terms of your behaviour around others, you tend to be a little bit more reserved, especially in larger groups. But, you excel impressively in when it comes to one-on-one interactions. That's where you feel the most comfortable, knowing that your voice can be heard, and you can forge a deeper, more personal connection.</p>

                <p>While you do enjoy using your talents to help others, you grow irritable when they refuse to listen. You must always remember not to allow the choices of others to affect your state.</p>

                <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Magnificent Magician, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your Archetypal strengths and personality traits, you will overcome all that stands in your way.</p>

                <p>The Magician archetype tends to struggle with its pride and expectations of others. And that often drives you to be dismissive, critical, and overly serious.</p>

                <p>But that's also indicative of a deeper fear that resides within you... The fear of failing others... And failing yourself</p>

                <p>As a Magician, your expectations are often set far too high. At times, your optimistic standards can be an excellent attribute - pushing you to greater heights...</p>

                <p>But that's not always the case. There are instances where you, or others, might fall short - and that's when you tend to experience frustration, disappointment, and helplessness.</p>

                <p>You must understand that life has so much more to offer, and people are not determined by their ability to meet your expectations - much less yourself. It will be impossible to avoid such setbacks entirely, but how you handle these upsets will determine the <span ckass="purple">destination of your journey.</p>

                <p>Do not be alarmed - this is all part and parcel of what it means to be a Magician. And with your Archetypal Introduction, all of that will soon change.</p>

                <p>The sooner you're aware of your struggles and weaknesses, the sooner you'll be able to experience the wonders and greatness that it has to offer. Working on that aspect of your personality will, in fact, reveal a part of your archetype that you never knew existed.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, it's important to understand that all archetypes has its fair share of weaknesses and challenges. Now that you're aware of them, you'll be able to pay attention to them, and then improve on them.</p>

                <h2 class="sub-header">As A Magician, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p><span class="cap"><span class="name">Dear</span></span>, While others seem to find it difficult to even understand the fundamentals of a new skill, you’re able to attain mastery over anything you set your mind to. In a way, your greatest strength is your ability to learn.</p>

                <p>You have a insatiable thirst for knowledge - constantly sourcing for new skills and learning opportunities to add to your already impressive arsenal of competencies.</p>

                <p>With those attributes in mind, you will certainly find fulfillment and enjoyment when you engage yourself in a career that allows you to assume a variety of roles... A position that forces you to apply yourself and your different talents.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, you have the capacity to perform great feats in your lifetime. But you must remember that you cannot do everything on your own - and that's where forging valuable connections with others will come into play.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/magician-love-compatibility.png">

                <p><span class="cap">Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, the Magician archetype is known to be faithful, tender, and devoted in a relationship... You're giving and understanding - attributes than any lover would cherish.</p>

                <p><span class="cap">As much as you dislike to admit it, there is a strong yearning for romance that resides within you. And that's supported by your faithfulness and committment in a relationship.</p>

                <p>However, when you're focused too much on your relationship, you tend to become manipulative of your partner - often trying to influence him or her to change his or her perspective and beliefs. It's not that mean you to, it's just simply habitual - a part of your subconscious.</p>

                <p>In the presence of your partner, you can be a little bit distant when your mind's distracted - and no matter how you try to hide it, people will always notice that about you. In order to forge stronger relations with your partner, you must learn to be both physically and emotionally present.</p>

                <p>But don’t forget, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="member" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Member - And This Is What It Means...</h2>

                <p>The Member archetype is one of the most interesting and contributing archetypes in society... Essentially, the Members are the ones who form the building blocks of the world... The ones who subscribe and participate in great causes.</p>

                <p>As a Member, you are charismatic, empathetic, and principled.</p>

                <p>Truth be told, the Member archetype is not merely one-dimensional. It has many different sides and faces, and as we progress through this Archetypal Introduction, you'll begin to understand what I mean. But before we proceed, please do so with with an open mind, and a willing heart.</p>

                <p>The Member archetype is one with that's exorbitantly talented in connecting and networking with others. You excel when it comes to making others feel comfortable, and creating links between people.</p>

                <p>You're able to motivate, drive, and inspire others to succeed. You instinctively know the right words to say, and you're able to somehow blend into different social groups, and social circles.</p>

                <p>But what really sets you apart is your passion for people. Whether it's your friends, co-workers, loved ones, or more often than not, even strangers.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/member.png">

                <p><span class="cap"><span class="name">Dear</span></span>, as a Member, you're able to earn the trust of others with your transparency. Unlike other archetypes, you're not afraid to bare it all and prove to others that your intentions are genuine.</p>

                <p>That seems to spring from your deep sensitivity to the emotions of others... A sensitivity that allows you to notice when someone feels shy, fearful, depressed - no matter how hard they try to hide it.</p>

                <p>It's a talent that cannot be explained by logic - but the best way to describe it, is that you have a 'feeling' for feelings.</p>

                <p>People find themselves drawn to you because of your ability to engage in deep, thoughtful conversations. The bonds that you forge with others is one that's based on trust, understanding, and and sincerity.</p>

                <p>Your deep understanding of feelings and approachable appearance makes you a warm and comforting presence to be around.</p>

                <p>This puts you at a great advantage when it comes to meeting and building relationships with people who can help you grow.</p>

                <p>As a Member, you thrive on interacting with the world - taking notice of everything that it has to offer... Its nature, its people, and its cultures.</p>

                <p>You offer balanced perspectives, always remembering that there's two sides to a story. That theme of harmony flows into your choice of words, and the the decisions that you make.</p>

                <p>You tend to make an excellent listener, <span class="cap"><span class="name">Dear</span></span>... You offer valuable input about tricky situations and disputes between others. That trait is emanated by your principled stance, morals, and ethics.</p>

                <p>The Member archetype has a profound connection to the world. You're kind and considerate towards others' differences...</p>

                <p>But we'll discuss that in greater detail as we progress through this Archetypal Introduction.</p>

                <h2 class="sub-header">As A Member, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                <p><span class="cap"><span class="name">Dear</span></span>, you are trustworthy, accepting, and conscientious.</p>

                <p>It's likely that you have a great number of friends - friends that you know you can trust and depend on. That's because your sincerity is almost always reciprocated.</p>

                <p>After all, kindness is a debt that can only be paid forward - and in one way or another, it's always returned to its rightful benefactor.</p>

                <p>You do however, prefer to keep your circle of friends on the smaller side... Perhaps there's only a select number of people that you choose to spend most of your time with.

                    <p>That's because of you tend to be more careful about who you let into your life - knowing that soured relationships can really dampen your mood.</p>

                    <p>Apart from that, you're also an individual who's altruistic and charitable. You rarely shy away from opportunities to give - as long as you know that whatever you do is for a good cause...</p>

                    <p>Based on the strengths of your archetype, you're best represented by your selflessness, your open-mindedness, and your charisma.</p>

                    <!--Insert Strength Image-->
                    <img class="img-intext" src="../img/strength.png">

                    <p><span class="cap"><span class="name">Dear</span></span>, as a Member, you're realistic and modest when it comes to your goals. You prefer to take small steps, rather than large leaps - a more conservative approach that's both sound and sensible.</p>

                    <p>And that translates into how well you're able to connect with others - an indicator of your high emotional quotient.</p>

                    <p>Apart from that, it's likely that others often come to you for direction and encouragement...</p>

                    <p>The Member archetype is uncanny when it comes to deciphering life lessons from sticky situations - translating them into golden nuggets of wisdom.

                        <p>The words that you speak are often galvanizing, and that stems from your tactfulness.</p>

                        <p>In terms of your behaviour around others, you prefer not to be the centre of attention, especially when it comes to larger groups. The Member archetype is not one that shies away, but one that prefers to listen, observe, and absorb its environment.</p>

                        <p>Your archetype truly shows when it comes to interacting with smaller groups, knowing that your voice is not drowned out by unnecessary noise.</p>

                        <p><span class="cap"><span class="name">Dear</span></span>, there are traits of profound leadership that are hidden within you - hidden because they have yet to be fully explored and cultivated. You're able to rally support, and compel people to believe in your cause.</p>

                        <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                        <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Magnanimous Member, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your Archetypal strengths and personality traits, , you will overcome all that stands in your way.</p>

                <p>The Member archetype tends to struggle with its concerns of being in the limelight And that often drives you to be less out-spoken and slightly more timid.</p>

                <p>But that's also indicative of a deeper fear that resides within you... The fear of rejection.</p>

                <p>As a Member, you've grown used to listening to other people's problems that you become a bit more reserved when it comes to talking about your own.</p>

                <p>Perhaps there's a part of you that feels that it's burdensome to others, and you'd rather bear it all on your own.</p>

                <p>But that could not be further from the truth. People are almost always interested to know more about you, and that includes your frustrations, disappointments, and troubles.</p>

                <p>You must forego the limiting belief that listening is all it takes, and be more open about sharing your personal circumstances and your ideas.</p>

                <p>This will allow you to tap into the strengths of your archetype, and really make full use of it to create even closer relations.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, do not be alarmed - this is all part and parcel of what it means to be a Member. And with your Archetypal Introduction, all of that will soon change.</p>

                <p>The sooner you're aware of your struggles and weaknesses, the sooner you'll be able to experience the wonders and greatness that it has to offer. Working on that aspect of your personality will, in fact, reveal a part of your archetype that you never knew existed.</p>

                <p>It's important to understand that all archetypes has its fair share of weaknesses and challenges. Now that you're aware of them, you'll be able to pay attention to them, and then improve on them.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As A Member, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>You are a social chameleon by your own right - an emotionally intelligent individual who blends into social environments of all shapes and forms.</p>

                <p>You have a special talent for communicating, and breaking language barriers. You're curious about other's beliefs and cultures, and that curiosity is often rewarded with affinity and trust.</p>

                <p>Those personal strengths of your indicate something into your personality profile... They indicate that you will uncover fulfillment and joy from being active in a people-oriented role that will require you to do the things that you do best - influence, persuade, and motivate.</p>

                <p>You have the makings of an excellent leader. But you must remember to toe the lines of your comfort zone, and eventually, you will learn to break free from the chains of your self-inflicted limitations.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/member-love-compatibility.png">

                <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>The Member archetype is known to be sweet, attentive, and emotionally available in a relationship... You're thoughtful and courteous - attributes than any potential suitor would appreciate.</p>

                <p>You tend to gravitate towards partners that are more assertive and domineering in a relationship - partners who are willing to take the reigns and dictate the direction.</p>

                <p>That gives you a sense of balance, but in all frankness, that's you selling yourself short - you're able to be assertive and decisive, and you need not limit your sights to individuals who exhibit such traits .</p>

                <p>You're perfectly capable of taking charge in a relationship, especially after you've explored that side of your identity.</p>

                <p>In the presence of your partner, you do tend to assume the more passive role. Of course, there's nothing wrong with that - but you must realize that there needs to be balance in any relationship.</p>

                <p>There are instances where you must give, as well as take. Likewise, there are also instances where you must follow, as well as lead.</p>

                <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="outlaw" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Outlaw - And This Is What It Means...</h2>

                <p>The Outlaw archetype is notorious, free-minded, and free-spirited... Nothing stands in your, way and nothing controls your desires. You are the true representation of what it really means to be the captain of your own ship.</p>

                <p>As an Outlaw, accountability to others makes you feel trapped, and that's why you prefer to answer to no one. </p>

                <p>Truth be told, the Outlaw archetype is not merely one-dimensional. It has many different sides and faces, and as we progress through this Archetypal Introduction, you'll begin to understand what I mean. But before we proceed, please do so with with an open mind, and a willing heart.</p>

                <p>The Outlaw archetype is one that tends to go against the grain. You're often challenging the rules and conventions of societal expectations and governmental control.</p>

                <p>You're able to speak with conviction about the things that you're passionate about, and that often includes ultimate freedom and rebelling against authority.</p>

                <p>But what really sets you apart is your passion for charitable causes and movements... Whether it's providing stray animals with a home, raising orphans, or building shelters in struggling areas.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/outlaw.png">

                <p>The Outlaw archetype, unlike other archetypes, is one that talks the talk, and walks the walk. Your actions and decisions are often reflective of and juxtapose to your personal beliefs.</p>

                <p>That seems to spring from your profound connection to people and things that are lost and forgotten... A connection that ignites a spark in you to create massive change in society - to actualize your vision of a new world.</p>

                <p>Despite your edgy and intense mannerisms, deep down, you're actually someone who's both passionate and compassionate.</p>

                <p>People find themselves drawn to you because of your thought-provoking insights that spur deep, thoughtful conversations. That's because you're always on high alert when it comes to social issues, injustice, inequality, or practically anything that screams unfairness.</p>

                <p>You do have vigilante tendencies, <span class="cap"><span class="name">Dear</span></span>... If given the chance to take matters into your own hands, you would not blink twice. That, however, sometimes lands you into trouble.</p>

                <p>You are the defender of the weak; the one to stand up against bullies, to restore power to the people, and bring justice to those who stole it from them.</p>

                <p>As an Outlaw, you despise systems and all that's attached to it - forming the foundation of your rebel heart, and your formidable spirit.</p>

                <p>Your stance is grounded with conviction, and you have no qualms with putting naysayers in their place. And that conviction is articulated with your passion for the helpless and the hopeless.</p>

                <p>In more ways than one, you have a strong sense of mission - an agent of change, if you will. That stems from your firm belief in the fact that everyone is born equal. And you will do whatever it takes to make it so.</p>

                <p>The Outlaw archetype has a deep-seated connection to the feeble and forgotten. You represent their voice, as well as the need for change in the world.</p>

                <p>But we'll discuss that in greater detail as we progress through this Archetypal Introduction.</p>

                <h2 class="sub-header">As An Outlaw, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                <p><span class="cap"><span class="name">Dear</span></span>, you are passionate, extreme, and authentic.</p>

                <p>What you see is what you get with you. There are no hidden sides to you, unlike the other archetypes. That does not mean to say that your archetype is one-dimensional, but it means that you're someone who's rooted in your character and principles, and you're certain about your identity.</p>

                <p>Although you portray yourself as someone relentless and tough, there is a big part of you that's filled with kindness and gentleness - a trait that really shows in your interaction with your love for the people in need of help.</p>

                <p>Your extreme personality attracts others who are like-minded and share the same sentiments. There's likely only a limited number of people that you choose to spend most of your time with.</p>

                <p>That's because you're intolerant of bigotry, selfishness, and the slightest hint of a discriminatory tone.</p>

                <p>Apart from that, you're also an individual who's altruistic and charitable. You rarely shy away from opportunities to give - as long as you know that the causes you give to are causes that you truly believe in.</p>

                <p>Based on the strengths of your archetype, you're best represented by your rebelliousness, your willingness to be different, and your profound sensitivity.</p>

                <!--Insert Strength Image-->
                <img class="img-intext" src="../img/strength.png">

                <p>As an Outlaw, you're brave and fearless when it comes to standing up for your beliefs and principles. You could not care less about being judged by others, as long as you stay true to yourself.</p>

                <p>And that translates into the respect that your peers have for you - a representation of your vigour and zeal for living life to its fullest, and leaving it better than when you first found it.</p>

                <p>The Outlaw archetype is driven and motivated by good intentions. Even though others might not understand your intense ideas and uncompromising perspectives, you know for a fact that your heart is in the right place.</p>

                <p>The words that you speak are often inspiring to like-minded individuals, and that stems from your leadership qualities.</p>

                <p>In terms of your behaviour around others, you have a boisterous and noticeable presence. Perhaps it's from your choice of clothing or your aura that exudes confidence and boldness.</p>

                <p>Your archetype truly shows when it comes to interacting with strangers, knowing that your opinions will be carefully listened to and that you have the opportunity to change one more person's perspective.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, there are traits of profound leadership that are hidden within you - hidden because they have yet to be fully explored and cultivated. You're able to rally support, and compel people to believe in your cause.</p>

                <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Notorious Outlaw, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your Archetypal strengths and personality traits, , you will overcome all that stands in your way.</p>

                <p>The Outlaw archetype tends to struggle with learning to trust others. And that often forces you to be cynical, skeptical, and suspicious of other's intentions.</p>

                <p>It's likely that you find the same questions repeating in your head... About someone else's ulterior motives, about someone else's phony and artificial beliefs, about someone else's trustworthiness as a whole.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, that fear of yours originates from a deeper fear that resides within you... and that is your fear of being vulnerable.</p>

                <p>Perhaps past experiences of betrayal have made you weary of trusting others. However, trust is an important element in life, and an element that you must learn once more in due time.</p>

                <p>It is important for you to learn to be vulnerable and to learn to be hurt - it is through that that you will learn to be stronger, better, and more fulfilled.</p>

                <p>This will allow you to tap into the strengths of your archetype, and really make full use of it to create valuable relationships with people. And in such, you will not feel as alone.</p>

                <p>Do not be alarmed - this is all part and parcel of what it means to be a Member. And with your Archetypal Introduction, all of that will soon change.</p>

                <p>The sooner you're aware of your struggles and weaknesses, the sooner you'll be able to experience the wonders and greatness that it has to offer. Working on that aspect of your personality will, in fact, reveal a part of your archetype that you never knew existed.</p>

                <p>It's important to understand that all archetypes has its fair share of weaknesses and challenges. Now that you're aware of them, you'll be able to pay attention to them, and then improve on them.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, As An Outlaw, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>Being vulnerable can be an incredibly scary thought for you... But it’s important to take small steps towards the direction, and make a few minor mistakes along the way.</p>

                <p>This can be applied to both your personal and work relationships.</p>

                <p>The world can be a vicious place if you’re standing alone; even if that thought doesn’t scare you, it should definitely be something worth pondering about.</p>

                <p>You do, however, need to understand that it’s important for you to combat your cynicism by being more emotionally connected. That way, you’ll be able to build trust and create even more fruitful interactions.</p>

                <p>You may have past memories of hurt and betrayal, but through the act of forgiveness, you will soon experience the true, unadulterated freedom that you seek.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/outlaw-love-compatibility.png">

                <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>The Outlaw archetype is known to be mysterious, passionate, and intriguing in a relationship... You're enigmatic and obscure, and potential romantic partners find that attractive about you.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, you tend to gravitate towards relationships that are temporary and short-lived. You're fully committed during the duration that it lasts, but when the flame goes out, you're ready to move on.</p>

                <p>You find it unlikely that you’d want to subscribe to society’s expectations of a typical, traditional marriage - you'd very much prefer to live life according to your own rules.</p>

                <p>However, that might all change if you were to find the perfect partner for you.</p>

                <p>Nevertheless, even the briefest encounter with you, be it a single night of passion, a short conversation, or even a week of simply being around you, can be refreshing, energizing, and inspiring.</p>

                <p>Your passionate spirit is infectious and full of life, and you are certainly the best at conveying your opinions and ideas with conviction.</p>

                <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="ruler" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Ruler - And This Is What It Means...</h2>

                <p>The Ruler archetype is best defined by its innate ability to lead. While others tend to avoid playing the role of a leader, Rulers are absolutely comfortable with volunteering to take charge.</p>

                <p>It's important to note that it's not the desire to lead that defines the Ruler archetype, but the actual quality of leadership that you are able to administer.</p>

                <p>Truth be told, the Ruler archetype is not merely one-dimensional. It has many different sides and faces, and as we progress through this Archetypal Introduction, you'll begin to understand what I mean. But before we proceed, please do so with with an open mind, and a willing heart.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, the Ruler archetype is best illustrated through the decisions that you make. You are often fair, just, and honourable.</p>

                <p>You're able to manage the expectations of others and grant direction towards maintaining order amongst your friends and various groups of people.</p>

                <p>But what really sets you apart is your passion for power and authority... Control is the one thing that you sought after the most, and also the one thing that you find the most fulfilling.</p>

                <p>Everything that you do is always somehow related to either gaining, maintaining, or even exercising control.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/ruler.png">

                <p>That does not mean to say that you're a control freak. Your approach to idea of control is calculated and methodical.</p>

                <p>More often than not, you leverage on your leadership qualities to attain higher personal goals, be it for their family, friends, or your community 0 and not for senseless or selfish reasons.</p>

                <p>If there's anyone who's capable of pulling that off, it's you, and you know that as well.</p>

                <p>Others find themselves drawn to you because of your assertive and decisive personality. Within your group of friends, you are often the one calling the shots and organizing outings and gatherings... A trait that others find alluring and attractive about you.</p>

                <p>Needless to say, the Ruler is perhaps one of the most charismatic archetypes. After all, you do need a little bit of charisma in order to gain the trust of others.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, you are also idealistic when it comes to your goals - a strong sign of a visionary. You refuse to fall short of your objectives, and you consider consolation as an indicator of failure.</p>

                <p>As a Ruler, you thrive on creating reliable systems for others to follow.</p>

                <p>Your stance is grounded with conviction, and that conviction is articulated with empathy, kindness, and a giving heart.</p>

                <p>Your visions are what drive you and motivate you to live life to its fullest. And you refuse to rest until you see your visions through.</p>

                <p>You feel responsible for the others around you - whether they're your friends, co-workers, or even your loved ones. That sense of responsibility pushes you to lead them by example. And that's what ultimately separates you from the wannabes.</p>

                <p>But we'll discuss that in greater detail as we progress through this Archetypal Introduction.</p>

                <h2 class="sub-header">As A Ruler, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                <p><span class="cap"><span class="name">Dear</span></span>, you are inspiring, confident, and determined.</p>

                <p>You might not have a specific expertise or an actual skill set, but as a generalist, you do possess excellent management abilities.</p>

                <p>You're able to delegate and direct others with positive certainty - and that's what makes others willing to follow.</p>

                <p>You're not one to shy away from the limelight - being the centre of attention comes natural to you.</p>

                <p>Your keen eye for detail ensures that whatever you set out to do is meticulously executed with precision.</p>

                <p>Apart from that, you're also an individual who's welcoming and open - especially to people who you trust. You rarely shy away from opportunities to play the role of a listening ear, and you feed off information from others to make sincere and unbiased choices.</p>

                <!--Insert Strength Image-->
                <img class="img-intext" src="../img/strength.png">

                <p>As a Ruler, you're gallant and audacious when it comes to taking massive action. Whether it's embarking on an unfamiliar personal journey, or putting a new idea to the test, you're swift to move.</p>

                <p>Unlike other archetypes, you're not one to fear failure - you have a thorough understanding of failure, realizing that it's the next step towards greatness. In fact, you welcome it with open arms.</p>

                <p>You are not afraid to make difficult and unpopular decisions. When you have to put your foot down, you do not hesitate.</p>

                <p>That's because you're willing to put your reputation and image at stake for the sake of your values, and for the good of others.</p>

                <p>In terms of your behaviour around others, you tend to be a little bit careful with your choice of words. You prefer to keep yourself censored, and you're always looking for the most politically correct way of putting things.</p>

                <p>You're fully aware that your words have the capacity to hurt or help others, and you'd very much prefer to use them with good intentions.</p>

                <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Decisive Ruler, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your Archetypal strengths and personality traits, , you will overcome all that stands in your way.</p>

                <p>The Ruler archetype tends to struggle with spreading itself too thin. At times, it might feel like you're needed everywhere all at once. It's likely that thoughts of cloning yourself or splitting yourself in half have crossed your mind.</p>

                <p>That challenge often stems from your refusal to seek help from others, perhaps from a lack of trust in the people around you.</p>

                <p>That challenge originates from a deeper fear that resides within you... and that is your fear of losing control.</p>

                <p>Perhaps your obsession with retaining power can at times be unwarranted, or even unnecessary - a self-inflicted belief that has convinced you that power is something that needs to be protected.</p>

                <p>It is important for you to realize that a lack of trust does not resonate well with others, and they do see it as well.</p>

                <p>And that leads us to your greatest challenge of all, <span class="cap"><span class="name">Dear</span></span> - and that is overcoming yourself.</p>

                <p>The sooner you're aware of your struggles and weaknesses, the sooner you'll be able to experience the wonders and greatness that it has to offer. Working on that aspect of your personality will, in fact, reveal a part of your archetype that you never knew existed.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, it's important to understand that all archetypes has its fair share of weaknesses and challenges. Now that you're aware of them, you'll be able to pay attention to them, and then improve on them.</p>

                <h2 class="sub-header">As A Ruler, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>You are an excellent mediator when it comes to managing expectations – those from yourself, and from others. You’re always able to maintain order through your sense of understanding what people want..</p>

                <p>This can be applied to both your personal and work relationships.</p>

                <p>Your talents in discerning right from wrong allows you to concoct fair solutions that are beneficial to all parties involved.</p>

                <p>Your calling in life will revolve primarily around those traits, <span class="cap"><span class="name">Dear</span></span>. As long as you're able to be in a position where you're able to make fair decisions and provide others with direction, you will find the fulfillment that you seek.</p>

                <p>But you must always remember that your sense of self-worth is not determined by your ability to lead or to rule. In fact, it is important for you to disassociate it completely from your identity.</p>

                <p>In eventuality, that is the true calling that you must answer to.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/ruler-love-compatibility.png">

                <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>The Ruler archetype is known to be charismatic, assertive, and responsible in a relationship... You often plan ahead of time, and potential romantic partners are often appreciative of that trait.</p>

                <p>But you must be aware that you do tend to come off as authoritative and domineering, which can be challenging attributes to have in a relationship. That often tips the balance in opinions and perspectives, and your partner will have to exercise a lot of patience and humility to constantly submit to you.</p>

                <p>You must bear in mind that relationships are always a two-way street, and the values and opinions of your partner needs to be listened to. Listening to your partner can in fact, be a lot more empowering than trying to impose your authority over him or her.</p>

                <p>It's unlikely that you'll encounter any trouble with finding potential suitors, but if you hold your cards too closely to your chest, you might lose the opportunity to find the one who's right for you.</p>

                <p>With that being said, you must learn to be vulnerable and trusting, and through that, you will also learn to be a more attentive, emotionally present lover. That will translate into a rewarding romantic relationship.</p>

                <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <div class="sage" style="display: none;">
            <div class="step1-reading">
                <p>Dearest <span class="cap"><span class="name">Dear</span></span>,</p>

                <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

                <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

                <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

                <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

                <p>There is plenty at stake here, <span class="name">Dear</span>. Your joy, happiness, luck, love, wealth...</p>

                <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <span class="archetype">Caregiver</span> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

                <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, You Are The Sage - And This Is What It Means...</h2>

                <p>The Sage is highly dedicated when it comes to seeking two things: knowledge and wisdom. That's what forms the foundation of the Sage archetype - it's what it lives for, and what it thrives on.</p>

                <p>Practically everything that you experience in life is a lesson for you, as you're able to identify the obscure meanings behind every event, occurrence, and setback.</p>

                <p>Truth be told, the Sage archetype is not merely one-dimensional. It has many different sides and faces, and as we progress through this Archetypal Introduction, you'll begin to understand what I mean. But before we proceed, please do so with with an open mind, and a willing heart.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, the Sage archetype is the wisest of all the archetypes. Your inherent wisdom is derived from your acute observations, and vast experiences of the world.</p>

                <p>This inner sense of wisdom is motivated by your curiosity of everything that life has to offer - its experiences, and its philosophies. To you, life in itself is a lifelong lesson; one that has no ceremonies or graduations - rather, a perpetual cycle of learning.</p>

                <p>But what really sets you apart is your wonder for the truth about everything. You’re deeply intuitive and introspective, and you're constantly applying and enriching yourself throughout the course of your life.</p>

                <p>You keep your principles and values close to your heart, and you're an advocate of mutual respect, peace, and harmony.</p>

                <!--Insert Archetype Icon-->
                <img class="img-intext" src="../img/icons/sage.png">

                <p>Although you have the desire to attain knowledge, there are instances where you prefer to listen to your own intuition.</p>

                <p>You have a profound understanding of the world, and there is a unique part that exists within you... A part that believes that intuitive thinking is often more reliable than logic processing.</p>

                <p>It's more than likely that you are an individual who has a deep interest in the spiritual world - an intangible dimension that exists beneath the layer of life.</p>

                <p>Others find themselves drawn to you because of your wisdom, insights, and prudence. This translates into your behaviour in front of others, as your words are carefully selected.</p>

                <p>Needless to say, the Sage is representative of a progressive world, and an enlightened life.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, you are certainly not one to be motivated by material possessions. You're far more interested in discovering the way to attaining inner peace.</p>

                <p>That typically stems from the realization that life is short-lived, and possessions are merely temporary.</p>

                <p>You are also an individual who enjoys reading - whether it comes in the form of books, articles, or newspapers. You're not typically interested in a single subject, but you enjoy reading things of different genres, natures, and mediums.</p>

                <p>Your curiosity is what contributes to your vast pool of knowledge, but that is not what ultimately defines you as a Sage.</p>

                <p>What really sets the Sage apart from the rest of the archetypes is its dedication to a higher sense of self - a journey of discovering experiences, and living life at a level beyond the comprehension of others.</p>

                <p>But we'll discuss that in greater detail as we progress through this Archetypal Introduction, <span class="cap"><span class="name">Dear</span></span>.</p>

                <h2 class="sub-header">As A Sage, These Are Your Hidden Strengths, Unknown Tendencies, And Positive Attributes That You Wouldn't Expect...</h2>

                <p>You are wise, perceptive, and incisive.</p>

                <p>The people around you often come to you for detailed advice, guidance, and direction.</p>

                <p>You're able to offer valuable insights into the situations of others, and you're somehow able to predict the outcomes of certain situations.</p>

                <p>It's also because you're patient and nurturing. You're able to connect with the people around you at a sincere, heartfelt, and profound level.</p>

                <p>That's also representative of the intimate connection that you have with people - you're often able to read people accurately, and see them for who they truly are.</p>

                <p>After all, you are a wise soul that’s overflowing with knowledge and wisdom. People notice that about you, and that's why people are often drawn to you.</p>

                <!--Insert Strength Image-->
                <img class="img-intext" src="../img/strength.png">

                <p>As a Sage, you're supportive and accepting of people of different backgrounds and beliefs - that trait of yours is resemblant of your people-oriented nature.</p>

                <p>Although, you do prefer to keep to yourself, and you're not always out-spoken. You are, however, more than willing to provide others with answers and advice when prompted.</p>

                <p>In more ways than one, you are an investigator of truths. And when you aspire to discover the truth, you always somehow manage to find it.</p>

                <p>That's because you're focused on the reality of things.</p>

                <p>In terms of your behaviour around others, you are composed, modest, and self-assured. There is a sense of calmness that's projected through your presence.</p>

                <p>Although you speak few words most of the time, the words that you speak are often impactful and well-informed.</p>

                <p>But there are obstacles that stand before you... Obstacles that you must be made aware of...</p>

                <button class="step-btn step2">Click Here To Discover What These Obstacles Are</button>
            </div>

            <div class="step2-reading">
                <h2 class="sub-header">Unfortunately, Not All Is Smooth-Sailing For The Wise Sage, <span class="cap"><span class="name">Dear</span></span>... These Are The Shortcomings You Must Look Out For.</h2>

                <p>This portion of your Archetypal Introduction does not seek to scare you... But it's best that you be made aware of the potential challenges that lie ahead of you - or perhaps you've encountered some of these challenges already.</p>

                <img class="img-intext" src="../img/sailing.png">

                <p>However, I have no doubt that with your Archetypal strengths and personality traits, , you will overcome all that stands in your way, <span class="cap"><span class="name">Dear</span></span>.</p>

                <p>The Sage archetype tends to struggle with procrastinating action At times, your obsession with chasing truths prevents you from acting upon your inner convictions.</p>

                <p>That challenge arises from your focus on details - an endless pursuit that consumes too much of your time and attention</p>

                <p>That challenge originates from a deeper fear that resides within you... and that is your fear of being wrong.</p>

                <p>As a Sage, you are afraid of being misled, or feeling ignorant. And at times, that stops you from taking action, because taking action makes something real. And when something becomes real, you run the risk of being wrong.</p>

                <p>It is important for you to realize that mistakes are part of being human - they are unavoidable; an inevitable part of existence. But when you do learn to embrace them, you'll discover that there's so much more to learn from being active as opposed to being passive.</p>

                <p><span class="cap"><span class="name">Dear</span></span>, do not be alarmed - this is all part and parcel of what it means to be a Member. And with your Archetypal Introduction, all of that will soon change.</p>

                <p>The sooner you're aware of your struggles and weaknesses, the sooner you'll be able to experience the wonders and greatness that it has to offer. Working on that aspect of your personality will, in fact, reveal a part of your archetype that you never knew existed.</p>

                <p>It's important to understand that all archetypes has its fair share of weaknesses and challenges. Now that you're aware of them, you'll be able to pay attention to them, and then improve on them.</p>

                <h2 class="sub-header">As A Sage, This Is Your Calling... And It's Beyond Your Wildest Imaginations</h2>

                <p>You take an interest in a broad number of subjects, and your fulfilment is derived from learning. This means that you're greatest path to fulfilment can be found through a combination of engaging your mind, and translating that into motion.</p>

                <p>Sages tend to excel in research-based fields, where they're able to really apply themselves. This will also allow you to tap into your insatiable curiosity and passion for uncovering answers.</p>

                <p>This can be applied to both your personal and work relationships.</p>

                <p>Your calling in life will revolve primarily around those traits, <span class="cap"><span class="name">Dear</span></span>. As long as you're able to be in a position where you're able to keep your mind active and be given opportunities to execute your ideas, you will experience the rewarding sense of accomplishment.</p>

                <p>However, at times, your purpose and direction in life might feel empty. And that is something that you need to be careful of. You might feel as if you’re living your life solely for the sake of learning, and you continue doing what you do because it’s the only thing you know how to do.</p>

                <p>But as long as you're constantly aspiring yourself to the truth, and pushing yourself beyond your limits, that void that you feel will gradually dissipate over time.</p>

                <h2 class="sub-header"><span class="cap"><span class="name">Dear</span></span>, Here's A Glimpse Into Your Love Compatibility With Other Archetypes...</h2>

                <img class="love-img" src="../img/love/sage-love-compatibility.png">

                <p>Do you see that chart on top? That little chart over there represents the archetypes that you’re most likely to end up with. Or if you’re already in a committed relationship, there’s a really good chance that your spouse is one of those archetypes.</p>

                <p>The Sage archetype is known to be perceptive, attentive, and nurturing in a relationship... You're always willing to provide your romantic partner with a listening ear, and you're also emotionally available.</p>

                <p>It is likely that the conversations you share your romantic partner are often profound and deep. While such conversations can certainly be rewarding and fascinating, it's also important for you to balance that out by being easy-going and less intense.</p>

                <p>You must bear in mind that relationships are always a two-way street, and learning to compromise and complement each other's strengths will define the success of your love life.</p>

                <p>The type of partner that suits you best is one that gives you a sense of predictability and stability. You prefer your relationships to exhibit long-term potential, with a certain level of seriousness.</p>

                <p>With that being said, you must learn to be humble and patient, and through that, you will also learn to be a more the best partner, and the best Sage that you can be.</p>

                <p>But don’t forget, <span class="cap"><span class="name">Dear</span></span>, how you perceive yourself should not be determined by your love life. Romance is merely one, single aspect of life - not the only. It's always best to focus on your own personal growth, because that's the path that you must embark on to lead a rewarding and fulfilled life.</p>

                <button class="step-btn step3">Click Here To See What's In Store For You!</button>
            </div>
        </div>

        <?php include '../../inc/premium-v4-new.php'; ?>

    </div>



    <div class="step3-cta">
        <?php include '../../inc/paa-order.php'; ?>

        <?php include '../../inc/faq-v5.php'; ?>
    </div>

    </body>

    <?php include '../../inc/footerdev.php'; ?>
    #archetype-image

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {

            $.ajax({
                url: "https://member.individualogist.com/api/maropost/getByEmail",
                headers: {
                    "Content-Type": "application/json",
                    "Access-Control-Allow-Methods": "POST",
                },
                data: {
                    email: $('.email').text(),
                },
                type: "GET",
                success: function(response) {
                    console.log(response);
                },
                error: function(err) {
                    console.log(err);
                },
            });
        });
    </script>