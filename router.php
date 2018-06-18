<?php 

$router->get('/', function() use($blade) {
	return $blade->make('home');
});

$router->get('/brief', function() use($blade) {
	return $blade->make('brief');
});

