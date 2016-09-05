// configure our routes
app.config(function($routeProvider, $locationProvider) {
	$routeProvider

	// route for the home page
		.when('/', {
			controller  : 'homeController',
			templateUrl : 'angular/views/home.php'
		})

		// route for the profile page
		.when('/profile', {
			controller  : 'treatsController',
			templateUrl : 'angular/views/profile.php'
		})

		// route for the sign up page
		.when('/contact-me', {
			controller  : 'signupController',
			templateUrl : 'angular/views/contact.php'
		})



		// otherwise redirect to home
		.otherwise({
			redirectTo: '/'
		});

	//use the HTML5 History API
	$locationProvider.html5Mode(true);
});