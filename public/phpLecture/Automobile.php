<?php

class Automobile {
	public $make;
	public $model;
	public $color;

	public function __construct($make, $model, $color) 
	{
		$this->make = $make;
		$this->model = $model;
		$this->color = $color;
	}

	public function honk() 
	{
		
	}	

	public function getDescription() 
	{
		return $this->color . " " . $this->make . " " . $this->model;
	}
}