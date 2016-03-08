<?php

var_dump($_POST);

$username = 'cjsampson';
$password = 'crummypassword';

$attemptedUsername = isset($_POST['username']) ? $_POST['username'] : '';
$attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';


if($attemptedPassword == $password && $username == $attemptedUsername) {
	echo "You have succussfully logged in";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>$_POST</title>
</head>
<body>
	<form action="form.php" method="post">
		<label for="username">Username: </label>
		<input type="text" id="username" name="username">
		<label for="password">Password: </label>
		<input type="password" id="password" name="password">
		<button type="submit">Submit</button>
	</form>
</body>
</html>