<?php

require 'vendor/autoload.php';

// Create new Plates instance
$templates = new League\Plates\Engine('views/');

// Get uri and break it to extract possible querystring
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// routing
// first item of array contains file without querystring
// TODO replace with menu file
switch ($request_uri[0]) {
	// Home page
	case '/':
		echo $templates->render('home');
		break;
	// About page
	case '/about':
		echo 'About';
		break;
	case '/test':
		echo $templates->render('test', ['title' => 'Test']);
		break;
	default:
		// TODO improve 404
		header('HTTP/1.0 404 Not Found');
		echo '404';
		break;
}

?>
