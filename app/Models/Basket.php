<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\SoftDeletes;  


class Basket extends Model
{
    use SoftDeletes;  

    protected $fillable = [  
        'user_id',  
        'cookie_id',  

        'address_id',
        'shippingmethod_id',
        'description'

    ];  

    
    public function basketItems()  
    {  
        return $this->hasMany(BasketItem::class);  
        
    }  

    public function products()  
    {  
        return $this->belongsToMany(Product::class, 'basket_items');  
    }  

    // public function scopeAuthUser($query)
    // {
    //     if(Auth::check()){
    //         return $query->where('user_id', Auth::id());
    //     }else{
    //         return $query->where('cookie_id', @$_COOKIE['cookie_id']);
    //     }
    // }

//     public function scopeAuthUser($query)  
// {  
//     if (Auth::check()) {  
//         return $query->where('user_id', Auth::id());  
//     } else {  
//         $cookieId = session()->get('custom_data');  
//         return $query->whereNotNull('cookie_id')->where('cookie_id', $cookieId);  
//     }  
// } 
public function scopeAuthUser($query)  
{  
    if (Auth::check()) {  
        return $query->where('user_id', Auth::id());  
    } else {  
        $cookieId = session()->get('custom_data');  
        return $query->whereNotNull('cookie_id')->where('cookie_id', $cookieId);  
    }  
}  


}
