<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Loops</title>
</head>
<body>
<script>
	var i = 10;

	do {
		var userName = prompt('Please input your name...');
		if(userName == '' || userName == null) {
			console.log('Please input your name, do not save black data');
		}
	} while (userName == '' || userName == null);
</script>
</body>
</html>