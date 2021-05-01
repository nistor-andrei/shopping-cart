<?php

require_once 'View/register.php';
include_once 'Controller/register.php';
include_once 'Model/model.php';

use Controller\Register;
use Model\Model;
use View\RegisterForm;

$model = new Model;
$view = new RegisterForm($model);
$view->buildForm();

if (isset($_POST['submit'])) {
    $controller = new Register($_POST, $model);
    $controller->verifyRegister();
    header("Location:index.php");
    // if utilizator este logat nu mai are acces pe login
}
