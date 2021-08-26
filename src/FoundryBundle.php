<?php

declare(strict_types=1);

namespace icanhazstring\FoundryBundle;

use icanhazstring\FoundryBundle\DependencyInjection\AssignedIdentityExtension;
use icanhazstring\FoundryBundle\DependencyInjection\RemoveWellKnownSchemaFilterPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class FoundryBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RemoveWellKnownSchemaFilterPass());

        if (class_exists('Tseho\DoctrineAssignedIdentity\EventListener\AssignedIdentityListener')) {
            $container->registerExtension(new AssignedIdentityExtension());
        }
    }
}
