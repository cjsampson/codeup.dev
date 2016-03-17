<?php

require_once '../../Auth.php';
require_once '../../Input.php';

session_start();
if(!isset($_SESSION['logged_in_user'])){
	header('Location: login.php');
	die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Authorized</title>
</head>
<body>
	<h4>You are authorized for this website</h4>
	<form action="/php/logout.php" name="logout">
		<button type="submit">Log Out</button>
	</form>
	<a href="/php/login.php">Login.php</a>
</body>
</html>