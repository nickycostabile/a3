<?php

Route::get('/', 'WelcomeController');

/* Laravel 5 Log Viewer Package if Local Env */
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}