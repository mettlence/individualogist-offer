<?php
$PageTitle = "Individualogist.com | Reading";
include ('../inc/header.php');
?>

<style>
.indi-logo{filter: none;width: 250px;}
.paa-items{border-radius:.5em;filter:drop-shadow(0 5px 15px rgba(0,0,0,.15));max-height: 200px;margin: 1em auto;position: relative;display: block}
.archetype-reading p {font-size:18px;text-align:justify}
.paav2-cta{background:linear-gradient(45deg,#842ac2,#420f65);box-shadow:0 5px 15px rgba(0,0,0,.15);border-radius:.5em;padding:1em;width:100%;margin:2em auto}.reg-price{text-align:center!important;font-size:2em!important;line-height:1em;text-align:center;font-weight:700;color:#fff}.cta-btn{white-space:normal;line-height:1.2em;margin:1em auto;border-radius:100px;background:red;color:#fff;text-transform:uppercase;box-shadow:0 5px 15px rgba(0,0,0,.15);font-weight:700;padding:.5em 1em;display:block;font-size:1.5em;}.cta-btn:hover{color:#333;transition:.4s;-webkit-transition:.4s;background:gold}.cta-link:hover{color:#fff}.payment-options{margin:1em auto;display:inline-block;position:relative;max-width:20   0px;width:100%}.paav2-cover{position:relative;display:inline-block;height:auto;width:100%}.cta-guarantee{width:50px;height:45px;position:relative;margin:0 auto;display:inline-block}.paav2-cta:hover{transition:.4s;transform:scale(1.05)}.cta-link{color:#fff;text-decoration:underline;display:block;margin:1em auto}.paa-items{border-radius:.5em;filter:drop-shadow(0 5px 15px rgba(0,0,0,.15))}.push-down{margin-top:3em}.glow{text-shadow:0 0 15px #fff,0 0 20px #fff}@media only screen and (max-width:768px){.push-down{margin-top:0}.cta-btn{font-size:1.3em}}@keyframes pulse-red{0%{transform:scale(.95);box-shadow:0 0 0 0 rgba(255,82,82,.7)}70%{transform:scale(1);box-shadow:0 0 0 10px rgba(255,82,82,0)}100%{transform:scale(.95);box-shadow:0 0 0 0 rgba(255,82,82,0)}}
.bg-archetypewhite{background: url(/lp/assets/image/archetypewheelwhite.webp) no-repeat center center;background-attachment:fixed;background-size: cover;}    
.img-mid {width:100%;max-width:300px;position:relative;display:block;margin:1em auto;filter:drop-shadow(0 5px 15px rgba(0,0,0,.15))} 
.img-paa {width:100%;max-width:500px;position:relative;display:block;margin:1em auto;filter:drop-shadow(0 5px 15px rgba(0,0,0,.15))}     
.left {margin: 0;background: #f8f8f8;font-weight: 700;text-shadow: none;}
.right {background: #8429c2;color: #fff!important;text-transform: uppercase!important;font-size: 14px;text-shadow:none!important;width: 6rem;text-align: center;padding: .5rem;}
.page-header{font-size:1em;color:#fff!important;text-shadow:1px 1px 1px #000}    
.testimonial{border:2px solid #8429c2;border-radius:.5em;box-shadow: 0 5px 15px rgba(0,0,0,.15);}
.security-text{font-size: 11px!important;line-height: 1;color:#fff;text-align:left}
.testimonial h3{color:#8429c2;margin-top:1em}
.testimonial p {text-align:center;font-size:16px;font-style:normal}
.testimonial-profile p {font-size:12px;line-height: 1em;background: rgba(132, 42, 194, 0.75);color: #fff;display: inline-block;padding: .5em;border-radius: 3px;} .testimonial img {width: 100px;height: 100px;margin: 1em auto;display: block;} 
.bonus-text{font-size:16px!important}
#faq-area{width:100%;border: 1px solid #8029bd;padding: 0 1em;border-radius: 5px;}
#faq-area:before{width: 1px;height: 40px;position: absolute;top: -40px;left: 0;background: #7f29bd;right: 0;margin: auto;display: block;content: '';}    
#footer{width: 90%;background: transparent;border-top: 2px solid #8429c2;}    
#footer p {color: #333;}
.footer-logo{filter:none}
#faq-area:after{width: 1px;height: 40px;position: absolute;bottom: -40px;left: 0;background: #7f29bd;right: 0;margin: auto;display: block;content: '';}    
.indent{font-size:16px!important}
ul.tick-list {position:relative;padding: 1em;border: 1px solid #0db82c;border-radius: 5px;}
ul.tick-list li{font-size:16px!important}    
ul.tick-list li:before{color: #08b82c;}    
.faq-header{color:#7f28bc;margin-top:1em;font-weight: 700;text-align: center;letter-spacing: 1px;text-transform:uppercase;font-size:1.2em}
.faq-para p{font-size:16px}    
.archetype-icon{display: block;margin: 20px 0;text-align: center;min-height: 20px;position: relative;filter: drop-shadow(0 0 10px rgba(0,0,0,.3));z-index: 1;}    
</style>
<script>
$(function() {
    $(".step1-reading").show();
    $(".step2-reading").hide();
    $(".step3-reading").hide();
    $(".step4-reading").hide();
    $(".step5-reading").hide();
    $(".step6-reading").hide();
    $(".step3-cta").hide()
    $(".step2").on('click',function() {
        $(this).hide();
        //$(".step1-reading").hide(300);
        $(".step2-reading").show(600);
        $('html,body').animate({
            scrollTop: $(".step2-reading").offset().top},300);
    });
    $(".step3").on('click',function() {
        $(this).hide();
        //$(".step2-reading").hide(300);
        $(".step3-reading").show(600);
        $(".step3-cta").show();
        $('html,body').animate({
            scrollTop: $(".step3-reading").offset().top},300);
    });
    $(".step4").on('click',function() {
        $(this).hide();
        //$(".step3-reading").hide(300);
        $(".step4-reading").show(600);
        $(".step4-cta").show();
        $('html,body').animate({
            scrollTop: $(".step4-reading").offset().top},300);
    });
    $(".step5").on('click',function() {
        $(this).hide();
        //$(".step4-reading").hide(300);
        $(".step5-reading").show(600);
        $(".step5-cta").show();
        $('html,body').animate({
            scrollTop: $(".step5-reading").offset().top},300);
    });
    $(".step6").on('click',function() {
        $(this).hide();
        //$(".step5-reading").hide(300);
        $(".step6-reading").show(600);
        $(".step6-cta").show();
        $('html,body').animate({
            scrollTop: $(".step6-reading").offset().top},300);
    });
});
</script>
<script type="text/javascript">
    var getParams = function (url) {
        var params = {};
        var parser = document.createElement('a');
        parser.href = url;
        var query = parser.search.substring(1);
        var vars = query.split('&');
        for (var i = 0; i < vars.length; i++) {
            var pair = vars[i].split('=');
            params[pair[0]] = decodeURIComponent(pair[1]);
        }
            return params;
    };
    $(document).ready(function() {
        var archetype = '';
        var name = '';
        var email = '';

        var params = getParams(window.location.href);
        if(params.name) {
            name = params.name;
        }
        if(params.email) {
            email = params.email;
        }

        if(params.archetype == 'caregiver') {
            archetype = 'car';
        }else if(params.archetype == 'creater') {
            archetype = 'cre';
        }else if(params.archetype == 'explorer') {
            archetype = 'exp';
        }else if(params.archetype == 'hero') {
            archetype = 'her';
        }else if(params.archetype == 'innocent') {
            archetype = 'inn';
        }else if(params.archetype == 'jester') {
            archetype = 'jes';
        }else if(params.archetype == 'lover') {
            archetype = 'lov';
        }else if(params.archetype == 'magician') {
            archetype = 'mag';
        }else if(params.archetype == 'member') {
            archetype = 'mem';
        }else if(params.archetype == 'outlaw') {
            archetype = 'out';
        }else if(params.archetype == 'ruler') {
            archetype = 'rul';
        }else if(params.archetype == 'sage') {
            archetype = 'sag';
        }else{
            archetype = 'car';
        }

        var productLink = 'http://paa-' + archetype + '.individua1.pay.clickbank.net/?cbfid=28769&cbskin=22063&name=' + name + '&email=' + email + '&vtid=exitpop&coupon=EXIT20OFF';
        document.getElementById('popupLink').setAttribute('href', productLink);
    });
</script>
<style>
    .sub-header{box-shadow:none;border-radius:0;border:none;border-bottom: 2px solid #8429c2;}
    .guarantee{box-shadow:none}
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
    .next-btn{
        font-weight: 700;
        display: block;
        margin: auto;
        font-size: 1.5em;
        white-space:normal;
        font-family:'Raleway',sans-serif;
        width:100%;
        background: linear-gradient(45deg,#842ac2,#851085);
        padding: .5em 1em;
        box-shadow: 0 5px 15px rgba(0,0,0,.15);
        color: #fff;
    }
    .next-btn:hover{
        transition:.4s;
        -webkit-transition:.4s;
        background: linear-gradient(45deg,#851085,#842ac2);
        box-shadow: 0 3px 3px rgba(0,0,0,.15);
    }
    .fa-long-arrow-right:before {font-family:FontAwesome}
    @media only screen and (max-width: 768px) {
        .progress-breadcrumb li {
            width: 100%;
        }
        .next-btn {
            font-size:1.2em;
        }
    }
</style>

    <link href="https://fonts.googleapis.com/css?family=Raleway:500,700,900" rel="stylesheet">
    <div class="page-container">
        <div class="container-fluid bg-archetypewhite">
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <div class="indi-logo">
                        <img src="https://individualogist.com/lp/assets/image/individualogist-logo2.webp">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <div class="page-header">
                        <h2><strong><span class="cap"><?php echo $_GET['name'];?></span>, Unlock Your Sacred Archetypal Powers & Experience Abundance Across All Aspects Of Your Life. </strong></h2>
                        <div class="archetype-img">
                          <?php
                        switch (strtolower($_GET['archetype'])){
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
                        <p>This Secret Archetype Reading Has Been Prepared For:</p>
                        <table class="order-details">
                            <tbody>
                                <tr class="details">
                                    <td class="right">Name:</td>
                                    <td class="left"><span class="cap"><?php echo $_GET['name'];?></span></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Email:</td>
                                    <td class="left"><?php echo $_GET['email'];?></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Archetype:</td>
                                    <td class="left"><span class="cap"><?php echo $_GET['archetype'];?></span></td>
                                </tr>
                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>

        <div class="archetype-reading">
            <div class="step1-reading">
            <p>Dearest <span class="cap"><?php echo $_GET['name']; ?></span>,</p>

            <p>Extraordinary unleashed potential lurks within you - potential that's been suppressed for decades now...</p>
                
            <p>Much like a dormant volcano just waiting for its time.</p>

            <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your shoulders.</p>
                
            <p>These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

            <p>Yes, there is no doubt. Your Interval of Elevation is on the VERGE of commencing. This is an intuitive interval that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to unblock all negative vibrations surrounding you to attain the unimaginable.</p>

            <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles and past pains.</p>
                
            <p>Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

            <p>There is plenty at stake here, <?php echo $_GET['name'];?>. Your joy, happiness, luck, love, wealth...</p>

            <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <?php echo $_GET['archetype'];?> archetype, I will show you how you can leverage this energetic shift to <strong>become the greatest <?php echo $_GET['archetype'];?> the world's ever seen.</strong></p>
                
            <p>That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>
                
            <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
                
            <button class="btn next-btn step2">Click Here To Learn About Your Archetype <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
            </div>
                
            <div class="step2-reading">
                <h2 class="sub-header">Discover The Secret Meaning Behind Your <?php echo $_GET['archetype'];?> Archetype </h2>
        <?php
        switch (strtolower($_GET['archetype'])){
        case "caregiver":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/caregiver.png' width='100px'>
            </div>
            <p>You are a compassionate altruist whose selflessness comes unparalleled.</p>
            <p>You're always willing to help the people around them, be it friends, strangers, or sometimes even foes. Your generosity inspires everyone around them and fills receivers with an immense amount of gratitude.</p>
            <p>You are an individual who possesses great capacities of love... An individual whose sole purpose is to give large chunks of yourself to others.</p>
            <p>That being said, you truly are a unique individual... And needless to say, the world certainly needs more people like you.</p>
            <p>And despite your seemingly simple appearances, you're definitely a whole lot smarter than you make yourself out to be. In other words, because of your archetype, there's no doubt that you possess a profound level of intelligence...</p>
            <p>...A level of intelligence that is not merely limited to academics.</p>
            <p>But... Because of your humble and mild-mannered nature, you'd very much prefer to hide that specific trait about you.</p>
            <p>You'd very much rather be underestimated than overestimated, isn't that right?</p>
            <h2 class='sub-header'>High Levels of Intuitive Abilities</h2>
            <p>You're also deeply sensitive when it comes to other's emotions - your emotional quotient amongst the highest in the archetypes... Allowing you to experience the pains, struggles, and happiness of others...</p>
            <p>Your selflessness comes unparalleled. You're always so ready to give to others - whether it's in the form of time through volunteering, in the form of money through donations, or even in the form of simple acts of love through listening to another's sorrows.</p>
            <p>And unlike others, you're not picky when it comes to who you choose to give to. It doesn't matter to you, does it? Whether it's giving to loved ones, acquaintances, and oftentimes, even strangers.</p>
            <p>You might not be aware of this... But your generosity does not go unnoticed. In fact, it inspires and encourages literally everyone around you.</p>
            <p>Your archetype has a magnetizing personality... One that draws respect and admiration from your friends and loved ones.</p>
            <p>It's no wonder that people are always looking towards you whenever they need a listening ear.</p>
            <p>And unlike other archetypes, you're not one to have massive circles of friends. But that does not mean to say that you have trouble with making friends.</p>
            <p>In fact, it's quite the contrary. The other archetypes often find themselves drawn to your calm and tender presence.</p>
            <p>You are, however, a little bit selective when it comes to who you choose to let into your life.</p>
            <p>You prefer to keep your loved ones close, and your circle of friends small.</p>
            <h2 class='sub-header'>A Compass To Those Around You</h2>
            <p>Amongst the people who know you best, you're often seen as a parental figure... Someone that they look to for guidance and advice.</p>
            <p>This gives rise to your natural inclination to teach others, as you draw energy from imparting knowledge to those around you.</p>
            <p>Caregivers often find the greatest amounts of fulfillment in careers that involve a lot of teaching and guiding, and nurturing.</p>
            <p>Despite your mild-mannered character, there's a fierceness that resides deep within you. A fierceness that's only revealed when you have to protect the people you care deeply about - especially your children.</p>
            <p>You're willing to give everything and anything it takes to keep them safe from harm.</p>
            <p>It's absolutely vital to understand that your giving nature prevents you from pursuing monetary riches.</p>
            <p>In fact, it's likely you don't derive satisfaction from attaining material riches.</p>
            <p>Instead, what truly gives you joy is helping the people around you. It's through giving that you experience gratification.</p>
            <p>Now, that doesn't necessarily mean that you will never be financially free.</p>
            <h2 class='sub-header'>The Caregiver's Abundance Secret</h2>
            <p>You can leverage your giving nature to expand your networks, which is arguably one of the most vital components when it comes to attaining success.</p>
            <p>There are endless opportunities for you to showcase your talents in management.</p>
            <p>Your innate people skills put you at a strong advantage over others.</p>
            <p>Remember, you shine the brightest during one-to-one interactions, which can primarily be attributed to your magnetic personality and your ability to form close interpersonal connections with friends and strangers.</p>
            <p>It's highly important for you to not just form strong networks, but to seize the opportunities that come with them.</p>
            <p>After all, success comes from acting and not merely thinking.</p>";
            break;
        case "creator":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/creator.png' width='100px'>
            </div>
            <p>You associate yourself with being completely and entirely original.</p>
            <p>Your greatest pride lies in your ability to think out of the box when it comes to everyday life and achieving the goals that you've set for yourself.</p>
            <p>You're a trailblazer who's constantly paving ways for others to follow.</p>
            <p>You are an individual who possesses a stupendous amount of creativity... An individual whose sole purpose is to express yourself through your idealistic and innovative mind.</p>
            <p>That being said, you truly are a unique individual... And needless to say, the world certainly needs more people like you.</p>
            <h2 class='sub-header'>The Epitome Of Expression</h2>
            <p>You're someone who's also incredibly resourceful, scrappy, and imaginative... Finding all sorts of ways to express your ideas and feelings. Because of this, you're also someone who's well-respected by the others around you - for your talents and abilities in the things, hobbies, and skills that you're passionate about.</p>
            <p>You're highly opinionated, and you take great pride in your work - your craft. It's what you live for, and also what you're willing to sacrifice for.</p>
            <p>You hold high regards for your originality. It is highly representative of you to refuse to conform to societal expectations. You're often challenging the norm - battling against conventional rules.</p>
            <h2 class='sub-header'>Opportunistic and Innately Gifted</h2>
            <p>Your archetype also suggests that you're often on the lookout for opportunities to showcase your talents. After all, the admiration and respect that you receive can feel rather rewarding, doesn't it?</p>
            <p>You might not like to admit it... But you're gifted - at least, more so than the other archetypes. You pour your heart, mind, and soul into anything that you construct, ensuring that the outcomes resembles the closest thing possible to perfection.</p>
            <p>You refuse to be part of the norm and you're always on the look out for opportunities to showcase your own way of doing things.</p>
            <p>You form strong ideas that are both sustainable and beyond the expectations of ordinary folk.</p>
            <p>You exude a high level of expertise, unique perspectives, and the ability to perceive problems differently from others.</p>
            <p>This makes you easily one of the most sought after talents across various industries.</p>
            <p>The Creator archetype is also one that seems to enjoy working with its hands. You prefer to immerse yourself in the tangible experience of what it means to create. The lesser the medium, the closer you feel to your work.</p>
            <p>And unlike others, you're not exactly the most sociable person on the planet... On a bright Sunday afternoon, you'd very much prefer to remain in the comfort of your own home - honing your talents and improving yourself instead of being out shopping or spending time with your friends.</p>
            <h2 class='sub-header'>Spreading Inspiration and Wisdom</h2>
            <p>You might not be aware of this... But your creativity is inspiring and encouraging to the people around you - mostly your peers. And because of this, your archetype truly has the capacity to achieve greatness.</p>
            <p>Although you tend to be rather aloof in the conversations that you share with others, you do also seem to enjoy the occasional chit-chat. That's because you've constructed thick barriers between you and the rest of the world - but unfortunately, it can get a little at times...</p>
            <p>That's why you're more than elated whenever someone comes to you for a listening ear.</p>
            <p>That also explains your introspective tendencies - especially when you're on your own. It's not unusual for philosophical thoughts to cross your mind ever so often. You seem to draw energy from being by yourself, and expending energy when you're surrounded by others.</p>
            <p>Although, that does not hinder you one bit, doesn't it? After all, you do possess the confidence to do things on your own, and you certainly have the composure and poise to pull it off.</p>
            <p>Based on those attributes, it's evident that you'll experience the greatest amount of fulfillment and joy from pursuing a career as an artist, a designer, a writer, a creative director, or pretty much anything that taps into your out-of-the-box thinking.</p>
            <h2 class='sub-header'>Open-Minded and Accepting</h2>
            <p>Beyond that, you're also someone who's open-minded. You're very accepting of people who come from different backgrounds. You have the sense to realize that different perspectives exist, and you're always reminding yourself to be respectful of that.</p>
            <p>That's also because you tend to enjoy things that are a bit out of the ordinary and venturing out into the unknown - things that individuals belonging to other archetypes rarely think about.</p>
            <p>You see, you have a rather quirky personality, and a diverse set of interests. But those are the little oddities that make you who you are, wouldn't you agree?</p>
            <p>However, despite your talents, you're often insufficiently rewarded for their efforts.</p>
            <p>You see, there are fears that reside within your archetype... Deep-seated fears that appear minuscule to others, but appear menacing to you.</p>
            <p>Your archetype tends to be fearful of appearing unoriginal, or even mediocre. And this stems from one thing... It stems from the concern that you have of how others perceive you.</p>
            <p>Although you're always telling yourself not to care, there's a part of you that struggles to let go. And even though you manage to successfully convince yourself some times, you eventually fall back into the same patterns and same routines.</p>
            <p>You must also be careful of your own perfectionism. That's the strange thing about your archetype - what you're good at can also be your worst enemy.</p>
            <p>After all, too much of a good thing is a bad thing.</p>
            <h2 class='sub-header'>The Creator's Abundance Secret</h2>
            <p>Your unhealthy obsession with perfectionism can stop you from even trying in the first place. And there is no greater failure than preventing yourself from failing.</p>
            <p>To maximize the abilities of your archetype, you must always be trying, always be experimenting, and always be failing. As ironic as it sounds, that is the journey that will lead you to your eventual success.</p>
            <p>If monetary wealth was your goal, you will have to set your sights unto riskier projects, such as embracing your entrepreneurial spirits.</p>
            <p>Financial management is also important for you if you want to achieve your financial goals in the long-term.</p>";
            break;
        case "explorer":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/explorer.png' width='100px'>
            </div>
            <p>You are an adventurer wanting to make your mark in the world and uncover new discoveries.</p>
            <p>Each of your explorations is carefully considered and contribute to your understanding of the world and yourself.</p>
            <p>Based on your archetype, your biggest value in life is your sense of freedom. That's because as an Explorer, you're highly energetic, and you're always on the move. You tend to get bored with mundane and monotonous routines - and you're always looking for a way out.</p>
            <p>While others struggle to feel comfortable in unfamiliar places, you just seem to feel at home in the most distant of lands. That’s because you envision the world as a singular place – and you understand that each and every one of us belongs to the same home.</p>
            <p>Because of that, you have the uncanny ability to feel at home in even the most unorthodox and unfamiliar places.</p>
            <p>You are highly ambitious and dedicated to your goals. Once they've set your mind to something, you go all out to achieve it.</p>
            <p>...Your archetype also suggests that you have the tendency to take action before thinking... But that does not mean to say that you're thoughtless - in fact, it's quite the contrary. You see, you recognize that thoughts tend to stand in the way of action. And what matters to you, is action.</p>
            <h2 class='sub-header'>A Go-Getter On The Look Out For New Experiences</h2>
            <p>You're an excellent communicator by nature... Your travels and curiosity have equipped you with a repertoire of captivating stories - stories that people absolutely love to hear. You're often the center of attention - regardless of whether you're in a room full of strangers, friends, or loved ones.</p>
            <p>Your archetype also suggests that you're often on the lookout for opportunities that don't necessarily take you out of the country. As long as there's a new experience waiting for you, you're more than willing to give it a shot. Whether it's an activity, a sport, or even a new restaurant that you've never tried before - you're always game.</p>
            <p>You have an unquenchable curiosity for knowledge and you're always willing to learn about new places, even if it has no relation to your general interests.</p>
            <h2 class='sub-header'>Comfortable with Discomfort</h2>
            <p>The Explorer archetype is also one that strives to be different. You prefer to feel and immerse yourself in the most foreign environments - environments that the other archetypes would prefer to avoid.</p> 
            <p>There's also a side of you that tends to be a little bit of an adrenaline junkie - it might not be all that obvious, but it definitely exists.</p>
            <p>You're an individual who's sociable, likable, and approachable. Unlike the archetypes who are more introverted by nature, any day that you spend sitting around at home feels like a waste of your time.</p> 
            <p>You'd very much prefer to be literally anywhere else, doing anything else, instead of being cooped up and alone.</p>
            <p>You might not be aware of this... But your willingness to try new things is inspiring and encouraging to the people around you - mostly your peers. And because of this, your archetype truly has the capacity to achieve greatness.</p>
            <p>Sitting still for even just a short period of time can cause you to feel jittery, uneasy, and restless.</p>
            <p>You crave adventure and they feed on new experiences.</p>
            <p>Despite often being the center of attention, your incessant curiosity about others makes you an individual who's self-aware and emotionally connected to others.</p> 
            <p>That's because even though people are more than willing to listen to the stories that you share and the images that you portray, you always know when it's time to shift the limelight to someone else. And that realization is often driven by you wanting to know the stories of others.</p>
            <p>All of that gives rise to the one single attribute that truly resembles the Explorer archetype - your obsession with experience - an obsession that drives you to learn, to discover, and to explore.</p>
            <h2 class='sub-header'>Understanding, Cultured, and Instinsctive</h2>
            <p>There's something else about your archetype... You possess a deep understanding of human nature and culture. You're likely to be someone who reads people rather well. You know who you can trust, and who you must avoid at all costs. </p>
            <p>Although, there are times when compassion takes control over your tendencies... And that's when you become vulnerable to having your trust misplaced and taken advantage of.</p>
            <p>Based on those attributes, it's evident that you'll experience the greatest amount of fulfillment and joy from pursuing a career that will feed your curiosity, take you outside of the typical confinements of a desk space, and constantly keep you on your toes... Perhaps something outdoors-ish or travel-related.</p>
            <p>That's also because you tend to enjoy things that are a bit out of the ordinary and venturing out into the unknown - things that individuals belonging to other archetypes would prefer to avoid.</p>
            <p>You see, you have a rather valiant aura, and a daring approach. You're not one to follow in the footsteps of others, are you?</p> 
            <p>Instead, you're the one who paves the way forward - bashing through the bushes like the gallant discoverer that you are. After all, you have to be a little bit bold in other to explore the unexplored, wouldn't you agree?</p>
            <p>You tend to invest the majority of your finances into creating new travel experiences for themselves, and such a costly hobby prevents you from being financially prepared for the future.</p>
            <h2 class='sub-header'>The Explorer's Abundance Secret</h2>
            <p>Your archetype tends to be fearful of commitment, and even anything that resembles it. It's likely that at a certain point in your life, you found the idea of marriage a little bit alien - an idea that just never made sense to you.</p> 
            <p>That attribute stems from your fear of commitment; commitment of any sort... Whether it's residing in a single place for too long, or remaining in a relationship with one, single person for eternity.</p>
            <p>Of course, there's nothing wrong with being alone. But that fear originates from your obsession with new experiences - an obsession that often leads you to neglect the people closest to you.</p>
            <p>You live in the present and have no worries for tomorrow.</p>
            <p>Your sense of wealth lies not in monetary riches, but in experiences. You feel the most joy from learning the story of a stranger or by simply being in a foreign land.</p>";
            break;
        case "hero":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/hero.png' width='100px'>
            </div>
            <p>Your archetype suggests that you're an individual who possesses great mental strength, fortitude, and an unbreakable sense of perseverance. You are never fearful of what the future holds for you, and you're always willing to step up to challenges of any sort.</p>
            <p>Yes, the Hero archetype is best represented through the essence of sacrifice. Whether it's putting the needs of others in front of your own, or simply taking the initiative to serve the greater good, you're always in the front of the line.</p>
            <p>That specific trait about you stems from your deep-seated instincts... Instincts that forbid you from retreating in the face of adversity. Instincts that prevent you from laying still in the face of injustice.</p>
            <p>Your archetype also suggests that there is a side of you that's relentless... Relentless in the sense of striving to improve yourself - whether it's your physical abilities, your mental fortitude, or your emotional resilience.</p> 
            <p>That being said, you're certainly an individual of impressive characteristics - characteristics that are unique to your archetype.</p>
            <h2 class='sub-header'>Selfless and Sacrificial Behind-The-Scenes</h2>
            <p>You seem to exercise selflessness in everything that you do... No matter how small or minuscule your actions appear to be, every decision that you make, no matter how small, is always for a purpose that serves others. And when it comes to making important and difficult decisions, you're assertive, firm, and steadfast.</p>
            <p>Your archetype also suggests that you're an individual of great empathy, and a strong sense of justice. You're intolerant when you encounter unfairness or corruption of any sort, and there's a burning desire that drives you to want to do all forms of prejudice.</p>
            <p>Your instinctive sense of righteousness is constantly pushing you to be better, to do more, and to try harder...</p>
            <p>You thrive on bravado and seek every opportunity to display your formidable sense of courage.</p>
            <p>Sometimes you might feel the need to prove your worth by performing courageous acts.</p>
            <p>However, these performances should not be mistaken as acts of vanity.</p>
            <p>Instead, you often have selfless goals that are directed towards improving the world and society.</p>
            <h2 class='sub-header'>Principled and Admirable</h2>
            <p>You invest the majority of your time into mastering skills and filling yourself with relevant knowledge that will put it in a favorable position to make a difference.</p>
            <p>Because of this, you're innovative when it comes to solving problems. You enjoy exchanging ideas, opinions, and fiddling with the latest inventions.</p>
            <p>You're an individual of great principles, character, and morals. Unlike the archetypes who tend to struggle with temptations and might struggle to differentiate between right and wrong, you always have a clear idea of what is virtuous.</p>
            <p>You are an individual who is incredibly grounded. You possess the unique ability to discern right from wrong, and you’re never afraid to put your foot down. You have a great deal to offer to this world.</p> 
            <p>You have a number of leadership qualities... Especially since you're someone who's self-aware, decisive, and somewhat stern. People find themselves calmed by your presence, knowing that they have someone reliable and dependable by their side.</p>
            <p>But that's not all there is to the Hero archetype... This is merely the beginning. As a Hero, you are  extremely protective of your loved ones.</p> 
            <p>You're not the most expressive person on the planet, but each of your loved ones holds a special place in your heart. You might a little bit too protective at times, but it definitely comes from a good place.</p>
            <p>Because of your innovative nature and high appetite for risk, you tend to achieve success with greater ease than others.</p>
            <h2 class='sub-header'>Serious and Intense</h2>
            <p>You're not the type of person to clown around - you'd very much prefer to invest your time and energy into productive tasks instead of looking like a fool.</p>
            <p>You see, you have a rather intense aura. That does not mean to say that it's a bad thing - after all, when it comes to getting things done, you'll always be on the top of everyone's lists.</p>
            <p>And yet, all is fair in the realm of Archetypes - where weaknesses can at times be strengths, and likewise, strengths too can quickly turn into weaknesses. And that applies to your archetype of the Hero as well.</p>
            <p>You see, despite your brave frontier, there are fears that reside within your archetype... Deep-seated fears that appear minuscule to others, but appear menacing to you.</p>
            <p>Your archetype tends to be fearful of having others perceive you incorrectly, or even misjudged. Your archetype tends to concern itself with its image... Constantly wondering about what others think of you, whether or not they take a liking to you...
            <p>An unhealthy obsession that prevents you from embarking on something new, or trying something that you've never tried before. You're usually fearful of becoming the object of ridicule or laughter... That stems from your fear that the strong, dependable impression that you've worked so hard to portray will crumble.</p>
            <p>Deep inside your archetype, beneath the bravado and seriousness, is a small part of you that just wants to be accepted and loved.</p>
            <p>Perhaps that might be why you concern yourself so much with appearances... Because without appearances, you're afraid that you'll lose your self-construed identity. That is perhaps, the greatest challenge that you must overcome.</p>
            <h2 class='sub-header'>The Hero's Abundance Secret</h2>
            <p>As a Hero, you have the tendency to be a little too critical about yourself - constantly pushing yourself to achieve new heights, gain new experiences, and explore everywhere that you've never been before. But, at the same time, you must understand that growth takes time.</p> 
            <p>You might not have all the time in the world, but it is paramount for you to exercise patience in order not to wear yourself out.</p>
            <p>Advancement and growth are products of both time and effort, and when you implement that to become a part of your life, your passage to fulfillment will be revealed to you... All in due time.</p>
            <p>Your personality has been constructed around entrepreneurial activities, which can lead you to immense financial wealth.</p>
            <p>You're also perceived as reliable role model and leader since you're always the first to step up when it comes to difficult tasks or choices that are hard to make.</p>
            <p>Your career revolves around coming up with new and creative solutions to tackle problems, which makes you a brilliant engineer and well-rounded designer.</p>
            <p>You will have to keep pushing your limits before you eventually discover your life’s purpose and direction. And that is something that you need to work towards with your archetype.</p>
            <p>That's where your calling resides. You want to live life for yourself, without limits. You want to be recognized and respected for who you are, while learning to be bolder with your impression.</p>";
            break;
        case "innocent":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/innocent.png' width='100px'>
            </div>
            <p>The Innocent archetype is best defined by its sheer positivity, enthusiasm, and optimism. They're able to interpret any situation in a perspective that's hopeful, encouraging, and infectious. If you're thinking that there's a lot more to the Innocent archetype than just that, you're exactly right!</p>
            <p>Individuals of the Innocent archetype, including you, tend to see the silver lining in every cloud and are constantly reminding themselves that there's virtue and a sense of goodness in everything, and every situation. You're always on the lookout for wisdom and lessons worth learning, no matter how painful your experiences get...</p>
            <p>You are able to interpret any situation in a perspective that's uniquely optimistic.</p>
            <p>You tend to see the silver lining in every cloud and you're constantly reminding yourself that there's goodness in everything. </p>
            <h2 class='sub-header'>Resilience and Inner Strength</h2>
            <p>Your archetype also suggests that there is a side of you that's relentless... Relentless in the sense of striving to improve yourself - whether it's your physical abilities, your mental fortitude, or your emotional resilience. That being said, you're certainly an individual of impressive characteristics - characteristics that are unique to your archetype.</p>
            <p>You seem to exercise selflessness in everything that you do... No matter how small or minuscule your actions appear to be, every decision that you make, no matter how small, is always for a purpose that serves others. And when it comes to making important and difficult decisions, you're assertive, firm, and steadfast.</p>
            <p>You're able to power through any challenge that's posed to you, simply by drawing strength from your unbreakable faith. For that reason, your endurance exceeds everyone else's.</p>
            <p>The Innocent archetype is such a joy to be around, and I have no doubt that your friends and loved ones will agree with this. Your  light-hearted and jovial nature makes you fun-loving, charismatic, and likable.</p> 
            <p>You try not to be serious most of the time, and you enjoy engaging in little things that will make someone else's day brighter. Whether it's pretending to laugh at a corny joke, applauding a predictable magic trick, you'd very much rather bless that person with positivity than put them down.</p>
            <p>And that's just a small piece of the puzzle that forms the entirety of the wonderful, angelic individual that you are. Unlike the archetypes who tend to struggle with hatred and animosity, you'd very much rather make friends than enemies. You're accepting, kind, and incredibly thoughtful.</p>
            <p>You might not be aware of this... But all of these personality traits lead to so much more. Your optimism makes you ferocious - like an unstoppable force.</p> 
            <h2 class='sub-header'>Infectious Positivity</h2>
            <p>You are an individual who's capable of finding joy in the smallest of things. Your perspective of the world is through that of a childlike lens - and you experience life at the purest level.</p> 
            <p>You are most likely the motivator of any social group or work setting. You always seem to know the right words to say, and at the right time. You have the unique talent of calming others with your presence, knowing that they have someone who's rooting for them by their side.</p>
            <p>But that's not all there is to the Innocent archetype... This is merely the beginning. As an Innocent, you are selfless - often putting your needs behind the needs of others.</p>
            <p>It's become abundantly clear that you'll experience the greatest amount of fulfillment and joy from pursuing a career that will allow you to motivate and bring out the best in others... A noble duty that grows in greater demand as society becomes more detached and emotionally disconnected.</p>
            <p>Beyond that, you have a profound understanding of the innerworkings of the human soul. Your empathetic nature allows you to comprehend what someone else is going through, and you always seem to know how to lead them out of the darkness.</p> 
            <p>In many ways, you're the beacon of hope that has and will touch the lives of many.</p>
            <h2 class='sub-header'>Struggles With Self-Belief</h2>
            <p>The Innocent archetype tends to struggle with coming out of its comfort zone. It's likely that you prefer to stay within the constraints of what you deem to be familiar. You must know, with your strengths and unique talents, you are definitely capable of more than you could ever imagine.</p>
            <p>You see, as an Innocent, it is vital for you to take up the challenge of stepping out of your comfort zone. Being surrounded with unfamiliarity will allow room for you, as an Innocent, to develop and improve yourself. It does not have to toe the lines of extremities - just small, little, progressive steps.</p>
            <p>Your archetype tends to be fearful of consequences, even though you have the capacity to power through anything that life throws at you, residing in your comfort zone for too long has made you fearful... Mistakes are part and parcel of life, and a life lived without mistakes does not equate to a fulfilled life.</p>
            <p>Understandably, it can be difficult for the Innocent to grow used to experiencing the pain of failure. And that fear in itself leads to a multitude of other challenges...</p>
            <p>You might tend to hold yourself back from seizing new opportunities, embarking on new ventures, or exploring unknown horizons... Things that could open doorways for you and reward you with new discoveries.</p>
            <p>Perhaps that might be why you concern yourself so much with the familiar... Because beyond the familiar, you're afraid that you'll lose your self-construed identity. That is perhaps, the greatest challenge that you must overcome.</p>
            <h2 class='sub-header'>The Innocent's Abundance Secret</h2>
            <p>You should be constantly jumping into new opportunities and discovering your path as it unfolds. That way, you’ll be able to continue to grow as a person, as an individual, and as an Innocent.</p>
            <p>Advancement and growth are not gifts that are bestowed upon you - they are the fruits of hard work and labor. And when you take action for your personal growth, your passage to fulfillment will be revealed to you... All in due time.</p>
            <p>You have no concern nor care for the monetary riches of the world.</p>
            <p>Instead, you're very much rather spend their time leading a simple and fulfilling life.</p>
            <p>Your lack of passion for financial gains should not be interpreted as a lack of wealth.</p>
            <p>Because to you, a joyful life is far more gratifying than a wealthy one. You would very much center your life around simplicity, happiness, and comfort.</p>
            <p>Based on your archetype, your sheer positivity and inner fortitude will form the foundation of your success - whether it's in your career, your love life, or your personal goals. And as long as you continue to act on new opportunities for personal growth, you will find the success that you’re looking for.</p>
            <p>If you truly wanted to seek financial wealth, you could tap into your inner strength.</p>
            <p>You're capable of being highly focused and diligent, given your sheer talent for endurance. You can be guaranteed that you will overcome all challenges in your way.</p>";
            break;
        case "jester":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/jester.png' width='100px'>
            </div>
            <p>The Jester archetype is blessed with astute, sharp, and quick-witted. That means that you are an individual who is able to approach a variety of topics from a myriad of perspectives. Despite your playful appearance and mischievous behavior, you are nimble and brilliant in your own unique way.</p>
            <p>You seem to be able to breeze your way through life, with your unconventional ideas, amusing comments, and hilarious interpretations. Naturally, you're often the life of the party. People enjoy being around you, because wherever you go, good times are bound to follow!</p>
            <p>Others might perceive you to be an individual who's more emotional because of your spontaneity... But, you are in fact, more intuitive and perceptive than you make yourself out to be. After all, your excellent sense of humor is constructed with creativity, and seasoned with your charisma. And that requires a certain caliber of incisiveness.</p>
            <p>Nothing pleases you more than experiencing emotions to the maximum.</p>
            <p>Your light-spirited nature prevents you from dwelling on problems and issues for long, allowing you to get over anything and everything at an accelerated rate.</p>
            <p>Virtually nothing can break you down or put your life on hold.</p>
            <h2 class='sub-header'>Charistmatic and Confident</h2>
            <p>Your archetype also suggests that you're a charismatic individual... There's just something about the way you speak, the way you portray yourself, that appears hypnotic... Alluring, even.</p>
            <p>People find themselves drawn to you because of your ability to spice up your conversations. And all of that just seems to come naturally to you, doesn't it? Your personable body language and outgoing attitude towards in life make you a sheer joy to be around.</p>
            <p>You're casual, easy-going, and free-spirited. You're the type of person who allows your imagination to run wild, conjuring the most ridiculous ideas and painting the silliest images in your head... An individual who simply doesn't take life too seriously.</p>
            <h2 class='sub-header'>An Idealist and Visionary</h2>
            <p>Amongst all the archetypes, yours is one of the few that's idealistic... And that's best illustrated through the inner workings of your unique mind and vibrant personality. You tend to daydream more than you actually do, but whenever you do see your ideas to fruition, great things always seem to happen.</p>
            <p>You breeze their way through life with your witty thoughts and quirky interpretations.</p>
            <p>Wealth might not be something you actively seek. But if you master the ability to manage their time, tap into your charisma and enthusiasm, financial success can come to you with relative ease.</p>
            <p>You're a performer and entertainer by nature, making you someone memorable and iconic.</p>
            <p>You try not to be serious most of the time, and you enjoy engaging in little things that make someone else's day brighter. Whether it's dropping one of your iconic one-liners or performing silly actions.</p>
            <p>You are an individual who's impressionable, cheerful, and intriguing. You seem to be able to blend into any social group, and you have a wide circle of friends.</p> 
            <p>People who cross paths with you have no trouble recognizing and remembering you. You're always able to bring smiles to the darkest of times, and your presence lights up the room.</p>
            <p>Your archetype also suggests that you're not the jealous or protective type - whether it's in relationships, friendships, or even as a parent. You hardly allow the actions of others to dampen your mood, and you prefer to be in complete control of your own emotions.</p>
            <h2 class='sub-header'>Living In The Moment</h2>
            <p>As a Jester, you center your life around one thing - living in the present. You live life according to your own rules, and that states that the past shall be forgotten, and the future shall hold no worries... An outlook on life that allows you to retain your high spirits.</p>
            <p>Beyond that, you have a profound understanding of what makes others tick. In a crowded room, you're constantly tapping into your analytical ability to dissect that crowd that surrounds you...</p>
            <p>In terms of your behavior around others, you tend to take things rather lightly - you avoid bringing up serious topics and you make it an effort to keep things casual. It seems that you're not someone that others would come to to pour their frustrations and share their troubles, and you'd certainly like to keep it that way.</p>
            <p>You see, your aura is one that's bright, and radiant. Your laughter is infectious, and you're simply the person that everyone wants to be around.</p>
            <p>This could lead you to discover unique opportunities.</p>
            <p>However, it's equally important that you act upon these opportunities and seize them quickly, before procrastination causes you to miss them.</p>
            <p>The Jester archetype tends to struggle with being serious. That is, of course, just part of who you are - as an archetype, and as an individual. However, you must know, that attribute about you also shapes the way that others perceive you, especially the people close to you.</p>
            <h2 class='sub-header'>The Jester's Abundance Secret</h2>
            <p>You see, as a Jester, it is vital for you to get in touch with your more serious side. That will be quintessential to your development as an all-rounded, balanced, and emotionally connected individual.</p> 
            <p>This is the first step towards learning to open yourself up to others, and in that process, you will learn to trust as well as earn the trust of others.</p>
            <p>Taking things a little more seriously once in a while will show people that there's a different side to you; a side that they'll appreciate since it isn't displayed often. </p>
            <p>At first, it might seem as if you're losing your sense of identity. But that could not be further from the truth. In fact, working on that aspect of your personality will, in fact, reveal a part of your identity that you never knew existed.</p>
            <p>Based on your other traits, you also seem to struggle with spending your time wisely. You're constantly procrastinating and putting things off until the very last minute.</p>
            <p>Perhaps it stems from your disinterest in anything mundane. Nevertheless, learning to prioritize your time will be your first step towards achieving more - more than you could possibly imagine.</p>
            <p>You have a profound understanding of the logic behind expectations, and fundamentally, your innermost thoughts are often pessimistic... Simply because you refuse to set yourself up for disappointments.</p>
            <p>There is power in positivity. There are great things to be learned from optimism - it's a form of energy in itself that has the potential to grant you fortitude and resilience... To weather out your potential challenges and difficulties. Embracing that will form a significant part of your calling in life.</p>
            <p>Nevertheless, there's no need to fret if financial riches aren't a part of your worries.</p>
            <p>The pursuit of wealth could just be a detour from your path to fulfillment.</p>
            <p>In that sense, money might not make you any happier than you are right now.</p>
            <p>Instead, you find the most joy in bringing smiles and laughter to those around you; and that's where your sense of wealth truly resides.</p>";
            break;
        case "lover":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/lover.png' width='100px'>
            </div>
            <p>The Lover archetype is one of profound sensitivity, and deep emotional connection. That means that you are an individual who experiences the extremities of all emotions. Your happiness is often an elation beyond description, while your pain feels like it can be excruciating and crippling...</p>
            <p>That stems from your ability to understand and experience life at heightened levels. Because of that profound connection that you share with feeling and sentiments, you have an extraordinary ability when it comes to reading people - that includes recognizing their emotions, understanding their circumstances, and being able to see right through their expressions.</p>
            <p>Your archetype revolves vastly around emotions, feelings, and sensuality. You have no qualms when it comes to opening up to others. In fact, you're even more than happy to do so.</p> 
            <p>Unlike other archetypes, the Lover is capable of experiencing life in a much richer and concentrated fashion. You appreciate the littlest of things and you're able to understand the underlying meanings of actions.</p>
            <h2 class='sub-header'>Engaging and Profound</h2>
            <p>People find themselves drawn to you because of your ability to engage in deep, thoughtful conversations. The bonds that you forge with others is often something they've never experienced before. Your deep understanding of feelings and approachable appearance makes you a warm and comforting presence to be around.</p>
            <p>You experience the most extreme ends of emotions, as your thoughts revolve vastly around feelings and sensuality.</p>
            <p>You have no qualms when it comes to opening up to others.</p>
            <p>In fact, you're even happy to do so. Unlike others, you are capable of experiencing life in a much richer and concentrated fashion.</p>
            <p>Amongst all the archetypes, yours has the greatest tendency to romanticize things... Whether it's your relationships, Not that it's a bad thing, of course. It's just a part of who you are. You're expressive as a person, and you're undivided with your attention.</p>
            <p>You tend to make an excellent listener... Unlike other archetypes, you never struggle when it comes to exercising empathy and understanding the emotions and feelings of others. That's because you seem to be slightly more introverted based on your nature.</p>
            <h2 class='sub-header'>Committed and Devoted</h2>
            <p>The Lover archetype is one that's deeply committed to the things and people that it cares about. You're always willing to go out of your way, and above and beyond to make someone feel special and appreciated.</p> 
            <p>And as you might have already guessed by now, even though you draw energy from being by yourself, you're a lot more people-oriented that you think.</p>
            <h2 class='sub-header'>Appreciative and Affectionate</h2>
            <p>You appreciate the littlest of things and you're able to understand the underlying meanings of actions.</p>
            <p>Your happiness comprises of elation beyond description, while your pain feels excruciating and crippling.</p>
            <p>Because of this, you understand emotions at a level that exceeds all else.</p>
            <p>You are an individual who's sensual, affectionate, and benevolent. Although you prefer to keep your circle of friends small, you invest a lot of time and attention into the relationships that you forge. People who cross paths with you often have a memorable impression, primarily because of your welcoming and pleasant demeanour. </p>
            <p>Your archetype also suggests that you're someone who's protective, whether it comes to your relationships or possessions. Anything that belongs to you is often kept in good condition, and that translates into your friendships and relationships as well.</p>
            <p>You form the deepest friendships and bonds with others, and you're able to see and understand things from various perspectives.</p>
            <p>Apart from that, you seem to have a discerning understanding of what it means to love - one that adopts a more philosophical point of view, and also, one that grants you special talents when it comes to empathy and affinity.</p>
            <p>In terms of your behavior around others, you tend to be a little bit more reserved, especially in larger groups. But, you excel impressively in when it comes to one-on-one interactions. That's where you feel the most comfortable, knowing that your voice can be heard, and you can forge a deeper, more personal connection.</p>
            <h2 class='sub-header'>The Lover's Abundance Secret</h2>
            <p>The Lover archetype tends to struggle with its need to be accepted. And that drives you to resort to extensive measures to impress others. And that's also indicative of a deeper fear that resides within you... The fear of being rejected, or alone.</p>
            <p>As a Lover, it's likely that you feel a void deep within you... A sense of emptiness or purposeless. Perhaps that could be from a lack of self-confidence, or a lack of self-esteem, which is why you tend to place so much emphasis on your relationships with others, and tend to neglect the relationship that you have with yourself.</p>
            <p>You have no qualms with giving everything that you have, including money.</p>
            <p>You find a deep sense of joy in giving to improve the way people see you.</p>
            <p>However, this can lead to them struggling monetarily since you tend to give way more than you receive.</p>
            <p>You’re at your happiest when you’re in a committed relationship; especially with someone who treasures you, nurtures you, and loves you for exactly who you are. Your faithfulness and trust are unquestionable, but if your trust is ever broken, you find it almost impossible to rebuild it.</p>
            <p>However, associating yourself too much with that one single aspect can make you lost sight of who you truly are. There is so much more to the Lover archetype. You tend to associate the successes and turmoils of your relationships with your self-worth.</p>
            <p>You create so much value for the people around you, and the world. You have so much to offer, and your path to fulfillment rests upon the valuable connections that you forge, and your ability to spread love and joy to others.</p>
            <p>Fortunately, your likability puts you at an advantage over others as you're well-perceived in work settings.</p>
            <p>This can lead to better opportunities as you're able to form strong bonds with co-workers and superiors.</p>
            <p>If you were to leverage your strengths and use them to your advantage, you could stumble upon an extraordinary amount of success.</p>
            <p>It's important to be cautious with this, as the line that separates manipulation and love is considerably thin.</p>";
            break;
        case "magician":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/magician.png' width='100px'>
            </div>
            <p>The Magician archetype is one that has forged deep connections with the universe... Amongst all the archetypes, the Magician is perhaps the most difficult to comprehend, and you're well aware of that. You have a strong, unbreakable belief in your dreams, abilities, and yourself.</p>
            <p>The Magician archetype is one of profound knowledge and intellect. You excel when it comes to deciphering patterns, breaking codes, and resolving problems. Your analytical ability and logical approach to everything makes you a reliable and efficient problem solver.</p>
            <p>That, however, also means that you have a tendency to be rather distant, even though you're able to recognize the most intricate details about people. You instinctively know who to trust, and who to look out for. Others might label you as judgmental or perhaps a little too critical, but your deductions are often, or almost always right.</p>
            <h2 class='sub-header'>Dedication To Growth</h2>
            <p>You have a strong belief in your dreams, your abilities, and yourself in general.</p>
            <p>You have a strange appreciation for pain, but not in the same way as a masochist. Your appreciation for pain stems from associating it with growth and advancement - an appreciation that pushes you forward.</p>
            <p>People find themselves drawn to you because of your ability to engage in deep, thoughtful conversations. The bonds that you forge with others is often something they've never experienced before.</p>
            <p>Your deep understanding of feelings and approachable appearance makes you a warm and comforting presence to be around.</p>
            <p>This puts you at a great advantage when it comes to achieving the things that you set your mind to. You're the type of person who reaches for the stars, and you have no intention of falling amongst the clouds.</p>
            <h2 class='sub-header'>Shrewd and Forward-Thinking</h2>
            <p>Amongst all the archetypes, the Magician is the most cunning and crafty... You're able to influence the decisions of others without them knowing. Your methodical when it comes to planning your steps, and you always seem to be one step ahead.</p>
            <p>You tend to make an excellent listener... But that trait of yours comes from knowing that information is power. You're slow to reveal your innermost thoughts... You're a firm believer of revealing just enough, but absorbing more than you need.</p>
            <p>The Magician archetype is one that also has the tendency to become manipulative and scheming. For the most part, you do exercise compassion and your heart's often in the right place. But it's also important to learn to be forgiving and patience...</p>
            <p>You are intuitive, knowledgable, and versatile. You have a wide variety of interests, but perhaps your greatest interest of all is learning.</p>
            <p>But the learning in question does not refer to academics - not even close. Whether it's finding out how certain things are made, or understanding why certain people are charismatic, you're just simply interested to know everything. That's all driven by your perpetual curiosity, and your talent in comprehending concepts quickly.</p>
            <h2 class='sub-header'>Versatile and Resourceful</h2>
            <p>There's something else about your archetype... You're also incredibly versatile. You're able to assume different roles according to different situations - very much like an actual magician, who has numerous tricks hidden in his sleeves.</p>
            <p>Perhaps the best way to illustrate this is within a team setting - you're able to fill up whatever role is left, and you're able to do it well.</p>
            <p>This unique attribute makes you a formidable force when it comes to implementing your ideas and voicing out your opinions.</p>
            <p>You're capable of performing miraculous feats in terms of things that they believe in.</p>
            <p>Your discipline puts you at an advantage when it comes to achieving your goals.</p>
            <p>There's no stopping you once you've set your sights on an achievement.</p>
            <p>As a Magician, you're actually a lot more nurturing than you think. You might appear to be a little bit emotionally detached on the outside, but when you're alone, you're actually someone who's warm, caring, and tender.</p>
            <p>And that translates into how well you're able to connect with others - an indicator of emotional stability.</p>
            <p>Apart from that,  it's likely that others often come to you for guidance and advice... That's because as a Magician, you're meticulous when it comes to examining the details of any given situation... Allowing you to determine underlying causes that are unbeknownst to others.</p>
            <h2 class='sub-header'>The Magician's Abundance Secret</h2>
            <p>The Magician archetype tends to struggle with its pride and expectations of others. And that often drives you to be dismissive, critical, and overly serious.</p>
            <p>But that's also indicative of a deeper fear that resides within you... The fear of failing others... And failing yourself</p>
            <p>As a Magician, your expectations are often set far too high. At times, your optimistic standards can be an excellent attribute - pushing you to greater heights...</p>
            <p>But that's not always the case. There are instances where you, or others, might fall short - and that's when you tend to experience frustration, disappointment, and helplessness.</p>
            <p>You must understand that life has so much more to offer, and people are not determined by their ability to meet your expectations - much less yourself. It will be impossible to avoid such setbacks entirely, but how you handle these upsets will determine the destination of your journey.</p>
            <p>Your unique ability to learn and master different sets of skills in a short span of time gives you the opportunity to monetize your abilities with little resistance.</p>
            <p>However, if you fail to apply yourself and simply watch the world pass you by, whatever talents and abilities you have will simply go to waste.</p>
            <p>It's important for you to exercise humility and realize the fact that not everyone is capable of adopting their level of concentration or their caliber of learning.</p>
            <p>You have an insatiable thirst for knowledge - constantly sourcing for new skills and learning opportunities to add to your already impressive arsenal of competencies.</p>
            <p>With those attributes in mind, you will certainly find fulfillment and enjoyment when you engage yourself in a career that allows you to assume a variety of roles... A position that forces you to apply yourself and your different talents.</p>
            <p>Apart from that, you also need to lower your expectations at times in order to better manage your emotions.</p>";
            break;
        case "member":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/member.png' width='100px'>
            </div>
            <p>The Member archetype is one of the most interesting and contributing archetypes in society... Essentially, the Members are the ones who form the building blocks of the world... The ones who subscribe and participate in great causes.</p>
            <p>As a Member, you are charismatic, empathetic, and principled.</p>
            <p>The Member archetype is one with that's exorbitantly talented in connecting and networking with others. You excel when it comes to making others feel comfortable, and creating links between people.</p>
            <p>You're able to motivate, drive, and inspire others to succeed. You instinctively know the right words to say, and you're able to somehow blend into different social groups, and social circles.</p>
            <p>But what really sets you apart is your passion for people. Whether it's your friends, co-workers, loved ones, or more often than not, even strangers.</p>
            <p>That seems to spring from your deep sensitivity to the emotions of others... A sensitivity that allows you to notice when someone feels shy, fearful, depressed - no matter how hard they try to hide it.</p>
            <h2 class='sub-header'>Perceptive and Receptive</h2>
            <p>It's a talent that cannot be explained by logic - but the best way to describe it is that you have a 'feeling' for feelings.</p>
            <p>People find themselves drawn to you because of your ability to engage in deep, thoughtful conversations. The bonds that you forge with others is one that's based on trust, understanding, and sincerity.</p>
            <p>Your deep understanding of feelings and approachable appearance makes you a warm and comforting presence to be around.</p>
            <p>This puts you at a great advantage when it comes to meeting and building relationships with people who can help you grow.</p>
            <p>As a Member, you thrive on interacting with the world - taking notice of everything that it has to offer... Its nature, its people, and its cultures.</p>
            <p>You offer balanced perspectives, always remembering that there are two sides to a story. That theme of harmony flows into your choice of words, and the decisions that you make.</p>
            <p>You have a knack for building rapport with different kinds of people from all kinds of backgrounds.</p>
            <p>Connecting with those around you allows you to forge the most reliable friendships and build the strongest amounts of trust, no matter how short-lived the relationship turns out to be.</p>
            <p>It's no wonder that you thrive on interacting with the world.</p>
            <h2 class='sub-header'>Charming and Inspiring</h2>
            <p>It's likely that you have a great number of friends - friends that you know you can trust and depend on. That's because your sincerity is almost always reciprocated.</p>
            <p>After all, kindness is a debt that can only  be paid forward - and in one way or another, it's always returned to its rightful benefactor.</p>
            <p>Apart from that, you're also an individual who's altruistic and charitable. You rarely shy away from opportunities to give - as long as you know that whatever you do is for a good cause...</p>
            <p>As a Member, you're realistic and modest when it comes to your goals. You prefer to take small steps, rather than large leaps - a more conservative approach that's both sound and sensible.</p>
            <p>And that translates into how well you're able to connect with others - an indicator of your high emotional quotient.</p>
            <p>Apart from that, it's likely that others often come to you for direction and encouragement...</p>
            <p>The Member archetype is uncanny when it comes to deciphering life lessons from sticky situations - translating them into golden nuggets of wisdom.
            <p>The words that you speak are often galvanizing, and that stems from your tactfulness.</p>
            <p>You have a strong sense of principle and always stick to your guns if you ever feel your virtues being challenged.</p>
            <p>The Member archetype tends to struggle with its concerns of being in the limelight And that often drives you to be less outspoken and slightly more timid.</p>
            <p>But that's also indicative of a deeper fear that resides within you... The fear of rejection.</p>
            <p>As a Member, you've grown used to listening to other people's problems that you become a bit more reserved when it comes to talking about your own.</p>
            <p>Perhaps there's a part of you that feels that it's burdensome to others, and you'd rather bear it all on your own.</p>
            <p>But that could not be further from the truth. People are almost always interested to know more about you, and that includes your frustrations, disappointments, and troubles.</p>
            <h2 class='sub-header'>The Member's Abundance Secret</h2>
            <p>You must forego the limiting belief that listening is all it takes, and be more open about sharing your personal circumstances and your ideas.</p>
            <p>This will allow you to tap into the strengths of your archetype, and really make full use of it to create even closer relations.</p>
            <p>You tend to disregard the importance of monetary riches. You'd very much rather concern yourself with the wealth of forming relationships with people around them.</p>
            <p>In that sense, you have an entirely different definition of wealth as compared to what others understand.</p>
            <p>Your likable natures put you in favorable positions when it comes to understanding people.</p>
            <p>This means that you're able to dissect exactly what their others want, and deliver it exactly the way it was asked for.</p>
            <p>You are a social chameleon by your own right - an emotionally intelligent individual who blends into social environments of all shapes and forms.</p>
            <p>You have a special talent for communicating, and breaking language barriers. You're curious about other's beliefs and cultures, and that curiosity is often rewarded with affinity and trust.</p>
            <p>Those personal strengths of your indicate something into your personality profile... They indicate that you will uncover fulfillment and joy from being active in a people-oriented role that will require you to do the things that you do best - influence, persuade, and motivate.</p>
            <p>You have the makings of an excellent leader. But you must remember to toe the lines of your comfort zone, and eventually, you will learn to break free from the chains of your self-inflicted limitations.</p>
            <p>It's likely that you'll find financial success in any profession that requires interaction and negotiation.</p>";
            break;
        case "outlaw":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/outlaw.png' width='100px'>
            </div>
            <p>The Outlaw archetype is notorious, free-minded, and free-spirited...  Nothing stands in your, way and nothing controls your desires. You are the true representation of what it really means to be the captain of your own ship.</p>
            <p>As an Outlaw, accountability to others makes you feel trapped, and that's why you prefer to answer to no one. </p>
            <p>The Outlaw archetype is one that tends to go against the grain. You're often challenging the rules and conventions of societal expectations and governmental control.</p>
            <p>You're able to speak with conviction about the things that you're passionate about, and that often includes ultimate freedom and rebelling against authority.</p>
            <p>The Outlaw archetype, unlike other archetypes, is one that talks the talk, and walks the walk. Your actions and decisions are often reflective of and juxtapose to your personal beliefs.</p>
            <h2 class='sub-header'>A Protector and Visionary</h2>
            <p>That seems to spring from your profound connection to people and things that are lost and forgotten... A connection that ignites a spark in you to create massive change in society - to actualize your vision of a new world.</p>
            <p>Despite your edgy and intense mannerisms, deep down, you're actually someone who's both passionate and compassionate.</p>
            <p>People find themselves drawn to you because of your thought-provoking insights that spur deep, thoughtful conversations. That's because you're always on high alert when it comes to social issues, injustice, inequality, or practically anything that screams unfairness.</p>
            <p>You do have vigilante tendencies... If given the chance to take matters into your own hands, you would not blink twice. That, however, sometimes lands you into trouble.</p>
            <p>You are the defender of the weak; the one to stand up against bullies, to restore power to the people, and bring justice to those who stole it from them.</p>
            <p>As an Outlaw, you despise systems and all that's attached to it - forming the foundation of your rebel heart, and your formidable spirit.</p>
            <h2 class='sub-header'>Confident and Passionate</h2>
            <p>Your stance is grounded with conviction, and you have no qualms with putting naysayers in their place. And that conviction is articulated with your passion for the helpless and the hopeless.</p>
            <p>In more ways than one, you have a strong sense of mission - an agent of change, if you will. That stems from your firm belief in the fact that everyone is born equal. And you will do whatever it takes to make it so.</p>
            <p>The Outlaw archetype has a deep-seated connection to the feeble and forgotten. You represent their voice, as well as the need for change in the world.</p>
            <p>You are free-minded and free-spirited.</p>
            <p>What you see is what you get with you. There are no hidden sides to you, unlike the other archetypes. That does not mean to say that your archetype is one-dimensional, but it means that you're someone who's rooted in your character and principles, and you're certain about your identity.</p>
            <p>Although you portray yourself as someone relentless and tough, there is a big part of you that's filled with kindness and gentleness - a trait that really shows in your interaction with your love for the people in need of help.</p>
            <p>Your extreme personality attracts others who are like-minded and share the same sentiments. There's likely only a limited number of people that you choose to spend most of your time with.</p>
            <p>That's because you're intolerant of bigotry, selfishness, and the slightest hint of a discriminatory tone.</p>
            <h2 class='sub-header'>Courage and Authenticity</h2>
            <p>As an Outlaw, you're brave and fearless when it comes to standing up for your beliefs and principles. You could not care less about being judged by others, as long as you stay true to yourself.</p>
            <p>And that translates into the respect that your peers have for you - a representation of your vigor and zeal for living life to its fullest, and leaving it better than when you first found it.</p>
            <p>The Outlaw archetype is driven and motivated by good intentions. Even though others might not understand your intense ideas and uncompromising perspectives, you know for a fact that your heart is in the right place.</p>
            <p>The words that you speak are often inspiring to like-minded individuals, and that stems from your leadership qualities.</p>
            <p>In terms of your behavior around others, you have a boisterous and noticeable presence. Perhaps it's from your choice of clothing or your aura that exudes confidence and boldness.</p>
            <h2 class='sub-header'>The Outlaw's Abundance Secret</h2>
            <p>The Outlaw archetype tends to struggle with learning to trust others. And that often forces you to be cynical, skeptical, and suspicious of other's intentions.</p>
            <p>It's likely that you find the same questions repeating in your head... About someone else's ulterior motives, about someone else's phony and artificial beliefs, about someone else's trustworthiness as a whole.</p>
            <p>That fear of yours originates from a deeper fear that resides within you... and that is your fear of being vulnerable.</p>
            <p>Perhaps past experiences of betrayal have made you wary of trusting others. However, trust is an important element in life, and an element that you must learn once more in due time.</p>
            <p>It is important for you to learn to be vulnerable and to learn to be hurt - it is through that that you will learn to be stronger, better, and more fulfilled.</p>
            <p>This will allow you to tap into the strengths of your archetype, and really make full use of it to create valuable relationships with people. And in such, you will not feel as alone.</p>
            <p>You're a natural skeptic of the world around you, and you're constantly questioning the intentions behind organizations and individuals.</p>
            <p>You do, however, need to understand that it’s important for you to combat your cynicism by being more emotionally connected. That way, you’ll be able to build trust and create even more fruitful interactions.</p>
            <p>You may have past memories of hurt and betrayal, but through the act of forgiveness, you will soon experience the true, unadulterated freedom that you seek.</p>
            <p>Financial struggles might be the least of your worries, but that's not because you have plenty of it; it's simply because you have no care for it.</p>
            <p>You would very much rather grow your own crops and be completely self-sufficient than depend on societal expectations and systems for survival.</p>";
            break;
        case "ruler": 
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/ruler.png' width='100px'>
            </div>
            <p>The Ruler archetype is best defined by its innate ability to lead. While others tend to avoid playing the role of a leader, Rulers are absolutely comfortable with volunteering to take charge.</p>
            <p>It's important to note that it's not the desire to lead that defines the Ruler archetype, but the actual quality of leadership that you are able to administer.</p>
            <p>The Ruler archetype is best illustrated through the decisions that you make. You are often fair, just, and honorable.</p>
            <p>You're able to manage the expectations of others and grant direction towards maintaining order amongst your friends and various groups of people.</p>
            <p>But what really sets you apart is your passion for power and authority... Control is the one thing that you sought after the most, and also the one thing that you find the most fulfilling.</p>
            <p>Everything that you do is always somehow related to either gaining, maintaining, or even exercising control.</p>
            <h2 class='sub-header'>Enterprising and Far-sighted</h2>
            <p>As a Ruler, you thrive on creating reliable systems for others to follow.</p>
            <p>Your stance is grounded with conviction, and that conviction is articulated with empathy, kindness, and a giving heart.</p>
            <p>Your visions are what drive you and motivate you to live life to its fullest. And you refuse to rest until you see your visions through.</p>
            <p>You feel responsible for the others around you - whether they're your friends, co-workers, or even your loved ones. That sense of responsibility pushes you to lead them by example. And that's what ultimately separates you from the wannabes.</p>
            <p>You yearn for power. It's the attribute that you sought after the most, and also the one that you find most fulfilling.</p>
            <p>Everything that you do is always somehow related to either gaining, maintaining, or even exercising control.</p>
            <p>You leverage your leadership qualities to attain higher personal goals, be it for your family, friends, or your community.</p>
            <p>You might not have a specific expertise or an actual skill set, but as a generalist, you do possess excellent management abilities.</p>
            <h2 class='sub-header'>Inclined To Take Charge</h2>
            <p>You're able to delegate and direct others with positive certainty - and that's what makes others willing to follow.</p>
            <p>You're not one to shy away from the limelight - being the center of attention comes naturally to you.</p>
            <p>Your keen eye for detail ensures that whatever you set out to do is meticulously executed with precision.</p>
            <p>Apart from that, you're also an individual who's welcoming and open - especially to people who you trust. You rarely shy away from opportunities to play the role of a listening ear, and you feed off information from others to make sincere and unbiased choices.</p>
            <p>You have the habit of overestimating your abilities, resulting in you biting off more than they can chew.</p>
            <p>Not to mention that your need for control might prevent you from seeking help from others.</p>
            <p>There are times where taking such risks can make your efforts worthwhile, but over the long term, failing to delegate could eventually break you.</p>
            <h2 class='sub-header'>Unafraid to Fail</h2>
            <p>As a Ruler, you're gallant and audacious when it comes to taking massive action. Whether it's embarking on an unfamiliar personal journey or putting a new idea to the test, you're swift to move.</p>
            <p>Unlike other archetypes, you're not one to fear failure - you have a thorough understanding of failure, realizing that it's the next step towards greatness. In fact, you welcome it with open arms.</p>
            <p>You are not afraid to make difficult and unpopular decisions. When you have to put your foot down, you do not hesitate.</p>
            <p>That's because you're willing to put your reputation and image at stake for the sake of your values, and for the good of others.</p>
            <p>In terms of your behavior around others, you tend to be a little bit careful with your choice of words. You prefer to keep yourself censored, and you're always looking for the most politically correct way of putting things.</p>
            <p>You're fully aware that your words have the capacity to hurt or help others, and you'd very much prefer to use them with good intentions.</p>
            <p>The Ruler archetype tends to struggle with spreading itself too thin. At times, it might feel like you're needed everywhere all at once. It's likely that thoughts of cloning yourself or splitting yourself in half have crossed your mind.</p>
            <p>That challenge often stems from your refusal to seek help from others, perhaps from a lack of trust in the people around you.</p>
            <p>It originates from a deeper fear that resides within you... and that is your fear of losing control.</p>
            <h2 class='sub-header'>The Ruler's Abundance Secret</h2>
            <p>Perhaps your obsession with retaining power can at times be unwarranted, or even unnecessary - a self-inflicted belief that has convinced you that power is something that needs to be protected.</p>
            <p>It is important for you to realize that a lack of trust does not resonate well with others, and they do see it as well.</p>
            <p>You are an excellent mediator when it comes to managing expectations – those from yourself, and from others. You’re always able to maintain order through your sense of understanding what people want.</p>
            <p>This can be applied to both your personal and work relationships.</p>
            <p>Your talents in discerning right from wrong allows you to concoct fair solutions that are beneficial to all parties involved.</p>
            <p>Your calling in life will revolve primarily around those traits. As long as you're able to be in a position where you're able to make fair decisions and provide others with direction, you will find the fulfillment that you seek.</p>
            <p>But you must always remember that your sense of self-worth is not determined by your ability to lead or to rule. In fact, it is important for you to disassociate it completely from your identity.</p>
            <p>In eventuality, that is the true calling that you must answer to.</p>
            <p>Your leadership qualities are widely sought after across various industries and your charisma helps you to make a lasting and astounding impression.</p>";
            break;
        case "sage":
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/sage.png' width='100px'>
            </div>
            <p>The Sage is highly dedicated when it comes to seeking two things: knowledge and wisdom. That's what forms the foundation of the Sage archetype - it's what it lives for, and what it thrives on.</p>
            <p>Practically everything that you experience in life is a lesson for you, as you're able to identify the obscure meanings behind every event, occurrence, and setback.</p>
            <p>The Sage archetype is the wisest of all the archetypes. Your inherent wisdom is derived from your acute observations and vast experiences of the world.</p>
            <p>This inner sense of wisdom is motivated by your curiosity of everything that life has to offer - its experiences, and its philosophies. To you, life in itself is a lifelong lesson; one that has no ceremonies or graduations - rather, a perpetual cycle of learning.</p>
            <p>But what really sets you apart is your wonder for the truth about everything. You’re deeply intuitive and introspective, and you're constantly applying and enriching yourself throughout the course of your life.</p>
            <h2 class='sub-header'>Ethics and Morals</h2>
            <p>You keep your principles and values close to your heart, and you're an advocate of mutual respect, peace, and harmony.</p>
            <p>Although you have the desire to attain knowledge, there are instances where you prefer to listen to your own intuition.</p>
            <p>You have a profound understanding of the world, and there is a unique part that exists within you... A part that believes that intuitive thinking is often more reliable than logic processing.</p>
            <p>It's more than likely that you are an individual who has a deep interest in the spiritual world - an intangible dimension that exists beneath the layer of life.</p>
            <p>Others find themselves drawn to you because of your wisdom, insights, and prudence. This translates into your behavior in front of others, as your words are carefully selected.</p>
            <p>Needless to say, the Sage is representative of a progressive world and an enlightened life.</p>
            <p>You are highly dedicated when it comes to seeking knowledge and wisdom.</p>
            <p>You are also an individual who enjoys reading - whether it comes in the form of books, articles, or newspapers. You're not typically interested in a single subject, but you enjoy reading things of different genres, natures, and mediums.</p>
            <h2 class='sub-header'>A Seeker of Answers</h2>
            <p>Your curiosity is what contributes to your vast pool of knowledge, but that is not what ultimately defines you as a Sage.</p>
            <p>What really sets the Sage apart from the rest of the archetypes is its dedication to a higher sense of self - a journey of discovering experiences, and living life at a level beyond the comprehension of others.</p>
            <p>Practically everything that you experience in life is a lesson for you, as you're able to identify the obscure meanings behind every event in your life.
            <p>You are highly intuitive and self-reflective.</p>
            <p>You take lies very personally and feel emotionally affected when you discover that what you learned or believed in turns out to be wrong.</p>
            <p>You are wise, perceptive, and incisive.</p>
            <p>The people around you often come to you for detailed advice, guidance, and direction.</p>
            <h2 class='sub-header'>An Old Soul With Sound Advice</h2>
            <p>You're able to offer valuable insights into the situations of others, and you're somehow able to predict the outcomes of certain situations.</p>
            <p>It's also because you're patient and nurturing. You're able to connect with the people around you at a sincere, heartfelt, and profound level.</p>
            <p>That's also representative of the intimate connection that you have with people - you're often able to read people accurately, and see them for who they truly are.</p>
            <p>After all, you are a wise soul that’s overflowing with knowledge and wisdom. People notice that about you, and that's why people are often drawn to you.</p>
            <p>You're often sensible when it comes to managing your finances, which means that you're rarely placed in a position where you have to worry about money.</p>
            <p>Your quest for knowledge allows them to master a wide array of skills.</p>
            <p>The Sage archetype tends to struggle with procrastinating action. At times, your obsession with chasing truths prevents you from acting upon your inner convictions.</p>
            <p>That challenge arises from your focus on details - an endless pursuit that consumes too much of your time and attention.</p>
            <p>It originates from a deeper fear that resides within you... and that is your fear of being wrong.</p>
            <p>As a Sage, you are afraid of being misled or feeling ignorant. And at times, that stops you from taking action, because taking action makes something real. And when something becomes real, you run the risk of being wrong.</p>
            <h2 class='sub-header'>The Sage's Abundance Secret</h2>
            <p>It is important for you to realize that mistakes are part of being human - they are unavoidable; an inevitable part of existence. But when you do learn to embrace them, you'll discover that there's so much more to learn from being active as opposed to being passive.</p>
            <p>You do, however, tend to learn without applying.</p>
            <p>This means that your skills are often merely theoretical and haven't been put into practice.</p>
            <p>If you truly wanted to achieve financial success, it's important for you to translate your knowledge into action, which is what will ultimately create tangible results.</p>
            <p>As a Sage, you're supportive and accepting of people of different backgrounds and beliefs - that trait of yours is resemblant of your people-oriented nature.</p>
            <p>Although, you do prefer to keep to yourself, and you're not always out-spoken. You are, however, more than willing to provide others with answers and advice when prompted.</p>
            <p>In more ways than one, you are an investigator of truths. And when you aspire to discover the truth, you always somehow manage to find it.</p>
            <p>That's because you're focused on the reality of things.</p>
            <p>In terms of your behavior around others, you are composed, modest, and self-assured. There is a sense of calmness that's projected through your presence.</p>
            <p>Although you speak few words most of the time, the words that you speak are often impactful and well-informed.</p>
            <p>There's only so much that knowledge you can acquire, and there's a completely different spectrum of it that's yet to be explored.</p>";
            break;
        default:
            echo "
             <div class='archetype-icon'>
                <img src='../img/icons/caregiver.png' width='100px'>
            </div>
            <p>You are a compassionate altruist whose selflessness comes unparalleled.</p>
            <p>You're always willing to help the people around them, be it friends, strangers, or sometimes even foes. Your generosity inspires everyone around them and fills receivers with an immense amount of gratitude.</p>
            <p>You are an individual who possesses great capacities of love... An individual whose sole purpose is to give large chunks of yourself to others.</p>
            <p>That being said, you truly are a unique individual... And needless to say, the world certainly needs more people like you.</p>
            <p>And despite your seemingly simple appearances, you're definitely a whole lot smarter than you make yourself out to be. In other words, because of your archetype, there's no doubt that you possess a profound level of intelligence...</p>
            <p>...A level of intelligence that is not merely limited to academics.</p>
            <p>But... Because of your humble and mild-mannered nature, you'd very much prefer to hide that specific trait about you.</p>
            <p>You'd very much rather be underestimated than overestimated, isn't that right?</p>
            <h2 class='sub-header'>High Levels of Intuitive Abilities</h2>
            <p>You're also deeply sensitive when it comes to other's emotions - your emotional quotient amongst the highest in the archetypes... Allowing you to experience the pains, struggles, and happiness of others...</p>
            <p>Your selflessness comes unparalleled. You're always so ready to give to others - whether it's in the form of time through volunteering, in the form of money through donations, or even in the form of simple acts of love through listening to another's sorrows.</p>
            <p>And unlike others, you're not picky when it comes to who you choose to give to. It doesn't matter to you, does it? Whether it's giving to loved ones, acquaintances, and oftentimes, even strangers.</p>
            <p>You might not be aware of this... But your generosity does not go unnoticed. In fact, it inspires and encourages literally everyone around you.</p>
            <p>Your archetype has a magnetizing personality... One that draws respect and admiration from your friends and loved ones.</p>
            <p>It's no wonder that people are always looking towards you whenever they need a listening ear.</p>
            <p>And unlike other archetypes, you're not one to have massive circles of friends. But that does not mean to say that you have trouble with making friends.</p>
            <p>In fact, it's quite the contrary. The other archetypes often find themselves drawn to your calm and tender presence.</p>
            <p>You are, however, a little bit selective when it comes to who you choose to let into your life.</p>
            <p>You prefer to keep your loved ones close, and your circle of friends small.</p>
            <h2 class='sub-header'>A Compass To Those Around You</h2>
            <p>Amongst the people who know you best, you're often seen as a parental figure... Someone that they look to for guidance and advice.</p>
            <p>This gives rise to your natural inclination to teach others, as you draw energy from imparting knowledge to those around you.</p>
            <p>Caregivers often find the greatest amounts of fulfillment in careers that involve a lot of teaching and guiding, and nurturing.</p>
            <p>Despite your mild-mannered character, there's a fierceness that resides deep within you. A fierceness that's only revealed when you have to protect the people you care deeply about - especially your children.</p>
            <p>You're willing to give everything and anything it takes to keep them safe from harm.</p>
            <p>It's absolutely vital to understand that your giving nature prevents you from pursuing monetary riches.</p>
            <p>In fact, it's likely you don't derive satisfaction from attaining material riches.</p>
            <p>Instead, what truly gives you joy is helping the people around you. It's through giving that you experience gratification.</p>
            <p>Now, that doesn't necessarily mean that you will never be financially free.</p>
            <h2 class='sub-header'>The Caregiver's Abundance Secret</h2>
            <p>You can leverage your giving nature to expand your networks, which is arguably one of the most vital components when it comes to attaining success.</p>
            <p>There are endless opportunities for you to showcase your talents in management.</p>
            <p>Your innate people skills put you at a strong advantage over others.</p>
            <p>Remember, you shine the brightest during one-to-one interactions, which can primarily be attributed to your magnetic personality and your ability to form close interpersonal connections with friends and strangers.</p>
            <p>It's highly important for you to not just form strong networks, but to seize the opportunities that come with them.</p>
            <p>After all, success comes from acting and not merely thinking.</p>";
        }
        ?>
            <p>Now, <?php echo $_GET['name'];?> - knowing your archetype's merely one piece to the massive puzzle of self-discovery.</p>
            <p>The caveat here is knowing what to do with that information.</p>
            <p>In a moment, I'd like to share with you about your Masculine and Feminine Energies, and how it could be hindering you from living the life of your deepest desires..</p>
            <button class="btn next-btn step3">Click Here To Learn About Your Anima and Animus <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>   
        </div>
        <div class="step3-reading">
            <h2 class="sub-header">Your <?php echo $_GET['gender'];?> Could Be Working Against Your <?php echo $_GET['archetype'];?> Instincts</h2>
            <?php
              switch (strtolower($_GET['gender'])) {
                  case "anima":
                      echo "
                      <img src='../img/anima.png' class='img-mid'>
                      <p>The Anima refers to the female dimension within the male's unconscious psyche. As an idea about what it means to be a woman, the concept of the Anima is present in the male. Literally, it translates to life or soul, symbolizing the unifying nature of the female energy.</p>
                      <p>In other words, the Anima is the male’s feminine energy. And with that, this energy is often perceived as the Eros or the male’s ability to exhibit feminine characteristics comprised of union, love, and emotion.</p>";
                      break; 
                  case "animus":
                      echo "
                      <img src='../img/animus.png' class='img-mid'>
                      <p>The Animus pertains to the male dimension within the female unconscious psyche. Referring to an idea about what it means to be a man, the concept of the Animus is known to be present in the female mind. Literally, it translates to mental power, intelligence, or the rational soul.</p>
                      <p>In other words, the Animus is the female's masculine energy. Often relating to Logos which means reason or logic, the Animus is presumed to be responsible for the rationalistic tendencies that are present in women.</p>";
                      break;
                  default:
                      echo "
                      <img src='../img/anima-animus.png' class='img-mid'>
                      <p>The Anima refers to the female dimension within the male's unconscious psyche. As an idea about what it means to be a woman, the concept of the Anima is present in the male. Literally, it translates to life or soul, symbolizing the unifying nature of the female energy.</p>
                      <p>In other words, the Anima is the male’s feminine energy. And with that, this energy is often perceived as the Eros or the male’s ability to exhibit feminine characteristics comprised of union, love, and emotion.</p>
                      <p>The Animus pertains to the male dimension within the female unconscious psyche. Referring to an idea about what it means to be a man, the concept of the Animus is known to be present in the female mind. Literally, it translates to mental power, intelligence, or the rational soul.</p>
                      <p>In other words, the Animus is the female's masculine energy. Often relating to Logos which means reason or logic, the Animus is presumed to be responsible for the rationalistic tendencies that are present in women.</p>";
              }  
            ?>
            <p>Whenever our masculine and feminine balances are out of sync, everything else starts working against us... No matter how aligned we are to our purpose.</p>
            <p>And that appears to be exactly what's taking place in your life right now, <?php echo $_GET['name'];?>.</p>
            <p>The masculine and feminine imbalances of your <?php echo $_GET['archetype'];?> archetype aren't resonating well with your <?php echo $_GET['gender'];?>, creating dissonance and uncertainty.</p>
            <p>It feels as if your intuition and intellect are constantly working against one another, and that muddles your judgment.</p>
            <p>That explains why you might find yourself...</p>
            <p>...Suppressing your emotions...</p>
            <p>...Feeling inadequate...</p>
            <p>...Lacking confidence...</p>
            <p>It all boils down to the disconnect between your <?php echo $_GET['gender'];?> and the natural instincts of your <?php echo $_GET['archetype'];?> personality.</p>
            <p>And the sooner you resolve this imbalance, the sooner abundance, meaning, and joy will find its way into your life as you embrace your complete harmony.</p>
            <p>Now that you've a deeper understanding of your Anima and Animus, I'd like to show you how it applies to your current stage of life.</p>
            <p>Your Stage of Life has a massive impact on what you have to do next in order to attain the abundance and happiness you deserve.</p>
            <p>Naturally, as you near the maturity of your Stage of Life, what you must do will defer vastly from someone lacking the wisdom you possess.</p>
            
            <button class="btn next-btn step4">Click Here To Learn About Your Current Life Stage <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>   
            </div>
                
            <div class="step4-reading">
            <!-- Stages Of Life section /make dynamic based on age -->
            <h2 class="sub-header">Your Current Stage Of Life Is The <?php echo $_GET['age'];?></h2>
            <p>The stages of life are categorized into 4 segments: The Athlete Stage, The Warrior Stage, The Statement Stage, and The Stage of the Spirit.</p>
            <p>Now by taking a look into your personality construct and the energies of your <?php echo $_GET['gender'];?>, it's likely that you're currently going through the <?php echo $_GET['age'];?>.</p>
            <p>Here's a bit of what it looks like.</p>
                
            <?php
                switch (strtolower($_GET['age'])) {
                    case "athlete stage":
                        echo "<p>The Athlete Stage is the state of the unknown.</p>
                            <p>You're not yet confident or certain of what you're really good at, or where your place is in this world for that matter.</p>
                            <p>Or at the very least, you're not certain whether your strengths and talents will translate into the abundance and wealth you desire.</p>
                            <p>And so you keep circling back to the same cliché question, 'who am I?'</p>
                            <p>It's a slippery slope that's difficult to climb out of - especially without the right tools.</p>
                            <p>Because your consciousness hasn't evolved into the much needed, impeccable level of self-awareness you need to break free from old habits.</p>";
                    break;    
                    case "warrior stage":
                        echo "<p>The Warrior Stage is like being in a state of limbo, being constantly torn between uncertainties.</p>
                            <p>You might subconsciously look at the achievements and possession of those around you with a bit of envy.</p>
                            <p>And the question that bogs your mind tends to revolve around, 'how can I be better off than others?'</p>
                            <p>It's a slippery slope that's difficult to climb out of - especially without the right tools.</p>
                            <p>Because simply put, your thought patterns and behaviors are focused on the wrong areas.</p>    
                            <p>Making it incredibly hard to break free from old habits.</p>";
                    break;
                    case "statement stage":
                        echo "<p>The Statement Stage is the state between awareness and incompleteness.</p>
                            <p>Incomplete, meaning you've checked a number of boxes: purpose, direction, meaning - you're certain of who you are, and you're ready to make a lasting impact.</p>
                            <p>But at the same time, you feel like there's still that missing piece.</p>
                            <p>And despite all the pondering and wondering you're doing, no matter how hard and how deep you look inside yourself...</p>
                            <p>That missing piece is... Well, missing.</p>
                            <p>In other words, you're satisfied - but not yet full.</p>
                            <p>Which explains why you find yourself actively seeking abundance, but not yet passively attracting it.</p>";
                    break;
                    default:
                        echo "<p>The Warrior Stage is like being in a state of limbo, being constantly torn between uncertainties.</p>
                            <p>You might subconsciously look at the achievements and possession of those around you with a bit of envy.</p>
                            <p>And the question that bogs your mind tends to revolve around, 'how can I be better off than others?'</p>
                            <p>It's a slippery slope that's difficult to climb out of - especially without the right tools.</p>
                            <p>Because simply put, your thought patterns and behaviors are focused on the wrong areas.</p>    
                            <p>Making it incredibly hard to break free from old habits.</p>";
                }
            ?>
            
            <h2 class="sub-header">Your Life Stage Directly Impacts Your Destiny</h2>
            <p>Imagine waking up one day, and realizing your level of abundance exceeds all possessions and desires.</p>
            <p>Imagine what it's like to understand fully what it means to be a spiritual being having a human experience (and not a human having a spiritual experience).</p>
            <p>Imagine being at the pinnacle of wisdom, wealth, and purpose... As every single one of your yearnings and aspirations materializes in your life.</p>
            <p>Everything naturally falls into place when you're in the fabled <strong>Stage of the Spirit.</strong></p>
            <p>It might sound surreal and a little out of this world...</p>
            <p>But the same exact abundance principles have existed since the very beginning of time.</p>
            <p>And that is the very goal of Archetypal Integration - to guide you to the "Stage of the Spirit".</p>
            <p>As soon as you enter the Stage of the Spirit, you'll possess the certainty and confidence to navigate your life with grace and good fortune - effortlessly.</p>
            <p>Now, elevating from the <?php echo $_GET['age'];?> to the Stage of the Spirit doesn't simply happen overnight. It's a path laden with challenges, and one you shouldn't approach lightly.</p>
            <p>The good news is, your timing could not have been more perfect.</p>
            <button class="btn next-btn step5">What Does All Of This Mean For Me? Click here To Find Out <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
            </div>
            
            <div class="step5-reading">
            <h2 class="sub-header">The Interval of Elevation</h2>
            <p>Do you feel it, <?php echo $_GET['name'];?>?</p>
            <p>That sudden surge of energy. The presence of a life-changing moment. A spark of divine inspiration.</p>
            <p>A small interval of time has opened up for you to align your path to your undiscovered talents, harmonize your anima and animus, and watch yourself rise into your Stage of the Spirit.</p>
            <img src="../img/interval-of-elevation.png" class="img-mid">    
            <p>All of which is a result of your <?php echo $_GET['archetype'];?> archetype undergoing the <?php echo $_GET['age'];?>.</p>    
            <p>It's all hinting at your Interval of Elevation. And it's already taking place.</p>
            <p>This destiny-altering shift is the exact period where you must listen to your intuition very carefully, and pay close attention to the guidance I've outlined in this reading.</p>
            <p>If you listen carefully, the balance of your energies can be restored during this rare occurrence, and all those suppressed emotions and feelings of inferiority will dissipate.</p>
            <p>Of course, this ripples out into even more magnificent changes...</p>
            <ul class="tick-list">
                <li>Having more valuable, wealth-generating opportunities fall into your lap</li>    
                <li>Being rewarded for (and driven by) your passions and purpose</li>
                <li>Knowing what exact pitfalls and challenges lay ahead of you so you can completely steer away from them</li>
                <li>Recognizing your path to abundance through your hidden strengths and unknown talents</li>
                <li>Forging meaningful and highly compatible romantic and personal relationships</li>
            </ul>
            <p>As you can already tell, this is your moment to seize your long-awaited and much deserved abundant breakthrough.</p>
            <p>Your Interval of Elevation is influencing your life in a very impactful and positive way - numerous opportunities for wealth, romance, luck...</p>
            <p>This is an exciting time for you, <?php echo $_GET['name'];?>. This is your pivotal moment; the archetypal climax of your narrative... Your turning point.</p>
            <p>And it's absolutely crucial that you maximize and stretch your potential during this Interval of Elevation.</p>
            <button class="btn next-btn step6">Click Here Now And Discover How To Maximize Your Interval of Elevation <i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
            </div>
                
            <div class="step6-reading">
            <h2 class="sub-header">Align Your Purpose and Prepare For Miracles</h2>
            <p><?php echo $_GET['name'];?>, we've gone into great depth about your true personality and current state.</p>
            <p>And as you've learned, you are primed for the upcoming miraculous changes.</p>
            <img src="../img/interval-of-elevation-2.png" class="img-mid">        
            <p>All you have to do is align your path to your undiscovered talents, and your hidden potential will be unleashed.</p>
            <p>That means perfectly maneuvering your way through seemingly impossible obstacles...</p>
            <p>...Pursuing a rewarding career that's aligned with your innate <?php echo $_GET['archetype'];?> strengths...</p>
            <p>...Maximizing deeper and more compatible relationships by harmonizing your anima and animus...</p>
            <p>...Being rewarded with financial abundance for doing what you love...</p>
            <p>...Living a life of complete confidence in your decisions and direction...</p>    
            <p>However, it is important that you anchor and align your purpose with your hidden strengths and talents...</p>
            <p>As this will equip you with the confidence and certainty to tackle both opportunities and challenges that shall come your way.</p>
            <p>And of course, ensure you don't get overwhelmed by all that pressure, or even worse, stuck.</p>
            <p>With your Interval of Elevation working in your favor, now is the optimal time to translate these new discoveries into impactful action.</p>
                
            <h2 class="sub-header">Don't Succumb To Old Patterns</h2>
            <p>Now, as wonderful as your timing is, you must be made aware that your Interval of Elevation will be loaded with challenges.</p>
            <p>And you must know by now, evading this inner calling has shown up in the most negative of energies...</p>
            <p><strong>Uncertainty... Apprehension... Fear... Anxiety... Pressure...</strong></p>    
            <p>The very challenges that have prevented you from breaking past the <?php echo $_GET['age'];?> all these years.</p>
            <p>...It all revolves around succumbing to old patterns of disregard.</p>
            <p>Listen to the inner promptings of your soul.</p>
            <p>The ones whispering that change is not only possible, but probable. The ones urging you to finally make a compelling play.</p>
            <p>The ones telling you that change and transformation don't come tomorrow, but today.</p>
            <p>Now, the exact process to align your purpose and prepare yourself for your grand transformation have already been outlined.</p>
            <p>Directly addressing your exact circumstances, and giving you the phases to break into your Stage of the Spirit.</p>
            <p>The state where abundance and desires are not manifested, but epitomized.</p>
            <ul class="tick-list">
                <li>A blueprint that reveals the exact steps and phases to integrate your archetype into your consciousness...</li>
                <li>A personalized manual that guides you from <?php echo $_GET['age'];?> into the Stage of the Spirit</li>
                <li>A guide that translates imbalances between your masculine and feminine energies into confidence</li>
                <li>A tool that unravels the secret to overcoming your mind's natural resistance to change...</li>
                <li>A resource that can align your direction, desires, and energies for remarkable transformation...</li>
                <li>A shortcut that can return intuition and intention to your control...</li>
            </ul>
                
            <div class="testimonial">
                <span class="archetype-sm caregiver"></span>
                <h3>"...I found a goldmine when I found Individualogist..."</h3>
                <p>There has been a search for who I am and what my destiny is since I was 6 years old and suffered a SEPARATION TRAUMA... I found a goldmine when I found Individualogist. Thank you so much for helping me. Your questionnaire determined that I am a Caregiver, and I love your assessment!</p>
                
                <div class="testimonial-profile">
                    <img src="https://individualogist.com/wp-content/themes/indivi-wp/img/tilly-dunn.png">
                    <p>Till Dunn, 73, Author &amp; Speaker - Caregiver</p>
                </div>
                
            </div>    
            
            <h2 class="sub-header"><strong>INTRODUCING:</strong> Your Premium Archetypal Analysis - Your Interval of Elevation Guide</h2>
            <p>This powerful analysis is the starting point of your <strong>personalized path</strong> to your Stage of the Spirit...</p>
            <img src="https://individualogist.com/offer/assets/img/paav2-cover.png" class="img-paa">
            <p>A carefully crafted guide that will take you on a journey through an in-depth understanding of what your archetype truly encompasses, and help you gain an epiphanic perspective of who you truly are, and who you can become.</p>
            <p>It will reveal your archetypal path and purpose, guiding you through each phase of the Archetypal Integration process.</p>
            <p>To make this journey as effortless as possible...</p>
                
            <div class="testimonial">
                <span class="archetype-sm lover"></span>
                <h3>"...Report was very informative and insightful..."</h3>
                <p>The report was very informative and insightful. I am still new to the archetypes and needed more education on the topic. All the wonderful information that I was seeking was in my report. It was all about my individual archetype and what that means for my life path. I recommend anyone on a journey of self-discovery and enlightenment to definitely purchase the report. Especially if they are new to all of this and are seeking more answers and enlightenment.</p>

                <div class="testimonial-profile">
                    <p>Brandi Hicks, 42, Tarot Card Reader - Lover</p>
                </div>
            </div>       
                
            <h2 class="sub-header">Your Premium Archetypal Analysis is split into <strong>FIVE Progressive, Transformational Phases...</strong></h2>
            
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="/offer/assets/img/paav2-if.png">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>Phase #1: The Individuation Fundamentals</strong></p>
                    <p class="bonus-text">This phase marks the beginning of your transformation, where every step that lays ahead of you will be explained. During this phase, the secrets of individuation and the Archetypal Integration process will be unveiled. You will come to understand how all the pieces of the puzzle fit to form your holistic <?php echo $_GET['archetype'];?> identity, and of course, how it can work <em>together with</em> your <?php echo $_GET['gender'];?> and life stage, and not <em>against them</em>.</p>
                    <p class="bonus-text">Immediately, you will see your <strong>personalized path of least resistance to transformation.</strong></p>
                </div>
            </div>    
                
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="/offer/assets/img/paav2-ai.png">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>Phase #2: Your Archetypal Incarnations</strong></p>
                    <p class="bonus-text">The second phase is when the real work begins, and when real results are experienced. During this phase, you are guided through all the incarnations of your <?php echo $_GET['archetype'];?> archetype. Incarnations that form the entirety of your archetype.</p>
                    <p class="bonus-text">It is through this phase that you will gain a thorough, profound revelation of who you are, and who you can evolve into.</p>
                </div>
            </div>   
                
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="/offer/assets/img/paav2-ap.png">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>Phase #3: Your Archetypal Profile</strong></p>
                    <p class="bonus-text">Now, we've moved on to the third phase of your Archetypal Integration, where you'll work more intimately with your archetype. In this phase, more of your archetype's tendencies, behavioral responses, strengths, and weaknesses are revealed.</p>
                    <p class="bonus-text">With homeostasis out of the way, your subconscious mind will start to become unified with the unconscious, and you'll start to experience a "shift" in your perceptions - of yourself, of others, and of what's truly possible.</p>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="/offer/assets/img/paav2-ao.png">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>Phase #4: Your Archetypal Odyssey</strong></p>
                    <p class="bonus-text">Your archetype is slowly becoming integrated - <em>now what?</em> The fourth phase will prepare you for your next steps - the journey that your archetype will embark on. It sheds light on the obstacles that lie ahead, giving you predictive foresight for you to maintain your integrated state.</p>
                    <p class="bonus-text">In any transformation, regression and "backsliding" are an extremely common phenomenon. This phase will ascertain your transformation as a permanent change.</p>
                </div>
            </div>   
                
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="/offer/assets/img/paav2-aeg.png">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>Phase #5: Your Archetypal Exercise Guide</strong></p>
                    <p class="bonus-text">The fifth and final phase is where you'll take full advantage of your Interval of Elevation, as you translate everything into action - your newly experienced epiphanies, realizations, and wisdom. Here, we reveal a series of cognitive and emotional exercises that work directly with all levels of your consciousness, familiarizing your entire self with archetypal integration.</p>
                </div>
            </div>     
            
            <div class="testimonial">
                <span class="archetype-sm hero"></span>
                <h3>"...A good investment..."</h3>
                <p>This was amazing for me, I had never seen anything like this in anywhere else. The content is full of who we really are, it's a good investment!</p>

                <div class="testimonial-profile">
                    <p>Caique de Farias, 24, Student - Hero</p>
                </div>
            </div>           
                
            <p>And as soon as this final phase begins, your direction and purpose will become clear. Your entire being will be radiating with energy. You will notice abundance flowing into your life, and everything will somehow "click" into place...</p>   
            
            <p>But most importantly, you will come out of your Interval of Elevation completely transformed... Whether it's in the form of a new career, the awakening to a grander purpose, deeper relationships, abundance in wealth, a newfound sense of confidence...</p>
            <p>The possibilities are endless. And it all starts with your willingness to listen to your inner promptings, and the one decision you make today.</p>
            <ul class="tick-list">
                <li>Experience MULTIPLE BREAKTHROUGHS across ALL aspects of your life with Archetypal Integration.</li>
                <li>Epitomize the abundance you deserve during this critical Interval of Elevation</li>
                <li>Discover your hidden strengths, intuitive instincts, and unquestionable purpose to charge through mental barriers and limiting beliefs.</li>
                <li>Receive a personalized and effortless blueprint that reveals your true inner self, all based on your primary archetype.</li>
                <li>Transform yourself into a magnet that draws like-minded members of the opposite gender into your life - members who'll love you and appreciate you for who you truly are.</li>
                <li>Receive a detailed guide, broken down into 5 different phases - your Individuation Fundamentals, your Archetypal Profile, your Archetypal Incarnations, your Archetypal Odyssey, and your Archetypal Exercise Guide.</li>
                <li>Receive your 5 additional bonus materials for FREE - readings that will help you obtain a deeper understanding of your archetype, your energies, and the spiritual/psychological realm.</li>
                <li>Walk away with these 5 bonuses materials if you're not COMPLETELY SATISFIED</li>
            </ul>
                
            <div class="testimonial">
                <span class="archetype-sm outlaw"></span>
                <h3>"...Found this report very helpful..."</h3>
                <p>I recently purchased the Archetype Report to help give me guidance in my life. Many things have happened so quickly in just a short time my head was spinning. I have been working on healing myself, which includes learning about myself. I found this report very helpful, which led me to purchase additional reports they offer. It started with me just taking a short quiz I found on Facebook. I didn’t realize the report would reveal so much.</p>

                <div class="testimonial-profile">
                    <p>John Hansen, 55, Retired - Outlaw</p>
                </div>
            </div>       
                
            <h2 class="sub-header">Going Above and Beyond To Celebrate Your Impending Transformation</h2>    
            <p>Claim your Premium Archetypal Analysis today, and I'll include 5 additional bonus readings.</p>
            <p>These 5 additional materials are my personal recommendations for enhancing your self-discovery journey - each of them revolves primarily around energetic influences, and intuitive control.</p>
            <p>But not only that - these bonuses are all authored by our in-house panel of analytical psychology and spirituality experts. They ARE NOT readings, guides, or information that you'll be able to get ANYWHERE ELSE.</p>
                
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="../img/aig-cover.jpg">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>BONUS #1: Active Imagination Guide - <span class="bonusvalue">$37 value</span></strong></p>
                    <p class="bonus-text">Bridge the gap between your consciousness and the unconscious using this mind-exploring meditative technique, translating your unconscious mind into tangible images.</p>
                    <p class="bonus-text">This extremely powerful guide will enhance your archetypal integration efforts by tapping into the proven psychological exercises of "active imagination".</p>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="../img/dag-cover.jpg">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>BONUS #2: Dream Analysis Guide - <span class="bonusvalue">$37 value</span></strong></p>
                    <p class="bonus-text">Become a master of your intuition by deconstructing your dreams to reveal your "inner voice". This secret guide will give you the edge you need to navigate the complex plains of your unconscious mind.</p>
                    <p class="bonus-text">By borrowing principles of analytical psychology, this guide will show you the exact art and science to interpret dreams, so that you can uncover "hidden truths" about your inner intuition and deeper personality.</p>
                </div>
            </div>    

            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="../img/chinese-zodiac-cover.png">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>BONUS #3: Exploring Your Birthdate With The Chinese Zodiac - <span class="bonusvalue">$37 value</span></strong></p>
                    <p class="bonus-text">Meet the counterpart of Western astrology – The Chinese Zodiac. Understand the Eastern influences on predictions and learn how you can apply them to harness yin and yang energies, all based on your personalized Chinese Zodiac.</p>
                </div>
            </div> 

            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="../img/discovering-aura-cover.png">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>BONUS #4: Discovering Your Aura - <span class="bonusvalue">$27 value</span></strong></p>
                    <p class="bonus-text">Each individual exudes a certain aura. Learn how you can instantly identify and interpret different auras of different individuals to gain maximum influence over others, as well as manage the emission of your own aura.</p>
                </div>
            </div>
                
            <div class="row">
                <div class="col-sm-4 mx-auto">
                    <img class="paa-items" src="../img/fengshui-paradigm-cover.png">
                </div>
                <div class="col-sm-8 mx-auto">
                    <p><strong>BONUS #5: Feng Shui Paradigm Guide - <span class="bonusvalue">$37 value</span></strong></p>
                    <p class="bonus-text">Maximize the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui. This in-depth guide will turn you into a true geomancy master in no time.</p>
                </div>
            </div>    

            <p>These 5 bonus gifts are worth a whopping $175. And if you complete your request for the Premium Archetypal Analysis today, I'll include them for you at no extra cost.</p>
                
            <div class="testimonial">
                <span class="archetype-sm innocent"></span>
                <h3>"...Learned a lot about myself..."</h3>
                <p>I really enjoy reading all the information about my archetype... It's really fascinating. I've learned a lot about myself. Thank you!</p>

                <div class="testimonial-profile">
                    <p>Christina L Cole, 63, Caretaker - Innocent</p>
                </div>
            </div>          
                
            <h2 class="sub-header">Ready or Not, Your Interval of Elevation Will Come</h2>    
            <p><?php echo $_GET['name'];?>, you've just learned of this optimal period for your grand transformation.</p>
            <p>And whether you're prepared or not, it's going to come.</p>
            <p>You've spent years being defeated by unexpected circumstances - uncertain in your purpose, dubious of your abilities, and just plain stuck.</p>
            <p>But now is the time to listen to your inner promptings and rise into your Stage of the Spirit.</p>
            <p>To attain a life aligned to your purpose and brimming with abundance.</p>
            <p>You could, of course, attempt to make sense of your archetype's imbalances, and try to navigate your <?php echo $_GET['age'];?> on your own...</p>
            <p>Only to be challenged with a familiar sense of uncertainty and self-doubt.</p>
            <p>Because with your Premium Archetypal Analysis, you simply won't be fully integrated with your <?php echo $_GET['archetype'];?>; your purpose would remain a question mark, and your Interval of Elevation would come to pass with nothing to show for it.</p>
            <p>You've stumbled upon a rare opportunity, <?php echo $_GET['name'];?>. Because it's glaringly clear that you're ready to experience a grand transformation.</p>
            <p>All you have to do is equip yourself with the right tools, and trust in your inner promptings.</p>
            
            <div class="testimonial">
                <span class="archetype-sm magician"></span>
                <h3>"...The clarity I needed came to me through you..."</h3>
                <p>I had a rough idea about archetypes, and that enabled me to stumble upon Individualogist - and I'm glad I did. The clarity I needed came to me through you! Thank you Individualogist, for giving me what I was after, and helping me look forward to the future every day!</p>

                <div class="testimonial-profile">
                    <p>K.A.R.Campbell, 40, Welder - Magician</p>
                </div>
            </div>   
                
            <h2 class="sub-header">Request Your Premium Archetypal Analysis</h2>
            <p>Now, if there existed another transformational program as powerful, detailed, and personalized as this... <strong>How much time, effort, research, and resources do you think it's taken to produce?</strong></p>
            <p>At Individualogist.com - we've made it our mission to deliver personal transformation through archetypal integration to the MASSES, because we believe that everyone should have access to the information they need to become more abundant, happier, and filled with love.</p>
            <p>In order to make our programs, reports, and information available to the masses, we have to make it affordable without compromising quality AND results.</p>
            <p>And so, we've personalized the archetypal integration process to EACH ARCHETYPE.</p>
            <p>In other words, I'm sure we can both agree that this is truly a priceless opportunity.</p>
            <p>The original price of the Premium Archetypal Analysis is fairly set at $97. But that's NOT what you'll pay today.</p>
            <p>In this special reading, I've included an exclusive one-time $60 discount for your Premium Archetypal Analysis, setting the final "unofficial" price at $37.</p>
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
                <p class="indent">Leverage this powerful guide to transform your external environment to maximize the flow of energy after transforming your internal self.</p>
                <li><strong>Priority Customer Support - <span class="bonusvalue">$97 value</span></strong></li>
                <p class="indent">Our team of archetypal specialists will be with you throughout the entire program, so you'll always have someone to encourage you, and guide you. This priority treatment is ONLY made available if you place your order FROM THIS PAGE.</p>
                <li><strong>60-Day Moneyback Guarantee - <span class="bonusvalue">Risk-Free</span></strong></li>
                <p class="indent">If you don't experience a transformation of ANY form, we'll issue you a FULL refund, and you'll get to keep the 5 bonus reports.</p>
            </ul>
            <p>In other words, you will receive the full edition of your Premium Archetypal Analysis, and the 5 bonuses as promised, for the one-time fee of just $37.</p>
                
            <div class="testimonial">
                <span class="archetype-sm member"></span>
                <h3>"...The clarity I needed came to me through you..."</h3>
                <p>Wow, it was very accurate and very reassuring some things mentioned in it! I have been doing on my own and knowing I'm on the right path in some areas is reassuring to me. And also gives me confidence that other journeys I to want take, like pursuing another career in a particular field, is something I should do.</p>

                <div class="testimonial-profile">
                    <p>Danielle Jones, 32, Education - Member</p>
                </div>
            </div>
                
            <div class="testimonial">
                <span class="archetype-sm sage"></span>
                <h3>"...The clarity I needed came to me through you..."</h3>
                <p>Life has been so tough for me. I started healing and meditating and my higher power stepped in and guided me here. Very accurate, I recommend this to anyone.</p>

                <div class="testimonial-profile">
                    <p>Arley Markiewicz, 33, Freelancer - Sage</p>
                </div>
            </div>
                
            <div class="testimonial">
                <span class="archetype-sm explorer"></span>
                <h3>"...Gave me insights into myself...."</h3>
                <p>It gave me insights into myself. There is so much to absorb and I will be examining it for a long time. The Individualogist team has been very helpful and courteous. And I thank all of you.</p>

                <div class="testimonial-profile">
                    <p>David Gelowitz, 76, Self Employed - Explorer</p>
                </div>
            </div>     
                
            <?php
            include '../inc/order-paav2.php';
            ?>   
                
            <h2 class="sub-header">60 Days From Today, If You're Not Satisfied For ANY Reason, I'll Give You A FULL Refund</h2>
            <img src="../img/guarantee.png" style="width:100px;text-align: center; display:block; margin: 0 auto; position: relative; filter:drop-shadow(0 0 5px #fff);">    
            <p>Within the next 60 days, starting from the day of your purchase, if you decide that your Premium Archetypal Analysis fell short of your expectations, or if you decide that you weren't satisfied with it in ANY way, I'll issue you a FULL refund.</p>
            <p>It is important to me that you get value AND results from this.</p>
            <p>And if you DON'T see a difference whatsoever in your thought patterns, in your sense of purpose, and in your state of abundance, then we DO NOT DESERVE to keep your money.</p>
                
            <div class="testimonial">
                <span class="archetype-sm caregiver"></span>
                <h3>"...Gave me insights into myself...."</h3>
                <p>I have to say that Ann is awesome! I’ve only had a couple of problems and questions and she’s always responded quickly and has been very helpful with everything. Even when asking for refunds, no questions asked, even though I’m sure she’s felt frustrated with me but she’s always been professional, helpful and above all, nice. I like dealing with Ann. Individualogist has always been correct with the information they sent. I know I’ll receive whatever it is I’m asking for without having to ask twice!</p>

                <div class="testimonial-profile">
                    <p>Melissa Blatman, 53, Housewife - Caregiver</p>
                </div>
            </div>    
                
            <?php
            include '../inc/order-paav2.php';
            ?>     
                
            <div class="testimonial">
                <span class="archetype-sm ruler"></span>
                <h3>"...Helping me hone my unique characteristics...."</h3>
                <p>The Premium Archetypal Analysis is helping me hone my unique characteristics and has really made me interested in further research into Jungian Phycology. Thanks! I will add this to my toolbox to further map out my inner world.</p>

                <div class="testimonial-profile">
                    <p>Ryan Evans, 33, Hairstylist - Ruler</p>
                </div>
            </div>
                
            <div class="testimonial">
                <span class="archetype-sm creator"></span>
                <h3>"...Gave me a complete understanding of my archetype..."</h3>
                <p>This is truly amazing. I’ve just started on this path and found this site. They gave me a complete and deep understanding of my archetype. Everyone’s is different. Anyone starting to learn this shift in consciousness needs to check this out. It had me and who I am as an individual whole-heartedly correct. It shows you exactly how to overcome your exact archetype and create a union between the unconscious and the subconscious.</p>

                <div class="testimonial-profile">
                    <p>Cody, 31, Construction - Creator</p>
                </div>
            </div>
                
            <div class="testimonial">
                <span class="archetype-sm jester"></span>
                <h3>"...View myself from a whole other perspective..."</h3>
                <p>Ever since I received my Archetype reading, I’ve been able to view myself from a whole other perspective. I finally had the tools to help identify with what I feel and resonate within myself.</p>

                <div class="testimonial-profile">
                    <p>Logan Ahern, 22, Self Employed - Jester</p>
                </div>
            </div>  
                
            <div class="testimonial">
                <span class="archetype-sm outlaw"></span>
                <h3>"...Excellent, courteous service..."</h3>
                <p>I have to highly commend the customer service adviser I dealt with, Ann. Her response was extremely quick (24hrs) and everything sorted immediately. Excellent, courteous service. Many thanks!</p>

                <div class="testimonial-profile">
                    <p>Sara, 66, Retired - Outlaw</p>
                </div>
            </div>  
                
            <div class="testimonial">
                <span class="archetype-sm creator"></span>
                <h3>"...I Love The Individualogist Team..."</h3>
                <p>What an amazing experience. I look forward to seeing the emails. It's something I can't wait to read, so sweet, something I've never had yet I can't wait to read your knowledge and the respect. I LOVE THE INDIVIDUALOGIST TEAM!</p>

                <div class="testimonial-profile">
                    <p>Queen Leslie Taylor, 46, Self-Employed - Creator</p>
                </div>
            </div>  
                
            <div class="testimonial">
                <span class="archetype-sm member"></span>
                <h3>"...Most in-depth report I have ever received..."</h3>
                <p>Your guides are clearer and more understandable than others. What they say is much easier to understand!</p>

                <div class="testimonial-profile">
                    <p>Maria Varela, 27, Fashion Designer - Member</p>
                </div>
            </div>  
                
            <div class="testimonial">
                <span class="archetype-sm sage"></span>
                <h3>"...Found the readings here to be most life-affirming..."</h3>
                <p>I found the readings here to be most life-affirming. It's really great when you're at a point where you feel stuck and not really sure where you belong in the world or what to do with your abilities (and it helps to add confidence to abilities/talents you "know" you have, makes one more capable of owning and using them!)</p>

                <div class="testimonial-profile">
                    <p>Jez, 31, Tarot and Astrology Reader - Sage</p>
                </div>
            </div>  
                
            <?php
            include '../inc/order-paav2.php';
            ?>
                
            <div id="faq-area">
              <h2 class="faq-header">Q1. Will I really experience a transformation with this?</h2>
                <div class="faq-para">
                  <p>Absolutely! Your analysis is in good hands. Our Premium Archetypal Analysis has helped thousands of struggling, lost, and purposeless individuals find their true selves - all by encountering their archetypes.</p>

                  <p>The Premium Archetypal Analysis is an excruciatingly detailed report about your archetype, containing  highly informative pages of actionable and thought-provoking strategies and methodologies. Once again, all of the information is customized to your dominant archetype.</p>

                  <p>It breaks down an in-depth outlook of your life journey and all of its obstacles. There is no other product that comes as close in terms of detail or information. The Premium Archetypal Analysis is 100% owned and authored by us. This is the only place where you’re able to get it, or anything like it.</p>
                </div>

                <h2 class="faq-header">Q2. How will I receive my analysis?</h2>
                    <div class="faq-para">
                        <p>You will receive your personalized Premium Archetypal Analysis, along with your bonuses securely via e-mail, carefully stored in a secure download area that only you'll have access to.</p>

                        <p>Usually it takes 10 to 15 minutes for your purchase to be delivered, but in most cases it's much quicker.</p>

                        <p>Yes, this also means you'll be able to access your Premium Archetypal Analysis AND your bonuses from anywhere, and any device - as long as you have an Internet connection!</p>

                        <p>In the rare occasion where you do encounter issues with accessing your analysis, simply drop us an e-mail and our rockstar support team will assist you accordingly!</p>
                    </div>

                <h2 class="faq-header">Q3. Is the Premium Archetypal Analysis really proven by Science?</h2>
                  <div class="faq-para">
                    <p>Absolutely. Individuation is a psychological process that was created by thought leaders in the psychological world decades ago. In fact, principles of Individuation can be traced all the way back to the days of Aristotle.</p>

                    <p>This means that Individuation has stood the test of time to be a proven personal development process. There have also been numerous conclusive scientific studies about analytical psychology (what Individuation is based on) across the globe.</p>

                    <p>Your Premium Archetypal Analysis will guide you through actionable steps, that you can take towards making a MASSIVE change in your life. It reveals callings and directions that are specific to YOU.</p>
                  </div>

                <h2 class="faq-header">Q4. Will I REALLY experience a transformation in 7 days?</h2>
                  <div class="faq-para">
                    <p>Yes. I know, it's a big promise to make, so let me explain.</p>

                    <p>Your Premium Archetypal Analysis will guide you through the Individuation process and explain to you your archetype in even greater detail. It takes the average reader approximately 5 to 7 days to complete the entire series.</p>

                    <p>As long as you pay attention to the insights and wisdom revealed in your Premium Archetypal Analysis, there is no doubt that you will experience an epiphanic shift in your consciousness. That's when EVERYTHING in your life begins to TRANSFORM.</p>
                  </div>

                <h2 class="faq-header">Q5. How does the moneyback guarantee work?</h2>
                  <div class="faq-para">
                    <p>Our 60-day moneyback guarantee is plain and simple.</p>  

                    <p>After going through your Premium Archetypal Analysis, you WILL experience a TRANSFORMATION in your understanding of your true self, your deepest desires, and your abundant destiny.</p>

                    <p>If not, simply get in touch with us, and we'll issue you a FULL refund. No questions asked.</p>

                    <p>In fact, you'll even GET to keep the bonuses for FREE - as a gesture of goodwill from all of us at Individualogist.com, to YOU, .</p>

                    <p>Click on the button below now, lock in your MASSIVE discount, your exclusive BONUSES, and take advantage of our 60-day, risk-free guarantee!</p>
                  </div>
            </div>    
                
            <?php
            include '../inc/order-paav2.php';
            ?>
                
        </div>
        </div>
    </div>

</body>

        <?php include '../inc/footer.php';?>