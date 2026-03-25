<img class="w-100 ies-cover" src="/offer/assets/img/asm-mockup.png">
<h2 class="sub-header">Request Your Ascension Shift Mastery For Just <strike>$97</strike> $39.90 (TODAY ONLY)</h2>
<div class="token-notify" style="display: none;">
    <p><span class="name"></span>, as a valued customer, you can now gain instant access to this report by clicking the order button below, without needing to enter your credit card information again. The payment will be automatically processed through your credit card on file with Clickbank. You will receive an email containing your download/access details immediately.</p>
    <p>Your purchase will appear on your credit card statement under the name "CLKBANK*INDIVIDLOGIST". And as always, your purchase is 100% protected by our 60-day moneyback guarantee. Please <a href="https://individualogist.com/contact">contact us</a> if you have any questions.</p>
    <a class="token-purchase" href="">Buy Now With ONE Click</a>
    <a class="token-card yes" id="accept">Pay with a different credit card</a>
    <p class="token-security"><i class="fas fa-lock"></i> Your order will be processed on a secure server.</p>
    <img src="https://individualogist.com/natal/public/img/credit-cards.webp" class="credit-cards">
</div>
<?php
$name = $_GET['name'];
$email = $_GET['email'];
$archetype = $_GET['archetype'];
$str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$last = explode("/", $str);
$vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[2];
switch (strtolower($archetype)) {
    case "caregiver":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28769&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "creator":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=27121&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "explorer":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28787&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "hero":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28788&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "innocent":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28789&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "jester":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28790&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "lover":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28791&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "magician":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28792&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "member":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28793&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "outlaw":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28794&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "ruler":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=28795&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    case "sage":
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=30514&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
        break;
    default:
        echo "<a class='btn buy-button' href='http://asm.individua1.pay.clickbank.net/?cbfid=36083&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Add To Cart</a>";
}
?>
<img class="payment-options" src="https://individualogist.com/offer/paa/img/payment-options.png">
<p class='smallprint'>For The Limited Price Of Only <strike>$97</strike> $39.90</p>