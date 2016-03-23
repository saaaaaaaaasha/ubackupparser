<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class UsersData extends Module {

    /**
     * @var string
     */
    protected static $file = 'ugen.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['USER_ID'],
            1 => self::$map['USERNAME'],
            2 => self::$map['GROUP_ID'],
            3 => self::$map['IS_LOCKED'],
            6 => self::$map['TOTAL_MATERIALS'],
            7 => self::$map['REPUTATION_COUNT'],
            8 => self::$map['REPUTATION_SOURCES'],
            9 => self::$map['POSTS_COUNT'],
            10 => self::$map['COMMENTS_COUNT'],
            11 => self::$map['BLOG_COUNT'],
            12 => self::$map['NEWS_COUNT'],
            13 => self::$map['PUB_COUNT'],
            14 => self::$map['LOAD_COUNT'],
            16 => self::$map['BOARD_COUNT'],
            18 => self::$map['DATE_VISIT'],
            19 => self::$map['PHOTO_COUNT'],
        ];
    }
}