<?php


Route::post('/ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');
Route::get('/login', 'Admin\LoginController@getLogin');
Route::post('/login', 'Admin\LoginController@postLogin');

Route::namespace('Admin')->prefix('admin')->group(function () {


  //Category
  Route::get('category', 'CategoryController@getCategory');
  Route::get('category/add', 'CategoryController@getAddCategory');
  Route::post('category/add', 'CategoryController@postAddCategory');
  Route::get('category/delete/{id}', 'CategoryController@getDeleteCategory');
  Route::post('category/delete', 'CategoryController@postDeleteCategory');
  Route::get('category/edit/{id}', 'CategoryController@getEditCategory');
  Route::post('category/edit/{id}', 'CategoryController@postEditCategory');
  Route::post('category/sort', 'CategoryController@postSort');
  Route::get('/category/search', 'CategoryController@getSearch');
  Route::get('category/find/{id}/', 'CategoryController@find');


     //Products
     Route::get('products', 'ProductController@getProduct');
     Route::get('products/add', 'ProductController@getAddProduct');
     Route::post('products/add', 'ProductController@postAddProduct');
     Route::get('products/delete/{id}', 'ProductController@getDeleteProduct');
     Route::post('products/delete', 'ProductController@postDeleteProduct');
     Route::get('products/edit/{id}', 'ProductController@getEditProduct');
     Route::post('products/edit/{id}', 'ProductController@postEditProduct');
     Route::post('products/sort', 'ProductController@postSort');
     Route::get('/products/export', 'ProductController@export');

     

    Route::get('/', 'ContentController@getAdmin')->name('admin.index');

    
    
    });

