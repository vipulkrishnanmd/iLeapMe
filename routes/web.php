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
    return view('content/start');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/start', function () {
    return view('content/start');
});

Route::get('/tld', function () {
    return view('content/tld');
});

Route::post('/gettld', 'AjaxController@gettld');

Route::get('/tutorial', function () {
    return view('content/tutorial');
});

Route::get('/test', function () {
    return view('content/test');
});
