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

Route::post('/', function(){
    return Response::json(array_merge(array('request' => 'POST'), Input::all()));
    
});
Route::resource('user', 'UserController');
Route::get('/', function(){
    return Response::json(array_merge(array('request' => 'GET'), Input::all()));
    
});
