<?php

use App\Controller\ArticleController;
use App\Controller\CategorieController;
use App\Controller\AnimauxController;
use App\Controller\UserController;
use App\Controller\DonationController;
use App\Controller\ProductsController;
use App\Controller\PannierController;

if (!empty($_GET) && isset($_GET["page"])) {
    if ($_GET["page"] === "getArticles") {
        $controller = new ArticleController;
        $controller->index($_POST);
    }
    else if ($_GET["page"] === "getArticle" && isset($_GET["id"])) {
        $controller = new ArticleController;
        $controller->single($_GET["id"]);
    }
    else if ($_GET["page"] === "saveArticle") {
        $controller = new ArticleController;
        $controller->create($_POST);
    }
    else if ($_GET["page"] === "getAnimaux") {
        $controller = new AnimauxController;
        $controller->index();
    }
    else if ($_GET["page"] === "getAnimal" && isset($_GET["id"])) {
        $controller = new AnimauxController;
        $controller->single($_GET["id"]);
    }
    else if ($_GET["page"] === "connexionPage") {
        $controller = new UserController;
        $controller->connexionPage();
    }
    else if ($_GET["page"] === "connect") {
        $controller = new UserController;
        $controller->connect($_POST);
    }
    else if ($_GET["page"] === "deconnexion") {
        $controller = new UserController;
        $controller->disconnect();
    }
    else if ($_GET["page"] === "getDons") {
        $controller = new DonationController;
        $controller->index();
    }
    else if ($_GET["page"] === "getProducts") {
        $controller = new ProductsController;
        $controller->index();
    }
    else if ($_GET["page"] === "getProduct" && isset($_GET["id"])) {
        $controller = new ProductsController;
        $controller->single($_GET["id"]);
    }
    else if ($_GET["page"] == "setAdminMode"){
        $controller = new UserController;
        $controller->adminMode();
    }
    else if ($_GET["page"] == "delArticle" && isset($_GET["id"])){
        $controller = new ArticleController;
        $controller->deleteArticle($_GET["id"]);
    }
    else if ($_GET["page"] == "createArticle"){
        $controller = new ArticleController;
        $controller->create($_POST);
    }
    else if ($_GET["page"] == "updateArticle" && isset($_GET["id"])){
        $controller = new ArticleController;
        $controller->update($_POST, $_GET["id"]);
    }
    else if ($_GET["page"] == "delProduct" && isset($_GET["id"])){
        $controller = new ProductsController;
        $controller->deleteProduct($_GET["id"]);
    }
    else if ($_GET["page"] == "delAnimal" && isset($_GET["id"])){
        $controller = new AnimauxController;
        $controller->deleteAnimal($_GET["id"]);
    }
    else if ($_GET["page"] == "createProduct"){
        $controller = new ProductsController;
        $controller->create($_POST);
    }
    else if ($_GET["page"] == "niceUnDon"){
        $controller = new DonationController;
        $controller->create($_POST);
    }
    else if ($_GET["page"] == "addPanier" && isset($_GET["lasturl"])){
        $controller = new PannierController;
        $controller->addArticle($_GET["lasturl"]);
    }
}else{
    $controller = new ArticleController;
    $controller->index();
}