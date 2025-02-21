<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit6020563762a4f01e4f624af60de4223f
{
    public static $prefixLengthsPsr4 = array (
        'I' => 
        array (
            'Imagine\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Imagine\\' => 
        array (
            0 => __DIR__ . '/..' . '/imagine/imagine/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit6020563762a4f01e4f624af60de4223f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit6020563762a4f01e4f624af60de4223f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit6020563762a4f01e4f624af60de4223f::$classMap;

        }, null, ClassLoader::class);
    }
}
