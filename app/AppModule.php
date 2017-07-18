<?php

use Corley\FoundationModule\FoundationModule;
use Corley\FrameworkModule\FrameworkModule;
use Corley\ErrorModule\ErrorModule;
use Psr\Container\ContainerInterface;
use Corley\DoctrineModule\DoctrineModule;

class AppModule
{
    private $debug;

    public function __invoke(ContainerInterface $container)
    {
        $config = include __DIR__ . '/configs/parameters.php';

        return [
            new FoundationModule($container),
            new FrameworkModule($container, $config["framework"]),
            new ErrorModule($config["error"]),
            new DoctrineModule($config["doctrine"]),
        ];
    }

    public function __construct($debug = false)
    {
        $this->debug = $debug;
    }
}


