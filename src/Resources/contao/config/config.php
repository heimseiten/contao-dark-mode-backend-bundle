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

use Contao\System;
use Symfony\Component\HttpFoundation\Request;

if (System::getContainer()->get('contao.routing.scope_matcher')->isBackendRequest(System::getContainer()->get('request_stack')->getCurrentRequest() ?? Request::create(''))) {
    $GLOBALS['TL_CSS'][] = 'bundles/heimseitencontaodarkmodebackend/contao-dark-mode-backend.scss|static';
    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/heimseitencontaodarkmodebackend/contao-dark-mode-backend.js';
}
