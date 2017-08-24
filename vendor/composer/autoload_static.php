<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite7cc1845d467e533cbbdfc74f171ffd0
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'AcfExportManager\\' => 17,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'AcfExportManager\\' => 
        array (
            0 => __DIR__ . '/..' . '/helsingborg-stad/acf-export-manager/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite7cc1845d467e533cbbdfc74f171ffd0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite7cc1845d467e533cbbdfc74f171ffd0::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}