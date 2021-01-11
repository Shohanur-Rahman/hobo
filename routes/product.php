<?php

use Illuminate\Support\Facades\Route;







Route::get('/search', 'ProductController@search')->name('product.search');
Route::get('/product/{slug}', 'ProductController@show')->name('product.search.show');
Route::get('/{category}/{slug}', 'ProductController@details')->name('product.details');
Route::get('/{category}', 'ProductController@index')->name('product.index');

Route::get('/cart-list', 'ProductController@getCartList')->name('product.cartlist');






