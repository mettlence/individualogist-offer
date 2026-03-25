<div id="order-area">
        <img class="order-img" src="../img/paa-cover.png">
        <div class="order-form">
            <h2 class="order-title">Receive Your Premium Archetypal Analysis For Just $37.00</h2>
                <table class="order-details">
                    <tbody>
                        <tr class="details">
                            <td class="right">Name:</td>
                            <td class="left"><span class="cap"><?php echo $_GET['name'];?></span></td>
                        </tr>
                        <tr class="details">
                            <td class="right">Email:</td>
                            <td class="left"><?php echo $_GET['email'];?></td>
                        </tr>
                        <tr class="details">
                            <!--Dynamic Archetype-->
                            <td class="right">Archetype:</td>
                            <td class="left"><span class="cap"><?php echo $_GET['archetype'];?></span></td>
                        </tr>
                    </tbody>
                </table>
            <!--Dynamic Order Link Specific To Archetype-->
            <?php
    $archetype = $_GET['archetype'];
    switch (strtolower($archetype)){
        case "caregiver":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8059'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "creator":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8084'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "explorer":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8092'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "hero":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8100'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "innocent":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8108'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "jester":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8116'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "lover":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8124'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "magician":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8133'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "member":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8141'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "outlaw":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8149'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "ruler":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8157'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        case "sage":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8165'>Click Here To Claim Your Archetypal Analysis</a>";
            break;
        default:
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8059'>Click Here To Claim Your Archetypal Analysis</a>";
    }
    ?>
            <div class="order-footer">
            <p>After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.</p>
            </div>
        </div>
    </div>
