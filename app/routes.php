<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
//redefine blade tags because of angularJS
Blade::setContentTags('<%', '%>'); 		
Blade::setEscapedContentTags('<%%', '%%>'); 

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/prova', function()
{
	return View::make('admin.index');
});

Route::controller('/admin/server', 'ApiServerController');


