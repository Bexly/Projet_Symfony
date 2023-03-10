<?php

namespace ContainerZxwZDCQ;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_PjvxySoService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pjvxySo' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pjvxySo'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'callApiService' => ['privates', 'App\\Service\\CallApiService', 'getCallApiServiceService', true],
        ], [
            'callApiService' => 'App\\Service\\CallApiService',
        ]);
    }
}
