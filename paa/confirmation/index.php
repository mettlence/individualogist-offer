<?php
$PageTitle = "Individualogist.com | Request Confirmation";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
$archetype = $_GET['archetype'];
$name = $_GET['name'];
$email = $_GET['email'];
$vtid = $_GET['utm_content'];
?>
<style>
    .steps {
        box-shadow: none
    }

    .steps li {
        color: #aaa
    }

    .steps .active {
        background: #822ac2;
        color: #fff;
        text-shadow: none;
        font-weight: 700
    }

    .steps .active:after {
        border-left-color: #822ac2;
    }

    .logo {
        margin: 1em auto;
        display: block;
        position: relative;
        width: 100%;
        max-width: 250px
    }

    #main {
        max-width: 1024px;
        box-shadow: none;
        border-radius: 0
    }

    .paa-select {
        box-shadow: none
    }

    .paa-select .price {
        font-size: 2em
    }

    .indent {
        margin-left: 30px
    }

    .cta-button {
        font-family: 'Raleway', sans-serif;
        font-size: 1.2em;
        text-transform: uppercase;
        letter-spacing: 2px;
        font-weight: 700
    }

    .pop {
        position: relative;
        box-shadow: none;
        border: 2px solid #842ac2;
        transform: none;
        background: #fff;
    }

    .message {
        background: #fff;
        padding: 1em;
        border-radius: .25em;
        border: 1px solid #6a3090;
        margin: 1em auto;
        max-width: 700px
    }

    .message p {
        color: #6a3090;
        font-size: 16px;
        margin-bottom: 0;
        line-height: 1.3em
    }

    .mostvalue {
        border-top-left-radius: .5em;
        border-top-right-radius: .5em;
        position: absolute;
        top: 0;
        padding: .25em;
        width: 100%;
        line-height: 1em;
        color: #fff;
        background: #842ac2;
    }

    .congrats {
        text-shadow: none;
        color: #6a3090;
    }

    .testimonial-name {
        background: #6a3090;
    }

    .guarantee-head {
        color: #fff;
        padding: .5em;
        display: inline-block;
        background: #6a3090;
        font-weight: 700;
        font-size: 1.2em;
        border-radius: 3px;
        text-transform: uppercase;
        letter-spacing: 2px;
    }

    .footer {
        background: transparent;
        width: 90%;
        border-top: 2px solid #842ac2;
        box-shadow: none;
        max-width: 1024px
    }

    .footer p {
        color: #333;
        font-size: 12px
    }

    .footer-logo {
        filter: none
    }

    ul.tick-list li {
        padding: 8px 0 0 30px;
    }

    #paa-select .col-sm-4,
    #paa-select .col-sm-3,
    #paa-select .col-sm-5 {
        padding-left: 5px;
        padding-right: 5px
    }

    .accordion {
        width: 90%;
        padding: 10px;
        font-size: 14px;
        margin: 10px auto 0;
        border: 1px solid;
        border-radius: 3px;
    }

    .accordion:after {
        color: #8a3fc1 !important;
        margin-top: 3px
    }

    .accordion.active {
        color: #842ac2;
        background: transparent
    }

    .accordion:hover {
        background-color: rgba(132, 42, 194, 0.1);
        color: #8a3fc1
    }

    .panel {
        border-bottom: none;
        background: transparent;
        margin: auto;
    }

    #header {
        max-width: 1024px;
        margin: auto
    }

    #header::before {
        content: '';
        display: block;
        background-image: url(/offer/paa/img/step2-header-2048.png);
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        width: 100%;
        height: 220px;
    }

    @media screen and (min-width: 1200px) {
        #header::before {
            background-image: url(/offer/paa/img/step2-header-2048.png);
            background-repeat: no-repeat;
            background-size: cover;
            height: 220px;
            background-position: center;
        }
    }

    @media screen and (min-width: 992px) {
        #header::before {
            background-image: url(/offer/paa/img/step2-header-1980.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 220px;
        }
    }

    @media screen and (max-width: 768px) {
        #header::before {
            background-image: url(/offer/paa/img/step2-header-1520.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center;
            height: 220px;
        }
    }

    @media screen and (max-width: 500px) {
        #header::before {
            background-image: url(/offer/paa/img/step2-header-800.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            min-height: 220px;
        }

        .congrats {
            font-size: 1.5em
        }
    }

    @media screen and (max-width: 350px) {
        #header::before {
            background-image: url(/offer/paa/img/step2-header-640.png);
            background-repeat: no-repeat;
            background-size: contain;
            background-position: center;
            min-height: 220px;
        }
    }
</style>
<div id="checkout-wrapper">
    <!--
        <div class="container">
            <div class="row">
                <div class="col-sm-3 mx-auto">
                    <img class="logo" src="https://individualogist.com/offer/assets/img/individualogist-logo2.png" alt=""/>
                </div>
            </div>
            <div class="row mx-auto">
               <div class="col-sm-12">
                  <ol class="steps top0">
                      <li>Step 1: Archetype Reading</li>
                      <li class="active">Step 2: Select Edition</li>
                      <li>Step 3: Submit Request</li>
                  </ol>
               </div>
            </div>
        </div>
-->
    <div id="header"></div>
    <div class="container" id="main">
        <div class="row mx-auto">
            <div class="col-sm-12 text-center">
                <div class="message">
                    <p><?php echo $name; ?>, you're almost ready to commence a transformative journey leading you to <strong>abundance, purpose, and alignment.</strong> All the steps to maximize this journey are outlined in your Premium Archetypal Analysis - a life-changing report that's tailored to your <?php echo $archetype; ?> personality.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ul class="tick-list text-left">
                    <li><strong>YES! I'm Ready To Commence My Abundant Journey Of Self-Discovery And Receive...</strong></li>
                    <li><strong>My Personalized Premium Archetypal Analysis,</strong> which I will use to uncover the deepest intricacies of my personality and archetype. I will receive my analysis and everything that comes with it securely via e-mail in digital format within the next 24 hours.</li>
                    <li><strong>60 Day Money Back Guarantee</strong>, which will ensure my complete satisfaction and safeguard my experience.</li>
                    <li><strong>5 Additional Bonus Readings</strong>, which will enhance my journey of self-discovery with newfound spiritual knowledge!</li>
                    <div class="indent"><strong>Bonus #1:</strong> Dream Analysis Guide<br></div>
                    <div class="indent"><strong>Bonus #2:</strong> Active Imagination Guide<br></div>
                    <div class="indent"><strong>Bonus #3:</strong> Discovering Your Aura & What It Says About You<br></div>
                    <div class="indent"><strong>Bonus #4:</strong> Beginner's Guide To The Feng Shui Paradigm<br></div>
                    <div class="indent"><strong>Bonus #5:</strong> Exploring Your Birthdate With The Chinese Zodiac</div>
                </ul>
            </div>
            <div class="col-sm-6">
                <img class="width100" src="https://individualogist.com/offer/assets/img/paav2-cover.png">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-6 guarantee-text">
                <h5 class="guarantee-head">Satisfaction Guarantee</h5>
                <p>You will witness some of the most revealing information about yourself. If you have any questions about your analysis, simply drop us an e-mail and you'll hear back from us by the next working day!</p>
                <h5 class="guarantee-head">Transformation Guarantee</h5>
                <p>This is your gateway to encountering a true transformation - becoming better, stronger, and more aware of your true purpose. If you do not experience any transformation whatsoever, get in touch with us and we'll give you all the help and support you need.</p>
                <h5 class="guarantee-head">Support Guarantee</h5>
                <p>Unlike other programs, you have COMPLETE, 100% support from our team of reliable, customer support staff. You WILL ALWAYS have someone to help you. And you will NOT go through this alone!</p>
            </div>
            <div class="col-sm-6 testimonial-text">
                <div class="testimonial-item">
                    <div class="shadow-effect">
                        <img class="img-circle" src="https://individualogist.com/offer/paa/img/janice-hickey.png" alt="">
                        <p>"I was skeptical at first but as I began reading I was convinced of the power and precision of the information given. I am now a confirmed student of this process and recommend it to any other seeker of truth on this pathway."</p>
                    </div>
                    <div class="testimonial-name">
                        Janice Hickey
                        <br>
                        Retired Teacher, Lover Archetype
                    </div>
                </div>
                <div class="testimonial-item">
                    <div class="shadow-effect">
                        <img class="img-circle" src="https://individualogist.com/offer//paa/img/bryan-smith.png" alt="">
                        <p>"This product is amazing. I was very skepitical at first but as time went along, more and more seemed to come true. Plus, it was filled with so much relevant informnation, it made it very easy to follow and recognize the signs and traits that were placed in front of me."</p>
                    </div>
                    <div class="testimonial-name">
                        Bryan Smith
                        <br>
                        City Inspector, Ruler Archetype
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="paa-select">
            <div class="col-sm-12 text-center">
                <h2 class="congrats">Begin Your Self-Discovery Journey By Selecting Your Preferred Package!</h2>
            </div>
            <div class="col-sm-3 order-sm-1 order-3">
                <div class="paa-select">
                    <h4>Standard Edition</h4>
                    <img class="width80" src="https://individualogist.com/offer/paa/img/paav2-standard-small.png">
                    <ul class="tick-list text-left small">
                        <li>Premium Archetypal Analysis</li>
                        <li>5 Additional Bonuses</li>
                        <li>60 Day Satisfaction Guarantee</li>
                    </ul>
                    <p class="price">$37</p>
                    <?php
                    echo "<a class='btn cta-button' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28787&cbskin=30163&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'><span class='btn-text'>Start Now</span> <i class='fas fa-arrow-circle-right'></i></a>";
                    ?>
                </div>
            </div>
            <div class="col-sm-4 order-2">
                <div class="paa-select">
                    <h4><span class="silver">Silver</span> Edition</h4>
                    <img class="width80" src="https://individualogist.com/offer/paa/img/paav2-silver-small.png">
                    <ul class="tick-list text-left small">
                        <li>Premium Archetypal Analysis</li>
                        <li>5 Additional Bonuses <strong>+ 2 Special Reports</strong></li>
                        <li>60 Day Satisfaction Guarantee</li>
                        <li><strong>SILVER SPECIAL #1: Awakening Of The Anima/Animus Report</strong></li>
                        <div class="indent">Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</div>
                        <li><strong>SILVER SPECIAL #2: Stages Of Life Report</strong></li>
                        <div class="indent">Intimate insights into your personal transitions throughout the progressive phases of your growth to amplify the effects of individuation</div>
                    </ul>
                    <p class="price">$57</p>
                    <?php
                    echo "<a class='btn cta-button' href='http://paav2-silver.individua1.pay.clickbank.net/?cbfid=28787&cbskin=30164&cbtimer=68&name=$name&email=$email&vtid=$vtid'><span class='btn-text'>Start Now</span> <i class='fas fa-arrow-circle-right'></i></a>";
                    ?>
                </div>
            </div>
            <div class="col-sm-5 order-1 order-sm-3">
                <div class="paa-select pop">
                    <h4><span class="gold">Gold</span> Edition</h4>
                    <p class="small mostvalue">Most Popular - SAVE 60%!</p>
                    <img class="width80" src="https://individualogist.com/offer/paa/img/paav2-gold-small.png">
                    <ul class="tick-list text-left small">
                        <li>Premium Archetypal Analysis</li>
                        <li>5 Additional Bonuses <strong>+ 7 Special Reports</strong></li>
                        <li>60 Day Satisfaction Guarantee</li>
                    </ul>
                    <button class="accordion">Click To See The 7 Gold Special Reports</button>
                    <div class="panel">
                        <ul class="tick-list text-left small">
                            <li><strong>GOLD SPECIAL #1: Awakening Of The Anima/Animus Report</strong></li>
                            <div class="indent">Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</div>
                            <li><strong>GOLD SPECIAL #2: Stages Of Life Report</strong></li>
                            <div class="indent">Intimate insights into your personal transitions throughout the progressive phases of your growth to amplify the effects of individuation</div>
                            <li><strong>GOLD SPECIAL #3: Moon Manifestation Rituals</strong></li>
                            <div class="indent">A complete guide to creating your own manifesting rituals during a full and new moon</div>
                            <li><strong>GOLD SPECIAL #4: Soul Seeker's Guide To Dreams</strong></li>
                            <div class="indent">A journey of self-discovery through the 8 secret types of dreams and over 60 dream symbol interpretations</div>
                            <li><strong>GOLD SPECIAL #5: Crystal and Chakra Synthesis</strong></li>
                            <div class="indent">Discover how this secret connection can be the tipping point of your spiritual growth and energy alignment</div>
                            <li><strong>GOLD SPECIAL #6: True Self Anchoring</strong></li>
                            <div class="indent">A powerful guide to finding, becoming, and strenghtening your most authentic self to create everlasting purpose and abundance</div>
                            <li><strong>GOLD SPECIAL #7: Positive Energy Surge</strong></li>
                            <div class="indent">Unearth hidden ideas to attract, harness and translate positive energy into abundance, purpose, and happiness</div>
                        </ul>
                    </div>

                    <p class="price"><span class="strike">$247</span> $67 only</p>
                    <?php
                    echo "<a class='btn cta-button' href='http://paav2-gold.individua1.pay.clickbank.net/?cbfid=28787&cbskin=30165&cbtimer=68&name=$name&email=$email&vtid=$vtid'><span class='btn-text'>Start Now</span> <i class='fas fa-arrow-circle-right'></i></a>";
                    ?>
                </div>
            </div>
        </div>
    </div>

    <script>
        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var panel = this.nextElementSibling;
                if (panel.style.maxHeight) {
                    panel.style.maxHeight = null;
                } else {
                    panel.style.maxHeight = panel.scrollHeight + "px";
                }
            });
        }
    </script>
    <?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= ('/offer/common/footer.php');
    include_once($path);
    ?>