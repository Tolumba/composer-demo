<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc98fb40bab1bf542d95cf9c25e458340
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tolumbas\\Demo\\' => 14,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tolumbas\\Demo\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc98fb40bab1bf542d95cf9c25e458340::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc98fb40bab1bf542d95cf9c25e458340::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}