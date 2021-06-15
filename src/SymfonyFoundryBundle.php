<?php

declare(strict_types=1);

namespace icanhazstring\Foundry\Bundle;

use icanhazstring\Foundry\Bundle\DependencyInjection\AssignedIdentityExtension;
use icanhazstring\Foundry\Bundle\DependencyInjection\DoctrineAssignedIdentityPass;
use icanhazstring\Foundry\Bundle\DependencyInjection\RemoveWellKnownSchemaFilterPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SymfonyFoundryBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RemoveWellKnownSchemaFilterPass());

        if (class_exists('Tseho\DoctrineAssignedIdentity\EventListener\AssignedIdentityListener')) {
            $container->registerExtension(new AssignedIdentityExtension());
        }
    }
}
