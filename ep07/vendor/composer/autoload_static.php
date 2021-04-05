<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit001e27c3166fca400984485b7277a319
{
    public static $files = array (
        '6abf05d3de01158feda89305a2520338' => __DIR__ . '/../..' . '/source/Config.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/plates/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit001e27c3166fca400984485b7277a319::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit001e27c3166fca400984485b7277a319::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit001e27c3166fca400984485b7277a319::$classMap;

        }, null, ClassLoader::class);
    }
}
