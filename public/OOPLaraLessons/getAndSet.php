<?php 

class Person {

	private $name;   //encapsulation so user may not set or access
	private $age;	 //the name and age variables	

	public function __construct($name) 
	{
		$this->name = $name;
	}

	public function getAge($age) 
	{
		$this->age = $age;
	}

	public function setAge($age) 
	{
		if ($age < 18) 
		{
			throw new Exception("Person is not old enough.");
		}

		$this->age = $age;
	}
}

$john = new Person('John Doe');

$john->setAge(30);

$john->age = 8;

var_dump($john->getAge());