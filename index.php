<?php
require "vendor/autoload.php";

//not necessary
$modules = [
    //"PhotoCategories"
    "Load"
];

try {
    // get App instance
    $app = \ubackupparser\App::getInstance()->init( $modules );

    // get parser and run convert listed modules
    $parser = $app->getParser();
    $parser = $parser->run();

    // get results array
    print_r( $parser->get() );
}
catch( \Exception $e ) {
    \ubackupparser\Util\Logger::run( $e->getMessage() );
}

// or short version (modules load from config file)

/*
    print json_encode(\ubackupparser\App::getInstance()
        ->init()
        ->getParser()
        ->run()
        ->get());
*/