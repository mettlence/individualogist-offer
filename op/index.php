<?php
$PageTitle = "Etheric Energy Reading | Individualogist.com";
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
            .sp-title{line-height:1.2em;font-size:1.75em;text-transform:uppercase;letter-spacing:2px;font-weight:900;text-align: center;clear:both}
            .bg {position:relative;background-size:cover;background-attachment:fixed;background-position:center;background-repeat:none}
            .opp-bg{background-image:url('https://individualogist.com/offer/assets/img/opp-bg.jpg');}
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
            .warning-container{color: red;background-color: #f8d7da;border-color: #f5c6cb;border: 1px solid red;padding: .75em;border-radius: 10px;}
            .warning-title{color: red;font-weight: 700;font-size: 1.5em;margin-bottom: 0;margin-top: .5em;}
            .warning-text{color:#000;font-weight:700}
            .alert-icon{background:url('https://individualogist.com/clickbank/assets/img/alert-icon.png');width:100px;height:100px;margin:0 auto;display:block;background-size:contain;background-repeat:no-repeat;}
            .upsell-hl{text-align:center;font-weight:700;margin:0 auto;margin-bottom:.5em}
            .decline-link{color:#666;text-decoration:underline;text-align:center;margin:0 auto;font-size:14px}
            .quote-box{background:#222;box-shadow:0 5px 15px rgba(0,0,0,.15);padding:1em;max-width:700px;display:block;position:relative;margin: 1em auto;border-radius:.5em;color:#fff}
            .headline-bg{max-width:1024px;margin: 0 auto;position:relative;background:url('https://individualogist.com/offer/assets/img/bg-cosmospink.png');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;background-position:center center;padding: 1em;color:#fff;text-shadow:1px 1px 1px #000;width:100%}
    @media only screen and (max-width:768px) {.hero{padding-top:3em;padding-bottom:3em;}.epp-diagram, .epp-comparison{padding:0}.buy-button{font-size:1em}.img-fr{width:100%;position:relative;margin:0 auto}p{clear:both}.atom,.molecule{width:100%;max-width:100%}.sp-title{font-size:1.2em}.upsell-hl{font-size:1.5em}.ets2{display:none}.quote-card{margin:1em auto}.warning-container{text-align:center}.hero-h1{font-size:1.5em}.hero-h4{font-size:1.2em}.alert-icon{width:50px;height:50px}}
        </style>

        <div class="container-fluid bg opp-bg hero">
            <div class="overlay-hero pa"></div>
                <div class="row">
                    <div class="col-sm-2 mx-auto">
                        <div class="indi-logo"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-8 mx-auto text-center">
                        <h1 class="hero-h1">Watch As Debt Meets Its Demise With This Secret Energy...</h1>
                        <h4 class="hero-h4">Eighty years ago, a powerful new energy was discovered. </h4>
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
                        <p>This strange form of energy is one of the most important and overlooked discoveries since the 20<sup>th</sup> century.</p>
                        <p>It does MORE than just mysteriously heal physical pains, but also corrects the <em>fiscal</em> pains of life!</p>
                        <p>No wonder more and more people are beginning to use this strange source of energy to help with their financial troubles!</p>
                        <p>It&rsquo;s extremely powerful, and it can be <em>controlled</em>.</p>
                        <p>And whoever has the secret to controlling this energy can make the <strong>world bow to their will.</strong></p>
                        <p class="sp-title">Nobody knew you could use this great energy this way, until now!</p>
                        <p>Etheric energy was discovered in the 1940s as an energy field that all living things have, which can be transmitted to non-living things.</p>
                        <p>Now you may have heard of Etheric energy before. If you have, you're probably wondering: <em>How can Etheric energy be used to make me richer? How does that work?</em></p>
                        <p>After Etheric energy&rsquo;s effect on the human body was soundly tested, they moved on to the world at large.</p>
                        <p>They soon found that Etheric energy was present everywhere on earth, forming an energy field around the world and all living things on it.</p>
                        <p>It could be used to control the weather, predict natural phenomenon, and even influence the world at large.</p>
                        <p>As you&rsquo;ll no doubt see Etheric energy is a really powerful energy that you can tap into.</p>
                        <p>But <em>how</em> can you tap into it? And <em>how can it make you more abundant</em>?</p>
                    </div>
                </div>
            </div>
            <div class="part2">
                <div class="container-fluid bg-black text-white forest">
                <div class="pa overlay-v"></div>
                    <div class="row">
                        <div class="col-sm-8 mx-auto">
                            <p class="sp-title">A Secret Element Tied To THE BONES OF THE EARTH.</p>
                            <p>Since ancient times, organic materials such as precious stones, or semi-precious stones have been used for their magical properties.</p>
                            <p>Roman gladiators were seen wearing Rubies, or Blood Stones to stop their wounds from bleeding.</p>
                            <p>Native American tribes believed the malleable flint to be a God.</p>
                            <img src="https://individualogist.com/offer/assets/img/pyramid-wire.png" class="img-fr">
                            <p>And gold was believed by the Egyptians to be the stuff of immortality, divinely blessed to be unburdened by the passing of time itself.</p>
                            <p>Of course, this is nothing new.</p>
                            <p>But what <em>is</em> new and <em>revolutionary</em> is the combination of Etheric energy with the bones of the earth.</p>
                            <p>This unique combination brings wealth and fortune to the owner.</p>
                            <p>Negative energy goes in, positive energy comes out, and the Universe works its magic to deliver wealth in a myriad of ways!</p>
                            <p class="sp-title">Think about this...</p>
                            <p>Etheric energy is a massive energy field that surrounds all matter in the known universe.</p>
                            <p>It&rsquo;s <em>very powerful</em> if properly controlled.</p>
                            <p>Positive and negative Etheric energy affects the world around you beyond your physical well-being.</p>
                            <p>This has been proven time and again by Etheric energy research from the last few decades.</p>
                            <p>For example:</p>
                            <p>Places like slums or rundown have a sense of danger and decrepitude to them. That feeling of unease is your body sensing the Negative Etheric energy in the area.</p>
                            <p>Meanwhile, parks or happy family homes are full of Positive Etheric energy and feel welcoming and bright.</p>
                            <p>I&rsquo;m telling you all this because it doesn&rsquo;t take a genius to figure out that by changing the method of filtering and processing Etheric energy, we can do whatever we want with it.</p>
                            <p>Just imagine what you could do with that power in <em>your </em>hands. Whatever you wanted, whatever you dreamed of, all within arm&rsquo;s reach.</p>
                            <p>...That new house you had in mind? Those loans you&rsquo;re still paying off? That vacation in the Maldives you've been scrimping and saving for?</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper part3">
                            <p class="sp-title">Tell this weird object what you truly desire, and the world will heed your call.</p>
                            <p><?php if (empty($_GET['name'])) { echo 'Yes'; } else { echo ucwords($_GET['name']); };?>, if you&rsquo;re looking to find an alternative way to ensure a greater quality of life...</p>
                            <p>OR if you're tired of simply dreaming of an abundant life RID of financial stress and scarcity...</p>
                            <p>...Then something truly enigmatic must be happening.</p>
                            <p>This special tool MUST have sensed some sort of disruption in your etheric energies, and made its way into your orbit.</p>
                            <p>And these are all possible because we&rsquo;ve combined the power of Etheric energy with the wealth-inducing powers of the bones of the earth.</p>
                            <p>A method never tried before, until now...</p>
                            <p>Because of this unique combination of organic and inorganic materials, the filtration and processing of Etheric energy have been at the forefront of energy transmuting technology.</p>
                            <p>Recent findings have discovered that Etheric energy and the Earth are <em>very closely related</em>.</p>
                            <p>As Earth has been the base for life for so many years, life has literally changed the face of the Earth.</p>
                            <p>Because of that, Earth itself is a powerful tool to help manage Etheric energy positive and negative charges.</p>
                            <p>The "Bones of the Earth" like fossils, normal stones, and gems have long been used in alternative medicine.</p>
                            <p>Some curing physical pains, and some being used to cure madness and other ailments of the mind.</p>
                            <p>Some of these stones have been known to make people richer in their lifetimes.</p>
                            <p>And as it turns out, putting the Bones of the Earth while constructing it can make an Etheric energy Device much more powerful and moneymaking.</p>
                            <p>The ancients may not have fully understood how these worked, but it didn&rsquo;t stop them from healing and helping others.</p>
                            <p>However, their legacy remains.</p>
                            <p>Thanks to their notes and the march of technology, we&rsquo;ve eventually figured out the method and means behind their ways, and now the truest potential of Etheric energy can be <em>yours</em> to use!</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg bridge">
                <div class="pa overlay-h"></div>
                <div class="row">
                    <div class="col-sm-8 mx-auto">
                            <p class="sp-title">Consider the stories of these fine individuals:</p>
                            <div class="story-card">
                                <h4 class="story-title">Christine V., Single mom, 3 kids.</h4>
                                <p class="story-text">The divorce really took a toll on her mentally and fiscally as she started developing a bad drinking habit. She didn't have that many friends, and she was on the brink of fiscal destitution because of debts from the court case and the cost of living.</p>
                                <p class="story-text">Then she bought the Prosperity Pyramid, and she swears that as soon as she had it in the home, her life began to turn around. Her drinking problem just sort of dropped off as her habits began to change.</p>
                                <p class="story-text">More than that, she got a new job as a small-town business that started booming almost overnight. She and her kids are enjoying a considerably happier life now, and she firmly believes that the Prosperity Pyramid was the key to her success.</p>
                                <p class="small text-center text-dark">These results experienced are not typical consumer results. Your results may vary.</p>
                            </div>
                            <div class="story-card">
                                <h4 class="story-title">Russel B., struggling actor from Minnesota.</h4>
                                <p class="story-text">Russell was so good at his gig he could make the town cry by just walking funny. Unfortunately, his job was starting to dry up as Theaters were closing down, and the Actors' Guilds around his town just had no work for him.</p>
                                <p class="story-text">One day he received the Prosperity Pyramid from a weary aunt, and against his protests, insisted that he at least keep it around. Within weeks he got in touch with an old friend of his from college, and for the first time in nearly three years, he had a gig.</p>
                                <p class="story-text">His performance sold like Gangbusters, and he's made appearances on local radio and TV since. He's ashamed to admit it, but the pyramid must have had <em>some </em>effect.</p>
                                <p class="small text-center text-dark">These results experienced are not typical consumer results. Your results may vary.</p>
                            </div>
                            <p>As you can see, the Etheric Prosperity Pyramid is a powerful tool that can make a miraculous difference.</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper">
                            <p class="sp-title">If these Truth Seekers achieved this much with their pyramids, imagine what <em>you</em> could achieve with the SAME tools!</p>
                            <p>I need not consult the shifting stars or the tarot cards to see you&rsquo;re having money troubles too.</p>
                            <p>Nobody likes having to deal with taxes, payments, debts, and dues. It&rsquo;s a burden that&rsquo;s just there like a stubborn backache.</p>
                            <p>Imagine if you could be free from all of that!</p>
                            <p>It&rsquo;s been said that money can&rsquo;t buy happiness - but it can definitely help with relieving stress.</p>
                            <p>Imagine having more than what you need and more than what you could use, to the point where you don&rsquo;t even <em>need</em> to work a day in your life anymore and just travel or lounge in your little corner of the world!</p>
                            <p>Now imagine all of that, a veritable modern-day miracle, and it could all be yours if you had the Etheric Prosperity Pyramid.</p>
                            <p>All you need to do is to place the Etheric Prosperity Pyramid within your work or living space, and leave it be.</p>
                            <img src="https://individualogist.com/offer/assets/img/op-energy-explained-new.png" class="epp-diagram">
                            <p>Let it do its work in silence as it <strong>converts the negative Etheric energy around you into prosperity-inducing positive Etheric energy.</strong></p>
                            <p>Let it sit and <strong>purify your home or workplace</strong> for more than just your prosperity.</p>
                            <p>Let it <strong>clear the negative etheric energies</strong> that are causing you illness, fatigue, and confusion.</p>
                            <p>Let it replace these negativities with the positive etheric energies that <strong>stimulate abundance, growth, and clarity of thought!</strong></p>
                            <img src="https://individualogist.com/offer/assets/img/epp-flow.png" class="epp-flow">
                            <p class="sp-title">Be wary! Not all Pyramids are built the same!</p>
                            <p>You&rsquo;ll have seen many other Etheric energy Pyramid designs floating around the internet...</p>
                            <p>They use the same structure and the same appearance... And sometimes have the same materials used in their construction.</p>
                            <p>However, you have to remember...</p>
                            <p>These designs are outdated. The materials they tend to use are from older compositions of the Pyramid and don't have nearly as much power or utility as the one you see here.</p>
                            <img src="https://individualogist.com/offer/assets/img/epp-comparison.png" class="epp-comparison">
                            <p>It's likely you'll have missing, inappropriate, or, at worst, mismatched organic and inorganic materials that will <em>worsen</em> your condition instead of improving it!</p>
                            <p>The danger is IMMENSE; much like building your home with old bricks and cracked beams.</p>
                            <p>When it comes to Etheric energy systems, take <em>no</em> chances!</p>
                    </div>
                </div>
            </div>
            <div class="container-fluid bg-black text-white">
                <div class="row">
                    <div class="sp-wrapper part4">
                            <p class="sp-title">Introducing: The Etheric Prosperity Pyramid - the Alternative Prosperity Device</p>
                            <p>The Etheric Prosperity Pyramid is crafted with organic and inorganic materials, including the bones of the earth.</p>
                            <img src="https://individualogist.com/offer/assets/img/op-new-1.png" class="ets clipped">
                            <p>This is more than just an elaborate and precious centerpiece.</p>
                            <p>This Prosperity Pyramid will be the reason that you&rsquo;ll become healthier, more powerful, and richer than you could ever imagine.</p>
                            <p>It CAN CHANGE your world for the BETTER!</p>
                            <p>And it <em>could be all yours</em>.</p>
                            <p>Wherever you place it, however you wish to carry it, it will quickly enrich your surroundings with positive etheric energy that attracts wealth and good health into your reach.</p>
                            <p>Once you have this in your life, you don&rsquo;t have to settle for:</p>
                            <ul>
                                <li>Recurring debts and mortgage</li>
                                <li>Stress caused by being overworked</li>
                                <li>Worries and anxieties</li>
                                <li>Lack of purpose and direction</li>
                            </ul>
                            <p>All of this is possible, thanks to the inescapable power of etheric energy.</p>
                            <p>Nowhere else can you find a collection of specialized materials buried inside a single object that is capable of bringing you opportunities and wealth WITHOUT having to lift a finger.</p>
                            <p>So, what are you waiting for?</p>
                            <p>Times are changing, <?php if (empty($_GET['name'])) { echo 'my dear'; } else { echo ucwords($_GET['name']); };?>. The old ways are coming to an end, and the old assurances we once had are starting to fade away.</p>
                        
                            <?php
                             if (empty($name)) {
                                echo "<a class='btn buy-button' href='http://op59.individua1.pay.clickbank.net/?cbskin=25048&cbfid=40745&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Etheric Prosperity Pyramid</a>";
                             } else {
                                echo "<a class='btn buy-button' href='http://op59.individua1.pay.clickbank.net/?cbskin=25048&cbfid=40745&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Etheric Prosperity Pyramid</a>";
                             }
                            ?>

                            <p class="smallprint">Lock in your discount now and claim your LIMITED Etheric Prosperity Pyramid for just $59.90!</p>
                    </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="sp-wrapper part5">
                            <p class="sp-title">Don&rsquo;t get caught out!</p>
                            <p>The only way we can make it through this time of uncertainty is by embracing tradition and the past as we never have before. If it means adopting the power of Etheric energy like we never have before, then why not take the plunge?</p>
                            <p>And what better way to do it than by adopting this Etheric Prosperity Pyramid and altering the very world around us to suit our needs.</p>
                            <p>Thousands of people from across the continent have already made the leap. And so can you!</p>
                            <p class="sp-title">Say YES to PROSPERITY NOW!</p>
                            <p>Accept the power of Etheric energy and undo the shackles of modern life that keep us all down.</p>
                            <p>Be free of financial troubles and defy the will of the time itself and be better for it.</p>
                            <p>Embrace the most powerful force discovered in CENTURIES and use it to make life BETTER.</p>
                            <p class="sp-title">REMEMBER...</p>
                            <p>THIS IS A ONE TIME OFFER. The Etheric Prosperity Pyramid is usually sold at $149.90, but with the changing and auspicious times around us, you&rsquo;ll need all the help you can get.</p>
                            <p>Take this prosperity tool for $59.90 now (with free shipping) - because you will NEVER HAVE AN OPPORTUNITY like this AGAIN!</p>
                            <p class="sp-title">And As Always, Here's My Personal Promise To YOU</p>
                            <p>Within the next 60 days from the date of your purchase, if you decide that the Etheric Prosperity Pyramid is NOT for you, or if you're not satisfied with it for ANY REASON, simply return the pyramid to us, and we'll issue you a 100% REFUND.</p>
                            <p class="text-center strong">Let's Revise What We've Talked About So Far...</p>
                            <ul class="ul-crystal">
                                <li>Your Etheric Prosperity Pyramid can equip you with everything you need to protect your soul, align your chakras, heal your inner self, and emit positive etheric energies, all by simply having it.</li>
                                <li>You can receive it at its COST PRICE of just $59.90</li>
                                <li>FREE shipping and handling (I've got you covered).</li>
                                <li>You are protected by my 60-day moneyback guarantee.</li>
                            </ul>
                            <p class="text-center strong">Do NOT wait a second longer - before this rare opportunity is no longer available.</p>
                            <p>You can experience a divine transformation across your entire being - by simply seizing your Etheric Prosperity Pyramid at COST for <strong>$59.90 RIGHT NOW.</strong></p>
                            <p>...Are you ready to regain control over your etheric energies, and innermost desires?</p>
                            <img src="https://individualogist.com/offer/assets/img/op-new-3.png" class="ets">

                            <?php
                             if (empty($name)) {
                                echo "<a class='btn buy-button' href='http://op59.individua1.pay.clickbank.net/?cbskin=25048&cbfid=40745&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Etheric Prosperity Pyramid</a>";
                             } else {
                                echo "<a class='btn buy-button' href='http://op59.individua1.pay.clickbank.net/?cbskin=25048&cbfid=40745&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Etheric Prosperity Pyramid</a>";
                             }
                            ?>

                            <p class="smallprint">Lock in your discount now and claim your LIMITED Etheric Prosperity Pyramid for just $59.90!</p>
                    </div>
                </div>
            </div>
            
            <div class="container-fluid bg-black text-white">
                <div class="row">
                    <div class="faq-wrapper col-sm-8 mx-auto">
                        <p class="sp-title">Frequently Asked Questions</p>
                        <p class="question">What is the Etheric Prosperity Pyramid? How does it help?</p>
                        <p>The Etheric Prosperity Pyramid is handcrafted using organic and organic materials, including resin, quartz, gold foil, copper, and obsidian. A 50/50 ratio between organic and inorganic material is carefully and precisely maintained to ensure optimal energy filtration and projection.</p>
                        <p>How it's used is entirely up to you - placing it somewhere in your home, keeping it in your pocket, storing it in your bag are some of the common ways that our community uses it.</p>                        
                        <p class="question">How big is the Etheric Prosperity Pyramid?</p>
                        <p>The pyramid measures just 2.7" (7cm) all around (height, width, and depth). It's kept relatively small so that it can be used in a variety of ways. You could carry it in your pocket, keep it in your bag, or place it inconspicuously on any desk, table, or shelf, without appearing out of place.</p>
                        <p class="question">Do you ship to my country?</p>
                        <p>Although we do ship to MOST countries, there are a small number of countries that we are unable to ship to. These countries include: South Africa, India, and Thailand. When completing the order form, please ensure that you've selected the correct country, and do also confirm that your shipping address is correct. If you require assistance, please get in touch with us.</p>
                        <p class="question">How much will it cost to ship to my country?</p>
                        <p>Regardless of wherever you are in the world (apart from South Africa, India, and Thailand), I will have your Etheric Prosperity Pyramid shipped straight to your doorstep <strong>for FREE.</strong> No hidden charges, and no other costs are incurred - I guarantee it. Take it as my token of love, appreciation, and sincere gratitude for being a valued member of the Individualogist.com community :)</p>
                        <p class="question">How long will it take to receive my Etheric Prosperity Pyramid?</p>
                        <p>Our shipping duration normally takes between 7 to 21 days, depending on which country you reside in. A tracking number will be provided, so you'll be able to track exactly where your pyramid is during the shipping process.</p>
                        <p class="question">What if I change my mind?</p>
                        <p>I get it - purchasing things online might not be something you're used to. Perhaps you're afraid that your parcel will get lost, or perhaps you're afraid that your Etheric Prosperity Pyramid is not going to work. That's exactly why you're 100% protected by my 60 day moneyback guarantee. All you have to do is send the pyramid back to me in the next 60 days, and I'll refund your entire purchase.</p>

                        <?php
                         if (empty($name)) {
                            echo "<a class='btn buy-button' href='http://op59.individua1.pay.clickbank.net/?cbskin=25048&cbfid=40745&cbtimer=68&vtid=$vtid'>Click Here To Claim Your<br>Etheric Prosperity Pyramid</a>";
                         } else {
                            echo "<a class='btn buy-button' href='http://op59.individua1.pay.clickbank.net/?cbskin=25048&cbfid=40745&cbtimer=68&name=$name&email=$email&vtid=$vtid'>Click Here To Claim Your<br>Etheric Prosperity Pyramid</a>";
                         }
                        ?>

                        <p class="smallprint">Lock in your discount now and claim your LIMITED Etheric Prosperity Pyramid for just $59.90!</p>
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
            <p>Testimonials, case studies, and examples found on this page are results that have been forwarded to us by users of the "Etheric Prosperity Pyramid" products and related products, and may not reflect the typical purchaser's experience, may not apply to the average person and are not intended to represent or guarantee that anyone will achieve the same or similar results.</p>
            <script src='//cbtb.clickbank.net/?vendor=individua1'></script>
        </div>
    </div>