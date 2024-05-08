<?php

namespace App\Models;

use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Order extends Model
{
    use SoftDeletes;

    public function getDateOrderAttribute(){
        $date =  jdate('Y/m/d H:i',$this->created_at->timestamp);
          return $date;
      }

      public function scopeAuthUser($query)
      {
          if(Auth::check()){
              return $query->where('user_id', Auth::id());
          }else{
              return $query->where('cookie_id', @$_COOKIE['cookie_id']);
          }
      }
    }


