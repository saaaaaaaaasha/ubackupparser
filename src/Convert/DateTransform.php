<?php
namespace ubackupparser\Convert;

use ubackupparser\Convert\Base\Convert;

class DateTransform extends Convert {

	public function getAllowFields() {
		return [
			self::$map['DATE_CREATE'],
		];
	}

	public function process($field, &$fields, $module){
		$fields[$field] = date('Y-m-d G:i:s', $fields[$field]);
	}

}