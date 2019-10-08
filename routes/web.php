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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Auth::routes(['verify' => true]);

//Route::get('/guest-list', 'Controller@guests')->middleware('auth')->middleware('verified');

Route::get('/guest-list', 'UserController@index')->middleware('auth');

Route::patch('/users/{user}', 'UserController@update');

Route::resource('messages', 'MessagesController');



