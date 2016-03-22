<?php
require "vendor/autoload.php";

$config = require "src/config.php";
$map    = require "src/map.php";

try {
	$app = \ubackupparser\App::getInstance()->init($config, $map);

	$parser = $app->getParser();
	$parser->run();

	//print_r($parser->get()['Comments'][1000]);
	print_r($parser->get());
} 
catch(\Exception $e) {
	\ubackupparser\Util\Logger::run($e->getMessage());
}




/*
$parser = new \ubackupparser\Parser($config);
$parser->run();

print_r($parser->get());

<?php
require "vendor/autoload.php";
$config = require "src/config.php";

$parser = new \ubackupparser\Parser($config);
$parser->run();

print_r ($parser->get());
*/