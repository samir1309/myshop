<?php



Route::get('/login', 'Admin\LoginController@getLogin');
Route::post('/login', 'Admin\LoginController@postLogin');

Route::namespace('Admin')->prefix('admin')->group(function () {

    Route::get('/', 'ContentController@getAdmin')->name('admin.index');;

    
    
    });

