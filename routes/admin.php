<?php


Route::post('/ckeditor/upload', [CkeditorController::class, 'upload'])->name('ckeditor.upload');


Route::controller(Admin\LoginController::class)
->prefix('/login')
->name('admin.auth.')
->group(function () {
    Route::get('/', 'getLogin')->name('login');
    Route::post('/', 'postLogin')->name('login');
});

Route::get('/logout', 'Admin\LoginController@logout');


Route::namespace('Admin')->prefix('admin')->group(function () {
  Route::middleware('AdminPermission')->group(function () {

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



            Route::controller(ProductController::class)
            ->prefix('/products/video')
            ->name('admin.products.video.')
            ->group(function () {
                Route::get('/{id}', 'getVideo')->name('index');
                Route::get('/add/{product_id}', 'getAddVideo')->name('add');
                Route::post('/add/{product_id}', 'postAddVideo')->name('add');
                Route::get('/edit/{id}', 'getEditVideo')->name('edit');
                Route::post('/edit/{id}', 'postEditVideo')->name('edit');
                Route::get('/delete/{id}', 'getDeleteVideo')->name('delete');
                Route::get('/sort/{id}', 'postSortVideo')->name('sort');
            });
 
           Route::controller(RedirectController::class)
            ->prefix('/redirect')
            ->name('admin.redirect.')
            ->group(function () {
                Route::get('/', 'getRedirect')->name('index');
                Route::get('/add', 'getRedirectAdd')->name('add');
                Route::post('add', 'postRedirectAdd')->name('add');
                Route::get('/delete/{id}', 'getRedirectDelete')->name('delete');

            });
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


            Route::controller(SocialController::class)
            ->prefix('/social')
            ->name('admin.social.')
            ->group(function () {
                Route::get('/', 'get')->name('index');
                Route::get('/add', 'getadd')->name('add');
                Route::post('/add', 'postAdd')->name('add');
                Route::get('/edit/{id}', 'getEdit')->name('edit');
                Route::post('/edit/{id}', 'postEdit')->name('edit');
                Route::get('/delete/{id}', 'getDelete')->name('delete');
            });


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

    

        Route::controller(SettingController::class)
        ->prefix('/setting')
        ->name('admin.setting.')
        ->group(function () {
            Route::get('/edit', 'getEditSetting')->name('edits');
            Route::post('/edit/{id}', 'postEditSetting')->name('edit');
        });
 
          Route::controller(UserController::class)
        ->prefix('/user/group')
        ->name('admin.user.group.')
        ->group(function () {
            Route::get('/', 'getGroup')->name('index');
            Route::get('/add', 'getGroupAdd')->name('add');
            Route::post('/add', 'postGroupAdd')->name('add');
            Route::get('/edit/{id}', 'getGroupEdit')->name('edit');
            Route::post('/edit/{id}', 'postGroupEdit')->name('edit');
            Route::get('/delete/{id}', 'getGroupDelete')->name('delete');
            Route::post('/delete', 'postGroupDelete')->name('delete');
            
        });

        Route::controller(UserController::class)
        ->prefix('/user')
        ->name('admin.user.')
        ->group(function () {
            Route::get('/', 'getIndex')->name('index');
            Route::get('/add', 'getAdd')->name('add');
            Route::post('/add', 'postAdd')->name('add');
            Route::get('/edit/{id}', 'getEdit')->name('edit');
            Route::post('/edit/{id}', 'postEdit')->name('edit');
            Route::get('/delete/{id}', 'getGroupDelete')->name('delete');
            Route::post('/delete', 'postDelete')->name('delete');
        });


        ///این بخشها نیاز به اصلاح و باز نوشتاری دارند 
        //Articles
        Route::get('articles', 'ArticleController@getArticle');
        Route::get('articles/add', 'ArticleController@getAddArticle');
        Route::post('articles/add', 'ArticleController@postAddArticle');
        Route::get('articles/delete/{id}', 'ArticleController@getDeleteArticle');
        Route::post('articles/delete', 'ArticleController@postDeleteArticle');
        Route::get('articles/edit/{id}', 'ArticleController@getEditArticle');
        Route::post('articles/edit/{id}', 'ArticleController@postEditArticle');
        Route::post('articles/sort', 'ArticleController@postSort');
        ///این بخشها نیاز به اصلاح و باز نوشتاری دارند 

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