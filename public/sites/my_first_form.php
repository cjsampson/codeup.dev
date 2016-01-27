<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My First Form</title>
<link rel="stylesheet" href="/css/myFirstFormcss.css">
</head>
<body>
	<main>
		<h1>User Login</h1>

		<form action="/my_first_form.php" method="GET" class="exerciseForm1" id="exerciseForm1">
			
				<label>
					<span>Username: </span>	
					<input type="text" id="username" name="username" placeholder="username">
				</label>
			
				<p>
				<label for="password">Password: </label>
				<input type="password" id="password" name="password" placeholder="password">
				</p>

				<input type="submit" value="Send ME OFF!">
		</form>
	


	<hr>
	<section class="send_email_form">
		<h1>Compose an Email</h1>
		<form action="/my_first_form.php" method="POST">
			<p>
				<label for="to">To: </label>
				<input type="text" id="to" name="to">
			</p>
			<p>
				<label for="from">From: </label>
				<input type="text" id="from" name="from">
			</p>
			<p>
				<label for="subject">Subject: </label>
				<input type="text" name="subject" id="subject">
			</p>
			
				<label for="email_body">Email Body: </label>
				<textarea name="email_body" id="email_body" cols="30" rows="10"></textarea>
			
			<p>
				<input type="submit" value="Send Email!">	
			</p>
			<label for="sentCheckBox">Save draft to sent folder?</label>
			<input type="checkbox" id="sentCheckbox" name="checkbox" checked>
		</form>
	</section>
	
	<hr>
	
	<section class="formExercise4">
		<form action="/my_first_form.php">
			<h1>Operating System Questions</h1>
			
			<div class="osQuestion1">
				<p>What operating systems have you used?</p>
					<label><input type="checkbox" id="os1" name="os[]" value="linux"> Linux</label>
					<label><input type="checkbox" id="os2" name="os[]" value="osx"> OS X</label>
					<label><input type="checkbox" id="os3" name="os[]" value="windows"> Windows</label>
			</div>

			<p>
				<input type="checkbox" id="mailing_list" name="mailing_list" value="yes" checked>
				<label for="mailing_list">Sign me up for th mailing list!</label>
			</p>

			<p>What is the Capital of Texas?</p>
				<label>
					<input type="radio" name="q1" value="Houston">
					Houston
				</label>
				<label>
					<input type="radio" name="q1" value="San Antonio">
					San Antonio
				</label>
				<label>
					<input type="radio" name="q1" value="Dallas">
					Dallas
				</label>
				<label>
					<input type="radio" name="q1" value="Austin">
					Austin
				</label>
				
				<button type="submit" name="submit" id="submit">Submit</button>
		</form>
	</section>
	
	<hr>

	<section class="Exercise3">
		<form action="/my_first_form.php" method="post">
			<h1>Multiple Choice Form</h1>
			<p>Question 1: What is your favorite food?</p>
			<label for="pizza">
				<input type="radio" name="q1" value="Pizza" id="pizza">
				Pizza
			</label>

			<label for="pasta">
				<input type="radio" name="q1" value="Pasta" id="pasta">
				Pasta
			</label>

			<label for="sandwiches">
				<input type="radio" name="q1" value="Sandwiches" id="sandwiches">
				Sandwiches
			</label>
			

			<br>


			<h1>Question 2: What is your favorite day of the week?</h1>

			<label for="monday">
				<input type="radio" name="q2" value="Monday" id="monday">
				Monday
			</label>
			<label for="tuesday">
				<input type="radio" name="q2" value="Tuesday" id="tuesday">
				Tuesday
			</label>
			<label for="wednesday">
				<input type="radio" name="q2" value="Wednesday" id="wednesday">
				Wednesday
			</label>
			<label for="thursday">
				<input type="radio" name="q2" value="Thursday" id="thursday">
				Thursday
			</label>
			<label for="friday">
				<input type="radio" name="q2" value="Friday" id="friday">
				Friday
			</label>
			<label for="saturday">
				<input type="radio" name="q2" value="Saturday" id="saturday">
				Saturday
			</label>
			<label for="sunday">
				<input type="radio" name="q2" value="Sunday" id="sunday">
				Sunday
			</label>

			<br><br><br>

			<label for="smokedMeats">
			 Pick two or more of you most favorite smoked meats: 
			</label>

			<select name="smokedMeats[]" id="smokedMeats" multiple>
				<option value="1">Turkey</option>
				<option value="2">Chicken</option>
				<option value="3">Brisket</option>
				<option value="4">Sausage</option>
				<option value="5">Pulled Pork</option>
				<option value="6">Fish</option>
			</select>



			<br><br><br>

			<select name="cohort[]" id="cohort">
				<option selected disabled>Please Select a class</option>
				<option value="1">Arches</option>
				<option value="2">Badlands</option>
				<option value="3">Carsltbad</option>
				<option value="4">Denali</option>
				<option value="5">Franklin</option>
				<option value="6">Everglades</option>
				<option value="7">Ike</option>
			</select>

			<br><br><br>

			<button type="submit">Push to Send!</button>	

		</form>

	</section>


	<section class="anotherform">
		<form action="/my_first_form.php" method="post">
			<h1>Select Testing</h1>
			<label for="yesorno">Are you male? </label>
			<select name="yesorno" id="yesorno">
				<option value="0" default>Yes</option>
				<option value="1">No</option>
			</select>
			<br><br>
			<input type="submit" value="submit">
		</form>
	</section>
	</main>
</body>
</html>








