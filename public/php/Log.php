<?php

class Log {
	public $handle;
	public $filename;

	public function logMessage($level, $message) 
	{
		$handle = fopen('log-YYYY-MM-DD.log', 'a');
	    $dateYmd = date('Y-m-d');
	    $datehis = date('h:i:s');
	    $logLevel = '[' . $level . ']';
	    $log = $dateYmd . ' ' . $datehis . ' ' . $logLevel . ' ' . $message;
	    fwrite($handle, PHP_EOL . $log);
	    fclose($handle);
	}

	public function info() 
	{
		$this->logMessage('INFO', 'This is an info message');
	}
	public function error() 
	{
		$this->logMessage('ERROR', 'This is an error message');
	}
}