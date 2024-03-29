<?php

/*
 * This file is part of contao-quotes-collection-bundle.
 *
 * Copyright (c) 2019 Julian Knorr
 *
 * @license MIT
 */

// Back end modules
$GLOBALS['BE_MOD']['content']['quotes'] = array
(
    'tables'     => array('tl_quotes')
);

// Front end modules
$GLOBALS['FE_MOD']['miscellaneous']['quotes'] = 'jc97\ContaoQuotesCollectionBundle\Module\ModuleQuotes';

// Models
$GLOBALS['TL_MODELS']['tl_quotes'] = 'jc97\\ContaoQuotesCollectionBundle\\Model\\QuotesModel';
