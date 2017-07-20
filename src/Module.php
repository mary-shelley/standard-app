<?php
namespace App;

use Corley\Modular\Module\ModuleInterface;

class Module implements ModuleInterface
{
    private $options;

    public function __construct(array $options = [])
    {
        $this->options = $options;
    }

    /**
     * @return Psr\ContainerInterface
     */
    public function getContainer()
    {
        /**
         * Prepare your service container
         *
         * Example:
         *   $serviceManager = new ServiceManager();
         *   $serviceManager->configure([]);
         *   return $serviceManager;
         */
        return null;
    }
}
