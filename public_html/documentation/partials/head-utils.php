<!DOCTYPE html>
<html lang="en" ng-app="Diane's PWP">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-COMPATIBLE" content="IE-edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

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

		<!--Angular JS Libraries-->
		<?php $ANGULAR_VERSION = "1.5.8"; ?>
		<script type="text/javascript"
				  src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION; ?>/angular.min.js"></script>
		<script type="text/javascript"
				  src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION; ?>/angular-messages.min.js"></script>
		<script type="text/javascript"
				  src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION; ?>/angular-route.js"></script>
		<script type="text/javascript"
				  src="//ajax.googleapis.com/ajax/libs/angularjs/<?php echo $ANGULAR_VERSION; ?>/angular-animate.js"></script>
		<script type="text/javascript"
				  src="//cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/1.3.3/ui-bootstrap-tpls.min.js"></script>


		<!-- Latest compiled and minified JavaScript -->
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>


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

	</head>