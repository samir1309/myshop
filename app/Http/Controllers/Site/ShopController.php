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
    $user = auth()->user();  
    if ($user) {  
        $basket = $user->basket()->first();  
        if (!$basket) {  
            // نمایش پیام خطا  
            return view('site.basket.empty', ['message' => 'سبد خرید شما خالی است']);  
        }  

        $basketItems = $basket->basketItems()->with('product')->get();  
        $total = 0;  
        foreach ($basketItems as $item) {  
            $total += $item->quantity * $item->product->price;  
        }  

        return view('site.basket.index', [  
            'basket' => $basket,  
            'basketItems' => $basketItems,  
            'total' => $total,  
        ]);  
    } else {  
        // کاربر لاگین نیست، به صفحه لاگین هدایت میشود  
        return redirect()->route('panel.login');  
    }  
}


    public function destroy($id, Request $request)
    {
        $basketItem = BasketItem::findOrFail($id);
        $basketItem->delete();
        
        return \redirect()->back()->with('success', 'باموفقیت حذف شد');
    }

    // public function addTodBasket($id, Request $request)
    // {
    //     // بررسی اینکه کاربر وارد شده است یا خیر
    //     if (Auth::check()) {
    //         $userId = Auth::id();
    //     } else {
    //         $userId = null;
    //         $cookieId = session()->get('custom_data');
    //         if ($cookieId == null) {
    //             $cookieId = strtotime(Carbon::now());
    //             session()->put('custom_data', $cookieId);
    //             session()->save();
    //         }
    //     }

    //     // بررسی وجود سبد خرید
    //     $basket = Basket::authUser()->first();
    //     if (!$basket) {
    //         $basket = Basket::create([
    //             'user_id' => $userId,
    //             'cookie_id' => $cookieId,
    //         ]);
    //     }

    //     // بررسی اینکه محصول قبلاً در همین سبد خرید وجود دارد یا خیر
    //     $existingItem = BasketItem::where('product_id', $id)
    //         ->where('basket_id', $basket->id)
    //         ->first();

    //     if ($existingItem) {
    //         return redirect()->back()->with('error', 'این محصول قبلاً به سبد خرید اضافه شده است.');
    //     }

    //     // افزودن محصول به سبد خرید
    //     $basketItem = BasketItem::create([
    //         'product_id' => $id,
    //         'basket_id' => $basket->id,
    //         'quantity' => 1,
    //     ]);

    //     // محاسبه مبلغ کل سبد خرید
    //     $basketItems = $basket->basketItems;
    //     $totalPrice = 0;
    //     foreach ($basketItems as $basketItem) {
    //         $totalPrice += $basketItem->product->price * $basketItem->quantity;
    //     }

    //     return \redirect()->back()->with('success', 'محصول با موفقیت به سبد خرید اضافه شد');
    // }
    public function addToBasket($id, Request $request)  
{  
    // بررسی اینکه کاربر وارد شده است یا خیر  
    $user = auth()->user();  
    if ($user) {  
        $userId = $user->id;  
        $basket = $user->basket()->first();  
    } else {  
        $userId = null;  
        $cookieId = session()->get('custom_data');  
        if ($cookieId == null) {  
            $cookieId = strtotime(Carbon::now());  
            session()->put('custom_data', $cookieId);  
            session()->save();  
        }  
        $basket = Basket::where('cookie_id', $cookieId)->first();  
    }  

    // بررسی وجود سبد خرید  
    if (!$basket) {  
        $basket = Basket::create([  
            'user_id' => $userId,  
            'cookie_id' => $cookieId,  
        ]);  
    }  

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

    // محاسبه مبلغ کل سبد خرید  
    $basketItems = $basket->basketItems;  
    $totalPrice = 0;  
    foreach ($basketItems as $basketItem) {  
        $totalPrice += $basketItem->product->price * $basketItem->quantity;  
    }  

    return redirect()->back()->with('success', 'محصول با موفقیت به سبد خرید اضافه شد');  
}

    public function getBasketCount()
    {
        $basketCount = \App\Models\Basket::where('user_id', auth()->id())->count();
        return response()->json(['basketCount' => $basketCount]);
    }

    public function getBasketEmpty()
    {
        return view('site.basket.empty');
    }
}