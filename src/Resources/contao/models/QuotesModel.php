<?php

namespace jc97\ContaoQuotesCollectionBundle;

use Contao\Model;

class QuotesModel extends Model
{
    
    /**
     * Table name
     * @var string
     */
    protected static $strTable = 'tl_quotes';
    
    public static function findOnePublishedByRandom()
    {
        $t = static::$strTable;
        $arrColumns = array("$t.published='1'");
        $arrOptions = array(
            'order' => "RAND()",
            'limit' => "1"
        );
    
        return static::findBy($arrColumns, null, $arrOptions);
    }
}
