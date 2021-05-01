<?php
include_once 'View/contact.php';
include_once 'Controller/session.php';

use View\Contact;
use Controller\SessionCart;
SessionCart::sessionStart();

$contact=new Contact;
$contact->contact();

