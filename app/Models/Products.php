<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use SoftDeletes;

    protected $table = 'products';
    use SoftDeletes;
    protected $fillable = [
        'title', 'description', 'status', 'keyword','description_seo',
        'url', 'title_seo','sort','how_to_use','ingredients','like_count','video_link','title_en','price','old_price','stocks',
      'lead','video_link'

    ];

    public function categories()
    {
        return $this->belongsToMany('App\Models\Category','product_category');
    }
    public function cats()
    {
        return $this->belongsToMany('App\Models\Category','product_category')->orderBy('id','desc');
    }
    public function category()
    {
        return $this->belongsToMany('App\Models\Category','product_category')->whereDoesntHave('childs')->orderBy('id','desc');
    }


}
