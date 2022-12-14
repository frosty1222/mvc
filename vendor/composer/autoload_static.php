<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit634e57b36de4379f0448b85cf2283851
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MVC\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MVC\\' => 
        array (
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit634e57b36de4379f0448b85cf2283851::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit634e57b36de4379f0448b85cf2283851::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit634e57b36de4379f0448b85cf2283851::$classMap;

        }, null, ClassLoader::class);
    }
}
