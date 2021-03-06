<?php

namespace Container9FCYyuH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Rbudo4Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator._rbudo4' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator._rbudo4'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'pagejeuRepository' => ['privates', 'App\\Repository\\PagejeuRepository', 'getPagejeuRepositoryService', true],
        ], [
            'pagejeuRepository' => 'App\\Repository\\PagejeuRepository',
        ]);
    }
}
