<?php

namespace jc97\ContaoQuotesCollectionBundle;

use Contao\Module;

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
