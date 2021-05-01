<?php

include_once 'Controller/session.php';
use Controller\SessionCart;

SessionCart::sessionStart();
SessionCart::sessionDestroy();
header("Location:index.php");
