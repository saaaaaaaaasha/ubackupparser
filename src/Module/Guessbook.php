<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Guessbook extends Module {

    /**
     * @var string
     */
    protected static $file = 'gb.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['FULL_NAME'],
            2 => self::$map['EMAIL'],
            3 => self::$map['WEBSITE'],
            8 => self::$map['DATE_CREATE'],
            9 => self::$map['IP'],
            10 => self::$map['MESSAGE'],
            12 => self::$map['USERNAME'],
            14 => self::$map['USER_ID'],
            17 => self::$map['DATE_UPDATE'],
        ];
    }
}