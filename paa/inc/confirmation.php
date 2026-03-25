<?php
$archetype = $_GET['archetype'];
$name = $_GET['name'];
$email = $_GET['email'];
$vtid = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
?>

    <div class="container mt-3 mb-3">
        <div class="row" id="paa-select">
            <div class="col-sm-9 mx-auto text-center">
                <h2 class="congrats">Select Your Preferred Self-Discovery Package By Clicking 'Start Now'!</h2>
            </div>
            <div class="col-cs-4 paa-select">
                <h4>Standard Analysis</h4>
                <img class="width80" src="../img/paa-cover-standard.png">
                <ul class="tick-list text-left small">
                    <li>My Premium Archetypal Analysis</li>
                    <li>My 3 Additional Bonuses</li>
                    <li>60 Day Satisfaction Guarantee</li>
                </ul>
                <p class="price">$37</p>
    <?php
    switch (strtolower($archetype)){
        case "caregiver":
            echo "<a class='cta-button' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "creator":
            echo "<a class='cta-button' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "explorer":
            echo "<a class='cta-button' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "hero":
            echo "<a class='cta-button' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "innocent":
            echo "<a class='cta-button' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "jester":
            echo "<a class='cta-button' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "lover":
            echo "<a class='cta-button' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "magician":
            echo "<a class='cta-button' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "member":
            echo "<a class='cta-button' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "outlaw":
            echo "<a class='cta-button' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "ruler":
            echo "<a class='cta-button' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "sage":
            echo "<a class='cta-button' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        default:
            echo "<a class='cta-button' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
    }
    ?>
            </div>
            <div class="col-cs-4 paa-select">
                <h4><span class="silver">Silver</span> Analysis</h4>
                <img class="width80" src="../img/paa-cover-silver.png">
                <ul class="tick-list text-left small">
<!--
                    <li>My Premium Archetypal Analysis</li>
                    <li>My 3 Additional Bonuses</li>
                    <li>60 Day Satisfaction Guarantee</li>
-->
                    <li><strong>SILVER SPECIAL: Awakening Of The Anima/Animus Report</strong></li>
			<div class="indent">Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</div>
                </ul>
                <p class="price">$67</p>
<?php
    switch (strtolower($archetype)){
        case "caregiver":
            echo "<a class='cta-button' href='http://paa-car-silver.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "creator":
            echo "<a class='cta-button' href='http://paa-cre-silver.individua1.pay.clickbank.net/?cbfid=27121&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "explorer":
            echo "<a class='cta-button' href='http://paa-exp-silver.individua1.pay.clickbank.net/?cbfid=28787&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "hero":
            echo "<a class='cta-button' href='http://paa-her-silver.individua1.pay.clickbank.net/?cbfid=28788&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "innocent":
            echo "<a class='cta-button' href='http://paa-inn-silver.individua1.pay.clickbank.net/?cbfid=28789&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "jester":
            echo "<a class='cta-button' href='http://paa-jes-silver.individua1.pay.clickbank.net/?cbfid=28790&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "lover":
            echo "<a class='cta-button' href='http://paa-lov-silver.individua1.pay.clickbank.net/?cbfid=28791&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "magician":
            echo "<a class='cta-button' href='http://paa-mag-silver.individua1.pay.clickbank.net/?cbfid=28792&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "member":
            echo "<a class='cta-button' href='http://paa-mem-silver.individua1.pay.clickbank.net/?cbfid=28793&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "outlaw":
            echo "<a class='cta-button' href='http://paa-out-silver.individua1.pay.clickbank.net/?cbfid=28794&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "ruler":
            echo "<a class='cta-button' href='http://paa-rul-silver.individua1.pay.clickbank.net/?cbfid=28795&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "sage":
            echo "<a class='cta-button' href='http://paa-sag-silver.individua1.pay.clickbank.net/?cbfid=30514&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        default:
            echo "<a class='cta-button' href='http://paa-car-silver.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
    }
    ?>            
            
        </div>
            <div class="col-cs-4 paa-select pop">
                <p class="value">Most Value!</p>
                <h4><span class="gold">Gold</span> Analysis</h4>
                <img class="width80" src="../img/paa-cover-gold.png">
                <ul class="tick-list text-left small">
<!--
                    <li>My Premium Archetypal Analysis</li>
                    <li>My 3 Additional Bonuses</li>
                    <li>60 Day Satisfaction Guarantee</li>
-->
                    <li><strong>GOLD SPECIAL: Awakening Of The Anima/Animus Report</strong></li>
			<div class="indent">Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</div>
                    <li><strong>GOLD SPECIAL: My Stages Of Life Report</strong></li>
			<div class="indent">Intimate insights into your personal transitions throughout the progressive phases of your growth to amplify the effects of individuation</div>
                </ul>
                <p class="price"><span class="strike">$197</span> <span style="color:red">$97</span></p>
<?php
    switch (strtolower($archetype)){
        case "caregiver":
            echo "<a class='cta-button' href='http://paa-car-gold.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "creator":
            echo "<a class='cta-button' href='http://paa-cre-gold.individua1.pay.clickbank.net/?cbfid=27121&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "explorer":
            echo "<a class='cta-button' href='http://paa-exp-gold.individua1.pay.clickbank.net/?cbfid=28787&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "hero":
            echo "<a class='cta-button' href='http://paa-her-gold.individua1.pay.clickbank.net/?cbfid=28788&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "innocent":
            echo "<a class='cta-button' href='http://paa-inn-gold.individua1.pay.clickbank.net/?cbfid=28789&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "jester":
            echo "<a class='cta-button' href='http://paa-jes-gold.individua1.pay.clickbank.net/?cbfid=28790&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "lover":
            echo "<a class='cta-button' href='http://paa-lov-gold.individua1.pay.clickbank.net/?cbfid=28791&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "magician":
            echo "<a class='cta-button' href='http://paa-mag-gold.individua1.pay.clickbank.net/?cbfid=28792&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "member":
            echo "<a class='cta-button' href='http://paa-mem-gold.individua1.pay.clickbank.net/?cbfid=28793&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "outlaw":
            echo "<a class='cta-button' href='http://paa-out-gold.individua1.pay.clickbank.net/?cbfid=28794&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "ruler":
            echo "<a class='cta-button' href='http://paa-rul-gold.individua1.pay.clickbank.net/?cbfid=28795&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        case "sage":
            echo "<a class='cta-button' href='http://paa-sag-gold.individua1.pay.clickbank.net/?cbfid=30514&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
            break;
        default:
            echo "<a class='cta-button' href='http://paa-car-gold.individua1.pay.clickbank.net/?cbfid=28769&cbskin=21003&name=$name&email=$email&vtid=$vtid'>Start Now</a>";
    }
    ?>            
            
            </div>
            <img class="col-sm-9 payment-options" src="../img/payment-options.png">
            <div class="col-sm-9 text-center mx-auto small"><img class="secure-icon" src="../img/secure-icon.png"> All orders are processed on a highly secure server using SSL technology.</div>
        </div>
    </div>