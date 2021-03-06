<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit040af2acd77ab0be2bcdd940e14683e5
{
    public static $files = array (
        'a0d249b0029f460436fea935b3c46e9a' => __DIR__ . '/../..' . '/houdunwang/core/functions.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'system\\' => 7,
        ),
        'h' => 
        array (
            'houdunwang\\' => 11,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
        'W' => 
        array (
            'Whoops\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
        ),
        'G' => 
        array (
            'Gregwar\\Captcha\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'system\\' => 
        array (
            0 => __DIR__ . '/../..' . '/system',
        ),
        'houdunwang\\' => 
        array (
            0 => __DIR__ . '/../..' . '/houdunwang',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
        'Whoops\\' => 
        array (
            0 => __DIR__ . '/..' . '/filp/whoops/src/Whoops',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Gregwar\\Captcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/gregwar/captcha',
        ),
    );

    public static $prefixesPsr0 = array (
        'U' => 
        array (
            'Upload' => 
            array (
                0 => __DIR__ . '/..' . '/codeguy/upload/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit040af2acd77ab0be2bcdd940e14683e5::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit040af2acd77ab0be2bcdd940e14683e5::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit040af2acd77ab0be2bcdd940e14683e5::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
