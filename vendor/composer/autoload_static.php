<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit521c2fe0f8e0ac14e9838679337658f7
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '0ccdf99b8f62f02c52cba55802e0c2e7' => __DIR__ . '/..' . '/zircote/swagger-php/src/functions.php',
        'c7359326b6707d98bdc176bf9ddeaebf' => __DIR__ . '/..' . '/catfan/medoo/medoo.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\HttpFoundation\\' => 33,
            'Symfony\\Component\\Finder\\' => 25,
            'Swagger\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\HttpFoundation\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/http-foundation',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Swagger\\' => 
        array (
            0 => __DIR__ . '/..' . '/zircote/swagger-php/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
            'Doctrine\\Common\\Annotations\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/annotations/lib',
            ),
        ),
    );

    public static $classMap = array (
        'IndexController' => __DIR__ . '/../..' . '/src/Controller/IndexController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit521c2fe0f8e0ac14e9838679337658f7::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit521c2fe0f8e0ac14e9838679337658f7::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit521c2fe0f8e0ac14e9838679337658f7::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit521c2fe0f8e0ac14e9838679337658f7::$classMap;

        }, null, ClassLoader::class);
    }
}
