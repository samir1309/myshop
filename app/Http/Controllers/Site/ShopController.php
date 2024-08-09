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
use Carbon\Carbon;  


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
           // بررسی اینکه کاربر وارد شده است یا خیر  
    if (Auth::check()) {  
        $userId = Auth::id();  
    } else {  
        $userId = null;  
        $cookieId = session()->get('custom_data');  
        if ($cookieId == null) {  
           
            $cookieId = strtotime(Carbon::now());
         
            session()->put('custom_data', $cookieId);  
            session()->save();  
        }  
    }  


    
    // بررسی وجود سبد خرید  
    $basket = Basket::authUser()->first();  
    if (!$basket) {  
        $basket = Basket::create([  
            'user_id' => $userId,  
            'cookie_id' => $cookieId,  
        ]);  
    }  
    $basketss = Basket::authUser()->count();  
  
    // بررسی اینکه محصول قبلاً در همین سبد خرید وجود دارد یا خیر  
$existingItem = BasketItem::where('product_id', $id)  
->where('basket_id', $basket->id)  
->first();  

if ($existingItem) {  
 
return redirect()->back()->with('error', 'این محصول قبلاً به سبد خرید اضافه شده است.');  
}  

// افزودن محصول به سبد خرید  
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
        return \redirect()->back()->with('success', 'باموفقیت حذف شد');
       
        
    }  


    public function getBasketCount()  
    {  
        $basket = Basket::authUser()->first();  // دریافت سبد خرید کاربر احراز هویت شده  
        $basketItemsCount = $basket->basketItems()->count(); // دریافت تعداد اقلام در سبد خرید  
    dd($basketItemsCount);
        return response()->json(['basket_count' => $basketItemsCount]);  
    } 




}
