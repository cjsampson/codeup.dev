<?php

$places = array('Portland', 'Austin', 'Orlando', 'Tampa', 'Ft. Walton');

var_dump($places);

$wantToVisit = ['Thailand', 'Tokyo', 'Norway', 'U.A.E.'];

var_dump($wantToVisit);

echo $places[3] . '<br><br>';

echo $wantToVisit[3] . '<br><br>';

$me = [
	'firstName' => 'CJ',
	'lastName'  => 'Sampson',
	'email'		=> 'cjsampson41@gmail.com',
	'phone'		=>	2105556780
];

$test = [
	$person1 = [
		'firstName' => 'Jordan',
		'lastName'	=> 'Michael',
		'email'		=> 'jman@gmail.com',
		'phone'		=> 8503332534
	],
	$person2 = [
		'firstName' => 'Corey',
		'lastName'	=> 'Brewer',
		'email'		=> 'cbrew@houston.com',
		'phone'		=> 6475223334
	],
	$person3 = [
		'firstName' => 'Dirk',
		'lastName'	=> 'Nowitzki',
		'email'		=> 'dirkeyTurkey41@dmavs.com',
		'phone'		=> 3475669489
	]
];

print_r($test);


