<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8ecbcdd47570fb5814ea64720939dd01
{
    public static $prefixesPsr0 = array (
        'B' => 
        array (
            'Bardiz12\\AHPDss' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit8ecbcdd47570fb5814ea64720939dd01::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}