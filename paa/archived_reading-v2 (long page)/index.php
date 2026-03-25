<?php
$PageTitle = "Individualogist.com | Reading";
include ('../inc/header.php');
?>
    <body>
    <div class="page-container">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 mx-auto text-center">
                    <div class="indi-logo">
                        <img src="../img/individualogist-logo2.png">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 mx-auto text-center">
                    <div class="page-header">
                      <span class="cap"><?php echo $_GET['name']; ?></span>, There's Even More <span class="purple">Revealing</span> Information About Your Archetype...
                      <br>
                      Let's <span class="purple">Proceed</span> With Your Complementary, <span class="purple">Personalized</span> Archetype Reading...
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
                    </div>
                </div>
            </div>
        </div>
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
        

<?php include '../inc/premium-v2.php';?>
  </div>
  </body>
<?php include '../inc/footer.php';?>        
