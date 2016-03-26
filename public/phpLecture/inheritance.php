<?php

class Person 
{
	protected $firstName;
	protected $lastName;

	public function __construct($firstName, $lastName)
		{
			$this->firstName = $firstName;
			$this->lastName = $lastName;
		}	
		public function fullName() 
		{
			return $this->firstName . ' ' . $this->lastName;
		}
}	

class Superhero extends Person {
	public $pseudonym;
	public $capeColor;

	public function __construct($firstName, $lastName, $pseudonym)
	{
		parent::__construct($firstName, $lastName);
		$this->pseudonym = $pseudonym;
		
	}

	public function alterEgo() 
	{
		return 'Top Secret Alternate Ego: ' . $this->fullName();
	}

	public function hasCape() 
	{
		return !empty($this->capeColor);
	}
}

$superman = new Superhero('Clark', 'Kent', 'Superman');
echo $superman->alterEgo();
