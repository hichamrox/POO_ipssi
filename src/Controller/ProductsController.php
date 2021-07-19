<?php
namespace App\Controller;

use App\Entity\Products;
use App\Model\ProductsModel;
use Core\Controller\DefaultController;
use Core\Database\Database;

class ProductsController extends DefaultController {

    public function index()
    {
        $model = new ProductsModel;
        $products = $model->findAll();

        $this->render("Products/products", [
            "products" => $products
        ]);
    }

    public function single($id)
    {
        $model = new ProductsModel;
        $product = $model->find($id);

        $this->render("Products/product", [
            "product" => $product
        ]);
    }

}