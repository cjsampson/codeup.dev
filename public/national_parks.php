<?php

require '../config.php';
require '../db_connect.php';


var_dump($_GET);

$stmt = $dbc->query('SELECT * FROM national_parks LIMIT 4');

// All ten parks
// while ($row = $stmt->fetch()) {
// 	print_r($row);
// }

echo '<pre>';
print_r ($stmt->fetchAll());
echo '</pre>';



