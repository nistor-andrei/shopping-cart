<?php

namespace View;

include_once 'Model/model.php';
include_once 'html.php';
use Model\Model;
use View\Html;

class ShoppingCart
{
    public $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function showProduct()
    {
        Html::startHTML();
        $product = $this->model->getInfo();
        foreach ($product as $products) {
            echo '<div class="card-group text-center" width="18rem">';
            echo '<div class="card">';
            echo '<div class="card-body">';
            echo '<img  src=' . $products['img'] . '>';
            echo '<h5 class="card-title">' . $products['nume'] . '</h5>';
            echo '<h5 class="card-title">' . $products['price'] . '</h5>';
            echo '<h5 class="card-title">' . $products['currency'] . '</h5>';
            echo '<br>' . '<button type="button" class="btn btn-primary add-to-cart"  data-product-id=' . $products['id_product'] . '>Add to Cart</button> ' . '<br>';
            echo '<div id="cart"></div>';
            echo '</div><br>';
            echo '</div>';
            echo '</div';
        }
        Html::endHTML();
    }
}
