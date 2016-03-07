<?php


function randomAdjective(){
	$adj = ['green', 'metallic', 'soft', 'hard', 'tall', 'ambitious', 'sincere', 'alluring', 'confident', 'knowledgable'];
	return $adj[randomElement($adj)];
}

function randomNoun(){
	$nouns = ['Lion', 'Wolf', 'Books', 'Computer', 'Programmer', 'Table', 'Charger', 'Bear', 'Dirk', 'Jeep'];
	return $nouns[randomElement($nouns)];
}

function randomNumber(){
	return mt_rand(1,99);
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
	<link rel="stylesheet" href="/css/serverNames.css">
</head>
<body>

<div class="serverName">
	<h4>Congratulations on your new server name!</h4>

	<p><span>You're new server name is: </span>
	<span id="adjective"><?=randomAdjective()?></span><span id="noun"><?=randomNoun()?></span><span id="number"><?=randomNumber()?></span>
	</p>
	<ul>
		<li>On more instruction on how to set up your server name please click the following links: </li>
		<li><a href="https://godaddy.com">Go Daddy</a></li>
		<li><a href="https://digitalOcean">Digital Ocean</a></li>
		<li><a href="https://forge.laravel.com/">Forge</a></li>
	</ul>
</div>

<script>
		
</script>
</body>
</html>

