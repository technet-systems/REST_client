<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5508358df186372bc010b6295f415afa
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Daru79\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Daru79\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/daru79',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5508358df186372bc010b6295f415afa::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5508358df186372bc010b6295f415afa::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
