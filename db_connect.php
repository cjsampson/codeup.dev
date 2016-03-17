<?php

define('DB_HOST', 'mysql:127.0.0.1;');
define('DB_NAME', 'employees');
define('DB_USER', 'codeup');
define('DB_PASS', 'codeuppass');

$dbc = new PDO(DB_HOST . DB_NAME, DB_USER, DB_PASS);	

$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
