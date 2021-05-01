<?php
namespace View;

include_once 'View/html.php';
include_once 'Model/model.php';
use Model\Model;
use View\Html;

class Cart
{
    public $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }
    public function createCart()
    {
        Html::startHtml();
        echo '<div class="container">';
        echo '<br>
          <table class="table">
          <thead thead-dark>
          <th scope="col col-lg-2">Produs</th>
          <th scope="col-md-auto">Pret</th>
          <th scope="col col-lg-2">Action</th>
          </thead>';
        echo '<tbody>';
        if (!empty($_SESSION['products'])) {
            $productId = $_SESSION['products'];
            foreach ($productId as $produs) {
                $productData = $this->model->getProductById($produs);
                echo "<tr><td>" .
                    $productData['nume'] . "</td><td>" .
                    $productData['price'] . $productData['currency'] . "</td><td>" .
                    '<button type="button" class="btn btn-danger remove-to-cart" data-product-id=' . $productData['id_product'] . ' >Remove</button>' .
                    "</td></tr>";
            }
        } else {
            echo '<h4 class="text-center">Cosul tau este gol</h4>';
        }
        echo '</tbody></table>';
        echo '<div class="d-grid gap-2 d-md-flex justify-content-md-end ">';
        echo '<button type="button" class="btn btn-danger  remove-all" name="remove-all">Remove all</button>';
        echo '</div>';
        echo '</div>';
        Html::endHtml();
    }
}
