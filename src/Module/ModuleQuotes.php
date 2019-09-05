<?php

/*
 * This file is part of contao-quotes-collection-bundle.
 *
 * Copyright (c) 2019 Julian Knorr
 *
 * @license MIT
 */

namespace jc97\ContaoQuotesCollectionBundle\Module;

use Contao\Module;
use jc97\ContaoQuotesCollectionBundle\Model\QuotesModel;

class ModuleQuotes extends Module
{
    protected $strTemplate = 'mod_quotes';

    protected function compile()
    {
        $objQuote = QuotesModel::findOnePublishedByRandom();
        $this->Template->author = $objQuote->author;
        $this->Template->text = $objQuote->text;
    }
}
