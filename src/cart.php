<?php
include_once 'Controller/cart.php';
include_once 'Controller/session.php';
include_once 'View/cart.php';
include_once 'Model/model.php';
use Model\Model;
use Controller\SessionProducts;
use Controller\SessionCart;
use View\Cart;

SessionCart::sessionStart();

$model= new Model;
$cart= new Cart($model);
$cart->createCart();

