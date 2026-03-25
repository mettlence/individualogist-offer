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
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "creator":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "explorer":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "hero":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "innocent":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "jester":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "lover":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "magician":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "member":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "outlaw":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "ruler":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    case "sage":
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                        break;
                    default:
                        echo "<a class='btn buy-button' href='http://ies.individua1.pay.clickbank.net/?cbfid=36083&cbskin=25048&cbtimer=68&name=$name&email=$email&cbexit=949&vtid=$vtid'>Yes, Claim My Individuation<br>Emergence Series Now</a>";
                    }
        ?>

<p class='smallprint'>For The Limited Price Of Only <strike>$197</strike> $37.00</p>