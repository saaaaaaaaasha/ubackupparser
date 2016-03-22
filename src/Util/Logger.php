<?php

/**
 * @author Morgunov Alexander <fxl@list.ru>
 */


namespace ubackupparser\Util;

class Logger
{
	private static $_timer;

    private static $_timers = array();

    public static $debug;

    /**
     * Execute code only if debugging
     * @param $callable
     */
    public static function run($msg, $time = false, $jsonencode = false) {
        //print dirname(__FILE__) . "/../temp/log.txt";
        //$timeEnd = microtime(true);
        //$running = $timeEnd - App::$time;
		$fh = fopen( dirname(__FILE__) . "/../../logs/log.txt", "a" );
		$msg = ($jsonencode) ? json_encode($msg) : $msg;
        $running = '';//($time) ? "; " . round($running, 5) . " sec." : '';
        $msg = "[" . date('d.m.Y H:i:s') . $running . "] " . $msg . "\r\n";

		fputs($fh, $msg);
		fclose($fh);
    }
}