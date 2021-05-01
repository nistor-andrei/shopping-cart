<?php

include_once 'Model/model.php';
include_once 'View/shoppingCart.php';
include_once 'Controller/session.php';
use Model\Model;
use View\ShoppingCart;
use Controller\SessionCart;

$model = new Model;
SessionCart::sessionStart();

if (SessionCart::getData('is_logged_in') == false) {
    header("Location:index.php");
} else {
    $view = new ShoppingCart($model);
    $view->showProduct();
}

// if utilizator este logat are acces la produse redirect index.php