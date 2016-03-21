<?php


require 'park_migration.php';
require 'db_connect.php';

$truncateTable = "TRUNCATE $tableName";
$dbc->exec($truncateTable);

$nationalParks = [
	  ['name' => 'Rishiri-Rebun-Sarobetsu National Park', 'location' => 'Hokkaido, Japan',  'date_established'=> '1974-09-20', 'area_in_acres' => 52377.6, 'images' =>  '/images/rishiri.jpg'],
	  ['name' => 'Shiretoko National Park', 		      'location' => 'Hokkaido, Japan',  'date_established'=> '1964-06-01', 'area_in_acres' => 95464.222, 'images' =>  '/images/shiretoko.jpg'],
	  ['name' => 'Daisetsuzan National Park',	          'location' => 'Hokkaido, Japan',  'date_established'=> '1931-12-04', 'area_in_acres' => 560346.04723, 'images' =>  '/images/daisetsuzan.jpg'],
	  ['name' => 'Towada-Hachimantai National Park',      'location' => 'Tohoku, Japan', 	'date_established'=> '1936-02-01', 'area_in_acres' => 211028, 'images' =>  '/images/towada.jpg'],
	  ['name' => 'Bandai-Asahi National Park', 	          'location' => 'Tohoku, Japan', 	'date_established'=> '1950-09-05', 'area_in_acres' => 462188.37655, 'images' =>  '/images/bandai.jpg'],
	  ['name' => 'Ise-Shima National Park',	   	          'location' => 'Honshu, Japan', 	'date_established'=> '1946-11-20', 'area_in_acres' => 137264.568, 'images' =>  '/images/ise-shima.jpg'],
	  ['name' => 'Chūbu-Sangaku National Park', 	      'location' => 'Honshu, Japan', 	'date_established'=> '1934-12-04', 'area_in_acres' => 430761.51414, 'images' =>  '/images/chabu.jpg'],
	  ['name' => 'Sanin Kaigan National Park',	          'location' => "San''in, Japan", 	'date_established'=> '1963-06-15', 'area_in_acres' => 21703.266, 'images' =>  '/images/sanin.jpg'],
	  ['name' => 'Abashiri Quasi-National Park',  	      'location' => 'Hokkaido, Japan',  'date_established'=> '1958-07-01', 'area_in_acres' => 92073.9362, 'images' =>  '/images/abashiri.jpg'],
	  ['name' => 'Shimokita Hanto Quasi-National Park',   'location' => 'Honshu, Japan', 	'date_established'=> '1968-06-22', 'area_in_acres' => 46277.8958, 'images' => '/images/shimokita.jpg']
];

foreach( $nationalParks as $nationalPark) {

	$sql = "INSERT INTO national_parks (name, location, date_established, area_in_acres, images) 
	VALUES ('{$nationalPark['name']}', '{$nationalPark['location']}', '{$nationalPark['date_established']}', '{$nationalPark['area_in_acres']}', '{$nationalPark['images']}')";
	
	// execute query after each statment
	$dbc->exec($sql);
}

	  
