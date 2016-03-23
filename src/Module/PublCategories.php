<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class PublCategories extends Module {

    /**
     * @var string
     */
    protected static $file = 'pu_pu.txt';

    public function getFieldsMap() {
        return array(
            0  => self::$map['ID'],
            1  => self::$map['PARENT_CAT_ID'],
            2  => self::$map['IS_GROUP'],
            3  => self::$map['POSITION'],  
            4  => self::$map['NUM_DATA'],
            5  => self::$map['TITLE'],
            6  => self::$map['DESCRIPTION'],
            // access rules
            7  => self::$map['WHO_CAN_READ'],
            8  => self::$map['WHO_CAN_LOAD'],
            9  => self::$map['WHO_CAN_ADD'],           
            10 => self::$map['URL_ALIAS'],
        );
    }
}