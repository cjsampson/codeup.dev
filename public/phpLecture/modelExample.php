<?php

class Model
{
	private $attributes = [];
	protected $position;

	public function __set($key, $value) 
	{
	 	$this->attributes[$key] = $value;
	}

	public function __get($key)
	{
		if (array_key_exists($key, $this->attributes)) {
			return $this->attributes[$key];
		}
		return null;
	}

	public function setPosition($value) 
	 {
	 	$this->position = $value;
	 } 
}

$testModel = new Model();

$testModel->name = 'Test';
var_dump($testModel);

$testModel->position = 'left';
var_dump($testModel);

$testModel->setPosition('right');
var_dump($testModel);