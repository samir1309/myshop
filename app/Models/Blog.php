<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Blog extends Model
{
    protected $table = 'blog';
    use HasFactory;
    use SoftDeletes;

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
   
    public function catBlog()
    {
        return $this->belongsTo('App\Models\BlogCategory', 'category_id', 'id');
    }
}

