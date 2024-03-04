<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Redirect extends Model
{
    protected $table='redirects';
    use SoftDeletes;
    protected $fillable=['old_address', 'new_address','type'];
}
