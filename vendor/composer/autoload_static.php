<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite5b34b7ebbce05aded2063cbbbe4b8b3
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '667aeda72477189d0494fecd327c3641' => __DIR__ . '/..' . '/symfony/var-dumper/Resources/functions/dump.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Component\\VarDumper\\' => 28,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Component\\VarDumper\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/var-dumper',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
    );

    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/..' . '/js-transformer/js-transformer/src',
        1 => __DIR__ . '/..' . '/phug/ast/src',
        2 => __DIR__ . '/..' . '/phug/compiler/src',
        3 => __DIR__ . '/..' . '/phug/dependency-injection/src',
        4 => __DIR__ . '/..' . '/phug/event/src',
        5 => __DIR__ . '/..' . '/phug/formatter/src',
        6 => __DIR__ . '/..' . '/phug/lexer/src',
        7 => __DIR__ . '/..' . '/phug/parser/src',
        8 => __DIR__ . '/..' . '/phug/phug/src',
        9 => __DIR__ . '/..' . '/phug/reader/src',
        10 => __DIR__ . '/..' . '/phug/renderer/src',
        11 => __DIR__ . '/..' . '/phug/util/src',
    );

    public static $prefixesPsr0 = array (
        'P' => 
        array (
            'Pug\\' => 
            array (
                0 => __DIR__ . '/..' . '/pug-php/pug/src',
            ),
            'Phug\\' => 
            array (
                0 => __DIR__ . '/..' . '/phug/js-transformer-filter/src',
            ),
            'Phug' => 
            array (
                0 => __DIR__ . '/..' . '/phug/phug/src',
            ),
        ),
        'N' => 
        array (
            'NodejsPhpFallback\\' => 
            array (
                0 => __DIR__ . '/..' . '/nodejs-php-fallback/nodejs-php-fallback/src',
            ),
        ),
        'J' => 
        array (
            'JsPhpize' => 
            array (
                0 => __DIR__ . '/..' . '/js-phpize/js-phpize/src',
                1 => __DIR__ . '/..' . '/js-phpize/js-phpize-phug/src',
            ),
            'Jade\\' => 
            array (
                0 => __DIR__ . '/..' . '/pug-php/pug/src',
            ),
        ),
        'D' => 
        array (
            'Detection' => 
            array (
                0 => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/namespaced',
            ),
        ),
    );

    public static $classMap = array (
        'Mobile_Detect' => __DIR__ . '/..' . '/mobiledetect/mobiledetectlib/Mobile_Detect.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite5b34b7ebbce05aded2063cbbbe4b8b3::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite5b34b7ebbce05aded2063cbbbe4b8b3::$prefixDirsPsr4;
            $loader->fallbackDirsPsr4 = ComposerStaticInite5b34b7ebbce05aded2063cbbbe4b8b3::$fallbackDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite5b34b7ebbce05aded2063cbbbe4b8b3::$prefixesPsr0;
            $loader->classMap = ComposerStaticInite5b34b7ebbce05aded2063cbbbe4b8b3::$classMap;

        }, null, ClassLoader::class);
    }
}
