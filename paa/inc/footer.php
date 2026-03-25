<style>
  a {
    cursor: pointer;
    color: white !important;
  }

  a.no {
    text-decoration: underline !important;
  }
</style>
<div id="footer">
  <div class="footer-logo">
    <img src="https://individualogist.com/lp/assets/image/individualogist-logo2.webp" width="200px">
  </div>

  <!--<p class="small"><a href="http://individualogist.com">Home</a> | <a href="http://individualogist.com/terms-and-conditions">Terms and Conditions</a> | <a href="http://individualogist.com/privacy-policy">Privacy Policy</a> | <a href="https://individualogist.kayako.com">Support</a> | <a href="http://individualogist.com/contact">Contact</a></p>-->
  <p class="small" style="font-family:'Raleway',sans-serif;">&copy; Copyright <?php echo date("Y"); ?> Individualogist.com. All Rights Reserved</p>


  <?php
  include 'clickbank.php';
  ?>

</div>
</body>
<script type="text/javascript">
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
  var identifier = getCookie('logic_id');
  if (identifier != '' && identifier != null && identifier != 'undefined' && identifier != undefined) {
    var withIdentifier = $('a.cta-btn').attr('href') + '&identifier=' + identifier;
    $('a.cta-btn').attr('href', withIdentifier);
    $('a.cta-link').attr('href', withIdentifier);
  }
</script>
<script type="text/javascript" src="https://individualogist.com/offer/paa/js/custom.js?v=1.28"></script>
<script src="https://natal.individualogist.com/pages/js/pixelTracking.js?v=1.4"></script>

</html>