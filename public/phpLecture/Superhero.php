<?php

class Superhero extends Person {
	public $pseudonym;
	public $capeColor;

	public function __construct($firstName, $lastName, $pseudonym)
	{
		parent::__construct($firstName, $lastName);
		$this->pseudonym = $pseudonym;
	}

	public function fullName() 
	{
		return $this->getFirstName() . ' ' . $this->getLastName();
	}

	public function alterEgo() 
	{
		return $this->pseudonym;
	}

	public function hasCape() 
	{
		return !empty($this->capeColor);
	}
}