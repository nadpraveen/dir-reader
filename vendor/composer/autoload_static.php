<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0cc2165a923a8b19ec42e1e4c940dab9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Techunico\\DirReader\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Techunico\\DirReader\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit0cc2165a923a8b19ec42e1e4c940dab9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0cc2165a923a8b19ec42e1e4c940dab9::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0cc2165a923a8b19ec42e1e4c940dab9::$classMap;

        }, null, ClassLoader::class);
    }
}