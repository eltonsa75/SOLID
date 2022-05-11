<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8b61b93871560f74b99c5a7f418def84
{
    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'src\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'src\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8b61b93871560f74b99c5a7f418def84::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8b61b93871560f74b99c5a7f418def84::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
