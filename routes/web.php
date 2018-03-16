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

Auth::routes();

Route::redirect('/here', '/there');

// Main pages
Route::get('/', 'HomePageController@index')->name('home.index');
Route::get('/shop', 'ShopPageController@index')->name('shop.index');
Route::get('/shop/{product}', 'ShopPageController@show')->name('shop.show');

// Cart
Route::get('/cart', 'CartPageController@index')->name('cart.index');
Route::post('/cart/{product}/add', 'CartPageController@add')->name('cart.add');
Route::patch('/cart/{product}/update', 'CartPageController@update')->name('cart.update');
Route::delete('/cart/{product}/destroy', 'CartPageController@destroy')->name('cart.destroy');
Route::post('/cart/wishlist/{product}', 'CartPageController@wishlist')->name('cart.wishlist');

Route::delete('/wishlist/{product}/destroy', 'WishlistController@destroy')->name('wishlist.destroy');
Route::post('/wishlist/wishlist/{product}', 'WishlistController@cart')->name('wishlist.cart');

Route::get('/cart/checkout', 'CheckoutPageController@index')->name('checkout.index');

Route::get('/cart/checkout/thank-you', 'CheckoutPageController@thankYou')->name('checkout.thank.you');

Route::post('/cart/checkout/coupon/store', 'CouponsController@store')->name('coupon.store');
Route::delete('/cart/checkout/coupon/destroy', 'CouponsController@destroy')->name('coupon.destroy');

Route::get('/home', 'DashboardController@index')->name('dashboard.index');

// Route::get('/admin/tag/', 'TagController@index')                                    ->name('tag.index');
// Route::post('/admin/tag/', 'TagController@store')                                   ->name('tag.store');
// Route::get('/admin/tag/create', 'TagController@create')                             ->name('tag.create');
// Route::get('/admin/tag/{id}', 'TagController@show')                                 ->name('tag.show');
// Route::patch('/admin/tag/{id}/update', 'TagController@update')                      ->name('tag.update');
// Route::delete('/admin/tag/{id}/destroy', 'TagController@destroy')                   ->name('tag.destroy');
// Route::get('/admin/tag/{id}/edit', 'TagController@edit')                            ->name('tag.edit');