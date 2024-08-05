<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductVideo extends Model
{
    use SoftDeletes;
    protected $table = 'product_video';
    protected $fillable = [
        'image', 'product_id','type','file','title','time','listorder','status', 'sort' ,'title_seo' , 'description_seo' ,'description'
    ];

    public function product()
    {
        return $this->belongsTo('App\Models\ProductVideo');

    }

}
