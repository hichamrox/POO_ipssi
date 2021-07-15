<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6840b9b6c357a24dd613376f8ddb6908
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Pb\\' => 3,
        ),
        'C' => 
        array (
            'Core\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Pb\\' => 
        array (
            0 => __DIR__ . '/../..' . '/templates',
        ),
        'Core\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Core',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6840b9b6c357a24dd613376f8ddb6908::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6840b9b6c357a24dd613376f8ddb6908::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
