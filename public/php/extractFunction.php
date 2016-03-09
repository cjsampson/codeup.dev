<?php

session_start();
var_dump($_SESSION);

function getRandomElement($array) {
	$key = array_rand($array);
	$value = $array[$key];
	return $value;
}

function generateServerName($nouns, $adjectives){
	return getRandomElement($adjectives) . " " . getRandomElement($nouns);
}

// function pageController(){
// 	$data = [];
// 	$date['serverName'] = generateServerName($nouns, $adjectives);
// 	return $data;
// }

function pageController() {
	$nouns = ['turkeysub', 'sealteam6', 'yogibear', 'booboo'];
	$adjectives = ['yellow', 'strong', 'fuetre', 'concentrado', 'amable'];
	$data = [];

	$data['title'] = "Server Name Generator";
	$data['serverName'] = generateServerName($nouns, $adjectives);
	return $data;
}