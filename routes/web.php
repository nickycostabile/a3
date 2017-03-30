<?php

Route::get('/', 'WelcomeController');

# /routes/web.php
Route::get('/calculator', 'CalculatorController@createCalc');
Route::post('/calculator', 'CalculatorController@calculate');

if(config('app.env') == 'local') {
	Route::get('/logs', function() { });
}

# Laravel 5 Log Viewer Package
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}