<?php

namespace ContainerO16tRFs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_BTTnR6dService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.BTTnR6d' shared service.
     *
     * @return \App\Controller\SitesRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\HomeController::index()": the $sites argument is type-hinted with the non-existent class or interface: "App\\Controller\\SitesRepository". Did you forget to add a use statement?');
    }
}