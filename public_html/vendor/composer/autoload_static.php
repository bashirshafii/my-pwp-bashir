<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite0735c07783cff933b1c428994d1ea5a
{
    public static $files = array (
        '2c102faa651ef8ea5874edb585946bce' => __DIR__ . '/..' . '/swiftmailer/swiftmailer/lib/swift_required.php',
    );

    public static $prefixLengthsPsr4 = array (
        'R' => 
        array (
            'ReCaptcha\\' => 10,
        ),
        'E' => 
        array (
            'Egulias\\EmailValidator\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ReCaptcha\\' => 
        array (
            0 => __DIR__ . '/..' . '/google/recaptcha/src/ReCaptcha',
        ),
        'Egulias\\EmailValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/egulias/email-validator/EmailValidator',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Lexer\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/lexer/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite0735c07783cff933b1c428994d1ea5a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite0735c07783cff933b1c428994d1ea5a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInite0735c07783cff933b1c428994d1ea5a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
