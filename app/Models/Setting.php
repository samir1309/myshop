<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Setting extends Model
{
    
    use HasFactory;
    protected $table = 'settings';
    use SoftDeletes;
    protected $fillable = [
        'title' ,'image', 'logo' ,'favicon','aboutshort', 'about', 'contact','banner1' ,'banner2', 'description', 'phone', 'email', 'description_seo'
       ,'keywords','title_seo', 'link','code','title_seo', 'description2', 'description3', 'about2'
    ];

}
