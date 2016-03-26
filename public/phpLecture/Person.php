<?php

class Person {
	protected $firstName;
	protected $lastName;

	public function __construct($firstName, $lastName)		
	{
		$this->setFirstName($firstName);
		$this->setLastName($lastName);
	}

	protected function setFirstName($firstName) 
	{
		$this->firstName = trim($firstName);
	}

	protected function setLastName($lastName) 
	{
		$this->lastName = trim($lastName);
	}

	protected function getFirstName($firstName) 
	{
		return $this->firstName;
	}

	protected function getLastName($lastName) 
	{
		return $this->lastName;
	}

	public function fullName() 
	{
		return $this->getFirstName . " " . $this->getLastName;
	}
}

$person = new Person('John', 'Doe');
echo $person->setFirstName('Jane');

