<?php


class Input
{
    /**
     * Check if a given value was passed in the request
     *
     * @param string $key index to look for in request
     * @return boolean whether value exists in $_POST or $_GET
     */
    public static function has($key) {
        return isset($_REQUEST[$key]);
    }

    /**
     * Get a requested value from either $_POST or $_GET
     *
     * @param string $key index to look for in index
     * @param mixed $default default value to return if key not found
     * @return mixed value passed in request
     */
    public static function get($key, $default = null) {
        return (self::has($key)) ? $_REQUEST[$key] : $default;
    }

    // Check if the input value is empty and is there
    public static function hasValue() {
        if(isset($_REQUEST[$key]) && ($_REQUEST[$key]) != '') {
            return true;
        }
    }


    public static function escape($key) {
        return htmlspecialchars(strip_tags($key));
    }


    public static function getString($key, $min = 1, $max = 750) 
    {
        $value = self::get($key);

        if(!is_string($value)) {
            throw new InvalidArgumentException('The input $value needs to be a string.');
        }
        if(empty($value)){
            throw new OutOfRangeException('You need to enter a value.');
        }
        if(!is_string($value) || $value == null || is_resource($value) || is_numeric($value) || 
            is_object($value) || is_numeric($value) ) 
        {
            throw new DomainException('The input value $value is incorrect.');
        }
        if((!is_numeric($min)) && (!$is_numeric($max))) {
            throw new InvalidArgumentException('$min and $max must be numeric types.');
        }
        if(strlen($value) > $max){ 
            throw new LengthException('The input field must be less than $max.');
        }
        if(strlen($value) < $min) {
            throw new LengthException('The input field must be more than $min.');
        }
        return $value;
    
    }

    public static function getNumber($key, $min = 1, $max = 4294966) {
        $value = self::get($key);

        if(!is_numeric($value)) {
            throw new InvalidArgumentException('The input value $value is not a number.');
        }
        if(!is_numeric($max) || !is_numeric($min)) {
            throw new InvalidArgumentException('The max and min values are not numeric.');
        }
        if(empty($value)) {
            throw new OutOfRangeException('The input field is empty.');
        }
        if(!is_numeric($value)) {
            throw new DomainException('The input $value is not a numeric value.');
        }
        if($value > $max) {
            throw new RangeException('The input $value is too large.');
        }
        if($value < $min) {
            throw new RangeException('The input $value is too small.');
        }

        return (float)$value;
    }

    public static function getDate($key, $min = '1000-01-01', $max) 
    {
        $max = date_create('now');
        $date = self::get($key);
        $validDate = date_create($date);
        if($validDate > $max) {
            throw new DateRangeException('Date can not be in the future.');
        }
        if($validDate < $min) {
            throw new DateRangeException('Date is too old.');
        }
        if(!is_string($validDate)) {
            throw new DomainException('Please enter valid date');
        }

        return $validDate;
    }

    ///////////////////////////////////////////////////////////////////////////
    //                      DO NOT EDIT ANYTHING BELOW!!                     //
    // The Input class should not ever be instantiated, so we prevent the    //
    // constructor method from being called. We will be covering private     //
    // later in the curriculum.                                              //
    ///////////////////////////////////////////////////////////////////////////
    private function __construct() {}
}

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
