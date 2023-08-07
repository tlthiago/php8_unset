<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1d57e4866ea83346c1ad7abf844fcaf1
{
    public static $files = array (
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '093de4587805eaf6d3ee0fe5d19a1ec4' => __DIR__ . '/../..' . '/fundamentos/configuracao.php',
    );

    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fundamentos\\' => 12,
        ),
        'T' => 
        array (
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
        ),
        'P' => 
        array (
            'Pecee\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fundamentos\\' => 
        array (
            0 => __DIR__ . '/../..' . '/fundamentos',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Pecee\\' => 
        array (
            0 => __DIR__ . '/..' . '/pecee/simple-router/src/Pecee',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1d57e4866ea83346c1ad7abf844fcaf1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1d57e4866ea83346c1ad7abf844fcaf1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit1d57e4866ea83346c1ad7abf844fcaf1::$classMap;

        }, null, ClassLoader::class);
    }
}
