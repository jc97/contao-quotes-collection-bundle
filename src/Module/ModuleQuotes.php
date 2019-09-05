<?php

/*
 * This file is part of contao-quotes-collection-bundle.
 *
 * (c) Julian Knorr
 *
 * @license LGPL-3.0-or-later
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
