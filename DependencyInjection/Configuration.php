<?php

namespace Insomnia\MaxMindGeoIpBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('insomnia_geo_ip');

        $rootNode
            ->children()
                ->scalarNode('path')
                    ->defaultValue('%kernel.root_dir%/geoip/geoip2.mmdb')
                ->end()
            ->end();

        return $treeBuilder;
    }
}
