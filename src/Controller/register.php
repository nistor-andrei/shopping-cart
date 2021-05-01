<?php

namespace Controller;

include_once 'Model/model.php';
include_once 'Help/help.php';
use Help\Help;
use Model\Model;

class Register
{
    public $model;
    public $post;

    public function __construct($post, Model $model)
    {
        $this->post = $post;
        $this->model = $model;
    }
    public function verifyRegister()
    {
        $userPost = Help::textInput($this->post['username']);
        if (empty($userPost)) {
            header("Location:register.php?eroare=Adauga user-ul");
        }
        $userData = $this->model->getUserByUsername($userPost);
        $emailPost = Help::textInput($this->post['email']);
        if (empty($emailPost)) {
            header("Location:register.php?eroare=Adauga email");
        }
        $passPost = Help::textInput($this->post['password']);
        if (empty($passPost)) {
            header("Location:register.php?eroare=Adauga Parola");
        }
        $passEncrpyt = password_hash($passPost, PASSWORD_DEFAULT);
        if ($userPost == $userData['username'] && $emailPost == $userData['email']) {
            header( 'Location:register.php?eroare=Username si email deja exista');// header location
        } else {
            $this->model->insertAccount($userPost, $passEncrpyt, $emailPost);
        }
    }
    // verificare pe partea de register daca user si email exista afisez mesaj ca exista deja datele
    // Pentru a face logica de inregistrare voi folosi metodele din model
}
