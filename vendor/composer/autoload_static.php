<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit743ae93c562b576290dd082ab0691834
{
    public static $classMap = array (
        'RRPhpLibraryV2\\Helpers\\Connection' => __DIR__ . '/../..' . '/RRPhpLibraryV2/Helpers/Connection.php',
        'RRPhpLibraryV2\\Helpers\\PhpCrud' => __DIR__ . '/../..' . '/RRPhpLibraryV2/Helpers/PhpCrud.php',
        'RRPhpLibraryV2\\Helpers\\TableList' => __DIR__ . '/../..' . '/RRPhpLibraryV2/Helpers/TableList.php',
        'RRPhpLibraryV2\\RRPhpLibrary' => __DIR__ . '/../..' . '/RRPhpLibraryV2/RRPhpLibrary.php',
        'model\\Model' => __DIR__ . '/../..' . '/model/Model.php',
        'model\\user' => __DIR__ . '/../..' . '/model/user.php',
        'paypal_class' => __DIR__ . '/../..' . '/model/PayPalCode/paypal.class.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit743ae93c562b576290dd082ab0691834::$classMap;

        }, null, ClassLoader::class);
    }
}
