<?php
namespace ubackupparser;

use ubackupparser\Util\Logger;
use ubackupparser\Util\Parser;
use ubackupparser\Module;

class App {

	protected static $instance;

	protected $parser;

	protected $config;

	protected $map;

	public static function getInstance(){
		if(!self::$instance) {
			self::$instance = new self;
		}
		return self::$instance;
	}

	public function init($config, $map) {
		$this->config = $config;
		$this->map = $map;
		return $this;
	}

	public function getParser() {
		if(!$this->parser) {
			$this->parser = new Parser($this->config);
		}
		return $this->parser;
	}

	public function getMap() {
		return $this->map;
	}

	public function getDumpPath() {
		return $this->config['dump'];
	}

	public function getSoftMode() {
		return $this->config['soft'];
	}
}