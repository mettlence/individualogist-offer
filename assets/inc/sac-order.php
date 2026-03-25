<div class="container order-area">
    <div class="row">
        <div class="col-sm-6 mx-auto">
        <img class="order-img" src="/offer/assets/img/sac-cover.png">
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="order-form">
                <h2 class="order-title">Receive Your Sacred Archetypal Collection For Just $17.00</h2>
                    <table class="order-details">
                        <tbody>
                            <tr class="details">
                                <td class="right">Name:</td>
                                <td class="left"><span class="capitalize"><?php echo $_GET['name']?></span></td>
                            </tr>
                            <tr class="details">
                                <td class="right">Email:</td>
                                <td class="left"><?php echo $_GET['email']?></td>
                            </tr>
                            <tr class="details">
                                <td class="right">Archetype:</td>
                                <td class="left"><span class="capitalize"><?php echo $_GET['archetype']?></span></td>
                            </tr>
                        </tbody>
                    </table>
                <!--Dynamic Order Link Specific To Archetype-->
    <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $archetype = $_GET['archetype'];
    $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
    switch (strtolower($archetype)){
        case "caregiver":
            echo "<a class='cta-button' href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "creator":
            echo "<a class='cta-button' href='http://sac-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "explorer":
            echo "<a class='cta-button' href='http://sac-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "hero":
            echo "<a class='cta-button' href='http://sac-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "innocent":
            echo "<a class='cta-button' href='http://sac-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "jester":
            echo "<a class='cta-button' href='http://sac-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "lover":
            echo "<a class='cta-button' href='http://sac-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "magician":
            echo "<a class='cta-button' href='http://sac-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "member":
            echo "<a class='cta-button' href='http://sac-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "outlaw":
            echo "<a class='cta-button' href='http://sac-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "ruler":
            echo "<a class='cta-button' href='http://sac-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        case "sage":
            echo "<a class='cta-button' href='http://sac-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
            break;
        default:
            echo "<a class='cta-button' href='http://sac-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim Your Sacred Archetypal Collection!</a>";
    }
    ?>
                <div class="order-footer">
                    After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
                </div>
            </div>
        </div>
    </div>   
</div>