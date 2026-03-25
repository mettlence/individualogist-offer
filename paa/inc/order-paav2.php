 <div class="paav2-cta">
     <div class="row">
         <div class="col-sm-6 col-md-6 col-12 mx-auto my-auto">
             <img src='https://individualogist.com/offer/assets/img/paav2-cover.png' class='paav2-cover'>
         </div>
         <div class="col-sm-6 col-md-6 col-12 mx-auto text-center my-auto">
             <p class="reg-price">Regular Price <strike>$97</strike>, <span class="glow">Today $37</span></p>

             <?php
                $name = $_GET['name'];
                $email = $_GET['email'];
                $archetype = $_GET['archetype'];
                $str = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
                $last = explode("/", $str);
                $vtid = isset($_GET['utm_content']) ? $_GET['utm_content'] : $last[3];
                switch (strtolower($archetype)) {
                    case "caregiver":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "creator":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=27121&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=27121&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "explorer":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28787&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28787&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "hero":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28788&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28788&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "innocent":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28789&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28789&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "jester":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28790&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28790&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "lover":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28791&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28791&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "magician":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28792&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28792&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "member":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28793&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28793&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "outlaw":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28794&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28794&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "ruler":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28795&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28795&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    case "sage":
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=30514&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=30514&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                        break;
                    default:
                        echo "<a class='yes cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Proceed To Checkout</span> <i class='fa fa-arrow-circle-right'></i></a>
                                <a class='no cta-link' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Gain Instant Access</a>";
                }
                ?>

             <img class="cta-guarantee" src="/offer/assets/img/guarantee.png">
             <img class="payment-options" src="/offer/paa/img/payment-options.png">
             <div class="security">
                 <p class="security-text"><i class="fa fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
             </div>
         </div>
     </div>
 </div>