<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categories extends Model
{
    use SoftDeletes;
    use HasFactory;


    protected $table = 'categories';

    protected $fillable = [
        'title','title_en', 'description', 'description_seo','cover',
        'url', 'title_seo', 'keyword' ,'parent_id','status','color','sort','sortlist'
    ];


    public function scopeActive($query){
        $records = $query->whereStatus('1');
        return $records;
   }

  public function getCatImageAttribute(){
       

        if($this->attributes['cover']){
            return file_exists('assets/uploads/content/cat/medium/'.$this->attributes['cover']) ? asset('assets/uploads/content/cat/medium/' .$this->attributes['cover']) :
            asset('assets/admin/images/notfound.jpg');
        }
            else {
                return asset('assets/admin/img/notfound.png');
           
        }


    }

    public function parent()
    {
        return $this->belongsTo(\App\Models\Categories::class, 'parent_id', 'id')->with('parent');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Categories','parent_id');
    }


    public function products()
    {
        return $this->belongsToMany('App\Models\Products','products_categories','categories_id');
    }
    public function category()
    {
        return $this->belongsTo(\App\Models\Categories::class, 'parent_id', 'id');
    }


}
