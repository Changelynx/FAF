<?php

namespace ContainerSugUWXu;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getMaker_Maker_MakeRegistrationFormService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'maker.maker.make_registration_form' shared service.
     *
     * @return \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'MakerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'AbstractMaker.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'maker-bundle'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Maker'.\DIRECTORY_SEPARATOR.'MakeRegistrationForm.php';

        return $container->privates['maker.maker.make_registration_form'] = new \Symfony\Bundle\MakerBundle\Maker\MakeRegistrationForm(($container->privates['maker.file_manager'] ?? $container->load('getMaker_FileManagerService')), ($container->privates['maker.renderer.form_type_renderer'] ?? $container->load('getMaker_Renderer_FormTypeRendererService')), ($container->services['router'] ?? $container->getRouterService()));
    }
}
