<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Photo extends Module {

    /**
     * @var string
     */
    protected static $file = 'photo.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['PARENT_CAT_ID'],
            2 => self::$map['CAT_ID'],
            3 => self::$map['PHOTO_FILENAME'],
            4 => self::$map['EXT'],
            5 => self::$map['COMMENTS_ENABLED'],
            6 => self::$map['DATE_CREATE'],
            7 => self::$map['COMMENTS_NUM'],
            8 => self::$map['TITLE'],
            9 => self::$map['MESSAGE'],
            11 => self::$map['WIDTH'],
            12 => self::$map['HEIGHT'],
            13 => self::$map['RATING_SCORE'],
            14 => self::$map['RATING_VOTES'],
            16 => self::$map['IP'],
            18 => self::$map['USERNAME'],
            20 => self::$map['VIEWS_COUNT'],
            21 => self::$map['USER_ID'],
            27 => self::$map['URL_ALIAS'],
            28 => self::$map['OTHER1'],
            29 => self::$map['OTHER2'],
            30 => self::$map['OTHER3'],
            31 => self::$map['OTHER4'],
            32 => self::$map['OTHER5'],
            33 => self::$map['DATE_UPDATE'],
        ];
    }
}