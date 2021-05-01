<?php

include_once 'View/presentation.php';
include_once 'Controller/session.php';
use Controller\SessionCart;
use View\Home;
SessionCart::sessionStart();


if (SessionCart::getData('is_logged_in') == false) {
    header("Location:index.php");
} else {
    $home = new Home;
    $home->home();
}
// if utilizator este logat are acces la home
// verificare is logged in ===false
