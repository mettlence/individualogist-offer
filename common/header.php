<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title><?= isset($PageTitle) ? $PageTitle : "Individualogist.com" ?></title>
  <!-- Additional tags here -->
  <?php if (function_exists('customPageHeader')) {
    customPageHeader();
  } ?>

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

  <!-- Facebook Pixel Code -->
  <script>
    ! function(f, b, e, v, n, t, s) {
      if (f.fbq) return;
      n = f.fbq = function() {
        n.callMethod ?
          n.callMethod.apply(n, arguments) : n.queue.push(arguments)
      };
      if (!f._fbq) f._fbq = n;
      n.push = n;
      n.loaded = !0;
      n.version = '2.0';
      n.queue = [];
      t = b.createElement(e);
      t.async = !0;
      t.src = v;
      s = b.getElementsByTagName(e)[0];
      s.parentNode.insertBefore(t, s)
    }(window, document, 'script',
      'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '2256761061006017');
    fbq('track', 'PageView');
  </script>
  <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=2256761061006017&ev=PageView&noscript=1" /></noscript>
  <!-- End Facebook Pixel Code -->


  <link href="https://fonts.googleapis.com/css?family=Raleway:500,700,900" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/icon.png">

  <link rel="stylesheet" href="assets/css/style.css?v=1.54">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="assets/js/settings.js?v=1.47"></script>

  <!--
    <script type="text/javascript">
        var clean_uri = location.protocol + "//" + location.host + location.pathname;
        window.history.replaceState({}, document.title, clean_uri);
    </script>
-->
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TGKFM45" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <style>
    .token-notify {
      background: #d1296f;
      border-radius: .5em;
      padding: 1em;
      width: 100%;
      max-width: 700px;
      margin: 1em auto;
    }

    .token-notify p {
      color: #fff;
      font-size: 14px;
      text-align: center;
    }

    .token-purchase {
      font-size: 1.5em;
      font-family: 'Raleway', sans-serif;
      text-transform: uppercase;
      color: #fff;
      font-weight: 700;
      background: red;
      padding: 1em;
      margin: 1em auto;
      display: block;
      position: relative;
      box-shadow: 0 5px 15px rgba(0, 0, 0, .2);
      text-align: center;
      text-decoration: none;
      width: 100%;
      border-radius: 200px;
      max-width: 400px;
    }

    .token-purchase:hover {
      transition: .4s;
      -webkit-transition: .4s;
      background: #800180;
      color: #fff;
      text-decoration: none;
      box-shadow: 0 0 15px rgba(0, 0, , 0, .2);
    }

    .token-card {
      text-decoration: underline;
      text-align: center;
      display: block;
      position: relative;
      font-family: 'Raleway', sans-serif;
      color: #fff;
      font-weight: 500;
      font-size: 1em;
    }

    .token-security {
      font-size: .8em;
      text-align: center;
    }

    .fas {
      font-family: 'FontAwesome';
      font-style: normal;
    }

    .credit-cards {
      display: block;
      position: relative;
      width: 100%;
      max-width: 300px;
      margin: .5em auto;
    }

    .order-form {
      box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
    }

    strike {
      opacity: .5;
      color: red;
    }
  </style>