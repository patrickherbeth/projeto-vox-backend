<?php

namespace ContainerX4UFfKn;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getSocioControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\SocioController' shared autowired service.
     *
     * @return \App\Controller\SocioController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/SocioController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/SocioService.php';

        $a = ($container->privates['debug.validator'] ?? $container->getDebug_ValidatorService());

        $container->services['App\\Controller\\SocioController'] = $instance = new \App\Controller\SocioController(new \App\Service\SocioService(($container->privates['App\\Repository\\SocioRepository'] ?? $container->load('getSocioRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService()), $a, ($container->privates['debug.serializer'] ?? $container->load('getDebug_SerializerService'))), $a);

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\SocioController', $container));

        return $instance;
    }
}
