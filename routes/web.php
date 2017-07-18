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
	    return view("welcome");
});
Route::resource('routes','routeController');
Route::get('search',function(){
	return view("search");

});

Route::post('/show','searchController@search');
