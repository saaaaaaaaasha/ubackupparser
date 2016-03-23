<?php

$fieldsMap = require(__DIR__ . '/fields.php');

// This is the main application configuration..
return [
    // Modules which have to parsed.
    // Active ones are located in a folder "Module"
    // Aso there's possible to get modules from app:
    // \ubackupparser\App::getInstance()->init($config, $map);
	'modules' => [
		/*
		'Comments',
		'Guessbook',
		'Repute',
		'Site',
		'Polls',
		'Users',
		'UsersData',
		'Publ',
		'PublCategories',
		'News',
		'NewsCategories',
		'Board',
		'BoardCategories',
		'Forum',
		'ForumCategories',
		'ForumPosts',
		'Load',
		'LoadCategories',
		'Photo',
		*/
		'PhotoCategories',
		//video todo
		],

    // Enable a soft mode.
    // if modules or path to dump doesn't found, application will continue to work.
    // Add to result unknown fields (with numeric index)
	'soft' => true,

    // directory
    'dump' => '/var/www/traning/backup',
    'log'  => '/var/www/traning/ubackupparser/logs',

    // field map
    'map'  => $fieldsMap,
	];