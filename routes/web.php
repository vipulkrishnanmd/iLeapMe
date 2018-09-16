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

Route::get('/url', function () {
    return view('content/tld');
});

Route::post('/gettld', 'AjaxController@gettld');
Route::get('/gettld', 'AjaxController@gettld');

Route::get('/tutorial', function () {
    return view('content/tutorial');
});

Route::get('/test', function () {
    return view('content/test');
});

Route::get('/maptest', function () {
    return view('content/maptest');
});

Route::get('/services', 'ServiceController@index');

Route::get('service/{id}', 'ServiceController@showService');

Route::get('/tut', function () {
    return view('content/tut');
});

Route::get('/gmaptest', function () {
    return view('content/gmaptest');
});

Route::get('/extapi', 'AjaxController@extApiGet');

Route::get('/extendedcheck', 'AjaxController@extendedCheck');

Route::get('/map', function () {
    return view('content/map');
});