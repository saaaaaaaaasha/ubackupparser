<?php
namespace ubackupparser\Util;

//use ubackupparser\Util\Logger;
use ubackupparser\Module\Module;
use ubackupparser\App;

class Parser {

	protected $options = array();
	protected $data;

	public function __construct($c) {

		if (!($c['dump'] && is_dir($c['dump']))) {
			throw new \InvalidArgumentException("The `".$c['dump']."` doesn't exist or isn't readable");
		}

		if (!($c['modules'] && is_array($c['modules']))) {
			throw new \InvalidArgumentException();
		}

		$this->options = $c;
	}

	public function run() {

		$result = array();
		$modules = $this->options['modules'];

		foreach($modules as $modulekey) {
        	//$className = __NAMESPACE__ . '\\Module\\' . ucfirst($modulekey);
			$className = 'ubackupparser\\Module\\' . ucfirst($modulekey);

	        if (!class_exists($className)) {
	            throw new \InvalidArgumentException("Module `$modulekey` does not supported");
	        }

	        $module = new $className($this->options['dump']);

	        $result[$modulekey] = $module->get();
		}

		$this->data = $result;

		return $this;
	}

	public function get() {
		return $this->data;
	}
}