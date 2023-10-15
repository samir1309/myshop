<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Categories extends Model
{
    use SoftDeletes;
    protected $table = 'categories';

    protected $fillable = [
        'title', 'title_en', 'description', 'description_seo','cover',
        'url', 'title_seo', 'keyword' ,'parent_id','status','sort','sortlist'
    ];

    public function parent()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id', 'id')->with('parent');
    }

    public function childs()
    {
        return $this->hasMany('App\Models\Category','parent_id')->orderBy('sort','ASC')->with('childs');
    }
    public function products()
    {
        return $this->belongsToMany('App\Models\Product','product_category','category_id');
    }
    public function category()
    {
        return $this->belongsTo(\App\Models\Category::class, 'parent_id', 'id');
    }
    public function getCatImageAttribute(){
        return file_exists('assets/uploads/content/cat/'.@$this->attributes['cover']) ? asset('assets/uploads/content/cat/'.@$this->attributes['cover']) :asset('assets/site/images/notfound.png');

    }
    use HasFactory;

}
