<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Repute extends Module {

    /**
     * @var string
     */
    protected static $file = 'repute.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['TO_ID'],
            2 => self::$map['FROM_ID'],
            3 => self::$map['AMOUNT'],
            4 => self::$map['DATE_CREATE'],
            5 => self::$map['MESSAGE'],
            6 => self::$map['SOURCE_URL'],
            7 => self::$map['ANSWER'],
        ];
    }
}