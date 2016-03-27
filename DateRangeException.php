<?php

require 'Input.php';

class DateRangeException extends InvalidArgumentException 
{
	
	public static function getDate($key, $min = '500-01-01', $max) {
		$max = date_create('now');
		$date = Input::get($key);		
		if(empty($date)) {
			throw new OutOfRangeException('Please enter a date (YYYY-MM-DD).');
		}
		$validDate = date_create($date);
		if($validDate > $max) {
			throw new DateRangeException('The date cannot be in the future.');
		}
		if($validDate > $min) {
			throw new DateRangeException('The date is too far in the past.');
		}

		return $validDate;
	}
}