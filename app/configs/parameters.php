<?php

$src = realpath(__DIR__ . '/../../src');
$views = realpath(__DIR__ . '/../views');
$cache = realpath(__DIR__ . '/../../var/cache');
$logs = realpath(__DIR__ . '/../../var/logs');

return [
    'app' => [
        // here your configurations
    ],
    'framework' => [
        'app'       => $src,
        'cache'     => $cache,
        'debug'     => $this->debug,
    ],
    'error' => [
        'debug'     => $this->debug,
    ],
    'doctrine' => [
        'orm' =>  [
            'connection' => [
                'driver' => 'pdo_sqlite',
                'path' => __DIR__ . '/../../var/db.sqlite',
            ],
        ],
        'entities' => [$src],
        'development' => $this->debug,
        'cache' => $cache,
    ],
    'twig' => [
        'templates' => $views,
        'options' => [
            'cache' => ($this->debug) ? false : $cache,
            'debug' => $this->debug,
        ],
    ],
    'logger' => [
        'name' => 'default',
        'handlers' => [
            \Monolog\Handler\StreamHandler::class => [
                'path' => $logs,
                'level' => \Monolog\Logger::DEBUG,
            ],
        ],
    ],
    'smtp' => [
        'type' => \Zend\Mail\Transport\InMemory::class,
        'options' => [],
    ],
    'serializer' =>[
        'cache' => $cache . '/normalize_module_cache',
        'debug' => $this->debug,
    ],
];
