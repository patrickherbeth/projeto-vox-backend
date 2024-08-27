<?php

namespace ContainerGV6ichl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getEmpresaControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\EmpresaController' shared autowired service.
     *
     * @return \App\Controller\EmpresaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/EmpresaController.php';
        include_once \dirname(__DIR__, 4).'/src/Service/EmpresaService.php';

        $container->services['App\\Controller\\EmpresaController'] = $instance = new \App\Controller\EmpresaController(new \App\Service\EmpresaService(($container->privates['App\\Repository\\EmpresaRepository'] ?? $container->load('getEmpresaRepositoryService')), ($container->services['doctrine.orm.default_entity_manager'] ?? $container->getDoctrine_Orm_DefaultEntityManagerService())));

        $instance->setContainer(($container->privates['.service_locator.jIxfAsi'] ?? $container->load('get_ServiceLocator_JIxfAsiService'))->withContext('App\\Controller\\EmpresaController', $container));

        return $instance;
    }
}
