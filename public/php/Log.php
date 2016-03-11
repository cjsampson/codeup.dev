<?php

class Log {
	public $handle;
	public $filename;

	public function __construct($prefix = 'log') 
	{
		$this->filename = $prefix . date('Y-m-d h:i:s') . '.log';
		$this->handle = fopen($this->filename, 'a');
	}
	public function logMessage($level, $message) 
	{
	    $dateYmdhis = date('Y-m-d h:i:s');
	    $logLevel = '[' . $level . ']';
	    $log = $dateYmdhis . ' ' . $logLevel . ' ' . $message;
	    fwrite($this->handle, PHP_EOL . $log);
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
		fclose($this->handle);
	}
}
