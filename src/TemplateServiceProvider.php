<?php

namespace Interop\Template\ServiceProvider;

use Interop\Container\ServiceProviderInterface;
use Psr\Container\ContainerInterface;
use Interop\Template\TemplateEngineInterface;

final class TemplateServiceProvider implements ServiceProviderInterface
{
    /** @return callable[] */
    public function getFactories()
    {
        return [
            TemplateEngineInterface::class => function(){}
        ];
    }

    /** @return callable[] */
    public function getExtensions()
    {
        return [];
    }

}