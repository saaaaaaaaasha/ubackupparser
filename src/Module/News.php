<?php
//self ::([^,]+)*
//self ::$map['$1']
//self\:\:\$map\[([^]]+)]

namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class News extends Module {

    /**
     * @var string
     */
    protected static $file = 'news.txt';
    protected static $upload = '_nw';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['CAT_ID'],
            2 => self::$map['URL_YEAR'],
            3 => self::$map['URL_MONTH'],
            4 => self::$map['URL_DAY'],
            5 => self::$map['IS_DRAFT'],
            6 => self::$map['IS_PINNED'],
            7 => self::$map['COMMENTS_ENABLED'],
            8 => self::$map['DATE_CREATE'],
            9 => self::$map['COMMENTS_NUM'],
            10 => self::$map['USERNAME'],
            11 => self::$map['TITLE'],
            12 => self::$map['SNIPPET'],
            13 => self::$map['MESSAGE'], //with $CUT$
            14 => self::$map['SHOW_ATTACHMENTS'],
            15 => self::$map['ATTACHMENTS'],
            16 => self::$map['VIEWS_COUNT'],
            17 => self::$map['RATING_SCORE'],
            18 => self::$map['RATING_VOTES'],
            20 => self::$map['IP'],
            21 => self::$map['OTHER1'],
            22 => self::$map['OTHER2'],
            23 => self::$map['OTHER3'],
            24 => self::$map['OTHER4'],
            25 => self::$map['OTHER5'],
            26 => self::$map['IS_HTML'],
            27 => self::$map['COMMENTS_SUBSCRIBE'],
            28 => self::$map['URL_ALIAS'],
            29 => self::$map['DATE_UPDATE'],
        ];
    }
}