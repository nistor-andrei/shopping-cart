<?php

include_once 'session.php';
use Controller\SessionCart;

SessionCart::sessionStart();

$id = $_POST['id_product'];
if (!empty($_SESSION['products'])) {
    foreach ($_SESSION['products'] as $k => $v) {
        if ($id == $v) {
            unset($_SESSION['products'][$k]);
        }
    }
}
$totalItems = count($_SESSION['products']);
json_encode(['items' => $totalItems]);
die;
