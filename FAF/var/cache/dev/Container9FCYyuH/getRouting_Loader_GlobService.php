<?php

namespace Container9FCYyuH;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getRouting_Loader_GlobService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'routing.loader.glob' shared service.
     *
     * @return \Symfony\Component\Routing\Loader\GlobFileLoader
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'LoaderInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'Loader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'FileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'routing'.\DIRECTORY_SEPARATOR.'Loader'.\DIRECTORY_SEPARATOR.'GlobFileLoader.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'FileLocatorInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'config'.\DIRECTORY_SEPARATOR.'FileLocator.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'http-kernel'.\DIRECTORY_SEPARATOR.'Config'.\DIRECTORY_SEPARATOR.'FileLocator.php';

        return $container->privates['routing.loader.glob'] = new \Symfony\Component\Routing\Loader\GlobFileLoader(($container->privates['file_locator'] ?? ($container->privates['file_locator'] = new \Symfony\Component\HttpKernel\Config\FileLocator(($container->services['kernel'] ?? $container->get('kernel', 1))))));
    }
}
