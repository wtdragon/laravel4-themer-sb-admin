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

Route::get('/', function()
{
	//return View::make('hello');
	return View::make('backend.dashboard');
});

Route::get('/dashboard/', function()
{
	return View::make('backend.dashboard');
});

Route::get('/blank-page/', function()
{
	return View::make('backend.blank-page');
});

Route::get('/bootstrap-elements/', function()
{
	return View::make('backend.bootstrap-elements');
});

Route::get('/bootstrap-grid/', function()
{
	return View::make('backend.bootstrap-grid');
});

Route::get('/charts/', function()
{
	return View::make('backend.charts');
});

Route::get('/forms/', function()
{
	return View::make('backend.forms');
});

Route::get('/tables/', function()
{
	return View::make('backend.tables');
});
Route::get('/teste/', function()
{
	return View::make('teste');
});

