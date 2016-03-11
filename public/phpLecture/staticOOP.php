<?php

class Person{

	public $firstName;
	public $lastName;

	public static $population = 7200000000;

	public static function getScientificName() {
		return 'Homo Sapien';
	}

	public static function birth(){
		self::$population += 1;
	}
}

echo Person::$population . PHP_EOL;
echo Person::getScientificName() . PHP_EOL;

$chris = new Person();
$chris->firstName = 'CJ';

Person::birth();

echo Person::$population . PHP_EOL;

$tomas = new Person();
var_dump($chris);
var_dump($tomas);