<?php

namespace View;

include_once 'Model/model.php';
use Model\Model;

class LoginForm
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
          <title>Shopping Cart</title>
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/css/bootstrap.min.css">
          <link rel="stylesheet" href="assets/css/Footer-Basic.css">
          <link rel="stylesheet" href="assets/css/Login-Form-Clean.css">
          <link rel="stylesheet" href="assets/css/styles.css">
        </head>
        <body style="margin: 0px;background: rgb(241, 247, 252);">';
        echo '<section class="login-clean" >';
        echo sprintf('<form action="%s" method="%s">', $_SERVER['PHP_SELF'], 'post');
        echo "<h2 class='visually-hidden'>Login Form</h2>
            <div class='illustration'>
                <h1 style='color: var(--bs-gray-dark);'>Login</h1>
            </div>
            <div class='mb-3'><input class='form-control' type='text' name='username' placeholder='Username'></div>
            <div class='mb-3'><input class='form-control' type='password' name='password' placeholder='Password'></div>
            <div class='mb-3'><button class='btn btn-primary d-block w-100' type='submit' name='submit' style='color: var(--bs-white);background: var(--bs-gray-dark);'>Log In</button><button class='btn btn-primary active d-block w-100' type='submit' name='visit' style='color: var(--bs-white);background: var(--bs-gray);'>Visit without account</button></div><a class='forgot' href='register.php'>Don't have account?</a>
        </form>
    </section>";
        echo '    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta2/js/bootstrap.bundle.min.js"></script>
        </body>
      </html>';

    }
}
