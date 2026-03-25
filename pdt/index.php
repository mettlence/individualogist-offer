<?php
$PageTitle = "Premium Daily Tarot | Individualogist.com";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>
<style>
            h1,h2,h3,h4,h5,h6{font-family:'Raleway',sans-serif}
            .footer p a {color:#bc38d2}
            p,ul{font-family:'Lato',sans-serif;font-size:18px;color:inherit}
            .hero-h1{font-weight:900}
            .hero-h4{text-transform:uppercase;letter-spacing:2px;font-weight:700}
            .indi-logo {filter: drop-shadow(1px 1px 1px #000);width: 200px;position: relative;margin: 0 auto;padding: 1em;}
            .indi-logo img {width:100%}
            .sp-wrapper {width:100%;max-width:780px;text-align:justify;padding:1em;margin:1em auto;font-size:18px;}
            .strong {font-weight:700}
            .sp-title{line-height:1.2em;font-size:1.75em;text-transform:uppercase;letter-spacing:2px;font-weight:900;text-align: center;clear:both}
            .bg {position:relative;background-size:cover;background-attachment:fixed;background-position:center;background-repeat:none}
            .pdt-bg{background-image:url('https://individualogist.com/offer/assets/img/tarot-bg.jpg');}
            .bridge{position:relative;background-image:url('https://individualogist.com/offer/assets/img/bridge.jpg');padding-top:2em;padding-bottom:2em;color:#fff}
            .overlay-h{display:block;background:linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.3));top:0;left:0;bottom:0;width:100%;height:auto}
            .overlay-hero{display:block;background:linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.3));top:0;left:0;bottom:0;width:100%;height:auto;}
            .hero{padding-top:10em;padding-bottom:10em;color:#fff;text-shadow:1px 1px 1px #000;}
            .bg-black{background:#000}.bg-darker{background:#222}
            .text-white{color:#fff}
            .forest {font-size:1.2em;background-position:center;background-size:cover;width:100%;background-image:url('https://individualogist.com/offer/assets/img/forest.jpg');position:relative;padding:2em}
            .pa{position:absolute}
            .overlay-v{display:block;background:linear-gradient(to right,#000,rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0));top:0;left:0;bottom:0;width:100%;height:auto}
            .cb{clear:both}
            .img-fr{max-width:500px;position:relative;display:block;width:80%;opacity:1;padding:1em;float:right}
            .molecule,.atom{max-width:300px;padding:2em !important}
            .question{font-size:1.2em;text-transform:uppercase;font-weight:700;letter-spacing:1px;color:#333}
            .faq-wrapper{padding:2em;padding: 2em;border: 1px solid #ccc;border-radius: .5em;margin: 1em auto;}
            .buy-button{margin:1em auto;white-space:normal;font-size:1.5em;max-width:500px;background:red;text-transform:uppercase;font-weight:900;color:#fff;padding:.5em 1em;box-shadow:0 5px 15px rgba(0,0,0,.3);text-align:center;display:block;border-radius:.5em}
            .buy-button:hover{color:#fff;transition:.4s;-webkit-transition:.4s;box-shadow:0 8px 23px rgba(0,0,0,.3);border-radius:100px;transform:scale(1.05)}
            .bg-cyan{background:#69eed8;}
            .ul-crystal{list-style:none;margin-left:1em;text-align:justify;margin-bottom:20px}
            .ul-crystal > li {position: relative;margin-bottom: 5px;margin-left: 10px;}
            .ul-crystal > li:before {position: absolute;left: -40px;display: inline-block;width: 22px;height: 20px;margin-right: 1em;background: url(https://individualogist.com/offer/assets/img/crystal-icon.png) no-repeat;background-size: cover;background-position: 100% 100%;border-radius: 50%;content: "";top: 5px;}
            .smallprint{text-align:center;font-size:.8em;color:#333;font-weight:700;padding-top:.5em;color:red;opacity:.8;max-width:600px;margin:1em auto}
            .ets{width:100%;max-width:400px;display:block;margin:1em auto}
            .ets2{right:0;max-width:250px}
            .clipped {clip-path: circle(50% at 50% 50%);}
            .epp-diagram,.epp-comparison{width:100%;position:relative;display:block;margin: 1em auto;padding:1em}
            .epp-flow{width:100%;max-width:500px;position:relative;display:block;margin:1em auto;padding:1em}
            .chakra{width:80%;max-width:600px;position:relative;display:block;margin: 1em auto;padding:1em}
            .quote-card{background:#f8f8f8;padding:1em 2em;width:100%;max-width:500px;display:block;position:relative;box-shadow:0 8px 15px rgba(0,0,0,.15);border-radius:.5em;margin:2em auto}
            .story-card{background:#fff;padding:1em 2em;width:100%;display:block;position:relative;box-shadow:0 8px 15px rgba(0,0,0,.15);border-radius:.5em;margin:2em auto}
            .story-title{text-align:center;letter-spacing:2px;text-transform:uppercase;color:#666;font-weight:900}
            .story-text{text-align:center;color:#333}
            .stars{width:100px;height:30px;background:url('https://individualogist.com/offer/assets/img/5stars.png');background-size:contain;background-repeat:no-repeat;display:block;position:relative;margin: 0 auto}
            .quote-name{font-size: 14px;font-weight: 700;text-transform: uppercase;letter-spacing: 2px;color: #666;}
            .quote-text{text-align:center;color:#333}
            .quote-title{text-align:center;letter-spacing:2px;text-transform:uppercase;color:#666;font-weight:900}
            .indi-logo{position:relative;height:100px;width:200px;background:url('https://individualogist.com/offer/assets/img/individualogist-logo2.png');margin: 0 auto;display:block;background-size:contain;background-repeat:no-repeat}
            .multistep{position:relative;height:86.5px;width:100%;max-width:1024px;background:url('https://individualogist.com/offer/assets/img/multistep.png');margin: 0 auto;display:block;background-size:contain;background-repeat:no-repeat}
            .p-0{padding:0 !important}
            .product-img{display: block;position: relative;margin:1em auto;width: 100%;max-width: 400px;box-shadow:0 5px 15px rgba(0,0,0,.15);border-radius:10px}
            .warning-container{color: red;background-color: #f8d7da;border-color: #f5c6cb;border: 1px solid red;padding: .75em;border-radius: 10px;}
            .warning-title{color: red;font-weight: 700;font-size: 1.5em;margin-bottom: 0;margin-top: .5em;}
            .warning-text{color:#000;font-weight:700}
            .alert-icon{background:url('https://individualogist.com/clickbank/assets/img/alert-icon.png');width:100px;height:100px;margin:0 auto;display:block;background-size:contain;background-repeat:no-repeat;}
            .upsell-hl{text-align:center;font-weight:700;margin:0 auto;margin-bottom:.5em}
            .decline-link{color:#666;text-decoration:underline;text-align:center;margin:0 auto;font-size:14px}
            .quote-box{background:#222;box-shadow:0 5px 15px rgba(0,0,0,.15);padding:1em;max-width:700px;display:block;position:relative;margin: 1em auto;border-radius:.5em;color:#fff}
            .pda-access{width: 100%;display: block;position: relative;margin: 1em auto;padding: 1em;}
            .headline-bg{max-width:1024px;margin: 0 auto;position:relative;background:url('https://individualogist.com/offer/assets/img/bg-cosmospink.png');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;background-position:center center;padding: 1em;color:#fff;text-shadow:1px 1px 1px #000;width:100%}
            .order-title{text-shadow:none}
            .order-form{max-width:600px;float:none}
            .tick-list{margin:1em auto!important}
            .archetype-xs {top: -25px;margin: auto;position: absolute;width:50px;height:50px;left:0;right:0}
            .testimonial{border-radius:3px;margin:2em auto}
            .testimonial-author{font-weight: 700;font-style: normal!important;font-size: 14px!important;color: #fff!important;background: #842ac2;display: inline-block;padding: 0 1em;border-radius: 2px;}
            .buy-link{color: #842ac2;font-weight: 500;text-decoration: underline;margin: 1em auto;display: block;font-size: 16px;}
    .footer{width:90%;box-shadow:none;background:transparent;border-top:2px solid #842ac2}
    .indi-logo{filter:none}
    .footer p{color:#333}
    @media only screen and (max-width:768px) {.hero{padding-top:3em;padding-bottom:3em;}.epp-diagram, .epp-comparison{padding:0}.buy-button{font-size:1em}.img-fr{width:100%;position:relative;margin:0 auto}p{clear:both}.atom,.molecule{width:100%;max-width:100%}.sp-title{font-size:1.2em}.upsell-hl{font-size:1.5em}.ets2{display:none}.quote-card{margin:1em auto}.warning-container{text-align:center}.hero-h1{font-size:1.5em}.hero-h4{font-size:1.2em}.alert-icon{width:50px;height:50px}}
        </style>

        <div class="container-fluid bg pdt-bg hero">
            <div class="overlay-hero pa"></div>
                <div class="row">
                    <div class="col-sm-2 mx-auto">
                        <div class="indi-logo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mx-auto text-center">
                        <h1 class="hero-h1">What If You Could Receive Daily Guidance For Any Challenge, And Any Opportunity?</h1>
                        <h4 class="hero-h4">Tackle Each Day With Certainty and Confidence</h4>
                    </div>
                </div>
            </div>

<?php
$name = $_GET['name'];
$email = $_GET['email'];
$vtid = $_GET['utm_content'];
;?>

        <div class="salespage-start part1">
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper">
                        <p><strong>Dear <?php if (empty($_GET['archetype'])) { echo 'Truth Seeker'; } else { echo ucwords($_GET['archetype']); };?>,</strong></p>
                        <p>How many times have you dreaded getting out of bed, knowing you'd have to face a situation that was causing you worry, uncertainty, or even pain?</p>
                        <p>Some days can be such a struggle - especially when you're unsure about which way to go.</p>
                        <p>Perhaps some issues are best kept private, and you have no one to turn to for guidance or advice.</p>
                        <p>Well, you could always consult a metaphysical expert, but that would set you back at least a hundred dollars for each consultation...</p>
                        <p>Of course, that's not a luxury most of us can afford.</p>
                        <p>What if there was a way you could get the answers you seek, without breaking the bank?</p>
                        <p class="sp-title">Stretch Out Your Arms, And Receive Precise Guidance From Divine Energies</p>
                        <p>Yes, tarot cards on their own are merely blotches of ink on pieces of paper. But each card evokes a specific psychological, spiritual, and philosophical energy.</p>
                        <p>And by deciphering these mysterious energies through <strong>semiotics</strong>, we open up the mind and soul to each card's hidden message...</p>
                        <p>...Messages we can reliably use to guide our daily decisions.</p>
                        <p>The <strong>psychological energies</strong> of tarot begin from renowned psychologist Carl Jung, who explains the depths of the subconscious mind through tarot cards we unconsciously pick.</p>
                        <p>The <strong>philosophical energies</strong> of tarot stem from semiotics, the study of interpreting signs and symbols to uncover intrinsic meanings of the tarot that answer our deepest questions.</p>
                        <p>The <strong>spiritual energies</strong> of tarot gives us the opportunity to tap into a higher divine power through each card's unique vibrations.</p>
                        <p>These 3 divine pillars of the tarot present us with a reliable and precise form of guidance.</p>
                        <p>Which means to say...</p>
                        <ul class="tick-list">
                            <li>...Whether you're pondering over a unique opportunity...</li>
                            <li>...Whether you've been feeling as if your wings have been clipped...</li>
                            <li>...Whether you're thinking about making a career shift...</li>
                            <li>...Whether you're uncertain about what to do next with your life...</li>
                        </ul>
                        <p>Your Premium Daily Tarot will give you direct answers, guiding you to the correct response you need to make a massive comeback in every aspect of your life!</p>
                        <p>That's not all...</p>
                        <p class="sp-title">Reinforce Your Future With Premium Daily Tarot</p>
                        <p>Your Premium Daily Tarot provides you with <strong>specific events, energies, and actions to look out for and practice every single day.</strong></p>
                        <p>By having exclusive access to your Premium Daily Tarot in our private Member's Area, you can receive daily guidance telling you the best course of action to take and the important signs you need to look out for.</p>
                        <p>Truth be told - you will NOT be able to find this level of daily personality-based guidance ANYWHERE else.</p>
                        <p>If the Sun, Moon, and Stars all aligned... You <em>might</em> be able to find something that seems vaguely similar, but I promise you this...</p>
                        <p>...It will not give the same high-calibre, precise, and actionable insights you need to make that stark transformation in your life.</p>
                        <p>And you'll be amongst the first to experience to have this unique advantage.</p>
                        <p class="sp-title">Gain Instant Access To Your Premium Daily Tarot For Just $17 A Month</p>
                        <p>We have created what is perhaps the simplest method for you to tackle each day with reliable guidance and complete confidence.</p>
                        <p>From this day forth, you can start making grand changes in your life each day...</p>
                        <p>...And finally be able to overcome any challenge, obstacle, or opportunity that might come your way.</p>
                        
                        <img class="product-img" src="https://individualogist.com/offer/assets/img/pdt-cover.jpg">
                        
                        <div class="order-form">
                            <h2 class="order-title">Yes! Claim My Premium Daily Tarot For Just $17 A Month</h2>
                             
                            <?php
                             if (empty($name)) {
                                echo "<a class='btn buy-button' href='http://pdt.individua1.pay.clickbank.net/?cbskin=25048&cbtimer=68&vtid=$vtid'>Yes! Add To My Order!</a>";
                             } else {
                                echo "<a class='btn buy-button' href='http://pdt.individua1.pay.clickbank.net/?cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Yes! Add To My Order!</a>";
                             }
                            ?>
                            
                            <?php
                             if (empty($name)) {
                                echo "<a class='buy-link' href='http://pdt.individua1.pay.clickbank.net/?cbskin=25048&cbtimer=68&vtid=$vtid'>Click Here To Claim Your Premium Daily Tarot!</a>";
                             } else {
                                echo "<a class='buy-link' href='http://pdt.individua1.pay.clickbank.net/?cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your Premium Daily Tarot!</a>";
                             }
                            ?>
                            
                            <img src="https://individualogist.com/offer/assets/img/credit-cards.png" class="cc-icons">
                            <p class="small text-center text-dark">Your order will be processed on a secure server.</p>
                            <div class="order-footer">
                                This is a subscription-based service. You will be billed $17.00 today, and then $17.00 every month. You are free to cancel at any time.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            <div class="container-fluid bg-white text-dark">
                <div class="row">
                    <div class="faq-wrapper col-sm-8 mx-auto">
                        <p class="sp-title">Frequently Asked Questions</p>
                        <p class="question">Who Writes The Premium Daily Tarot?</p>
                        <p>Each daily reading is written by our in-house team of tarot experts who have studied analytical psychology, and like you, have also experienced remarkable changes in their lives by diving deeper into the cards.</p> 
                        <p class="question">How Can I Access My Premium Daily Tarot?</p>
                        <p>From the moment you purchase, the Premium Daily Tarot will be unlocked in your Private Member's Area, allowing you to access your Premium Daily Tarot from your computer or mobile phone (as long as you have an Internet connection). An email will be sent out to you reminding you of your login details.</p>
                        <p>If you don't receive this email - no problem! Simply drop us an email requesting for assistance and we'll get back to you within 1-2 working days.</p>
                        <p class="question">How Detailed Is Each Daily Reading?</p>
                        <p>Each daily reading ranges between 300 to 500 words, giving you a sufficient amount of details to get a sense of what aspects you should focus on each day, helping you make better decisions that are aligned to your day's energies.</p>
                        <p class="question">Can I Really Cancel Anytime?</p>
                        <p>Absolutely! Just drop us an email stating that you wish to cancel the subscription, and we'll process your cancellation within 1-2 working days. We might ask for your opinion on how we can improve your experience with us, but apart from that, you will not experience any resistance.</p>
                        
                        <img class="product-img" src="https://individualogist.com/offer/assets/img/pdt-cover.jpg">

                        <div class="order-form">
                            <h2 class="order-title">Yes! Claim My Premium Daily Tarot For Just $17 A Month!</h2>
                             
                            <?php
                             if (empty($name)) {
                                echo "<a class='btn buy-button' href='http://pdt.individua1.pay.clickbank.net/?cbskin=25048&cbtimer=68&vtid=$vtid'>Yes! Add To My Order!</a>";
                             } else {
                                echo "<a class='btn buy-button' href='http://pdt.individua1.pay.clickbank.net/?cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Yes! Add To My Order!</a>";
                             }
                            ?>
                            
                            <?php
                             if (empty($name)) {
                                echo "<a class='buy-link' href='http://pdt.individua1.pay.clickbank.net/?cbskin=25048&cbtimer=68&vtid=$vtid'>Click Here To Claim Your Premium Daily Tarot!</a>";
                             } else {
                                echo "<a class='buy-link' href='http://pdt.individua1.pay.clickbank.net/?cbskin=25048&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your Premium Daily Tarot!</a>";
                             }
                            ?>
                            
                            <img src="https://individualogist.com/offer/assets/img/credit-cards.png" class="cc-icons">
                            <p class="small text-center text-dark">Your order will be processed on a secure server.</p>
                            <div class="order-footer">
                                This is a subscription-based service. You will be billed $17.00 today, and then $17.00 every month. You are free to cancel at any time.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    <script type="text/javascript" src="https://individualogist.com/offer/paa/js/custom.js"></script>
    <script>
    //Save query string params to cookies
    $(document).ready(function(){
        var pName = getParameterByName('name');
        var pEmail = getParameterByName('email');
        var pArchetype = getParameterByName('archetype');

        var getName = getCookie('logic_first_name');
        var getEmail = getCookie('logic_email');
        var getArchetype = getCookie('logic_archetype');

        if (pName) {
            setCookie('logic_first_name', pName, '100');
        }
        if (pEmail) {
            setCookie('logic_email', pEmail, '100');
        }
        if (pArchetype) {
            setCookie('logic_archetype', pArchetype, '100');
        }
    })
    </script>
    <div id="footer" class="footer">
        <div class="indi-logo"></div>

        <p class="small">
            <a href="http://individualogist.com" target="_blank">Home</a> |
            <a href="http://individualogist.com/terms-and-conditions" target="_blank">Terms and Conditions</a> |
            <a href="http://individualogist.com/privacy-policy" target="_blank">Privacy Policy</a> |
            <a href="http://individualogist.com/contact" target="_blank">Contact</a>
        </p>
        <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright Individualogist.com. All Rights Reserved</p>
        <div class="cb-text">
            <p>Your Credit Card Statement Will Show A Charge from CLKBANK*INDIVIDLOGIST</p>
            <p>ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>
            <script src='//cbtb.clickbank.net/?vendor=individua1'></script>
        </div>
    </div>