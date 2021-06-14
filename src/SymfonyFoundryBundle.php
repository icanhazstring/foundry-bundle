<?php

declare(strict_types=1);

namespace icanhazstring\Symfony\Foundry\Bundle;

use icanhazstring\Symfony\Foundry\Bundle\DependencyInjection\RemoveWellKnownSchemaFilterPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class SymfonyFoundryBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new RemoveWellKnownSchemaFilterPass());
    }
}
