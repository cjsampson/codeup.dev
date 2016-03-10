<?php


class Math {
	public static function add(...$nums) 
	{
		return array_sum($nums);
	}
}

class Person {
	public $age = 1;

	public function haveBirthday() 
	{
		$this->age += 1;
	}

	public function age() 
	{
		return $this->age;
	}
}

$Carey = new Person;
$Carey->haveBirthday();
$Carey->haveBirthday();

$jane = new Person;
$jane->haveBirthday();

echo $Carey->age();
echo $jane->age();


class BankAccount {
	const TAX = .09;
}

echo BankAccount::TAX;