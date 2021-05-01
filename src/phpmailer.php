<?php

include_once 'PHPMailer/PHPMailer.php';
include_once 'PHPMailer/SMTP.php';
include_once 'PHPMailer/Exception.php';
include_once 'Help/help.php';

use Help\Help;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

if (isset($_POST['send'])) {
    $mail = new PHPMailer(true);
    $name = Help::textInput($_POST['nume']);
    $email = Help::textInput($_POST['mail']);
    $subject = Help::textInput($_POST['subject']);
    $message = Help::textInput($_POST['message']);
    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable debug Output
        $mail->isSMTP(); // Send using SMTP
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'shoppingcartandrei@gmail.com';
        $mail->Password = 'andrei12345678';
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Enable TLS encryption
        $mail->Port = 465;

        $mail->setFrom($email, $name); // email din post si nume tot din post
        $mail->addAddress('shoppingcartandrei@gmail.com'); // adresa de gmail

        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        if ($mail->send()) {
            header("Location:index.php?=Formular trimis cu succes");
        }
    } catch (Exception $e) {
        echo 'Message could not be sent ';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    }
}
