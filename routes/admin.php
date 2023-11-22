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


        //Uploaders
        Route::get('uploader', 'ContentController@getUploader');
        Route::get('uploader/add', 'ContentController@getAddUploader');
        Route::post('uploader/add', 'ContentController@postAddUploader');
        Route::get('uploader/delete/{id}', 'ContentController@getDeleteUploader');
        Route::get('uploader/edit/{id}', 'ContentController@getEditUploader');
        Route::post('uploader/edit/{id}', 'ContentController@postEditUploader');

     

        //Articles
        Route::get('articles', 'ArticleController@getArticle');
        Route::get('articles/add', 'ArticleController@getAddArticle');
        Route::post('articles/add', 'ArticleController@postAddArticle');
        Route::get('articles/delete/{id}', 'ArticleController@getDeleteArticle');
        Route::post('articles/delete', 'ArticleController@postDeleteArticle');
        Route::get('articles/edit/{id}', 'ArticleController@getEditArticle');
        Route::post('articles/edit/{id}', 'ArticleController@postEditArticle');
        Route::post('articles/sort', 'ArticleController@postSort');

        //ArticleCategories
        Route::get('article-cat', 'ArticleController@getArticleCat');
        Route::get('article-cat/add', 'ArticleController@getAddArticleCat');
        Route::post('article-cat/add', 'ArticleController@postAddArticleCat');
        Route::get('article-cat/delete/{id}', 'ArticleController@getDeleteArticleCat');
        Route::post('article-cat/delete', 'ArticleController@postDeleteArticleCat');
        Route::get('article-cat/edit/{id}', 'ArticleController@getEditArticleCat');
        Route::post('article-cat/edit/{id}', 'ArticleController@postEditArticleCat');


        //Sliders
        Route::get('slider', 'SliderController@getSlider');
        Route::get('slider/add', 'SliderController@getAddSlider');
        Route::post('slider/add', 'SliderController@postAddSlider');
        Route::get('slider/delete/{id}', 'SliderController@getDeleteSlider');
        Route::post('slider/delete', 'SliderController@postDeleteSlider');
        Route::get('slider/edit/{id}', 'SliderController@getEditSlider');
        Route::post('slider/edit/{id}', 'SliderController@postEditSlider');
        Route::post('slider/sort', 'SliderController@postSort');

        //MobileSliders
        Route::get('mobile-slider', 'SliderController@getMobile');
        Route::get('mobile-slider/add', 'SliderController@getAddMobile');
        Route::post('mobile-slider/add', 'SliderController@postAddMobile');
        Route::get('mobile-slider/delete/{id}', 'SliderController@getDeleteMobile');
        Route::post('mobile-slider/delete', 'SliderController@postDeleteMobile');
        Route::get('mobile-slider/edit/{id}', 'SliderController@getEditMobile');
        Route::post('mobile-slider/edit/{id}', 'SliderController@postEditMobile');


        //Uploaders
        Route::get('uploader', 'ContentController@getUploader');
        Route::get('uploader/add', 'ContentController@getAddUploader');
        Route::post('uploader/add', 'ContentController@postAddUploader');
        Route::get('uploader/delete/{id}', 'ContentController@getDeleteUploader');
        Route::get('uploader/edit/{id}', 'ContentController@getEditUploader');
        Route::post('uploader/edit/{id}', 'ContentController@postEditUploader');



    Route::get('/', 'ContentController@getAdmin')->name('admin.index');

    
    
    });

