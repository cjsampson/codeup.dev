<?php

require 'config.php';
require 'db_connect.php';

$drop = "DROP TABLE users";
$dbc->exec($drop);
$query = "CREATE TABLE users (
	id INT UNSIGNED NOT NULL AUTO_INCREMENT,
	email VARCHAR(240) NOT NULL,
	name VARCHAR(50) NOT NULL,
	PRIMARY KEY (id)
)";

$dbc->exec($query);

$query = "INSERT INTO users(email, name) VALUES ('ben@codeup.com', 'Ben Batschelet')";

$numRows = $dbc->exec($query);
echo "Inserted $numRows rows." . PHP_EOL;

$users = [
	['email' => 'jason@codeup.com', 'name' => 'Jason Straughn'],
	['email' => 'chris@codeup.com', 'name' => 'Chris Turner'],
	['email' => 'micahel@codeup.com', 'name' => 'Michael Girdley']
];

foreach ($users as $user) {
	$query = "INSERT INTO users (email, name) VALUES ('{$user['email']}', '{$user['name']}')";

	$dbc->exec($query);

	echo "Inserted ID: " . $dbc->lastInsertId() . PHP_EOL;
}


