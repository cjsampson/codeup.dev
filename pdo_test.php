<?php

require 'db_connect.php';

echo $dbc->getAttribute(PDO::ATTR_CONNECTION_STATUS);

$sql = <<<QUERY
	DROP TABLE IF exists teams
	CREATE TABLE teams(
		team_id INT UNSIGNED NOT NULL AUTO_INCREMENT,
		name VARCHAR(100) NOT NULL,
		PRIMARY KEY(team_id)
	)
QUERY;

$dbc->exec($sql);

$insert = 'INSERT INTO teams (name) VALUES ("Spurs")';
$dbc->exec($insert);

$id = $dbc->lastInsertId();

echo "\n1 row inserted with ID $id\n";