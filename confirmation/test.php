<?php
$PageTitle = "Individualogist.com | Request Confirmation";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
$archetype = $_GET['archetype'];
$name = $_GET['name'];
$email = $_GET['email'];
?>

<div id="checkout-wrapper">
    <header id="checkout-header" class="header clearfix">
        <div class="container">
            <div id="campaign-logo-show">
                <h3 class="masthead-brand pull-left">
                    <img id="campaign-logo" src="https://s3.amazonaws.com/img.paykickstart.com/plan_logos/kOugZhbtIequ_small.png" alt=""/>
                </h3>
            </div>
            <div id="form-heading-support-email-block" class="support-email" style="float: right;">
                <div id="form-heading-support-email">
                    <a>Need Support: <b>contact@individualogist.com</b></a>
                </div>
            </div>
    </header>
        
    <div class="container">
	   <div class="row mx-auto">
	       <div class="col-sm-12">
	    	  <ol class="steps top0">
                  <li>Step 1: Archetypal Reading</li>
                  <li class="active">Step 2: Select Package</li>
                  <li>Step 3: Request Analysis</li>
		      </ol>
	       </div>
        </div>
    </div>

    <div class="container" id="main">
        <div class="row mx-auto">
            <div class="col-sm-12 text-center">
                <h2 class="congrats">At Last, <?php echo $name;?>! You're Ready To Experience An Enormous, Positive CHANGE In Your Life! You're Only ONE STEP Away...</h2>
            </div>        
        </div>
        <div class="row">
            <div class="col-sm-6">
                <ul class="tick-list text-left">
                    <li><strong>YES! I'm Ready To Experience ALL Of This...</strong></li>
                    <li><strong>My Personalized Premium Archetypal Analysis,</strong> which I will use to uncover the deepest intricacies of my personality and archetype. I will receive my analysis and everything that comes with it securely via e-mail in digital format within the next 24 hours.</li>
                    <li><strong>60 Day Money Back Guarantee</strong>, which will ensure my complete satisfaction and safeguard my experience.</li>
                    <li><strong>3 Additional Bonus eBooks</strong>, which will enhance my journey of self-discovery with newfound spiritual knowledge!</li>
                    <div class="indent"><strong>Bonus #1:</strong> Discovering Your Aura & What It Says About You<br></div>
                    <div class="indent"><strong>Bonus #2:</strong> Beginner's Guide To The Feng Shui Paradigm<br></div>
                    <div class="indent"><strong>Bonus #3:</strong> Exploring Your Birthdate With The Chinese Zodiac</div>
                </ul>
            </div>
            <div class="col-sm-6">
                <img class="width100" src="../assets/img/paa-cover-standard.png">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 guarantee-text">
                <h5>Satisfaction Guarantee</h5>
                <p>You will witness some of the most revealing information about yourself. If you have any questions about your analysis, simply drop us an e-mail at contact@individualogist.com and you'll hear back from us by the next working day!</p>
                <h5>Transformation Guarantee</h5>
                <p>This is your gateway to encountering a true transformation - becoming better, stronger, and more aware of your true purpose. If you do not experience any transformation whatsoever, get in touch with us and we'll give you all the help and support you need.</p>
                <h5>Support Guarantee</h5>
                <p>Unlike other programs, you have COMPLETE, 100% support from our team of reliable, customer support staff. Your questions will be answered over the phone, live chat, or email. You WILL ALWAYS have someone to help you. And you will NOT go through this alone!</p>
            </div>
            <div class="col-sm-6 testimonial-text">
                <div class="testimonial-item">
                    <div class="shadow-effect">
                        <img class="img-circle" src="../paa/img/janice-hickey.png" alt="">
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
                        <img class="img-circle" src="../paa/img/bryan-smith.png" alt="">
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
                <h2 class="congrats">Begin Your Self-Discovery Journey By Selecting One Of The Packages Below!</h2>
            </div>
            <div class="col-sm-4 paa-select">
                <h4>Standard Analysis</h4>
                <img class="width80" src="../assets/img/paa-cover-standard.png">
                <ul class="tick-list text-left small">
                    <li>My Premium Archetypal Analysis</li>
                    <li>My 3 Additional Bonuses</li>
                    <li>60 Day Satisfaction Guarantee</li>
                </ul>
                <p class="price">$37 only</p>
				<form name="formname" method="post" action="https://quickpay.alliedwallet.com/">
				<input name="QuickPayToken" type="hidden" value="AAEAABbSKMGRsplvqxWBoPHZk0Vsqhlzo-VTJOZmht3gjMSwkD9tVsW2vdNKxfANo9JLS0VfGmWwhNvyBm-Kz--AjXKgwirEiZYxonu5aEmTiSnYCyvGvJ6T2hphX_Xvn5IxUB7xcsgtaPk-oE3YGUAxggLJ80RDT7pRdwKjtcxW6icrzxEVnTofqHIj4aOhstYC1FNxMwuC2JuMnOfRJdZsS0SlhDVLMs7rg-c9sO4pX7WFYCohk84z7mve-SsAlXR7Re9RRHulRI136awinCYGIvk-vgyDK7w01jqjGdTBM5iN7OtIMd9oFujbP_QK-wFPg9D08S4g-XkrohDn50B_Wjm0AQAAAAEAAKMOwkKyNmrIo4lKHbwvPgPzGkHaFF0fxCWoULaq_b56oQOuhyz7X0zowygBtjAZsTxZK9QtRaPK7pw99_vE0ZNuTlw3ZKf5Gr6KoJatmOrV8BxwdXxxqcL3z3ZZG-w66mttdd6vtAozXDnhz0_v3Hv7XiAVB-WEDOP-5CG1NJuKR6bsyweI-jQSfNHuAm3n96yV08AE_9a51sip8rPcbFXpJfyUY2bVOvF5MpYuTOsYg9gN8xxzM6175YIO2U74rFz7lzQeZZA-Fhormu6HbuxDGKqx9-FJcHsfJqDUbWqlqmLheo_CEQtLKb0QsmSbWX9e3qYCRo7IBx8YWPBAgSxkrWx3eOi6xFDd-Cg4PylVa1Aks6CddLZNP-hZnCuwYeHGHAt0nzKPap0L5RC2DRh1JFJbjqD2wOuBrQXY60YyEcmm1LUly-wOMk2q7NPjZLe7Kl0urP1-i-nc72MoOWTi7wd10QMJ2-WK3caLu7SHiPJ0wEWpuyQI6Rn6ubAbIeEShvLW2yiOqfP8fvgR3jNdpq8Ir2JYRko7ZN9kpGd3apD2sUQqD-2EsNduS1hUoA"> 
				<input name="MerchantID" type="hidden" value="32408">
				<input name="SiteID" type="hidden" value="56241">
				<input name="AmountTotal" type="hidden" value="37.00">
				<input name="CurrencyID" type="hidden" value="USD">
				<input name="AmountShipping" type="hidden" value="0.00">
				<input name="ShippingRequired" type="hidden" value="false">
				<input name="MembershipRequired" type="hidden" value="false">
				<input name="ItemName[0]" type="hidden" value="Standard Analysis">
				<input name="ItemQuantity[0]" type="hidden" value="1">
				<input name="ItemAmount[0]" type="hidden" value="37.00">
				<input name="ItemDesc[0]" type="hidden" value="Standard Analysis">
				<input name="ApprovedURL" type="hidden" value="https://individualogist.com">
				<input name="ConfirmURL" type="hidden" value="https://individualogist.com">
				<input name="DeclinedURL" type="hidden" value="https://individualogist.com">
				<input type="submit" a class="cta-button" value="Get Started Now!">
				</form>
               
            </div>
            <div class="col-sm-4 paa-select">
                <h4><span class="silver">Silver</span> Analysis</h4>
                <img class="width80" src="../assets/img/paa-cover-silver.png">
                <ul class="tick-list text-left small">
                    <li>My Premium Archetypal Analysis</li>
                    <li>My 3 Additional Bonuses</li>
                    <li>60 Day Satisfaction Guarantee</li>
                    <li><strong>SILVER SPECIAL: Awakening Of The Anima/Animus Report</strong></li>
			<div class="indent">Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</div>
                </ul>
                <p class="price">$67 only</p>
				<form name="formname" method="post" action="https://quickpay.alliedwallet.com/">
				<input name="QuickPayToken" type="hidden" value="AAEAABbSKMGRsplvqxWBoPHZk0Vsqhlzo-VTJOZmht3gjMSwkD9tVsW2vdNKxfANo9JLS0VfGmWwhNvyBm-Kz--AjXKgwirEiZYxonu5aEmTiSnYCyvGvJ6T2hphX_Xvn5IxUB7xcsgtaPk-oE3YGUAxggLJ80RDT7pRdwKjtcxW6icrzxEVnTofqHIj4aOhstYC1FNxMwuC2JuMnOfRJdZsS0SlhDVLMs7rg-c9sO4pX7WFYCohk84z7mve-SsAlXR7Re9RRHulRI136awinCYGIvk-vgyDK7w01jqjGdTBM5iN7OtIMd9oFujbP_QK-wFPg9D08S4g-XkrohDn50B_Wjm0AQAAAAEAAKMOwkKyNmrIo4lKHbwvPgPzGkHaFF0fxCWoULaq_b56oQOuhyz7X0zowygBtjAZsTxZK9QtRaPK7pw99_vE0ZNuTlw3ZKf5Gr6KoJatmOrV8BxwdXxxqcL3z3ZZG-w66mttdd6vtAozXDnhz0_v3Hv7XiAVB-WEDOP-5CG1NJuKR6bsyweI-jQSfNHuAm3n96yV08AE_9a51sip8rPcbFXpJfyUY2bVOvF5MpYuTOsYg9gN8xxzM6175YIO2U74rFz7lzQeZZA-Fhormu6HbuxDGKqx9-FJcHsfJqDUbWqlqmLheo_CEQtLKb0QsmSbWX9e3qYCRo7IBx8YWPBAgSxkrWx3eOi6xFDd-Cg4PylVa1Aks6CddLZNP-hZnCuwYeHGHAt0nzKPap0L5RC2DRh1JFJbjqD2wOuBrQXY60YyEcmm1LUly-wOMk2q7NPjZLe7Kl0urP1-i-nc72MoOWTi7wd10QMJ2-WK3caLu7SHiPJ0wEWpuyQI6Rn6ubAbIeEShvLW2yiOqfP8fvgR3jNdpq8Ir2JYRko7ZN9kpGd3apD2sUQqD-2EsNduS1hUoA"> 
				<input name="MerchantID" type="hidden" value="32408">
				<input name="SiteID" type="hidden" value="56241">
				<input name="AmountTotal" type="hidden" value="67.00">
				<input name="CurrencyID" type="hidden" value="USD">
				<input name="AmountShipping" type="hidden" value="0.00">
				<input name="ShippingRequired" type="hidden" value="false">
				<input name="MembershipRequired" type="hidden" value="false">
				<input name="ItemName[0]" type="hidden" value="Silver Analysis">
				<input name="ItemQuantity[0]" type="hidden" value="1">
				<input name="ItemAmount[0]" type="hidden" value="67.00">
				<input name="ItemDesc[0]" type="hidden" value="Silver Analysis">
				<input name="ApprovedURL" type="hidden" value="https://individualogist.com">
				<input name="ConfirmURL" type="hidden" value="https://individualogist.com">
				<input name="DeclinedURL" type="hidden" value="https://individualogist.com">
				<input type="submit" a class="cta-button" value="Get Started Now!">
				</form>
           </div>
            <div class="col-sm-4 paa-select pop">
                <h4><span class="gold">Gold</span> Analysis</h4>
                <p class="small">Most Value!</p>
                <img class="width80" src="../assets/img/paa-cover-gold.png">
                <ul class="tick-list text-left small">
                    <li>My Premium Archetypal Analysis</li>
                    <li>My 3 Additional Bonuses</li>
                    <li>60 Day Satisfaction Guarantee</li>
                    <li><strong>GOLD SPECIAL: Awakening Of The Anima/Animus Report</strong></li>
			<div class="indent">Detailed report on balancing your innate masculinity and femininity to elevate intuition, creativity, and psychic sensitivity</div>
                    <li><strong>GOLD SPECIAL: My Stages Of Life Report</strong></li>
			<div class="indent">Intimate insights into your personal transitions throughout the progressive phases of your growth to amplify the effects of individuation</div>
                </ul>
                <p class="price"><span class="strike">$197</span>$97 only</p>
				<form name="formname" method="post" action="https://quickpay.alliedwallet.com/">
				<input name="QuickPayToken" type="hidden" value="AAEAABbSKMGRsplvqxWBoPHZk0Vsqhlzo-VTJOZmht3gjMSwkD9tVsW2vdNKxfANo9JLS0VfGmWwhNvyBm-Kz--AjXKgwirEiZYxonu5aEmTiSnYCyvGvJ6T2hphX_Xvn5IxUB7xcsgtaPk-oE3YGUAxggLJ80RDT7pRdwKjtcxW6icrzxEVnTofqHIj4aOhstYC1FNxMwuC2JuMnOfRJdZsS0SlhDVLMs7rg-c9sO4pX7WFYCohk84z7mve-SsAlXR7Re9RRHulRI136awinCYGIvk-vgyDK7w01jqjGdTBM5iN7OtIMd9oFujbP_QK-wFPg9D08S4g-XkrohDn50B_Wjm0AQAAAAEAAKMOwkKyNmrIo4lKHbwvPgPzGkHaFF0fxCWoULaq_b56oQOuhyz7X0zowygBtjAZsTxZK9QtRaPK7pw99_vE0ZNuTlw3ZKf5Gr6KoJatmOrV8BxwdXxxqcL3z3ZZG-w66mttdd6vtAozXDnhz0_v3Hv7XiAVB-WEDOP-5CG1NJuKR6bsyweI-jQSfNHuAm3n96yV08AE_9a51sip8rPcbFXpJfyUY2bVOvF5MpYuTOsYg9gN8xxzM6175YIO2U74rFz7lzQeZZA-Fhormu6HbuxDGKqx9-FJcHsfJqDUbWqlqmLheo_CEQtLKb0QsmSbWX9e3qYCRo7IBx8YWPBAgSxkrWx3eOi6xFDd-Cg4PylVa1Aks6CddLZNP-hZnCuwYeHGHAt0nzKPap0L5RC2DRh1JFJbjqD2wOuBrQXY60YyEcmm1LUly-wOMk2q7NPjZLe7Kl0urP1-i-nc72MoOWTi7wd10QMJ2-WK3caLu7SHiPJ0wEWpuyQI6Rn6ubAbIeEShvLW2yiOqfP8fvgR3jNdpq8Ir2JYRko7ZN9kpGd3apD2sUQqD-2EsNduS1hUoA"> 
				<input name="MerchantID" type="hidden" value="32408">
				<input name="SiteID" type="hidden" value="56241">
				<input name="AmountTotal" type="hidden" value="97.00">
				<input name="CurrencyID" type="hidden" value="USD">
				<input name="AmountShipping" type="hidden" value="0.00">
				<input name="ShippingRequired" type="hidden" value="false">
				<input name="MembershipRequired" type="hidden" value="false">
				<input name="ItemName[0]" type="hidden" value="Gold Analysis">
				<input name="ItemQuantity[0]" type="hidden" value="1">
				<input name="ItemAmount[0]" type="hidden" value="97.00">
				<input name="ItemDesc[0]" type="hidden" value="Gold Analysis">
				<input name="ApprovedURL" type="hidden" value="https://individualogist.com">
				<input name="ConfirmURL" type="hidden" value="https://individualogist.com">
				<input name="DeclinedURL" type="hidden" value="https://individualogist.com">
				<input type="submit" a class="cta-button" value="Get Started Now!">
				</form>
            </div>
<center><p>Please note that your credit card statement will read <b>ALW*indlogist442033188334</b></p></center>
<center><p><center><p>For billing questions please call Allied Wallet at +442033188334 or <a rel="nofollow" href="https://www.alliedwallet.com/support"><b>Click Here<b/></a></p></center></p></center>
        </div>
</div>

<?php 
echo '<script>(function(d,a){function c(){var b=d.createElement("script");b.async=!0;b.type="text/javascript";b.src=a._settings.messengerUrl;b.crossOrigin="anonymous";var c=d.getElementsByTagName("script")[0];c.parentNode.insertBefore(b,c)}window.kayako=a;a.readyQueue=[];a.newEmbedCode=!0;a.ready=function(b){a.readyQueue.push(b)};a._settings={apiUrl:"https://individualogist.kayako.com/api/v1",messengerUrl:"https://individualogist.kayakocdn.com/messenger",realtimeUrl:"wss://kre.kayako.net/socket"};window.attachEvent?window.attachEvent("onload",c):window.addEventListener("load",c,!1)})(document,window.kayako||{});</script>';
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer-pk.php');
include_once($path);
?>