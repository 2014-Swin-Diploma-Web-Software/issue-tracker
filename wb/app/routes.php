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

/*Route::get('/', function()
{
	return View::make('hello');
});*/
Route::resource('issues', 'IssueController');
//Route::get('/', ['as' => 'home', 'uses' => 'PagesController@index']);

Route::get('/about', 'PagesController@about');

Route::get('/gallery', 'PagesController@gallery');

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/login', 'PagesController@login');

Route::get('/registe', 'PagesController@registe');

/*Route::get('/', function()
{
	$users = User::find(1);
	return "Username is " . $users->username . " Email at " . $users->email;
});*/

Route::get('teastgood', 'PagesController@teastgood');

Route::resource('issues', 'IssuesController');

Route::resource('users', 'UsersController');

Route::resource('status', 'StatusController');

Route::get('test', function()
{
  var_dump(DB::select('select * from migrations'));
});

Route::get('phpmyadmin', function()
{
  return View::make('../../www/phpmyadmin');  
});

Route::get('test1', function()
{
  return 'test1';
});