<?php

class Autoloader{

    public static function autoload($classe)
    {
        $classe = str_replace("\\", "/", $classe);
        require ROOT. "$classe.php";
    }

    public static function register()
    {
        spl_autoload_register(['Autoloader', "autoload"]);
        // spl_autoload_register(function ($classe) {
        //     $classe = str_replace("\\", "/", $classe);
        // require ROOT. "$classe.php";
        // });
    }
}