<?php

/* Laravel 5 Log Viewer Package for Local Env */
if(config('app.env') == 'local') {
	Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');
}