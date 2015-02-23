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
	return View::make('index');
});

Route::get('login', function()
{
	return View::make('login');
});

Route::get('/manage-product', function()
{
	return View::make('manage-product');
});

Route::get('/add-product', function()
{
	return View::make('add-product');
});

Route::get('/edit-product', function()
{
	return View::make('edit-product');
});

Route::get('/manage-category', function()
{
	return View::make('manage-category');
});

Route::post('login','LoginController@doLogIn');
Route::get('logout', 'LoginController@doLogout');

Route::get('admin', array(
  'before' => 'auth',
  'uses' => 'AdminController@index'
  )
);


