<?php

# /
Route::get('/', 'CalculatorController@createCalc');
Route::post('/', 'CalculatorController@calculate');

# /calculator
Route::get('/calculator', 'CalculatorController@createCalc');
Route::post('/calculator', 'CalculatorController@calculate');


# Laravel 5 Log Viewer Package
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}