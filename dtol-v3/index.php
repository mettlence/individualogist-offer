<?php
$PageTitle = "Individualogist.com | Divine Tree Of Life";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/clickbank/common/header.php');
include_once($path);
echo "<link type='text/css' rel='stylesheet' href='/lp/assets/css/style.css?v=2.13'>";
echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>";
echo "<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js'></script>";

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
    .full-modal {
	position: fixed;
	top: 0;
	left: 0;
	bottom: 0;
	right: 0;
	display: none;
	opacity: 0;
	overflow: scroll;
}
.full-modal:target {
	display: block;
	z-index: 2;
	opacity: 1;
}
.popup:target ~ .content {
	overflow: hidden;
}

.modal-exit {
    position: absolute;
    z-index: 10;
    padding: .5em;
    font-size: 2em;
    right: 0;
    opacity: .2;
}
.modal-exit:hover {
	color: #dcdcdc;
}
.modal-footer {
    line-height: 1.2em;
    font-size: .8em;
} 
.modal-btn {
    display: block;
    background: orange;
    color: #fff;
    text-decoration: none;
    padding: .5em 1em;
    font-weight: 700;
    border-radius: 100px;
    box-shadow: 0 10px 10px #00000020;
    font-size: 2em;
    margin: 1em auto;
    width: 80%;
}
.modal-btn:hover {
    text-decoration: none;
    color: #fff;
    transition: 0.4s;
    -webkit-transition: 0.4s;
    text-decoration: none;
    background: purple;
}
.countdown-label {
  font: thin 15px Arial, sans-serif;
	color: #999;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
  letter-spacing: 2px;
  margin-top: 0;
}
#countdown{
    box-shadow: 0 1px 2px 0 rgba(1, 1, 1, 0.4);
    width: 240px;
	height: 96px;
    font-size: 1em;
    text-shadow: none;
	text-align: center;
    background: #f1f1f1;
	border-radius: 5px;
	margin: auto;
}

#countdown #tiles{
    color: #fff;
	position: relative;
	z-index: 1;
    text-shadow: 1px 1px 0px #ccc;
	display: inline-block;
    font-family: Arial, sans-serif;
	text-align: center;
    border-radius: 5px 5px 0 0;
    font-size: 48px;
    font-weight: thin;
    padding: 0;
    display: block;
}

.color-full {
  background: #53bb74;
}
.color-half {
  background: #ebc85d;
}
.color-empty {
  background: #e5554e;
}

#countdown #tiles > span{
	width: 70px;
	max-width: 70px;
	padding: 18px 0;
	position: relative;
}

#countdown .labels{
	width: 100%;
	height: 25px;
	text-align: center;
	position: absolute;
	bottom: 8px;
}

#countdown .labels li{
	width: 102px;
	font: bold 15px 'Droid Sans', Arial, sans-serif;
	color: #f47321;
	text-shadow: 1px 1px 0px #000;
	text-align: center;
	text-transform: uppercase;
	display: inline-block;
}    
    
.col-sm-6 {
    flex: 100% !important;
}
    .indi-logo {
        margin: 0 auto;
        padding: 0;
    }
.indi-logo img {
    width: 100%;
}
    .tree-bg {
        background: url('../assets/img/tree-bg-blurred.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: auto;
    }
    .bg-face {
        background: url('../assets/img/dtol-face.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: auto;
    }
    .solar-bg {
        background: url('../assets/img/solar-bg-blurred.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: auto;
    }
    .bg-blue {
        background: url('../assets/img/bg-blue-blurred.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: auto;
        background-attachment: fixed;
        box-shadow: 0 10px 20px #00000080;
    }
    .energy-bg {
        background: url('../assets/img/energy-bg-blurred.jpg');
        background-size: cover;
        background-position: center center;
        width: 100%;
        height: auto;
        background-attachment: fixed;
        text-shadow: 1px 1px 1px #000;
        box-shadow: 0 10px 20px #00000080;
    }
    .bullet-white {
        color: #fff;
        width: 100%;
        box-shadow: none;
        margin: 0 auto;
        position: relative;
    }
    .bullet-white li {
        font-size: 1.2em;
        line-height: 1.8em;
    }
    .bullet-purple {
        color: purple;
        width: 100%;
        box-shadow: none;
        margin: 0 auto;
        position: relative;
    }
    .header-wrapper {
        padding: 2em;
    }
    .cta-button {
        background: #fdae0e;
        border: none;
        color: #fff;
        font-family: Raleway, sans-serif;
        font-weight: 700;
        text-shadow: none;
        box-shadow: 5px 7px 10px #00000050 !important;
        padding: 15px 32px;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 2em;
        margin: 20px auto;
        width: 80%;
        border-radius: 100px;
        cursor: pointer;
    }
    .cta-button:hover {
        transition: 0.4s;
        -webkit-transition: 0.4s;
        background: #12c89a;
        text-shadow: none;
        box-shadow: 0 0 5px #00000050;
    }
    .order-form {
        background: #f8f8f8;
        border-radius: 10px;
        display: block;
        float: left;
        margin: 0 auto;
        text-align: center;
        box-shadow: 0 10px 10px #00000030;
        font-family: Raleway, "sans-serif";
        border: none;
    }
    .order-title {
        width: 100%;
        background: purple;
        text-shadow: 1px 1px 2px #000;
        font-weight: 700;
        margin: 0 auto;
        padding: 1em;
    }
    .sub-header {
        margin-bottom: 1em;
    }
    .sub-header:after {
       content: '';
        height: 4px;
        background: teal;
        margin-top: 10px;
        width: 100px;
        border-radius: 20px;
        display: block;
        opacity: .5;
        margin: 0 auto;
        position: relative;
        top: 10px;
    }
    .master-header {
        box-shadow: 0 10px 20px #00000050
    }
    .headline {
        text-shadow: 1px 1px 1px #000;
    }
    .headline h1 {
        font-weight: 700;
    }
    .multiborder, .multibordertop {
      text-align: center;
      position: relative;
      line-height: 100px;
      height: auto;
      width: 100%;
    }
    .multiborder:after {
      background: linear-gradient(to right, #7608da 25%,#ffcd02 25%, #fbca02 50%, #de2218 50%, #9f251f 75%, #16d4a9 75%);
      position: absolute;
      content: '';
      height: 4px;
      right: 0;
      bottom: 0;
      left: 0;
    }
    .multibordertop:after {
      background: linear-gradient(to right, #7608da 25%,#ffcd02 25%, #fbca02 50%, #de2218 50%, #9f251f 75%, #16d4a9 75%);
      position: absolute;
      content: '';
      height: 4px;
      right: 0;
      top: 0;
      left: 0;
    }
    .white {
        color: #fff;
        font-weight: 700;
    }
    .order-details {
        box-shadow: none;
        -webkit-box-shadow: none;
        margin: 1em auto;
    }
    .order-footer {
        background: purple;
    }
    .text-shadow {
        text-shadow: 1px 1px 1px #000;
    }
    .commence {
        background: linear-gradient(45deg, #333, #222, #111, #000, #111, #222, #333);
    }
    .reflect {
        -webkit-box-reflect: below 0px -webkit-gradient(linear, left top, left bottom, from(transparent), color-stop(70%, transparent) , to(rgba(250, 250, 250, 0.3)));
    }
    .archetypewheel {
        position: absolute;
        z-index: -1;
        right: 0;
        left: 0;
        top: 0;
        bottom: 0;
        opacity: .15;
        filter: drop-shadow(0 0 5px #00000080);
    }
    .intro {
        position: relative;
    }
    @media only screen and (max-width: 768px) {
        h1, .cta-button {
            font-size: 1.5em;
        }
        .headline p {
            line-height: 1.2em !important;
        }
        #cont-button, #cont2-button, .cta-button {
            width: 100%;
            padding: 1em !important;
            line-height: 1.5em;
        }
        .img-intext {
            margin: auto;
            margin-bottom: 3em;
        }
    }
</style>


<section class="full-modal bg-light text-dark" role="dialog" id="dtolModal" aria-labelledby="Primary Modal Example" aria-describedby="description">
    <a href="#" class="modal-exit text-dark" title="close"><i class="fa fa-times"></i></a>
    <div class="container mt-3 mb-3">
        <div class="row">
            <div class="col-sm-8 mx-auto text-center mb-3">
                <input type="hidden" id="set-time" value="30"/>
                <div id="countdown">
                  <div id='tiles' class="color-full"></div>
                  <div class="countdown-label">Time Remaining</div>
                </div>
            </div>
            <div class="col-sm-10 mx-auto text-dark text-center">
                <h2>You're Ready To Become A Valued Member Of The <span class="purple">Divine Tree Of Life</span> Program</h2>
                <p>Your Transformational Journey To <span class="purple">Joy & Abundance</span> Begins Right Here, Right Now.</p>
            </div>
        </div>
        <div class="row mb-3">
                    <div class="col-sm-4">
                        <img class="width100" src="/offer/assets/img/dtol-cover.png">
                    </div>
                    <div class="col-sm-8">
                        <form class="form" style="width: 80%;  padding: 10px; margin: 0 auto;">
                         <div class="Step1">
                            <h4 class="text-dark">Step 1: Enter your name</h4>
                            <div class="seperator div seperator_2B5q5"></div>
                            <div class="step div">
                               <div class="item">
                                  <div class="div"><input name="name" autofocus="" type="text" placeholder="Enter Your Name..." class="name input"></div>               
                               </div>
                            </div>
                            <div class="div">
                               <button type="button" class="continue button continue_e9QCT StepBtn1">
                               <span class="span">Continue... <i class="fa fa-angle-right" aria-hidden="true"></i>
                               </span>						
                               </button>
                            </div>
                         </div>
                        <div class="Step2">
                            <h4 class="text-dark">Step 2: Select your gender</h4>  
                            <div class="seperator div seperator_2B5q5"></div>
                                <div class="row form-group">
                                    <input type="hidden" name="gender" id="gender_select" value="" class="gender">
                                        <div class="col-sm-6">
                                            <div class="gdr-btn" data-id="female">
                                                <img src="../assets/img/female.png" alt="Female" title="Female" class="gdr-img">
                                                <h3>Female</h3>
                                            </div>
                                        </div>	
                                        <div class="col-sm-6">
                                            <div class="gdr-btn" data-id="male">
                                                <img src="../assets/img/male.png" alt="Male" title="Male" class="gdr-img">
                                                <h3>Male</h3>
                                            </div>
                                        </div>
                                </div>
                        </div>
                         <div class="Step3">
                            <h4 class="text-dark">Step 3: Input your birthday</h4>
                            <div class="seperator div seperator_2B5q5"></div>
                            <div class="step div">
                               <div class="datepicker div datepicker_9O_Ut1">
                                  <div class="div">
                                     <div class="MonthDropDown month_drop">
                                        <input type="text" value="" readonly="true" class="month select-droopdown" placeholder="Month" id="month_drop">								
                                        <ul class="ul datepicker_ul">
                                           <li class="li" data-id="January">January</li>
                                           <li class="li" data-id="February">February</li>
                                           <li class="li" data-id="March">March</li>
                                           <li class="li" data-id="April">April</li>
                                           <li class="li" data-id="May">May</li>
                                           <li class="li" data-id="June">June</li>
                                           <li class="li" data-id="July">July</li>
                                           <li class="li" data-id="August">August</li>
                                           <li class="li" data-id="September">September</li>
                                           <li class="li" data-id="October">October</li>
                                           <li class="li" data-id="November">November</li>
                                           <li class="li" data-id="December">December</li>
                                        </ul>
                                     </div>
                                  </div>
                                  <div class="day div">
                                     <div class="DayDropDown_div day_drop">
                                        <input type="text" readonly="true" value="" class="DOBday select-droopdown" placeholder="Day" id="day_drop">	
                                        <ul class="DayDropDown ul datepicker_ul">																	
                                           <li class="li" data-id="1">1</li><li class="li" data-id="2">2</li><li class="li" data-id="3">3</li><li class="li" data-id="4">4</li><li class="li" data-id="5">5</li><li class="li" data-id="6">6</li><li class="li" data-id="7">7</li><li class="li" data-id="8">8</li><li class="li" data-id="9">9</li><li class="li" data-id="10">10</li><li class="li" data-id="11">11</li><li class="li" data-id="12">12</li><li class="li" data-id="13">13</li><li class="li" data-id="14">14</li><li class="li" data-id="15">15</li><li class="li" data-id="16">16</li><li class="li" data-id="17">17</li><li class="li" data-id="18">18</li><li class="li" data-id="19">19</li><li class="li" data-id="20">20</li><li class="li" data-id="21">21</li><li class="li" data-id="22">22</li><li class="li" data-id="23">23</li><li class="li" data-id="24">24</li><li class="li" data-id="25">25</li><li class="li" data-id="26">26</li><li class="li" data-id="27">27</li><li class="li" data-id="28">28</li><li class="li" data-id="29">29</li><li class="li" data-id="30">30</li><li class="li" data-id="31">31</li>                        </ul>
                                     </div>
                                  </div>
                                  <div class="div">
                                     <div class="year_DropDown_div year_drop">
                                        <input type="text" readonly="true" onkeypress="return false;" value="" class="year select-droopdown" placeholder="Year" id="year_drop">
                                        <ul class="YearDropDown ul datepicker_ul">									
                                           <li class="li" data-id="2018">2018</li><li class="li" data-id="2017">2017</li><li class="li" data-id="2016">2016</li><li class="li" data-id="2015">2015</li><li class="li" data-id="2014">2014</li><li class="li" data-id="2013">2013</li><li class="li" data-id="2012">2012</li><li class="li" data-id="2011">2011</li><li class="li" data-id="2010">2010</li><li class="li" data-id="2009">2009</li><li class="li" data-id="2008">2008</li><li class="li" data-id="2007">2007</li><li class="li" data-id="2006">2006</li><li class="li" data-id="2005">2005</li><li class="li" data-id="2004">2004</li><li class="li" data-id="2003">2003</li><li class="li" data-id="2002">2002</li><li class="li" data-id="2001">2001</li><li class="li" data-id="2000">2000</li><li class="li" data-id="1999">1999</li><li class="li" data-id="1998">1998</li><li class="li" data-id="1997">1997</li><li class="li" data-id="1996">1996</li><li class="li" data-id="1995">1995</li><li class="li" data-id="1994">1994</li><li class="li" data-id="1993">1993</li><li class="li" data-id="1992">1992</li><li class="li" data-id="1991">1991</li><li class="li" data-id="1990">1990</li><li class="li" data-id="1989">1989</li><li class="li" data-id="1988">1988</li><li class="li" data-id="1987">1987</li><li class="li" data-id="1986">1986</li><li class="li" data-id="1985">1985</li><li class="li" data-id="1984">1984</li><li class="li" data-id="1983">1983</li><li class="li" data-id="1982">1982</li><li class="li" data-id="1981">1981</li><li class="li" data-id="1980">1980</li><li class="li" data-id="1979">1979</li><li class="li" data-id="1978">1978</li><li class="li" data-id="1977">1977</li><li class="li" data-id="1976">1976</li><li class="li" data-id="1975">1975</li><li class="li" data-id="1974">1974</li><li class="li" data-id="1973">1973</li><li class="li" data-id="1972">1972</li><li class="li" data-id="1971">1971</li><li class="li" data-id="1970">1970</li><li class="li" data-id="1969">1969</li><li class="li" data-id="1968">1968</li><li class="li" data-id="1967">1967</li><li class="li" data-id="1966">1966</li><li class="li" data-id="1965">1965</li><li class="li" data-id="1964">1964</li><li class="li" data-id="1963">1963</li><li class="li" data-id="1962">1962</li><li class="li" data-id="1961">1961</li><li class="li" data-id="1960">1960</li><li class="li" data-id="1959">1959</li><li class="li" data-id="1958">1958</li><li class="li" data-id="1957">1957</li><li class="li" data-id="1956">1956</li><li class="li" data-id="1955">1955</li><li class="li" data-id="1954">1954</li><li class="li" data-id="1953">1953</li><li class="li" data-id="1952">1952</li><li class="li" data-id="1951">1951</li><li class="li" data-id="1950">1950</li><li class="li" data-id="1949">1949</li><li class="li" data-id="1948">1948</li><li class="li" data-id="1947">1947</li><li class="li" data-id="1946">1946</li><li class="li" data-id="1945">1945</li><li class="li" data-id="1944">1944</li><li class="li" data-id="1943">1943</li><li class="li" data-id="1942">1942</li><li class="li" data-id="1941">1941</li><li class="li" data-id="1940">1940</li><li class="li" data-id="1939">1939</li><li class="li" data-id="1938">1938</li><li class="li" data-id="1937">1937</li><li class="li" data-id="1936">1936</li><li class="li" data-id="1935">1935</li><li class="li" data-id="1934">1934</li><li class="li" data-id="1933">1933</li><li class="li" data-id="1932">1932</li><li class="li" data-id="1931">1931</li><li class="li" data-id="1930">1930</li><li class="li" data-id="1929">1929</li><li class="li" data-id="1928">1928</li><li class="li" data-id="1927">1927</li><li class="li" data-id="1926">1926</li><li class="li" data-id="1925">1925</li><li class="li" data-id="1924">1924</li><li class="li" data-id="1923">1923</li><li class="li" data-id="1922">1922</li><li class="li" data-id="1921">1921</li><li class="li" data-id="1920">1920</li><li class="li" data-id="1919">1919</li>                        </ul>
                                     </div>
                                  </div>
                               </div>
                               <div class="div">
                                  <button type="button" class="continue button continue_e9QCT StepBtn3">
                                  <span class="span">Continue... <i class="fa fa-angle-right" aria-hidden="true"></i></span>						
                                  </button>
                               </div>
                            </div>
                         </div>
                         <div class="Step4">
                            <h4 class="text-dark">Step 4: Enter your email</h4>
                            <div class="seperator div seperator_2B5q5"></div>
                            <div class="step div">
                               <div class="item">
                                  <div class="div">
                                     <input class="email input" name="email" placeholder="Enter Your Email..." type="email">
                                  </div>
                               </div>
                            </div>
                            <div class="div">
                               <button type="button" class="continue button continue_e9QCT StepBtn4">
                               <span class="span">Join The Tree Of Life Tribe <i class="fa fa-angle-right" aria-hidden="true"></i></span>						
                               </button>
                            </div>
                         </div>
                         <div class="errorMsg"></div>
                      </form>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 mx-auto text-center">
                    <p class="modal-footer">
                        <img class="secure-icon" src="/offer/paa/img/secure-icon.png">
                        After filling in your details, you will be taken to a secure order page. Your Divine Tree of Life trial membership begins at $7. After the trial period of 14 days, you will then be billed $37.00 a month. You are free to cancel your subscription at any time.</p>
                </div>    
            </div>
    </div>
</section>

<section class="master-header tree-bg multiborder">
    <div class="container-fluid header-wrapper">
        <div class="row">
            <div class="col-sm-2 mx-auto">
                <div class="indi-logo">
                    <img src="/clickbank/assets/img/individualogist-logo2.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto headline text-center text-light">
                <h1><span class="cname cap">Friend</span>, This Hidden Archetype Will Change EVERYTHING You've Ever Thought, Felt, and Imagined.</h1>
                <p class="text-light">It Connects You To All Forms Of Creation… The Physical Reality, The Collective Unconscious, and The Ethereal Dimension.</p>
            </div>
        </div>
    </div>
</section>

<section class="page-wrapper intro">
    <div class="container">
        <div class="row mt-5">
            <div class="col-sm-8 mx-auto text-left">
                <p>Dear <span class="cname cap">Friend</span>,</p>

                <p>We’ve spoken at length about your archetype. Do you remember the various personalized readings and bonus resources that we’ve shared with you…?</p>

                <p>But I wanted to share something with you that’s <span class="purple">far more important than that.</span></p>

                <p>In fact, this information is <span class="purple">so quintessential to your growth,</span> that it WILL change every single pre-conceived notion you've had about life, improvement, manifestation... Everything.</p>

                <p>The fate of your growth, your vibrations, your energies, and your destiny reside within this secret…</p>

                <p>But before we get into that, I want to tell you why you’re <span class="purple">receiving this message in the first place.</span></p>

                <p>You’ve already familiarized yourself with your archetype, <span class="cname cap">Friend</span>. You’ve gained a profound understanding of who you are as an individual. That is not what this message is about.</p>

                <p>And since then, I can tell that you’ve grown even more curious about archetypes.</p>

                <p>That is why I’ve granted you safe passage to explore and <span class="purple">demystify even deeper secrets</span> that lie within the <span class="purple">Realm of the Collective Unconscious…</span></p>

                 <p>…And that is exactly what you have received this message.</p>

                 <p>This mystical secret lies within the one, single archetype that matters…</p>
            </div>
                <img class="archetypewheel w-100 reflect" src="/offer/paa/img/archetype-wheel.png">
        </div>
    </div>
</section>

<section class="page-wrapper background bg-light multibordertop mt-3 mb-3">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 mx-auto text-left">
                <h2 class="sub-header text-center purple">And That Archetype Is The Divine Tree Of Life</h2>
                
                <img class="img-intext" src="../assets/img/dtol-2.png">
                
                <p>Perhaps you might be familiar with this concept...</p>

                <p>The Divine Tree Of Life is the <span class="purple">sole recurring theme</span> across majority, if not all, <span class="purple">religions and philosophies.</span> It is one of the extremely few elements that’s been kept consistent – regardless of time, beliefs, and values.</p>

                <p>The Tree Of Life is present in <span class="purple">Christianity, Bhuddism, the Kaballah, Norse, China, Ancient Egypt…</span> It has made its presence across nations and eras… Until today.</p>

                <p>Right now at this very moment, you must be filled with the <span class="purple">burning desire</span> to have your questions answered… What does the Tree Of Life mean? How does it apply to my life? Will it <span class="purple">REALLY</span> grant me good fortune?</p>
                
                <p>Stay with me, <span class="cname cap">Friend</span>. Because I promise, you’re going to <span class="purple">like the answers</span> to those questions!</p>

                <button id="cont-button">Click Here To Reveal The Truth</button>
            </div>
        </div>
    </div>
</section>

<div id="cont-reading">
<section class="page-wrapper everything mt-3 mb-3">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 mx-auto text-center">
                <h2 class="sub-header purple">...Everything We've Uncovered Will Be Revealed To You. Right Here, Right Now.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <img class="w-100 reflect" src="../assets/img/wisdom.png">
            </div>
            <div class="col-sm-6 text-left">
                <p>We’ve <span class="purple">unravelled the mysteries</span> behind this mystical archetype…</p>

                <p>When you requested your <span class="purple">Archetypal Reading,</span> it indicated that you’re more than ready for <span class="purple">great transformation</span> to take place in your life. You’re ready to pry open the <span class="purple">floodgates</span> of growth, healing, and abundance.</p>

                <p>Not many are as <span class="purple">courageous or curious</span> as you to want to learn more about themselves.</p>

                <p>And that in itself, <span class="cname cap">Friend</span>, is what makes you different.</p>

                <p>But that’s not all… I’ve also been itching to inform you of your <span class="purple">limitless life potential.</span> Granted the incessant nature of your archetype, I find it likely that you crave knowledge beyond the ordinary…</p>

                <p>What you crave is wisdom.</p>

                <p>Your archetype is deeply connected to the <span class="purple">Wise Old Man archetype</span> – an archetype that’s distinguished for its <span class="purple">astute judgments and intuitive wisdom.</span> That is a trait that’s present within you and your <span class="archetype cap"></span> archetype.</p>

                <p>You’re an individual who seeks answers to questions that concern yourself at a deeper, <span class="purple">far more personal level.</span> Questions that you’ve been dying to know the answers to for months, or perhaps years now…</p>
            </div>
        </div>
    </div>
</section>

<section class="page-wrapper bg-light answers mt-3 mb-3 multibordertop">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 mx-auto text-center">
                <h2 class="sub-header purple"><span class="cname cap">Friend</span>, The Answers To All Of Your Questions Lie Within The Tree Of Life.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mx-auto text-left">
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

                <p>You see, by attaining an understanding of this mythical archetype, and of the natural phenomenon that inspired it, you will receive the ultimate key to decoding and eliminating all of your <span class="purple">spiritual enigmas, mental blockades, and physical limitations.</span></p>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper energy-bg wisdom multiborder mt-3 pb-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-sm-12 mx-auto text-center">
                <h2 class="sub-header white">Tap Into The Infinite Wisdom, Fortune, And Abundance From The Tree Of Life</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-left">
                <p class="text-light">Think of the Tree Of Life is an <span class="purple">infinite pool of energy</span> – a tree that constantly bears fruit for your personal consumption. And in this case, what you’ll be consuming is knowledge, wisdom, and growth.</p>

                <p class="text-light">And as you engage yourself in that process, you’ll start to experience the wonders of the Tree Of Life…</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-left">
                <ul class="bullet-white">
                    <li>You will be given direction and intuitive guidance across all facets of life</li>
                    <li>You will experience luck and good fortune in everything that you do</li>
                    <li>You will become perfectly in-tune with your archetype and be an authority of influence</li>
                    <li>You will attract the right people into your life, while subconsciously distancing yourself from the wrong</li>
                    <li>You will grow to be the individual that you were meant to be… An individual of limitless potential</li>
                </ul>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper realdeal bg-light pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header purple">The Divine Tree Of Life is an exclusive program that we have constructed over the course of several years.</h2>
            </div>    
        </div>
        <div class="row">
            <div class="col-sm-12 text-left">
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
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper signs pt-3 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header purple">The Signs, Symbols, And Meanings Buried Within The Tree Of Life</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-left">
                <p>Now, as promised, I’m going to reveal to you a snippet of what the Tree Of Life encompasses.</p>

                <p>The Tree Of Life is the connection to ALL things - both tangible and intangible.</p>

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

                <p>But you must seize this opportunity for yourself…</p>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper imagine mt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header purple">Imagine Just A Fraction Of What You'll Gain From The Divine Tree Of Life...</h2>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-sm-6 mx-auto">
                <img class="w-100 reflect" src="../assets/img/dtol-cover.png">
            </div>
            <div class="col-sm-6 mx-auto text-left">
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
            </div>
            <div class="col-sm-12 texxt-left">
                <p>You have everything to gain from this course, and nothing to lose.</p>

                <p>But you must act quickly...</p>

                <p>Remember what I said earlier about how only a handful of people will get to see this?</p>

                <p>Right at this very second, we’re receiving a constant number of e-mails from members of the Individualogist Family who are eager to hop onboard. It’s happening right now, <span class="cname cap">Friend</span>.</p>

                <p>Because of our limited resources, we can only accommodate a small number of people to access this exclusive program… And the number of available slots are closing extremely quickly.</p>

                <p>In fact, I can’t guarantee that your slot will still be available when you get to the end of this…</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mx-auto text-center">
                <button id="cont2-button">Click Here To Continue With Your Reading</button>
            </div>
        </div>
    </div>
</section>
</div>

<div id="cont2-reading">
<section class="page-wrapper refrain mt-5 mt-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header purple">If You Refrain From Embracing The Divine Tree Of Life...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-left">
                <p>Your growth will be at risk...</p>

                <p>As a member of the Individualogist Family, I do care about you. Your growth and further development is important to me… to us.</p>

                <p>…That’s why I want to explain to you the reality of what could potentially go down if you avoid making this life-changing decision.</p>

                <p>If you don’t commit yourself to change right now, then when? All spiritual teachers, religious leaders, and successful millionaires will agree with me on this – there is <span class="purple">no better time than now.</span></p>

                <img class="img-intext" src="../assets/img/dtol-6.png">

                <p>If you refuse to take this small, calculated risk that has the potential to grant you infinite returns for the rest of your life… Then I’m afraid we’ll have to focus our time and attention on the dedicated individuals who are willing to give this a shot.</p>

                <p>It’s time to face the facts… You have been blessed with a unique archetype makeup. You have been blessed with limitless potential. You have been blessed with the knowledge and resources to make a wise decision.</p>

                <p>That is why you have been exposed to this brilliant chance.</p>

                <p>We can’t change the decisions that we’ve made in the past… But with the Divine Tree Of Life, we can change the decisions that we make in the future.</p>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper solar-bg text-shadow gain pt-5 pb-3">
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header white"><span class="cname cap">Friend</span>, Here Is Everything That You Will Gain From This Program...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-left">
                <p class="text-light">The Divine Tree Of Life is an action-oriented program that has one, single purpose…</p>

                <p class="text-light">To Transcend Your Existence.</p>

                <p class="text-light">What that really means is that you will be given the exact materials, knowledge, and wisdom to tap into the Tree Of Life… Where you’ll be able to gain astonishing insights into your true purpose, your sense of direction, your ability to make decisions, your confidence, your love and relationships, and your hidden, innate desires.</p>

                <p class="text-light">And let me also tell you this. It does not matter how old you are. It does not matter if you’ve just graduated college, if you’re in your retirement years. The Divine Tree Of Life contains wisdom that will benefit EVERYONE and ANYONE.</p>

                <p class="text-light">We’ve levelled the playing field in a way that makes it easy for everyone to comprehend and implement this life-changing information. That’s the true beauty of the Divine Tree Of Life, <span class="cname cap">Friend</span>…</p>

                <p class="text-light">…It’s never too late or too early to start. But what matters is that you start NOW.</p>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper kfc bg-light pt-3 pb-3 multibordertop">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center pt-5">
                <h2 class="sub-header purple">A Captivating Story Of Courage, Inspiration, and Affirmitive Decision...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-left">
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

                <p>He chose to discover his true purpose. He chose to believe that this wasn’t the end. He chose change over hopelessness.</p>

                <p>That’s when he set out to franchise his secret recipe. The path itself was not far from easy. Sanders ended up sleeping in his car and getting rejected over a thousand times…</p>

                <p>Until he found his first partner.</p>

                <p>Kentucky Fried Chicken is now worth over <span class="purple">15 BILLION DOLLARS.</span></p>

                <p>Once again, <span class="cname cap">Friend</span>… It’s never too late or too early to start. But what TRULY matters is that you start NOW.</p>

                <p>Because in just a few short months, you’re going to look back on this day, and thank your lucky stars that you trusted your gut on the Divine Tree Of Life.</p>

                <p>There is nothing worse than living with regret… And I do not wish for you to experience that twinge of sorrow in your heart.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mx-auto text-center">
                <button class="scroll-order cta-button">Click Here To Begin Your Trial!</button>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper newmodules multibordertop pt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header purple"><span class="cname cap">Friend</span>, We're Adding New Modules To The Divine Tree Of Life Every Month...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-left">
                <p>We’re constantly updating and releasing new modules in the Divine Tree Of Life Membership Platform. You’ll be able to access all of these resources digitally and remotely!</p>

                <p>You could be consumed by the <span class="purple">wisdom</span> of every single lesson from the comfort of your own home...</p>

                <p>You can access its sacred contents and write in your <span class="purple">e-journal</span> directly from your mobile phone, computer, or tablet.</p>

                <p>The process of transforming your life CAN and WILL take place anytime, and anywhere – just as long as you have an internet connection. That level of <span class="purple">accessibility</span> is what really guarantees your success with this program.</p>

                <p>Each module comes with its own set of creative, engaging, and results-focused exercises that will help you really get into it… In fact, inside your soul, you’ll even get to experience what the Tree Of Life actually feels like.</p>

                <p><span class="cname cap">Friend</span>, one of things that I’ve come to understand from individuation is this… Life is all about learning. And learning is a lifelong process. Investing in your own learning and your own growth is the one thing that you could NEVER waste your money on…</p>

                <p>…Why?</p>

                <p>Because you can’t put a price tag on a better life. You can’t quantify the <span class="purple">eternal benefits</span> of spiritual attunement. And you can’t measure the level of <span class="purple">abundance</span> that you’ll receive from this program.</p>

                <p>The Divine Tree Of Life is a <span class="purple">timeless</span> program. Timeless, because there is no estimated duration. Timeless, because its secrets can be applied before, now, and after. Timeless, because that’s exactly how you’ll feel as you go through it…</p>
            </div>
            <div class="col-sm-12 text-center">
                <h2 class="sub-header purple">Here's Why It's Not Going To Be What You Think...</h2>
            </div>
            <div class="col-sm-12 text-left">
                <p>I know how you feel... Right now, you’re probably thinking, “similar programs of merely half the value are being sold ANYWHERE around $47. Some are even being sold at $97! I can’t make that kind of commitment!”</p>

                <p>You are not mistaken - the contents of this revolutionary program are without a doubt, incredibly valuable.</p>

                <p>BUT… It’s important for us to make this <span class="purple">as affordable as possible.</span> We really want you to experience how remarkable this program truly is.</p>

                <p>We might increase the price of it in the future as we release even more modules… But for now, we really want you to take full advantage of this steal…</p>

                <p>And no, it’s not going to cost you <strike>$97</strike>, <span class="cname cap">Friend</span>…</p>

                <p>In fact, we’re not even going to charge you <strike>$47</strike> for it.</p>

                <p>When I said that we want you to experience what TRUE VALUE really means, I meant it.</p>

                <p>So, this is what we’re going to do.</p>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper bg-dark commence text-shadow text-light multibordertop pt-5 pb-3">
    <div class="container">
        <div class="row mt-3">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header white">Your Divine Tree Of Life Journey WILL Commence For Just $7...</h2>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-sm-6">
                <img class="w-100 reflect" src="../assets/img/dtol-cover.png">
            </div>
            <div class="col-sm-6 text-left">
                <p class="text-light"><span class="purple">SEVEN DOLLARS,</span> <span class="cname cap">Friend</span>, that’s all it takes.</p>

                <p class="text-light">That’s about the price of a meal at McDonalds. It’s not even a FRACTION of the price of the device that you’re using to read this right now!</p>

                <p class="text-light">But that’s not all...</p>

                <p class="text-light">The Divine Tree Of Life Membership will be the most awe-inspiring and fruit-bearing material that you’ve ever purchased.</p>

                <ul class="bullet-white">
                    <li>…A newly transformed life.</li>
                    <li>…A newfound sense of direction.</li>
                    <li>…A better version of yourself.</li>
                    <li>…A true and actual purpose.</li>
                    <li>…A chance for a better future.</li>
                    <li>…And so much more!</li>
                </ul>

                <p class="text-light">We’re not just stopping there. Providing you with value is definitely a priority of ours. But so is your satisfaction, your experience, and your security…</p>

                <p class="text-light">Your purchase is and will be protected. Your trust means everything to us. And that is why we’re safeguarding you with the following OFFICIAL GUARANTEE.</p>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper guarantee text-center pt-5 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header text-light">Transformation And Life-Purpose Discovery Guarantee...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <img src="../assets/img/guarantee.png">
                <p>There is no minimum duration to this program, and you're free to cancel at any point in time. And like all other products, we are extending our support to you - if you run into any problems or questions during the program, you will have our complete, undivded attention. All you have to do is drop us an e-mail at contact@individualogist.com and our team of trained customer service experts will respond to you by the next working day.</p>

                <p>Protecting the purchases of our customers is important to us. We firmly believe in building and keeping your trust. And you have my personal guarantee that this material will help you attain the transformation you've been waiting for, and uncover your true life purpose that you seek!<p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 mx-auto text-center">
                <button class="scroll-order cta-button">Join The Tree Of Life Tribe Now!</button>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper why mt-5 mb-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header purple">Why On Earth Are We Even Doing This? I'll Spill The Beans...</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-left">
                <p>Each of us who’ve had a hand in creating the Divine Tree Of Life program have been the exact same position as you, <span class="cname cap">Friend</span>.</p>

                <p>We know what it’s like to feel lost and directionless. We understand what it’s like to feel stuck in life.</p>

                <p>I’ve known what it’s like to constantly meditate, but not feeling any different. I’ve known what it’s like to pursue spiritual journeys, only to be led astray from my true identity… My true purpose.</p>

                <p>The Tree Of Life is what helped me to figure out the things that I should’ve known about myself, but never knew. The Tree Of Life is what gave me <span class="purple">hope</span> during my darkest periods. The Tree Of Life is what led me to <span class="purple">discover the truth</span> about who I am, and what I need to do.</p>

                <img class="img-intext" src="../assets/img/dtol-9.png">

                <p>And I want to share that with you, <span class="cname cap">Friend</span>. I want you to experience the same results with individuation – by leveraging on The Tree Of Life.</p>

                <p>And as long as you click on the button below right now, we can guarantee you that your journey with the Divine Tree Of Life can begin at the small price-point or <span class="purple">just $7.</span></p>

                <p>If you decide that it isn’t for you, you can cancel your membership at any time to avoid paying the membership fee of just $37 per month.</p>

                <p>…But remember. Your Tree of Life Membership includes <span class="purple">weekly readings, predictions, and little knowledge nibbles</span> that will escalate your personal growth.</p>

                <p>It is important that you place your order quickly… Because the demand for this exclusive membership is growing, and we simply can’t guarantee that the price will always remain at $7…</p>

                <p>And when that happens, you would not get to see this exclusive, one-time price ever again… I’d hate for that to happen to you.</p>

                <p>You should also know that any future price increases will NOT affect your membership… Just as long as you seize this opportunity for yourself. Right. Now.</p>
            </div>
        </div>
    </div>
</section>
    
<section class="page-wrapper bewarned bg-blue multiborder text-shadow pt-3 pb-3">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 class="sub-header white">Be Warned, <span class="cname cap">Friend</span>... Do Not Make This Mistake.</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-left">
                <p class="text-light">There are people who do not believe in the process of spiritual encounters. There are people who dismiss the ideas of personal development…</p>

                <p class="text-light">These are individuals who I like to think of as positivity vampires… They spend their lives in pity, negativity, and toxicity. You are not a part of that group.</p>

                <p class="text-light">As indicated by your Archetype, I know for a fact that you’re better, braver, and far more <span class="purple">spiritually mature</span> than that.</p>

                <img class="img-intext" src="../assets/img/dtol-1.png">

                <p class="text-light">Yes, you could always say no to this, and never figure out your true purpose or your true direction… You could certainly continue living the life that you currently do, and pretending to be perfectly contented with whatever you have – subconsciously knowing that there’s <span class="purple">a missing piece…</span></p>

                <p class="text-light">But you know that’s NOT what you want. And that’s NOT what I want for you either.</p>

                <p class="text-light">So, don’t give up on yourself, <span class="cname cap">Friend</span>. Because I’m not giving up on you. We’re <span class="purple">not giving up</span> on you.</p>

                <p class="text-light">There is so much useful and fulfilling information in this program…</p>

                <p class="text-light">The Divine Tree Of Life program speaks volumes about you – <span class="purple">your journey, your life, your purpose.</span></p>

                <p class="text-light">This is the REAL DEAL.</p>

                <p class="text-light">Now, you’re ready to move on to the <span class="purple">NEXT STEP.</span> All you have to do now is <span class="purple">confirm your details</span> below, and at last, you will be merely one step away from receiving all the abundance, enlightenment, and wisdom the Universe has to offer.</p>
            </div>
        </div>
    </div>
</section>

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
var getCta = document.getElementsByClassName('cta-button');

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
for (i=0; i<getCta.length; i++) {
    getCta[i].href = 'http://tol.individua1.pay.clickbank.net/?cbfid=34198&cbskin=22063&name='+name+'&email='+email+'&vvar='+archetype;
} 

var minutes = $( '#set-time' ).val();
var target_date = new Date().getTime() + ((minutes * 60 ) * 1000); // set the countdown date
var time_limit = ((minutes * 60 ) * 1000);
//set actual timer
setTimeout(
  function() 
  {
    console.log( 'done' );
  }, time_limit );

var days, hours, minutes, seconds; // variables for time units
var countdown = document.getElementById("tiles"); // get tag element
getCountdown();
setInterval(function () { getCountdown(); }, 1000);

function getCountdown(){
	// find the amount of "seconds" between now and target
	var current_date = new Date().getTime();
	var seconds_left = (target_date - current_date) / 1000;
  
if ( seconds_left >= 0 ) {
   if ( (seconds_left * 1000 ) < ( time_limit / 2 ) )  {
     $( '#tiles' ).removeClass('color-full');
     $( '#tiles' ).addClass('color-half');
		} 
    if ( (seconds_left * 1000 ) < ( time_limit / 4 ) )  {
    	$( '#tiles' ).removeClass('color-half');
    	$( '#tiles' ).addClass('color-empty');
    }
	days = pad( parseInt(seconds_left / 86400) );
	seconds_left = seconds_left % 86400;
		 
	hours = pad( parseInt(seconds_left / 3600) );
	seconds_left = seconds_left % 3600;
		  
	minutes = pad( parseInt(seconds_left / 60) );
	seconds = pad( parseInt( seconds_left % 60 ) );

	// format countdown string + set tag value
	countdown.innerHTML = "<span>" + hours + ":</span><span>" + minutes + ":</span><span>" + seconds + "</span>"; 
} 
}
function pad(n) {
	return (n < 10 ? '0' : '') + n;
}    
</script>
    
    
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer-frontend.php');
include($path);
?>
