<?php
$PageTitle = "Energy Transfiguration Reading | Individualogist.com";
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
            .sp-wrapper {width:100%;max-width:900px;text-align:justify;padding:1em;margin:1em auto;font-size:18px;}
            .strong {font-weight:700}
            .sp-title{line-height:1.2em;font-size:1.75em;text-transform:uppercase;letter-spacing:2px;font-weight:900;text-align: center}
            .bg {position:relative;background-size:cover;background-attachment:fixed;background-position:center;background-repeat:none}
            .squaresphere{background-image: url(https://individualogist.com/offer/assets/img/crystalball-bg.jpg);}
            .meditateneon{position:relative;background-image:url('https://individualogist.com/offer/assets/img/bg-meditateneon.jpg');padding-top:2em;padding-bottom:2em;color:#fff;text-shadow:1px 1px 1px #000}
            .meditateneon p{font-size:1.5em}
            .overlay-h{display:block;background:linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.75));top:0;left:0;bottom:0;width:100%;height:auto}
            .overlay-hero{display:block;background:linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.75));top:0;left:0;bottom:0;width:100%;height:auto;border-radius:0 0 20% 20%}
            .hero{padding-top:6em;padding-bottom:6em;color:#fff;text-shadow:1px 1px 1px #000;}
            .bg-black{background:#000}.bg-darker{background:#222}
            .text-white{color:#fff}
            .magicspark {font-size:1.2em;background-position:center;background-size:cover;width:100%;background-image:url('https://individualogist.com/offer/assets/img/bg-magicspark.jpg');position:relative;padding:2em}
            .pa{position:absolute}
            .overlay-v{display:block;background:linear-gradient(to right,#000,rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0));top:0;left:0;bottom:0;width:100%;height:auto}
            .cb{clear:both}
            .img-fr{max-width:500px;position:relative;display:block;width:80%;opacity:1;padding:1em;float:right}
            .molecule,.atom{max-width:300px;padding:2em !important}
            .question{font-size:1.3em;text-transform:uppercase;font-weight:700;letter-spacing:1px;color:#69eed8;text-shadow:0 0 5px rgba(0, 255, 213, 0.65), 0 0 10px rgba(105, 238, 216, 0.1)}
            .faq-wrapper{padding:2em}
            .buy-button{white-space:normal;font-size:1.5em;max-width:700px;margin: 0 auto;background:red;text-transform:uppercase;font-weight:900;color:#fff !important;padding:.5em 1em;box-shadow:0 5px 15px rgba(0,0,0,.3);text-align:center;display:block;border-radius:.5em}
            .buy-button:hover{color:#fff;transition:.4s;-webkit-transition:.4s;box-shadow:0 8px 23px rgba(0,0,0,.3);border-radius:100px;transform:scale(1.05)}
            .bg-cyan{background:#69eed8;}
            .ul-crystal{list-style:none;margin-left:1em;text-align:justify;margin-bottom:20px}
            .ul-crystal > li {position: relative;margin-bottom: 5px;margin-left: 10px;}
            .ul-crystal > li:before {position: absolute;left: -40px;display: inline-block;width: 22px;height: 20px;margin-right: 1em;background: url(https://individualogist.com/offer/assets/img/crystal-icon.png) no-repeat;background-size: cover;background-position: 100% 100%;border-radius: 50%;content: "";top: 5px;}
            .smallprint{text-align:center;font-size:.8em;color:#333;font-weight:700;padding-top:.5em;color:red;opacity:.8}
            .ets{width:100%;max-width:400px;display:block;margin:1em auto}
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
            .warning-container{color: red;background-color: #f8d7da;border-color: #f5c6cb;border: 1px solid red;padding: .75em;border-radius: 10px;}
            .warning-title{color: red;font-weight: 700;font-size: 1.5em;margin-bottom: 0;margin-top: .5em;}
            .warning-text{color:#000;font-weight:700}
            .alert-icon{background:url('https://individualogist.com/clickbank/assets/img/alert-icon.png');width:100px;height:100px;margin:0 auto;display:block;background-size:contain;background-repeat:no-repeat;}
            .upsell-hl{text-align:center;font-weight:700;margin:0 auto;margin-bottom:.5em}
            .decline-link{color:#666;text-decoration:underline;text-align:center;margin:0 auto;font-size:14px}
            .quote-box{background:#222;box-shadow:0 5px 15px rgba(0,0,0,.15);padding:1em;max-width:700px;display:block;position:relative;margin: 1em auto;border-radius:.5em;color:#fff}
            .headline-bg{max-width:1024px;margin: 0 auto;position:relative;background:url('https://individualogist.com/offer/assets/img/bg-cosmospink.png');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;background-position:center center;padding: 1em;color:#fff;text-shadow:1px 1px 1px #000;width:100%}
            @media only screen and (max-width:768px) {.buy-button{font-size:1em}.img-fr{width:100%;position:relative;margin:0 auto}p{clear:both}.atom,.molecule{width:100%;max-width:100%}.sp-title{font-size:1.2em}.upsell-hl{font-size:1.5em}.ets2{display:none}.quote-card{margin:1em auto}.warning-container{text-align:center}.hero-h1{font-size:1.5em}.hero-h4{font-size:1.2em}.alert-icon{width:50px;height:50px}}
        </style>

        <div class="container-fluid bg squaresphere hero">
            <div class="overlay-hero pa"></div>
                <div class="row">
                    <div class="col-sm-2 mx-auto">
                        <div class="indi-logo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mx-auto text-center">
                        <h1 class="hero-h1">Final Discount Activated</h1>
                        <h4 class="hero-h4">...This is your last chance to seize this life-changing opportunity...</h4>
                    </div>
                </div>
            </div>

        <div class="salespage-start part1">
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper">
                        <p><strong>Dear <span class="name">Abundance Seeker</span>,</strong></p>
                        <p>This is my final offer to you.</p>
                        <p>Truly, I know how eager you are to begin leveraging on energy transfiguration to experience a divine transformation across your entire being.</p>
                        <p>You've made remarkable progress, and you're just one step away from receiving limitless abundance and magical energies into your life.</p>
                        <p>It can all happen when you embrace your <strong>energy transfiguration sphere.</strong></p>
                        <p>But seeing as to how you have yet to submit your request, I can tell that you're somewhat hesitant to proceed, and certainly with good reason.</p>
                        <p>My suspicion is that the price is concerning - and I agree, $59.90 is no small sum.</p>
                        <p>...However, if all this did was <strong>transform every ounce of negative energies</strong> in your psychic being into powerful energies that attract abundance and good fortune into your life...</p>
                        <p>...If all this did was <strong>grant you protection against psychic attacks</strong>, and prevent bad energies from plaguing for as long as you wear this sphere...</p>
                        <p>Can we agree that $59.90 would be a fair amount to ask for?</p>
                        <p>Well, of course! But on this special page, I'm not even going to ask you for $59.90.</p>
                        <p>Instead, I'm going to extend my <strong>final discount to you.</strong></p>
                        <p class="sp-title">Claim your energy transfiguration sphere now, and I will send it to you for just <strike>$59.90</strike> $39.90.</p>
                        <img src="https://individualogist.com/offer/assets/img/ets-new4.png" class="ets clipped">
                        <p>An instant $20 OFF. WITH FREE shipping and handling included.</p>
                        <p>That's it. Everything else remains the same. You will still receive the exact same high quality sphere, plus 100% protection from our <strong>60-day moneyback guarantee.</strong></p>
                        <p>Here it is once more...</p>
                        <p class="sp-title">My Eternal Promise To You</p>
                        <p>Within the next 60 days from the date of your purchase, if you decide that the Energy Transfiguration Pendant is NOT for you, or if you're not satisfied with it for ANY REASON, simply return the sphere to us, and we'll issue you a 100% REFUND.</p>
                        <p class="sp-title">What You Will Receive</p>
                        <ul class="ul-crystal">
                            <li>Your energy transfiguration sphere can equip you with everything you need to protect your soul, align your chakras, heal your inner self, and transform negative energy into positive energy, all by simply wearing it.</li>
                            <li>You can receive it at a 33% DISCOUNT for just <strike>$59.90</strike> $39.90</li>
                            <li>Your shipping and handling is FREE (I've got you covered).</li>
                            <li>You are protected by my 60-day moneyback guarantee.</li>
                        </ul>
                        <p>Before you go ahead and claim your sphere, I just want to say one final thing...</p>
                        <p class="sp-title">Whether you claim this offer or not will not change the quality of my life.</p>
                        <p>I'm not going to go ahead and buy myself a new car, a new house, or even treat myself to an expensive steak dinner.</p>
                        <p>I'm constantly learning about spirituality and personal growth, but I'm also perfectly content with how my life is.</p>
                        <p>So your decision today is NOT going to affect my life in anyway - not in the slightest.</p>
                        <p>Your decision today, however, can affect YOURS.</p>
                        <p>What you choose to do next can complete change the way your inner being reacts to bad energies, how you manifest, how you attract abundance, the quality of YOUR life...</p>
                        <p>I want you to understand that it's not about me, <span class="name">fellow abundance seeker</span>.</p>
                        <p>It's about you.</p>
                        <p>It's about what this can do to change YOUR life, YOUR energies, YOUR psychic being.</p>
                        <p>So take advantage my final offer, and claim your energy transfiguration sphere now!</p>
                        <p class="sp-title"><span style="color:red">33% Discount Activated:</span> Claim Your Energy Transfiguration Sphere For Just $39.90</p>
                        <img src="https://individualogist.com/offer/assets/img/ets-new1.png" class="ets clipped">
                        <a class='btn buy-button'>Yes, Send Me My Energy Transfiguration Sphere For Just $39.90!</a>
                    </div>
                </div>
            </div>
            <div class="container mt-3 mb-3">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Beautiful hue!"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"The hue of the stone is subtle, but has a beautiful hue under the light. Can already feel a massive difference when I meditate. My mind feels completely clear. And I haven't had an anxiety attack since wearing this."</p>
                            <p class="quote-name">Jack Thompson, 54, Yoga Instructor</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Got one for my mom"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"Got one for myself and one for my mom. She utterly loves it! Can't be anymore thankful for this!"</p>
                            <p class="quote-name">Sandra Sheldon, 32, Housewife</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Really powerful sphere"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I thought it was a little weird at first. I'm not one to believe in this sort of thing. But as they say, desperate times call for desperate measures. Truly, this necklace turned my life around. I feel energized from the moment I wake up. And I feel completely at peace. Like nothing can destroy me. Really powerful sphere. Thanks!"</p>
                            <p class="quote-name">Eric Barlow, 49, General Manager</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Made $3200 one day after wearing it"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"All I have to say is that this WORKS. At first, I was really worried about losing my job because I was not performing for a whole quarter. Exactly one day after wearing this, I could feel a surge of energy, like the whole weight of my shoulders had been lifted. I closed a $3200 sale that day! I'm so grateful for the abundance I've received :)"</p>
                            <p class="quote-name">Valerie Colbert, 27, Sales Executive</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Cleared my negative vibrations"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"Been wearing this for a week now. I can feel it clearing my negative vibrations in my sleep. So much wonderful stuff keeps happening to me. Kind of like magic! Which is weird thing to say, but it's true!! I have a healing session 3 days from now, really excited to show it off to my class!! :) Thank you so much!"</p>
                            <p class="quote-name">Maisie Hartell, 38, Energy Healer</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"In love with it"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I feel so connected to my sphere. Like it's now a part of me even though I've only been wearing it for a month. I'm completely in love with it!"</p>
                            <p class="quote-name">Sophia Turnbull, 73, Retired</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Thought I was crazy for buying this"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I honestly thought I was crazy for buying this. But when it finally came in the mail, I thought heck it's worth a shot. Literally 3 days after wearing it, really weird things started happening to me. My small investments in the stock market started going up. My boss called me in to give me a promotion (with a pretty nice bonus check). And the only thing I've been doing differently is wearing the sphere!!! If I wasn't a believer before, I AM NOW!"</p>
                            <p class="quote-name">Lauren Sommer, 36, Accountant</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Thank you! Thank you! THANK YOU!!"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I actually found out about this type of obsidian months ago. But I couldn't find it anywhere. Everyone only has pure black obsidian. This is so precious to me. I can't wait for it to start protecting me. Thank you! Thank you! THANK YOU!!"</p>
                            <p class="quote-name">Rochelle Ackerman, 51, Waitress</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Cut out all the fat in my life"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"As a recovering drug addict, I have to cut out all the fat in my life. Friends, bad influences, the usual. Since receiving my sphere, I can feel myself becoming so much more confident and positive. I no longer hang out with my previous group of friends, but the new friends I have made are super encouraging and positive. Can already feel a HUGE DIFFERENCE in my life."</p>
                            <p class="quote-name">Brandon Hayes, 31, Plumber</p>
                            <p class="small text-center">Results experienced are not typical consumer results and results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-8 mx-auto">
                        <a class='btn buy-button'>Yes, Send Me My Energy Transfiguration Sphere For Just $39.90!</a>
                    </div>
                </div>
            </div>
<!--
            <div class="container-fluid bg-black text-white">
                <div class="row">
                    <div class="faq-wrapper col-sm-8 mx-auto">
                        <p class="sp-title">Frequently Asked Questions</p>
                        <p class="question">What is the Energy Transfiguration Sphere? How does it help?</p>
                        <p>The Energy Transfiguration Sphere is made up of a rare material - a material so rare, that it does not even have a proper name. Some call it Rainbow Obsidian, some call it Golden Obsidian. In any case, it contains magnetite nanoparticles, which is what charges it with the ability to absorb and transform negative energies and vibrations, into positive. And through its natural obsidian properties, it also acts as an energetic barrier against all forms of psychic attacks, and is known to enhance one's manifestation efforts. By simply dawning this sphere around your neck, you'll notice a stark, positive difference on a vibrational level.</p>
                        <p class="question">Do you ship to my country?</p>
                        <p>Although we do ship to MOST countries, there are a small number of countries that we are unable to ship to. These countries include: South Africa, India, and Thailand. When completing the order form, please ensure that you've selected the correct country, and do also confirm that your shipping address is correct. If you require assistance, please get in touch with us.</p>
                        <p class="question">How much will it cost to ship to my country?</p>
                        <p>Regardless of wherever you are in the world (apart from South Africa, India, and Thailand), I will have your Energy Transfiguration Sphere shipped straight to your doorstep <strong>for FREE.</strong> No hidden charges, and no other costs are incurred - I guarantee it. Take it as my token of love, appreciation, and sincere gratitude for being a valued member of the Individualogist.com community :)</p>
                        <p class="question">How long will it take to receive my energy transfiguration sphere?</p>
                        <p>Our shipping duration normally takes between 7 to 21 days, depending on which country you reside in. A tracking number will be provided, so you'll be able to track exactly where your sphere is during the shipping process.</p>
                        <p class="question">What if I change my mind?</p>
                        <p>I get it - purchasing things online might not be something you're used to. Perhaps you're afraid that your parcel will get lost, or perhaps you're afraid that your energy transfiguration sphere is not going to work. That's exactly why you're 100% protected by my 60 day moneyback guarantee. All you have to do is send the sphere back to me in the next 60 days, and I'll refund your entire purchase.</p>
                        <p class="question">How is the Energy Transfiguration Sphere made?</p>
                        <p>A rare, rainbow obsidian slab was initially purchased from an auction. Obsidian, given its glass-like properties, can be difficult to work with. A diamond saw is used to cut the slab into smaller fragments, which are then sanded and grinded down to the correct sphere-like shape. At this point, the sphere is not yet perfect, and needs to undergo a vigorous process of constant hand-polishing using 600, 1200, 2000, and 3000 grit sandpaper. To smoothen and bring out the shine in the material, the last polish uses an aluminium oxide poloshing compound and a lapidary polishing cloth. The final step of the process is to weave the string and fasten it securely to the sphere.</p>

                        <a class='btn buy-button'>Yes! Send Me My<br>Energy Transfiguration Sphere For Just $39.90!</a>
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
    });
    $(document).ready(function(){
        if(getCookie('logic_first_name') === null || getCookie('logic_first_name') === "" || getCookie('logic_first_name') === "null" || getCookie('logic_first_name') === undefined) {
        } else {
            $('.name').html(getCookie('logic_first_name'));
        }
        $('.email').html(getCookie('logic_email'));
        $('.archetype').html(getCookie('logic_archetype')); 
        
        //Personalize buy button
        var cbCheckout = 'http://ets.individua1.pay.clickbank.net/'
        var cbSkin = 'cbskin=25048'
        var cbExit = 'cbexit=839'
        var cbFid = 'cbfid=38823'
        var cbTimer = 'cbtimer=68'
        var cbCoupon = 'coupon=ETS20';
        var cbName = getCookie('logic_first_name');
        var cbEmail = getCookie('logic_email');
        $('.buy-button').attr('href', cbCheckout + '?' + cbSkin + '&' + cbExit + '&' + cbFid + '&' + cbTimer + '&' + cbCoupon + '&' + 'name=' + cbName + '&' + 'email=' + cbEmail );
    });
    
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
        <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2019 Individualogist.com. All Rights Reserved</p>
        <div class="cb-text">
            <p>Your Credit Card Statement Will Show A Charge from CLKBANK</p>
            <p>ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>
            <p>Testimonials, case studies, and examples found on this page are results that have been forwarded to us by users of the "Energy Transfiguration Sphere" products and related products, and may not reflect the typical purchaser's experience, may not apply to the average person and are not intended to represent or guarantee that anyone will achieve the same or similar results.</p>
            <script src='//cbtb.clickbank.net/?vendor=individua1'></script>
        </div>
    </div>