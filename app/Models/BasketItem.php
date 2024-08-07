<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;  


class BasketItem extends Model
{
    use SoftDeletes;  

    protected $fillable = [  
        'basket_id',  
        'product_id',  
        'quantity',  
    ];  

    public function basket()  
    {  
        return $this->belongsTo(Basket::class);  
    }  

    public function product()  
    {  
        return $this->belongsTo(Product::class);  
    }  
}
