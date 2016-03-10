<?php

class Log {
	public $handle;
	public $filename;

	public function __construct($prefix = "log") 
	{
		$this->filename = 'log-YYYY-MM-DD.log';
		$this->handle = fopen($this->filename, 'a');
	}
	public function logMessage($level, $message) 
	{
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

	public function __destruct() 
	{
		$this->handle = fclose($handle);
	}
}