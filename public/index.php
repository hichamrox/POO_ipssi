<?php

use Pb\PageItems;
use App\Controller\ArticleController;
use App\Controller\AnimauxController;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

$items = new PageItems();
$article = new ArticleController();

echo $items->header();


if (!empty($_GET) && isset($_GET["method"])) {

    // Page les Articles
    if ($_GET["method"] === "getArticles") {
        $manager = new ArticleController;
        $manager->getArticles();
    } else if ($_GET["method"] === "getArticle" && isset($_GET["id"])) {
        $manager = new ArticleController;
        $manager->getArticle($_GET["id"]);

    // Page les Animaux    
    }else if ($_GET["method"] === "getAnimaux") {
            $manager = new AnimauxController;
            $manager->getAnimaux();
    } else if ($_GET["method"] === "getAnimal" && isset($_GET["id"])) {
            $manager = new AnimauxController;
            $manager->getAnimal($_GET["id"]);
    }
}

    


echo $items->footer();