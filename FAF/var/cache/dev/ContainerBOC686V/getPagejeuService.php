<?php

namespace ContainerBOC686V;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getPagejeuService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Entity\Pagejeu' shared autowired service.
     *
     * @return \App\Entity\Pagejeu
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Entity'.\DIRECTORY_SEPARATOR.'Pagejeu.php';

        return $container->privates['App\\Entity\\Pagejeu'] = new \App\Entity\Pagejeu();
    }
}
