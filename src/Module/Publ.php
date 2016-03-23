<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Publ extends Module {

    /**
     * @var string
     */
    protected static $file = 'publ.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['PARENT_CAT_ID'],
            2 => self::$map['CAT_ID'],
            5 => self::$map['DATE_CREATE'],
            7 => self::$map['COMMENTS_ENABLED'],
            8 => self::$map['COMMENTS_NUM'],
            9 => self::$map['RATING_SCORE'],
            10 => self::$map['RATING_VOTES'],
            13 => self::$map['TITLE'],
            14 => self::$map['SNIPPET'],
            15 => self::$map['USERNAME'],
            16 => self::$map['VIEWS_COUNT'],
            17 => self::$map['AUTHOR_NAME'],
            19 => self::$map['WEBSITE'],
            20 => self::$map['MESSAGE'],
            21 => self::$map['AUTHOR_EMAIL'],
            22 => self::$map['USER_ID'],
            25 => self::$map['URL_ALIAS'],
            26 => self::$map['DATE_UPDATE'],
        ];
    }
}