<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Traits\Sluggable;

class Blog extends Model
{
    use HasFactory;
    use Sluggable;
    protected $table = 'blogs';
    protected $fillable = [
        'title',
        'description',
        'image',
        'category_id',
        'url',
        'view',
        'show_homePage',
        'title_seo',
        'description_seo',
        'keyword_meta'
    ];

    public function defaultImage()
    {
        return asset('assets/site/images/not-found1.png');
    }

    public function getShowImageAttribute()
    {
        if($this->attributes['image']){
            return file_exists('assets/uploads/content/art/medium/'.$this->attributes['image']) ? asset('assets/uploads/content/art/medium/' .$this->attributes['image']) :
            asset('assets/admin/images/notfound.jpg');
        }
            else {
                return asset('assets/admin/img/notfound.png');
           
        }
         
    }
   
  
    public function category()
{
    return $this->belongsTo(\App\Models\BlogCategory::class, 'category_id', 'id');

}




}




