<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Library\Helper;


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



    public function roles()
    {
        return $this->belongsToMany('App\Models\Role');
    }

    public function assignRole($role)
    {
        return $this->roles()->attach($role);
    }

    public function deleteRole($role)
    {
        return $this->roles()->detach($role);
    }


    public static function createAdmin() 
    {
      $admin = static::create([
        'name' => 'admin',
        'email' => 'info@site.com',   
        'password' => 'kabin2023',
        'admin' => true
      ]);
    

      return $admin;
    }

    public function basket()
    {
        return $this->hasOne(Basket::class);
    }


    public function hasPermission($access)
    {
        $accessCount = count(explode('.', $access));

        $allPermissions=[];


        foreach ($this->roles as $key=>$userRole) {
      
            if ($key==0){
                $allPermissions = array_merge(unserialize($userRole->permission));

            }else{
                $allPermissions = array_merge(unserialize($userRole->permission),$allPermissions);

            }

        }

            unset($allPermissions['fullAccess']);

        if (@$allPermissions['fullAccess'] == 1) {
            return true;
        }
        if ($accessCount == 1) {

            if (in_array($access, $allPermissions)) {
                return true;
            }
        }
        if (is_array($allPermissions)) {
            if (in_array($access, Arr::dot($allPermissions))) {
                return true;
                   
            }
    
            return false;
        }

        return false;
    }


}
