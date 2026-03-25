    <div class="order-area">
        <img class="order-img" src="/offer/assets/img/dys-cover.png">
        <div class="order-form">
            <h2 class="order-title">Receive Your Diminishing Your Shadow Report For Just $47.00</h2>
            <!--Dynamic Order Link Specific To Archetype-->
            <?php
    switch(strtolower($_GET['archetype'])){
        case "caregiver": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8060'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8060?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "creator": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8086'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8086?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "explorer": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8093'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8093?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "hero": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8101'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8101?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "innocent": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8109'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8109?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "jester": //Form Page
             echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8117'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8117?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "lover": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8125'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8125?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "magician": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8134'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8134?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "member": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8142'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8142?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "outlaw": //Form Page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8150'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8150?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "ruler":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8158'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8158?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        case "sage":
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8166'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8166?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
            break;
        default: //Any page that is not defined in this switch will lead to this page
            echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/8060'>Click Here To Order Now</a><br><a class='decline' href='https://app.paykickstart.com/checkout/8060?nothanks=1'>No Thanks, I Don't Need This Right Now</a>";
    }
    ?>
            <div class="order-footer">
            After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
            </div>
        </div>
    </div>    