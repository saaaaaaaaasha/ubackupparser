<?php
namespace ubackupparser\Convert;

use ubackupparser\Convert\Base\Convert;

class Date extends Convert {

	public function getAllowFields() {
		return [
			self::$map['DATE_CREATE'],
			self::$map['DATE_UPDATE'],
			self::$map['DATE_VISIT'],	
			//self::$map['DATE_POLL_START'],	
			//self::$map['DATE_POLL_END'],	
								
		];
	}

	public function process($field, &$fields, $module){
		$fields[$field] = date('Y-m-d G:i:s', $fields[$field]);
	}

}