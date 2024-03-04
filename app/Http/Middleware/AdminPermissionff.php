<?php
namespace App\Http\Middleware;

use Closure;
use Config;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Route;

class AdminPermission
{

    public function __construct(Guard $auth)
    {

        $this->auth = $auth;

    }
    public function handle($request, Closure $next)
    {

        $segments = $request->segments();
  
        if ($this->auth->check() && $this->auth->user()->admin) {

            $roles = [];
            $user_roles = @$this->auth->user()->roles;
            
            foreach ($user_roles as $role) {

                $permission = unserialize($role->permission);
                if($permission){

                    $roles = array_merge($roles, $permission);
                }
            }

            if ($segments[0] == config('site.admin')) {


                if (in_array(Route::currentRouteName(), $roles)) {

                    return $next($request);
                }
            }
        }


        if ($request->ajax()) {

            return response('Unauthorized.', 401);
        } elseif(!str_contains('api',Route::currentRouteName())) {
            if (Auth::check() and Auth::user()->admin) {
                return redirect('/admin')->with('error', 'شما به این بخش دسترسی ندارید.');
            } else {
                return redirect('/admin/login');
            }
        }
    }

}
