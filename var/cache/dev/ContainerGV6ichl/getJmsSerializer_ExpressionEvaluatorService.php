<?php

namespace ContainerGV6ichl;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getJmsSerializer_ExpressionEvaluatorService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'jms_serializer.expression_evaluator' shared service.
     *
     * @return \JMS\Serializer\Expression\ExpressionEvaluator
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Expression/CompilableExpressionEvaluatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Expression/ExpressionEvaluatorInterface.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer/src/Expression/ExpressionEvaluator.php';
        include_once \dirname(__DIR__, 4).'/vendor/symfony/expression-language/ExpressionLanguage.php';
        include_once \dirname(__DIR__, 4).'/vendor/jms/serializer-bundle/ExpressionLanguage/BasicSerializerFunctionsProvider.php';

        $a = new \Symfony\Component\ExpressionLanguage\ExpressionLanguage();
        $a->registerProvider(new \JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider());

        return $container->privates['jms_serializer.expression_evaluator'] = new \JMS\Serializer\Expression\ExpressionEvaluator($a, ['container' => $container]);
    }
}
