<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderHistory;
use App\Models\Basket;
use App\Models\BasketItem;
use App\Models\OrderItem;
use App\Models\Product;


class ShopController extends Controller
{
    
  
     public function getBasket()  
{  
    
    $basket = Basket::where('user_id', auth()->id())->first();  
    $basketItems = $basket->basketItems;  

    $totalPrice = 0;  
    foreach ($basketItems as $basketItem) {  
        $totalPrice += $basketItem->product->price * $basketItem->quantity;  
    }  

    return view('site.basket.index', compact('basket', 'basketItems', 'totalPrice')); 
}  


     public function destroy($id, Request $request)  
     {  
         $basketItem = BasketItem::findOrFail($id);  
    
         $basketItem->delete();  
     
         return \redirect()->back()->with('success', 'باموفقیت حذف شد');

     } 

   
    public function addToBasket($id, Request $request)  

    {  
        // اگر کاربر لاگین نکرده باشد  
        if (auth()->guest()) {  
            // ایجاد سبد خرید جدید برای کاربر مهمان  
            $basket = Basket::create([  
                'cookie_id' => $request->cookie('user_cookie'),  
            ]);  

            // افزودن محصول به سبد خرید  
            $basketItem = BasketItem::create([  
                'product_id' => $id,  
                'basket_id' => $basket->id,  
                'quantity' => 1,  
            ]);  

            return redirect()->route('site.basket.index')->with('success', 'محصول با موفقیت به سبد خرید اضافه شد.');  
        }  

        // اگر کاربر لاگین کرده باشد  
        if (auth()->user()->confirm_code == null) {  
            return redirect()->route('panel.login')->with('error', 'لطفا ابتدا حساب کاربری خود را فعال سازی کنید.');  
        }  

        // افزودن محصول به سبد خرید  
        $basket = Basket::where('user_id', auth()->id())->first();  
        if (!$basket) {  
            $basket = Basket::create([  
                'user_id' => auth()->id(),  
            ]);  
        }  

        $basketItem = BasketItem::create([  
            'product_id' => $id,  
            'basket_id' => $basket->id,  
            'quantity' => 1,  
        ]);  
        $basketItems = $basket->basketItems; 
        $totalPrice = 0;  
        foreach ($basketItems as $basketItem) {  
            $totalPrice += $basketItem->product->price * $basketItem->quantity;  
        } 
        return view('site.basket.index', compact('basket', 'basketItems' , 'totalPrice'));  

       
        
    }  





}
