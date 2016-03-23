<?php
namespace ubackupparser\Module\Base;

/**
 * Trait CategoriesModule for categories type modules
 * @package ubackupparser\Module\Base
 */
trait CategoriesModule {

    /**
     * Method return fields for all categories type modules
     * @return array
     */
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