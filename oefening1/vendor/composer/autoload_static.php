<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbf13911a79cc6d3724b4a1606bdbc74e
{
    public static $prefixLengthsPsr4 = array (
        'w' => 
        array (
            'worker\\' => 7,
        ),
        't' => 
        array (
            'tool\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'worker\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/worker',
        ),
        'tool\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src/tool',
        ),
    );

    public static $classMap = array (
        'tool\\Broom' => __DIR__ . '/../..' . '/src/tool/Broom.php',
        'tool\\Tool' => __DIR__ . '/../..' . '/src/tool/Tool.php',
        'worker\\Handyman' => __DIR__ . '/../..' . '/src/worker/Handyman.php',
        'worker\\Worker' => __DIR__ . '/../..' . '/src/worker/Worker.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitbf13911a79cc6d3724b4a1606bdbc74e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitbf13911a79cc6d3724b4a1606bdbc74e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitbf13911a79cc6d3724b4a1606bdbc74e::$classMap;

        }, null, ClassLoader::class);
    }
}
