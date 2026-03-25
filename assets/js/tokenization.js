let searchParams = new URLSearchParams(window.location.search);
let pathArray = window.location.pathname.split("/");
let email = searchParams.get("email");
let product = pathArray[2];

if (email !== null) {
  $.ajax({
    type: "get",
    url: "https://member.individualogist.com/api/tokenization",
    data: {
      page: product,
      email: email,
    },

    success: function (responses) {
      // console.log(responses);
      $(".tokenization").hide();
      $(".name").text(responses.maropost.first_name + " " + responses.maropost.last_name);
      $(".token-purchase").attr("href", responses.token);
      $(".token-notify").show();
    },
    error: function (err) {
      console.log(err);
    },
  });
}
