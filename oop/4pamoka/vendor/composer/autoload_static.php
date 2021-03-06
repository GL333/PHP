<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitbaa89f20176a8588671c66f9e6fdf053
{
    public static $classMap = array (
        'Marks\\DB_connection' => __DIR__ . '/../..' . '/src/Marks.php',
        'Marks\\Marks' => __DIR__ . '/../..' . '/src/Marks.php',
        'Modules\\DB_connection' => __DIR__ . '/../..' . '/src/Modules.php',
        'Modules\\Modules' => __DIR__ . '/../..' . '/src/Modules.php',
        'Students\\DB_connection' => __DIR__ . '/../..' . '/src/Students.php',
        'Students\\Students' => __DIR__ . '/../..' . '/src/Students.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitbaa89f20176a8588671c66f9e6fdf053::$classMap;

        }, null, ClassLoader::class);
    }
}
