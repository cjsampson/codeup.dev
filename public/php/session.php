<?php

session_start();

$sessionId = session_id();

$viewCount = isset($_SESSION['view_count']) ? $_SESSION['view_count'] : 0;

$viewCount++;

$_SESSION['view_count'] = $viewCount


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Session Example</title>
</head>	
<body>
	<ul>
		<li>Session ID: <?= $sessionId; ?></li>
		<li>View Count: <?= $viewCount; ?></li>
	</ul>
</body>
</html>