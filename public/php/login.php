<?php
require_once '../../Auth.php';
require_once '../../Input.php';

function pageController(){
	session_start();
	$username = Input::has('username') ? Input::get('username') : "";
	$password = Input::has('password') ? Input::get('password') : "";	

	$username = Input::escape($username);
	$password = Input::escape($password);

	if(Auth::attempt($username, $password)){
		header('Location: authorized.php');
		die();
 	} 
	// $attemptedUsername = isset($_POST['username']) ? $_POST['username'] : '';
	// $attemptedPassword = isset($_POST['password']) ? $_POST['password'] : '';

	// if($attemptedUsername == $username && $attemptedPassword == $password) {
	// 	$_SESSION['logged_in_user'] = $username;
	// 	header('Location: authorized.php');
	// 	die();
	// } elseif($attemptedPassword != '' || $attemptedUsername != '') {
	// 	echo "The username or password is incorrect";
	// } 
	return [
		'username' 	=> $username,
		'password'	=> $password, 
	];
}

extract(pageController());

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login.php</title>
</head>
<body>
	<form method="post">
		<label for="username">Username: </label>
		<input type="text" name="username" id="username">
		<label for="password">Password: </label>
		<input type="password" name="password" id="password">
		<button type="submit">Submit</button>
	</form>
</body>
</html>
