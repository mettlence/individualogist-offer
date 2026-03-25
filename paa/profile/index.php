<div id="redirectSplash" class="bg-fantasy">
    <div class="splash-container container-fluid">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="indi-logo">
                    <img src="../img/individualogist-logo2.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mx-auto text-center">
                <h1>Welcome Back, <span class="name cap"></span>!</h1>
                <p>It looks like you've already claimed your free archetype reading - if you'd like to revisit it please confirm your details below and hit 'Continue'!</p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 mx-auto text-center">
                <table class="order-details">
                    <tbody>
                        <tr class="details">
                            <td class="right">Name:</td>
                            <td class="left"><span class="name cap"></span></td>
                        </tr>
                        <tr class="details">
                            <td class="right">Email:</td>
                            <td class="left"><span class="email"></span></td>
                        </tr>
                        <tr class="details">
                            <td class="right">Archetype:</td>
                            <td class="left"><span class="archetype cap"></span></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-center">
                <button id="splashCont" class="cta-button">Yes, Continue To My Personalized Reading!</button>
                <a class="notme" href="/lp/discover/?new">No, that isn't me...</a>
            </div>
        </div>
    </div>
</div>

<div id="aicSplash" class="bg-cosmicself">
    <div class="splash-container container-fluid">
        <div class="row">
            <div class="col-sm-12 mx-auto">
                <div class="indi-logo">
                    <img src="../img/individualogist-logo2.png">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 mx-auto text-center text-light aic-inner">
                <h2><span class="name cap"></span>, Your Archetypal Initiation Cycle Has Already Commenced As Of <span class="date">Yesterday</span>...</h2>
                <p class="text-light">But it's not too late to seize this opportunity. Your URGENT supplementary reading will reveal much needed insights to navigate through this EXTRAORDINARY period...</p>
                <p class="text-light">Time is of the essence, <span class="name cap"></span> - don't let this opportunity slip through your fingers once more...</p>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-6 mx-auto text-center">
                    <table class="order-details">
                        <tbody>
                            <tr class="details">
                                <td class="right">Name:</td>
                                    <td class="left"><span class="name cap"></span></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Email:</td>
                                    <td class="left"><span class="email"></span></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Archetype:</td>
                                    <td class="left"><span class="archetype cap"></span></td>
                                </tr>
                        </tbody>
                    </table>
                </div>
        </div>
            <div class="row">
                <div class="col-sm-8 mx-auto">
                    <a id="aicCont" class="cta-button" href="">Yes, I'm Ready To Proceed!</a>
                </div>
            </div>
    </div>
</div>

<?php
$PageTitle = "Individualogist.com | Reading";
include ('../inc/header.php');
?>

<!--
<script>
$(document).ready(function() {
    checkAic();
    personalize();
    progTrack();
});
    
window.onload = function() {
    if(!window.location.hash) {
        window.location = window.location + '#loaded';
        window.location.reload();
    }
}    
</script>
-->

<style>
        .sticky.is-sticky {
          position: fixed;
          left: 0;
          right: 0;
          top: 0;
          z-index: 98;
          width: 100%;
        }
            .nav-link {
                margin: auto;
                color: #fff;
                text-shadow: 0 0 5px #fff;
                font-weight: 500;
                padding: 1em;
            }
            .nav-link:hover {
                background: purple;
                color: #fff !important;
                transition: 0.4s;
                -webkit-transition: 0.4s;
            }
            .indi-logo img {
                width: 100% !important;
            }
            .page-header {
                font-size: 1em;
            }
            h1 {
                font-size: 2em;
                font-weight: 900;
            }
            .bshadow {
                box-shadow: 0 5px 10px #00000020;
            }
            .active {
                background: purple;
                color: #fff;
                -webkit-transition: 0.4s;
                transition: 0.4s;
            }
            .navbar-light .navbar-nav .active>.nav-link {
                color: #fff;
            }
            .active:after {
                display: none;
            }
            .navbar {
                padding: 0 !important;
            }
            .archetype-reading {
                margin-top: 2em;    
            }
        .order-img, .order-form {
            width: 100% !important;
    }
    .cborder:after {
        background: linear-gradient(to right, #8e1bca 25%,#ffcd02 25%, #ffcd02 50%, #e84f47 50%, #e84f47 75%, #65c1ac 75%);
  position: absolute;
  content: '';
  height: 4px;
  right: 0;
  left: 0;
  top: 0;
    }
    @media only screen and (max-width: 768px) {
        .navbar {
            display: none !important;
        }
        .page-header {
            width: 100% !important;
        }
    }
        </style>

    <div class="page-container">
        <section class="main bg-pastel">    
            <div class="container-fluid text-center">
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
                            <h1><span class="name cap">Friend</span>, Your Transformation Is IMMINENT - Read This Message To The End.</h1>
                            <h3>Your <span class="date">Urgent</span> Archetype Reading Requires Immediate Attention.</h3>
                            <div class="archetype-img"></div>
                        <table class="order-details">
                            <tbody>
                                <tr class="details">
                                    <td class="right">Name:</td>
                                    <td class="left"><span class="name cap">Friend</span></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Email:</td>
                                    <td class="left"><span class="email"></span></td>
                                </tr>
                                <tr class="details">
                                    <td class="right">Archetype:</td>
                                    <td class="left"><span class="archetype cap"></span></td>
                                </tr>
                            </tbody>
                        </table>
                        </div>
                        </div>
                    </div>
                </div>
        </section>

        <nav class="navbar navbar-expand-md navbar-light bg-dark bshadow cborder" data-toggle="sticky-onscroll">
            <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2 text-center" id="nav-custom">
                <ul class="nav justify-content-center mx-auto">
                  <li class="nav-item">
                    <a class="nav-link" href="#archetype">The <span class="archetype cap"></span></a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#calling">Life Calling</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#relationships">Relationships</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#transformation">Transformation</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#bonuses">Bonuses</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#guarantee">Guarantee</a>
                  </li>    
                </ul>
            </div>
        </nav>

<div data-spy="scroll" data-target="#nav-custom" data-offset="0">        
        <div class="archetype-reading section" id="introduction">
            <p><span class="name cap">Friend</span>,</p>
            
            <p>There's something truly different about you... I see extraordinary but unleashed potential lurking within you - like a dormant volcano just waiting for its time.</p>

<!--            <p>Upon closer examination of your archetype, I noticed something slightly alarming in your archetypal profile... Something that requires your urgent attention, yet extaordinarily positive.</p>-->

            <p>You're probably already aware of this, but in light of the recent events that have taken place in your life, your Archetypal Initation Cycle is commencing as soon as <span class="date">tomorrow</span>. As you can already tell, time is of the essence.</p> 
            
            <p>This is an intuitive cycle that concentrates the positive energies of the Collective Unconscious over the course of a several weeks - allowing you to unblock all negative vibrations surrounding you to attain the unthinkable.</p>

            <p>I'm sure you've noticed some rather peculiar occurrences over the last few days - perhaps in your emotions or surroundings... These are all indications of the period of transformation, emergence, and energies.</p>

            <p>There is plenty at stake here, <span class="name cap">Friend</span>. Your joy, happiness, luck, love, wealth...</p>

            <p>In other words, the days and weeks that follow are your optimal period to emerge from previous struggles, and past pains. There is no better time for your self-exploration as you encounter your archetype.</p>

            <p>It is, however, paramount that you act upon your instincts, trust in your intuition, and take massive amounts of action. It is also crucial that you leverage on this energetic shift to catapult your growth forward. That means no more mulling over opportunities, and no more retreating in the face of adversity.</p>

            <p>We'll discuss this in greater detail later, but first, let us proceed with your archetype reading...</p>
            
            <div id="insert-reading"></div>
            
            <script type="text/javascript">
                $(document).ready(function(){
                $('#insert-reading').load(getCookie('logic_archetype').toLowerCase()+".php");
                });
            </script>
        </div>            
            
        <?php include '../inc/profile-sales.php';?>    
</div>    
        </body>
        
<script>
//$(document).ready(function(){
//    if (!getCookie('logic_first_name')) {
//        //Runs the code because the cookie doesn't exist and it's the user's first time
//        $('#redirectSplash').remove();
//        $('#aicSplash').remove();
//        console.log('splash removed');
//    } else {
//        console.log('splash displayed');
//    }
//});
</script>
    
    <script>
    $(document).ready(function() {
  // Custom 
  var stickyToggle = function(sticky, stickyWrapper, scrollElement) {
    var stickyHeight = sticky.outerHeight();
    var stickyTop = stickyWrapper.offset().top;
    if (scrollElement.scrollTop() >= stickyTop){
      stickyWrapper.height(stickyHeight);
      sticky.addClass("is-sticky");
    }
    else{
      sticky.removeClass("is-sticky");
      stickyWrapper.height('auto');
    }
  };
  
  // Find all data-toggle="sticky-onscroll" elements
  $('[data-toggle="sticky-onscroll"]').each(function() {
    var sticky = $(this);
    var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
    sticky.before(stickyWrapper);
    sticky.addClass('sticky');
    
    // Scroll & resize events
    $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', function() {
      stickyToggle(sticky, stickyWrapper, $(this));
    });
    
    // On page load
    stickyToggle(sticky, stickyWrapper, $(window));
  });
});
        
$('.nav-item').click(function(e) {
    $('.nav-item .active').removeClass('active');
    var $this = $(this);
    $this.addClass('active');
});
        
$(document).ready(function(){
  $(".nav-item").on('click', function(event) {
    if (this.hash) {
      event.preventDefault();
      var hash = this.hash;
      $('html, body').animate({
        scrollTop: $(hash).offset.top
      }, 400, function(){
        window.location.hash = hash;
      });
    } 
  });
});
        
$(document).ready(function(){
var lastId, topMenu = $(".navbar"),
    topMenuHeight = topMenu.outerHeight() + 150,
    menuItems = topMenu.find("a"),
    scrollItems = menuItems.map(function() {
        var item = $($(this).attr("href"));
        if (item.length) {
            return item;
        }
    });

menuItems.click(function(e) {
    var href = $(this).attr("href"),
    topMenuHeight = topMenu.outerHeight() + 20,
        offsetTop = href === "#" ? 0 : $(href).offset().top - topMenuHeight + 1;
    $('html, body').stop().animate({
        scrollTop: offsetTop
    }, 300);
    e.preventDefault();
});

$(window).scroll(function() {
    var fromTop = $(this).scrollTop() + topMenuHeight;

    var cur = scrollItems.map(function() {
        if ($(this).offset().top < fromTop) return this;
    });
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
        lastId = id;
        menuItems.parent().removeClass("active").end().filter("[href=#" + id + "]").parent().addClass("active");
    }
});
});     
    </script>

    <?php include '../inc/footer.php';?>    
    </body>
</html>
