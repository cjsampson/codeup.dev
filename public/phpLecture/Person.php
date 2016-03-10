<?php

class Person {
	public $firstName;
	public $lastName;

	public function __construct($firstName, $lastName)		
	{
		$this->firstName = $firstName;
		$this->lastName = $lastName;
		$this->getFullName();
	}

	public function getFullName() 
	{
		return $this->firstName . " " . $this->lastName;
	}
}

$cj = new Person('CJ', 'Sampson')
echo $cj->firstName;
echo $cj->getFullName();

$ryan = new Person('Ryan', 'Orsinger');
echo "Howdy, " . $ryan->getFullName();

