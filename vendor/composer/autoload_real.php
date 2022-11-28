<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInite4771f8ef1e16b07e4c62407de1644ba
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

        spl_autoload_register(array('ComposerAutoloaderInite4771f8ef1e16b07e4c62407de1644ba', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInite4771f8ef1e16b07e4c62407de1644ba', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInite4771f8ef1e16b07e4c62407de1644ba::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
