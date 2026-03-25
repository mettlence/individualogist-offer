<!DOCTYPE html>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../assets/css/style.css">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
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

  .individual .container h4 {
    font-family: 'Cera Pro';
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
    font-size: 20px;
    line-height: 28px;
    /* or 150% */
    letter-spacing: 0.023em;
    color: #D8D8D8
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
    min-height: 6em;
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

  .card-testimonial {
    background: linear-gradient(90deg, rgba(16, 69, 148, 1) 0%, rgba(25, 154, 141, 1) 100%);
    box-shadow: none;
    border: none;
    padding: 2.5em;
  }

  .sfd-cta {
    width: 100%;
    display: block;
    /* max-width: 800px; */
    position: relative;
    margin: 1em auto;
    background: linear-gradient(45deg, #842ac2, #420f65);
    box-shadow: 0 5px 15px rgb(0 0 0 / 15%);
    border-radius: 0.5em;
    padding: 1em;
    animation: pulse-purple 2s infinite;
  }

  .sfd-cta:hover {
    transform: scale(1.05);
    background: linear-gradient(45deg, #420f65, #824ac2);
    transition: 0.4s all ease-out;
  }

  .stretched-link:after {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 1;
    pointer-events: auto;
    content: "";
    background-color: rgba(0, 0, 0, 0);
  }

  .glow {
    text-shadow: 0 0 15px #fff, 0 0 20px #fff;
  }

  .paav2-cta {
    background: linear-gradient(45deg, #842ac2, #420f65);
    box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
    border-radius: .5em;
    padding: 1em;
    width: 100%;
    margin: 2em auto
  }

  .reg-price {
    font-size: 2em !important;
    line-height: 1em !important;
    text-align: center;
    font-weight: 700 !important;
    color: #fff !important
  }

  .security-text {
    font-size: 11px !important;
    line-height: 1 !important;
    color: #fff !important;
  }

  .cta-btn {
    white-space: normal;
    margin: 1em auto;
    border-radius: 100px;
    background: red;
    color: #fff;
    text-transform: uppercase;
    box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
    font-weight: 700;
    padding: .5em 1em;
    display: block;
    font-size: 1.5em;
  }

  .cta-btn:hover {
    color: #333;
    transition: .4s;
    -webkit-transition: .4s;
    background: gold
  }

  .cta-link:hover {
    color: #fff
  }

  .payment-options {
    margin: 1em auto;
    display: inline-block;
    position: relative;
    max-width: 250px;
    width: 100%
  }

  .paav2-cover {
    position: relative;
    display: inline-block;
    height: auto;
    width: 100%
  }

  .cta-guarantee {
    width: 50px;
    height: 50px;
    position: relative;
    margin: 0 auto;
    display: inline-block
  }

  .paav2-cta:hover {
    transition: .4s;
    transform: scale(1.05)
  }

  .cta-link {
    color: #fff;
    text-decoration: underline;
    display: block;
    margin: 1em auto
  }

  .paa-items {
    border-radius: .5em;
    filter: drop-shadow(0 5px 15px rgba(0, 0, 0, .15))
  }

  .push-down {
    margin-top: 3em
  }

  .glow {
    text-shadow: 0 0 15px #fff, 0 0 20px #fff
  }

  @media only screen and (max-width:768px) {
    .push-down {
      margin-top: 0
    }

    .cta-btn {
      font-size: 1.3em
    }
  }

  @keyframes pulse-red {
    0% {
      transform: scale(.95);
      box-shadow: 0 0 0 0 rgba(255, 82, 82, .7)
    }

    70% {
      transform: scale(1);
      box-shadow: 0 0 0 10px rgba(255, 82, 82, 0)
    }

    100% {
      transform: scale(.95);
      box-shadow: 0 0 0 0 rgba(255, 82, 82, 0)
    }
  }

  .product-img {
    width: 100%;
    display: block;
    position: relative;
    margin: 0.5em auto;
    max-width: 500px;
  }

  ul.fa-ul li i {
    color: yellow;
  }

  .highlight-point {
    font-family: 'Recoleta';
    font-weight: 600;
    color: #ffffff;
  }

  .text-red {
    color: red;
  }

  /* accordian QA */
  .accordion .card {
    background-color: transparent;
    border-bottom: 1px solid !important;
  }

  .accordion button {
    font-family: "Cera Pro";
    color: white;
    font-weight: 500;
    padding-left: 0;
    font-size: 20px;
  }

  .accordion button:hover,
  .accordion .card-body:hover {
    text-decoration: none;
    color: #ffffff9e;
  }

  .individual .accordion .card .card-body {
    font-family: "Cera Pro";
    color: #ffffff;
    font-size: 14px !important;
    line-height: 18px !important;
    letter-spacing: 0.023em;
  }

  .btn-link::after {
    content: "\f107";
    color: #FFFFFF;
    right: 0px;
    position: absolute;
    font-family: "FontAwesome"
  }

  .btn-link[aria-expanded="true"]::after {
    content: "\f106";
  }

  .sales-img {
    width: 100%;
    margin: 1em auto;
    display: block;
  }

  .img-mw600 {
    max-width: 600px;
    display: block;
    margin: auto;
    width: 100%
  }

  .slash-price-title {
    margin-bottom: 0;
    font-size: 1em;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-weight: 700;
    color: red;
    opacity: .6;
  }

  .slash-price {
    font-size: 2em !important;
    color: red !important;
    opacity: .8 !important;
    text-decoration: line-through;
    line-height: 1;
  }

  .final-price-title {
    text-transform: uppercase !important;
    letter-spacing: 1px !important;
    font-weight: 700 !important;
    margin-bottom: 0;
  }

  .final-price {
    font-size: 3em !important;
    line-height: 1 !important;
  }

  .big-cta-btn {
    background: linear-gradient(45deg, #842ac2, #420f65);
    border: none;
    font-size: 2em;
    padding: 0.5em 1em;
    display: block;
    position: relative;
    max-width: 700px;
    color: #fff;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    margin: 0.5em auto;
    box-shadow: 0 2px 8px rgb(0 0 0 / 50%);
    animation: pulse-purple 2s infinite
  }

  .big-cta-btn:hover {
    background: linear-gradient(45deg, #420f65, #842ac2);
    transition: .4s;
    -webkit-transition: .4s;
    color: #fff;
    opacity: .9;
    box-shadow: 0 6px 15px rgb(0 0 0 / 50%);
  }

  .big-cta-link {
    display: block;
    position: relative;
    margin: 0.5em auto;
    font-weight: 700;
    font-family: 'Montserrat', sans-serif;
    color: #7d28ba;
    font-size: 1.2em;
  }

  .big-cta-link:hover {
    color: #47126c;
    transition: .4s;
    -webkit-transition: .4s;
  }

  .big-payment-options {
    display: block;
    position: relative;
    margin: auto;
    width: 100%;
    max-width: 300px;
  }

  @keyframes pulse-red {
    0% {
      transform: scale(0.95);
      box-shadow: 0 0 0 0 rgba(255, 82, 82, 0.7);
    }

    70% {
      transform: scale(1);
      box-shadow: 0 0 0 10px rgba(255, 82, 82, 0);
    }

    100% {
      transform: scale(0.95);
      box-shadow: 0 0 0 0 rgba(255, 82, 82, 0);
    }
  }

  @keyframes pulse-purple {
    0% {
      transform: scale(0.95);
      box-shadow: 0 0 0 0 rgba(142, 68, 173, 0.7);
    }

    70% {
      transform: scale(1);
      box-shadow: 0 0 0 10px rgba(142, 68, 173, 0);
    }

    100% {
      transform: scale(0.95);
      box-shadow: 0 0 0 0 rgba(142, 68, 173, 0);
    }
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
      height: 15em;
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

<div class="individual bg-grad pb-3">
  <!-- <img src="../assets/images/indivi-bg.png" class="nebula-animation"> -->
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <h1 id="heading">You Possess <span class="text-orange">An Incredible Superpower! But...</span></h1>
        <div class="text-left">
          <p><span class="username"></span>, even though you've made some remarkable progress in your life...</p>
          <p>There is a big part of you that's yearning for something MORE. Perhaps you're living pay cheque to pay cheque, and you're not experiencing the abundance you've always yearned for.</p>
          <p>Perhaps there's an overwhelming sense of loneliness and emptiness, finding it difficult to connect with others.</p>
          <p>Or... Perhaps <span class="text-orange">you thought you'd be a lot farther ahead by now.</span></p>
          <p>It's NOT your fault, <span class="username"></span>... And here's why.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">Your <span class="text-orange">dreams of abundance, happiness, and direction</span> will never be within reach, until you do this...</h3>
        </div>
        <p>Let's agree on one thing - wealthy millionaires and famous actors are amongst the most abundant individuals on the planet.</p>
        <p>By their own right, these different groups of individuals have ALL achieved the heavily coveted "abundance"... Whether it's money, fame, happiness... They've nailed it!</p>
        <p><span class="text-orange">But how ... ?</span></p>
        <p>...Is it <span class="text-orange">SHEER LUCK</span> that has brought these fortunate individuals to encounter such marvellous rewards?</p>
        <p>...Is it <span class="text-orange">THE LAW OF ATTRACTION</span> that has helped them manifest their deepest desires?</p>
        <p>...Is there some <span class="text-orange">HIDDEN SECRET</span> that they're deliberately keeping to themselves, while they watch the rest of us struggle?</p>
        <p>Now, here's the hard truth.</p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">They discovered this one, <span class="text-orange">strange thing "Suppressing" their potential</span></h3>
        </div>
        <p>Some way, some how, perhaps by chance or destiny, they've all "stumbled" upon a silent, secret "resistor" LURKING within themselves. A quiet killer of abundance.</p>
        <p>A secret that's literally <span class="text-orange">STOPPING ALMOST EVERYONE</span> from maximizing their true potential... From creating the life of their desires.</p>
        <p><span class="text-orange">INCLUDING YOU!</span></p>
        <p>Feeling skeptical? Uncertain...? Confused...?</p>
        <p>In just a moment, I'm going to share with you this hidden, silent killer of YOUR abundance. The very same "resistor" that abundant individuals have somehow conquered to transform their lives...</p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">Before we get into that, <span class="text-orange">let's get one thing straight...</span></h3>
        </div>
        <p>Every individual across the face of the planet, whether you're a <span class="archetype"></span>, a plumber, or Tom Cruise - every individual faces adversity... Resistance that holds them back from being successful.</p>
        <p>Resistance that stems from the conscious mind's natural sense of <span class="text-orange">BALANCE</span>.</p>
        <p>Analytical psychologists and individuation practitioners like to call it <span class="text-orange">homeostasis</span>.</p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">The true resistance <span class="text-orange">preventing you from transformation</span></h3>
        </div>
        <p>Homeostasis is the true resistance of change. It is the brain's warning system that you're stepping into a realm of discomfort, and it wants to retract you back, hold you back into a state of familiarity.</p>
        <p>That's why no matter how hard you try, no matter what you do differently...</p>
        <p>You're always finding yourself running around in circles, expending all your energy, only to find yourself back at SQUARE ONE.</p>
        <p>It's like a part of your brain wants to transform. It wants to undergo a breakthrough, but at the same time it's holding itself back!</p>
        <p>Think of it as the mind's self-regulating thermostat that keeps your mind in a "lukewarm" state.</p>
        <p>The worst part? All these internal battles take place unbeknownst to you, because it happens in your subconscious mind.</p>
        <p>So, until you learn to consciously correct your mind's self-regulating thermostat... Your energy, happiness, abundance will constantly remain in this "lukewarm" state.</p>
        <p><span class="text-orange">Now, in order to correct homeostasis, we have to first understand how it works</span></p>
        <p>Homeostasis is triggered by a little almond-shaped part of your brain called the amygdala. The little part that's responsible for the response and memory of fear.</p>
        <img src="../assets/images/Amygdala.png" class="sales-img">
        <p>So whether you're trying to manifest your desires, correct your behaviours, seize a new opportunity, undergo a journey of self discovery...</p>
        <p>...Your amygdala WILL sense discomfort, sound the alarm, and force you into a state of homeostasis by creating paralyzing friction between YOUR CURRENT SELF, and WHO YOU'RE TRYING TO BECOME.</p>
        <p>Your amygdala is the obstacle standing between you, and immense growth. Good change, bad change, or even pointless change - your amygdala will prevent you from breaking out.</p>
        <p>..Talk about being <span class="text-orange">imprisoned by your own mind!</span></p>
        <p>But if there's ONE THING that we HAVE LEARNED from millionaires, actors, and abundant individuals, it's this.</p>
        <p><span class="text-orange">"Breaking away from our amygdalas is ENTIRELY possible."</span></p>
        <p>People from all over the world, from vastly different backgrounds, facing incredulous circumstances, have shown us time and time again that breaking through homeostasis CAN BE DONE.</p>
        <p>And I'm going to reveal exactly how you can leverage on your archetype to conquer your mind's natural resistor - your amygdala.</p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">Archetypal integration</h3>
        </div>
        <p>I'll break it down for you.</p>
        <p>Your archetype, the <span class="archetype"></span>, is your gateway to YOUR complete transformation.</p>
        <p>There is a palpable reason why psychologists have referred to archetypes as "the fundamental of the human mind".</p>
        <p>Archetypes reside in the unconscious, silently influencing EVERYTHING we do - our behaviours and thoughts, without us even REALIZING IT.</p>
        <p>...Which is why you were not aware of your archetype, your amygdala, and homeostasis... Until right now. But awareness is merely the beginning!</p>
        <p>See, most people would try to tackle their amygdalas head-on with brute force, thinking "if I tell myself not to be afraid, then I won't be afraid". Simple enough, right?</p>
        <p>Big mistake.</p>
        <p>Unfortunately, it does not work that way. If it did, there would be FAR MORE millionaires, actors, and abundant individuals! Don't believe me? Here, I'll explain.</p>
        <p>Think of tackling your mind's natural resistor as the <span class="text-orange">infamous Chinese finger trap</span>. No matter how hard you try, how much force you use, the Chinese finger trap isn't going to release... Why? Well, because that's precisely what it's designed to do - resist!</p>
        <img src="https://individualogist.com/offer/paa/img/chinese-finger-trap.jpg" class="sales-img">
        <p>Forcing your fingers apart creates more friction. It clamps down even tighter, making your release nearly IMPOSSIBLE.</p>
        <p>If you've ever toyed with one of these strange thingamajigs, you would know that the only solution to make it release is the EXACT OPPOSITE of your natural instincts.</p>
        <p>See, you cannot just pull your fingers apart...</p>
        <p>You have to push your fingers together, releasing the trap's traction, and then smoothly slip your fingers away.</p>
        <p>Think of the finger trap as the "amygdala". Think of the resistance and friction between the trap and your fingers as "homeostasis".</p>
        <p>And think of your two fingers as your subconscious mind, and the unconscious...</p>
        <p><span class="text-orange">Yes, now you see.</span></p>
        <p>Archetypal integration aligns your subconscious mind to the unconscious, opening the gateway of <span class="username">infinite possibilities</span>.</p>
        <p>t's what guides your consciousness from a state of homeostasis, to a state of transformation.</p>
        <p>And that's exactly when you'll start to witness all your limiting beliefs dissolve, your energy blocks released, and your consciousness shift.</p>
        <p>Your very own holistic transformation - gifting you the purpose and direction to reach your destiny of fulfilled desires.</p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">when you master "<span class="text-orange">archetypal integration</span>", your life can transform completely!</h3>
        </div>
        <p>Over the years, we have created a remarkable system that guides individuals through a self-discovery process like no other...</p>
        <p>...Restoring <span class="text-orange">flair, passion and purpose</span> to the lost and directionless.</p>
        <p>...Returning <span class="text-orange">confidence and certainty</span> to the insecure and undecided.</p>
        <p>A "strange" transformation method that will <span class="text-orange">reveal to you</span> a complete and epiphanic understanding of <span class="username">who you are, who you have the potential to become, and what's stopping you from living a life of abundance, happiness, and love</span>.</p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">a weird story of struggle, evolution, and triumph</h3>
        </div>
        <p>Before his Archetypal Integration, Marcus, a budding entrepreneur, encountered unimaginable struggles with his subconscious, and his internal self.</p>
        <p>It wasn't until he began his Archetypal Integration, that he began to notice a spectacular "shift" in his thought patterns, limiting beliefs, and negative energies.</p>
        <p>Within DAYS... His amygdala had been conquered, his archetype had been integrated into consciousness, and everything else became literally effortless.</p>

        <div class="card m-b-30 card-body card-testimonial mb-3">
          <div class="d-flex align-items-center">
            <img src="../assets/images/member.svg" style="margin: 0 1em 1em 0;">
            <h3 class="card-title flex-fill text-left">Member Archetype</h3>
          </div>
          <p>5 months ago, it dawned on me that there was a bigger purpose in life. That's when I decided to take a break from the corporate world, and pursue entrepreneurship.</p>
          <p>What started with a few emails eventually became a guide which has left me dumbstruck until today - all thanks to my Premium Archetypal Analysis</p>
          <p>There I was, thinking I was about to take a break from work, but little did I realise that the journey of life discovery and aligning myself with my life path started to unfold.</p>
          <p>I started to notice a series of weird "coincidences" happening in my life, and it has put me on a life path filled with self-discovery, purpose, and constant learning.</p>
          <p>Although the journey came together with obstacles and numerous challenges, I now live a more purposeful life. I'm now equipped with learning lessons that can only lead me to a bigger breakthrough.</p>
          <p>I look forward to my continued success during this journey, and hope to keep gaining knowledge and blessings from the Individualogist Team.</p>
          <p><span class="text-orange">Marcus Khoo, 33, Entrepreneur - Member Archetype</span></p>
        </div>

        <p>The awesome, odd stories don't just end there, <span class="username"></span>.</p>
        <p>Jake, a humble Deli Clerk, had this to say about his archetypel integration:</p>

        <div class="card m-b-30 card-body card-testimonial mb-3">
          <div class="d-flex align-items-center">
            <img src="../assets/images/magician.svg" style="margin: 0 1em 1em 0;">
            <h3 class="card-title flex-fill text-left">Magician Archetype</h3>
          </div>
          <p>...I cannot say enough positive things about the various products that are available at individualogist.com as I have purchased several reports and have been 100% satisfied with each one.</p>
          <p>I have learned so much about myself in such a short span of time and the results are astonishing.</p>
          <p>The Universe answered when I was ready to listen and guided me to individualogist.com (among other things) starting with my free archetype reading.</p>
          <p>I was so impressed that I purchased the complete report on my archetype, which explained to me things I already knew about myself but had forgotten or buried deep down inside, as well as opened my eyes to a new perspective on myself.</p>
          <p>I have also purchased and read through the Diminishing Your Shadow Report on my archetype, which was invaluable at taking a real good look at myself and seeing what makes me tick.</p>
          <p>Note that this material is not for everyone, you have to be ready to take an honest evaluation of yourself including the bad with the good.</p>
          <p>But in the end while taking a close look at yourself can be difficult at times, what you find and release and integrate consciously is more than worth it.</p>
          <p>Highly recommended!</p>
          <p><span class="text-orange">Jack Brunner, 51, Deli Clerk - Magician Archetype</span></p>
        </div>

        <p><span class="username"></span>, you can experience the same remarkable transformation. Jake's and Marcus' stories are amongst COUNTLESS glowing testimonials and reviews we've received over the years.</p>
        <p>I want you to know that it IS possible. And more than possible, it can be EFFORTLESS.</p>
        <p>So, I'm so excited to share the exact TOOL and PROCESS that's helped Jake and Marcus, along with thousands of others to master archetypal integration, AND unlock abundance, happiness, and love:</p>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-star"></i>A blueprint that reveals the exact steps and phases to integrate your archetype into your consciousness...</li>
          <li><i class="fa-li fa fa-star"></i>A tool that unravels the secret to overcoming your mind's resistance to "good" change...</li>
          <li><i class="fa-li fa fa-star"></i>A resource that can align your direction, desires and energies for remarkable transformation...</li>
          <li><i class="fa-li fa fa-star"></i>A shortcut that can return intuition and intention to your control...</li>
        </ul>

      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">Introducing: your premium archetypal analysis - the gateway to archetypal integration</h3>
        </div>
        <p>This powerful analysis is the starting point of your <span class="text-orange">personalized path</span> to your abundant state...</p>
        <p>A carefully crafted guide that will take you on a journey through an in-depth understanding of what your archetype truly encompasses, and help you gain an epiphanic perspective of who you truly are, and who you can become.</p>
        <p>It will reveal your archetypal path and purpose, guiding you through each phase of the Archetypal Integration process, without ANY homeostasis produced from your amygdala.</p>
        <p>To make this journey as effortless as possible...</p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">Your premium archetypal analysis is split into five progressive, transformational phases...</h3>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/paav2-cover1.png">
          </div>
          <div class="col-sm-8">
            <h4 class="text-orange">Phase #1: The Individuation Fundamentals</h4>
            <p>This phase marks the beginning of your transformation, where every step that lays ahead of you will be explained. During this phase, the secrets of individuation and the Archetypal Integration process will be unveiled. You will come to understand how all the pieces of the puzzle fit to form your holistic caregiver identity, and of course, how it works together with your amygdala, and not against it.</p>
            <p>Immediately, you will see your <span class="text-orange">personalized path of least resistance to transformation</span>.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/paav2-cover3.png">
          </div>
          <div class="col-sm-8">
            <h4 class="text-orange">Phase #2: Your Archetypal Incarnations</h4>
            <p>The second phase is when the real work begins, and when real results are experience. During this phase, you are guided through all the incarnations of your <span class="archetype"></span> archetype. Incarnations that form the entirety of your archetype.</p>
            <p>It is through this phase that you will gain a thorough, profound revelation of who you are, and who you can evolve into.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/paav2-cover2.png">
          </div>
          <div class="col-sm-8">
            <h4 class="text-orange">Phase #3: Your Archetypal Profile</h4>
            <p>Now, we've moved on to the third phase of your Archetypal Integration, where you'll work more intimately with your archetype. In this phase, more of your archetype's tendencies, behavioural responses, strengths, and weaknesses are revealed.</p>
            <p>With homeostasis out of the way, your subconscious mind will start to become unified with the unconscious, and you'll start to experience a "shift" in your perceptions - of yourself, of others, and of what's truly possible.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/paav2-cover4.png">
          </div>
          <div class="col-sm-8">
            <h4 class="text-orange">Phase #4: Your Archetypal Odyssey</h4>
            <p>Your amygdala is out of the way. Your archetype is slowly becoming integrated - now what? The fourth phase will prepare you for your next steps - the journey that your archetype will embark on. It sheds light unto the obstacles that lie ahead, giving you predictive foresight for you to maintain your integrated state.</p>
            <p>In any transformation, regression and "back sliding" are extremely common phenomenon. This phase will ascertain your transformation as a permanent change.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/paav2-cover5.png">
          </div>
          <div class="col-sm-8">
            <h4 class="text-orange">Phase #5: Your Archetypal Exercise Guide</h4>
            <p>The fifth and final phase is where you'll translate everything into action - your newly experienced epiphanies, realizations, and wisdom. Here, we reveal a series of cognitive and emotional exercises that work directly with all levels of your consciousness, familiarizing your entire self with archetypal integration.</p>
            <p>And as soon as this final phase begins, your direction and purpose will become clear. Your entire being will be radiating with energy. You will notice abundance flowing into your life, and everything will somehow "click" into place...</p>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">A transformation method that <span class="text-orange">supercedes all other programs</span></h3>
        </div>
        <p><span class="username"></span>, if there existed another transformational program as powerful, detailed, and personalized as this... <span class="text-orange">how much time, effort, research, and resources do you think it's taken to produce?</span></p>
        <p>Life coaches typically charge hundreds up to THOUSANDS of dollars per session - with NO GUARANTEE of making any transformation whatsoever!</p>
        <p>In fact, I just came across an "abundance course" from one of those "gurus" - SLAPPED with a steep price tag of $1,900!</p>
        <p>At Individualogist.com - we've made it our mission to deliver personal transformation through archetypal integration to the <span class="text-orange">MASSES</span>, because we believe that everyone should have access to the information they need to become <span class="text-orange">more abundant, happier, and filled with love.</span></p>
        <p>In order to make our programs, reports, and information available to the masses, we have to make it <span class="text-orange">affordable without compromising quality AND results.</span></p>
        <p>And so, we've <span class="text-orange">personalized the archetypal integration process to EACH ARCHETYPE.</span></p>
        <p>See, each of the archetype's amygdalas, each individual has a different "response" to change and transformation, making it absolutely <span class="text-orange">necessary</span> to develop a process that's not only powerful, but also <span class="text-orange">effective through personalized guidance and information.</span></p>
        <p>...Which means, <span class="username"></span>, as a <span class="archetype"></span> archetype, the exact archetypal integration steps, methods and exercises have all been <span class="text-orange">personalized to YOUR archetype.</span></p>
        <p>In other words, I'm sure we can both agree that the true value of your Premium Archetypal Analysis is certainly worth MUCH more than one of those overpriced "guru courses", that hardly ever work.</p>
        <p><span class="username"></span>, but despite the immense value of your Premium Archetypal Analysis, we have NOT set the price tag at $1,900.</p>
        <p>In fact, it is NOT even going to be priced at $1,000!</p>
        <p><span class="text-orange">...$500 seems pretty fair, but admittedly, not everyone can afford to part with a sum of money that large...</span></p>
        <p>We did consider pricing a little under $200, but it still didn't feel quite right... At least to me.</p>
        <p>So... After years of research and development, tests and tweaks... We're proud to announce that we've set the <span class="text-orange">official price</span> of the Premium Archetypal Analysis at just $97.</p>
        <p><span class="text-orange">BUT WAIT! You're NOT Going To Part With $97 TODAY.</span></p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">...Because I'm not going to give you <span class="text-orange">your premium archetypal analysis at the "Official price"</span></h3>
        </div>
        <p>On this special page, I've included an exclusive one-time $60 discount for your Premium Archetypal Analysis, setting the final "unofficial" price at $37.</p>
        <p>It's part of an "archetypal experiment" to see how different archetypes react to unique opportunities - will some of them seize such precious opportunities without a second breath...? Which archetype's amygdalas will create enough resistance to stop them from receiving something good into their lives... Will skepticism simply get the better of them?</p>
        <p>The more we learn about you from these little anonymous "archetypal experiments", the better we can improve our products, content, and programs to better serve you.</p>
        <p>Consider this discount - this opportunity, as my invitation to you, <span class="username"></span>. I'm inviting you to become a part of our successfully transformed and archetype-integrated community.</p>
        <p>A community filled with like-minded <span class="archetype"></span> such as yourself.</p>
        <p>All I ask in return is you spread the good news of archetypes, Individuation, and Archetypal Integration to your friends and family around you, so they too can rise above their amygdalas. So that they too can have that fighting chance to "step out" of homeostasis.</p>

        <div class="row">
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3">
              <div class="d-flex align-items-center">
                <img src="../assets/images/creator.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Creator Archetype</h3>
              </div>
              <p><span class="text-orange">"A great reminder of who I used to be..."</span></p>
              <p>I recently purchased the Premium Archetypal Analysis after learning I was the Creator. It has been revealing in what motivates me, as well as a great reminder of who I used to be. I was always so creative as a child and lost this along the way. I believe this report has reawakened that part of me and will serve me well on my path! Big thanks to the Individualogist Team for this awesome information!</p>
              <p><span class="text-orange">Deborah Brown, 44, Holistic Health Coach - Creator</span></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3" style="min-height: 41.5em;">
              <div class="d-flex align-items-center">
                <img src="../assets/images/ruler.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Ruler Archetype</h3>
              </div>
              <p><span class="text-orange">"As time went along, more and more seemed to come true..."</span></p>
              <p>This product is amazing. I was very scepitical at first but as time went along, more and more seemed to come true. Plus, it was filled with so much relevant information, it made it very easy to follow and recognize the signs and traits that were placed in front of me. It was a pleasure to read and piqued my interest even further. I recommend that everyone take part in this and get yourself involved in this. You won't regret it.</p>
              <p><span class="text-orange">Bryan Smith, 51, City Inspector - Ruler</span></p>
            </div>
          </div>
        </div>

        <?php
        include '../../inc/order-paav2.php';
        ?>

        <p>Now, I must warn you - if you leave this page, your discount will be lost - forever. The next time you see your reading, your Premium Archetypal Analysis will return to its "official price" of $97.</p>
        <p>AND on top of your $60 discount, I'm going to <span class="text-orange">sweeten the deal</span> just a little more...</p>
      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">Act now, and I'll give you these..</h3>
        </div>
        <p>Claim your Premium Archetypal Analysis today, and I'll include 5 additional bonus readings.</p>
        <p>These 5 additional materials are my personal recommendations for enhancing your self-discovery journey - each of them revolve primarily around energetic influences, and intuitive control.</p>
        <p>But not only that - these bonuses are all authored by our in-house panel of analytical psychology and spirituality experts. They ARE NOT readings, guides, or information that you'll be able to get ANYWHERE ELSE.</p>

        <div class="row mt-5">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/aig-cover.jpg">
          </div>
          <div class="col-sm-8">
            <h4 class="text-orange">BONUS #1: Active Imagination Guide - $37 value</h4>
            <p>Bridge the gap between your consciousness and the unconscious using this mind-exploring meditative technique, translating your unconscious mind into tangible images.</p>
            <p>This extremely powerful guide will enhance your archetypal integration efforts by tapping into the proven psychological exercises of "active imagination".</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/dag-cover.jpg">
          </div>
          <div class="col-sm-8">
            <h4 class="text-orange">BONUS #2: Dream Analysis Guide - $37 value</h4>
            <p>Become a master of your intuition by deconstructing your dreams to reveal your "inner voice". This secret guide will give you the edge you need to navigate the complex plains of your unconscious mind.</p>
            <p>By borrowing principles of analytical psychology, this guide will show you the exact art and science to interpret dreams, so that you can uncover "hidden truths" about your inner intuition and deeper personality.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/paa-bonus1.png">
          </div>
          <div class="col-sm-8 my-auto">
            <h4 class="text-orange">BONUS #3: Exploring Your Birthdate With The Chinese Zodiac - $37 value</h4>
            <p>Meet the counterpart of Western astrology – The Chinese Zodiac. Understand the Eastern influences on predictions and learn how you can apply them to harness yin and yang energies, all based on your personalized Chinese Zodiac.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/paa-bonus2.png">
          </div>
          <div class="col-sm-8 my-auto">
            <h4 class="text-orange">BONUS #4: Discovering Your Aura - $27 value</h4>
            <p>Each individual exudes a certain aura. Learn how you can instantly identify and interpret different auras of different individuals to gain maximum influence over others, as well as manage the emission of your own aura.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-4 my-auto">
            <img style="width: 100%;" src="https://individualogist.com/download-area/assets/img/paa-bonus3.png">
          </div>
          <div class="col-sm-8 my-auto">
            <h4 class="text-orange">BONUS #5: Feng Shui Paradigm Guide - $37 value</h4>
            <p>Maximise the flow of energy in your home or office by discovering a few simple techniques from the Eastern art of Fengshui. This in-depth guide will turn you into a true geomancy master in no time.</p>
          </div>
        </div>

        <p><span class="text-orange">$175 Worth Of Powerful Energy & Intuition Bonuses Given To You For FREE.</span></p>
        <p>That's not ALL.</p>
        <p>I hope you don't mind if I overdeliver! Because...</p>
        <p>...I'm also going to go above and beyond to ensure your complete satisfaction... So I'm backing this entire opportunity with our transformation-assured, money-back guarantee.</p>

      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">60 days from today, if you're not satisfied for any reason, I'll give you a full refund</h3>
        </div>
        <img src="../assets/images/60-days-guarantee.png" style="display: block;margin: 0 auto">
        <p>Within the next 60 days, starting from the day of your purchase, if you decide that your Premium Archetypal Analysis fell short of your expectations, or if you decide that you weren't satisfied with it in ANY way, I'll issue you a FULL refund.</p>
        <p>It is important to me that you get value AND results from this. And if you DON'T see a difference whatsoever in your thought patterns, in your subconscious, and in your state of abundance, then we DO NOT DESERVE to keep your money.</p>

        <div class="row">
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3">
              <div class="d-flex align-items-center">
                <img src="../assets/images/ruler.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Ruler Archetype</h3>
              </div>
              <p><span class="text-orange">"As time went along, more and more seemed to come true..."</span></p>
              <p>This product is amazing. I was very scepitical at first but as time went along, more and more seemed to come true. Plus, it was filled with so much relevant information, it made it very easy to follow and recognize the signs and traits that were placed in front of me. It was a pleasure to read and piqued my interest even further. I recommend that everyone take part in this and get yourself involved in this. You won't regret it.</p>
              <p><span class="text-orange">Bryan Smith, 51, City Inspector - Ruler</span></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3" style="min-height: 39.7em;">
              <div class="d-flex align-items-center">
                <img src="../assets/images/explorer.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Explorer Archetype</h3>
              </div>
              <p><span class="text-orange">"...Truly heal my physical and spiritual self..."</span></p>
              <p>I have been on my spiritual journey for about a year. It wasnt until i got diagnosed with HSV did I truly began to embark on the quest of individuation. This has helped me take a better look at myself and go inward to truly HEAL my physical and spiritual self. Thank you for EVERYTHING!</p>
              <p><span class="text-orange">Ciara L, 22, DOT Driver - Explorer</span></p>
            </div>
          </div>
        </div>

        <?php
        include '../../inc/order-paav2.php';
        ?>

      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered"><span class="username"></span>, all obstacles have been removed for your one chance at enormous change</h3>
        </div>
        <p>There is absolutely no risk involved, and it’s all up to you and whether you decide to begin your Archetypal Integration.</p>
        <p>This is your one chance to come face-to-face with your archetype and be guided through a transformational journey. This is your time to realign your direction with your destiny.</p>
        <ul class="fa-ul">
          <li><i class="fa-li fa fa-check" style="color: #890cdb;"></i>Experience MULTIPLE BREAKTHROUGHS across ALL aspects of your life with Archetypal Integration.</li>
          <li><i class="fa-li fa fa-check" style="color: #890cdb;"></i>Discover your hidden strengths, intuitive instincts, and unquestionable purpose to charge through mental barriers and limiting beliefs.</li>
          <li><i class="fa-li fa fa-check" style="color: #890cdb;"></i>Receive a personalized and effortless blueprint that reveals your true inner self, all based on your primary archetype.</li>
          <li><i class="fa-li fa fa-check" style="color: #890cdb;"></i>Transform yourself into a magnet that draws like-minded members of the opposite gender into your life - members who'll love you and appreciate you for who you truly are.</li>
          <li><i class="fa-li fa fa-check" style="color: #890cdb;"></i>Receive a detailed guide, broken down into 5 different phases - your Individuation Fundamentals, your Archetypal Profile, your Archetypal Incarnations, your Archetypal Odyssey, and your Archetypal Exercise Guide.</li>
          <li><i class="fa-li fa fa-check" style="color: #890cdb;"></i>Receive your 5 additional bonus materials for FREE - readings that will help you obtain a deeper understanding of your archetype, your energies, and the spiritual/psychological realm.</li>
          <li><i class="fa-li fa fa-check" style="color: #890cdb;"></i>Walk away with these 5 bonuses materials if you're not COMPLETELY SATISFIED</li>
        </ul>

        <p>Now, <span class="username"></span> - how far are you willing to go to experience that single, life-changing breakthrough that will open your heart, mind, and soul to your true purpose, and all the abundance that comes with it?</p>
        <p>Right now, you have TWO options.</p>
        <p>You can, of course, do <span class="text-orange">NOTHING</span>. You can choose to remain in your status quo. Nothing changes. You stay as you are, drifting along the currents of life, restrained by your limiting beliefs, and remaining powerless to whatever life chooses for you.</p>
        <p>OR...</p>
        <p>You can give yourself a chance to transform, grow, and unlock all the abundance, happiness, and love you desire - completely risk free.</p>
        <p>In mere minutes, your archetypal integration can start working its magic in your life!</p>
        <p>Once again, I'd like to remind you of everything you're about to receive:</p>

        <ul class="fa-ul">
          <li><i class="fa-li fa fa-star"></i><span class="highlight-point">Your Personalized Premium Archetypal Analysis - <span class="text-red">$97 value</span></span></li>
          <p>Includes all 5 phases of your archetypal integration: Individuation Fundamentals Report, your Archetypal Incarnations Report, your Archetypal Profile Report, your Archetypal Odyssey Report, your Archetypal Exercise Guide, all personalized to your unique archetype.</p>
          <li><i class="fa-li fa fa-star"></i><span class="highlight-point">Bonus Report #1: Dream Analysis Guide - <span class="text-red">$37 value</span></span></li>
          <p>Become a master of your intuition by deconstructing your dreams to reveal your "inner voice". This secret guide will give you the edge you need to navigate the complex plains of your unconscious mind.</p>
          <li><i class="fa-li fa fa-star"></i><span class="highlight-point">Bonus Report #2: Active Imagination Guide - <span class="text-red">$37 value</span></span></li>
          <p>Bridge the gap between your consciousness and the unconscious using this mind-exploring meditative technique, translating your unconscious mind into tangible images.</p>
          <li><i class="fa-li fa fa-star"></i><span class="highlight-point">Bonus Report #3: Exploring Your Birthdate With The Chinese Zodiac Report - <span class="text-red">$37 value</span></span></li>
          <p>Discover the potent influences of the hidden archetypes of the Eastern Zodiacs, and the role it plays in the grand scheme of the Universe.</p>
          <li><i class="fa-li fa fa-star"></i><span class="highlight-point">Bonus Report #4: Discovering Your Aura Guide - <span class="text-red">$27 value</span></span></li>
          <p>Receive a complete breakdown and secret insights into the unexplored realm of your personal aura, and discover how your aura impacts your archetype.</p>
          <li><i class="fa-li fa fa-star"></i><span class="highlight-point">Bonus Report #5: Feng Shui Paradigm Guide - <span class="text-red">$37 value</span></span></li>
          <p>Leverage on this powerful guide to transform your external environment to maximize the flow of energy after transforming your internal self.</p>
          <li><i class="fa-li fa fa-star"></i><span class="highlight-point">Priority Customer Support - <span class="text-red">$97 value</span></span></li>
          <p>Our team of archetypal specialists will be with you throughout the entire program, so you'll always have someone to encourage you, and guide you. This priority treatment is ONLY made available if you place your order FROM THIS PAGE.</p>
          <li><i class="fa-li fa fa-star"></i><span class="highlight-point">60-Day Moneyback Guarantee - <span class="text-red">$97 value</span></span></li>
          <p>If you don't experience a transformation of ANY form, we'll issue you a FULL refund, and you'll get to keep the 5 bonus reports.</p>
        </ul>

        <p><span class="text-orange">...All of this, for JUST $37.</span></p>
        <p>To get started, click on the button below and commence your archetypal transformation <span class="text-orange">NOW!</span></p>

        <?php
        include '../../inc/order-paav2.php';
        ?>

        <div class="row">
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3">
              <div class="d-flex align-items-center">
                <img src="../assets/images/hero.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Hero Archetype</h3>
              </div>
              <p><span class="text-orange">"...It reassured me of who I could be..."</span></p>
              <p>I had doubts about who I was, even though I had a vague idea of who I really wanted to be. Suddenly, I found myself engrossed in Individualogist. It reassurred me of who I could be, and how I can become be that person - showing numerous possibilities of what I could achieve.</p>
              <p>Wow, it has certainly given me a whole new world of insight. And ever since, I'm becoming the Self I need to be.</p>
              <p><span class="text-orange">Vivian Ngozi Jensen, 34, Self-employed - Hero</span></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3" style="min-height: 44.2em;">
              <div class="d-flex align-items-center">
                <img src="../assets/images/caregiver.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Caregiver Archetype</h3>
              </div>
              <p><span class="text-orange">"...I found a goldmine when I found Individualogist..."</span></p>
              <p>There has been a search for who I am and what my destiny is since I was 6 years old and suffered a SEPARATION TRAUMA.... I found a goldmine when I found Individualogist. Thank you so much for helping me. Your questionnaire determined that I am a Caregiver, and I love your assessment!</p>
              <p><span class="text-orange">Till Dunn, 73, Author & Speaker - Caregiver</span></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3">
              <div class="d-flex align-items-center">
                <img src="../assets/images/hero.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Hero Archetype</h3>
              </div>
              <p><span class="text-orange">"...Gained a lot of insight into my abilities and weakness..."</span></p>
              <p>Excellent product, I've gained a lot of insight into my abilities and weakness. Now I'm able to detect my shadow way easier and let go of what has been holding me back all my life. It's been a deeply rewarding and fulfilling journey that I keep returning too whenever I need to refresh my memory. Thank you!</p>
              <p><span class="text-orange">Oscar Nygren, 36, Emotional Fitness Coach - Explorer</span></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3" style="min-height: 36.2em;">
              <div class="d-flex align-items-center">
                <img src="../assets/images/caregiver.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Caregiver Archetype</h3>
              </div>
              <p><span class="text-orange">"...Helped me realize what my soul purpose on this earth is..."</span></p>
              <p>This reading really helped me realize what my soul purpose on this earth is. It's very accurate and right on point and I would recommend it to anyone who feels like they have lost their way!</p>
              <p><span class="text-orange">Misty Thompson, 42, Homemaker - Caregiver</span></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3">
              <div class="d-flex align-items-center">
                <img src="../assets/images/magician.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Magician Archetype</h3>
              </div>
              <p><span class="text-orange">"...Try it yourself..."</span></p>
              <p>Had a great time with my readings! I've learned a lot about my strengths, weaknesses and different latent gifts I have. Gifts that need to be tapped in to and used. There are things in my reading that have amazed me. Try it for yourself!</p>
              <p><span class="text-orange">Barbara Lewis, 67, Magician</span></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3" style="min-height: 30em;">
              <div class="d-flex align-items-center">
                <img src="../assets/images/outlaw.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Outlaw Archetype</h3>
              </div>
              <p><span class="text-orange">"...Dead accurate..."</span></p>
              <p>Dead accurate and couldn't have come at a better time. Best of the best! I now know my place in the world for certain!</p>
              <p><span class="text-orange">Bruce Gordon, 25 - Outlaw</span></p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3">
              <div class="d-flex align-items-center">
                <img src="../assets/images/lover.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Lover Archetype</h3>
              </div>
              <p><span class="text-orange">"I was convinced of the power and precision..."</span></p>
              <p>As a retired teacher and a seeker of Universal Truths and Mysteries, my archetype is the Lover and every word I have read from my Premium Archetypal Analysis has been right on target.</p>
              <p>I was sceptical at first but as I began reading I was convinced of the power and precision of the information given. I am now a confirmed student of this process and recommend it to any other seeker of truth on this pathway.</p>
              <p><span class="text-orange">Janice Hickey, 62, Retired Teacher - Lover</span></p>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card m-b-30 card-body card-testimonial mb-3" style="min-height: 44.3em;">
              <div class="d-flex align-items-center">
                <img src="../assets/images/ruler.svg" style="margin: 0 1em 1em 0;width:20%">
                <h3 class="card-title flex-fill text-left">Ruler Archetype</h3>
              </div>
              <p><span class="text-orange">"...Helping me hone my unique characteristics..."</span></p>
              <p>The Premium Archetypal Analysis is helping me hone my unique characteristics and has really made me interested in further research into Jungian Psychology. Thanks! I will add this to my toolbox to further map out my inner world.</p>
              <p><span class="text-orange">Ryan Evans, 33, Hairstylist - Ruler</span></p>
            </div>
          </div>
        </div>

        <?php
        include '../../inc/order-paav2.php';
        ?>

      </div>
    </div>
  </div>
</section>

<section class="individual pb-3 text-left" style="padding-top: 1.5em;">
  <div class="container">
    <div class="row">
      <div class="col-sm-10">
        <div class="title-container">
          <img src="https://individualogist.com/soul-flame-tarot/assets/img/title-bg-v2.png" alt="Snow" style="width:100%;">
          <h3 class="centered">Questions Others Have Asked Before Requesting Their Premium Archetypal Analysis</h3>
        </div>

        <div class="mx-auto mb-4">
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Q1: Will I really experience a transformation with this?
                  </button>
                </h5>
              </div>

              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Absolutely! Your analysis is in good hands. Our Premium Archetypal Analysis has helped thousands of struggling, lost, and purposeless individuals find their true selves - all by encountering their archetypes.</p>
                  <p>The Premium Archetypal Analysis is an excruciatingly detailed report about your archetype, containing highly informative pages of actionable and thought-provoking strategies and methodologies. Once again, all of the information is customized to your dominant archetype.</p>
                  <p>It breaks down an in-depth outlook of your life journey and all of its obstacles. There is no other product that comes as close in terms of detail or information. The Premium Archetypal Analysis is 100% owned and authored by us. This is the only place where you’re able to get it, or anything like it.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Q2: How will I receive my analysis?
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <p>You will receive your personalized Premium Archetypal Analysis, along with your bonuses securely via e-mail, carefully stored in a secure download area that only you'll have access to.</p>
                  <p>Usually it takes 10 to 15 minutes for your purchase to be delivered, but in most cases it's much quicker. Yes, this also means you'll be able to access your Premium Archetypal Analysis AND your bonuses from anywhere, and any device - as long as you have an Internet connection!</p>
                  <p>In the rare occasion where you do encounter issues with accessing your analysis, simply drop us an e-mail at <strong>contact@individualogist.com</strong> and our rockstar support team will assist you accordingly!</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Q3: Is the premium archetypal analysis really proven by science?
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Absolutely. Individuation is a psychological process that was created by thought leaders in the psychological world decades ago. In fact, principles of Individuation can be traced all the way back to the days of Aristotle.</p>
                  <p>This means that Individuation has stood the test of time to be a proven personal development process. There have also been numerous conclusive scientific studies about analytical psychology (what Individuation is based on) across the globe.</p>
                  <p>Your Premium Archetypal Analysis will guide you through actionable steps, that you can take towards making a MASSIVE change in your life. It reveals callings and directions that are specific to YOU.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFour">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Q4: Will I really experience a transformation in 7 days?
                  </button>
                </h5>
              </div>
              <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Yes. I know, it's a big promise to make, so let me explain.</p>
                  <p>Your Premium Archetypal Analysis will guide you through the Individuation process and explain to you your archetype in even greater detail. It takes the average reader approximately 5 to 7 days to complete the entire series.</p>
                  <p>As long as you pay attention to the insights and wisdom revealed in your Premium Archetypal Analysis, there is no doubt that you will experience an epiphanic shift in your consciousness. That's when EVERYTHING in your life begins to TRANSFORM.</p>
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingFive">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                    Q5: How does the money back guarantee work?
                  </button>
                </h5>
              </div>
              <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                <div class="card-body">
                  <p>Our 60-day money back guarantee is plain and simple.</p>
                  <p>After going through your Premium Archetypal Analysis, you WILL experience a TRANSFORMATION in your understanding of your true self, your deepest desires, and your abundant destiny.</p>
                  <p>If not, simply get in touch with us at <strong>contact@individualogist.com</strong>, and we'll issue you a FULL refund. No questions asked.</p>
                  <p>In fact, you'll even GET to keep the bonuses for FREE - as a gesture of goodwill from all of us at Individualogist.com, to YOU, <span class="username"></span>.</p>
                  <p>Click on the button below now, lock in your MASSIVE discount, your exclusive BONUSES, and take advantage of our 60-day, risk-free guarantee!</p>
                </div>
              </div>
            </div>
          </div>

          <?php
          $name = $_GET['name'];
          $email = $_GET['email'];
          $archetype = $_GET['archetype'];
          ?>
          <div>
            <img src="/offer/assets/img/paav2-cover.png" class="product-img">
            <div class="row">
              <div class="col-6 mx-auto my-auto text-center">
                <p class="slash-price-title">Retail:</p>
                <p class="slash-price">$97</p>
              </div>
              <div class="col-sm-6 mx-auto my-auto text-center">
                <p class="final-price-title">Today Only:</p>
                <p class="final-price">$37</p>
              </div>
            </div>
            <?php
            $name = $_GET['name'];
            $email = $_GET['email'];
            $archetype = $_GET['archetype'];
            switch (strtolower($archetype)) {
              case "caregiver":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "creator":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=27121&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=27121&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "explorer":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28787&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=27121&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "hero":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28788&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28788&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "innocent":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28789&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28789&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "jester":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28790&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28790&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "lover":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28791&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28791&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "magician":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28792&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28792&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "member":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28793&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28793&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "outlaw":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28794&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28794&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "ruler":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28795&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28795&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              case "sage":
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=30514&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=30514&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
                break;
              default:
                echo "<a class='big-cta-btn btn' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Reserve My Reading</a>";
                echo "<a class='big-cta-link text-center' href='http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=38006&cbtimer=68&name=$name&email=$email&cbexit=194&vtid=$vtid'>Click Here To Complete Your Request</a>";
            }
            ?>

            <img class="big-payment-options" src="https://individualogist.com/offer/paa/img/payment-options.png">
            <div class="security">
              <p class="security-text text-center" style="margin:.5em auto;max-width:500px;color:white"><i class="fas fa-lock"></i> Your information is safe and secure. The entire transaction will take place on a secure server using SSL technology.</p>
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
</section>

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
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="../assets/js/cookies-management.js"></script>
<script>
  $(document).ready(() => {
    let searchParams = new URLSearchParams(window.location.search)

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

    if (next == 5) {
      $('#stage-1').fadeOut()
      $(`#step${next}`).fadeIn();
      $('html, body').animate({
        scrollTop: $(`#top`).offset().top
      }, 1000);
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