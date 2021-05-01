<?php
include_once 'session.php';
use Controller\SessionCart;

SessionCart::sessionStart();

if (!empty($_SESSION['products'])) {
    unset($_SESSION['products']);
}
