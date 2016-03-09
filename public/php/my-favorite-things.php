<?php
function pageController(){
	$data = [];
	$favoriteThings = ['programming', 'studying nutrition', 'lifting weights', 'spending time with family', "going to the farmer's market"];
	$data['favoriteThings'] = $favoriteThings;
	return $data;
}
extract(pageController());
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Favorite Things</title>
	<link rel="stylesheet" href="/css/favoriteThings.css">
</head>
<body>
	<div>
		<ul class="favoriteThings">
			<?php foreach($favoriteThings as $favoriteThing): ?>
				<li><a href="#"><?= $favoriteThing ?></a></li>
			<?php endforeach;?>
		</ul>
	</div>
</body>
</html>