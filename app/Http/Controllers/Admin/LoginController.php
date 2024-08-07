<?php

namespace App\Http\Controllers\Admin;
use App\Http\Requests\AdminRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;


class LoginController extends Controller
{ 

    public function logout()
    {
       \Illuminate\Support\Facades\Auth::logout();
        return redirect()->to('/login');

    }
   public function getLogin() {

        return view('auth.login');
   }
   
   public function postLogin(AdminRequest $request)
   {

       $input = $request->all();
      
       $login = Auth::attempt([
           'email' => $request->get('email'),
           'password' => $request->get('password'),
           'admin' => true,
       ]);


       if ($login) {
           return redirect('/admin')->with('success', 'خوش آمدید');
       } else {
           return redirect('/login')->with('error', 'اطلاعات ورودی اشتباه است');
       }
   }

}
