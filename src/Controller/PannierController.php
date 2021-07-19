<?php

namespace App\Controller;
use App\Entity\Products;
use App\Model\ProductsModel;
use Core\Database\Database;

class PannierController {
    public function initPanier()
    {
        $_SESSION["totalpannier"] = 0;
    }

    public function addArticle($url){
        
        $_SESSION["totalpannier"] = $_SESSION["totalpannier"] + 1;

        header('Location: /public/index.php?page=getProducts');
        exit();

    }

}