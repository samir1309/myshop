<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class RoleUser extends Model
{
    protected $table='role_user';
    protected $fillable = [
        'user_id',
        'role_id',

    ];
    public function role()
    {
        return $this->belongsTo('App\Models\Role', 'role_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }


}

