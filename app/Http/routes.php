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

Route::get('/', array('as' => 'home', 'uses' => 'HomeController@getIndex'));
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/login',array('as' => 'login', 'uses' => 'Auth\AuthController@getLogin'));
Route::post('login',array('uses' => 'Auth\AuthController@postLogin'));
