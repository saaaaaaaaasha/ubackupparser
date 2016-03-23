<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class NewsCategories extends Module {

    /**
     * @var string
     */
    protected static $file = 'nw_nw.txt';

    public function getFieldsMap() {
        return [
            0  => self::$map['ID'],
            1  => self::$map['PARENT_CAT_ID'],
            2  => self::$map['IS_SECTION'],  
            3  => self::$map['TITLE'],                      
            4  => self::$map['DESCRIPTION'],
        ];
    }
}