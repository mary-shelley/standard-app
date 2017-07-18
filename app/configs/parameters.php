<?php
return [
    "framework" => [
        "app"       => __DIR__ . '/../../src',
        "cache"     => __DIR__ . '/../../var/cache',
        "debug"     => $this->debug,
    ],
    "error" => [
        "debug"     => $this->debug,
    ],
    "doctrine" => [
        "orm" =>  [
            "connection" => [
                'driver' => 'pdo_sqlite',
                'path' => __DIR__ . '/../../var/db.sqlite',
            ],
        ],
        "entities" => [realpath(__DIR__ . "/../../src")],
        "development" => $this->debug,
        "cache" => realpath(__DIR__ . "/../../var/cache"),
    ],
];
