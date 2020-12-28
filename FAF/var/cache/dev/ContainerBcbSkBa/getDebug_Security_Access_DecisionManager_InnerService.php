<?php

namespace ContainerBcbSkBa;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getDebug_Security_Access_DecisionManager_InnerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'debug.security.access.decision_manager.inner' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AccessDecisionManager
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AccessDecisionManagerInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'security-core'.\DIRECTORY_SEPARATOR.'Authorization'.\DIRECTORY_SEPARATOR.'AccessDecisionManager.php';

        return $container->privates['debug.security.access.decision_manager.inner'] = new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () use ($container) {
            yield 0 => ($container->privates['debug.security.voter.security.access.authenticated_voter'] ?? $container->load('getDebug_Security_Voter_Security_Access_AuthenticatedVoterService'));
            yield 1 => ($container->privates['debug.security.voter.security.access.simple_role_voter'] ?? $container->load('getDebug_Security_Voter_Security_Access_SimpleRoleVoterService'));
            yield 2 => ($container->privates['debug.security.voter.security.access.expression_voter'] ?? $container->load('getDebug_Security_Voter_Security_Access_ExpressionVoterService'));
        }, 3), 'affirmative', false, true);
    }
}
