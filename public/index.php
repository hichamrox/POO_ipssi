<?php
session_start();
$_SESSION["totalpannier"] = 0;

define("ROOT", dirname(__DIR__). "/");
require ROOT. "vendor/autoload.php";

require ROOT. "router/router.php";