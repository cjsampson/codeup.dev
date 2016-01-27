<?php

try {
	$conn = new PDO('mysql:host=localhost;dbname=poll', 'root', 'mypass' );
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	foreach($conn->query('SELECT * FROM pollquestions') as $row) {
		print_r($row);
	}
	$conn = null;
} catch (PDOException $e) {
	print "Error!: " . $e->getMessage() . "<br>";
	die();
}
?>



