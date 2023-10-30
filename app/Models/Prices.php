<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Prices extends Model
{

    protected $table = 'prices';
    use SoftDeletes;
    protected $fillable = [
        'priceable_id' , 'priceable_type','old_price','price' 
    ];


 

    public function priceable()
    {
        return $this->morphTo();
    }


    public function product()
    {
        return $this->belongsTo('App\Models\Product','priceable_id','id');
    }
  


}
