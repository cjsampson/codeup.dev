<?php 

<?php

$inputs = [];
foreach($_POST as $key => $input) {
	$inputs[$key] = escape($input);
}

var_dump($inputs);

echo "The \$_GET SUPERGLOBAL is ";
var_dump($_GET);

echo "The \$_SERVER['QUERY_STRING'] is " . $_SERVER]'QUERY_STRING'];

function pageController() {
	$data = [];
	// $data['counter'] = isset($_GET['counter']) ? $_GET['counter'] : 0;
	$data['counter'] = inputHas('counter') ? inputGet('counter') : 0;

	return $data;
}
function pageController(){
	$count = isset($_GET['count']) ? $_GET['count'] : 0;
	return ['count' => $count];
}

extract(pageController());


?>
<!DOCTYPE html>
<html>
<head>
	<title>Counter</title>
	<link rel="stylesheet" href="css/counter.css">
</head>
<body>
	<h3>Count: <?= $count ?></h3>

	<a href="counter.php?count=<?= $count + 1; ?>">Up</a>
	<a href="counter.php?count=<?= $count - 1; ?>">Down</a>

</body>
</html> 
   
