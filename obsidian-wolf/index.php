<?php
$PageTitle = "Obsidian Wolf Tooth Amulet | Individualogist.com";
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
            .indi-logo {filter:none!important;width: 200px;position: relative;margin: 0 auto;padding: 1em;}
            .indi-logo img {width:100%}
            .sp-wrapper {width:100%;max-width:720px;text-align:justify;padding:1em;margin:1em auto;font-size:18px;}
            .strong {font-weight:700}
            .footer {background:transparent;box-shadow:none;width:90%}
            .footer p{color:#333}
            .sp-title{line-height:1.2em;font-size:1.75em;text-transform:capitalize;font-weight:900;text-align: center;clear:both}
            .bg {position:relative;background-size:cover;background-position:center;background-repeat:none}
            .wolf{background-image:url('https://individualogist.com/offer/assets/img/wolf-bg-light.jpg');position:relative;}
            .wolf-dark{background-image:url('https://individualogist.com/offer/assets/img/wolf-bg-dark.jpg');position:relative;padding-top:6em;padding-bottom:6em}
            .meditateneon{position:relative;background-image:url('https://individualogist.com/offer/assets/img/bg-meditateneon.jpg');padding-top:2em;padding-bottom:2em;color:#fff;text-shadow:1px 1px 1px #000}
            .meditateneon p{font-size:1.5em}
            .overlay-h{display:block;background:linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.75));top:0;left:0;bottom:0;width:100%;height:auto}
            .overlay-hero{display:block;background:linear-gradient(60deg,rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.5));top:0;left:0;bottom:0;width:100%;height:auto;}
            .hero{padding-top:6em;padding-bottom:6em;color:#fff;text-shadow:1px 1px 1px #000;}
            .bg-black{background:#000}.bg-darker{background:#222}
            .text-white{color:#fff}
            .magicspark {font-size:1.2em;background-position:center;background-size:cover;width:100%;background-image:url('https://individualogist.com/offer/assets/img/bg-magicspark.jpg');position:relative;padding:2em}
            .pa{position:absolute}
            .overlay-v{display:block;background:linear-gradient(to right,#000,rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0));top:0;left:0;bottom:0;width:100%;height:auto}
            .cb{clear:both}
            .img-fr{max-width:500px;position:relative;display:block;width:80%;opacity:1;padding:1em;float:right}
            .molecule,.atom{max-width:300px;padding:2em !important}
            .question{font-size:1.3em;text-transform:uppercase;font-weight:700;letter-spacing:1px;color:#777}
            .faq-wrapper{padding:2em}
            .buy-button{white-space:normal;font-size:1.5em;max-width:700px;margin: 0 auto;background:red;text-transform:uppercase;font-weight:900;color:#fff;padding:.5em 1em;box-shadow:0 5px 15px rgba(0,0,0,.3);text-align:center;display:block;border-radius:.5em}
            .buy-button:hover{color:#fff;transition:.4s;-webkit-transition:.4s;box-shadow:0 8px 23px rgba(0,0,0,.3);border-radius:100px;transform:scale(1.05)}
            .bg-cyan{background:#69eed8;}
            .product-img {display: block;position: relative;margin: auto;max-width: 300px;width: 100%;}
            .cta-area{position:relative;box-shadow: 0 5px 15px rgba(0,0,0,.15);border-radius: 5px;padding: 1em;border: 2px solid #2b64d5;margin:1em auto}
            .cta-area:before{content: '';display: block;position: absolute;height: 2px;width: 100%;top: 0;background: #2b64d5;bottom: 0;left: -100%;margin: auto;}
            .cta-area:after{content: '';display: block;position: absolute;height: 2px;width: 100%;top: 0;background: #2b64d5;bottom: 0;right: -100%;margin: auto;}
            .salespage-start {overflow:hidden}
            .cta-wrapper {padding:1em;margin:1em auto}
            .cta-title{font-weight: 700;color: #2b64d5;}
            .cta-desc {font-weight:700}
            .cta-price{font-size: 2em;font-weight: 700;margin:auto;line-height:1em;font-weight:900}
            .security-text {font-size: 11px;line-height: 1;color: #333;max-width: 400px;position: relative;margin: .5em auto;text-align: center;}
            .cta-btn {background: #1aa71a;color: #fff;font-size:20px;text-transform: capitalize;padding: 1em;font-family: 'Raleway';display: block;font-weight: 700;text-align: center;border-radius: 3px;border: 2px solid #087e08;margin: 1em auto .5em;}
            .cta-btn:hover{transition:.4s;-webkit-transition:.4s;background:#0cba0c;text-decoration:none;color:#fff}
            .cta-link {display:block;margin:auto;color: #2a64d5;text-align: center;text-decoration: underline;font-size: 14px;font-weight: 700;}
            .cta-security{display:block;margin:.5em auto;max-width:350px;position:relative;width:100%}
            .ul-crystal{list-style:none;margin-left:1em;text-align:justify;margin-bottom:20px}
            .ul-crystal > li {position: relative;margin-bottom: 5px;margin-left: 10px;}
            .ul-crystal > li:before {position: absolute;left: -40px;display: inline-block;width: 22px;height: 20px;margin-right: 1em;background: url(https://individualogist.com/offer/assets/img/crystal-icon.png) no-repeat;background-size: cover;background-position: 100% 100%;border-radius: 50%;content: "";top: 5px;}
            .smallprint{text-align:center;font-size:.8em;color:#333;font-weight:700;padding-top:.5em;color:red;opacity:.8}
            .owta{width:100%;max-width:400px;display:block;margin:1em auto}
            .ets2{right:0;max-width:250px}
            .clipped {clip-path: circle(50% at 50% 50%);}
            .stone-comparison{width:100%;position:relative;display:block;margin: 1em auto;padding:1em}
            .chakra{width:80%;max-width:600px;position:relative;display:block;margin: 1em auto;padding:1em}
            .quote-card{background:#f8f8f8;padding:1em 2em;width:100%;max-width:500px;display:block;position:relative;box-shadow:0 8px 15px rgba(0,0,0,.15);border-radius:.5em;margin:2em auto}
            .stars{width:100px;height:30px;background:url('https://individualogist.com/offer/assets/img/5stars.png');background-size:contain;background-repeat:no-repeat;display:block;position:relative;margin: 0 auto}
            .quote-name{font-size: 14px;font-weight: 700;text-transform: uppercase;letter-spacing: 2px;color: #666;}
            .quote-text{text-align:center;color:#333}
            .quote-title{text-align:center;letter-spacing:2px;text-transform:uppercase;color:#666;font-weight:900}
            .indi-logo{position:relative;height:100px;width:200px;background:url('https://individualogist.com/offer/assets/img/individualogist-logo2.png');margin: 0 auto;display:block;background-size:contain;background-repeat:no-repeat}
            .multistep{position:relative;height:86.5px;width:100%;max-width:1024px;background:url('https://individualogist.com/offer/assets/img/multistep.png');margin: 0 auto;display:block;background-size:contain;background-repeat:no-repeat}
            .p-0{padding:0 !important}
            .highlight {background: linear-gradient(45deg,#03379b,#06b3fa);color: #fff;padding: 0;font-weight: 700;}
            .warning-container{color: red;background-color: #f8d7da;border-color: #f5c6cb;border: 1px solid red;padding: .75em;border-radius: 10px;}
            .warning-title{color: red;font-weight: 700;font-size: 1.5em;margin-bottom: 0;margin-top: .5em;}
            .warning-text{color:#000;font-weight:700}
            .alert-icon{background:url('https://individualogist.com/clickbank/assets/img/alert-icon.png');width:100px;height:100px;margin:0 auto;display:block;background-size:contain;background-repeat:no-repeat;}
            .upsell-hl{text-align:center;font-weight:700;margin:0 auto;margin-bottom:.5em}
            .decline-link{color:#666;text-decoration:underline;text-align:center;margin:0 auto;font-size:14px}
            .quote-box{background:#222;box-shadow:0 5px 15px rgba(0,0,0,.15);padding:1em;max-width:700px;display:block;position:relative;margin: 1em auto;border-radius:.5em;color:#fff}
            .headline-bg{max-width:1024px;margin: 0 auto;position:relative;background:url('https://individualogist.com/offer/assets/img/bg-cosmospink.png');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;background-position:center center;padding: 1em;color:#fff;text-shadow:1px 1px 1px #000;width:100%}
            @media only screen and (max-width:768px) {.buy-button{font-size:1em}.img-fr{width:100%;position:relative;margin:0 auto}p{clear:both}.atom,.molecule{width:100%;max-width:100%}.sp-title{font-size:1.2em}.upsell-hl{font-size:1.5em}.ets2{display:none}.quote-card{margin:1em auto}.warning-container{text-align:center}.hero-h1{font-size:1.5em}.hero-h4{font-size:1.2em}.alert-icon{width:50px;height:50px}}
            .owta-compare{position:relative;display:block;margin:1em auto;max-width:700px;width:100%}
        </style>

        <div class="container-fluid bg wolf hero">
            <div class="overlay-hero pa"></div>
                <div class="row">
                    <div class="col-sm-2 mx-auto">
                        <div class="indi-logo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mx-auto text-center">
                        <h1 class="hero-h1">Enhance Your <span class="highlight" style="padding:0 .2em;text-shadow:none;font-weight:900">Luck and Abundance</span><br>With This Sacred Amulet</h1>
                    </div>
                </div>
            </div>

<?php
$name = $_GET['name'];
$email = $_GET['email'];
$vtid = $_GET['utm_content'];
;?>


        <div class="salespage-start">
            <div class="container-fluid mt-3 mb-3">
                <div class="row">
                    <div class="sp-wrapper mx-auto">
                        <p class="sp-title">The Sacred Science Of Energy Transfiguration</p>
                        <p>You already know that crystals vibrate at an incredibly high frequency, and at a very precise rate - which is what gives them immense, "magic-like" healing properties...</p>
                        <img src="https://individualogist.com/offer/assets/img/atom.png" class="img-fr atom">
                        <p>Healing properties that deepen your journey of self-discovery, cleanse your aura, enhance your manifestation efforts, and protect your soul.</p>
                        <p>This works through the sacred science of "energy transfiguration".</p>
                        <p>See, although energy can't be created or destroyed, it can be converted, transformed, and transfigured.</p>
                        <p>Negative energies, with the right tools and under the right circumstances, CAN be filtered, cleansed, and transformed into POSITIVE energies!</p>
                        <p>And that's what <strong>"energy transfiguration"</strong> is all about...</p>
                        <p class="sp-title">Forged in the fiery depths of volcanoes, Obsidian is one of the few forms of volcanic glass.</p>
                        <p>Pure Obsidian does some pretty amazing stuff. BUT. Although ordinary black obsidian is a stone of protection, energy transfiguration requires a variation of it that's EXTREMELY RARE, and INCREDIBLY LIMITED.</p>
                        <img src="https://individualogist.com/offer/assets/img/magnetic.png" class="img-fr atom">
                        <p>In some rare occurrences, when magnetite nanoparticles come into contact with Obsidian during its formation, a beautiful <strong>golden</strong> sheen becomes deeply embedded into the material, charging it with positive-negative polarity...</p>
                        <p>Creating the perfect material for energy transfiguration, otherwise known as "Golden Obsidian". </p>
                        <p>This is what gives the Obsidian Wolf Tooth Amulet its ability to absorb, repel, and ultimately transform negative energy into positive energy.</p>
                        <p>And that is the exact type of material that's been used to create this beautiful, hand-crafted amulet.</p>
                    </div>
                </div>
            </div>
            <div class="container cta-area">
                <div class="row">
                    <div class="col-sm-6 mx-auto">
                        <img src="https://individualogist.com/offer/assets/img/obsidian-wolf-tooth-amulet.png" class="product-img">
                    </div>
                    <div class="col-sm-6 mx-auto">
                        <div class="cta-wrapper">
                            <h2 class="cta-title">Obsidian Wolf Tooth Amulet</h2>
                            <p class="cta-desc">Enhance Your Luck and Abundance With This Sacred Amulet</p>
                            <p class="cta-price"><span class="strike">$69.90</span> $9.90</p>
                            <a class="cta-btn" href="http://owta.individua1.pay.clickbank.net/?cbskin=28290&cbfid=44928&quantity=1">Yes! Send me My Obsidian Wolf Tooth Amulet</a>
                            <a class="cta-link" href="http://owta.individua1.pay.clickbank.net/?cbskin=28290&cbfid=44928&quantity=1">Click Here To Claim Your Obsidian Wolf Tooth Amulet For Only $9.90</a>
                            <img class="cta-security" src="https://individualogist.com/offer/assets/img/credit-cards.png">
                            <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg wolf-dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 text-light">
                            <p class="sp-title text-light text-left">Harness The Power Of One Of The World's Most Revered Symbols</p>
                            <p>According to Celtic tradition, the wolf represents <span class="highlight">learning, loyalty and intuition.</span>
                            <p>This powerful symbol allows people to <span class="highlight">harness strength and the power of self</span> when alone, awakening them to their deepest selves by imparting <span class="highlight">spiritual assistance and courage.</span></p>
                            <p>And to native americans, the wolf appears in numerous legends as a messenger and <span class="highlight">spirit guide</span> for anyone seeking spirituality.</p>
                            <p class="sp-title text-light text-left">60-Day Moneyback Guarantee</p>
                            <p>If you're not completely satisfied with your purchased, simply return the amulet to us and we'll issue you a full 100% refund - including any transaction fees.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-8 mx-auto sp-wrapper">
                        <p class="sp-title">The Obsidian Wolf Tooth Amulet can transform ALL ASPECTS of your life - love, manifestation, health, wealth, happiness....</p>
                        <img src="https://individualogist.com/offer/assets/img/obsidian-wolf-tooth-amulet.png" class="owta clipped">
                        <ul class="ul-crystal">
                            <li><strong>Enhances truths</strong> and stimulates growth</li>
                            <li><strong>Has strong</strong>, protective properties against negative energies</li>
                            <li><strong>Has strong</strong>, protective energetic barrier against psychic attacks</li>
                            <li><strong>Enhances emotional</strong> and mental clarity in the mind and soul</li>
                            <li><strong>Dissolves energy</strong> and vibrational blockages and traumas</li>
                            <li><strong>Absorbs all</strong> negative energies it comes into contact with, and "filters it" into an emission of pure, positive energy</li>
                            <li><strong>FREE Shipping & Handling</strong></li>
                            <li><strong>60-day moneyback guarantee</strong></li>
                        </ul>
                        <img src="https://individualogist.com/offer/assets/img/owta-compare.jpg" class="owta-compare">
                    </div>
                </div>
            </div>
            <div class="container cta-area">
                <div class="row">
                    <div class="col-sm-6 mx-auto">
                        <img src="https://individualogist.com/offer/assets/img/obsidian-wolf-tooth-amulet.png" class="product-img">
                    </div>
                    <div class="col-sm-6 mx-auto">
                        <div class="cta-wrapper">
                            <h2 class="cta-title">Obsidian Wolf Tooth Amulet</h2>
                            <p class="cta-desc">Enhance Your Luck and Abundance With This Sacred Amulet</p>
                            <p class="cta-price"><span class="strike">$69.90</span> $9.90</p>
                            <a class="cta-btn" href="http://owta.individua1.pay.clickbank.net/?cbskin=28290&cbfid=44928&quantity=1">Yes! Send me My Obsidian Wolf Tooth Amulet</a>
                            <a class="cta-link" href="http://owta.individua1.pay.clickbank.net/?cbskin=28290&cbfid=44928&quantity=1">Click Here To Claim Your Obsidian Wolf Tooth Amulet For Only $9.90</a>
                            <img class="cta-security" src="https://individualogist.com/offer/assets/img/credit-cards.png">
                            <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="faq-wrapper col-sm-8 mx-auto">
                    <p class="sp-title">Frequently Asked Questions</p>
                    <p class="question">Do you ship to my country?</p>
                    <p>Although we do ship to MOST countries, there are a small number of countries that we are unable to ship to. These countries include: South Africa, India, and Thailand. When completing the order form, please ensure that you've selected the correct country, and do also confirm that your shipping address is correct. If you require assistance, please get in touch with us.</p>
                    <p class="question">How much will it cost to ship to my country?</p>
                    <p>Regardless of wherever you are in the world (apart from South Africa, India, and Thailand), I will have your amulet shipped straight to your doorstep <strong>for FREE.</strong> No hidden charges, and no other costs are incurred - I guarantee it. Take it as my token of love, appreciation, and sincere gratitude for being a valued member of the Individualogist.com community :)</p>
                    <p class="question">How long will it take to receive my order?</p>
                    <p>Our shipping duration normally takes between 7 to 21 days, depending on which country you reside in. A tracking number will be provided, so you'll be able to track exactly where your amulet is during the shipping process.</p>
                    <p class="question">What if I change my mind?</p>
                    <p>I get it - purchasing things online might not be something you're used to. Perhaps you're afraid that your parcel will get lost, or perhaps you're afraid that your amulet is not going to work. That's exactly why you're 100% protected by my 60 day moneyback guarantee. All you have to do is return the amulet back to me in the next 60 days, and I'll refund your entire purchase.</p>
                    
                    <a class="cta-btn" href="http://owta.individua1.pay.clickbank.net/?cbskin=28290&cbfid=44928&quantity=1">Yes! Send me My Obsidian Wolf Tooth Amulet</a>
                    <a class="cta-link" href="http://owta.individua1.pay.clickbank.net/?cbskin=28290&cbfid=44928&quantity=1">Click Here To Claim Your Obsidian Wolf Tooth Amulet For Only $9.90</a>
                    <img class="cta-security" src="https://individualogist.com/offer/assets/img/credit-cards.png">
                    <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                </div>
            </div>
<!--
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Beautiful hue!"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"The hue of the stone is subtle, but has a beautiful golden hue under the light. Can already feel a massive difference when I meditate. My mind feels completely clear. And I haven't had an anxiety attack since wearing this."</p>
                            <p class="quote-name">Jack Thompson, 54, Yoga Instructor</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Got one for my mom"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"Got one for myself and one for my mom. She utterly loves it! Can't be anymore thankful for this!"</p>
                            <p class="quote-name">Sandra Sheldon, 32, Housewife</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Really powerful sphere"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I thought it was a little weird at first. I'm not one to believe in this sort of thing. But as they say, desperate times call for desperate measures. Truly, this necklace turned my life around. I feel energized from the moment I wake up. And I feel completely at peace. Like nothing can destroy me. Really powerful sphere. Thanks!"</p>
                            <p class="quote-name">Eric Barlow, 49, General Manager</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Made $3200 one day after wearing it"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"All I have to say is that this WORKS. At first, I was really worried about losing my job because I was not performing for a whole quarter. Exactly one day after wearing this, I could feel a surge of energy, like the whole weight of my shoulders had been lifted. I closed a $3200 sale that day! I'm so grateful for the abundance I've received :)"</p>
                            <p class="quote-name">Valerie Colbert, 27, Sales Executive</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Cleared my negative vibrations"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"Been wearing this for a week now. I can feel it clearing my negative vibrations in my sleep. So much wonderful stuff keeps happening to me. Kind of like magic! Which is weird thing to say, but it's true!! I have a healing session 3 days from now, really excited to show it off to my class!! :) Thank you so much!"</p>
                            <p class="quote-name">Maisie Hartell, 38, Energy Healer</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"In love with it"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I feel so connected to my sphere. Like it's now a part of me even though I've only been wearing it for a month. I'm completely in love with it!"</p>
                            <p class="quote-name">Sophia Turnbull, 73, Retired</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Thought I was crazy for buying this"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I honestly thought I was crazy for buying this. But when it finally came in the mail, I thought heck it's worth a shot. Literally 3 days after wearing it, really weird things started happening to me. My small investments in the stock market started going up. My boss called me in to give me a promotion (with a pretty nice bonus check). And the only thing I've been doing differently is wearing the sphere!!! If I wasn't a believer before, I AM NOW!"</p>
                            <p class="quote-name">Lauren Sommer, 36, Accountant</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Thank you! Thank you! THANK YOU!!"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I actually found out about this type of obsidian months ago. But I couldn't find it anywhere. Everyone only has pure black obsidian. This is so precious to me. I can't wait for it to start protecting me. Thank you! Thank you! THANK YOU!!"</p>
                            <p class="quote-name">Rochelle Ackerman, 51, Waitress</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                </div>
            </div>
-->
<!--
            <div class="container cta-area">
                <div class="row">
                    <div class="col-sm-6 mx-auto">
                        <img src="https://individualogist.com/offer/assets/img/obsidian-wolf-tooth-amulet.png" class="product-img">
                    </div>
                    <div class="col-sm-6 mx-auto">
                        <div class="cta-wrapper">
                            <h2 class="cta-title">Obsidian Wolf Tooth Amulet</h2>
                            <p class="cta-desc">Enhance Your Luck and Abundance With This Sacred Amulet</p>
                            <p class="cta-price"><span class="strike">$69.90</span> $9.90</p>
                            <a class="cta-btn" href="http://owta.individua1.pay.clickbank.net/?cbskin=28290">Yes! Send me My Obsidian Wolf Tooth Amulet</a>
                            <a class="cta-link" href="http://owta.individua1.pay.clickbank.net/?cbskin=28290">Click Here To Claim Your Obsidian Wolf Tooth Amulet For Only $9.90</a>
                            <img class="cta-security" src="https://individualogist.com/offer/assets/img/credit-cards.png">
                            <p class="security-text"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
                        </div>
                    </div>
                </div>
            </div>
-->
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
            <a href="https://support.individualogist.com/article/67-shipping-returns" target="_blank">Shipping & Returns</a> |
            <a href="http://individualogist.com/contact" target="_blank">Contact</a>
        </p>
        <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright <script>document.write(new Date().getFullYear());</script>. Individualogist.com. All Rights Reserved</p>
        <div class="cb-text">
            <p>Your Credit Card Statement Will Show A Charge from CLKBANK*INDIVIDLOGIST</p>
            <p>ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>
            <p>Testimonials, case studies, and examples found on this page are results that have been forwarded to us by users of the "Energy Transfiguration Sphere" products and related products, and may not reflect the typical purchaser's experience, may not apply to the average person and are not intended to represent or guarantee that anyone will achieve the same or similar results.</p>
            <script src='//cbtb.clickbank.net/?vendor=individua1'></script>
        </div>
    </div>