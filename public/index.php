<?php

use Fdp\includes\Items;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

$items = new PageItems();

echo $items->header();
echo $items->footer();