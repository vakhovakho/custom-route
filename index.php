<?php

include dirname(__FILE__) . '/routes.php';

// Get path and method from request
$path = explode('?', $_SERVER['REQUEST_URI'])[0];
$method = $_SERVER['REQUEST_METHOD'];

// Look for current path and method in $routes array
foreach(Route::$routes as $route){
	if($route['method'] === $method && $route['path'] === strtolower($path)){
		$route['callback']();
		exit;
	}
}

header('HTTP/1.0 404 Not Found');

