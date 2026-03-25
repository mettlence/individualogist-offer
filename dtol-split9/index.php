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
        <h1>Okay, <span class="cname cap">Friend</span>. I'll Split It Up Into 9 Easy Payments Of Only $9.90</h1>
    </div>

    <div class="dtol-reading">
        <p class="text-center">You'll still receive all 9 modules of your Divine Tree Of Life, and you'll still be protected by my transformation guarantee.</p>
        <p><span class="cname cap">Friend</span>,</p>
        <p>You will still gain access to your Divine Tree Of Life platform.</p>
        <p>You will still be able to access all 9 modules.</p>
        <p>And you will still be protected by my transformation guarantee.</p>
        <p>But, you will won't have to invest the initial sum of $89.</p>
        <p>In fact, you won't even have to come up with the $29.90 as part of the 3-monthly payment plan.</p>
        <p>Now, you are certainly going through a period of extraordinary transformation.</p>
        <p>Amazing things are going to come into your life, and you'll start witnessing signs and symbols blossom before you.</p>
        <p>But at the same time, with the newfound knowledge of your archetype and the recent evolution of your consciousness...</p>
        <p>You're going to undergo a new set of challenges and obstacles.</p>
        <p>Challenges and obstacles that you won't know how to deal with, unless you had the right information at your fingertips.</p>
        <p>In other words - your progression, your advancement is AT STAKE!</p>
        <p><span class="cname cap">My dear</span>, take this opportunity as a little "nudge" towards your path of least resistance.</p>
        <p>Remember, your Divine Tree Of Life contains 9 actionable modules, each complete with its own set of growth-centric exercises.</p>
        <p>This is wisdom that's not only going to ascertain your growth, but it's going to take your dreams and desires one STEP FURTHER.</p>
        <p>If you're ready to commence this journey with me and start experiencing a radical transformation across your entire reality...</p>
        <p class="text-center"><strong>You must act now.</strong></p>
        <p>For just $9.90 today, I'm willing to give you FULL ACCESS to the Divine Tree Of Life platform. You will be billed $9.90 for 8 months after the initial charge, and you're free to cancel it at any time.</p>
        <p>The choice is yours, <span class="cname cap">friend</span>.</p>
        <p>The question is - are you willing to do everything you can to see a transformation in your circumstances?</p>
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
    
<script>
var name = getCookie('logic_first_name');
var email = getCookie('logic_email');
var archetype = getCookie('logic_archetype');

var getName = document.getElementsByClassName('cname');
var getEmail = document.getElementsByClassName('email');
var getArchetype = document.getElementsByClassName('archetype');
var getFull = document.getElementsByClassName('full');
var getSplit = document.getElementsByClassName('split9');

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
    getSplit[i].href = 'http://tol-split9.individua1.pay.clickbank.net/?cbskin=25043&cbur=a';
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
