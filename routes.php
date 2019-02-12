<?php

include dirname(__FILE__) . '/router.php';

Route::get('/hello/user', function (){
	echo "Hello there!";
});

Route::post('/hello/user', function (){
	echo "No POST requests allowed for this endpoint.";
});

Route::post('/save', function (){
	echo "Item Saved.";
});