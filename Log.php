<?php

class Log {

	private $handle;
	private $filename;

	public function __construct() 
	{
		$this->setFileName();
		$this->setHandle();
	}

	private function setFilename($prefix = 'log') 
	{
		$this->filename = __DIR__ . '/public/logs/' . $prefix . date('Y-m-d') . '.log';
		
		if ( !is_string($this->filename)) {
			echo 'The property $filename needs to be a string. You gave ' . gettype($filename) . PHP_EOL;
			die();
		}
	}

	private function setHandle() 
	{
		$this->handle = fopen($this->filename, 'a');
	}

	private function logMessage($level, $message) 
	{
	    $time = date('Y-m-d H:i:s');
	    $logLevel = '[' . $level . ']';
	    $log = $time . ' ' . $logLevel . ' ' . $message;
	    fwrite($this->handle, PHP_EOL . $log);
	}

	public function info($message) 
	{
		$this->logMessage('INFO', $message);
	}
	public function error($message) 
	{
		$this->logMessage('ERROR', $message);
	}

	public function __destruct() 
	{
		fclose($this->handle);
	}
}


