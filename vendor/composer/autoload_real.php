<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit5c7f5e2aa1b1d498a4317656698b8c7e
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        spl_autoload_register(array('ComposerAutoloaderInit5c7f5e2aa1b1d498a4317656698b8c7e', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit5c7f5e2aa1b1d498a4317656698b8c7e', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit5c7f5e2aa1b1d498a4317656698b8c7e::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
