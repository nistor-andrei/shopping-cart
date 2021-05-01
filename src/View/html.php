<?php
namespace View;

class Html
{
    public static function startHTML()
    {
        echo '<!DOCTYPE HTML>
        <html lang="en">
        <head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
          <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
          <title>Shopping Cart</title>
        </head>
        <body>';
        echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
        <div class="container-fluid">
        <a class="navbar-brand" href="home.php">
        <img src="icons/cart.svg" alt="" width="30" height="24" class="d-inline-block align-top">
        ShoppingCart
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-link " aria-current="page" href="home.php">Home</a>
            <a class="nav-link " href="produse.php">Produse </a>
            <a class="nav-link " href="contact.php">Contact</a>
            <a class="nav-link " href="logout.php">Log Out</a>
            <div class="position-absolute top-50 end-0 translate-middle-y">
            <a href="cart.php">
            <button type="button" class="btn btn-dark"  class="cart">Cosul meu<span class="badge bg-secondary " id="number-products">';
        if (!empty($_SESSION['products'])) {
            count($_SESSION['products']);
        }
        echo '</span>
          </button>
          </a>
          </div>
          </div>
        </div>
      </div>
      </nav>';
    }
    public static function endHTML()
    {
        echo ' <footer class="bg-light text-center text-lg-start" class="footer navbar-fixed-bottom">
    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(33,37,41,255); color: rgb(211,219,216); ">
      © 2020 Copyright:
      <a class="text-center" href="#" style="color: rgb(211,219,216); ">ShoppingCart</a>
    </div>
    <!-- Copyright -->
  </footer>';
        echo '<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
        <script src="assets/main.js"></script>
      </body>
    </html>';

    }
}
