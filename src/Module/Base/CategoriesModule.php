<?php
namespace ubackupparser\Module\Base;

/**
 * Trait CategoriesModule for categories type modules
 * @package ubackupparser\Module\Base
 */
trait CategoriesModule {



    protected $types = [
        'SMALL' => [
            'NewsCategories',
            'BlogCategories',
            'FaqCategories',
            'TestsCategories'
        ],
        "BIG" => [
            'PublCategories',
            'LoadCategories',
            'BoardCategories',
            'DirCategories',
            'PhotoCategories',
        ]
    ];

    /**
     * Method return fields for all categories type modules
     * @return array
     */
    public function getFieldsMap() {
        return [
            0  => self::$map['ID'],
            1  => self::$map['PARENT_CAT_ID'],
            2  => self::$map['IS_SECTION'],
            3  => self::$map['POSITION'],
            4  => self::$map['NUM_DATA'],
            5  => self::$map['TITLE'],
            6  => self::$map['DESCRIPTION'],
            // access rules
            7  => self::$map['WHO_CAN_READ'],
            8  => self::$map['WHO_CAN_LOAD'],
            9  => self::$map['WHO_CAN_ADD'],
            10 => self::$map['URL_ALIAS'],
        ];
    }
}