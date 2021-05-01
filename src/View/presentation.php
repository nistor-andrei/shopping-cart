<?php
namespace View;
include_once 'View/html.php';
use View\Html;

class Home
{
    public function home()
    {
        Html::startHTML();
        echo '<div class="bg"></div>';
        echo '<style>
        body, html {
            height: 100%;
          }
        .bg {
            background-image: url("https://wallpaperaccess.com/full/2338264.jpg");
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        } </style>';
        Html::endHTML();
    }
}