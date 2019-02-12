<?php

class Route {

	// Rendered routes array
	public static $routes = [];

	// Save any type of routes in static $routes array;
	final protected static function addRoute($method, $path, $callback)
	{
		
		if(!strlen($path)) {
			$path = '/';
		}

		if($path[0] !== '/') {
			$path = '/' . $path;
		}

		static::$routes[] = [
			'method' => strtoupper($method),
			'path' => strtolower($path),
			'callback' => $callback
		];
	}

	// Save get routes
	public static function get($url, $callback) {
		static::addRoute('GET', $url, $callback);
	}

	// Save post routes
	public static function post($url, $callback) {
		static::addRoute('POST', $url, $callback);
	}
}