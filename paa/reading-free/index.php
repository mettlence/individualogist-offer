<?php
$PageTitle = "Individualogist.com | Reading";
include ('../inc/header.php');
?>

<script>
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

    $(function () {
        var url_string = window.location.href; //window.location.href
        var url = new URL(url_string);
        var name = url.searchParams.get("name");
        var email = url.searchParams.get("email");
        var archetype = url.searchParams.get("archetype");
        if(device_type == 'mobile') {
            window.location.href = "https://individualogist.com/offer/paa/reading-free/mobile/?name=" + name +"&email=" + email +"&archetype=" + archetype
        }else if(device_type == 'tablet'){
            window.location.href = "https://individualogist.com/offer/paa/reading-free/mobile/?name=" + name +"&email=" + email +"&archetype=" + archetype
        }
    });
$(function() {
    $(".step1-reading").show();
    $(".step2-reading").hide();
    $(".step3-reading").hide();
    $(".step4-reading").hide();
    $(".step4-cta").hide();
    $(".step2").on('click',function() {
        $(this).hide();
        $(".step1-reading").hide(300);
        $(".step2-reading").show(600);
        $("#progress-bar li.s1").removeClass('active');
        $("#progress-bar li.s2").addClass('active');
        $('html,body').animate({
            scrollTop: $(".archetype-reading").offset().top},300);
    });
    $(".step3").on('click',function() {
        $(this).hide();
        $(".step2-reading").hide(300);
        $(".step3-reading").show(600);
        $("#progress-bar li.s2").removeClass('active');
        $("#progress-bar li.s3").addClass('active');
        $('html,body').animate({
            scrollTop: $(".archetype-reading").offset().top},300);
    });
    $(".step4").on('click',function() {
        $(this).hide();
        $(".step3-reading").hide(300);
        $(".step4-reading").show(600);
        $(".step4-cta").show(600);
        $('html,body').animate({
            scrollTop: $(".archetype-reading").offset().top},300);
    });
});
</script>

<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">

<style>
    p{font-size:1.1em}    
.paav2-cta{background:linear-gradient(45deg,#842ac2,#420f65);box-shadow:0 5px 15px rgba(0,0,0,.15);border-radius:.5em;padding:1em;width:100%;margin:2em auto}.reg-price{font-size:2em!important;line-height:1em;text-align:center;font-weight:700;color:#fff}.cta-btn{white-space:normal;margin:1em auto;border-radius:100px;background:red;color:#fff;text-transform:uppercase;box-shadow:0 5px 15px rgba(0,0,0,.15);font-weight:700;padding:.5em 1em;display:block;font-size:1.5em;}.cta-btn:hover{color:#333;transition:.4s;-webkit-transition:.4s;background:gold}.cta-link:hover{color:#fff}.payment-options{margin:1em auto;display:inline-block;position:relative;max-width:250px;width:100%}.paav2-cover{position:relative;display:inline-block;height:auto;width:100%}.cta-guarantee{width:50px;height:50px;position:relative;margin:0 auto;display:inline-block}.paav2-cta:hover{transition:.4s;transform:scale(1.05)}.cta-link{color:#fff;text-decoration:underline;display:block;margin:1em auto}.paa-items{border-radius:.5em;filter:drop-shadow(0 5px 15px rgba(0,0,0,.15))}.push-down{margin-top:3em}.glow{text-shadow:0 0 15px #fff,0 0 20px #fff}@media only screen and (max-width:768px){.push-down{margin-top:0}.cta-btn{font-size:1.3em}}@keyframes pulse-red{0%{transform:scale(.95);box-shadow:0 0 0 0 rgba(255,82,82,.7)}70%{transform:scale(1);box-shadow:0 0 0 10px rgba(255,82,82,0)}100%{transform:scale(.95);box-shadow:0 0 0 0 rgba(255,82,82,0)}}.security-text{font-size: 11px!important;line-height: 1;color:#fff}
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
    .faq-header{font-weight: 700;text-align: center;letter-spacing: 2px;text-transform: uppercase;font-size: 1.5em;color: #666;}
    .testimonial{border:2px solid #a51fa5;border-radius:.5em;box-shadow:0 5px 15px rgba(0,0,0,.15)}
    .testimonial h3{color:#a51fa5;text-transform: uppercase;letter-spacing: 2px;font-weight: 700;margin: 1em auto;}
    .testimonial-profile p{font-weight: 700;text-align: center;letter-spacing: 2px;text-transform: uppercase;color: #666;}
    .quote{background:#a51fa5}
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
    .bonusvalue {color:red}
    .bg-thunderstorm{background:url('../img/thunderstorm-bg.jpg');background-attachment: fixed;background-size: cover;position:relative;margin-bottom:-30px}
    .overlay{width: 100%;background: linear-gradient(60deg,rgba(0, 0, 0, .9),rgba(0,0,0,0),rgba(0,0,0,.8)) !important;height: 100%;z-index:0;position: absolute;top: 0;left: 0;right: 0;}
    .page-header{color: #fff;text-shadow: 1px 1px 1px #000;letter-spacing: 3px;text-transform: uppercase;font-size:1.2em}
    .page-container{background:#222;padding-bottom:2em}
    .archetype-reading{box-shadow: 0 0 10px #fff;border-radius: .5em;width:100%;max-width:900px!important}
    .sub-header{padding: .5em;text-transform: uppercase;color: #a51fa5;font-size: 1.5em;letter-spacing: 3px;clear: both;box-shadow: none;border-bottom: 1px solid #a51fa5;border-radius: 0;border-top:0;border-left:0;border-right:0}
    .step-btn{background: #ff0000;font-size: 1.2em;box-shadow: 0 5px 20px rgba(0,0,0,.3);color:#fff;border-bottom:3px solid #c51111}
    .step-btn:hover{background:#a51fa5;box-shadow:0 0 15px rgba(0,0,0,.15);color:#fff;border-bottom:3px solid #881988;bottom:3px}
    .paa-items {max-height: 200px;margin: 1em auto;position: relative;display: block;filter: drop-shadow(0 5px 10px rgba(0,0,0,0.3));}
    .img-mw600{max-width: 600px;display: block;margin: auto;width:100%}
    .accordion{font-size:1em;background:#fff}
    .active{font-weight:auto;box-shadow:none;color:purple;border-radius:none}
    active, .accordion:hover {background-color: inherit;color: inherit;}
    .panel {font-size:14px;margin-top:.5em}
    #faq-area{width:100%}
    .row{clear:both}
    .vwo-cta{margin:1em auto}
    .great-vibes {font-family: 'Great Vibes',sans-serif;font-size: 32px!important;font-weight: 700}
    ul{font-size:16px !important}
    .glow{text-shadow:0 0 10px #fff}
    #undefined-alert{height:100%;padding:3em;display:none;margin-bottom:0}
    .headline{font-weight: 900;color: #fff;text-transform: uppercase;text-align: center;letter-spacing: 3px;font-size: 2em;font-family:inherit;text-shadow: 1px 1px #000, 0 0 50px #000;}
    .archetype-img{filter: drop-shadow(0 15px 30px rgba(0,0,0,.5))!important;}
    .p-headline{text-transform:uppercase;font-size:16px;letter-spacing:3px}
    @media only screen and (max-width: 768px) {
        .progress-breadcrumb li {
            width: 100%;
        }
        .step-btn{width:100%}
    }
    .step-btn:after{font-family:'FontAwesome';content:'\f0a9';padding-left:10px;}
</style>

<?php
    // Define possible archetypes
    $archetypelist = array("caregiver", "creator", "explorer", "hero", "innocent", "jester", "lover", "magician", "member", "outlaw", "ruler", "sage");
    $archetype = strtolower($_GET['archetype']);
    if (!in_array($archetype, $archetypelist)) {
        echo "<style>.page-container{display:none;}#undefined-alert{display:block;}</style>";
    }
?>

    <div class="container-fluid bg-thunderstorm" id="undefined-alert">
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
                    <p><strong>Please <a href="/lp/discover/?new">enter your details again</a> to generate your free reading!</strong></p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mx-auto">
                <a class="step-btn" href="/lp/discover/?new" style="padding-top:18px">Free Archetype Reading</a>
            </div>
        </div> 
    </div>

    <div class="page-container">
        <div class="container-fluid bg-thunderstorm">
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
                        <h2><strong><span class="glow"><?php echo $_GET['name'];?></span>, Your Spectacular <?php echo $_GET['archetype'];?> Archetype Will Guide You Through A Remarkable Transformation In 3 Days</strong></h2>
                        <p class="p-headline">Your Archetype Is <strong>The <?php echo $archetype;?></strong></p>
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

<!--
                    <p>This Private Archetype Reading Has Been Prepared For:</p>
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
-->
                </div>
                </div>
            </div>
        </div>

        <div class="archetype-reading">
            <div class="step1-reading">
            <p class="great-vibes">Dearest <span class="cap"><?php echo $_GET['name']; ?></span>,</p>

            <p>Individuation is the process of uncovering who you are. But it’s not just about revealing the parts of your ‘self’ that you know but also the parts of yourself that you don’t know, that you keep secret or deny.</p>

            <p>This archetype reading is one of the ways in which you can learn more about yourself.</p>

            <p>It will give you a more in-depth understanding of how and why you do certain things, leading you to a journey called ‘life’ with a higher level of success, joy, and abundance.</p>

            <p>See, it’s when you shine the light of awareness upon your ‘self’ that you start to discover that sometimes it’s not YOUR fault if your life is NOT moving in the direction of your dreams...</p>

            <p>Instead, there are some things that you need to learn to do, or there’s a hurdle you need to overcome, a challenge you need to face, a habit you need to master or something in your psyche that you need to balance and resolve so that you can move FORWARD.</p>

            <p>And as we struggle to "force" our way to breakthroughs, we're often bested by negative energies, a misguided intrinsic compass, and in eventuality... We lose our sense of self.</p>

            <p>We lose our confidence and let go of our dreams...</p>

            <p>Perhaps you feel you're not ‘good enough’; you're just not destined for abundance.</p>

            <p>BUT, <span class="cap"><?php echo $_GET['name']; ?></span> it DOES NOT have to be this way.</p>

            <p class="text-center"><strong>See, when you start to look DEEPER within your ‘self’, you begin to notice internal patterns that can bring epiphanic realizations, powerful changes, and the outcomes you expect.</strong></p>

            <p>In other words... When you look deeper into your archetype, you can <strong>fast-track your evolution onto the good stuff in life...</strong> Instead of wasting YEARS looping over and over again, unconsciously dwelling on the same lessons...</p>

            <p>Everything that exists here on earth is growing and developing into its ideal form, including you.</p>

            <p>So, pay close attention, and go through this reading to the end, <span class="cap"><?php echo $_GET['name']; ?></span>.</p>

            <p class="text-center"><strong>Because you're about to discover how you can evolve into the BEST and MOST ABUNDANT version of you.</strong></p>

            <button class="step-btn step2">Start <span class="cap"><?php echo $_GET['name']; ?></span>'s Archetype Reading</button>
        </div>

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

        <?php include 'salesreading.php';?>

        </div>
    </div>
</body>

        <?php include '../inc/footer.php';?>