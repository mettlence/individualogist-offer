<?php
$PageTitle = "Individualogist.com | Reading";
include('../inc/header.php');
?>

<script>
    $(function() {
        $(".step1-reading").show();
        $(".step2-reading").hide();
        $(".step3-reading").hide();
        $(".step3-cta").hide()
        $(".step2").on('click', function() {
            $(this).hide();
            $(".step1-reading").hide(300);
            $(".step2-reading").show(600);
            $("#progress-bar li.s1").removeClass('active');
            $("#progress-bar li.s2").addClass('active');
            $('html,body').animate({
                scrollTop: $("#progress-bar").offset().top
            }, 300);
        });
        $(".step3").on('click', function() {
            $(this).hide();
            $(".step2-reading").hide(300);
            $(".step3-reading").show(600);
            $(".step3-cta").show();
            $("#progress-bar li.s2").removeClass('active');
            $("#progress-bar li.s3").addClass('active');
            $('html,body').animate({
                scrollTop: $("#progress-bar").offset().top
            }, 300);
        });
    });
</script>

<style>
    .paav2-cta {
        background: linear-gradient(45deg, #842ac2, #420f65);
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        border-radius: .5em;
        padding: 1em;
        width: 100%;
        margin: 2em auto
    }

    .reg-price {
        font-size: 2em;
        line-height: 1em;
        text-align: center;
        font-weight: 700;
        color: #fff
    }

    .cta-btn {
        white-space: normal;
        margin: 1em auto;
        border-radius: 100px;
        background: red;
        color: #fff !important;
        max-width: 500px;
        text-transform: uppercase;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        font-weight: 700;
        padding: .5em 1em;
        display: block;
        font-size: 1.5em;
    }

    .cta-btn:hover {
        color: #333 !important;
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

    .faq-header {
        margin-top: 1em;
        font-weight: 700;
        text-align: center;
        letter-spacing: 1px;
        text-transform: uppercase;
        font-size: 1.2em
    }

    .faq-para p {
        font-size: 17px
    }

    .testimonial {
        border: 2px solid #8429c2;
        border-radius: .5em
    }

    .security-text {
        font-size: 11px;
        line-height: 1;
        color: #fff
    }

    .testimonial h3 {
        color: #8429c2
    }

    .archetype-reading {
        width: 60%
    }

    .bg-archetypewhite {
        background: url(/lp/assets/image/archetypewheelwhite.webp) no-repeat center center;
        background-attachment: fixed;
        background-size: cover;
    }

    margin-bottom: -30px;
    }

    .quote {
        background: #a51fa5
    }

    #faq-area {
        width: 100%
    }

    .small {
        font-size: .8em !important;
        font-weight: 700;
    }

    .w-80 {
        width: 80%;
        display: block;
        margin: 1em auto
    }

    .sub-header {
        padding: .5em;
        text-transform: uppercase;
        color: #8429c2;
        font-size: 1.5em;
        letter-spacing: 3px;
        clear: both;
        box-shadow: none;
        border-bottom: 1px solid #8429c2;
        border-radius: 0;
        border-top: 0;
        border-left: 0;
        border-right: 0
    }

    .paa-items {
        max-height: 200px;
        margin: 1em auto;
        position: relative;
        display: block;
        filter: drop-shadow(0 5px 10px rgba(0, 0, 0, 0.3));
    }

    .img-mw600 {
        max-width: 600px;
        display: block;
        margin: auto;
        width: 100%
    }

    .bonusvalue {
        color: red
    }

    .active {
        font-weight: 700 !important;
        border-radius: 5px;
        color: #fff !important;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15)
    }

    .active:after {
        content: "" !important
    }

    .progress-breadcrumb {
        margin: 1em auto;
        display: inline-block;
        border-radius: 5px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, .15);
        width: 100%;
        position: relative;
        padding: 0
    }

    .progress-breadcrumb li {
        list-style-type: none;
        width: 33.3333%;
        text-shadow: none;
        float: left;
        font-size: 14px;
        position: relative;
        padding: 1em;
        text-align: center;
        text-transform: uppercase;
        color: rgba(255, 255, 255, .5);
        height: 100%:
    }

    .page-header {
        font-size: 1em;
        color: #fff !important;
        text-shadow: 1px 1px 1px #000
    }

    .progress-breadcrumb li:first-child:after {
        content: none
    }

    .progress-breadcrumb li.active:before {
        border-color: #55b776;
        background-color: #55b776;
        transition: all .8s
    }

    .progress-breadcrumb li.active:after {
        background-color: #55b776;
        transition: all .8s
    }

    .left {
        margin: 0;
        background: #f8f8f8;
        font-weight: 700;
        text-shadow: none
    }

    .order-details {
        text-shadow: none
    }

    .order-wrapper {
        margin: 1em auto
    }

    @media only screen and (max-width:768px) {
        .sub-header {
            font-size: 1.2em !important
        }

        .progress-breadcrumb li {
            width: 100%
        }

        .archetype-reading {
            width: 100%
        }

        .cta-btn {
            font-size: 1.2em
        }
    }
</style>

<div class="page-container">
    <div class="container-fluid bg-archetypewhite">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="indi-logo">
                    <img src="../img/individualogist-logo2.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto">
                <div class="page-header">
                    <h2><strong><span class="cap"><?php echo $_GET['name']; ?></span>, Unlock Your Sacred Archetypal Powers & Experience Abundance Across All Aspects Of Your Life. </strong></h2>
                    <div class="archetype-img">
                        <?php
                        switch (strtolower($_GET['archetype'])) {
                            case "caregiver":
                                echo '<img src="../img/icons/caregiver.png" width="100px">';
                                break;
                            case "creator":
                                echo '<img src="../img/icons/creator.png" width="100px">';
                                break;
                            case "explorer":
                                echo '<img src="../img/icons/explorer.png" width="100px">';
                                break;
                            case "hero":
                                echo '<img src="../img/icons/hero.png" width="100px">';
                                break;
                            case "innocent":
                                echo '<img src="../img/icons/innocent.png" width="100px">';
                                break;
                            case "jester":
                                echo '<img src="../img/icons/jester.png" width="100px">';
                                break;
                            case "lover":
                                echo '<img src="../img/icons/lover.png" width="100px">';
                                break;
                            case "magician":
                                echo '<img src="../img/icons/magician.png" width="100px">';
                                break;
                            case "member":
                                echo '<img src="../img/icons/member.png" width="100px">';
                                break;
                            case "outlaw":
                                echo '<img src="../img/icons/outlaw.png" width="100px">';
                                break;
                            case "ruler":
                                echo '<img src="../img/icons/ruler.png" width="100px">';
                                break;
                            case "sage":
                                echo '<img src="../img/icons/sage.png" width="100px">';
                                break;
                            default:
                                echo '<img src="../img/icons/caregiver.png" width="100px">';
                        }
                        ?>

                    </div>

                    <p>This Private Archetype Reading Has Been Prepared For:</p>
                    <table class="order-details">
                        <tbody>
                            <tr class="details">
                                <td class="right">Name:</td>
                                <td class="left"><span class="cap"><?php echo $_GET['name']; ?></span></td>
                            </tr>
                            <tr class="details">
                                <td class="right">Archetype:</td>
                                <td class="left"><span class="cap"><?php echo $_GET['archetype']; ?></span></td>
                            </tr>
                        </tbody>
                    </table>
                    <ul id="progress-bar" class="progress-breadcrumb">
                        <li class="s1 active">
                            <span class="stepnumber">Step 1</span>
                            Your Strengths + Calling
                        </li>
                        <li class="s2">
                            <span class="stepnumber">Step 2</span>
                            Your Obstacles + Weaknesses
                        </li>
                        <li class="s3">
                            <span class="stepnumber">Step 3</span>
                            Your Path To Abundance
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="archetype-reading">
        <div class="step1-reading">

            <p>Dearest <span class="cap"><?php echo $_GET['name']; ?></span>,</p>

            <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - potential that's been suppressed for decades now... Much like a dormant volcano just waiting for its time.</p>

            <p>I'm sure you've noticed some rather peculiar occurrences over the last few months - perhaps through unfortunate circumstances, unforeseen occurrences, or as if the weight of the world's on your sholders. These are all indications of your forthcoming period of transformation, emergence, and energies.</p>

            <p>Yes, there is no doubt. Your Archetypal Initiation Cycle is on the VERGE of commencing. This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of several weeks - allowing you to <strong>unblock all negative vibrations</strong> surrounding you to attain the unimaginable.</p>

            <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. Your timing to embark on this self-exploration journey could not have been more PERFECT.</p>

            <p>There is plenty at stake here, <?php echo $_GET['name']; ?>. Your joy, happiness, luck, love, wealth...</p>

            <p>Now, it is paramount that you complete this reading to the very end. Because after introducing your <?php echo $_GET['archetype']; ?> archetype, I will show you how you can leverage on this energetic shift to <strong>catapult your growth forward.</strong> That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

            <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>

            <?php
            switch (strtolower($_GET['archetype'])) {
                case "caregiver":
                    include 'caregiver.php';
                    break;
                case "creator":
                    include 'creator.php';
                    break;
                case "explorer":
                    include 'explorer.php';
                    break;
                case "hero":
                    include 'hero.php';
                    break;
                case "innocent": //Form Page
                    include 'innocent.php';
                    break;
                case "jester": //Form Page
                    include 'jester.php';
                    break;
                case "lover": //Form Page
                    include 'lover.php';
                    break;
                case "magician": //Form Page
                    include 'magician.php';
                    break;
                case "member": //Form Page
                    include 'member.php';
                    break;
                case "outlaw": //Form Page
                    include 'outlaw.php';
                    break;
                case "ruler": //Form Page
                    include 'ruler.php';
                    break;
                case "sage": //Form Page
                    include 'sage.php';
                    break;
                default: //Any page that is not defined in this switch will lead to this page
                    include 'caregiver.php';
            }
            ?>

            <?php include '../inc/premium-amygdala-paa-modal.php'; ?>

        </div>
        <script>
            $('.step2').text('Show Me Now!');
            $('.step3').text('Guide Me To Abundance!');
        </script>

        </body>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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

            function setCookie(a, b, c) {
                var e = new Date();
                e.setTime(e.getTime() + 1e3 * (60 * (60 * (24 * c))));
                var d = "expires=" + e.toUTCString();
                document.cookie = a + "=" + b + ";" + d + ";path=/";
            }

            // modal section
            $('.checkout-btn').on('click', function() {
                console.log('oke')
                $('#exampleModal').modal('show');
            });

            $('#checkout-process').on('click', function() {
                var a = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if (!1 == a.test($(".email").val())) return $(".errorMsg").html("Please enter a valid email!"), !0;
                var currentUrl = new URL(window.location.href);
                var name = getCookie('name') ? getCookie('name') : currentUrl.searchParams.get('name');
                var archetype = getCookie('archetype') ? getCookie('archetype') : currentUrl.searchParams.get('archetype');
                var reading = getCookie('reading') ? getCookie('reading') : currentUrl.searchParams.get('reading');
                var gender = getCookie('gender');
                var birthday = getCookie('birthday');
                var horoscope = getCookie('horoscope');
                var element = getCookie('element');
                var archetype = getCookie('archetype');
                var email = $('input[name=email]').val();
                var vtid = currentUrl.searchParams.get('utm_content') ? currentUrl.searchParams.get('utm_content') : 'discover-no-email';

                setCookie("email", email, "100");
                window.location.href = `https://individualogist.com/offer/paa/reading-v6/loading?name=${name}&email=${email}&archetype=${archetype}&utm_content=${vtid}`;
                // var vtid = currentUrl.searchParams.get('utm_content') ? currentUrl.searchParams.get('utm_content') : 'discover-no-email';
                // var url = "";
                // switch (archetype.toLowerCase()) {
                //     case "caregiver":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "creator":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=27121&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "explorer":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28787&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "hero":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28788&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "innocent":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28789&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "jester":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28790&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "lover":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28791&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "magician":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28792&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "member":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28793&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "outlaw":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28794&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "ruler":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28795&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     case "sage":
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=30514&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                //         break;
                //     default:
                //         url = `http://paav2.individua1.pay.clickbank.net/?cbfid=28769&cbskin=28270&cbtimer=68&name=${name}&email=${email}&cbexit=194&vtid=vtid`;
                // }

                // $.ajax({
                //     url: "https://member.individualogist.com/api/maropost/getByEmail",
                //     headers: {
                //         "Content-Type": "application/json",
                //         "Access-Control-Allow-Methods": "POST",
                //     },
                //     data: {
                //         email: email,
                //     },
                //     type: "GET",
                //     beforeSend: function() {
                //         $('#checkout-process').hide()
                //         $('.loader').show()
                //     },
                //     success: function(response) {
                //         if (response.status == "OK") {
                //             $.ajax({
                //                 url: "https://member.individualogist.com/api/maropost/updateContact",
                //                 data: {
                //                     list_id: 21,
                //                     first_name: name,
                //                     email: email,
                //                     name: name,
                //                     gender: gender,
                //                     birthday: birthday,
                //                     horoscope: horoscope,
                //                     element: element,
                //                     archetype: archetype,
                //                     uid: response.data.id
                //                 },
                //                 type: "POST",
                //                 success: function(response) {
                //                     window.location.href = url;
                //                 }
                //             });
                //         } else {
                //             $.ajax({
                //                 url: "https://member.individualogist.com/api/maropost/addContact",
                //                 data: {
                //                     list_id: 21,
                //                     first_name: name,
                //                     email: email,
                //                     name: name,
                //                     gender: gender,
                //                     birthday: birthday,
                //                     horoscope: horoscope,
                //                     element: element,
                //                     archetype: archetype
                //                 },
                //                 type: "POST",
                //                 success: function(response) {
                //                     window.location.href = url;
                //                 },
                //                 error: function(a) {
                //                     console.log(a),
                //                         $(".errorMsg").html(
                //                             "It seems like there's something wrong with your e-mail address - please try a different e-mail!"
                //                         );
                //                 },
                //             });
                //         }
                //     },
                //     error: function(err) {
                //         console.log(err);
                //     },
                // });
            });
        </script>
        <?php include '../inc/footer-modal.php'; ?>