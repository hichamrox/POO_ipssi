<?php

use Pb\includes\PageItems;
use App\Controller\ArticleController;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

$items = new PageItems();
$article = new ArticleController();

echo $items->header();
echo $article->getArticles();
echo $items->footer();