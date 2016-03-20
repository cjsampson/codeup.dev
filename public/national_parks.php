<?php

require '../config.php';
require '../db_connect.php';
require '../Input.php';

$stmt = $dbc->query('SELECT * FROM national_parks');


// All of the national parks in both indexed and associative array
echo '<pre>';
print_r($stmt->fetchAll(PDO::FETCH_BOTH));
echo '</pre>';



