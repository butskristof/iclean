<?php

require 'vendor/autoload.php';

// new Plates instance
$templates = new League\Plates\Engine('views/'); // views as base folder

// get URI and break it up to separate querystring if applicable
$request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);

// routing
switch ($request_uri[0]) {
	// home
	case '/':
		// no break -> same as '/home'
	case '/home':
		echo $templates->render('home');
		break;
	case '/diensten':
		echo $templates->render('diensten');
		break;
	case '/referenties':
		echo $templates->render('referenties');
		break;
	case '/contact':
		echo $templates->render('contact');
		break;
	default:
		header('HTTP/1.0 404 Not Found');
		echo $templates->render('404');
		break;
}

?>
