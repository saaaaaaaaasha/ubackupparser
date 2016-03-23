<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Load extends Module {

    /**
     * @var string
     */
    protected static $file = 'loads.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['PARENT_CAT_ID'],
            2 => self::$map['CAT_ID'],
            4 => self::$map['IS_PINNED'],
            5 => self::$map['DATE_CREATE'],
            7 => self::$map['COMMENTS_ENABLED'],
            6 => self::$map['IS_DRAFT'],
            8 => self::$map['COMMENTS_NUM'],
            9 => self::$map['RATING_SCORE'],
            10 => self::$map['RATING_VOTES'],
            13 => self::$map['VIEWS_COUNT'],
            14 => self::$map['DOWNLOADS_COUNT'],
            15 => self::$map['TITLE'],
            16 => self::$map['SNIPPET'],
            22 => self::$map['DOWNLOAD_EXTERNAL_URL'],
            23 => self::$map['DOWNLOAD_SIZE'],
            24 => self::$map['DOWNLOAD_FILENAME'],
            26 => self::$map['USERNAME'],
            27 => self::$map['OTHER1'],
            28 => self::$map['OTHER2'],
            29 => self::$map['OTHER3'],
            30 => self::$map['OTHER4'],
            31 => self::$map['OTHER5'],
            32 => self::$map['MESSAGE'],
            35 => self::$map['USER_ID'],
            38 => self::$map['URL_ALIAS'],
            39 => self::$map['DATE_UPDATE'],
        ];
    }
}