<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- set base for relative links - to enable pretty URLs -->
		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/"; ?>">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
				integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css"
				integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<!----Font Awesome-------->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css"
				rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->


		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
				  integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
				  crossorigin="anonymous"></script>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript"
				  src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<!------Title of Website-------->
		<title>DianePeshlakai.com</title>

	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<!--Header and Navigation bar-->
			<header>
				<div class="box-container">
					<!--Bootstrap Navigation Bar-->
					<nav class="navbar navbar-inverse">
						<!-- logo and mobile toggle button get grouped together for better mobile display -->
						<div class="navbar-header">
							<!-- this is the mobile menu button -->
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse"
									  data-target="#main-menu">
								<span class="sr-only">main menu</span>
								<span class="glyphicon glyphicon-menu-hamburger">
								</span>
							</button>
							<a class="navbar-brand" href="../public_html/index.php">
								<i class="fa fa-home" aria-hidden="true"></i></a>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="#"></a></li>
								<li><a href="../public_html/portfolio/index.php">Portfolio</a></li>
								<li><a href="php/contact.php">Contact Me</a></li>
							</ul>
						</div>
						<!-- here are your main nav links, grouped for toggling -->
						<div class="collapse navbar-collapse" id="main-menu">
							<a class="navbar-icon">
								<p class="navbar-text navbar-right"></p>
						</div>
						<main>
			</header>
			<!--Beginning row-->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="jumbotron">
							<div class="row">
								<div class="col-xs-6">
									<h1>Welcome</h1>
									<h2>Do you need a great, responsive website?</h2>
									<p>My name is Diane Peshlakai.</p>
									<p>Full Stack Developer creating custom websites for local businesses in Albuquerque, New
										Mexico and surrounding areas.</p></div>
								<div class="col-xs-6"></div>
								<img src="images/laptop-pic.jpg" class="img-fluid" alt="laptop">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section class="about-block" id="about">
			<div class="center">
				<div class="row">
					<div class="col-lg-12 text-center">
						<h2>About Me</h2>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-lg-offset-2">
					<p>I'm graduating from the Deep Dive Bootcamp and studied front and back-end web development. The
						bootcamp prepared me to create creative mobile-friendly and secured website.
						I use HTML, CSS, Bootstrap, AngularJS, and mySQL to create custom work. I work well with a team and I
						love learning!Have a question? Please feel free to fill out the contact form
						and send me a message.</p>
					`
				</div>
				<div class="col-lg-4">
					<img src="images/feather-color.jpg" class="img-rounded pull-xs-right" alt="feather" height="200" width="200">
				</div>
			</div>
		</section>
		<!-- Footer -->
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-lg-10 col-lg-offset-1 text-center">
						<h4><strong></strong>
						</h4>
						<p>Albuquerque, NM</p>
						<ul class="list-unstyled">
							<li><i class="fa fa-phone fa-fw"></i></li>
							<li><i class="fa fa-envelope-o fa-fw"></i> <a
									href="mailto:name@example.com">dpeshlakai3@cnm.edu</a>
							</li>
						</ul>
						<br>
						<ul class="list-inline">
							<li>
								<a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
							</li>
							<li>
								<a href="#"><i class="fa fa-github fa-fw fa-3x" aria-hidden="true"></i></a>
							</li>
						</ul>
						<hr class="small">
						<p class="text-muted">Copyright &copy; Diane Peshlakai 2016</p>
					</div>
				</div>
			</div>
			<a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
		</footer>

	</body>
</html>