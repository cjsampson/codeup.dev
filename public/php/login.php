<?php

session_start();

$username = "cjsampson";
$password = "password";

$attemptedUsername = isset($_POST['username']) ? $_POST['username'] : '';
$attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';

if($attemptedUsername == $username && $attemptedPassword == $password) {
	$_SESSION['logged_in_user'] = $username;
	header('Location: authorized.php');
	die();
} elseif($attemptedPassword != '' || $attemptedUsername != '') {
	echo "The username or password is incorrect";
} 

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login.php</title>
</head>
<body>
	<form action="login.php" method="post">
		<label for="username">Username: </label>
		<input type="text" name="username" id="username">
		<label for="password">Password: </label>
		<input type="pasword" name="password" id="password">
		<button type="submit">Submit</button>
	</form>
</body>
</html>
