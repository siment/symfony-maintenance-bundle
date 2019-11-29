<?php
/*
 * Copyright (C) 2019 Simen Thorsrud
 * @author Simen Thorsrud <simen.thorsrud@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Siment\MaintenanceBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;

/**
 * Registers service configuration.
 */
class MaintenanceBundleExtension extends Extension
{
    /**
     * @param array            $config    Configuration object
     * @param ContainerBuilder $container DI container that provides an API to easily describe services
     *
     * @throws \Exception
     */
    public function load(array $config, ContainerBuilder $container)
    {
        /** @var XmlFileLoader $loader Loads structured data from config file */
        $loader = new XmlFileLoader(
            $container,
            new FileLocator(__DIR__.'/../Resources/config')
        );
        $loader->load('services.xml');
    }
}
