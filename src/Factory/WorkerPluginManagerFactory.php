<?php

namespace SlmQueue\Factory;

use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use SlmQueue\Worker\WorkerPluginManager;

class WorkerPluginManagerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): WorkerPluginManager
    {
        $config = $container->get('config');
        $config = $config['slm_queue']['worker_manager'];

        return new WorkerPluginManager($container, $config);
    }
}
