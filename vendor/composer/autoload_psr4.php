<?php

// autoload_psr4.php @generated by Composer

$vendorDir = dirname(__DIR__);
$baseDir = dirname($vendorDir);

return array(
    'Symfony\\Polyfill\\Ctype\\' => array($vendorDir . '/symfony/polyfill-ctype'),
    'Symfony\\Component\\Yaml\\' => array($vendorDir . '/symfony/yaml'),
    'Psr\\Http\\Message\\' => array($vendorDir . '/psr/http-message/src', $vendorDir . '/psr/http-factory/src'),
    'Psr\\Http\\Client\\' => array($vendorDir . '/psr/http-client/src'),
    'Maileva\\Client\\' => array($baseDir . '/lib', $baseDir . '/test'),
    'GuzzleHttp\\Psr7\\' => array($vendorDir . '/guzzlehttp/psr7/src'),
    'GuzzleHttp\\Promise\\' => array($vendorDir . '/guzzlehttp/promises/src'),
    'GuzzleHttp\\' => array($vendorDir . '/guzzlehttp/guzzle/src'),
    'Doctrine\\Instantiator\\' => array($vendorDir . '/doctrine/instantiator/src/Doctrine/Instantiator'),
);
