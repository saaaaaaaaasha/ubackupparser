<?php
namespace ubackupparser\Convert;

use ubackupparser\Convert\Base\Convert;

class AccessRules extends Convert {

    public function getAllowFields() {
        return [
            self::$map['WHO_CAN_READ'],
            self::$map['WHO_CAN_LOAD'],
            self::$map['WHO_CAN_ADD'],

        ];
    }

    public function process($field, &$fields, $module){
        $groups = explode(',', trim(trim($fields[$field]),','));

        if (!is_array($groups)) {
            $groups = [$groups];
        }

        $fields[$field] = $groups;
    }


}