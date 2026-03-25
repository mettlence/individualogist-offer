<?php
$PageTitle = "(1) Notification | Individualogist.com";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('common/header.php');
include_once($path);
?>
<style>
  h1,h2,h3,h4,h5,h6{font-family:'Raleway',sans-serif}
  .footer p a {color:#bc38d2}
  body{background:#f8f8f8}
  p,ul{font-family:'Lato',sans-serif;font-size:18px;color:inherit}
  .hero-h1{font-weight:900}
  .hero-h4{text-transform:uppercase;letter-spacing:2px;font-weight:700}
  .indi-logo {max-width:100%;filter: drop-shadow(1px 1px 1px #000);width: 200px;position: relative;margin: 0 auto;padding: 1em;}
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
  .buy-button{white-space:normal;font-size:1.5em;max-width:700px;margin: 0 auto;background:red;text-transform:uppercase;font-weight:900;color:#fff;padding:1em 2em;box-shadow:0 5px 15px rgba(0,0,0,.3);text-align:center;display:block;border-radius:.5em}
  .buy-button:hover{color:#fff;transition:.4s;-webkit-transition:.4s;box-shadow:0 8px 23px rgba(0,0,0,.3);border-radius:100px;transform:scale(1.05)}
  .bg-cyan{background:#69eed8;}
  .ul-crystal{list-style:none;margin-left:1em;text-align:justify;margin-bottom:20px}
  .ul-crystal > li {position: relative;margin-bottom: 5px;margin-left: 10px;}
  .ul-crystal > li:before {position: absolute;left: -40px;display: inline-block;width: 22px;height: 20px;margin-right: 1em;background: url(https://individualogist.com/offer/assets/img/crystal-icon.png) no-repeat;background-size: cover;background-position: 100% 100%;border-radius: 50%;content: "";top: 5px;}
  .smallprint{text-align:center;font-size:.8em;color:#333;font-weight:700;padding-top:.5em;color:red;opacity:.8}
  .ets{width:100%;max-width:600px;display:block;margin:1em auto}
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
  .warning-title{color: red;font-weight: 700;font-size: 1.5em!important;margin-bottom: 0;margin-top: .5em;}
  .warning-text{margin:.5em auto;color:#000;font-weight:700;font-size:18px !important}
  .alert-icon{background:url('https://individualogist.com/clickbank/assets/img/alert-icon.png');width:100px;height:100px;margin:0 auto;display:block;background-size:contain;background-repeat:no-repeat;}
  .decline-link{color:#666;text-decoration:underline;text-align:center;margin:0 auto;font-size:14px}
  .quote-box{background:#222;box-shadow:0 5px 15px rgba(0,0,0,.15);padding:1em;max-width:700px;display:block;position:relative;margin: 1em auto;border-radius:.5em;color:#fff}
  .headline-bg{max-width:1024px;margin: 0 auto;position:relative;background:url('https://individualogist.com/offer/assets/img/bg-cosmospink.png');background-repeat:no-repeat;background-attachment:fixed;background-size:cover;background-position:center center;padding: 1em;color:#fff;text-shadow:1px 1px 1px #000;width:100%}
  .bg-white{background:#fff} .p-1{padding:1em !important}
  .upsell-hl{font-weight:700}
  @media only screen and (max-width:768px) {.buy-button{font-size:1em}.img-fr{width:100%;position:relative;margin:0 auto}p{clear:both}.atom,.molecule{width:100%;max-width:100%}.sp-title{font-size:1.2em}.upsell-hl{font-size:1.5em}.ets2{display:none}.quote-card{margin:1em auto}.warning-container{text-align:center}.hero-h1{font-size:1.5em}.hero-h4{font-size:1.2em}.alert-icon{width:50px;height:50px}}
</style>

<div class="container mt-3 mb-3">
  <div class="upsell">
      <div class="row warning-container mb-3">
              <div class="col-sm-2">
                  <div class="alert-icon"></div>
              </div>
              <div class="col-sm-10">
                  <p class="warning-title">WARNING! Do NOT Close This Page!</p>
                  <p class="warning-text">Closing this page, refreshing this page, or hitting the back button CAN result in a double-charge by mistake!</p>
              </div>
      </div>
      <div class="row">
          <div class="col-sm-12 mx-auto p-0">
              <div class="multistep"></div>
          </div>
      </div>
  </div>    
  <div class="row">
      <div class="col-sm-2 mx-auto mt-3">
          <div class="indi-logo"></div>
      </div>
  </div>
  <div class="row">
      <div class="col-sm-8 mx-auto text-center">
          <h1 class="upsell-hl">IMPORTANT: You've Unlocked A Special Discount!</h1>
          <h4 class="strong">Claim another 2 spheres now, and I'll add them to your order HALF OFF!</h4>
      </div>
  </div>
</div>

<div class="salespage-start part1">
  <div class="container">
      <div class="row">
          <div class="col-sm-8 mx-auto mt-3 mb-3 bg-white p-1">
              <p><span class="name">Dearest friend</span>,</p>
              <p>You can be the one to bless your immediate friends and family with the <strong>power of protection.</strong></p>
              <p>With this one-time offer, I'd like to extend this unique opportunity to you.</p>
              <p>If you claim 2 additional spheres right now, I'll send them to you at HALF of the original price.</p>
              <p>So that you can be the one to <strong>determine divine protection over your loved ones.</strong></p>
              <p>For just $79.90, I will include 2 additional energy transfiguration spheres to your order.</p>
              <p>Once again, I'll cover the cost of shipping and handling for you.</p>
              <p>This lowers the price of each sphere from <strike>$59.90</strike> to just <strong>$39.</strong></p>
              <p>Not only that.</p>
              <p>As this offer is for 2 energy transfiguration spheres, you're saving a little over $40!</p>
              <p class="text-center strong">Do not wait a second longer!</p>
              <p>Now, just because you've managed to unlock this special page, does not mean it will be around forever.</p>
              <p>As you can already tell, the demand for my energy transfiguration spheres has seen tremendous growth over the last few days.</p>
              <p>And unfortunately, I am unable to reserve this offer for long. Which means you'll only get to see this offer ONCE.</p>
              <p>I've set the limit on this time-sensitive offer to just 15 minutes.</p>
              <p class="text-center strong">Are you going to do everything within your power to ensure the divine, energetic protection of those around you?</p>
              <p class="text-center strong">LIMITED OFFER: <strike>139.90</strike> $79.90 for TWO Additional Spheres!</p>
              <img src="https://individualogist.com/clickbank/assets/img/sphere-2s.png" class="ets">
              <a class='btn buy-button' href='http://ets-2.individua1.pay.clickbank.net/?cbskin=25048&cbur=a'>Yes! Add To My Order!</a>
              <a class='decline text-center mt-3 mb-3' href='http://ets-2.individua1.pay.clickbank.net/?cbskin=25048&cbur=d'>No thanks, I will forfeit this opportunity...</a>
              <p class="smallprint">Lock in your discount now and claim your 2 Energy Transfiguration Spheres for just $79.90!</p>
          </div>
      </div>
  </div>
</div>

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
  <p>ClickBank is the retailer of products on this site. CLICKBANK速 is a registered trademark of Click Sales Inc., a Delaware corporation located at 1444 S. Entertainment Ave., Suite 410 Boise, ID 83709, USA and used by permission. ClickBank's role as retailer does not constitute an endorsement, approval or review of these products or any claim, statement or opinion used in promotion of these products.</p>
  <p>Testimonials, case studies, and examples found on this page are results that have been forwarded to us by users of the "Energy Transfiguration Sphere" products and related products, and may not reflect the typical purchaser's experience, may not apply to the average person and are not intended to represent or guarantee that anyone will achieve the same or similar results.</p>
  <script src='//cbtb.clickbank.net/?vendor=individua1'></script>
</div>
</div>

<script type="text/javascript" src="https://individualogist.com/offer/paa/js/custom.js"></script>
<script>
window.onload = function () {
var string_contain = 'upsell';
var url = window.location.href;
if(url.indexOf(string_contain) >= 0) {
  var x = document.getElementsByClassName("upsell");
  for(var a = 0;a<x.length;a++) {
      x[a].style.display = 'block';
  }
}
}
$('.name').html(getCookie('logic_first_name'));
$('.email').html(getCookie('logic_email'));
$('.archetype').html(getCookie('logic_archetype'));    
</script>