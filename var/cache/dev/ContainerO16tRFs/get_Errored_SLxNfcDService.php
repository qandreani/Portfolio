<?php

namespace ContainerO16tRFs;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_Errored_SLxNfcDService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.errored.SLxNfcD' shared service.
     *
     * @return \App\Controller\TimelineRepository
     */
    public static function do($container, $lazyLoad = true)
    {
        $container->throw('Cannot determine controller argument for "App\\Controller\\HomeController::index()": the $timeline argument is type-hinted with the non-existent class or interface: "App\\Controller\\TimelineRepository". Did you forget to add a use statement?');
    }
}
