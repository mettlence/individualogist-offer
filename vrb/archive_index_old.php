<?php
$PageTitle = "Vibrational Resonance Reading | Individualogist.com";
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
            .lightningball{background-image:url('https://individualogist.com/offer/assets/img/lightningball-bg.jpg');border-bottom:3px solid #9727c6}
            .dp-brain{width:100%;max-width:600px;display:block;position:relative;margin:1em auto}
            .lovformula{width:100%;max-width:600px;display:block;position:relative;margin:2em auto}       
            .chakrahandvbr{width:100%;max-width:400px;display:block;position:relative;margin:2em auto}
            .tuningfork{width:100%;max-width:600px;display:block;position:relative;margin:1em auto;border-radius:1em;box-shadow:0 5px 15px rgba(0,0,0,.3)}
            .particleface{width:100%;max-width:600px;display:block;position:relative;margin:1em auto}
            .particlepink-bg{background-position: center;background-size: cover;width: 100%;background-image:url(https://individualogist.com/offer/assets/img/particlepink-bg.jpg);position: relative;padding: 2em;}
            .crystal-bg{background-position: center;background-size: cover;width: 100%;background-image:url(https://individualogist.com/offer/assets/img/crystal-bg.jpg);position: relative;padding: 2em;}
            .part1{background:#000;color:#fff}
            .overlay-h{display:block;background:linear-gradient(rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.3),rgba(0, 0, 0, 0.5));top:0;left:0;bottom:0;width:100%;height:auto}
            .overlay-hero{display:block;background:linear-gradient(rgba(0, 0, 0, 0.75),rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.75));top:0;left:0;bottom:0;width:100%;height:auto;}
            .hero{padding-top:6em;padding-bottom:6em;color:#fff;text-shadow:1px 1px 1px #000;}
            .bg-black{background:#000}.bg-darker{background:#222}
            .text-white{color:#fff}
            .energyleak {font-size:1.2em;background-position:center;background-size:cover;width:100%;background-image:url('https://individualogist.com/offer/assets/img/energyleak-bg.jpg');position:relative;padding:2em}
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
            .ul-energy{list-style:none;margin-left:1em;text-align:justify;margin-bottom:20px}
            .ul-energy > li {position: relative;margin-bottom: 5px;margin-left: 10px;}
            .ul-energy > li:before {position: absolute;left: -40px;display: inline-block;width: 22px;height: 20px;margin-right: 1em;background: url(https://individualogist.com/offer/assets/img/energyball.png) no-repeat;background-size: cover;background-position: 100% 100%;border-radius: 50%;content: "";top: 5px;}
            .smallprint{text-align:center;font-size:.8em;color:#333;font-weight:700;padding-top:.5em;color:red;opacity:.8}
            .ets{width:100%;max-width:400px;display:block;margin:1em auto}
            .ets2{right:0;max-width:250px}
            .clipped {clip-path: circle(50% at 50% 50%);}
            .stone-comparison{width:100%;position:relative;display:block;margin: 1em auto;padding:1em}
            .chakra{width:80%;max-width:600px;position:relative;display:block;margin: 1em auto;padding:1em}
            .quote-card{background:#111;padding:1em 2em;width:100%;max-width:500px;display:block;position:relative;box-shadow:0 8px 15px rgba(0,0,0,.15);border-radius:.5em;margin:2em auto}
            .stars{width:100px;height:30px;background:url('https://individualogist.com/offer/assets/img/5stars.png');background-size:contain;background-repeat:no-repeat;display:block;position:relative;margin: 0 auto}
            .quote-name{font-size: 14px;font-weight: 700;text-transform: uppercase;letter-spacing: 2px;color: #666;}
            .quote-text{text-align:center;color:#ccc}
            .quote-title{text-align:center;letter-spacing:2px;text-transform:uppercase;color:#ccc;font-weight:900}
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

        <div class="container-fluid bg lightningball hero">
            <div class="overlay-hero pa"></div>
                <div class="row">
                    <div class="col-sm-2 mx-auto">
                        <div class="indi-logo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mx-auto text-center">
                        <h1 class="hero-h1">Strange "VIBRATORY BOUNCING" Secret COMMANDS The Universe</h1>
                        <h4 class="hero-h4">Instantly Reverse Energy Leaks Into Peaks Of Abundance, Happiness, and Wealth</h4>
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
                        <p>Technology has made great strides in the recent years, promising convenience, happiness, and connection.</p>
                        <p>And at first, we believed. I believed.</p>
                        <p>But. We’ve been lied to…</p>
                        <p>You’ve been blindsided. Bamboozled by the very thing that’s supposed to improve our lives. All of us have been.</p>
                        <p>It’s no secret that tech companies design their products with dopamine in mind - to make it more addictive than cocaine, so that we can’t put our phones down.</p>
                        <p>These multi-billion dollar companies keep us scrolling. Clicking. Liking. Glued to our little screens. Toying with our attention.</p>
                        <img src="/offer/assets/img/dopamine-brain.png" class="dp-brain">
                        <p>At first glance, it sounds perfectly harmless. But that could not be further from the TRUTH.</p>
                        <p>Numerous studies over the recent years have rightfully pointed out major changes in our collective unconscious…</p>
                        <p>“Increased use of electronic communications and digital media may have a larger effect on mood disorders”.</p>
                        <p>“Those who spend more time on digital media are more likely to be depressed and unhappy.”</p>
                        <p>The effects seem to have spiralled out of control…</p>
                        <p>Instead of bringing us closer, it has divided us.</p>
                        <p>Instead of encouraging self-acceptance, it has created self-loathing.</p>
                        <p>Technology has made us worried about our phone’s depleted battery, while our souls suffer from the greatest ENERGY LEAK in history!</p>
                        <p>There is no doubt - the world is undergoing a massive energetic shift at a cosmic, collective scale.</p>
                        <p>Corporations are perpetuating it. Governments are ignoring it.</p>
                        <p>But we can still do something about it, <?php if (empty($_GET['name'])) { echo 'Truth Seeker'; } else { echo ucwords($_GET['name']); };?>.</p>
                        <p class="text-center strong">Hope is NOT lost.</p>
                        <p>On this very special page, you will discover the exact steps you need to take to PLUG any energy leaks in your conscious being, gain SPIRITUAL IMMUNITY to the devastating effects of the digital age, and attain the happiness, peace, and abundance you rightfully DESERVE!</p>
                    </div>
                </div>
            </div>
            <div class="part2">
                <div class="container-fluid bg-black text-white energyleak">
                <div class="pa overlay-v"></div>
                    <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <p class="sp-title">You CANNOT Miraculously “Attract” Anything You Want Instantly…</p>
                            <p>What I’m about to say might come as a shock to you - and I’m going to show you exactly why. </p>
                            <p>If you’ve been paying attention, over the recent years, law of attraction “gurus” have been sprouting out from nowhere!</p>
                            <p>Like playing “whack-a-mole” - but with manifestation and law of attrction gurus…</p>
                            <p>...“Whack-a-guru”, if you will.</p>
                            <p>But WHY is this happening…?</p>
                            <p>…Did the Law of Attraction become easier?</p>
                            <p>…Did everyone become smarter?</p>
                            <p>Or have we become so SILENTLY and HEAVILY influenced by dopamine, that we’ve grown magnetically drawn to headlines promising “push-button solutions” and “instant gratification”?</p>
                            <p>Sounds more like it, doesn’t it?</p>
                            <p>Here’s what I’m getting at...</p>
                            <p class="text-center strong">The Law of Attraction is so popularly known, because this “energy leak” has made us so obsessed with the Law of Attraction that we’ve been ignoring the LAW that REALLY matters!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container sp-wrapper">
                <div class="row">
                    <div class="col-sm-8 mx-auto">
                            <p class="sp-title">The Universe Is A Collection Of Vibrations</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 mx-auto">
                        <div class="part3">
                            <p>You’ve heard of the age-old quantum physics theory before - everything is made up of vibrations. Every object vibrates at a specific frequency.</p>
                            <p>All matter is made up of microscopic atoms, emitting its own unique frequency, creating its own unique form.</p>
                            <p>We know this concept to be “The Law Of Vibration”. </p>
                            <p>It’s the science behind the formation of our thoughts, beliefs, and emotions.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 mx-auto">
                            <img src="/offer/assets/img/particleface.png" class="particleface">    
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper">
                        <p class="sp-title"> Understanding This Simple Concept Makes All The Difference!</p>
                        <p>The Law of Vibration is the FORMULA behind “our thoughts and emotions are vibrational energies”.</p>
                        <p>The Law of Attraction is the RESULTING EFFECT.</p>
                        <p>Allow me to illustrate this with a fairly simple equation.</p>
                        <img src="/offer/assets/img/lov-formula.png" class="lovformula">
                        <p>Clearly, we’ve been so drawn to the instant, promising effects of the law of attraction, that we’ve lost sight of the law of vibration!</p>
                        <p>Now, if you combine this discovery with the energy leak that we talked about earlier…</p>
                        <p>…You’ll come to realize that this whole manifestation thing has just all of us running around in one big, giant circle!</p>
                        <p>Right now, you’re probably as shocked as I am when I first learned about this…</p>
                        <p>But my life would not have transformed had I not learned about this painful truth.</p>
                        <p>Every mistake, misstep, and blunder I’ve made in my manifestation journey are also the stepping stones that led me to my most recent discovery…</p>
                        <p>The one, true secret that has delivered the abundance, joy, and meaning that I’ve spent decades searching for…</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg particlepink-bg">
                <div class="pa overlay-h"></div>
                <div class="row">
                    <div class="col-sm-8 mx-auto">
                        <p class="sp-title">…I call it “Vibrational Resonance”.</p>
                        <p>You already know that like attracts like - meaning if you want to attract certain things into your life, your vibrations have to match their vibrations.</p>
                        <p>At least, that’s what you’ve been told.</p>
                        <p>But this raises MANY unanswered questions:</p>
                        <p class="text-center"><em>How do you know what’s the frequency of wealth and abundance?</em></p>
                        <p class="text-center"><em>How do you know if your vibrations are being raised?</em></p>
                        <p class="text-center"><em>Or how do you even raise your vibrations to match these frequencies?</em></p>
                        <p class="sp-title" style="margin-top:2em">Well, the answer lies in crystals!</p>
                        <p>See, crystals are known to vibrate at the most incredulous speeds, and at the highest frequencies - which explains their intense healing properties.</p>
                        <p>And by tapping into the right stones, and combining them with the right chakras - truly amazing and abundant things can happen.</p>
                        <p>It’s impossible to know the exact vibrational frequency of all the things we want to attract - abundance, happiness, love, and wealth…</p>
                        <p>…But what if we could FORCE these things to VIBRATE at OUR frequencies?</p>
                        <p>Wait, what?</p>
                        <p>Yes, what I’m saying is YOU have the power to influence the vibrations of the things you’re manifesting!</p>
                        <p>And there’s a really simple science behind it.</p>
                        <p>If you take 2 tuning forks together, and hit knocked 1 of them, that tuning fork is going to start to vibrate and resonate. Just an ordinary tuning fork, nothing spectacular.</p>
                        <p>But if you placed the tuning fork that’s already vibrating and resonating CLOSE to the other tuning fork (WITHOUT TOUCHING), the other tuning fork is going to resonate and vibrate at the EXACT same frequency, creating the same tone and sound!</p>
                        <img src="/offer/assets/img/tuningfork-experiment.jpg" class="tuningfork">
                        <p>Remember - you don’t HAVE to raise your vibrations to attract certain things, you just have to make the frequencies match!</p>
                        <p>…And that’s what Vibrational Resonance is all about…</p>
                        <p>…Having the superpower to HARMONIZE the vibrations of the things you WANT, with YOUR FREQUENCIES!</p>
                        <p class="sp-title" style="margin-top:2em">This Will Transform Your “Energy Leaks” Into “Energy Peaks”</p>
                        <p>Now, anyone can use this and start seeing a massive difference in their life.</p>
                        <p>It does not matter whether you’re struggling with…</p>
                        <ul class="ul-energy">
                            <li>Low vibrations</li>
                            <li>Terrible luck</li>
                            <li>Poor energies</li>
                            <li>Uncertainty</li>
                        </ul>
                        <p>But as eager as you are to start plugging your energy leaks, it’s important that you <strong>read this page to the end.</strong></p>
                        <p class="text-center strong">Because in this next part, I’m going to show you exactly how you can use Vibrational Resonance to transform your “Energy Leaks”, into your greatest Energy Peaks!</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-black text-white">
                <div class="row">
                    <div class="sp-wrapper part4">
                        <p class="sp-title">Introducing: The Legendary “Vibrational Resonance Bracelet”</p>
                        <p>Once heralded as one of the mostly closely guarded secrets of mineral collectors, this rare, semiprecious material was discovered by crystal healers to have potent energy-aligning effects.</p>
                        <p>The precise combination of high frequency vibrations and rapid energy transfers in this mineral arethe exact properties that make it the perfect stone for Vibrational Resonance.</p>
                        <p>Upon dawning this precious bracelet, the wearer’s chakras are aligned INSTANTLY, surging the wearer with a tranquil, soothing effect.</p>
                        <p>Your mind centers, telepathic abilities, psychic abilities, and overall communication efforts can be enhanced with your Vibrational Resonance Bracelet!</p>
                        <p>A stone that possesses physical, spiritual, emotional, and mystical enhancements</p>
                        <p>…What if you possessed a mystifyingly powerful bracelet that…</p>
                        <ul class="ul-energy">
                            <li>Allows disparate energies to move into resonance and find a common frequency</li>
                            <li>Supercharges your manifestation efforts</li>
                            <li>Enhances your psychic abilities by bridging energies</li>
                            <li>Grounds spiritual energy and heightened spiritual maturation</li>
                            <li>Encourages introspection, self-discovery, self-expression, and the development of your unique identity</li>
                            <li>Creates new energy flows, allowing for new perspectives and resolute actions</li>
                            <li>Does not require cleansing since it does not retain negative energy!</li>
                        </ul>
                        <p class="sp-title" style="margin-top:2em">Add This Remarkable Vibrational Resonance Tool To Your Energy Arsenal</p>
                        <p>Your Vibrational Resonance Bracelet is the piece you’ve been missing in your manifestation journey. And with this gift in your hands, you can forge ahead into your most abundant state.</p>
                        <p>And at last, the effects of the Law of Attraction will no longer sound like a mere myth.</p>
                        <p>Here’s how effortless it can be. By just wearing this around your wrists - within the peripherals of your hand’s heart chakras, you can begin experiencing the wondrous effects of Vibrational Resonance!</p>
                        <img src="/offer/assets/img/chakra-hand-vbr.png" class="chakrahandvbr">
                        <p>Again, this includes instant chakra alignments, reversing the effects of energy leaks, and restoring the connections between your energies!</p>
                        <p>Considering the potent effects this bracelet can bring to one’s life, and also the number of man-hours it takes just take source, hand-craft, and polish a single ornament…</p>
                        <p>…The Vibrational Resonance Bracelet is certainly a prized possession that anyone would be willing to have.</p>
                        <p>In fact, when I showed this to a very close crystal-healer friend of mine, she offered to give me $500 just so she could have it for her own personal use!</p>
                        <p>Of course, at that point in time, it was the only one I had - so there was honestly no amount of money that would persuade me to give it away.</p>
                        <p>At first, I did consider offering this bracelet for $500 - but it occurred to me that not many people can afford $500; especially the ones who are in great need of help.</p>
                        <p>So I’ve set the retail price for the Vibrational Resonance Bracelet at just $199.90, EXCLUDING shipping and handling.</p>
                        <p>I know how much of an impact it can make it anyone’s life, and when you take its powerful effects into consideration, this is a very fair price point.</p>
                        <p>BUT. Because this is a NEW launch, I’m offering it to our community FIRST, and at an ENORMOUS DISCOUNT.</p>
                        <p>On this page ONLY, I decided to offer it for the limited price of just $49.90.</p>
                        <p>That’s an enormous 80% discount OFF the retail price!</p>
                        <p>So, for just $49.90, you can receive your Vibrational Resonance Bracelet right at your doorstep!</p>
                        <p>AND also, to sweeten things up a bit, I’m also going to include FREE shipping and handling.</p>

                        <img src="https://individualogist.com/offer/assets/img/kyanite-1.webp" class="ets clipped">

                        <?php
                         if (empty($name)) {
                            echo "<a class='btn buy-button' href='http://vrb.individua1.pay.clickbank.net/?cbskin=25048&cbexit=1132&cbfid=40745&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Vibrational Resonance Bracelet</a>";
                         } else {
                            echo "<a class='btn buy-button' href='http://vrb.individua1.pay.clickbank.net/?cbskin=25048&cbexit=1132&cbfid=40745&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Vibrational Resonance Bracelet</a>";
                         }
                        ?>

                        <p class="smallprint">Lock in your discount now and claim your LIMITED Vibrational Resonance Bracelet for just $49.90 + Free Shipping!</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper part5">
                        <p class="sp-title">Like all hand-made artefacts, we’ve only managed to produce a limited quantity</p>
                        <p>As you can already tell, this is an extremely time-sensitive offer.</p>
                        <p>Because we only have so many bracelets (about 120 of them) to go around.</p>
                        <p>Complete your request now, and you can receive your rare Vibrational Resonance Bracelet and you can experience near-instant abundance by turning your energy leaks into energy peaks!</p>
                        <img src="https://individualogist.com/offer/assets/img/kyanite-2.webp" class="ets clipped">

                        <?php
                         if (empty($name)) {
                            echo "<a class='btn buy-button' href='http://vrb.individua1.pay.clickbank.net/?cbskin=25048&cbexit=1132&cbfid=40745&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Vibrational Resonance Bracelet</a>";
                         } else {
                            echo "<a class='btn buy-button' href='http://vrb.individua1.pay.clickbank.net/?cbskin=25048&cbexit=1132&cbfid=40745&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Vibrational Resonance Bracelet</a>";
                         }
                        ?>

                        <p class="smallprint">Lock in your discount now and claim your LIMITED Vibrational Resonance Bracelet for just $49.90 + Free Shipping!</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"I was a little concerned</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"This is my first time purchasing something from Individualogist - and I'm VERY impressed. I was a little concerned about shipping durations since I don't usually buy things online, so I got in touch with their customer support team. They really gave me the assurance I needed. 10 days later, I got my bracelet! Its blue pattern is really mesmerizing, and I can already notice a difference in the way I communicate at work. Thank you for this"</p>
                            <p class="quote-name">Wilda Houston, 39, Employment Recruiter</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"This thing works"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I've been manifesting for about 2 years now with nothing to show for it. Just a couple of days after wearing the bracelet and trying out my usual manifesting ritual (I didn't do anything differently other than wear the bracelet), I got a call almost immediately from my boss offering me a promotion! Call me crazy, but I honestly think something in my energies kind of clicked into place after wearing this. Whatever it is, this thing works!"</p>
                            <p class="quote-name">Dale Zimmerman, 46, Structural Engineer</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="quote-card">
                            <h4 class="quote-title">"I think it's the bracelet working its magic"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"Pushing into my 30s and still SINGLE, I was getting worried I wouldn't find someone to settle down with... I got anxious every single night just thinking about it. And then, the strangest thing happened. The guy at work I've been crushing on for the longest time actually asked me out! OMG. We've been hitting it off and it's going insanely well!! I really think it's the bracelet working its magic."</p>
                            <p class="quote-name">Elvira Woods, 27, Immigration Officer</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 mx-auto">
                        <div class="quote-card">
                            <h4 class="quote-title">"Thank you for the amazing changes"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"Hi Individualogist Team, thank you all for making such a huge difference in my life. Thank you for the amazing changes I'm seeing in my vibrations. I am grateful for all the wisdom and transformation since being a part of this. Love and light."</p>
                            <p class="quote-name">Leah Baker, 67, Retired</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                    <div class="col-sm-4 mx-auto">
                        <div class="quote-card">
                            <h4 class="quote-title">"Greatest I've ever felt"</h4>
                            <div class="stars"></div>
                            <p class="quote-text">"I cannot believe how much time I've wasted trying to make the law of attraction work for me! When all it took was this kyanite thing to kinda readjust myself. Less than 8 hours after wearing my vibrational resonance bracelet, I got a call back from a prospect I did not hear back from for TWO WHOLE MONTHS... AND THEY GAVE ME THE DEPOSIT!!! This is the GREATEST I've ever felt in MY LIFE!!!"</p>
                            <p class="quote-name">Kristina Mccarty, 43, Corporate Trainer</p>
                            <p class="small text-center">These results experienced are not typical consumer results. Your results may vary.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-black text-white">
                <div class="row">
                    <div class="faq-wrapper col-sm-8 mx-auto">
                        <p class="sp-title">Frequently Asked Questions</p>
                        <p class="question">What is the Vibrational Resonance Bracelet? How does it help?</p>
                        <p>The Vibrational Resonance Bracelet is made up of a rare material - a material so rare, that it does not even have a proper name. Some call it Golden Obsidian, some call it Rainbow Obsidian. In any case, it contains magnetite nanoparticles, which is what charges it with the ability to absorb and transform negative energies and vibrations, into positive. And through its natural obsidian properties, it also acts as an energetic barrier against all forms of psychic attacks, and is known to enhance one's manifestation efforts. By simply dawning this sphere around your neck, you'll notice a stark, positive difference on a vibrational level.</p>
                        <p class="question">Do you ship to my country?</p>
                        <p>Although we do ship to MOST countries, there are a small number of countries that we are unable to ship to. These countries include: South Africa, India, and Thailand. When completing the order form, please ensure that you've selected the correct country, and do also confirm that your shipping address is correct. If you require assistance, please get in touch with us.</p>
                        <p class="question">How much will it cost to ship to my country?</p>
                        <p>Regardless of wherever you are in the world (apart from South Africa, India, and Thailand), I will have your Vibrational Resonance Bracelet shipped straight to your doorstep <strong>for FREE.</strong> No hidden charges, and no other costs are incurred - I guarantee it. Take it as my token of love, appreciation, and sincere gratitude for being a valued member of the Individualogist.com community :)</p>
                        <p class="question">How long will it take to receive my Vibrational Resonance Bracelet?</p>
                        <p>Our shipping duration normally takes between 7 to 21 days, depending on which country you reside in. A tracking number will be provided, so you'll be able to track exactly where your sphere is during the shipping process.</p>
<!--                        
                        <p class="question">What if I change my mind?</p>
                        <p>I get it - purchasing things online might not be something you're used to. Perhaps you're afraid that your parcel will get lost, or perhaps you're afraid that your Vibrational Resonance Bracelet is not going to work. That's exactly why you're 100% protected by my 60 day moneyback guarantee. All you have to do is send the sphere back to me in the next 60 days, and I'll refund your entire purchase.</p>
                        <p class="question">How is the Vibrational Resonance Bracelet made?</p>
                        <p>A rare slab of kyanite was initially purchased from an auction. Kyanite, given its distinct dual hardness, can be difficult to work with. A diamond saw is used to cut the slab into smaller fragments, which are then sanded and grinded down to the correct sphere-like shape. At this point, the sphere is not yet perfect, and needs to undergo a vigorous process of constant hand-polishing using 600, 1200, 2000, and 3000 grit sandpaper. To smoothen and bring out the shine in the material, the last polish uses an aluminium oxide poloshing compound and a lapidary polishing cloth. The final step of the process is to weave the string and fasten it securely to the sphere.</p>
                        <p>As you can tell, making 100 of these pieces by hand has been an extremely detailed and tiresome process. It's been an amazing journey, and I do sincerely hope that you'll be one of the fortunate ones to enjoy the fruits of our labour.</p>
-->
                        
                        <img src="https://individualogist.com/offer/assets/img/kyanite-3.webp" class="ets clipped">

                        <?php
                         if (empty($name)) {
                            echo "<a class='btn buy-button' href='http://vrb.individua1.pay.clickbank.net/?cbskin=25048&cbexit=1132&cbfid=40745&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Vibrational Resonance Bracelet</a>";
                         } else {
                            echo "<a class='btn buy-button' href='http://vrb.individua1.pay.clickbank.net/?cbskin=25048&cbexit=1132&cbfid=40745&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Vibrational Resonance Bracelet</a>";
                         }
                        ?>

                        <p class="smallprint">Lock in your discount now and claim your LIMITED Vibrational Resonance Bracelet for just $49.90 + Free Shipping!</p>
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
        <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright 2019 Individualogist.com. All Rights Reserved</p>
        <div class="cb-text">
            <p>Your Credit Card Statement Will Show A Charge from CLKBANK</p>
            <p>ClickBank is the retailer of products on this site. CLICKBANK® is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>
            <p>Testimonials, case studies, and examples found on this page are results that have been forwarded to us by users of the "Vibrational Resonance Bracelet" products and related products, and may not reflect the typical purchaser's experience, may not apply to the average person and are not intended to represent or guarantee that anyone will achieve the same or similar results.</p>
            <script src='//cbtb.clickbank.net/?vendor=individua1'></script>
        </div>
    </div>