<?php

use Pb\PageItems;
use App\Controller\ArticleController;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

$items = new PageItems();
$article = new ArticleController();

echo $items->header();


if (!empty($_GET) && isset($_GET["method"])) {
    if ($_GET["method"] === "getArticles") {
        $manager = new ArticleController;
        $manager->getArticles();
    } else if ($_GET["method"] === "getArticle" && isset($_GET["id"])) {
        $manager = new ArticleController;
        $manager->getArticle($_GET["id"]);
    }
}


echo $items->footer();