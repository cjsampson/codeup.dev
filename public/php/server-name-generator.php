<?php


function randomAdjective(){
	$adj = ['green', 'metallic', 'soft', 'hard', 'tall', 'ambitious', 'sincere', 'alluring', 'confident', 'knowledgable'];
	return $adj[randomElement($adj)];
}

function randomWord(){
	$nouns = ['Lion', 'Wolf', 'Books', 'Computer', 'Programmer', 'Table', 'Charger', 'Bear', 'Dirk', 'Jeep'];
	return $nouns[randomElement($nouns)];
}

function randomElement($arr) {
	return mt_rand(0, (count($arr) - 1));
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Name Generator</title>
</head>
<body>
	<p><span class="adjective">echo</span><span></span></p>
	<script>
		
	</script>
</body>
</html>

