<div class="container order-area">
    <div class="row">
        <div class="col-sm-6 mx-auto">
            <img class="order-img" src="/offer/assets/img/paa-cover.png">
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="order-form">
                <h2 class="order-title">Embark On A Journey Of Abundance & Growth With Your Personalized Analysis For Just $37!</h2>
                <table class="order-details">
                    <tbody>
                        <tr class="details">
                            <td class="right">Name:</td>
                            <td class="left"><span class="name cap"><?php echo $name;?></span></td>
                        </tr>
                        <tr class="details">
                            <td class="right">Email:</td>
                            <td class="email left"><?php echo $email;?></td>
                        </tr>
                        <tr class="details" id="arche-hide">
                            <td class="right">Archetype:</td>
                            <td class="left"><span class="archetype cap"><?php echo $archetype;?></span></td>
                        </tr>
                    </tbody>
                </table>

                <?php
    $name = $_GET['name'];
    $email = $_GET['email'];
    $archetype = $_GET['archetype'];
    $identifier = $_GET['identifier'];
    $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
    switch (strtolower($archetype)){
                case "caregiver":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "creator":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "explorer":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "hero":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "innocent":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "jester":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "lover":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "magician":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "member":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "outlaw":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "ruler":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                case "sage":
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                    break;
                default:
                    echo "<a class='yes cta-button vwo-cta' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid' target='_blank'>Claim Your Personalized Analysis!</a>";
                }
    ?>
                <img class="payment-options" src="../img/payment-options.png">
                <div class="order-footer">
                After clicking on the "Order Now" button, you will be taken to a secure order page to complete your request. Once again, your order is protected by our 60-Day Money-Back Guarantee.
                </div>
            </div>
        </div>
    </div>
</div>