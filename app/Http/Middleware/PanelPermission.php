<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;


class PanelPermission
{
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }


    public function handle($request,Closure $next){

        if(!$this->auth->check()){
            return redirect()->route('panel.login');

            }

        $user = $this->auth->user();
       
        if($user->mobile_confirm == 1) {
            
            return $next($request);         



            } else {
                return redirect()->route('panel.login');
            }

            }
}
