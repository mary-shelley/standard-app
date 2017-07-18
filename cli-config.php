<?php

use Corley\Modular\Loader;
use Acclimate\Container\CompositeContainer;
use Doctrine\ORM\Tools\Console\ConsoleRunner;
use Doctrine\Common\Annotations\AnnotationRegistry;

$loader = require __DIR__ . '/vendor/autoload.php';
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

$container = new CompositeContainer();
$modules = new Loader($container);

$modules->prepare(new AppModule(true));

// replace with mechanism to retrieve EntityManager in your app
$entityManager = $modules->getContainer()->get("orm");

return ConsoleRunner::createHelperSet($entityManager);

