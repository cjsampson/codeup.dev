<?php

require '../config.php';
require '../db_connect.php';
require '../Input.php';

// All of the national parks in both indexed and associative array
// echo '<pre>';
// print_r($stmt->fetchAll(PDO::FETCH_BOTH));
// echo '</pre>';

$page = (Input::has('page')) ? Input::get('page') : 1;
$limit = 4;
$offset = ($page * $limit) - $limit;


// Query to LIMIT results for view
$stmt = $dbc->query("SELECT * FROM national_parks LIMIT {$limit} OFFSET {$offset}");

// Associate Array of Parks
$nationalParks = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Total Parks
$stmt = $dbc->query("SELECT COUNT(*) FROM national_parks");
$totalParks = $stmt->fetchColumn();



?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Japanese National Park</title>
	<link rel="stylesheet" href="/css/national_parks.css">
</head>
<body>

	<div class="nationalParks">
		<?php foreach ($nationalParks as $nationalPark): ?>
			<div class="nationalPark">
				<h4><?= $nationalPark['name']; ?></h4>
				<img src="<?=$nationalPark['images'];?> " alt="<?= $nationalPark['name'];?>">
				<ul class="parkUL">
					<li>Name: <?= $nationalPark['name']; ?></li>
					<li>Location: <?= $nationalPark['location']; ?></li>
					<li>Date-Established: <?= $nationalPark['date_established']; ?></li>
					<li>Area in Acres: <?= $nationalPark['area_in_acres']; ?></li>
				</ul>			
			</div>
		<?php endforeach; ?>
		<div class="navigationButtons">
			<?php if ($page == 1): ?>
				<a href="?page=<?= $page + 1; ?>">Next Page</a>
			<?php elseif ($page == 2): ?>
				<a href="?page=<?= $page - 1; ?>">Back</a>
				<a href="?page=<?= $page + 1; ?>">Next Page</a>
			<?php else: ?>
				<a href="?page=<?= $page - 1; ?>">Back</a>
			<?php endif; ?>
		</div>
	</div>
</body>
</html>

