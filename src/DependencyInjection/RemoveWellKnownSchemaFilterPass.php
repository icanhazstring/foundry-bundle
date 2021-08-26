<?php

declare(strict_types=1);

namespace icanhazstring\FoundryBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

final class RemoveWellKnownSchemaFilterPass implements CompilerPassInterface
{
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasDefinition('doctrine.dbal.default_schema_asset_filter_manager')) {
            return;
        }

        $definition = $container->getDefinition('doctrine.dbal.default_schema_asset_filter_manager');
        $definitionArguments = $definition->getArguments();

        foreach ($definitionArguments as $assetFilters) {
            foreach ($assetFilters as $index => $assetFilter) {
                if ((string)$assetFilter === 'doctrine.dbal.well_known_schema_asset_filter') {
                    unset($assetFilters[$index]);
                }
            }

            $definition->setArguments([$assetFilters]);
        }
    }
}
