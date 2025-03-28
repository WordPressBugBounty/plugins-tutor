<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit48240e8a60ed823f585bfa7e10a24080
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Tutor\\Traits\\' => 13,
            'Tutor\\PaymentGateways\\' => 22,
            'Tutor\\Models\\' => 13,
            'Tutor\\Helpers\\' => 14,
            'Tutor\\Ecommerce\\' => 16,
            'Tutor\\Cache\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Tutor\\Traits\\' => 
        array (
            0 => __DIR__ . '/../..' . '/traits',
        ),
        'Tutor\\PaymentGateways\\' => 
        array (
            0 => __DIR__ . '/../..' . '/ecommerce/PaymentGateways',
        ),
        'Tutor\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/models',
        ),
        'Tutor\\Helpers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/helpers',
        ),
        'Tutor\\Ecommerce\\' => 
        array (
            0 => __DIR__ . '/../..' . '/ecommerce',
        ),
        'Tutor\\Cache\\' => 
        array (
            0 => __DIR__ . '/../..' . '/cache',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit48240e8a60ed823f585bfa7e10a24080::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit48240e8a60ed823f585bfa7e10a24080::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit48240e8a60ed823f585bfa7e10a24080::$classMap;

        }, null, ClassLoader::class);
    }
}
