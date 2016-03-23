<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Forum extends Module {

    /**
     * @var string
     */
    protected static $file = 'forum.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['CAT_ID'],
            2 => self::$map['HAS_POLL'],
            3 => self::$map['IS_PINNED'],
            4 => self::$map['DATE_CREATE'],
            5 => self::$map['IS_LOCKED'],
            6 => self::$map['POSTS_COUNT'],
            7 => self::$map['VIEWS_COUNT'],
            8 => self::$map['TITLE'],
            9 => self::$map['DESCRIPTION'],
            10 => self::$map['USERNAME'],
            12 => self::$map['AUTHOR_NAME'],
            15 => self::$map['USER_ID'],
        ];
    }
}