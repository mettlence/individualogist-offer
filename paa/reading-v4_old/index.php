<?php
$PageTitle = "Individualogist.com | Reading";
include ('../inc/header.php');
?>  

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
                        <span id="dyn-header">
                        <?php echo $_GET['name']; ?>, The Layers Have Been PEELED... Your Archetype Reveals The CORE Of Your True IDENTITY.
                        </span>
                        <br>            
                        <div class="archetype-img">
                          <?php
                        switch (strtolower($_GET['archetype'])){
                        case "caregiver":
                            echo '<img src="../img/icons/caregiver.png" width="100px">';
                            break;
                        case "creator":
                            echo '<img src="../img/icons/caregiver.png" width="100px">';
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
        
        <div class="archetype-reading" id="freereading">
            <p><span class="cap"><?php echo $_GET['name']; ?></span>,</p>
            
            <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - like a dormant volcano just waiting for its time.</p>

<!--            <p>Upon closer examination of your archetype, I noticed something slightly alarming in your archetypal profile... Something that requires your urgent attention, yet extaordinarily positive.</p>-->

            <p>You're probably already aware of this, but in light of the recent events that have taken place in your life, your Archetypal Initation Cycle is forthcoming. But more importantly, it's already starting to begin.</p> 
            
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
        </div>
            
        <?php include '../inc/premium-v4.php';?>
            
        </body>
    
        <?php include '../inc/footer.php';?>