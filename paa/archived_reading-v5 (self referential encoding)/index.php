<?php
$PageTitle = "Individualogist.com | Reading";
include ('../inc/header.php');
?>

<script>
$(function() {
    $(".step1-reading").show();
    $(".step2-reading").hide();
    $(".step3-reading").hide();
    $(".step3-cta").hide()
    $(".step2").on('click',function() {
        $(this).hide();
        $(".step1-reading").hide(300);
        $(".step2-reading").show(600);
        $("#progress-bar li.s1").removeClass('active');
        $("#progress-bar li.s2").addClass('active');
        $('html,body').animate({
            scrollTop: $("#progress-bar").offset().top},300);
    });
    $(".step3").on('click',function() {
        $(this).hide();
        $(".step2-reading").hide(300);
        $(".step3-reading").show(600);
        $(".step3-cta").show();
        $("#progress-bar li.s2").removeClass('active');
        $("#progress-bar li.s3").addClass('active');
        $('html,body').animate({
            scrollTop: $("#progress-bar").offset().top},300);
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
    p {
        font-size: 1em !important;
    }
    .active {
        font-weight: 700 !important;
        border-radius: 20px;
        color: #fff !important;
        box-shadow: 0 5px 5px rgba(0, 0, 0, 0.5);
    }
    
    .active:after {
        content: "" !important;
    }
    .fb-page {
        filter: drop-shadow(0 0 10px rgba(0, 0, 0, 0.5));
        margin: 2em auto;
        max-width: 100%;
        width: 500px;
        display: block;
        padding: 0;
        position: relative;
        float: none;
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
        clear: both;
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
                    <h1><strong>PRIVATE AND CONFIDENTIAL:</strong></h1>
                    <h2><strong><span class="cap"><?php echo $_GET['name'];?></span>, The Layers Have Been PEELED... Your Archetype Reveals The CORE Of Your True IDENTITY. </strong></h2>
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
                </div>
                </div>
            </div>
        </div>
        
        <div class="archetype-reading">
            <div class="step1-reading">                
            <p><span class="cap"><?php echo $_GET['name']; ?></span>,</p>
                
            <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

            <p>You're probably already aware of this, but in light of the recent events that have taken place in your life, your Archetypal Initiation Cycle is forthcoming. But more importantly, it's already starting to begin.</p> 
            
            <p>This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of a several weeks - allowing you to unblock all negative vibrations surrounding you to attain the unthinkable.</p>

            <p>I'm sure you've noticed some rather peculiar occurrences over the last few days - perhaps in your emotions or surroundings... These are all indications of the period of transformation, emergence, and energies.</p>

            <p>There is plenty at stake here, <?php echo $_GET['name'];?>. Your joy, happiness, luck, love, wealth...</p>

            <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. There is no better time for your self-exploration as you encounter your archetype.</p>

            <p>It is, however, paramount that you act upon your instincts, trust in your intuition, and take massive amounts of action. It is also crucial that you leverage on this energetic shift to catapult your growth forward. That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

            <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>

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
            
        <?php include '../inc/premium-v5.php';?>
        
        </div>
        
        <div class="step3-cta">
        <?php include '../inc/paa-order.php';?>
    
        <?php include '../inc/faq-v5.php'; ?>        
        </div>
        
        </body>
    
        <?php include '../inc/footer.php';?>