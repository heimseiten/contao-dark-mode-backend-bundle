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

namespace Heimseiten\ContaoDarkModeBackendBundle\ContaoManager;

use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;

/**
 * Class Plugin
 *
 * @package Heimseiten\ContaoDarkModeBackendBundle\ContaoManager
 */
class Plugin implements BundlePluginInterface
{
    /**
     * @param ParserInterface $parser
     * @return array
     */
    public function getBundles(ParserInterface $parser)
    {

        return [
            BundleConfig::create('Heimseiten\ContaoDarkModeBackendBundle\HeimseitenContaoDarkModeBackendBundle')
                ->setLoadAfter(['Contao\CoreBundle\ContaoCoreBundle']),
        ];
    }

}

