<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit04db10fcedd614342bdbe76707771435
{
    public static $files = array (
        '792fc8728fef3ba68fb7367b885ff9d6' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'C' => 
        array (
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit04db10fcedd614342bdbe76707771435::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit04db10fcedd614342bdbe76707771435::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit04db10fcedd614342bdbe76707771435::$classMap;

        }, null, ClassLoader::class);
    }
}
