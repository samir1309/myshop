<?php

Route::namespace('Admin')->prefix('admin')->group(function () {

    Route::get('/', 'Admin\ContentController@getAdmin');
    
    });

