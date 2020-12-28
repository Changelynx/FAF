<?php

namespace ContainerBcbSkBa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPsysh_ShellService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'psysh.shell' shared service.
     *
     * @return \Psy\Shell
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'console'.\DIRECTORY_SEPARATOR.'Application.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psy'.\DIRECTORY_SEPARATOR.'psysh'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Shell.php';

        $container->privates['psysh.shell'] = $instance = new \Psy\Shell(($container->privates['Psy\\Configuration'] ?? $container->load('getConfigurationService')));

        $instance->setScopeVariables(['container' => ($container->services['test.service_container'] ?? ($container->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($container->services['kernel'] ?? $container->get('kernel', 1)), 'test.private_services_locator'))), 'kernel' => ($container->services['kernel'] ?? $container->get('kernel', 1)), 'self' => $instance, 'parameters' => ($container->services['test.service_container'] ?? ($container->services['test.service_container'] = new \Symfony\Bundle\FrameworkBundle\Test\TestContainer(($container->services['kernel'] ?? $container->get('kernel', 1)), 'test.private_services_locator')))->getParameterBag()->all()]);
        $instance->addCommands([]);

        return $instance;
    }
}