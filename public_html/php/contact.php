
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<!-- set base for relative links - to enable pretty URLs -->
		<base href="<?php echo dirname($_SERVER["PHP_SELF"]) . "/";?>">

		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- Optional theme -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
		<link rel="stylesheet" href="css/style.css" type="text/css"/>
		<!----Font Awesome-------->
		<link type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		<script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
		<!--Google reCAPTCHA-->
		<script src='https://www.google.com/recaptcha/api.js'></script>

		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

		<!-- jQuery Form, Additional Methods, Validate -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.51/jquery.form.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/additional-methods.min.js"></script>

		<!-- Your JavaScript Form Validator -->
		<script src="js/form-validate.js"></script>

		<!-- Google reCAPTCHA -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<!------Title of Website-------->
		<title>DianePeshlakai.com</title>
	<body class="sfooter">

		<div class="sfooter-content">
			<!-- your page content here-->
		</div>

		<footer>
			<!-- footer here-->
		</footer>

	</body>



	</head>
	<body class="sfooter">
		<div class="sfooter-content">
			<!--Header and Navigation bar-->
			<header>
				<div class="container">
					<!--Bootstrap Navigation Bar-->
					<nav class="navbar navbar-inverse">
						<!-- logo and mobile toggle button get grouped together for better mobile display -->
						<div class="navbar-header">
							<!-- this is the mobile menu button -->
							<button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#main-menu">
								<span class="sr-only">main menu</span>
								<span class="glyphicon glyphicon-menu-hamburger">
								</span>
							</button>
							<a class="navbar-brand" href="../index.php">
								<i class="fa fa-home" aria-hidden="true"></i></a>

							<ul class="nav navbar-nav navbar-right">
								<li><a href="..portfolio/index.php">Portfolio</a></li>
								<li><a href="../contact.php">Contact Me</a></li>

								<a class="navbar-brand"="Diane Peshlakai"</a>
							</ul>
						</div>
						<!-- here are your main nav links, grouped for toggling -->
						<div class="collapse navbar-collapse" id="main-menu">
							<a class="navbar-icon">
						</div>
						</div>
			</header>

								<!--Begin Contact Form-->
			<main>

				<div class="container form-wrap">
					<div class="row">
						<div class="col-sm-6">
							<form id="contact-form" action="php/mailer.php" method="post">
								<div class="form-group">
									<label for="name">Name <span class="text-danger">*</span></label>
							<div class="input-group">
							<div class="input-group-addon">
								<i class="fa fa-user" aria-hidden="true"></i>
							</div>
							<input type="text" class="form-control" id="name" name="name" placeholder="Name">
						</div>
					</div>
			<div class="form-group">
				<label for="email">Email <span class="text-danger">*</span></label>
				<div class="input-group">
				<div class="input-group-addon">
				<i class="fa fa-envelope" aria-hidden="true"></i>
			</div>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email">
		</div>
	</div>
			<div class="form-group">
			<label for="subject">Subject</label>
			<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-pencil" aria-hidden="true"></i>
			</div>
			<input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
		</div>
	</div>
	<div class="form-group">
		<label for="message">Message <span class="text-danger">*</span></label>
		<div class="input-group">
			<div class="input-group-addon">
				<i class="fa fa-comment" aria-hidden="true"></i>
			</div>
			<textarea class="form-control" rows="5" id="message" name="message" placeholder="Message (2000 characters max)"></textarea>
		</div>
	</div>

									<!-- google recaptcha-->
								<div class="g-recaptcha" data-sitekey="6LdQsykTAAAAANPVJzGdnDI1Izn0VJ438a7G0CIQ"></div>


	<button class="btn btn-success" type="submit"><i class="fa fa-paper-plane"></i> Send</button>
	<button class="btn btn-warning" type="reset"><i class="fa fa-ban"></i> Reset</button>
</form>

<!--empty area for form error/success output-->
<div class="row">
	<div class="col-xs-12">
		<div id="output-area"></div>
	</div>
</div>
					</div>
				</main>
			</div>
		</body>
</html>