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

Route::redirect('/here', '/there', 301);

// Route::get('/', function () {
//     return view('home-page');
// });

Route::get('/', 'HomePageController@index')->name('homepage.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
