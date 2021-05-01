<?php
namespace Controller;

include_once 'Model/model.php';
include_once 'Controller/session.php';
use Controller\SessionCart;
use Model\Model;

class Login
{
    public $model;
    public $post;

    public function __construct($post, Model $model)
    {
        $this->model = $model;
        $this->post = $post;
    }
    public function verifyLogin()
    {
        $userData = $this->model->getUserByUsername($this->post['username']);
        $userPost = $this->post['username'];
        $postPass = $this->post['password'];
        if ($userPost != $userData['username'] && $postPass != $userData['password']) {
            header("Location:login.php?eroare=User si parola gresita");
        } elseif (password_verify($postPass, $userData['password'])) {
            header("Location:home.php");
            SessionCart::sessionStart();
            SessionCart::setData('is_logged_in', true);
        } else {
            header("Location:login.php?eroare=Parola gresita");
        }

    }
    public function visitor()
    {
        SessionCart::sessionStart();
        SessionCart::setData('is_logged_in', true);
    }
}
