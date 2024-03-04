<?php


Route::post('/ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');

// Route::get('/login', 'Admin\LoginController@getLogin');
Route::controller(Admin\LoginController::class)
->prefix('/login')
->name('admin.auth.')
->group(function () {
    Route::get('/', 'getLogin')->name('login');
});


Route::post('/login', 'Admin\LoginController@postLogin');
//************************************************************* rote post delete chetore / Route::controller(Admin\LoginController::class)
// ->prefix('/login')
// ->name('admin.auth.')
// ->group(function () {
//     Route::get('/', 'postLogin')->name('login');
// });




Route::get('/logout', 'Admin\LoginController@logout');

Route::post('/admin/user/pass-edit/{id}', 'Admin\UserController@postPassEdit');

Route::namespace('Admin')->prefix('admin')->group(function () {
  Route::middleware('AdminPermission')->group(function () {



  // //Category
  // Route::get('category', 'CategoryController@getCategory');
  // Route::get('category/add', 'CategoryController@getAddCategory')->name('admin.category.add');
  // Route::post('category/add', 'CategoryController@postAddCategory')->name('admin.category.add');
  // Route::get('category/delete/{id}', 'CategoryController@getDeleteCategory');
  // Route::post('category/delete', 'CategoryController@postDeleteCategory');
  // Route::get('category/edit/{id}', 'CategoryController@getEditCategory')->name('admin.category.edit');
  // Route::post('category/edit/{id}', 'CategoryController@postEditCategory')->name('admin.category.edit');
  // Route::post('category/sort', 'CategoryController@postSort');
  // Route::get('/category/search', 'CategoryController@getSearch');
  // Route::get('category/find/{id}/', 'CategoryController@find');


  Route::controller(CategoryController::class)
  ->prefix('/category')
  ->name('admin.category.')
  ->group(function () {
      Route::get('/', 'getCategory')->name('index');
      Route::get('/add', 'getAddCategory')->name('add');
      Route::post('/add', 'postAddCategory')->name('add');
      Route::get('/edit/{id}', 'getEditCategory')->name('edit');
      Route::post('/edit/{id}', 'postEditCategory')->name('edit');
      Route::get('/delete/{id}', 'getDeleteCategory')->name('delete');
  });



    //  //Products
    //  Route::get('products', 'ProductController@getProduct');
    //  Route::get('products/add', 'ProductController@getAddProduct');
    //  Route::post('products/add', 'ProductController@postAddProduct');
    //  Route::get('products/delete/{id}', 'ProductController@getDeleteProduct');
    //  Route::post('products/delete', 'ProductController@postDeleteProduct');
    //  Route::get('products/edit/{id}', 'ProductController@getEditProduct');
    //  Route::post('products/edit/{id}', 'ProductController@postEditProduct');
    //  Route::post('products/sort', 'ProductController@postSort');
    //  Route::get('/products/export', 'ProductController@export');


          Route::controller(ProductController::class)
          ->prefix('/products')
          ->name('admin.products.')
          ->group(function () {
              Route::get('/', 'getProduct')->name('index');
              Route::get('/add', 'getAddProduct')->name('add');
              Route::post('/add', 'postAddProduct')->name('add');
              Route::get('/edit/{id}', 'getEditProduct')->name('edit');
              Route::post('/edit/{id}', 'postEditProduct')->name('edit');
              Route::get('/delete/{id}', 'getDeleteProduct')->name('delete');
          });



         //  //blogs   new 
          //  Route::get('blog','BlogController@getArticle');
          //  Route::get('blog/add', 'BlogController@getAddArticle')->name('admin.blog.add');
          //  Route::post('blog/add', 'BlogController@postAddArticle')->name('admin.blog.add');
          //  Route::get('blog/delete/{id}', 'BlogController@getDeleteArticle');
          //  Route::post('blog/delete', 'BlogController@postDeleteArticle');
          //  Route::get('blog/edit/{id}', 'BlogController@getEditArticle')->name('admin.blog.edit');
          //  Route::post('blog/edit/{id}', 'BlogController@postEditArticle')->name('admin.blog.edit');
          //  Route::post('blog/sort', 'BlogController@postSort');
   
   
          Route::controller(BlogController::class)
          ->prefix('/blog')
          ->name('admin.blog.')
          ->group(function () {
              Route::get('/', 'getArticle')->name('index');
              Route::get('/add', 'getAddArticle')->name('add');
              Route::post('/add', 'postAddArticle')->name('add');
              Route::get('/edit/{id}', 'getEditArticle')->name('edit');
              Route::post('/edit/{id}', 'postEditArticle')->name('edit');
              Route::get('/delete/{id}', 'getDeleteArticle')->name('delete');
          });



      //  BlogCategories  New
        // Route::get('blog-cat', 'BlogCategoryController@getArticleCat');
        // Route::get('blog-cat/add', 'BlogCategoryController@getAddArticleCat');
        // Route::post('blog-cat/add', 'BlogCategoryController@postAddArticleCat');
        // Route::get('blog-cat/delete/{id}', 'BlogCategoryController@getDeleteArticleCat');
        // Route::post('blog-cat/delete', 'BlogCategoryController@postDeleteArticleCat');
        // Route::get('blog-cat/edit/{id}', 'BlogCategoryController@getEditArticleCat');
        // Route::post('blog-cat/edit/{id}', 'BlogCategoryController@postEditArticleCat');


        Route::controller(BlogCategoryController::class)
        ->prefix('/blog-cat')
        ->name('admin.blog-cat.')
        ->group(function () {
            Route::get('/', 'getArticleCat')->name('index');
            Route::get('/add', 'getAddArticleCat')->name('add');
            Route::post('/add', 'postAddArticleCat')->name('add');
            Route::get('/edit/{id}', 'getEditArticleCat')->name('edit');
            Route::post('/edit/{id}', 'postEditArticleCat')->name('edit');
            Route::get('/delete/{id}', 'getDeleteArticleCat')->name('delete');
        });

          //Sliders
          // Route::get('slider', 'SliderController@getSlider');
          // Route::get('slider/add', 'SliderController@getAddSlider');
          // Route::post('slider/add', 'SliderController@postAddSlider');
          // Route::get('slider/delete/{id}', 'SliderController@getDeleteSlider');
          // Route::post('slider/delete', 'SliderController@postDeleteSlider');
          // Route::get('slider/edit/{id}', 'SliderController@getEditSlider');
          // Route::post('slider/edit/{id}', 'SliderController@postEditSlider');
          // Route::post('slider/sort', 'SliderController@postSort');


          Route::controller(SliderController::class)
          ->prefix('/slider')
          ->name('admin.slider.')
          ->group(function () {
              Route::get('/', 'getSlider')->name('index');
              Route::get('/add', 'getAddSlider')->name('add');
              Route::post('/add', 'postAddSlider')->name('add');
              Route::get('/edit/{id}', 'getEditSlider')->name('edit');
              Route::post('/edit/{id}', 'postEditSlider')->name('edit');
              Route::get('/sort', 'postSort')->name('sort');
              Route::get('/delete/{id}', 'getDeleteSlider')->name('delete');
          });
  

          //MobileSliders
          // Route::get('mobile-slider', 'SliderController@getMobile');
          // Route::get('mobile-slider/add', 'SliderController@getAddMobile');
          // Route::post('mobile-slider/add', 'SliderController@postAddMobile');
          // Route::get('mobile-slider/delete/{id}', 'SliderController@getDeleteMobile');
          // Route::post('mobile-slider/delete', 'SliderController@postDeleteMobile');
          // Route::get('mobile-slider/edit/{id}', 'SliderController@getEditMobile');
          // Route::post('mobile-slider/edit/{id}', 'SliderController@postEditMobile');
  
  
          Route::controller(SliderController::class)
          ->prefix('/mobile-slider')
          ->name('admin.mobile-slider.')
          ->group(function () {
              Route::get('/', 'getMobile')->name('index');
              Route::get('/add', 'getAddMobile')->name('add');
              Route::post('/add', 'postAddMobile')->name('add');
              Route::get('/edit/{id}', 'getEditMobile')->name('edit');
              Route::post('/edit/{id}', 'postEditMobile')->name('edit');
              Route::get('/delete/{id}', 'getDeleteMobile')->name('delete');
          });



        //Uploaders
        // Route::get('uploader', 'ContentController@getUploader');
        // Route::get('uploader/add', 'ContentController@getAddUploader');
        // Route::post('uploader/add', 'ContentController@postAddUploader');
        // Route::get('uploader/delete/{id}', 'ContentController@getDeleteUploader');
        // Route::get('uploader/edit/{id}', 'ContentController@getEditUploader');
        // Route::post('uploader/edit/{id}', 'ContentController@postEditUploader');

        Route::controller(ContentController::class)
        ->prefix('/uploader')
        ->name('admin.uploader.')
        ->group(function () {
            Route::get('/', 'getUploader')->name('index');
            Route::get('/add', 'getAddUploader')->name('add');
            Route::post('/add', 'postAddUploader')->name('add');
            Route::get('/edit/{id}', 'getEditUploader')->name('edit');
            Route::post('/edit/{id}', 'postEditUploader')->name('edit');
            Route::get('/delete/{id}', 'getDeleteUploader')->name('delete');
        });


          //permision-user
          Route::get('user/group', 'UserController@getGroup');
          Route::get('user/group-add', 'UserController@getGroupAdd');
          Route::post('user/group-add', 'UserController@postGroupAdd');
          Route::get('user/group-edit/{id}', 'UserController@getGroupEdit');
          Route::post('user/group-edit/{id}', 'UserController@postGroupEdit');
          Route::post('user/group-delete', 'UserController@postGroupDelete');
          Route::get('user/delete/{id}', 'UserController@getGroupDelete');

        //   Route::controller(UserController::class)
        // ->prefix('/user/group')
        // ->name('admin.user.group.')
        // ->group(function () {
        //     Route::get('/', 'getGroup')->name('index');
        //     Route::get('/add', 'getGroupAdd')->name('add');
        //     Route::post('/add', 'postGroupAdd')->name('add');
        //     Route::get('/edit/{id}', 'getGroupEdit')->name('edit');
        //     Route::post('/edit/{id}', 'postGroupEdit')->name('edit');
        //     Route::get('/delete/{id}', 'getGroupDelete')->name('delete');
        // });

     

                
 //user
 Route::get('user', 'UserController@getIndex');
 Route::get('users', 'UserController@getIndex2');
 Route::get('user/add', 'UserController@getAdd');
 Route::post('user/add', 'UserController@postAdd');
 Route::get('user/edit/{id}', 'UserController@getEdit');
 Route::post('user/edit/{id}', 'UserController@postEdit');
 Route::get('users/edit/{id}', 'UserController@getEdit2');
 Route::post('users/edit/{id}', 'UserController@postEdit2');
 Route::post('user/delete', 'UserController@postDelete');
 Route::get('/users/export', 'UserController@export');
 Route::get('user/status/{id?}', 'UserController@Status')->name('admin.user.status');


//  Route::controller(UserController::class)
//  ->prefix('/user')
//  ->name('admin.user.')
//  ->group(function () {
//      Route::get('/', 'getIndex')->name('index');
//      Route::get('/add', 'getAdd')->name('add');
//      Route::post('/add', 'postAdd')->name('add');
//      Route::get('/edit/{id}', 'getEdit')->name('edit');
//      Route::post('/edit/{id}', 'postEdit')->name('edit');
//      Route::get('/delete/{id}', 'getGroupDelete')->name('delete');
//  });





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



      

 


      


    // Route::get('/', 'ContentController@getAdmin')->name('admin.index');

    Route::controller(ContentController::class)
    ->prefix('/')
    ->name('index')
    ->group(function () {
        Route::get('/', 'getAdmin')->name('index');
    });
  
    
    
    });

  });