<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite858f2638d4d5b0983d98c7be3508773
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wujunze\\' => 8,
        ),
        'N' => 
        array (
            'Nfq\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wujunze\\' => 
        array (
            0 => __DIR__ . '/..' . '/wujunze/php-cli-color/src',
        ),
        'Nfq\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Nfq',
        ),
    );

    public static $classMap = array (
        'Nfq\\Akademija\\NotTyped\\NotTyped' => __DIR__ . '/../..' . '/Nfq/Akademija/NotTyped/calculateHomeWorkSum2.php',
        'Nfq\\Akademija\\Soft\\Soft' => __DIR__ . '/../..' . '/Nfq/Akademija/Soft/calculateHomeWorkSum3.php',
        'Nfq\\Akademija\\Strict\\Strict' => __DIR__ . '/../..' . '/Nfq/Akademija/Strict/calculateHomeWorkSum4.php',
        'Wujunze\\Colors' => __DIR__ . '/..' . '/wujunze/php-cli-color/src/Colors.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInite858f2638d4d5b0983d98c7be3508773::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite858f2638d4d5b0983d98c7be3508773::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInite858f2638d4d5b0983d98c7be3508773::$classMap;

        }, null, ClassLoader::class);
    }
}
