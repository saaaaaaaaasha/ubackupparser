<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Site extends Module {

    /**
     * @var string
     */
    protected static $file = 'site.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['HAS_OWN_TEMPLATE'],
            2 => self::$map['IS_DRAFT'],
            3 => self::$map['ALLOWED_GROUPS'],
            4 => self::$map['TITLE'],
            5 => self::$map['ATTACHMENTS'],
            6 => self::$map['CODE'],
            7 => self::$map['DATE_CREATE'],
            8 => self::$map['PROXY_URLS'],
            9 => self::$map['URL_ALIAS'],
        ];
    }
}