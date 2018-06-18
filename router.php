<?php 

$router->get('/', function() use($blade) {
	return $blade->make('home');
});

$router->get('/brief', function() use($blade) {
	return $blade->make('brief');
});

$router->get('/services', function() use($blade) {
	return $blade->make('services.index');
});
