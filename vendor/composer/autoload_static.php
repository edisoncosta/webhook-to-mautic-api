<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit89ad31125d27dafe82b530655344bc79
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'M' => 
        array (
            'Mautic\\' => 7,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Mautic\\' => 
        array (
            0 => __DIR__ . '/..' . '/mautic/api-library/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit89ad31125d27dafe82b530655344bc79::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit89ad31125d27dafe82b530655344bc79::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}