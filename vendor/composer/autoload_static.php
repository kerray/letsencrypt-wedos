<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8fa90b4f0789277d085d8cfe0643ab68
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\SimpleCache\\' => 16,
            'Pdp\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\SimpleCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/simple-cache/src',
        ),
        'Pdp\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremykendall/php-domain-parser/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8fa90b4f0789277d085d8cfe0643ab68::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8fa90b4f0789277d085d8cfe0643ab68::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
