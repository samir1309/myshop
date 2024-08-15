<?php

namespace App\Providers;
use App\Models\Basket;
use App\Models\BasketItem;

use Illuminate\Support\ServiceProvider;

class CartServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */

    //  public function boots()  
    //  {  
    //      view()->composer('*', function ($view) {  
    //          $user = auth()->user();  
    //          $totalItems = 0;  
     
    //          if ($user && $user->basket) {  
    //              $basketItems = $user->basket->basketItems;  
    //              foreach ($basketItems as $basketItem) {  
    //                  $totalItems += $basketItem->quantity;  
    //              }  
    //          } elseif ($user) {  
    //              // در صورتی که کاربر سبد خرید ندارد  
    //              $user->basket()->create();  
    //          } else {  
    //              $basket = session()->get('custom_data', []);  
    //              if (is_array($basket)) {  
    //                  foreach ($basket as $item) {  
    //                      $totalItems += $item['quantity'];  
    //                  }  
    //              } else {  
    //                  // اگر $basket یک عدد است  
    //                  $totalItems = $basket;  
    //              }  
    //          }  
     
    //          $view->with('totalCartItems', $totalItems);  
    //      });  
    //  }
    //  public function bodot()  
    //  {  
    //      view()->composer('*', function ($view) {  
    //          $user = auth()->user();  
    //          $totalItems = 0;  
     
    //          if ($user && $user->basket) {  
    //             $basketItems = $user->basket->basketItems;  
    //             $totalItems = $basketItems->count();  
              
              
    //          } else {  
    //              $basketCookie = session()->get('custom_data', []);  
    //              $basketItems = Basket::where('cookie_id', $basketCookie)->get(); 

    //              if ( $basketItems) {  
    //                  $totalItems = $basketItems->count();  
    //                  $view->with('totalItems', $totalItems);  

                 
    //              } else {  
    //                  $totalItems = 0;  
    //              }  
    //          }  
     
    //      });  
    //  }

     public function boot()  
     {  
         view()->composer('*', function ($view) {  
             $user = auth()->user();  
             $totalCartItems = 0;  
 
             if ($user && $user->basket) {  
                 $totalCartItems = $user->basket->basketItems->count();  
             } else {  
                 $basketCookie = session()->get('custom_data', []);  
                 $basketItems = Basket::where('cookie_id', $basketCookie)->get();  
                 $totalCartItems = $basketItems->count();  
             }  
 
             $view->with('totalCartItems', $totalCartItems);  
         });  
     } 
}
