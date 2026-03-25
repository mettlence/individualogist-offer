<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha512-znmTf4HNoF9U6mfB6KlhAShbRvbt4CvCaHoNV0gyssfToNQ/9A0eNdUbvsSwOIUoJdMjFG2ndSvr0Lo3ZpsTqQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Free Archetype Reading - Individualogist.com</title>

  <!-- Google Tag Manager -->
  <script>
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
<style>
  html,
  body {
    max-width: 100%;
    overflow-x: hidden;
  }

  .nebula-animation {
    /* background-repeat: no-repeat;
    background-size: cover; */
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
    animation: zoom 15s linear infinite;
    z-index: -1;
    display: none;
  }

  .individual {
    /* background-image: linear-gradient(180deg, rgba(0, 9, 18, 0.45) 0%, #000912 93.06%), url(../assets/images/indivi-bg.png); */
    /* background: linear-gradient(180deg, rgba(0, 9, 18, 0.45) 0%, #000912 93.06%); */
    /* background-repeat: no-repeat;
    background-size: cover; */
    background: #10112F;
    padding: 30px 0px 0px;
  }

  .individual.bg-grad {
    /* background-image: linear-gradient(180deg, rgba(0, 9, 18, 0.45) 0%, #000912 93.06%), url(../assets/images/indivi-bg.png); */
    background: linear-gradient(180deg, rgba(0, 9, 18, 0.45) 40%, #10112f 100%);
    background-repeat: no-repeat;
    background-size: cover;
    padding: 64px 0px 0px;
  }

  .individual .ind-img-sec {
    background-color: #EBECFF;
    margin: 0 auto
  }

  .individual .container .row {
    margin-top: 0;
    margin-bottom: 1em;
  }

  .individual .container h1 {
    color: white;
    font-size: 40px;
  }

  .individual .container h2 {
    /* H2 Recoleta 30px */
    font-family: "Recoleta";
    font-style: normal;
    font-weight: 600;
    font-size: 30px;
    line-height: 41px;
    /* identical to box height */
    color: #FFFFFF;
  }

  .individual .container h3 {
    font-family: "Recoleta";
    font-style: normal;
    font-weight: 600;
    font-size: 32px;
    line-height: 44px;
    text-align: center;
    color: #FFFFFF;
  }

  .individual .container h5 {
    font-family: 'Cera Pro';
    font-style: normal;
    font-weight: 400;
    font-size: 30px;
    line-height: 38px;
    text-align: left;
    color: #FCA111;
  }

  .individual p {
    font-family: 'Cera Pro';
    font-style: normal;
    font-weight: normal;
    font-size: 20px;
    line-height: 28px;
    letter-spacing: 0.023em;
    /* margin: auto; */
    color: #D8D8D8;
  }

  .individual .container h6 {
    margin-bottom: 0;
    color: #FFFFFF;
  }

  .btn-indivi {
    width: 100%;
    min-height: 3em;
    background: linear-gradient(51.47deg, #5C31F6 27.75%, #BF8CFE 100%);
    border-radius: 5px;
    border: none;
    font-weight: 500
  }

  .btn-indivi:hover {
    background: linear-gradient(63.09deg, #bf8cfe -8.38%, #6169f6 39.09%, #5c31f6 90.68%);
  }

  small {
    font-family: 'Cera Pro';
  }

  .highlight {
    color: white;
  }

  .life-path,
  .archetypes {
    background: #000912;
  }

  .life-path h2 {
    /* H2 Style */
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: 500;
    font-size: 30px;
    line-height: 38px;
    text-align: center;
    color: #FFFFFF;
  }

  .archetypes h2 {
    /* H2 Recoleta 30px */
    font-family: "Recoleta";
    font-style: normal;
    font-weight: 600;
    font-size: 30px;
    line-height: 41px;
    text-align: center;
    color: #FFFFFF;
  }

  .archetypes h3 {
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: normal;
    font-size: 18px;
    line-height: 25px;
    /* or 139% */
    text-align: center;
    color: #FFFFFF;
  }

  .archetypes h4 {
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 20px;
    /* or 143% */
    text-align: center;
    letter-spacing: 0.023em;
    color: #FFFFFF;
  }

  .archetypes p {
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 20px;
    text-align: center;
    letter-spacing: 0.023em;
    color: #D8D8D8;
  }

  .archetypes .card-1 {
    background: url('../assets/images/card-1.png');
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 22em;
    padding: 2em 1em 0 1em;
    border-radius: 10px;
  }

  .archetypes .card-2 {
    background: url('../assets/images/card-2.png');
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 22em;
    padding: 2em 1em 0 1em;
    border-radius: 10px;
  }

  .archetypes .card-3 {
    background: url('../assets/images/card-3.png');
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 22em;
    padding: 2em 1em 0 1em;
    border-radius: 10px;
  }

  .text-orange {
    color: #FCA111;
  }

  ul.custom-point {
    list-style: square url("../assets/images/list-icon.svg");
  }

  ul li {
    font-family: 'Cera Pro';
    font-size: 16px;
    line-height: 24px;
    /* or 150% */
    letter-spacing: 0.023em;
    color: #FFFFFF;
  }

  .last-section {
    background: linear-gradient(#000912 0%, #000912e8 93.06%);
    margin-top: 0;
    padding-top: 40px;
  }

  .last-section ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    margin-left: 2.5em;
  }

  .last-section li {
    float: left;
    font-size: 14px;
    line-height: 30px;
  }

  .last-section li a {
    display: block;
    color: white;
    text-align: center;
    padding: 16px;
    text-decoration: none;
  }

  .last-section p {
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: normal;
    font-size: 12px;
    line-height: 20px;
    /* or 167% */
    text-align: center;
    color: #DFE6EF;
  }

  .quiz .container {
    background: #F5F7FA;
    padding: 2em 2em 3em;
  }

  .quiz .container h2 {
    /* H2 Recoleta 30px */
    font-family: "Recoleta";
    font-style: normal;
    font-weight: 600;
    font-size: 30px;
    line-height: 41px;
    /* identical to box height */
    /* Dark Navy */
    color: #20174D;
  }

  .quiz .container h6 {
    /* H6 Style */
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: normal;
    font-size: 16px;
    line-height: 25px;
    /* identical to box height, or 125% */
    /* Midnight Grey */
    color: #51596B;
  }

  .quiz .container p {
    /* Paragraph Style */
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 18px;
    text-align: center;
    letter-spacing: 0.023em;
    color: #515968;
  }


  #debt-amount-slider {
    display: flex;
    flex-direction: row;
    align-content: stretch;
    position: relative;
    width: 100%;
    height: 50px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  #debt-amount-slider::before {
    content: " ";
    position: absolute;
    height: .1em;
    width: 100%;
    width: calc(100% * (4 / 5));
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background: #323357;
  }

  #debt-amount-slider input,
  #debt-amount-slider label {
    box-sizing: border-box;
    flex: 1;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    cursor: pointer;
  }

  #debt-amount-slider label {
    display: inline-block;
    position: relative;
    width: 20%;
    height: 100%;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  #debt-amount-slider label::before {
    content: attr(data-debt-amount);
    position: absolute;
    left: 50%;
    padding-top: 10px;
    transform: translate(-50%, 45px);
    transition: all 0.15s ease-in-out;
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: normal;
    font-size: 14px;
    line-height: 18px;
    text-align: center;
    letter-spacing: 0.023em;
    color: #FFFFFF;
  }

  #debt-amount-slider label::after {
    content: " ";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border: 1px solid #DFE6EF;
    background: #AEAFD0;
    border-radius: 50%;
    pointer-events: none;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    z-index: 1;
    cursor: pointer;
    transition: all 0.15s ease-in-out;
  }

  #debt-amount-slider label.first::after {
    width: 50px;
    height: 50px;
  }

  #debt-amount-slider label.second::after {
    width: 40px;
    height: 40px;
  }

  #debt-amount-slider label.third::after {
    width: 30px;
    height: 30px;
  }

  #debt-amount-slider label.four::after {
    width: 40px;
    height: 40px;
  }

  #debt-amount-slider label.five::after {
    width: 50px;
    height: 50px;
  }

  #debt-amount-slider label:hover::after {
    transform: translate(-50%, -50%) scale(1.25);
  }

  #debt-amount-slider input {
    display: none;
  }

  #debt-amount-slider input:checked+label::before {
    font-weight: 800;
    opacity: 1;
  }

  #debt-amount-slider input:checked+label::after {
    /* border-width: 4px; */
    /* transform: translate(-50%, -50%) scale(0.75); */
    background: #1AC48B;
  }

  #debt-amount-slider input:checked~#debt-amount-pos {
    opacity: 1;
  }

  #debt-amount-slider input:checked:nth-child(1)~#debt-amount-pos {
    left: 10%;
  }

  #debt-amount-slider input:checked:nth-child(3)~#debt-amount-pos {
    left: 30%;
  }

  #debt-amount-slider input:checked:nth-child(5)~#debt-amount-pos {
    left: 50%;
  }

  #debt-amount-slider input:checked:nth-child(7)~#debt-amount-pos {
    left: 70%;
  }

  #debt-amount-slider input:checked:nth-child(9)~#debt-amount-pos {
    left: 90%;
  }

  #debt-amount-slider #debt-amount-pos {
    display: block;
    position: absolute;
    top: 55%;
    width: 15px;
    height: 20px;
    transition: all 0.20s ease-in-out;
    transform: translate(-50%, -50%);
    opacity: 0;
    z-index: 2;
    background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/242518/check-icn.svg);
    background-repeat: no-repeat
  }

  @-webkit-keyframes spin {
    from {
      transform: rotate(0deg);
      width: 24px;
      opacity: 1;
      margin-right: 12px;
    }

    to {
      transform: rotate(360deg);
      width: 24px;
      opacity: 1;
      margin-right: 12px;
    }
  }

  @keyframes spin {
    from {
      transform: rotate(0deg);
      width: 24px;
      opacity: 1;
      margin-right: 12px;
    }

    to {
      transform: rotate(360deg);
      width: 24px;
      opacity: 1;
      margin-right: 12px;
    }
  }

  @keyframes zoom {
    0% {
      transform: scale(1);
    }

    50% {
      transform: scale(1.25);
    }

    100% {
      transform: scale(1.5);
    }
  }

  form.quiz-form {
    /* background: #EBECFF; */
    border-radius: 5px;
    padding: 3em 1.5em
  }

  form.quiz-form input {
    border: none;
    border-radius: 5px;
  }

  .wrapper {
    display: inline-flex;
    /* background: #fff; */
    width: 100%;
    justify-content: space-evenly;
    border-radius: 5px;
    box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.2);
  }

  .wrapper .option {
    background: #fff;
    height: 5em;
    width: 100%;
    display: flex;
    align-items: center;
    justify-content: space-evenly;
    margin: 10px;
    border-radius: 5px;
    cursor: pointer;
    padding: 0 10px;
    transition: all 0.3s ease;
  }

  .wrapper .option .dot {
    height: 20px;
    width: 20px;
    background: #d9d9d9;
    border-radius: 50%;
    position: relative;
  }

  .wrapper .option .dot::before {
    position: absolute;
    content: "";
    top: 4px;
    left: 4px;
    width: 12px;
    height: 12px;
    background: #5c31f6;
    border-radius: 50%;
    opacity: 0;
    transform: scale(1.5);
    transition: all 0.3s ease;
  }

  input[type="radio"] {
    display: none;
  }

  #option-1:checked:checked~.option-1,
  #option-2:checked:checked~.option-2,
  .option-1:hover,
  .option-2:hover {
    background: linear-gradient(51.47deg, #5C31F6 27.75%, #BF8CFE 100%);
  }

  #option-1:checked:checked~.option-1 .dot,
  #option-2:checked:checked~.option-2 .dot {
    background: #fff;
  }

  #option-1:checked:checked~.option-1 .dot::before,
  #option-2:checked:checked~.option-2 .dot::before {
    opacity: 1;
    transform: scale(1);
  }

  .wrapper .option span {
    font-size: 20px;
    color: #808080;
  }

  #option-1:checked:checked~.option-1 span,
  #option-2:checked:checked~.option-2 span,
  .option-1:hover span,
  .option-2:hover span {
    color: #fff;
  }

  select {
    background-image:
      linear-gradient(45deg, transparent 50%, #51596B 60%),
      linear-gradient(135deg, #51596B 40%, transparent 50%) !important;
    background-position:
      calc(100% - 30px) 14px,
      calc(100% - 20px) 14px,
      100% 0;
    background-size:
      10px 10px,
      10px 10px;
    background-repeat: no-repeat;
    -webkit-appearance: none;
    -moz-appearance: none;
  }

  @keyframes MOVE-BG {
    from {
      transform: translateX(0);
    }

    to {
      transform: translateX(-187%);
    }
  }

  .bio-box {
    background: #ffffff14;
    padding: 1em;
    border-radius: 10px;
  }

  span {
    color: #FFFFFF;
  }

  .bg-darkblue {
    background: #14153E;
    text-align: left;
  }

  .title-container {
    position: relative;
    text-align: center;
    color: white;
    margin-bottom: 3em;
  }

  .title-container img {
    width: 100%;
    min-height: 4.8em;
  }

  .centered {
    position: absolute;
    width: 100%;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-transform: capitalize;
  }

  #nav-btn2 {
    font-family: "Cera Pro";
    font-style: normal;
    font-weight: 500;
    font-size: 18px;
    line-height: 19px;
    color: #ffffff;
    padding: 15px 30px;
    border: none;
    background: linear-gradient(63.09deg, #5c31f6 -8.38%, #6169f6 39.09%, #bf8cfe 90.68%);
    border-radius: 6px;
  }

  /* Dashed border */
  hr.dashed {
    border-top: 3px dashed #bbb;
    margin: 2em 10em;
  }

  .archetype,
  .username {
    text-transform: capitalize !important;
  }

  #step2,
  #step3,
  #step4,
  #step5 {
    display: none;
  }

  .bg-darkblue img.mb-4 {
    width: 100% !important;
  }

  h1 .text-orange.username {
    font-size: 1.3em;
  }

  /* Small devices (portrait tablets and large phones, 600px and up) */
  @media only screen and (max-width: 600px) {
    .last-section ul {
      margin: 0;
    }

    .last-section li {
      float: none;
    }

    .title-container img {
      height: 10em;
    }

    .title-container img.long-title {
      height: 18em;
    }

    .custom-point {
      margin: 1em;
    }

    .card-1,
    .card-2,
    .card-3 {
      margin-bottom: 1em;
    }

    .wrapper {
      display: block;
      width: 93%;
    }
  }
</style>

<style>
  /* Style the video: 100% width and height to cover the entire window */
  #myVideo {
    position: fixed;
    right: 0;
    bottom: 0;
    min-width: 100%;
    min-height: 100%;
    z-index: -1;
  }
</style>
<!-- The video -->
<video autoplay muted loop id="myVideo">
  <source src="../assets/video/bg-video.mp4" type="video/mp4">
</video>

<div class="header" style="background: linear-gradient(#000912 0%, #000912e8 93.06%);background-color: white">
  <div class="container">
    <div class="row">
      <div class="col-sm-12 text-center">
        <img src="../assets/images/logo.svg" style="margin: 1em;">
      </div>
    </div>
  </div>
</div>

<?php $archetype = $_GET['archetype'];
switch (strtolower($archetype)) {
  case "caregiver":
    include 'template-parts/caregiver.php';
    break;
  case "creator":
    include 'template-parts/creator.php';
    break;
  case "explorer":
    include 'template-parts/explorer.php';
    break;
  case "hero":
    include 'template-parts/hero.php';
    break;
  case "innocent":
    include 'template-parts/innocent.php';
    break;
  case "jester":
    include 'template-parts/jester.php';
    break;
  case "lover":
    include 'template-parts/lover.php';
    break;
  case "magician":
    include 'template-parts/magician.php';
    break;
  case "member":
    include 'template-parts/member.php';
    break;
  case "outlaw":
    include 'template-parts/outlaw.php';
    break;
  case "ruler":
    include 'template-parts/ruler.php';
    break;
  case "sage":
    include 'template-parts/sage.php';
    break;
  default: //Any page that is not defined in this switch will lead to this page
    include 'template-parts/caregiver.php';
}
?>

<footer class="last-section">
  <div class="container">
    <div class="row mx-auto text-center">
      <div class="col-sm-8 mx-auto">
        <img src="../assets/images/footer-logo.svg">
        <ul>
          <li>
            <a href="/">Home</a>
          </li>
          <li>
            <a href="https://individualogist.com/terms-and-conditions">Terms and Conditions</a>
          </li>
          <li>
            <a href="https://individualogist.com/privacy-policy">Privacy Policy</a>
          </li>
          <li>
            <a href="https://individualogist.com/reviews">Reviews</a>
          </li>
          <li>
            <a href="https://support.individualogist.com/">Support</a>
          </li>
          <li>
            <a href="https://individualogist.com/contact">Contact</a>
          </li>
        </ul>
      </div>
      <div class="col-sm-12 mx-auto pt-4" style="border-top: 1px solid;">
        <p class="mb-4">This site is not a part of the Facebook website or Facebook Inc.<br>Additionally, this site is NOT endorsed by Facebook in any way. FACEBOOK is a trademark of FACEBOOK, INC.</p>
        <p>© Copyright 2022. Individualogist.com. All Rights Reserved.</p>
      </div>
    </div>
  </div>
</footer>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="../assets/js/cookies-management.js"></script>
<script>
  $(document).ready(() => {
    let searchParams = new URLSearchParams(window.location.search)
    console.log(searchParams.get('email'))

    //archetype
    if (searchParams.has('archetype')) {
      $('.archetype').text(searchParams.get('archetype'))
    } else if (getCookie('logic_archetype') !== '') {
      $('.archetype').text(getCookie('logic_archetype'))
    } else {
      $('.archetype').text('Caregiver')
    }

    //name
    if (searchParams.has('name')) {
      $('.username').text(searchParams.get('name'))
    } else if (getCookie('logic_first_name') !== '') {
      $('.username').text(getCookie('logic_first_name'))
    } else {
      $('.username').text('Friend')
    }

    //email
    if (searchParams.has('email')) {
      $('.email').text(searchParams.get('email'))
    } else if (getCookie('logic_email') !== '') {
      $('.email').text(getCookie('logic_email'))
    } else {
      $('.email').text('your@mail.com')
    }
  })

  function nextReading(prev, next) {
    $(`.btn-${prev}`).hide()

    if (next == 5) {
      $('#stage-1').fadeOut()
      $(`#step${next}`).fadeIn();
      $('html, body').animate({
        scrollTop: $(`#top`).offset().top
      }, 1000);
    } else if (next == 6) {
      var currentURL = new URL(window.location.href);
      window.location.href = currentURL.searchParams.get("utm_source") ? "https://individualogist.com/offer/paa/v2/reading?archetype=" + getCookie('logic_archetype') + '&name=' + getCookie('logic_first_name') + "&email=" + getCookie('logic_email') + "&utm_source=" + currentURL.searchParams.get("utm_source") + "&utm_medium=" + currentURL.searchParams.get("utm_medium") + "&utm_campaign=" + currentURL.searchParams.get("utm_campaign") + "&utm_content=" + currentURL.searchParams.get("utm_content") : "https://individualogist.com/offer/paa/v2/reading?archetype=" + getCookie('logic_archetype') + '&name=' + getCookie('logic_first_name') + "&email=" + getCookie('logic_email')
    } else {
      $(`#step${next}`).fadeIn();
      $('html, body').animate({
        scrollTop: $(`#step${next}`).offset().top
      }, 1000);
    }
  }
</script>
</body>

</html>