<?php

namespace ContainerD37ogqT;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Vd2yWgtService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.Vd2yWgt' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.Vd2yWgt'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'site' => ['privates', '.errored..service_locator.Vd2yWgt.App\\Entity\\Sites', NULL, 'Cannot autowire service ".service_locator.Vd2yWgt": it references class "App\\Entity\\Sites" but no such service exists.'],
        ], [
            'site' => 'App\\Entity\\Sites',
        ]);
    }
}