<?php

namespace ContainerSugUWXu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getTwig_MissingExtensionSuggestorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'twig.missing_extension_suggestor' shared service.
     *
     * @return \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'twig'.\DIRECTORY_SEPARATOR.'extra-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MissingExtensionSuggestor.php';

        return $container->privates['twig.missing_extension_suggestor'] = new \Twig\Extra\TwigExtraBundle\MissingExtensionSuggestor();
    }
}
