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
$stmt = $dbc->prepare("SELECT * FROM national_parks LIMIT :limit OFFSET :offset");
$stmt->bindValue(':limit', $limit, PDO::PARAM_INT);
$stmt->bindValue(':offset', $offset, PDO::PARAM_INT);
$stmt->execute();

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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.js"></script>
</head>
<body>

	<div class="nationalParks">
		<?php foreach ($nationalParks as $nationalPark): ?>
			<div class="nationalPark">
				<h4><?= Input::escape($nationalPark['name']); ?></h4>
				<img src="<?= Input::escape($nationalPark['images']);?> " alt="<?= $nationalPark['name'];?>">
				<ul class="parkUL">
					<li>Name: <?= Input::escape($nationalPark['name']); ?></li>
					<li>Location: <?= Input::escape($nationalPark['location']); ?></li>
					<li>Date-Established: <?= Input::escape($nationalPark['date_established']); ?></li>
					<li>Area in Acres: <?= Input::escape($nationalPark['area_in_acres']); ?></li>
				</ul>			
			</div>
		<?php endforeach; ?>

		<!-- Forms for Parks -->
		<div class="parksForm">
			<label for="name">Name: </label>
			<input type="text" name="name" id="name">

			<label for="location" name="locations">Location: </label>
			<input type="text" name="location">

			<label for="date_established" name="date_established">Date Established: </label>
			<input type="text" id="date_established" class="datepicker">

			<label for="description" name="description">Description: </label>
			<textarea name="description" id="" cols="50" rows="50"></textarea>

			<label for="area_in_acres" name="area_in_acres">Area in Acres: </label>
			<input type="text" name="area_in_acres" id="area_in_acres">

			<label for="images">Upload Park Image</label>
			<input type="file" name="images" id="images">
			
			

		</div> <!-- .parksForm -->




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
<script src="/app.js"></script>
</body>
</html>

