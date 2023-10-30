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



    public function scopeActive($query){
         $records = $query->whereStatus('1');
         return $records;
    }


    public function getProImageAttribute()
    {
       if ($this->attributes['image']) {
          return file_exists('assets/uploads/content/pro/'.$this->attributes['image']) ? asset('assets/uploads/content/pro/'.$this->attributes['image']) : asset('assets/admin/images/notfound.jpg');
       } else {
          return asset('assets/admin/images/notfound.jpg');
       }
    }
 



    public function setPriceAttribute($value)
    {
        $this->attributes['price'] = round(intval(Helper::persian2LatinDigit(str_replace(',','',str_replace('،','',$value)))),-3,PHP_ROUND_HALF_UP);
    }
    
    public function setOldPriceAttribute($value)
    {
        $this->attributes['old_price'] = round(intval(Helper::persian2LatinDigit(str_replace(',','',str_replace('،','',$value)))),-3,PHP_ROUND_HALF_UP);

    }
    public function setDiscountedPriceAttribute($value)
    {
       $this->attributes['discounted_price'] = round(intval(Helper::persian2LatinDigit(str_replace(',','',str_replace('،','',$value)))),-3,PHP_ROUND_HALF_UP);
    }



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
