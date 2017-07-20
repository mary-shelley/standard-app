<?php

use Corley\FoundationModule\FoundationModule;
use Corley\FrameworkModule\FrameworkModule;
use Corley\ErrorModule\ErrorModule;
use Psr\Container\ContainerInterface;
use Corley\DoctrineModule\DoctrineModule;
use Corley\TwigModule\TwigModule;
use Corley\LoggerModule\LoggerModule;
use Corley\SmtpModule\SmtpModule;
use Corley\EventDispatcherModule\EventDispatcherModule;
use Corley\NormalizeModule\NormalizeModule;

class AppModule
{
    private $debug;

    public function __invoke(ContainerInterface $container)
    {
        $config = include __DIR__ . '/configs/parameters.php';

        return [
            new FoundationModule($container),
            new FrameworkModule($container, $config['framework']),
            new ErrorModule($config['error']),
            new DoctrineModule($config['doctrine']),
            new TwigModule($config['twig']),
            new LoggerModule($config['logger']),
            new SmtpModule($config['smtp']),
            new EventDispatcherModule(),
            new NormalizeModule($config['serializer']),
            new App\Module($config['app']),
        ];
    }

    public function __construct($debug = false)
    {
        $this->debug = $debug;
    }
}


