<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcomeMain');
});
Route::post('/',["uses"=>'InputDataController@storeComment']);
Route::post('/home',["uses"=>'InputDataController@store']);
Route::post('/feature',["uses"=>'InputDataController@showFeature']);
Auth::routes();
Route::get('/home', 'HomeController@index');
Route::get('/Income', 'HomeController@Income');
Route::get('/Balance', 'HomeController@Balance');
Route::get('/General', 'HomeController@General');
Route::get('/Trial', 'HomeController@Trial');
Route::get('/Journal', 'HomeController@Journal');
Route::post('/Income',["uses"=>'InputDataController@showIncome']);
Route::post('/Balance',["uses"=>'InputDataController@showBalance']);
Route::post('/Journal',["uses"=>'InputDataController@showJournal']);
Route::post('/General',["uses"=>'InputDataController@showGeneral']);
Route::post('/Trial',["uses"=>'InputDataController@showTrial']);
Route::get('/admin', function () {
	return view('admin');
});
Route::get('/adminDashboard', function () {
	return view('adminDashboard');
});
Route::post('/admin',["uses"=>'InputDataController@adminLogin']);
