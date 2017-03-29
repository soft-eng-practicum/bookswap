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

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', 'HomeController@index');

Route::get('/test', function(Request $request)
{
	$exchange = App\Exchange::join('books', 'books_id', '=', 'books.id')
	->join('users', 'user_id', '=', 'users.id')
  ->where('title', 'LIKE', '%'.$request->input('title').'%')
  ->whereRaw('adddate(exchange.created_at, interval 14 day) > now()')
  ->get();


	return View::make('test', array('exchange' => $exchange));


});

Route::get('/addExchange', function () {
	$news = App\Books::orderBy('id', 'desc')->first();
	$news = $news->id;
    return View::make('addExchange', ['news' => $news]);
});

Route::post('/addExchange', 'AddExchangeController@store');

Route::get('/viewBooks', function()
{
	$books = App\Books::orderBy('created_at', 'asc')->get();
	return View::make('viewBooks', array('books' => $books));

});

Route::get('/selling', function()
{
	return View::make('selling');

});

Route::get('/profile', function()
{
  $exchange = App\Exchange::join('books', 'books_id', '=', 'books.id')
  ->join('users', 'user_id', '=', 'users.id')
  ->where('user_id', '=', Auth::id())
  ->select('exchange.id as exchange_id', 'exchange.*', 'users.*', 'books.*' )
  ->get();

	return View::make('profile', array('exchange' => $exchange));

});

Route::delete('/profile/{id}',array('uses' => 'AddExchangeController@destroy', 'as' => '/profile'));

Route::resource('exchange', 'AddExchangeController');


Route::get('/about', function()
{
	return View::make('about');

});

Route::post('/viewBooks', 'SellingController@store');

Route::get('/faq', function()
{
	return View::make('faq');

});

Route::get('/example', function()
{
	return View::make('example');

});

Route::get('/listexchangeJSON', function(Request $request)
{
 //$books = App\Books::join('books', 'books_id', '=', 'books.id')
	//->join('users', 'user_id', '=', 'users.id')->get();

 $books = App\Books::where('title', 'LIKE', '%'.$request->input('title').'%')
          ->take(5)
          ->get();



	//return View::make('listexchangeJSON', array('books' => $books));
  return Response::json($books);

});
