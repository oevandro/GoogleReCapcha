<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit7bd3c1bd265c580021e6a1a446b22134
{
    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit7bd3c1bd265c580021e6a1a446b22134::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit7bd3c1bd265c580021e6a1a446b22134::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
