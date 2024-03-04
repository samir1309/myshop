<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use SoftDeletes;
    protected $fillable = [
        'file' , 'product_id','thumbnail','product_specification_id','convert','sort','file_webp','img','main_file','old_file' , 
      
      ];

      public function product()
      {
          return $this->belongsTo('App\Models\Product','product_id');
      }
      public function specification()
      {
          return $this->belongsTo('App\Models\Product_Specification','product_specification_id');
      }

}
