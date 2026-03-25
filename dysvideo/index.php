<?php
$PageTitle = "Individualogist.com | Diminishing Your Shadow";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>
<script src="https://www.youtube.com/iframe_api"></script>


<style>
    .upsell{padding:10px;}.steps{top:0;}.blue{color:#358de1;font-weight:700;}.red{font-weight:700;color:red;}
    .alert-icon{width:80px;}
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
    .videoBack {overflow:hidden;height: 410px;margin-bottom: 20px;padding: 0 0 0 8px;width: 98%;}.video{width:800px;margin:0 auto;padding:10px;}.video-overlay,.video-overlay-glass{z-index:2!important}.coverTap,.video-cover,.video-overlay,.video-overlay-glass{width:100%;height:100%;top:0;left:0;position:absolute}.coverTap,.play-button-bg,.video-cover,.video-overlay{position:absolute}.video-overlay{background:radial-gradient(circle,rgba(0,0,0,.1),rgba(0,0,0,.8));background:-webkit-radial-gradient(circle,rgba(0,0,0,.1),rgba(0,0,0,.8))}.coverTap{background:rgba(0, 0, 0, 0.5);background-size:contain;z-index:1}.video-cover{z-index:1!important}.play-button-bg,.play-button-graphic{display:block;width:130px;height:80px;cursor:pointer}.play-button-bg{cursor:pointer;border-radius:20px;transition:all .2s ease-out;text-indent:.25em;top:50%;left:50%;-webkit-transform:translateY(-50%) translateX(-50%);transform:translateY(-50%) translateX(-50%);-ms-transform:translate(-50%,-50%);background:#da1921;-webkit-transition:all .2s ease-out}.play-button-bg:hover{-webkit-transform:translateY(-50%) translateX(-50%) scale(1.05);transform:translateY(-50%) translateX(-50%) scale(1.05);-ms-transform:translate(-50%,-50%) scale(1.05);transition:all .2s ease-out}.play-button-graphic{top:50%;left:50%;-webkit-transition:all .2s ease-out;transition:all .2s ease-out;position:relative;-webkit-transform:translateY(-50%) translateX(-50%);transform:translateY(-50%) translateX(-50%);-ms-transform:translate(-50%,-50%)}.play-button-graphic:before{content:"";position:absolute;border:24px solid transparent;top:50%;border-top-width:18px;border-bottom-width:18px;border-left-color:#fff;z-index:2003;left:50%;-webkit-transform:translateY(-50%) translateX(-18%);transform:translateY(-50%) translateX(-18%);-ms-transform:translate(-18%,-50%)}.videoWrapper iframe{box-shadow:0 0 20px #000;position:absolute;top:0;left:0;width:100%;height:100%}.videoWrapper iframe.fixed{position:fixed;z-index:99;left:30px;right:auto;top:30px;height:281px;width:500px;padding:7px;border-radius:4px;background:#000;box-shadow:0 5px 30px rgba(0,0,0,.2)}.video-cover.fixed,.video-overlay.fixed{position:fixed;z-index:999!important;left:30px;right:auto;top:30px;height:290px;width:510px}.video-overlay.fixed{z-index:9999!important}.closeyt-vdo{z-index:9999929;right:auto;top:19px;left:19px;background:#000;border-radius:50%;display:none;width:23px;height:23px;color:#fff;text-align:center;cursor:pointer;font-size:13px;line-height:23px}.closeyt-vdo i{margin:3px 0 0}.closeyt-vdo.fixed{position:fixed;display:inline-block}
    @media only screen and (max-width: 1024px) and (min-width:769px) {.videoBack{height:350px;}}
    @media only screen and (max-width: 768px) and (min-width:501px) {.videoBack{height:250px;}}
    @media only screen and (max-width: 500px) {.videoBack{height:180px;}h1,h2,h3{font-size:1.5em;}}
    .play-overlay{background:#00000080;width:100%;height:100%;position:absolute;top:0;right:0;}
</style>

<div class="upsell">
    <div class="container">
        <div class="row mx-auto">
	    <div class="col-sm-2">
	    	<img class="alert-icon" src="../assets/img/alert-icon.png">
	    </div>
            <div class="col-sm-10">
                <h2>WARNING! Do NOT Close This Page!</h2>
                <p>Closing this page, hitting refresh or going back might result in a double-charge.</p>
            </div>
        </div>
    </div>
    <div class="container">
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
    <div class="container pt-3 pb-5">
        <div class="row">
            <div class="col-sm-10 mx-auto text-center">
                <h1><span class="name">Friend</span>, Your <span class="goldenrod">Archetypal Journey</span> Is INCOMPLETE Without This.</h1>
                <h3>This One Secret Will Determine Your <span class="goldenrod">Progress</span> During This Magnificent Period.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <p>Press the <span class="red">RED PLAY BUTTON</span> to start this IMPORTANT video.
                <br>Remember to turn on your sound!</p>
            </div>
        </div>                
         <div class="row">
            <div class="col-sm-8 mx-auto text-center">        
                <div class="videoBack">
                    <div class="video">
                        <div class="videoWrapper">
                            <div id="player1">
                                <div class="video1">
                                    <div class="video-container">
                                        <div class="video-overlay">
                                            <div class="coverTap">
                                                <div class="play-button-bg">
                                                    <div class="play-button-graphic"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="closeyt-vdo" title="close"><i class="fa fa-times"></i></a>
                                        <div class="video-overlay-glass"></div>
                                        <iframe width="100%" height="100%" id="homevideo" src="//www.youtube.com/embed/KblwnnJZoMw?autoplay=0&enablejsapi=1&rel=0&modestbranding=1&controls=0" allow="autoplay" frameborder="0" allowfullscreen></iframe>
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
                    <span class="archetype-sm creator"></span>
                    <h3>"...A Spot On Reading, With Lots Of Information..."</h3>
                    <p>The Diminishing Your Shadow Report is a spot on reading, with lot of information about understanding the repressed shadow in us and how to embrace it so that we can be fully integrated...</p> 

                    <p>I believe the Individualogist Team has crafted this product with lot of care and love... I want to thank the Individualogist Team for their contribution in making this world a better place to live. </p>

                    <div class="testimonial-profile">
                        <img src="/offer/assets/img/vashist.png">
                        <p>Vashist Reddy Luthmoodoo, 34, Research Analyst - Creator</p>
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
            </div>
        </div>
<!--        
        <div class="row">
            <div class="col-sm-10 mx-auto">

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/assets/inc/addorder.php');
include($path);
?>
                
            </div>
        </div>
-->
    
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/assets/inc/neworder.php');
include($path);
?>
        
</div>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/common-faq.php');
include_once($path);
?>
</div>

<script>
function init() {
    var vidDefer = document.getElementsByTagName('iframe');
        for (var i=0; i<vidDefer.length; i++) {
            if(vidDefer[i].getAttribute('data-src')) {
                vidDefer[i].setAttribute('src',vidDefer[i].getAttribute('data-src'));
            }
        }
	} 
window.onload = init;

$('.video-overlay-glass').on('click', function() {
    $(".video-overlay").show();
    $(".video-overlay-glass").hide();
        $('#homevideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');    
	});

	$('.video-overlay').on('click', function() {
		$('#homevideo')[0].contentWindow.postMessage('{"event":"command","func":"' + 'playVideo' + '","args":""}', '*'); 
        var clk = $("#video-overlay-click").html();
        if( Number(clk)+Number(1) >=3 ){
            showbuyboxContent();
        }
        $("#video-overlay-click").html( Number(clk)+Number(1));
		$(".video-overlay").hide();		
		$(".video-overlay-glass").show();
	});
    
function showCta() {
    $('.hidden-cta').show(300);
    $('html,body').animate({
        scrollTop: $('.video-wrapper').offset().top},1000);
    console.log('cta shown');
}
//setTimeout("showCta()", 5000); // 5:20
setTimeout("showCta()", 320000); // 5:20    
</script>

<?php 
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer.php');
include_once($path); 
?>
