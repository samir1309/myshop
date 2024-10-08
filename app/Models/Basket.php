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

    public function scopeAuthUser($query)  
    {  
        if (Auth::check()) {  
            return $query->where('user_id', Auth::id());  
        } else {  
            $cookieId = session()->get('custom_data');  
            if ($cookieId) {  
                return redirect()->route('panel.login');  
            } else {  
                return $query->whereNull('user_id')->whereNull('cookie_id');  
            }  
        }  
    }   


}
