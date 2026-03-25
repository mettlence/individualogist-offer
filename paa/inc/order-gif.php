<div class="container vwo-cta">
    <div class="row">
        <div class="col-sm-12">

        <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $archetype = $_GET['archetype'];
        $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $last = explode("/", $str);
        $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
        switch (strtolower($archetype)){
                    case "caregiver":
                        echo "<a class='cta-link' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "creator":
                        echo "<a class='cta-link' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "explorer":
                        echo "<a class='cta-link' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "hero":
                        echo "<a class='cta-link' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "innocent":
                        echo "<a class='cta-link' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "jester":
                        echo "<a class='cta-link' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "lover":
                        echo "<a class='cta-link' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "magician":
                        echo "<a class='cta-link' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "member":
                        echo "<a class='cta-link' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "outlaw":
                        echo "<a class='cta-link' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "ruler":
                        echo "<a class='cta-link' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    case "sage":
                        echo "<a class='cta-link' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                        break;
                    default:
                        echo "<a class='cta-link' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=27397&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><img src='https://individualogist.com/offer/paa/img/add-to-cart-gloss.gif' class='w-100'></a>";
                    }
        ?>

        </div>
    </div>
</div>