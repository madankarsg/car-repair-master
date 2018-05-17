<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7a20c6aed2d6ebc05c3e1dc0c93e32c
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

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7a20c6aed2d6ebc05c3e1dc0c93e32c::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7a20c6aed2d6ebc05c3e1dc0c93e32c::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}