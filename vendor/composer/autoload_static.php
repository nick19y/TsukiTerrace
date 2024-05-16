<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5c7f5e2aa1b1d498a4317656698b8c7e
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TsukiTerrace\\MVC\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TsukiTerrace\\MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5c7f5e2aa1b1d498a4317656698b8c7e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5c7f5e2aa1b1d498a4317656698b8c7e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit5c7f5e2aa1b1d498a4317656698b8c7e::$classMap;

        }, null, ClassLoader::class);
    }
}
