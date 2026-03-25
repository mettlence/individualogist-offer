<?php
$PageTitle = "Individualogist.com | Diminishing Your Shadow";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>
<!-- <script src="https://www.youtube.com/iframe_api"></script> -->


<style>
    .upsell{padding:10px;background:#f8f8f8;text-shadow:none;}.steps{margin:.5em auto;top:0;}.blue{color:#358de1;font-weight:700;}.red{font-weight:700;color:red;}
    .upsell h2 {font-size: 1.2em;}
    .upsell p {color:#000;font-weight:700}
    .video-wrapper {width:100%;position:relative;}.video-wrapper iframe {width:100%;height:550px;pointer-events:none;}
    .video-blocker{height:100%;width:100%;position:absolute;background:transparent;top:0;z-index:1;left:0;right:0;margin:auto;}
    .video-controller {position:absolute;bottom:6px;right:0;left:0;z-index:99;padding:.5em;max-width:730px;background:rgba(0, 0, 0, 0.85);width:100%;height:75px;margin:auto;}
    .pause, .play{height:100%;margin: 0 5px;display:block;cursor:pointer;}
    .main-play{display:block;width: 80px;height: 80px;position: absolute;top: 0;right: 0;left: 0;bottom: 0;margin: auto;z-index: 999;cursor:pointer;}
    .block-top{background:#f8f8f8;position:absolute;width:100%;height:70px;top:0;right:0;left:0;margin:auto;}
    .pause:hover,.play:hover{filter:drop-shadow(0 0 5px #fff);transition:.4s;-webkit-transition:.4s;}
    #play-button,#pause-button{display:inline-block;height:100%;}
    .hidden-cta{display:none;}
    h1,h2,h3{font-size:2em;}
    .img-dys{width:100%;filter: drop-shadow(3px 3px 5px #000);-webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(70%, transparent) , to(rgba(250, 250, 250, 0.3)));}
</style>

<!-- New Video CSS -->
<style>
    .videoBack {overflow:hidden;height: 410px;margin-bottom: 20px;padding: 0 0 0 8px;width: 98%;}.video{width:800px;margin:0 auto;padding:10px;}.video-overlay,.video-overlay-glass{z-index:2!important}.coverTap,.video-cover,.video-overlay,.video-overlay-glass{width:100%;height:100%;top:0;left:0;position:absolute}.coverTap,.play-button-bg,.video-cover,.video-overlay{position:absolute}.video-overlay{background:radial-gradient(circle,rgba(0,0,0,.1),rgba(0,0,0,.8));background:-webkit-radial-gradient(circle,rgba(0,0,0,.1),rgba(0,0,0,.8))}.coverTap{width: 100%;height: 100%;top: 0;left: 0;cursor:pointer;background-repeat: no-repeat;background-position: center;background-color:rgba(0, 0, 0, 0.5);background-size:contain;z-index:1}.video-cover{z-index:1!important}.play-button-bg,.play-button-graphic{display:block;width:130px;height:80px;cursor:pointer}.play-button-bg{cursor:pointer;border-radius:20px;transition:all .2s ease-out;text-indent:.25em;top:50%;left:50%;-webkit-transform:translateY(-50%) translateX(-50%);transform:translateY(-50%) translateX(-50%);-ms-transform:translate(-50%,-50%);background:#ff0000;-webkit-transition:all .2s ease-out}.play-button-bg:hover{-webkit-transform:translateY(-50%) translateX(-50%) scale(1.05);transform:translateY(-50%) translateX(-50%) scale(1.05);-ms-transform:translate(-50%,-50%) scale(1.05);transition:all .2s ease-out}.play-button-graphic{top:50%;left:50%;-webkit-transition:all .2s ease-out;transition:all .2s ease-out;position:relative;-webkit-transform:translateY(-50%) translateX(-50%);transform:translateY(-50%) translateX(-50%);-ms-transform:translate(-50%,-50%)}.play-button-graphic:before{content:"";position:absolute;border:24px solid transparent;top:50%;border-top-width:18px;border-bottom-width:18px;border-left-color:#fff;z-index:2003;left:50%;-webkit-transform:translateY(-50%) translateX(-18%);transform:translateY(-50%) translateX(-18%);-ms-transform:translate(-18%,-50%)}.videoWrapper iframe{box-shadow:0 10px 30px rgba(0,0,0,0.2);position:absolute;top:0;left:0;width:100%;height:100%}.videoWrapper iframe.fixed{position:fixed;z-index:99;left:30px;right:auto;top:30px;height:281px;width:500px;padding:7px;border-radius:4px;background:#000;box-shadow:0 5px 30px rgba(0,0,0,.2)}.video-cover.fixed,.video-overlay.fixed{position:fixed;z-index:999!important;left:30px;right:auto;top:30px;height:290px;width:510px}.video-overlay.fixed{z-index:9999!important}.closeyt-vdo{z-index:9999929;right:auto;top:19px;left:19px;background:#000;border-radius:50%;display:none;width:23px;height:23px;color:#fff;text-align:center;cursor:pointer;font-size:13px;line-height:23px}.closeyt-vdo i{margin:3px 0 0}.closeyt-vdo.fixed{position:fixed;display:inline-block}
    @media only screen and (max-width: 1024px) and (min-width:769px) {.videoBack{height:350px;}}
    @media only screen and (max-width: 768px) and (min-width:501px) {.videoBack{height:250px;}}
    @media only screen and (max-width: 500px) {.videoBack{height:180px;}h1,h2,h3{font-size:1.5em;}}
    .play-overlay{background:#00000080;width:100%;height:100%;position:absolute;top:0;right:0;}
</style>

<div class="upsell">
    <div class="container warning-container">
        <div class="row mx-auto">
            <div class="col-sm-2">
                <img class="alert-icon" src="../assets/img/alert-icon.png">
            </div>
            <div class="col-sm-10">
                <h2>WARNING! Do NOT Close This Page!</h2>
                <p>Closing this page, hitting refresh or going back might result in a double-charge.</p>
            </div>
        </div>
        <div class="row mx-auto">
            <div class="col-sm-12">
                <ol class="steps">
                    <li>Step 1: Checkout</li>
                    <li class="active">Step 2: Customize Order</li>
                    <li>Step 3: Complete Order</li>
                </ol>
	       </div>
    	</div>
    </div>
</div>

<div class="dys-container">
    <div class="container pb-5">
        <div class="row">
            <div class="col-sm-10 mx-auto text-center mb-3">
                <div class="indi-logo">
                    <img src="/offer/assets/img/individualogist-logo2.png">
                </div>
                <h1 style="font-weight:900">Your <span class="goldenrod">Archetypal Journey</span> Is INCOMPLETE Without This.</h1>
                <h3 style="font-weight:700">Watch The Video Below & Discover Your Powerful Abundance Secret!</h3>
<!--                <h3>Watch The Video Below & Discover This Powerful Abundance Secret That Will Determine Your <span class="goldenrod">Progress</span> During This Magnificent Period.</h3>-->
            </div>
        </div>
<!--
        <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <p>Press the <span class="red">RED PLAY BUTTON</span> to start this IMPORTANT video.
                <br>Remember to turn on your sound!</p>
            </div>
        </div>
-->
         <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <div class="videoBack">
                    <div class="video">
                        <div class="videoWrapper">
                            <div id="player1">
                                <div class="video1">
                                    <div class="video-container">
                                        <div class="video-overlay">
                                            <div class="coverTap" id="coverTap">
                                                <div class="play-button-bg">
                                                    <div class="play-button-graphic"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="closeyt-vdo" title="close"><i class="fa fa-times"></i></a>
                                        <div class="video-overlay-glass" style="display: none;"></div>
                                        <div id="player"></div>
                                        <!-- <iframe width="100%" height="100%" id="homevideo" src="https://www.youtube.com/embed/ctel-_ejYOI?enablejsapi=1&autoplay=0&modestbranding=1&controls=0&showinfo=0&rel=0&hd=1&wmode=transparent&enablejsapi=1&cc_load_policy=1" frameborder="0" allowfullscreen class="video-cover"></iframe> -->

<!--                                        <iframe width="100%" height="100%" id="homevideo" src="//www.youtube.com/embed/KblwnnJZoMw?autoplay=0&enablejsapi=1&rel=0&modestbranding=1&controls=0&cc_load_policy=1" allow="autoplay" frameborder="0" allowfullscreen></iframe>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="hidden-cta container">
        <div class="row">
            <div class="col-sm-10 mx-auto text-center">

                <?php
                $path = $_SERVER['DOCUMENT_ROOT'];
                $path .= ('/offer/assets/inc/addorder.php');
                include($path);
                ?>

            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 mx-auto">
                <img class="img-dys" src="/offer/assets/img/dys-cover.png">
            </div>
            <div class="col-sm-7 mx-auto">
                <ul class="tick-list">
                    <li>Diminishing Your Shadow Report (Value $97.00)</li>
                        <div class="indent">We analyse your shadow in excruciating detail and provide you with over 200 pages of highly specific, accurate, and revealing information about your Shadow!</div>
                        <div class="indent">You’ll attain a profound understanding of your purpose in life, your personality, and direction!</div>
                    <li>Shadow Metamorphosis Guide (Value $197.00)</li>
                        <div class="indent">360 days worth of daily readings, insights, and exercises to guide you through the shadow diminishing process</div>
                        <div class="indent">You’ll never have to wonder whether you're on the right track, and you'll have something to rely on for the rest of the year.</div>
                    <li>7 Days of Meditation Tracks (Value $69.00)</li>
                    <li>The Birth of Tarot Reading (Value $37.00)</li>
                    <li>Unlocking the Wheel of Your Channeling Chakras (Value $37.00)</li>
                    <li>Elements of Astrology (Value $37.00)</li>
                    <li>The Pendulum of Emotional Freedom Tapping (Value $37.00)</li>
                    <li>The Mastery of Palmistry (Value $37.00)</li>
                    <li>Balancing Your Life with Deep Rhythmic Chi Gong (Value $37.00)</li>
                    <li>The Revelation of Individuation (Value $37.00)</li>
                </ul>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-10 mx-auto">
                <div class="testimonial">
                    <span class="archetype-sm caregiver"></span>
                    <h3>"...Opened a new gateway..."</h3>
                    <p>In the past 3 years I have been still struggling to find my direction in life, and how to follow my Soul calling... There has always been something hold me back and shadow my direction, especially when crisis happens in Life, I feel lost and struggle to hold on to what I have found...</p>
                    <p>During my biggest time fo struggle, the urge to find a clearer purpose and strength to uphold myself became even stronger. I came across this website and discovered my Archetype reading and Shadow profile, which immensely helped me to realise a lot of insights and understandings about who I am and which directions I should take...</p>
                    <p>The information provided about Archetypes and Shadows from this website is very helpful for the first stage of self-discovery, and opened a new gateway for going further and deeper towards your Soul's yearning!</p>
                    <div class="testimonial-profile">
                        <p>Nhan Ta, 30 Entrepreneur - Caregiver</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm explorer"></span>
                    <h3>"...Truly heal my physical and spiritual self..."</h3>

                    <p>I have been on my spiritual journey for about a year. It wasnt until i got diagnosed with HSV did i truly began to embark on the quest of individuation and natural healing techniques. This has helped me take a better look at myself and go inward to truly HEAL my physical and spiritual self. Thank you for EVERYTHING!</p>

                    <div class="testimonial-profile">
                        <p>Ciara L, 22, DOT Driver - Explorer</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm innocent"></span>
                    <h3>"...Most in-depth report I have ever received..."</h3>

                    <p>...This program from Individualogist is the most in-depth report I have ever received and one of the ONLY ones I have found that is not cookie cutter made for each different personality type. The Diminishing Your Shadow Report I received allowed me to better understand the most intricate details about myself that I had not even realized were lying beneath the depths...</p>

                    <div class="testimonial-profile">
                        <img src="/offer/assets/img/kikono.png">
                        <p>Kikono Savo, 35, Single Mother and Caretaker - Innocent</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm lover"></span>
                    <h3>"...I need to change myself..."</h3>

                    <p>For things to change, first I need to change myself. Without realizing, the quest emails I’ve been receiving during my manifestation  journey finally came into my realization that it's all about shaping our own reality by reprogramming our mindsets. I can’t wait to see wonderful things for me to show the world!</p>

                    <div class="testimonial-profile">
                        <p>Mike Nas, 28, Lover</p>
                    </div>
                </div>

                <div class="testimonial">
                    <span class="archetype-sm magician"></span>
                    <h3>"...Try it yourself..."</h3>

                    <p>Had a great time with my readings! I've learned a lot about my strengths, weaknesses and different latent gifts I have. Gifts that need to be tapped in to and used. There are things in my reading that have amazed me. Try it for yourself!</p>

                    <div class="testimonial-profile">
                        <p>Barbara Lewis, 67, Magician</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-10 mx-auto">

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/assets/inc/addorder.php');
include($path);
?>

            </div>
        </div>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/assets/inc/neworder.php');
include($path);
?>

</div>

</div>

<link href="https://fonts.googleapis.com/css?family=Raleway:500,700,900" rel="stylesheet">
<style>
    /* Pop up styles start */
    .popup1{    background: #222;width: 100%;position: fixed;border-radius: 1em;border: 2px solid gold;max-width: 598px;background-size: cover;height: 550px;background-position: center center;font-family: 'Raleway', sans-serif;}
    .popup-logo1 img {width: 150px;display: block;margin: 0 auto;padding: 1em;filter: drop-shadow(1px 1px 1px #000);position: relative;}
    .popup-body1 {color: #fff;width: 80%;position: relative;margin: 0 auto;text-align: center;}
    .popup-body1 p {font-size:1.2em;color: #fff}
    .popup-body1 h2 {font-size:2em}
    .popup-cta1 {background: linear-gradient(gold,goldenrod);padding: .5em 1em;color: #222;text-transform: uppercase;width: 80%;max-width: 450px;margin: 0 auto;font-weight: 700;font-size: 1.2em;display: block;border-radius: 5px;position: relative;white-space:normal;text-align: center;}
    .arrow1{    background: #fff;border-radius: 50%;position: absolute;padding: 5px 11px;top: 5px;right: 5px;margin: 0 auto;display: inline-block;}
    .guarantee-text1{font-size: 1.2em;text-transform: uppercase;letter-spacing: 3px;color: gold;}
    .gold-text1{color:gold;font-weight:700;}
    .LockOff { display: none; visibility: hidden }
    .LockOn { display: block; visibility: visible; position: fixed; z-index: 998; top: 0; left: 0; width: 100%; height: 100%; background-color: #000; text-align: center; filter: alpha(opacity=85); opacity: .85 }
    #exitPopup { display: none; z-index: 100000; margin:auto;left: 0;right: 0;top:0;bottom:0}
    @media only screen and (max-width:768px) {.popup{height:500px}}
     /* Pop up styles end */
</style>

<!--Popup-->
<!--
<a id="popupLink">
    <div id="exitPopup" class="popup1">
        <div class="popup-logo1">
            <img src="https://individualogist.com/offer/assets/img/individualogist-logo2.png">
        </div>
        <div class="popup-body1">
            <h2>Wait! How About I <span class="gold-text1">Split The Payments?</span></h2>
            <p>You'll still receive your Diminishing Your Shadow Report, your Shadow Metamorphosis Guide, and all the <span class="gold-text1">bonuses</span> as promised, and you'll also be protected by our</p>
            <p><span class="guarantee-text1">60-day guarantee!</span></p>
        </div>
        <button class="btn popup-cta1">Click Here To Continue</button>
    </div>
</a>
-->
<div id="LockPane" class="LockOff"></div>
<!-- end -->
<script>
   var tag = document.createElement('script');
       tag.src = "https://www.youtube.com/iframe_api";
   var firstScriptTag = document.getElementsByTagName('script')[0];
       firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
   var player;
   var youtube = false;

   function onYouTubePlayerAPIReady() {
       player = new YT.Player('player', {
           videoId: 'ctel-_ejYOI',
//           videoId: 'KblwnnJZoMw',
           playerVars: { 'autoplay': 0, 'controls': 0,'rel': 0,'modestbranding':1,'showinfo':0,'wmode':'transparent' },
           events: {
               'onReady': onPlayerReady,
               'onStateChange': onPlayerStateChange,
           }
       });
   }

   function onPlayerReady(event) {
       if(youtube){
           setTimeout(function(){
               $(".video-overlay").hide();
               $(".video-overlay-glass").show();
               event.target.playVideo();
           }, 1000);
       }
   }

   var done = false;
   var pauseOnce = function(){
       pauseOnce = function(){};
       player.pauseVideo();
   };

   function onPlayerStateChange(event) {
       if (event.data == 1) {

       }
       if (event.data==YT.PlayerState.PAUSED){
           $(".video-overlay").show();
           $(".video-overlay-glass").hide();
       }
       if (event.data == YT.PlayerState.PLAYING && !done) {
           $(".video-overlay").hide();
           $(".video-overlay-glass").show();
       }
   }

   function stopVideo() {
       player.stopVideo();
   }
   var img_index = 0;
   $(".video-overlay").click(function(){
       player.playVideo();
       $(".video-overlay").hide();
       $(".video-overlay-glass").show();
   });

   $(".video-overlay-glass").click(function(){
       player.pauseVideo();
       $(".video-overlay").show();
       $(".video-overlay-glass").hide();
   });

</script>

<script>

// function init() {
//     var vidDefer = document.getElementsByTagName('iframe');
//         for (var i=0; i<vidDefer.length; i++) {
//             if(vidDefer[i].getAttribute('data-src')) {
//                 vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
//             }
//         }
// 	}
// window.onload = init;

// $('.video-overlay-glass').on('click', function() {
//     console.log('stop');
//     $(".video-overlay").show();
//     $(".video-overlay-glass").hide();
//         $('#homevideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
// 	});

// 	$('.video-overlay').on('click', function() {
//         console.log('play');
// 		$('#homevideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*');
//         var clk = $("#video-overlay-click").html();
//         if( Number(clk)+Number(1) >=3 ){
//             showbuyboxContent();
//         }
//         $("#video-overlay-click").html( Number(clk)+Number(1));
// 		$(".video-overlay").hide();
// 		$(".video-overlay-glass").show();
// 	});

function showCta() {
    $('.hidden-cta').show(300);
}
setTimeout("showCta()", 320000); // 5:20
//setTimeout("showCta()", 500); // Instant
</script>
<!--
<script type="text/javascript">
  function CallBeforeExit() {
    document.getElementById('LockPane').style.display = 'block';
    if (needToConfirm) {
        needToConfirm = false;
        if (is_chrome || is_safari) {
            window.scrollTo(0, 0);
            $("#exitPopup").show();
            LockScreen();
            return 'Success! You just activated my secret Hidden Discount! Be quick and click "Stay on this Page" to get it!'
        } else {
            if (is_firefox) {
                if (/Firefox[\/\s](\d+\.\d+)/.test(navigator.userAgent)) {
                    var a = new Number(RegExp.$1);
                    if (a >= 4) {
                        window.scrollTo(0, 0);
                        $("#exitPopup").show();
                        LockScreen()
                    } else {
                        location.href = url
                    }
                    return "************************************************* \n Wait \n ************************************************* \n\nSpecial 1-Time opportunity on the next page... \n\nActivate Your Discount NOW====>"
                }
            } else {
                location.href = url;
                return "************************************************* \n Wait \n ************************************************* \n\nSpecial 1-Time opportunity on the next page... \n\nActivate Your Discount NOW====>"
            }
        }
    }
  }

  function LockScreen() {
      var a = document.getElementById("LockPane");
      if (a) {
          a.className = "LockOn"
      }
  };

  var needToConfirm = true;
  var is_chrome = navigator.userAgent.toLowerCase().indexOf('chrome') > -1;
  var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
  var is_safari = navigator.userAgent.toLowerCase().indexOf('safari') > -1;
  var url = "https://individualogist.com/";

  $(document).ready(function(){
      window.onbeforeunload = CallBeforeExit;
  });
</script>
-->
<script type="text/javascript">
    $(document).ready(function() {

        // var productLink = 'http://paa-' + archetype + '.individua1.pay.clickbank.net/?cbskin=22063&cbur=d';
        // http://dys-car.individua1.pay.clickbank.net/?cbskin=22063&cbur=d

        // bypass exitPopup
        $('.dys-container').find('a').attr('onclick', 'needToConfirm=false');
    });
</script>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer.php');
include_once($path);
?>
