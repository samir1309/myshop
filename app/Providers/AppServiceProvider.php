<?php

namespace App\Providers;

use App\Models\User;
use App\Models\Order;
use App\Observers\UserObserver;
use App\Observers\OrderObserver;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        require_once app_path('Library/KavenegarSms.php');
        require_once app_path('Library/jdate.php');
        require_once app_path('Library/UploadImg.php');
        require_once app_path('Library/UploadsImg.php');
        require_once app_path('Library/Resizer.php');
        require_once app_path('Library/Helper.php');
//        require_once app_path('Library/Watermark.php');
        require_once app_path('Library/MakeTree.php');

         require_once app_path('Library/composer.php');
        Schema::defaultStringLength(191);
        User :: observe( UserObserver :: class);
        Order :: observe( OrderObserver :: class );
        
        
    }
}
