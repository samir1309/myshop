<?php

//cart
Route::get('basket/add', 'Site\ShopController@getAddBasket')->name('site.basket.add');
Route::get('/skills/{url}', 'Site\HomeController@getCategory')->name('site.product.category');
Route::get('/series/{url}', 'Site\HomeController@getDetails')->name('site.product.details');
Route::get('/list/{id}', 'Site\HomeController@getlist')->name('site.product.list');


Route::get('/', 'Site\HomeController@getIndex')->name('site.home');

