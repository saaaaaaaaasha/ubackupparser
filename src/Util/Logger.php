<?php
namespace ubackupparser\Util;

use ubackupparser\App;

class Logger
{
    /**
     * Execute code only if debugging
     * @param $callable
     */
    public static function run($msg, $jsonencode = false) {

        $file = App::getInstance()->getLogPath() . '/' . 'log.txt';

        if (!is_file($file)) {
            throw new \DomainException('Path ' . $file . ' for logs doesn\'t exist');
        }

		$fh = fopen( dirname(__FILE__) . "/../../logs/log.txt", "a" );
		$msg = ($jsonencode) ? json_encode($msg) : $msg;
        $msg = "[" . date('d.m.Y H:i:s') . "] " . $msg . "\r\n";

		fputs($fh, $msg);
		fclose($fh);
    }
}