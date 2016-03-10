// Orders 
// Deliveries
// Flowers
// Customers
// Balloons

<?php

class Order {
	public $orderNumber;
	public $customer;
	public $orderDate;
	public $flowers;
	public $cost;
	public $price = random(3333, 456789456789);
	public $deliveryAddress;
	public $delivered = false;

	public function __construct() 
	{
		$this->orderNumber = uniqid();
		$this->sendDelivery();
	}

	public function isOrderDelivered() 
	{
		return $this->delivered;	
	}

	public function deliver() 
	{
		$this->delivered = true;
		return $this->delivered;
	}

	public function sendDelivery() 
	{
		echo "Hey Bob, deliver " . $this->orderNumber . " to " $this->deliveryAddress;
	}
}