<?php
$PageTitle = "Individualogist.com | Offer Expired";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>

<style>
    .logo {width:100%;max-width:250px;position:relative;display:block;margin:0 auto;filter: drop-shadow(1px 1px 1px #000)}.cta-button:hover {color:#fff;text-decoration:none;}
</style>

<div class="container-fluid sale-header mt-3">
   <div class="row">
       <div class="col-sm-2 mx-auto">
            <img class="logo" src="/offer/assets/img/individualogist-logo2.png">
       </div>
    </div>
</div>

<div class="container mt-5 mb-5">
    <div class="row">
        <div class="col-sm-8 mx-auto text-center">
            <h2>Oops! This offer has expired...</h2>
            <p>But your <a href="https://individualogist.com/lp/discover/?utm_source=email&utm_medium=website&utm_campaign=offer&utm_content=expired">free archetype reading</a> is still available!</p>
            <a class="cta-button" href="https://individualogist.com/lp/discover/?utm_source=email&utm_medium=website&utm_campaign=offer&utm_content=expired">Discover Your Archetype</a>
        </div>
    </div>
</div>
<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer.php');
include_once($path);
?>
