<?php

/*
 * This file is part of contao-quotes-collection-bundle.
 *
 * (c) Julian Knorr
 *
 * @license LGPL-3.0-or-later
 */

namespace jc97\ContaoQuotesCollectionBundle\Model;

use Contao\Model;

class QuotesModel extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected static $strTable = 'tl_quotes';

    public static function findOnePublishedByRandom()
    {
        $t = static::$strTable;
        $arrColumns = ["$t.published='1'"];
        $arrOptions = [
            'order' => 'RAND()',
            'limit' => '1',
        ];

        return static::findBy($arrColumns, null, $arrOptions);
    }
}
