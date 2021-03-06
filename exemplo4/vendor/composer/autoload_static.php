<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd99bbabf960d8d3a06f57a2dad32dbc9
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Model\\Client' => __DIR__ . '/../..' . '/App/Src/Model/client.class.php',
        'Model\\Product' => __DIR__ . '/../..' . '/App/Src/Model/product.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitd99bbabf960d8d3a06f57a2dad32dbc9::$classMap;

        }, null, ClassLoader::class);
    }
}
