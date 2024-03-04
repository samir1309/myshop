<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'icon',
        'url',
        'status',
        'title_seo',
        'description_seo',
    ];


    public function defaultImage()
    {
        return asset('assets/site/images/not-found1.png');
    }
    public function blogs()
    {
        return $this->hasMany(\App\Models\Blog::class, 'category_id', 'id');

    }
}
