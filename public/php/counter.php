<?php 
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
   
