<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit26449ba610d71a7ead4fbc27e53a6aae
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit26449ba610d71a7ead4fbc27e53a6aae::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit26449ba610d71a7ead4fbc27e53a6aae::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit26449ba610d71a7ead4fbc27e53a6aae::$classMap;

        }, null, ClassLoader::class);
    }
}