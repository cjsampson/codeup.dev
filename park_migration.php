<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');

require 'db_connect.php';

$droppable = 'DROP TABLE IF EXISTS national_parks';
$sql = <<<QUERY
		CREATE TABLE national_parks(
			id INT UNSIGNED NOT NULL AUTO_INCREMENT,
			name VARCHAR(200) NOT NULL,
			location VARCHAR(200) NOT NULL,
			date_established DATE NOT NULL,
			area_in_acres DOUBLE NOT NULL,
			PRIMARY KEY(id)
)
QUERY;

$dbc->exec($droppable);
$dbc->exec($sql);