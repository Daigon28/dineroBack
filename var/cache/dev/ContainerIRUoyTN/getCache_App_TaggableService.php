<?php

namespace ContainerIRUoyTN;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCache_App_TaggableService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'cache.app.taggable' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TagAwareAdapter
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'CacheItemPoolInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'AdapterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'TagAwareAdapterInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'CacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'TagAwareCacheInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'PruneableInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'ResettableInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LoggerAwareInterface.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache-contracts'.\DIRECTORY_SEPARATOR.'CacheTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Traits'.\DIRECTORY_SEPARATOR.'ContractsTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'psr'.\DIRECTORY_SEPARATOR.'log'.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'LoggerAwareTrait.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'cache'.\DIRECTORY_SEPARATOR.'Adapter'.\DIRECTORY_SEPARATOR.'TagAwareAdapter.php';

        return $container->privates['cache.app.taggable'] = new \Symfony\Component\Cache\Adapter\TagAwareAdapter(($container->services['cache.app'] ?? $container->load('getCache_AppService')));
    }
}
