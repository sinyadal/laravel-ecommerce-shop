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
Route::get('/shop/{product}', 'ShopPageController@show')->name('shop.show');
Route::get('/cart', 'CartPageController@index')->name('cart.index');



Auth::routes();

Route::get('/home', 'DashboardController@index')->name('dashboard.index');



// Route::get('/admin/tag/', 'TagController@index')                                    ->name('tag.index');
// Route::post('/admin/tag/', 'TagController@store')                                   ->name('tag.store');
// Route::get('/admin/tag/create', 'TagController@create')                             ->name('tag.create');
// Route::get('/admin/tag/{id}', 'TagController@show')                                 ->name('tag.show');
// Route::patch('/admin/tag/{id}/update', 'TagController@update')                      ->name('tag.update');
// Route::delete('/admin/tag/{id}/destroy', 'TagController@destroy')                   ->name('tag.destroy');
// Route::get('/admin/tag/{id}/edit', 'TagController@edit')                            ->name('tag.edit');