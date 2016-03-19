<?php

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'parks_db');
define('DB_USER', 'parks_user');
define('DB_PASS', 'parks_user');

require 'db_connect.php';

$dbc->exec('DELETE TABLE IF EXISTS national_parks
		CREATE TABLE national_parks');