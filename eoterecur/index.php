<?php
$PageTitle = "Individualogist.com | Eclipse Of The Ego (3 Payments)";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>

<style>
    .upsell{background:#000;}
    .order-area{display:none}
</style>

<div class="upsell">
    <div class="container warning-container">
        <div class="row mx-auto">
            <div class="col-sm-2">
                <img class="alert-icon" src="../assets/img/alert-icon.png">
            </div>
            <div class="col-sm-10">
                <h2>Your Order Is ALMOST Complete!</h2>
                <p>There's one final thing you MUST be aware of before your order is completed!</p>
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

<div class="eote-container" style='padding-bottom:30px;'>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 mx-auto">
                <div class="indi-logo">
                    <img src="/offer/assets/img/individualogist-logo2.png">
                </div>
            </div>
        </div>
    </div>

    <div class="eote-header">
        <h1><span class="name">Friend</span>, Claim Your Supreme Mastery Code: Eclipse Of The Ego Program...</h1>
        <h3><span class="capitalize">...And You'll Start Today For Only $33!</span></h3>
    </div>

    <div class="eote-reading">
        <p><span class="name">Friend</span>, how about this - you won't have to come up with the full amount of $97 right now. And you'll STILL receive ALL 8 modules and EVERYTHING else in your Supreme Mastery Code: Eclipse Of The Ego.</p>
        
        <p>Instead, we're going to split the payments into just 3 simple payments of $33 each - over the course of 3 months starting from today.</p>
<!--        <p>Instead, we're going to give you a instant $30 OFF the original price. No strings attached, and no obligations.</p>-->
        
        <p>I know for a fact you're ready to uncover the INTIMATE encounters and REVEALING discoveries in your archetypal journey.</p>
        
        <p>But, I do also know that you embarked on this journey for a good reason - to secure the betterment of yourself, and your future. The status quo isn't what you expected, and you're yearning for something more... Opportunities, joy, and abundance.</p>
        
        <p>And as soon as you commence the Ego Transcendence process, you'll realize your true, infinite potential...</p>
        
        <p>Fruitful and fulfilling relationships... Financial success in all endeavours... Opportunities for joy and happiness...</p>
        
        <p>And finally, I'm completely aware fear and doubt might be clouding your vision, so you'd prefer to decrease the initial amount required, and have better control over your investment.</p>
        
        <p>So, to make sure you receive everything you want, and you're able to take full advantage of this opportunity, I'm going to make things much easier for you...</p>
        
        <p>After all, my joy and fulfillment stems from your success!</p>
        
        <h2 class="eote-sub-header">Request For Your Supreme Mastery Code: Eclipse Of The Ego For Just <strike>$97</strike> 3 Payments Of $33</h2>
        
        <p>Truly, this is an opportunity that you simply cannot afford to miss, <span class="name">Friend</span>.</p>
        
        <p>Believe me, you will still receive everything as promised in this extraordinary program...</p>
        
        <ul class="eote-bullet">
            <li>Module 1: Introduction to the Eclipse of the Ego</li>
            <li>Module 2: Ego Transcendence (Healing the Mind Body and Soul)</li>
            <li>Module 3: Convergence of the Ego</li>
            <li>Module 4: Syzygy of the Anima and Animus</li>
            <li>Module 5: Embodying the Cosmic Archetypes</li>
            <li>Module 6: Synchorinicty of the Soul</li>
            <li>Module 7: Attaining Your Celestial Self</li>
            <li>Module 8: Pinnacle of Your Existence</li>
            <li>All 8 modules in both audio and PDF formats</li>
            <li>Over 20 actionable and rewarding exercises</li>
            <li>A beautifully designed progress-tracking workbook</li>
        </ul>
        
        <p>Without the support, knowledge, and understanding you'll receive from this program, the transformation you experience will be merely temporary, and you will not experience the full affects of this self-discovery process!</p>
        
        <p>Now, be cautious about your next step - because this offer too will only be given to you ONCE. And ONLY once.</p>
        
        <p>It is IMPERATIVE that you seize this opportunity for yourself; for the sake of your own growth, your success, and your future.</p>
        
        <p>Just click on the golden button below, and you will immediately receive the complete Supreme Mastery Code: Eclipse Of The Ego for just $33.00 today!</p>
        
        <p>Your future success with your archetype depends on your next step...</p>
        
        <p>...Are you willing to do EVERYTHING you can to maximize your true potential?</p>
        
        <img style='width: 80%; display: block; margin:0 auto;' src='../assets/img/eote-cover.png'>
        
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/assets/inc/addorder.php');
include($path);
?>
<p class="small text-center">Your initial charge will be $33. You will then be billed $33/month for 2 months after your initial charge has been made. You are free to cancel the subscription at any point in time.</p>
        
    </div> 
</div>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/assets/inc/neworder.php');
include($path);
?>

<script type="text/javascript">
    function acceptCheck() {
        var agreeCheckbox = document.getElementById("agreeCheckbox");
        if(agreeCheckbox.checked) {
            document.getElementById("accept").href += '&cbrblaccpt=true';
            return true;
        } else {
            mustAccept();
            $('html, body').animate({
                scrollTop: ($('#agreeCheckbox').offset().top)
            },200);
            return false;
        }
    }

    function mustAccept() {
        window.alert("Please agree to the payment terms by checking the box below!");
    }

    var acceptLink = document.getElementById("accept");
    acceptLink.onclick = acceptCheck;
</script>    
    
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer.php');
include_once($path);
?>