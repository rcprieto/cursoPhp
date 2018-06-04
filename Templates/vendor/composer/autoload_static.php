<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd2df749ead7bb2c5b93acb413041d16d
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Rain' => 
            array (
                0 => __DIR__ . '/..' . '/rain/raintpl/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd2df749ead7bb2c5b93acb413041d16d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd2df749ead7bb2c5b93acb413041d16d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitd2df749ead7bb2c5b93acb413041d16d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
