<?php

require 'config.php';
require 'db_connect.php';

// $stmt = $dbc->query('SELECT id, name, email FROM users');

$stmt = $dbc->query('SELECT * FROM users');

echo "Columns: " . $stmt->columnCount() . PHP_EOL;
echo "Rows: " . $stmt->rowCount() . PHP_EOL;

$stmt = $dbc->query('SELECT * FROM users');
//PDO::FETCH_BOTH (DEFAULT)
echo "Columns: " . $stmt->columnCount();
while($row = $stmt->fetch()) {
	print_r($row);
}

$stmt = $dbc->query('SELECT * FROM users');
//PDO::FETCH_NUM
echo "Columns: " . $stmt->columnCount();
while($row = $stmt->fetch(PDO::FETCH_NUM)) {
	print_r($row);
}

$stmt = $dbc->query('SELECT * FROM users');
// PDO::FETCH_ASSOC
echo "Columns: " . $stmt->columnCount();
while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	print_r($row);
}

function getUsers()
{
	// Bring connection into scope
	$stmt = $dbc->query('SELECT * FROM users');
	$rows = [];
	while($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
		$rows[] = $row;
	}
	return $rows;
}

function getUsersFetchAll() { 
	return $dbc->query('SELECT * FROM users')->fetchAll(PDO::FETCH_ASSOC);
}

getUsersFetchAll();