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
        if(isset($_REQUEST[$key]) && ($_REQUEST[$key]) != '')) {
            return true;
        }
    }


    public static function escape($key) {
        return htmlspecialchars(strip_tags($key));
    }


    public static function getString($key, $min = 1, $max = 500) 
    {
        $value = self::get($key);
        if(!is_string($value)) {
            throw new InvalidArgumentException('The input $value needs to be a string.');
        }
        if(!is_string($value)) {
            throw new InvalidArgumentException('The input value $value is incorrect.');
        }
        if(!is_numeric($min) && $is_numeric($max)) {
            throw new InvalidArgumentException('$min and $max must be numeric types.');
        }
        if($value > $max){ 
            throw new LengthException('The input field must be less than $max.');
        }
        if($value < $min) {
            throw new LengthException('The input field must be more than $min.');
        }
        



        if()

        $value = self::get($key);

        if($value == null || is_resource($value) || is_numeric($value) || is_object($value) || is_numeric($value) ) {
            throw new exception('The value needs to be a string');
        } else {
            return $value;
        }

    }

    public static function getNumber($key, $min = 1, $max = ) {
        $value = self::get($key);       
        if(!is_numeric($value) || $value == null) {
            throw new exception('The value is not a number or is null');
        }
        return (float)$value;
    }

    public static function getDate($key) {
        $date = self::get($key);
        $validDate = date_create($date);
        if(!$validDate) {
            throw new exception('Please enter valid date');
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
