<?php

/**
 * This file is part of a heimseiten Contao Bundle.
 *
 * (c) Niels Hegmans 2020 <info@heimseiten.de>
 * @author     Niels Hegmans
 * @package    Dark Mode Backend
 * @license    GPL-3.0-or-later
 * @see        https://github.com/heimseiten/contao-dark-mode-backend-bundle
 *
 */

declare(strict_types=1);

namespace Heimseiten\ContaoDarkModeBackendBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * Class HeimseitenContaoDarkModeBackendExtension
 *
 * @package Heimseiten\ContaoDarkModeBackendBundle\DependencyInjection
 */
class HeimseitenContaoDarkModeBackendExtension extends Extension
{

    /**
     * @param array $configs
     * @param ContainerBuilder $container
     * @throws \Exception
     */
    public function load(array $configs, ContainerBuilder $container): void
    {

        $loader = new YamlFileLoader(
            $container,
            new FileLocator(__DIR__ . '/../Resources/config')
        );

        $loader->load('parameters.yml');
        $loader->load('services.yml');
        $loader->load('listener.yml');
    }
}
