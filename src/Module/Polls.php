<?php
namespace ubackupparser\Module;

use ubackupparser\Module\Base\Module;

class Polls extends Module {

    /**
     * @var string
     */
    protected static $file = 'po_po.txt';

    public function getFieldsMap() {
        return [
            0 => self::$map['ID'],
            1 => self::$map['INPUT_TYPE'],
            2 => self::$map['IS_ACTIVE'],
            3 => self::$map['DATE_POLL_START'],
            4 => self::$map['DATE_POLL_END'],
            5 => self::$map['BUTTON_NAME'],
            6 => self::$map['ANSWER1'],
            7 => self::$map['ANSWER2'],
            8 => self::$map['ANSWER3'],
            9 => self::$map['ANSWER4'],
            10 => self::$map['ANSWER5'],
            11 => self::$map['ANSWER6'],
            12 => self::$map['ANSWER7'],
            13 => self::$map['ANSWER8'],
            14 => self::$map['ANSWER9'],
            15 => self::$map['ANSWER10'],
            16 => self::$map['ANSWER11'],
            17 => self::$map['ANSWER12'],
            18 => self::$map['ANSWER13'],
            19 => self::$map['ANSWER14'],
            20 => self::$map['ANSWER15'],
            21 => self::$map['ANSWER1_COUNT'],
            22 => self::$map['ANSWER2_COUNT'],
            23 => self::$map['ANSWER3_COUNT'],
            24 => self::$map['ANSWER4_COUNT'],
            25 => self::$map['ANSWER5_COUNT'],
            26 => self::$map['ANSWER6_COUNT'],
            27 => self::$map['ANSWER7_COUNT'],
            28 => self::$map['ANSWER8_COUNT'],
            29 => self::$map['ANSWER9_COUNT'],
            30 => self::$map['ANSWER10_COUNT'],
            31 => self::$map['ANSWER11_COUNT'],
            32 => self::$map['ANSWER12_COUNT'],
            33 => self::$map['ANSWER13_COUNT'],
            34 => self::$map['ANSWER14_COUNT'],
            35 => self::$map['ANSWER15_COUNT'],
            //36 => self::$map['TOTAL_ANSWERS'],
            37 => self::$map['TOTAL_ANSWERS'],
        ];
    }
}