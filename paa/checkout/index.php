<?php
$PageTitle = "Individualogist.com | Checkout Confirmation";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>
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

  .indi-logo {
    filter: drop-shadow(1px 1px 1px #000)
  }

  .indi-logo img {
    width: 100%;
    max-width: 200px
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

  body {
    font-family: 'Raleway', sans-serif;
    margin: 0;
  }

  .wrapper {
    position: absolute;
    top: 50%;
    left: 50%;
    width: 300px;
    text-align: center;
    transform: translateX(-50%);
  }

  .spanner {
    position: absolute;
    top: 50%;
    left: 0;
    background: #2a2a2a;
    width: 100%;
    display: block;
    text-align: center;
    height: 300px;
    color: #FFF;
    transform: translateY(-50%);
    z-index: 1000;
    visibility: hidden;
  }

  .overlay {
    position: fixed;
    width: 100%;
    height: 100%;
    background: rgba(0, 0, 0, 0.5);
    visibility: hidden;
  }

  .loader,
  .loader:before,
  .loader:after {
    border-radius: 50%;
    width: 2.5em;
    height: 2.5em;
    -webkit-animation-fill-mode: both;
    animation-fill-mode: both;
    -webkit-animation: load7 1.8s infinite ease-in-out;
    animation: load7 1.8s infinite ease-in-out;
  }

  .loader {
    color: #ffffff;
    font-size: 10px;
    margin: 80px auto;
    position: relative;
    text-indent: -9999em;
    -webkit-transform: translateZ(0);
    -ms-transform: translateZ(0);
    transform: translateZ(0);
    -webkit-animation-delay: -0.16s;
    animation-delay: -0.16s;
  }

  .loader:before,
  .loader:after {
    content: '';
    position: absolute;
    top: 0;
  }

  .loader:before {
    left: -3.5em;
    -webkit-animation-delay: -0.32s;
    animation-delay: -0.32s;
  }

  .loader:after {
    left: 3.5em;
  }

  @-webkit-keyframes load7 {

    0%,
    80%,
    100% {
      box-shadow: 0 2.5em 0 -1.3em;
    }

    40% {
      box-shadow: 0 2.5em 0 0;
    }
  }

  @keyframes load7 {

    0%,
    80%,
    100% {
      box-shadow: 0 2.5em 0 -1.3em;
    }

    40% {
      box-shadow: 0 2.5em 0 0;
    }
  }

  .show {
    visibility: visible;
  }

  .spanner,
  .overlay {
    opacity: 0;
    -webkit-transition: all 0.3s;
    -moz-transition: all 0.3s;
    transition: all 0.3s;
  }

  .spanner.show,
  .overlay.show {
    opacity: 1
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

  .vertical-center {
    min-height: 100%;
    /* Fallback for browsers do NOT support vh unit */
    min-height: 100vh;
    /* These two lines are counted as one :-)       */

    display: flex;
    align-items: center;
  }
</style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 mx-auto">
        <div class="indi-logo">
          <img src="../img/individualogist-logo2.png">
        </div>
      </div>
    </div>
  </div>

  <div class="container text-center my-auto">
    <div class="row mt-3">
      <div class="col-sm-12 mx-auto">
        <h1 class="header">Loading...</h1>
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
        <h2 class="drop">Please wait while we redirect you to your special offer...</h2>
      </div>
    </div>
  </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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

  $(document).ready(function() {
    $("div.spanner").addClass("show");
    $("div.overlay").addClass("show");
    var currentUrl = new URL(window.location.href);

    var name = getCookie('logic_first_name');
    var email = getCookie('logic_email');
    var archetype = getCookie('logic_archetype');
    var utm_content = currentUrl.searchParams.get('utm_content') ? currentUrl.searchParams.get('utm_content') : '';
    var identifier = getCookie('logic_id') ? getCookie('logic_id') : '';
    var cbfid = '';

    //cbfid based on archetype
    if (archetype == 'creator') {
      cbfid = 27121;
    } else if (archetype == 'explorer') {
      cbfid = 28787;
    } else if (archetype == 'hero') {
      cbfid = 28788;
    } else if (archetype == 'innocent') {
      cbfid = 28789;
    } else if (archetype == 'jester') {
      cbfid = 28790;
    } else if (archetype == 'lover') {
      cbfid = 28791;
    } else if (archetype == 'magician') {
      cbfid = 28792;
    } else if (archetype == 'member') {
      cbfid = 28793;
    } else if (archetype == 'outlaw') {
      cbfid = 28794;
    } else if (archetype == 'ruler') {
      cbfid = 28795;
    } else if (archetype == 'sage') {
      cbfid = 30514;
    } else {
      cbfid = 28769; // caregiver
    }

    var purchaseURL = "http://paa-" + (archetype ? archetype.substring(0, 3) : 'car') + ".individua1.pay.clickbank.net/?cbfid=" + cbfid + "&cbskin=28270&cbtimer=68&name=" + (name ? name : 'dummy') + "&email=" + (email ? email : 'dummy@mail.com') + "&cbexit=194&vtid=" + currentUrl.searchParams.get('utm_content') + "&identifier=" + getCookie('logic_id');
    var confirmURL = "https://individualogist.com/offer/paa/confirmation?name=" + (name ? name : '') + "&email=" + (email ? email : '') + "&utm_content=" + utm_content + "&identifier=" + identifier;
    setTimeout(function() {

      if (archetype != 'undefined' && archetype != '') {
        window.location.href = purchaseURL
        //console.log(archetype)
      } else {
        window.location.href = confirmURL
      }
    }, 2000)
  });
</script>

</html>