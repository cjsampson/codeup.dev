<?php

function pageController(){
	$counter = isset($_GET['counter']) ? $_GET['counter'] : 0;
	$hit = $counter++;
	$miss = $counter;

	return ['counter' => $counter,
			'hit'	  => $hit,
			'miss'	  => $miss
		];

}
extract(pageController());
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ping</title>
</head>
<body>
	<?php if (isset($gameOver)): ?>
		<a href="pong.php">New Game</a>
	<?php else: ?>
		<h4>Counter: <?= $counter; ?></h4>
		<a href="pong.php?counter=<?= $hit;?>" name="hit">HIT </a><br>
		<a href="pong.php?gameOver=true" name="miss">MISS</a>
	<?php endif; ?>
</body>
</html>