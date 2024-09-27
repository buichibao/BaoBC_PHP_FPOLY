<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite41fc619e5755d87f4f88313f2be796f
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Core\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Core\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite41fc619e5755d87f4f88313f2be796f::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite41fc619e5755d87f4f88313f2be796f::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite41fc619e5755d87f4f88313f2be796f::$classMap;

        }, null, ClassLoader::class);
    }
}
