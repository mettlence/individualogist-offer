    
<div class="container order-area">
    <div class="row">
        <div class="col-sm-4 mx-auto">
                <?php
                $element = $_GET['element'];
                switch (strtolower($element)){
                case "air":
                    echo "<img class='order-img' src='/offer/assets/img/ep-product-air.png'>";
                    break;
                case "water":
                    echo "<img class='order-img' src='/offer/assets/img/ep-product-water.png'>";
                    break;
                case "fire":
                    echo "<img class='order-img' src='/offer/assets/img/ep-product-fire.png'>";
                    break;
                case "earth":
                    echo "<img class='order-img' src='/offer/assets/img/ep-product-earth.png'>";
                    break;
                default:
                    echo "<img class='order-img' src='/offer/assets/img/ep-product-air.png'>";
            }
            ?>        
        </div>
        <div class="col-sm-6 mx-auto">
            <div class="order-form">
                <h2 class="order-title">Begin Your Elemental Journey By Requesting Your Elemental Paradigm!</h2>
                    <table class="order-details">
                        <tbody>
                            <tr class="details">
                                <td class="right">Name:</td>
                                <td class="left"><span class="capitalize"><?php echo $_GET['name']?></span></td>
                            </tr>
                            <tr class="details">
                                <td class="right">Email:</td>
                                <td class="left"><?php echo $_GET['email']?></td>
                            <tr class="details">
                                <td class="right">Element:</td>
                                <td class="left"><span class="capitalize"><?php echo $_GET['element']?></span></td>
                            </tr>
                        </tbody>
                    </table>

                <?php
            $name = $_GET['name'];
            $email = $_GET['email'];
            $element = $_GET['element'];
            $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
            switch (strtolower($element)){
                    case "air":
                        echo "<a class='cta-button' href='http://ep-air.individua1.pay.clickbank.net/?cbfid=31777&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim My Elemental Paradigm Now!</a>";
                        break;
                    case "earth":
                        echo "<a class='cta-button' href='http://ep-earth.individua1.pay.clickbank.net/?cbfid=31777&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim My Elemental Paradigm Now!</a>";
                        break;
                    case "fire":
                        echo "<a class='cta-button' href='http://ep-fire.individua1.pay.clickbank.net/?cbfid=31777&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim My Elemental Paradigm Now!</a>";
                        break;
                    case "water":
                        echo "<a class='cta-button' href='http://ep-water.individua1.pay.clickbank.net/?cbfid=31777&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim My Elemental Paradigm Now!</a>";
                        break;
                    default:
                        echo "<a class='cta-button' href='http://ep-air.individua1.pay.clickbank.net/?cbfid=31777&cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Claim My Elemental Paradigm Now!</a>";
                }
                ?>
                
                <div class="order-footer">
                After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
                </div>
            </div>
        </div>
    </div>   
</div>