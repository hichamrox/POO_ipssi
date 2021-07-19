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

    public function deleteProduct($id){
        if($_SESSION["adminmode"] == true){
            $model = new ProductsModel;
            $model->deleteRow($id);
        }
        header('Location: /public/index.php?page=getProducts');
        exit();
    }

    public function create($data){
        if($_SESSION["adminmode"] == true){
            $this->db = new Database;
            if (!empty($data)) {
                $product = new Products($data);

                $imgData = $image = addslashes(file_get_contents($_FILES['uploaded_file']['tmp_name']));

                if (count($_FILES) > 0) {
                    if (is_uploaded_file($_FILES['uploaded_file']['tmp_name'])) {
                        $imgData = addslashes(file_get_contents($_FILES['uploaded_file']['tmp_name']));
                        $imageProperties = getimageSize($_FILES['uploaded_file']['tmp_name']);
                    }
                }

                $title = $data['name'];
                $desc = $data['description'];
                $price = $data['price'];
                
                
                $statement = "INSERT INTO products (name, image, description, price) VALUES ('$title', '$imgData', '$desc', '$price')";
                
                $prep = $this->db->getPDO()->prepare($statement);
                $prep->bindValue($title, $product->getName());
                $prep->bindValue($desc, $product->getDescription());
                $prep->bindValue($price, $product->getPrice());
                $prep->bindValue($imgData, $product->getImage());
                
                $prep->execute();
                
                header('Location: /public/index.php?page=getProducts');
                exit();
            }
        }
    }

}