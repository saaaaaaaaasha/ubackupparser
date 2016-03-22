<?php
//self ::([^,]+)*
//self ::$map['$1']
//self\:\:\$map\[([^]]+)]

namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Comments extends Module {

    /**
     * @var string
     */
    protected static $file = 'comments.txt';

    public function getFieldsMap() {
        return array(
            0  => self::$map['ID'],
            1  => self::$map['MODULE_ID'],
            2  => self::$map['POST_ID'],  
            3  => self::$map['PENDING'],                      
            4  => self::$map['DATE_CREATE'],
            5  => self::$map['USERNAME'],
            6  => self::$map['FULL_NAME'],
            7  => self::$map['EMAIL'],
            8  => self::$map['WEBSITE'],
            9  => self::$map['IP'],
            10 => self::$map['MESSAGE'],
            11 => self::$map['ANSWER'],
            12 => self::$map['USER_ID'],
            13 => self::$map['PARENT_ID'],
            14 => self::$map['LIKES'],
            15 => self::$map['LIKES_USER_IDS'],
        );
    }
}