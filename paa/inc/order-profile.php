<div id="sales-reading">

<?php
    $name = $_COOKIE['logic_first_name'];
    $email = $_COOKIE['logic_email'];
    $archetype = $_COOKIE['logic_archetype'];
    $vtid = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    switch (strtolower($archetype)){
                case "caregiver":
                    echo "<a class='yes cta-button' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "creator":
                    echo "<a class='yes cta-button' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "explorer":
                    echo "<a class='yes cta-button' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "hero":
                    echo "<a class='yes cta-button' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "innocent":
                    echo "<a class='yes cta-button' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "jester":
                    echo "<a class='yes cta-button' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "lover":
                    echo "<a class='yes cta-button' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "magician":
                    echo "<a class='yes cta-button' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "member":
                    echo "<a class='yes cta-button' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "outlaw":
                    echo "<a class='yes cta-button' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "ruler":
                    echo "<a class='yes cta-button' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                case "sage":
                    echo "<a class='yes cta-button' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                    break;
                default:
                    echo "<a class='yes cta-button' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here Now To Claim Your Personalized Analysis!</a>";
                }
    ?>
        <img class="payment-options" src="../img/payment-options.png">
        <ul class="tick-list">
            <li>Yes! I'm Ready To Encounter My True Self and Experience A Complete Transformation For Just $37!</li>
        </ul>
    </div>