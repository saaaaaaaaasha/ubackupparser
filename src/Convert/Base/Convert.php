<?php
namespace ubackupparser\Convert\Base;

use ubackupparser\App;

abstract class Convert implements IConvertible {

	protected $options;

    protected static $map;
	
	protected $allowFields = array();


    public function __construct(array $options = array()) {
        foreach ($options as $option => $value) {
            $this->$option = $value;
        }
        self::$map = App::getInstance()->getMap();
    }

    public function isAllowed($field) {
    	return in_array($field, $this->getAllowFields());
    }

    abstract public function process($field, &$fields, $module);

    abstract public function getAllowFields();
}