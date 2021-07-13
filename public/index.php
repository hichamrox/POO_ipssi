<?php

use Pb\includes\PageItems;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

$items = new PageItems();

echo $items->header();
echo $items->footer();