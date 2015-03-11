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

Route::post('/manage-category/add','CategoryController@storeCategory');
Route::post('/manage-category/add-subcategory','CategoryController@storeSubcategory');
Route::get('/manage-category','CategoryController@index');
Route::get('/manage-client','ClientController@index');
Route::post('/manage-client/add','ClientController@store');

Route::get('/add-stock', function()
{
	return View::make('add-stock');
});

Route::get('/view-stock', function()
{
	return View::make('view-stock');
});

Route::post('login','LoginController@doLogIn');
Route::get('logout', 'LoginController@doLogout');

Route::get('admin', array(
  'before' => 'auth',
  'uses' => 'AdminController@index'
  )
);


