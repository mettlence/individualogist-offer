<div class="floating-cta">
    <div class="container">
        <div class="row">
            <div class="col-sm-7 text-light">
                <p class="floating-cta-p text-left">Ready to receive limitless abundance into your life by unlocking your archetypal powers?</p>
                <p class="floating-cta-p-mobile text-center">Ready to order?</p>
            </div>
            <div class="col-sm-5 text-center">
                <?php
        $name = $_GET['name'];
        $email = $_GET['email'];
        $archetype = $_GET['archetype'];
        $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
        switch (strtolower($archetype)){
                    case "caregiver":
                        echo "<a class='btn cta-button text-light' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "creator":
                        echo "<a class='btn cta-button text-light' href='http://paa-cre.individua1.pay.clickbank.net/?cbfid=27121&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "explorer":
                        echo "<a class='btn cta-button text-light' href='http://paa-exp.individua1.pay.clickbank.net/?cbfid=28787&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "hero":
                        echo "<a class='btn cta-button text-light' href='http://paa-her.individua1.pay.clickbank.net/?cbfid=28788&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "innocent":
                        echo "<a class='btn cta-button text-light' href='http://paa-inn.individua1.pay.clickbank.net/?cbfid=28789&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "jester":
                        echo "<a class='btn cta-button text-light' href='http://paa-jes.individua1.pay.clickbank.net/?cbfid=28790&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "lover":
                        echo "<a class='btn cta-button text-light' href='http://paa-lov.individua1.pay.clickbank.net/?cbfid=28791&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "magician":
                        echo "<a class='btn cta-button text-light' href='http://paa-mag.individua1.pay.clickbank.net/?cbfid=28792&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "member":
                        echo "<a class='btn cta-button text-light' href='http://paa-mem.individua1.pay.clickbank.net/?cbfid=28793&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "outlaw":
                        echo "<a class='btn cta-button text-light' href='http://paa-out.individua1.pay.clickbank.net/?cbfid=28794&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "ruler":
                        echo "<a class='btn cta-button text-light' href='http://paa-rul.individua1.pay.clickbank.net/?cbfid=28795&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    case "sage":
                        echo "<a class='btn cta-button text-light' href='http://paa-sag.individua1.pay.clickbank.net/?cbfid=30514&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                        break;
                    default:
                        echo "<a class='btn cta-button text-light' href='http://paa-car.individua1.pay.clickbank.net/?cbfid=28769&cbskin=22063&name=$name&email=$email&cbexit=194&vtid=$vtid'>Add To Cart - $37</a>";
                    }
        ?>
                
            </div>
        </div>
    </div>
</div>