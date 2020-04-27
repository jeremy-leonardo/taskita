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
    return view('home.index');
});
Route::get('/catalog', function () {
    return view('catalog.index');
});
Route::get('/catalog/detail/1', function () {
    return view('catalog.detail');
});
Route::get('/register', function () {
    // tambahin if auth web -> return ke home
    return view('auth.register');
});

Route::post('/login', 'Auth\LoginController@login');
Route::get('/logout', 'Auth\LoginController@logout');
Route::post('/register', 'Auth\RegisterController@create');