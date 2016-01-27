<!DOCTYPE html>
<html lang="en">
<head>
	<title>Portfolio</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="/bower_components/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" href="/css/my_bootstrap_css.css">
	<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
</head>
<body>
	<nav class="navbar navbar-inverse">
	<div class="navbar-header">
		<div class="container-fluid">
				<a class="navbar-brand">CJ Sampson</a>
			</div>				
			<ul class="nav navbar-nav">
				<li><a href="portfolio.php">Home</a></li>
				<li><a href="#">About</a></li>
				<li class="active"><a href="#">Contact</a></li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">Some of My Work
					<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="#">To Do List PHP</a></li>
						<li><a href="#">CMS in PHP</a></li>
						<li><a href="#">Simple Blog in PHP</a></li>
					</ul>
				</li>
			</ul>
		</nav>

		<h1 class="form_h1">Let's chat! Send me your Contact Info!</h1>
			<div class="formWrap">
				
				<form action="someEmail.php" method="post" role="form" class="form">
					
					<div class="row">
						<div class="form-group">
							<label for="fname" class="col-lg-3">First Name: </label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="fname" placeholder="Enter First Name">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<label for="lname" class="col-lg-3">Last Name: </label>
							<div class="col-lg-8">
								<input type="text" class="form-control" id="lname" placeholder="Enter Last Name">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<label for="email" class="control-label col-lg-3">Email Address: </label>
							<div class="col-lg-8">
								<input type="email" class="form-control" id="email" name="email" placeholder="Enter your email: ">
							</div>
						</div>
					</div>

					<div class="row">
						<div class="form-group">
							<label for="summary" class="col-lg-3">What's on your Mind?</label>
							<div class="col-lg-8">
								<textarea name="summary" id="summary" rows="10" class="form-control"></textarea>
							</div>
						</div>
					</div>
					
					<div class="row">
						<div class="col-sm-5 col-sm-offset-4 submit">
					      <button type="submit" class="myButton">Send me your Info!</button>
					    </div>			
					</div>

				</form>
			</div> <!-- formWrap -->
		</div> <!-- .container-fluid -->

	<script src="/bower_components/jquery/dist/jquery.min.js"></script>
	<script src="/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>