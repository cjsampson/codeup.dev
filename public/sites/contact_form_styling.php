<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Form</title>
	<!-- Latest compiled and minified CSS & JS -->
	<link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="formPrac.css">
</head>
<body>
	<section class="form_prac">
		<form action="formProcess.php" method="post" class="smart-green">
			<h1>Contact Form
				<span>Please fill in all text in the fields</span>
			</h1>
			<label>
				<span>Your Name: </span>
				<input type="text" name="name" id="name" placeholder="Your Full Name">
			</label>
			<label>
				<span>Your Email: </span>
				<input type="email" name="email" id="email" placeholder="Valid Email Address" >
			</label>
			<label>
				<span>Message: </span>
				<textarea name="message" id="message">"Your Message to us"</textarea>
			</label>
			<label>
				<span>Subject: </span>
					<select name="selection">
						<option value="Job Inquiry">Job Inquiry</option>
						<option value="General Question">General Question</option>
					</select>
			</label>
			<label>
				<span>&nsbp;</span>
				<input type="button" class="button" value="Send">
			</label>
		</form>
	</section>
</body>
</html>