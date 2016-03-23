<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Users extends Module {

    /**
     * @var string
     */
    protected static $file = 'users.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['USERNAME'],
            2 => self::$map['PASSWORD'],
            3 => self::$map['AVATAR_URL'],
            5 => self::$map['FULL_NAME'],
            6 => self::$map['GENDER_ID'],
            7 => self::$map['EMAIL'],
            8 => self::$map['WEBSITE'],
            9 => self::$map['ICQ'],
            10 => self::$map['COUNTRY_ID'],
            11 => self::$map['REGION'],
            12 => self::$map['CITY'],
            13 => self::$map['SIGNATURE'],
            14 => self::$map['TITLE'],
            15 => self::$map['DATE_CREATE'],
            16 => self::$map['IP'],
            17 => self::$map['REGISTRATION_SERVER'],
            21 => self::$map['IS_BANNED'],
            22 => self::$map['BIRTHDAY'],
            23 => self::$map['NEED_ACTIVATION'],
            25 => self::$map['DATE_UPDATE'],
        ];
    }
}