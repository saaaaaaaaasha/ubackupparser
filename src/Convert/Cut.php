<?php
namespace ubackupparser\Convert;

use ubackupparser\Convert\Base\Convert;

class Cut extends Convert {

	/**
     * @var bool whether to populate SNIPPET with $CUT$ data
     */
    protected $populateSnippet = true;

	public function getAllowFields() {
		return [
			self::$map['MESSAGE'],				
		];
	}

	public function process($field, &$fields, $module){
        if (strpos($fields[$field], '$CUT$') === false) {
            return;
        }

        if ($this->populateSnippet) {
            list(
                $fields[self::$map['SNIPPET']],
                $fields[$field]
            ) = explode('$CUT$', $fields[$field]);
        } else {
            $fields[$field] = str_replace('$CUT$', '', $fields[$field]);
        }
    }

}