<?php
$PageTitle = "Individualogist.com | Reading";
include ('../inc/header.php');
?>
<link href="https://fonts.googleapis.com/css?family=Great+Vibes|Pacifico" rel="stylesheet">
<script>
$(function() {
    $(".step1-reading").show();
    $(".step2-reading").hide();
    $(".step3-reading").hide();
    $(".step4-reading").hide();
    $(".step5-reading").hide();
    $(".step6-reading").hide();
    $(".step7-reading").hide();
    $(".step8-reading").hide();
    $(".menu1").addClass('active');
    $(".menu2").removeClass('active');
    $(".menu3").removeClass('active');
    $(".menu4").removeClass('active');
    $(".menu5").removeClass('active');
    $(".menu6").removeClass('active');
    $(".menu7").removeClass('active');
    $(".menu8").removeClass('active');
    $(".step1-back").on('click', function() {
        //$(this).hide();
        $(".step2-reading").hide(300);
        $(".step3-reading").hide(300);
        $(".step4-reading").hide(300);
        $(".step5-reading").hide(300);
        $(".step6-reading").hide(300);
        $(".step7-reading").hide(300);
        $(".step8-reading").hide(300);
        $(".step1-reading").show(600);
        $(".step2").css('display', 'block');
        $(".menu1").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
    });
    $(".step2-back").on('click', function() {
        //$(this).hide();
        $(".step1-reading").hide(300);
        $(".step3-reading").hide(300);
        $(".step4-reading").hide(300);
        $(".step5-reading").hide(300);
        $(".step6-reading").hide(300);
        $(".step7-reading").hide(300);
        $(".step2-reading").show(600);
        $(".step8-reading").hide(300);
        $(".step3").css('display', 'block');
        $(".menu2").addClass('active');
        $(".menu1").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
    });
    $(".step3-back").on('click', function() {
        //$(this).hide();
        $(".step1-reading").hide(300);
        $(".step2-reading").hide(300);
        $(".step4-reading").hide(300);
        $(".step5-reading").hide(300);
        $(".step6-reading").hide(300);
        $(".step7-reading").hide(300);
        $(".step8-reading").hide(300);
        $(".step3-reading").show(600);
        $(".step4").css('display', 'block');
        $(".menu3").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
    });
    $(".step4-back").on('click', function() {
        //$(this).hide();
        $(".step1-reading").hide(300);
        $(".step2-reading").hide(300);
        $(".step3-reading").hide(300);
        $(".step5-reading").hide(300);
        $(".step6-reading").hide(300);
        $(".step7-reading").hide(300);
        $(".step8-reading").hide(300);
        $(".step4-reading").show(600);
        $(".step5").css('display', 'block');
        $(".menu4").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
    });
    $(".step5-back").on('click', function() {
        //$(this).hide();
        $(".step1-reading").hide(300);
        $(".step2-reading").hide(300);
        $(".step3-reading").hide(300);
        $(".step4-reading").hide(300);
        $(".step7-reading").hide(300);
        $(".step6-reading").hide(300);
        $(".step8-reading").hide(300);
        $(".step5-reading").show(600);
        $(".step6").css('display', 'block');
        $(".menu5").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
    });
    $(".step6-back").on('click', function() {
        //$(this).hide();
        $(".step1-reading").hide(300);
        $(".step2-reading").hide(300);
        $(".step3-reading").hide(300);
        $(".step4-reading").hide(300);
        $(".step5-reading").hide(300);
        $(".step7-reading").hide(300);
        $(".step8-reading").hide(300);
        $(".step6-reading").show(600);
        $(".step7").css('display', 'block');
        $(".menu6").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
    });
    $(".step7-back").on('click', function() {
        //$(this).hide();
        $(".step1-reading").hide(300);
        $(".step2-reading").hide(300);
        $(".step3-reading").hide(300);
        $(".step4-reading").hide(300);
        $(".step5-reading").hide(300);
        $(".step6-reading").hide(300);
        $(".step8-reading").hide(300);
        $(".step7-reading").show(600);
        //$(".step7").css('display', 'block');
        $(".menu7").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu8").removeClass('active');
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
    });
    $(".step2").on('click',function() {
        $(this).hide();
        $(".step1-reading").hide(300);
        $(".step2-reading").show(600);
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
        $(".menu2").addClass('active');
        $(".menu1").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
    });
    $(".step3").on('click',function() {
        $(this).hide();
        $(".step2-reading").hide(300);
        $(".step3-reading").show(600);
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
        $(".menu3").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
    });
    $(".step4").on('click',function() {
        $(this).hide();
        $(".step3-reading").hide(300);
        $(".step4-reading").show(600);
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
        $(".menu4").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
    });
    $(".step5").on('click',function() {
        $(this).hide();
        $(".step4-reading").hide(300);
        $(".step5-reading").show(600);
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
        $(".menu5").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
    });
    $(".step6").on('click',function() {
        $(this).hide();
        $(".step5-reading").hide(300);
        $(".step6-reading").show(600);
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
        $(".menu6").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu7").removeClass('active');
        $(".menu8").removeClass('active');
    });
    $(".step7").on('click',function() {
        $(this).hide();
        $(".step6-reading").hide(300);
        $(".step7-reading").show(600);
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
        $(".menu7").addClass('active');
        $(".menu2").removeClass('active');
        $(".menu3").removeClass('active');
        $(".menu4").removeClass('active');
        $(".menu5").removeClass('active');
        $(".menu6").removeClass('active');
        $(".menu1").removeClass('active');
        $(".menu8").removeClass('active');
    });
    $(".step8, .step8-back").on('click',function() {
        $(this).hide();
        $(".sidebar").hide(300);
        $(".archetype-reading").hide(300);
        $(".step8-reading").show(300);
        $('html,body').animate({
            scrollTop: $("#content").offset().top},300);
    });
});
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.1&appId=247959338893932&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<style>
    .cbtb{position: relative;z-index: 1;}
    .quote{font-size:2em !important;color:#8e2ba6;padding:1.5em;box-shadow:none;font-family:'Pacifico',serif;background:none;}
    .quote:before,.quote:after{    color: #8e2ba6;}
    .container-fluid {position:relative;overflow:hidden;}
    .overlay{position: absolute;top: 0;right: 0;left: 0;bottom: 0;height: 100%;width: 100%;background: radial-gradient(at center, rgba(0,0,0,0), rgba(0,0,0,0.7));}
    .testimonial p {text-align: center}
    p,ul {font-size: 1em !important;text-align:justify}
    .headline {font-weight: 900;color: #fff;text-transform: uppercase;text-align: center;letter-spacing: 3px;font-size: 2em;font-family:inherit;text-shadow: 1px 1px #000, 0 0 50px #000;}
    .sub-headline {font-weight: 500;color: #fff;text-transform: uppercase;text-align: center;letter-spacing: 3px;font-size: 1.5em;font-family:inherit;text-shadow: 1px 1px #000, 0 0 50px #000;}
    .p-headline{text-transform: uppercase;letter-spacing: 2px;font-size: 14px !important;}
    .w-100{max-width: 600px;display: block;position: relative;margin: 0 auto;}
    .page-container{background:#222}
    .bg-cosmos {top:0;left:0;right:0;margin:auto;position:absolute;width:100%;height:100%;background: url(../img/bg-cosmos.jpg) no-repeat center center;background-attachment: fixed;background-size: cover;margin-bottom: -30px;}
    .archetype-img img {width:100px;}
    .archetype-img {filter:drop-shadow(0 10px 30px rgba(0,0,0,1))}
    .order-details{    box-shadow: 0 5px 30px rgba(0,0,0,.3);}
    .page-header {padding: 2em 0;font-size:1em;color: #fff;text-shadow: 1px 1px 1px #000;}
    .right{text-shadow:none}
    .img-intext{max-width:400px;-webkit-box-reflect:below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(80%, transparent) , to(rgba(250, 250, 250, 0.3)))}
    .left{margin:0;text-shadow:none}
    ol li:hover,.active {font-weight:700!important;border-radius:20px;color:#fff!important;box-shadow:0 5px 5px rgba(0,0,0,.5);transition:.4s;-webkit-transition:.4s;padding:0 10px;background:none;text-decoration:underline;box-shadow:none !important}
    .archetype-reading{width: 80%;margin: 0 auto;position: relative;box-shadow: 0 0 10px #fff, 0 0 20px #fff;padding: 30px;text-align: left;float: right;clear: inherit;background: #fff;}
    ol li {margin:.5em 0; cursor: pointer;}
    .paa-items {max-height: 200px;margin: 1em auto;position: relative;display: block;box-shadow: 0 5px 10px rgba(0,0,0,0.3);}
    .bonus-items{max-height: 200px;position: relative;margin: 0 auto;display: block;}
    .step-title{color:#8e2ba7;text-transform:uppercase;font-weight:900;letter-spacing:2px}
    .step-title:after{content:' ';display:block;border:1px solid #8e2ba7;width:40%;text-align:left;}
    .step8-title{color:#8e2ba7;text-transform:uppercase;font-weight:900;letter-spacing:2px;text-align:center;margin: 1em auto}
    .step8-title:after{content:' ';display:block;border:1px solid #8e2ba7;width:40%;text-align:center;margin:.5em auto}
    .hover{height:60px;white-space:normal;background: #18c3c3;color: #fff;text-transform: uppercase;font-weight: 900;font-size: 1em;border-bottom:3px solid #31a7a7;border-radius: 5px;box-shadow: 0 5px 15px rgba(0,0,0,.15);}
    .step8-reading{width: 100%;max-width:800px;margin: 0 auto;position: relative;box-shadow: 0 0 10px #fff, 0 0 20px #fff;padding: 30px;text-align: left;clear: inherit;background: #fff;}
    .menu8 {color:#00c7c4;font-weight:700}
    .hover:hover{color:#fff;transition:.4s;box-shadow:0 15px 15px rgba(0,0,0,.25);background:#b019d6;bottom: 3px;border-bottom: 3px solid #8a2898;}
    .reading-wrap {max-width: 800px;margin: 0 auto;display: block;}
    .f-right{width:100%;float: right;position:relative}.f-left{border-bottom:3px solid #75c5c5;background:#85dedd;width:100%;float: left;position:relative}
    .f-right:before{content: "\f0da";font-family: FontAwesome;font-style: normal;font-weight: normal;text-decoration: inherit;color: #fff;font-size: 1.2em;padding-right: 1em;position: absolute;top: 16px;right: 0;}
    .f-left:before{content: "\f0d9";font-family: FontAwesome;font-style: normal;font-weight: normal;text-decoration: inherit;color: #fff;font-size: 1.2em;padding-left: 1em;position: absolute;top: 16px;left: 0;}
    .progress-breadcrumb li.active:after,.progress-breadcrumb li.active:before{background-color:#55b776;transition:all .8s}.active:after{content:""!important}.fb-page{filter:drop-shadow(0 0 10px rgba(0, 0, 0, .5));margin:2em auto;max-width:100%;width:500px;display:block;padding:0;position:relative;float:none}.progress-breadcrumb{margin:1em auto;display:inline-block;border-radius:20px;box-shadow:0 0 10px #fff;width:100%;position:relative;padding:0}.progress-breadcrumb li{list-style-type:none;width:33.3333%;float:left;font-size:14px;position:relative;padding:1em;text-align:center;text-transform:uppercase;color:rgba(255,255,255,.5);height:100%:}.progress-breadcrumb li:first-child:after{content:none}.progress-breadcrumb li.active:before{border-color:#55b776}.order-wrapper{margin:1em auto;clear:both}@media only screen and (max-width:768px){.progress-breadcrumb li{width:100%}}
    #undefined-alert{height:500px;padding:3em;display:none;margin-bottom:0}
    .sidebar {position:relative;width: 20%;float: left;background: #222;height: 100vw;margin: 0 auto;padding: 45px 15px;color: #fff;}
    .sidebar.fixed {position: fixed;top: 0;}
    @media only screen and (max-width:768px) {
        .hover {font-size:.8em}
        .f-right:before,.f-left:before{font-size:1.5em}
        .col-reverse {display: flex;flex-direction: column-reverse;}
        .img-intext{padding:1em}
    }
    @keyframes zoomInOut {
        from {
            transform: scale(1);
        } to {
            transform: scale(1.3);
        }
    }
</style>


<?php
    // Define possible archetypes
    $archetypelist = array("caregiver", "creator", "explorer", "hero", "innocent", "jester", "lover", "magician", "member", "outlaw", "ruler", "sage");
    $archetype = strtolower($_GET['archetype']);
    if (!in_array($archetype, $archetypelist)) {
        echo "<style>.page-container{display:none;}#undefined-alert{display:block;}</style>";
    }
?>

    <div class="container-fluid" id="undefined-alert">
        <div class="bg-cosmos"></div>
        <div class="overlay"></div>
            <div class="row">
                <div class="col-sm-12 mx-auto">
                    <div class="indi-logo">
                        <img src="../img/individualogist-logo2.png">
                    </div>
                </div>
            </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <div class="page-header">
                    <h1 class="headline">Oops! Looks like something went wrong...</h1>
                    <p><strong>Please <a href="/lp/discover-v8/?new">enter your details again</a> to generate your free reading!</strong></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3 mx-auto">
                <a class="btn hover f-right" href="/lp/discover-v8/?new" style="padding-top:18px">Free Archetype Reading</a>
            </div>
        </div>
    </div>

    <div class="page-container">
        <div class="container-fluid">
            <div class="bg-cosmos"></div>
            <div class="overlay"></div>
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
                    <h1 class="headline"><strong>PRIVATE ARCHETYPE READING: <span class="cap"><?php echo $_GET['name'];?></span></strong></h1>
                    <h2 class="sub-headline"><strong>Based On Your Spectacular Archetype, Abundance Is Within Your Grasps...</strong></h2>
                        <div class="archetype-img">
                      <?php
                    switch (strtolower($_GET['archetype'])){
                    case "caregiver":
                        echo '<img src="../img/icons/caregiver.png">';
                        break;
                    case "creator":
                        echo '<img src="../img/icons/creator.png">';
                        break;
                    case "explorer":
                        echo '<img src="../img/icons/explorer.png">';
                        break;
                    case "hero":
                        echo '<img src="../img/icons/hero.png">';
                        break;
                    case "innocent":
                        echo '<img src="../img/icons/innocent.png">';
                        break;
                    case "jester":
                        echo '<img src="../img/icons/jester.png">';
                        break;
                    case "lover":
                        echo '<img src="../img/icons/lover.png">';
                        break;
                    case "magician":
                        echo '<img src="../img/icons/magician.png">';
                        break;
                    case "member":
                        echo '<img src="../img/icons/member.png">';
                        break;
                    case "outlaw":
                        echo '<img src="../img/icons/outlaw.png">';
                        break;
                    case "ruler":
                        echo '<img src="../img/icons/ruler.png">';
                        break;
                    case "sage":
                        echo '<img src="../img/icons/sage.png">';
                        break;
                    default:
                        echo '<img src="../img/icons/caregiver.png">';
                    }
                    ?>

                    </div>
                    <p class="p-headline text-center">This Private Archetype Reading Has Been Prepared For:</p>
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
            <div class="sidebar">
                <ol>
                    <li class="step1-back menu1">Introduction</li>
                    <li class="step2-back menu2">Unique Contribution</li>
                    <li class="step3-back menu3">Sense of Significance</li>
                    <li class="step4-back menu4">Personality Traits</li>
                    <li class="step5-back menu5">Strengths/Weaknesses</li>
                    <li class="step6-back menu6">Greatest Challenge</li>
                    <li class="step7-back menu7">Conclusion</li>
                    <li class="step8-back menu8">Premium Analysis</li>
                </ol>
            </div>
        <div class="archetype-reading" id="content">
            <div class="reading-wrap">
            <div class="step1-reading">
                <p class="quote">
                <?php
                    switch (strtolower($_GET['archetype'])){
                    case "caregiver":
                        echo 'Sometimes even the caregiver forgets that the person who does the care-giving needs care too';
                        break;
                    case "creator":
                        echo 'I just want to drink tea, create stuff and sleep';
                        break;
                    case "explorer":
                        echo 'Adventure is not outside man; it is within';
                        break;
                    case "hero":
                        echo 'Heroes are ordinary people who make themselves extraordinary';
                        break;
                    case "innocent":
                        echo 'Wherever you are at any moment try and find something  beautiful.  A face, a line out of a poem, the clouds out of a window, some graffitti, a wind farm.  Beauty cleans the mind';
                        break;
                    case "jester":
                        echo 'Hope for the best, expect the worst. Life is a play, we are unrehearsed';
                        break;
                    case "lover":
                        echo 'Love is the bridge between you and everything.';
                        break;
                    case "magician":
                        echo 'Vision is the art of seeing what is invisible to others';
                        break;
                    case "member":
                        echo 'The most sincere form of respect is actually listening to what someone else has to say';
                        break;
                    case "outlaw":
                        echo 'They laugh at me because I’m different, I laugh at them because they’re all the same';
                        break;
                    case "ruler":
                        echo 'Throw me to the wolves and I will return leading the pack';
                        break;
                    case "sage":
                        echo 'Knowledge is power';
                        break;
                    default:
                        echo 'Sometimes even the caregiver forgets that the person who does the care-giving needs care too.';
                    }
                    ?>    
                </p>
                <h2 class="step-title"><?php echo $_GET['archetype'];?> Introduction</h2>
                <p><span class="cap"><?php echo $_GET['name']; ?></span>,</p>
                <p>Welcome to your unique archetype report created by the team of individuation experts right here at Individuologist.com!</p>
                <p><strong>First and foremost, what the heck is individuation?</strong></p>
                <p>Individuation is the process of uncovering who you are.  But it’s not just about revealing the parts of your ‘self’ that you know but also the parts of yourself that you don’t know, that you keep secret or deny.</p>
                <p><strong>For they are all worlds, you exist within, and that live within you.</strong></p>
                <p>This archetype reading is one of the ways in which you can learn more about yourself.  It will give you a more in-depth understanding of how and why you do certain things, leading you to a journey called ‘life’ with a higher level of success, joy, and peace.</p>
                <p><strong>The Power of The Light of Awareness</strong></p>
                <p>It’s when you shine the light of awareness upon your ‘self’ that you start to discover that sometimes it’s not YOUR fault if your life is not moving in the direction of your dreams or if you are failing.</p>
                <p>Instead, there are some things that you need to learn to do, or there’s a hurdle you need to overcome, a challenge you need to face, a habit you need to master or something in your psyche that you need to balance and resolve so that you can move forward.</p>
                <p>All too often, people lose their sense of self as they lose their confidence and let go of their dreams because they believe that they are not ‘good enough’ or not destined for success. </p>
                <p>Others may be successful and confident in some areas of their life, but not in other areas for the same reasons. </p>
                <p>But it doesn’t have to be this way.  When you start to take a look inside your ‘self’ and notice the patterns that exist within, you can ring the changes and create the outcomes that you need to make anything possible.  </p>
                <p>The process of Individuation helps you to do just that. </p>
                <p><strong>Your Archetype Analysis</strong></p>
                <p>Archetype analysis is the first step in the process of individuation. It helps you to see what you are secretly fighting for (or against).</p>
                <p>It also shows you your greatest challenge and teaches you how you can master this challenge so that you can start to move in the direction of your dreams. </p>
                <p>You see, there are 12 key archetypes who reflect the most common traits found in people all over the world.  Each archetype has a set of dominant traits, a unique challenge and their own call to action.</p>
                <p>Given its archaic nature, everybody on the planet will identify predominantly with one of these 12 archetypes.  As we take a look at the traits of your dominant archetype, we can use it as a mirror into ourselves.</p>
                <p><strong>Uncovering Your Soul</strong></p>
                <p>Analyzing our dominant archetype enables us to identify with the traits they display so that we can begin to understand how we experience the same traits.</p>
                <p>We can also learn more about our hidden self and discover strategies to help us overcome our greatest challenges. </p>
                <p>This means that through archetype analysis we can get insider information into our psyche; <strong>allowing us to fast-track our evolution onto the good stuff in life,</strong> instead of wasting our years looping over and over again on the same lessons without realizing that there is even a lesson to learn.</p>
                <p>This archetype report is a complete, detailed and advanced archetype analysis report.</p>
                <p>It will reveal your primary character traits, it WILL shine some light on your hidden character, and it will also provide you with lots of tips and tricks about how to master the challenges you face in life.  </p>
                <p>Archetype analysis is by no means the end of your journey to individuation. As detailed as these reports are, they are just the beginning of a wonderful, rewarding, and destiny-delivering journey.</p>
                <p>Renowned psychologist Dr. Carl Jung Carl Jung was also a huge advocate of Archetype Analysis; he used archetypes extensively as a tool for psychologically analyzing his clients.    </p>
                <p>The concept of archetypes as a form of individuation poses the notion that everything that exists here on earth is growing and developing into its ideal form.</p>
                <p>Which is precisely what we are about to show you about yourself in this report.  Be prepared to find out how you can become the best version of you</p>
                <img class="img-intext" src="/offer/paa/img/archetype-wheel.png">
                <p>The 12 dominant archetypes:</p>
                <ul class="archetype-list">
                    <li>Caregiver</li>
                    <li>Creator</li>
                    <li>Explorer</li>
                    <li>Hero</li>
                    <li>Innocent</li>
                    <li>Jester</li>
                    <li>Lover</li>
                    <li>Magician</li>
                    <li>Member</li>
                    <li>Outlaw</li>
                    <li>Ruler</li>
                    <li>Sage</li>
                </ul>
                <p>Everybody is predominantly one of these personality types, and of those archetypes, you are The <span class="cap"><?php echo $_GET['archetype'];?></span></p>
                <p>Each archetype tells us the story of who we are as an individual it shows us; the challenges we face, resources we have and where we are heading (including how we reach our fullest state of being). This free archetype report starts to build on the foundation of who you are, according to your archetype. </p>
                <p>Keep on reading to find out your story - The <span class="cap"><?php echo $_GET['archetype'];?></span>’s story.</p>
                <div class="prev-next">
                    <div class="container">
                        <div class="row mx-auto">
                            <div class="col-sm-6 mx-auto">
                            </div>
                            <div class="col-sm-6">
                                <button class="btn step2 hover f-right">2. Unique Contribution</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <!--Dynamic Reading-->
                <?php
                switch (strtolower($_GET['archetype'])){
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
                case "innocent":
                    include 'innocent.php';
                    break;
                case "jester":
                    include 'jester.php';
                    break;
                case "lover":
                    include 'lover.php';
                    break;
                case "magician":
                    include 'magician.php';
                    break;
                case "member":
                    include 'member.php';
                    break;
                case "outlaw":
                    include 'outlaw.php';
                    break;
                case "ruler":
                    include 'ruler.php';
                    break;
                case "sage":
                    include 'sage.php';
                    break;
                default:
                    include 'caregiver.php';
                }
                ?>
                
            </div>
        </div>
        <div class="step8-reading mx-auto">
            <div class="reading-wrap">
                <h2 class="step8-title text-center">"Follow Your True North, And Become The Abundant Being You Were Meant To Be"</h2>
                <p class="text-center"><strong>Mastering your archetype is key to attaining abundance, happiness, and luck</strong></p>
                <p>There is no doubt, - your ABUNDANCE PASSAGEWAYS are INDEED BLOCKED. More specifically, your lack of self identity has led to a substantial MISALIGNMENT between your True North, and your true desires.</p>
                <p>And this misalignment has formed some form of en "energy knot". A knot that has BLOCKED you from seeing opportunities. A knot that has impaired your productivity. A knot that has almost CRIPPLED your growth.</p>
                <p>It's no wonder you've encountered struggle after struggle all these years - your true self has been hog-tied and left for dead in a ditch!</p>
                <p>This, of course, is NOT your fault.</p>
                <p>See, Analytical Psychology states that a false sense of self is becoming INCREASINGLY prevalent in modern day society. Social media and fast-advancing technology has SKEWED our perceptions of who we really are. We attempt to fit the same "identity template" that society deems ACCEPTABLE...</p>
                <p>Many of us have fallen prey to vicious claws of environmental expectations. We alter our personalities to fit the expectations of others. We alter our dreams to fit what's considered normal. We alter our direction to fit what we believe to be achievable...</p>
                <p>As such, you've lost sight of the bigger picture - your deepest desires, your destiny - your True North.</p>
                <h2 class="step8-title text-center">Your Path Has Been Plagued...</h2>
                <p>Without first discovering your True North, your intuition and desires will remain clouded with unfavourable outcomes and dire consequences... In the form of negative energies, energy blockages, and imbalances within your archetype.</p>
                <p>But it is NOT too late to make a change. In fact, your timing could not have been BETTER.</p>
                <p>Right at this very moment, you have all the tools you need to make an enormous change in your life. When you really think about it, every decision that you've ever made in your life has led you to this exact moment...</p>
                <p>As you have probably realized by now, your True North resides in the discovery of your archetype - it holds the secret to your sense of true self, destiny, and desires.</p>
                <p>Without knowing your True North, you've been forced down the path of comfort and monotony... Living day by day, with little to no direction, and without knowing what tomorrow holds...</p>
                <img class="img-intext" src="/offer/paa/img/compass-real.png" style="filter:none">
                <p>Kind of like driftwood... Struggling to stay afloat in the storm, and just going with the current in the calm.</p>
                <p>But let it be known that you DO NOT have to be a victim of the UNPREDICTABLE.</p>
                <p>After all, your archetype is one of extraordinary potential. And if you could just tap into a fraction of its energy and positive vibrations, your life can completely transform... Whether you're struggling with financial difficulties, relationship problems, or even uncertainty.</p>
                <h2 class="step8-title text-center">Finding Your True North Is Within Your REACH.</h2>
                <p><?php echo $name;?>, you can become incredibly abundant, lucky, and happy. And your Premium Archetypal Analysis will give you the guidance and insights you need to embody all those wonderful things.</p>
                <p>Your Premium Archetypal Analysis will help you understand the full depths of your psyche to help you attain the rewards in life that you seek.</p>
                <p>And as soon as you pay attention to the guidance and revelations of your Premium Archetypal Analysis, you'll start noticing doorways and opportunities blossoming before you... Opportunities for financial abundance, self-discovery, and happiness.</p>
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <img src="/offer/paa/img/paa-if.png" class="paa-items">
                    </div>
                    <div class="col-sm-7 mx-auto">
                        <p><strong>#1: Individuation Fundamentals</strong></p>
                        <p>This powerful reading will familiarize you with the sacred process of Individuation, your Shadow, your Anima/Animus, and all other related entities, serving as your starting point during this transformational journey.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <img src="/offer/paa/img/paa-ai.png" class="paa-items">
                    </div>
                    <div class="col-sm-7 mx-auto">
                        <p><strong>#2: Archetypal Incarnations</strong></p>
                        <p>Each archetype comprises several incarnations, where you'll discover and make sense of all the hidden secrets and origins of your most unexplainable personality traits, tendencies, and habits.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <img src="/offer/paa/img/paa-ap.png" class="paa-items">
                    </div>
                    <div class="col-sm-7 mx-auto">
                        <p><strong>#3: Archetypal Profile</strong></p>
                        <p>Pour through the intricate details of your dominant archetype at a deep and intimate level, revealing the valuable role that your personality plays in moulding your physical reality.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <img src="/offer/paa/img/paa-ao.png" class="paa-items">
                    </div>
                    <div class="col-sm-7 mx-auto">
                        <p><strong>#4: Archetypal Odyssey</strong></p>
                        <p>Discover your archetype's journey and direction, along with upcoming obstacles that you must be weary of. This predictive reading is your personal compass to navigating your True North.</p>
                    </div>
                </div>   
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <img src="/offer/paa/img/paa-eg.png" class="paa-items">
                    </div>
                    <div class="col-sm-7 mx-auto">
                        <p><strong>#5: Archetypal Exercise Guide</strong></p>
                        <p>Translate everything into tangible action with a complete breakdown of numerous transformational exercises, activating the hidden powers and energies of your archetype and bringing it all into consciousness.</p>
                    </div>
                </div>
                
<?php
include '../inc/order-img.php';
?>                
                
                <h2 class="step8-title text-center">Affirmative Action Is Rewarded With Well Deserved Bonuses</h2>
                <p><?php echo $name;?>, begin your journey now, and  I'll reward you with 3 bonus materials that will set you on the path of limitless energy and abundance...</p> 
                <p>These 3 additional materials are my personal recommendations for mastering your self-discovery. BUT. You will only receive them IF you display your readiness by acting right now.</p>
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <img src="/offer/paa/img/chinese-zodiac-cover.png" class="bonus-items">
                    </div>
                    <div class="col-sm-7 mx-auto">
                        <p><strong>Bonus #1: Exploring Your Birthdate With The Chinese Zodiac</strong></p>
                        <p>Meet the counterpart of Western astrology – The Chinese Zodiac. Understand the Eastern influences on predictions and learn how you can apply them to predict your own future.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <img src="/offer/paa/img/discovering-aura-cover.png" class="bonus-items">
                    </div>
                    <div class="col-sm-7 mx-auto">
                        <p><strong>Bonus #2: Discovering Your Aura</strong></p>
                        <p>Each individual exudes a certain aura. Learn how you can interpret different auras of different individuals to gain maximum influence over others.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5 mx-auto">
                        <img src="/offer/paa/img/fengshui-paradigm-cover.png" class="bonus-items">
                    </div>
                    <div class="col-sm-7 mx-auto">
                        <p><strong>Bonus #3: Beginner's Guide To The Feng Shui Paradigm</strong></p>
                        <p>Maximise the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui. This in-depth guide will turn you into a true geomancy master in no time.</p>
                    </div>
                </div>
                <p>Once again, move forward to the next step, and these 3 sacred bonuses will be yours to keep.</p>
                <p>And in addition to that, I'm going to go above and beyond, and personally ensure your complete satisfaction.</p>
                <h2 class="step8-title text-center">I'm Stamping Your Personalized Archetype Analysis With Our 60-Day Money-Back Guarantee.</h2>
                <p>Within the next 60 days, starting from the day of your purchase, if you decide that your Premium Archetypal Analysis fell short of your expectations, or if you decide that you weren't satisfied with it in ANY way, this guarantee ensures that you are entitled to a rightful refund.</p>
                <p>All you have to do is send an e-mail to contact@individualogist.com, and we'll give you a 100% refund - the full amount. No explanations and no reasons will be needed. And just to be sure that you don't walk away from this empty-handed, I'll even allow you to KEEP your 3 bonuses. So at the very least, you'll be getting 3 valuable materials practically FREE.</p>
                <h2 class="step8-title text-center">All Obstacles Have Been Removed For Your One Chance At Enormous Change</h2>
                <p>Not many of us are lucky enough to have experienced the joy of knowing our True Norths, but that’s exactly what you're going to find in your Premium Archetypal Analysis.</p>
                <p>This is your one chance to come face-to-face with your archetype and be guided through a transformational journey. This is your time to realign your direction with your True North.</p>
                <p>Once again, as soon as you embark on this journey, you will instantly receive your Premium Archetypal Analysis, your 3 FREE complementary bonuses, all of which is protected by our 60-Day Money-Back Guarantee.</p>
                <p>To commence your rewarding, Individuation journey of self-discovery, happiness and infinite abundance, all you have to do is click on the button below.</p>
                
<?php
include '../inc/order-img.php';
?>                
                
                <div class="testimonial">
                    <span class="archetype-sm lover"></span>
                    <h3>"I was convinced of the power and precision..."</h3>
                    <p>My names is Janice Hickey and I am 62 years old.  I am a retired teacher and a seeker of Universal Truths and Mysteries.  My archetype is Lover and every word I have read from my Premium Archetypal Analysis has been right on target.</p>

                    <p>I was sceptical at first but as I began reading I was convinced of the power and precision of the information given.  I am now a confirmed student of this process and recommend it to any other seeker of truth on this pathway.</p>

                    <div class="testimonial-profile">
                        <img src="../img/janice-hickey.png">
                        <p>Janice Hickey, 62, Retired Teacher - Lover</p>
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
                    <span class="archetype-sm ruler"></span>
                    <h3>"As time went along, more and more seemed to come true..."</h3>
                    <p>This product is amazing. I was very scepitical at first but as time went along, more and more seemed to come true. Plus, it was filled with so much relevant information, it made it very easy to follow and recognize the signs and traits that were placed in front of me. It was a pleasure to read and piqued my interest even further. I recommend that everyone take part in this and get yourself involved in this. You won't regret it.</p>

                    <div class="testimonial-profile">
                        <img src="../img/bryan-smith.png">
                        <p>Bryan Smith, 51, City Inspector - Ruler</p>
                    </div>
                </div>

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
                    <h3>"...Helping me hone my unique characteristics..."</h3>
                    <p>The Premium Archetypal Analysis is helping me hone my unique characteristics and has really made me interested in further research into Jungian Psychology. Thanks! I will add this to my toolbox to further map out my inner world.</p> 

                    <div class="testimonial-profile">
                        <p>Ryan Evans, 33, Hairstylist - Ruler</p>
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
                    <span class="archetype-sm explorer"></span> 
                    <h3>"...Truly heal my physical and spiritual self..."</h3> 
                    <p>I have been on my spiritual journey for about a year. It wasnt until i got diagnosed with HSV did i truly began to embark on the quest of individuation and natural healing techniques. This has helped me take a better look at myself and go inward to truly HEAL my physical and spiritual self. Thank you for EVERYTHING!</p> 

                    <div class="testimonial-profile"> 
                        <p>Ciara L, 22, DOT Driver - Explorer</p> 
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

<?php
include '../inc/order-img.php';
?>                
                
            </div>
        </div>
</div>

<script type="text/javascript">
    function Helper() {
    var self = this;
    self.getDeviceType = function() {
        var screen_width = screen.width;
        var device_type = 'desktop';
        if (screen_width < 767) {
            device_type = 'mobile';
        } else if (screen_width > 767 && screen_width <= 1024) {
            device_type = 'tablet';
        }
        return device_type;
        }
    }
    window.helper = new Helper();
    window.device_type = helper.getDeviceType(); // define helper

    window.onload = function () {
        if(device_type == 'mobile') {
            $(".sidebar").css('display', 'none');
            $(".archetype-reading").css('width', '100%');
            $(".btn").css('margin-bottom', '5px');
        }
    };
</script>

        <script>
$(document).ready(function() {
  var $window = $(window);
  var $sidebar = $(".sidebar");
  var $sidebarHeight = $sidebar.innerHeight();
  var $footerOffsetTop = $("#footer").offset().bottom;
  var $sidebarOffset = $sidebar.offset();

  $window.scroll(function() {
    if($window.scrollTop() > $sidebarOffset.top) {
      $sidebar.addClass("fixed");
    } else {
      $sidebar.removeClass("fixed");
    }
    if($window.scrollTop() + $sidebarHeight > $footerOffsetTop) {
      $sidebar.css({"top" : -($window.scrollTop() + $sidebarHeight - $footerOffsetTop)});
    } else {
      $sidebar.css({"top": "0",});
    }
  });


});
        </script>
        <?php include '../inc/footer.php';?>


        </body>