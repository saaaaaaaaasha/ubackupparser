<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class ForumPosts extends Module {

    /**
     * @var string
     */
    protected static $file = 'forump.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['CAT_ID'],
            2 => self::$map['DATE_CREATE'],
            3 => self::$map['IS_HTML'],
            4 => self::$map['MESSAGE'],
            6 => self::$map['USERNAME'],
            10 => self::$map['ATTACHMENTS'],
            12 => self::$map['IP'],
            14 => self::$map['POLL'],
            15 => self::$map['USER_ID'],
            16 => self::$map['DATE_UPDATE'],
        ];
    }
}