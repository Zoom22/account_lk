<?php

namespace ContainerJg6NqK8;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_L2HJ1cVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.l2HJ1cV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.l2HJ1cV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ServicesController::addService' => ['privates', '.service_locator.cwbwH9q', 'get_ServiceLocator_CwbwH9qService', true],
            'App\\Controller\\ServicesController::index' => ['privates', '.service_locator.hecdLmi', 'get_ServiceLocator_HecdLmiService', true],
            'App\\Controller\\ServicesController::transactions' => ['privates', '.service_locator.lqzS9y4', 'get_ServiceLocator_LqzS9y4Service', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
            'App\\Controller\\ServicesController:addService' => ['privates', '.service_locator.cwbwH9q', 'get_ServiceLocator_CwbwH9qService', true],
            'App\\Controller\\ServicesController:index' => ['privates', '.service_locator.hecdLmi', 'get_ServiceLocator_HecdLmiService', true],
            'App\\Controller\\ServicesController:transactions' => ['privates', '.service_locator.lqzS9y4', 'get_ServiceLocator_LqzS9y4Service', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:terminate' => ['privates', '.service_locator.KfwZsne', 'get_ServiceLocator_KfwZsneService', true],
        ], [
            'App\\Controller\\ServicesController::addService' => '?',
            'App\\Controller\\ServicesController::index' => '?',
            'App\\Controller\\ServicesController::transactions' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ServicesController:addService' => '?',
            'App\\Controller\\ServicesController:index' => '?',
            'App\\Controller\\ServicesController:transactions' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
