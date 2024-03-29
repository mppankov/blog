<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbc848fcbb6b57362b0ab878c6ccc1cc6
{
    public static $prefixLengthsPsr4 = array (
        'b' => 
        array (
            'blog\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'blog\\' => 
        array (
            0 => '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbc848fcbb6b57362b0ab878c6ccc1cc6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbc848fcbb6b57362b0ab878c6ccc1cc6::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbc848fcbb6b57362b0ab878c6ccc1cc6::$classMap;

        }, null, ClassLoader::class);
    }
}
