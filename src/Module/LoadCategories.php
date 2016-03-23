<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class LoadCategories extends Module {

    /**
     * @var string
     */
    protected static $file = 'ld_ld.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['PARENT_CAT_ID'],
            2 => self::$map['IS_SECTION'],
            5 => self::$map['TITLE'],
            6 => self::$map['DESCRIPTION'],
            // 9 probably access rules
            10 => self::$map['URL_ALIAS'],
        ];
    }
}