<?php
$PageTitle = "Individualogist.com | Elemental Paradigm";
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/header.php');
include_once($path);
?>

<?php
include('ep-intro.php');
?>

<?php
    $element = $_GET['element'];
    switch (strtolower($element)){
    case "air":
        include('air.php');
        break;
    case "water":
        include('water.php');
        break;
    case "fire":
        include('fire.php');
        break;
    case "earth":
        include('earth.php');
        break;
    default:
        include('air.php');
    }
?>

<?php
include 'ep-salescopy2.php';
?>

<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$path .= ('/offer/common/footer-frontend.php');
include_once($path);
?>
