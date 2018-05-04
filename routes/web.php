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
    return view('index');
})->name('index');

Route::get('/aboutus', function () {
    return view('aboutus');
})->name('about');

Route::get('/event_list', function () {
    return view('elist');
})->name('elist');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
