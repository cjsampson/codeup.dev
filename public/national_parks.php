<?php
require '../config.php';
require '../db_connect.php';
require '../Input.php';
// require '../DateRangeException.php';
// require 'uploadFile.php';

var_dump($_FILES);
var_dump($_POST);
// echo $target_file;
$errors = [];

if ( Input::get('name', '') != ''
 		&& Input::get('location', '') != ''
		&& Input::get('date_established', '') != ''
		&& Input::get('area_in_acres', '') != ''
		&& Input::get('description', '') != ''
		&& Input::get('images') != '' 
	) 
	{
		$stmt = $dbc->prepare("INSERT INTO national_parks (name, location, date_established, area_in_acres, description, images)
					  		   VALUES (:name, :location, :date_established, :area_in_acres, :description, :images)");
	
		try {
			$parkName = Input::getString('name', 0, 100); 
		} catch(InvalidArgumentException $e) {
			$errors[] = $e->getMessage(); 
		} catch(OutOfRangeException $e) {
			$errors[] = $e->getMessage();  
		} catch(DomainException $e) {
			$errors[] = $e->getMessage(); 
		} catch(InvalidArgumentException $e) {
		    $errors[] = $e->getMessage(); 
		} catch(LengthException $e) {
			$errors[] = $e->getMessage(); 
		} 
		
		try { 
			$location = Input::getString('name', 0, 100); 
		} catch(InvalidArgumentException $e) { 
			$errors[] = $e->getMessage(); 
		}  catch(OutOfRangeException $e) {
		    $errors[] = $e->getMessage(); 
		} catch(DomainException $e) { 
			$errors[] = $e->getMessage(); 
		} catch(InvalidArgumentException $e) { 
			$errors[] = $e->getMessage(); 
		} catch(LengthException $e) { 
			$errors[] = $e->getMessage(); 
		}

		try {
			$parkDate = DateRangeException::getDate('date_established'); 
		} catch(OutOfRangeException $e) {
			$erros = $e->getMessage();
		} catch(DateRangeException $e) {
			$errors = $e->getMessage();
		} catch(DateRangeException $e) {
			$errors = $e->getMessage();
		}

		try {
			$parkAreaAcres = Input::getNumber('area_in_acres'); 
		} catch(InvalidArgumentException $e) {
			$errors = $e->getMessage();
		} catch(OutOfRangeException $e) {
			$errors = $e->getMessage();
		} catch(DomainException $e) {
			$errors = $e->getMessage();
		} catch(RangeException $e) {
			$errors = $e->getMessage();
		}

		try {
			$parkDescription = Input::getString('description'); 
		} catch(InvalidArgumentException $e) {
			$errors = $e->getMessage(); 
		} catch(OutOfRangeException $e) {
			$errors = $e->getMessage();  
		} catch(DomainException $e) {
			$errors = $e->getMessage(); 
		} catch(InvalidArgumentException $e) {
			$errors = $e->getMessage(); 
		} catch(LengthException $e) {
			$errors = $e->getMessage(); 
		}
		try {
			$parkImage = Input::getString('images'); 
		} catch(InvalidArgumentException $e) {
			$errors = $e->getMessage(); 
		} catch(OutOfRangeException $e) {
			$errors = $e->getMessage();  
		} catch(DomainException $e) {
			$errors = $e->getMessage(); 
		} catch(InvalidArgumentException $e) {
			$errors = $e->getMessage(); 
		} catch(LengthException $e) {
			$errors = $e->getMessage(); 
		}
		if(empty($errors)) 
		{
			$stmt->bindValue(':name', $parkName, PDO::PARAM_STR);
			$stmt->bindValue(':location', $parkLocation, PDO::PARAM_STR);
			$stmt->bindValue(':date_established', $parkDate->date, PDO::PARAM_STR);
			$stmt->bindValue(':area_in_acres', $parkAreaAcres, PDO::PARAM_STR);
			$stmt->bindValue(':description', $parkDescription, PDO::PARAM_STR);
			$stmt->bindValue(':images', $parkImage, PDO::PARAM_STR);
			$stmt->execute();
		}
	}  elseif ($_SERVER['REQUEST_METHOD'] == 'POST') {
	   		$errors[] = 'All values are required...';
	}
	

$page = (Input::has('page')) ? Input::get('page') : 1;
$limit = (Input::has('limit')) ? Input::get('limit') : 4;
$offset = ($page - 1) * $limit;

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
	<title>Japanese National Parks</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/i18n/jquery-ui-i18n.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="/css/national_parks.css">
</head>

<body>
	<div class="container-fluid">

		<header class="header">
			<h1>Japanese National Parks</h1>
		</header> <!-- .header -->

		<div class="nationalParks">
			<div class="row">
				<?php foreach ($nationalParks as $nationalPark): ?>
					<div class="nationalPark col-md-6">
						<h4><?= Input::escape($nationalPark['name']); ?></h4>
						<img src="<?= Input::escape($nationalPark['images']); ?>" alt="<?= $nationalPark['name'];?>" class="img-responsive col-md-6">
						<ul class="parkUL col-md-6">
							<li>Name: <?= Input::escape($nationalPark['name']); ?></li>
							<li>Location: <?= Input::escape($nationalPark['location']); ?></li>
							<li>Date-Established: <?= Input::escape($nationalPark['date_established']); ?></li>
							<li>Area in Acres: <?= Input::escape($nationalPark['area_in_acres']); ?></li>
						</ul>
						<p class="description col-md-12">Description: <?= Input::escape($nationalPark['description']); ?></p>
					</div>			
				<?php endforeach; ?>
			</div>
		</div> <!-- .nationalParksLoop -->
		
		<?php foreach($errors as $error): ?>
			<p><?= $error; ?></p>
		<?php endforeach; ?>

		<!-- Forms for Parks -->
		<div class="col-md-4">
			<form action="national_parks.php?page=1" id="parksForm" method="post" name="parksForm" enctype="multipart/form-data">
				
				<fieldset class="form-group">
					<h1>Add a Park to the List!</h1>
				</fieldset>

				<fieldset class="form-row">
					<label for="name">Name: </label>
					<input type="text" name="name" id="name" placeholder="Name of park" class="required"
					value="<?= empty($errors) ? '' : Input::get('name', '') ?>">				
				</fieldset>

				<fieldset class="form-row">
					<label for="location">Location: </label>
					<input type="text" name="location" placeholder="Location" class="required"
					value="<?= empty($errors) ? '' : Input::get('location', '') ?>">
				</fieldset>

				<fieldset class="form-row">
					<label for="date_established">Date Established: </label>
					<input type="date" name="date_established" id="date_established"  class="required" placeholder="YYYY-MM-DD"
					value="<?= empty($errors) ? '' : Input::get('date', '') ?>">
				</fieldset>

				<fieldset class="form-row">
					<label for="description">Description: </label>
					<textarea name="description" id="description" class="required"
					value="<?= empty($errors) ? '' : Input::get('description', '') ?>"></textarea>				
				</fieldset>

				<fieldset class="form-row">
					<label for="area_in_acres">Area in Acres: </label>
					<input type="text" name="area_in_acres" id="area_in_acres" class="required"
					value="<?= empty($errors) ? '' : Input::get('area_in_acres', '') ?>">				
				</fieldset>

				<fieldset class="form-row">
					<input type="file" name="images" id="images" value="imageOfPark" class="required"
					value="<?= empty($errors) ? '' : Input::get('images', '') ?>">						
				</fieldset>

				<fieldset class="form-row">
					<input type="submit" value="Update" name="parksForm">
				</fieldset>		

			</form>
		</div>

			
		<div class="navigationButtons row">
			<div class="col-md-12">
				<?php if ($page == 1): ?>
					<a role="button" class="btn btn-default" href="?page=<?= $page + 1; ?>">Next Page</a>
				<?php elseif ($page == 2): ?>
					<a role="button" class="btn btn-default" href="?page=<?= $page - 1; ?>">Back Page</a>
					<a role="button" class="btn btn-default" href="?page=<?= $page + 1; ?>">Next Page</a>
				<?php else: ?>
					<a role="button" class="btn btn-default" href="?page=<?= $page - 1; ?>">Back</a>
				<?php endif; ?>
			</div>
		</div>

	</div> <!-- <div class="container-fluid"></div> -->
	<script>
		$(document).ready(function() {
			$("#parksForm").validate();
		});
	</script>
</body>
</html>