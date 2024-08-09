<?php

namespace App\Providers;

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
    public function bootx()
    {
        view()->composer('*', function ($view) {
            $user = auth()->user();
            $totalItems = 0;
            if ($user) {
                $basketItems = $user->basket->basketItems;
                foreach ($basketItems as $basketItem) {
                    $totalItems += $basketItem->quantity;
                }
            } else {
                $basket = session()->get('basket', []);
                foreach ($basket as $item) {
                    $totalItems += $item['quantity'];
                }
            }
            $view->with('totalCartItems', $totalItems);
        });
    }

    public function boot()
{
    view()->composer('*', function ($view) {
        $user = auth()->user();
        $totalItems = 0;
        if ($user && $user->basket) {
            $basketItems = $user->basket->basketItems;
            foreach ($basketItems as $basketItem) {
                $totalItems += $basketItem->quantity;
            }
        } elseif ($user) {
            // در صورتی که کاربر سبد خرید ندارد
            $user->basket()->create();
        } else {
            $basket = session()->get('basket', []);
            foreach ($basket as $item) {
                $totalItems += $item['quantity'];
            }
        }
        $view->with('totalCartItems', $totalItems);
    });
}
}
