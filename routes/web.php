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

Route::redirect('/here', '/there');

// Route::get('/shop', function () {
//     return view('shop');
// });

// Main pages
Route::get('/', 'HomePageController@index')->name('home.index');
Route::get('/shop', 'ShopPageController@index')->name('shop.index');

Auth::routes();

Route::get('/home', 'DashboardController@index')->name('dashboard.index');
