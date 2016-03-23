<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class ForumCategories extends Module {

    /**
     * @var string
     */
    protected static $file = 'fr_fr.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['PARENT_ID'],
            4 => self::$map['DATE_CREATE'],
            5 => self::$map['TITLE'],
            6 => self::$map['DESCRIPTION'],
            9 => self::$map['THEMES_COUNT'],
            10 => self::$map['POSTS_COUNT'],
            11 => self::$map['DATE_UPDATE'],
            15 => self::$map['AUTHOR_NAME'],
            16 => self::$map['LAST_THEME_ID'],
            17 => self::$map['THEME_NAME'],
        ];
    }
}