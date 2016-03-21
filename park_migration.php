<?php

require 'config.php';
require 'db_connect.php';


$tableName = 'national_parks';


$dropTable = "DROP TABLE IF EXISTS {$tableName}"; 
$dbc->exec($dropTable);


$createTable = "CREATE TABLE $tableName (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	name VARCHAR(200) NOT NULL,
	location VARCHAR(200) NOT NULL,
	date_established DATE NOT NULL,
	area_in_acres DOUBLE NOT NULL,
	images VARCHAR(200),
	PRIMARY KEY (id)
)";

$dbc->exec($createTable);