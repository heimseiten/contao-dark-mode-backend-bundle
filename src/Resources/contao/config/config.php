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

if (\defined('TL_MODE') && 'BE' === TL_MODE) {
    $GLOBALS['TL_CSS'][] = 'bundles/heimseitencontaodarkmodebackend/contao-dark-mode-backend.scss|static';
    $GLOBALS['TL_JAVASCRIPT'][] = 'bundles/heimseitencontaodarkmodebackend/contao-dark-mode-backend.js';
}
