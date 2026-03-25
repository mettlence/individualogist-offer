<?php
$PageTitle = "Individualogist.com | Divine Tree Of Life";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/header.php');
include_once($path);
echo "<link type='text/css' rel='stylesheet' href='/lp/assets/css/style.css?v=2.13'>";
echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";

$name = $_GET['name'];
$email = $_GET['email'];
$archetype = $GET['archetype'];
?>

<script>
//Archetype calculator for Default (List ID 21) Clickbank (List ID 35)

$('.Step1').show();
$('.Step2').hide();
$('.Step3').hide();
$('.Step4').hide();

const Month = {
	'January': '1',
	'February': '2',
	'March': '3',
	'April': '4',
	'May': '5',
	'June': '6',
	'July': '7',
	'August': '8',
	'September': '9',
	'October': '10',
	'November': '11',
	'December': '12'
}

window.onload = function () {
	let js;
	const fjs = document.getElementsByTagName('script')[0];
	if (document.getElementById('facebook-jssdk')) {
		if (window.FB) {
			window.FB.init({
				appId: 247959338893932,
				xfbml: true,
				version: 'v2.11'
			});
		} else {
			setTimeout(() => {
				window.FB.init({
					appId: 247959338893932,
					xfbml: true,
					version: 'v2.12'
				});
			}, 1000);
		}
	} else {
		js = document.createElement('script');
		js.id = 'facebook-jssdk';
		js.src = `https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12&appId=247959338893932`;
		fjs.parentNode.insertBefore(js, fjs);
	}
};

window.onload = function () {
	$('.selectGender').hide();

	$('.gender.input').click(function () {
		$('.selectGender').show();
	});

	$('.selectGender li').click(function () {
		$('.selectGender').hide();
	})
};

function forceNumeric(){
    var $input = $(this);
    $input.val($input.val().replace(/[^\d]+/g,''));
}
$('body').on('propertychange input', 'input[type="number"]', forceNumeric);

//window.onload = function() {

$(document).ready(function () {
	$('.Step1').show();
	$('.Step2').hide();
	$('.Step3').hide();
    $('.Step4').hide();

	$('.StepBtn1').click(function () {
		var MSG = '';
		var name = $('.name').val();
			if (name == '') {
				MSG = 'Please enter your name!';
            } else if (!name.match(/^[a-zA-Z]+(\s{1}[a-zA-Z]+)*$/)) {
                MSG = 'Your name can only contain alphabets!';
            } else {
			$('.Step1').hide();
			$('.Step2').show();
			$('.Step3').hide();
            $('.Step4').hide();
		}
		$('.errorMsg').html(MSG);
	});
    
    $('.gdr-btn').click(function() {
        $(".gender").val($(this).data('id'));
        console.log('Gender is', $(this).data('id'));
        $('.Step1').hide();
        $('.Step2').hide();
        $('.Step3').show(300);
        $('.Step4').hide();
    });

	$('.StepBtn3').click(function () {
		var MSG = '';
		var year = $('.year').val();
		var month = Month[$('.month').val()];
		var DOB = $('.DOBday').val();
        var age = 18;
        var mydate = new Date();
        mydate.setFullYear(year, month-1, DOB);
        var currdate = new Date();
        currdate.setFullYear(currdate.getFullYear() - age);
		if (year == "" || month == "" || DOB == "") {
			MSG = 'Please enter a valid birthday!';
		} 
        else if (currdate < mydate) {
            MSG = 'You must be at least 18 years old to start this program!';
        }
        else {
			$('.Step1').hide();
			$('.Step2').hide();
			$('.Step3').hide();
            $('.Step4').show();
		}
		$('.errorMsg').html(MSG);
	});

	$('.StepBtn4').click(function () {
		var MSG = '';
		//if($('.email').val() == ""){
		var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if (reg.test($('.email').val()) == false) {
			$('.errorMsg').html('Please enter a valid email!');
			return true;
		}
		//}

		var name = $('.name').val();
		var gender = $('.gender').val();
		var dob = $('.year').val() + '-' + Month[$('.month').val()] + '-' + $('.DOBday').val();
		var email = $('.email').val();

		var CalData = calculateHoroscopeDetails({
			'birthday': dob,
			'gender': gender
		});
        
		$.ajax({
			url: "https://api.maropost.com/accounts/1230/lists/40/contacts.json?auth_token=rykAT_lqIC-oBs3ns4dBRXBWXs99hefoUPKFKvLy-kzX6LQ5WiIjhw",
			data: {
				"contact": {
					"first_name": name,
					"email": email,
					"custom_field": {
						"name": name,
						"gender": gender,
						"birthday": dob,
						"horoscope": CalData.horoscope,
						"element": CalData.element,
						"archetype": CalData.archetype
					}
				}
			},
			type: "POST",
			success: function (result) {
				console.log(result);
				setCookie('logic_id', result.id, '100');
				setCookie('logic_email', result.email, '100');
				setCookie('logic_first_name', result.name, '100');
				setCookie('logic_archetype', result.archetype, '100');
                location.href = 'http://tol.individua1.pay.clickbank.net/?cbfid=34198&cbskin=22063&name='+result.name+'&email='+result.email+'&vvar='+result.archetype;
			},
			error: function (error) {
				alert("It seems like there's something wrong with your e-mail address - please try a different e-mail!");
			}
		});
	});
});

const horoscopeMap = {
	'0120-0218': ['Aquarius', 'Air', 'magician', 'outlaw'],
	'0219-0320': ['Pisces', 'Water', 'creator', 'caregiver'],
	'0321-0419': ['Aries', 'Fire', 'ruler', 'hero'],
	'0420-0520': ['Taurus', 'Earth', 'hero', 'lover'],
	'0521-0620': ['Gemini', 'Air', 'member', 'member'],
	'0621-0722': ['Cancer', 'Water', 'caregiver', 'caregiver'],
	'0723-0822': ['Leo', 'Fire', 'jester', 'ruler'],
	'0823-0922': ['Virgo', 'Earth', 'innocent', 'creator'],
	'0923-1022': ['Libra', 'Air', 'lover', 'innocent'],
	'1023-1121': ['Scorpio', 'Water', 'outlaw', 'magician'],
	'1122-1221': ['Sagittarius', 'Fire', 'explorer', 'explorer'],
	'1222-1231': ['Capricorn', 'Earth', 'sage', 'sage'],
    '0101-0119': ['Capricorn', 'Earth', 'sage', 'sage']
};

const calculateHoroscopeDetails = (data) => {
	const yyyymmdd = data.birthday.split('-');
	const monthday = new Date(2000, yyyymmdd[1], yyyymmdd[2]);
	let value = null;
	let min = null;
	let max = null;

	value = Object.keys(horoscopeMap).find((range) => {
		[min, max] = range.split('-');
		if (min.substr(0, 2) === '12') {
			if (yyyymmdd[1] === '01') {
				min = new Date(1999, min.substr(0, 2), min.substr(2, 2));
				max = new Date(2000, max.substr(0, 2), max.substr(2, 2));
			} else {
				min = new Date(2000, min.substr(0, 2), min.substr(2, 2));
				max = new Date(2001, max.substr(0, 2), max.substr(2, 2));
			}
		} else {
			min = new Date(2000, min.substr(0, 2), min.substr(2, 2));
			max = new Date(2000, max.substr(0, 2), max.substr(2, 2));
		}
		return monthday >= min && monthday <= max;
	});
	value = horoscopeMap[value];
	return Object.assign({
		horoscope: value[0],
		element: value[1],
		archetype: value[data.gender === 'male' ? 2 : 3]
	}, data);
};

// This is for Fill Value into TextBox
$(document).ready(function () {
	$('.gdr-btn').click(function () {
		if (this.dataset.id != '' || this.dataset.id != 'undefined') {
			$('#gender').val(this.dataset.id);
		}
	});

	$('.MonthDropDown ul li').click(function () {
		if (this.dataset.id != '' || this.dataset.id != 'undefined') {
			$('.month').val(this.dataset.id);
		}
	});

	$('.DayDropDown_div ul li').click(function () {
		if (this.dataset.id != '' || this.dataset.id != 'undefined') {
			$('.DOBday').val(this.dataset.id);
		}
	});

	$('.year_DropDown_div ul li').click(function () {
		if (this.dataset.id != '' || this.dataset.id != 'undefined') {
			$('.year').val(this.dataset.id);
		}
	});
});

// This is for Custom DropDown
$(document).ready(function () {
	$(".select-droopdown").click(function () {
		$(".select-droopdown").toggleClass("active");
	});
	$(".select-droopdown").click(function () {
		$(".datepicker_ul").removeClass("active");
		var temp = $(this).attr('id');
		$("." + temp + " .datepicker_ul").addClass("active");
	});

	$("body").click(function (e) {
		if (e.target.id == "month_drop" || e.target.id == "Drop_gender" || e.target.id == "day_drop" || e.target.id == "year_drop") {

		} else {
			$(".datepicker_ul").removeClass("active");
			$(".select-droopdown").removeClass("active");
		}
	});

	$(".datepicker_ul").click(function () {
		$(this).removeClass('active');
	});
});
    
$(document).ready(function() {
    var name = getCookie('logic_first_name');
    var email = getCookie('logic_email');
    var archetype = getCookie('logic_archetype');
    $('.cta-button').href = "http://tol.individua1.pay.clickbank.net/?name="+name+"&email="+email+"&vvar="+archetype;
});
    
//Set Cookie Function
function setCookie(cname, cvalue, exdays) {
	var d = new Date();
	d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
	var expires = "expires=" + d.toUTCString();
	document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

//Get Cookie Function
function getCookie(cname) {
	var name = cname + "=";
	var decodedCookie = decodeURIComponent(document.cookie);
	var ca = decodedCookie.split(';');
	for (var i = 0; i < ca.length; i++) {
		var c = ca[i];
		while (c.charAt(0) == ' ') {
			c = c.substring(1);
		}
		if (c.indexOf(name) == 0) {
			return c.substring(name.length, c.length);
		}
	}
	return "";
}

</script>

<style>
    form input {
    border: 0;
    padding: 1em;
    border-radius: .5em;
    text-transform: capitalize;
    width: 100%;
    font-size: 1em;
    font-family: 'Raleway', sans-serif;
    font-weight: 300;
    box-sizing: border-box;
    box-shadow: 2px 2px 10px rgba(0, 0, 0, .439);
    }
    .MonthDropDown:after, .DayDropDown_div:after, .year_DropDown_div:after {
    right: .3em;
    font-size: 1.5em;
    top: .3em;
    }
    .errorMsg {
        color: red;
    }
    .order-form {
        width: 100%;
    }
    .scroll-order {
        display: block !important;
    }
    p {
        line-height: 2em !important;
    }
    .indi-logo{width:100%;filter:drop-shadow(1px 1px 1px #000)}
    .indi-logo img{max-width:200px}
    .dtol-sub-header {color: #7d12bc;letter-spacing: 3px;font-weight: 700;text-transform: uppercase;margin: 1em auto;box-shadow:none;border:none}
    .purple{color: #7d12bc !important}
    .bullet-purple{color:#7d12bc;box-shadow:none;margin:1em auto;width:95%}
    .cta-button{width:90%;background: #7d12bc;border: none;color: #fff;font-family: Raleway, sans-serif;font-weight: 700;text-shadow: none;-webkit-box-shadow: 0 5px 15px rgba(0,0,0,.3);box-shadow: 0 5px 15px rgba(0,0,0,.3);padding: .5em 1em;text-align: center;text-decoration: none;display: inline-block;font-size: 1.5em;margin: 0 auto;width: 80%;border-radius: 3em;cursor: pointer;letter-spacing:3px;text-transform:uppercase}
    .cta-button:hover{box-shadow:0 0 10px rgba(0,0,0,.15);transition:.4s;text-shadow:none;background:#bc1275}
    .order-form{border:none;box-shadow:0 5px 15px rgba(0,0,0,.3);background:#fff;margin:.5em auto}
    .order-title,.order-footer{background:#9e1f9e;}
    .order-title{border-bottom:none;padding:1em}
    .order-title,.fs-1{font-size:1em}
    .fs-1{line-height:1em!important;margin-bottom:0}
    .img-intext{-webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(90%, transparent) , to(rgba(250, 250, 250, 0.1)));filter:drop-shadow(1px 1px 1px #000)}
/*    label{color:#333;font-size:.8em}*/
    input{box-shadow:none;width:auto}
    .agree-cb{font-size:.8em}
    .smaller{font-size:.6em}
    .guarantee{box-shadow:none;border-radius:.5em}
    @media only screen and (max-width:768px) {
        .cta-button{font-size:1.2em;width:90%}
        .img-intext{width: 80%;float: none;clear: both;display: block;position: relative;margin: 1em auto;}
        .dtol-sub-header h2,#cont-button,#cont-button2,.order-title h2 {font-size:1.2em}
        .order-area{padding:0!important}
    }
</style>

<div class="dtol-container">
        <div class="indi-logo">
            <img src="/clickbank/assets/img/individualogist-logo2.png">
        </div>

    <div class="dtol-header">
        <h1><span class="cname cap">Friend</span>, You Are About To Discover This One Secret Archetype Connecting You To All Other Forms Of Creation… The Physical Reality, And The Ethereal Dimension.</h1>
    </div>

    <div class="dtol-reading">
        <p>Dear <span class="cname cap">Friend</span>,</p>

        <p>We’ve spoken at length about your archetype. Do you remember the various personalized readings and bonus resources that we’ve shared with you…?</p>

        <p>But I wanted to share something with you that’s <span class="purple">far more important than that.</span></p>

        <p>In fact, this information is <span class="purple">so quintessentially spiritual,</span> that it WILL change everything that you’ve ever thought about life itself…</p>

        <p>The fate of your growth, your vibrations, your energies, and your destiny reside within this secret…</p>

        <p>But before we get into that, I want to tell you why you’re <span class="purple">receiving this message in the first place.</span></p>

        <p>You’ve already familiarized yourself with your archetype, <span class="cname cap">Friend</span>. You’ve gained a profound understanding of who you are as an individual. That is not what this message is about.</p>

        <p>And since then, I can tell that you’ve grown even more curious about archetypes.</p>

        <p>That is why I’ve granted you safe passage to explore and <span class="purple">demystify even deeper secrets</span> that lie within the <span class="purple">Realm of the Collective Unconscious…</span></p>

         <p>…And that is exactly what you have received this message, <span class="cname cap">Friend</span>.</p>

         <p>This mystical secret lies within the one, single archetype that matters…</p>

        <div class="dtol-sub-header">
            <h2>And That Archetype Is The Divine Tree Of Life</h2>
        </div>

        <p>Perhaps you might be familiar with this concept...</p>

        <p>The Divine Tree Of Life is the <span class="purple">sole recurring theme</span> across majority, if not all, <span class="purple">religions and philosophies.</span> It is one of the extremely few elements that’s been kept consistent – regardless of time, beliefs, and values.</p>

        <img class="img-intext" src="../assets/img/dtol-2.png">

        <p>The Tree Of Life is present in <span class="purple">Christianity, Bhuddism, the Kaballah, Norse, China, Ancient Egypt…</span> It has made its presence across nations and eras… Until today.</p>

        <p>Right now at this very moment, you must be filled with the <span class="purple">burning desire</span> to have your questions answered… What does the Tree Of Life mean? How does it apply to my life? Will it <span class="purple">REALLY</span> grant me good fortune?</p>
        
        <button id="cont-button">Click Here To Reveal The Truth</button>
    </div>

<div id="cont-reading">
    <div class="dtol-reading">
        <p>Stay with me, <span class="cname cap">Friend</span>. Because I promise, you’re going to <span class="purple">like the answers</span> to those questions!</p>

        <p>And we’ve <span class="purple">unravelled the mysteries</span> behind this mystical archetype…</p>

        <div class="dtol-sub-header">
            <h2>...Everything We've Uncovered Will Be Revealed To You. Right Here, Right Now.</h2>
        </div>

        <p>When you requested your <span class="purple">Archetypal Reading,</span> it indicated that you’re more than ready for <span class="purple">great transformation</span> to take place in your life. You’re ready to pry open the <span class="purple">floodgates</span> of growth, healing, and abundance.</p>

        <p>Not many are as <span class="purple">courageous or curious</span> as you to want to learn more about themselves.</p>

        <p>And that in itself, <span class="cname cap">Friend</span>, is what makes you different.</p>

        <p>But that’s not all… I’ve also been itching to inform you of your <span class="purple">limitless life potential.</span> Granted the incessant nature of your archetype, I find it likely that you crave knowledge beyond the ordinary…</p>

        <p>What you crave is wisdom.</p>

        <p>Your archetype is deeply connected to the <span class="purple">Wise Old Man archetype</span> – an archetype that’s distinguished for its <span class="purple">astute judgments and intuitive wisdom.</span> That is a trait that’s present within you and your <span class="archetype cap"></span> archetype.</p>

        <p>You’re an individual who seeks answers to questions that concern yourself at a deeper, <span class="purple">far more personal level.</span> Questions that you’ve been dying to know the answers to for months, or perhaps years now…</p>

        <div class="dtol-sub-header">
            <h2><span class="cname cap">Friend</span>, The Answers To All Of Your Questions Lie Within The Tree Of Life.</h2>
        </div>

        <p>The Tree Of Life is a <span class="purple">Mythical Archetype</span> – which means that unlike other archetypes, it’s an element, a concept, that has remained consistent through centuries, ages, and eras.</p>

        <img class="img-intext" src="../assets/img/dtol-3.png">

        <p>Do you remember what I mentioned earlier about it being present in religion and philosophy?</p>

        <p>This is exactly what I mean.</p>

        <p>The oldest and most ancient scriptures, at the very core of every major religion, make reference to a <span class="purple">mysterious tree at the center of the world.</span></p>

        <p>Its fruits, guarded by an evil serpent, confer <span class="purple">immortality.</span></p>

        <p>The area immediately surrounding this mythical tree has been said to be the birthplace of the first human ancestors.</p>

        <p>This ‘legend’ is arguably the oldest, most widely dispersed, and most mysterious religious idea known to mankind. And yet, the concept, the idea <span class="purple">remains consistent</span> despite differing opinions, beliefs, and values.</p>

        <p>Almost as if it’s in the <span class="purple">one, single archetype that unites humanity in entirety.</span></p>

        <p>But that’s not all... The Tree Of Life also appears alongside other symbols…</p>

        <p>Its presence is known on <span class="purple">ancient artefacts</span> found at the ancient city of Troy, and even on the most ancient examples of Greek art.</p>

        <p>The interpretation of these symbols found in the <span class="purple">Bronze Age</span> is what ultimately led to the discovery of this age-old theme, which can now be finally applied and used to help you make an actual breakthrough in your life.</p>

        <img class="img-intext" src="../assets/img/dtol-4.png">

        <p><span class="cname cap">Friend</span>, I’m not just talking about a single aspect… I’m talking about <span class="purple">ALL aspects</span> of your life…</p>

        <p>Imagine if you had these <span class="purple">remarkable traits</span> right at the tips of your fingers…</p>

        <p>Infinite luck… Profound wisdom… Internal healing… And abundance beyond measure.</p>

        <p>…But how?</p>

        <p>You see, by attaining an understanding of this mythical archetype, and of the natural phenomenon that inspired it, you will receive the ultimate key to <span class="purple">decoding and eliminating all of your <span class="purple">spiritual enigmas, mental blockades, and physical limitations.</span></p>

        <div class="dtol-sub-header">
            <h2>Receiving Wisdom, Fortune, And Abundance From The Tree Of Life</h2>
        </div>

        <p>Think of the Tree Of Life is an <span class="purple">infinite pool of energy</span> – a tree that constantly bears fruit for your personal consumption. And in this case, what you’ll be consuming is knowledge, wisdom, and growth.</p>

        <p>And as you engage yourself in that process, you’ll start to experience the wonders of the Tree Of Life…</p>

        <ul class="bullet-purple">
            <li>You will be given direction and intuitive guidance across all facets of life</li>
            <li>You will experience luck and good fortune in everything that you do</li>
            <li>You will become perfectly in-tune with your archetype and be an authority of influence</li>
            <li>You will attract the right people into your life, while subconsciously distancing yourself from the wrong</li>
            <li>You will grow to be the individual that you were meant to be… An individual of limitless potential</li>
        </ul>

        <p>This is the real deal, <span class="cname cap">Friend</span>.</p>

        <p>The Divine Tree Of Life is an exclusive program that we have constructed over the course of several years.</p>

        <p>By exclusive, I mean that only a handful of people with very specific traits will be given the opportunity to participate in this course. This stringent criteria has something to do with the attribute of having an incessant hunger for <span class="purple">growth and knowledge</span> – an attribute found within your archetype...</p>

        <p>The contents of this program are one-of-a-kind. And not only is it unique, but it’s also one of the most effective programs that’s ever been created.</p>

        <p>In the Divine Tree Of Life, we have prepared for you nothing but <span class="purple">facts, knowledge, and powerful information</span> that will literally take all the pain and stress out of your personal transformation journey.</p>

        <p><span class="purple">No more</span> difficult jargon and complicated concepts.</p>

        <p><span class="purple">No more</span> meaningless and irrelevant information that doesn’t apply to you.</p>

        <p><span class="purple">No more</span> baseless claims and unfulfilled promises.</p>

        <p>Instead, we have replaced all of that with <span class="purple">simplified explanations.</span></p>

        <p>We have broken down the entire Tree Of Life into individual modules that are easy to digest, and easy for you to <span class="purple">learn at your own pace.</span></p>

        <p>We have included a multitude of effective and <span class="purple">psychology-based exercises</span> for you to experience lasting behavioural changes.</p>

        <p>We have included a <span class="purple">reflection journal</span> for you to document and record your progress and reflections, allowing you to witness your transformation every single day.</p>

        <p>And let me tell you this, <span class="cname cap">Friend</span>, there is nothing in the world that’s more <span class="purple">rewarding</span> than seeing yourself become better and better every single day.</p>

        <p>The Divine Tree Of Life has been used and implemented in my own life, and it has given me <span class="purple">abundance beyond measure…</span> And it can do the same for you.</p>

        <div class="dtol-sub-header">
            <h2>The Signs, Symbols, And Meanings Buried Underneath The Tree Of Life</h2>
        </div>

        <p>Now, as promised, I’m going to reveal to you a snippet of what the Tree Of Life encompasses.</p>

        <p>The Tree Of Life is the connection to all things. And by all things, I mean ALL things.</p>

        <p>The Tree Of Life has roots that reach far and deep into soil, acknowledging its connection to, and drawing nutrients from the  Earth – an Element, and also a <span class="purple">symbol of growth.</span> Its leaves, branches reach out for the Sun, drawing energy from a bright, warm light and transforms it into nourishment. A <span class="purple">symbol of potential.</span></p>

        <p>The Tree Of Life signifies that you are <span class="purple">deeply connected</span> to the world around you, and you are dependent on it for your ability to grow and thrive.</p>

        <p>The Tree Of Life is a representation of family, through its complex dispersion of branches, resembling the continuity of life and reproduction... Almost as if we were the branches connected to our ancestors, and spreading ourselves out to our offspring. A <span class="purple">symbol of continuity.</span></p>

        <p>It is a <span class="purple">symbol of growth and strength</span> – through the growth of a mere seedling, into a plant, and finally, into a full-grown tree.</p>

        <p>Just like this tree, you too will <span class="purple">grow stronger over time</span> and strive for greater knowledge and newer experiences.</p>

        <img class="img-intext" src="../assets/img/dtol-5.png">

        <p>But more importantly, the Tree Of Life is a <span class="purple">symbol of rebirth.</span></p>

        <p>In the fall, trees lose their leaves and enter a death-like hibernation for a few months…</p>

        <p>But come spring, the tree sprouts tiny buds, and eventually bursts forth with dramatic blooms. Its leaves are grown once more, engulfed in a brighter shade of green. The Tree Of Life is born once more – just as you will, <span class="cname cap">Friend</span></p>

        <p>And right now, that is the period that you are encountering.</p>

        <p>Right at this very moment, you are <span class="purple">entering the brink of spring</span> – the optimal period for your growth.</p>

        <p>But you must seize this opportunity for yourself, <span class="cname cap">Friend</span>…</p>

        <div class="dtol-sub-header">
            <h2>Imagine Just A Fraction Of What You'll Gain From The Divine Tree Of Life...</h2>
        </div>

        <p>In the Divine Tree Of Life Membership Program, you will…</p>

        <ul class="bullet-purple">
            <li>Encounter The Unadulterated Truth About Your Purpose and Existence</li>
            <li>Unlock Your Inner Intuition To Make Perfect Decisions</li>
            <li>Align Your Soul’s Desires To Your Actions and Behaviour</li>
            <li>Experience The Wondrous Effects Of Transcendence</li>
            <li>Forge and Build Meaningful Relationships</li>
            <li>Become a Magnet of Pure, Positive Energy</li>
            <li>Exude Strong Vibrations Through A Newfound Sense Of Self-Confidence</li>
            <li>Receive Unquestionable Guidance In Everything You Put Your Mind To</li>
        </ul>

        <p>You have everything to gain from this course, and nothing to lose.</p>

        <p>But you must act quickly...</p>

        <p>Remember what I said earlier about how only a handful of people will get to see this?</p>

        <p>Right at this very second, we’re receiving a constant number of e-mails from members of the Individualogist Family who are eager to hop onboard. It’s happening right now, <span class="cname cap">Friend</span>.</p>

        <p>Because of our limited resources, we can only accommodate a small number of people to access this exclusive program… And the number of available slots are closing extremely quickly.</p>

        <p>In fact, I can’t guarantee that your slot will still be available when you get to the end of this…</p>
        
        <button id="cont2-button">Click Here To Continue With Your Reading</button>
    </div>

<div id="cont2-reading">
    <div class="dtol-reading">
        <div class="dtol-sub-header">
            <h2>If You Refrain From Embracing The Divine Tree Of Life...</h2>
        </div>
        <p>Your growth will be at risk...</p>

        <p>As a member of the Individualogist Family, I do care about you. Your growth and further development is important to me… to us.</p>

        <p>…That’s why I want to explain to you the reality of what could potentially go down if you avoid making this life-changing decision.</p>

        <p>If you don’t commit yourself to change right now, then when? All spiritual teachers, religious leaders, and successful millionaires will agree with me on this – there is <span class="purple">no better time than now.</span></p>

        <img class="img-intext" src="../assets/img/dtol-6.png">

<!--        <p>If you refuse to take this small, calculated risk that has the potential to grant you infinite returns for the rest of your life… Then I’m afraid we’ll have to focus our time and attention on the dedicated individuals who are willing to give this a shot.</p>-->

        <p>It’s time to face the facts, <span class="cname cap">Friend</span>… You have been blessed with a unique archetype makeup. You have been blessed with limitless potential. You have been blessed with the knowledge and resources to make a wise decision.</p>

        <p>That is why you have been exposed to this brilliant chance.</p>

        <p>We can’t change the decisions that we’ve made in the past… But with the Divine Tree Of Life, we can change the decisions that we make in the future.</p>

        <div class="dtol-sub-header">
            <h2><span class="cname cap">Friend</span>, Here Is Everything That You Will Gain From This Program...</h2>
        </div>

        <p>The Divine Tree Of Life is an action-oriented program that has one, single purpose…</p>

        <p>To Transcend Your Existence.</p>

        <p>You will be given the exact materials, knowledge, and wisdom to tap into the Tree Of Life… Where you’ll be able to gain astonishing insights into your true purpose, your sense of direction, your ability to make decisions, your confidence, your love and relationships, and your hidden, innate desires.</p>

        <p>And let me also tell you this. It does not matter how old you are. It does not matter if you’ve just graduated college, if you’re in your retirement years. The Divine Tree Of Life contains wisdom that will benefit EVERYONE and ANYONE.</p>

        <p>We’ve levelled the playing field in a way that makes it easy for everyone to comprehend and implement this life-changing information. That’s the true beauty of the Divine Tree Of Life, <span class="cname cap">Friend</span>…</p>

        <p>…It’s never too late or too early to start. But what matters is that you start NOW.</p>

        <img class="img-intext" src="../assets/img/dtol-8.png">

        <p>Colonel Harland Sanders was a man who encountered struggle after struggle.</p>

        <p>…He was <span class="purple">fired</span> from a variety of jobs throughout his career
        <p>…He first started cooking chicken in his roadside Shell Service Station in 1930, at the ripe age of 40, and during the <span class="purple">Great Depression</span>
        <p>…His gas station didn’t actually have a restaurant, so he served diners in his attached personal living quarters.</p>

        <p>Over the next 10 years, he perfected his “Secret Recipe” and chicken-frying method for his now world-famous fried chicken before moving onto bigger locations.</p>

        <p>But even then, it was not all sunshine and roses for the Colonel. Soon enough, the interstate came through the Kentucky town where the Colonel’s restaurant was located in the 1950s.</p>

        <p>It took away important walk-in traffic, and the Colonel was forced to close his business and retire.</p>

        <p>Disheartened. Broke. Depressed.</p>

        <p>His <span class="purple">$105 monthly pension</span> cheque wasn’t helping his situation either…</p>

        <p>…At this point, the man was presented with 2 options.</p>

        <p>1. He could accept his dire situation as what it was, and wait for misery to consume his entire being. Or…</p>
        <p>2. He could <span class="purple">take massive action</span> to change his circumstances</p>

        <p>There’s a certain type of beauty in destruction… Because it’s only during moments of adversity that the heart of man truly shines. And that’s what Colonel did.</p>

        <p>He chose to discover his true purpose. He chose to believe that this wasn’t the end. He chose CHANGE over hopelessness.</p>

        <p>That’s when he set out to franchise his secret recipe. The path itself was not far from easy. Sanders ended up sleeping in his car and getting rejected over a thousand times…</p>

        <p>Until he found his first partner.</p>

        <p>Kentucky Fried Chicken is now worth over <span class="purple">15 BILLION DOLLARS.</span></p>

        <p>Once again, <span class="cname cap">Friend</span>… It’s never too late or too early to start. But what TRULY matters is that you start NOW.</p>

        <p>Because in just a few short months, you’re going to look back on this day, and thank your lucky stars that you trusted your gut on the Divine Tree Of Life.</p>

<!--        <p>There is nothing worse than living with regret, <span class="cname cap">Friend</span>… And I do not wish for you to experience that twinge of sorrow in your heart.</p>-->
        
        <button class="scroll-order cta-button">Yes! Add To My Order!</button>
    </div>
    
    <div class="dtol-reading">
<!--
        <div class="dtol-sub-header">
            <h2><span class="cname cap">Friend</span>, We're Adding New Modules To The Divine Tree Of Life Every Month...</h2>
        </div>

        <p>We’re constantly updating and releasing new modules in the Divine Tree Of Life Membership Platform. You’ll be able to access all of these resources digitally and remotely!</p>

        <p>You could be consumed by the <span class="purple">wisdom</span> of every single page from the comfort of your own home...</p>

        <p>You can access its sacred contents and write in your <span class="purple">e-journal</span> directly from your mobile phone, computer, or tablet.</p>
-->

        <p>As an exclusive member of the Tree Of Life Tribe, your life's transformation CAN and WILL take place anytime, and anywhere – just as long as you have an internet connection. That level of <span class="purple">accessibility</span> is what really guarantees your success with this program.</p>

        <p>Each module comes with its own set of creative, engaging, and results-focused exercises that will help you really get into it… In fact, inside your soul, you’ll even get to experience what the Tree Of Life actually feels like.</p>

        <p><span class="cname cap">Friend</span>, one of things that I’ve come to understand from individuation is this… Life is all about learning. And learning is a lifelong process. Investing in your own learning and your own growth is the one thing that you could NEVER waste your money on…</p>

        <p>…Why?</p>

        <p>Because you can’t put a price tag on a better life. You can’t quantify the <span class="purple">eternal benefits</span> of spiritual attunement. And you can’t measure the level of <span class="purple">abundance</span> that you’ll receive from this program.</p>

        <p>The Divine Tree Of Life is a <span class="purple">timeless</span> program. Timeless, because there is no estimated duration. Timeless, because its secrets can be applied before, now, and after. Timeless, because that’s exactly how you’ll feel as you go through it…</p>

        <div class="dtol-sub-header">
            <h2>Here's Why It's Not Going To Be What You Think...</h2>
        </div>

        <p>I know how you feel... Right now, you’re probably thinking, “similar programs of merely half the value are being sold for hundreds of dollars. Some are even being sold as much as a THOUSAND! I can’t make that kind of commitment!”</p>

        <p>You are not mistaken - the contents of this revolutionary program are are without a doubt, incredibly valuable.</p>

        <p>BUT… It’s important for us to make this <span class="purple">as affordable as possible.</span> We really want you to experience how remarkable this program truly is.</p>

        <p>We might increase the price of it in the future as we release even more modules… But for now, we really want you to take full advantage of this steal…</p>

        <p>And no, it’s not going to cost you <strike>$500</strike>, <span class="cname cap">Friend</span>…</p>

        <p>In fact, we’re not even going to charge you <strike>$200</strike> for it.</p>

        <p>When I said that we want you to experience what TRUE VALUE really means, I meant it.</p>

        <p>So, this is what we’re going to do.</p>

        <div class="dtol-sub-header">
            <h2>Your Divine Tree Of Life Journey WILL Commence For Just $89...</h2>
        </div>

        <img class="img-intext" src="../assets/img/dtol-cover.png">

        <p><span class="purple">$89,</span> <span class="cname cap">Friend</span>, that’s all it takes.</p>

<!--        <p>That’s about the price of a meal at McDonalds. It’s not even a FRACTION of the price of the device that you’re using to read this right now!</p>-->

        <p>But that’s not all...</p>

        <p>The Divine Tree Of Life Membership will be the most awe-inspiring and fruit-bearing material that you’ve ever purchased.</p>

        <ul class="bullet-purple">
            <li>…A newly transformed life.</li>
            <li>…A newfound sense of direction.</li>
            <li>…A better version of yourself.</li>
            <li>…A true and actual purpose.</li>
            <li>…A chance for a better future.</li>
            <li>…And so much more!</li>
        </ul>

        <p>We’re not just stopping there, <span class="cname cap">Friend</span>. Providing you with value is definitely a priority of ours. But so is your satisfaction, your experience, and your security…</p>

<!--
        <p>Your purchase is protected. Your trust means everything to us. And that is why we’re safeguarding you with the following OFFICIAL GUARANTEE.</p>

        <div class="guarantee">
            <div class="dtol-sub-header">
                <h2>Transformation And  Guarantee...</h2>
            </div>
            <img src="../assets/img/guarantee.png">
            <p>There is no minimum duration to this program, and you're free to cancel at any point in time. And like all other products, we are extending our support to you - if you run into any problems or questions during the program, you will have our complete, undivded attention. All you have to do is drop us an e-mail and our team of trained customer service experts will respond to you by the next working day.</p>

            <p>Protecting the purchases of our customers is important to us. We firmly believe in building and keeping your trust. And you have my personal guarantee that this material will help you attain the transformation you've been waiting for, and uncover your true life purpose that you seek!<p>
        </div>
-->
        
        <button class="scroll-order cta-button">Join The Tree Of Life Tribe Now!</button>
        
        <div class="dtol-sub-header">
            <h2>Why On Earth Are We Even Doing This? I'll Spill The Beans...</h2>
        </div>

        <p>Each of us who’ve had a hand in creating the Divine Tree Of Life program have been the exact same position as you, <span class="cname cap">Friend</span>.</p>

        <p>We know what it’s like to feel lost and directionless. We understand what it’s like to feel stuck in life.</p>

        <p>I’ve known what it’s like to constantly meditate, but not feeling any different. I’ve known what it’s like to pursue spiritual journeys, only to be led astray from my true identity… My true purpose.</p>

        <p>The Tree Of Life is what helped me to figure out the things that I should’ve known about myself, but never knew. The Tree Of Life is what gave me <span class="purple">hope</span> during my darkest periods. The Tree Of Life is what led me to <span class="purple">discover the truth</span> about who I am, and what I need to do.</p>

        <img class="img-intext" src="../assets/img/dtol-9.png">

        <p>And I want to share that with you, <span class="cname cap">Friend</span>. I want you to experience the same results with individuation – by leveraging on The Tree Of Life.</p>

        <p>And as long as you click on the button below right now, we can guarantee you that your journey with the Divine Tree Of Life can begin at the small price-point or <span class="purple">just $89.</span></p>

        <p class="text-center"><strong>BUT if $89 isn't a comfortable amount for you, I've also included an option for you to break up the payments at the end of this page.</strong></p>
        
        <p>What's important is that you commit yourself to learning, growth, and formidable action.</p>

        <p>…Remember, Your Tree of Life Membership includes <span class="purple">weekly readings, predictions, and little knowledge nibbles</span> that will escalate your personal growth.</p>

<!--        <p>It is important that you place your order quickly… Because the demand for this exclusive membership is growing, and we simply can’t guarantee that the price will always remain at $7…</p>-->

<!--
        <p>And when that happens, you would not get to see this exclusive, one-time price ever again… I’d hate for that to happen to you.</p>

        <p>You should also know that any future price increases will NOT affect your membership, <span class="cname cap">Friend</span>… Just as long as you seize this opportunity for yourself. Right. Now.</p>
-->

        <div class="dtol-sub-header">
            <h2>Be Warned, <span class="cname cap">Friend</span>... Do Not Make This Mistake.</h2>
        </div>

        <p>There are people who do not believe in the process of spiritual encounters. There are people who dismiss the ideas of personal development…</p>

        <p>These are individuals who I like to think of as positivity vampires… They spend their lives in pity, negativity, and toxicity. You are not a part of that group.</p>

        <p>As indicated by your Archetype, I know for a fact that you’re better, braver, and far more <span class="purple">spiritually mature</span> than that.</p>
        
        <img class="img-intext" src="../assets/img/dtol-1.png">

        <p>Yes, you could always say no to this, and never figure out your true purpose or your true direction… You could certainly continue living the life that you currently do, and pretending to be perfectly contented with whatever you have – subconsciously knowing that there’s <span class="purple">a missing piece…</span></p>

        <p>But you know that’s NOT what you want. And that’s NOT what I want for you either.</p>

        <p>So, don’t give up on yourself, <span class="cname cap">Friend</span>. Because I’m not giving up on you. We’re <span class="purple">not giving up</span> on you.</p>

        <p>There is so much useful and fulfilling information in this program…</p>

        <p>The Divine Tree Of Life program speaks volumes about you – <span class="purple">your journey, your life, your purpose.</span></p>

        <p><span class="cname cap">Friend</span>, this is the REAL DEAL.</p>

        <p>Now, you’re ready to move on to the <span class="purple">NEXT STEP.</span> All you have to do now is <span class="purple">confirm your details</span> below, and at last, you will be merely one step away from receiving all the abundance, enlightenment, and wisdom the Universe has to offer.</p>
    </div>

<?php
    $logicfname = $_COOKIE['logic_first_name'];
    if(isset($logicfname) && !empty($logicfname)) {
        include 'order-filled.php';
    } else {
        include 'order-form.php';
    }
    include($_SERVER['DOCUMENT_ROOT'].'/clickbank/assets/inc/save.php');
?>

</div>
</div>
    
<script>
var name = getCookie('logic_first_name');
var email = getCookie('logic_email');
var archetype = getCookie('logic_archetype');

var getName = document.getElementsByClassName('cname');
var getEmail = document.getElementsByClassName('email');
var getArchetype = document.getElementsByClassName('archetype');
var getFull = document.getElementsByClassName('full');
var getSplit = document.getElementsByClassName('split3');

var i;
if (!name) {
    for (i=0; i<getName.length; i++) {
        getName[i].innerHTML = 'Friend';
    }
    console.log('friend');
} else {
    for (i=0; i<getName.length; i++) {
        getName[i].innerHTML = name;
    }
}
for (i=0; i<getEmail.length; i++) {
    getEmail[i].innerHTML = email;
}
for (i=0; i<getArchetype.length; i++) {
    getArchetype[i].innerHTML = archetype;
}
for (i=0; i<getFull.length; i++) {
    getFull[i].href = 'http://tol.individua1.pay.clickbank.net/?cbskin=25043&cbur=a';
} 
for (i=0; i<getSplit.length; i++) {
    getSplit[i].href = 'http://tol-split3.individua1.pay.clickbank.net/?cbskin=25043&cbur=a';
}     
    
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
$path .= ('/offer/common/footer-frontend.php');
include($path);
?>
