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

$(function() {
  $("#cont-button").on('click',function() {
      $(this).hide();
      $("#cont-reading").show();
      $('html,body').animate({
        scrollTop: $("#cont-reading").offset().top},300);
      });
});

$(function() {
  $("#sales-button").on('click',function() {
      $(this).hide();
      document.cookie = setCookie('freereading', 'yes') + '100';
      $("#premium").show();
      $('html,body').animate({
        scrollTop: $("#premium").offset().top},300);
      });
  });

  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var panel = this.nextElementSibling;
  if (panel.style.maxHeight){
  panel.style.maxHeight = null;
  } else {
  panel.style.maxHeight = panel.scrollHeight + "px";
  }
  });
  }

// Check and set user progress
function progTrack() {
    var path = document.location.pathname;
    var parsePath = path.match(/([^\/]*)\/*$/)[1];
    setCookie('progTrack', parsePath, '100');
}

//Personalization
function personalize() {
    var name = document.getElementsByClassName('name');
    var email = document.getElementsByClassName('email');
    var archetype = document.getElementsByClassName('archetype');
    var date = document.getElementsByClassName('date');
    
    var getName = getCookie('logic_first_name');
    var getEmail = getCookie('logic_email');
    var getArchetype = getCookie('logic_archetype');
    var getDate = getCookie('aicDate');
        
    var i;
    for (i=0; i<name.length; i++) {
        name[i].innerHTML = getCookie('logic_first_name');
    }
    for (i=0; i<email.length; i++) {
        email[i].innerHTML = getCookie('logic_email');
    }
    for (i=0; i<archetype.length; i++) {
        archetype[i].innerHTML = getCookie('logic_archetype');
    }
    
    // Check and set cookie date for archetypal initiation cycle
    if (document.cookie.indexOf("aicDate") >= 0) {
        for (i=0; i<date.length; i++) {
        date[i].innerHTML = getCookie('aicDate');
        }
    } else {
        var dateVisited = new Date();
        dateVisited.setDate(dateVisited.getDate() + 7);
        var dateMsg = dateVisited.getDate() +'/'+ (dateVisited.getMonth()+1) +'/'+dateVisited.getFullYear();
        setCookie('aicDate', dateMsg, '100');
    }
    
//    document.getElementById('splashCont').href = '#';    
    document.getElementById('aicCont').href = '/offer/paa/reading-v2/?name='+getName+'&email='+getEmail+'&archetype='+getArchetype;
}

// Check expiry for AIC
function checkAic() {
    var dateNow = new Date();
    var dateParse = dateNow.getDate() + '/' + (dateNow.getMonth()+1) +'/'+dateNow.getFullYear();
    var getAic = getCookie('aicDate');
    if (getAic == '') {
        console.log('AIC Data Not Found');
        document.getElementById('redirectSplash').style.display = 'none';
        document.getElementById('aicSplash').style.display = 'none';
    } else if (dateParse > getAic) {
        console.log('AIC Has Already Commenced');
        document.getElementById('aicSplash').style.display = 'block';
        document.getElementById('redirectSplash').style.display = 'none';
    } else {
        console.log('AIC Is Still In Play');
        document.getElementById('aicSplash').style.display = 'none';
        document.getElementById('redirectSplash').style.display = 'block';
    }
}

$('#splashCont').click(function() {
    $('#redirectSplash').hide(300);
    $('.letterhead').hide(300);
    $('html,body').animate({
    scrollTop: $('body').offset().top},300);
});

//Set logic cookie from parameter
function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
}

var pName = getParameterByName('name');
var pEmail = getParameterByName('email');
var pArchetype = getParameterByName('archetype');

if (pName) {
    setCookie('logic_first_name', pName, '100');
} 
if (pEmail) {
    setCookie('logic_email', pEmail, '100');
}
if (pArchetype) {
    setCookie('logic_archetype', pArchetype, '100');
}