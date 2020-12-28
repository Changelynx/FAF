<?php

namespace ContainerBOC686V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_ConsoleErrorListenerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.console_error_listener' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Event'.\DIRECTORY_SEPARATOR.'ConsoleErrorSubscriber.php';

        return $container->privates['maker.console_error_listener'] = new \Symfony\Bundle\MakerBundle\Event\ConsoleErrorSubscriber();
    }
}
