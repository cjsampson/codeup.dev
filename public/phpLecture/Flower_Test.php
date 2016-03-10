<?php

require_once 'Customer_Flower.php';
require_once 'Order.php';
require_once '/php/functions.php';

// order form has hidden orderNumber
// that submits with the form

if(inputHas('orderNumber')) {
	$customer = new Customer();
	$customer->name = inputGet('customerName');
	$customer->orderNumber - inptGet('orderNumber');

	$customer = new Order();
	$order->orderNumber = inputGet('orderNumber');
	$order->deliveryAddress = inputGet('deliveryAddress');
	$order->customer = $customer;
}

if(inputHas('delivered')) {
	$order->deliver();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Flower/Order/Customer Objects</title>
</head>
<body>
	<?php if($order->delivered): ?>
		<h1>Your order is here</h1>
	<?php endif; ?>
</body>
</html>

