<?php

require "Log.php";

class Auth {

	 public static $password = '$2y$10$SLjwBwdOVvnMgWxvTI4Gb.YVcmDlPTpQystHMO2Kfyi/DS8rgA0Fm';

	 public static function attempt($username, $password) {
	 	$logger = new Log;
	 	if($username == 'guest' && password_verify($password, self::$password)) {
	 		$_SESSION['logged_in_user'] = $username;
	 		$logger->logInfo('Success');
	 		return true;
	 	}
	 	$logger->logError('Failure');
	 	return false;
	 }
	 public static function check() {
	 	return isset($_SESSION['logged_in_user']) ? true : false;
	 }
	 public static function user(){
	 	return isset($_SESSION['logged_in_user']) ? $_SESSION['logged_in_user'] : null;
	 }
	 public static function logout() {
	 	session_start();
	 	$_SESSION = [];
	 	session_destroy();
	 }
}

