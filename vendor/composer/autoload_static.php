<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInita6b84d205ba2f5aaaae232d19b54baa9
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInita6b84d205ba2f5aaaae232d19b54baa9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInita6b84d205ba2f5aaaae232d19b54baa9::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInita6b84d205ba2f5aaaae232d19b54baa9::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
