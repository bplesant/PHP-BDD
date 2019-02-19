<?php
session_start();
date_default_timezone_set('Europe/Paris');
include_once "./functions/debug.php";
include_once "./includes/pdo.php";
include_once "./functions/displayTitle.php";
include_once "./includes/html.php";
include_once "./includes/header.php";

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}

else {
    $page = "accueil";
}

$path = "./includes/";
$contenu = glob($path . "*.inc.php");
$page = $path . $page . ".inc.php";

if (in_array($page, $contenu)) {
    include_once $page;
}

else {
    include_once "./includes/accueil.inc.php";
}

include_once "./includes/footer.php";