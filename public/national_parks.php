<?php

require '../config.php';
require '../db_connect.php';



$stmt = $dbc->query('SELECT * FROM national_parks');

// All ten parks
echo '<pre>';
while ($row = $stmt->fetch()) {
	print_r($row);
}
echo '</pre>';


