<?php
$PageTitle = "Individualogist.com | Reading";
include ('../inc/header.php');
?>

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
            <p>Dearest <span class="cap"><?php echo $_GET['name']; ?></span>,</p>

            <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>
                
            <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>    
            
            <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>
                
            <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>    

            <p>There is plenty at stake here, <?php echo $_GET['name'];?>. Your joy, happiness, luck, love, wealth...</p>

            <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <?php echo $_GET['archetype'];?> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

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
            
        <?php include '../inc/premium-v4-new.php';?>
        
        </div>
        
        <div class="step3-cta">
        <?php include '../inc/paa-order.php';?>
    
        <?php include '../inc/faq-v5.php'; ?>        
        </div>
  
  </body>

<?php include '../inc/footer.php';?>