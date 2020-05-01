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

Route::get('/', function () {return view('home.index');});
Route::get('/catalog', 'ItemController@showAll');
Route::get('/catalog/detail/{item_id}', 'ItemController@show');
Route::get('/catalog/search', 'ItemController@search');

Route::get('/register', function () {
    // tambahin if auth web -> return ke home
    return view('auth.register');
});

Route::get('/order', 'TransactionController@showAllByCurrentUser');

Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/register', 'Auth\RegisterController@create');