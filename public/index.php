<?php

use Pb\includes\PageItems;
use App\Controller\ArticleController;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

$items = new PageItems();
$article = new ArticleController();

echo $items->header();
//Uncaught Error: Cannot access private property App\Entity\Article::$id in /home/ivanb/Desktop/Projects/POO_ipssi/src/Controller/ArticleController.php:22
//echo $article->getArticles();
try {
    var_dump($article->getArticles());
} catch (\Throwable $th) {
    echo $th;
}
echo $items->footer();