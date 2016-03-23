<?php
namespace ubackupparser\Util;

use ubackupparser\Module\Module;
use ubackupparser\App;

/**
 * Class Parser
 * @package ubackupparser\Util
 */
class Parser {

    /**
     * @var array options (modules, dump path and mode)
     */
	protected $options = array();

    /**
     * @var last results
     */
	protected $data;

    /**
     * Check dump path and modules
     * @param $options
     */
	public function __construct(array $c) {

		if (!($c['dump'] && is_dir($c['dump']))) {
			throw new \InvalidArgumentException("The `".$c['dump']."` doesn't exist or isn't readable");
		}

		if (!($c['modules'] && is_array($c['modules']))) {
			throw new \InvalidArgumentException("Not included modules");
		}

		$this->options = $c;
	}

    /**
     * Function convert dump for listened modules
     * @return $this
     */
	public function run() {

		$result = array();
		$modules = $this->options['modules'];

		foreach($modules as $modulekey) {
        	//$className = __NAMESPACE__ . '\\Module\\' . ucfirst($modulekey);
			$className = 'ubackupparser\\Module\\' . ucfirst($modulekey);

	        if (!class_exists($className)) {
	        	if ($this->options['soft'])
	        		continue;

        		throw new \InvalidArgumentException("Module `$modulekey` does not supported");
	        }

	        $module = new $className($this->options['dump']);

	        $result[$modulekey] = $module->get();
		}

		$this->data = $result;

		return $this;
	}

    /**
     * Funtion return last result (converting dump)
     * @return last
     */
	public function get() {
		return $this->data;
	}
}