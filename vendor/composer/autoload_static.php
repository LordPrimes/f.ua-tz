<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb65c24b37f5657b122fbb1b72723f39b
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
            0 => __DIR__ . '/../..' . '/',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb65c24b37f5657b122fbb1b72723f39b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb65c24b37f5657b122fbb1b72723f39b::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
