<?php
require_once 'functions.php';
require_once '../../Input.php';
function pageController(){
	$counter = Input::has('counter') ? Input::get('counter') : 0;
	$miss = 'You lose';

	return [
			'counter' => $counter,
			'miss'	  => $miss
		];

}

extract(pageController());
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pong</title>
</head>
<body>
	<?php if(isset($gameOver)): ?>
		<a href="/php/ping.php"></a>
	<?php else: ?>
		<h4>Counter: <?= $counter; ?></h4>
		<a href="/php/ping.php?counter=<?= $counter + 1; ?>" name="hit">HIT </a><br>
		<a href="/php/ping.php?<?= $miss; ?>" name="miss">MISS</a>
	<?php endif; ?>
</body>
</html>