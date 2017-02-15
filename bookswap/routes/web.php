<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/test', function()
{
	$exchange = App\Exchange::orderBy('created_at', 'asc')->get();
	return View::make('test', array('exchange' => $exchange));


});

Route::get('/viewBooks', function()
{
	$books = App\Books::orderBy('created_at', 'asc')->get();
	return View::make('viewBooks', array('books' => $books));

});

Route::get('/selling', function()
{
	return View::make('selling');

});
