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

namespace Heimseiten\ContaoDarkModeBackendBundle\Tests\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\DelegatingParser;
use Contao\TestCase\ContaoTestCase;
use Heimseiten\ContaoDarkModeBackendBundle\ContaoManager\Plugin;
use Heimseiten\ContaoDarkModeBackendBundle\HeimseitenContaoDarkModeBackendBundle;

/**
 * Class PluginTest
 *
 * @package Heimseiten\ContaoDarkModeBackendBundle\Tests\ContaoManager
 */
class PluginTest extends ContaoTestCase
{
    /**
     * Test Contao manager plugin class instantiation
     */
    public function testInstantiation(): void
    {
        $this->assertInstanceOf(Plugin::class, new Plugin());
    }

    /**
     * Test returns the bundles
     */
    public function testGetBundles(): void
    {
        $plugin = new Plugin();

        /** @var array $bundles */
        $bundles = $plugin->getBundles(new DelegatingParser());

        $this->assertCount(1, $bundles);
        $this->assertInstanceOf(BundleConfig::class, $bundles[0]);
        $this->assertSame(HeimseitenContaoDarkModeBackendBundle::class, $bundles[0]->getName());
        $this->assertSame([ContaoCoreBundle::class], $bundles[0]->getLoadAfter());
    }

}
