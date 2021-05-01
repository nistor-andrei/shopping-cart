<?php
require_once 'View/login.php';
include_once 'Model/model.php';
include_once 'Controller/login.php';
include_once 'Controller/session.php';

use Controller\Login;
use Controller\SessionCart;
use Model\Model;
use View\LoginForm;
SessionCart::sessionStart();

$model = new Model;
$view = new LoginForm($model);
$view->buildForm();
if (isset($_POST['submit'])) {
    $controller = new Login($_POST, $model);
    $controller->verifyLogin();
}
if (isset($_SESSION['is_logged_in']) && SessionCart::getData('is_logged_in') == true) {
    header("Location:home.php");
}
if (isset($_POST['visit'])) {
    $visitor = new Login($_POST, $model);
    $visitor->visitor();
    SessionCart::getData('is_logged_in') == true;
    header("Location:home.php");
}
