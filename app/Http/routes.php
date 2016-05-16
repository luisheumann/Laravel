<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('app.dashboard');
});



Route::get('transportes', 'TransportController@index');
Route::get('modelos', 'TransportController@modelos');

Route::auth();

Route::get('/home', 'HomeController@index');
