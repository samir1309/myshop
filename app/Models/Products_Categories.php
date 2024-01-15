<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products_Categories extends Model
{
    protected $table='products_categories';
    protected $fillable = [
        'products_id',
        'categories_id',

    ];
    public function product()
    {
        return $this->belongsTo('App\Models\Products', 'products_id','id');
    }
    public function category()
    {
        return $this->belongsTo('App\Models\Categories', 'categories_id','id');
    }
}
