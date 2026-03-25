$(function () {
  $("#cont-button").on("click", function () {
    $(this).hide();
    $("#cont-reading").show();
    $("html,body").animate(
      {
        scrollTop: $("#cont-reading").offset().top,
      },
      300
    );
  });
});

$(function () {
  $("#cont2-button").on("click", function () {
    $(this).hide();
    $("#cont2-reading").show();
    $("html,body").animate(
      {
        scrollTop: $("#cont2-reading").offset().top,
      },
      300
    );
  });
});

$(".scroll-order").click(function () {
  $("html,body").animate(
    {
      scrollTop: $(".order-area").offset().top,
    },
    "slow"
  );
});

var acceptLink = document.getElementsByClassName("cta-button");

window.onload = function () {
  var string_contain = "upsell";
  var url = window.location.href;
  if (url.indexOf(string_contain) >= 0) {
    var x = document.getElementsByClassName("upsell");
    for (var a = 0; a < x.length; a++) {
      x[a].style.display = "block";
    }
    var y = document.getElementsByClassName("cta-button");
    var z = document.getElementsByClassName("order-footer");
    var i;
    for (i = 0; i < y.length; i++) {
      y[i].innerHTML = "Yes! Add To My Order Now!";
    }
    for (i = 0; i < z.length; i++) {
      z[i].innerHTML =
        "After clicking on the Add To Order Button, this premium product will be added to your order and you will receive it instantly. A full order summary reflecting all offers you've claimed is immediately available upon the last step.";
    }
    if (window.location.href.indexOf("tsol") > -1) {
    }
  }
  if (window.location.href.indexOf("eoterecur") > -1 || window.location.href.indexOf("dysrecur") > -1) {
    var v = document.getElementsByClassName("addorder price");
    for (i = 0; i < v.length; i++) {
      v[i].innerHTML =
        "<input type='checkbox' id='agreeCheckbox' name='agreeCheckbox' value='checked'> <label for='agreeCheckbox'>I agree to the payment terms of this recurring product.</label>";
    }
  }

  if (window.location.href.indexOf("tsol") > -1 && window.location.href.indexOf("upsell") > -1) {
    ctaURL = $("a.yes").attr("href");
    $("a.yes").removeAttr("href");
    if (window.location.href.indexOf("tsol-d") > -1) {
      $("a.yes").attr("onclick", "sendRevenue('tsol-d')");
    } else {
      $("a.yes").attr("onclick", "sendRevenue('tsol')");
    }
  }
};

//$(document).ready(function(){
//  $('.support-line').hide();
//  $('.upsell').hide();
//});
