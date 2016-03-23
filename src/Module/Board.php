<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Board extends Module {

    /**
     * @var string file with dump
     */
    protected static $file = 'board.txt';

    /**
     * Function return fields map index => key
     * @return array
     */
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
            12 => self::$map['IP'],
            13 => self::$map['VIEWS_COUNT'],
            15 => self::$map['TITLE'],
            17 => self::$map['SNIPPET'],
            22 => self::$map['USERNAME'],
            27 => self::$map['OTHER1'],
            28 => self::$map['OTHER2'],
            29 => self::$map['OTHER3'],
            30 => self::$map['OTHER4'],
            31 => self::$map['OTHER5'],
            32 => self::$map['MESSAGE'],
            36 => self::$map['USER_ID'],
            39 => self::$map['URL_ALIAS'],
            40 => self::$map['DATE_UPDATE'],
        ];
    }
}