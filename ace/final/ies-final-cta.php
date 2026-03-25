<img class="w-100 ies-cover" src="/offer/assets/img/ies-cover.png">
        <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $archetype = $_GET['archetype'];
        $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        $last = explode("/", $str);
        $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[2];
        switch (strtolower($archetype)){
                    case "caregiver":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "creator":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "explorer":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "hero":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "innocent":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "jester":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "lover":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "magician":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "member":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "outlaw":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "ruler":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    case "sage":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                        break;
                    default:
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=36083&cbskin=25048&cbtimer=68&coupon=IES50&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Send Me My Individuation<br>Emergence Series For Just $18.50!</a>";
                    }
        ?>

<p class='smallprint'>For The Special Discounted Price Of Only <strike>$37</strike> $18.50</p>