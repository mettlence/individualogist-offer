<div class="container order-wrapper">
    <div class="row">
        <div class="col-sm-4">
            <img src="https://individualogist.com/offer/paa/img/paa-cover.png" class="w-100">
        </div>
        <div class="col-sm-8">
            <ul class="tick-list">
                <li>Regular Price <strike>$97</strike>, Today $37</li>
            </ul>

        <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $archetype = $_GET['archetype'];
        $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
        switch (strtolower($archetype)){
                    case "caregiver":
                        echo "<a class='yes cta-button w-100' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "creator":
                        echo "<a class='yes cta-button w-100' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "explorer":
                        echo "<a class='yes cta-button w-100' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "hero":
                        echo "<a class='yes cta-button w-100' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "innocent":
                        echo "<a class='yes cta-button w-100' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "jester":
                        echo "<a class='yes cta-button w-100' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "lover":
                        echo "<a class='yes cta-button w-100' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "magician":
                        echo "<a class='yes cta-button w-100' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "member":
                        echo "<a class='yes cta-button w-100' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "outlaw":
                        echo "<a class='yes cta-button w-100' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "ruler":
                        echo "<a class='yes cta-button w-100' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    case "sage":
                        echo "<a class='yes cta-button w-100' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                        break;
                    default:
                        echo "<a class='yes cta-button w-100' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart <i class='fas fa-shopping-cart'></i></a>";
                    }
        ?>
        
            <img class="payment-options" src="../img/payment-options.png">
        </div>
    </div>
</div>