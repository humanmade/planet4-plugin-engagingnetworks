<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb2e1c8770a978ddf4754fab5da8acc5e
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'P4EN\\Views\\' => 11,
            'P4EN\\Models\\' => 12,
            'P4EN\\Controllers\\Menu\\' => 22,
            'P4EN\\Controllers\\Blocks\\' => 24,
            'P4EN\\Controllers\\' => 17,
            'P4EN\\' => 5,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'P4EN\\Views\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/view',
        ),
        'P4EN\\Models\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/model',
        ),
        'P4EN\\Controllers\\Menu\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/controller/menu',
        ),
        'P4EN\\Controllers\\Blocks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/controller/blocks',
        ),
        'P4EN\\Controllers\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes/controller',
        ),
        'P4EN\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'P4EN\\Controllers\\Api\\Fields_Controller' => __DIR__ . '/../..' . '/classes/controller/api/class-fields-controller.php',
        'P4EN\\Controllers\\Api\\Rest_Controller' => __DIR__ . '/../..' . '/classes/controller/api/class-rest-controller.php',
        'P4EN\\Controllers\\Blocks\\Controller' => __DIR__ . '/../..' . '/classes/controller/blocks/class-controller.php',
        'P4EN\\Controllers\\Blocks\\ENForm_Controller' => __DIR__ . '/../..' . '/classes/controller/blocks/class-enform-controller.php',
        'P4EN\\Controllers\\Ensapi_Controller' => __DIR__ . '/../..' . '/classes/controller/class-ensapi-controller.php',
        'P4EN\\Controllers\\Menu\\Controller' => __DIR__ . '/../..' . '/classes/controller/menu/class-controller.php',
        'P4EN\\Controllers\\Menu\\Fields_Settings_Controller' => __DIR__ . '/../..' . '/classes/controller/menu/class-fields-settings-controller.php',
        'P4EN\\Controllers\\Menu\\Pages_Controller' => __DIR__ . '/../..' . '/classes/controller/menu/class-pages-controller.php',
        'P4EN\\Controllers\\Menu\\Pages_Datatable_Controller' => __DIR__ . '/../..' . '/classes/controller/menu/class-pages-datatable-controller.php',
        'P4EN\\Controllers\\Menu\\Pages_Standard_Controller' => __DIR__ . '/../..' . '/classes/controller/menu/class-pages-standard-controller.php',
        'P4EN\\Controllers\\Menu\\Settings_Controller' => __DIR__ . '/../..' . '/classes/controller/menu/class-settings-controller.php',
        'P4EN\\Controllers\\Uninstall_Controller' => __DIR__ . '/../..' . '/classes/controller/class-uninstall-controller.php',
        'P4EN\\Loader' => __DIR__ . '/../..' . '/classes/class-loader.php',
        'P4EN\\Models\\Fields_Model' => __DIR__ . '/../..' . '/classes/model/class-fields-model.php',
        'P4EN\\Models\\Model' => __DIR__ . '/../..' . '/classes/model/class-model.php',
        'P4EN\\Views\\ENForm_View' => __DIR__ . '/../..' . '/classes/view/class-enform-view.php',
        'P4EN\\Views\\View' => __DIR__ . '/../..' . '/classes/view/class-view.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb2e1c8770a978ddf4754fab5da8acc5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb2e1c8770a978ddf4754fab5da8acc5e::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb2e1c8770a978ddf4754fab5da8acc5e::$classMap;

        }, null, ClassLoader::class);
    }
}
