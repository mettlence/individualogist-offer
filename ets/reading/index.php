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
            .squaresphere{background-image:url('https://individualogist.com/offer/assets/img/bg-squaresphere.jpg');border-radius:0 0 20% 20%;box-shadow:0 5px 15px rgba(0,0,0,.3);}
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
            .buy-button{white-space:normal;font-size:1.5em;max-width:700px;margin: 0 auto;background:red;text-transform:uppercase;font-weight:900;color:#fff;padding:.5em 1em;box-shadow:0 5px 15px rgba(0,0,0,.3);text-align:center;display:block;border-radius:.5em}
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
                        <h1 class="hero-h1">Regain Control Over Your Deepest Desires By Protecting Your Psychic and Inner Being With ONE Secret Tool</h1>
                        <h4 class="hero-h4">Effortlessly "Transfigure" Bad Energies Into Abundance, Happiness, and Wealth</h4>
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
                        <p><strong>Dear <?php if (empty($_GET['name'])) { echo 'Truth Seeker'; } else { echo ucwords($_GET['name']); };?>,</strong></p>
                        <p>For decades, we have believed that being cursed with negative energies is an inevitable plight.</p>
                        <p>For years, we've been lied to that there is no known course of action to battle externally-transmitted negative energies. Negative energies originating from jealous "frenemies" and toxic members of society.</p>
                        <p>But let it be known, you have NOT stumbled upon this special message simply by CHANCE nor COINCIDENCE...</p>
                        <p class="text-center strong">An invisible vibrational force has silently guided you to discover the most LIFE-CHANGING message you will EVER come across!</p>
                        <p class="sp-title">Our World Has Entered A Period Of Dire Circumstances...</p>
                        <p>It pains me to admit this - but our planet has wavered.</p>
                        <p>Developing nations struggle with hunger and disease...</p>
                        <p>Pollution continues to poison our water and contaminate our air...</p>
                        <p>Evolved countries are faced with mountainous debt, economic crisis, and diminishing levels of happiness.</p>
                        <p>Ordinary folks like us are not spared from hardships...</p>
                        <p>From battling against the crippling stresses of life, to facing financial difficulties, poor health, shallow connections.</p>
                        <p>There is no doubt...</p>
                        <p class="text-center strong">The vibration of our planet has taken a nose-dive. And it's up to YOU and ME to RAISE it!</p>
                        <p>By the end of this short, special letter, you will be equipped with all the knowledge AND the ONE SINGLE TOOL you need to combat negative energies, TRANSPOSING them into FAVOURABLE MIRACLES.</p>
                    </div>
                </div>
            </div>
            <div class="part2">
                <div class="container-fluid bg-black text-white magicspark">
                <div class="pa overlay-v"></div>
                    <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <p class="sp-title">Whether you like it or not, energies are everywhere, affecting everything.</p>
                            <p>Think about that strange, eerie feeling you get when you meet someone you know you can't trust...</p>
                            <p>Think about the moments when you've "predicted" improbable outcomes, because you "felt" something amiss...</p>
                            <p>Think about the "coincidences" of bumping into someone or receiving a sudden call from someone you just thought of...</p>
                            <p>...Are these really mere coincidences...?</p>
                            <p>Or is there something MUCH LARGER, and FAR MORE POTENT that's at play?</p>
                            <p>These are all <strong>prime examples</strong> that vibrational energies are like the Universe's "invisible force", giving us subtle hints and signs.</p>
                            <p>We've been proved time and time again that vibrational energy EXISTS. But beyond existing, it's SILENTLY INFLUENCING everything we do, along with every one of our encounters.</p>
                            <p>In other words... By simply learning to "control" our vibrational energies, we can have the ability to "influence" our outcomes, our lives, our destinies!</p>
                            <p>Sounds like a long shot, doesn't it? Well, it's not - I'll explain.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper part3">
                            <p class="sp-title">Vibrational energy is scientifically proven</p>
                            <p>In one of the most fundamental laws of science, it is universally understood that all things (matter), are made up of vibrating particles and energy.</p>
                            <img src="https://individualogist.com/offer/assets/img/molecule.png" class="img-fr molecule">
                            <p>As such, what determines the state of matter, is the speed of those vibrations. That's what makes matter appear as solid, gas, or liquid.</p>
                            <p>Likewise, when we look at the behaviour of magnets, we actually see vibrational energy in action.</p>
                            <p>If you attempt to push two magnets against each other, an invisible "energetic barrier" is created, forcing them to repel. Once again, this invisible barrier of energy is made up of microscopic particles vibrating at various frequencies.</p>
                            <p class="text-center strong cb">"...But if vibrational energies are so powerful, why aren't more people using them?"</p>
                            <p>We've all succumbed to the age-old belief that in order to CREATE MORE POSITIVE ENERGY... We have to DESTROY NEGATIVE ENERGY...</p>
                            <p>The thing is - we've all been TAUGHT WRONG.</p>
                            <p>...We've forgotten one of the most fundamental rules of elementary science...</p>
                            <p class="sp-title">Energies - Positive or negative, CANNOT be DESTROYED</p>
                            <img src="https://individualogist.com/offer/assets/img/dna.png" class="img-fr atom">
                            <p>And anyone who says otherwise, is lying. Period.</p>
                            <p>Numerous crystal healers and psychic dwellers often believe that the way to rid oneself off negative energies, is to destroy it. Eliminate it.</p>
                            <p>But energy destruction is a concept that goes against the fundamental laws of physics.</p>
                            <p>The law of energy conservation states that energy cannot be destroyed. It can only be transferred and converted.</p>
                            <p>Strangely enough, it cannot be "created" either. So, if you're banking on "creating" positive energy for yourself by meditating harder, visualizing with more focus...</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg meditateneon">
                <div class="pa overlay-h"></div>
                <div class="row">
                    <div class="col-sm-8 mx-auto">
                        <p class="text-center strong">You're doing the exact opposite, <?php if (empty($_GET['name'])) { echo 'my dear'; } else { echo ucwords($_GET['name']); };?>! You're actually EXPENDING your precious, positive energy, attempting to create something that physically and spiritually CANNOT be created!</p>
                        <p>And at the end of these intense meditation, visualization, and manifestation sessions... It's no wonder you find yourself mentally exhausted, and emotionally drained.</p>
                        <p>...How do I know this?</p>
                        <p>Because I too, have made the same mistake in the past.</p>
                        <p>I too have spent years searching for more positive energy, good fortune, and abundance.</p>
                        <p>I too have been misled by "energy healing" gurus.</p>
                        <p>I too have lined their pockets with thousands of dollars of my hard-earned savings - with nothing to show for it.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper">
                        <p>...But I'm not bitter about it.</p>
                        <p>As the late Steve Jobs once said, "You can't connect the dots looking forward; you can only connect them looking backwards."</p>
                        <p>So, if you can't create energy, and if you can't destroy it either... What then?</p>
                        <p>Every mistake I've made, every failure I've encountered during my quest has led me to my epiphanic discovery of "energy transfiguration"...</p>
                        <p>The one, true answer for creating <strong>meaningful abundance, intrinsic healing, and developing your divine intuition.</strong></p>
                        <p class="sp-title">The Sacred Science Of Energy Transfiguration</p>
                        <p>You already know that crystals vibrate at an incredibly high frequency, and at a very precise rate - which is what gives them immense, "magic-like" healing properties...</p>
                        <img src="https://individualogist.com/offer/assets/img/atom.png" class="img-fr atom">
                        <p>Healing properties that deepen your journey of self-discovery, cleanse your aura, enhance your manifestation efforts, and protect your soul.</p>
                        <p>This works through the sacred science of "energy transfiguration".</p>
                        <p>See, although energy can't be created or destroyed, it can be converted, transformed, and transfigured.</p>
                        <p>Negative energies, with the right tools and under the right circumstances, CAN be filtered, cleansed, and transformed into POSITIVE energies!</p>
                        <p>And that's what <strong>"energy transfiguration"</strong> is all about...</p>
                        <p class="text-center strong cb">...Manipulating NEGATIVE ENERGIES that already exist, and turning it from working AGAINST YOU, to working in YOUR FAVOUR!</p>
                        <p>Now, I'm not telling you to forge ahead and become a fully certified crystal healer - it takes YEARS to master, and a TON of hard work.</p>
                        <p>You'll have to invest a TON OF MONEY in all these different types of learning materials, different variations of crystals...</p>
                        <p>Fortunately, you DO NOT need to do ANY OF THAT.</p>
                        <p>In fact, if you are fully committed to using energy transfiguration to regain control of your life...</p>
                        <p>Then you MUST PROMISE ME that you WILL READ THIS NEXT PART.</p>
                        <p>It does NOT matter you're struggling with...</p>
                        <ul class="ul-crystal">
                            <li>Terrible luck</li>
                            <li>Loneliness</li>
                            <li>Poor energies</li>
                            <li>Low vibrations</li>
                        </ul>
                        <p>Much earlier, I promised to equip you with all the knowledge AND the ONE SINGLE TOOL you need to combat negative energies, TRANSPOSING them into FAVOURABLE MIRACLES.</p>
                        <p>Now, are you ready for me to fulfil that promise?</p>
                        <p>Without further ado, I'd like to introduce something I'm really excited about!</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-black text-white">
                <div class="row">
                    <div class="sp-wrapper part4">
                        <p class="sp-title">The Miracle "Energy Transfiguration Sphere"</p>
                        <img src="https://individualogist.com/offer/assets/img/ets-new4.png" class="ets clipped">
                        <p>This hand-crafted sphere is NOT made of any "normal" crystal healing stone or material (and no, it's NOT just ordinary obsidian).</p>
                        <p>Forged in the fiery depths of volcanoes, Obsidian is one of the few forms of volcanic glass.</p>
                        <p>Pure Obsidian does some pretty amazing stuff. BUT. Although ordinary black obsidian is a stone of protection, energy transfiguration requires a variation of it that's EXTREMELY RARE, and INCREDIBLY LIMITED.</p>
                        <img src="https://individualogist.com/offer/assets/img/magnetic.png" class="img-fr atom">
                        <p>In some rare occurrences, when magnetite nanoparticles come into contact with Obsidian during its formation, a beautiful <strong>golden</strong> sheen becomes deeply embedded into the material, charging it with positive-negative polarity...</p>
                        <p>Creating the perfect material for energy transfiguration, otherwise known as "Golden Obsidian". </p>
                        <p>This is what gives the Energy Transfiguration Sphere its ability to absorb, repel, and ultimately transform negative energy into positive energy.</p>
                        <p>And that is the exact type of material that's been used to create this beautiful, hand-crafted sphere.</p>
                        <p class="text-center strong cb">The Energy Transfiguration Sphere can transform ALL ASPECTS of your life - love, manifestation, health, wealth, happiness... EVERYTHING.</p>
                        <img src="https://individualogist.com/offer/assets/img/ets-new3.png" class="ets clipped">
                        <p>Imagine possessing a magical pendant that...</p>
                        <ul class="ul-crystal">
                            <li><strong>Enhances truths</strong> and stimulates growth</li>
                            <li><strong>Has strong</strong>, protective properties against negative energies</li>
                            <li><strong>Has strong</strong>, protective energetic barrier against psychic attacks</li>
                            <li><strong>Enhances emotional</strong> and mental clarity in the mind and soul</li>
                            <li><strong>Dissolves energy</strong> and vibrational blockages and traumas</li>
                            <li><strong>Absorbs all</strong> negative energies it comes into contact with, and "filters it" into an emission of pure, positive energy</li>
                        </ul>
                        <p class="sp-title">Take Advantage Of This Powerful Vibrational Tool</p>
                        <p><?php if (empty($_GET['name'])) { echo 'Fellow truth seeker'; } else { echo ucwords($_GET['name']); };?>, Your Energy Transfiguration Sphere holds the answer to protecting you from negative energies, aligning your chakras, and becoming the abundant and enlightened individual you were always meant to be.</p>
                        <p>Here's how simple it is. By just wearing it around your neck - close to your Anahata (Heart) Chakra, you can be instantly protected from any psychic attacks, negative energies, and low vibrations!</p>
                        <img src="https://individualogist.com/offer/assets/img/chakra.png" class="chakra">
                        <p>BUT ALSO, all of these negative energies and low-frequency vibrations are ABSORBED, and TRANSFIGURED into positive energy so pure, that your entire inner self will radiate!</p>
                        <img src="https://individualogist.com/offer/assets/img/nanoparticle-black.png" class="img-fr">
                        <p>Naturally, a powerful tool made of such rare material, crafted with such care and precision, is certainly invaluable.</p>
<!--
                        <p>Normally, I charge strangers a very fair price of a little over $100 (excluding shipping) for a single piece of the Energy Transfiguration Sphere. Including shipping and handling, it would be somewhere around $120 to $130.</p>
                        <p>But, you're no stranger to me, are you?</p>
                        <p>You're a part of my valued community. My community of beloved, truth-seeking, self-discovering individuals. And of course, I truly do treasure our close relationship.</p>
-->
                        <p>As such, if you're ready to make the affirmative choice to seize this sphere for yourself right now...</p>
                        <p>I'm going to give you your Energy Transfiguration Sphere at a HUGE DISCOUNT.</p>
                        <p class="text-center strong">For just <strike>$59.90</strike> $29.90, you can receive your Energy Transfiguration Sphere right at your doorstep!</p>
                        <p>And to make this truly a no-brainer, I'll even cover shipping and handling FOR you.</p>
<!--
                        <p>That's a discount of OVER 50% OFF its usual price.</p>
                        <p class="sp-title">Bear In Mind - Only A Limited Number Of Pieces Can Go At This Price Point</p>
                        <p>Unfortunately, stocks for the Energy Transfiguration Sphere are INCREDIBLY LIMITED.</p>
                        <p>We only have 100 pieces of this on hand.</p>
                        <p>AND. We can only afford to give 50 pieces of this at $29.90.</p>
                        <p>As soon as we've hit the 50-piece limit, the price will revert BACK to $200 per sphere.</p>
                        <p>Which means, there's no guarantee that you'll be able to get your Energy Transfiguration Sphere at $29.90 in the next few hours.</p>
                        <p>And additionally, by this time tomorrow, it's MORE THAN LIKELY THAT WE'LL RUN OUT COMPLETELY!</p>
-->
                        <p>You can already tell - this is a highly urgent, time-sensitive offer. One that I urge you to consider very carefully.</p>
                        <img src="https://individualogist.com/offer/assets/img/ets-new2.png" class="ets clipped">

                        <?php
                         if (empty($name)) {
                            echo "<a class='btn buy-button' href='http://ets-d.individua1.pay.clickbank.net/?cbskin=25048&cbfid=38987&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Energy Transfiguration Sphere</a>";
                         } else {
                            echo "<a class='btn buy-button' href='http://ets-d.individua1.pay.clickbank.net/?cbskin=25048&cbfid=38987&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Energy Transfiguration Sphere</a>";
                         }
                        ?>

                        <p class="smallprint">Lock in your discount now and claim your LIMITED Energy Transfiguration Sphere for just $29.90!</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper part5">
                        <p class="sp-title">And As Always, Here's My Personal Promise To YOU</p>
                        <p>Within the next 60 days from the date of your purchase, if you decide that the Energy Transfiguration Pendant is NOT for you, or if you're not satisfied with it for ANY REASON, simply return the sphere to us, and we'll issue you a 100% REFUND.</p>
                        <p class="text-center strong">Let's Revise What We've Talked About So Far...</p>
                        <ul class="ul-crystal">
                            <li>Your energy transfiguration sphere can equip you with everything you need to protect your soul, align your chakras, heal your inner self, and transform negative energy into positive energy, all by simply wearing it.</li>
                            <li>You can receive it at the SPECIAL PRICE of just $29.90</li>
                            <li>Your shipping and handling is FREE (I've got you covered).</li>
                            <li>You are protected by my 60-day moneyback guarantee.</li>
                        </ul>
                        <img src="https://individualogist.com/offer/assets/img/stone-comparison-new.jpg" class="stone-comparison">
                        <p class="text-center strong">Do NOT wait a second longer - before this rare opportunity is no longer available.</p>
                        <p>You can experience a divine transformation across your entire being - by simply seizing your Energy Transformation Sphere at COST for <strike>$59.90</strike> <strong>$29.90 RIGHT NOW.</strong></p>
                        <p>...Are you ready to regain control over your vibrations, energies, and innermost desires?</p>
                        <img src="https://individualogist.com/offer/assets/img/ets-new1.png" class="ets clipped">

                        <?php
                         if (empty($name)) {
                            echo "<a class='btn buy-button' href='http://ets-d.individua1.pay.clickbank.net/?cbskin=25048&cbfid=38987&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Energy Transfiguration Sphere</a>";
                         } else {
                            echo "<a class='btn buy-button' href='http://ets-d.individua1.pay.clickbank.net/?cbskin=25048&cbfid=38987&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Energy Transfiguration Sphere</a>";
                         }
                        ?>

                        <p class="smallprint">Lock in your discount now and claim your LIMITED Energy Transfiguration Sphere for just $29.90!</p>
                    </div>
                </div>
            </div>
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
                            <h4 class="quote-title">"Like the whole weight of my shoulders had been lifted"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"All I have to say is that this WORKS. Exactly one day after wearing this, I could feel a surge of energy, like the whole weight of my shoulders had been lifted... I'm so grateful for the abundance I've received :)"</p>
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
<!--
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"Thought I was crazy for buying this"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I honestly thought I was crazy for buying this. But when it finally came in the mail, I thought heck it's worth a shot. Literally 3 days after wearing it, really weird things started happening to me. My small investments in the stock market started going up. My boss called me in to give me a promotion (with a pretty nice bonus check). And the only thing I've been doing differently is wearing the sphere!!! If I wasn't a believer before, I AM NOW!"</p>
                            <p class="quote-name">Lauren Sommer, 36, Accountant</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
-->
                    <div class="col-sm-6">
                        <div class="quote-card">
                            <h4 class="quote-title">"Thank you! Thank you! THANK YOU!!"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I actually found out about this type of obsidian months ago. But I couldn't find it anywhere. Everyone only has pure black obsidian. This is so precious to me. I can't wait for it to start protecting me. Thank you! Thank you! THANK YOU!!"</p>
                            <p class="quote-name">Rochelle Ackerman, 51, Waitress</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="quote-card">
                            <h4 class="quote-title">"Cut out all the fat in my life"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"As a recovering drug addict, I have to cut out all the fat in my life. Friends, bad influences, the usual. Since receiving my sphere, I can feel myself becoming so much more confident and positive. I no longer hang out with my previous group of friends, but the new friends I have made are super encouraging and positive. Can already feel a HUGE DIFFERENCE in my life."</p>
                            <p class="quote-name">Brandon Hayes, 31, Plumber</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mx-auto">
                        <img src="https://individualogist.com/offer/assets/img/ets-new1.png" class="ets clipped">

                        <?php
                         if (empty($name)) {
                            echo "<a class='btn buy-button' href='http://ets-d.individua1.pay.clickbank.net/?cbskin=25048&cbfid=38987&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Energy Transfiguration Sphere</a>";
                         } else {
                            echo "<a class='btn buy-button' href='http://ets-d.individua1.pay.clickbank.net/?cbskin=25048&cbfid=38987&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Energy Transfiguration Sphere</a>";
                         }
                        ?>

                        <p class="smallprint">Lock in your discount now and claim your LIMITED Energy Transfiguration Sphere for just $29.90!</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-black text-white">
                <div class="row">
                    <div class="faq-wrapper col-sm-8 mx-auto">
                        <p class="sp-title">Frequently Asked Questions</p>
                        <p class="question">What is the Energy Transfiguration Sphere? How does it help?</p>
                        <p>The Energy Transfiguration Sphere is made up of a rare material - a material so rare, that it does not even have a proper name. Some call it Golden Obsidian, some call it Rainbow Obsidian. In any case, it contains magnetite nanoparticles, which is what charges it with the ability to absorb and transform negative energies and vibrations, into positive. And through its natural obsidian properties, it also acts as an energetic barrier against all forms of psychic attacks, and is known to enhance one's manifestation efforts. By simply dawning this sphere around your neck, you'll notice a stark, positive difference on a vibrational level.</p>
                        <p class="question">Do you ship to my country?</p>
                        <p>Although we do ship to MOST countries, there are a small number of countries that we are unable to ship to. These countries include: South Africa, India, and Thailand. When completing the order form, please ensure that you've selected the correct country, and do also confirm that your shipping address is correct. If you require assistance, please get in touch with us.</p>
                        <p class="question">How much will it cost to ship to my country?</p>
                        <p>Regardless of wherever you are in the world (apart from South Africa, India, and Thailand), I will have your Energy Transfiguration Sphere shipped straight to your doorstep <strong>for FREE.</strong> No hidden charges, and no other costs are incurred - I guarantee it. Take it as my token of love, appreciation, and sincere gratitude for being a valued member of the Individualogist.com community :)</p>
                        <p class="question">How long will it take to receive my energy transfiguration sphere?</p>
                        <p>Our shipping duration normally takes between 7 to 21 days, depending on which country you reside in. A tracking number will be provided, so you'll be able to track exactly where your sphere is during the shipping process.</p>
                        <p class="question">What if I change my mind?</p>
                        <p>I get it - purchasing things online might not be something you're used to. Perhaps you're afraid that your parcel will get lost, or perhaps you're afraid that your energy transfiguration sphere is not going to work. That's exactly why you're 100% protected by my 60 day moneyback guarantee. All you have to do is send the sphere back to me in the next 60 days, and I'll refund your entire purchase.</p>
                        <p class="question">How is the Energy Transfiguration Sphere made?</p>
                        <p>A rare, golden obsidian slab was initially purchased from an auction. Obsidian, given its glass-like properties, can be difficult to work with. A diamond saw is used to cut the slab into smaller fragments, which are then sanded and grinded down to the correct sphere-like shape. At this point, the sphere is not yet perfect, and needs to undergo a vigorous process of constant hand-polishing using 600, 1200, 2000, and 3000 grit sandpaper. To smoothen and bring out the shine in the material, the last polish uses an aluminium oxide poloshing compound and a lapidary polishing cloth. The final step of the process is to weave the string and fasten it securely to the sphere.</p>
<!--                        <p>As you can tell, making 100 of these pieces by hand has been an extremely detailed and tiresome process. It's been an amazing journey, and I do sincerely hope that you'll be one of the fortunate ones to enjoy the fruits of our labour.</p>-->

                        <?php
                         if (empty($name)) {
                            echo "<a class='btn buy-button' href='http://ets-d.individua1.pay.clickbank.net/?cbskin=25048&cbfid=38987&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Energy Transfiguration Sphere</a>";
                         } else {
                            echo "<a class='btn buy-button' href='http://ets-d.individua1.pay.clickbank.net/?cbskin=25048&cbfid=38987&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Energy Transfiguration Sphere</a>";
                         }
                        ?>

                        <p class="smallprint">Lock in your discount now and claim your LIMITED Energy Transfiguration Sphere for just $29.90!</p>
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
            <a href="https://support.individualogist.com/article/67-shipping-returns" target="_blank">Shipping & Returns</a> |
            <a href="http://individualogist.com/contact" target="_blank">Contact</a>
        </p>
        <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2020 Individualogist.com. All Rights Reserved</p>
        <div class="cb-text">
            <p>Your Credit Card Statement Will Show A Charge from CLKBANK</p>
            <p>ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>
            <p>Testimonials, case studies, and examples found on this page are results that have been forwarded to us by users of the "Energy Transfiguration Sphere" products and related products, and may not reflect the typical purchaser's experience, may not apply to the average person and are not intended to represent or guarantee that anyone will achieve the same or similar results.</p>
            <script src='//cbtb.clickbank.net/?vendor=individua1'></script>
        </div>
    </div>