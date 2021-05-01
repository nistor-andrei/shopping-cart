<?php
namespace View;

include_once 'Model/model.php';
include_once 'Help/help.php';
use Model\Model;

class RegisterForm
{
    public $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function buildForm()
    {
        echo '<html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css">
          <link rel="stylesheet" href="assets/css/Login-Form-Register.css">
          <link rel="stylesheet" href="assets/css/styles.css">
          <title>Shopping Cart</title>
        </head>
        <body style="margin: 0px;background: rgb(241, 247, 252);">';
        echo "<section class='login-clean'>";
        echo sprintf('<form action="%s" method="%s">', $_SERVER['PHP_SELF'], 'post');
        echo "<h2 class='visually-hidden'>Login Form</h2>
            <header class='illustration'>
                <h1 style='color: var(--bs-gray-dark);'>Register</h1>
            </header>
            <div class='mb-3'><input class='form-control' type='text' name='username' placeholder='Username'></div>
            <div class='mb-3'><input class='form-control' type='email' name='email' placeholder='Email'></div>
            <div class='mb-3'><input class='form-control' type='password' name='password' placeholder='Password'></div>
            <div class='mb-3'><button class='btn btn-primary d-block w-100' type='submit' name='submit' style='background: var(--bs-gray-dark);'>Submit</button></div>
        </form>
    </section>";
        echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
        </body>
      </html>';
    }
}
