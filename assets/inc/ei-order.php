    
    <div class="container order-area">
        <div class="row">
            <div class="col-sm-4 mx-auto">
                <img class="order-img" src="/offer/assets/img/ei-cover.png">
            </div>
            <div class="col-sm-6 mx-auto">
                <div class="order-form">
                    <h2 class="order-title">Receive Your Enchanted Intuition For Just <strike class="small">$67.00</strike> $19.00</h2>
                        <table class="order-details">
                            <tbody>
                                <tr class="details">
                                    <td class="right">Name:</td>
                                    <td class="left"><span class="capitalize"><?php echo $_GET['name']?></span></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Email:</td>
                                    <td class="left"><?php echo $_GET['email']?></td>
                            </tbody>
                        </table>
                    <?php
                        $name = $_GET['name'];
                        $email = $_GET['email'];

                        echo "<a class='cta-button' href='https://app.paykickstart.com/checkout/9355?first_name=$name&cc_holder_name=$name&email=$email'>Click Here To Start Your Enchanted Intuition Journey</a>";

                    ?>
                    <div class="order-footer">
                    After clicking on the "Order Now" button, you will be taken to a secure checkout area to reserve and purchase this premium product. Once again, your purchase is protected by our 60-Day Money-Back Guarantee.
                    </div>
                </div>
            </div>
        </div>
    </div>    