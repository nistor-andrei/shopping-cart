<?php
include_once 'session.php';
include_once '../Model/model.php';
use Controller\SessionCart;
use Model\Model;

SessionCart::sessionStart();
$id = $_POST['id_product'];
$_SESSION['products'][] = $id;

$productData = Model::getProductById($id);
$productName = $productData['nume'];
$productPrice = $productData['price'];

if (isset($_SESSION['products'])) {
    if (isset($_SESSION['products'][$productData['id_product']])) {
        unset($_SESSION['products'][$productData['id_product']]);
    }
}

$totalItems = count($_SESSION['products']);
json_encode(['items' => $totalItems]);
die();
