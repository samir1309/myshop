<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Order;
use App\Models\OrderHistory;
use App\Models\OrderItem;
use App\Models\Product;


class ShopController extends Controller
{
    
    public function getAddBasket($id)
    {

        // $order->status = 'پیش فاکتور';

        $currentOrder = Order::authUser()->currentOrder()->first();

        dd($currentOrder);
    }
}
