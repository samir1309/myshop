<?php

//cart
Route::get('basket/add', 'Site\ShopController@getAddBasket')->name('site.basket.add');
Route::get('/skills/{url}', 'Site\HomeController@getCategory')->name('site.product.category');
Route::get('/series/{url}', 'Site\HomeController@getDetails')->name('site.product.details');
Route::get('/list/{id}', 'Site\HomeController@getlist')->name('site.product.list');

//blog
Route::get('/blog', 'Site\HomeController@getListBlog')->name('site.blog.listcat');
Route::get('/listcat/{id}', 'Site\HomeController@getCatBlog')->name('site.blog.cat');

Route::get('details/{url}', 'Site\HomeController@getDetailsBlog')->name('site.blog.details');

//endblog
Route::get('/contact', 'Site\HomeController@getAbout')->name('site.contact');
Route::get('/', 'Site\HomeController@getIndex')->name('site.home');

