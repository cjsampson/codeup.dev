<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');

require 'db_connect.php';

$truncateTable = "TRUNCATE national_parks";
$dbc->exec($truncateTable);

$nationalParks = [
	  ['name' => 'Rishiri-Rebun-Sarobetsu National Park', 'location' => 'Hokkaido, Japan',  'date_established'=> '1974-09-20', 'area_in_acres' => 52377.6],
	  ['name' => 'Shiretoko National Park', 		          'location' => 'Hokkaido, Japan', 'date_established'=> '1964-06-01', 'area_in_acres' => 95464.222],
	  ['name' => 'Daisetsuzan National Park',	          'location' => 'Hokkaido, Japan', 'date_established'=> '1931-12-04', 'area_in_acres' => 560346.04723],
	  ['name' => 'Towada-Hachimantai National Park',      'location' => 'Tohoku, Japan', 	'date_established'=> '1936-02-01', 'area_in_acres' => 211028],
	  ['name' => 'Bandai-Asahi National Park', 	          'location' => 'Tohoku, Japan', 	'date_established'=> '1950-09-05', 'area_in_acres' => 462188.37655],
	  ['name' => 'Ise-Shima National Park',	   	          'location' => 'Honshu, Japan', 	'date_established'=> '1946-11-20', 'area_in_acres' => 137264.568],
	  ['name' => 'Chūbu-Sangaku National Park', 	          'location' => 'Honshu, Japan', 	'date_established'=> '1934-12-04', 'area_in_acres' => 430761.51414],
	  ['name' => 'Sanin Kaigan National Park',	          'location' => "San''in, Japan", 	'date_established'=> '1963-06-15', 'area_in_acres' => 21703.266],
	  ['name' => 'Abashiri Quasi-National Park',  	          'location' => 'Hokkaido, Japan', 'date_established'=> '1958-07-01', 'area_in_acres' => 92073.9362],
	  ['name' => 'Shimokita Hanto Quasi-National Park',   'location' => 'Honshu, Japan', 	'date_established'=> '1968-06-22', 'area_in_acres' => 46277.8958]
];

foreach( $nationalParks as $nationalPark) {
	$sql = "INSERT INTO national_parks (name, location, date_established, area_in_acres) VALUES ('{$nationalPark['name']}', '{$nationalPark['location']}', '{$nationalPark['date_established']}', {$nationalPark['area_in_acres']})";
	$dbc->exec($sql);
}

	  
