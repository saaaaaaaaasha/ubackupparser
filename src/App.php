<?php
/**
 * ubackupparser application file.
 *
 * @author Morgunov Alexander <fxl@list.ru>
 * @link https://github.com/saaaaaaaaasha/ubackupparser
 */

namespace ubackupparser;

use ubackupparser\Util\Parser;
use ubackupparser\Module;

/**
 * Class App
 * @package ubackupparser
 */
class App {

    /**
     * @var App instance
     */
	protected static $instance;

    /**
     * @var Parser instance
     */
	protected $parser;

    /**
     * @var array Config
     */
	protected $config;

    /**
     * @var array Full fields map
     */
	protected $map;

    private function __construct() {}

    /**
     * Function return App instance
     * @return App
     */
	public static function getInstance(){
		if(!self::$instance) {
			self::$instance = new self;
		}
		return self::$instance;
	}

    /**
     * Function load config
     *
     * @param array $modules
     * @return $this
     */
	public function init(array $modules = array()) {

        $this->config = require(__DIR__ . '/config.php');;
        $this->map = $this->config['map'];

        if (!empty($modules)) {
            $this->config['modules'] = $modules;
        }

		return $this;
	}

    /**
     * Function return Parser class
     * @return Parser
     */
	public function getParser() {
		if(!$this->parser) {
			$this->parser = new Parser($this->config);
		}
		return $this->parser;
	}

    /**
     * @return array
     */
	public function getMap() {
		return $this->map;
	}

    /**
     * @return string
     */
	public function getDumpPath() {
		return $this->config['dump'];
	}

    /**
     * @return string
     */
    public function getLogPath() {
        return $this->config['log'];
    }

    /**
     * @return string
     */
	public function getSoftMode() {
		return $this->config['soft'];
	}
}