<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Individualogist.com | Loading</title>

  <!-- Styles -->
  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700,900&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="../assets/image/favicon.png">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link type='text/css' rel='stylesheet' href='../../../assets/css/style.css?v=1.2'>
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <!-- jQuery library -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <style>
    body,
    .loading-container {
      background: #f8f8f8;
    }

    i {
      font-family: 'FontAwesome';
      font-style: normal;
    }

    .header {
      font-size: 2em;
      font-weight: 900
    }

    .indi-logo{filter:none!important;width:250px!important}  
      
    .indi-logo img {
      width: 100%;
      max-width: 250px!important
    }

    .drop {
      color: #444;
      font-weight: 700;
      text-transform: none;
      text-shadow: none;
      font-size: 1.5em
    }

    #countdown {
      font-size: 1.2em;
      text-shadow: none
    }

    .start-reading {
      width: 100%;
      max-width: 300px;
      color: #fff;
      text-transform: uppercase;
      letter-spacing: 3px;
      background: #a83893;
      box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
      color: #fff !important;
      font-weight: 700;
      padding: 15px 32px;
      text-decoration: none;
      display: block;
      font-size: 1em;
      margin: 0 auto;
      clear: both;
      border-radius: 100px;
      width: 100%;
      cursor: pointer;
      text-align: center;
    }

    .start-reading:hover {
      transition: 0.5s;
      background: gold;
      color: #222;
      text-decoration: none;
      text-decoration: none;
    }

    .dontclose {
      font-weight: 700;
      text-transform: uppercase;
      letter-spacing: 2px;
      color: red
    }

    .header {
      color: #333
    }

    .loading-p {
      color: #666
    }

    @media only screen and (max-width:768px) {
      .header {
        font-size: 1.5em
      }

      .drop {
        font-size: 1.2em;
      }

      #countdown {
        font-size: 1em
      }
    }

    /* Loading CSS */
    .lds-ellipsis {
      display: inline-block;
      position: relative;
      width: 64px;
      height: 64px
    }

    .lds-ellipsis div {
      position: absolute;
      top: 27px;
      width: 11px;
      height: 11px;
      border-radius: 50%;
      background: #a83893;
      animation-timing-function: cubic-bezier(0, 1, 1, 0)
    }

    .lds-ellipsis div:nth-child(1) {
      left: 6px;
      animation: lds-ellipsis1 .6s infinite
    }

    .lds-ellipsis div:nth-child(2) {
      left: 6px;
      animation: lds-ellipsis2 .6s infinite
    }

    .lds-ellipsis div:nth-child(3) {
      left: 26px;
      animation: lds-ellipsis2 .6s infinite
    }

    .lds-ellipsis div:nth-child(4) {
      left: 45px;
      animation: lds-ellipsis3 .6s infinite
    }

    @keyframes lds-ellipsis1 {
      0% {
        transform: scale(0)
      }

      100% {
        transform: scale(1)
      }
    }

    @keyframes lds-ellipsis3 {
      0% {
        transform: scale(1)
      }

      100% {
        transform: scale(0)
      }
    }

    @keyframes lds-ellipsis2 {
      0% {
        transform: translate(0, 0)
      }

      100% {
        transform: translate(19px, 0)
      }
    }
  </style>

  <!-- Google Tag Manager -->
  <script defer>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-TGKFM45');
  </script>
  <!-- End Google Tag Manager -->
</head>

<body>
  <div class="loading-container mt-3 mb-3">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 mx-auto">
          <div class="indi-logo">
            <img src="https://individualogist.com/lp/assets/image/individualogist-logo2.png">
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center">
      <div class="row mt-3">
        <div class="col-sm-12 mx-auto">
          <h1 class="header">Loading Checkout Page...</h1>
          <p class="dontclose">(Don't close this page!)</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 mx-auto">
          <div class="lds-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
          </div>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12 mx-auto">
          <!--                            <h3 class="warning">WARNING:</h3>-->
          <h2 class="drop">Please wait while we redirect you in <span id="countdown">5</span> seconds...</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12 mx-auto">
          <p class="loading-p">You are being taken to our secure order form...</p>
        </div>
      </div>
      <!-- <div class="row">
        <div class="col-sm-12 mx-auto">
          <a class="btn start-reading">Start Reading <i class="far fa-play-circle"></i></a>
        </div>
      </div> -->
    </div>
  </div>

  <!-- Scripts -->
  <script>
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

    var currentUrl = new URL(window.location.href);
    var name = getCookie('name') ? getCookie('name') : currentUrl.searchParams.get('name');
    var archetype = getCookie('archetype') ? getCookie('archetype') : currentUrl.searchParams.get('archetype');
    var reading = getCookie('reading') ? getCookie('reading') : currentUrl.searchParams.get('reading');
    var gender = getCookie('gender');
    var birthday = getCookie('birthday');
    var horoscope = getCookie('horoscope');
    var element = getCookie('element');
    var archetype = getCookie('archetype');
    var email = getCookie('email') ? getCookie('email') : currentUrl.searchParams.get('email');
    var vtid = currentUrl.searchParams.get('utm_content') ? currentUrl.searchParams.get('utm_content') : 'discover-no-email';
    var url = "";
    var ageCategory = "";
    var genderCategory = "";

    function getAge(birthDateString) {
      var today = new Date();
      var birthDate = new Date(birthDateString);
      var age = today.getFullYear() - birthDate.getFullYear();
      var m = today.getMonth() - birthDate.getMonth();
      if (m < 0 || (m === 0 && today.getDate() < birthDate.getDate())) {
        age--;
      }
      return age;
    }

    var age = getAge(birthday);
    if (age <= 27) {
      ageCategory = "athlete stage";
    } else if (age <= 45) {
      ageCategory = "warrior stage";
    } else if (age >= 46) {
      ageCategory = "statement stage";
    }

    if (gender == "male") {
      genderCategory = "anima";
    } else {
      genderCategory = "animus";
    }

    switch (archetype.toLowerCase()) {
      case "caregiver":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "creator":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=27121&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "explorer":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28787&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "hero":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28788&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "innocent":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28789&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "jester":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28790&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "lover":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28791&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "magician":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28792&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "member":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28793&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "outlaw":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28794&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "ruler":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28795&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      case "sage":
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=30514&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
        break;
      default:
        url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=${vtid}`;
    }

    $.ajax({
      url: "https://member.individualogist.com/api/maropost/getByEmail",
      headers: {
        "Content-Type": "application/json",
        "Access-Control-Allow-Methods": "POST",
      },
      data: {
        email: email,
      },
      type: "GET",
      success: function(response) {
        if (response.status == "OK") {
          $.ajax({
            url: "https://member.individualogist.com/api/maropost/updateContact",
            data: {
              list_id: 21,
              first_name: name,
              email: email,
              name: name,
              gender: gender,
              birthday: birthday,
              horoscope: horoscope,
              element: element,
              archetype: archetype,
              uid: response.data.id
            },
            type: "POST",
            success: function(response) {}
          });
        } else {
          $.ajax({
            url: "https://member.individualogist.com/api/maropost/addContact",
            data: {
              list_id: 21,
              first_name: name,
              email: email,
              name: name,
              gender: gender,
              birthday: birthday,
              horoscope: horoscope,
              element: element,
              archetype: archetype
            },
            type: "POST",
            success: function(response) {},
            error: function(a) {
              console.log(a),
                $(".errorMsg").html(
                  "It seems like there's something wrong with your e-mail address - please try a different e-mail!"
                );
            },
          });
        }
      },
      error: function(err) {
        console.log(err);
      },
    });

    var seconds = 3;

    function countdown() {
      seconds = seconds - 1;
      if (seconds < 0) {
        window.location.href = url;
      } else {
        document.getElementById("countdown").innerHTML = seconds;
        window.setTimeout("countdown()", 1000);
      }
    }
    countdown();
    if (getCookie('name')) {
      $('.name').html(getCookie('name'));
    }
  </script>
</body>
<html>