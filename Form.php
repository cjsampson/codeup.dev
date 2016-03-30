<?php

class Form {

	public $id = null;
	public $name = null;
	public $location = null;
	public $date_established = null;
	public $area_in_acres = null;
	public $description = null;
	public $images = null;

	public function __construct($data = [])
	{
		
	}

	public function postFormValues() 
	{
		Input::get()
	}
}