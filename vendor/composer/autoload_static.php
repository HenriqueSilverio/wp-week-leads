<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit54000c3c3165b698a0d6fda60d8674db
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'MiniCurso\\Leads\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'MiniCurso\\Leads\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'MiniCurso\\Leads\\Ajax' => __DIR__ . '/../..' . '/src/Ajax.php',
        'MiniCurso\\Leads\\Assets' => __DIR__ . '/../..' . '/src/Assets.php',
        'MiniCurso\\Leads\\Plugin' => __DIR__ . '/../..' . '/src/Plugin.php',
        'MiniCurso\\Leads\\PostType' => __DIR__ . '/../..' . '/src/PostType.php',
        'MiniCurso\\Leads\\Translation' => __DIR__ . '/../..' . '/src/Translation.php',
        'MiniCurso\\Leads\\Widget' => __DIR__ . '/../..' . '/src/Widget.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit54000c3c3165b698a0d6fda60d8674db::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit54000c3c3165b698a0d6fda60d8674db::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit54000c3c3165b698a0d6fda60d8674db::$classMap;

        }, null, ClassLoader::class);
    }
}