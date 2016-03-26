# ubackupparser

> Parser csv files (database) from backup for uCoz sites. :+1: <br />
> [ru] Парсер бекапов базы данных uCoz сайтов.

---

## Installation
By composer:

```sh
$ composer require saaaaaaaaasha/ubackupparser
```

## Usage

Create a new file (for example: index.php) and insert code which is listed below:

```php
<?php
require "vendor/autoload.php";

//not necessary
$modules = [
    "PhotoCategories",
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
```

and run script:

```sh
$ php index.php
```

You can change some options (like path to dump folder, path to log file etc) in config file - **/ubackupparser/src/config.php**
