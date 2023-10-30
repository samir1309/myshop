<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password','mobile_confirm','mobile','confirm_code',
        'email_confirm','admin', 'family','temp_password','remember_token'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function setMobileAttribute($value)
    {
       $this->attributes['mobile'] = Helper::persian2LatinDigit($value);
    }
    public function setPasswordAttribute($value)
    {
       $this->attributes['password'] = bcrypt(Helper::persian2LatinDigit($value));
    }
    public function setTempPasswordAttribute($value)
    {
       $this->attributes['temp_password'] = bcrypt(Helper::persian2LatinDigit($value));
    }
}
