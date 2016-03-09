<?php

class Person {
	public $firstName = 'CJ';
	public $lastName = 'Sampson';
	public $fruits = ['dragonfruit'];

	public function randomFruit() 
	{
		$randomIndex = array_rand($this->fruits, 3);
		return $this->fruits[$randomIndex];
	}

	public function addFavoriteFruit($fruit) 
	{
		array_unshift($this->fruits, $fruit);
	}
}
 