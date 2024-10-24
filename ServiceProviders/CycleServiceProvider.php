<?php

namespace Anodio\Cycle\ServiceProviders;

use Anodio\Core\AttributeInterfaces\ServiceProviderInterface;
use Anodio\Core\Attributes\ServiceProvider;

#[ServiceProvider]
class CycleServiceProvider implements ServiceProviderInterface
{
    public function register(\DI\ContainerBuilder $containerBuilder): void
    {
        // TODO: Implement register() method.
    }
}